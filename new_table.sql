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
-- Table structure for table `new_table`
--

DROP TABLE IF EXISTS `new_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `new_table` (
  `usuario_id` int NOT NULL AUTO_INCREMENT,
  `usuario` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `Telefone` varchar(11) DEFAULT NULL,
  `Sexo` varchar(50) DEFAULT NULL,
  `Data1` datetime DEFAULT NULL,
  `isadmin` varchar(15) DEFAULT '0',
  PRIMARY KEY (`usuario_id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `new_table`
--

LOCK TABLES `new_table` WRITE;
/*!40000 ALTER TABLE `new_table` DISABLE KEYS */;
INSERT INTO `new_table` VALUES (1,'teste','teste@teste.com','teste',NULL,NULL,NULL,'0'),(2,'teste2','teste2@teste.com','teste2','123123','Masculino',NULL,'0'),(3,'teafads','fadskj@fdal.com','123',NULL,NULL,NULL,'0'),(4,'123','123@123.com','123',NULL,NULL,NULL,'0'),(5,'333333','3333333@3.com','123',NULL,NULL,NULL,'0'),(6,'11111','111@111.com','111',NULL,NULL,NULL,'0'),(7,'qqqqqq','q@q.com','q',NULL,NULL,NULL,'0'),(8,'00000','0@0.com','0',NULL,NULL,NULL,'0'),(9,'ssss','s@s.com','s',NULL,NULL,NULL,'0'),(10,'aaa','a@a.com','a',NULL,NULL,NULL,'0'),(11,'zzzzzzz','z@z.com','z',NULL,NULL,NULL,'0'),(12,'zzzzzzzzz','z@z.com','z',NULL,NULL,NULL,'0'),(13,'zx','zx@zx.com','zx',NULL,NULL,NULL,'0'),(14,'xz','xz@xz.com','xz',NULL,NULL,NULL,'0'),(15,'cx','cx@cx.com','cx',NULL,NULL,NULL,'0'),(16,'vvvv','v@v.com','v',NULL,NULL,NULL,'0'),(17,'kkkkkk','k@k.com','k',NULL,NULL,NULL,'0'),(18,'zxczxczxczxczx','czxczx@zxc.com','zxc',NULL,NULL,NULL,'0'),(19,'fr','fr@fg.com','f',NULL,NULL,NULL,'0'),(20,'teste2','teste2@teste.com','teste','123123','Masculino',NULL,'0'),(21,'jbfdal','fdals@dfhsai.com','123',NULL,NULL,NULL,'0'),(22,'dsad','0@000.com','0',NULL,NULL,NULL,'0'),(23,'fasdfd','teste2@teste.com','teste','123123','Masculino',NULL,'0'),(24,'','','',NULL,NULL,NULL,'0'),(25,'asd','','',NULL,NULL,NULL,'0'),(26,'','','',NULL,NULL,NULL,'0'),(27,'123','123@123.com','123',NULL,NULL,NULL,'0'),(28,'','','',NULL,NULL,NULL,'0'),(29,'pppppppp','p@p.com','p',NULL,NULL,NULL,'0'),(30,'teste3','teste3@teste.com','teste3',NULL,NULL,NULL,'0'),(31,'teste1431','teste5432@teste.com','1',NULL,NULL,NULL,'0'),(32,'Admin','admin@admin.com','admin',NULL,NULL,NULL,'1'),(33,'Gary','gardo@hotmailc.com','gardolara',NULL,NULL,NULL,'0'),(34,'teste10','teste10@teste.com','123',NULL,NULL,NULL,'0'),(35,'teste123','teste123@teste.com','123',NULL,NULL,NULL,'0'),(36,'ggggggggg','g@g.com','g',NULL,NULL,NULL,'0'),(37,'hhhhh','h@h.com','h',NULL,NULL,NULL,'0'),(38,'123321','123321@123321.com','123321',NULL,NULL,NULL,'0'),(39,'Allana','allana@atp.com','allana',NULL,NULL,NULL,'0'),(40,'Andre','andre@atp.com','andre',NULL,NULL,NULL,'0'),(41,'Gisele','gisele@atp.com','gisele',NULL,NULL,NULL,'0'),(42,'','','',NULL,NULL,NULL,'0'),(43,'Bryan','bryan@atp.com','bryan',NULL,NULL,NULL,'0'),(44,'Joao','joao@atp.com','joao',NULL,NULL,NULL,'0'),(45,'Joao','','123',NULL,NULL,NULL,'0'),(46,'Joao','joao@atp.com','joao',NULL,NULL,NULL,'0'),(47,'Joao','joao@atp.com','joao',NULL,NULL,NULL,'0'),(48,'Silvio','silvio@atp.com','silvio',NULL,NULL,NULL,'0'),(49,'Cleber','cleber@atp.com','cleber',NULL,NULL,NULL,'0'),(50,'Leonardo','leonardo@atp.com','leonardo','41999999999','Masculino',NULL,'0');
/*!40000 ALTER TABLE `new_table` ENABLE KEYS */;
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
