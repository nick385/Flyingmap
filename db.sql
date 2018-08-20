/*
SQLyog - Free MySQL GUI v5.19
Host - 5.5.20-log : Database - social
*********************************************************************
Server version : 5.5.20-log
*/


SET NAMES utf8;

SET SQL_MODE='';

create database if not exists `social`;

USE `social`;

SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO';

/*Table structure for table `soc_city` */

DROP TABLE IF EXISTS `soc_city`;

CREATE TABLE `soc_city` (
  `city_id` int(5) NOT NULL AUTO_INCREMENT,
  `city_name` varchar(250) NOT NULL,
  `city_state` varchar(500) NOT NULL,
  PRIMARY KEY (`city_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

/*Data for the table `soc_city` */

insert into `soc_city` (`city_id`,`city_name`,`city_state`) values (1,'Rourkela','Odisa');
insert into `soc_city` (`city_id`,`city_name`,`city_state`) values (2,'Bhubneshwar','Odisa');
insert into `soc_city` (`city_id`,`city_name`,`city_state`) values (3,'Puri','Odisa');
insert into `soc_city` (`city_id`,`city_name`,`city_state`) values (4,'Kanpur','Uttar Pradesh');
insert into `soc_city` (`city_id`,`city_name`,`city_state`) values (5,'Lucknow','Uttar Pradesh');
insert into `soc_city` (`city_id`,`city_name`,`city_state`) values (6,'Agra','Uttar Pradesh');
insert into `soc_city` (`city_id`,`city_name`,`city_state`) values (7,'Bareilly','Uttar Pradesh');
insert into `soc_city` (`city_id`,`city_name`,`city_state`) values (8,'Allahabad','Uttar Pradesh');
insert into `soc_city` (`city_id`,`city_name`,`city_state`) values (9,'Varanasi','Uttar Pradesh');
insert into `soc_city` (`city_id`,`city_name`,`city_state`) values (10,'Farukkabad','Uttar Pradesh');
insert into `soc_city` (`city_id`,`city_name`,`city_state`) values (11,'Noida','Uttar Pradesh');
insert into `soc_city` (`city_id`,`city_name`,`city_state`) values (12,'Ghaziabad','Uttar Pradesh');
insert into `soc_city` (`city_id`,`city_name`,`city_state`) values (13,'Unnao','Uttar Pradesh');
insert into `soc_city` (`city_id`,`city_name`,`city_state`) values (14,'Mumbai','Maharashtra');
insert into `soc_city` (`city_id`,`city_name`,`city_state`) values (15,'Nagpur','Maharashtra');

/*Table structure for table `soc_like` */

DROP TABLE IF EXISTS `soc_like`;

CREATE TABLE `soc_like` (
  `like_id` int(15) NOT NULL AUTO_INCREMENT,
  `like_postid` int(10) DEFAULT NULL,
  `like_uid` int(5) DEFAULT NULL,
  `like_addon` datetime DEFAULT NULL,
  PRIMARY KEY (`like_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

/*Data for the table `soc_like` */

insert into `soc_like` (`like_id`,`like_postid`,`like_uid`,`like_addon`) values (1,6,4,'2013-07-09 15:33:54');
insert into `soc_like` (`like_id`,`like_postid`,`like_uid`,`like_addon`) values (2,4,4,'2013-07-09 15:37:44');
insert into `soc_like` (`like_id`,`like_postid`,`like_uid`,`like_addon`) values (3,3,4,'2013-07-09 15:38:16');
insert into `soc_like` (`like_id`,`like_postid`,`like_uid`,`like_addon`) values (4,5,4,'2013-07-09 15:38:25');
insert into `soc_like` (`like_id`,`like_postid`,`like_uid`,`like_addon`) values (5,2,4,'2013-07-09 15:38:27');
insert into `soc_like` (`like_id`,`like_postid`,`like_uid`,`like_addon`) values (13,5,3,'2013-07-09 15:50:48');

/*Table structure for table `soc_user` */

DROP TABLE IF EXISTS `soc_user`;

CREATE TABLE `soc_user` (
  `user_id` int(6) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(250) DEFAULT NULL,
  `user_gender` tinyint(1) DEFAULT NULL,
  `user_city` int(5) DEFAULT NULL,
  `user_email` varchar(250) DEFAULT NULL,
  `user_pwd` varchar(25) DEFAULT NULL,
  `user_dob` date DEFAULT NULL,
  `user_addon` datetime DEFAULT NULL,
  `user_actcode` varchar(15) DEFAULT NULL,
  `user_status` tinyint(1) DEFAULT NULL,
  `user_about` varchar(1000) DEFAULT NULL,
  `user_hobbies` varchar(1000) DEFAULT NULL,
  `user_music` varchar(1000) DEFAULT NULL,
  `user_sports` varchar(1000) DEFAULT NULL,
  `user_political` varchar(1000) DEFAULT NULL,
  `user_img` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `soc_user` */

insert into `soc_user` (`user_id`,`user_name`,`user_gender`,`user_city`,`user_email`,`user_pwd`,`user_dob`,`user_addon`,`user_actcode`,`user_status`,`user_about`,`user_hobbies`,`user_music`,`user_sports`,`user_political`,`user_img`) values (1,'Keshav Gupta',1,15,'keshavonline2000@gmail.com','123456','1987-09-12','2013-06-29 15:28:52',NULL,1,'I am working as Technical Head in Click Informatics','Playing & Watching Cricket','Any Kind','Cricket','No Intrest',NULL);
insert into `soc_user` (`user_id`,`user_name`,`user_gender`,`user_city`,`user_email`,`user_pwd`,`user_dob`,`user_addon`,`user_actcode`,`user_status`,`user_about`,`user_hobbies`,`user_music`,`user_sports`,`user_political`,`user_img`) values (3,'Rahul SIngh',1,15,'rahul@gmail.com','123456','1987-09-12','2013-06-29 15:49:43','Rah7773063429',1,'I am science graduate working as sm in Parle.','Playing & Watching Cricket','Soft Music','Cricket basketball','No Intrest','img001.jpg');
insert into `soc_user` (`user_id`,`user_name`,`user_gender`,`user_city`,`user_email`,`user_pwd`,`user_dob`,`user_addon`,`user_actcode`,`user_status`,`user_about`,`user_hobbies`,`user_music`,`user_sports`,`user_political`,`user_img`) values (4,'amitesh',1,4,'amitesh0201@gmail.com','123456','1992-02-01','2013-06-29 16:08:06','ami7334154711',1,NULL,NULL,NULL,NULL,NULL,'8122index.jpg');
insert into `soc_user` (`user_id`,`user_name`,`user_gender`,`user_city`,`user_email`,`user_pwd`,`user_dob`,`user_addon`,`user_actcode`,`user_status`,`user_about`,`user_hobbies`,`user_music`,`user_sports`,`user_political`,`user_img`) values (5,'Priya Singh',0,12,'priya@gmail.com','123456','1990-01-01','2013-07-06 15:40:34','Pri1271375316',1,NULL,NULL,NULL,NULL,NULL,NULL);

/*Table structure for table `soc_wall` */

DROP TABLE IF EXISTS `soc_wall`;

CREATE TABLE `soc_wall` (
  `wall_id` int(10) NOT NULL AUTO_INCREMENT,
  `wall_content` varchar(1000) DEFAULT NULL,
  `wall_from` int(5) DEFAULT NULL,
  `wall_to` int(5) DEFAULT NULL,
  `wall_addon` datetime DEFAULT NULL,
  PRIMARY KEY (`wall_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `soc_wall` */

insert into `soc_wall` (`wall_id`,`wall_content`,`wall_from`,`wall_to`,`wall_addon`) values (1,'Hi!',3,5,'2013-07-08 15:57:49');
insert into `soc_wall` (`wall_id`,`wall_content`,`wall_from`,`wall_to`,`wall_addon`) values (2,'Hello!',3,3,'2013-07-08 15:58:24');
insert into `soc_wall` (`wall_id`,`wall_content`,`wall_from`,`wall_to`,`wall_addon`) values (3,'Hi!',3,4,'2013-07-08 16:16:16');
insert into `soc_wall` (`wall_id`,`wall_content`,`wall_from`,`wall_to`,`wall_addon`) values (4,'hi!',1,5,'2013-07-08 16:16:39');
insert into `soc_wall` (`wall_id`,`wall_content`,`wall_from`,`wall_to`,`wall_addon`) values (5,'Hi rahul! How R u?',1,3,'2013-07-08 16:16:59');
insert into `soc_wall` (`wall_id`,`wall_content`,`wall_from`,`wall_to`,`wall_addon`) values (6,'Hi Rahul!',5,5,'2013-07-08 16:17:23');
insert into `soc_wall` (`wall_id`,`wall_content`,`wall_from`,`wall_to`,`wall_addon`) values (7,'<img src=\"D:/yuvraj.jpg\" width=\"200\">',3,4,'2013-07-09 16:17:31');
insert into `soc_wall` (`wall_id`,`wall_content`,`wall_from`,`wall_to`,`wall_addon`) values (8,'<img src=\"D:/yuvraj.jpg\" width=\"200\">',3,4,'2013-07-09 16:18:29');
insert into `soc_wall` (`wall_id`,`wall_content`,`wall_from`,`wall_to`,`wall_addon`) values (9,'<h1>Happy Birthday</h1>',3,4,'2013-07-09 16:19:13');
insert into `soc_wall` (`wall_id`,`wall_content`,`wall_from`,`wall_to`,`wall_addon`) values (10,'<H2><BLINK>HAPPY BIRTHDAY</BLINK></H2>',3,4,'2013-07-09 16:19:45');

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;

 
CREATE TABLE `images_tbl` (
   images_id INT NOT NULL AUTO_INCREMENT,
   images_path VARCHAR(200) NOT NULL,
   submission_date DATE,
   PRIMARY KEY (images_id)
);

