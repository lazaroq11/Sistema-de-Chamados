-- MySQL dump 10.13  Distrib 8.0.17, for Win64 (x86_64)
--
-- Host: localhost    Database: bancolp3
-- ------------------------------------------------------
-- Server version	5.7.8-rc-log

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
-- Table structure for table `chamado`
--

DROP TABLE IF EXISTS `chamado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `chamado` (
  `id_chamado` int(11) NOT NULL AUTO_INCREMENT,
  `estado_att_chamado` varchar(45) NOT NULL,
  `data_att_estado` varchar(45) NOT NULL,
  `cpf_usuario_chamado` int(11) NOT NULL,
  `id_historico` int(11) NOT NULL,
  PRIMARY KEY (`id_chamado`),
  KEY `id_historico_idx` (`id_historico`),
  KEY `cpf_usuario_chamado_idx` (`cpf_usuario_chamado`),
  CONSTRAINT `cpf_usuario_chamado` FOREIGN KEY (`cpf_usuario_chamado`) REFERENCES `usuario` (`cpf_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `id_historico` FOREIGN KEY (`id_historico`) REFERENCES `historico` (`id_historico`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chamado`
--

LOCK TABLES `chamado` WRITE;
/*!40000 ALTER TABLE `chamado` DISABLE KEYS */;
/*!40000 ALTER TABLE `chamado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gerente`
--

DROP TABLE IF EXISTS `gerente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `gerente` (
  `cpf_gerente` int(11) NOT NULL,
  `nome_gerente` varchar(45) NOT NULL,
  `email_gerente` varchar(45) NOT NULL,
  `codigo_setor_gerente` int(11) NOT NULL,
  `id_login_gerente` int(11) NOT NULL,
  PRIMARY KEY (`cpf_gerente`),
  KEY `id_login_gerente_idx` (`id_login_gerente`),
  KEY `codigo_setor_gerente_idx` (`codigo_setor_gerente`),
  CONSTRAINT `codigo_setor_gerente` FOREIGN KEY (`codigo_setor_gerente`) REFERENCES `setor` (`codigo_setor`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `id_login_gerente` FOREIGN KEY (`id_login_gerente`) REFERENCES `login` (`id_login`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gerente`
--

LOCK TABLES `gerente` WRITE;
/*!40000 ALTER TABLE `gerente` DISABLE KEYS */;
/*!40000 ALTER TABLE `gerente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `historico`
--

DROP TABLE IF EXISTS `historico`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `historico` (
  `id_historico` int(11) NOT NULL AUTO_INCREMENT,
  `data_estados` date NOT NULL,
  `horario_estados` time NOT NULL,
  `cpf_usuario_historico` int(11) NOT NULL,
  PRIMARY KEY (`id_historico`),
  KEY `cpf_usuario_historico_idx` (`cpf_usuario_historico`),
  CONSTRAINT `cpf_usuario_historico` FOREIGN KEY (`cpf_usuario_historico`) REFERENCES `usuario` (`cpf_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `historico`
--

LOCK TABLES `historico` WRITE;
/*!40000 ALTER TABLE `historico` DISABLE KEYS */;
/*!40000 ALTER TABLE `historico` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `login` (
  `id_login` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` int(11) NOT NULL,
  `senha` int(11) NOT NULL,
  PRIMARY KEY (`id_login`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login`
--

LOCK TABLES `login` WRITE;
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
/*!40000 ALTER TABLE `login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `setor`
--

DROP TABLE IF EXISTS `setor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `setor` (
  `codigo_setor` int(11) NOT NULL,
  `nome_setor` varchar(45) NOT NULL,
  `tel_setor` int(11) NOT NULL,
  `email` varchar(25) NOT NULL,
  `cpf_funcionario` int(11) NOT NULL,
  PRIMARY KEY (`codigo_setor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `setor`
--

LOCK TABLES `setor` WRITE;
/*!40000 ALTER TABLE `setor` DISABLE KEYS */;
/*!40000 ALTER TABLE `setor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tecnico`
--

DROP TABLE IF EXISTS `tecnico`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tecnico` (
  `cpf_tecnico` int(11) NOT NULL,
  `nome_tecnico` varchar(45) NOT NULL,
  `email_tecnico` varchar(45) NOT NULL,
  `funcao_tecnico` varchar(45) NOT NULL,
  `codigo_setor_tecnico` int(11) NOT NULL,
  `id_login_tecnico` int(11) NOT NULL,
  `cpf_gerente` int(11) NOT NULL,
  PRIMARY KEY (`cpf_tecnico`),
  KEY `id_login_idx` (`id_login_tecnico`),
  KEY `cpf_gerente_idx` (`cpf_gerente`),
  KEY `codigo_setor_tecnico_idx` (`codigo_setor_tecnico`),
  CONSTRAINT `codigo_setor_tecnico` FOREIGN KEY (`codigo_setor_tecnico`) REFERENCES `setor` (`codigo_setor`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `cpf_gerente` FOREIGN KEY (`cpf_gerente`) REFERENCES `gerente` (`cpf_gerente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `id_login_tecnico` FOREIGN KEY (`id_login_tecnico`) REFERENCES `login` (`id_login`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tecnico`
--

LOCK TABLES `tecnico` WRITE;
/*!40000 ALTER TABLE `tecnico` DISABLE KEYS */;
/*!40000 ALTER TABLE `tecnico` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuario` (
  `cpf_usuario` int(11) NOT NULL,
  `nome_usuario` varchar(45) NOT NULL,
  `tel_usuario` int(11) NOT NULL,
  PRIMARY KEY (`cpf_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'bancolp3'
--

--
-- Dumping routines for database 'bancolp3'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-09-13 20:55:05
