<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    // construct
    public function __construct()
    {
        parent::__construct();
        $this->load->model(['M_pengguna', 'M_home', 'M_master']);
    }

    public function index()
    {
		$data['materi_overview'] = $this->M_master->getAllMateri([]);
		$data['materi'] = $this->M_master->getAllMateri(['type' => 1]);
		$data['materi_soal'] = $this->M_master->getAllMateri(['type' => 0]);

        $this->templatefront->view('home/home', $data);
    }

    public function materi()
    {
		$data['materi'] = $this->M_master->getAllMateri(['type' => 1]);
		$data['materi_soal'] = $this->M_master->getAllMateri(['type' => 0]);
        $this->templatefront->view('home/materi', $data);
    }

    public function detail_materi($id = null)
    {
        
        $data['materi'] = $this->M_master->getMateriById($id);
        if(is_null($data['materi'])){
			$this->session->set_flashdata('toast', 'Tidak dapat menemukan materi !');
			redirect(site_url('materi'));
        }
		$data['cek_materi'] = $this->M_home->cekAmbilMateri($id);
		$data['proses_pengerjaan'] = $this->M_pengguna->cekProsesPengerjaan($id);
		$data['retake'] = $data['materi']->retake == 1 && !$data['cek_materi'];
		$data['cek_pengerjaan'] = $this->M_pengguna->cekPengerjaan($id);
		$data['cek_pengambilan'] = $this->M_pengguna->cekPengambilan($id);
        $this->templatefront->view('home/detail_materi', $data);
    }

    public function tentang_kami()
    {
        $data['count'] = $this->M_home->getCount();
        $this->templatefront->view('home/tentang', $data);
    }

    public function ambilMateri($id)
    {
		if(!$this->session->userdata('logged_in')){
            if (!empty($_SERVER['QUERY_STRING'])) {
                $uri = uri_string() . '?' . $_SERVER['QUERY_STRING'];
            } else {
                $uri = uri_string();
            }
            $this->session->set_userdata('redirect', $uri);
            $this->session->set_flashdata('notif_warning', "Harap login untuk melanjutkan aktivitas anda");
            redirect('login');
		}

		$materi = $this->M_master->getMateriById($id);
		$cek_materi = $this->M_home->cekAmbilMateri($id);
        if ($this->M_home->ambilMateri($id) == true) {
            if($materi->retake == 1 && $cek_materi){
                $this->session->set_flashdata('toast', 'Berhasil mengulang soal');
                redirect(site_url('pengguna/materi/peraturan/'.$id));
            }
            $this->session->set_flashdata('toast', 'Berhasil mengambil materi');
            redirect(site_url('materi/'.$id));
        } else {
            $this->session->set_flashdata('toast', 'Terjadi kesalahan saat mencoba mengambil materi');
            redirect($this->agent->referrer());
        }
    }
}
