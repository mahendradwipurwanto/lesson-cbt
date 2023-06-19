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
		
		$this->load->library('uploader');
    }

    public function kategori()
    {
		$data['page_title'] = 'Kategori';
		$data['sub_page_title'] = 'Kelola kategori materi anda';
		
        $data['kategori'] = $this->M_master->getAllKategori();
        $this->templateback->view('admin/master/kategori', $data);
    }

    public function bank_soal()
    {
		$data['page_title'] = 'Bank Soal';
		$data['sub_page_title'] = 'Kelola bank soal anda';

		$data['kategori'] = $this->M_master->getAllKategori();
		
        $this->templateback->view('admin/master/soal/bank_soal', $data);
    }

    public function materi()
    {
		$data['page_title'] = 'Materi';
		$data['sub_page_title'] = 'Kelola materi anda';

		$data['kategori'] = $this->M_master->getAllKategori();
		
        $this->templateback->view('admin/master/materi/materi', $data);
    }
    // public function materi()
    // {
	// 	$data['page_title'] = 'Materi';
	// 	$data['sub_page_title'] = 'Kelola seluruh data materi yang anda buat';
		
	// 	$data['count'] = $this->M_master->getCountOverview();

	// 	// SEARCH
	// 	if(!is_null($this->input->post('search'))){
	// 		$this->session->unset_userdata('search');
	// 		$data['search'] = $this->input->post('search');
	// 		$this->session->set_userdata('search', $data['search']);
	// 	}else{
	// 		$data['search'] = $this->session->userdata('search');
	// 	}
		
	// 	if(!is_null($this->input->post('status'))){
	// 		$this->session->unset_userdata('status');
	// 		$data['status'] = $this->input->post('status');
	// 		$this->session->set_userdata('status', $data['status']);
	// 	}else{
	// 		$data['status'] = $this->session->userdata('status');
	// 	}
		
	// 	// PAGINATION
	// 	$this->load->library('pagination');

	// 	// CONFIG
	// 	$config['base_url'] = base_url().'master/materi';
	// 	$config['total_rows'] = $this->M_master->countAllMateri($data['search'], $data['status']);
	// 	$config['per_page'] = 12;
	// 	$config['num_links'] = 3;

	// 	// STYLE
	// 	$config['full_tag_open'] = '<nav aria-label="Page navigation example"><ul class="pagination justify-content-center">';
	// 	$config['full_tag_close'] = '</ul></nav>';

	// 	$config['first_link'] = 'First';
	// 	$config['first_tag_open'] = '<li class="page-item">';
	// 	$config['first_tag_close'] = '</li>';

	// 	$config['last_link'] = 'Last';
	// 	$config['last_tag_open'] = '<li class="page-item">';
	// 	$config['last_tag_close'] = '</li>';

	// 	$config['next_link'] = '»';
	// 	$config['next_tag_open'] = '<li class="page-item">';
	// 	$config['next_tag_close'] = '</li>';

	// 	$config['prev_link'] = '«';
	// 	$config['prev_tag_open'] = '<li class="page-item">';
	// 	$config['prev_tag_close'] = '</li>';

	// 	$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
	// 	$config['cur_tag_close'] = '</a></li>';

	// 	$config['num_tag_open'] = '<li class="page-item">';
	// 	$config['num_tag_close'] = '</li>';

	// 	$config['attributes'] = ['class' => 'page-link'];

	// 	// INITIALIZE
	// 	$this->pagination->initialize($config);
		
	// 	$data['start'] = $this->uri->segment(3);
	// 	$data['materi'] = $this->M_master->getAllMateri([], $config['per_page'], $data['start'], $data['search'], $data['status']);

    //     $this->templateback->view('admin/master/materi/list', $data);
    // }

    public function riwayatMateri()
    {
		$data['page_title'] = 'Riwayat Materi';
		$data['sub_page_title'] = 'Kelola seluruh riwayat materi yang pernah anda buat';
		
		$data['count'] = $this->M_master->getCountOverview();

		// SEARCH
		if(!is_null($this->input->post('search'))){
			$this->session->unset_userdata('search');
			$data['search'] = $this->input->post('search');
			$this->session->set_userdata('search', $data['search']);
		}else{
			$data['search'] = $this->session->userdata('search');
		}
		
		if(!is_null($this->input->post('status'))){
			$this->session->unset_userdata('status');
			$data['status'] = $this->input->post('status');
			$this->session->set_userdata('status', $data['status']);
		}else{
			$data['status'] = $this->session->userdata('status');
		}
		
		// PAGINATION
		$this->load->library('pagination');

		// CONFIG
		$config['base_url'] = base_url().'master/materi/riwayat';
		$config['total_rows'] = $this->M_master->countAllMateriRiwayat($data['search'], $data['status']);
		$config['per_page'] = 12;
		$config['num_links'] = 3;

		// STYLE
		$config['full_tag_open'] = '<nav aria-label="Page navigation example"><ul class="pagination justify-content-center">';
		$config['full_tag_close'] = '</ul></nav>';

		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';

		$config['next_link'] = '»';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = '«';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
		$config['cur_tag_close'] = '</a></li>';

		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';

		$config['attributes'] = ['class' => 'page-link'];

		// INITIALIZE
		$this->pagination->initialize($config);
		
		$data['start'] = $this->uri->segment(3);
		$data['materi'] = $this->M_master->getAllMateriRiwayat([], $config['per_page'], $data['start'], $data['search'], $data['status']);

        $this->templateback->view('admin/master/materi/riwayat', $data);
    }

    public function initBuatMateri()
    {
		$materi = $this->M_master->buatMateri();

		if($materi['status'] == true){
			$this->session->set_flashdata('notif_success', 'Berhasil membuat materi, silahkan isi data materi');
			$this->session->set_userdata('materi', $materi['data']);
			redirect(site_url('master/buat-materi/'.$materi['data']->id));
		}else{
			$this->session->unset_userdata('materi');
			$this->session->set_flashdata('notif_warning', 'Terjadi kesalahan saat mencoba membuat materi');
			redirect($this->agent->referrer());
		}
    }

    public function buatMateri($id = null)
    {
		$data['page_title'] = 'Buat Materi';
		$data['sub_page_title'] = 'Buat materi baru untuk website anda';
			
		if(!is_null($id)){
			$data['kategori'] = $this->M_master->getAllKategori();
			$data['materi'] = $this->M_master->getMateriById($id);
			$this->templateback->view('admin/master/materi/buat', $data);
		}else{
			$this->session->set_flashdata('notif_warning', 'Tidak dapat menemukan data materi apapun untuk memulai membuat materi');
			redirect(site_url('master/materi'));
		}

    }

    public function savePanduan()
    {
        if ($this->M_master->savePanduan() == true) {
            $this->session->set_flashdata('notif_success', 'Berhasil menyimpan panduan');
            redirect($this->agent->referrer());
        } else {
            $this->session->set_flashdata('notif_warning', 'Terjadi kesalahan saat mencoba menyimpan panduan');
            redirect($this->agent->referrer());
        }
    }

    public function saveMateri()
    {
		// Check if file called "poster" exists and has been uploaded
		if(isset($_FILES['image']) && $_FILES['image']['error'] !== UPLOAD_ERR_NO_FILE){
			$path = 'berkas/materi/'.$this->input->post('id').'/';
			$file = $this->uploader->uploadImage($_FILES['image'], $path)['filename'];
		}else{
			$file = null;
		}

        if ($this->M_master->saveMateri($file) == true) {
            $this->session->set_flashdata('notif_success', 'Berhasil menyimpan materi');
            redirect($this->agent->referrer());
        } else {
            $this->session->set_flashdata('notif_warning', 'Terjadi kesalahan saat mencoba menyimpan materi');
            redirect($this->agent->referrer());
        }
    }

    public function aktifMateri()
    {
        if ($this->M_master->aktifMateri() == true) {
            $this->session->set_flashdata('notif_success', 'Berhasil mengaktifkan materi');
            redirect($this->agent->referrer());
        } else {
            $this->session->set_flashdata('notif_warning', 'Terjadi kesalahan saat mencoba mengaktifkan materi');
            redirect($this->agent->referrer());
        }
    }

    public function arsipMateri()
    {
        if ($this->M_master->arsipMateri() == true) {
            $this->session->set_flashdata('notif_success', 'Berhasil mengarsipkan materi');
            redirect($this->agent->referrer());
        } else {
            $this->session->set_flashdata('notif_warning', 'Terjadi kesalahan saat mencoba mengarsipkan materi');
            redirect($this->agent->referrer());
        }
    }

    public function deleteMateri()
    {
        if ($this->M_master->deleteMateri() == true) {
            $this->session->set_flashdata('notif_success', 'Berhasil menghapus materi');
            redirect($this->agent->referrer());
        } else {
            $this->session->set_flashdata('notif_warning', 'Terjadi kesalahan saat mencoba menghapus materi');
            redirect($this->agent->referrer());
        }
    }

    public function buatSoal($id = null, $soal_id = null)
    {
		$data['page_title'] = 'Buat Soal';
		$data['sub_page_title'] = 'Buat soal untuk materi anda';
		
        $data['kategori'] = $this->M_master->getAllKategori();
        $data['materi'] = $this->M_master->getMateriById($id);
        $data['list_soal'] = $this->M_master->getListSoalByMateri($id);
		$data['soal'] = $this->M_master->getDetailSoalById($id, $soal_id);
		$data['soal_id'] = $soal_id;
        $this->templateback->view('admin/master/soal/module_soal', $data);
    }

	function tambahSoal($materi_id = null, $mode = 'buat-soal'){

		$result = $this->M_master->tambahSoal($materi_id);

        if ($result['status'] == true) {
            $this->session->set_flashdata('notif_success', 'Berhasil menambahkan soal');
            redirect(site_url('master/'.$mode.'/'.$materi_id.'/soal/'.$result['data']->id));
        } else {
            $this->session->set_flashdata('notif_warning', 'Terjadi kesalahan saat mencoba menambahkan soal');
            redirect($this->agent->referrer());
        }
	}

    public function deleteSoal()
    {
        if ($this->M_master->deleteSoal() == true) {
            $this->session->set_flashdata('notif_success', 'Berhasil menghapus soal');
            redirect(site_url('master/'.$this->input->post('mode').'/'.$this->input->post('materi_id').'/soal/'.$this->input->post('soal_id')));
        } else {
            $this->session->set_flashdata('notif_warning', 'Terjadi kesalahan saat mencoba menghapus soal');
            redirect($this->agent->referrer());
        }
    }

    public function saveSoal()
    {
        if ($this->M_master->saveSoal() == true) {
            $this->session->set_flashdata('notif_success', 'Berhasil menyimpan soal');
            redirect(site_url('master/'.$this->input->post('mode').'/'.$this->input->post('materi_id').'/soal/'.$this->input->post('soal_id')));
        } else {
            $this->session->set_flashdata('notif_warning', 'Terjadi kesalahan saat mencoba menyimpan soal');
            redirect($this->agent->referrer());
        }
    }

    public function midtrans()
    {
		$data['page_title'] = 'Midtrans';
		$data['sub_page_title'] = 'Kelola pengaturan midtrans';

        $data['_midtrans_prod']             = $this->M_master->getMidtransPaymentsSettings('_midtrans_prod');
        $data['_server_key_sandbox']        = $this->M_master->getMidtransPaymentsSettings('_server_key_sandbox');
        $data['_client_key_sandbox']        = $this->M_master->getMidtransPaymentsSettings('_client_key_sandbox');
        $data['_server_key_production']     = $this->M_master->getMidtransPaymentsSettings('_server_key_production');
        $data['_client_key_production']     = $this->M_master->getMidtransPaymentsSettings('_client_key_production');
		
        $this->templateback->view('admin/master/midtrans', $data);
    }

    public function ubahMidtrans()
    {
        if ($this->M_master->ubahMidtrans() == true) {
            $this->session->set_flashdata('notif_success', 'Berhasil mengubah pengaturan midtrans');
            redirect(site_url('master/midtrans'));
        } else {
            $this->session->set_flashdata('notif_warning', 'Terjadi kesalahan saat mengubah pengaturan midtrans');
            redirect(site_url('master/midtrans'));
        }
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
