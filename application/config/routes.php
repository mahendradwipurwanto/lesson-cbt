<?php
defined('BASEPATH') or exit('No direct script access allowed');

// AUTH
$route['login'] = 'auth';
$route['register'] = 'auth/register';
$route['verifikasi-email/(:any)'] = 'auth/verifikasi_email/$1';
$route['email-verification'] = 'auth/verificationEmail';
$route['forgot-password'] = 'auth/forgotPassword';
$route['reset-password/(:any)'] = 'auth/ubah_password/$1';
$route['logout'] = 'auth/logout';

// ADMIN
$route['admin/dashboard'] = 'admin';

// MATERI
$route['master/riwayat-materi'] = 'master/riwayatMateri';
$route['master/buat-materi'] = 'master/buatMateri';
$route['master/buat-materi/soal'] = 'master/buatSoal';
$route['master/buat-materi/(:any)'] = 'master/buatMateri/$1';
$route['master/edit-materi/(:any)'] = 'master/buatMateri/$1';

$route['default_controller'] = 'home';
$route['404_override'] = 'utility/not_found';
$route['translate_uri_dashes'] = false;
