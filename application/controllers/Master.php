<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Master extends CI_Controller
{

    // construct
    public function __construct()
    {
        parent::__construct();
        $this->load->model(['M_master']);

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

        if ($this->session->userdata('role') > 1) {
            $this->session->set_flashdata('warning', "You don`t have access to this page");
            redirect(base_url());
        }
    }

    public function kategori()
    {
		$data['page_title'] = 'Kategori';
		$data['sub_page_title'] = 'Kelola kategori materi anda';
		
        $this->templateback->view('master/kategori', $data);
    }

    public function materi()
    {
		$data['page_title'] = 'Materi';
		$data['sub_page_title'] = 'Kelola seluruh data materi yang anda buat';
		
        $this->templateback->view('master/materi/list', $data);
    }

    public function midtrans()
    {
		$data['page_title'] = 'Materi';
		$data['sub_page_title'] = 'Kelola pengaturan midtrans';
		
        $this->templateback->view('master/midtrans', $data);
    }
}
