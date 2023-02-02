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
  `nome` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_admin`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- A despejar dados para tabela 9_studio.admins: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` (`id_admin`, `utilizador`, `senha`, `created_at`, `updated_at`, `deleted_at`, `nome`) VALUES
	(6, 'admin@admin.com', '$2y$10$EGOgp8CLCkFW.cE37NlfpO1iJFvfq9BKmUQb79jAthN.UlJBC.hTi', '2022-02-06 12:01:20', '2022-02-06 12:01:20', NULL, 'dev'),
	(7, 'brenateo@admin', '$2y$10$EGOgp8CLCkFW.cE37NlfpO1iJFvfq9BKmUQb79jAthN.UlJBC.hTi', '2022-06-23 18:20:46', '2022-06-23 18:20:48', NULL, 'Brena');
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;

-- A despejar estrutura para tabela 9_studio.calendario
CREATE TABLE IF NOT EXISTS `calendario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(300) NOT NULL DEFAULT '0',
  `color` varchar(300) NOT NULL DEFAULT '0',
  `start` datetime DEFAULT NULL,
  `end` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4;

-- A despejar dados para tabela 9_studio.calendario: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `calendario` DISABLE KEYS */;
INSERT INTO `calendario` (`id`, `title`, `color`, `start`, `end`) VALUES
	(1, 'Filipa', 'yellow', '2022-07-19 18:00:00', '2022-07-19 18:07:00'),
	(2, 'Susana', 'red', '2022-07-19 18:00:00', '2022-07-19 18:00:11'),
	(3, 'Maria', 'blue', '2022-07-19 18:00:00', '2022-07-19 18:00:07'),
	(28, 'milton', 'blue', '2022-07-12 15:00:00', '2022-07-12 15:05:00'),
	(29, '458', 'red', '2022-07-13 12:31:00', '2022-07-13 13:31:00');
/*!40000 ALTER TABLE `calendario` ENABLE KEYS */;

-- A despejar estrutura para tabela 9_studio.categorias
CREATE TABLE IF NOT EXISTS `categorias` (
  `id_categoria` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

-- A despejar dados para tabela 9_studio.categorias: ~7 rows (aproximadamente)
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
INSERT INTO `categorias` (`id_categoria`, `nome`) VALUES
	(1, 'cabelo'),
	(2, 'unhas'),
	(3, 'maquilhagem'),
	(4, 'depilação'),
	(5, 'massagem'),
	(6, 'perfumaria e aromaterapia'),
	(7, 'tratamento de pele');
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;

-- A despejar estrutura para tabela 9_studio.clientes
CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` varchar(600) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `datanasc` date DEFAULT NULL,
  `idade` int(3) unsigned DEFAULT NULL,
  `lingua` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_entrada` timestamp NULL DEFAULT NULL,
  `last_update` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `status` enum('desativado','ativo') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ativo',
  `purl` varchar(600) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(400) DEFAULT NULL,
  `nivel` int(11) DEFAULT NULL,
  `genero` enum('masculino','feminino','outro') DEFAULT NULL,
  `obs` varchar(500) DEFAULT NULL,
  `sobre` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=84 DEFAULT CHARSET=latin1;

-- A despejar dados para tabela 9_studio.clientes: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` (`id`, `nome`, `email`, `senha`, `datanasc`, `idade`, `lingua`, `data_entrada`, `last_update`, `deleted_at`, `status`, `purl`, `avatar`, `nivel`, `genero`, `obs`, `sobre`) VALUES
	(82, 'milton', '22987@aeffl.pt', '$2y$10$pSkMl/gB7PnYIjQlGGpB0uTkRyDk917nKJW9DeQN2rrqiThruBpw6', '2022-07-06', 0, 'pt', '2022-07-12 09:21:09', '2022-07-12 09:41:24', NULL, 'ativo', '', '', 0, 'feminino', '', ''),
	(83, '458', '458@aeffl.pt', '$2y$10$Rhel/IUBUaqD5Ozozz62leZFzNlnR4hw45oLCZW2T5sB7J81uPJZm', '1970-01-01', 0, 'eng', '2022-07-12 09:29:16', '2022-07-12 09:29:16', NULL, 'ativo', NULL, '', 0, '', '', '');
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;

-- A despejar estrutura para tabela 9_studio.despesas
CREATE TABLE IF NOT EXISTS `despesas` (
  `id_despesa` int(11) NOT NULL AUTO_INCREMENT,
  `agua` double DEFAULT NULL,
  `energia` double DEFAULT NULL,
  `comunicacao` double DEFAULT NULL,
  `aluguer` double DEFAULT NULL,
  `data` date DEFAULT NULL,
  `produtos` double DEFAULT NULL,
  PRIMARY KEY (`id_despesa`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- A despejar dados para tabela 9_studio.despesas: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `despesas` DISABLE KEYS */;
INSERT INTO `despesas` (`id_despesa`, `agua`, `energia`, `comunicacao`, `aluguer`, `data`, `produtos`) VALUES
	(1, 50, 100, 54, 600, '2022-07-12', 70),
	(2, 54, 80, 54, 600, '2022-07-11', 60);
/*!40000 ALTER TABLE `despesas` ENABLE KEYS */;

-- A despejar estrutura para tabela 9_studio.funcionarios
CREATE TABLE IF NOT EXISTS `funcionarios` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `categoria` varchar(250) DEFAULT NULL,
  `datanasc` date DEFAULT NULL,
  `permissao` int(11) DEFAULT NULL,
  `telefone` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entered_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `last_update` datetime DEFAULT NULL,
  `status` enum('ativo','desativado') DEFAULT NULL,
  `avatar` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- A despejar dados para tabela 9_studio.funcionarios: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `funcionarios` DISABLE KEYS */;
INSERT INTO `funcionarios` (`id`, `nome`, `email`, `categoria`, `datanasc`, `permissao`, `telefone`, `entered_at`, `deleted_at`, `last_update`, `status`, `avatar`) VALUES
	(1, 'Brena', 'brenateodoro@gmail.com', 'cabeleileira', '2022-07-11', 1, '32424234', '2022-06-26 12:24:05', '2022-06-26 12:24:07', '2022-06-26 12:24:08', 'ativo', NULL),
	(2, 'Sandra', 'sandra@gmail.com', 'manicura', '2022-07-05', 2, '232324', '2022-07-05 12:51:09', '0000-00-00 00:00:00', '2022-07-05 12:51:41', 'ativo', NULL),
	(3, 'Simoni', NULL, 'massagista', '2022-07-11', 2, NULL, NULL, '2022-07-06 16:05:56', '2022-07-06 16:05:56', 'ativo', NULL),
	(4, 'Ângela', NULL, 'cabeleileira', '2022-07-11', 2, NULL, NULL, NULL, NULL, 'ativo', NULL);
/*!40000 ALTER TABLE `funcionarios` ENABLE KEYS */;

-- A despejar estrutura para tabela 9_studio.funcionario_servico
CREATE TABLE IF NOT EXISTS `funcionario_servico` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_funcionario` int(11) DEFAULT NULL,
  `id_servico` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `if_f` (`id_funcionario`),
  KEY `id_se` (`id_servico`),
  CONSTRAINT `id_se` FOREIGN KEY (`id_servico`) REFERENCES `servicos` (`cod_servico`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `if_f` FOREIGN KEY (`id_funcionario`) REFERENCES `funcionarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- A despejar dados para tabela 9_studio.funcionario_servico: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `funcionario_servico` DISABLE KEYS */;
/*!40000 ALTER TABLE `funcionario_servico` ENABLE KEYS */;

-- A despejar estrutura para tabela 9_studio.horario_funcionamento
CREATE TABLE IF NOT EXISTS `horario_funcionamento` (
  `id_dia` int(1) NOT NULL AUTO_INCREMENT,
  `dia_semana` varchar(50) NOT NULL,
  `aberto` enum('aberto','fechado') DEFAULT NULL,
  `hora_abre` time DEFAULT NULL,
  `hora_fecha` time DEFAULT NULL,
  PRIMARY KEY (`id_dia`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

-- A despejar dados para tabela 9_studio.horario_funcionamento: ~7 rows (aproximadamente)
/*!40000 ALTER TABLE `horario_funcionamento` DISABLE KEYS */;
INSERT INTO `horario_funcionamento` (`id_dia`, `dia_semana`, `aberto`, `hora_abre`, `hora_fecha`) VALUES
	(1, 'domingo', 'aberto', '00:00:00', '00:00:00'),
	(2, 'segunda-feira', 'fechado', '08:30:00', '20:00:00'),
	(3, 'terça-feira', 'aberto', '08:30:00', '20:00:00'),
	(4, 'quarta-feira', 'aberto', '08:30:00', '20:00:00'),
	(5, 'quinta-feira', 'aberto', '08:30:00', '20:00:00'),
	(6, 'sexta-feira', 'aberto', '08:30:00', '20:00:00'),
	(7, 'sábado', 'aberto', '08:30:00', '20:00:00');
/*!40000 ALTER TABLE `horario_funcionamento` ENABLE KEYS */;

-- A despejar estrutura para tabela 9_studio.marcacoes
CREATE TABLE IF NOT EXISTS `marcacoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cod_cliente` int(10) NOT NULL,
  `cod_funcionario` int(11) DEFAULT NULL,
  `cod_servico` int(11) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `tipo` enum('agendada','pendente') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `forma_pagamento` enum('dinheiro','cartao','paypal') DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `cod_cli` (`cod_cliente`),
  KEY `cod_fun` (`cod_funcionario`),
  KEY `cod_serv` (`cod_servico`),
  CONSTRAINT `cod_cli` FOREIGN KEY (`cod_cliente`) REFERENCES `clientes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `cod_fun` FOREIGN KEY (`cod_funcionario`) REFERENCES `funcionarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `cod_serv` FOREIGN KEY (`cod_servico`) REFERENCES `servicos` (`cod_servico`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- A despejar dados para tabela 9_studio.marcacoes: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `marcacoes` DISABLE KEYS */;
/*!40000 ALTER TABLE `marcacoes` ENABLE KEYS */;

-- A despejar estrutura para tabela 9_studio.servicos
CREATE TABLE IF NOT EXISTS `servicos` (
  `cod_servico` int(11) NOT NULL AUTO_INCREMENT,
  `cod_funcionario` int(11) DEFAULT NULL,
  `nome_servico` varchar(100) DEFAULT NULL,
  `tempomedio` time DEFAULT NULL,
  `preco` int(11) DEFAULT NULL,
  `categoria` varchar(150) DEFAULT NULL,
  `descricao` varchar(400) DEFAULT NULL,
  `ativo` enum('ativo','desativado') DEFAULT NULL,
  PRIMARY KEY (`cod_servico`),
  KEY `cod_funci` (`cod_funcionario`),
  CONSTRAINT `cod_funci` FOREIGN KEY (`cod_funcionario`) REFERENCES `funcionarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

-- A despejar dados para tabela 9_studio.servicos: ~9 rows (aproximadamente)
/*!40000 ALTER TABLE `servicos` DISABLE KEYS */;
INSERT INTO `servicos` (`cod_servico`, `cod_funcionario`, `nome_servico`, `tempomedio`, `preco`, `categoria`, `descricao`, `ativo`) VALUES
	(1, NULL, 'escova progressiva', '02:00:00', 50, 'cabelo', NULL, 'ativo'),
	(2, NULL, 'design de sobrancelhas', '00:20:00', 15, 'cabelo', NULL, 'ativo'),
	(3, NULL, 'depilação a laser de luz pulsada', '01:00:00', 95, 'depilação', NULL, 'ativo'),
	(4, NULL, 'depilacao com cera ', '01:00:00', 30, 'depilação', NULL, 'ativo'),
	(5, NULL, 'depilação a laser de alexandrite', '01:00:00', 95, 'depilação', NULL, 'ativo'),
	(6, NULL, 'botox capilar', '01:30:00', 40, 'cabelo', NULL, 'ativo'),
	(7, NULL, 'unhas em gel', '01:30:00', 20, 'unhas', NULL, 'ativo'),
	(8, NULL, 'unhas em fibra de vidro', '01:30:00', 35, 'unhas', NULL, 'ativo'),
	(9, NULL, 'buço', NULL, 5, NULL, NULL, 'ativo'),
	(10, NULL, 'limpeza de pele', '00:20:00', 10, 'tratamento', NULL, 'ativo');
/*!40000 ALTER TABLE `servicos` ENABLE KEYS */;

-- A despejar estrutura para tabela 9_studio.studio_status
CREATE TABLE IF NOT EXISTS `studio_status` (
  `qtd_funcionarios` int(11) DEFAULT NULL,
  `qtd_servicos` int(11) DEFAULT NULL,
  `qtd_clientes` int(11) DEFAULT NULL,
  `lucro` double DEFAULT NULL,
  `lucrototal` double DEFAULT NULL,
  `totaldespesas` double DEFAULT NULL,
  `data` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- A despejar dados para tabela 9_studio.studio_status: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `studio_status` DISABLE KEYS */;
/*!40000 ALTER TABLE `studio_status` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
