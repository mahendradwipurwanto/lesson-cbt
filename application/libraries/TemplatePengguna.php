<?php
class TemplatePengguna
{
    protected $_ci;

    public function __construct()
    {
        $this->_ci = &get_instance();
        $this->_ci->load->database();
    }

    public function getSettingsValue($key)
    {
        $query = $this->_ci->db->get_where('tb_settings', ['key' => $key]);
        return $query->row()->value;
    }

    public function view($content, $data = null)
    {
        $data['web_title'] = $this->getSettingsValue('web_title');
        $data['web_desc'] = $this->getSettingsValue('web_desc');
        $data['web_icon'] = $this->getSettingsValue('web_icon');
        $data['web_icon_white'] = $this->getSettingsValue('web_icon_white');
        $data['web_logo'] = $this->getSettingsValue('web_logo');
        $data['web_logo_white'] = $this->getSettingsValue('web_logo_white');
        $data['sound_notif'] = $this->getSettingsValue('sound_notif');

        $this->_ci->load->view('template/pengguna/header', $data);
        $this->_ci->load->view('template/alert', $data);
        $this->_ci->load->view('template/pengguna/navbar', $data);
        $this->_ci->load->view('template/pengguna/topbar', $data);
        $this->_ci->load->view($content, $data);
        $this->_ci->load->view('template/pengguna/footer', $data);
    }
}
