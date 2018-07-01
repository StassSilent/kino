-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Мар 20 2018 г., 12:16
-- Версия сервера: 10.1.28-MariaDB
-- Версия PHP: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `kino`
--

-- --------------------------------------------------------

--
-- Структура таблицы `films`
--

CREATE TABLE `films` (
  `id_films` int(3) NOT NULL,
  `name_film` varchar(255) COLLATE utf8_bin NOT NULL,
  `img` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Дамп данных таблицы `films`
--

INSERT INTO `films` (`id_films`, `name_film`, `img`) VALUES
(1, 'Games of Thrones', '\r\n\r\n <img  src=\"5.jpg\" width=\"40%\" height=\"80%\" alt=\"Card image cap\" >'),
(2, 'Silicon Valley', '\r\n\r\n\r\n <img  src=\"1.jpg\" width=\"40%\" height=\"80%\" alt=\"Card image cap\" >'),
(3, 'Twin Peaks', '\r\n\r\n\r\n <img  src=\"3.jpg\" width=\"40%\" height=\"80%\" alt=\"Card image cap\" >'),
(4, 'Lost', '\r\n <img  src=\"vat.jpg\" width=\"40%\" height=\"80%\" alt=\"Card image cap\" >'),
(5, 'Black Mirrow', '\r\n\r\n \r\n <img  src=\"4.jpg\" width=\"40%\" height=\"80%\" alt=\"Card image cap\" >');

-- --------------------------------------------------------

--
-- Структура таблицы `rating`
--

CREATE TABLE `rating` (
  `id_users` int(3) DEFAULT NULL,
  `id_film` int(3) DEFAULT NULL,
  `rating` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Дамп данных таблицы `rating`
--

INSERT INTO `rating` (`id_users`, `id_film`, `rating`) VALUES
(1, 1, 7),
(1, 2, 7),
(1, 3, 7),
(1, 4, 6),
(1, 5, 5),
(5, 1, 5),
(5, 2, 8),
(5, 3, 7),
(5, 4, 6),
(5, 5, 5),
(2, 1, 9),
(2, 2, 9),
(2, 3, 6),
(2, 4, 9),
(2, 5, 6),
(3, 1, 2),
(3, 2, 5),
(3, 3, 4),
(3, 4, 3),
(3, 5, 2),
(4, 1, 6),
(4, 2, 7),
(4, 3, 6),
(4, 4, 7),
(4, 5, 6);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id_users` int(3) NOT NULL,
  `name` varchar(15) COLLATE utf8_bin NOT NULL,
  `img` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id_users`, `name`, `img`) VALUES
(1, 'Tanya', '\r\n\r\n <img  src=\"Tanya.jpg\" height=\"300px\" width=\"200px\" alt=\"Card image cap\" >'),
(2, 'Nastya', ' <img  src=\"Nastya.jpg\"  height=\"300px\" width=\"200px\" alt=\"Card image cap\" >'),
(3, 'Anya', ' <img  src=\"Anya.jpg\" width=\"200px\" height=\"300px\" alt=\"Card image cap\" >'),
(4, 'Piter', ' <img  src=\"Piter.jpg\" width=\"300px\" height=\"300px\" alt=\"Card image cap\" >'),
(5, 'Richard', ' <img  src=\"Richard.jpg\" width=\"300px\" height=\"300px\" alt=\"Card image cap\" >');

-- --------------------------------------------------------

--
-- Структура таблицы `value`
--

CREATE TABLE `value` (
  `id_film_value` int(3) NOT NULL,
  `value` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Дамп данных таблицы `value`
--

INSERT INTO `value` (`id_film_value`, `value`) VALUES
(1, 0.65667385473415),
(2, 0.71070636723781),
(3, 0.69875222846007),
(4, 0.69146115422638),
(5, 0.68481162716349);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`id_films`);

--
-- Индексы таблицы `rating`
--
ALTER TABLE `rating`
  ADD KEY `id_users` (`id_users`),
  ADD KEY `id_film` (`id_film`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- Индексы таблицы `value`
--
ALTER TABLE `value`
  ADD PRIMARY KEY (`id_film_value`);

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `rating_ibfk_1` FOREIGN KEY (`id_film`) REFERENCES `films` (`id_films`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rating_ibfk_2` FOREIGN KEY (`id_users`) REFERENCES `users` (`id_users`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `value`
--
ALTER TABLE `value`
  ADD CONSTRAINT `value_ibfk_1` FOREIGN KEY (`id_film_value`) REFERENCES `films` (`id_films`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
