-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Ноя 22 2018 г., 22:24
-- Версия сервера: 10.1.36-MariaDB
-- Версия PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `aviasiya`
--

-- --------------------------------------------------------

--
-- Структура таблицы `tqdk`
--

CREATE TABLE `tqdk` (
  `id` int(11) NOT NULL,
  `cevab` varchar(450) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tqdk`
--

INSERT INTO `tqdk` (`id`, `cevab`) VALUES
(1, 'ADCBABEDCSADCADCBABEDCSADCBABEDCSADCBABEDCSADCBABEDCSBABEDCSADCBABEDCSADCBABEDCSADCBABEDCS'),
(2, 'BEDCSADCBABEDCSBABEDCSADCBABEDCSADCBAADCBABEDCSADCADCBABEDCSADCBABEDCSADCBABEDCSADCBABEDCS'),
(3, 'ADCBABEDCSADCADCBABEDCSBEDCSADCBABEDCSBABEDCSADCBABEDCSADCBAADCBABEDCSADCBABEDCSADCBABEDCS'),
(4, 'DCSADCBABEDCSADCBAADCBABEDCSADCBABEDADCBABEDCSADCADCBABEDCSBEDCSADCBABEDCSBABECSADCBABEDCS');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `tqdk`
--
ALTER TABLE `tqdk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `tqdk`
--
ALTER TABLE `tqdk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
