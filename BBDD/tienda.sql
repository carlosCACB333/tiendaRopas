CREATE DATABASE  IF NOT EXISTS `tienda_ropas` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_bin */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `tienda_ropas`;
-- MySQL dump 10.13  Distrib 8.0.21, for Win64 (x86_64)
--
-- Host: localhost    Database: tienda_ropas
-- ------------------------------------------------------
-- Server version	8.0.21

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
-- Table structure for table `categorias`
--

DROP TABLE IF EXISTS `categorias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categorias` (
  `id` int NOT NULL AUTO_INCREMENT,
  `categoria` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categorias`
--

LOCK TABLES `categorias` WRITE;
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
INSERT INTO `categorias` VALUES (1,'mujer'),(2,'hombre'),(3,'niño'),(4,'peruanos'),(5,'internacionales'),(6,'accesorios');
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categorias_sub_categorias`
--

DROP TABLE IF EXISTS `categorias_sub_categorias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categorias_sub_categorias` (
  `id` int NOT NULL AUTO_INCREMENT,
  `categorias_id` int DEFAULT NULL,
  `sub_categorias_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_categorias` (`categorias_id`),
  KEY `fk_sub_categorias` (`sub_categorias_id`),
  CONSTRAINT `categorias_sub_categorias_ibfk_1` FOREIGN KEY (`categorias_id`) REFERENCES `categorias` (`id`),
  CONSTRAINT `categorias_sub_categorias_ibfk_2` FOREIGN KEY (`sub_categorias_id`) REFERENCES `sub_categorias` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categorias_sub_categorias`
--

LOCK TABLES `categorias_sub_categorias` WRITE;
/*!40000 ALTER TABLE `categorias_sub_categorias` DISABLE KEYS */;
INSERT INTO `categorias_sub_categorias` VALUES (1,1,1),(2,1,2),(3,1,3),(4,1,4),(5,1,5),(6,1,6),(7,1,7),(8,1,8),(9,1,9),(10,1,10),(11,1,12),(12,2,1),(13,2,2),(14,2,3),(15,2,4),(16,2,5),(17,2,6),(18,2,7),(19,2,8),(20,2,9),(21,2,11),(22,2,12),(23,2,13),(24,3,1),(25,3,2),(26,3,3),(27,3,4),(28,3,5),(29,3,6),(30,3,7),(31,3,8),(32,3,9),(33,4,1),(34,4,2),(35,4,3),(36,4,4),(37,4,5),(38,4,6),(39,4,7),(40,4,8),(41,4,9),(42,4,10),(43,4,11),(44,4,12),(45,4,13),(46,5,1),(47,5,2),(48,5,3),(49,5,4),(50,5,5),(51,5,6),(52,5,7),(53,5,8),(54,5,9),(55,5,10),(56,5,11),(57,5,12),(58,5,13),(59,6,10),(60,6,11),(61,6,12),(62,6,13);
/*!40000 ALTER TABLE `categorias_sub_categorias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `detalle_pedidos`
--

DROP TABLE IF EXISTS `detalle_pedidos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `detalle_pedidos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `cantidad` int DEFAULT NULL,
  `productos_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_productos_detalle_pedidos` (`productos_id`),
  CONSTRAINT `detalle_pedidos_ibfk_1` FOREIGN KEY (`productos_id`) REFERENCES `productos` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detalle_pedidos`
--

LOCK TABLES `detalle_pedidos` WRITE;
/*!40000 ALTER TABLE `detalle_pedidos` DISABLE KEYS */;
/*!40000 ALTER TABLE `detalle_pedidos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `imagenes`
--

DROP TABLE IF EXISTS `imagenes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `imagenes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `ruta` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `productos_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_imagenes_productos_idx` (`productos_id`),
  CONSTRAINT `fk_imagenes_productos` FOREIGN KEY (`productos_id`) REFERENCES `productos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=283 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `imagenes`
--

LOCK TABLES `imagenes` WRITE;
/*!40000 ALTER TABLE `imagenes` DISABLE KEYS */;
INSERT INTO `imagenes` VALUES (1,'abrigo-manga-larga-27077 (1).jpg',5),(2,'abrigo-manga-larga-27077 (2).jpg',5),(3,'abrigo-manga-larga-27077 (3).jpg',5),(4,'abrigo-manga-larga-27077 (4).jpg',5),(5,'abrigo-manga-larga-27037 (1).jpg',6),(6,'abrigo-manga-larga-27037 (2).jpg',6),(7,'abrigo-manga-larga-27037.jpg',6),(8,'saco-manga-larga-27123 (1).jpg',7),(9,'saco-manga-larga-27123 (3).jpg',7),(10,'saco-manga-larga-27123 (4).jpg',7),(11,'saco-manga-larga-27123.jpg',7),(12,'abrigo-27081 (1).jpg',8),(13,'abrigo-27081 (2).jpg',8),(14,'abrigo-27081 (3).jpg',8),(15,'abrigo-27081 (4).jpg',8),(20,'kimono-manga-3-4-27042 (1).jpg',11),(21,'kimono-manga-3-4-27042 (2).jpg',11),(26,'chompa-manga-larga-27059 (1).jpg',14),(27,'chompa-manga-larga-27059 (3).jpg',14),(28,'chompa-manga-larga-27059.jpg',14),(30,'2015250706990-1.jpg',14),(31,'2015250706990-3.jpg',14),(32,'jean.jpg',14),(33,'2015230237605-1.jpg',14),(34,'2015230237605-2.jpg',14),(35,'2015230237605-3.jpg',14),(36,'2015208354617-1.jpg',14),(37,'2015208354617-2.jpg',14),(38,'2015208354617-3.jpg',14),(39,'2015232138351-1.jpg',14),(40,'2015232138351-2.jpg',14),(41,'2015232138351-3.jpg',14),(42,'2015232138351-4.jpg',14),(43,'pantalon-de-vestir-27062.jpg',14),(44,'pantalon-pitillo-26326 (1).jpg',14),(45,'pantalon-pitillo-26326.jpg',14),(46,'pantalon-denim-26306 (1).jpg',14),(47,'pantalon-denim-26306.jpg',14),(48,'pantalon-pescador- (1).jpg',14),(49,'pantalon-pescador-.jpg',14),(50,'2015251290825-2.jpg',14),(51,'2015251290825-3.jpg',14),(52,'vestido-manga-cero-26314 (1).jpg',14),(53,'vestido-manga-cero-26314.jpg',14),(54,'2072251357545-1.jpg',14),(55,'2072251357545-2.jpg',14),(56,'2072251357545-3.jpg',14),(57,'vestido-manga-34-28049 (1).jpg',14),(58,'vestido-manga-34-28049 (2).jpg',14),(59,'vestido-manga-34-28049.jpg',14),(60,'polo-manga-corta-28142 (1).jpg',14),(61,'polo-manga-corta-28142.jpg',14),(62,'polo-manga-corta-28141.jpg',14),(63,'',14),(64,'2074251329836-1.jpg',14),(65,'2074251329836-2.jpg',14),(66,'2074251329836-3.jpg',14),(67,'2015246200549-1.jpg',14),(68,'2015246200549-2.jpg',14),(69,'2015246200549-3.jpg',14),(70,'2074251385979-1.jpg',14),(71,'2074251385979-2.jpg',14),(72,'2074251385979-3.jpg',14),(73,'',14),(74,'42099022_1-eMRYNg0x.jpg',14),(75,'42099022_2-i-eFeA2i.jpg',14),(76,'',14),(77,'',14),(78,'2067228968855-2.jpg',14),(79,'2067228968855-3.jpg',14),(80,'2067226524473-2.jpg',14),(81,'2067226524473-3.jpg',14),(82,'TRIAL TERNO NEGRO.jpg',14),(83,'2067234671510-1.jpg',14),(84,'2067234671510-2.jpg',14),(85,'2067234671510-3.jpg',14),(86,'2067235829484-1.jpg',14),(87,'2067235829484-2.jpg',14),(88,'2067235829484-3.jpg',14),(89,'2067234671381-1.jpg',14),(90,'2067234671381-2.jpg',14),(91,'2067234671381-3.jpg',14),(92,'2016259009228-1 - copia.jpg',14),(93,'2016259009228-2 - copia.jpg',14),(94,'2016259009228-3 - copia.jpg',14),(95,'2016259009228-4 - copia.jpg',14),(96,'2005247551528-1.jpg',14),(97,'2005247551528-2.jpg',14),(98,'2005247551528-3.jpg',14),(99,'',14),(100,'2016251279902-1.jpg',14),(101,'2016251279902-2.jpg',14),(102,'2016251279902-3.jpg',14),(103,'2016258954154-1.jpg',14),(104,'2016217909676-1.jpg',14),(105,'2016217909676-2.jpg',14),(106,'2016217909676-3.jpg',14),(107,'2016172753635-1.jpg',14),(108,'2016172753635-2.jpg',14),(109,'2016172753635-3.jpg',14),(110,'2016233166947-1.jpg',14),(111,'2016233166947-2.jpg',14),(112,'2016233166947-3.jpg',14),(113,'2016254940694-1.jpg',14),(114,'2016254940694-2.jpg',14),(115,'2016246828252-1.jpg',14),(116,'2016246828252-2.jpg',14),(117,'2016246828252-3.jpg',14),(118,'2016242836091-1 - copia.jpg',14),(119,'2016242836091-1.jpg',14),(120,'2016242836091-2.jpg',14),(121,'2016246194326-1 - copia.jpg',14),(122,'2016246194326-2 - copia.jpg',14),(123,'2016246194326-4 - copia.jpg',14),(124,'2005246645891-1.jpg',14),(125,'2005246645891-2.jpg',14),(126,'2005246645891-3.jpg',14),(127,'2005247804211-1.jpg',14),(128,'2005247804211-2.jpg',14),(129,'2005247804211-3.jpg',14),(130,'2016239705904-1.jpg',14),(131,'2016239705904-2.jpg',14),(132,'2016239705904-3.jpg',14),(133,'2005179903228-1.jpg',14),(134,'2005179903228-2.jpg',14),(135,'2005179903228-3.jpg',14),(136,'2005196395815-1.jpg',14),(137,'2005196395815-2.jpg',14),(138,'2005196395815-3.jpg',14),(139,'2005223835765-1.jpg',14),(140,'2005223835765-2.jpg',14),(141,'2005223835765-3.jpg',14),(142,'2005225880732-1.jpg',14),(143,'2016181809798-1.jpg',14),(144,'2016181809798-2.jpg',14),(145,'2016181809798-3.jpg',14),(146,'2006247731781-1.jpg',14),(147,'2006247731781-2.jpg',14),(148,'2006247731781-3.jpg',14),(149,'2006247749922-1.jpg',14),(150,'2006247749922-2.jpg',14),(151,'2006247749922-3.jpg',14),(152,'2006246962414-1.jpg',14),(153,'2006246962414-2.jpg',14),(154,'2006246962414-3.jpg',14),(155,'2006237394026-1.jpg',14),(156,'2006237394026-2.jpg',14),(157,'2006237394026-3.jpg',14),(158,'2006245601581-1.jpg',14),(159,'2006245601581-2.jpg',14),(160,'2006245601581-3.jpg',14),(161,'2006245601581-4.jpg',14),(162,'2092251726653-1.jpg',14),(163,'2092251726653-2.jpg',14),(164,'2092251726806-1.jpg',14),(165,'2092246711329-1.jpg',14),(166,'2092246711329-2.jpg',14),(167,'2092252274221-1 - copia.jpg',14),(168,'2092252274221-2 - copia.jpg',14),(169,'2092252274221-3 - copia.jpg',14),(170,'2092252274221-4.jpg',14),(171,'2092246703539-1.jpg',14),(172,'2092246703539-2.jpg',14),(173,'2092246703539-3.jpg',14),(174,'2092251684939-1.jpg',14),(175,'2092251684939-2.jpg',14),(176,'2092251684939-3.jpg',14),(177,'2092252304843-1.jpg',14),(178,'2092252304843-2.jpg',14),(179,'2092252304843-3.jpg',14),(180,'2092214118105-1.jpg',14),(181,'2092214118105-2.jpg',14),(182,'',14),(183,'2092206244607-1.jpg',14),(184,'2092206244607-2.jpg',14),(185,'2092234884110_2.jpg',14),(186,'2092234884110-1.jpg',14),(187,'2092234884110-2.jpg',14),(188,'2092247013576-1.jpg',14),(189,'2092247013576-2.jpg',14),(190,'2092247013576-3.jpg',14),(191,'2092247013576-4.jpg',14),(192,'2092241784922-1.jpg',14),(193,'2092241784922-2.jpg',14),(194,'2061250253194-1.jpg',14),(195,'2061250253194-2.jpg',14),(196,'2061250253453-1.jpg',14),(197,'2061250253736-1.jpg',14),(198,'',14),(199,'',14),(200,'2092247003195-1.jpg',14),(201,'2092247003195-2.jpg',14),(202,'2092242845554-1.jpg',14),(203,'2092242845554-2.jpg',14),(204,'2092241847184-1.jpg',14),(205,'2092241847184-2.jpg',14),(206,'',14),(207,'',14),(208,'',14),(209,'2011251322283-1.jpg',14),(210,'2011251322283-2.jpg',14),(211,'2011251322283-3.jpg',14),(220,'polo-manga-corta-28142 (1).jpg',18),(221,'polo-manga-corta-28142.jpg',18),(248,'2015250284368-2.jpg',26),(249,'2015250284368-3.jpg',26),(250,'DANIELA.jpg',26),(276,'2092247003195_2.jpg',35),(277,'2092247003195-2.jpg',35),(278,'polo_ave_congreso.jpg',35),(279,'webescudonegro.jpg',35),(280,'hoodie_hueso_negro_mano.jpg',36),(281,'hoodie_negro_peruana.jpg',36),(282,'denim_hielo.jpg',36);
/*!40000 ALTER TABLE `imagenes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedidos`
--

DROP TABLE IF EXISTS `pedidos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pedidos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `estado` bigint DEFAULT '0',
  `usuarios_id` int DEFAULT NULL,
  `ventas_id` int DEFAULT NULL,
  `detalle_pedidos_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_usuarios_pedidos` (`usuarios_id`),
  KEY `fk_ventas_pedidos` (`ventas_id`),
  KEY `fk_detalle_pedidos_pedidos` (`detalle_pedidos_id`),
  CONSTRAINT `pedidos_ibfk_1` FOREIGN KEY (`usuarios_id`) REFERENCES `usuarios` (`id`),
  CONSTRAINT `pedidos_ibfk_2` FOREIGN KEY (`ventas_id`) REFERENCES `ventas` (`id`),
  CONSTRAINT `pedidos_ibfk_3` FOREIGN KEY (`detalle_pedidos_id`) REFERENCES `detalle_pedidos` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedidos`
--

LOCK TABLES `pedidos` WRITE;
/*!40000 ALTER TABLE `pedidos` DISABLE KEYS */;
/*!40000 ALTER TABLE `pedidos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productos`
--

DROP TABLE IF EXISTS `productos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `productos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `producto` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `codigo` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `imagen` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `precio` double DEFAULT NULL,
  `stock` int DEFAULT NULL,
  `descuento` double DEFAULT '0',
  `talla` varchar(3) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `color` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `detalle` text CHARACTER SET utf8 COLLATE utf8_bin,
  `categorias_subcategorias_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_productos_categorias_idx` (`categorias_subcategorias_id`),
  CONSTRAINT `fk_productos_categorias` FOREIGN KEY (`categorias_subcategorias_id`) REFERENCES `categorias_sub_categorias` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productos`
--

LOCK TABLES `productos` WRITE;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` VALUES (5,'ABRIGO 27077','27077','abrigo-manga-larga-27077 (1).jpg',100,20,60,'L','#000000','Abrigo en corte canesú\r\nPespuntes decorativos anchos \r\n5 botones en el centro delantero\r\nGalón en la manga',9),(6,'ABRIGO 27037','27037','abrigo-manga-larga-27037.jpg',119.97,30,20,'M','#918888','Abrigo con cuello nerú\r\nDoble cruce con cortes verticales\r\nBolsillos con aplicación de sesgo contraste. \r\nFajín y pliegue en la espalda.\r\nTela paño',9),(7,'SACO MANGA LARGA 27123','27123','saco-manga-larga-27123.jpg',101.97,50,40,'L','#9a046b','Saco con doble botonadura, lleva galones en hombros y mangas.\r\nCon abertura en el faldón de la espalda y galón en espalda.\r\nCon botones decorativos.\r\nTela Paño.',9),(8,'ABRIGO 27081','27081','abrigo-27081 (1).jpg',119.97,10,45,'M','#a2810b','Con solapa y con doble abotonadura\r\nLleva cuello de peluche desglosable\r\nCon galón y pliegue en el faldón espalda\r\nTela paño',9),(11,'KIMONO MANGA 3/4 27042','27042','kimono-manga-3-4-27042.jpg',200,40,50,'L','#716f6f','Kimono con solapa smoking.\r\nManga 3/4 regulable.\r\nTela gasa estampada.',9),(14,'CHOMPA 27059','27059','chompa-manga-larga-27059 (2).jpg',120.99,20,10,'M','#fff0f0','chopa cool',9),(18,'POLO','10233','POLO.jpg',28.9,5,50,'M','#000000','POLO A LA MODA',8),(26,'BLUSA MANGA CORTA ','10229','2015250284368_2.jpg',69.95,3,50,'M','#d6d920','BLUSAS',7),(35,'CASACA APLES','10124','2092247003195-1.jpg',65.5,4,45,'16','#e13d3d','CASACAS',32),(36,'POLERAS','73467','hoodie_rojo_peruano-570x713.jpg',129.9,3,45,'M','#000000','POLERAS',41);
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sub_categorias`
--

DROP TABLE IF EXISTS `sub_categorias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sub_categorias` (
  `id` int NOT NULL AUTO_INCREMENT,
  `sub_categoria` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sub_categorias`
--

LOCK TABLES `sub_categorias` WRITE;
/*!40000 ALTER TABLE `sub_categorias` DISABLE KEYS */;
INSERT INTO `sub_categorias` VALUES (1,'gala'),(2,'jeans'),(3,'ropa interior'),(4,'pantalones'),(5,'zapatos'),(6,'zapatillas'),(7,'camisas'),(8,'polos'),(9,'casacas'),(10,'carteras'),(11,'billeteras'),(12,'lentes '),(13,'reloj');
/*!40000 ALTER TABLE `sub_categorias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `apellido` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `clave` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `dni` varchar(8) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `celular` varchar(9) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `direccion` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `imagen` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (4,'jason','solano pillaca','solano@gmail.com','81dc9bdb52d04dc20036dbd8313ed055','74388365','913472875','av. universitaria  ub. los portales de monerrey','Sin título1.png'),(5,'CARLOS ANTONIO','BLAS','carlosCACB333@gmail.com','81dc9bdb52d04dc20036dbd8313ed055','74391459','913472875','av los angeles','IMG_4110 (2).JPG'),(6,'jorje','luis','jorje@gmail.com','81dc9bdb52d04dc20036dbd8313ed055','74388311','913472873','HUARAZ','2.png'),(7,'admin','admin','admin@gmail.com','21232f297a57a5a743894a0e4a801fc3','74589632','913472873','av los angeles','squirrel-5423329_1920.jpg'),(8,'admin','admin','admin@gmail.com','202cb962ac59075b964b07152d234b70','74589632','913472873','av los angeles','facebook.png'),(9,'admin','admin','admin@gmail.com','202cb962ac59075b964b07152d234b70','74589632','913472873','av los angeles','facebook.png'),(10,'admin','admin','admin@gmail.com','202cb962ac59075b964b07152d234b70','74391459','913472873','av los angeles','facebook.png'),(11,'admin','admin','admin@gmail.com','202cb962ac59075b964b07152d234b70','74391459','913472873','av los angeles','facebook.png'),(12,'admin','admin','admin@gmail.com','202cb962ac59075b964b07152d234b70','74391459','913472873','av los angeles','facebook.png'),(13,'jamil','chupetin','chupetin@gmail.com','202cb962ac59075b964b07152d234b70','74391459','asd','q','WhatsApp Image 2020-10-26 at 6.18.30 PM (1).jpeg'),(14,'puc','garro','puc@gamil.com','81dc9bdb52d04dc20036dbd8313ed055','74391459','913472873','av los angeles','6.jpg'),(15,'alberto','sifuentes','albertito@gamil.com','81dc9bdb52d04dc20036dbd8313ed055','74391459','913472873','av. universitaria  ub. los portales de monerrey','9.jpg'),(16,'emma','watson','emma@gmail.com','81dc9bdb52d04dc20036dbd8313ed055','74391459','913472873','av los angeles','881448867_3.jpg');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary view structure for view `v_productos`
--

DROP TABLE IF EXISTS `v_productos`;
/*!50001 DROP VIEW IF EXISTS `v_productos`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `v_productos` AS SELECT 
 1 AS `id`,
 1 AS `producto`,
 1 AS `codigo`,
 1 AS `imagen`,
 1 AS `precio`,
 1 AS `stock`,
 1 AS `descuento`,
 1 AS `talla`,
 1 AS `color`,
 1 AS `detalle`,
 1 AS `categoria`,
 1 AS `sub_categoria`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `ventas`
--

DROP TABLE IF EXISTS `ventas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ventas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fecha` datetime DEFAULT CURRENT_TIMESTAMP,
  `igv` double DEFAULT '18',
  `monto` double DEFAULT NULL,
  `tipo_pago` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT 'contado',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ventas`
--

LOCK TABLES `ventas` WRITE;
/*!40000 ALTER TABLE `ventas` DISABLE KEYS */;
/*!40000 ALTER TABLE `ventas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'tienda_ropas'
--

--
-- Dumping routines for database 'tienda_ropas'
--

--
-- Final view structure for view `v_productos`
--

/*!50001 DROP VIEW IF EXISTS `v_productos`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_0900_ai_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `v_productos` AS select `p`.`id` AS `id`,`p`.`producto` AS `producto`,`p`.`codigo` AS `codigo`,`p`.`imagen` AS `imagen`,`p`.`precio` AS `precio`,`p`.`stock` AS `stock`,`p`.`descuento` AS `descuento`,`p`.`talla` AS `talla`,`p`.`color` AS `color`,`p`.`detalle` AS `detalle`,`a`.`categoria` AS `categoria`,`c`.`sub_categoria` AS `sub_categoria` from (((`categorias` `a` join `categorias_sub_categorias` `b` on((`a`.`id` = `b`.`categorias_id`))) join `sub_categorias` `c` on((`b`.`sub_categorias_id` = `c`.`id`))) join `productos` `p` on((`p`.`categorias_subcategorias_id` = `b`.`id`))) */;
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

-- Dump completed on 2020-12-16 20:21:26
