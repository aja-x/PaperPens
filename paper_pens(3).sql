-- MySQL dump 10.13  Distrib 5.7.24, for Linux (x86_64)
--
-- Host: localhost    Database: paper-pens2
-- ------------------------------------------------------
-- Server version	5.7.24-0ubuntu0.18.04.1

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
-- Table structure for table `m_departemen`
--

DROP TABLE IF EXISTS `m_departemen`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `m_departemen` (
  `id_departemen` int(11) NOT NULL AUTO_INCREMENT,
  `nama_departemen` varchar(50) NOT NULL,
  PRIMARY KEY (`id_departemen`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_departemen`
--

LOCK TABLES `m_departemen` WRITE;
/*!40000 ALTER TABLE `m_departemen` DISABLE KEYS */;
INSERT INTO `m_departemen` VALUES (1,'Departe'),(2,'Departemen2'),(3,'Departemen 3'),(4,'Departemen 4'),(5,'Departemen 5');
/*!40000 ALTER TABLE `m_departemen` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `m_level`
--

DROP TABLE IF EXISTS `m_level`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `m_level` (
  `id_level` int(11) NOT NULL AUTO_INCREMENT,
  `nama_level` varchar(50) NOT NULL,
  PRIMARY KEY (`id_level`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_level`
--

LOCK TABLES `m_level` WRITE;
/*!40000 ALTER TABLE `m_level` DISABLE KEYS */;
INSERT INTO `m_level` VALUES (1,'Admin'),(2,'Editor'),(3,'User');
/*!40000 ALTER TABLE `m_level` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_keyword`
--

DROP TABLE IF EXISTS `tb_keyword`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_keyword` (
  `id_keyword` int(11) NOT NULL AUTO_INCREMENT,
  `nama_keyword` varchar(50) NOT NULL,
  PRIMARY KEY (`id_keyword`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_keyword`
--

LOCK TABLES `tb_keyword` WRITE;
/*!40000 ALTER TABLE `tb_keyword` DISABLE KEYS */;
INSERT INTO `tb_keyword` VALUES (1,'Keyword 1'),(2,'Keyword 2'),(3,'Keyword 3'),(4,'Keyword 4'),(5,'Keyword 5');
/*!40000 ALTER TABLE `tb_keyword` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_kontributor`
--

DROP TABLE IF EXISTS `tb_kontributor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_kontributor` (
  `id_user` int(11) NOT NULL,
  `id_paper` int(11) NOT NULL,
  PRIMARY KEY (`id_user`,`id_paper`),
  KEY `Id_user` (`id_user`),
  KEY `Id_paper` (`id_paper`),
  CONSTRAINT `tb_kontributor_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_users` (`Id_user`),
  CONSTRAINT `tb_kontributor_ibfk_2` FOREIGN KEY (`id_paper`) REFERENCES `tb_paper` (`id_paper`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_kontributor`
--

LOCK TABLES `tb_kontributor` WRITE;
/*!40000 ALTER TABLE `tb_kontributor` DISABLE KEYS */;
INSERT INTO `tb_kontributor` VALUES (1,1),(2,1),(3,5),(4,2),(5,4);
/*!40000 ALTER TABLE `tb_kontributor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_log_user`
--

DROP TABLE IF EXISTS `tb_log_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_log_user` (
  `id_log` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_paper` int(11) NOT NULL,
  `keterangan_log` text NOT NULL,
  PRIMARY KEY (`id_log`),
  KEY `Id_user` (`id_user`),
  KEY `Id_paper` (`id_paper`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_log_user`
--

LOCK TABLES `tb_log_user` WRITE;
/*!40000 ALTER TABLE `tb_log_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_log_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_paper`
--

DROP TABLE IF EXISTS `tb_paper`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_paper` (
  `id_paper` int(11) NOT NULL AUTO_INCREMENT,
  `judul_paper` varchar(512) NOT NULL,
  `issn_paper` varchar(100) NOT NULL,
  `doi_paper` varchar(100) NOT NULL,
  `abstraksi_paper` text NOT NULL,
  `tgl_publikasi_paper` date NOT NULL,
  `status_paper` text NOT NULL,
  `path_file_paper` text NOT NULL,
  `tipe_file_paper` text NOT NULL,
  `size_paper` varchar(50) NOT NULL,
  `nama_file_paper` text NOT NULL,
  `tanggal_upload_paper` date NOT NULL,
  `hit_start_paper` int(11) NOT NULL,
  `keterangan_paper` text NOT NULL,
  PRIMARY KEY (`id_paper`),
  UNIQUE KEY `judul_paper` (`judul_paper`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_paper`
--

LOCK TABLES `tb_paper` WRITE;
/*!40000 ALTER TABLE `tb_paper` DISABLE KEYS */;
INSERT INTO `tb_paper` VALUES (1,'Lorem Ipsumm','0123-2123','12.1016/j.jmgm.2017.07.028','ayam sakti tumbuh seribu','2012-12-15','Approved','/path1','pdf','267KB','paper1','2016-10-15',2,'ayam ayam'),(2,'Lorem Ipsum Sit','0222-2324','10.1233/j.jmgm.2017.05.138','hubla','2012-10-04','Approved','/path1','pdf','234KB','paper2','2013-10-01',2,'hoopla'),(3,'Lorem Ipsum Sit Amet','0426-5621','45.4523/j.jmgm.2016.04.328','test','2013-09-05','Approved','/path1','docx','300KB','paper3','2013-06-01',2,'hello'),(4,'Lorem Ipsum Dolor','1245-4256','09.5693/j.jmgm.2016.03.132','ululul','2013-01-05','Approved','/path1','pdf','250KB','paper4','2013-10-01',2,'bebek'),(5,'Lorem','4564-6096','57.2463/j.jmgm.2016.12.452','hello world','2014-09-01','Approved','/path1','docx','270KB','paper5','2014-10-01',2,'lorem ipsum');
/*!40000 ALTER TABLE `tb_paper` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_paperkeyword`
--

DROP TABLE IF EXISTS `tb_paperkeyword`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_paperkeyword` (
  `id_paper` int(11) NOT NULL,
  `id_keyword` int(11) NOT NULL,
  PRIMARY KEY (`id_paper`,`id_keyword`),
  KEY `tb_paperkeyword_ibfk_2` (`id_keyword`),
  CONSTRAINT `tb_paperkeyword_ibfk_1` FOREIGN KEY (`id_paper`) REFERENCES `tb_paper` (`id_paper`) ON UPDATE CASCADE,
  CONSTRAINT `tb_paperkeyword_ibfk_2` FOREIGN KEY (`id_keyword`) REFERENCES `tb_keyword` (`id_keyword`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_paperkeyword`
--

LOCK TABLES `tb_paperkeyword` WRITE;
/*!40000 ALTER TABLE `tb_paperkeyword` DISABLE KEYS */;
INSERT INTO `tb_paperkeyword` VALUES (1,2),(1,3),(3,3),(4,4),(5,5);
/*!40000 ALTER TABLE `tb_paperkeyword` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_papertopic`
--

DROP TABLE IF EXISTS `tb_papertopic`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_papertopic` (
  `id_paper` int(11) NOT NULL,
  `id_topic` int(11) NOT NULL,
  PRIMARY KEY (`id_paper`,`id_topic`),
  KEY `Id_paper` (`id_paper`),
  KEY `Id_topic` (`id_topic`),
  CONSTRAINT `tb_papertopic_ibfk_1` FOREIGN KEY (`id_paper`) REFERENCES `tb_paper` (`id_paper`),
  CONSTRAINT `tb_papertopic_ibfk_2` FOREIGN KEY (`id_topic`) REFERENCES `tb_topic` (`Id_topic`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_papertopic`
--

LOCK TABLES `tb_papertopic` WRITE;
/*!40000 ALTER TABLE `tb_papertopic` DISABLE KEYS */;
INSERT INTO `tb_papertopic` VALUES (1,1),(1,2),(2,3),(4,4),(5,5);
/*!40000 ALTER TABLE `tb_papertopic` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_topic`
--

DROP TABLE IF EXISTS `tb_topic`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_topic` (
  `id_topic` int(11) NOT NULL AUTO_INCREMENT,
  `nama_topic` varchar(100) NOT NULL,
  PRIMARY KEY (`id_topic`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_topic`
--

LOCK TABLES `tb_topic` WRITE;
/*!40000 ALTER TABLE `tb_topic` DISABLE KEYS */;
INSERT INTO `tb_topic` VALUES (1,'Topic 1'),(2,'Topic 2'),(3,'Topic 3'),(4,'Topic 4'),(5,'Topic 5');
/*!40000 ALTER TABLE `tb_topic` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_users`
--

DROP TABLE IF EXISTS `tb_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `password_user` varchar(128) NOT NULL,
  `nama_depan_user` varchar(50) NOT NULL,
  `nama_belakang_user` varchar(50) DEFAULT NULL,
  `degre_user` varchar(30) DEFAULT NULL,
  `homepage_url_user` varchar(250) DEFAULT NULL,
  `no_telp_user` varchar(30) DEFAULT NULL,
  `email_user` varchar(50) NOT NULL,
  `id_level` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  PRIMARY KEY (`id_user`),
  KEY `Id_level` (`id_level`),
  KEY `Id_Departemen` (`id_departemen`),
  CONSTRAINT `tb_users_ibfk_1` FOREIGN KEY (`id_level`) REFERENCES `m_level` (`id_level`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `tb_users_ibfk_2` FOREIGN KEY (`id_departemen`) REFERENCES `m_departemen` (`id_departemen`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_users`
--

LOCK TABLES `tb_users` WRITE;
/*!40000 ALTER TABLE `tb_users` DISABLE KEYS */;
INSERT INTO `tb_users` VALUES (1,'pass1','Budi','Utomo','SKom','www.homepage.com','08112145678','email1@gmail',1,1),(2,'pass5','Budi','Rifa','SKom','www.homepage.com','08552545678','email5@gmail',2,5),(3,'pass4','Ani','Rohija','SKom','www.homepage.com','08442445678','email4@gmail',3,4),(4,'pass3','Anang','Raharjo','SKom','www.homepage.com','08112145678','email1@gmail',1,1),(5,'pass2','Maria','Utari','SKom','www.homepage.com','08222145678','email2@gmail',2,2),(6,'$2y$10$yK/ExeJTqm9rHTgV5H8y5eul7DjpoqrmXUazhhVlXSpS5sxpPNS2G','Dewi','Tri','Skom','www.homepage6.com','081280809090','email6@gmail.com',3,2),(7,'pass7','Agus','Slamet','Mkom','www.homepage7.com','081281258796','email7@gmail.com',3,3);
/*!40000 ALTER TABLE `tb_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `v_paperkeyword`
--

DROP TABLE IF EXISTS `v_paperkeyword`;
/*!50001 DROP VIEW IF EXISTS `v_paperkeyword`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `v_paperkeyword` AS SELECT 
 1 AS `id_keyword`,
 1 AS `nama_keyword`,
 1 AS `id_paper`,
 1 AS `judul_paper`,
 1 AS `issn_paper`,
 1 AS `doi_paper`,
 1 AS `abstraksi_paper`,
 1 AS `tgl_publikasi_paper`,
 1 AS `status_paper`,
 1 AS `path_file_paper`,
 1 AS `tipe_file_paper`,
 1 AS `size_paper`,
 1 AS `nama_file_paper`,
 1 AS `tanggal_upload_paper`,
 1 AS `hit_start_paper`,
 1 AS `keterangan_paper`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `v_paperkontributor`
--

DROP TABLE IF EXISTS `v_paperkontributor`;
/*!50001 DROP VIEW IF EXISTS `v_paperkontributor`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `v_paperkontributor` AS SELECT 
 1 AS `id_user`,
 1 AS `id_paper`,
 1 AS `nama_depan_user`,
 1 AS `nama_belakang_user`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `v_papertopic`
--

DROP TABLE IF EXISTS `v_papertopic`;
/*!50001 DROP VIEW IF EXISTS `v_papertopic`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `v_papertopic` AS SELECT 
 1 AS `id_topic`,
 1 AS `nama_topic`,
 1 AS `id_paper`,
 1 AS `judul_paper`,
 1 AS `issn_paper`,
 1 AS `doi_paper`,
 1 AS `abstraksi_paper`,
 1 AS `tgl_publikasi_paper`,
 1 AS `status_paper`,
 1 AS `path_file_paper`,
 1 AS `tipe_file_paper`,
 1 AS `size_paper`,
 1 AS `nama_file_paper`,
 1 AS `tanggal_upload_paper`,
 1 AS `hit_start_paper`,
 1 AS `keterangan_paper`*/;
SET character_set_client = @saved_cs_client;

--
-- Final view structure for view `v_paperkeyword`
--

/*!50001 DROP VIEW IF EXISTS `v_paperkeyword`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_unicode_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`ajasoft`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `v_paperkeyword` AS select `tb_keyword`.`id_keyword` AS `id_keyword`,`tb_keyword`.`nama_keyword` AS `nama_keyword`,`tb_paper`.`id_paper` AS `id_paper`,`tb_paper`.`judul_paper` AS `judul_paper`,`tb_paper`.`issn_paper` AS `issn_paper`,`tb_paper`.`doi_paper` AS `doi_paper`,`tb_paper`.`abstraksi_paper` AS `abstraksi_paper`,`tb_paper`.`tgl_publikasi_paper` AS `tgl_publikasi_paper`,`tb_paper`.`status_paper` AS `status_paper`,`tb_paper`.`path_file_paper` AS `path_file_paper`,`tb_paper`.`tipe_file_paper` AS `tipe_file_paper`,`tb_paper`.`size_paper` AS `size_paper`,`tb_paper`.`nama_file_paper` AS `nama_file_paper`,`tb_paper`.`tanggal_upload_paper` AS `tanggal_upload_paper`,`tb_paper`.`hit_start_paper` AS `hit_start_paper`,`tb_paper`.`keterangan_paper` AS `keterangan_paper` from ((`tb_paperkeyword` join `tb_keyword` on((`tb_paperkeyword`.`id_keyword` = `tb_keyword`.`id_keyword`))) join `tb_paper` on((`tb_paperkeyword`.`id_paper` = `tb_paper`.`id_paper`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `v_paperkontributor`
--

/*!50001 DROP VIEW IF EXISTS `v_paperkontributor`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_unicode_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`ajasoft`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `v_paperkontributor` AS select `tb_kontributor`.`id_user` AS `id_user`,`tb_kontributor`.`id_paper` AS `id_paper`,`tb_users`.`nama_depan_user` AS `nama_depan_user`,`tb_users`.`nama_belakang_user` AS `nama_belakang_user` from (`tb_kontributor` join `tb_users` on((`tb_kontributor`.`id_user` = `tb_users`.`id_user`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `v_papertopic`
--

/*!50001 DROP VIEW IF EXISTS `v_papertopic`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_unicode_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`ajasoft`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `v_papertopic` AS select `tb_papertopic`.`id_topic` AS `id_topic`,`tb_topic`.`nama_topic` AS `nama_topic`,`tb_paper`.`id_paper` AS `id_paper`,`tb_paper`.`judul_paper` AS `judul_paper`,`tb_paper`.`issn_paper` AS `issn_paper`,`tb_paper`.`doi_paper` AS `doi_paper`,`tb_paper`.`abstraksi_paper` AS `abstraksi_paper`,`tb_paper`.`tgl_publikasi_paper` AS `tgl_publikasi_paper`,`tb_paper`.`status_paper` AS `status_paper`,`tb_paper`.`path_file_paper` AS `path_file_paper`,`tb_paper`.`tipe_file_paper` AS `tipe_file_paper`,`tb_paper`.`size_paper` AS `size_paper`,`tb_paper`.`nama_file_paper` AS `nama_file_paper`,`tb_paper`.`tanggal_upload_paper` AS `tanggal_upload_paper`,`tb_paper`.`hit_start_paper` AS `hit_start_paper`,`tb_paper`.`keterangan_paper` AS `keterangan_paper` from ((`tb_papertopic` join `tb_topic` on((`tb_papertopic`.`id_topic` = `tb_topic`.`id_topic`))) join `tb_paper` on((`tb_papertopic`.`id_paper` = `tb_paper`.`id_paper`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-12-06 16:09:41
