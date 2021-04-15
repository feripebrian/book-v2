/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.1.38-MariaDB : Database - e-book-v2
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`e-book-v2` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `e-book-v2`;

/*Table structure for table `tb_buku` */

DROP TABLE IF EXISTS `tb_buku`;

CREATE TABLE `tb_buku` (
  `id_buku` int(11) NOT NULL AUTO_INCREMENT,
  `judul_buku` text,
  `penerbit` text,
  `pengarang` text,
  `tahun` decimal(10,0) DEFAULT NULL,
  `kategori` text,
  `id_sekolah` int(11) DEFAULT NULL,
  `buku_kelas` int(11) DEFAULT NULL,
  `status` int(2) DEFAULT '1',
  `file` text,
  `date_upload` datetime DEFAULT NULL,
  `cover` text,
  PRIMARY KEY (`id_buku`),
  KEY `id_sekolah` (`id_sekolah`),
  KEY `id_sekolah_2` (`id_sekolah`),
  KEY `id_sekolah_3` (`id_sekolah`),
  CONSTRAINT `tb_buku_ibfk_1` FOREIGN KEY (`id_sekolah`) REFERENCES `tb_sekolah` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `tb_buku` */

insert  into `tb_buku`(`id_buku`,`judul_buku`,`penerbit`,`pengarang`,`tahun`,`kategori`,`id_sekolah`,`buku_kelas`,`status`,`file`,`date_upload`,`cover`) values 
(1,'Pendidikan Jasmasi, Olahraga dan Kesehatan','Kementrian Pendidikan dan Kebudayaan Republik Indonesia','-',2017,'Pelajaran',1,1,1,'http://book.it/source/FILE/Kelas_07_SMP_Pendidikan_Jasmani_Olahraga_dan_Kesehatan_Siswa_2017.pdf','2020-09-17 10:05:24','http://book.it/source/BUKU/Kelas_07_SMP_Pendidikan_Jasmani_Olahraga_dan_Kesehatan_Siswa_2017-thumb.jpg'),
(2,'Bahasa Indonesia','Kementrian Pendidikan dan Kebudayaan Republik Indonesia','-',2017,'Pelajaran',2,1,1,'http://book.it/source/FILE/Kelas_07_SMP_Bahasa_Indonesia_Siswa_2017.pdf','2020-09-17 10:05:33','http://book.it/source/BUKU/Kelas_07_SMP_Bahasa_Indonesia_Siswa_2017-thumb.jpg'),
(3,'Bahasa Inggris','Kementrian Pendidikan dan Kebudayaan Republik Indonesia','-',2017,'Pelajaran',3,1,1,'http://book.it/source/FILE/Kelas_07_SMP_Bahasa_Inggris_Siswa_2017.pdf','2020-09-17 10:05:38','http://book.it/source/BUKU/Kelas_07_SMP_Bahasa_Inggris_Siswa_2017-thumb.jpg'),
(4,'Matematika','Kementrian Pendidikan dan Kebudayaan Republik Indonesia','-',2017,'Pelajaran',2,11,1,'http://localhost/book/source/FILE/Kelas_07_SMP_Matematika_S1_Siswa_2017.pdf','2020-09-18 06:26:47','http://localhost/book/source/BUKU/Kelas_07_SMP_Matematika_S1_Siswa_2017-thumb.jpg'),
(5,'Seni Budaya','Kementrian Pendidikan dan Kebudayaan Republik Indonesia','-',2017,'Pelajaran',2,2,1,'http://book.it/source/FILE/Kelas_07_SMP_Seni_Budaya_Siswa_2017.pdf','2020-09-17 10:05:48','http://book.it/source/BUKU/Kelas_07_SMP_Seni_Budaya_Siswa_2017-thumb.jpg'),
(6,'Pendidikan pancasila dan kebudayaan','Kementrian Pendidikan dan Kebudayaan Republik Indonesia','-',2017,'Pelajaran',3,3,1,'http://book.it/source/FILE/Kelas_07_SMP_Pendidikan_Pancasila_dan_Kewarganegaraan_PPKn_Siswa_2017.pdf','2020-09-17 10:05:55','http://book.it/source/BUKU/Kelas_07_SMP_Pendidikan_Pancasila_dan_Kewarganegaraan_PPKn_Siswa_2017-thumb.jpg'),
(8,'p','p','p',0,'Umum',NULL,1,1,'http://book.it/source/BUKU/Kelas_07_SMP_Pendidikan_Jasmani_Olahraga_dan_Kesehatan_Siswa_2017-thumb.jpg','2020-09-18 06:20:51','http://book.it/source/BUKU/Kelas_07_SMP_Pendidikan_Jasmani_Olahraga_dan_Kesehatan_Siswa_2017-thumb.jpg'),
(9,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,NULL,'2020-09-19 08:35:29',NULL),
(10,'Tema 1 Selamatkan Makhluk Hidup','Pusat Kurikulum dan Perbukuan, Balitbang, Kemendikbud','Angi St Anggari, Afriki, Dara Retno Wulan, Nuniek Puspitawati,    Lely Mifthachul Khasanah, dan Santi Hendriyeti. ',2018,'Pelajaran',1,8,1,'https://drive.google.com/file/d/12syHE6ubwpx9TYBDw_RpCeV6YtyVokev','2020-09-22 09:00:40','1A5wdwkxqBQ6-uMzMQ78Eoh0Kf-g2kWmc');

/*Table structure for table `tb_galeri` */

DROP TABLE IF EXISTS `tb_galeri`;

CREATE TABLE `tb_galeri` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gambar` text,
  `keterangan` text,
  `status` int(2) DEFAULT '1',
  `date_upload` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `tb_galeri` */

insert  into `tb_galeri`(`id`,`gambar`,`keterangan`,`status`,`date_upload`) values 
(1,'http://book.it/source/GALERI/g7.jpg','<p>keterangan 1</p>\r\n',1,'2021-02-06 13:10:21'),
(2,'http://book.it/source/GALERI/g8.jpg','<p>keterangan</p>\r\n',1,'2020-05-12 13:46:08'),
(3,'http://book.it/source/GALERI/g6.jpg','<p>book</p>\r\n',1,'2020-05-12 14:09:02'),
(4,'http://book.it/source/GALERI/g5.jpg','',1,'2020-05-15 04:56:52'),
(5,'http://book.it/source/GALERI/g4.jpg','',1,'2020-05-15 04:56:59'),
(6,'http://book.it/source/GALERI/g3.jpg','',1,'2020-05-15 04:57:06'),
(7,'http://book.it/source/GALERI/g2.jpg','',1,'2020-05-15 04:57:12'),
(8,'http://book.it/source/GALERI/g1.jpg','',1,'2020-05-15 04:57:17'),
(9,'http://book.it/source/GALERI/d.jpg','',1,'2020-05-15 04:57:26'),
(10,'http://book.it/source/GALERI/a2.jpg','',1,'2020-05-15 04:57:31'),
(11,'http://book.it/source/GALERI/a.jpg','',1,'2020-05-15 04:57:36');

/*Table structure for table `tb_home` */

DROP TABLE IF EXISTS `tb_home`;

CREATE TABLE `tb_home` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tittle` varchar(50) DEFAULT NULL,
  `nama_sekolah` varbinary(100) DEFAULT NULL,
  `kepala_sekolah` varchar(100) DEFAULT NULL,
  `foto` text,
  `logo_login` text,
  `logo` text,
  `banner` text,
  `selogan` text,
  `background` text,
  `maskot` text,
  `tentang_e_book` text,
  `meta` text,
  `descriptions` text,
  `date_update` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tb_home` */

insert  into `tb_home`(`id`,`tittle`,`nama_sekolah`,`kepala_sekolah`,`foto`,`logo_login`,`logo`,`banner`,`selogan`,`background`,`maskot`,`tentang_e_book`,`meta`,`descriptions`,`date_update`) values 
(1,'Perpustakaan','SMK Negeri Tomer','Kepala Sekolah','http://book-v2.it/source/PENGATURAN/avatar5.png','http://book-v2.it/source/f2399a3c-e44e-4e2a-82d0-520696ffad1b.png','http://book-v2.it/source/PENGATURAN/LOGO%20(3).png','http://book-v2.it/source/PENGATURAN/banner.png','Rajin-rajinlah belajar Demi Masa Depan','http://book-v2.it/source/PENGATURAN/banner.png','http://book-v2.it/source/PENGATURAN/MKT.png','<p>Perpustakaan digital (E-Book Library) adalah perpustakaan yang mempunyai koleksi buku sebagian besar dalam bentuk format digital dan yang bisa diakses dengan komputer atau smart phone. Jenis perpustakaan ini berbeda dengan jenis perpustakaan konvensional yang berupa kumpulan buku tercetak, film mikro (microform dan microfiche), ataupun kumpulan kaset audio, video, dll. Isi dari perpustakaan digital berada dalam suatu komputer server yang bisa ditempatkan secara lokal, maupun di lokasi yang jauh, namun dapat diakses dengan cepat dan mudah lewat jaringan komputer.</p>\r\n','meta','description','2020-10-23 15:04:34');

/*Table structure for table `tb_kategori` */

DROP TABLE IF EXISTS `tb_kategori`;

CREATE TABLE `tb_kategori` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_kategori` int(11) DEFAULT NULL,
  `kategori` text,
  `kelas` int(2) DEFAULT NULL,
  `status` int(2) DEFAULT '1',
  `date_upload` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

/*Data for the table `tb_kategori` */

insert  into `tb_kategori`(`id`,`id_kategori`,`kategori`,`kelas`,`status`,`date_upload`) values 
(1,1,'Novel',NULL,0,'2020-09-17 10:03:48'),
(3,3,'Ensiklopedia',NULL,0,NULL),
(4,NULL,'Kategoris',NULL,NULL,'2020-09-21 03:13:16'),
(5,5,'Antologi',NULL,0,NULL),
(6,6,'Dongeng',NULL,0,NULL),
(7,7,'Biografi',NULL,0,NULL),
(8,8,'Catatan Harian',NULL,0,NULL),
(9,9,'Fotografi',NULL,0,NULL),
(10,10,'Karya Ilmiah',NULL,0,'2020-04-25 08:40:34'),
(11,11,'Tafsir',NULL,0,NULL),
(12,12,'Kamus',NULL,0,NULL),
(13,13,'Panduan',NULL,0,NULL),
(14,14,'Atlas',NULL,0,NULL),
(15,15,'Ilmiah',NULL,0,NULL),
(16,16,'Olahraga',NULL,0,'2020-04-25 08:35:37'),
(17,17,'SD',NULL,0,'2020-09-17 10:04:05'),
(18,18,'SMP',NULL,0,'2020-09-17 10:04:14'),
(19,19,'SMA',NULL,0,'2020-09-17 10:04:25'),
(20,20,'Pelajaran',NULL,1,'2020-09-17 10:03:19'),
(21,21,'Umum',NULL,1,'2020-09-17 10:03:39');

/*Table structure for table `tb_kelas` */

DROP TABLE IF EXISTS `tb_kelas`;

CREATE TABLE `tb_kelas` (
  `kelas` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_kelas` */

insert  into `tb_kelas`(`kelas`) values 
(1),
(2),
(3),
(4),
(5),
(6),
(7),
(8),
(9),
(10),
(11),
(12);

/*Table structure for table `tb_konten` */

DROP TABLE IF EXISTS `tb_konten`;

CREATE TABLE `tb_konten` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(50) DEFAULT NULL,
  `isi` text,
  `date_update` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tb_konten` */

insert  into `tb_konten`(`id`,`judul`,`isi`,`date_update`) values 
(1,'Profile Sekolah','<p style=\"text-align:center\"><a href=\"http://book.it/source/f2399a3c-e44e-4e2a-82d0-520696ffad1b.png\" target=\"_blank\"><img alt=\"\" src=\"http://book-v2.it/source/f2399a3c-e44e-4e2a-82d0-520696ffad1b.png\" style=\"height:312px; width:307px\" /></a></p>\r\n\r\n<p style=\"text-align:justify\">&quot;But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?&quot;</p>\r\n','2020-10-23 15:06:26'),
(2,'Visi dan Misi','<p style=\"text-align:justify\">&quot;But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?&quot;</p>\r\n','2020-05-11 22:41:33');

/*Table structure for table `tb_log` */

DROP TABLE IF EXISTS `tb_log`;

CREATE TABLE `tb_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_member` int(20) DEFAULT NULL,
  `nama` text,
  `kategori` varchar(20) DEFAULT NULL,
  `tanggal` int(2) DEFAULT NULL,
  `bulan` varchar(15) DEFAULT NULL,
  `tahun` int(4) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

/*Data for the table `tb_log` */

insert  into `tb_log`(`id`,`id_member`,`nama`,`kategori`,`tanggal`,`bulan`,`tahun`,`date`,`time`) values 
(14,123,'Feri Pebriansah Nugraha','Guru',4,'June',2020,'2020-06-04','14:24:31'),
(15,123,'Feri Pebriansah Nugraha','Guru',4,'June',2020,'2020-06-04','14:26:56'),
(16,123,'Feri Pebriansah Nugraha','Guru',4,'June',2020,'2020-06-04','14:37:20'),
(17,123,'Feri Pebriansah Nugraha','Guru',2,'September',2020,'2020-09-02','03:52:35'),
(18,123,'Feri Pebriansah Nugraha','Guru',5,'September',2020,'2020-09-05','13:44:59'),
(19,123,'Feri Pebriansah Nugraha','Guru',17,'September',2020,'2020-09-17','03:36:30'),
(20,123,'Feri Pebriansah Nugraha','Guru',17,'September',2020,'2020-09-17','03:58:08'),
(21,123,'Feri Pebriansah Nugraha','Guru',17,'September',2020,'2020-09-17','09:34:03'),
(22,123,'Feri Pebriansah Nugraha','Guru',17,'September',2020,'2020-09-17','09:43:50'),
(23,123,'Feri Pebriansah Nugraha','Guru',17,'September',2020,'2020-09-17','09:45:17'),
(24,123,'Feri Pebriansah Nugraha','Guru',17,'September',2020,'2020-09-17','09:45:39'),
(25,123,'Feri Pebriansah Nugraha','Guru',17,'September',2020,'2020-09-17','09:45:52'),
(26,123,'Feri Pebriansah Nugraha','Guru',17,'September',2020,'2020-09-17','09:46:01'),
(27,123,'Feri Pebriansah Nugraha','Guru',17,'September',2020,'2020-09-17','09:46:15'),
(28,123,'Feri Pebriansah Nugraha','Guru',17,'September',2020,'2020-09-17','09:48:37'),
(29,123,'Feri Pebriansah Nugraha','Guru',17,'September',2020,'2020-09-17','09:51:18'),
(30,123,'Feri Pebriansah Nugraha','Guru',17,'September',2020,'2020-09-17','09:52:32'),
(31,123,'Feri Pebriansah Nugraha','Guru',17,'September',2020,'2020-09-17','09:53:56'),
(32,123,'Feri Pebriansah Nugraha','Guru',17,'September',2020,'2020-09-17','10:04:42'),
(33,123,'Feri Pebriansah Nugraha','Guru',18,'September',2020,'2020-09-18','03:37:26'),
(34,123,'Feri Pebriansah Nugraha','Guru',18,'September',2020,'2020-09-18','04:19:42'),
(35,123,'Feri Pebriansah Nugraha','Guru',18,'September',2020,'2020-09-18','05:18:13'),
(36,123,'Feri Pebriansah Nugraha','Guru',19,'September',2020,'2020-09-19','09:05:46'),
(37,123,'Feri Pebriansah Nugraha','Guru',19,'September',2020,'2020-09-19','09:14:15'),
(38,123,'Feri Pebriansah Nugraha','Guru',20,'September',2020,'2020-09-20','04:33:54'),
(39,123,'Feri Pebriansah Nugraha','Guru',20,'September',2020,'2020-09-20','05:25:32'),
(40,123,'Feri Pebriansah Nugraha','Guru',22,'September',2020,'2020-09-22','08:10:30'),
(41,123,'Feri Pebriansah Nugraha','Guru',22,'September',2020,'2020-09-22','09:02:02'),
(42,123,'Feri Pebriansah Nugraha','Guru',23,'September',2020,'2020-09-23','02:51:55'),
(43,123,'Feri Pebriansah Nugraha','Guru',23,'September',2020,'2020-09-23','04:18:40'),
(44,123,'Feri Pebriansah Nugraha','Guru',24,'September',2020,'2020-09-24','07:13:29'),
(45,123,'Feri Pebriansah Nugraha','Guru',23,'October',2020,'2020-10-23','15:08:01'),
(46,123,'Feri Pebriansah Nugraha','Guru',7,'November',2020,'2020-11-07','04:25:51'),
(47,123,'Feri Pebriansah Nugraha','Guru',2,'December',2020,'2020-12-02','02:54:49'),
(48,123,'Feri Pebriansah Nugraha','Guru',6,'February',2021,'2021-02-06','12:58:42'),
(49,123,'Feri Pebriansah Nugraha','Guru',6,'February',2021,'2021-02-06','13:21:43'),
(50,123,'Feri Pebriansah Nugraha','Guru',18,'February',2021,'2021-02-18','12:37:23'),
(51,123,'Feri Pebriansah Nugraha','Guru',13,'April',2021,'2021-04-13','17:05:25'),
(52,123,'Feri Pebriansah Nugraha','Guru',13,'April',2021,'2021-04-13','17:08:23'),
(53,123,'Feri Pebriansah Nugraha','Guru',13,'April',2021,'2021-04-13','17:19:56');

/*Table structure for table `tb_member` */

DROP TABLE IF EXISTS `tb_member`;

CREATE TABLE `tb_member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_member` int(20) NOT NULL,
  `password` varchar(64) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `kategori` enum('Guru','Siswa') DEFAULT NULL,
  `status` enum('1','0') DEFAULT '0',
  `foto` text,
  `akses` enum('1','0') DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tb_member` */

insert  into `tb_member`(`id`,`id_member`,`password`,`nama`,`email`,`kategori`,`status`,`foto`,`akses`) values 
(1,123456789,'0cc175b9c0f1b6a831c399e269772661','Feri Pebriansah Nugraha','feripebriansah@gmail.com','Guru','1',NULL,'0'),
(2,123,'202cb962ac59075b964b07152d234b70','Feri Pebriansah Nugraha','feripebriansah@gmail.com','Guru','1',NULL,'0');

/*Table structure for table `tb_member_kategori` */

DROP TABLE IF EXISTS `tb_member_kategori`;

CREATE TABLE `tb_member_kategori` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tb_member_kategori` */

insert  into `tb_member_kategori`(`id`,`kategori`) values 
(1,'Guru'),
(2,'Siswa');

/*Table structure for table `tb_saran_buku` */

DROP TABLE IF EXISTS `tb_saran_buku`;

CREATE TABLE `tb_saran_buku` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` text,
  `judul_buku` text,
  `penerbit` text,
  `pengarang` text,
  `tahun` decimal(10,0) DEFAULT NULL,
  `date_upload` datetime DEFAULT NULL,
  `status` int(2) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `tb_saran_buku` */

insert  into `tb_saran_buku`(`id`,`nama`,`judul_buku`,`penerbit`,`pengarang`,`tahun`,`date_upload`,`status`) values 
(1,'feri','Pemrogramman Website','Penerbit','Pengarang',2020,NULL,2),
(2,'nama','a',NULL,'a',1,'2020-04-27 06:33:47',1),
(3,'1','1','1','1',1,'2020-04-27 06:34:48',1);

/*Table structure for table `tb_sekolah` */

DROP TABLE IF EXISTS `tb_sekolah`;

CREATE TABLE `tb_sekolah` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sekolah` varchar(50) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `tb_sekolah` */

insert  into `tb_sekolah`(`id`,`sekolah`) values 
(1,'SD'),
(2,'SMP'),
(3,'SMA');

/*Table structure for table `tb_slide` */

DROP TABLE IF EXISTS `tb_slide`;

CREATE TABLE `tb_slide` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `image` text,
  `description` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `star` int(1) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `tb_slide` */

insert  into `tb_slide`(`id`,`name`,`image`,`description`,`created_at`,`updated_at`,`star`,`status`) values 
(3,'slide 1','http://book-v2.it/source/SLIDE/1.jpg','description','2020-09-19 13:22:16','2020-10-23 15:06:38',NULL,1),
(4,'slide 2','http://book-v2.it/source/SLIDE/2.jpg','description','2020-09-19 13:22:19','2020-10-23 15:06:42',NULL,1),
(5,'Slide 3','http://book-v2.it/source/SLIDE/3.jpg','description','2020-09-19 08:37:37','2020-10-23 15:06:47',NULL,1);

/*Table structure for table `tb_tokens` */

DROP TABLE IF EXISTS `tb_tokens`;

CREATE TABLE `tb_tokens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(255) NOT NULL,
  `id_member` int(20) NOT NULL,
  `created` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

/*Data for the table `tb_tokens` */

insert  into `tb_tokens`(`id`,`token`,`id_member`,`created`) values 
(1,'c9688b33bce72b21db32e118eb4ece',1,'2020-05-15'),
(2,'a02b857f2eff73e8e188f35529dd91',1,'2020-05-15'),
(3,'7dc0aa810e80b3e4f82035e4cbfff2',1,'2020-05-15'),
(4,'3a85d2178d036673a374a5acab7da4',1,'2020-05-15'),
(5,'5ee67acd206d05f9349362852b06da',1,'2020-05-15'),
(6,'fcf8cc769f7b77ed2e43dbdc6e84c4',1,'2020-05-15'),
(7,'5cccd20c519c3ce09d41e36d66c917',1,'2020-05-15'),
(8,'56097895bc5230cba06d65b34d5382',1,'2020-05-15'),
(9,'28be73145a1aeef3b66a3b99e2c0ad',1,'2020-05-15'),
(10,'8989d6b1c6dd33be9100483e799d30',1,'2020-05-15'),
(11,'9c320bc8499977b59b1c72b878b055',1,'2020-05-15'),
(12,'c38cf60fc9ea6fac08ffbfbbe3aea4',1,'2020-05-15'),
(13,'1de731dd04a1c52f0887b5e39868e7',1,'2020-05-15'),
(14,'a007e5d701a49c3927e896c57368c8',1,'2020-05-15'),
(15,'db781ef0d4f4997f0ec57dcabea1c9',1,'2020-05-15'),
(16,'21405d43032f16076df7eb64af2c93',1,'2020-05-15'),
(17,'e5597b1dec45f2de25a986a936a9e4',1,'2020-05-15'),
(18,'9f4b57c4d5b177f2d86cb9032bef58',1,'2020-05-15'),
(19,'a359be890b3fac04549835dca6037f',1,'2020-05-30'),
(20,'da133068cee23b0b83c2dde6ce4301',1,'2020-05-30'),
(21,'a80b0aaadca2db3f3b2038a0ab24e2',1,'2020-05-30'),
(22,'20068',1,'2020-05-30'),
(23,'5463b9dacc52dc41bf1c5f195a3b00',1,'2020-05-30'),
(24,'2d27de297e460f767da0538643208d',11,'2020-06-04'),
(25,'2561762b913707db89577b4681662b',11,'2020-06-04'),
(26,'40554054e32fd673f3e30f9d7f7902',11,'2020-06-04');

/*Table structure for table `tb_user` */

DROP TABLE IF EXISTS `tb_user`;

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(20) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `katerangan` enum('Guru','Siswa') DEFAULT NULL,
  `status` enum('1','0') DEFAULT '1',
  `foto` text,
  `akses` enum('1','0') DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `tb_user` */

insert  into `tb_user`(`id`,`id_user`,`username`,`password`,`nama`,`email`,`katerangan`,`status`,`foto`,`akses`) values 
(8,8,'feri','7815696ecbf1c96e6894b779456d330e','Feri Pebriansah Nugraha','feripebriansah@gmail.com',NULL,'1','http://book.it/source/f2399a3c-e44e-4e2a-82d0-520696ffad1b.png','1'),
(9,0,'admin','7815696ecbf1c96e6894b779456d330e','admin','admin@gmail.com',NULL,'1','http://book.it/source/Kepsek1.png','1');

/*Table structure for table `tb_user_akses` */

DROP TABLE IF EXISTS `tb_user_akses`;

CREATE TABLE `tb_user_akses` (
  `id_user` bigint(20) NOT NULL,
  `akses` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `tb_user_akses` */

insert  into `tb_user_akses`(`id_user`,`akses`) values 
(9,'dasbor/member'),
(9,'dasbor/pengaturan'),
(9,'dasbor/galeri'),
(9,'dasbor/video_edukasi'),
(9,'dasbor/saran_buku'),
(9,'dasbor/kategori_video'),
(8,'dasbor/user'),
(8,'dasbor/member'),
(8,'dasbor/pengaturan'),
(8,'dasbor/galeri'),
(8,'dasbor/video_edukasi'),
(8,'dasbor/saran_buku'),
(8,'dasbor/profile_sekolah'),
(8,'dasbor/kategori'),
(8,'dasbor/buku'),
(8,'dasbor/visi_dan_misi'),
(9,'dasbor/user'),
(8,'dasbor/kategori_video'),
(9,'dasbor/profile_sekolah'),
(9,'dasbor/visi_dan_misi'),
(9,'dasbor/slide'),
(9,'dasbor/kategori'),
(9,'dasbor/buku'),
(8,'dasbor/slide');

/*Table structure for table `tb_video` */

DROP TABLE IF EXISTS `tb_video`;

CREATE TABLE `tb_video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul_video` text,
  `link` text,
  `embed` text,
  `keterangan` text,
  `video_kategori` int(11) DEFAULT NULL,
  `date_upload` datetime DEFAULT NULL,
  `status` int(2) DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `video_kategori` (`video_kategori`),
  CONSTRAINT `video_kategori` FOREIGN KEY (`video_kategori`) REFERENCES `tb_video_kategori` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `tb_video` */

insert  into `tb_video`(`id`,`judul_video`,`link`,`embed`,`keterangan`,`video_kategori`,`date_upload`,`status`) values 
(1,'judul 1','','<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/Ic8whn-t0Io\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>','<p>Keterangan 1</p>\r\n',1,'2020-06-18 11:42:13',1),
(4,'Judul Video 4','','<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/Ic8whn-t0Io\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>','<p>KETERANGAN 4</p>\r\n',2,'2020-04-25 11:40:29',1),
(5,'Rizky Febian - Makna Cinta','http://localhost/book-v2/source/VIDEO/WhatsApp%20Video.mp4','https://www.youtube.com/embed/Asfp9tlzEYY','<p><span dir=\"auto\">&ldquo;Garis Cinta&rdquo; merupakan sebuah persembahan terbaru dari Rizky Febian di tahun 2020, proses produksi lagunya sendiri dilakukan dirumah. Dalam &ldquo;Garis Cinta&rdquo; terdapat 3 lagu di dalamnya yaitu Cuek, Mantra Cinta dan Makna Cinta, makna dari masing - masing lagu tersebut merupakan cerita satu kesatuan.</span></p>\r\n',NULL,'2021-04-13 17:29:34',1),
(6,'Rizky Febian - Makna Cinta','','<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/Ic8whn-t0Io\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>','',1,'2020-09-19 09:11:59',1),
(7,'Rizky Febian - Makna Cinta aaaaaaaaaaaaaaaaaaaaaaaa','','<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/Ic8whn-t0Io\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>','',5,'2020-09-21 03:31:09',1),
(8,'Kelas 01 - Bahasa Indonesia - Mengenal Anggota Tubuh | Video Pelajaran Sekolah K13','','<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/Ic8whn-t0Io\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>','',5,'2020-09-21 03:31:30',1);

/*Table structure for table `tb_video_kategori` */

DROP TABLE IF EXISTS `tb_video_kategori`;

CREATE TABLE `tb_video_kategori` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(50) DEFAULT NULL,
  `slug` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `tb_video_kategori` */

insert  into `tb_video_kategori`(`id`,`kategori`,`slug`) values 
(1,'Kelas Dasar','kelas_dasar'),
(2,'Kelas Menengah','kelas_menengah'),
(3,'Kelas Tinggi','kelas_tinggi'),
(5,'Kategoris','kategoris'),
(6,'asd','asd');

/*Table structure for table `tb_visitor` */

DROP TABLE IF EXISTS `tb_visitor`;

CREATE TABLE `tb_visitor` (
  `ip` varchar(20) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `hits` int(11) DEFAULT NULL,
  `online` varchar(225) DEFAULT NULL,
  `time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_visitor` */

insert  into `tb_visitor`(`ip`,`date`,`hits`,`online`,`time`) values 
('::1','2020-09-02',3,'1599012157','2020-09-02 03:59:54'),
('::1','2020-09-05',1,'1599306299','2020-09-05 13:44:59'),
('127.0.0.1','2020-09-17',504,'1600332868','2020-09-17 02:54:59'),
('127.0.0.1','2020-09-18',201,'1600400775','2020-09-18 02:43:48'),
('127.0.0.1','2020-09-19',59,'1600500839','2020-09-19 08:14:15'),
('127.0.0.1','2020-09-20',93,'1600572332','2020-09-20 04:33:46'),
('127.0.0.1','2020-09-21',3,'1600688908','2020-09-21 02:32:28'),
('127.0.0.1','2020-09-22',24,'1600758186','2020-09-22 08:10:07'),
('127.0.0.1','2020-09-23',6,'1600830820','2020-09-23 02:51:41'),
('127.0.0.1','2020-09-24',67,'1600926018','2020-09-24 04:36:48'),
('127.0.0.1','2020-09-25',9,'1601017343','2020-09-25 08:36:41'),
('127.0.0.1','2020-10-06',1,'1601961945','2020-10-06 07:25:45'),
('127.0.0.1','2020-10-23',36,'1603458528','2020-10-23 14:51:30'),
('127.0.0.1','2020-11-07',7,'1604719857','2020-11-07 04:24:42'),
('127.0.0.1','2020-12-02',13,'1606874117','2020-12-02 02:54:27'),
('127.0.0.1','2021-01-14',1,'1610588983','2021-01-14 02:49:43'),
('127.0.0.1','2021-02-06',37,'1612614105','2021-02-06 12:58:17'),
('127.0.0.1','2021-02-18',13,'1613648285','2021-02-18 12:36:49'),
('::1','2021-04-13',42,'1618327816','2021-04-13 17:04:53'),
('127.0.0.1','2021-04-13',23,'1618327303','2021-04-13 17:19:44');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
