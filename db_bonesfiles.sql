/*
SQLyog Ultimate v11.11 (32 bit)
MySQL - 5.5.5-10.1.16-MariaDB : Database - db_bonesfiles
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_bonesfiles` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_bonesfiles`;

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values (2,'2017_03_30_132526_create_table_upload',1),(8,'2017_03_30_160627_create_table_user',2);

/*Table structure for table `t_upload` */

DROP TABLE IF EXISTS `t_upload`;

CREATE TABLE `t_upload` (
  `id_upload` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_file` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `ukuran_file` bigint(20) NOT NULL,
  `tanggal_upload` date NOT NULL,
  `jumlah_download` int(11) NOT NULL,
  PRIMARY KEY (`id_upload`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `t_upload` */

insert  into `t_upload`(`id_upload`,`nama_file`,`ukuran_file`,`tanggal_upload`,`jumlah_download`) values (3,'cam.jpg',10466,'2017-03-30',0),(5,'Dota Update Patch 7.04',400,'2017-03-12',100),(6,'Dota Update Patch 7.04',400,'2017-03-12',100),(8,'hd-wallpaper-44.jpg',420125,'2017-03-30',0),(9,'lul.jpg',14267,'2017-03-30',0),(10,'stars-hd-wallpaper-HD7.jpg',293385,'2017-03-30',0),(11,'S_5636979605044.jpg',165665,'2017-03-31',0),(12,'S_5636979776335.jpg',105360,'2017-03-31',0),(13,'S_5636979633567.jpg',109362,'2017-03-31',0),(14,'S_5636979605044.jpg',165665,'2017-03-31',0),(15,'S_5636979633567.jpg',109362,'2017-03-31',0),(16,'F.docx',13549,'2017-03-31',0),(17,'1U2JbY0-CLy.css',44307,'2017-03-31',0),(18,'1U2JbY0-CLy.css',44307,'2017-03-31',0),(19,'4wlCIV7lNPG.js.download',168021,'2017-03-31',0),(20,'1DNPefTyAJ2.js.download',64819,'2017-03-31',0),(21,'1-a.png',64768,'2017-03-31',0);

/*Table structure for table `t_user` */

DROP TABLE IF EXISTS `t_user`;

CREATE TABLE `t_user` (
  `id_login` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_login`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `t_user` */

insert  into `t_user`(`id_login`,`username`,`password`,`remember_token`) values (1,'admin','$2y$10$xyRYzTNxIGMTkgKuXD9GdOGu1e5p4E01IA8T2lJMvBfGirpnL7TlG','DfanzObvuykv7JX3pe3NIYT3xTFZOVHZYn2j9osys7PYkcdWlXW3x78NRWvN');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
