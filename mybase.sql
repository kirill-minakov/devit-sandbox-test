-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 23 2021 г., 14:59
-- Версия сервера: 5.6.47
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `mybase`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(355) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `login` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` int(1) NOT NULL DEFAULT '0',
  `block` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `full_name`, `login`, `email`, `password`, `avatar`, `tel`, `admin`, `block`) VALUES
(1, 'Гриша', 'aiisq2', 'asd21@gmail.com', '123', 'uploads/1613329686big_108068.jpg', '', 1, 0),
(2, 'teyqw', '22123', 'wqdq@gmail.com', '202cb962ac59075b964b07152d234b70', 'uploads/1613329836big_108068.jpg', '', 1, 0),
(3, 'iuyhiu', '13erqw', 'asd21@gmail.com', '202cb962ac59075b964b07152d234b70', 'uploads/1613330054big_108068.jpg', '', 0, 1),
(4, '1ывф', 'test', 'asdad@gmail.com', '202cb962ac59075b964b07152d234b70', 'uploads/1613331092big_108068.jpg', '', 0, 0),
(5, 'tew', '3322', '2rqwd@gmail.com', '202cb962ac59075b964b07152d234b70', 'uploads/1613331314big_108068.jpg', '', 0, 0),
(6, 'admin', 'admin123', 'qwdqw@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'uploads/1613420990big_108068.jpg', '', 0, 0),
(7, 'Кирилл Алексеевич', 'admin123', 'asdas@gmai.com', '827ccb0eea8a706c4c34a16891f84e7b', 'uploads/1613421555c70487467b800f4a65003babc80b3345.jpg', '3890984221', 0, 0),
(8, 'admin admin12123123123', 'admin', 'admin@example.com', 'f5bb0c8de146c67b44babbf4e6584cc0', 'uploads/1613912409intro1.jpg', '123123123', 1, 0),
(9, 'test 123123', 'test', 'admin@example.com', 'f5bb0c8de146c67b44babbf4e6584cc0', 'uploads/1613912409intro1.jpg', '123123123', 0, 0),
(10, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', 'uploads/1613918722', '', 0, 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
