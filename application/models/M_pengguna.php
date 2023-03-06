<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_pengguna extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

	public function getUserProfile(string $user_id, array $filter = null){

		$this->db->select('tb_auth.email, tb_auth.password, tb_auth.role, tb_auth.log_time, tb_user.*')
		->from('tb_auth')
		->join('tb_user', 'tb_auth.user_id = tb_user.user_id', 'inner')
		->where('tb_auth.user_id', $user_id);

		$user = $this->db->get()->row();

		if(is_null($user)){
			return [
				'status' => false,
				'data' => null
			];
		}

		$user->gender = !is_null($user->gender) ? $user->gender : '-';
		$user->birthdate = !is_null($user->birthdate) ? $user->birthdate : '-';
		
		$user->phone = !is_null($user->phone) ? $user->phone : '-';
		$user->address = !is_null($user->address) ? $user->address : '-';
		
		$materi = $this->getMateriUser($user_id, $filter);

		$user->list_materi = $materi['list'];
		$user->jumlah_materi = $materi['totalItem'];
		
		
		$transaksi = $this->getTransaksiUser($user_id, $filter);

		$user->list_transaksi = $transaksi['list'];
		$user->jumlah_transaksi = $transaksi['totalItem'];

		return [
			'status' => true,
			'data' => $user
		];
	}

	public function getMateriUser(string $user_id, array $filter = null){
		$this->db->select('m_materi.*, tb_peserta.status as status_peserta, tb_peserta.created_at as take_at')
		->from('tb_peserta')
		->join('m_materi', 'tb_peserta.m_materi_id = m_materi.id', 'inner')
		->where('tb_peserta.user_id', $user_id);

		if(!is_null($filter)){
			if(isset($filter['limit']) && $filter['limit'] > 0){
				$this->db->limit($filter['limit']);
			}
		}

		$data = $this->db->get();

		return [
			'list' => $data->result(),
			'totalItem' => $data->num_rows()
		];
	}

	public function getTransaksiUser(string $user_id, array $filter = null){
		$this->db->select('m_materi.*, tb_payments.status_code, tb_payments.created_at as pay_at')
		->from('tb_payments')
		->join('m_materi', 'tb_payments.reff_id = m_materi.id', 'inner')
		->where('tb_payments.user_id', $user_id);

		if(!is_null($filter)){
			if(isset($filter['limit']) && $filter['limit'] > 0){
				$this->db->limit($filter['limit']);
			}
		}

		$data = $this->db->get();

		return [
			'list' => $data->result(),
			'totalItem' => $data->num_rows()
		];
	}

    public function savePribadi()
    {
        $id = htmlspecialchars($this->session->userdata('user_id'), true);
        $name = htmlspecialchars($this->input->post('name'), true);
        $phone = htmlspecialchars($this->input->post('phone'), true);
        $birthdate = htmlspecialchars($this->input->post('birthdate'), true);
        $gender = htmlspecialchars($this->input->post('gender'), true);
        $address = htmlspecialchars($this->input->post('address'), true);
		
        $data = [
            'name' => $name,
            'phone' => $phone,
            'birthdate' => $birthdate,
            'gender' => $gender,
            'address' => $address
        ];
		
        $this->db->where('user_id', $id);
        $this->db->update('tb_user', $data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    public function ubahPassword()
    {
        $id = htmlspecialchars($this->session->userdata('user_id'), true);
        $password = htmlspecialchars($this->input->post('password'), true);
		
        $data = [
            'password' => password_hash($password, PASSWORD_DEFAULT)
        ];
		
        $this->db->where('user_id', $id);
        $this->db->update('tb_auth', $data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }
}
