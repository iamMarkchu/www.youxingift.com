/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.7.22-0ubuntu18.04.1 : Database - homestead3
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`homestead3` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;

USE `homestead3`;

/*Table structure for table `products` */

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `img_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `products` */

insert  into `products`(`id`,`user_id`,`category_id`,`name`,`img_url`,`description`,`created_at`,`updated_at`) values (1,1,1,'礼物1','http://www.huirongtoys.com/imageRepository/d10cbea2-c239-4ace-a88d-7e81100499f6.jpg',NULL,'2018-07-28 00:31:38','2018-07-28 00:31:42'),(2,1,1,'礼物2','http://www.huirongtoys.com/imageRepository/d10cbea2-c239-4ace-a88d-7e81100499f6.jpg',NULL,'2018-07-28 00:31:38','2018-07-28 00:31:42'),(3,1,1,'礼物3','http://www.huirongtoys.com/imageRepository/d10cbea2-c239-4ace-a88d-7e81100499f6.jpg',NULL,'2018-07-28 00:31:38','2018-07-28 00:31:42'),(4,1,1,'礼物4','http://www.huirongtoys.com/imageRepository/d10cbea2-c239-4ace-a88d-7e81100499f6.jpg',NULL,'2018-07-28 00:31:38','2018-07-28 00:31:42'),(5,1,1,'礼物5','http://www.huirongtoys.com/imageRepository/d10cbea2-c239-4ace-a88d-7e81100499f6.jpg',NULL,'2018-07-28 00:31:38','2018-07-28 00:31:42'),(6,1,1,'礼物6','http://www.huirongtoys.com/imageRepository/d10cbea2-c239-4ace-a88d-7e81100499f6.jpg',NULL,'2018-07-28 00:31:38','2018-07-28 00:31:42'),(7,1,1,'礼物7','http://www.huirongtoys.com/imageRepository/d10cbea2-c239-4ace-a88d-7e81100499f6.jpg',NULL,'2018-07-28 00:31:38','2018-07-28 00:31:38'),(8,1,1,'礼物8','http://www.huirongtoys.com/imageRepository/d10cbea2-c239-4ace-a88d-7e81100499f6.jpg',NULL,'2018-07-28 00:31:38','2018-07-28 00:31:38'),(9,1,1,'礼物9','http://www.huirongtoys.com/imageRepository/d10cbea2-c239-4ace-a88d-7e81100499f6.jpg',NULL,'2018-07-28 00:31:38','2018-07-28 00:31:38'),(10,1,1,'礼物10','http://www.huirongtoys.com/imageRepository/d10cbea2-c239-4ace-a88d-7e81100499f6.jpg',NULL,'2018-07-28 00:31:38','2018-07-28 00:31:38'),(11,1,1,'礼物11','http://www.huirongtoys.com/imageRepository/d10cbea2-c239-4ace-a88d-7e81100499f6.jpg',NULL,'2018-07-28 00:31:38','2018-07-28 00:31:38'),(12,1,1,'礼物12','http://www.huirongtoys.com/imageRepository/d10cbea2-c239-4ace-a88d-7e81100499f6.jpg',NULL,'2018-07-28 00:31:38','2018-07-28 00:31:38'),(13,1,1,'礼物13','http://www.huirongtoys.com/imageRepository/d10cbea2-c239-4ace-a88d-7e81100499f6.jpg',NULL,'2018-07-28 00:31:38','2018-07-28 00:31:38'),(14,1,1,'礼物14','http://www.huirongtoys.com/imageRepository/d10cbea2-c239-4ace-a88d-7e81100499f6.jpg',NULL,'2018-07-28 00:31:38','2018-07-28 00:31:38'),(15,1,1,'礼物15','http://www.huirongtoys.com/imageRepository/d10cbea2-c239-4ace-a88d-7e81100499f6.jpg',NULL,'2018-07-28 00:31:38','2018-07-28 00:31:38'),(16,1,1,'礼物16','http://www.huirongtoys.com/imageRepository/d10cbea2-c239-4ace-a88d-7e81100499f6.jpg',NULL,'2018-07-28 00:31:38','2018-07-28 00:31:38');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
