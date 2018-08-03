/*
SQLyog Ultimate v8.55 
MySQL - 5.5.5-10.2.7-MariaDB : Database - drivegreen_db
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
  `vehicle_id` int(5) DEFAULT NULL,
  `status_code` varchar(10) DEFAULT NULL,
  `created_datetime` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `dg_booking` */

insert  into `dg_booking`(`id`,`book_date_time`,`customer_id`,`vehicle_id`,`status_code`,`created_datetime`) values (1,'2018-07-05 10:49:13',1,1,'OPEN','2018-07-04 10:49:13');

/*Table structure for table `dg_center` */

DROP TABLE IF EXISTS `dg_center`;

CREATE TABLE `dg_center` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `center_name` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `mobile` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `created_datetime` timestamp NULL DEFAULT current_timestamp(),
  `created_user` int(5) DEFAULT NULL,
  `district_name` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `dg_center` */

insert  into `dg_center`(`id`,`center_name`,`address`,`mobile`,`email`,`created_datetime`,`created_user`,`district_name`) values (1,'Negombo','Sea Street','0315223354','nego@gd.com','2018-07-16 12:01:07',0,'GAMPAHA'),(2,'assadsa','dfdf','23213','sdfd','2018-07-17 10:05:17',NULL,'GAMPAHA'),(3,'dasadsad','sadsad','23123','sddsd','2018-07-17 10:07:47',1,'COLOMBO'),(4,'dasadsad','sadsad','23123','sddsd','2018-07-17 10:25:16',1,'COLOMBO');

/*Table structure for table `dg_customer` */

DROP TABLE IF EXISTS `dg_customer`;

CREATE TABLE `dg_customer` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `nic` varchar(12) DEFAULT NULL,
  `pword` text DEFAULT NULL,
  `mobile_number` varchar(10) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `status_code` varchar(10) DEFAULT 'ACTIVE',
  `user_role` varchar(10) DEFAULT 'CUSTOMER',
  `created_datetime` timestamp NULL DEFAULT current_timestamp(),
  `created_user` int(5) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `dg_customer` */

insert  into `dg_customer`(`id`,`first_name`,`last_name`,`nic`,`pword`,`mobile_number`,`address`,`email`,`status_code`,`user_role`,`created_datetime`,`created_user`) values (1,'Ravinath','Fernando',NULL,NULL,NULL,NULL,NULL,'ACTIVE',NULL,'2018-05-31 22:29:16',0),(2,'Ravinath','Fernando',NULL,NULL,NULL,NULL,NULL,'ACTIVE',NULL,'2018-05-31 22:36:58',0),(3,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ACTIVE',NULL,'2018-05-31 22:37:48',0),(4,'Ravinath','Fernando',NULL,NULL,NULL,NULL,NULL,'ACTIVE',NULL,'2018-05-31 22:49:55',0),(5,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ACTIVE',NULL,'2018-05-31 22:50:24',0),(6,'Ravinath','Fernando',NULL,NULL,NULL,NULL,NULL,'ACTIVE',NULL,'2018-05-31 22:50:37',0),(7,'asdsad','sadsad','423423',NULL,'34234','sdfsdfsd','dsfsdf@gg','ACTIVE','CUSTOMER','2018-07-17 11:17:14',1);

/*Table structure for table `dg_district` */

DROP TABLE IF EXISTS `dg_district`;

CREATE TABLE `dg_district` (
  `district_name` varchar(30) NOT NULL,
  PRIMARY KEY (`district_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `dg_district` */

insert  into `dg_district`(`district_name`) values ('COLOMBO'),('GAMPAHA'),('HAMBANTOTA');

/*Table structure for table `dg_engine` */

DROP TABLE IF EXISTS `dg_engine`;

CREATE TABLE `dg_engine` (
  `engine_type` varchar(10) NOT NULL,
  PRIMARY KEY (`engine_type`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `dg_engine` */

insert  into `dg_engine`(`engine_type`) values ('AUTO'),('MANUAL');

/*Table structure for table `dg_fual` */

DROP TABLE IF EXISTS `dg_fual`;

CREATE TABLE `dg_fual` (
  `fual_type` varchar(20) NOT NULL,
  `fee` varchar(12) DEFAULT NULL,
  PRIMARY KEY (`fual_type`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `dg_fual` */

insert  into `dg_fual`(`fual_type`,`fee`) values ('DESEL','3500'),('PATROL','2500');

/*Table structure for table `dg_inspection` */

DROP TABLE IF EXISTS `dg_inspection`;

CREATE TABLE `dg_inspection` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `vehicle_id` int(5) DEFAULT NULL,
  `engine_type` varchar(10) DEFAULT NULL,
  `chassis_number` varchar(20) DEFAULT NULL,
  `engine_number` varchar(20) DEFAULT NULL,
  `silencer_leak` varchar(20) DEFAULT NULL,
  `oil_leak` varchar(20) DEFAULT NULL,
  `air_leak` varchar(20) DEFAULT NULL,
  `fuel_tank_cap` varchar(20) DEFAULT NULL,
  `plug_top` varchar(20) DEFAULT NULL,
  `engine_idle_RPM` varchar(20) DEFAULT NULL,
  `abnormal_vibration` varchar(20) DEFAULT NULL,
  `water_leakages` varchar(20) DEFAULT NULL,
  `created_datetime` timestamp NULL DEFAULT current_timestamp(),
  `created_user` int(5) DEFAULT NULL,
  `inspec_result` varchar(20) DEFAULT NULL,
  `booking_id` int(5) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `dg_inspection` */

insert  into `dg_inspection`(`id`,`vehicle_id`,`engine_type`,`chassis_number`,`engine_number`,`silencer_leak`,`oil_leak`,`air_leak`,`fuel_tank_cap`,`plug_top`,`engine_idle_RPM`,`abnormal_vibration`,`water_leakages`,`created_datetime`,`created_user`,`inspec_result`,`booking_id`) values (1,3,'manual','Accepted','Accepted','Accepted','Accepted','Accepted','Accepted','Accepted','Accepted','Accepted','Accepted',NULL,NULL,'ACCEP',NULL),(2,3,'manual','Accepted','Not Accepted','Not Accepted','Accepted','Not Accepted','Accepted','Accepted','Accepted','Not Accepted','Not Accepted','2018-08-03 15:38:51',NULL,'REJEC',0),(3,3,'manual','--select--','--select--','--select--','Not Accepted','--select--','--select--','--select--','--select--','--select--','--select--','2018-08-03 15:44:45',NULL,'ACCEP',0);

/*Table structure for table `dg_payment` */

DROP TABLE IF EXISTS `dg_payment`;

CREATE TABLE `dg_payment` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `vehicle_id` int(5) DEFAULT NULL,
  `status_code` varchar(10) DEFAULT NULL,
  `expire_date` varchar(20) DEFAULT NULL,
  `created_datetime` timestamp NULL DEFAULT current_timestamp(),
  `created_userid` int(5) DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `inspection_id` int(5) DEFAULT NULL,
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

insert  into `dg_status`(`status_code`,`description`) values ('ACTIVE','Active'),('DEACTIVE','Deactive'),('OPEN','Open'),('CLOSE','Close'),('REJECT','Reject'),('STAFF','Staff');

/*Table structure for table `dg_user` */

DROP TABLE IF EXISTS `dg_user`;

CREATE TABLE `dg_user` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `nic` varchar(12) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `pword` text DEFAULT NULL,
  `mobile_number` varchar(10) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `role_code` varchar(10) DEFAULT NULL,
  `center_id` int(5) DEFAULT NULL,
  `status_code` varchar(20) DEFAULT NULL,
  `created_datetime` timestamp NULL DEFAULT current_timestamp(),
  `created_user` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `dg_user` */

insert  into `dg_user`(`id`,`first_name`,`last_name`,`nic`,`username`,`pword`,`mobile_number`,`address`,`role_code`,`center_id`,`status_code`,`created_datetime`,`created_user`) values (1,'Admin','Nida','8635125824','admin','86f7e437faa5a7fce15d1ddcb9eaeaea377667b8','071','Raddo','ADMIN',1,'ACTIVE','2018-07-04 09:30:36',1),(2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(3,'ssss','ssss',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(4,'First Name','Last Name',NULL,NULL,'da39a3ee5e6b4b0d3255bfef95601890afd80709',NULL,NULL,NULL,NULL,NULL,NULL,1),(5,'sadasd','asdsa',NULL,NULL,'da39a3ee5e6b4b0d3255bfef95601890afd80709',NULL,NULL,NULL,NULL,NULL,NULL,1),(6,'sadasd','asdsa','23212','wqeqw','6250210b6690bfa8fcc35b81056403bb56649e5f','13421321','dsdsadasd','ADMIN',1,'ACTIVE',NULL,1),(7,'sadasd','asdsa','232124','wqeqwx','07e634cdf6f515f299f39ccb1915f1cbbed8a106','13421321','dsdsadasd','ADMIN',1,'ACTIVE','2018-07-16 12:30:43',1);

/*Table structure for table `dg_user_role` */

DROP TABLE IF EXISTS `dg_user_role`;

CREATE TABLE `dg_user_role` (
  `role_code` varchar(20) NOT NULL,
  `description` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`role_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `dg_user_role` */

insert  into `dg_user_role`(`role_code`,`description`) values ('ADMIN','Administrator'),('CUSTOMER','Customer'),('MANAGER','Center Manager'),('STAFF','Staff user');

/*Table structure for table `dg_vehicle` */

DROP TABLE IF EXISTS `dg_vehicle`;

CREATE TABLE `dg_vehicle` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `manufac_year` int(5) DEFAULT NULL,
  `stroke` int(5) DEFAULT NULL,
  `reg_no` varchar(30) DEFAULT NULL,
  `type_code` varchar(10) DEFAULT NULL,
  `fual_type` varchar(10) DEFAULT NULL,
  `brand_code` varchar(10) DEFAULT NULL,
  `customer_id` int(5) DEFAULT NULL,
  `created_datetime` timestamp NULL DEFAULT current_timestamp(),
  `created_userid` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `dg_vehicle` */

insert  into `dg_vehicle`(`id`,`manufac_year`,`stroke`,`reg_no`,`type_code`,`fual_type`,`brand_code`,`customer_id`,`created_datetime`,`created_userid`) values (1,2015,6,'4849','','DESEL','NISSAN',1,'0000-00-00 00:00:00',NULL),(2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-07-17 14:45:38',NULL),(3,2016,6,'6655','BUS','DESEL','TOYOTA',7,NULL,1);

/*Table structure for table `dg_vehicle_brand` */

DROP TABLE IF EXISTS `dg_vehicle_brand`;

CREATE TABLE `dg_vehicle_brand` (
  `brand_code` varchar(10) NOT NULL,
  `decription` varbinary(50) DEFAULT NULL,
  PRIMARY KEY (`brand_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `dg_vehicle_brand` */

insert  into `dg_vehicle_brand`(`brand_code`,`decription`) values ('NISSAN','NISSAN'),('TOYOTA','TOYOTA');

/*Table structure for table `dg_vehicle_type` */

DROP TABLE IF EXISTS `dg_vehicle_type`;

CREATE TABLE `dg_vehicle_type` (
  `type_code` varchar(10) NOT NULL,
  `description` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`type_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `dg_vehicle_type` */

insert  into `dg_vehicle_type`(`type_code`,`description`) values ('BUS','BUS'),('CAR','CAR');

/*Table structure for table `gd_test` */

DROP TABLE IF EXISTS `gd_test`;

CREATE TABLE `gd_test` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `test_result` varchar(10) DEFAULT NULL,
  `result_doc` varchar(20) DEFAULT NULL,
  `payment_id` int(5) DEFAULT NULL,
  `created_datetime` timestamp NULL DEFAULT current_timestamp(),
  `cteated_userid` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `gd_test` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
