/*
SQLyog Ultimate v8.55 
MySQL - 5.5.5-10.1.21-MariaDB : Database - vemsdb
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`vemsdb` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `vemsdb`;

/*Table structure for table `audit_trace` */

DROP TABLE IF EXISTS `audit_trace`;

CREATE TABLE `audit_trace` (
  `id` int(5) NOT NULL,
  `userid` int(5) DEFAULT NULL,
  `logtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `audit_trace` */

/*Table structure for table `branch` */

DROP TABLE IF EXISTS `branch`;

CREATE TABLE `branch` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `branchname` varchar(100) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `district` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `branch` */

insert  into `branch`(`id`,`branchname`,`address`,`district`) values (1,'HEAD OFFICE','COLOMBO','COLOMBO'),(2,'RAJAGITIYA','Rajagiriya colombo 3','Colombo');

/*Table structure for table `customer` */

DROP TABLE IF EXISTS `customer`;

CREATE TABLE `customer` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` text,
  `mobile` varchar(20) DEFAULT NULL,
  `nic` varchar(20) DEFAULT NULL,
  `rolecode` varchar(10) DEFAULT 'CUSTOMER',
  `status` varchar(10) DEFAULT 'ACTIVE',
  `datecreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `FK_customer_userurole` (`rolecode`),
  CONSTRAINT `FK_customer_userurole` FOREIGN KEY (`rolecode`) REFERENCES `user_role` (`rolecode`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `customer` */

/*Table structure for table `reservation` */

DROP TABLE IF EXISTS `reservation`;

CREATE TABLE `reservation` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `resv_date` varchar(25) DEFAULT NULL,
  `resv_time` varchar(20) DEFAULT NULL,
  `resv_date_time` varchar(50) DEFAULT NULL,
  `status` varchar(10) DEFAULT 'ACTIVE' COMMENT 'ACTIVE|CLOSE',
  `branchid` int(5) DEFAULT NULL,
  `customerid` int(5) DEFAULT NULL,
  `usertype` varchar(10) DEFAULT NULL,
  `usercreated` int(5) DEFAULT NULL,
  `datecreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `FK_reservation_customer` (`customerid`),
  KEY `FK_reservation_branch` (`branchid`),
  CONSTRAINT `FK_reservation_branch` FOREIGN KEY (`branchid`) REFERENCES `branch` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_reservation_customer` FOREIGN KEY (`customerid`) REFERENCES `customer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `reservation` */

/*Table structure for table `user_role` */

DROP TABLE IF EXISTS `user_role`;

CREATE TABLE `user_role` (
  `rolecode` varchar(10) NOT NULL,
  `description` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`rolecode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `user_role` */

insert  into `user_role`(`rolecode`,`description`) values ('CUST','CUSTOMER');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` text,
  `nic` varchar(20) DEFAULT NULL,
  `mobileno` varchar(10) DEFAULT NULL,
  `branchid` int(5) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `rolecode` varchar(10) DEFAULT NULL,
  `usercreated` int(2) DEFAULT NULL,
  `datecreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `FK_users_role` (`rolecode`),
  CONSTRAINT `FK_users_role` FOREIGN KEY (`rolecode`) REFERENCES `user_role` (`rolecode`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `users` */

/*Table structure for table `vehicle_brand` */

DROP TABLE IF EXISTS `vehicle_brand`;

CREATE TABLE `vehicle_brand` (
  `id` int(5) NOT NULL,
  `brand` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `vehicle_brand` */

/*Table structure for table `vehicle_category` */

DROP TABLE IF EXISTS `vehicle_category`;

CREATE TABLE `vehicle_category` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `category` varbinary(50) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `vehicle_category` */

/*Table structure for table `vehicle_cylinder` */

DROP TABLE IF EXISTS `vehicle_cylinder`;

CREATE TABLE `vehicle_cylinder` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `cylinder` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `vehicle_cylinder` */

/*Table structure for table `vehicle_fualtype` */

DROP TABLE IF EXISTS `vehicle_fualtype`;

CREATE TABLE `vehicle_fualtype` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `fualtype` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `vehicle_fualtype` */

/*Table structure for table `vehicle_inspection` */

DROP TABLE IF EXISTS `vehicle_inspection`;

CREATE TABLE `vehicle_inspection` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `regid` int(5) DEFAULT NULL,
  `chassis_number` varchar(5) DEFAULT NULL,
  `engine_number` varchar(5) DEFAULT NULL,
  `silencer_leak` varchar(5) DEFAULT NULL,
  `oil_leak` varchar(5) DEFAULT NULL,
  `air_filter` varchar(5) DEFAULT NULL,
  `fuel_tank_cap` varchar(5) DEFAULT NULL,
  `stable_engine_RPM` varchar(5) DEFAULT NULL,
  `abnormal_vibration` varchar(5) DEFAULT NULL,
  `water_leakage` varchar(5) DEFAULT NULL,
  `fan_belt` varchar(5) DEFAULT NULL,
  `remark` varchar(100) DEFAULT NULL,
  `status` varchar(20) DEFAULT 'ACTIVE',
  `result` varchar(30) DEFAULT NULL,
  `usercreated` int(5) DEFAULT NULL,
  `datecreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `FK_vehicle_inspection_registration` (`regid`),
  CONSTRAINT `FK_vehicle_inspection_registration` FOREIGN KEY (`regid`) REFERENCES `vehicle_registration` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `vehicle_inspection` */

/*Table structure for table `vehicle_registration` */

DROP TABLE IF EXISTS `vehicle_registration`;

CREATE TABLE `vehicle_registration` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `vehicle_year` int(5) DEFAULT NULL,
  `brand` varchar(20) DEFAULT NULL,
  `vehicle_no` varbinary(20) DEFAULT NULL,
  `categoryid` int(5) DEFAULT NULL,
  `fualtype` varchar(10) DEFAULT NULL,
  `stroke` int(3) DEFAULT NULL,
  `cylinders` int(3) DEFAULT NULL,
  `status` varchar(20) DEFAULT 'ACTIVE',
  `usercreated` int(5) DEFAULT NULL,
  `datecreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `FK_vehicle_registration_category` (`categoryid`),
  KEY `FK_vehicle_registration_cylinder` (`cylinders`),
  CONSTRAINT `FK_vehicle_registration_category` FOREIGN KEY (`categoryid`) REFERENCES `vehicle_category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_vehicle_registration_cylinder` FOREIGN KEY (`cylinders`) REFERENCES `vehicle_cylinder` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `vehicle_registration` */

/*Table structure for table `vehicle_result` */

DROP TABLE IF EXISTS `vehicle_result`;

CREATE TABLE `vehicle_result` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `reg_id` int(5) DEFAULT NULL,
  `result` varchar(50) DEFAULT NULL,
  `usercreated` int(5) DEFAULT NULL,
  `datecreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `vehicle_result` */

/*Table structure for table `vehicle_stroke` */

DROP TABLE IF EXISTS `vehicle_stroke`;

CREATE TABLE `vehicle_stroke` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `stroke` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `vehicle_stroke` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
