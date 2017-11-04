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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `customer` */

insert  into `customer`(`id`,`firstname`,`lastname`,`email`,`password`,`mobile`,`nic`,`rolecode`,`status`,`datecreated`) values (1,'Gayan','Fernando','a@gmail.com','86f7e437faa5a7fce15d1ddcb9eaeaea377667b8','34445555','444444','CUSTOMER','ACTIVE','2017-11-03 19:52:52');

/*Table structure for table `reservation` */

DROP TABLE IF EXISTS `reservation`;

CREATE TABLE `reservation` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `resv_date` varchar(25) DEFAULT NULL,
  `resv_time` varchar(20) DEFAULT NULL,
  `resv_date_time` varchar(50) DEFAULT NULL,
  `status` varchar(10) DEFAULT 'ACTIVE' COMMENT 'ACTIVE|CLOSE',
  `branchid` int(5) DEFAULT NULL,
  `usercreated` int(5) DEFAULT NULL,
  `usertype` varchar(10) DEFAULT NULL,
  `datecreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `reservation` */

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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`id`,`firstname`,`lastname`,`email`,`password`,`nic`,`mobileno`,`branchid`,`status`,`rolecode`,`usercreated`,`datecreated`) values (1,'system','admin','sys@gmail.com','*667F407DE7C6AD07358FA38DAED7828A72014B4E','863450932v','0723455678',1,'ACTIVE','ADMIN',1,'2017-11-03 19:51:55');

/*Table structure for table `vehicle_category` */

DROP TABLE IF EXISTS `vehicle_category`;

CREATE TABLE `vehicle_category` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `category` varbinary(50) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `vehicle_category` */

/*Table structure for table `vehicle_reg_inspec` */

DROP TABLE IF EXISTS `vehicle_reg_inspec`;

CREATE TABLE `vehicle_reg_inspec` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `vehicle_year` int(5) DEFAULT NULL,
  `brand` varchar(20) DEFAULT NULL,
  `vehicle_no` varbinary(20) DEFAULT NULL,
  `categoryid` int(5) DEFAULT NULL,
  `fualtype` varchar(10) DEFAULT NULL,
  `stroke` int(3) DEFAULT NULL,
  `cylinders` int(3) DEFAULT NULL,
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
  `inspecuser` int(5) DEFAULT NULL,
  `inspecdatetime` varchar(25) DEFAULT NULL,
  `updatedby` int(5) DEFAULT NULL,
  `dateupdated` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `vehicle_reg_inspec` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
