-- MySQL dump 10.16  Distrib 10.1.40-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: forge
-- ------------------------------------------------------
-- Server version	10.1.40-MariaDB

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
-- Table structure for table `exam_log`
--

DROP TABLE IF EXISTS `exam_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `exam_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自動番号付与',
  `crnt_date` datetime NOT NULL COMMENT 'YYYY-MM-DD HH:MM:SS形データ',
  `todohuken` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '都道府県データ格納',
  `fname` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '氏名の一番目データ格納',
  `lname` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '氏名の二番目データ格納',
  `viewcnt` int(11) NOT NULL COMMENT '参加人数データ格納',
  `ip_addr` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'ユーザーIP Address格納',
  `referer` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'ユーザーReferer格納',
  `usr_agent` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'ユーザーAgent格納',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `exam_log`
--

LOCK TABLES `exam_log` WRITE;
/*!40000 ALTER TABLE `exam_log` DISABLE KEYS */;
INSERT INTO `exam_log` VALUES (1,'2019-05-19 18:30:05','北海道','鈴木','宗男',3,'unknown','http://localhost/m3dc_exam/public/','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.157 Safari/537.36'),(2,'2019-05-19 18:32:49','千葉県','松本','竜馬',7,'unknown','http://localhost/m3dc_exam/public/','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.140 Safari/537.36 Edge/18.17763');
/*!40000 ALTER TABLE `exam_log` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-05-19 18:40:12
