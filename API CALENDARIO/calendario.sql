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


-- A despejar estrutura da base de dados para calendario
CREATE DATABASE IF NOT EXISTS `calendario` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `calendario`;

-- A despejar estrutura para tabela calendario.events
CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(220) DEFAULT NULL,
  `color` varchar(10) DEFAULT NULL,
  `start` datetime DEFAULT NULL,
  `end` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- A despejar dados para tabela calendario.events: 9 rows
/*!40000 ALTER TABLE `events` DISABLE KEYS */;
INSERT INTO `events` (`id`, `title`, `color`, `start`, `end`) VALUES
	(1, 'Tutorial PagSeguro', '#FFD700', '2022-05-19 11:19:42', '2022-05-19 11:19:42'),
	(2, 'Tutorial FullCalendar editar detalhes do evento', '#0071c5', '2019-05-30 15:00:00', '2019-05-30 00:00:00'),
	(3, 'Tutorial FullCalendar Visualizar detalhes do evento', '#0071c5', '2022-05-19 11:19:42', '2022-05-19 11:19:42'),
	(4, 'Reuniao 3', '#40e0d0', '2019-05-17 17:00:00', '2019-05-17 18:00:00'),
	(5, 'Reuniao 4', '#0071c5', '2019-05-17 15:00:00', '2019-05-17 16:00:00'),
	(6, 'Reuniao 5', '#FFD700', '2019-05-17 13:00:00', '2019-05-17 14:00:00'),
	(7, 'Reuniao 6', '#0071c5', '2019-05-17 11:00:00', '2019-05-17 12:00:00'),
	(8, 'Reuniao 7', '#40e0d0', '2019-05-17 09:00:00', '2019-05-17 10:00:00'),
	(9, 'AAAAAAAAAAAAAAAAAAA', '#FFD700', '2022-05-19 11:19:42', '2022-05-19 11:19:42');
/*!40000 ALTER TABLE `events` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
