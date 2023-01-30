<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    // construct
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->templateback->view('admin/dashboard');
    }
}
