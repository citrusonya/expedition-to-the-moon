-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 07 2021 г., 00:44
-- Версия сервера: 10.3.22-MariaDB-log
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `expedition`
--

-- --------------------------------------------------------

--
-- Структура таблицы `country`
--

CREATE TABLE `country` (
  `country_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `country`
--

INSERT INTO `country` (`country_id`, `name`) VALUES
(1, 'Россия'),
(2, 'Германия'),
(3, 'Франция'),
(4, 'Австралия'),
(5, 'Чехия'),
(6, 'Казахстан');

-- --------------------------------------------------------

--
-- Структура таблицы `installations`
--

CREATE TABLE `installations` (
  `inst_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `installations`
--

INSERT INTO `installations` (`inst_id`, `name`) VALUES
(1, 'Voyager'),
(2, 'Crimson'),
(3, 'Newline'),
(4, 'Styx'),
(5, 'Dog'),
(6, 'Cat'),
(7, 'Mouse'),
(8, 'Dove'),
(9, 'Duck'),
(10, 'Sparrow'),
(11, 'Swan'),
(12, 'Boom'),
(13, 'Crush'),
(14, 'Striker');

-- --------------------------------------------------------

--
-- Структура таблицы `rank`
--

CREATE TABLE `rank` (
  `rank_id` int(11) NOT NULL,
  `name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `rank`
--

INSERT INTO `rank` (`rank_id`, `name`) VALUES
(1, 'Старший'),
(2, 'Младший');

-- --------------------------------------------------------

--
-- Структура таблицы `resources`
--

CREATE TABLE `resources` (
  `res_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `UOM` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `resources`
--

INSERT INTO `resources` (`res_id`, `name`, `UOM`) VALUES
(1, 'water', 'л.'),
(2, 'protein', 'гр.'),
(3, 'oxygen', 'куб. м.'),
(4, 'electricity', 'квт.');

-- --------------------------------------------------------

--
-- Структура таблицы `specialization`
--

CREATE TABLE `specialization` (
  `sp_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `specialization`
--

INSERT INTO `specialization` (`sp_id`, `name`) VALUES
(1, 'Командир'),
(2, 'Пилот'),
(3, 'Специалист миссии'),
(4, 'Бортинженер'),
(5, 'Инженер'),
(6, 'Кислородовод'),
(7, 'Протеинолог'),
(8, 'Электрик'),
(9, 'Гидролог');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`) VALUES
(1, 'Александр', 'Орлов', 'admin@gmail.com', '$2y$10$8f4ZDYqUr.inLDdhDzsFb.n31Fz5YyWNNYtIYC758kFZ5QUJAHw.e'),
(2, 'Мария', 'Сиянина', 'see@ya.com', '$2y$10$3cELR1pbo0DlNijNKLn.nOJnr9/Uh8pvb1MwfSyVX54HwkfF1ftWO');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`country_id`);

--
-- Индексы таблицы `installations`
--
ALTER TABLE `installations`
  ADD PRIMARY KEY (`inst_id`);

--
-- Индексы таблицы `rank`
--
ALTER TABLE `rank`
  ADD PRIMARY KEY (`rank_id`);

--
-- Индексы таблицы `resources`
--
ALTER TABLE `resources`
  ADD PRIMARY KEY (`res_id`);

--
-- Индексы таблицы `specialization`
--
ALTER TABLE `specialization`
  ADD PRIMARY KEY (`sp_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `country`
--
ALTER TABLE `country`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `rank`
--
ALTER TABLE `rank`
  MODIFY `rank_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `resources`
--
ALTER TABLE `resources`
  MODIFY `res_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `specialization`
--
ALTER TABLE `specialization`
  MODIFY `sp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
