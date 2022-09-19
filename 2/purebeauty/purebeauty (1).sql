-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 24 2022 г., 03:17
-- Версия сервера: 8.0.15
-- Версия PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `purebeauty`
--

-- --------------------------------------------------------

--
-- Структура таблицы `feedback`
--

CREATE TABLE `feedback` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `phone`, `email`) VALUES
(1, 'Анастасия', '+79055413080', 'letusheva.2002@mail.ru'),
(2, 'Стас', '+79055423480', 'stas223@mail.ru'),
(3, 'Анастасия', '+79055413080', 'letusheva.2002@mail.ru'),
(4, 'Олег', '+79038372233', 'dog@mail.ru'),
(6, 'Анастасия Алексеевна Борисова', '+79055413080', 'letusheva.2002@mail.ru');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(255) NOT NULL,
  `user_name` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `user_id` int(255) NOT NULL,
  `products` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `address` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `payment_method` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `sum` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `user_name`, `user_id`, `products`, `address`, `payment_method`, `sum`, `email`) VALUES
(1, 'creator', 4, 'Крем для тела с ретинолом, Ночной комплекс', 'Москва, Дворцовая площадь, 26, кв. 20, подъезд 3', 'cash', '12420', 'create.world@mail.ru'),
(2, 'maks', 3, 'Крем Harmonize с пробиотиками, Набор для лица, Обновлящий ночной крем', 'Москва, Генерала Кузнецова, 27, подъезд 1, кв. 28, этаж 2, код 3425#28 ', 'card', '22350', 'maks@index.com'),
(3, 'maks', 3, 'Увлажняющий крем для рук', 'Москва, Генерала Кузнецова, 27, подъезд 1, кв. 28, этаж 2, код 3425#28 ', 'card', '4080', 'maks@index.com'),
(4, 'lisa', 2, 'Корректирующий гель, Увлажняющий крем для лица', 'Москва, Золотцовская, 23, подъезд 6, кв. 532, код 2323#532', 'qiwi', '28370', 'lisa@mail.ru'),
(5, 'creator', 4, 'Крем для тела с ретинолом, Крем Harmonize с пробиотиками, Увлажняющий крем для лица', 'Москва, Гостиничная, 55, 43 кв., 2 подъезд', 'cash', '31940', 'create.world@mail.ru'),
(6, 'qwe', 5, 'Обновлящий ночной крем, Увлажняющий крем для рук', 'Москва, Пушкинская, 41, кв. 23, подьезд 3', 'qiwi', '11400', 'remstroy@mail.ru'),
(7, 'creator', 4, 'Увлажняющий крем для рук, Обновлящий ночной крем, Увлажняющий крем для лица', 'Москва, Пушкина, 12, кв. 6', 'cash', '27570', 'create.world@mail.ru'),
(8, 'creator', 4, 'Увлажняющий крем для рук, Обновлящий ночной крем', 'Москва, г Москва, ул 1-я Курьяновская, д 34А, кв 8, г Москва, ул 1-я Курьяновская, д 34А, кв 8, 6 кв., 2 подьезд', 'card', '11400', 'create.world@mail.ru'),
(10, 'admin', 6, 'Увлажняющий крем для рук', 'Москва, Пушкина, 5, 6 кв., 2 подьезд', 'card', '4080', 'borisova.workmail@mail.ru');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `path`) VALUES
(1, 'Крем для тела с ретинолом', '9 160 ₽', '../img/product-1.jpg'),
(2, 'Крем Harmonize с пробиотиками', '6 610 ₽', '../img/product-2.jpg'),
(3, 'Увлажняющий крем для рук', '4 080 ₽', '../img/product-3.jpg'),
(4, 'Обновлящий ночной крем', '7 320 ₽', '../img/product-4.jpg'),
(5, 'Увлажняющий крем для лица', '16 170 ₽', '../img/product-5.jpg'),
(6, 'Ночной комплекс', '3 260 ₽', '../img/product-6.jpg'),
(7, 'Корректирующий гель', '12 200 ₽', '../img/product-7.jpg'),
(8, 'Набор для лица', '8 420 ₽', '../img/product-8.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `email`, `pass`, `role`) VALUES
(1, 'pwrflll', 'admin@mail.ru', '0651f0dbd850140d61f389c7bad1a1aa', 'admin'),
(2, 'lisa', 'lisa@mail.ru', 'c6f7e12ee4aba5ab5784074341c5b447', 'user'),
(3, 'maks', 'maks@index.com', 'c6f7e12ee4aba5ab5784074341c5b447', 'user'),
(4, 'creator', 'create.world@mail.ru', 'c6f7e12ee4aba5ab5784074341c5b447', 'user'),
(5, 'qwe', 'remstroy@mail.ru', 'ef4be90cfd8fbfc7df33383aa619eb3a', 'user'),
(6, 'admin', 'borisova.workmail@mail.ru', 'b4d8c922d437e0987096d66c2a526fd1', 'admin');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
