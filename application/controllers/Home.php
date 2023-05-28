<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    // construct
    public function __construct()
    {
        parent::__construct();
        $this->load->model(['M_home', 'M_master']);
    }

    public function index()
    {
		$data['materi'] = $this->M_master->getAllMateri();

        $this->templatefront->view('home/home', $data);
    }

    public function materi()
    {
		$data['materi'] = $this->M_master->getAllMateri();
        $this->templatefront->view('home/materi', $data);
    }

    public function detail_materi($id = null)
    {
		$data['materi'] = $this->M_master->getMateriById($id);
		$data['cek_materi'] = $this->M_home->cekAmbilMateri($id);
        $this->templatefront->view('home/detail_materi', $data);
    }

    public function tentang_kami()
    {
        $this->templatefront->view('home/tentang');
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
        if ($this->M_home->ambilMateri($id) == true) {
            $this->session->set_flashdata('toast', 'Berhasil mengambil materi');
            redirect(site_url('materi/'.$id));
        } else {
            $this->session->set_flashdata('toast', 'Terjadi kesalahan saat mencoba mengambil materi');
            redirect($this->agent->referrer());
        }
    }
}
