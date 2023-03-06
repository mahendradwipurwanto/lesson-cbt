<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengguna extends CI_Controller
{
    protected $_master_password;

    // construct
    public function __construct()
    {
        parent::__construct();
        $this->load->model(['M_pengguna', 'M_auth']);

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
		$data['page_title'] = 'Materi saya';
		$data['sub_page_title'] = 'Daftar riwayat materi yang pernah anda ambil pada akun anda';

		$data['user'] = $this->M_pengguna->getUserProfile($this->session->userdata('user_id'))['data'];
		
        $this->templatepengguna->view('pengguna/materi', $data);
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
