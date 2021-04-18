-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Апр 18 2021 г., 05:59
-- Версия сервера: 5.7.33-0ubuntu0.16.04.1
-- Версия PHP: 7.0.33-19+ubuntu16.04.1+deb.sury.org+2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `laboratory_sos_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `company`
--

CREATE TABLE `company` (
  `id_company` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `competencies`
--

CREATE TABLE `competencies` (
  `id` int(11) NOT NULL,
  `code` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `descriptipn` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `competencies`
--

INSERT INTO `competencies` (`id`, `code`, `name`, `descriptipn`) VALUES
(1, 111, 'Алгоритмы и структуры данных', ''),
(2, 112, 'Языки программирования', '');

-- --------------------------------------------------------

--
-- Структура таблицы `competencies_student`
--

CREATE TABLE `competencies_student` (
  `id_student` int(11) NOT NULL,
  `id_competencies` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `contact_face`
--

CREATE TABLE `contact_face` (
  `id_user` int(11) NOT NULL,
  `id_company` int(11) NOT NULL,
  `surname` varchar(80) NOT NULL,
  `name` varchar(80) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `rabotodatel_feedback`
--

CREATE TABLE `rabotodatel_feedback` (
  `id` int(11) NOT NULL,
  `id_student` int(11) NOT NULL,
  `id_rabotodatel` int(11) NOT NULL,
  `create_date` date NOT NULL,
  `modify_date` date NOT NULL,
  `status` varchar(100) NOT NULL,
  `score` int(11) NOT NULL,
  `content` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `stajirovka`
--

CREATE TABLE `stajirovka` (
  `id` int(11) NOT NULL,
  `id_rabotodatel` int(11) NOT NULL,
  `id_status` int(11) NOT NULL,
  `post` varchar(255) NOT NULL,
  `create_date` date NOT NULL,
  `begin_date` date NOT NULL,
  `end_date` date NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `stajirovka_student`
--

CREATE TABLE `stajirovka_student` (
  `id_student` int(11) NOT NULL,
  `id_stajirovka` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `student`
--

CREATE TABLE `student` (
  `id_user` int(11) NOT NULL,
  `surname` varchar(80) NOT NULL,
  `name` varchar(80) NOT NULL,
  `patronymic` varchar(80) NOT NULL,
  `vuz` varchar(255) NOT NULL,
  `faculcy` varchar(255) NOT NULL,
  `napravlenie` text NOT NULL,
  `course` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `student_feedback`
--

CREATE TABLE `student_feedback` (
  `id` int(11) NOT NULL,
  `id_student` int(11) NOT NULL,
  `id_rabotodatel` int(11) NOT NULL,
  `create_date` date NOT NULL,
  `modify_date` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `score` int(11) NOT NULL,
  `content` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id_user`, `login`, `password`) VALUES
(1, 'login', 'pass'),
(2, 'ivan123', 'test-password'),
(3, 'alex', 'test-password-2');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id_company`);

--
-- Индексы таблицы `competencies`
--
ALTER TABLE `competencies`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `competencies_student`
--
ALTER TABLE `competencies_student`
  ADD KEY `id_competencies` (`id_competencies`),
  ADD KEY `id_student` (`id_student`);

--
-- Индексы таблицы `contact_face`
--
ALTER TABLE `contact_face`
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_company` (`id_company`);

--
-- Индексы таблицы `rabotodatel_feedback`
--
ALTER TABLE `rabotodatel_feedback`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_student` (`id_student`),
  ADD KEY `id_rabotodatel` (`id_rabotodatel`);

--
-- Индексы таблицы `stajirovka`
--
ALTER TABLE `stajirovka`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_rabotodatel` (`id_rabotodatel`),
  ADD KEY `id_status` (`id_status`);

--
-- Индексы таблицы `stajirovka_student`
--
ALTER TABLE `stajirovka_student`
  ADD KEY `id_stajirovka` (`id_stajirovka`),
  ADD KEY `id_student` (`id_student`);

--
-- Индексы таблицы `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `student`
--
ALTER TABLE `student`
  ADD KEY `id_user` (`id_user`);

--
-- Индексы таблицы `student_feedback`
--
ALTER TABLE `student_feedback`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_rabotodatel` (`id_rabotodatel`),
  ADD KEY `id_student` (`id_student`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `company`
--
ALTER TABLE `company`
  MODIFY `id_company` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `competencies`
--
ALTER TABLE `competencies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `rabotodatel_feedback`
--
ALTER TABLE `rabotodatel_feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `stajirovka`
--
ALTER TABLE `stajirovka`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `student_feedback`
--
ALTER TABLE `student_feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `competencies_student`
--
ALTER TABLE `competencies_student`
  ADD CONSTRAINT `competencies_student_ibfk_1` FOREIGN KEY (`id_competencies`) REFERENCES `competencies` (`id`),
  ADD CONSTRAINT `competencies_student_ibfk_2` FOREIGN KEY (`id_student`) REFERENCES `student` (`id_user`);

--
-- Ограничения внешнего ключа таблицы `contact_face`
--
ALTER TABLE `contact_face`
  ADD CONSTRAINT `contact_face_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`),
  ADD CONSTRAINT `contact_face_ibfk_2` FOREIGN KEY (`id_company`) REFERENCES `company` (`id_company`);

--
-- Ограничения внешнего ключа таблицы `rabotodatel_feedback`
--
ALTER TABLE `rabotodatel_feedback`
  ADD CONSTRAINT `rabotodatel_feedback_ibfk_1` FOREIGN KEY (`id_student`) REFERENCES `student` (`id_user`),
  ADD CONSTRAINT `rabotodatel_feedback_ibfk_2` FOREIGN KEY (`id_rabotodatel`) REFERENCES `company` (`id_company`);

--
-- Ограничения внешнего ключа таблицы `stajirovka`
--
ALTER TABLE `stajirovka`
  ADD CONSTRAINT `stajirovka_ibfk_1` FOREIGN KEY (`id`) REFERENCES `stajirovka_student` (`id_stajirovka`),
  ADD CONSTRAINT `stajirovka_ibfk_2` FOREIGN KEY (`id_rabotodatel`) REFERENCES `company` (`id_company`);

--
-- Ограничения внешнего ключа таблицы `status`
--
ALTER TABLE `status`
  ADD CONSTRAINT `status_ibfk_1` FOREIGN KEY (`id`) REFERENCES `stajirovka` (`id_status`);

--
-- Ограничения внешнего ключа таблицы `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `stajirovka_student` (`id_student`),
  ADD CONSTRAINT `student_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Ограничения внешнего ключа таблицы `student_feedback`
--
ALTER TABLE `student_feedback`
  ADD CONSTRAINT `student_feedback_ibfk_1` FOREIGN KEY (`id_student`) REFERENCES `student` (`id_user`),
  ADD CONSTRAINT `student_feedback_ibfk_2` FOREIGN KEY (`id_rabotodatel`) REFERENCES `company` (`id_company`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
