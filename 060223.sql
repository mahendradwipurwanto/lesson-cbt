/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.4.22-MariaDB : Database - db_lesson
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

/*Table structure for table `m_categories` */

DROP TABLE IF EXISTS `m_categories`;

CREATE TABLE `m_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categories` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` int(11) NOT NULL DEFAULT 0,
  `created_by` varchar(255) NOT NULL DEFAULT '0',
  `modified_at` int(11) NOT NULL DEFAULT 0,
  `modified_by` varchar(255) NOT NULL DEFAULT '0',
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `m_categories` */

insert  into `m_categories`(`id`,`categories`,`description`,`created_at`,`created_by`,`modified_at`,`modified_by`,`is_deleted`) values 
(3,'Bank BCA','awd',1675635991,'SU01',0,'0',1),
(4,'dawd','awd',1675636020,'SU01',0,'0',0);

/*Table structure for table `m_materi` */

DROP TABLE IF EXISTS `m_materi`;

CREATE TABLE `m_materi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) NOT NULL,
  `konten` text DEFAULT NULL,
  `created_at` int(11) NOT NULL DEFAULT 0,
  `created_by` varchar(15) NOT NULL DEFAULT '0',
  `modified_at` int(11) NOT NULL DEFAULT 0,
  `modified_by` varchar(15) NOT NULL DEFAULT '0',
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `m_materi` */

/*Table structure for table `m_payments_settings` */

DROP TABLE IF EXISTS `m_payments_settings`;

CREATE TABLE `m_payments_settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `payment_method` varchar(50) DEFAULT NULL,
  `type_method` varchar(50) DEFAULT NULL,
  `code_method` varchar(50) DEFAULT NULL,
  `img_method` varchar(255) DEFAULT NULL,
  `fee_method` varchar(255) DEFAULT NULL,
  `type_fee_method` int(5) DEFAULT 1 COMMENT '1: percentage; 2: flat; 3: determine by provider',
  `data` text DEFAULT NULL,
  `tutorial` text DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` int(11) NOT NULL DEFAULT 0,
  `created_by` varchar(15) NOT NULL DEFAULT '0',
  `modified_at` int(11) NOT NULL DEFAULT 0,
  `modified_by` varchar(15) NOT NULL DEFAULT '0',
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

/*Data for the table `m_payments_settings` */

insert  into `m_payments_settings`(`id`,`payment_method`,`type_method`,`code_method`,`img_method`,`fee_method`,`type_fee_method`,`data`,`tutorial`,`active`,`created_at`,`created_by`,`modified_at`,`modified_by`,`is_deleted`) values 
(1,'Paypal','manual','paypal','assets/images/payments/paypal.png',NULL,2,'{\r\n    \"Account Name\": \"Middle East Youth Summit\",\r\n    \"Account tag\": \"@MEYS2023\",\r\n    \"Paypal Email\": \"middleeastyouthsummit@gmail.com\"\r\n}','<p><strong>You need to have a PayPal account with sufficient balance to use this payment method!</strong></p>\r\n\r\n<ol>\r\n	<li>Log in to your PayPal account and select the &ldquo;Send Money&rdquo; tab.</li>\r\n	<li>Enter the email address &quot;<strong>middleeastyouthsummit@gmail.com</strong>&quot; of the PayPal account to which you are transferring the money.</li>\r\n	<li>Enter the amount as requested to transfer.</li>\r\n	<li>Select the &ldquo;I&rsquo;m sending money to family or friends&rdquo; option.</li>\r\n	<li>Click &ldquo;Continue&rdquo; to review the transaction details, and then click &ldquo;Send Money&rdquo; to complete the transfer.</li>\r\n</ol>\r\n',1,0,'0',1668490459,'USER-ADM-01',0),
(2,'Xendit','gateway','xnd',NULL,NULL,3,NULL,NULL,1,0,'0',0,'0',0),
(3,'Western Union','manual','western_union','assets/images/payments/western_union.png',NULL,3,'{\r\n    \"first_name\": \"Meldi Latifah\",\r\n    \"last_name\": \"Saraswati\",\r\n    \"id_number\": \"99429734658\",\r\n    \"city\": \"IZMIT\",\r\n    \"state\": \"KOCAELI\",\r\n    \"country\": \"Turkiye\"\r\n}','<p>Western Union / Moneygram Payment for Foreign Participants:</p>\r\n\r\n<p>1. Go directly to the nearest Western Union in your area<br />\r\n2. Fill &quot;To Send Money&quot; form<br />\r\n3. Fill the receiver data according to the:</p>\r\n\r\n<p><strong>First Name </strong>: Meldi Latifah<br />\r\n<strong>Last Name </strong>: Saraswati<br />\r\n<strong>ID Number </strong>: 99429734658<br />\r\n<strong>City </strong>: IZMIT<br />\r\n<strong>State</strong>: KOCAELI<br />\r\n<strong>Country </strong>: Turkiye</p>\r\n\r\n<p>4. Give your cash to the officer<br />\r\n5. Take a photo of your filled &quot;To Send Money&quot; form and keep your MTCN in order to do your payment confirmation<br />\r\n6. Please pay attention to filling in the receiver data. The data filled must be exactly the same and should not be false even one letter according to the information above. Otherwise, your payment will not be acknowledged.<br />\r\n7. The amount that should be paid for the registration fee is $10. This amount has not included the charge from&nbsp;Western&nbsp;Union.</p>\r\n',1,0,'0',1667348707,'USER-ADM-01',0),
(4,'Money Gram','manual','money_gram','assets/images/payments/money_gram.png',NULL,3,'{\r\n    \"first_name\": \"Meldi Latifah\",\r\n    \"last_name\": \"Saraswati\",\r\n    \"id_number\": \"99429734658\",\r\n    \"city\": \"IZMIT\",\r\n    \"state\": \"KOCAELI\",\r\n    \"country\": \"Turkiye\"\r\n}','<p>Western Union / Moneygram Payment for Foreign Participants:</p>\r\n\r\n<p>1. Go directly to the nearest Western Union in your area<br />\r\n2. Fill &quot;To Send Money&quot; form<br />\r\n3. Fill the receiver data according to the:</p>\r\n\r\n<p><strong>First Name </strong>: Meldi Latifah<br />\r\n<strong>Last Name </strong>: Saraswati<br />\r\n<strong>ID Number </strong>: 99429734658<br />\r\n<strong>City </strong>: IZMIT<br />\r\n<strong>State</strong>: KOCAELI<br />\r\n<strong>Country </strong>: Turkiye</p>\r\n\r\n<p>4. Give your cash to the officer<br />\r\n5. Take a photo of your filled &quot;To Send Money&quot; form and keep your MTCN in order to do your payment confirmation<br />\r\n6. Please pay attention to filling in the receiver data. The data filled must be exactly the same and should not be false even one letter according to the information above. Otherwise, your payment will not be acknowledged.<br />\r\n7. The amount that should be paid for the registration fee is $10. This amount has not included the charge from&nbsp;Western&nbsp;Union.</p>\r\n',1,0,'0',1667355885,'USER-ADM-01',0),
(5,'Wise','manual','wise','assets/images/payments/wise.png',NULL,3,'{\r\n    \"availability\": \"all countries\",\r\n    \"Email Recipient\": \"meldilatifah75@gmail.com\",\r\n    \"Name Recipient\": \"Meldi Latifah Saraswati\",\r\n    \"Send money to\": \"Indonesia Bank (IDR) 0374505145\",\r\n    \"Address\": \"Dsn. Sidomulyo Desa Kraton Rt 03/Rw 02 Kecamatan Yosowilangun Kabupaten Lumajang 67382\"\r\n}','<p>Watch this tutorial:&nbsp;<a href=\"https://youtu.be/IZtLF0nhqFc\">https://youtu.be/IZtLF0nhqFc</a></p>\r\n',1,0,'0',1668070645,'USER-ADM-01',0),
(6,'Ziraat Bank','manual','ziraat','assets/images/payments/ziraat.png',NULL,3,'{\r\n    \"Number\": \"IBAN TR55 0001 0090 1019 1517 2050 01\",\r\n    \"Name\": \"Meldi Latifah Saraswati\",\r\n    \"Contact number\": \"90 5525903157\"\r\n}','<p>go to this link for tutorial :&nbsp;<a href=\"https://www.ziraatbank.com.tr/en/retail/payments\">https://www.ziraatbank.com.tr/en/retail/payments</a></p>\r\n',1,0,'0',1668847413,'USR-HNN-fb10bd',0),
(7,'Mandiri','manual','mandiri','assets/images/payments/mandiri.png',NULL,3,'{\r\n    \"atas_nama\": \"Meldi Latifah Saraswati\",\r\n    \"no_rekening\": \"137-00-1614461-6\"\r\n}','<ol>\r\n	<li>Pertama, masukkan kartu ATM Mandiri dengan posisi yang benar</li>\r\n	<li>Selanjutnya, pilih menu Bahasa Indonesia</li>\r\n	<li>Masukan 6 digit PIN kamu dengan benar</li>\r\n	<li>Lalu, pilih menu transaksi lainnya</li>\r\n	<li>Pilih menu Transfer</li>\r\n	<li>Pilih menu ke Rekening Mandiri</li>\r\n	<li>Masukan nomor rekening tujuan (pilih Benar)</li>\r\n	<li>Masukan jumlah uang yang akan ditransfer (pilih Benar)</li>\r\n	<li>Perhatikan konfirmasi transfer, jika benar pilih Benar</li>\r\n	<li>Transaksi telah selesai, pilih Keluar atau tekan Cancel.</li>\r\n</ol>\r\n',1,0,'0',1667368547,'USER-ADM-01',0),
(9,'Permata Bank','gateway_midtrans','permata','assets/images/payments/permata.png',NULL,3,NULL,NULL,1,1667368547,'USER-ADM-01',1667368547,'USER-ADM-01',0),
(10,'BNI','geteway_midtrans','bni','assets/images/payments/bni.png',NULL,3,NULL,NULL,1,1667368547,'USER-ADM-01',1667368547,'USER-ADM-01',1),
(11,'BRI','gateway_midtrans','bri','assets/images/payments/briva.png',NULL,3,NULL,NULL,1,0,'0',0,'0',0),
(12,'BCA','gateway_midtrans','bca','assets/images/payments/bca.png',NULL,3,NULL,NULL,1,0,'0',0,'0',0),
(13,'MANDIRI','gateway_midtrans','mandiri','assets/images/payments/mandiri.png',NULL,3,NULL,NULL,1,1667368547,'USER-ADM-01',1667368547,'USER-ADM-01',0),
(14,'BRIVA','gateway_midtrans','briva','assets/images/payments/briva.png',NULL,3,NULL,NULL,1,1667368547,'USER-ADM-01',1667368547,'USER-ADM-01',0),
(15,'Gopay Merchant','gateway_midtrans','gopay','assets/images/payments/gopay.png',NULL,3,NULL,NULL,1,1667368547,'USER-ADM-01',1667368547,'USER-ADM-01',0),
(16,'Shoopepay Merchant','gateway_midtrans','shopeepay','assets/images/payments/qris.png',NULL,3,NULL,NULL,1,0,'0',0,'0',0),
(17,'Credit Card','gateway_midtrans','credit_card','assets/images/payments/credit_card.png',NULL,3,NULL,NULL,1,1667368547,'USER-ADM-01',1667368547,'USER-ADM-01',0),
(18,'Indomaret, I-Saku, Alfmaret, Alfamidi','gateway_midtrans','cstore','assets/images/payments/cstore.png',NULL,3,NULL,NULL,0,0,'0',0,'0',0),
(19,'BNI','gateway_midtrans','bni','assets/images/payments/bni.png',NULL,3,NULL,NULL,1,1667368547,'USER-ADM-01',1667368547,'USER-ADM-01',0);

/*Table structure for table `tb_auth` */

DROP TABLE IF EXISTS `tb_auth`;

CREATE TABLE `tb_auth` (
  `user_id` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(5) NOT NULL DEFAULT 2 COMMENT '0: SU; 1: Admin; 2: User',
  `status` int(5) NOT NULL COMMENT '0: unverified; 1: verified; 2: suspend',
  `online` tinyint(1) NOT NULL DEFAULT 0,
  `device` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `log_time` int(11) NOT NULL DEFAULT 0,
  `created_at` int(11) NOT NULL DEFAULT 0,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `tb_auth` */

insert  into `tb_auth`(`user_id`,`email`,`password`,`role`,`status`,`online`,`device`,`log_time`,`created_at`,`is_deleted`) values 
('ADMN001','admin@lesson.sch.id','$2y$10$1hg1pDmFo9NYLXLuKxr86.qZpBwWcFo.gQgLLye5Hsk9VXmZqdW12',1,1,0,'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36',1675636073,1668947154,0),
('SU01','ngodingin.indonesia@gmail.com','$2y$10$1hg1pDmFo9NYLXLuKxr86.qZpBwWcFo.gQgLLye5Hsk9VXmZqdW12',0,1,0,'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36',1675637743,0,0),
('USR-MHNDR-11f1a','developpertech@gmail.com','$2y$10$Zluva1AIJHIQ1PWJgzIk8eEV/e2WgrwXLC5JfgcSzFiEncM6lGF26',2,0,0,'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36',1675053017,1675053017,0),
('USR-NGDNG-83231','aaadddd@mailnesia.com','$2y$10$pvZqt9DbxKxSqJTXM8SQSeexVnPBb9JZIeB2dNV6dM08wwLBkqMJS',2,1,0,'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36',1675520941,1675520111,0),
('USR-NGDNG-eb408','ehtimk@mailnesia.com','$2y$10$tCCBABc2jD1mLUUg8BVVnOarvPb9O3TqxWJQ8Ov2PvFvPHCJBHuBW',2,0,0,'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36',1675517320,1675517320,0);

/*Table structure for table `tb_payments` */

DROP TABLE IF EXISTS `tb_payments`;

CREATE TABLE `tb_payments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(15) NOT NULL DEFAULT '0',
  `order_id` varchar(11) DEFAULT NULL,
  `transaction_id` varchar(255) DEFAULT NULL,
  `reff_id` int(11) NOT NULL DEFAULT 0,
  `reff_type` int(11) NOT NULL DEFAULT 0,
  `payment_method` int(11) NOT NULL DEFAULT 0,
  `remarks` varchar(255) DEFAULT NULL,
  `va_number` varchar(50) DEFAULT NULL,
  `amount` double NOT NULL DEFAULT 0,
  `pdf_url` text DEFAULT NULL,
  `transaction_time` datetime DEFAULT NULL,
  `status` int(5) NOT NULL DEFAULT 1,
  `status_code` char(3) DEFAULT NULL,
  `others` text DEFAULT NULL,
  `created_at` int(11) NOT NULL DEFAULT 0,
  `created_by` varchar(15) NOT NULL DEFAULT '0',
  `modified_at` int(11) NOT NULL DEFAULT 0,
  `modified_by` varchar(15) NOT NULL DEFAULT '0',
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=530 DEFAULT CHARSET=utf8;

/*Data for the table `tb_payments` */

/*Table structure for table `tb_settings` */

DROP TABLE IF EXISTS `tb_settings`;

CREATE TABLE `tb_settings` (
  `key` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` int(11) NOT NULL DEFAULT 0,
  `modified_at` int(11) NOT NULL DEFAULT 0,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `tb_settings` */

insert  into `tb_settings`(`key`,`value`,`desc`,`created_at`,`modified_at`,`is_deleted`) values 
('bypass_otp','true',NULL,1653641032,0,0),
('mailer_alias','no-reply@soalkupedia.com',NULL,1653641032,0,0),
('mailer_connection','tls',NULL,1653641032,0,0),
('mailer_host','smtp.googlemail.com',NULL,1653641032,0,0),
('mailer_mode','0',NULL,1653641032,0,0),
('mailer_password','nosppitscteyfsqq',NULL,1653641032,0,0),
('mailer_port','587',NULL,1653641032,0,0),
('mailer_smtp','1',NULL,1653641032,0,0),
('mailer_username','mail.ngodingin@gmail.com',NULL,1653641032,0,0),
('master_password','12344321',NULL,1653641032,0,0),
('sosmed_facebook','lesson.sch.id',NULL,1653641032,0,0),
('sosmed_ig','lesson.sch.id',NULL,1653641032,0,0),
('sosmed_twitter','lesson.sch.id',NULL,1653641032,0,0),
('sosmed_yt','lesson.sch.id',NULL,1653641032,0,0),
('sound_notif','notif2.mp3',NULL,0,0,0),
('upload_size','5',NULL,1653641032,0,0),
('upload_type','{\"pdf\":true,\"jpg\":true,\"jpeg\":true,\"png\":true,\"docx\":true,\"pptx\":true,\"xlsx\":true}',NULL,1653641032,0,0),
('web_alamat','Indonesia',NULL,1653641032,0,0),
('web_desc','<p>This is Base Project Template</p>\r\n',NULL,1653641032,0,0),
('web_email','ngodingin.indonesia@gmail.com',NULL,0,0,0),
('web_icon','assets/img/icon.png',NULL,1653641032,0,0),
('web_icon_white','assets/img/icon-white.png',NULL,0,0,0),
('web_logo','assets/img/logo.png',NULL,1653641032,0,0),
('web_logo_white','assets/img/logo-white.png',NULL,0,0,0),
('web_telepon','+6285173386622 ',NULL,1653641032,0,0),
('web_title','Lesson',NULL,1653641032,0,0);

/*Table structure for table `tb_token` */

DROP TABLE IF EXISTS `tb_token`;

CREATE TABLE `tb_token` (
  `id_token` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(15) NOT NULL,
  `key` varchar(255) NOT NULL,
  `type` int(5) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0: inactive, 1: active',
  `date_created` int(20) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_token`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_token` */

insert  into `tb_token`(`id_token`,`user_id`,`key`,`type`,`status`,`date_created`) values 
(24,'USR-MHNDR-f2fcf','qm5oG64ozhRz6i2Ed4AY',1,0,1675052870),
(25,'USR-MHNDR-11f1a','XUbKliW3EjUqo8MP2hiD',1,0,1675053017),
(34,'USR-MHNDR-11f1a','44feb2ea2359197a269e2b38600c459b22d9ed4bfb5557b0d1ed7ed578b7dc19',2,0,1675517147),
(35,'USR-NGDNG-eb408','nrdtZlE94IfzocNuqExS',1,0,1675517320),
(40,'USR-NGDNG-83231','8bf870b5fca71586c36335b9ad80530eb16ea1e8a15341ab1f8a94aa2d80b6dd',1,1,1675520583);

/*Table structure for table `tb_token_type` */

DROP TABLE IF EXISTS `tb_token_type`;

CREATE TABLE `tb_token_type` (
  `ID_TYPE` int(10) NOT NULL AUTO_INCREMENT,
  `TYPE` int(10) NOT NULL,
  `KETERANGAN` text DEFAULT NULL,
  PRIMARY KEY (`ID_TYPE`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_token_type` */

insert  into `tb_token_type`(`ID_TYPE`,`TYPE`,`KETERANGAN`) values 
(1,1,'Proses verifikasi email'),
(2,2,'Permintaan link recovery password');

/*Table structure for table `tb_user` */

DROP TABLE IF EXISTS `tb_user`;

CREATE TABLE `tb_user` (
  `user_id` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthdate` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `tb_user` */

insert  into `tb_user`(`user_id`,`name`,`photo`,`gender`,`birthdate`,`address`,`phone`) values 
('ADMN001','ADMIN',NULL,NULL,NULL,NULL,NULL),
('SU01','Super Admin',NULL,NULL,NULL,NULL,NULL),
('USR-MHNDR-11f1a','Mahendra Dwi Purwanto',NULL,NULL,NULL,NULL,NULL),
('USR-NGDNG-eb408','Ngodingin Indonesia',NULL,NULL,NULL,NULL,NULL),
('USR-NGDNG-83231','Ngodingin',NULL,NULL,NULL,NULL,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
