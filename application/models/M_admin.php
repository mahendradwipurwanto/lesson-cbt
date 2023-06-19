<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_admin extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    function getCountOverview(){

        $materi = $this->db->get_where('m_materi', ['is_deleted' => 0])->num_rows();
        $member = $this->db->get_where('tb_auth', ['role' => 2])->num_rows();
        $peserta = $this->db->get_where('tb_peserta', ['is_deleted' => 0])->num_rows();

        $this->db->select_sum('amount')
        ->from('tb_payments')
        ->where(['status' => 2, 'is_deleted' => 0])
        ;

        $pendapatan = $this->db->get()->row();
        
        return [
            'materi' => $materi,
            'member' => $member,
            'peserta' => $peserta,
            'pendapatan' => $pendapatan->amount
        ];
    }

    function getChartDaily()
    {
        $this->db->select("id, FROM_UNIXTIME(created_at, '%Y-%m-%d') AS created_at, COUNT(FROM_UNIXTIME(created_at, '%Y-%m-%d')) AS count");
        $this->db->from('tb_peserta');
        $this->db->where('status', 2);
        $this->db->group_by("FROM_UNIXTIME(created_at, '%Y-%m-%d')");
        return $this->db->get()->result();
    }

    function getChartDailyAccount()
    {
        $this->db->select("FROM_UNIXTIME(created_at, '%Y-%m-%d') AS created_at, COUNT(FROM_UNIXTIME(created_at, '%Y-%m-%d')) AS count");
        $this->db->from('tb_auth');
        $this->db->where(['role' => 2, 'is_deleted' => 0]);
        $this->db->group_by("FROM_UNIXTIME(created_at, '%Y-%m-%d')");
        return $this->db->get()->result();
    }

    public function getAllMemberNative(){
        $this->db->select('a.status as auth_status, a.email, b.*')
        ->from('tb_auth a')
        ->join('tb_user b', 'a.user_id = b.user_id')
        ->where(['a.is_deleted' => 0, 'a.role' => 2])
        ;

        $models = $this->db->get()->result();

        foreach($models as $key => $val){
            if($val->auth_status == 1){
                $models[$key]->status  = '<span class="badge bg-soft-success">Aktif</span>';
            }elseif($val->auth_status == 2){
                $models[$key]->status  = '<span class="badge bg-soft-warning">Suspended</span>';
            }else{
                $models[$key]->status  = '<span class="badge bg-soft-secondary">Belum verifikasi email</span>';
            }
        }

        return $models;
    }

    public function getAllMember(){

        $offset = $this->input->post('start');
        $limit  = $this->input->post('length'); // Rows display per page
        $order  = $this->input->post('order')[0];
        
        $filter = [];

        $filterEmail = $this->input->post('filterEmail');  
        $filterName = $this->input->post('filterName');  
        $filterNumber = $this->input->post('filterNumber');   

        if($filterEmail != null || $filterEmail != '') $filter[] = "a.email like '%{$filterEmail}%'";
        if($filterName != null || $filterName != '') $filter[] = "b.name like '%{$filterName}%'";
        if($filterNumber != null || $filterNumber != '') $filter[] = "b.phone like '%{$filterNumber}%'";

        if($filter != null){
            $filter = implode(' AND ', $filter);
        }  

        $this->db->select('a.status as auth_status, a.email, b.*')
        ->from('tb_auth a')
        ->join('tb_user b', 'a.user_id = b.user_id', 'inner')
        ->where(['a.role' => 2])
        ;

        $this->db->where($filter);

        if(!is_null($order)){

            switch ($order['column']) {
                case 0:
                    $columnName = 'b.name';
                    break;
                    
                case 2:
                    $columnName = 'b.name';
                    break;
                    
                case 3:
                    $columnName = 'a.email';
                    break;
                    
                case 4:
                    $columnName = 'b.phone';
                    break;
                
                default:
                    $columnName = 'a.name';
                    break;
            }
            
            $this->db->order_by("{$columnName} {$order['dir']}");
        }

        // $this->db->limit($limit)->offset($offset);

        $models = $this->db->get()->result();

        foreach($models as $key => $val){
            
            $btnDetail      = '<button onclick="showMdlMemberDetail(\''.$val->user_id.'\')" class="btn btn-soft-info btn-icon btn-sm me-2"><i class="bi-eye"></i></button>';
            $btnPass        = '<button onclick="showMdlChangePassword(\''.$val->user_id.'\')" class="btn btn-soft-primary btn-icon btn-sm me-2"><i class="bi-key"></i></button>';
            $btnEmail       = '<button onclick="showMdlChangeEmail(\''.$val->user_id.'\')" class="btn btn-soft-danger btn-icon btn-sm me-2"><i class="bi-envelope"></i></button>';

            $strip_email                    = explode("@", $val->email);
            $models[$key]->name             = is_null($val->name) || $val->name == "" ? $strip_email[0] : $val->name;
            $models[$key]->phone            = isset($val->phone) && !is_null($val->phone) ? "+62{$val->phone}" : "<span class='badge bg-warning'>belum diatur</span>";
    
            if($val->auth_status == 1){
                $models[$key]->status  = '<span class="badge bg-soft-success">Aktif</span>';
            }elseif($val->auth_status == 2){
                $models[$key]->status  = '<span class="badge bg-soft-warning">Suspended</span>';
            }else{
                $models[$key]->status  = '<span class="badge bg-soft-secondary">Belum verifikasi email</span>';
            }
            
            $models[$key]->action = $btnDetail.$btnPass.($val->auth_status > 0 ? $btnEmail : '');
        }

        $totalRecords = count($models);

        $models = array_slice($models, $offset, $limit);

        return ['records' => array_values($models), 'totalDisplayRecords' => count($models), 'totalRecords' => $totalRecords];
    }

    function getDetailMember($user_id = null){
        $this->db->select('a.user_id, a.email, a.online, a.device, a.log_time, a.created_at, b.name, b.gender, b.phone, b.address')
        ->from('tb_auth a')
        ->join('tb_user b', 'a.user_id = b.user_id')
        ->where(['a.user_id' => $user_id])
        ;

        $model = $this->db->get()->row();
        $strip_email        = explode("@", $model->email);
        $model->name        = is_null($model->name) || $model->name == "" ? $strip_email[0] : $model->name;
        $model->whatsapp    = isset($model->phone) && !is_null($model->phone) ? "+62{$model->phone}" : "<span class='badge bg-warning'>belum diatur</span>";
        $model->gender      = isset($model->gender) && !is_null($model->gender) ? $model->gender : "<span class='badge bg-warning'>belum diatur</span>";
        $model->address     = isset($model->address) && !is_null($model->address) ? $model->address : "<span class='badge bg-warning'>belum diatur</span>";

        return $model;
    }

    function changeMemberPassword(){
        $user_id = $this->input->post('id');
        $password = $this->input->post('pass');

        $this->db->where(['user_id' => $user_id]);
        $this->db->update('tb_auth', ['password' => password_hash($password, PASSWORD_DEFAULT)]);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    function changeMemberEmail(){
        $user_id = $this->input->post('id');
        $email = $this->input->post('email');

        $this->db->where(['user_id' => $user_id]);
        $this->db->update('tb_auth', ['email' => $email]);
        return ($this->db->affected_rows() != 1) ? false : true;
    }
}
