/*
SQLyog - Free MySQL GUI v5.02
Host - 5.5.5-10.1.31-MariaDB : Database - nps
*********************************************************************
Server version : 5.5.5-10.1.31-MariaDB
*/


create database if not exists `nps`;

USE `nps`;

/*Table structure for table `blue` */

DROP TABLE IF EXISTS `blue`;

CREATE TABLE `blue` (
  `cat` varchar(20) DEFAULT NULL,
  `gender` varchar(7) DEFAULT NULL,
  `cid` varchar(120) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `votes` int(10) DEFAULT '0',
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `green` */

DROP TABLE IF EXISTS `green`;

CREATE TABLE `green` (
  `cat` varchar(20) DEFAULT NULL,
  `gender` varchar(7) DEFAULT NULL,
  `cid` varchar(120) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `votes` int(10) DEFAULT '0',
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `red` */

DROP TABLE IF EXISTS `red`;

CREATE TABLE `red` (
  `cat` varchar(20) DEFAULT NULL,
  `gender` varchar(7) DEFAULT NULL,
  `cid` varchar(120) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `votes` int(10) DEFAULT '0',
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `secretary` */

DROP TABLE IF EXISTS `secretary`;

CREATE TABLE `secretary` (
  `cat` varchar(150) DEFAULT NULL,
  `gender` varchar(7) DEFAULT NULL,
  `cid` varchar(150) DEFAULT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `votes` int(10) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `yellow` */

DROP TABLE IF EXISTS `yellow`;

CREATE TABLE `yellow` (
  `cat` varchar(20) DEFAULT NULL,
  `gender` varchar(7) DEFAULT NULL,
  `cid` varchar(120) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `votes` int(10) DEFAULT '0',
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
