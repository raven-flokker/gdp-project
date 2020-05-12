-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Апр 04 2020 г., 14:04
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
(1, 0, 1, 'имя автора 1, имя автора 2, ', 'Фамилия автора 1, Фамилия автора 2, ', 0),
(2, 0, 1, 'имя автора 1', 'Фамилия автора 1', 0);

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
(1, 0, 'ссылка 1, ссылка2 '),
(2, 0, 'ссылка 1');

-- --------------------------------------------------------

--
-- Структура таблицы `members`
--

CREATE TABLE `members` (
  `memb_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `links_id` int(11) NOT NULL,
  `a_id` int(11) NOT NULL,
  `f_name_a_ru` varchar(150) NOT NULL,
  `l_name_a_ru` varchar(150) NOT NULL,
  `m_name_a_ru` varchar(150) NOT NULL,
  `article_ru` text NOT NULL,
  `email_a_ru` varchar(100) NOT NULL,
  `abstracts_ru` text NOT NULL,
  `author` varchar(150) NOT NULL,
  `links` varchar(150) NOT NULL,
  `org_user` varchar(150) NOT NULL,
  `lang` varchar(10) NOT NULL,
  `allowed` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `members`
--

INSERT INTO `members` (`memb_id`, `user_id`, `links_id`, `a_id`, `f_name_a_ru`, `l_name_a_ru`, `m_name_a_ru`, `article_ru`, `email_a_ru`, `abstracts_ru`, `author`, `links`, `org_user`, `lang`, `allowed`) VALUES
(2, 1, 2, 2, 'имя автора 1', 'Фамилия автора 1', 'Отчество автора 1', 'Доклад 2', '1ru@rer.rd', 'xxxxxxxx', '', 'dsdsdss', 'ыавыв', '0', 1),
(3, 1, 0, 0, 'test, tttt', 'test, ttt', 'test, ttt', 'test', 'ru@rer.rd', 'tttt', '', 'ttt, tttt', 'qeweqwqw', '0', 1);

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
(1, 0, 1, 'Организация 1', ''),
(2, 0, 1, 'Организация 1', '');

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
  `country` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(15) NOT NULL,
  `banned` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `first_n`, `last_n`, `middle_n`, `email`, `pass`, `phone`, `country`, `date`, `status`, `banned`) VALUES
(1, 'Admin', 'Фамилия', 'Имя', 'Отчество', 'test@test.com', '$2y$10$ziai65fXSGmmlkRF1mMj8u5v0FVpTqApcOmiDPf2OP5j9FBSgaORC', '+7999999999', 'Russia', '2020-04-01 18:17:43', '1', 0);

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
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `authors`
--
ALTER TABLE `authors`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `country`
--
ALTER TABLE `country`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `links`
--
ALTER TABLE `links`
  MODIFY `links_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `members`
--
ALTER TABLE `members`
  MODIFY `memb_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `organization`
--
ALTER TABLE `organization`
  MODIFY `org_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
