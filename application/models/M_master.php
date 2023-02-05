<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_master extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
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
}
