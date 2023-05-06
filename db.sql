-- MySQL dump 10.13  Distrib 8.0.29, for Win64 (x86_64)
--
-- Host: localhost    Database: db
-- ------------------------------------------------------
-- Server version	8.0.29

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `bazarlogin`
--

DROP TABLE IF EXISTS `bazarlogin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `bazarlogin` (
  `uid` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bazarlogin`
--

LOCK TABLES `bazarlogin` WRITE;
/*!40000 ALTER TABLE `bazarlogin` DISABLE KEYS */;
INSERT INTO `bazarlogin` VALUES (1,'root','','123456'),(2,'root','khan10asifa@gmail.com','123456');
/*!40000 ALTER TABLE `bazarlogin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `grandbazar`
--

DROP TABLE IF EXISTS `grandbazar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `grandbazar` (
  `p_id` int NOT NULL,
  `Categories` varchar(50) DEFAULT NULL,
  `Sub_Categories` varchar(50) DEFAULT NULL,
  `ItemsQuantity` int DEFAULT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `grandbazar`
--

LOCK TABLES `grandbazar` WRITE;
/*!40000 ALTER TABLE `grandbazar` DISABLE KEYS */;
INSERT INTO `grandbazar` VALUES (1,'Men','Shirt',5),(2,'Men','T-shirt',5),(3,'Men','Jeans',5),(4,'Men','Loafers',5),(5,'Men','Shoes',5),(6,'Women','Sarees',5),(7,'Women','Tees',5),(8,'Women','Tops',5),(9,'Women','Kurtis',5),(10,'Women','Lehanga',5),(11,'Women','Bottoms',5),(12,'Women','Shoes',5),(13,'Women','Sandals',5),(14,'Home','Bedsheet',5),(15,'Home','Curtains',5),(16,'Home','Home Decor',5),(17,'Home','Cookware',5),(18,'Home','Tools',5),(19,'Home','Kitchen Storage',5),(20,'Beauty','Eye Makeup',5),(21,'Beauty','Face Makeup',5),(22,'Beauty','Hair Care',5),(23,'Beauty','Lip Care',5),(24,'Beauty','MakeUp Appliances',5),(25,'Beauty','Men Care',5),(26,'Beauty','Skin Care',5),(27,'Electronics','Laptop',5),(28,'Electronics','Headphones',5),(29,'Electronics','Tablet',5),(30,'Electronics','True Wireless',5),(31,'Appliances','AC',5),(32,'Appliances','Microwave',5),(33,'Appliances','Refrigerator',5),(34,'Appliances','TV',5),(35,'Appliances','Washing Machine',5),(36,'Mobiles','Apple',5),(37,'Mobiles','Vivo',5),(38,'Mobiles','Oppo',5),(39,'Mobiles','One Plus Nord',5),(40,'Mobiles','Redmi',5),(41,'Toys And Baby','Boy\'s Wear',5),(42,'Toys And Baby','Girl\'s Wear',5),(43,'Toys And Baby','Toys',5),(44,'Toys And Baby','Baby Care',5);
/*!40000 ALTER TABLE `grandbazar` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-07-16 15:19:28
