<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    // construct
    public function __construct()
    {
        parent::__construct();
        $this->load->model(['M_admin', 'M_pengguna']);

        // cek apakah user sudah login
        if ($this->session->userdata('logged_in') == false || !$this->session->userdata('logged_in')) {
            if (!empty($_SERVER['QUERY_STRING'])) {
                $uri = uri_string() . '?' . $_SERVER['QUERY_STRING'];
            } else {
                $uri = uri_string();
            }
            $this->session->set_userdata('redirect', $uri);
            $this->session->set_flashdata('notif_warning', "Harap login untuk melanjutkan");
            redirect('sign-in');
        }

        if ($this->session->userdata('role') > 1) {
            $this->session->set_flashdata('warning', "Anda tidak memiliki akses pada halaman ini");
            redirect(base_url());
        }
    }
    
    public function getAjaxMember(){
        $members  = $this->M_admin->getAllMember();
        
        $draw     = $this->input->post('draw');
        $search   = $this->input->post('search')['value'];
        $arr      = [];
        $no       = $this->input->post('start');

        foreach ($members['records'] as $key => $val) {

            $arr[$key] = [
                "no"            => ++$no,
                "action"        => $val->action,
                "name"          => $val->name,
                "email"         => $val->email,
                "whatsapp"      => $val->phone,
                "status"        => $val->status,
            ];
        }

        $response = array(
            "draw" => intval($draw),
            "recordsTotal" => $members['totalRecords'],
            "recordsFiltered" => ($search != "" ? $members['totalDisplayRecords'] : $members['totalRecords']),
            "data" => $arr
        );

        echo json_encode($response);
    }

    public function getDetailMember(){

        $member = $this->M_admin->getDetailMember($this->input->post('user_id'));
        $materi = $this->M_pengguna->getMateriUser($this->input->post('user_id'));
		if (!empty($member)) {
        
            $data['member'] = $member;
            $data['materi'] = $materi;

            $this->load->view('admin/ajax/detail_member', $data);

		} else {
			echo "<center class='py-5'><h4>Terjadi kesalahan saat mencoba menampilkan data member!</h4></center>";
		}
    }
}
