-- --------------------------------------------------------
-- Anfitrião:                    127.0.0.1
-- Versão do servidor:           8.0.18 - MySQL Community Server - GPL
-- SO do servidor:               Win64
-- HeidiSQL Versão:              11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- A despejar estrutura da base de dados para studiodebeleza
CREATE DATABASE IF NOT EXISTS `studiodebeleza` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci*/ /*!80016 DEFAULT ENCRYPTION='N' */; USE `studiodebeleza`;

-- A despejar estrutura para tabela studiodebeleza.clientes
CREATE TABLE IF NOT EXISTS `clientes` (
 `cli_cod` INT(4) UNSIGNED NOT NULL AUTO_INCREMENT,
 `cli_nome` VARCHAR(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
 `senha` VARCHAR(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
 `email` VARCHAR(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
 `purl` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
 `cli_aniversario` DATE DEFAULT NULL,
 `cli_idade` INT(11) DEFAULT NULL,
 `cli_idiomas` VARCHAR(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL, PRIMARY KEY (`cli_cod`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- A despejar dados para tabela studiodebeleza.clientes: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` (`cli_cod`, `cli_nome`, `senha`, `email`, `purl`, `cli_aniversario`, `cli_idade`, `cli_idiomas`) VALUES
	(1, 'teste', NULL, NULL, NULL, '2021-12-17', NULL, NULL),
	(2, 'teste', '$2y$10$Z4XvF5wtpp5qckSV3oG83.w6B88sgozemu/OdI8Udq6EryykCwkIS', 'aa@gmail.com', 'S3o85Wzmp7', NULL, NULL, NULL),
	(3, 'teste22', '$2y$10$WQrPJKryp6l4tNZJ3eVzlOsL2EhVaJiS5QOuKbog3ZoP.8voDF7xG', 'aa22@gmail.com', 'PzqlBgHxFjVc', '2021-12-27', 0, 'PT');
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;

-- A despejar estrutura para tabela studiodebeleza.funcionarios
CREATE TABLE IF NOT EXISTS `funcionarios` (
 `fun_cod` INT(11) NOT NULL AUTO_INCREMENT,
 `fun_nome` VARCHAR(45) DEFAULT NULL,
 `fun_serv` VARCHAR(45) DEFAULT NULL,
 `fun_email` VARCHAR(45) DEFAULT NULL,
 `fun_aniversario` VARCHAR(45) DEFAULT NULL,
 `fun_perm` VARCHAR(45) DEFAULT NULL,
 `fun_tel` VARCHAR(45) DEFAULT NULL, PRIMARY KEY (`fun_cod`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- A despejar dados para tabela studiodebeleza.funcionarios: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `funcionarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `funcionarios` ENABLE KEYS */;

-- A despejar estrutura para tabela studiodebeleza.marcacoes
CREATE TABLE IF NOT EXISTS `marcacoes` (
 `marcacao_cod` INT(11) NOT NULL AUTO_INCREMENT,
 `marcacao_cli` INT(11) DEFAULT NULL,
 `marcacao_fun` VARCHAR(45) DEFAULT NULL,
 `marcacao_data` VARCHAR(45) DEFAULT NULL, PRIMARY KEY (`marcacao_cod`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- A despejar dados para tabela studiodebeleza.marcacoes: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `marcacoes` DISABLE KEYS */;
/*!40000 ALTER TABLE `marcacoes` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
