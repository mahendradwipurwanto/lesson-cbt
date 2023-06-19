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

// HOME
$route['materi'] = 'home/materi';
$route['materi/(:any)'] = 'home/detail_materi/$1';
$route['tentang-kami'] = 'home/tentang_kami';

// ADMIN
$route['admin/dashboard'] = 'admin';

// PENGGUNA
$route['pengguna/materi/(:any)'] = 'pengguna/detail_materi/$1';
$route['pengguna/materi/peraturan/(:any)'] = 'pengguna/peraturan_soal/$1';
$route['pengguna/materi/panduan-soal/(:any)'] = 'pengguna/panduan_soal/$1';
$route['pengguna/materi/kerjakan-soal/(:any)'] = 'pengguna/kerjakan_soal/$1';
$route['pengguna/materi/kerjakan-soal/(:any)/(:num)'] = 'pengguna/kerjakan_soal/$1/$2';

// MATERI
$route['master/riwayat-materi'] = 'master/riwayatMateri';
$route['master/buat-materi'] = 'master/buatMateri';
$route['master/buat-materi/(:num)/soal'] = 'master/buatSoal/$1';
$route['master/buat-materi/(:num)/soal/(:num)'] = 'master/buatSoal/$1/$2';
$route['master/buat-materi/(:num)'] = 'master/buatMateri/$1';
$route['master/edit-materi/(:num)'] = 'master/buatMateri/$1';
$route['download/(:any)'] = 'home/download/$1';

$route['default_controller'] = 'home';
$route['404_override'] = 'utility/not_found';
$route['translate_uri_dashes'] = true;