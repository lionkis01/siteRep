-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               10.1.34-MariaDB - mariadb.org binary distribution
-- Операционная система:         Win32
-- HeidiSQL Версия:              9.5.0.5295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Дамп структуры для таблица login.registration
CREATE TABLE IF NOT EXISTS `registration` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `fullName` varchar(50) COLLATE utf8_bin NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `username` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Дамп данных таблицы login.registration: ~2 rows (приблизительно)
/*!40000 ALTER TABLE `registration` DISABLE KEYS */;
INSERT INTO `registration` (`id`, `fullName`, `email`, `username`, `password`) VALUES
	(6, 'Erik Kis', 'lionkis13@gmail.com', 'lionkis01', 'lionkis01'),
	(7, 'Roma Ilik', 'lionki41234@gmail.com', 'roma123', 'roma123');
/*!40000 ALTER TABLE `registration` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
