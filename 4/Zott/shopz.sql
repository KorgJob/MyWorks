-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 25 2022 г., 15:24
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
-- База данных: `shopz`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `category_id` int NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `gender` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `gender`) VALUES
(3, 'КурткиМ', 'Мужское'),
(4, 'БрюкиМ', 'Мужское'),
(5, 'ТолстовкиМ', 'Мужское'),
(14, 'ФутболкиМ', 'Мужское'),
(15, 'КурткиЖ', 'Женское'),
(16, 'БрюкиЖ', 'Женское'),
(17, 'ТолстовкиЖ', 'Женское'),
(18, 'ФутболкиЖ', 'Женское'),
(19, 'КурткиД', 'Дети'),
(20, 'БрюкиД', 'Дети'),
(21, 'ТолстовкиД', 'Дети'),
(22, 'ФутболкиД', 'Дети'),
(23, 'КурткиС', ''),
(24, 'БрюкиС', ''),
(25, 'ТолстовкиС', ''),
(26, 'ФутболкиС', ''),
(27, 'Бестселлеры ', '');

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
  `goods_id` int NOT NULL,
  `goods_name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `count` int NOT NULL,
  `about` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `category` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`goods_id`, `goods_name`, `img`, `price`, `count`, `about`, `brand`, `category`) VALUES
(5, 'Ветровка мужская FILA', 'man1.jpg', '4339 ₽', 7, 'Легкая непродуваемая куртка в классическом спортивном стиле FILA', 'FILA', 3),
(6, 'Ветровка мужская Nike', 'man2.jpg', '9799 ₽', 6, 'Ветровка Nike Sportswear Heritage Windrunner в классическом спортивном стиле бренда создана по мотивам легендарной модели Windrunner.', 'NIKE', 3),
(7, 'Ветровка мужская PUMA Teamliga', 'man3.jpg', '7199 ₽', 10, 'Ветрозащитная куртка PUMA не даст капризам погоды сорвать тренировку.', 'PUMA', 3),
(8, 'Брюки мужские FILA', 'man4.jpg', '2729 ₽', 10, 'Удобные брюки FILA с оригинальным дизайном помогут создать запоминающийся спортивный образ.', 'FILA', 4),
(9, 'Брюки мужские PUMA Active Woven', 'man5.jpg', '3899 ₽', 10, 'Технологичные брюки PUMA — отличный выбор для поклонников активного отдыха.', 'PUMA', 4),
(10, 'Брюки мужские The North Face', 'man6.jpg', '9499 ₽\r\n', 10, 'Универсальные брюки The North Face отлично подойдут для походов и хайкинга в теплые летние дни.', 'TNF', 4),
(11, 'Худи мужская The North Face Standard', 'man7.jpg', '10199 ₽', 10, 'Классическая худи с крупным логотипом The North Face станет отличным выбором для активного отдыха на природе.', 'TNF', 5),
(12, 'Худи мужская PUMA Modern Basics', 'man8.jpg', '4999 ₽', 10, 'Худи PUMA для комфортного образа в спортивном стиле.', 'PUMA', 5),
(13, 'Худи мужская FILA', 'man9.jpg', '10399 ₽', 10, 'Худи FILA станет идеальной основой для образа в спортивном стиле.', 'FILA', 5),
(14, 'Футболка мужская PUMA ESS 2\r\n', 'man10.jpg', '2299 ₽\r\n', 10, 'Стильная футболка с логотипом PUMA для запоминающегося образа в спортивном стиле.', 'PUMA', 14),
(15, 'Футболка мужская Nike Sportswear', 'man11.jpg', '2399 ₽', 10, 'Хлопковая футболка Nike с вышитым логотипом дополнит гардероб в спортивном стиле.', 'NIKE', 14),
(16, 'Футболка мужская Nike Sportswear', 'man12.jpg', '2399 ₽', 10, 'Футболка от Nike — идеальный выбор для создания образа в спортивном стиле.', 'NIKE', 14),
(17, 'Ветровка женская Nike Sportswear', 'wom1.jpg', '7199 ₽', 10, 'Ветровка от Nike — отличный выбор для прогулки по городу.', 'NIKE', 15),
(18, 'Куртка женская The North Face', 'wom2.jpg', '53499 ₽', 5, 'Dragline Jacket — технологичная горнолыжная куртка, которая идеально подходит как для склона, так и для аляски.', 'TNF', 15),
(19, 'Анорак женский FILA', 'wom3.jpg', '5249 ₽', 10, 'Яркий анорак от FILA пригодится на прогулке в пасмурный день.', 'FILA', 15),
(20, 'Брюки женские FILA', 'wom4.jpg', '3429 ₽', 10, 'Комфортные брюки от FILA станут прекрасной базой для образа в спортивном стиле.', 'FILA', 16),
(21, 'Брюки женские PUMA Power', 'wom5.jpg', '5499 ₽', 10, 'Удобные брюки PUMA станут отличной основой для повседневного спортивного образа.', 'PUMA', 16),
(22, 'Брюки женские Nike Sportswear', 'wom6.jpg', '5599 ₽', 10, 'Отличное завершение образа в спортивном стиле — мягкие и комфортные брюки с начесом Nike Sportswear Essential.', 'NIKE', 16),
(23, 'Свитшот женский Nike Dri-FIT', 'wom7.jpg', '6499 ₽', 10, 'Свитшот Nike Dri-FIT Get Fit для комфортных тренировок, когда прохладно.', 'NIKE', 17),
(24, 'Худи женская The North Face Hoodie', 'wom8.jpg', '10399 ₽', 10, 'Удобная худи The North Face — отличный вариант, чтобы выбраться на природу в выходной день.', 'TNF', 17),
(25, 'Худи женская PUMA ESS Logo', 'wom9.jpg', '4999 ₽', 10, 'Худи PUMA пригодится на прогулке в прохладный день.', 'PUMA', 17),
(26, 'Футболка женская PUMA Power', 'wom10.jpg', '2899 ₽', 10, 'Футболка с логотипом и надписью PUMA на рукавах отлично впишется в твой спортивный гардероб.', 'PUMA', 18),
(27, 'Футболка женская FILA', 'wom11.jpg', '1399 ₽', 10, 'Для комфортного летнего образа отлично подойдет футболка FILA с большим логотипом бренда.', 'FILA', 18),
(28, 'Футболка женская Nike Dri-FIT One', 'wom12.jpg', '2799 ₽', 10, 'Суперуниверсальная футболка Nike Dri-FIT One подойдет для любых видов тренировок.', 'NIKE', 18),
(29, 'Куртка для мальчиков FILA', 'child1.jpg', '4959 ₽', 10, 'Куртка от FILA — отличный выбор для прогулок в прохладную погоду.', 'FILA', 19),
(30, 'Ветровка для мальчиков Nike', 'child2.jpg', '6999 ₽', 10, 'Легендарная ветровка Nike Sportswear Windrunner — то что нужно для образа в спортивном стиле.', 'NIKE', 19),
(31, 'Куртка для девочек FILA', 'child3.jpg', '4959 ₽', 10, 'Куртка от FILA — отличный выбор для прогулок в прохладную погоду.', 'FILA', 19),
(32, 'Брюки для мальчиков FILA', 'child4.jpg', '2599 ₽', 10, 'Удобные и практичные брюки FILA станут прекрасной основой для образа в спортивном стиле.', 'FILA', 20),
(33, 'Брюки для мальчиков Nike Sportswear', 'child5.jpg', '3899 ₽', 10, 'Детские брюки от Nike — отличный выбор для создания запоминающегося образа в спортивном стиле.', 'NIKE', 20),
(34, 'Легинсы для девочек Nike Sportswear', 'child6.jpg', '2599 ₽', 10, 'Легинсы Nike из мягкого эластичного джерси понравятся юным любительницам спортивного стиля.', 'NIKE', 20),
(35, 'Худи для мальчиков The North Face Box', 'child7.jpg', '7199 ₽', 10, 'Чтобы юные любители приключений не замерзли, дополните их походную экипировку худи The North Face.', 'TNF', 21),
(36, 'Худи для девочек Nike Sportswear', 'child8.jpg', '5599 ₽', 10, 'Теплая и удобная худи — то что нужно для комфортных прогулок по городу.', 'NIKE', 21),
(37, 'Худи для девочек FILA', 'child9.jpg', '2099 ₽', 10, 'Худи от FILA для создания комфортного образа в спортивном стиле.', 'FILA', 21),
(38, 'Футболка для мальчиков PUMA Classics', 'child10.jpg', '2199 ₽', 10, 'Футболка от PUMA, декорированная винтажным логотипом бренда, — идеальный выбор для яркого городского образа.', 'PUMA', 22),
(39, 'Футболка для девочек Nike Sportswear', 'child11.jpg', '1999 ₽', 10, 'Swoosh много не бывает! Укороченная футболка Nike Sportswear, украшенная повторяющимся логопринтом, понравится девочкам, которые любят запоминающиеся образы.', 'NIKE', 22),
(40, 'Майка для девочек FILA', 'child12.jpg', '1599 ₽', 10, 'Футболка FILA отлично подойдет для бега.', 'FILA', 22),
(41, 'Куртка утепленная мужская FILA', 'sale1.jpg', '6439 ₽', 10, 'Утепленный бомбер от FILA — то что нужно для прогулки в холодный день.', 'FILA', 23),
(42, 'Куртка утепленная женская FILA', 'sale2.jpg', '5459 ₽', 10, 'Утепленная куртка FILA — отличный выбор для прогулок в прохладную погоду.', 'FILA', 23),
(43, 'Куртка утепленная мужская FILA', 'sale3.jpg', '5249 ₽', 10, 'Утепленная куртка FILA для комфорта в холодные дни.', 'FILA', 23),
(44, 'Брюки женские FILA', 'sale4.jpg', '3009 ₽', 10, 'Хлопковые брюки от FILA для комфортных прогулок.', 'FILA', 24),
(45, 'Брюки женские Nike Dri-FIT', 'sale5.jpg', '3219 ₽', 10, 'Футбольные брюки Nike Dri-FIT Academy для тренировок и игр.', 'NIKE', 24),
(46, 'Брюки мужские FILA', 'sale6.jpg', '3429 ₽', 10, 'Комфортные брюки от FILA — удачный вариант для прогулок.', 'FILA', 24),
(47, 'Худи мужская The North Face', 'sale7.jpg', '8199 ₽', 10, 'Удобная худи Drew Peak от The North Face отлично подходит для активного отдыха на природе, и при этом смотрится стильно.', 'TNF', 25),
(48, 'Толстовка мужская FILA', 'sale8.jpg', '4339 ₽', 10, 'Хлопковая толстовка от FILA для комфортного образа в спортивном стиле.', 'FILA', 25),
(49, 'Худи FILA', 'sale9.jpg', '4409 ₽', 10, 'Универсальная худи от FILA пригодится и в мужском, и в женском гардеробе.', 'FILA', 25),
(50, 'Футболка мужская FILA', 'sale10.jpg', '1539 ₽', 10, 'Комфортной футболке от FILA всегда найдется место в гардеробе поклонника спортивного стиля.', 'FILA', 26),
(51, 'Футболка женская Nike Sportswear', 'sale11.jpg', '2399 ₽', 10, 'Футболка от Nike c перламутровым принтом станет интересным акцентом в образе.', 'NIKE', 26),
(52, 'Футболка мужская Nike Barcelona', 'sale12.jpg', '7599 ₽', 10, 'Футбольное джерси Nike из домашней формы ФК \"Барселона\" — отличный способ поддержать любимую команду.', 'NIKE', 26),
(53, 'Пуховик мужской The North Face Diablo', 'bestl1.jpg', '40499 ₽', 15, 'C The North Face Diablo вам не страшны холод и дождь! Теплый и практичный пуховик, выполненный из прочного материала рипстоп, — идеальный выбор для походов и активного отдыха на природе!', 'TNF', 27),
(54, 'Брюки женские Nike Sportswear', 'bestl2.jpg', '12299 ₽', 10, 'Брюки Nike Sportswear Tech Fleece для комфортного образа на каждый день.', 'NIKE', 27),
(55, 'Худи мужская Nike Sportswear', 'bestl3.jpg', '8499 ₽', 10, 'Худи в спортивном стиле от Nike поможет создать яркий образ.', 'NIKE', 27),
(56, 'Футболка женская The North Face', 'bestl4.jpg', '5599 ₽', 10, 'Практичная футболка для любых видов активностей на свежем воздухе.', 'TNF', 27);

-- --------------------------------------------------------

--
-- Структура таблицы `info_users`
--

CREATE TABLE `info_users` (
  `id_info` int NOT NULL,
  `name_info` varchar(255) NOT NULL,
  `surname_info` varchar(255) NOT NULL,
  `city_info` varchar(255) NOT NULL,
  `address_info` varchar(255) NOT NULL,
  `index_info` varchar(255) NOT NULL,
  `user_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `info_users`
--

INSERT INTO `info_users` (`id_info`, `name_info`, `surname_info`, `city_info`, `address_info`, `index_info`, `user_id`) VALUES
(5, 'Сергей', 'Сергей', 'Москва', 'Сергей', 'Сергей', 1),
(6, 'Сергей', 'Дружигиг', 'Москва', 'Московская область, Мытищи, Силикатная улица, 49к5', '109235', 2),
(8, 'dsdas', 'dsadas', 'Москва', 'dasdsa', '12331', 6),
(14, 'Сергей', 'Дружинин', 'Москва', 'Силикатная 49к5', '109237', 8),
(18, 'dsadsa', 'dsadsa', 'Москва', 'dsadsa', 'dsadsa', 7);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `order_id` int NOT NULL,
  `order_number` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `goods_id` int NOT NULL,
  `goods_count` varchar(255) NOT NULL,
  `user_id` int NOT NULL,
  `order_status` varchar(255) NOT NULL,
  `total_sum` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`order_id`, `order_number`, `goods_id`, `goods_count`, `user_id`, `order_status`, `total_sum`) VALUES
(18, '22', 6, '1', 8, 'Идёт доставка', '14138 ₽'),
(21, '338', 5, '1', 7, 'В отправке!', '14138 ₽'),
(22, '338', 6, '1', 7, 'В отправке!', '14138 ₽');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `name`, `pass`, `role`) VALUES
(1, 'mipis@mail.ru', 'mipis', 'c2e63cb62b807768f1a4bbfcad088b1c', 'user'),
(2, 'mipis1@mail.ru', 'mipis1', 'ef426424575cde9b4211d8185ad855d4', 'user'),
(3, 'mipis3@mail.ru', 'mipis3', 'e091a629693a80fd2375e862911493d1', 'user'),
(5, 'admin@mail.ru', 'admin', '45dc02c44dc7894dcc56135d8d0c16a6', 'admin'),
(6, 'mipis4@mail.ru', 'mipis4', '79d8886b9ef9d29f41e09adc997ed664', 'user'),
(7, 'mipis5@mail.ru', 'mipis5', '6daebf4cae19849866aff5916b3380fc', 'user'),
(8, 'serejka2@mail.ru', 'Сергей', 'e5a75335cf5ccb0477335f98a14a211a', 'user');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`),
  ADD KEY `gender` (`gender`);

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`goods_id`),
  ADD KEY `category` (`category`) USING BTREE;

--
-- Индексы таблицы `info_users`
--
ALTER TABLE `info_users`
  ADD PRIMARY KEY (`id_info`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `good_id` (`goods_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `goods_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT для таблицы `info_users`
--
ALTER TABLE `info_users`
  MODIFY `id_info` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `goods`
--
ALTER TABLE `goods`
  ADD CONSTRAINT `goods_ibfk_1` FOREIGN KEY (`category`) REFERENCES `category` (`category_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `info_users`
--
ALTER TABLE `info_users`
  ADD CONSTRAINT `info_users_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`goods_id`) REFERENCES `goods` (`goods_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
