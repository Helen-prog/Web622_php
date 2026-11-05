-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Окт 28 2026 г., 21:31
-- Версия сервера: 10.4.32-MariaDB
-- Версия PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `db_3`
--

-- --------------------------------------------------------

--
-- Структура таблицы `t1`
--

CREATE TABLE `t1` (
  `ID` int(11) NOT NULL,
  `FName` varchar(40) DEFAULT NULL,
  `Doljnost` varchar(30) DEFAULT NULL,
  `ORab` int(11) DEFAULT NULL,
  `ZP` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `t1`
--

INSERT INTO `t1` (`ID`, `FName`, `Doljnost`, `ORab`, `ZP`) VALUES
(1, 'Абраменко', 'Менеджер', 0, 1500),
(2, 'Авдюха', 'Секретарь', 0, 740),
(3, 'Бутенко', 'Директор', 7, 2560),
(4, 'Бутков', 'Менеджер', 2, 1200),
(5, 'Василенко', 'Оператор', 6, 970),
(6, 'Васильев', 'Менеджер', 6, 1750),
(7, 'Дзюба', 'Переводчик', 2, 1380),
(8, 'Дорошко', 'Оператор', 0, NULL),
(9, 'Ерохин', 'Охраннки', 1, 590),
(10, 'Зайко', 'Дизайнер', 1, 1100),
(11, 'Жукова', 'Оператор', 1, 610),
(12, 'Зубов', 'Секретарь', 2, 750),
(13, 'Иванов', 'Менеджер', 3, 1450),
(14, 'Иванчук', 'Оператор', 4, 670),
(15, 'Исанин', 'Оператор', 3, 1200);

-- --------------------------------------------------------

--
-- Структура таблицы `t2`
--

CREATE TABLE `t2` (
  `ID` int(11) NOT NULL,
  `FName` varchar(40) DEFAULT NULL,
  `D` varchar(30) DEFAULT NULL,
  `Orabot` int(11) DEFAULT NULL,
  `Zp` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `t2`
--

INSERT INTO `t2` (`ID`, `FName`, `D`, `Orabot`, `Zp`) VALUES
(16, 'Исаев', 'Оператор', 2, 1040),
(17, 'Каплун', 'Охраннки', 2, 900),
(18, 'Капуста', 'Оператор', 1, 842),
(19, 'Левин', 'Менеджер', 3, 1450),
(20, 'Лучко', 'Охраннки', 0, NULL),
(21, 'Петров', 'Менеджер', 2, 1400),
(22, 'Пешкова', 'Секретарь', 5, 650),
(23, 'Погорелов', 'Директор', 10, 3150),
(24, 'Стоянов', 'Менеджер', 8, 2200),
(25, 'Чиж', 'Завхоз', 4, 900),
(26, 'Яковленко', 'Секретарь', 2, 690);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `t1`
--
ALTER TABLE `t1`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `t2`
--
ALTER TABLE `t2`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
