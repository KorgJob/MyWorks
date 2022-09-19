-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 04 2022 г., 00:41
-- Версия сервера: 8.0.24
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `saveforest`
--

-- --------------------------------------------------------

--
-- Структура таблицы `callback`
--

CREATE TABLE `callback` (
  `id` int NOT NULL,
  `name` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `surname` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `city` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `urban` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `telnumber` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `callback`
--

INSERT INTO `callback` (`id`, `name`, `surname`, `city`, `urban`, `telnumber`) VALUES
(1, 'Serejka1', 'Serejka1', 'Serejka1', 'Новосибирская', ''),
(2, 'Серёжа', 'Серёжа', 'Серёжа', 'Серёжа', ''),
(3, 'Иван', 'Петров', 'Иван', 'Московская', ''),
(4, 'Сережа', 'Сережа', 'Сережа', 'Екатеринбургская', ''),
(5, 'Иван', 'Петров', 'Иван', 'Московская', '+79999999999'),
(6, 'Иван', 'Петров', '', '', ''),
(7, '', '', '', 'Новосибирская', ''),
(8, '', '', '', 'Новосибирская', '+7 (222) 222 222'),
(9, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `donate`
--

CREATE TABLE `donate` (
  `id` int NOT NULL,
  `sum` int NOT NULL,
  `login` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `donate`
--

INSERT INTO `donate` (`id`, `sum`, `login`) VALUES
(1, 5000, 'mipis'),
(2, 5000, 'Serejka1'),
(3, 7000, 'Serejka4'),
(4, 10000, 'Serejka4');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int UNSIGNED NOT NULL,
  `login` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `pass` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `img` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `pass`, `name`, `img`) VALUES
(3, 'Alexxx', 'fa22fb87b07ae7407f5ceda208a47996', 'Алексей', ''),
(19, 'dsada', 'dsadsa', 'dsadsa', ''),
(10, 'Fomama', 'fa22fb87b07ae7407f5ceda208a47996', 'Алексей', 'DSC01257.JPG'),
(11, 'Dosyaa', 'fa22fb87b07ae7407f5ceda208a47996', 'Досяяя', ''),
(12, 'Kolloka', 'fa22fb87b07ae7407f5ceda208a47996', 'Калина', 'DSC01257.JPG'),
(8, 'Hololo', 'fa22fb87b07ae7407f5ceda208a47996', 'Андрей', 'DSC01256.JPG'),
(13, 'admin', '09fe1ce9e087f7d0ec089ae4152e5fba', 'admin', 'avatar.png'),
(14, 'Serehjka', 'c58e31491df9e32e26b647d70a695cd1', 'Сергей', 'unnamed.jpg'),
(15, 'Ruslan999', 'd47bafbf2b6bfcf43669726a8fd58da5', 'Руслан Сайфутдинов', 'fin_00000.png'),
(18, 'Serejka2', 'Serejka2', 'Serejka2', ''),
(20, 'Serejka4', '651be327825b93691bd7eded471b3b7f', 'Serejka4', ''),
(22, '>?!!dsa', '9639aba4f57e68f3ff6c5120695a62c3', 'D>SADASD/d.DSA/', ''),
(23, 'DSAD?!!#$EDEA', 'cffccced29bd073447a3f3e690633130', '>DS>AD?>!@', ''),
(24, 'Serejka5', '3264d04e8d5bc393b8b0db335b4dc53a', 'Serejka5', 'DSC01257.JPG');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `callback`
--
ALTER TABLE `callback`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `donate`
--
ALTER TABLE `donate`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `callback`
--
ALTER TABLE `callback`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `donate`
--
ALTER TABLE `donate`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
