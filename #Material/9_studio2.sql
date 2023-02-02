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

-- A despejar dados para tabela 9_studio.admins: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` (`id_admin`, `utilizador`, `senha`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(6, 'admin@admin.com', '$2y$10$EGOgp8CLCkFW.cE37NlfpO1iJFvfq9BKmUQb79jAthN.UlJBC.hTi', '2022-02-06 12:01:20', '2022-02-06 12:01:20', NULL);
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;

-- A despejar estrutura para tabela 9_studio.alunos
CREATE TABLE IF NOT EXISTS `alunos` (
  `id_aluno` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  `email` char(150) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_aluno`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- A despejar dados para tabela 9_studio.alunos: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `alunos` DISABLE KEYS */;
INSERT INTO `alunos` (`id_aluno`, `nome`, `email`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'hanna paiva', '22987@aeffl.pt', '2022-02-17 11:26:13', '2022-02-17 11:26:13', NULL),
	(2, 'hanna paiva', '22987@aefzfl.pt', '2022-02-17 11:52:04', '2022-02-17 11:52:04', NULL);
/*!40000 ALTER TABLE `alunos` ENABLE KEYS */;

-- A despejar estrutura para tabela 9_studio.calendar_event
CREATE TABLE IF NOT EXISTS `calendar_event` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `month` int(11) NOT NULL DEFAULT 0,
  `day` int(11) NOT NULL DEFAULT 0,
  `year` int(11) NOT NULL DEFAULT 0,
  `time_from` datetime NOT NULL,
  `time_until` datetime NOT NULL,
  `event` datetime NOT NULL,
  `description` varchar(300) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- A despejar dados para tabela 9_studio.calendar_event: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `calendar_event` DISABLE KEYS */;
/*!40000 ALTER TABLE `calendar_event` ENABLE KEYS */;

-- A despejar estrutura para tabela 9_studio.calendar_users
CREATE TABLE IF NOT EXISTS `calendar_users` (
  `cod` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- A despejar dados para tabela 9_studio.calendar_users: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `calendar_users` DISABLE KEYS */;
INSERT INTO `calendar_users` (`cod`, `username`, `password`) VALUES
	(1, '22987', 'a3cbf08b72706ab3927b747f8bc56353');
/*!40000 ALTER TABLE `calendar_users` ENABLE KEYS */;

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
) ENGINE=InnoDB AUTO_INCREMENT=88 DEFAULT CHARSET=latin1;

-- A despejar dados para tabela 9_studio.clientes: ~12 rows (aproximadamente)
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` (`id`, `nome`, `email`, `senha`, `datanasc`, `idade`, `lingua`, `data_entrada`, `last_update`, `deleted_at`, `status`, `purl`) VALUES
	(60, 'hanna', 'hanna@hotmail.com', '$2y$10$FJjg5b7qgqshFWmv88o8VePq2RVXQ.UBzJS0Vw2o2xRBJZscV96ei', '2004-04-15', 10, 'pt', '2022-03-25 09:01:14', '2022-04-01 08:46:01', '2022-04-01 08:46:00', 'ativo', NULL),
	(71, '162', '185@aeffl.pt', '$2y$10$/AaWy1z34c.a4jl.xTlsMen687DfPOQpBBhgDaadzc4WIEX4OY2Ke', '1970-01-01', 28, 'pt', '2022-03-29 11:04:34', '2022-04-05 11:19:20', '2022-04-05 11:19:00', 'ativo', NULL),
	(72, '416', '659@aeffl.pt', '$2y$10$BvO10tnbqiyu2oApt35lyuVPlsmmu9V1GNcehFNRrr7CWqD0xpFia', '1970-01-01', 28, 'pt', '2022-03-29 11:04:51', '2022-04-05 11:19:05', '2022-04-05 11:19:03', 'ativo', NULL),
	(74, 'hanna', 'fulana@faa.pt', '$2y$10$fARO6TY/bhx7eEqAAGnniuSSBDHkITLB71GWevc4WnUdRsHOp5hJS', '2022-03-15', 15, 'pt', '2022-03-30 09:35:15', '2022-03-30 09:35:15', NULL, 'ativo', NULL),
	(75, 'cicrana', 'cicrana@asasç.pt', '$2y$10$t2sjjXIyqhFheX2gyDry0Okf.6g/N6NqTcONf4nypbpNpkhmCh5gS', '2022-03-01', 29, 'pt', '2022-03-30 09:38:40', '2022-03-30 09:38:40', NULL, 'ativo', NULL),
	(79, '198', '865@aeffl.pt', '$2y$10$aOHJjvWJwNUPA81l9wdKf.0zyFalkeW9rqm3ZFb7ef6PaACEON89m', '1970-01-01', 29, 'pt', '2022-03-30 09:52:58', '2022-03-30 09:52:58', NULL, 'ativo', NULL),
	(80, '717', '570@aeffl.pt', '$2y$10$dxvBIzPb4BNOvDZYjy.b9eiyyoi/7q8Yn0Xiz/fdOE1tcn5xGa.MO', '1970-01-01', 29, 'pt', '2022-03-30 10:01:57', '2022-03-30 10:01:57', NULL, 'ativo', NULL),
	(82, 'hanna', '22987@aeffl.pt', '$2y$10$hk4iOHKXRgpab30BmZw0i.RlgTXkU8vPG0BOn6iiu6hgur5QRsyeW', '2022-04-05', 0, 'pt', '2022-04-01 08:44:58', '2022-04-01 08:44:58', NULL, 'ativo', NULL),
	(83, '311', '311@aeffl.pt', '$2y$10$UtdSSeus9R9XN3jshsLuFe1pn9d.q1VnJMb2ef3RS72NRTe1mOMAG', '1970-01-01', 0, 'pt', '2022-04-01 08:46:09', '2022-04-01 08:46:09', NULL, 'ativo', NULL),
	(84, '606', '606@aeffl.pt', '$2y$10$sJbrN/f0LRZ/2Q9BVqSPEu.5ueuCwDM6CKeXe6bqnswFYWwKoEUYW', '1970-01-01', 0, 'pt', '2022-04-01 08:46:13', '2022-04-01 08:46:13', NULL, 'ativo', NULL),
	(85, '570', '570@aeffl.pt', '$2y$10$MzgyDhsMuky8CfZbo7oCa.1SrFvgSsCKw94iy/3QJ7XpN7Z3kDZqq', '1970-01-01', 0, 'pt', '2022-04-01 08:46:21', '2022-04-01 08:46:21', NULL, 'ativo', NULL),
	(86, '130', '130@aeffl.pt', '$2y$10$aTVrzjIiMA3iUjimHqwq5uktREbS7ZHS88MEClIYceIHTBcKT.UiW', '1970-01-01', 0, 'pt', '2022-04-01 08:46:36', '2022-04-01 08:46:36', NULL, 'ativo', NULL),
	(87, '386', '386@aeffl.pt', '$2y$10$yzgJAytwGIixiw.n0A/VQOtJUDcD42Hik4UjV12EO2xKwqeWSXVkC', '1970-01-01', 4, 'pt', '2022-04-05 10:34:43', '2022-04-05 10:34:43', NULL, 'ativo', NULL);
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
