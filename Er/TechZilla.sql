-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: techzdb
-- ------------------------------------------------------
-- Server version	8.0.35

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `brand`
--

DROP TABLE IF EXISTS `brand`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `brand` (
  `brand_id` int NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(20) NOT NULL,
  PRIMARY KEY (`brand_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `brand`
--

LOCK TABLES `brand` WRITE;
/*!40000 ALTER TABLE `brand` DISABLE KEYS */;
INSERT INTO `brand` VALUES (1,'Asus'),(2,'MSI'),(3,'Hp'),(4,'Gigabyte'),(5,'Lenevo'),(6,'Samsung');
/*!40000 ALTER TABLE `brand` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `capacity`
--

DROP TABLE IF EXISTS `capacity`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `capacity` (
  `capacity_id` int NOT NULL AUTO_INCREMENT,
  `capacity_size` varchar(45) NOT NULL,
  PRIMARY KEY (`capacity_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `capacity`
--

LOCK TABLES `capacity` WRITE;
/*!40000 ALTER TABLE `capacity` DISABLE KEYS */;
INSERT INTO `capacity` VALUES (1,'500'),(2,'1000'),(3,'2000'),(4,'4000'),(5,'-');
/*!40000 ALTER TABLE `capacity` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cart` (
  `cart_id` int NOT NULL AUTO_INCREMENT,
  `cart_qty` int NOT NULL,
  `user_id` int NOT NULL,
  `stock_stock_id` int NOT NULL,
  PRIMARY KEY (`cart_id`),
  KEY `fk_cart_user1_idx` (`user_id`),
  KEY `fk_cart_stock1_idx` (`stock_stock_id`),
  CONSTRAINT `fk_cart_stock1` FOREIGN KEY (`stock_stock_id`) REFERENCES `stock` (`stock_id`),
  CONSTRAINT `fk_cart_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cart`
--

LOCK TABLES `cart` WRITE;
/*!40000 ALTER TABLE `cart` DISABLE KEYS */;
INSERT INTO `cart` VALUES (22,1,1,9),(23,1,1,2);
/*!40000 ALTER TABLE `cart` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `category` (
  `cat_id` int NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(20) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (1,'Pre Build PC'),(2,'Workstation PC'),(3,'Gaming PC'),(4,'Laptops'),(5,'SSD');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cpu`
--

DROP TABLE IF EXISTS `cpu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cpu` (
  `cpu_id` int NOT NULL AUTO_INCREMENT,
  `cpu_name` varchar(45) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  PRIMARY KEY (`cpu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cpu`
--

LOCK TABLES `cpu` WRITE;
/*!40000 ALTER TABLE `cpu` DISABLE KEYS */;
INSERT INTO `cpu` VALUES (1,'Intel core  i3 - 12500'),(2,'intel core i5 - 14600'),(3,'Intel core i7 - 12700'),(4,'AMD Ryzen 5 - 5600'),(5,'AMD Ryzen 5 - 7600g'),(6,'AMD Ryzen 5 - 3600g'),(7,'AMD Ryzen 7 - 7600'),(8,'-');
/*!40000 ALTER TABLE `cpu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_history`
--

DROP TABLE IF EXISTS `order_history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `order_history` (
  `ohid` int NOT NULL AUTO_INCREMENT,
  `order_id` text NOT NULL,
  `order_date` datetime NOT NULL,
  `amount` double NOT NULL,
  `user_id` int NOT NULL,
  PRIMARY KEY (`ohid`),
  KEY `fk_order_history_user1_idx` (`user_id`),
  CONSTRAINT `fk_order_history_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_history`
--

LOCK TABLES `order_history` WRITE;
/*!40000 ALTER TABLE `order_history` DISABLE KEYS */;
/*!40000 ALTER TABLE `order_history` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_item`
--

DROP TABLE IF EXISTS `order_item`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `order_item` (
  `oid` int NOT NULL AUTO_INCREMENT,
  `oi_qty` int NOT NULL,
  `order_history_ohid` int NOT NULL,
  `stock_stock_id` int NOT NULL,
  PRIMARY KEY (`oid`),
  KEY `fk_order_item_order_history1_idx` (`order_history_ohid`),
  KEY `fk_order_item_stock1_idx` (`stock_stock_id`),
  CONSTRAINT `fk_order_item_order_history1` FOREIGN KEY (`order_history_ohid`) REFERENCES `order_history` (`ohid`),
  CONSTRAINT `fk_order_item_stock1` FOREIGN KEY (`stock_stock_id`) REFERENCES `stock` (`stock_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_item`
--

LOCK TABLES `order_item` WRITE;
/*!40000 ALTER TABLE `order_item` DISABLE KEYS */;
/*!40000 ALTER TABLE `order_item` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `product` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `description` varchar(400) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `path` varchar(100) NOT NULL,
  `cpu_id` int NOT NULL,
  `ram_id` int NOT NULL,
  `cat_id` int NOT NULL,
  `brand_id` int NOT NULL,
  `capacity_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_product_cpu1_idx` (`cpu_id`),
  KEY `fk_product_ram1_idx` (`ram_id`),
  KEY `fk_product_category1_idx` (`cat_id`),
  KEY `fk_product_brand1_idx` (`brand_id`),
  KEY `fk_product_capacity1_idx` (`capacity_id`),
  CONSTRAINT `fk_product_brand1` FOREIGN KEY (`brand_id`) REFERENCES `brand` (`brand_id`),
  CONSTRAINT `fk_product_capacity1` FOREIGN KEY (`capacity_id`) REFERENCES `capacity` (`capacity_id`),
  CONSTRAINT `fk_product_category1` FOREIGN KEY (`cat_id`) REFERENCES `category` (`cat_id`),
  CONSTRAINT `fk_product_cpu1` FOREIGN KEY (`cpu_id`) REFERENCES `cpu` (`cpu_id`),
  CONSTRAINT `fk_product_ram1` FOREIGN KEY (`ram_id`) REFERENCES `ram` (`ram_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (7,'INTEL CORE I3-8GB-250GB','i3 12th gen\r\nMSI PRO b560 motherboard\r\n250GB NVME \r\n1TB HDD\r\n8GB DDR 4 RAM 3400MHZ\r\n','Resources/productImg/665e7534404d9.png',1,2,3,2,2),(8,'INTEL CORE I5-8GB-250GB','Intel core i5 14th gen\r\nMAG B660 TOMAHAWK WIFI DDR4\r\n16 GB Corsair vengeance pro rgb rs \r\nlian li o11 with 8 ARGB fans\r\nRTX 4060 12GB\r\n1TB NVME\r\n1TB hard disk - Rs. 13500/= ','Resources/productImg/665ea2e139908.png',2,3,3,1,1),(9,'AMD RYZEN 5 3600 | 16GB | 250GB','AMD Ryzen 5 3600g\r\nMSI Pro b450 WIFI VDH\r\nCorsair vengeance RGB RS 16GB\r\nThermaltake v250 \r\nMSI RTX 2070 Gamin Z\r\nMSI MAG 650w  ','Resources/productImg/665eaa87e932b.png',6,3,2,2,2),(10,'ROG Zephyrus G14','Portable and powerful gaming laptop\r\n1TB SSD\r\nAMD Ryzen 5 5600','Resources/productImg/665eb87e5eb92.png',4,3,4,1,2),(11,'TUF Gaming F15','Gaming laptop with MSI GTX 1660 Ti\r\nIntel i7-12700\r\n1TB SSD','Resources/productImg/665eba30015f3.png',3,3,4,1,2),(12,'AMD Ryzen 7 7700 Workstation','1TB NVME \r\nPalit RTX 3060\r\nASUS TUF GAMING B 650 motherboard\r\nLianLi o11 Dynamic','Resources/productImg/665ebc8188113.png',7,4,2,1,2),(13,'1TB Samsung 990 PRO SSD','3 Years Warranty\r\n\r\n\r\nGeneral Feature\r\nApplication\r\nClient PCs, Game Consoles\r\n\r\nCapacity\r\n2,000GB (1GB=1 Billion byte by IDEMA) * Actual usable capacity may be less (due to formatting, partitioning, operating system, applications or otherwise)','Resources/productImg/66633f3e1f7bd.png',8,5,5,6,2);
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ram`
--

DROP TABLE IF EXISTS `ram`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ram` (
  `ram_id` int NOT NULL AUTO_INCREMENT,
  `ram_size` varchar(10) NOT NULL,
  PRIMARY KEY (`ram_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ram`
--

LOCK TABLES `ram` WRITE;
/*!40000 ALTER TABLE `ram` DISABLE KEYS */;
INSERT INTO `ram` VALUES (1,'4'),(2,'8'),(3,'16'),(4,'32'),(5,'-');
/*!40000 ALTER TABLE `ram` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stock`
--

DROP TABLE IF EXISTS `stock`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `stock` (
  `stock_id` int NOT NULL AUTO_INCREMENT,
  `price` double NOT NULL,
  `qty` int NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `product_id` int NOT NULL,
  `delivery_fee` int DEFAULT NULL,
  PRIMARY KEY (`stock_id`) USING BTREE,
  KEY `fk_stock_product1_idx` (`product_id`),
  CONSTRAINT `fk_stock_product1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stock`
--

LOCK TABLES `stock` WRITE;
/*!40000 ALTER TABLE `stock` DISABLE KEYS */;
INSERT INTO `stock` VALUES (1,125400,4,1,7,NULL),(2,133500,4,1,8,NULL),(4,530000,5,1,10,NULL),(5,128600,1,1,9,NULL),(6,265000,6,1,11,NULL),(7,472000,2,1,12,NULL),(9,20000,10,1,13,NULL);
/*!40000 ALTER TABLE `stock` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fname` varchar(45) NOT NULL,
  `lname` varchar(45) NOT NULL,
  `mobile` int NOT NULL,
  `uname` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(45) NOT NULL,
  `status` int NOT NULL DEFAULT (1),
  `user_type_id` int NOT NULL,
  `no` varchar(10) DEFAULT NULL,
  `line_1` varchar(50) DEFAULT NULL,
  `line_2` varchar(50) DEFAULT NULL,
  `img_path` varchar(100) DEFAULT NULL,
  `v_code` text,
  PRIMARY KEY (`id`),
  KEY `fk_user_user_type_idx` (`user_type_id`),
  CONSTRAINT `fk_user_user_type` FOREIGN KEY (`user_type_id`) REFERENCES `user_type` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'Sachintha','Basnayaka',771234561,'Sachintha','sachintha@gmail.com','123Sachi',1,1,'61','Halgolla','hapugasthalawa','Resources/ProfileImg/66602b539dbd5.png',NULL),(3,'Saman','ba',771172184,'Saman','sachinthabasna@gmail.com','saman123',1,2,'22','Muruthalawa','Kandy','Resources/ProfileImg/6663415da2bed.png',NULL),(10,'Sanath','Nishantha',701234567,'DonkeyS','sanathn@gmial.com','sanath123',1,2,NULL,NULL,NULL,NULL,NULL),(11,'Amal','Perera',771234567,'AmalP','amal@gmail.com','amal123',0,2,'','','','Resources/ProfileImg/6661cb60c9633.png',NULL);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_type`
--

DROP TABLE IF EXISTS `user_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_type` (
  `id` int NOT NULL,
  `type` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_type`
--

LOCK TABLES `user_type` WRITE;
/*!40000 ALTER TABLE `user_type` DISABLE KEYS */;
INSERT INTO `user_type` VALUES (1,'Admin'),(2,'User');
/*!40000 ALTER TABLE `user_type` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-06-08  5:03:08
