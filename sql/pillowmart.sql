-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 14 2025 г., 17:10
-- Версия сервера: 8.0.24
-- Версия PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `pillowmart`
--

-- --------------------------------------------------------

--
-- Структура таблицы `blog_category`
--

CREATE TABLE `blog_category` (
  `id` int NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `status` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `blog_category`
--

INSERT INTO `blog_category` (`id`, `category_name`, `status`) VALUES
(1, 'Resaurant food', 1),
(2, 'Travel news', 1),
(3, 'Modern technology', 1),
(4, 'Product', 1),
(5, 'Inspiration', 1),
(6, 'Health Care', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `blog_post`
--

CREATE TABLE `blog_post` (
  `id` int NOT NULL,
  `author` varchar(255) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `category_id` int NOT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `min_title` text NOT NULL,
  `min_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `blog_post`
--

INSERT INTO `blog_post` (`id`, `author`, `title`, `description`, `category_id`, `date`, `min_title`, `min_description`) VALUES
(1, 'ddd', 'asdasda', 'asdasdasdasdas', 1, NULL, '', ''),
(2, 'Travel, Lifestyle', 'Second divided from form fish beast made every of seas all gathered us saying he our', 'MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower', 1, '2025-02-14 13:44:53', 'Google inks pact for new 35-storey office', 'That dominion stars lights dominion divide years for fourth have dont stars is that he earth it first without heaven in place seed it second morning saying.'),
(3, 'Travel, Lifestyle', 'Second divided from form fish beast made every of seas all gathered us saying he our', 'MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower', 1, '2025-02-14 13:44:53', 'Google inks pact for new 35-storey office', 'That dominion stars lights dominion divide years for fourth have dont stars is that he earth it first without heaven in place seed it second morning saying.'),
(4, 'Travel, Lifestyle', 'Second divided from form fish beast made every of seas all gathered us saying he our', 'MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower', 1, '2025-02-14 13:44:53', 'Google inks pact for new 35-storey office', 'That dominion stars lights dominion divide years for fourth have dont stars is that he earth it first without heaven in place seed it second morning saying.'),
(5, 'Travel, Lifestyle', 'Second divided from form fish beast made every of seas all gathered us saying he our', 'MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower', 1, '2025-02-14 13:44:53', 'Google inks pact for new 35-storey office', 'That dominion stars lights dominion divide years for fourth have dont stars is that he earth it first without heaven in place seed it second morning saying.'),
(6, 'Travel, Lifestyle', 'Second divided from form fish beast made every of seas all gathered us saying he our', 'MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower', 1, '2025-02-14 13:44:53', 'Google inks pact for new 35-storey office', 'That dominion stars lights dominion divide years for fourth have dont stars is that he earth it first without heaven in place seed it second morning saying.'),
(7, 'Travel, Lifestyle', 'Second divided from form fish beast made every of seas all gathered us saying he our', 'MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower', 1, '2025-02-14 13:44:53', 'Google inks pact for new 35-storey office', 'That dominion stars lights dominion divide years for fourth have dont stars is that he earth it first without heaven in place seed it second morning saying.'),
(8, 'Travel, Lifestyle', 'Second divided from form fish beast made every of seas all gathered us saying he our', 'MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower', 1, '2025-02-14 13:44:53', 'Google inks pact for new 35-storey office', 'That dominion stars lights dominion divide years for fourth have dont stars is that he earth it first without heaven in place seed it second morning saying.'),
(9, 'Travel, Lifestyle', 'Second divided from form fish beast made every of seas all gathered us saying he our', 'MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower', 1, '2025-02-14 13:44:53', 'Google inks pact for new 35-storey office', 'That dominion stars lights dominion divide years for fourth have dont stars is that he earth it first without heaven in place seed it second morning saying.'),
(10, 'Travel, Lifestyle', 'Second divided from form fish beast made every of seas all gathered us saying he our', 'MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower', 1, '2025-02-14 13:44:53', 'Google inks pact for new 35-storey office', 'That dominion stars lights dominion divide years for fourth have dont stars is that he earth it first without heaven in place seed it second morning saying.'),
(11, 'Travel, Lifestyle', 'Second divided from form fish beast made every of seas all gathered us saying he our', 'MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower', 1, '2025-02-14 13:44:53', 'Google inks pact for new 35-storey office', 'That dominion stars lights dominion divide years for fourth have dont stars is that he earth it first without heaven in place seed it second morning saying.');

-- --------------------------------------------------------

--
-- Структура таблицы `blog_post_tags`
--

CREATE TABLE `blog_post_tags` (
  `id` int NOT NULL,
  `tag` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `blog_post_tags`
--

INSERT INTO `blog_post_tags` (`id`, `tag`) VALUES
(1, 'project'),
(2, 'love'),
(3, 'technology'),
(4, 'travel'),
(5, 'restaurant'),
(6, 'life style');

-- --------------------------------------------------------

--
-- Структура таблицы `pillow_order`
--

CREATE TABLE `pillow_order` (
  `id` int DEFAULT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `company` varchar(255) DEFAULT NULL,
  `country` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `addres` varchar(255) NOT NULL,
  `zip_code` varchar(255) NOT NULL,
  `message` text,
  `products` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `pillow_type`
--

CREATE TABLE `pillow_type` (
  `id` int NOT NULL,
  `type` varchar(255) NOT NULL,
  `status` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `pillow_type`
--

INSERT INTO `pillow_type` (`id`, `type`, `status`) VALUES
(1, 'Rectangular', 1),
(2, 'Square', 1),
(3, 'Heart', 1),
(4, 'Round ', 1),
(5, 'Star', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `category_id` int DEFAULT NULL,
  `type_id` int DEFAULT NULL,
  `description` text NOT NULL,
  `price` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `name`, `category_id`, `type_id`, `description`, `price`) VALUES
(1, 'Cervical pillow for airplane car office nap pillow', 1, 2, 'Seamlessly empower fully researched growth strategies and interoperable internal or organic sources. Credibly innovate granular internal or “organic” sources whereas high standards in web-readiness. Credibly innovate granular internal or organic sources whereas high standards in web-readiness. Energistically scale future-proof core competencies vis-a-vis impactful experiences. Dramatically synthesize integrated schemas. with optimal networks.', 5),
(2, 'Geometric striped flower home classy decor', 1, 2, 'Seamlessly empower fully researched growth strategies and interoperable internal or organic sources. Credibly innovate granular internal or “organic” sources whereas high standards in web-readiness. Credibly innovate granular internal or organic sources whereas high standards in web-readiness. Energistically scale future-proof core competencies vis-a-vis impactful experiences. Dramatically synthesize integrated schemas. with optimal networks.', 6),
(3, 'Foam filling cotton slow rebound pillows', 2, 3, 'Seamlessly empower fully researched growth strategies and interoperable internal or organic sources. Credibly innovate granular internal or “organic” sources whereas high standards in web-readiness. Credibly innovate granular internal or organic sources whereas high standards in web-readiness. Energistically scale future-proof core competencies vis-a-vis impactful experiences. Dramatically synthesize integrated schemas. with optimal networks.', 5),
(4, 'Memory foam filling cotton Slow rebound pillows', 2, 3, 'Seamlessly empower fully researched growth strategies and interoperable internal or organic sources. Credibly innovate granular internal or “organic” sources whereas high standards in web-readiness. Credibly innovate granular internal or organic sources whereas high standards in web-readiness. Energistically scale future-proof core competencies vis-a-vis impactful experiences. Dramatically synthesize integrated schemas. with optimal networks.', 5),
(5, 'Memory foam filling cotton Slow rebound pillows', 2, 3, 'Seamlessly empower fully researched growth strategies and interoperable internal or organic sources. Credibly innovate granular internal or “organic” sources whereas high standards in web-readiness. Credibly innovate granular internal or organic sources whereas high standards in web-readiness. Energistically scale future-proof core competencies vis-a-vis impactful experiences. Dramatically synthesize integrated schemas. with optimal networks.', 5);

-- --------------------------------------------------------

--
-- Структура таблицы `shop_category`
--

CREATE TABLE `shop_category` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `shop_category`
--

INSERT INTO `shop_category` (`id`, `name`, `status`) VALUES
(1, 'Sleeping', 1),
(2, 'Decorative', 1),
(3, 'Orthopedic', 1),
(4, 'Sofa', 1),
(5, 'Chair', 1),
(6, 'Travel', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `tag_post`
--

CREATE TABLE `tag_post` (
  `post_id` int NOT NULL,
  `tag_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `email`, `name`, `password`, `role`) VALUES
(1, 'asdasd', 'asdas', 'asdasd', NULL),
(2, 'root', 'admin', '123', 'admin');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `blog_category`
--
ALTER TABLE `blog_category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `blog_post`
--
ALTER TABLE `blog_post`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `blog_post_tags`
--
ALTER TABLE `blog_post_tags`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `pillow_type`
--
ALTER TABLE `pillow_type`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `type_id` (`type_id`);

--
-- Индексы таблицы `shop_category`
--
ALTER TABLE `shop_category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tag_post`
--
ALTER TABLE `tag_post`
  ADD KEY `post_id` (`post_id`),
  ADD KEY `tag_id` (`tag_id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `blog_category`
--
ALTER TABLE `blog_category`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `blog_post`
--
ALTER TABLE `blog_post`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `blog_post_tags`
--
ALTER TABLE `blog_post_tags`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `pillow_type`
--
ALTER TABLE `pillow_type`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `shop_category`
--
ALTER TABLE `shop_category`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `shop_category` (`id`),
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`type_id`) REFERENCES `pillow_type` (`id`);

--
-- Ограничения внешнего ключа таблицы `tag_post`
--
ALTER TABLE `tag_post`
  ADD CONSTRAINT `tag_post_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `blog_post` (`id`),
  ADD CONSTRAINT `tag_post_ibfk_2` FOREIGN KEY (`tag_id`) REFERENCES `blog_post_tags` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
