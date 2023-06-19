<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Settings extends CI_Controller
{

    // construct
    public function __construct()
    {
        parent::__construct();
        $this->load->model(['M_settings']);

        // cek apakah user sudah login
        if ($this->session->userdata('logged_in') == false || !$this->session->userdata('logged_in')) {
            if (!empty($_SERVER['QUERY_STRING'])) {
                $uri = uri_string() . '?' . $_SERVER['QUERY_STRING'];
            } else {
                $uri = uri_string();
            }
            $this->session->set_userdata('redirect', $uri);
            $this->session->set_flashdata('toast', "Harap login untuk melanjutkan aktivitas anda");
            redirect('login');
        }

        if ($this->session->userdata('role') > 1) {
            $this->session->set_flashdata('warning', "You don`t have access to this page");
            redirect(base_url());
        }
    }

    public function index()
    {
		$page = $this->input->get('p');

        switch ($page) {
            case 'general':
				$data['page_title'] = "General Information";
				$data['sub_page_title'] = "Manage general information of your website";

				$data['web_alamat'] = $this->M_settings->get_settingsValue('web_alamat');
				$data['sosmed_facebook'] = $this->M_settings->get_settingsValue('sosmed_facebook');
				$data['sosmed_ig'] = $this->M_settings->get_settingsValue('sosmed_ig');
				$data['sosmed_twitter'] = $this->M_settings->get_settingsValue('sosmed_twitter');
				$data['sosmed_yt'] = $this->M_settings->get_settingsValue('sosmed_yt');
                if ($this->agent->is_mobile()) {
                    $this->templatemobile->view('admin/settings/general', $data);
                } else {
                    $this->templateback->view('admin/settings/general', $data);
                }
                break;

            case 'user-log':
				$data['page_title'] = "Credentials";
				$data['sub_page_title'] = "Manage all credentials account in here";

                $data['master_password'] = $this->M_settings->get_settingsValue('master_password');
                $data['account'] = $this->M_settings->get_allAccount();
                $data['admin'] = $this->M_settings->get_adminAccount();
                $data['super'] = $this->M_settings->get_superAccount();

                if ($this->agent->is_mobile()) {
                    $this->templatemobile->view('admin/settings/user_log', $data);
                } else {
                    $this->templateback->view('admin/settings/user_log', $data);
                }
                break;

            case 'credentials':
				$data['page_title'] = "Credentials";
				$data['sub_page_title'] = "Manage all credentials account in here";
				
                $data['master_password'] = $this->M_settings->get_settingsValue('master_password');
                $data['account'] = $this->M_settings->get_allAccount();
                $data['admin'] = $this->M_settings->get_adminAccount();
                $data['super'] = $this->M_settings->get_superAccount();

                if ($this->agent->is_mobile()) {
                    $this->templatemobile->view('admin/settings/credentials', $data);
                } else {
                    $this->templateback->view('admin/settings/credentials', $data);
                }
                break;

            case 'mailer':
				$data['page_title'] = "Mailer settings";
				$data['sub_page_title'] = "Manage mailer settings in here";
				
                $data['mailer_mode'] = $this->M_settings->get_settingsValue('mailer_mode');
                $data['mailer_host'] = $this->M_settings->get_settingsValue('mailer_host');
                $data['mailer_port'] = $this->M_settings->get_settingsValue('mailer_port');
                $data['mailer_smtp'] = $this->M_settings->get_settingsValue('mailer_smtp');
                $data['mailer_connection'] = $this->M_settings->get_settingsValue('mailer_connection');
                $data['mailer_alias'] = $this->M_settings->get_settingsValue('mailer_alias');
                $data['mailer_username'] = $this->M_settings->get_settingsValue('mailer_username');
                $data['mailer_password'] = $this->M_settings->get_settingsValue('mailer_password');

                if ($this->agent->is_mobile()) {
                    $this->templatemobile->view('admin/settings/mailer', $data);
                } else {
                    $this->templateback->view('admin/settings/mailer', $data);
                }
                break;

            default:
				$data['page_title'] = "Website settings";
				$data['sub_page_title'] = "Manage all settings and information about your website ";
				

                if ($this->agent->is_mobile()) {
                    $this->templatemobile->view('admin/settings/settings', $data);
                } else {
                    $this->templateback->view('admin/settings/settings', $data);
                }
                break;
        }
    }

    public function ubahGeneral()
    {
        $logo = null;
        $splash = null;
        if (isset($_FILES['image']) && $_FILES['image']['size'] > 0) {
            $path = "assets/images/";
            $upload = $this->uploader->uploadImage($_FILES['image'], $path, 'logo');
            if ($upload == true) {
                $logo = $upload['filename'];
            } else {
                $this->session->set_flashdata('notif_warning', $upload['message']);
                redirect($this->agent->referrer());
            }
        }
        if ($this->M_website->ubahGeneral($logo, $splash) == true) {
            $this->session->set_flashdata('notif_success', 'Successfully changes general information');
            redirect(site_url('admin/pengaturan?p=general'));
        } else {
            $this->session->set_flashdata('notif_warning', 'There is something wrong, when trying to changes general information');
            redirect($this->agent->referrer());
        }
    }

    public function ubahMailer()
    {
        if ($this->M_settings->ubahMailer() == true) {
            $this->session->set_flashdata('toast', 'Successfully changes mailer');
            redirect(site_url('settings?p=mailer'));
        } else {
            $this->session->set_flashdata('toast', 'There is something wrong, when trying to changes mailer');
            redirect($this->agent->referrer());
        }
    }

    public function ubahPasswordMaster()
    {
        if ($this->M_settings->ubahPasswordMaster() == true) {
            $this->session->set_flashdata('toast', 'Successfully changes credentials information');
            redirect(site_url('settings?p=credentials'));
        } else {
            $this->session->set_flashdata('toast', 'There is something wrong, when trying to changes credentials information');
            redirect($this->agent->referrer());
        }
    }

    function testMailer(){
        sendMailTest($this->input->post('email'), 'Test email mailer', 'This is a Test Email on '.date('d M Y - H:i:s'))['status'];
        $this->session->set_flashdata('toast', 'Succesfuly tested mailer for the current setting');
        $debug = sendMailTest($this->input->post('email'), 'Test email mailer', 'This is a Test Email on '.date('d M Y - H:i:s'))['debug'] == 'html' ? 'Test mail succesfuly sended' : sendMailTest($this->input->post('email'), 'Test email mailer', 'This is a Test Email on '.date('d M Y - H:i:s'))['debug'];
        $this->session->set_userdata(['mailer_debug' => $debug]);
        redirect($this->agent->referrer());
    }
}
