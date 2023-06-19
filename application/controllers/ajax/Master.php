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
            $this->session->set_flashdata('notif_warning', "Harap login untuk melanjutkan");
            redirect('sign-in');
        }

        if ($this->session->userdata('role') > 1) {
            $this->session->set_flashdata('warning', "Anda tidak memiliki akses pada halaman ini");
            redirect(base_url());
        }
    }
	
	public function getIndexPanduan(){
		
		$id = $this->input->post('id');

		$data['materi'] = $this->M_master->getMateriById($id);

		$this->load->view('admin/master/materi/ajax/index_panduan', $data);
	}
    
    public function getAjaxSoal(){
        $soal  = $this->M_master->getAllSoal(['type' => 0]);
        
        $draw     = $this->input->post('draw');
        $search   = $this->input->post('search')['value'];
        $arr      = [];
        $no       = $this->input->post('start');

        foreach ($soal['records'] as $key => $val) {

            $arr[$key] = [
                "no"            => ++$no,
                "action"        => $val->action,
                "judul"         => $val->judul,
                "kategori"      => $val->categories,
                "harga"         => $val->harga,
                "module"        => $val->module,
                "peserta"       => $val->peserta,
                "status"        => $val->status,
            ];
        }

        $response = array(
            "draw" => intval($draw),
            "recordsTotal" => $soal['totalRecords'],
            "recordsFiltered" => ($search != "" ? $soal['totalDisplayRecords'] : $soal['totalRecords']),
            "data" => $arr
        );

        echo json_encode($response);
    }

    public function getDetailSoal(){

        $soal = $this->M_master->getDetailSoal($this->input->post('user_id'));
		if (!empty($soal)) {
        
            $data['soal'] = $soal;

            $this->load->view('admin/ajax/detail_soal', $data);

		} else {
			echo "<center class='py-5'><h4>Terjadi kesalahan saat mencoba menampilkan data soal!</h4></center>";
		}
    }
    
    public function getAjaxMateri(){
        $materi  = $this->M_master->getAllSoal(['type' => 1]);
        
        $draw     = $this->input->post('draw');
        $search   = $this->input->post('search')['value'];
        $arr      = [];
        $no       = $this->input->post('start');

        foreach ($materi['records'] as $key => $val) {

            $arr[$key] = [
                "no"            => ++$no,
                "action"        => $val->action,
                "judul"         => $val->judul,
                "kategori"      => $val->categories,
                "harga"         => $val->harga,
                "module"        => $val->module,
                "peserta"       => $val->peserta,
                "status"        => $val->status,
            ];
        }

        $response = array(
            "draw" => intval($draw),
            "recordsTotal" => $materi['totalRecords'],
            "recordsFiltered" => ($search != "" ? $materi['totalDisplayRecords'] : $materi['totalRecords']),
            "data" => $arr
        );

        echo json_encode($response);
    }

    public function getDetailMateri(){

        $materi = $this->M_master->getDetailMateri($this->input->post('user_id'));
		if (!empty($materi)) {
        
            $data['materi'] = $materi;

            $this->load->view('admin/ajax/materi', $data);

		} else {
			echo "<center class='py-5'><h4>Terjadi kesalahan saat mencoba menampilkan data materi!</h4></center>";
		}
    }
}
