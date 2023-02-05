<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    // construct
    public function __construct()
    {
        parent::__construct();
        $this->load->model(['M_admin']);

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

    public function index()
    {
		$data['page_title'] = 'Dashboard';
		$data['sub_page_title'] = 'Selamat datang';
		
        $this->templateback->view('admin/dashboard', $data);
    }

    public function statistik()
    {
		$data['page_title'] = 'Statistik';
		$data['sub_page_title'] = 'Seluruh statistik tentang website anda';
		
        $this->templateback->view('admin/statistik', $data);
    }

    public function member()
    {
		$data['page_title'] = 'Member';
		$data['sub_page_title'] = 'Kelol seluruh data member yang telah terdaftar';
		
        $this->templateback->view('admin/member', $data);
    }
}
