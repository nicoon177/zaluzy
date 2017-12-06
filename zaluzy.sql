-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Час створення: Гру 06 2017 р., 21:26
-- Версія сервера: 5.7.19
-- Версія PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `zaluzy`
--

-- --------------------------------------------------------

--
-- Структура таблиці `apps`
--

CREATE TABLE `apps` (
  `id` int(11) NOT NULL,
  `name_app` varchar(255) NOT NULL,
  `phone_app` varchar(255) NOT NULL,
  `dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `apps`
--

INSERT INTO `apps` (`id`, `name_app`, `phone_app`, `dt`) VALUES
(7, '', '', '2017-12-06 18:15:00'),
(8, '', '', '2017-12-06 18:18:36'),
(9, '', '', '2017-12-06 18:19:53'),
(10, '', '', '2017-12-06 18:21:50'),
(11, 'ivan', '097123123', '2017-12-06 18:22:40'),
(12, '', '', '2017-12-06 18:24:18'),
(13, '', '', '2017-12-06 18:24:50'),
(14, '', '', '2017-12-06 18:25:08'),
(15, '', '', '2017-12-06 18:25:20');

-- --------------------------------------------------------

--
-- Структура таблиці `consult`
--

CREATE TABLE `consult` (
  `id` int(11) NOT NULL,
  `name_c` varchar(255) NOT NULL,
  `phone_c` int(11) NOT NULL,
  `dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `consult`
--

INSERT INTO `consult` (`id`, `name_c`, `phone_c`, `dt`) VALUES
(1, 'vasya', 972222222, '2017-12-06 18:24:18');

-- --------------------------------------------------------

--
-- Структура таблиці `gorizontal`
--

CREATE TABLE `gorizontal` (
  `id` int(11) NOT NULL,
  `name_h` varchar(255) NOT NULL,
  `phone_h` int(12) NOT NULL,
  `dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `gorizontal`
--

INSERT INTO `gorizontal` (`id`, `name_h`, `phone_h`, `dt`) VALUES
(1, 'mykola', 93000000, '2017-12-06 18:15:00'),
(2, 'mykola', 93000000, '2017-12-06 18:15:00');

-- --------------------------------------------------------

--
-- Структура таблиці `offer`
--

CREATE TABLE `offer` (
  `id` int(11) NOT NULL,
  `name_o` varchar(255) NOT NULL,
  `phone_o` int(12) NOT NULL,
  `dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `offer`
--

INSERT INTO `offer` (`id`, `name_o`, `phone_o`, `dt`) VALUES
(1, 'fedor', 972637524, '2017-12-06 18:12:43');

-- --------------------------------------------------------

--
-- Структура таблиці `pleated`
--

CREATE TABLE `pleated` (
  `id` int(11) NOT NULL,
  `name_p` varchar(255) NOT NULL,
  `phone_p` int(12) NOT NULL,
  `dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `pleated`
--

INSERT INTO `pleated` (`id`, `name_p`, `phone_p`, `dt`) VALUES
(1, 'Маша', 970000000, '2017-12-06 18:25:20'),
(2, 'Маша', 970000000, '2017-12-06 18:25:20');

-- --------------------------------------------------------

--
-- Структура таблиці `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `name_q` varchar(255) NOT NULL,
  `phone_q` int(12) NOT NULL,
  `questions_q` text NOT NULL,
  `dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `questions`
--

INSERT INTO `questions` (`id`, `name_q`, `phone_q`, `questions_q`, `dt`) VALUES
(1, 'Коля', 380970000, 'все круто', '2017-12-06 18:21:50');

-- --------------------------------------------------------

--
-- Структура таблиці `roll`
--

CREATE TABLE `roll` (
  `id` int(11) NOT NULL,
  `name_r` varchar(255) NOT NULL,
  `phone_r` int(12) NOT NULL,
  `dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `roll`
--

INSERT INTO `roll` (`id`, `name_r`, `phone_r`, `dt`) VALUES
(1, 'Юля', 97000000, '2017-12-06 18:25:08'),
(2, 'Юля', 97000000, '2017-12-06 18:25:08');

-- --------------------------------------------------------

--
-- Структура таблиці `vertical`
--

CREATE TABLE `vertical` (
  `id` int(11) NOT NULL,
  `name_v` varchar(255) NOT NULL,
  `phone_v` int(11) NOT NULL,
  `dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `vertical`
--

INSERT INTO `vertical` (`id`, `name_v`, `phone_v`, `dt`) VALUES
(1, 'ivan', 97000000, '2017-12-06 18:24:50'),
(2, 'ivan', 97000000, '2017-12-06 18:24:50');

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `apps`
--
ALTER TABLE `apps`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `consult`
--
ALTER TABLE `consult`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `gorizontal`
--
ALTER TABLE `gorizontal`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `offer`
--
ALTER TABLE `offer`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `pleated`
--
ALTER TABLE `pleated`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `roll`
--
ALTER TABLE `roll`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `vertical`
--
ALTER TABLE `vertical`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `apps`
--
ALTER TABLE `apps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT для таблиці `consult`
--
ALTER TABLE `consult`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблиці `gorizontal`
--
ALTER TABLE `gorizontal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблиці `offer`
--
ALTER TABLE `offer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблиці `pleated`
--
ALTER TABLE `pleated`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблиці `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблиці `roll`
--
ALTER TABLE `roll`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблиці `vertical`
--
ALTER TABLE `vertical`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
