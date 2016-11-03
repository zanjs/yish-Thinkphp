-- MySQL dump 10.13  Distrib 5.6.19, for Win64 (x86_64)
--
-- Host: qdm116354203.my3w.com    Database: qdm116354203_db
-- ------------------------------------------------------
-- Server version	5.1.48-log

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
-- Table structure for table `lo_admin`
--

DROP TABLE IF EXISTS `lo_admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lo_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `photo` varchar(100) DEFAULT NULL,
  `role` int(11) DEFAULT NULL,
  `regip` varchar(50) DEFAULT NULL,
  `regtime` datetime DEFAULT NULL,
  `uptime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lo_admin`
--

LOCK TABLES `lo_admin` WRITE;
/*!40000 ALTER TABLE `lo_admin` DISABLE KEYS */;
INSERT INTO `lo_admin` VALUES (1,'xpgood','11422340bafca404c4491863373311a6','/ke_upload/image/20160301/20160127222529_63901.png',1,'127.0.0.1','2016-05-25 15:10:27','2016-06-30 16:52:32');
/*!40000 ALTER TABLE `lo_admin` ENABLE KEYS */; a222222
UNLOCK TABLES;

--
-- Table structure for table `lo_advert`
--

DROP TABLE IF EXISTS `lo_advert`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lo_advert` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `classid` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `pic` varchar(255) DEFAULT NULL,
  `urllink` varchar(255) DEFAULT NULL,
  `subcontent` text,
  `content1` text,
  `content2` text,
  `content3` text,
  `flag` varchar(100) DEFAULT NULL,
  `source` varchar(255) DEFAULT NULL,
  `author` varchar(50) DEFAULT NULL,
  `tcolor` varchar(12) DEFAULT NULL,
  `tbold` varchar(12) DEFAULT NULL,
  `seo_title` varchar(255) DEFAULT NULL,
  `seo_keywords` text,
  `seo_description` text,
  `hits` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `porder` int(11) DEFAULT '0',
  `recommend` tinyint(2) DEFAULT '0',
  `htime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lo_advert`
--

LOCK TABLES `lo_advert` WRITE;
/*!40000 ALTER TABLE `lo_advert` DISABLE KEYS */;
INSERT INTO `lo_advert` VALUES (2,1,'首页广告图2','/ke_upload/image/20160710/20160710172751_71418.jpg','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,2,0,'2016-06-28 13:44:11'),(3,1,'首页广告图3','/ke_upload/image/20160710/20160710173108_37149.jpg','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,1,0,'2016-06-28 13:44:32'),(7,2,'手机banner2','/ke_upload/image/20160710/20160710142158_41648.jpg','http://www.baidu.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,0,0,'2016-06-28 14:14:15'),(8,2,'手机banner3','/ke_upload/image/20160710/20160710142142_75644.jpg','http://www.baidu.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,0,0,'2016-06-28 14:14:32');
/*!40000 ALTER TABLE `lo_advert` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lo_category`
--

DROP TABLE IF EXISTS `lo_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lo_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '栏目编号',
  `model` varchar(50) DEFAULT NULL COMMENT '模型',
  `title` varchar(255) DEFAULT NULL COMMENT '栏目名称',
  `title2` varchar(255) DEFAULT NULL COMMENT '栏目英文名称',
  `pid` int(11) DEFAULT NULL COMMENT '父级栏目编号',
  `urllink` varchar(255) DEFAULT NULL COMMENT '栏目链接',
  `pagetype` varchar(255) DEFAULT NULL COMMENT '页面类型',
  `pagetitle` varchar(255) DEFAULT NULL COMMENT '页面名称',
  `pagemodel` varchar(255) DEFAULT NULL COMMENT '页面模版',
  `content1` text COMMENT '内容',
  `img` varchar(255) DEFAULT NULL COMMENT '图片',
  `seo_title` varchar(255) DEFAULT NULL COMMENT 'seo标题',
  `seo_keywords` text COMMENT 'seo关键字',
  `seo_description` text COMMENT 'seo描述',
  `porder` int(11) DEFAULT '0' COMMENT '排序',
  `menu_top` int(11) DEFAULT '1' COMMENT '顶导航显示',
  `menu_bottom` int(11) DEFAULT '1' COMMENT '底导航显示',
  `menu_slide` int(11) DEFAULT '1' COMMENT '边导航显示',
  `status` int(11) DEFAULT '1' COMMENT '是否显示状态',
  `add_time` datetime DEFAULT NULL COMMENT '添加时间',
  `up_time` datetime DEFAULT NULL COMMENT '最后一次修改时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lo_category`
--

LOCK TABLES `lo_category` WRITE;
/*!40000 ALTER TABLE `lo_category` DISABLE KEYS */;
INSERT INTO `lo_category` VALUES (64,'Index','HOME','',0,'/index.html','','index','\n','','/ke_upload/image/20160710/20160710171132_96036.jpg','YISH设计','YISH设计','YISH设计',6,1,1,1,1,'2016-06-28 10:47:39','2016-07-10 17:11:43'),(65,'About','ABOUT US','',0,'/index.html#about',NULL,NULL,NULL,'','','about','about','about',5,1,1,1,1,'2016-06-28 11:47:52','2016-06-28 14:43:23'),(66,'About','TEAM','',65,'',NULL,NULL,NULL,'&lt;div class=&quot;haTeam&quot;&gt;\r\n	&lt;dl&gt;\r\n		&lt;dd&gt;\r\n			&lt;h3&gt;\r\n				&lt;img src=&quot;/ke_upload/image/20160628/20160628070933_52563.png&quot; /&gt; \r\n			&lt;/h3&gt;\r\n			&lt;h4&gt;\r\n				&lt;img src=&quot;/ke_upload/image/20160628/20160628070954_98593.png&quot; /&gt; \r\n			&lt;/h4&gt;\r\n&lt;strong&gt;VAN&lt;/strong&gt; \r\n			&lt;p&gt;\r\n				设计总监\r\n			&lt;/p&gt;\r\n		&lt;/dd&gt;\r\n		&lt;dd&gt;\r\n			&lt;h3&gt;\r\n				&lt;img src=&quot;/ke_upload/image/20160628/20160628071009_70625.png&quot; /&gt; \r\n			&lt;/h3&gt;\r\n			&lt;h4&gt;\r\n				&lt;img src=&quot;/ke_upload/image/20160628/20160628071017_58158.png&quot; /&gt; \r\n			&lt;/h4&gt;\r\n&lt;strong&gt;ASH&lt;/strong&gt; \r\n			&lt;p&gt;\r\n				美术指导\r\n			&lt;/p&gt;\r\n		&lt;/dd&gt;\r\n	&lt;/dl&gt;\r\n	&lt;dl&gt;\r\n		&lt;dd&gt;\r\n			&lt;h3&gt;\r\n				&lt;img src=&quot;/ke_upload/image/20160628/20160628071035_53503.png&quot; /&gt; \r\n			&lt;/h3&gt;\r\n			&lt;h4&gt;\r\n				&lt;img src=&quot;/ke_upload/image/20160628/20160628071046_95902.png&quot; /&gt; \r\n			&lt;/h4&gt;\r\n&lt;strong&gt;SEVEN&lt;/strong&gt; \r\n			&lt;p&gt;\r\n				视觉设计师\r\n			&lt;/p&gt;\r\n		&lt;/dd&gt;\r\n		&lt;dd&gt;\r\n			&lt;h3&gt;\r\n				&lt;img src=&quot;/ke_upload/image/20160628/20160628071057_30360.png&quot; /&gt; \r\n			&lt;/h3&gt;\r\n			&lt;h4&gt;\r\n				&lt;img src=&quot;/ke_upload/image/20160628/20160628071106_39910.png&quot; /&gt; \r\n			&lt;/h4&gt;\r\n&lt;strong&gt;ANNE&lt;/strong&gt; \r\n			&lt;p&gt;\r\n				UI/UED设计师\r\n			&lt;/p&gt;\r\n		&lt;/dd&gt;\r\n		&lt;dd&gt;\r\n			&lt;h3&gt;\r\n				&lt;img src=&quot;/ke_upload/image/20160628/20160628071115_72564.png&quot; /&gt; \r\n			&lt;/h3&gt;\r\n			&lt;h4&gt;\r\n				&lt;img src=&quot;/ke_upload/image/20160628/20160628071124_19206.png&quot; /&gt; \r\n			&lt;/h4&gt;\r\n&lt;strong&gt;NIKI&lt;/strong&gt; \r\n			&lt;p&gt;\r\n				品牌设计师\r\n			&lt;/p&gt;\r\n		&lt;/dd&gt;\r\n	&lt;/dl&gt;\r\n&lt;/div&gt;','','','','',4,1,1,1,1,'2016-06-28 11:53:47','2016-06-28 15:11:42'),(67,'About','VALUE','',65,'',NULL,NULL,NULL,'&lt;div class=&quot;haValue&quot;&gt;\r\n	&lt;h2&gt;\r\n		DESIGN FOR THE REAL WORLD\r\n	&lt;/h2&gt;\r\n	&lt;h3&gt;\r\n		我们励志于将视觉元素与设计研究相结合，将更好的视觉感受运用于商业之中。真正将美好的设计融入你我的生活。\r\n	&lt;/h3&gt;\r\n	&lt;h4&gt;\r\n		we are committed to enriching your life with our wonderful designs, which feature visual elements and bring you better visual sensation.\r\n	&lt;/h4&gt;\r\n	&lt;dl&gt;\r\n		&lt;dd&gt;\r\n			&lt;a href=&quot;javascript:void(0)&quot;&gt;POSITIVE&lt;/a&gt;\r\n		&lt;/dd&gt;\r\n		&lt;dd&gt;\r\n			&lt;a href=&quot;javascript:void(0)&quot;&gt;PASSIONATE&lt;/a&gt;\r\n		&lt;/dd&gt;\r\n		&lt;dd&gt;\r\n			&lt;a href=&quot;javascript:void(0)&quot;&gt;PPOFESSIONAL&lt;/a&gt;\r\n		&lt;/dd&gt;\r\n	&lt;/dl&gt;\r\n&lt;/div&gt;','','','','',1,1,1,1,1,'2016-06-28 11:58:24','2016-06-28 15:05:23'),(68,'About','SERVICES','',65,'',NULL,NULL,NULL,'&lt;div class=&quot;haServices&quot;&gt;\r\n	&lt;ul&gt;\r\n		&lt;li&gt;\r\n			&lt;dl&gt;\r\n				&lt;dt&gt;\r\n					&lt;h4&gt;\r\n						品牌形象设计\r\n					&lt;/h4&gt;\r\n					&lt;p&gt;\r\n						Brand Design\r\n					&lt;/p&gt;\r\n				&lt;/dt&gt;\r\n				&lt;dd&gt;\r\n					&lt;p&gt;\r\n						LOGO设计\r\n					&lt;/p&gt;\r\n					&lt;p&gt;\r\n						品牌（企业）VI\r\n					&lt;/p&gt;\r\n					&lt;p&gt;\r\n						媒体广告\r\n					&lt;/p&gt;\r\n				&lt;/dd&gt;\r\n			&lt;/dl&gt;\r\n		&lt;/li&gt;\r\n		&lt;li&gt;\r\n			&lt;dl&gt;\r\n				&lt;dt&gt;\r\n					&lt;h4&gt;\r\n						UI设计\r\n					&lt;/h4&gt;\r\n					&lt;p&gt;\r\n						UI Design\r\n					&lt;/p&gt;\r\n				&lt;/dt&gt;\r\n				&lt;dd&gt;\r\n					&lt;p&gt;\r\n						网页界面设计\r\n					&lt;/p&gt;\r\n					&lt;p&gt;\r\n						APP界面设计\r\n					&lt;/p&gt;\r\n					&lt;p&gt;\r\n						交互行为设计\r\n					&lt;/p&gt;\r\n				&lt;/dd&gt;\r\n			&lt;/dl&gt;\r\n		&lt;/li&gt;\r\n		&lt;li&gt;\r\n			&lt;dl&gt;\r\n				&lt;dt&gt;\r\n					&lt;h4&gt;\r\n						包装设计\r\n					&lt;/h4&gt;\r\n					&lt;p&gt;\r\n						Package Design\r\n					&lt;/p&gt;\r\n				&lt;/dt&gt;\r\n				&lt;dd&gt;\r\n					&lt;p&gt;\r\n						包装视觉设计\r\n					&lt;/p&gt;\r\n					&lt;p&gt;\r\n						包装结构设计\r\n					&lt;/p&gt;\r\n					&lt;p&gt;\r\n						包装创意\r\n					&lt;/p&gt;\r\n				&lt;/dd&gt;\r\n			&lt;/dl&gt;\r\n		&lt;/li&gt;\r\n		&lt;li&gt;\r\n			&lt;dl&gt;\r\n				&lt;dt&gt;\r\n					&lt;h4&gt;\r\n						编排设计\r\n					&lt;/h4&gt;\r\n					&lt;p&gt;\r\n						Layout Design\r\n					&lt;/p&gt;\r\n				&lt;/dt&gt;\r\n				&lt;dd&gt;\r\n					&lt;p&gt;\r\n						画册、单页、折页设计\r\n					&lt;/p&gt;\r\n					&lt;p&gt;\r\n						杂志、书籍排版及印刷\r\n					&lt;/p&gt;\r\n					&lt;p&gt;\r\n						工艺\r\n					&lt;/p&gt;\r\n				&lt;/dd&gt;\r\n			&lt;/dl&gt;\r\n		&lt;/li&gt;\r\n	&lt;/ul&gt;\r\n	&lt;h1&gt;\r\n		我们专注于视觉设计，专为品牌或企业提供相关视觉设计服务。\r\n	&lt;/h1&gt;\r\n	&lt;h2&gt;\r\n		We specialize in visual design , brand, or specifically for enterprises to provide relevant visual design services.\r\n	&lt;/h2&gt;\r\n&lt;/div&gt;','','','','',0,1,1,1,1,'2016-06-28 11:59:36','2016-06-28 15:06:04'),(69,'Work','WORK','',0,'/work.html','list',NULL,NULL,'','','WORK','WORK','WORK',0,1,1,1,1,'2016-06-28 12:00:06','2016-06-28 17:12:07'),(70,'Clients','CLIENTS','',0,'/index.html#clients','list',NULL,NULL,'&lt;div class=&quot;homeClientsLayout&quot;&gt;\r\n	&lt;img src=&quot;/ke_upload/image/20160628/20160628045430_46046.jpg&quot; /&gt; \r\n&lt;/div&gt;\r\n&lt;div class=&quot;hTitle hcTitle&quot;&gt;\r\n	&lt;a name=&quot;clients&quot;&gt;&lt;/a&gt;CLIENTS\r\n&lt;/div&gt;','','','','',0,1,1,1,1,'2016-06-28 12:54:41','2016-06-28 15:55:30'),(71,'Contact','CONTACT','',0,'/index.html#contact',NULL,NULL,NULL,'&lt;h1 class=&quot;hTitle&quot;&gt;\r\n	&lt;a name=&quot;contact&quot;&gt;&lt;/a&gt;CONTACT\r\n&lt;/h1&gt;\r\n&lt;div class=&quot;contactText&quot;&gt;\r\n	&lt;h1 class=&quot;ch1&quot;&gt;\r\n		Email:\r\n	&lt;/h1&gt;\r\n	&lt;p class=&quot;cp1&quot;&gt;\r\n		yishdesign@163.com\r\n	&lt;/p&gt;\r\n&lt;br /&gt;\r\n&lt;br /&gt;\r\n	&lt;h1 class=&quot;ch1&quot;&gt;\r\n		WeChat:\r\n	&lt;/h1&gt;\r\n	&lt;p class=&quot;cp1&quot;&gt;\r\n		yishdesign\r\n	&lt;/p&gt;\r\n&lt;br /&gt;\r\n&lt;br /&gt;\r\n	&lt;h1 class=&quot;ch1&quot;&gt;\r\n		Address:\r\n	&lt;/h1&gt;\r\n	&lt;p class=&quot;cp1&quot;&gt;\r\n		上海市嘉定区江桥万达3号楼716\r\n	&lt;/p&gt;\r\n&lt;/div&gt;\r\n&lt;div class=&quot;contactImg&quot;&gt;\r\n	&lt;img src=&quot;/ke_upload/image/20160628/20160628071548_46952.jpg&quot; /&gt; \r\n&lt;/div&gt;','','','','',0,1,1,1,1,'2016-06-28 12:56:53','2016-07-10 14:30:10');
/*!40000 ALTER TABLE `lo_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lo_clients`
--

DROP TABLE IF EXISTS `lo_clients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lo_clients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `classid` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `pic` varchar(255) DEFAULT NULL,
  `subcontent` text,
  `content1` text,
  `content2` text,
  `content3` text,
  `flag` varchar(100) DEFAULT NULL,
  `source` varchar(255) DEFAULT NULL,
  `author` varchar(50) DEFAULT NULL,
  `tcolor` varchar(12) DEFAULT NULL,
  `tbold` varchar(12) DEFAULT NULL,
  `seo_title` varchar(255) DEFAULT NULL,
  `seo_keywords` text,
  `seo_description` text,
  `hits` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `porder` int(11) DEFAULT '0',
  `recommend` tinyint(2) DEFAULT '0',
  `htime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lo_clients`
--

LOCK TABLES `lo_clients` WRITE;
/*!40000 ALTER TABLE `lo_clients` DISABLE KEYS */;
INSERT INTO `lo_clients` VALUES (1,70,'link1','/ke_upload/image/20160628/20160628062122_69273.png',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','','',NULL,1,0,0,'2016-06-28 14:21:45'),(2,70,'link2','/ke_upload/image/20160628/20160628062749_52311.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','','',NULL,1,0,0,'2016-06-28 14:27:58'),(3,70,'link3','/ke_upload/image/20160628/20160628062817_13784.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','','',NULL,1,0,0,'2016-06-28 14:28:20'),(4,70,'link4','/ke_upload/image/20160628/20160628062851_17739.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','','',NULL,1,0,0,'2016-06-28 14:28:54'),(5,70,'link5','/ke_upload/image/20160628/20160628062911_97239.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','','',NULL,1,0,0,'2016-06-28 14:29:14'),(6,70,'link6','/ke_upload/image/20160628/20160628062925_61352.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','','',NULL,1,0,0,'2016-06-28 14:29:28'),(7,70,'link7','/ke_upload/image/20160628/20160628063023_14960.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','','',NULL,1,0,0,'2016-06-28 14:30:26'),(8,70,'link8','/ke_upload/image/20160628/20160628063037_71136.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','','',NULL,1,0,0,'2016-06-28 14:30:40'),(9,70,'link9','/ke_upload/image/20160628/20160628063054_65063.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','','',NULL,1,0,0,'2016-06-28 14:30:57');
/*!40000 ALTER TABLE `lo_clients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lo_set`
--

DROP TABLE IF EXISTS `lo_set`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lo_set` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sitehost` varchar(255) DEFAULT NULL,
  `sitename` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `pic` varchar(255) DEFAULT NULL,
  `seo_title` varchar(255) DEFAULT NULL,
  `seo_keywords` text,
  `seo_description` text,
  `icp` varchar(255) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `tel` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `businessemail` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `code` text,
  `stime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lo_set`
--

LOCK TABLES `lo_set` WRITE;
/*!40000 ALTER TABLE `lo_set` DISABLE KEYS */;
INSERT INTO `lo_set` VALUES (1,'www.yish-design.com','YISH DESIGN','/ke_upload/image/20160628/20160628033345_19464.png','','','','','','','','','','','','©2016.ALL Rights Reserved yish-design.com','2016-06-30 17:14:21');
/*!40000 ALTER TABLE `lo_set` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lo_work`
--

DROP TABLE IF EXISTS `lo_work`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lo_work` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `classid` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `pic` varchar(255) DEFAULT NULL,
  `urllink` varchar(255) DEFAULT NULL,
  `subcontent` text,
  `content1` text,
  `content2` text,
  `content3` text,
  `flag` varchar(100) DEFAULT NULL,
  `source` varchar(255) DEFAULT NULL,
  `author` varchar(50) DEFAULT NULL,
  `tcolor` varchar(12) DEFAULT NULL,
  `tbold` varchar(12) DEFAULT NULL,
  `seo_title` varchar(255) DEFAULT NULL,
  `seo_keywords` text,
  `seo_description` text,
  `hits` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `porder` int(11) DEFAULT '0',
  `recommend` tinyint(2) DEFAULT '0',
  `htime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lo_work`
--

LOCK TABLES `lo_work` WRITE;
/*!40000 ALTER TABLE `lo_work` DISABLE KEYS */;
INSERT INTO `lo_work` VALUES (27,69,'上海青年写实绘画沙龙','/ke_upload/image/20160630/20160630225825_61693.jpg',NULL,'立足自身倡导的学术基点，推进上海与全国乃至国际间艺术交流，弘扬和发展具有上海本土特色的民俗油画；推进上海青年油画艺术界在创作、教育等领域在当下上海以更为创新的面貌展开，励志逐渐引领上海油画艺术升华到一个更高更新的层面。','&lt;img src=&quot;/ke_upload/image/20160630/20160630225103_50645.jpg&quot; alt=&quot;&quot; /&gt;',NULL,NULL,'7,',NULL,NULL,NULL,NULL,'','','',NULL,1,0,1,'2016-06-28 20:01:14'),(28,69,'嗨新鲜','/ke_upload/image/20160709/20160709221218_58089.jpg',NULL,'嗨新鲜是集线上与线下一体的海鲜品牌，嗨新鲜海鲜餐厅定位于年轻人群，以海洋的深蓝色为主要色调，logo与吉祥物的结合，表现快乐轻松用餐的氛围。','&lt;p&gt;\r\n	&lt;img src=&quot;/editor/php/../../ke_upload/image/20160709/20160709221254_58435.jpg&quot; alt=&quot;&quot; /&gt;&lt;img src=&quot;/editor/php/../../ke_upload/image/20160709/20160709221252_23651.jpg&quot; alt=&quot;&quot; /&gt;&lt;img src=&quot;/editor/php/../../ke_upload/image/20160709/20160709221252_87697.jpg&quot; alt=&quot;&quot; /&gt; \r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	&lt;br /&gt;\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	&lt;img src=&quot;/editor/php/../../ke_upload/image/20160709/20160709221251_49454.jpg&quot; alt=&quot;&quot; style=&quot;line-height:1.5;&quot; /&gt; \r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	&lt;br /&gt;\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	&lt;img src=&quot;/editor/php/../../ke_upload/image/20160709/20160709221252_80961.jpg&quot; alt=&quot;&quot; style=&quot;line-height:1.5;&quot; /&gt;\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	&lt;br /&gt;\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	&lt;img src=&quot;/editor/php/../../ke_upload/image/20160709/20160709221253_33289.jpg&quot; alt=&quot;&quot; style=&quot;line-height:1.5;&quot; /&gt; \r\n&lt;/p&gt;',NULL,NULL,'3,4,5,',NULL,NULL,NULL,NULL,'','','',NULL,1,0,1,'2016-06-28 20:02:28'),(29,69,'canlife罐头生活APP界面设计','/ke_upload/image/20160709/20160709231322_86149.jpg',NULL,'L\'identité visuelle de Art Truc Troc 2014-2015 est une réalisation en paper design.\r\nDu relief, de la couleur, un esprit graphique et artistique,\r\nà l\'image de l\'événement !','&lt;img src=&quot;/editor/php/../../ke_upload/image/20160709/20160709231255_95657.jpg&quot; alt=&quot;&quot; /&gt;&lt;img src=&quot;/editor/php/../../ke_upload/image/20160709/20160709231255_24009.jpg&quot; alt=&quot;&quot; /&gt;&lt;img src=&quot;/editor/php/../../ke_upload/image/20160709/20160709231255_55093.jpg&quot; alt=&quot;&quot; /&gt;&lt;img src=&quot;/editor/php/../../ke_upload/image/20160709/20160709231255_84902.jpg&quot; alt=&quot;&quot; /&gt;&lt;img src=&quot;/editor/php/../../ke_upload/image/20160709/20160709231256_38685.jpg&quot; alt=&quot;&quot; /&gt;',NULL,NULL,'8,',NULL,NULL,NULL,NULL,'','','',NULL,1,0,1,'2016-06-28 20:03:10'),(30,69,'MR.M餐厅形象设计','/ke_upload/image/20160709/20160709231941_26350.jpg',NULL,'MR.M是一家以欧美复古工厂风为主题的中西餐合并的餐厅，用餐时给人无与伦比的味蕾感受的同时体会视觉的享受，整体风格定位为轻复古风，体会原汁原味的中西的融合。','&lt;img src=&quot;/editor/php/../../ke_upload/image/20160709/20160709232002_52757.jpg&quot; alt=&quot;&quot; /&gt;&lt;img src=&quot;/editor/php/../../ke_upload/image/20160709/20160709232003_75472.jpg&quot; alt=&quot;&quot; /&gt;',NULL,NULL,'4,5,',NULL,NULL,NULL,NULL,'','','',NULL,1,0,1,'2016-06-28 20:03:53'),(31,69,'盛航密封件官网设计','/ke_upload/image/20160709/20160709232437_19726.jpg',NULL,'盛航企业是密封件行业多年的专家，以一流的服务在业界建立了良好的声誉，以深蓝色为主色调突出其专业性与给人信赖感\r\n','&lt;img src=&quot;/editor/php/../../ke_upload/image/20160709/20160709232709_10749.jpg&quot; alt=&quot;&quot; /&gt;&lt;img src=&quot;/editor/php/../../ke_upload/image/20160709/20160709232709_37098.jpg&quot; alt=&quot;&quot; /&gt;&lt;img src=&quot;/editor/php/../../ke_upload/image/20160709/20160709232709_99307.jpg&quot; alt=&quot;&quot; /&gt;&lt;img src=&quot;/editor/php/../../ke_upload/image/20160709/20160709232710_98431.jpg&quot; alt=&quot;&quot; /&gt;',NULL,NULL,'7,',NULL,NULL,NULL,NULL,'','','',NULL,1,0,1,'2016-06-28 20:04:29'),(32,69,'宏文造物','/ke_upload/image/20160710/20160710100813_78452.jpg',NULL,'宏文造物的LOGO设计主要是以陶器敦实圆厚的外形和瓷器的光滑又有些许起伏不平的质感为元素来进行的设计。颜色以自然的陶土色为主，体现出陶瓷的质朴与温和。宏文造物除了原创的陶瓷设计之外也对外开放，欢迎相关兴趣爱好者的报名加入，在其工作室规定的时间段可前行去DIY自己的器物。\r\n','&lt;img src=&quot;/editor/php/../../ke_upload/image/20160710/20160710102440_58965.jpg&quot; alt=&quot;&quot; /&gt;&lt;img src=&quot;/editor/php/../../ke_upload/image/20160710/20160710102440_19692.jpg&quot; alt=&quot;&quot; /&gt;&lt;img src=&quot;/editor/php/../../ke_upload/image/20160710/20160710102441_61939.jpg&quot; alt=&quot;&quot; /&gt;',NULL,NULL,'3,4,',NULL,NULL,NULL,NULL,'','','',NULL,1,0,1,'2016-06-28 20:05:27'),(33,69,'BODYBRITE 宝贝来','/ke_upload/image/20160710/20160710114652_14831.jpg',NULL,'BODYBRITE一直致力于印第安古老医术与现代科 技的完美结合在皮肤美容领域的应用研究,倡导快速、有效、经济、 时尚的美容理念,时刻为追求美丽、时尚的消费者提供便捷的、有效地超值服务,这就是 BodyBrite 品牌的核心基因。','&lt;img src=&quot;/editor/php/../../ke_upload/image/20160710/20160710115312_52585.jpg&quot; alt=&quot;&quot; /&gt;&lt;img src=&quot;/editor/php/../../ke_upload/image/20160710/20160710115312_59339.jpg&quot; alt=&quot;&quot; /&gt;&lt;img src=&quot;/editor/php/../../ke_upload/image/20160710/20160710115312_55930.jpg&quot; alt=&quot;&quot; /&gt;&lt;img src=&quot;/editor/php/../../ke_upload/image/20160710/20160710115313_98864.jpg&quot; alt=&quot;&quot; /&gt;&lt;img src=&quot;/editor/php/../../ke_upload/image/20160710/20160710115312_75250.jpg&quot; alt=&quot;&quot; /&gt;',NULL,NULL,'3,4,5,9,',NULL,NULL,NULL,NULL,'','','',NULL,1,0,1,'2016-06-28 20:05:55'),(34,69,'环宋果业','/ke_upload/image/20160710/20160710115526_40603.jpg',NULL,'环宋果业是一家拥有闽台特色的水果店，集线上订购与线下服务于一体。\r\n\r\n我们对LOGO的风格定义为闽台的复古风并赋予其肌理感，主要以绿色为主，表现水果的性质。\r\n“领鲜生活，美味到家”体现了线上线下一体的销售模式，也是环宋果业给顾客的承诺','&lt;img src=&quot;/editor/php/../../ke_upload/image/20160710/20160710115656_16779.jpg&quot; alt=&quot;&quot; /&gt;&lt;img src=&quot;/editor/php/../../ke_upload/image/20160710/20160710115656_73281.jpg&quot; alt=&quot;&quot; /&gt;&lt;img src=&quot;/editor/php/../../ke_upload/image/20160710/20160710115656_17265.jpg&quot; alt=&quot;&quot; /&gt;',NULL,NULL,'3,4,5,6,',NULL,NULL,NULL,NULL,'','','',NULL,1,0,1,'2016-06-28 20:06:29'),(35,69,'悦野体育','/ke_upload/image/20160710/20160710121406_32946.jpg',NULL,'悦野体育是一家专业从事定向越野的俱乐部，组织热爱定向越野的人群参与各项活动。对于热爱接受挑战的你，定向越野绝对能够带给你满足感，定向是一种充满变化的运动，每次赛程都会与以前的截然不同，即使你熟悉该赛区，即使你是很有经验的运动员，也不可能一定会赢，这亦使每次比赛都有新鲜感，新的刺激。对于想考验自己的你，定向越野是个很好的锻炼机会。因为定向运动同时考研你的体能（越野跑能力），技术（地图阅读技术、指北针使用技术）及智慧（选择最好的路线）。而且还要在当中找到平衡（因为跑得快反而更容易迷失方向），绝非易事。','&lt;img src=&quot;/editor/php/../../ke_upload/image/20160710/20160710121506_62638.jpg&quot; alt=&quot;&quot; /&gt;&lt;img src=&quot;/editor/php/../../ke_upload/image/20160710/20160710121509_78393.jpg&quot; alt=&quot;&quot; /&gt;&lt;img src=&quot;/editor/php/../../ke_upload/image/20160710/20160710121510_61058.jpg&quot; alt=&quot;&quot; /&gt;',NULL,NULL,'3,4,',NULL,NULL,NULL,NULL,'','','',NULL,1,0,1,'2016-06-28 20:07:02'),(36,69,'mecerock logo设计','/ke_upload/image/20160710/20160710125519_29642.jpg',NULL,'mecerock主营业务对外家纺贸易出口，为国外家居提供优质的家纺产品。“enjoy us，enjoy life”是其品牌理念。我们为其品牌logo设计了三种方案，最终定稿为第一款logo。','&lt;img src=&quot;/editor/php/../../ke_upload/image/20160710/20160710125644_59630.jpg&quot; alt=&quot;&quot; /&gt;&lt;img src=&quot;/editor/php/../../ke_upload/image/20160710/20160710125645_76253.jpg&quot; alt=&quot;&quot; /&gt;&lt;img src=&quot;/editor/php/../../ke_upload/image/20160710/20160710125647_45389.jpg&quot; alt=&quot;&quot; /&gt;&lt;img src=&quot;/editor/php/../../ke_upload/image/20160710/20160710125646_38000.jpg&quot; alt=&quot;&quot; /&gt;&lt;img src=&quot;/editor/php/../../ke_upload/image/20160710/20160710125921_68932.jpg&quot; alt=&quot;&quot; /&gt;&lt;img src=&quot;/editor/php/../../ke_upload/image/20160710/20160710125921_94146.jpg&quot; alt=&quot;&quot; /&gt;',NULL,NULL,'3,4,',NULL,NULL,NULL,NULL,'','','',NULL,1,0,1,'2016-06-28 20:07:40'),(37,69,'Allegra的数字品牌','/ke_upload/image/20160628/20160628084628_92394.jpg',NULL,'L\'identité visuelle de Art Truc Troc 2014-2015 est une réalisation en paper design.\r\nDu relief, de la couleur, un esprit graphique et artistique,\r\nà l\'image de l\'événement !\r\n','&lt;img src=&quot;/ke_upload/image/20160628/20160628084700_82586.jpg&quot; alt=&quot;&quot; /&gt;',NULL,NULL,'3,4,5,6,',NULL,NULL,NULL,NULL,'','','',NULL,1,0,1,'2016-06-28 20:08:13'),(38,69,'Allegra的数字品牌','/ke_upload/image/20160628/20160628084842_86478.jpg',NULL,'L\'identité visuelle de Art Truc Troc 2014-2015 est une réalisation en paper design.\r\nDu relief, de la couleur, un esprit graphique et artistique,\r\nà l\'image de l\'événement !\r\n','&lt;img src=&quot;/ke_upload/image/20160628/20160628084700_82586.jpg&quot; alt=&quot;&quot; /&gt;',NULL,NULL,'3,4,5,6,',NULL,NULL,NULL,NULL,'','','',NULL,1,0,1,'2016-06-28 20:08:45'),(39,69,'Allegra的数字品牌','/ke_upload/image/20160628/20160628084628_92394.jpg',NULL,'L\'identité visuelle de Art Truc Troc 2014-2015 est une réalisation en paper design.\r\nDu relief, de la couleur, un esprit graphique et artistique,\r\nà l\'image de l\'événement !','&lt;img src=&quot;/ke_upload/image/20160628/20160628084700_82586.jpg&quot; alt=&quot;&quot; /&gt;',NULL,NULL,'3,4,5,6,',NULL,NULL,NULL,NULL,'','','',NULL,1,0,1,'2016-06-28 20:09:14');
/*!40000 ALTER TABLE `lo_work` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lo_work_tag`
--

DROP TABLE IF EXISTS `lo_work_tag`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lo_work_tag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `classid` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `pic` varchar(255) DEFAULT NULL,
  `subcontent` text,
  `content1` text,
  `content2` text,
  `content3` text,
  `flag` varchar(100) DEFAULT NULL,
  `source` varchar(255) DEFAULT NULL,
  `author` varchar(50) DEFAULT NULL,
  `tcolor` varchar(12) DEFAULT NULL,
  `tbold` varchar(12) DEFAULT NULL,
  `seo_title` varchar(255) DEFAULT NULL,
  `seo_keywords` text,
  `seo_description` text,
  `hits` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `porder` int(11) DEFAULT '0',
  `recommend` tinyint(2) DEFAULT '0',
  `htime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lo_work_tag`
--

LOCK TABLES `lo_work_tag` WRITE;
/*!40000 ALTER TABLE `lo_work_tag` DISABLE KEYS */;
INSERT INTO `lo_work_tag` VALUES (3,NULL,'视觉设计',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,0,0,'2016-06-30 12:00:19'),(4,NULL,'logo设计',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,0,0,'2016-06-30 13:28:24'),(5,NULL,'品牌(企业)VI',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,0,0,'2016-06-30 13:28:42'),(6,NULL,'媒体广告',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,0,0,'2016-06-30 13:28:53'),(7,NULL,'网页界面设计',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,0,0,'2016-06-30 16:49:22'),(8,NULL,'app界面设计',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,0,0,'2016-07-09 22:17:13'),(9,NULL,'包装设计',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,0,0,'2016-07-10 11:13:21');
/*!40000 ALTER TABLE `lo_work_tag` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-07-10 17:37:40
