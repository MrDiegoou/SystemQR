-- MySQL dump 10.13  Distrib 8.0.36, for Win64 (x86_64)
--
-- Host: localhost    Database: system_qr
-- ------------------------------------------------------
-- Server version	8.0.36

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
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `nombres` VARCHAR(50) NOT NULL,
    `apellidos` VARCHAR(50) NOT NULL,
    `cedula` INT NOT NULL,
    `ingreso` VARCHAR(50) NOT NULL,
    `area` VARCHAR(50) NOT NULL,
    `eps` VARCHAR(50) NOT NULL,
    `numero` CHAR(10) NOT NULL,
    `fecha` DATE NOT NULL,
    `hora` TIME NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'Prueba','uno',1343587664,'Ingreso','Administración y Financiera','Famisanar','3216580975','2024-03-18','15:33:57'),(2,'ak','aisaisi',1234567890,'Salida','Talento Humano','Salud Total','123456789','2024-03-19','12:38:10'),(3,'asadsfghj','wertyui',1234567890,'Ingreso','Talento Humano','Salud Total','1234567890','2024-03-19','12:38:42'),(4,'wertyuxzcfcg','sadfghjkl',1234567890,'Salida','Talento Humano','Sura','1234567890','2024-03-19','12:39:02'),(5,'sadfgdhsg','dewfgedhde',1234567890,'Salida','Operación Logística','Sura','1234567890','2024-03-19','12:39:15'),(6,'asdfg','scdfghj',1234567890,'Ingreso','BI','Compensar','1234567890','2024-03-19','12:39:35'),(7,'asdffgxfhgxdfhds','sdghxjcgh',1234567890,'Ingreso','Trade y BTL','EPM','1234567890','2024-03-19','12:39:49'),(8,'asdsdfadfgadfgadf','adsfdfgdfghdfhd',1234567890,'Ingreso','Talento Humano','Capital Salud','1234567890','2024-03-19','12:40:02'),(9,'asdfghjkliuoyutfdghc','xcvbnmhjgfdsvcbn',1234567890,'Salida','Administración y Financiera','Famisanar','1234567890','2024-03-19','12:40:18'),(10,'a','a',1234567890,'Ingreso','Administración y Financiera','Sura','1234567890','2024-03-20','08:35:16'),(11,'as','sa',1234567890,'Ingreso','Operación Logística','Comfamiliar Guajira','1234567890','2024-03-20','08:44:41'),(12,'asas','asas',12345678,'Ingreso','Operación Logística','Compensar','1234567890','2024-03-20','16:37:08'),(13,'as','as',1234567,'Salida','Administración y Financiera','Comfamiliar Guajira','1234567890','2024-03-20','16:37:54'),(14,'as','as',4251890,'Salida','Talento Humano','Sura','1234567890','2024-03-20','16:38:22');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-03-20 16:41:41
