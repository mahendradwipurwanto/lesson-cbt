<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_home extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

	function ambilMateri($id = null){

        $materi = [
            'user_id' => $this->session->userdata('user_id'),
            'm_materi_id' => $id,
            'created_at' => time(),
            'created_by' => $this->session->userdata('user_id')
        ];

        $this->db->insert('tb_peserta', $materi);
        return ($this->db->affected_rows() != 1) ? false : true;
	}

	function cekAmbilMateri($id = null){
		$data = $this->db->get_where('tb_peserta', ['m_materi_id' => $id, 'user_id' => $this->session->userdata('user_id')])->result();

		if(!empty($data)){
			return true;
		}else{
			return false;
		}
	}

    function getCount(){
        $pengguna = $this->db->get_where('tb_auth', ['role' => 2])->num_rows();
        $soal = $this->db->get_where('m_materi', ['type' => 0, 'is_deleted' => 0])->num_rows();
        $materi = $this->db->get_where('m_materi', ['type' => 1, 'is_deleted' => 0])->num_rows();

        return [
            'pengguna' => $pengguna,
            'soal' => $soal,
            'materi' => $materi
        ];
    }
}
