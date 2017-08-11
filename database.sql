-- MySQL dump 10.13  Distrib 5.5.55, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: polleriasis
-- ------------------------------------------------------
-- Server version	5.5.55-0ubuntu0.14.04.1

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
-- Current Database: `polleriasis`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `polleriasis` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `polleriasis`;

--
-- Table structure for table `articulo`
--

DROP TABLE IF EXISTS `articulo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `articulo` (
  `idarticulo` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(45) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `stock` varchar(45) DEFAULT NULL,
  `descripcion` text,
  `estado` varchar(45) DEFAULT NULL,
  `imagen` varchar(45) DEFAULT NULL,
  `idcategoria` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`idarticulo`),
  KEY `fk_articulo_categoria1_idx` (`idcategoria`),
  CONSTRAINT `fk_articulo_categoria1` FOREIGN KEY (`idcategoria`) REFERENCES `categoria` (`idcategoria`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articulo`
--

LOCK TABLES `articulo` WRITE;
/*!40000 ALTER TABLE `articulo` DISABLE KEYS */;
INSERT INTO `articulo` VALUES (1,'12','shampoo herbal essencies x 300mls','5','shampoo herbal essencies x 300mls','Activo','jabonessences.jpg',3,NULL,'2017-06-29 21:35:47'),(2,'13','jabon liquido ace x3lts','5','jabon liquido ace x3lts ','Activo','jabonliquidoace.jpg',3,'0000-00-00 00:00:00','2017-06-20 02:15:03'),(3,'111','jabon la mariposa','25','javon pra labar la cola','Activo','jabon de lavar.jpg',3,'2017-06-14 07:26:09','2017-06-22 17:32:17');
/*!40000 ALTER TABLE `articulo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categoria`
--

DROP TABLE IF EXISTS `categoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categoria` (
  `idcategoria` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `descripcion` varchar(445) DEFAULT NULL,
  `condicion` tinyint(1) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`idcategoria`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categoria`
--

LOCK TABLES `categoria` WRITE;
/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
INSERT INTO `categoria` VALUES (1,'avon','productos avon',0,'2017-06-15 16:29:27','0000-00-00 00:00:00'),(2,'pollos','pollos por kilo',0,'2017-06-15 16:29:31','0000-00-00 00:00:00'),(3,'Jabon','Jabon ',1,'2017-06-18 18:47:05',NULL),(4,'Cerveza','Cerveza',1,'2017-06-18 18:47:15','2017-06-18 18:47:15'),(5,'Cigarrillos','Cigarrillos',1,'2017-06-18 18:47:33','2017-06-18 18:47:33'),(6,'Lacteos','Lacteos',1,'2017-06-18 18:47:57','2017-06-18 18:47:57'),(7,'Gaseosas','Gaseosas con gas',1,'2017-06-18 18:48:22','2017-06-18 18:48:22'),(8,'Agua','Agua sin gas',1,'2017-06-18 18:48:33','2017-06-18 18:48:33'),(9,'Agua min','Agua sin gas',1,'2017-06-22 17:27:04','2017-06-22 17:26:52');
/*!40000 ALTER TABLE `categoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `detalle_ingreso`
--

DROP TABLE IF EXISTS `detalle_ingreso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detalle_ingreso` (
  `iddetalle_articulo` int(11) NOT NULL AUTO_INCREMENT,
  `idarticulo` int(11) NOT NULL,
  `idingreso` int(11) NOT NULL,
  `cantidad` varchar(45) DEFAULT NULL,
  `precio_compra` decimal(11,2) DEFAULT NULL,
  `precio_venta` decimal(11,2) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`iddetalle_articulo`,`idarticulo`,`idingreso`),
  KEY `fk_articulo_has_ingreso_ingreso1_idx` (`idingreso`),
  KEY `fk_articulo_has_ingreso_articulo1_idx` (`idarticulo`),
  CONSTRAINT `fk_articulo_has_ingreso_articulo1` FOREIGN KEY (`idarticulo`) REFERENCES `articulo` (`idarticulo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_articulo_has_ingreso_ingreso1` FOREIGN KEY (`idingreso`) REFERENCES `ingreso` (`idingreso`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detalle_ingreso`
--

LOCK TABLES `detalle_ingreso` WRITE;
/*!40000 ALTER TABLE `detalle_ingreso` DISABLE KEYS */;
INSERT INTO `detalle_ingreso` VALUES (8,3,7,'10',15.00,17.00,'2017-06-18 19:22:04','2017-06-18 19:22:04'),(9,2,7,'15',120.00,125.00,'2017-06-18 19:22:04','2017-06-18 19:22:04'),(10,1,8,'20',15.00,17.00,'2017-06-18 21:59:06','2017-06-18 21:59:06'),(11,1,9,'20',17.00,20.00,'2017-06-18 22:01:17','2017-06-18 22:01:17'),(12,3,10,'4',8.00,10.00,'2017-06-20 01:52:41','2017-06-20 01:52:41'),(13,2,10,'5',120.00,150.00,'2017-06-20 01:52:41','2017-06-20 01:52:41'),(14,2,11,'21',12.00,12.00,'2017-06-29 21:34:03','2017-06-29 21:34:03'),(15,3,11,'12',23.00,34.00,'2017-06-29 21:34:03','2017-06-29 21:34:03');
/*!40000 ALTER TABLE `detalle_ingreso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `detalle_venta`
--

DROP TABLE IF EXISTS `detalle_venta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detalle_venta` (
  `idarticulo` int(11) NOT NULL AUTO_INCREMENT,
  `idventa` int(11) NOT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `precio_venta` decimal(11,2) DEFAULT NULL,
  `descuento` decimal(11,2) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`idarticulo`,`idventa`),
  KEY `fk_articulo_has_venta_venta1_idx` (`idventa`),
  KEY `fk_articulo_has_venta_articulo1_idx` (`idarticulo`),
  CONSTRAINT `fk_articulo_has_venta_articulo1` FOREIGN KEY (`idarticulo`) REFERENCES `articulo` (`idarticulo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_articulo_has_venta_venta1` FOREIGN KEY (`idventa`) REFERENCES `venta` (`idventa`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detalle_venta`
--

LOCK TABLES `detalle_venta` WRITE;
/*!40000 ALTER TABLE `detalle_venta` DISABLE KEYS */;
INSERT INTO `detalle_venta` VALUES (1,36,5,17.00,0.00,'2017-06-29 21:35:47','2017-06-29 21:35:47'),(2,32,1,125.00,0.00,'2017-06-18 21:57:40','2017-06-18 21:57:40'),(2,34,5,125.00,0.00,'2017-06-20 02:15:03','2017-06-20 02:15:03'),(3,33,10,17.00,0.00,'2017-06-18 21:58:16','2017-06-18 21:58:16'),(3,34,2,17.00,0.00,'2017-06-20 02:15:03','2017-06-20 02:15:03'),(3,35,3,17.00,0.00,'2017-06-22 17:32:17','2017-06-22 17:32:17');
/*!40000 ALTER TABLE `detalle_venta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ingreso`
--

DROP TABLE IF EXISTS `ingreso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ingreso` (
  `idingreso` int(11) NOT NULL AUTO_INCREMENT,
  `idproveedor` int(11) NOT NULL,
  `tipo_comprobante` varchar(45) DEFAULT NULL,
  `serie_comprobante` varchar(45) DEFAULT NULL,
  `num_comprobante` varchar(45) DEFAULT NULL,
  `fecha_hora` datetime DEFAULT NULL,
  `impuesto` decimal(4,2) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`idingreso`),
  KEY `fk_ingreso_persona1_idx` (`idproveedor`),
  CONSTRAINT `fk_ingreso_persona1` FOREIGN KEY (`idproveedor`) REFERENCES `persona` (`idpersona`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ingreso`
--

LOCK TABLES `ingreso` WRITE;
/*!40000 ALTER TABLE `ingreso` DISABLE KEYS */;
INSERT INTO `ingreso` VALUES (7,2,'Factura','001','001','2017-06-18 16:22:04',18.00,'A','2017-06-18 19:22:04','2017-06-18 19:22:04'),(8,4,'Factura','2121','1212','2017-06-18 18:59:06',18.00,'A','2017-06-18 21:59:06','2017-06-18 21:59:06'),(9,3,'Factura','23','43','2017-06-18 19:01:17',18.00,'A','2017-06-18 22:01:17','2017-06-18 22:01:17'),(10,3,'Boleta','0003','004','2017-06-19 22:52:40',18.00,'A','2017-06-20 01:52:41','2017-06-20 01:52:41'),(11,4,'Factura','23123','123123','2017-06-29 18:34:03',18.00,'A','2017-06-29 21:34:03','2017-06-29 21:34:03');
/*!40000 ALTER TABLE `ingreso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES ('2014_10_12_000000_create_users_table',1),('2014_10_12_100000_create_password_resets_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
INSERT INTO `password_resets` VALUES ('5942987a580b0@mailbox92.biz','38e125fab494ca1cbe5a2ccdc5d5e6a9225d3ac903605598d627962fe8677dca','2017-06-15 17:27:33');
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `persona`
--

DROP TABLE IF EXISTS `persona`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `persona` (
  `idpersona` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_persona` varchar(45) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `tipo_documento` varchar(45) DEFAULT NULL,
  `num_documento` varchar(45) DEFAULT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`idpersona`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `persona`
--

LOCK TABLES `persona` WRITE;
/*!40000 ALTER TABLE `persona` DISABLE KEYS */;
INSERT INTO `persona` VALUES (1,'Inactivo','jose','PAS','12121','nose','3232','jose@gmal','2017-06-22 17:28:58',NULL),(2,'Inactivo','pedro','dni','23232','jamas','23232','m@gma','2017-06-20 01:18:50',NULL),(3,'proveedor','gomez pardo','DNI','111231231231',' Av. Brigido Teran 700','38146792931','gomepardo@gmail.com','2017-06-18 18:55:29','2017-06-18 18:55:29'),(4,'proveedor','emilio luque','DNI','332312442','Autopista Tucumán Famailla Km 803 (Los Vazque','03814516600 ','emilio@gmail.com','2017-06-18 18:57:16','2017-06-18 18:57:16'),(5,'cliente','tamara','DNI','233444543','san martin 123','381299304','tamara@gmail.com','2017-06-18 19:00:47','2017-06-18 19:00:47');
/*!40000 ALTER TABLE `persona` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Franco','franco@gmail.com','$2y$10$.2pVROTbsJ32s2aIsdvvTuvMjDjHRboY75jCIeoMeBWXBPO71uIC6','3s6Js6EpyKpXwonYWrQDpfKel29358E44HnYRZWoeFEO2MY6Enl6AHVANbmR','2017-06-14 21:14:14','2017-06-30 00:31:41'),(3,'sole','sole@gmail.com','$2y$10$VyCfUL8aa8J6yEAR6MHRU.1pg30zOvNl4PLtu0dEYbACivK72A9QK',NULL,'2017-06-15 18:56:51','2017-06-15 18:56:51'),(4,'pepe1','pepe1@gmail.com','123456',NULL,'2017-06-15 18:58:33','2017-06-20 05:42:25');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `venta`
--

DROP TABLE IF EXISTS `venta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `venta` (
  `idventa` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_comprobante` varchar(45) DEFAULT NULL,
  `serie_comprobante` varchar(45) DEFAULT NULL,
  `num_comprobante` varchar(45) DEFAULT NULL,
  `fecha_hora` datetime DEFAULT NULL,
  `impuesto` decimal(4,2) DEFAULT NULL,
  `total_venta` decimal(11,2) DEFAULT NULL,
  `estado` varchar(20) DEFAULT NULL,
  `idpersona` int(11) NOT NULL DEFAULT '0',
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`idventa`,`idpersona`),
  KEY `fk_venta_persona1_idx` (`idpersona`),
  CONSTRAINT `fk_venta_persona1` FOREIGN KEY (`idpersona`) REFERENCES `persona` (`idpersona`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `venta`
--

LOCK TABLES `venta` WRITE;
/*!40000 ALTER TABLE `venta` DISABLE KEYS */;
INSERT INTO `venta` VALUES (32,'Tikect','0001','002','2017-06-18 18:57:40',18.00,125.00,'A',5,'2017-06-18 21:57:40','2017-06-18 21:57:40'),(33,'Tikect','232','233','2017-06-18 18:58:16',18.00,170.00,'A',1,'2017-06-18 21:58:16','2017-06-18 21:58:16'),(34,'Tikect','001','002','2017-06-19 23:15:03',18.00,659.00,'A',5,'2017-06-20 02:15:03','2017-06-20 02:15:03'),(35,'Tikect','003','003','2017-06-22 14:32:17',18.00,51.00,'A',5,'2017-06-22 17:32:17','2017-06-22 17:32:17'),(36,'Boleta','23232','32323','2017-06-29 18:35:47',18.00,85.00,'A',5,'2017-06-29 21:35:47','2017-06-29 21:35:47');
/*!40000 ALTER TABLE `venta` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-07-10 15:00:49
