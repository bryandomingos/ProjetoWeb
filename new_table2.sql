-- MySQL dump 10.13  Distrib 8.0.30, for Win64 (x86_64)
--
-- Host: localhost    Database: login
-- ------------------------------------------------------
-- Server version	8.0.30

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
-- Table structure for table `new_table2`
--

DROP TABLE IF EXISTS `new_table2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `new_table2` (
  `id` int NOT NULL AUTO_INCREMENT,
  `usuario` varchar(50) DEFAULT NULL,
  `item` varchar(50) NOT NULL,
  `data2` varchar(50) DEFAULT NULL,
  `data3` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `devolvido` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `new_table2`
--

LOCK TABLES `new_table2` WRITE;
/*!40000 ALTER TABLE `new_table2` DISABLE KEYS */;
INSERT INTO `new_table2` VALUES (70,'Allana','Livro','2022-11-20','2022-11-26 14:51:32','allana@atp.com',NULL),(71,'Allana','Caneta','2022-11-26 14:52:38','2022-11-26 14:52:28','allana@atp.com','1'),(72,'Allana','Lapis','2022-11-29','2022-11-26 14:53:00','allana@atp.com','0'),(73,'Andre','Livro','2022-11-23','2022-11-26 14:54:58','andre@atp.com',NULL),(74,'Andre','Papel A4','2022-11-26 14:56:11','2022-11-26 14:56:01','andre@atp.com','1'),(75,'Gisele','Atlas','2022-11-26','2022-11-26 14:57:46','gisele@atp.com',NULL),(76,'Cleber','TV','2022-11-27 12:49:03','2022-11-27 12:48:47','cleber@atp.com','1'),(78,'Leonardo','Relogio','2022-11-27 12:53:30','2022-11-27 12:53:01','leonardo@atp.com','1');
/*!40000 ALTER TABLE `new_table2` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-11-27 13:51:32
