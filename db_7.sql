-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Окт 28 2026 г., 22:09
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
-- База данных: `db_7`
--

-- --------------------------------------------------------

--
-- Структура таблицы `customers`
--

CREATE TABLE `customers` (
  `cnum` int(11) NOT NULL,
  `cname` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `snum` int(11) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `customers`
--

INSERT INTO `customers` (`cnum`, `cname`, `city`, `snum`, `rating`) VALUES
(2001, 'Hoffman', 'London', 1001, 100),
(2002, 'Giovanni', 'Rome', 1003, 200),
(2003, 'Liu', 'San Jose', 1002, 200),
(2004, 'Grass', 'Berlin', 1002, 300),
(2006, 'Clemens', 'London', 1001, 100),
(2007, 'Pereira', 'Rome', 1004, 100),
(2008, 'Cisneros', 'San Jose', 1007, 300),
(2009, 'Karl', 'Rome', 1000, 400);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `onum` int(11) NOT NULL,
  `snum` int(11) DEFAULT NULL,
  `cnum` int(11) DEFAULT NULL,
  `amt` float DEFAULT NULL,
  `odate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`onum`, `snum`, `cnum`, `amt`, `odate`) VALUES
(3001, 1007, 2008, 18.69, '1990-03-10 00:00:00'),
(3002, 1004, 2007, 767.19, '1990-03-10 00:00:00'),
(3003, 1001, 2001, 1900.1, '1990-03-10 00:00:00'),
(3005, 1002, 2003, 5160.45, '1990-03-10 00:00:00'),
(3006, 1007, 2008, 1098.16, '1990-03-10 00:00:00'),
(3007, 1002, 2004, 1713.23, '1990-04-10 00:00:00'),
(3008, 1001, 2006, 75.75, '1990-04-10 00:00:00'),
(3009, 1003, 2002, 4723, '1990-05-10 00:00:00'),
(3010, 1002, 2004, 1309.95, '1990-06-10 00:00:00'),
(3011, 1001, 2006, 9891.88, '1990-06-10 00:00:00'),
(3012, 1000, 2009, 421.3, '1990-06-10 00:00:00');

-- --------------------------------------------------------

--
-- Структура таблицы `salespeople`
--

CREATE TABLE `salespeople` (
  `snum` int(11) NOT NULL,
  `sname` varchar(100) DEFAULT NULL,
  `com` float DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `salespeople`
--

INSERT INTO `salespeople` (`snum`, `sname`, `com`, `city`) VALUES
(1000, 'Rikki', 0.9, 'Rome'),
(1001, 'Peel', 0.12, 'London'),
(1002, 'Serres', 0.13, 'San Jose'),
(1003, 'Axelrod', 0.1, 'New York'),
(1004, 'Motika', 0.11, 'London'),
(1007, 'Rifkin', 0.15, 'Barcelona');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`cnum`),
  ADD KEY `snum` (`snum`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`onum`),
  ADD KEY `cnum` (`cnum`),
  ADD KEY `snum` (`snum`);

--
-- Индексы таблицы `salespeople`
--
ALTER TABLE `salespeople`
  ADD PRIMARY KEY (`snum`);

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `customers_ibfk_1` FOREIGN KEY (`snum`) REFERENCES `salespeople` (`snum`);

--
-- Ограничения внешнего ключа таблицы `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`cnum`) REFERENCES `customers` (`cnum`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`snum`) REFERENCES `salespeople` (`snum`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
