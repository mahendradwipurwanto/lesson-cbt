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
        $this->db->select('tb_peserta.status as status_peserta, tb_peserta.created_at as tanggal_pengambilan, m_materi.*, m_materi.type as materi_type, m_categories.categories, m_materi_level.level')
		->from('tb_peserta')
		->join('m_materi', 'tb_peserta.m_materi_id = m_materi.id', 'left')
		->join('m_categories', 'm_materi.m_kategori_id = m_categories.id', 'left')
		->join('m_materi_level', 'm_materi.m_level_id = m_materi_level.id', 'left')
		->where('tb_peserta.user_id', $user_id)
		->group_by('tb_peserta.m_materi_id', 'tb_peserta.user_id');

		if(!is_null($filter)){
			if(isset($filter['limit']) && $filter['limit'] > 0){
				$this->db->limit($filter['limit']);
			}
		}

		$data = $this->db->get()->result();

		$arr = [];
		if(!empty($data)){
			foreach ($data as $key => $val) {
				$arr[$key] = $val;

				$detail = $this->getDetailSoal($val->id, $val->materi_type);

				$arr[$key]->total_peserta = $detail['total_peserta'];
				$arr[$key]->total_module = $detail['total_module'];
				$arr[$key]->rating = $detail['rating'];

				if($val->status_peserta == 0){
					$status_txt = "Menunggu";
				}else if($val->status_peserta == 1){
					$status_txt = "Dalam pengerjaan";
				}else if($val->status_peserta == 1){
					$status_txt = "Sudah dikerjakan";
				}else{
					$status_txt = "Menunggu";
				}

				$arr[$key]->status_txt = $status_txt;

				$tanggal_txt = date("d F Y", ($val->tanggal_pengambilan));

				$arr[$key]->tanggal_txt = $tanggal_txt;
			}
		}

		return [
			'list' => $arr,
			'totalItem' => count($arr)
		];
	}

	function getDetailSoal($id = null, $type = null){
		$total_peserta = $this->db->get_where('tb_peserta', ['m_materi_id' => $id, 'is_deleted' => 0])->num_rows();

		if($type == 0){
			$table_module = 'm_materi_soal';
		}else{
			$table_module = 'm_materi_konten';
		}
		$total_module = $this->db->get_where($table_module, ['m_materi_id' => $id, 'is_deleted' => 0])->num_rows();

		$rating = $this->db->select_avg('rate')->get_where('tb_rating', ['m_materi_id' => $id, 'is_deleted' => 0])->row()->rate;

		return [
			'total_peserta' => $total_peserta,
			'total_module' => $total_module,
			'rating' => !is_null($rating) ? $rating : 0
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

	public function getMateriSaya($user_id, $limit = 12, $offset = 0){
        $this->db->select('tb_peserta.*, tb_peserta.status as status_peserta, tb_peserta.created_at as tanggal_pengambilan, m_materi.*, m_categories.categories')
		->from('tb_peserta')
		->join('m_materi', 'tb_peserta.m_materi_id = m_materi.id', 'left')
		->join('m_categories', 'm_materi.m_kategori_id = m_categories.id', 'left')
		->where(['m_materi.is_deleted' => 0, 'tb_peserta.user_id' => $user_id]);
		
		$this->db->limit($limit, $offset);

		$this->db->order_by('m_materi.created_at DESC');

		$data = $this->db->get()->result();

		$arr = [];
		if(!empty($data)){
			foreach ($data as $key => $val) {
				$arr[$key] = $val;

				if($val->status_peserta == 0){
					$status_txt = "Menunggu";
				}else if($val->status_peserta == 1){
					$status_txt = "Dalam pengerjaan";
				}else if($val->status_peserta == 1){
					$status_txt = "Sudah dikerjakan";
				}else{
					$status_txt = "Menunggu";
				}

				$arr[$key]->status_txt = $status_txt;

				$tanggal_txt = date("d F Y", ($val->tanggal_pengambilan));

				$arr[$key]->tanggal_txt = $tanggal_txt;
			}
		}

		return $data;
	}

	public function getDetailSoalById($materi_id = null, $id = null){
		$this->db->select('*')
		->from('m_materi_soal')
		->where(['m_materi_soal.m_materi_id' => $materi_id, 'id' => $id, 'm_materi_soal.is_deleted' => 0]);

		$data = $this->db->get()->row();

		if(!is_null($data)){
			$jawaban = $this->getJawabanPeserta($this->session->userdata('user_id'), $materi_id, $id);

			if(isset($jawaban->pilihan) && !is_null($jawaban->pilihan)){
				$data->jawaban_peserta = $jawaban->pilihan;
			}else{
				$data->jawaban_peserta = 0;
			}
		}

		return $data;
	}

	public function getJawabanPeserta($user_id, $materi_id, $id){
		$this->db->select('tb_peserta.*, tb_peserta_jawaban.*')
		->from('tb_peserta')
		->join('tb_peserta_jawaban' , 'tb_peserta.id = tb_peserta_jawaban.t_peserta_id')
		->where(['tb_peserta.user_id' => $user_id, 'tb_peserta.m_materi_id' => $materi_id, 'tb_peserta_jawaban.m_soal_id' => $id]);
		$data = $this->db->get()->row();

		return $data;
	}

    public function simpanJawbanSoal()
    {
        $t_peserta_id = htmlspecialchars($this->input->post('t_peserta_id'), true);
        $soal_id = htmlspecialchars($this->input->post('soal_id'), true);
        $is_essay = htmlspecialchars($this->input->post('is_essay'), true);
        $pilihan = htmlspecialchars($this->input->post('jawaban'), true);
        $essay = htmlspecialchars($this->input->post('essay'), true);
        $is_benar = htmlspecialchars($this->input->post('is_benar'), true);
        $jawaban_benar = htmlspecialchars($this->input->post('jawaban_benar'), true);
		
		if($jawaban_benar == 'jawaban_a'){
			$benar = 1;
		}else if($jawaban_benar == 'jawaban_b'){
			$benar = 2;
		}else if($jawaban_benar == 'jawaban_c'){
			$benar = 3;
		}else if($jawaban_benar == 'jawaban_d'){
			$benar = 4;
		}else if($jawaban_benar == 'jawaban_e'){
			$benar = 5;
		}else{
			$benar = null;
		}

		if($pilihan == $benar){
			$is_benar = 1;
		}else{
			$is_benar = 0;
		}

		$cekPengerjaan = $this->cekPengerjaanSoal($t_peserta_id, $this->session->userdata('user_id'), $soal_id);
		
		if(!is_null($cekPengerjaan)){
		
			$jawaban = [
				't_peserta_id' => $t_peserta_id,
				'user_id' => $this->session->userdata('user_id'),
				'm_soal_id' => $soal_id,
				'is_essay' => $is_essay,
				'pilihan' => $pilihan,
				'essay' => $essay,
				'is_benar' => $is_benar,
				'updated_at' => time(),
				'updated_by' => $this->session->userdata('user_id')
			];

			$this->db->where('id', $cekPengerjaan->id);
			$this->db->update('tb_peserta_jawaban', $jawaban);
		}else{
		
			$jawaban = [
				't_peserta_id' => $t_peserta_id,
				'user_id' => $this->session->userdata('user_id'),
				'm_soal_id' => $soal_id,
				'is_essay' => $is_essay,
				'pilihan' => $pilihan,
				'essay' => $essay,
				'is_benar' => $is_benar,
				'created_at' => time(),
				'created_by' => $this->session->userdata('user_id')
			];

			$this->db->insert('tb_peserta_jawaban', $jawaban);
		}
        return ($this->db->affected_rows() != 1) ? false : true;
    }

	function cekPengerjaanSoal($t_peserta_id = null, $user_id = null, $soal_id = null){
		return $this->db->get_where('tb_peserta_jawaban', ['t_peserta_id' => $t_peserta_id, 'user_id' => $user_id, 'm_soal_id' => $soal_id])->row();
	}

	function getPesertaMateri($user_id = null, $materi_id = null){
		return $this->db->get_where('tb_peserta', ['user_id' => $user_id, 'm_materi_id' => $materi_id, 'status' => 0])->row();
	}

	function cekPengerjaan($materi_id = null){
		$models = $this->db->get_where('tb_peserta', ['user_id' => $this->session->userdata('user_id'), 'm_materi_id' => $materi_id, 'status >' => 0])->result();

		return [
			'data' => $models,
			'total' => count($models)
		];
	}

	function cekProsesPengerjaan($materi_id = null){
		$this->db->select('tb_peserta.*')
		->from('tb_peserta')
		->join('tb_peserta_jawaban', 'tb_peserta.id = tb_peserta_jawaban.t_peserta_id', 'inner')
		->where(['tb_peserta.user_id' => $this->session->userdata('user_id'), 'tb_peserta.status' => 0, 'tb_peserta.m_materi_id' => $materi_id, 'waktu_pengambilan >' => 0]);

		$models = $this->db->get()->result();

		return [
			'data' => $models,
			'total' => count($models)
		];
	}

	function cekPengambilan($materi_id = null){
		$models = $this->db->get_where('tb_peserta', ['user_id' => $this->session->userdata('user_id'), 'm_materi_id' => $materi_id])->result();

		return [
			'data' => $models,
			'total' => count($models)
		];
	}

	function set_timer($t_peserta_id, $m_materi_id){
		$this->db->where(['id' => $t_peserta_id, 'm_materi_id' => $m_materi_id]);
		$this->db->update('tb_peserta', ['waktu_pengambilan' => time()]);
	}

	function selesaikan_peserta($t_peserta_id, $m_materi_id, $status = 1){

		$cek_selesai = $this->db->get_where('tb_peserta', ['id' => $t_peserta_id, 'm_materi_id' => $m_materi_id])->row();
		if($cek_selesai->status == 1 && $status == 2){
			return true;
		}
		$this->db->where(['id' => $t_peserta_id, 'm_materi_id' => $m_materi_id]);
		$this->db->update('tb_peserta', ['status' => $status, 'modified_at' => time()]);
		return true;
	}
}
