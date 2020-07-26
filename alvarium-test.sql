-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               5.7.20-log - MySQL Community Server (GPL)
-- Операционная система:         Win64
-- HeidiSQL Версия:              9.3.0.5055
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Дамп структуры базы данных test-lara
CREATE DATABASE IF NOT EXISTS `test-lara` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `test-lara`;

-- Дамп структуры для таблица test-lara.departments
CREATE TABLE IF NOT EXISTS `departments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `department_name` varchar(50) NOT NULL DEFAULT '0',
  KEY `Индекс 1` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы test-lara.departments: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `departments` DISABLE KEYS */;
/*!40000 ALTER TABLE `departments` ENABLE KEYS */;

-- Дамп структуры для таблица test-lara.time_of_work
CREATE TABLE IF NOT EXISTS `time_of_work` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `time` int(2) unsigned NOT NULL,
  `worker_id` int(10) unsigned NOT NULL,
  KEY `Индекс 1` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы test-lara.time_of_work: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `time_of_work` DISABLE KEYS */;
/*!40000 ALTER TABLE `time_of_work` ENABLE KEYS */;

-- Дамп структуры для таблица test-lara.type_payments
CREATE TABLE IF NOT EXISTS `type_payments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type_name` varchar(50) NOT NULL,
  KEY `Индекс 1` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы test-lara.type_payments: ~2 rows (приблизительно)
/*!40000 ALTER TABLE `type_payments` DISABLE KEYS */;
INSERT INTO `type_payments` (`id`, `type_name`) VALUES
	(1, 'per_hour'),
	(2, 'per_month');
/*!40000 ALTER TABLE `type_payments` ENABLE KEYS */;

-- Дамп структуры для таблица test-lara.workers
CREATE TABLE IF NOT EXISTS `workers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `department_id` int(10) unsigned NOT NULL,
  `type_payments_id` int(10) unsigned NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `second_name` varchar(50) NOT NULL,
  `patronymic` varchar(50) NOT NULL,
  `birthday` date DEFAULT NULL,
  `position` varchar(50) NOT NULL,
  KEY `Индекс 1` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы test-lara.workers: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `workers` DISABLE KEYS */;
/*!40000 ALTER TABLE `workers` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
