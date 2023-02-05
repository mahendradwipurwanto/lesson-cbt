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
		
        $data['kategori'] = $this->M_master->getAllKategori();
        $this->templateback->view('admin/master/kategori', $data);
    }

    public function materi()
    {
		$data['page_title'] = 'Materi';
		$data['sub_page_title'] = 'Kelola seluruh data materi yang anda buat';
		
        $this->templateback->view('admin/master/materi/list', $data);
    }

    public function midtrans()
    {
		$data['page_title'] = 'Materi';
		$data['sub_page_title'] = 'Kelola pengaturan midtrans';
		
        $this->templateback->view('admin/master/midtrans', $data);
    }

    public function saveKategori()
    {
        if ($this->M_master->saveKategori() == true) {
            $this->session->set_flashdata('notif_success', 'Berhasil menyimpan kategori');
            redirect($this->agent->referrer());
        } else {
            $this->session->set_flashdata('notif_warning', 'Terjadi kesalahan saat mencoba menyimpan kategori');
            redirect($this->agent->referrer());
        }
    }

    public function deleteKategori()
    {
        if ($this->M_master->deleteKategori() == true) {
            $this->session->set_flashdata('notif_success', 'Berhasil menghapus kategori');
            redirect($this->agent->referrer());
        } else {
            $this->session->set_flashdata('notif_warning', 'Terjadi kesalahan saat mencoba menghapus kategori');
            redirect($this->agent->referrer());
        }
    }
}
