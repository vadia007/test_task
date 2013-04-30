-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Апр 30 2013 г., 21:23
-- Версия сервера: 5.5.29
-- Версия PHP: 5.4.6-1ubuntu1.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `text` text CHARACTER SET utf8 NOT NULL,
  `published_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` set('0','1') CHARACTER SET utf8 NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `title`, `text`, `published_date`, `status`, `user_id`) VALUES
(1, 'www', 'some text some text some text some text some text some text some text some text some text some text some text some text some text some text some text some text some text some text some text some text some text some text some text some text some text some text some text some text some text some text some text some text some text some text some text some text some text some text some text some text ', '2013-04-30 00:00:00', '0', 1),
(3, 'title1', 'some text some text some text  ', '2013-02-03 00:00:00', '0', 4),
(4, 'title4', 'some text some text some text  ', '2013-02-13 00:00:00', '1', 5),
(5, 'title2', 'some text some text some text  ', '2013-03-10 00:00:00', '1', 5),
(6, 'title10', 'some text sensationsensation sensation some text  ', '2013-03-10 00:00:00', '0', 6),
(7, 'wtitle', 'some text some text product text  ', '2013-03-10 00:00:00', '1', 5),
(8, 'title11', 'some text some text some text some text some text some text some text some text some text some text ', '2013-04-17 00:00:00', '1', 5),
(9, 'title11', 'some text some text some text some text some text some text some text some text some text some text ', '2013-04-17 00:00:00', '1', 5),
(10, 'title12', 'some text some text some text some text some text some text some text some text some text some text ', '2013-01-17 00:00:00', '1', 5),
(11, 'title13', 'some text some text some text some text some text some text product some text some text some text some text ', '2013-04-27 00:00:00', '1', 6),
(12, 'title14', 'some text some text some text some text some text some text some  text some text ', '2013-04-17 00:00:00', '0', 7);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(25) CHARACTER SET utf8 NOT NULL,
  `last_name` varchar(25) CHARACTER SET utf8 NOT NULL,
  `age` int(2) unsigned NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `age`) VALUES
(1, 'user1name', 'user1lastn', 30),
(3, 'frank', 'lastname', 19),
(4, 'jason', 'jasonlastname', 19),
(5, 'john', 'johnlastname', 29),
(6, 'peter', 'peterlastname', 32),
(7, 'user5name', 'user5lastn', 20);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
