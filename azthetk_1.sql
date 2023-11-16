-- MySQL dump 10.16  Distrib 10.2.27-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: azthetk_1
-- ------------------------------------------------------
-- Server version	10.2.27-MariaDB-cll-lve

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `TMQ_bank`
--

DROP TABLE IF EXISTS `TMQ_bank`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `TMQ_bank` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uid` text CHARACTER SET utf8 DEFAULT NULL,
  `bank` text CHARACTER SET utf8 DEFAULT NULL,
  `ctk` text CHARACTER SET utf8 DEFAULT NULL,
  `stk` text CHARACTER SET utf8 DEFAULT NULL,
  `chinhanh` text CHARACTER SET utf8 DEFAULT NULL,
  `bank_type` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

-- ------------------------------------------------------

--
-- Table structure for table `TMQ_biendoi`
--

DROP TABLE IF EXISTS `TMQ_biendoi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `TMQ_biendoi` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uid` text CHARACTER SET utf8 NOT NULL,
  `noidung` text CHARACTER SET utf32 NOT NULL,
  `truocgd` int(11) NOT NULL,
  `saugd` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

-- ------------------------------------------------------

--
-- Table structure for table `TMQ_chietkhau`
--

DROP TABLE IF EXISTS `TMQ_chietkhau`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `TMQ_chietkhau` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `loaithe` text DEFAULT NULL,
  `10000` int(11) DEFAULT NULL,
  `20000` int(11) DEFAULT NULL,
  `30000` int(11) DEFAULT NULL,
  `50000` int(11) DEFAULT NULL,
  `100000` int(11) DEFAULT NULL,
  `200000` int(11) DEFAULT NULL,
  `300000` int(11) DEFAULT NULL,
  `500000` int(11) DEFAULT NULL,
  `1000000` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

-- ------------------------------------------------------

--
-- Table structure for table `TMQ_chuyentien`
--

DROP TABLE IF EXISTS `TMQ_chuyentien`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `TMQ_chuyentien` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uid_chuyen` text NOT NULL,
  `uid_nhan` text NOT NULL,
  `sotien` int(11) NOT NULL,
  `time` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

-- ------------------------------------------------------

--
-- Table structure for table `TMQ_gachthe`
--

DROP TABLE IF EXISTS `TMQ_gachthe`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `TMQ_gachthe` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uid` text CHARACTER SET utf8 DEFAULT NULL,
  `serial` text CHARACTER SET utf8 DEFAULT NULL,
  `mathe` text CHARACTER SET utf8 DEFAULT NULL,
  `menhgia` int(11) DEFAULT NULL,
  `thucnhan` int(11) NOT NULL,
  `loaithe` text CHARACTER SET utf8 DEFAULT NULL,
  `trangthai` text CHARACTER SET utf8 NOT NULL,
  `time` text CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

-- ------------------------------------------------------

--
-- Table structure for table `TMQ_key`
--

DROP TABLE IF EXISTS `TMQ_key`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `TMQ_key` (
  `email` varchar(250) NOT NULL,
  `key` varchar(250) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

-- ------------------------------------------------------

--
-- Table structure for table `TMQ_khothe`
--

DROP TABLE IF EXISTS `TMQ_khothe`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `TMQ_khothe` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `uid` text CHARACTER SET utf8 NOT NULL,
  `serial` text CHARACTER SET utf8 NOT NULL,
  `mathe` text CHARACTER SET utf8 NOT NULL,
  `menhgia` text CHARACTER SET utf8 NOT NULL,
  `loaithe` text CHARACTER SET utf8 NOT NULL,
  `date` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

-- ------------------------------------------------------

--
-- Table structure for table `TMQ_loaithe`
--

DROP TABLE IF EXISTS `TMQ_loaithe`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `TMQ_loaithe` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `menhgia` int(11) NOT NULL,
  `loaithe` text CHARACTER SET utf8 NOT NULL,
  `soluong` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

-- ------------------------------------------------------

--
-- Table structure for table `TMQ_muathe`
--

DROP TABLE IF EXISTS `TMQ_muathe`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `TMQ_muathe` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `uid` text CHARACTER SET utf8 DEFAULT NULL,
  `serial` text CHARACTER SET utf8 DEFAULT NULL,
  `mathe` text CHARACTER SET utf8 DEFAULT NULL,
  `menhgia` int(11) DEFAULT NULL,
  `loaithe` text CHARACTER SET utf8 DEFAULT NULL,
  `trutien` int(11) NOT NULL,
  `date` text CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

-- ------------------------------------------------------

--
-- Table structure for table `TMQ_napthe`
--

DROP TABLE IF EXISTS `TMQ_napthe`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `TMQ_napthe` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uid` varchar(100) NOT NULL,
  `serial` varchar(100) NOT NULL,
  `mathe` varchar(100) NOT NULL,
  `loaithe` text CHARACTER SET utf8 NOT NULL,
  `menhgia` int(11) NOT NULL,
  `trangthai` text CHARACTER SET utf8 NOT NULL,
  `date` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

-- ------------------------------------------------------

--
-- Table structure for table `TMQ_network`
--

DROP TABLE IF EXISTS `TMQ_network`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `TMQ_network` (
  `ten` text CHARACTER SET utf8 NOT NULL,
  `ck` int(11) NOT NULL,
  `ck_mua` int(11) NOT NULL,
  `trangthai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

-- ------------------------------------------------------

--
-- Table structure for table `TMQ_ruttien`
--

DROP TABLE IF EXISTS `TMQ_ruttien`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `TMQ_ruttien` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uid` text CHARACTER SET utf8 DEFAULT NULL,
  `bank` text CHARACTER SET utf8 DEFAULT NULL,
  `stk` text CHARACTER SET utf8 DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `trangthai` text CHARACTER SET utf8 DEFAULT NULL,
  `time` text CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

-- ------------------------------------------------------

--
-- Table structure for table `TMQ_setting`
--

DROP TABLE IF EXISTS `TMQ_setting`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `TMQ_setting` (
  `key` text CHARACTER SET utf8 NOT NULL,
  `text` text CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `TMQ_setting`
--

LOCK TABLES `TMQ_setting` WRITE;
/*!40000 ALTER TABLE `TMQ_setting` DISABLE KEYS */;
INSERT INTO `TMQ_setting` (`key`, `text`) VALUES ('title','Hệ Thống Gạch Thẻ Số 1 Việt Nam'),('baotri','0'),('facebook','https://www.facebook.com/zTMQz'),('phone','01628877015'),('name','Trần Minh Quang'),('thongbao','Chào mừng ae đến với website gạch thẻ AzThe247.Tk!!!&lt;br&gt;\n\nHệ thống chạy được thẻ tự động cả 3 nhà mạng: &lt;span style=&quot;color:#e74c3c&quot;&gt;Viettel, Vina, Mobi&lt;/span&gt;&lt;br&gt;\n\nChiết khấu sẽ ổn định dần trong các ngày tới cam kết giá ưu đãi nhất cho anh em sử dụng !!!&lt;br&gt;'),('logo','/img/logo.png'),('tb_napthe','&lt;p&gt;&lt;span style=&quot;color:#e74c3c&quot;&gt;&lt;strong&gt;Cảnh báo: Cố tình Spam check thẻ sai sẽ khóa tài khoản vĩnh viễn&lt;/strong&gt;&lt;/span&gt;&lt;/p&gt;\n\n&lt;p&gt;&lt;strong&gt;Hệ thống chạy được thẻ tự động cả 3 nhà mạng: &lt;span style=&quot;color:#e74c3c&quot;&gt;Viettel, Vina, Mobi&lt;/span&gt;&lt;/strong&gt;&lt;/p&gt;\n\n&lt;p&gt;&lt;strong&gt;Chiết khấu sẽ ổn định dần trong các ngày tới cam kết giá ưu đãi nhất cho anh em sử dụng !!!&lt;/strong&gt;&lt;/p&gt;\n\n&lt;p&gt;&lt;strong&gt;Website sử dụng công nghệ mới cam kết không nuốt thẻ của đối tác hoặc bảo trì thẻ dưới mọi hình thức !!!&lt;/strong&gt;&lt;/p&gt;'),('tb_muathe','&lt;p&gt;&lt;strong&gt;Nhân dịp khai trương chức năng bán thẻ.&lt;/strong&gt;&lt;/p&gt;\n\n&lt;pHệ thống giảm giá thẻ cực sốc đối với tất cả các loại thẻ.&lt;/p&gt;\n\n&lt;p&gt;&lt;span style=&quot;color:#e74c3c&quot;&gt;&lt;strong&gt;Tuyển đại lý bán thẻ  lh SĐT 0383498297 để có chiết khấu thẻ tốt nhất.&lt;/strong&gt;&lt;/span&gt;&lt;/p&gt;');
/*!40000 ALTER TABLE `TMQ_setting` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `TMQ_user`
--

DROP TABLE IF EXISTS `TMQ_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `TMQ_user` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uid` text CHARACTER SET utf8 DEFAULT NULL,
  `matkhau` text CHARACTER SET utf8 DEFAULT NULL,
  `pass` text CHARACTER SET utf8 DEFAULT NULL,
  `name` text CHARACTER SET utf8 DEFAULT NULL,
  `email` text CHARACTER SET utf8 DEFAULT NULL,
  `phone` text CHARACTER SET utf8 DEFAULT NULL,
  `facebook` text CHARACTER SET utf8 DEFAULT NULL,
  `cash` int(11) DEFAULT NULL,
  `admin` int(11) DEFAULT NULL,
  `ban` int(11) DEFAULT NULL,
  `date` text CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

-- ------------------------------------------------------

--
-- Dumping events for database 'azthetk_1'
--

--
-- Dumping routines for database 'azthetk_1'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-10-13  9:42:39
