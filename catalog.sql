--
-- База данных: `catalog`
--

-- --------------------------------------------------------

--
-- Структура таблицы `article`
--

CREATE TABLE `article` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `author` varchar(255) NOT NULL,
  `mark` int(10) NOT NULL,
  `path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `article`
--

INSERT INTO `article` (`id`, `title`, `text`, `author`, `mark`, `path`) VALUES
(1, 'title1', 'text1', 'author1', 5, ''),
(2, 'title2', 'текст2', 'author2', 4, ''),
(3, 'заголовок3', 'текст3', 'автор3', 0, ''),
(4, 'заголовок4', 'текст4', 'автор4', 0, ''),
(5, 'заголовок5', 'текст5', 'автор5', 0, ''),
(6, 'заг', 'текст', 'автор', 0, 'img/f2.gif');

-- --------------------------------------------------------

--
-- Структура таблицы `newn`
--

CREATE TABLE `newn` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `sourth` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `newn`
--

INSERT INTO `newn` (`id`, `title`, `text`, `sourth`, `date`) VALUES
(1, 'Заголовок', 'Текст', 'Источник', '0000-00-00'),
(2, 'Заголовок', 'Текст', 'Источник', '0000-00-00'),
(3, 'Заголовок3', 'текст3', 'источник3', '0000-00-00'),
(4, 'Заголовок4', 'текст4', 'источник4', '0000-00-00'),
(5, 'Заголовок5', 'текст5', 'источник5', '0000-00-00'),
(6, 'Заголовок6', 'текст6', 'источник6', '0000-00-00'),
(7, 'Заголовок7', 'текст7', 'источник7', '0000-00-00'),
(8, 'Заголовок8', 'текст8', 'источник8', '0000-00-00'),
(9, 'Заголовок8', 'текст8', 'источник8', '2016-04-10'),
(10, 'Заголовок9', 'текст9', 'источник9', '2016-04-12'),
(11, 'Заголовок10', 'текст10', 'источник10', '0000-00-00');

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` int(30) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `name`, `email`, `text`) VALUES
(1, 'Автор', 'mail@mail.com', 'Текст статьи'),
(2, 'автор2', 'com@com.ru', 'text2');

-- --------------------------------------------------------

--
-- Структура таблицы `review`
--

CREATE TABLE `review` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `date` date NOT NULL,
  `dateakt` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `review`
--

INSERT INTO `review` (`id`, `title`, `text`, `date`, `dateakt`) VALUES
(1, 'заголовок', 'текст', '0000-00-00', '0000-00-00'),
(2, 'заголовок', 'текст', '0000-00-00', '0000-00-00'),
(3, 'заголовок', 'текст', '0000-00-00', '0000-00-00'),
(4, 'заголовок', 'текст', '2016-03-10', '2016-03-11'),
(5, 'заголовок', 'текст', '2016-04-10', '2016-05-10'),
(6, 'заголовок', 'текст', '2016-03-10', '2016-05-10'),
(7, 'заголовок1', 'текст1', '2016-03-11', '2016-03-12'),
(8, 'заголовок2', 'текст2', '2016-03-12', '2016-03-13');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `newn`
--
ALTER TABLE `newn`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `article`
--
ALTER TABLE `article`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `newn`
--
ALTER TABLE `newn`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(30) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `review`
--
ALTER TABLE `review`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
