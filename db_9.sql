-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Окт 28 2026 г., 22:28
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
-- База данных: `db_9`
--

-- --------------------------------------------------------

--
-- Структура таблицы `exzamen`
--

CREATE TABLE `exzamen` (
  `Id_St` smallint(6) NOT NULL,
  `Predmet` varchar(50) NOT NULL,
  `Data` datetime DEFAULT NULL,
  `Ball` smallint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `exzamen`
--

INSERT INTO `exzamen` (`Id_St`, `Predmet`, `Data`, `Ball`) VALUES
(1, 'Дифференциальные уравнения', '2008-01-03 00:00:00', 4),
(1, 'Иностр. язык', NULL, NULL),
(1, 'Математический анализ', '2008-01-09 00:00:00', 3),
(2, 'Математический анализ', '2008-01-09 00:00:00', 5),
(2, 'Социология', '2008-01-06 00:00:00', 4),
(2, 'Теория информации', '2008-01-03 00:00:00', 4),
(3, 'Политология', '2008-01-06 00:00:00', 5),
(3, 'Философия', '2008-01-09 00:00:00', 5),
(4, 'Аналитическая геометрия', '2008-01-09 00:00:00', 5),
(4, 'Иностр. язык', '2008-01-06 00:00:00', 5),
(4, 'Квантовая механика', '2008-01-03 00:00:00', 4),
(5, 'Дифференциальные уравнения', '2008-01-03 00:00:00', 5),
(5, 'Разработка ПО', '2008-01-06 00:00:00', 5),
(5, 'Украинский язык', '2008-01-09 00:00:00', 4),
(6, 'Политология', '2008-01-06 00:00:00', 4),
(6, 'Философия', '2008-01-09 00:00:00', 3),
(7, 'Аналитическая геометрия', '2008-01-09 00:00:00', 3),
(7, 'Иностр. язык', NULL, NULL),
(7, 'Квантовая механика', '2008-01-03 00:00:00', 5);

-- --------------------------------------------------------

--
-- Структура таблицы `g`
--

CREATE TABLE `g` (
  `Group` varchar(50) NOT NULL,
  `Kafedra` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `g`
--

INSERT INTO `g` (`Group`, `Kafedra`) VALUES
('ФМ151', 'Каф. Информатики'),
('ФМ153', 'Каф. Математики'),
('ФТ151', 'Каф. Технологии'),
('ФТ152', 'Каф. Технологии'),
('ФТ252', 'Каф. Физики');

-- --------------------------------------------------------

--
-- Структура таблицы `kafedra`
--

CREATE TABLE `kafedra` (
  `Kafedra` varchar(50) NOT NULL,
  `Decanat` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `kafedra`
--

INSERT INTO `kafedra` (`Kafedra`, `Decanat`) VALUES
('Каф. Информатики', 'Физико-математический'),
('Каф. Математики', 'Физико-математический'),
('Каф. Технологии', 'Физико-технический'),
('Каф. Физики', 'Физико-технический');

-- --------------------------------------------------------

--
-- Структура таблицы `student`
--

CREATE TABLE `student` (
  `ID_St` smallint(6) NOT NULL,
  `FIO` varchar(50) DEFAULT NULL,
  `Group` varchar(50) DEFAULT NULL,
  `Special` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `student`
--

INSERT INTO `student` (`ID_St`, `FIO`, `Group`, `Special`) VALUES
(1, 'Петров Александр Васильевич', 'ФМ151', 'Математика и ПО'),
(2, 'Васильева Ольга Степановна', 'ФМ151', 'Математика и ПО'),
(3, 'Иванов Сергей Николаевич', 'ФТ151', 'Технология машиностроения'),
(4, 'Шутов Анатолий Александрович', 'ФТ252', 'Строительство и проектирование'),
(5, 'Турина Анжела Эдуардовна', 'ФМ153', 'IT технологии'),
(6, 'Радионов Андрей Сергеевич', 'ФТ152', 'Строительство и проектирование'),
(7, 'Антонов Степан Андреевич', 'ФТ252', 'Строительство и проектирование');

-- --------------------------------------------------------

--
-- Структура таблицы `zachetki`
--

CREATE TABLE `zachetki` (
  `Id_Studenta` smallint(6) NOT NULL,
  `N_Z` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `zachetki`
--

INSERT INTO `zachetki` (`Id_Studenta`, `N_Z`) VALUES
(1, 345852),
(2, 345851),
(3, 124589),
(4, 144456),
(5, 345853),
(6, 124653),
(7, 144450);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `exzamen`
--
ALTER TABLE `exzamen`
  ADD PRIMARY KEY (`Id_St`,`Predmet`);

--
-- Индексы таблицы `g`
--
ALTER TABLE `g`
  ADD PRIMARY KEY (`Group`),
  ADD KEY `Kafedra` (`Kafedra`);

--
-- Индексы таблицы `kafedra`
--
ALTER TABLE `kafedra`
  ADD PRIMARY KEY (`Kafedra`);

--
-- Индексы таблицы `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`ID_St`),
  ADD KEY `Group` (`Group`);

--
-- Индексы таблицы `zachetki`
--
ALTER TABLE `zachetki`
  ADD PRIMARY KEY (`Id_Studenta`);

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `exzamen`
--
ALTER TABLE `exzamen`
  ADD CONSTRAINT `exzamen_ibfk_1` FOREIGN KEY (`Id_St`) REFERENCES `student` (`ID_St`),
  ADD CONSTRAINT `exzamen_ibfk_2` FOREIGN KEY (`Id_St`) REFERENCES `zachetki` (`Id_Studenta`);

--
-- Ограничения внешнего ключа таблицы `g`
--
ALTER TABLE `g`
  ADD CONSTRAINT `g_ibfk_1` FOREIGN KEY (`Kafedra`) REFERENCES `kafedra` (`Kafedra`);

--
-- Ограничения внешнего ключа таблицы `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`Group`) REFERENCES `g` (`Group`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
