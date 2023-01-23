/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 10.4.24-MariaDB : Database - db_penggajian
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_penggajian` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `db_penggajian`;

/*Table structure for table `data_jabatan` */

DROP TABLE IF EXISTS `data_jabatan`;

CREATE TABLE `data_jabatan` (
  `id_jabatan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_jabatan` varchar(120) NOT NULL,
  `gaji_pokok` varchar(50) NOT NULL,
  `tj_transport` varchar(50) NOT NULL,
  `uang_makan` varchar(50) NOT NULL,
  PRIMARY KEY (`id_jabatan`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

/*Data for the table `data_jabatan` */

insert  into `data_jabatan`(`id_jabatan`,`nama_jabatan`,`gaji_pokok`,`tj_transport`,`uang_makan`) values 
(1,'Direktur','3000000','500000','300000'),
(2,'Admin','2000000','200000','200000'),
(3,'Teknisi','2200000','300000','300000'),
(4,'Sales','1800000','300000','250000');

/*Table structure for table `data_kehadiran` */

DROP TABLE IF EXISTS `data_kehadiran`;

CREATE TABLE `data_kehadiran` (
  `id_kehadiran` int(11) NOT NULL AUTO_INCREMENT,
  `bulan` varchar(15) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama_pegawai` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `nama_jabatan` varchar(50) NOT NULL,
  `hadir` int(11) NOT NULL,
  `sakit` int(11) NOT NULL,
  `alpha` int(11) NOT NULL,
  PRIMARY KEY (`id_kehadiran`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `data_kehadiran` */

/*Table structure for table `data_pegawai` */

DROP TABLE IF EXISTS `data_pegawai`;

CREATE TABLE `data_pegawai` (
  `id_pegawai` int(11) NOT NULL AUTO_INCREMENT,
  `nik` varchar(16) NOT NULL,
  `nama_pegawai` varchar(100) NOT NULL,
  `username` varchar(120) NOT NULL,
  `password` varchar(32) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `status` varchar(50) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `hak_akses` int(11) NOT NULL,
  PRIMARY KEY (`id_pegawai`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `data_pegawai` */

insert  into `data_pegawai`(`id_pegawai`,`nik`,`nama_pegawai`,`username`,`password`,`jenis_kelamin`,`jabatan`,`tanggal_masuk`,`status`,`photo`,`hak_akses`) values 
(4,'123456789','Admin','Admin','Admin','laki-laki','Admin','2022-12-15','','',1);

/*Table structure for table `potongan_gaji` */

DROP TABLE IF EXISTS `potongan_gaji`;

CREATE TABLE `potongan_gaji` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `potongan` varchar(120) NOT NULL,
  `jml_potongan` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `potongan_gaji` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
