-- MySQL dump 10.13  Distrib 5.1.66, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: ashish1
-- ------------------------------------------------------
-- Server version	5.1.66-0+squeeze1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `ci_sessions`
--

DROP TABLE IF EXISTS `ci_sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ci_sessions`
--

LOCK TABLES `ci_sessions` WRITE;
/*!40000 ALTER TABLE `ci_sessions` DISABLE KEYS */;
INSERT INTO `ci_sessions` VALUES ('c1cbe2796546c4a372e303da4b31968d','64.183.55.122','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/537.22 (KHTML, like Gecko) Chrome/25.0.1364.172 Safari/537.22',1363308286,'a:20:{s:13:\"cart_contents\";a:6:{s:32:\"ec8956637a99787bd197eacd77acce5e\";a:6:{s:5:\"rowid\";s:32:\"ec8956637a99787bd197eacd77acce5e\";s:2:\"id\";i:102;s:3:\"qty\";s:1:\"1\";s:5:\"price\";s:2:\"30\";s:4:\"name\";s:11:\"Double Wrap\";s:8:\"subtotal\";i:30;}s:32:\"c9e1074f5b3f9fc8ea15d152add07294\";a:6:{s:5:\"rowid\";s:32:\"c9e1074f5b3f9fc8ea15d152add07294\";s:2:\"id\";i:104;s:3:\"qty\";s:1:\"1\";s:5:\"price\";s:2:\"70\";s:4:\"name\";s:7:\"Reserve\";s:8:\"subtotal\";i:70;}s:32:\"6974ce5ac660610b44d9b9fed0ff9548\";a:6:{s:5:\"rowid\";s:32:\"6974ce5ac660610b44d9b9fed0ff9548\";s:2:\"id\";i:103;s:3:\"qty\";s:1:\"5\";s:5:\"price\";s:2:\"50\";s:4:\"name\";s:6:\"Maduro\";s:8:\"subtotal\";i:250;}s:32:\"38b3eff8baf56627478ec76a704e9b52\";a:6:{s:5:\"rowid\";s:32:\"38b3eff8baf56627478ec76a704e9b52\";s:2:\"id\";i:101;s:3:\"qty\";s:1:\"1\";s:5:\"price\";s:2:\"15\";s:4:\"name\";s:7:\"Classic\";s:8:\"subtotal\";i:15;}s:11:\"total_items\";i:8;s:10:\"cart_total\";i:365;}s:9:\"num_items\";s:1:\"8\";s:13:\"shipping_name\";s:10:\"Ashish Lal\";s:14:\"shipping_phone\";s:10:\"9492579871\";s:5:\"email\";s:25:\"ridininmybenz44@gmail.com\";s:21:\"shipping_company_name\";s:12:\"Lal Networks\";s:23:\"shipping_street_address\";s:7:\"24 gong\";s:18:\"shipping_add_extra\";s:0:\"\";s:12:\"shipping_zip\";s:5:\"90024\";s:8:\"subtotal\";s:3:\"365\";s:9:\"taxamount\";s:5:\"32.85\";s:5:\"total\";s:6:\"397.85\";s:15:\"total_num_items\";s:1:\"8\";s:13:\"currency_code\";s:3:\"USD\";s:12:\"billing_name\";s:10:\"Ashish Lal\";s:13:\"billing_phone\";s:10:\"9492579871\";s:20:\"billing_company_name\";s:12:\"Lal Networks\";s:22:\"billing_street_address\";s:22:\"2441 S. El Camino Real\";s:17:\"billing_add_extra\";s:25:\"ridininmybenz44@gmail.com\";s:11:\"billing_zip\";s:5:\"92672\";}'),('8ac1b54c0b9589dc82cf9375ea84b201','64.183.55.122','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/537.22 (KHTML, like Gecko) Chrome/25.0.1364.172 Safari/537.22',1363310345,'a:21:{s:9:\"user_data\";s:0:\"\";s:9:\"num_items\";s:1:\"1\";s:13:\"shipping_name\";s:10:\"Ashish Lal\";s:14:\"shipping_phone\";s:10:\"9492579871\";s:5:\"email\";s:25:\"ridininmybenz44@gmail.com\";s:21:\"shipping_company_name\";s:12:\"Lal Networks\";s:23:\"shipping_street_address\";s:12:\"603 Figueroa\";s:18:\"shipping_add_extra\";s:25:\"ridininmybenz44@gmail.com\";s:12:\"shipping_zip\";s:5:\"92672\";s:8:\"subtotal\";s:2:\"50\";s:9:\"taxamount\";s:3:\"4.5\";s:5:\"total\";s:4:\"54.5\";s:15:\"total_num_items\";s:1:\"1\";s:13:\"currency_code\";s:3:\"USD\";s:12:\"billing_name\";s:10:\"Alpana Lal\";s:13:\"billing_phone\";s:10:\"9499738754\";s:20:\"billing_company_name\";s:0:\"\";s:22:\"billing_street_address\";s:12:\"603 Figueroa\";s:17:\"billing_add_extra\";s:0:\"\";s:11:\"billing_zip\";s:5:\"92672\";s:13:\"cart_contents\";a:3:{s:32:\"6974ce5ac660610b44d9b9fed0ff9548\";a:6:{s:5:\"rowid\";s:32:\"6974ce5ac660610b44d9b9fed0ff9548\";s:2:\"id\";i:103;s:3:\"qty\";s:1:\"1\";s:5:\"price\";s:2:\"50\";s:4:\"name\";s:6:\"Maduro\";s:8:\"subtotal\";i:50;}s:11:\"total_items\";i:1;s:10:\"cart_total\";i:50;}}');
/*!40000 ALTER TABLE `ci_sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `order_id` int(25) NOT NULL AUTO_INCREMENT,
  `order_status` int(11) NOT NULL DEFAULT '1',
  `order_date` datetime NOT NULL,
  `shipping_tracking_id` varchar(50) NOT NULL,
  `firstdata_transaction_id` varchar(800) NOT NULL DEFAULT '',
  `subtotal` double(10,2) NOT NULL DEFAULT '0.00',
  `taxamount` double(10,2) NOT NULL DEFAULT '0.00',
  `total` double(10,2) NOT NULL DEFAULT '0.00',
  `email` varchar(55) NOT NULL DEFAULT '',
  `total_num_items` int(11) NOT NULL,
  `num_classic` int(11) DEFAULT NULL,
  `num_double_wrap` int(11) DEFAULT NULL,
  `num_maduro` int(11) DEFAULT NULL,
  `num_reserve` int(11) DEFAULT NULL,
  `shipping_name` varchar(100) NOT NULL DEFAULT '',
  `shipping_phone` varchar(25) DEFAULT '',
  `shipping_company_name` varchar(100) DEFAULT NULL,
  `shipping_street_address` varchar(100) NOT NULL DEFAULT '',
  `shipping_add_extra` varchar(100) DEFAULT NULL,
  `shipping_zip` varchar(11) NOT NULL DEFAULT '',
  `billing_name` varchar(100) NOT NULL DEFAULT '',
  `billing_phone` varchar(25) DEFAULT NULL,
  `billing_company_name` varchar(100) DEFAULT NULL,
  `billing_street_address` varchar(100) NOT NULL DEFAULT '',
  `billing_add_extra` varchar(100) DEFAULT NULL,
  `billing_zip` varchar(11) NOT NULL DEFAULT '',
  `last_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10660 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (10600,0,'2013-03-13 00:00:00','','DO NOT DELETE - SAMPLE FOR ID',0.00,0.00,0.00,'',0,NULL,NULL,NULL,NULL,'Test - DO NOT DELETE','',NULL,'',NULL,'','Test - DO NOT DELETE',NULL,NULL,'',NULL,'','2013-03-13 01:08:47'),(10624,1,'2013-03-14 09:03:00','0000','=========== TRANSACTION RECORD ==========\nBEVERLY HILLS CHAIRS USD Demo\n\n, AL \nUnited States\n\n\nTYPE: Purchase\n\nACCT: Visa  $ 32.70 USD\n\nCARD NUMBER : ############0019\nDATE/TIME   : 14 Mar 13 18:33:07\nREFERENCE # : 002 0661018 M\nAUTHOR. #   : ET0308\nTRANS. REF. : \n\n    Approved - Thank You 100\n\n\nPlease retain this copy for your records.\n\nCardholder will pay above amount to card\nissuer pursuant to cardholder agreement.\n=========================================',30.00,2.70,32.70,'lal.alpana@gmail.com',1,0,1,0,0,'Alpana P Lal','9499738754','','603 Figueroa','','92672','Ashish Lal','','','2441 S. El Camino Real','','92672','2013-03-14 21:03:46'),(10659,2,'2013-03-15 01:19:00','DHWIUHDAWLIUDH','=========== TRANSACTION RECORD ==========\nBEVERLY HILLS CHAIRS USD Demo\n\n, AL \nUnited States\n\n\nTYPE: Purchase\n\nACCT: Visa  $ 54.50 USD\n\nCARD NUMBER : ############0019\nDATE/TIME   : 14 Mar 13 22:48:38\nREFERENCE # : 002 0739606 M\nAUTHOR. #   : ET1839\nTRANS. REF. : \n\n    Approved - Thank You 100\n\n\nPlease retain this copy for your records.\n\nCardholder will pay above amount to card\nissuer pursuant to cardholder agreement.\n=========================================',50.00,4.50,54.50,'ridininmybenz44@gmail.com',1,0,0,1,0,'Ashish Lal','9492579871','Lal Networks','603 Figueroa','ridininmybenz44@gmail.com','92672','Alpana Lal','9499738754','','603 Figueroa','','92672','2013-03-15 01:19:40');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-03-15  1:27:28
