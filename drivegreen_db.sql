/*
SQLyog Trial v12.5.1 (64 bit)
MySQL - 5.6.17 : Database - drivegreen_db
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`drivegreen_db` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `drivegreen_db`;

/*Table structure for table `dg_booking` */

DROP TABLE IF EXISTS `dg_booking`;

CREATE TABLE `dg_booking` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `book_date_time` varchar(20) DEFAULT NULL,
  `customer_id` int(5) DEFAULT NULL,
  `status_code` varchar(10) DEFAULT NULL,
  `created_datetime` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `dg_booking` */

/*Table structure for table `dg_center` */

DROP TABLE IF EXISTS `dg_center`;

CREATE TABLE `dg_center` (
  `int` int(5) NOT NULL AUTO_INCREMENT,
  `center_name` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `mobile` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `created_datetime` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `created_user` int(5) DEFAULT NULL,
  `district_name` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`int`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `dg_center` */

/*Table structure for table `dg_customer` */

DROP TABLE IF EXISTS `dg_customer`;

CREATE TABLE `dg_customer` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `nic` varchar(12) DEFAULT NULL,
  `mobile_number` varchar(10) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `status_code` varchar(10) DEFAULT NULL,
  `user_role` varchar(10) DEFAULT NULL,
  `created_datetime` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `created_user` int(5) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `dg_customer` */

/*Table structure for table `dg_district` */

DROP TABLE IF EXISTS `dg_district`;

CREATE TABLE `dg_district` (
  `district_name` varchar(30) NOT NULL,
  PRIMARY KEY (`district_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `dg_district` */

/*Table structure for table `dg_engine` */

DROP TABLE IF EXISTS `dg_engine`;

CREATE TABLE `dg_engine` (
  `engine_type` varchar(10) NOT NULL,
  PRIMARY KEY (`engine_type`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `dg_engine` */

/*Table structure for table `dg_fual` */

DROP TABLE IF EXISTS `dg_fual`;

CREATE TABLE `dg_fual` (
  `fual_type` varchar(20) NOT NULL,
  `fee` varchar(12) DEFAULT NULL,
  PRIMARY KEY (`fual_type`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `dg_fual` */

/*Table structure for table `dg_inspection` */

DROP TABLE IF EXISTS `dg_inspection`;

CREATE TABLE `dg_inspection` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `vehicle_id` int(5) DEFAULT NULL,
  `engine_type` int(5) DEFAULT NULL,
  `created_datetime` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `created_user` int(5) DEFAULT NULL,
  `inspec_result` varchar(5) DEFAULT NULL,
  `booking_id` int(5) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `dg_inspection` */

/*Table structure for table `dg_payment` */

DROP TABLE IF EXISTS `dg_payment`;

CREATE TABLE `dg_payment` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `vehicle_id` int(5) DEFAULT NULL,
  `status_code` varchar(10) DEFAULT NULL,
  `expire_date` varchar(20) DEFAULT NULL,
  `created_datetime` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `created_userid` int(5) DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `dg_payment` */

/*Table structure for table `dg_status` */

DROP TABLE IF EXISTS `dg_status`;

CREATE TABLE `dg_status` (
  `status_code` varchar(10) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `dg_status` */

/*Table structure for table `dg_user` */

DROP TABLE IF EXISTS `dg_user`;

CREATE TABLE `dg_user` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `nic` varchar(12) DEFAULT NULL,
  `mobile_number` varchar(10) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `role_code` varchar(10) DEFAULT NULL,
  `center_id` int(5) DEFAULT NULL,
  `status_code` varchar(20) DEFAULT NULL,
  `created_datetime` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `created_user` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `dg_user` */

/*Table structure for table `dg_user_role` */

DROP TABLE IF EXISTS `dg_user_role`;

CREATE TABLE `dg_user_role` (
  `role_code` varchar(20) NOT NULL,
  `description` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`role_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `dg_user_role` */

insert  into `dg_user_role`(`role_code`,`description`) values 
('ADMIN','Administrator'),
('CUSTOMER','Customer'),
('MANAGER','Center Manager'),
('STAFF','Staff user');

/*Table structure for table `dg_vehicle` */

DROP TABLE IF EXISTS `dg_vehicle`;

CREATE TABLE `dg_vehicle` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `reg_no` varchar(30) DEFAULT NULL,
  `type_code` varchar(10) DEFAULT NULL,
  `fual_type` varchar(10) DEFAULT NULL,
  `brand_code` varchar(10) DEFAULT NULL,
  `customer_id` int(5) DEFAULT NULL,
  `created_datetime` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `created_userid` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `dg_vehicle` */

/*Table structure for table `dg_vehicle_brand` */

DROP TABLE IF EXISTS `dg_vehicle_brand`;

CREATE TABLE `dg_vehicle_brand` (
  `brand_code` varchar(10) NOT NULL,
  `decription` varbinary(50) DEFAULT NULL,
  PRIMARY KEY (`brand_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `dg_vehicle_brand` */

/*Table structure for table `dg_vehicle_type` */

DROP TABLE IF EXISTS `dg_vehicle_type`;

CREATE TABLE `dg_vehicle_type` (
  `type_code` varchar(10) NOT NULL,
  PRIMARY KEY (`type_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `dg_vehicle_type` */

/*Table structure for table `gd_test` */

DROP TABLE IF EXISTS `gd_test`;

CREATE TABLE `gd_test` (
  `int` int(5) NOT NULL AUTO_INCREMENT,
  `test_result` varchar(10) DEFAULT NULL,
  `result_doc` varchar(20) DEFAULT NULL,
  `payment_id` int(5) DEFAULT NULL,
  `created_datetime` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `cteated_userid` int(5) DEFAULT NULL,
  PRIMARY KEY (`int`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `gd_test` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
