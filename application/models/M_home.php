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
}
