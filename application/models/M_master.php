<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_master extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    function getCountOverview(){

        $materi = $this->db->get_where('m_materi', ['is_deleted' => 0])->num_rows();
        $draft = $this->db->get_where('m_materi', ['status' => 0, 'is_deleted' => 0])->num_rows();
        $aktif = $this->db->get_where('m_materi', ['status' => 1, 'is_deleted' => 0])->num_rows();
        $peserta = $this->db->get_where('tb_peserta', ['status >' => 0, 'is_deleted' => 0])->num_rows();
        
        return [
            'materi' => $materi,
            'draft' => $draft,
            'aktif' => $aktif,
            'peserta' => $peserta
        ];
    }

    public function getAllKategori()
    {
        return $this->db->get_where('m_categories', ['is_deleted' => 0])->result();
    }

    public function saveKategori()
    {
        $id = htmlspecialchars($this->input->post('id'), true);
        $categories = htmlspecialchars($this->input->post('categories'), true);
        $description = htmlspecialchars($this->input->post('description'), true);

        $categories = [
            'categories' => $categories,
            'description' => $description,
            'created_at' => time(),
            'created_by' => $this->session->userdata('user_id')
        ];
        if (isset($id) && $id != '') {
            $this->db->where('id', $id);
            $this->db->update('m_categories', $categories);
            return ($this->db->affected_rows() != 1) ? false : true;
        } else {
            $this->db->insert('m_categories', $categories);
            return ($this->db->affected_rows() != 1) ? false : true;
        }
    }

    public function deleteKategori()
    {
        $id = htmlspecialchars($this->input->post('id'), true);

        $this->db->where('id', $id);
        $this->db->update('m_categories', ['is_deleted' => 1]);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    public function getAllMateri($limit = 12, $offset = 0, $search = null, $status = null)
    {
        $this->db->select('m_materi.*, m_categories.categories')
		->from('m_materi')
		->join('m_categories', 'm_materi.m_kategori_id = m_categories.id', 'left')
		->where(['m_materi.is_deleted' => 0, 'status <'=> 2]);
		
		if(!is_null($search) && $search != ''){
			$this->db->like('m_materi.judul', $search);
			$this->db->or_like('m_materi.deskripsi', $search);
		}

		if(!is_null($status) && $status != '' && $status != '-1'){
			$this->db->where('m_materi.status', $status);
		}
		
		$this->db->limit($limit, $offset);

		$this->db->order_by('m_materi.created_at DESC');

		$data = $this->db->get()->result();

		$arr = [];
		if(!empty($data)){
			foreach($data as $key => $val){
				$arr[$key] = $val;
				$arr[$key]->konten = $this->countKontenByMateri($val->id);
				$arr[$key]->soal = $this->countSoalByMateri($val->id);
				$arr[$key]->peserta = $this->countPesertaByMateri($val->id);
			}
		}

		return $arr;

    }

    public function countAllMateri($search = null, $status)
    {
        $this->db->select('m_materi.*')
		->from('m_materi')
		->where(['m_materi.is_deleted' => 0, 'status <' => 2]);

		if(!is_null($search)){
			$this->db->like('m_materi.judul', $search);
			$this->db->or_like('m_materi.deskripsi', $search);
		}

		if(!is_null($status)){
			$this->db->where('m_materi.status', $status);
		}

		$data = $this->db->get()->num_rows();

		return $data;
    }

    public function countKontenByMateri($m_materi_id = null)
    {
        $this->db->select('m_materi_konten.*')
		->from('m_materi_konten')
		->where(['m_materi_konten.m_materi_id' => $m_materi_id, 'm_materi_konten.is_deleted' => 0]);

		$data = $this->db->get()->num_rows();

		return $data;
    }

    public function countSoalByMateri($m_materi_id = null)
    {
        $this->db->select('m_materi_soal.*')
		->from('m_materi_soal')
		->where(['m_materi_soal.m_materi_id' => $m_materi_id, 'm_materi_soal.is_deleted' => 0]);

		$data = $this->db->get()->num_rows();

		return $data;
    }

    public function countPesertaByMateri($m_materi_id = null)
    {
        $this->db->select('tb_peserta.*')
		->from('tb_peserta')
		->where(['tb_peserta.m_materi_id' => $m_materi_id, 'tb_peserta.is_deleted' => 0]);

		$data = $this->db->get()->num_rows();

		return $data;
    }

    public function saveMateri()
    {
        $id = htmlspecialchars($this->input->post('id'), true);
        $categories = htmlspecialchars($this->input->post('categories'), true);
        $description = htmlspecialchars($this->input->post('description'), true);

        $categories = [
            'categories' => $categories,
            'description' => $description,
            'created_at' => time(),
            'created_by' => $this->session->userdata('user_id')
        ];
        if (isset($id) && $id != '') {
            $this->db->where('id', $id);
            $this->db->update('m_categories', $categories);
            return ($this->db->affected_rows() != 1) ? false : true;
        } else {
            $this->db->insert('m_categories', $categories);
            return ($this->db->affected_rows() != 1) ? false : true;
        }
    }

    public function arsipMateri()
    {
        $id = htmlspecialchars($this->input->post('id'), true);

        $this->db->where('id', $id);
        $this->db->update('m_materi', ['status' => 2]);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    public function deleteMateri()
    {
        $id = htmlspecialchars($this->input->post('id'), true);

        $this->db->where('id', $id);
        $this->db->update('m_materi', ['is_deleted' => 1]);
        return ($this->db->affected_rows() != 1) ? false : true;
    }
}
