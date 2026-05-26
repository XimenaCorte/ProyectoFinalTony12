-- MySQL dump 10.13  Distrib 8.0.45, for Linux (x86_64)
--
-- Host: localhost    Database: tony12
-- ------------------------------------------------------
-- Server version	8.0.45-0ubuntu0.24.04.1

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
-- Table structure for table `articulos`
--

DROP TABLE IF EXISTS `articulos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `articulos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `precio` decimal(10,2) DEFAULT NULL,
  `stock` int DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articulos`
--

LOCK TABLES `articulos` WRITE;
/*!40000 ALTER TABLE `articulos` DISABLE KEYS */;
INSERT INTO `articulos` VALUES (1,'Cuaderno Profesional de Rayas','100 hojas',45.50,20),(2,'Cuaderno Profesional de Cuadro Chico','100 hojas',47.00,20),(3,'Pluma Azul','Tinta tipo gel con punta fina',10.00,35),(4,'Pluma Roja','Tinta tipo gel con punta fina',12.00,35),(5,'Pluma Negra','Tinta tipo gel con punta fina',9.50,35),(6,'Làpiz Maped','Tipo grafito',5.00,54),(7,'Goma de Borrar','Tipo migajon',7.00,40),(8,'Marcatexto Amarillo','Color flourescente de punta gruesa',20.00,27),(9,'Marcatexto Azul','Color flourescente de punta gruesa',20.00,27),(10,'Paquete de Plumones para Pizarròn','Tipo agua de diversos colores',98.50,29),(11,'Carpeta Tamaño Carta','Color paja de cartulina',15.00,50),(12,'Regla 30cm','Transparente',27.00,39),(13,'Sacapuntas','Metàlico con 2 aberturas',8.50,44),(14,'Pegamento en barra','No tòxico',17.00,22),(15,'Cartulina Grande','De diversos colores',8.00,12),(16,'Perforadora','Metàlica de 10 hoyos para A4/a5/b5',147.00,39),(17,'Calculadora Cientìfica','Funciones avanzadas con graficaciòn',250.00,56),(18,'Corrector en Cinta','De secado ràpido',17.00,37),(19,'Crayones','Caja con 24 piezas gruesos',73.00,50),(20,'Papel Bond','Grande de color blanco cuadriculado',15.00,80),(21,'Tijeras Escolares para Zurdos','De punta redonda',37.50,29),(22,'Tijeras Profesionales','De acero inoxidable',62.00,30),(23,'Tijeras Escolares','De punta redonda',34.00,55),(24,'Posting Adhesivo','De papel con diversos colores',20.00,60),(25,'Juego de Geometrìa','De plàstico, transparente de diversos colores',81.50,77),(26,'Corrector Lìquido','De color blanco en forma de lapiz con punta de metal',17.00,27),(27,'Làmina de Animales','Animales Terrestres',5.00,11),(28,'Làmina de Animales','Animales Acuaticos',5.00,12),(29,'Làmina de Animales','Aves',5.00,17),(30,'Làmina Personajes Històricos Mexicanos','Niños heroes de Chapultepec',7.00,20),(31,'Làmina Personajes Històricos Mexicanos','Heroes de la Independencia',7.00,23),(32,'Làmina Personajes Històricos Mexicanos','Leyendas',7.00,21),(33,'Paquete de Acuarelas','De 12 pastillas y pincel incluido',56.00,50),(34,'Paquete de Pinceles','Diversos tamaños y de madera',87.00,39),(35,'Paquete de Pinceles','Diversos tamaños y de plàstico',66.00,41),(36,'Mochila Grande','Material resistente, de diversos diseños',300.00,90),(37,'Lonchera','Material resistente, de diversos diseños',128.00,70),(38,'Lapicera','Material resistente (metal), de diversos diseños',134.00,88),(39,'Lapicera','Material resistente (tela), de diversos diseños',115.00,95),(40,'Figuras para Maqueta','De plàstico con temàtica de Animales de la selva',70.00,40),(41,'Figuras para Maqueta','De plàstico con temàtica de Futbol',30.00,25),(42,'Figuras para Maqueta','De plàstico con temàtica de Cultura Maya',80.00,60),(43,'Figuras para Maqueta','De plàstico con temàtica de Cultura Zapoteca',65.00,64),(44,'Figuras para Maqueta','De plàstico con temàtica de Arquitectura',71.00,33),(45,'Paquete de Tachuelas','De diversos colores con 50 piezas',65.00,27),(46,'Bote de Resistol','De tamaño grande, lpiquido y de color blanco',23.00,49),(47,'Barra de silicòn','De grosor delgado',3.00,86),(48,'Barra de silicòn','De grosor grande',8.00,52),(49,'Pistola de silicòn','Para barra delgada de plàstico',61.00,28),(50,'Pistola de silicòn','Para barra grande de plàstico',88.50,24);
/*!40000 ALTER TABLE `articulos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-05-23 22:37:13
