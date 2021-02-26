/*
SQLyog Community v13.1.1 (64 bit)
MySQL - 10.1.30-MariaDB : Database - alb_essen
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`alb_essen` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `alb_essen`;

/*Table structure for table `alb_blog` */

DROP TABLE IF EXISTS `alb_blog`;

CREATE TABLE `alb_blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` text NOT NULL,
  `description` text NOT NULL,
  `slug` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `title` varchar(100) NOT NULL,
  `keywords` varchar(100) NOT NULL,
  `readers` int(7) DEFAULT NULL,
  `create_at` varchar(50) NOT NULL,
  `time` varchar(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `alb_blog` */

insert  into `alb_blog`(`id`,`text`,`description`,`slug`,`thumb`,`title`,`keywords`,`readers`,`create_at`,`time`) values 
(7,'<p style=\"text-align:center\"><span style=\"font-size:16px\"><strong>Pemakaian Essen ALB</strong></span></p>\r\n\r\n<p style=\"text-align:justify\">Cara penggunaannya essen ALB insya allah joss tips pilih salah satu dan focusin</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Ulet hongkong/german</strong></p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\">2 ons direndam air panas 10 menit sampai ulat empuk (tidak keras) setelah itu tiriskan</li>\r\n	<li style=\"text-align:justify\">Campurkan</li>\r\n	<li style=\"text-align:justify\">Cairan ALB 2 tutup</li>\r\n	<li style=\"text-align:justify\">Essen ALB (merah) 1 tutup</li>\r\n	<li style=\"text-align:justify\">Essen ALB (butek) 6 tetes</li>\r\n	<li style=\"text-align:justify\">Aduk hingga rata diamkan satu jam sebelum dipakai umpan siap digunakan</li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\"><strong>Kepala ayam ALB</strong></p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\">Siapkan pala ayam yang sudah jadi campur cairan 2 sendok makan</li>\r\n	<li style=\"text-align:justify\">aduk rata kasih pengeras aduk rata kasih essen ALB (merah) 5 tetes.</li>\r\n	<li style=\"text-align:justify\">tambah essen ALB (butek) 10 tetes.</li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\"><strong>Cacing kuah ALB</strong></p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\">Siapkan cacing 2ons</li>\r\n	<li style=\"text-align:justify\">rendam dengan cairan ALB kurang lebih 4 jam</li>\r\n	<li style=\"text-align:justify\">tambahkan tetesan essen ALB (butek) 10 tetes&nbsp;</li>\r\n	<li style=\"text-align:justify\">Tambahkan essen ALB (merah) 10tetes umpan siap digunakan</li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\"><strong>Jangkrik kuah ALB</strong></p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\">Siapkan jangkrik 3ons</li>\r\n	<li style=\"text-align:justify\">siram dengan cairan ALB sampe kerendam.</li>\r\n	<li style=\"text-align:justify\">tambahkan tetesan essen ALB (butek) 10 tetes.</li>\r\n	<li style=\"text-align:justify\">tambahkan essen ALB (merah) 5 tetes.</li>\r\n	<li style=\"text-align:justify\">diamkan selama 4 jam umpan siap digunakan.</li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\"><strong>Ayam suir lk ALB</strong></p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\">Rebus dada suir setelah itu</li>\r\n	<li style=\"text-align:justify\">Kasih 2 tutup cairan ALB</li>\r\n	<li style=\"text-align:justify\">1 tutup essen merah</li>\r\n	<li style=\"text-align:justify\">10 tetes essen butek</li>\r\n	<li style=\"text-align:justify\">Telor bebek/ayam kuningnya 1/ lemak kuda</li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\"><strong>Ati AyamALB</strong></p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\">Siapkan 4 ati ayam blender airnya menggunakan cairan ALB 2 sendok</li>\r\n	<li style=\"text-align:justify\">Setelah rata letakan di plastik kasih 1 bungkus susu dancow putih</li>\r\n	<li style=\"text-align:justify\">kasih pengeras (kinoy/mie blender) 5 sendok secukupnya yg penting bisa kelempar</li>\r\n	<li style=\"text-align:justify\">Tambahkan Essen ALB Merah 10 tetes</li>\r\n	<li style=\"text-align:justify\">Tambahkan ALB butek 15 tetes</li>\r\n	<li style=\"text-align:justify\">Umpan siap digunakan.</li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\"><br />\r\n<strong>Jeroan Ikan ALB</strong></p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\">20 biji potong dadu essen ALB butek 30 tetes,cairan 5 tutup merah 10 tetes</li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\"><br />\r\n<strong>Keju ALB</strong></p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\">Keju 1 bungkus isi 500gram</li>\r\n	<li style=\"text-align:justify\">1 telor + kuku bima + cairan 1 tutup + essen alb merah 5 tetes + alb butek 10 tetes</li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Belut ALB</strong></p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\">Belut 1 ekor masukin plastik kiloan kasih cairan 10 tutup</li>\r\n	<li style=\"text-align:justify\">ALB merah 5 tetes ALB butek</li>\r\n	<li style=\"text-align:justify\">10 tetes kocok rata ikat lalu rebus om.</li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\"><strong>Ikan mas ALB</strong></p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\">sasak pun sama</li>\r\n	<li style=\"text-align:justify\">Masukin plastik kasih cairan 10 tutup ALB merah 5 tetes ALB butek 10 tetes &nbsp;</li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\"><strong>Ayam blender. &nbsp;</strong></p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\">Ayam setengah kg</li>\r\n	<li style=\"text-align:justify\">di rebus sampai matang</li>\r\n	<li style=\"text-align:justify\">di blender</li>\r\n	<li style=\"text-align:justify\">dikasih keju sepotong.</li>\r\n	<li style=\"text-align:justify\">telor ayam 2 butir ambil kuning ya aja</li>\r\n	<li style=\"text-align:justify\">Essen butek 7 tetes.</li>\r\n	<li style=\"text-align:justify\">essen merah 5 tetes.</li>\r\n	<li style=\"text-align:justify\">cairan ALB 3 tutup.</li>\r\n	<li style=\"text-align:justify\">pengeras super mi.</li>\r\n</ul>\r\n','Ulet hongkong/german 2 ons direndam air panas 10 menit sampai ulat empuk (tidak keras) setelah itu tiriskan,Untuk jangkrik kuah ALB Siapkan jangkrik 3ons siram dengan cairan ALB sampe kerendam tambahkan tetesan essen ALB (butek) 10 tetes essen ALB (merah) 5 tetes diamkan selama 4 jam umpan siap digunakan','Macam-Macam-Cara-Penggunaan-ALB','20180713020638.jpg','Macam Macam Cara Penggunaan ALB','essen alb,meracik umpan,essen lele,essen ikan,essen juara,essen',21,'13 Juli 2018','14:06');

/*Table structure for table `daftar_brg` */

DROP TABLE IF EXISTS `daftar_brg`;

CREATE TABLE `daftar_brg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `daftar_brg` */

insert  into `daftar_brg`(`id`,`nama`,`harga`) values 
(1,'Essen ALB Paket 1',155000),
(2,'Essen ALB Paket 2',115000),
(3,'Essen ALB Merah',50000),
(4,'Essen Cairan ALB 600 ML',60000),
(5,'Essen Cairan ALB 1.5 L',100000),
(6,'Essen ALB Butek 10ML',25000),
(7,'Essen ALB Butek 30ML',65000);

/*Table structure for table `data_pembeli` */

DROP TABLE IF EXISTS `data_pembeli`;

CREATE TABLE `data_pembeli` (
  `id_activity` int(11) NOT NULL AUTO_INCREMENT,
  `salt` text,
  `ip` varchar(50) NOT NULL,
  `host` varchar(50) NOT NULL,
  `path_exec` varchar(100) NOT NULL,
  `server_name` varchar(50) NOT NULL,
  `port` int(11) NOT NULL,
  `server_port` int(11) NOT NULL,
  `device` text NOT NULL,
  `server_software` text NOT NULL,
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_activity`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

/*Data for the table `data_pembeli` */

insert  into `data_pembeli`(`id_activity`,`salt`,`ip`,`host`,`path_exec`,`server_name`,`port`,`server_port`,`device`,`server_software`,`time`) values 
(23,'5ae16ba62e147','::1','GALIH','/alb_essen/halaman/send','localhost',64348,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-04-26 13:03:18'),
(24,'5ae16d5147d33','::1','GALIH','/alb_essen/halaman/send','localhost',64584,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-04-26 13:10:25'),
(25,'5b1eaf1adf44d','::1','GALIH','/alb_essen/halaman/send','localhost',62040,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-06-12 00:19:23'),
(26,'5b1eaf70da5b5','::1','GALIH','/alb_essen/halaman/send','localhost',62043,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-06-12 00:20:48'),
(27,'5b211a560550a','::1','GALIH','/alb_essen/halaman/send','localhost',63308,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:59.0) Gecko/20100101 Firefox/59.0','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-06-13 20:21:26'),
(28,'5b27c1f153fac','::1','GALIH','/alb_essen/halaman/send','localhost',52827,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-06-18 21:30:09'),
(29,'5b2bad317340f','::1','GALIH','/alb_essen/halaman/send','localhost',56535,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:60.0) Gecko/20100101 Firefox/60.0','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-06-21 20:50:41'),
(30,'5b2d143b3d438','::1','GALIH','/alb_essen/halaman/send','localhost',61837,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-06-22 22:22:35'),
(31,'5b2d16d5efd1d','::1','GALIH','/alb_essen/halaman/send','localhost',61930,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-06-22 22:33:42'),
(32,'5b2f923b6d49b','::1','GALIH','/alb_essen/halaman/send','localhost',50045,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:60.0) Gecko/20100101 Firefox/60.0','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-06-24 19:44:43'),
(33,'5b48469d423d6','::1','GALIH','/alb_essen/halaman/send','localhost',63054,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 13:28:45'),
(34,'5b4846e51406f','::1','GALIH','/alb_essen/halaman/send','localhost',63074,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 13:29:57'),
(35,'5b4847667f852','::1','GALIH','/alb_essen/halaman/send','localhost',63099,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 13:32:06');

/*Table structure for table `history_beli` */

DROP TABLE IF EXISTS `history_beli`;

CREATE TABLE `history_beli` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `salt` text,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `kelurahan` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `barang` varchar(50) NOT NULL,
  `kako` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `status` enum('FIX','NOT FIX') NOT NULL DEFAULT 'NOT FIX',
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=112 DEFAULT CHARSET=latin1;

/*Data for the table `history_beli` */

insert  into `history_beli`(`id`,`salt`,`nama`,`alamat`,`kelurahan`,`kecamatan`,`barang`,`kako`,`harga`,`status`,`waktu`) values 
(111,'5b4847667f852','si admin','dasdasdasdasdasdasdas','dasdasd','dasdasdas','Essen Cairan ALB 1.5 L','Depok',100000,'FIX','2018-07-13 13:32:06');

/*Table structure for table `kotak_suara` */

DROP TABLE IF EXISTS `kotak_suara`;

CREATE TABLE `kotak_suara` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `saran` text NOT NULL,
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `device` text NOT NULL,
  `host` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `kotak_suara` */

insert  into `kotak_suara`(`id`,`email`,`saran`,`time`,`device`,`host`) values 
(1,'galihkur90@gmail.com','bagus gan....','2018-04-27 23:19:37','Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36','GALIH'),
(2,'galihkurjjjj29@gmail.com','dasdasdasdasd','2018-04-27 23:49:40','Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36','GALIH'),
(3,'galihkdsur29@gmail.com','fasdfasdfasdfasdfasdf','2018-06-10 23:27:02','Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','GALIH'),
(4,'galihkdsur29@gmail.com','dasdasdasdasdasdasdasdasd','2018-06-12 15:04:06','Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','GALIH');

/*Table structure for table `produk` */

DROP TABLE IF EXISTS `produk`;

CREATE TABLE `produk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_barang` varchar(255) NOT NULL,
  `photo` text NOT NULL,
  `description` text NOT NULL,
  `harga` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

/*Data for the table `produk` */

insert  into `produk`(`id`,`nama_barang`,`photo`,`description`,`harga`) values 
(11,'Essen ALB Butek 30ml','20180620033135.jpg','<p style=\"text-align:justify\">Fungsi :</p>\r\n\r\n<p style=\"text-align:justify\">Mengundang datang nya ikan indukan.</p>\r\n',65000),
(12,'Essen ALB Butek 10ml','20180620033549.jpg','<p style=\"text-align:justify\">Fungsi :</p>\r\n\r\n<p style=\"text-align:justify\">Mengundang datang nya ikan indukan.</p>\r\n',25000),
(13,'Cairan ALB 600ml','20180620033722.jpg','<p style=\"text-align:justify\">Fungsi :</p>\r\n\r\n<p style=\"text-align:justify\">Penambah nafsu makan ikan yang sedang galau.</p>\r\n',40000),
(14,'Essen ALB Merah 30ml','20180620033837.jpg','<p>Fungsi :</p>\r\n\r\n<p>Mempercepat proses kumpul nya ikan.</p>\r\n',50000),
(15,'Paket ALB 1','20180622075946.jpg','<p style=\"text-align:justify\">Terdiri dari :</p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\">1 Cairan ALB 600ml</li>\r\n	<li style=\"text-align:justify\">1 Cairan ALB butek 30ml</li>\r\n	<li style=\"text-align:justify\">1 Cairan ALB merah 30ml</li>\r\n</ul>\r\n',155000),
(16,'Paket ALB 2','20180624114028.jpg','<p style=\"text-align:justify\">Terdiri dari :</p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\">1 Cairan ALB 600ml</li>\r\n	<li style=\"text-align:justify\">1 Cairan ALB butek 10ml</li>\r\n	<li style=\"text-align:justify\">1 Cairan ALB merah 30ml</li>\r\n</ul>\r\n',115000);

/*Table structure for table `string` */

DROP TABLE IF EXISTS `string`;

CREATE TABLE `string` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `header` varchar(50) NOT NULL,
  `body` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `string` */

insert  into `string`(`id`,`header`,`body`) values 
(1,'<h2 style=\"text-align:center\">Apa Itu Essen ?</h2>','<p style=\"text-align:justify\">Essen merupakan cairan aroma makanan yang berfungsi untuk menguatkan aroma umpan atau pelet. Essen umum digunakan pada adonan umpan untuk lomba-lomba mancing di kolam-kolam pemancingan galatama, harian dan kiloan. Umpan yang ditambahkan essen setelah masuk ke air akan tercium oleh ikan, ikan akan mencari, kemudian dimakan. Umpan yang aromanya tepat mungkin akan dikejar oleh ikan, namun belum tentu ikan mau menelannya. Rasa dan tekstur umpan juga mempengaruhi kesuksesan umpan ditelan ikan. Oleh karena itu, sebelum memilih essen, pemancing harus menentukan terlebih dahulu, aroma apa yang akan dipakai.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2 style=\"text-align:center\">Kenapa harus Essen ALB ?</h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li>Essen simpel.</li>\r\n	<li>Bisa digunakan ke semua media,baik alam maupun olahan.</li>\r\n	<li>Sudah teruji di semua air baik hitam, coklat, hijau, dll.</li>\r\n	<li>Sudah digunakan di seluruh indonesia. Testi pun dari selurruh indonesia.</li>\r\n	<li>Harga murah kualitas diatas rata rata.</li>\r\n</ol>\r\n\r\n<p>Bayangkan jika menggunakan produk lain harus nambah ini itu dan sebagainya.</p>\r\n');

/*Table structure for table `testi` */

DROP TABLE IF EXISTS `testi`;

CREATE TABLE `testi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `path` text NOT NULL,
  `time_upload` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `testi` */

insert  into `testi`(`id`,`path`,`time_upload`) values 
(1,'1.jpg','2018-03-30 00:09:12'),
(2,'2.jpg','2018-03-30 00:09:12'),
(3,'3.jpg','2018-03-30 00:09:12'),
(4,'4.jpg','2018-03-30 00:09:12'),
(5,'5.jpg','2018-03-30 00:09:12');

/*Table structure for table `testi_blog` */

DROP TABLE IF EXISTS `testi_blog`;

CREATE TABLE `testi_blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `link` text NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `testi_blog` */

insert  into `testi_blog`(`id`,`link`,`create_at`) values 
(1,'https://scontent-sea1-1.cdninstagram.com/vp/20811848f96ea4af8916c67033af7834/5B9ACFFD/t51.2885-15/e35/20686602_2091381050887834_3872389058634186752_n.jpg?se=7&ig_cache_key=MTU3ODkzNjE3ODEwNzEzNTg5NA%3D%3D.2','2018-04-07 01:23:06'),
(2,'https://scontent-sea1-1.cdninstagram.com/vp/469090e7147dc4613a3de82dbf10bafc/5B577810/t51.2885-15/e35/29740748_186723205293677_1221071898176126976_n.jpg?se=7&ig_cache_key=MTc1MTM0MjUwMzcyNTM1NTk1Ng%3D%3D.2','2018-04-07 01:23:06'),
(3,'https://scontent-sea1-1.cdninstagram.com/vp/4afcb63083c7ba90ad768cfa8e5f803e/5B626013/t51.2885-15/e35/29416997_2055166674772045_6453631353756844032_n.jpg?se=7&ig_cache_key=MTc1MDIzMTAzODM4MTQ3NzU1OA%3D%3D.2','2018-04-07 01:23:06'),
(4,'https://scontent-sea1-1.cdninstagram.com/vp/ae0172f22a0ec6b0b58ec828289c9c8a/5B722D74/t51.2885-15/e35/29717171_111736306345578_4831586179319070720_n.jpg?se=7&ig_cache_key=MTc1MTM0MjI1Mjk5ODAxMjgxOA%3D%3D.2','2018-04-07 01:23:06'),
(5,'https://scontent-sea1-1.cdninstagram.com/vp/3a5873b9c057729394c2b2c1be5b779a/5B6F7112/t51.2885-15/e35/29404093_235378487022561_272119601637097472_n.jpg?se=7&ig_cache_key=MTc0NzE2NzA5NTMzMzMwODcyOA%3D%3D.2','2018-04-07 01:23:06');

/*Table structure for table `track` */

DROP TABLE IF EXISTS `track`;

CREATE TABLE `track` (
  `id_activity` int(11) NOT NULL AUTO_INCREMENT,
  `ip` varchar(50) NOT NULL,
  `host` varchar(50) NOT NULL,
  `path_exec` varchar(100) NOT NULL,
  `server_name` varchar(50) NOT NULL,
  `port` int(11) NOT NULL,
  `server_port` int(11) NOT NULL,
  `device` text NOT NULL,
  `server_software` text NOT NULL,
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_activity`)
) ENGINE=InnoDB AUTO_INCREMENT=325 DEFAULT CHARSET=latin1;

/*Data for the table `track` */

insert  into `track`(`id_activity`,`ip`,`host`,`path_exec`,`server_name`,`port`,`server_port`,`device`,`server_software`,`time`) values 
(1,'::1','GALIH','/alb_essen/blog','localhost',50196,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-06-30 13:11:32'),
(2,'::1','GALIH','/alb_essen/','localhost',50196,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-06-30 13:11:33'),
(3,'::1','GALIH','/alb_essen/','localhost',51171,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-05 23:05:05'),
(4,'::1','GALIH','/alb_essen/','localhost',51172,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-05 23:05:05'),
(5,'::1','GALIH','/alb_essen/blog','localhost',51178,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-05 23:05:22'),
(6,'::1','GALIH','/alb_essen/','localhost',51180,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-05 23:05:23'),
(7,'::1','GALIH','/alb_essen/blog','localhost',51180,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-05 23:05:23'),
(8,'::1','GALIH','/alb_essen/blog','localhost',51180,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-05 23:05:26'),
(9,'::1','GALIH','/alb_essen/blog/view/1/Gali-Tanah-Buat-naek','localhost',51180,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-05 23:05:28'),
(10,'::1','GALIH','/alb_essen/','localhost',51185,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-05 23:05:37'),
(11,'::1','GALIH','/alb_essen/','localhost',55071,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-11 14:19:17'),
(12,'::1','GALIH','/alb_essen/','localhost',55086,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-11 14:19:26'),
(13,'::1','GALIH','/alb_essen/blog','localhost',55106,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-11 14:24:30'),
(14,'::1','GALIH','/alb_essen/','localhost',55108,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-11 14:24:31'),
(15,'::1','GALIH','/alb_essen/','localhost',55127,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-11 14:26:08'),
(16,'::1','GALIH','/alb_essen/blog','localhost',55127,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-11 14:26:09'),
(17,'::1','GALIH','/alb_essen/','localhost',55127,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-11 14:26:10'),
(18,'::1','GALIH','/alb_essen/','localhost',55127,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-11 14:26:10'),
(19,'::1','GALIH','/alb_essen/','localhost',55184,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-11 15:47:38'),
(20,'::1','GALIH','/alb_essen/','localhost',55184,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-11 15:47:38'),
(21,'::1','GALIH','/alb_essen/blog','localhost',55191,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-11 15:48:19'),
(22,'::1','GALIH','/alb_essen/blog/view/4/Laravel-Blade-II','localhost',55193,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-11 15:48:20'),
(23,'::1','GALIH','/alb_essen/blog/view/4/Laravel-Blade-II','localhost',55193,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-11 15:48:21'),
(24,'::1','GALIH','/alb_essen/','localhost',55218,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-11 16:09:02'),
(25,'::1','GALIH','/alb_essen/blog','localhost',55218,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-11 16:09:03'),
(26,'::1','GALIH','/alb_essen/blog','localhost',55255,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-11 16:20:20'),
(27,'::1','GALIH','/alb_essen/blog','localhost',55255,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-11 16:20:21'),
(28,'::1','GALIH','/alb_essen/blog/view/5/Laravel-Blade-III','localhost',55255,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-11 16:20:23'),
(29,'::1','GALIH','/alb_essen/blog/view/5/Laravel-Blade-III','localhost',55255,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-11 16:20:25'),
(30,'::1','GALIH','/alb_essen/blog/view/5/Laravel-Blade-III','localhost',55265,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-11 16:23:07'),
(31,'::1','GALIH','/alb_essen/blog/view/5/Laravel-Blade-III','localhost',55265,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-11 16:23:11'),
(32,'::1','GALIH','/alb_essen/blog/view/5/Laravel-Blade-III','localhost',55273,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-11 16:23:50'),
(33,'::1','GALIH','/alb_essen/blog/view/5/Laravel-Blade-III','localhost',55275,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-11 16:24:03'),
(34,'::1','GALIH','/alb_essen/blog/view/5/Laravel-Blade-III','localhost',55277,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-11 16:24:24'),
(35,'::1','GALIH','/alb_essen/blog/view/5/Laravel-Blade-III','localhost',55279,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-11 16:24:40'),
(36,'::1','GALIH','/alb_essen/','localhost',55324,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-11 18:28:48'),
(37,'::1','GALIH','/alb_essen/','localhost',55328,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-11 18:28:55'),
(38,'::1','GALIH','/alb_essen/','localhost',55338,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-11 18:29:17'),
(39,'::1','GALIH','/alb_essen/blog','localhost',55338,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-11 18:29:18'),
(40,'::1','GALIH','/alb_essen/','localhost',55341,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-11 18:29:19'),
(41,'::1','GALIH','/alb_essen/','localhost',55501,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-11 18:52:56'),
(42,'::1','GALIH','/alb_essen/blog','localhost',55524,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-11 18:53:14'),
(43,'::1','GALIH','/alb_essen/blog/view/4/Laravel-Blade-II','localhost',55527,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-11 18:53:19'),
(44,'::1','GALIH','/alb_essen/blog','localhost',55527,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-11 18:53:24'),
(45,'::1','GALIH','/alb_essen/blog','localhost',55739,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-11 19:02:07'),
(46,'::1','GALIH','/alb_essen/blog','localhost',55739,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-11 19:02:08'),
(47,'::1','GALIH','/alb_essen/blog','localhost',55752,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-11 19:02:52'),
(48,'::1','GALIH','/alb_essen/','localhost',55754,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-11 19:02:59'),
(49,'::1','GALIH','/alb_essen/blog','localhost',56015,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-11 19:13:51'),
(50,'::1','GALIH','/alb_essen/','localhost',56015,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-11 19:13:53'),
(51,'::1','GALIH','/alb_essen/','localhost',56117,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-11 19:24:19'),
(52,'::1','GALIH','/alb_essen/','localhost',56302,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-11 19:59:31'),
(53,'::1','GALIH','/alb_essen/','localhost',56315,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-11 20:03:24'),
(54,'::1','GALIH','/alb_essen/','localhost',56381,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-11 20:09:34'),
(55,'::1','GALIH','/alb_essen/','localhost',56413,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-11 20:13:02'),
(56,'::1','GALIH','/alb_essen/','localhost',56860,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-11 20:49:04'),
(57,'::1','GALIH','/alb_essen/','localhost',56862,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-11 20:49:10'),
(58,'::1','GALIH','/alb_essen/','localhost',56881,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-11 20:49:21'),
(59,'::1','GALIH','/alb_essen/','localhost',56881,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-11 20:49:25'),
(60,'::1','GALIH','/alb_essen/','localhost',56897,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-11 20:50:36'),
(61,'::1','GALIH','/alb_essen/blog','localhost',56897,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-11 20:50:40'),
(62,'::1','GALIH','/alb_essen/blog/view/1/Gali-Tanah-Buat-naek','localhost',57278,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-11 21:14:09'),
(63,'::1','GALIH','/alb_essen/blog','localhost',57278,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-11 21:14:14'),
(64,'::1','GALIH','/alb_essen/','localhost',57300,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-11 21:18:41'),
(65,'::1','GALIH','/alb_essen/blog','localhost',57300,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-11 21:18:42'),
(66,'::1','GALIH','/alb_essen/','localhost',57300,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-11 21:18:43'),
(67,'::1','GALIH','/alb_essen/blog','localhost',57300,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-11 21:18:44'),
(68,'::1','GALIH','/alb_essen/blog','localhost',57322,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-11 21:19:46'),
(69,'::1','GALIH','/alb_essen/kontak','localhost',57322,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-11 21:19:48'),
(70,'::1','GALIH','/alb_essen/kontak','localhost',57330,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-11 21:20:35'),
(71,'::1','GALIH','/alb_essen/kontak','localhost',57333,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-11 21:20:43'),
(72,'::1','GALIH','/alb_essen/kontak','localhost',57335,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-11 21:21:05'),
(73,'::1','GALIH','/alb_essen/kontak','localhost',57338,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-11 21:21:14'),
(74,'::1','GALIH','/alb_essen/kontak','localhost',57338,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-11 21:21:14'),
(75,'::1','GALIH','/alb_essen/blog','localhost',57341,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-11 21:21:28'),
(76,'::1','GALIH','/alb_essen/kontak','localhost',57341,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-11 21:21:30'),
(77,'::1','GALIH','/alb_essen/kontak','localhost',57341,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-11 21:21:32'),
(78,'::1','GALIH','/alb_essen/blog','localhost',57345,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-11 21:21:40'),
(79,'::1','GALIH','/alb_essen/','localhost',57345,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-11 21:21:40'),
(80,'::1','GALIH','/alb_essen/','localhost',57889,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-12 00:22:51'),
(81,'::1','GALIH','/alb_essen/','localhost',57893,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-12 00:22:51'),
(82,'::1','GALIH','/alb_essen/kontak','localhost',58119,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-12 00:39:49'),
(83,'::1','GALIH','/alb_essen/blog','localhost',58151,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-12 00:43:38'),
(84,'::1','GALIH','/alb_essen/blog/view/1/Gali-Tanah-Buat-naek','localhost',58151,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-12 00:43:42'),
(85,'::1','GALIH','/alb_essen/','localhost',58167,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-12 00:44:04'),
(86,'::1','GALIH','/alb_essen/','localhost',58289,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-12 00:48:47'),
(87,'::1','GALIH','/alb_essen/blog','localhost',58298,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-12 00:51:42'),
(88,'::1','GALIH','/alb_essen/blog/view/5/Laravel-Blade-III','localhost',58298,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-12 00:51:44'),
(89,'::1','GALIH','/alb_essen/blog/view/5/Laravel-Blade-III','localhost',58298,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-12 00:51:46'),
(90,'::1','GALIH','/alb_essen/blog/view/5/Laravel-Blade-III','localhost',58322,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-12 00:52:22'),
(91,'::1','GALIH','/alb_essen/blog/view/5/Laravel-Blade-III','localhost',58322,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-12 00:52:26'),
(92,'::1','GALIH','/alb_essen/blog/view/5/Laravel-Blade-III','localhost',58342,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-12 00:52:41'),
(93,'::1','GALIH','/alb_essen/blog/view/5/Laravel-Blade-III','localhost',58394,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-12 01:00:47'),
(94,'::1','GALIH','/alb_essen/blog/view/5/Laravel-Blade-III','localhost',58394,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-12 01:00:50'),
(95,'::1','GALIH','/alb_essen/blog/view/5/Laravel-Blade-III','localhost',58419,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-12 01:05:57'),
(96,'::1','GALIH','/alb_essen/blog/view/5/Laravel-Blade-III','localhost',58428,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-12 01:06:48'),
(97,'::1','GALIH','/alb_essen/blog/view/5/Laravel-Blade-III','localhost',58428,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-12 01:06:52'),
(98,'::1','GALIH','/alb_essen/blog/view/5/Laravel-Blade-III','localhost',58436,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-12 01:08:28'),
(99,'::1','GALIH','/alb_essen/blog/view/5/Laravel-Blade-III','localhost',58439,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-12 01:08:39'),
(100,'::1','GALIH','/alb_essen/','localhost',58439,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-12 01:08:40'),
(101,'::1','GALIH','/alb_essen/blog','localhost',58445,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-12 01:08:45'),
(102,'::1','GALIH','/alb_essen/','localhost',58445,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-12 01:08:46'),
(103,'::1','GALIH','/alb_essen/blog','localhost',58445,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-12 01:08:47'),
(104,'::1','GALIH','/alb_essen/kontak','localhost',58445,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-12 01:08:48'),
(105,'::1','GALIH','/alb_essen/blog','localhost',58445,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-12 01:08:50'),
(106,'::1','GALIH','/alb_essen/','localhost',58445,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-12 01:08:51'),
(107,'::1','GALIH','/alb_essen/','localhost',58466,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-12 01:09:43'),
(108,'::1','GALIH','/alb_essen/','localhost',58466,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-12 01:09:45'),
(109,'::1','GALIH','/alb_essen/blog','localhost',58474,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-12 01:10:13'),
(110,'::1','GALIH','/alb_essen/blog','localhost',58474,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-12 01:10:15'),
(111,'::1','GALIH','/alb_essen/blog','localhost',58481,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-12 01:10:57'),
(112,'::1','GALIH','/alb_essen/blog/view/5/Laravel-Blade-III','localhost',58485,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-12 01:11:15'),
(113,'::1','GALIH','/alb_essen/blog/view/5/Laravel-Blade-III','localhost',58485,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-12 01:11:16'),
(114,'::1','GALIH','/alb_essen/','localhost',58523,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-12 01:25:50'),
(115,'::1','GALIH','/alb_essen/blog','localhost',58523,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-12 01:25:53'),
(116,'::1','GALIH','/alb_essen/blog','localhost',58523,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-12 01:25:54'),
(117,'::1','GALIH','/alb_essen/blog/view/6/Meracik-Umpan-Part-1','localhost',58523,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-12 01:25:55'),
(118,'::1','GALIH','/alb_essen/blog/view/6/Meracik-Umpan-Part-1','localhost',58531,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-12 01:26:03'),
(119,'::1','GALIH','/alb_essen/','localhost',58536,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-12 01:35:34'),
(120,'::1','GALIH','/alb_essen/','localhost',59412,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-12 11:46:29'),
(121,'::1','GALIH','/alb_essen/','localhost',59413,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-12 11:46:29'),
(122,'::1','GALIH','/alb_essen/kontak','localhost',59412,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-12 11:46:34'),
(123,'::1','GALIH','/alb_essen/kontak','localhost',59412,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-12 11:46:36'),
(124,'::1','GALIH','/alb_essen/blog','localhost',59412,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-12 11:46:37'),
(125,'::1','GALIH','/alb_essen/kontak','localhost',59412,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-12 11:46:38'),
(126,'::1','GALIH','/alb_essen/blog','localhost',59412,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-12 11:46:40'),
(127,'::1','GALIH','/alb_essen/kontak','localhost',59412,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-12 11:46:43'),
(128,'::1','GALIH','/alb_essen/blog','localhost',59412,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-12 11:46:46'),
(129,'::1','GALIH','/alb_essen/blog/view/1/Gali-Tanah-Buat-naek','localhost',59412,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-12 11:46:48'),
(130,'::1','GALIH','/alb_essen/blog','localhost',59428,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-12 11:47:04'),
(131,'::1','GALIH','/alb_essen/','localhost',59428,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-12 11:47:05'),
(132,'::1','GALIH','/alb_essen/','localhost',59511,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-12 20:03:44'),
(133,'::1','GALIH','/alb_essen/blog','localhost',59515,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-12 20:03:46'),
(134,'::1','GALIH','/alb_essen/blog','localhost',59515,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-12 20:03:47'),
(135,'::1','GALIH','/alb_essen/blog/view/5/Laravel-Blade-III','localhost',59515,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-12 20:03:50'),
(136,'::1','GALIH','/alb_essen/blog/view/5/Laravel-Blade-III','localhost',59515,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-12 20:03:52'),
(137,'::1','GALIH','/alb_essen/blog','localhost',59543,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-12 20:05:28'),
(138,'::1','GALIH','/alb_essen/blog/view/6/Meracik-Umpan-Part-1','localhost',59543,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-12 20:05:30'),
(139,'::1','GALIH','/alb_essen/blog/view/6/Meracik-Umpan-Part-1','localhost',59552,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-12 20:07:20'),
(140,'::1','GALIH','/alb_essen/blog/view/6/Meracik-Umpan-Part-1','localhost',59558,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-12 20:10:32'),
(141,'::1','GALIH','/alb_essen/blog/view/6/Meracik-Umpan-Part-1','localhost',59558,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-12 20:10:36'),
(142,'::1','GALIH','/alb_essen/blog','localhost',59567,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-12 20:12:14'),
(143,'::1','GALIH','/alb_essen/blog/view/1/Gali-Tanah-Buat-naek','localhost',59567,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-12 20:12:17'),
(144,'::1','GALIH','/alb_essen/blog','localhost',59570,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-12 20:12:23'),
(145,'::1','GALIH','/alb_essen/blog/view/6/Meracik-Umpan-Part-1','localhost',59570,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-12 20:12:24'),
(146,'::1','GALIH','/alb_essen/kontak','localhost',59592,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-12 21:21:49'),
(147,'::1','GALIH','/alb_essen/','localhost',59611,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-12 21:30:06'),
(148,'::1','GALIH','/alb_essen/','localhost',60357,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-12 23:04:54'),
(149,'::1','GALIH','/alb_essen/','localhost',60400,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-12 23:07:45'),
(150,'::1','GALIH','/alb_essen/','localhost',60490,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-12 23:16:09'),
(151,'::1','GALIH','/alb_essen/','localhost',60675,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-12 23:22:01'),
(152,'::1','GALIH','/alb_essen/blog','localhost',60906,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-12 23:39:54'),
(153,'::1','GALIH','/alb_essen/blog/view/6/Meracik-Umpan-Part-1','localhost',60906,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-12 23:39:58'),
(154,'::1','GALIH','/alb_essen/','localhost',61436,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 00:21:31'),
(155,'::1','GALIH','/alb_essen/','localhost',61453,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 00:21:39'),
(156,'::1','GALIH','/alb_essen/','localhost',61844,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 12:13:15'),
(157,'::1','GALIH','/alb_essen/','localhost',61851,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 12:14:35'),
(158,'::1','GALIH','/alb_essen/blog/view/4/Laravel-Blade-II','localhost',62116,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:61.0) Gecko/20100101 Firefox/61.0','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 12:35:35'),
(159,'::1','GALIH','/alb_essen/blog/view/4/Laravel-Blade-II','localhost',62116,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:61.0) Gecko/20100101 Firefox/61.0','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 12:35:36'),
(160,'::1','GALIH','/alb_essen/','localhost',62116,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:61.0) Gecko/20100101 Firefox/61.0','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 12:35:39'),
(161,'::1','GALIH','/alb_essen/blog','localhost',62116,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:61.0) Gecko/20100101 Firefox/61.0','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 12:35:42'),
(162,'::1','GALIH','/alb_essen/','localhost',62116,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:61.0) Gecko/20100101 Firefox/61.0','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 12:35:43'),
(163,'::1','GALIH','/alb_essen/','localhost',62116,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:61.0) Gecko/20100101 Firefox/61.0','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 12:35:50'),
(164,'::1','GALIH','/alb_essen/','localhost',62326,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:61.0) Gecko/20100101 Firefox/61.0','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 12:40:59'),
(165,'::1','GALIH','/alb_essen/','localhost',62326,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:61.0) Gecko/20100101 Firefox/61.0','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 12:41:01'),
(166,'::1','GALIH','/alb_essen/','localhost',62326,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:61.0) Gecko/20100101 Firefox/61.0','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 12:41:05'),
(167,'::1','GALIH','/alb_essen/','localhost',62344,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:61.0) Gecko/20100101 Firefox/61.0','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 12:41:31'),
(168,'::1','GALIH','/alb_essen/','localhost',62346,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:61.0) Gecko/20100101 Firefox/61.0','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 12:41:36'),
(169,'::1','GALIH','/alb_essen/','localhost',62346,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:61.0) Gecko/20100101 Firefox/61.0','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 12:41:37'),
(170,'::1','GALIH','/alb_essen/','localhost',62610,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:61.0) Gecko/20100101 Firefox/61.0','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 12:59:58'),
(171,'::1','GALIH','/alb_essen/','localhost',62610,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:61.0) Gecko/20100101 Firefox/61.0','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 13:00:00'),
(172,'::1','GALIH','/alb_essen/','localhost',62735,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:61.0) Gecko/20100101 Firefox/61.0','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 13:07:04'),
(173,'::1','GALIH','/alb_essen/','localhost',62735,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:61.0) Gecko/20100101 Firefox/61.0','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 13:07:06'),
(174,'::1','GALIH','/alb_essen/','localhost',62753,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:61.0) Gecko/20100101 Firefox/61.0','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 13:08:14'),
(175,'::1','GALIH','/alb_essen/','localhost',62753,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:61.0) Gecko/20100101 Firefox/61.0','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 13:08:17'),
(176,'::1','GALIH','/alb_essen/','localhost',62822,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:61.0) Gecko/20100101 Firefox/61.0','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 13:21:40'),
(177,'::1','GALIH','/alb_essen/','localhost',62822,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:61.0) Gecko/20100101 Firefox/61.0','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 13:21:42'),
(178,'::1','GALIH','/alb_essen/','localhost',62832,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:61.0) Gecko/20100101 Firefox/61.0','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 13:24:18'),
(179,'::1','GALIH','/alb_essen/','localhost',62832,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:61.0) Gecko/20100101 Firefox/61.0','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 13:24:19'),
(180,'::1','GALIH','/alb_essen/','localhost',62832,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:61.0) Gecko/20100101 Firefox/61.0','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 13:24:22'),
(181,'::1','GALIH','/alb_essen/','localhost',62895,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 13:26:28'),
(182,'::1','GALIH','/alb_essen/','localhost',62928,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:61.0) Gecko/20100101 Firefox/61.0','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 13:26:50'),
(183,'::1','GALIH','/alb_essen/','localhost',63022,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 13:27:58'),
(184,'::1','GALIH','/alb_essen/','localhost',63067,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 13:29:50'),
(185,'::1','GALIH','/alb_essen/','localhost',63088,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 13:31:59'),
(186,'::1','GALIH','/alb_essen/','localhost',63200,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 13:35:38'),
(187,'::1','GALIH','/alb_essen/','localhost',63231,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 13:36:37'),
(188,'::1','GALIH','/alb_essen/','localhost',63342,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 13:41:01'),
(189,'::1','GALIH','/alb_essen/','localhost',63375,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 13:46:03'),
(190,'::1','GALIH','/alb_essen/','localhost',63401,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 13:46:15'),
(191,'::1','GALIH','/alb_essen/','localhost',63473,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 13:59:25'),
(192,'::1','GALIH','/alb_essen/','localhost',63519,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 13:59:57'),
(193,'::1','GALIH','/alb_essen/blog','localhost',63594,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 14:06:43'),
(194,'::1','GALIH','/alb_essen/blog/view/7/Macam-Macam-Cara-Penggunaan-ALB','localhost',63594,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 14:06:45'),
(195,'::1','GALIH','/alb_essen/blog/view/7/Macam-Macam-Cara-Penggunaan-ALB','localhost',63602,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 14:07:47'),
(196,'::1','GALIH','/alb_essen/blog/view/7/Macam-Macam-Cara-Penggunaan-ALB','localhost',63607,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 14:08:05'),
(197,'::1','GALIH','/alb_essen/blog/view/7/Macam-Macam-Cara-Penggunaan-ALB','localhost',63614,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 14:08:25'),
(198,'::1','GALIH','/alb_essen/blog/view/7/Macam-Macam-Cara-Penggunaan-ALB','localhost',63618,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 14:09:14'),
(199,'::1','GALIH','/alb_essen/blog/view/7/Macam-Macam-Cara-Penggunaan-ALB','localhost',63624,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 14:10:39'),
(200,'::1','GALIH','/alb_essen/blog/view/7/Macam-Macam-Cara-Penggunaan-ALB','localhost',63628,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 14:10:59'),
(201,'::1','GALIH','/alb_essen/blog/view/7/Macam-Macam-Cara-Penggunaan-ALB','localhost',63703,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 14:30:14'),
(202,'::1','GALIH','/alb_essen/blog/view/7/Macam-Macam-Cara-Penggunaan-ALB','localhost',63709,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 14:30:33'),
(203,'::1','GALIH','/alb_essen/blog/view/7/Macam-Macam-Cara-Penggunaan-ALB','localhost',63713,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 14:30:40'),
(204,'::1','GALIH','/alb_essen/blog/view/7/Macam-Macam-Cara-Penggunaan-ALB','localhost',63880,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 14:33:41'),
(205,'::1','GALIH','/alb_essen/blog/view/7/Macam-Macam-Cara-Penggunaan-ALB','localhost',63880,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 14:33:43'),
(206,'::1','GALIH','/alb_essen/','localhost',63880,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 14:33:46'),
(207,'::1','GALIH','/alb_essen/blog/view/7/Macam-Macam-Cara-Penggunaan-ALB','localhost',63880,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 14:33:48'),
(208,'::1','GALIH','/alb_essen/','localhost',63908,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 14:43:04'),
(209,'::1','GALIH','/alb_essen/blog','localhost',63908,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 14:43:09'),
(210,'::1','GALIH','/alb_essen/','localhost',63908,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 14:43:12'),
(211,'::1','GALIH','/alb_essen/','localhost',63924,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 14:43:44'),
(212,'::1','GALIH','/alb_essen/','localhost',63924,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 14:43:48'),
(213,'::1','GALIH','/alb_essen/blog','localhost',63924,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 14:43:49'),
(214,'::1','GALIH','/alb_essen/blog/view/7/Macam-Macam-Cara-Penggunaan-ALB','localhost',63932,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 14:44:00'),
(215,'::1','GALIH','/alb_essen/','localhost',63938,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:61.0) Gecko/20100101 Firefox/61.0','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 15:02:37'),
(216,'::1','GALIH','/alb_essen/','localhost',63946,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:61.0) Gecko/20100101 Firefox/61.0','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 15:03:16'),
(217,'::1','GALIH','/alb_essen/','localhost',63946,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:61.0) Gecko/20100101 Firefox/61.0','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 15:03:17'),
(218,'::1','GALIH','/alb_essen/','localhost',63946,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:61.0) Gecko/20100101 Firefox/61.0','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 15:03:18'),
(219,'::1','GALIH','/alb_essen/','localhost',63954,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:61.0) Gecko/20100101 Firefox/61.0','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 15:03:29'),
(220,'::1','GALIH','/alb_essen/','localhost',63956,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:61.0) Gecko/20100101 Firefox/61.0','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 15:03:46'),
(221,'::1','GALIH','/alb_essen/','localhost',63956,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:61.0) Gecko/20100101 Firefox/61.0','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 15:03:47'),
(222,'::1','GALIH','/alb_essen/','localhost',63956,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:61.0) Gecko/20100101 Firefox/61.0','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 15:03:48'),
(223,'::1','GALIH','/alb_essen/','localhost',63966,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:61.0) Gecko/20100101 Firefox/61.0','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 15:07:13'),
(224,'::1','GALIH','/alb_essen/','localhost',63966,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:61.0) Gecko/20100101 Firefox/61.0','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 15:07:14'),
(225,'::1','GALIH','/alb_essen/','localhost',63974,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:61.0) Gecko/20100101 Firefox/61.0','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 15:08:04'),
(226,'::1','GALIH','/alb_essen/','localhost',63977,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:61.0) Gecko/20100101 Firefox/61.0','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 15:08:05'),
(227,'::1','GALIH','/alb_essen/blog','localhost',63982,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:61.0) Gecko/20100101 Firefox/61.0','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 15:08:21'),
(228,'::1','GALIH','/alb_essen/kontak','localhost',63982,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:61.0) Gecko/20100101 Firefox/61.0','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 15:08:22'),
(229,'::1','GALIH','/alb_essen/blog','localhost',63985,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:61.0) Gecko/20100101 Firefox/61.0','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 15:08:29'),
(230,'::1','GALIH','/alb_essen/kontak','localhost',63985,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:61.0) Gecko/20100101 Firefox/61.0','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 15:08:30'),
(231,'::1','GALIH','/alb_essen/kontak','localhost',63985,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:61.0) Gecko/20100101 Firefox/61.0','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 15:08:33'),
(232,'::1','GALIH','/alb_essen/blog','localhost',63985,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:61.0) Gecko/20100101 Firefox/61.0','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 15:08:34'),
(233,'::1','GALIH','/alb_essen/','localhost',63985,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:61.0) Gecko/20100101 Firefox/61.0','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 15:08:35'),
(234,'::1','GALIH','/alb_essen/blog','localhost',63985,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:61.0) Gecko/20100101 Firefox/61.0','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 15:08:36'),
(235,'::1','GALIH','/alb_essen/blog/view/7/Macam-Macam-Cara-Penggunaan-ALB','localhost',63985,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:61.0) Gecko/20100101 Firefox/61.0','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 15:08:40'),
(236,'::1','GALIH','/alb_essen/','localhost',63994,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:61.0) Gecko/20100101 Firefox/61.0','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 15:09:53'),
(237,'::1','GALIH','/alb_essen/blog','localhost',64000,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:61.0) Gecko/20100101 Firefox/61.0','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 15:09:54'),
(238,'::1','GALIH','/alb_essen/kontak','localhost',64000,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:61.0) Gecko/20100101 Firefox/61.0','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 15:09:55'),
(239,'::1','GALIH','/alb_essen/','localhost',64000,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:61.0) Gecko/20100101 Firefox/61.0','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 15:09:56'),
(240,'::1','GALIH','/alb_essen/kontak','localhost',64005,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:61.0) Gecko/20100101 Firefox/61.0','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 15:10:46'),
(241,'::1','GALIH','/alb_essen/','localhost',64053,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:61.0) Gecko/20100101 Firefox/61.0','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 15:19:38'),
(242,'::1','GALIH','/alb_essen/','localhost',64079,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:61.0) Gecko/20100101 Firefox/61.0','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 15:36:50'),
(243,'::1','GALIH','/alb_essen/blog','localhost',64084,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:61.0) Gecko/20100101 Firefox/61.0','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 15:36:53'),
(244,'::1','GALIH','/alb_essen/blog/view/7/Macam-Macam-Cara-Penggunaan-ALB','localhost',64084,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:61.0) Gecko/20100101 Firefox/61.0','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 15:36:55'),
(245,'::1','GALIH','/alb_essen/blog','localhost',64100,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:61.0) Gecko/20100101 Firefox/61.0','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 15:37:53'),
(246,'::1','GALIH','/alb_essen/','localhost',64102,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:61.0) Gecko/20100101 Firefox/61.0','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 15:37:55'),
(247,'::1','GALIH','/alb_essen/','localhost',64109,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:61.0) Gecko/20100101 Firefox/61.0','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 15:37:55'),
(248,'::1','GALIH','/alb_essen/','localhost',64124,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:61.0) Gecko/20100101 Firefox/61.0','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 15:38:15'),
(249,'::1','GALIH','/alb_essen/blog/view/7/Macam-Macam-Cara-Penggunaan-ALB','localhost',64130,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:61.0) Gecko/20100101 Firefox/61.0','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 15:38:19'),
(250,'::1','GALIH','/alb_essen/','localhost',64132,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:61.0) Gecko/20100101 Firefox/61.0','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 15:38:34'),
(251,'::1','GALIH','/alb_essen/','localhost',64132,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:61.0) Gecko/20100101 Firefox/61.0','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 15:38:36'),
(252,'::1','GALIH','/alb_essen/','localhost',64132,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:61.0) Gecko/20100101 Firefox/61.0','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 15:38:36'),
(253,'::1','GALIH','/alb_essen/','localhost',64132,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:61.0) Gecko/20100101 Firefox/61.0','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 15:38:37'),
(254,'::1','GALIH','/alb_essen/','localhost',64182,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 20:09:43'),
(255,'::1','GALIH','/alb_essen/','localhost',64189,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 20:10:08'),
(256,'::1','GALIH','/alb_essen/kontak','localhost',64196,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 20:11:19'),
(257,'::1','GALIH','/alb_essen/kontak','localhost',64196,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 20:11:23'),
(258,'::1','GALIH','/alb_essen/blog','localhost',64196,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 20:11:24'),
(259,'::1','GALIH','/alb_essen/kontak','localhost',64196,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 20:11:25'),
(260,'::1','GALIH','/alb_essen/kontak','localhost',64196,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 20:11:27'),
(261,'::1','GALIH','/alb_essen/blog','localhost',64196,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 20:11:28'),
(262,'::1','GALIH','/alb_essen/','localhost',64196,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 20:11:31'),
(263,'::1','GALIH','/alb_essen/blog','localhost',64196,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 20:11:33'),
(264,'::1','GALIH','/alb_essen/blog/view/7/Macam-Macam-Cara-Penggunaan-ALB','localhost',64196,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 20:11:34'),
(265,'::1','GALIH','/alb_essen/','localhost',64206,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 20:13:21'),
(266,'::1','GALIH','/alb_essen/blog','localhost',64206,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 20:13:22'),
(267,'::1','GALIH','/alb_essen/kontak','localhost',64206,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 20:13:23'),
(268,'::1','GALIH','/alb_essen/halaman/tentangkami','localhost',64210,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 20:17:34'),
(269,'::1','GALIH','/alb_essen/halaman/tentangkami','localhost',64212,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 20:17:52'),
(270,'::1','GALIH','/alb_essen/halaman/tentangkami','localhost',64214,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 20:17:59'),
(271,'::1','GALIH','/alb_essen/halaman/tentangkami','localhost',64220,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 20:19:51'),
(272,'::1','GALIH','/alb_essen/halaman/tentangkami','localhost',64226,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 20:20:18'),
(273,'::1','GALIH','/alb_essen/halaman/tentangkami','localhost',64233,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 20:20:32'),
(274,'::1','GALIH','/alb_essen/halaman/tentangkami','localhost',64233,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 20:20:33'),
(275,'::1','GALIH','/alb_essen/halaman/tentangkami','localhost',64241,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 20:20:48'),
(276,'::1','GALIH','/alb_essen/halaman/tentangkami','localhost',64241,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 20:20:48'),
(277,'::1','GALIH','/alb_essen/halaman/tentangkami','localhost',64241,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 20:20:48'),
(278,'::1','GALIH','/alb_essen/halaman/tentangkami','localhost',64242,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 20:20:56'),
(279,'::1','GALIH','/alb_essen/kontak','localhost',64251,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 20:21:08'),
(280,'::1','GALIH','/alb_essen/blog','localhost',64251,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 20:21:10'),
(281,'::1','GALIH','/alb_essen/blog/view/7/Macam-Macam-Cara-Penggunaan-ALB','localhost',64254,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 20:21:37'),
(282,'::1','GALIH','/alb_essen/blog/view/7/Macam-Macam-Cara-Penggunaan-ALB','localhost',64277,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:61.0) Gecko/20100101 Firefox/61.0','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 20:26:35'),
(283,'::1','GALIH','/alb_essen/','localhost',64290,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:61.0) Gecko/20100101 Firefox/61.0','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 20:27:01'),
(284,'::1','GALIH','/alb_essen/','localhost',64391,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 20:45:00'),
(285,'::1','GALIH','/alb_essen/','localhost',64591,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 20:52:23'),
(286,'::1','GALIH','/alb_essen/','localhost',64669,80,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2018-07-13 20:59:19'),
(287,'::1','DESKTOP-7MS3SLB','/piutang/','localhost',50200,80,'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2019-01-06 21:26:17'),
(288,'::1','DESKTOP-7MS3SLB','/piutang/blog','localhost',50200,80,'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2019-01-06 21:26:20'),
(289,'::1','DESKTOP-7MS3SLB','/piutang/kontak','localhost',50200,80,'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2019-01-06 21:26:21'),
(290,'::1','DESKTOP-7MS3SLB','/piutang/blog','localhost',50200,80,'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2019-01-06 21:26:22'),
(291,'::1','DESKTOP-7MS3SLB','/piutang/','localhost',50200,80,'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2019-01-06 21:26:22'),
(292,'::1','DESKTOP-7MS3SLB','/piutang/blog','localhost',50255,80,'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2019-01-06 21:28:54'),
(293,'::1','DESKTOP-7MS3SLB','/piutang/kontak','localhost',50255,80,'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2019-01-06 21:28:54'),
(294,'::1','DESKTOP-7MS3SLB','/piutang/tentang','localhost',50255,80,'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2019-01-06 21:28:55'),
(295,'::1','DESKTOP-7MS3SLB','/piutang/kontak','localhost',50255,80,'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2019-01-06 21:28:55'),
(296,'::1','DESKTOP-7MS3SLB','/piutang/blog','localhost',50255,80,'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2019-01-06 21:28:56'),
(297,'::1','DESKTOP-7MS3SLB','/piutang/','localhost',50255,80,'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2019-01-06 21:28:56'),
(298,'::1','DESKTOP-7MS3SLB','/piutang/','localhost',50287,80,'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2019-01-06 21:31:03'),
(299,'::1','DESKTOP-7MS3SLB','/piutang/','localhost',50287,80,'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2019-01-06 21:31:08'),
(300,'::1','DESKTOP-7MS3SLB','/piutang/blog','localhost',50287,80,'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2019-01-06 21:31:09'),
(301,'::1','DESKTOP-7MS3SLB','/piutang/','localhost',50287,80,'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2019-01-06 21:31:10'),
(302,'::1','DESKTOP-7MS3SLB','/orderan/track_barang/','localhost',52185,80,'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2019-09-10 20:53:30'),
(303,'::1','DESKTOP-7MS3SLB','/orderan/track_barang/','localhost',52204,80,'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2019-09-10 20:53:39'),
(304,'::1','DESKTOP-7MS3SLB','/Orderan/track_barang/','localhost',52346,80,'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2019-09-10 20:55:15'),
(305,'::1','DESKTOP-7MS3SLB','/Orderan/track_barang/blog','localhost',52374,80,'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2019-09-10 20:55:23'),
(306,'::1','DESKTOP-7MS3SLB','/Orderan/track_barang/kontak','localhost',52374,80,'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2019-09-10 20:55:23'),
(307,'::1','DESKTOP-7MS3SLB','/Orderan/track_barang/blog','localhost',52374,80,'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2019-09-10 20:55:24'),
(308,'::1','DESKTOP-7MS3SLB','/Orderan/track_barang/','localhost',52374,80,'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2019-09-10 20:55:24'),
(309,'::1','DESKTOP-7MS3SLB','/Orderan/track_barang/blog','localhost',52374,80,'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2019-09-10 20:55:25'),
(310,'::1','DESKTOP-7MS3SLB','/Orderan/track_barang/kontak','localhost',52374,80,'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2019-09-10 20:55:25'),
(311,'::1','DESKTOP-7MS3SLB','/Orderan/track_barang/tentang','localhost',52374,80,'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2019-09-10 20:55:26'),
(312,'::1','DESKTOP-7MS3SLB','/Orderan/track_barang/kontak','localhost',52374,80,'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2019-09-10 20:55:26'),
(313,'::1','DESKTOP-7MS3SLB','/Orderan/track_barang/blog','localhost',52374,80,'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2019-09-10 20:55:28'),
(314,'::1','DESKTOP-7MS3SLB','/Orderan/track_barang/','localhost',52374,80,'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2019-09-10 20:55:29'),
(315,'::1','DESKTOP-7MS3SLB','/orderan/track_barang/','localhost',52551,80,'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2019-09-10 20:58:19'),
(316,'::1','DESKTOP-7MS3SLB','/orderan/track_barang/','localhost',53200,80,'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2019-09-10 22:15:27'),
(317,'::1','DESKTOP-7MS3SLB','/orderan/track_barang/blog','localhost',53200,80,'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2019-09-10 22:15:29'),
(318,'::1','DESKTOP-7MS3SLB','/orderan/track_barang/kontak','localhost',53200,80,'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2019-09-10 22:15:30'),
(319,'::1','DESKTOP-7MS3SLB','/orderan/track_barang/','localhost',53200,80,'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2019-09-10 22:15:31'),
(320,'::1','DESKTOP-7MS3SLB','/Project/alb_essen/','localhost',62542,80,'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.190 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2021-02-26 17:08:47'),
(321,'::1','DESKTOP-7MS3SLB','/Project/alb_essen/blog','localhost',62560,80,'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.190 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2021-02-26 17:09:27'),
(322,'::1','DESKTOP-7MS3SLB','/Project/alb_essen/blog/view/qTXrstu902ba3cda1883801594b6e1b452790cc53948fda7/Macam-Macam-Cara-Pengg','localhost',62560,80,'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.190 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2021-02-26 17:09:29'),
(323,'::1','DESKTOP-7MS3SLB','/Project/nextcms/','localhost',63447,80,'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.190 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2021-02-26 17:42:41'),
(324,'::1','DESKTOP-7MS3SLB','/Project/nextcms/','localhost',63832,80,'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.190 Safari/537.36','Apache/2.4.29 (Win32) OpenSSL/1.1.0g PHP/7.2.1','2021-02-26 17:54:25');

/*Table structure for table `trackbacks` */

DROP TABLE IF EXISTS `trackbacks`;

CREATE TABLE `trackbacks` (
  `tb_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `entry_id` int(10) unsigned NOT NULL DEFAULT '0',
  `url` varchar(200) NOT NULL,
  `title` varchar(100) NOT NULL,
  `excerpt` text NOT NULL,
  `blog_name` varchar(100) NOT NULL,
  `tb_date` int(10) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  PRIMARY KEY (`tb_id`),
  KEY `entry_id` (`entry_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `trackbacks` */

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `password` varchar(100) NOT NULL,
  `last_login` varchar(100) DEFAULT NULL,
  `last_logout` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`id`,`username`,`password`,`last_login`,`last_logout`) values 
(1,'gg007','$2y$10$/vEWNOTfgoSC8Jdr0WiHK.LxBxNh/r5xzc/cmfza8jCQMiuGYu6aC','2018-07-13','2018-07-13 15:59');

/*Table structure for table `yutub_testi` */

DROP TABLE IF EXISTS `yutub_testi`;

CREATE TABLE `yutub_testi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `link` text NOT NULL,
  `time_upload` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `yutub_testi` */

insert  into `yutub_testi`(`id`,`link`,`time_upload`) values 
(1,'https://www.youtube.com/embed/XiETubRRqZo\" frameborder=\"0\" allow=\"autoplay; encrypted-media\"','2018-04-01 16:17:09'),
(2,'https://www.youtube.com/embed/XHe37O62Yn8\" frameborder=\"0\" allow=\"autoplay; encrypted-media','2018-04-01 16:17:09'),
(3,'https://www.youtube.com/embed/5Myw3IHvypA\" frameborder=\"0\" allow=\"autoplay; encrypted-media','2018-04-01 16:17:09');

/* Trigger structure for table `produk` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `new_master_brg` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `new_master_brg` AFTER INSERT ON `produk` FOR EACH ROW INSERT INTO daftar_brg(nama,harga) VALUES (new.nama_barang,new.harga) */$$


DELIMITER ;

/* Trigger structure for table `produk` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `delete_master_brg` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `delete_master_brg` AFTER DELETE ON `produk` FOR EACH ROW DELETE FROM daftar_brg WHERE daftar_brg.nama = old.nama_barang */$$


DELIMITER ;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
