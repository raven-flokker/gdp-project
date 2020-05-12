-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Апр 02 2020 г., 18:48
-- Версия сервера: 10.1.30-MariaDB
-- Версия PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `gdp-nano`
--

-- --------------------------------------------------------

--
-- Структура таблицы `authors`
--

CREATE TABLE `authors` (
  `a_id` int(11) NOT NULL,
  `memb_id` int(11) NOT NULL,
  `a_user_id` int(11) NOT NULL,
  `f_name_a_ru` varchar(150) NOT NULL,
  `l_name_a_ru` varchar(150) NOT NULL,
  `m_name_a_ru` int(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `authors`
--

INSERT INTO `authors` (`a_id`, `memb_id`, `a_user_id`, `f_name_a_ru`, `l_name_a_ru`, `m_name_a_ru`) VALUES
(1, 2, 1, 'fsddd, 231', 'ewer, 3213', 0),
(2, 0, 1, 'eqweewq, fsfsd', 'eqwewq, fssffds', 0),
(3, 4, 1, 'eqweewq, eqweewq', 'eqwewq, eqwewq', 0),
(4, 6, 1, 'eqweewq, eqweewq', 'eqwewq, eqwewq', 0),
(5, 0, 1, 'eqweewq, eqweewq', 'eqwewq, eqwewq', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `country`
--

CREATE TABLE `country` (
  `country_id` int(11) NOT NULL,
  `name_country` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `country`
--

INSERT INTO `country` (`country_id`, `name_country`) VALUES
(1, 'Россия'),
(2, 'США');

-- --------------------------------------------------------

--
-- Структура таблицы `links`
--

CREATE TABLE `links` (
  `links_id` int(11) NOT NULL,
  `memb_id` int(11) NOT NULL,
  `links` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `links`
--

INSERT INTO `links` (`links_id`, `memb_id`, `links`) VALUES
(1, 2, 'sddssdsd, dsdsdss'),
(2, 0, 'fsfsd, sfdfdsf2'),
(3, 4, 'fsfsd, fsfsd'),
(4, 6, 'fsfsd, fsfsd'),
(5, 0, 'fsfsd, fsfsd');

-- --------------------------------------------------------

--
-- Структура таблицы `members`
--

CREATE TABLE `members` (
  `memb_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `links_id` int(11) NOT NULL,
  `a_id` int(11) NOT NULL,
  `article_ru` text NOT NULL,
  `f_name_a_ru` varchar(150) NOT NULL,
  `l_name_a_ru` varchar(150) NOT NULL,
  `m_name_a_ru` varchar(150) NOT NULL,
  `email_a_ru` varchar(100) NOT NULL,
  `abstracts_ru` text NOT NULL,
  `links_ru` text NOT NULL,
  `article_en` text NOT NULL,
  `f_name_a_en` varchar(150) NOT NULL,
  `l_name_a_en` varchar(150) NOT NULL,
  `m_name_a_en` varchar(150) NOT NULL,
  `email_a_en` varchar(100) NOT NULL,
  `abstract_en` text NOT NULL,
  `links_en` text NOT NULL,
  `author` varchar(150) NOT NULL,
  `lang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `members`
--

INSERT INTO `members` (`memb_id`, `user_id`, `links_id`, `a_id`, `article_ru`, `f_name_a_ru`, `l_name_a_ru`, `m_name_a_ru`, `email_a_ru`, `abstracts_ru`, `links_ru`, `article_en`, `f_name_a_en`, `l_name_a_en`, `m_name_a_en`, `email_a_en`, `abstract_en`, `links_en`, `author`, `lang`) VALUES
(1, 1, 0, 0, 'test doclad', '', '', '', 'ru@rer.rd', 'eeeeeee', '', '', '', '', '', '', '', '', '', 0),
(2, 1, 0, 0, 'sdf', '', '', '', 'ru@rer.rd', '12321sadfmysqli_insert_id($link);mysqli_insert_id($link);mysqli_insert_id($link);mysqli_insert_id($link);mysqli_insert_id($link);mysqli_insert_id($link);mysqli_insert_id($link);mysqli_insert_id($link);mysqli_insert_id($link);mysqli_insert_id($link);mysqli_insert_id($link);mysqli_insert_id($link);mysqli_insert_id($link);mysqli_insert_id($link);mysqli_insert_id($link);mysqli_insert_id($link);mysqli_insert_id($link);mysqli_insert_id($link);mysqli_insert_id($link);mysqli_insert_id($link);mysqli_insert_id($link);mysqli_insert_id($link);mysqli_insert_id($link);', '', '', '', '', '', '', '', '', '', 0),
(3, 1, 2, 2, 'qqqqqqqqqqqqqqqq', '', '', '', 'ru@rer.rd', 'fdsfdddd', '', '', '', '', '', '', '', '', '', 0),
(4, 1, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0),
(5, 0, 3, 3, 'qqqqqqqqqqqqqqqq2', '', '', '', 'ru@rer.rd', 'fdsfdddd', '', '', '', '', '', '', '', '', '', 0),
(6, 1, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0),
(7, 0, 4, 4, 'qqqqqqqqqqqqqqqq3', '', '', '', 'ru@rer.rd', 'fdsfdddd', '', '', '', '', '', '', '', '', '', 0),
(8, 1, 5, 5, 'qqqqqqqqqqqqqqqq4', '', '', '', 'ru@rer.rd', 'fdsfdddd', '', '', '', '', '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `organization`
--

CREATE TABLE `organization` (
  `org_id` int(11) NOT NULL,
  `memb_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `org_user` varchar(250) NOT NULL,
  `org_user_en` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `organization`
--

INSERT INTO `organization` (`org_id`, `memb_id`, `id`, `org_user`, `org_user_en`) VALUES
(1, 2, 1, 'dfsdfq', ''),
(2, 0, 1, 'fdsffds', ''),
(3, 4, 1, 'fdsffds', ''),
(4, 6, 1, 'fdsffds', ''),
(5, 0, 1, 'fdsffds', '');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(60) NOT NULL,
  `first_n` varchar(150) NOT NULL,
  `last_n` varchar(150) NOT NULL,
  `middle_n` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(60) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `country_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(15) NOT NULL,
  `banned` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `first_n`, `last_n`, `middle_n`, `email`, `pass`, `phone`, `country_id`, `date`, `status`, `banned`) VALUES
(1, 'Admin', 'Фамилия', 'Имя', 'Отчество', 'test@test.com', '$2y$10$ziai65fXSGmmlkRF1mMj8u5v0FVpTqApcOmiDPf2OP5j9FBSgaORC', '+7999999999', 2, '2020-04-01 18:17:43', '1', 0),
(3, 'test3', 'Фамилия', 'Имя', 'Отчество', 'tee2st@test.com', '$2y$10$Az9cAbbtCBMsS11lIgh3PuRUUMgjCRi.EQE2HRdA3KE2L84MZgjFO', '', 1, '2020-04-02 16:11:53', '0', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`a_id`),
  ADD KEY `memb_id` (`memb_id`),
  ADD KEY `a_user_id` (`a_user_id`);

--
-- Индексы таблицы `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`country_id`);

--
-- Индексы таблицы `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`links_id`),
  ADD KEY `memb_id` (`memb_id`);

--
-- Индексы таблицы `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`memb_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `links_id` (`links_id`),
  ADD KEY `a_id` (`a_id`);

--
-- Индексы таблицы `organization`
--
ALTER TABLE `organization`
  ADD PRIMARY KEY (`org_id`),
  ADD KEY `memb_id` (`memb_id`),
  ADD KEY `id` (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `country_id` (`country_id`),
  ADD KEY `country_id_2` (`country_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `authors`
--
ALTER TABLE `authors`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `country`
--
ALTER TABLE `country`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `links`
--
ALTER TABLE `links`
  MODIFY `links_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `members`
--
ALTER TABLE `members`
  MODIFY `memb_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `organization`
--
ALTER TABLE `organization`
  MODIFY `org_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
