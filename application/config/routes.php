<?php
defined('BASEPATH') or exit('No direct script access allowed');

// AUTH
$route['login'] = 'auth';
$route['register'] = 'auth/register';
$route['email-verification/(:any)'] = 'auth/verifikasi_email/$1';
$route['forgot-password'] = 'auth/forgotPassword';
$route['reset-password/(:any)'] = 'auth/ubah_password/$1';
$route['logout'] = 'auth/logout';

// ADMIN
$route['admin/dashboard'] = 'admin';

$route['default_controller'] = 'auth';
$route['404_override'] = 'utility/not_found';
$route['translate_uri_dashes'] = false;