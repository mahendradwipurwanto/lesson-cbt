<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    // construct
    public function __construct()
    {
        parent::__construct();
        $this->load->model(['M_admin', 'M_auth']);

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
    }

    public function index()
    {
		$data['page_title'] = 'Dashboard';
		$data['sub_page_title'] = 'Selamat datang';
		
        $data['count'] = $this->M_admin->getCountOverview();
        $data['member'] = $this->M_admin->getAllMemberNative();
        $this->templateback->view('admin/dashboard', $data);
    }

    public function statistik()
    {
		$data['page_title'] = 'Statistik';
		$data['sub_page_title'] = 'Seluruh statistik tentang website anda';

        // daiily chart
        $data['arrChartDaily']['created_at'] = [];
        $data['arrChartDaily']['jmlPeserta'] = [];
        $statChartDaily = $this->M_admin->getChartDaily();
        foreach ($statChartDaily as $val):
            $data['arrChartDaily']['created_at'][] = "'".$val->created_at."'";
            $data['arrChartDaily']['jmlPeserta'][] = $val->count;
        endforeach;

        // daily  account chart
        $statChartDailyAccount = $this->M_admin->getChartDailyAccount();
        foreach ($statChartDailyAccount as $val):
            $data['arrChartDailyAccount']['created_at'][] = "'".$val->created_at."'";
            $data['arrChartDailyAccount']['jmlPeserta'][] = $val->count;
        endforeach;
        if(!empty($data['arrChartDaily']['created_at'])) {
            $data['arrChartDailyDate'] = array_unique(array_merge($data['arrChartDailyAccount']['created_at'], $data['arrChartDaily']['created_at']), SORT_REGULAR);
        } else {
            $data['arrChartDailyDate'] = array_unique($data['arrChartDailyAccount']['created_at'], SORT_REGULAR);
        }

		$data['count'] = $this->M_admin->getCountOverview();
        $this->templateback->view('admin/statistik', $data);
    }

    public function member()
    {
		$data['page_title'] = 'Member';
		$data['sub_page_title'] = 'Kelola seluruh data member yang telah terdaftar';
		
        $this->templateback->view('admin/member', $data);
    }

    function changeMemberPassword(){
        if ($this->M_admin->changeMemberPassword() == true) {
            $user = $this->M_auth->get_userByID($this->input->post("id"));
            // atur dataemailperubahan password
            $now = date("d F Y - H:i");
            $email = htmlspecialchars($user->email, true);

            $subject = "Perubahan password - soalkupedia.com";
            $message = "Hai, password untuk akun anda dengan email <b>{$email}</b> telah dirubah pada {$now} menjadi <b>{$this->input->post('pass')}</b>. <br> jika anda tidak merasa melakukan perubahan password ini harap hubungi admin kami sesegera mungkin!";

            // mengirimemailperubahan password
            sendMail(htmlspecialchars($user->email, true), $subject, $message);

            $this->session->set_flashdata('notif_success', 'Berhasil merubah password member ');
            redirect(site_url('admin/member'));
        } else {
            $this->session->set_flashdata('notif_warning', 'Terjadi kesalahan saat mencoba merubah password member, harap coba lagi');
            redirect($this->agent->referrer());
        }
    }

    function changeMemberEmail(){
        if ($this->M_auth->cek_auth(htmlspecialchars($this->input->post("email"), true)) == false) {
            $user = $this->M_auth->get_userByID($this->input->post("id"));
            if ($this->M_admin->changeMemberEmail() == true) {
                // atur dataemailperubahan email
                $now = date("d F Y - H:i");
                $email = htmlspecialchars($user->email, true);

                $subject = "Perubahan email - soalkupedia.com";
                $message = "Hai, email untuk akun Soalkupedia anda telah dirubah pada {$now}. <br>Email baru mu adalah {$this->input->post('email')} <br><br> Jika anda tidak merasa meminta perubahan ini, harap segera hubungi admin Soalkupedia kami.";

                // mengirimemailperubahan email
                sendMail(htmlspecialchars($user->email, true), $subject, $message);

                // mengirimemailperubahan email
                sendMail(htmlspecialchars($this->input->post('email'), true), $subject, $message);

                $this->session->set_flashdata('notif_success', 'Berhasil merubah email member ');
                redirect(site_url('admin/member'));
            } else {
                $this->session->set_flashdata('notif_warning', 'Terjadi kesalahan saat mencoba merubah email member, harap coba lagi');
                redirect($this->agent->referrer());
            }
        } else {
            $this->session->set_flashdata('notif_warning', 'Email telah digunakan!');
            redirect($this->agent->referrer());
        }
    }
}
