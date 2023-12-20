-- MySQL dump 10.15  Distrib 10.0.21-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: moodle_db
-- ------------------------------------------------------
-- Server version	10.0.21-MariaDB-log

--
-- Table structure for table `offline_message`
--

CREATE TABLE `offline_message` (
  `messageid` bigint(11)  NOT NULL AUTO_INCREMENT,
  `to_uuid`   varchar(36) NOT NULL DEFAULT '',
  `from_uuid` varchar(36) NOT NULL DEFAULT '',
  `message`   longtext    NOT NULL,
  PRIMARY KEY (`messageid`),
  KEY `to_uuid` (`to_uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dump completed on 2016-07-17 17:08:27
