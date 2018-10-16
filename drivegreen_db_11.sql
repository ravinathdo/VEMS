/*
SQLyog Ultimate v8.55 
MySQL - 5.5.54 : Database - drivegreen_db
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
  `created_datetime` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `created_user` int(5) DEFAULT NULL,
  `center_id` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_dg_booking` (`customer_id`),
  KEY `FK_dg_booking_vehicle` (`vehicle_id`),
  CONSTRAINT `FK_dg_booking` FOREIGN KEY (`customer_id`) REFERENCES `dg_customer` (`id`),
  CONSTRAINT `FK_dg_booking_vehicle` FOREIGN KEY (`vehicle_id`) REFERENCES `dg_vehicle` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `dg_booking` */

insert  into `dg_booking`(`id`,`book_date_time`,`customer_id`,`vehicle_id`,`status_code`,`created_datetime`,`created_user`,`center_id`) values (5,'2018-10-18T04:54',1,NULL,'OPEN',NULL,1,1),(6,'xcdfsdfdsf',NULL,NULL,NULL,'2018-10-16 23:11:39',NULL,NULL),(7,'2018-10-19T04:55',1,NULL,'OPEN','2018-10-16 23:12:11',1,1),(8,'2018-10-17T04:54',1,NULL,'OPEN','2018-10-16 23:16:13',1,1);

/*Table structure for table `dg_center` */

DROP TABLE IF EXISTS `dg_center`;

CREATE TABLE `dg_center` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `center_name` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `mobile` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `created_datetime` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `created_user` int(5) DEFAULT NULL,
  `district_name` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_dg_center` (`district_name`),
  CONSTRAINT `FK_dg_center` FOREIGN KEY (`district_name`) REFERENCES `dg_district` (`district_name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `dg_center` */

insert  into `dg_center`(`id`,`center_name`,`address`,`mobile`,`email`,`created_datetime`,`created_user`,`district_name`) values (1,'COLOMBO','Colombo 03',NULL,NULL,'2018-10-16 21:14:32',NULL,'COLOMBO');

/*Table structure for table `dg_customer` */

DROP TABLE IF EXISTS `dg_customer`;

CREATE TABLE `dg_customer` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `nic` varchar(12) DEFAULT NULL,
  `pword` text,
  `mobile_number` varchar(10) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `status_code` varchar(10) DEFAULT 'ACTIVE',
  `role_code` varchar(10) DEFAULT 'CUSTOMER',
  `created_datetime` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `created_user` int(5) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `dg_customer` */

insert  into `dg_customer`(`id`,`first_name`,`last_name`,`nic`,`pword`,`mobile_number`,`address`,`email`,`status_code`,`role_code`,`created_datetime`,`created_user`) values (1,'Ravinath','Fernando','863512824V','b24777061756485c930c12fba0d84d37ab356646','071',' Raddoluwa','ravinathdo@gmail.com','ACTIVE','CUSTOMER','2018-10-16 20:57:23',NULL);

/*Table structure for table `dg_district` */

DROP TABLE IF EXISTS `dg_district`;

CREATE TABLE `dg_district` (
  `district_name` varchar(30) NOT NULL,
  PRIMARY KEY (`district_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `dg_district` */

insert  into `dg_district`(`district_name`) values ('COLOMBO');

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

insert  into `dg_fual`(`fual_type`,`fee`) values ('Petrol','3500');

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
  `created_datetime` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `created_user` int(5) DEFAULT NULL,
  `inspec_result` varchar(20) DEFAULT NULL,
  `booking_id` int(5) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `FK_dg_inspection_engine` (`engine_type`),
  KEY `FK_dg_inspection_user` (`created_user`),
  KEY `FK_dg_inspection_booking` (`booking_id`),
  CONSTRAINT `FK_dg_inspection_booking` FOREIGN KEY (`booking_id`) REFERENCES `dg_booking` (`id`),
  CONSTRAINT `FK_dg_inspection_engine` FOREIGN KEY (`engine_type`) REFERENCES `dg_engine` (`engine_type`),
  CONSTRAINT `FK_dg_inspection_user` FOREIGN KEY (`created_user`) REFERENCES `dg_user` (`id`)
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
  `inspection_id` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_dg_payment` (`vehicle_id`),
  KEY `FK_dg_payment_inspection` (`inspection_id`),
  CONSTRAINT `FK_dg_payment` FOREIGN KEY (`vehicle_id`) REFERENCES `dg_vehicle` (`id`),
  CONSTRAINT `FK_dg_payment_inspection` FOREIGN KEY (`inspection_id`) REFERENCES `dg_inspection` (`id`)
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
  `username` varchar(50) DEFAULT NULL,
  `pword` text,
  `mobile_number` varchar(10) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `role_code` varchar(10) DEFAULT NULL,
  `center_id` int(5) DEFAULT NULL,
  `status_code` varchar(20) DEFAULT NULL,
  `created_datetime` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `created_user` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_dg_user` (`role_code`),
  CONSTRAINT `FK_dg_user` FOREIGN KEY (`role_code`) REFERENCES `dg_user_role` (`role_code`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `dg_user` */

insert  into `dg_user`(`id`,`first_name`,`last_name`,`nic`,`username`,`pword`,`mobile_number`,`address`,`role_code`,`center_id`,`status_code`,`created_datetime`,`created_user`) values (1,'Admin','Nida','8635125824','admin','86f7e437faa5a7fce15d1ddcb9eaeaea377667b8','071','Raddo','ADMIN',1,'ACTIVE','2018-07-04 09:30:36',1),(2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(3,'ssss','ssss',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(4,'First Name','Last Name',NULL,NULL,'da39a3ee5e6b4b0d3255bfef95601890afd80709',NULL,NULL,NULL,NULL,NULL,NULL,1),(5,'sadasd','asdsa',NULL,NULL,'da39a3ee5e6b4b0d3255bfef95601890afd80709',NULL,NULL,NULL,NULL,NULL,NULL,1),(6,'sadasd','asdsa','23212','wqeqw','6250210b6690bfa8fcc35b81056403bb56649e5f','13421321','dsdsadasd','ADMIN',1,'ACTIVE',NULL,1),(7,'sadasd','asdsa','232124','wqeqwx','07e634cdf6f515f299f39ccb1915f1cbbed8a106','13421321','dsdsadasd','ADMIN',1,'ACTIVE','2018-07-16 12:30:43',1),(8,'Ravinath','Fernando','8635125','52033','91b0cad35a6a8c8e9468a22f90a0a77e6497b78f','0715833470','No 29 Pubudu Mw','MANAGER',1,'ACTIVE','2018-10-12 15:14:25',1),(9,'lalani','fasd','88556655','8855','8d4d499c472e3176439ebc7ec51fcba0883f01de','45454','No 29 Pubudu Mw','STAFF',1,'ACTIVE','2018-10-12 15:21:47',8),(10,'kumara','gamage','445566','kum','1a2805f9c25e613281af2b351226b45800e1e021','99888','','STAFF',1,'ACTIVE','2018-10-12 15:51:46',1);

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
  `created_datetime` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `created_userid` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_dg_vehicle_fual` (`fual_type`),
  KEY `FK_dg_vehicle_brand` (`brand_code`),
  KEY `FK_dg_vehicle_type` (`type_code`),
  CONSTRAINT `FK_dg_vehicle_brand` FOREIGN KEY (`brand_code`) REFERENCES `dg_vehicle_brand` (`brand_code`),
  CONSTRAINT `FK_dg_vehicle_fual` FOREIGN KEY (`fual_type`) REFERENCES `dg_fual` (`fual_type`),
  CONSTRAINT `FK_dg_vehicle_type` FOREIGN KEY (`type_code`) REFERENCES `dg_vehicle_type` (`type_code`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `dg_vehicle` */

insert  into `dg_vehicle`(`id`,`manufac_year`,`stroke`,`reg_no`,`type_code`,`fual_type`,`brand_code`,`customer_id`,`created_datetime`,`created_userid`) values (1,2018,6,'8855444','CAR','Petrol','TOYOTA',1,NULL,10);

/*Table structure for table `dg_vehicle_brand` */

DROP TABLE IF EXISTS `dg_vehicle_brand`;

CREATE TABLE `dg_vehicle_brand` (
  `brand_code` varchar(10) NOT NULL,
  `decription` varbinary(50) DEFAULT NULL,
  PRIMARY KEY (`brand_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `dg_vehicle_brand` */

insert  into `dg_vehicle_brand`(`brand_code`,`decription`) values ('TOYOTA','Toyota');

/*Table structure for table `dg_vehicle_type` */

DROP TABLE IF EXISTS `dg_vehicle_type`;

CREATE TABLE `dg_vehicle_type` (
  `type_code` varchar(10) NOT NULL,
  `description` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`type_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `dg_vehicle_type` */

insert  into `dg_vehicle_type`(`type_code`,`description`) values ('CAR','Car');

/*Table structure for table `gd_test` */

DROP TABLE IF EXISTS `gd_test`;

CREATE TABLE `gd_test` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `test_result` varchar(10) DEFAULT NULL,
  `result_doc` varchar(20) DEFAULT NULL,
  `payment_id` int(5) DEFAULT NULL,
  `created_datetime` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `cteated_userid` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_gd_test_payment` (`payment_id`),
  CONSTRAINT `FK_gd_test_payment` FOREIGN KEY (`payment_id`) REFERENCES `dg_payment` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `gd_test` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
