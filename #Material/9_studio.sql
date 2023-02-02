-- --------------------------------------------------------
-- Anfitrião:                    127.0.0.1
-- Versão do servidor:           10.4.22-MariaDB - mariadb.org binary distribution
-- SO do servidor:               Win64
-- HeidiSQL Versão:              11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- A despejar estrutura da base de dados para 9_studio
CREATE DATABASE IF NOT EXISTS `9_studio` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `9_studio`;

-- A despejar estrutura para tabela 9_studio.admins
CREATE TABLE IF NOT EXISTS `admins` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `utilizador` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `senha` varchar(600) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_admin`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- A despejar dados para tabela 9_studio.admins: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` (`id_admin`, `utilizador`, `senha`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(6, 'admin@admin.com', '$2y$10$EGOgp8CLCkFW.cE37NlfpO1iJFvfq9BKmUQb79jAthN.UlJBC.hTi', '2022-02-06 12:01:20', '2022-02-06 12:01:20', NULL);
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;

-- A despejar estrutura para tabela 9_studio.calendario
CREATE TABLE IF NOT EXISTS `calendario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(300) NOT NULL DEFAULT '0',
  `color` varchar(300) NOT NULL DEFAULT '0',
  `start` datetime DEFAULT NULL,
  `end` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

-- A despejar dados para tabela 9_studio.calendario: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `calendario` DISABLE KEYS */;
INSERT INTO `calendario` (`id`, `title`, `color`, `start`, `end`) VALUES
	(1, 'asasa', '#FFD700', '2022-05-19 19:53:25', '2022-05-19 19:53:25'),
	(2, 'asasaaaaa', '#FFD700', '2022-05-19 19:28:49', '2022-05-19 19:28:49'),
	(3, 'Tutorial PagSeguro', '#FFD700', '2022-05-25 20:15:21', '2022-05-25 20:15:21');
/*!40000 ALTER TABLE `calendario` ENABLE KEYS */;

-- A despejar estrutura para tabela 9_studio.clientes
CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `senha` varchar(600) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datanasc` date DEFAULT NULL,
  `idade` int(11) unsigned DEFAULT NULL,
  `lingua` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_entrada` timestamp NULL DEFAULT NULL,
  `last_update` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `status` enum('desativado','ativo') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ativo',
  `purl` varchar(600) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=98 DEFAULT CHARSET=latin1;

-- A despejar dados para tabela 9_studio.clientes: ~20 rows (aproximadamente)
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` (`id`, `nome`, `email`, `senha`, `datanasc`, `idade`, `lingua`, `data_entrada`, `last_update`, `deleted_at`, `status`, `purl`) VALUES
	(60, 'hanna', 'hanna@hotmail.com', '$2y$10$FJjg5b7qgqshFWmv88o8VePq2RVXQ.UBzJS0Vw2o2xRBJZscV96ei', '2004-04-15', 10, 'pt', '2022-03-25 09:01:14', '2022-05-17 13:28:45', NULL, 'ativo', NULL),
	(71, '162', '185@aeffl.pt', '$2y$10$/AaWy1z34c.a4jl.xTlsMen687DfPOQpBBhgDaadzc4WIEX4OY2Ke', '1970-01-01', 28, 'pt', '2022-03-29 11:04:34', '2022-04-05 11:19:20', '2022-04-05 11:19:00', 'ativo', NULL),
	(72, '416', '659@aeffl.pt', '$2y$10$BvO10tnbqiyu2oApt35lyuVPlsmmu9V1GNcehFNRrr7CWqD0xpFia', '1970-01-01', 28, 'pt', '2022-03-29 11:04:51', '2022-04-05 11:19:05', '2022-04-05 11:19:03', 'ativo', NULL),
	(74, 'hanna', 'fulana@faa.pt', '$2y$10$fARO6TY/bhx7eEqAAGnniuSSBDHkITLB71GWevc4WnUdRsHOp5hJS', '2022-03-15', 15, 'pt', '2022-03-30 09:35:15', '2022-03-30 09:35:15', NULL, 'ativo', NULL),
	(75, 'cicrana', 'cicrana@asasç.pt', '$2y$10$t2sjjXIyqhFheX2gyDry0Okf.6g/N6NqTcONf4nypbpNpkhmCh5gS', '2022-03-01', 29, 'pt', '2022-03-30 09:38:40', '2022-03-30 09:38:40', NULL, 'ativo', NULL),
	(79, '198', '865@aeffl.pt', '$2y$10$aOHJjvWJwNUPA81l9wdKf.0zyFalkeW9rqm3ZFb7ef6PaACEON89m', '1970-01-01', 29, 'pt', '2022-03-30 09:52:58', '2022-03-30 09:52:58', NULL, 'ativo', NULL),
	(80, '717', '570@aeffl.pt', '$2y$10$dxvBIzPb4BNOvDZYjy.b9eiyyoi/7q8Yn0Xiz/fdOE1tcn5xGa.MO', '1970-01-01', 29, 'pt', '2022-03-30 10:01:57', '2022-03-30 10:01:57', NULL, 'ativo', NULL),
	(82, 'hanna', '22987@aeffl.pt', '$2y$10$6s2w9R3z8hl0N3txPWCKqOpMsvua4qMqfZLr8n2NM80TGZsgJ02ea', '2022-04-05', 0, 'pt', '2022-04-01 08:44:58', '2022-04-01 08:44:58', NULL, 'ativo', NULL),
	(83, '311', '311@aeffl.pt', '$2y$10$UtdSSeus9R9XN3jshsLuFe1pn9d.q1VnJMb2ef3RS72NRTe1mOMAG', '1970-01-01', 0, 'pt', '2022-04-01 08:46:09', '2022-04-01 08:46:09', NULL, 'ativo', NULL),
	(84, '606', '606@aeffl.pt', '$2y$10$sJbrN/f0LRZ/2Q9BVqSPEu.5ueuCwDM6CKeXe6bqnswFYWwKoEUYW', '1970-01-01', 0, 'pt', '2022-04-01 08:46:13', '2022-04-01 08:46:13', NULL, 'ativo', NULL),
	(85, '570', '570@aeffl.pt', '$2y$10$MzgyDhsMuky8CfZbo7oCa.1SrFvgSsCKw94iy/3QJ7XpN7Z3kDZqq', '1970-01-01', 0, 'pt', '2022-04-01 08:46:21', '2022-04-01 08:46:21', NULL, 'ativo', NULL),
	(88, 'hanna', 'teste@hotamasioduhad.com', '$2y$10$RAIfScfvphRK8pssw1LX5.88BcicFgP1sYjaeOdHUwgS4JdwrhcHG', '2003-05-07', 0, 'PT', '2022-05-25 19:47:03', '2022-05-25 19:47:03', NULL, 'ativo', NULL),
	(89, 'hanna', 'hantriex@gmail.com', '$2y$10$WvV8fX8r.isgxdkJl4mlUeMCT7tIe9Xbw4wD0HHn12aBMsrxq1AIe', '2003-05-07', 0, 'PT', '2022-05-25 19:49:41', '2022-05-25 19:49:41', NULL, 'ativo', NULL),
	(90, 'hanna', '123@123.com', '$2y$10$uBBYD03Kd6UKx5EV5hZO6uU5mS3wadtr87FeuQZhri5V.JkxxjTvy', '2003-05-07', 0, 'PT', '2022-05-25 19:50:18', '2022-05-25 19:50:18', NULL, 'ativo', NULL),
	(91, 'ber', '123@2aewrw.pt', '$2y$10$RlOISrBXT/QTcIco9etkP.RJPCK3MaFKt7TuYpiX5ev37h3qnH35O', '2003-05-07', 0, 'PT', '2022-05-25 19:51:46', '2022-05-25 19:51:46', NULL, 'ativo', NULL),
	(92, 'sadasdasd', '123@123s.com', '$2y$10$2/PYqCaKKeMmAJrFNDO/GeAaVVV.cDpE/98gfhUp6uxX0bNLimGzC', '2003-05-07', 0, 'PT', '2022-05-25 19:52:53', '2022-05-25 19:52:53', NULL, 'ativo', NULL),
	(93, 'sopa de macaco', 'sopa@demacaco.com', '$2y$10$E5jjT0iYGwwnU8/bU9Zag.Um4dk2ObTelIeselLITYIZbAT6POycK', '2003-05-07', 0, 'PT', '2022-05-25 19:53:41', '2022-05-25 19:53:41', NULL, 'ativo', NULL),
	(94, 'paipulusgustase', 'brenathaisdearaujoteodoro@hotmail.com', '$2y$10$rSLq3vJ1.yDlfKBAkA2A3e.BKEGm6oz/zApuniHINNA/XPGpQg6j.', '2003-05-07', 0, 'PT', '2022-05-25 19:54:18', '2022-05-25 19:54:18', NULL, 'ativo', NULL),
	(95, 'paipulusgustase', 'ga@asa.pt', '$2y$10$Sv2mlAeDbb4Xf3wkzQCxzudCjFruwuQy1YQiSzekaAxhAmgi8PsEC', '2003-05-07', 0, 'PT', '2022-05-25 19:54:45', '2022-05-25 19:54:45', NULL, 'ativo', NULL),
	(96, 'sopa de macaco', 'sopademacaco@gmail.com', '$2y$10$Ydfj/WmjA9DNsnhLpzqkPORKCiKEpO9Zpg.7sTB7S75g7xDxVaPNi', '2003-05-07', 0, 'PT', '2022-05-25 20:08:00', '2022-05-25 20:08:00', NULL, 'ativo', NULL);
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;

-- A despejar estrutura para tabela 9_studio.funcionarios
CREATE TABLE IF NOT EXISTS `funcionarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `servico` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aniversario` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permissao` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefone` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- A despejar dados para tabela 9_studio.funcionarios: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `funcionarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `funcionarios` ENABLE KEYS */;

-- A despejar estrutura para tabela 9_studio.marcacoes
CREATE TABLE IF NOT EXISTS `marcacoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cod_cliente` int(11) DEFAULT NULL,
  `cod_funcionario` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cod_servico` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `tipo` enum('agendada','N') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- A despejar dados para tabela 9_studio.marcacoes: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `marcacoes` DISABLE KEYS */;
/*!40000 ALTER TABLE `marcacoes` ENABLE KEYS */;

-- A despejar estrutura para tabela 9_studio.servicos
CREATE TABLE IF NOT EXISTS `servicos` (
  `cod_servico` int(11) NOT NULL AUTO_INCREMENT,
  `nome_servico` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`cod_servico`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- A despejar dados para tabela 9_studio.servicos: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `servicos` DISABLE KEYS */;
INSERT INTO `servicos` (`cod_servico`, `nome_servico`) VALUES
	(1, 'cabeleireiro'),
	(2, 'design de sobrancelhas'),
	(3, 'depilação');
/*!40000 ALTER TABLE `servicos` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
