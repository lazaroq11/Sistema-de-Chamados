-- MySQL dump 10.13  Distrib 8.0.17, for Win64 (x86_64)
--
-- Host: localhost    Database: teste00
-- ------------------------------------------------------
-- Server version	8.0.17

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
  `data_att_estado` date NOT NULL,
  `cpf_usuario_chamado` varchar(15) NOT NULL,
  `nome_solicitante` varchar(50) NOT NULL,
  `id_setor` int(11) NOT NULL,
  `descricao_chamado` varchar(300) NOT NULL,
  `solucao_chamado` varchar(300) DEFAULT NULL,
  `cpf_tecnico` varchar(20) DEFAULT NULL,
  `estado_chamado` char(1) NOT NULL,
  `link_software` varchar(255) DEFAULT NULL,
  `email_usuario` varchar(45) NOT NULL,
  `telefone_usuario` varchar(15) NOT NULL,
  `problema` varchar(45) NOT NULL,
  PRIMARY KEY (`id_chamado`),
  KEY `id_setorChamadoFK_idx` (`id_setor`),
  CONSTRAINT `id_setorChamadoFK` FOREIGN KEY (`id_setor`) REFERENCES `setor` (`codigo_setor`)
) ENGINE=InnoDB AUTO_INCREMENT=21000014 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chamado`
--

LOCK TABLES `chamado` WRITE;
/*!40000 ALTER TABLE `chamado` DISABLE KEYS */;
INSERT INTO `chamado` VALUES (21000006,'2019-09-16','03994573564','Aure',1138,'Tá ruim demais, man...',NULL,NULL,'P',NULL,'aurelicio2010@hotmail.com','986114775','isoft'),(21000007,'2019-09-17','65448878741','Juan Oliveira',1122,'Monitor parou subitamente.',NULL,NULL,'P',NULL,'juanabrobrinha@yahoo.com','987455477','monitor'),(21000008,'2019-09-17','45685597852','Jean Gomes',1125,'Barriou o rato, man...',NULL,NULL,'P',NULL,'jeangomes@hotmail.com','986685889','mouse'),(21000009,'2019-09-17','87998774112','Maicon Gomes',1126,'Parou de vez, kkk...',NULL,NULL,'P',NULL,'maicongomes@gmail.com','985858554','teclado'),(21000010,'2019-09-17','85447887414','Tierry Matos',1138,'Nem sei o que houve...',NULL,'98585513112','P',NULL,'tierryhy@yahoo.com','988554541','outro'),(21000011,'2019-09-17','99885852545','Ana Patricia',1125,'Houve um problema...',NULL,NULL,'P',NULL,'anapat@uneb.com','987477874','outro'),(21000012,'2019-09-17','65487914774','Ramon Oliveira',1122,'Monitor apresenta falhas de exibição.',NULL,NULL,'P',NULL,'ramontt@yahoo.com.br','33654578','monitor'),(21000013,'2019-09-23','74145778787','Vitor Andrade',1147,'Meu pagamento foi mal efetuado. Favor, resolver logo...',NULL,NULL,'P',NULL,'vitorandrade@hotmail.com','985655874','outro');
/*!40000 ALTER TABLE `chamado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gerente`
--

DROP TABLE IF EXISTS `gerente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `gerente` (
  `id_gerente` int(11) NOT NULL AUTO_INCREMENT,
  `cpf_gerente` varchar(20) NOT NULL,
  `nome_gerente` varchar(45) NOT NULL,
  `email_gerente` varchar(45) NOT NULL,
  `codigo_setor_gerente` int(11) NOT NULL,
  `id_login_gerente` int(11) NOT NULL,
  `telefone_gerente` int(15) NOT NULL,
  `funcao_gerente` varchar(8) NOT NULL,
  PRIMARY KEY (`id_gerente`),
  KEY `id_login_gerente_idx` (`id_login_gerente`),
  KEY `codigo_setor_gerente_idx` (`codigo_setor_gerente`),
  CONSTRAINT `codigo_setor_gerente` FOREIGN KEY (`codigo_setor_gerente`) REFERENCES `setor` (`codigo_setor`) ON UPDATE CASCADE,
  CONSTRAINT `id_login_gerente` FOREIGN KEY (`id_login_gerente`) REFERENCES `login` (`id_login`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3211007 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gerente`
--

LOCK TABLES `gerente` WRITE;
/*!40000 ALTER TABLE `gerente` DISABLE KEYS */;
INSERT INTO `gerente` VALUES (3211000,'03887445665','Vagner Souza','vagnersouza@gmail.com',1125,120009,33547874,'ADM Área'),(3211001,'04887456545','Ramon Santos','ramonsantos@gmail.com',1122,120010,33244554,'ADM Área'),(3211002,'65995885885','Tierry Oliveira','tierryoliveira@gmail.com',1126,120011,33154478,'ADM Área'),(3211003,'04874465478','Ismael','ismael@gmail.com',1138,120012,33988587,'ADM Área');
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
  CONSTRAINT `cpf_usuario_historico` FOREIGN KEY (`cpf_usuario_historico`) REFERENCES `usuario` (`cpf_usuario`) ON UPDATE CASCADE
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
  `usuario` varchar(45) NOT NULL,
  `senha` varchar(12) NOT NULL,
  PRIMARY KEY (`id_login`)
) ENGINE=InnoDB AUTO_INCREMENT=1211115 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login`
--

LOCK TABLES `login` WRITE;
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
INSERT INTO `login` VALUES (120009,'vagnersouza@gmail.com','38162684'),(120010,'ramonsantos@gmail.com','90669618'),(120011,'tierryoliveira@gmail.com','54226174'),(120012,'ismael@gmail.com','64614695'),(120016,'andersons@hotmail.com','33861339'),(120017,'andersonmotta@hotmail.com','53095729'),(120018,'ronaldoaguiar@hotmail.com','56661101'),(120019,'adrianopinto@outlook.com','69558194'),(120020,'marianasilva@yahoo.com','22248888'),(120022,'jessicaf@yahoo.com','90559721'),(120023,'amandapereira','30995074'),(120024,'marinamelina@gmail.com','98820540'),(1211111,'admin','123456'),(1211112,'zidanemil@outlook.com','23753647'),(1211113,'silenesilva@gmail.com','26394660'),(1211114,'amorimrocha@gmail.com','42427574');
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
  `email` varchar(45) NOT NULL,
  PRIMARY KEY (`codigo_setor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `setor`
--

LOCK TABLES `setor` WRITE;
/*!40000 ALTER TABLE `setor` DISABLE KEYS */;
INSERT INTO `setor` VALUES (1122,'Comunicação',33544787,'comunicacao@uneb.mail'),(1125,'Administrativo',33584587,'administrativo@uneb.mail'),(1126,'RH',33254454,'rh@uneb.mail'),(1138,'Desenvolvimento',33256554,'desenvolvimento@uneb.mail'),(1147,'Financeiro',33859878,'financeiro@uneb.mail');
/*!40000 ALTER TABLE `setor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tecnico`
--

DROP TABLE IF EXISTS `tecnico`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tecnico` (
  `id_tecnico` int(11) NOT NULL AUTO_INCREMENT,
  `cpf_tecnico` varchar(20) NOT NULL,
  `nome_tecnico` varchar(45) NOT NULL,
  `email_tecnico` varchar(45) NOT NULL,
  `funcao_tecnico` varchar(7) NOT NULL,
  `codigo_setor_tecnico` int(11) NOT NULL,
  `id_login_tecnico` int(11) NOT NULL,
  `telefone_tecnico` int(11) NOT NULL,
  PRIMARY KEY (`id_tecnico`),
  KEY `id_login_idx` (`id_login_tecnico`),
  KEY `codigo_setor_tecnico_idx` (`codigo_setor_tecnico`),
  CONSTRAINT `codigo_setor_tecnico` FOREIGN KEY (`codigo_setor_tecnico`) REFERENCES `setor` (`codigo_setor`) ON UPDATE CASCADE,
  CONSTRAINT `id_login_tecnico` FOREIGN KEY (`id_login_tecnico`) REFERENCES `login` (`id_login`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2111011 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tecnico`
--

LOCK TABLES `tecnico` WRITE;
/*!40000 ALTER TABLE `tecnico` DISABLE KEYS */;
INSERT INTO `tecnico` VALUES (2111000,'56445687747','Anderson Silva','andersons@hotmail.com','Técnico',1126,120016,33525588),(2111001,'12344578987','Anderson Motta','andersonmotta@hotmail.com','Técnico',1126,120017,98885554),(2111002,'98585513112','Ronaldo Aguiar','ronaldoaguiar@hotmail.com','Técnico',1138,120018,987457898),(2111003,'65445112455','Adriano Pinto','adrianopinto@outlook.com','Técnico',1122,120019,33566512),(2111004,'96565112354','Mariana Silva','marianasilva@yahoo.com','Técnico',1125,120020,991455774),(2111005,'56898715612','Jessica Freire','jessicaf@yahoo.com','Técnico',1138,120022,33877447),(2111006,'96332114785','Amanda Pereira','amandapereira','Técnico',1125,120023,33987454),(2111007,'25885245665','Marina Melina','marinamelina@gmail.com','Técnico',1122,120024,33587874),(2111008,'65698785674','Zidane','zidanemil@outlook.com','Técnico',1122,1211112,987744114),(2111009,'98778478741','Silene Silva','silenesilva@gmail.com','Técnico',1138,1211113,984747874),(2111010,'56445665478','Amorim Rocha','amorimrocha@gmail.com','Técnico',1122,1211114,987745474);
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
  `email_usuario` varchar(45) NOT NULL,
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
-- Dumping events for database 'teste00'
--

--
-- Dumping routines for database 'teste00'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-09-23  5:56:51
