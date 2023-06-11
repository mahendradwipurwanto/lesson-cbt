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

    public function getAllMateri($params = [], $limit = 12, $offset = 0, $search = null, $status = null)
    {
        $this->db->select('m_materi.*, m_categories.categories, COUNT(tb_peserta.id) as total_peserta, m_materi_level.level')
		->from('m_materi')
		->join('m_categories', 'm_materi.m_kategori_id = m_categories.id', 'left')
		->join('m_materi_level', 'm_materi.m_level_id = m_materi_level.id', 'left')
		->join('tb_peserta', 'm_materi.id = tb_peserta.m_materi_id', 'left')
		->where(['m_materi.is_deleted' => 0, 'm_materi.status <'=> 2]);
        
        if(!empty($parmas) && isset($parmas['type'])){
            $this->db->where('m_materi.type', $parmas['type']);
        }

		if(!is_null($search) && $search != ''){
			$this->db->like('m_materi.judul', $search);
			$this->db->or_like('m_materi.deskripsi', $search);
		}

		if(!is_null($status) && $status != '' && $status != '-1'){
			$this->db->where('m_materi.status', $status);
		}
		
		$this->db->limit($limit, $offset);

		$this->db->group_by('m_materi.id');
		$this->db->order_by('total_peserta DESC');
		$this->db->order_by('m_materi.created_at DESC');

		$data = $this->db->get()->result();

		$arr = [];
		if(!empty($data)){
			foreach($data as $key => $val){
				$arr[$key] = $val;
                $arr[$key]->categories = !is_null($val->m_kategori_id) && $val->m_kategori_id > 0 ? $val->categories : (!empty($parmas) && isset($parmas['type']) ? ($params['type'] == 0 ? 'Soal' : 'Materi') : 'General');
                $arr[$key]->harga = $val->is_bayar == 1 ? number_format($val->harga) : '<span class="badge bg-success">gratis</span>';
				// $arr[$key]->konten = $this->countKontenByMateri($val->id);
				$arr[$key]->testimoni = $this->getRating($val->id, 3);
				$arr[$key]->rating = $this->getAverageRating($val->id);
				$arr[$key]->soal = $this->countSoalByMateri($val->id, $val->type);
				$arr[$key]->peserta = $this->countPesertaByMateri($val->id);
			}
		}

		return $arr;
    }

    public function getRating($id = null, $limit = null)
    {
        $this->db->select('tb_rating.*, tb_user.name, tb_user.photo, tb_user.jobs');
        $this->db->from('tb_rating');
        $this->db->join('tb_user', 'tb_rating.user_id = tb_user.user_id', 'left');

        if(!is_null($id)){
            $this->db->where('m_materi_id', $id);
        }

        if(!is_null($limit)){
            $this->db->limit($limit);
        }

        $results = $this->db->get()->result();
        
        return $results;
    }

    public function getAverageRating($id = null)
    {
        $this->db->select_avg('rate');
        $this->db->from('tb_rating');

        if(!is_null($id)){
            $this->db->where('m_materi_id', $id);
        }
        $result = $this->db->get()->row();
        
        $averageRating = $result->rate;
        $convertedRating = ($averageRating / 5) * 5; // Convert to range 0 to 5
        // Determine the number of full stars
        $fullStars = floor($averageRating);

        // Determine the remaining decimal value for half star
        $halfStar = $averageRating - $fullStars;

        return [
            'rating' => $convertedRating,
            'fullStars' => $fullStars,
            'halfStar' => $halfStar
        ];
    }

    public function countAllMateri($search = null, $status = null)
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

    public function getAllMateriRiwayat($params = [], $limit = 12, $offset = 0, $search = null, $status = null)
    {
        $this->db->select('m_materi.*, m_categories.categories, COUNT(tb_peserta.id) as z, m_materi_level.level')
		->from('m_materi')
		->join('m_categories', 'm_materi.m_kategori_id = m_categories.id', 'left')
		->join('m_materi_level', 'm_materi.m_level_id = m_materi_level.id', 'left')
		->join('tb_peserta', 'm_materi.id = tb_peserta.m_materi_id', 'left')
		->where(['m_materi.is_deleted' => 0, 'm_materi.status <'=> 2]);
        
        if(!empty($parmas) && isset($parmas['type'])){
            $this->db->where('m_materi.type', $parmas['type']);
        }
		
		if(!is_null($search) && $search != ''){
			$this->db->like('m_materi.judul', $search);
			$this->db->or_like('m_materi.deskripsi', $search);
		}

		if(!is_null($status) && $status != '' && $status != '-1'){
			$this->db->where('m_materi.status', $status);
		}
		
		$this->db->limit($limit, $offset);

		$this->db->group_by('m_materi.id');
		$this->db->order_by('total_peserta DESC');
		$this->db->order_by('m_materi.created_at DESC');

		$data = $this->db->get()->result();

		$arr = [];
		if(!empty($data)){
			foreach($data as $key => $val){
				$arr[$key] = $val;
                $arr[$key]->categories = !is_null($val->m_kategori_id) && $val->m_kategori_id > 0 ? $val->categories : (!empty($parmas) && isset($parmas['type']) ? ($params['type'] == 0 ? 'Soal' : 'Materi') : 'Materi');
                $arr[$key]->harga = $val->is_bayar == 1 ? number_format($val->harga) : '<span class="badge bg-success">gratis</span>';
				// $arr[$key]->konten = $this->countKontenByMateri($val->id);
				$arr[$key]->testimoni = $this->getRating($val->id, 3);
				$arr[$key]->rating = $this->getAverageRating($val->id);
				$arr[$key]->soal = $this->countSoalByMateri($val->id, $val->type);
				$arr[$key]->peserta = $this->countPesertaByMateri($val->id);
			}
		}

		return $arr;

    }

    public function countAllMateriRiwayat($search = null, $status = null)
    {
        $this->db->select('m_materi.*')
		->from('m_materi')
		->where(['m_materi.is_deleted' => 0, 'status' => 2]);

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

	public function getMateriById($id = null){
		$this->db->select('m_materi.*, m_categories.categories')
		->from('m_materi')
		->join('m_categories', 'm_materi.m_kategori_id = m_categories.id', 'left')
		->where('m_materi.id', $id)
		;

		$data = $this->db->get()->row();

		if(!is_null($data)){
			$soal = $this->countSoalByMateri($id, $data->type);
			$data->total_module = $soal;
			$data->testimoni = $this->getRating($id, 3);
			$data->rating = $this->getAverageRating($id);
			$data->peserta = $this->countPesertaByMateri($id);
			$data->is_soal = $soal > 0 ? true : false;
            $data->categories = !is_null($data->m_kategori_id) && $data->m_kategori_id > 0 ? $data->categories : (($data->type == 0 ? 'Soal' : 'Materi'));
			if($data->harga > 0 || is_null($data->harga)){
				$harga = number_format($data->harga,0,",",".");
				$data->harga_txt = "Rp. {$harga}";
			}else{
				$data->harga_txt = '<span class="badge bg-success">gratis</span>';
			}
		}
		return $data;
	}

    // public function countKontenByMateri($m_materi_id = null)
    // {
    //     $this->db->select('m_materi_konten.*')
	// 	->from('m_materi_konten')
	// 	->where(['m_materi_konten.m_materi_id' => $m_materi_id, 'm_materi_konten.is_deleted' => 0]);

	// 	$data = $this->db->get()->num_rows();

	// 	return $data;
    // }

    public function countSoalByMateri($m_materi_id = null, $type = null)
    {
		if($type == 0){
			$table_module = 'm_materi_soal';
		}else{
			$table_module = 'm_materi_konten';
		}
		$total_module = $this->db->get_where($table_module, ['m_materi_id' => $m_materi_id, 'is_deleted' => 0])->num_rows();

		return $total_module;
    }

    public function countPesertaByMateri($m_materi_id = null)
    {
        $this->db->select('tb_peserta.*')
		->from('tb_peserta')
		->where(['tb_peserta.m_materi_id' => $m_materi_id, 'tb_peserta.is_deleted' => 0]);

		$data = $this->db->get()->num_rows();

		return $data;
    }

	public function buatMateri(){
        $materi = [
            'judul' => 'Untitled Materi',
            'status' => 0,
            'created_at' => time(),
            'created_by' => $this->session->userdata('user_id')
        ];

        $this->db->insert('m_materi', $materi);
        $status = ($this->db->affected_rows() != 1) ? false : true;
		if($status){
			return [
				'status' => true,
				'data' => $this->getMateriById($this->db->insert_id())
			];
		}else{
			return [
				'status' => false,
				'data' => null
			];
		}
	}

    public function savePanduan()
    {
        $id = htmlspecialchars($this->input->post('id'), true);
        $is_panduan = htmlspecialchars($this->input->post('is_panduan'), true);
        $panduan = htmlspecialchars($this->input->post('panduan'), true);
		
        $materi = [
            'is_panduan' => ($is_panduan == 'on' ? 1 : 0),
            'panduan' => $panduan,
            'modified_at' => time(),
            'modified_by' => $this->session->userdata('user_id')
        ];
		
        $this->db->where('id', $id);
        $this->db->update('m_materi', $materi);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    public function saveMateri($file = null)
    {
        $id = htmlspecialchars($this->input->post('id'), true);
        $judul = htmlspecialchars($this->input->post('judul'), true);
        $m_kategori_id = htmlspecialchars($this->input->post('m_kategori_id'), true);
        $harga = htmlspecialchars($this->input->post('harga'), true);
        $deskripsi = $this->input->post('deskripsi');
        $pratinjau = htmlspecialchars($this->input->post('pratinjau'), true);
        $tag = htmlspecialchars($this->input->post('tag'), true);

        $materi = [
            'judul' => $judul,
            'm_kategori_id' => $m_kategori_id,
            'harga' => $harga,
            'is_bayar' => $harga > 0 ? true : false,
            'deskripsi' => $deskripsi,
            'poster' => $file,
            'pratinjau' => $pratinjau,
            'tag' => $tag,
            'status' => 1,
            'created_at' => time(),
            'created_by' => $this->session->userdata('user_id')
        ];
        if (isset($id) && $id != '') {
            $this->db->where('id', $id);
            $this->db->update('m_materi', $materi);
            return ($this->db->affected_rows() != 1) ? false : true;
        } else {
            $this->db->insert('m_materi', $materi);
            return ($this->db->affected_rows() != 1) ? false : true;
        }
    }

    public function aktifMateri()
    {
        $id = htmlspecialchars($this->input->post('id'), true);

        $this->db->where('id', $id);
        $this->db->update('m_materi', ['status' => 1]);
        return ($this->db->affected_rows() != 1) ? false : true;
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

	public function getListSoalByMateri($materi_id = null){
		$this->db->select('*')
		->from('m_materi_soal')
		->where(['m_materi_soal.m_materi_id' => $materi_id, 'm_materi_soal.is_deleted' => 0]);

		$this->db->order_by('m_materi_soal.order', 'ASC');

		$data = $this->db->get()->result();

		return $data;
	}

	public function getDetailSoalById($materi_id = null, $id = null){
		$this->db->select('*')
		->from('m_materi_soal')
		->where(['m_materi_soal.m_materi_id' => $materi_id, 'id' => $id, 'm_materi_soal.is_deleted' => 0]);

		$data = $this->db->get()->row();

		return $data;
	}

	public function tambahSoal($materi_id = null){
		
		$order = $this->countSoalByMateri($materi_id, 0);

		$data = [
			'm_materi_id' => $materi_id,
			'order' => $order+1,
			'tipe' => '0',
			'created_at' => time(),
			'created_by' => $this->session->userdata('user_id')
		];
		
		$this->db->insert('m_materi_soal', $data);

		return [
			'status' => true,
			'data' => $this->getDetailSoalById($materi_id, $this->db->insert_id())
		];
	}

    public function deleteSoal()
    {
        $id = htmlspecialchars($this->input->post('id'), true);

        $this->db->where('id', $id);
        $this->db->update('m_materi_soal', ['is_deleted' => 1]);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    public function saveSoal()
    {
        $id = htmlspecialchars($this->input->post('id'), true);
        $soal = htmlspecialchars($this->input->post('soal'), true);
        $tipe = htmlspecialchars($this->input->post('tipe'), true);
        $jawaban_a = htmlspecialchars($this->input->post('jawaban_a'), true);
        $jawaban_b = htmlspecialchars($this->input->post('jawaban_b'), true);
        $jawaban_c = htmlspecialchars($this->input->post('jawaban_c'), true);
        $jawaban_d = htmlspecialchars($this->input->post('jawaban_d'), true);
        $jawaban_e = htmlspecialchars($this->input->post('jawaban_e'), true);
        $jawaban_benar = htmlspecialchars($this->input->post('jawaban_benar'), true);
		
        $materi = [
            'soal' => $soal,
            'tipe' => $tipe,
            'jawaban_a' => $jawaban_a,
            'jawaban_b' => $jawaban_b,
            'jawaban_c' => $jawaban_c,
            'jawaban_d' => $jawaban_d,
            'jawaban_e' => $jawaban_e,
            'jawaban_benar' => $jawaban_benar,
            'modified_at' => time(),
            'modified_by' => $this->session->userdata('user_id')
        ];
		
        $this->db->where('id', $id);
        $this->db->update('m_materi_soal', $materi);
        return ($this->db->affected_rows() != 1) ? false : true;
    }
}
