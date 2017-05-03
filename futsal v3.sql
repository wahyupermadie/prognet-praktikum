/*
SQLyog Ultimate v11.33 (64 bit)
MySQL - 10.1.10-MariaDB : Database - db_futsal
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_futsal` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_futsal`;

/*Table structure for table `tb_admin` */

DROP TABLE IF EXISTS `tb_admin`;

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `nama_admin` varchar(50) DEFAULT NULL,
  `no_tlp_admin` varchar(15) DEFAULT NULL,
  `username` varchar(24) DEFAULT NULL,
  `password` varchar(24) DEFAULT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_admin` */

/*Table structure for table `tb_det_sewa` */

DROP TABLE IF EXISTS `tb_det_sewa`;

CREATE TABLE `tb_det_sewa` (
  `id_det_sewa` int(11) NOT NULL AUTO_INCREMENT,
  `id_sewa` int(11) DEFAULT NULL,
  `id_jadwal` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_det_sewa`),
  KEY `id_sewa` (`id_sewa`),
  KEY `id_jadwal` (`id_jadwal`),
  CONSTRAINT `tb_det_sewa_ibfk_1` FOREIGN KEY (`id_sewa`) REFERENCES `tb_sewa` (`id_sewa`),
  CONSTRAINT `tb_det_sewa_ibfk_2` FOREIGN KEY (`id_jadwal`) REFERENCES `tb_jadwal` (`id_jadwal`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_det_sewa` */

/*Table structure for table `tb_futsal` */

DROP TABLE IF EXISTS `tb_futsal`;

CREATE TABLE `tb_futsal` (
  `id_futsal` int(11) NOT NULL AUTO_INCREMENT,
  `nama_futsal` varchar(25) DEFAULT NULL,
  `alamat_futsal` varchar(50) DEFAULT NULL,
  `no_hp_futsal` varchar(15) DEFAULT NULL,
  `id_kota` int(11) DEFAULT NULL,
  `username_futsal` varchar(25) DEFAULT NULL,
  `password_futsal` varchar(25) DEFAULT NULL,
  `logo_futsal` text,
  `status` enum('PENDING','MEMBER') DEFAULT NULL,
  PRIMARY KEY (`id_futsal`),
  KEY `id_kota` (`id_kota`),
  CONSTRAINT `tb_futsal_ibfk_2` FOREIGN KEY (`id_kota`) REFERENCES `td_kota` (`id_kota`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_futsal` */

/*Table structure for table `tb_jadwal` */

DROP TABLE IF EXISTS `tb_jadwal`;

CREATE TABLE `tb_jadwal` (
  `id_jadwal` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_jadwal` date DEFAULT NULL,
  `jam_mulai` time DEFAULT NULL,
  `jam_akhir` time DEFAULT NULL,
  `id_lapangan` int(11) DEFAULT NULL,
  `harga_jadwal` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_jadwal`),
  KEY `id_lapangan` (`id_lapangan`),
  CONSTRAINT `tb_jadwal_ibfk_1` FOREIGN KEY (`id_lapangan`) REFERENCES `tb_lapangan` (`id_lapangan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_jadwal` */

/*Table structure for table `tb_kabupaten` */

DROP TABLE IF EXISTS `tb_kabupaten`;

CREATE TABLE `tb_kabupaten` (
  `id_kabupaten` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kabupaten` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id_kabupaten`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_kabupaten` */

/*Table structure for table `tb_lapangan` */

DROP TABLE IF EXISTS `tb_lapangan`;

CREATE TABLE `tb_lapangan` (
  `id_lapangan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_lapangan` varchar(30) DEFAULT NULL,
  `id_futsal` int(11) DEFAULT NULL,
  `gambar_lapangan` text,
  PRIMARY KEY (`id_lapangan`),
  KEY `id_futsal` (`id_futsal`),
  CONSTRAINT `tb_lapangan_ibfk_1` FOREIGN KEY (`id_futsal`) REFERENCES `tb_futsal` (`id_futsal`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_lapangan` */

/*Table structure for table `tb_member` */

DROP TABLE IF EXISTS `tb_member`;

CREATE TABLE `tb_member` (
  `id_member` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(25) DEFAULT NULL,
  `last_name` varchar(25) DEFAULT NULL,
  `no_tlp_member` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `saldo` int(11) DEFAULT NULL,
  `profile_pict` text,
  PRIMARY KEY (`id_member`)
) ENGINE=InnoDB AUTO_INCREMENT=90 DEFAULT CHARSET=latin1;

/*Data for the table `tb_member` */

insert  into `tb_member`(`id_member`,`first_name`,`last_name`,`no_tlp_member`,`email`,`password`,`saldo`,`profile_pict`) values (46,'dasdasd','asdasd','asdasdasd','asdasdasdasd','7815696ecbf1c96e6894b779',0,'default.jpg'),(47,'dasdasd','asdasd','asdasdasd','asdasdasdasd','7815696ecbf1c96e6894b779',0,'default.jpg'),(48,'sadasd','asdasd','asdasdas','asdadasda','7815696ecbf1c96e6894b779',0,'default.jpg'),(49,'asdasd','asdasdasd','asdasdasd','asdasdasd','7815696ecbf1c96e6894b779',0,'default.jpg'),(50,'asdas','sdasd','asdasdasd','asdasdasd','7815696ecbf1c96e6894b779',0,'default.jpg'),(51,'asdasd','asdasd','asdasd','asdasdasd','7c90c1fb31c4ac6d2a8f8050',0,'default.jpg'),(52,'asdasd','asdasd','asdasd','asdasdasd','81dc9bdb52d04dc20036dbd8',0,'default.jpg'),(53,'wqqwe`qweqwe`','dasdasd','asdasd','asdasd','202cb962ac59075b964b0715',0,'default.jpg'),(54,'asdasd','asdasd`','asdasd','asdasd','7815696ecbf1c96e6894b779',0,'default.jpg'),(55,'asdasd','asdasd`','asdasd','asdasd','7815696ecbf1c96e6894b779',0,'default.jpg'),(56,'asdasd','asdasd`','asdasd','asdasd','7815696ecbf1c96e6894b779',0,'default.jpg'),(57,'asdasd','asdasd`','asdasd','asdasd','7815696ecbf1c96e6894b779',0,'default.jpg'),(58,'asdasd','asdsad','asdasd','wahyu_permadi29@yahoo.com','7815696ecbf1c96e6894b779',0,'default.jpg'),(59,'','','','','d41d8cd98f00b204e9800998',0,'default.jpg'),(60,'','','','','d41d8cd98f00b204e9800998',0,'default.jpg'),(61,'asdasd','asdasd','asd','wahyu.permadi1725@gmail.com','7815696ecbf1c96e6894b779',0,'default.jpg'),(62,'asdasd','asdsad','asdasds','wahyu.permadi1725@gmail.comass','a8f5f167f44f4964e6c998de',0,'default.jpg'),(63,'asdasd','asdsad','asdasds','wahyu.permadi1725@gmail.comass','a8f5f167f44f4964e6c998de',0,'default.jpg'),(64,'asdasd','asdsad','asdasds','wahyu.permadi1725@gmail.comass','asdasd',0,'default.jpg'),(65,'asdasd','asdsad','asdd','sadasdasdasdasdasd','asd',0,'default.jpg'),(66,'dasdas','dadasd','asd','asdasdasdasdsadasdasdas','7815696ecbf1c96e6894b779',0,'default.jpg'),(67,'asdas','dsdasd','asdasd','asdasda','a8f5f167f44f4964e6c998dee827110c',0,'default.jpg'),(68,'asdas','dsdasd','asdasd','asdasda','a8f5f167f44f4964e6c998dee827110c',0,'default.jpg'),(69,'asdas','dsdasd','asdasd','asdasda','a8f5f167f44f4964e6c998dee827110c',0,'default.jpg'),(70,'wahyu','wahyu','123456','wahyu_permadi29@yahoo.comx','8cbbdc3fff847eee79abadc7b693b60e',0,'default.jpg'),(71,'wahyu','asasdasd','asdasd','asd','7815696ecbf1c96e6894b779456d330e',0,'default.jpg'),(72,'sasa','sasa','sasa','sasa','f45731e3d39a1b2330bbf93e9b3de59e',0,'149217781417884497_1437617136310348_4476485109156462207_n.jpg'),(73,'wahyu','permadi','123','wahyu.koplar','123',NULL,NULL),(74,'wahyu','permadi','123','wahyu.koplarsasa','sasasa',0,'default.jpg'),(75,'asdasd','asdasd','123','wahyu.koplarputri','123',0,'default.jpg'),(76,'asdasd','asdasd','123','wahyu.koplarasdasdasd','1234',0,'default.jpg'),(77,'wahayah','asdasd','123','wahyu.koplarczxczxc','202cb962ac59075b964b07152d234b70',0,'default.jpg'),(78,'wahayah','asdasd','123','wahyu.koplarczxczxc345345','202cb962ac59075b964b07152d234b70',0,'default.jpg'),(79,'jbkj','hhi','12345','wahyu.koplar0909090909','827ccb0eea8a706c4c34a16891f84e7b',0,'default.jpg'),(80,'asdasd','asdsad','123','wahyu.koplarxzxasdasd','202cb962ac59075b964b07152d234b70',0,'default.jpg'),(81,'wahayah','asdasdasd','123','wahyu.koplarvcxxxxxxxxxxx','202cb962ac59075b964b07152d234b70',0,'default.jpg'),(82,'wahayah','permadi','123','wahyu.koplarbbbbbbbbbbnbn','202cb962ac59075b964b07152d234b70',0,'default.jpg'),(83,'wahayah','permadi','123','wahyu.koplarbbbbbbbbbbnbnmnmn','202cb962ac59075b964b07152d234b70',0,'default.jpg'),(84,'wahayah','asdasdasd','123','wahyu.koplarzxdawqe2131','202cb962ac59075b964b07152d234b70',0,'default.jpg'),(85,'wahayah','permadi','123','asdasdasdasdasdq223123','202cb962ac59075b964b07152d234b70',0,'default.jpg'),(86,'asdasd','asdasdasd','123','asdasd12213123','202cb962ac59075b964b07152d234b70',0,'default.jpg'),(87,'asdasd','asdasdasd','123','asdasd1234124124','202cb962ac59075b964b07152d234b70',0,'default.jpg'),(88,'wahayah','asdasd','123','wahyu.koplarasdasdasda2313','202cb962ac59075b964b07152d234b70',0,'default.jpg'),(89,'asdasd','permadi','123','wahyu.koplarasdasd1234','202cb962ac59075b964b07152d234b70',0,'default.jpg');

/*Table structure for table `tb_sewa` */

DROP TABLE IF EXISTS `tb_sewa`;

CREATE TABLE `tb_sewa` (
  `id_sewa` int(11) NOT NULL AUTO_INCREMENT,
  `id_member` int(11) DEFAULT NULL,
  `id_futsal` int(11) DEFAULT NULL,
  `tgl_sewa` date DEFAULT NULL,
  `total_sewa` int(11) DEFAULT NULL,
  `status_bayar` enum('PENDING','DP') DEFAULT NULL,
  PRIMARY KEY (`id_sewa`),
  KEY `id_futsal` (`id_futsal`),
  KEY `id_member` (`id_member`),
  CONSTRAINT `tb_sewa_ibfk_2` FOREIGN KEY (`id_futsal`) REFERENCES `tb_futsal` (`id_futsal`),
  CONSTRAINT `tb_sewa_ibfk_3` FOREIGN KEY (`id_member`) REFERENCES `tb_member` (`id_member`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_sewa` */

/*Table structure for table `tb_topup` */

DROP TABLE IF EXISTS `tb_topup`;

CREATE TABLE `tb_topup` (
  `id_topup` int(11) NOT NULL AUTO_INCREMENT,
  `id_member` int(11) DEFAULT NULL,
  `nominal_topup` int(11) DEFAULT NULL,
  `bukti_trans` text,
  `status` enum('PENDING','SUKSES') DEFAULT NULL,
  PRIMARY KEY (`id_topup`),
  KEY `id_member` (`id_member`),
  CONSTRAINT `tb_topup_ibfk_1` FOREIGN KEY (`id_member`) REFERENCES `tb_member` (`id_member`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_topup` */

/*Table structure for table `td_kota` */

DROP TABLE IF EXISTS `td_kota`;

CREATE TABLE `td_kota` (
  `id_kota` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kota` varchar(20) DEFAULT NULL,
  `id_kabupaten` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_kota`),
  KEY `id_kabupaten` (`id_kabupaten`),
  CONSTRAINT `td_kota_ibfk_1` FOREIGN KEY (`id_kabupaten`) REFERENCES `tb_kabupaten` (`id_kabupaten`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `td_kota` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
