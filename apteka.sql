-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 21 2020 г., 21:25
-- Версия сервера: 8.0.15
-- Версия PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `apteka`
--

-- --------------------------------------------------------

--
-- Структура таблицы `medicines`
--

CREATE TABLE `medicines` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `id_gr` varchar(30) NOT NULL,
  `count` varchar(11) NOT NULL,
  `price` varchar(11) NOT NULL,
  `photo` text NOT NULL,
  `description` text NOT NULL,
  `provider` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `medicines`
--

INSERT INTO `medicines` (`id`, `name`, `id_gr`, `count`, `price`, `photo`, `description`, `provider`) VALUES
(1, 'Левомицетин', 'Антибиотики', '32', '23', '../img/upload/23.jpg', '', 'Б.Браун Медикал'),
(2, 'Далацин фосфат', 'Антибиотики', '5', '45', '../img/upload/12.jpg', 'Далацин фосфат — эффективное средство в виде таблеток, мази и вагинальных аппликаторов, назначается при развитии резинстентности бактерий к более слабым антибиотикам', 'Главфарм'),
(3, 'Азитромицин', 'Антибиотики', '10', '87', '../img/upload/23.jpg', 'Азитромицин — один из наиболее эффективных антибио...', 'Б.Браун Медикал'),
(4, 'Цефиксим', 'Антибиотики', '8', '54', '../img/upload/43.jpg', 'Цефиксим — антибиотики в виде таблеток и суспензии...', 'Фармсервис'),
(5, 'Атф аденозинтрифосфат', 'Метаболики', '16', '89', '../img/upload/photo_es.jpg', 'Метаболическое ср-во.Мышечная дистрофия и атония,п...', 'СИА Интернейшнл СПб'),
(7, 'Глицин таблетки', 'Метаболики', '54', '32', '../img/upload/1234.jpg', 'Метаболический препарат. Глицин является регулятором обмена веществ, нормализует и активирует процессы защитного торможения в ЦНС', 'Главфарм'),
(8, 'Дибикор таблетки', 'Метаболики', '13', '32', '../img/upload/3213.jpg', 'Оказывает метаболическое, кардиотоническое, гепатопротекторное и гипотензивное действие.Сердечно-сосудистая недостаточность (различной этиологии), интоксикация сердечными гликозидами.Внутрь, по 0.25-0.5 г 2 раза в день, за 20 мин до еды, курс лечения - 30 дней. Доза может быть увеличена до 2-3 г/сут или уменьшена до 0.125 г на прием.', 'Б.Браун Медикал'),
(9, 'Парацетамол', 'Жаропонижающие средства', '28', '45', '../img/upload/2341.jpg', 'Самым надежным способом быстро избавиться от высокой температуры у взрослого', 'СИА Интернейшнл СПб'),
(10, 'Цитрамон П', 'Жаропонижающие средства', '14', '34', '../img/upload/1551008356_screenshot_6.jpg', 'Препарат комбинированного действия, главным действующим веществом которого является симбиоз ацетилсалициловой кислоты и парацетамола.', 'Б.Браун Медикал'),
(11, 'Ибуклин', 'Жаропонижающие средства', '12', '165', '../img/upload/1516204023_ibukl.jpg', '«Ибуклин» ‒ уникальный препарат, основанный на действии парацетамола в сочетании с ибупрофеном. Чаще всего жаропонижающие лекарства имеют в составе только один из этих компонентов', 'Фармсервис'),
(12, 'Колдакт Флю Плюс', 'Жаропонижающие средства', '37', '197', '../img/upload/1550624873_clipboard1-tile.jpg', 'Капсулы комплексного и пролонгированного действия имеют в составе не одно, а несколько активных компонентов: парацетамол (200 мг), фенилэфрин (25 мг) и хлорфенирамин (8 мг). «Колдакт Флю Плюс» эффективно обезболивает и сбивает температуру, при этом не вызывает аллергических реакций и даже наоборот борется с такими проявлениями как чихание, слезоточивость и зуд глаз.', 'Б.Браун Медикал'),
(13, 'Перитол', 'Противоаллергические препараты', '8', '24', '../img/upload/peritol.jpg', 'Это средство эффективно почти при всех видах аллергии, быстро устраняет проявления сенной лихорадки, крапивницы, нейродермита, дерматита за счет подавления выброса гистамина. Также применяется для лечения мигреней, анорексии, кахексии. ', 'Б.Браун Медикал'),
(14, 'Диазолин', 'Противоаллергические препараты', '14', '32', '../img/upload/diazolin.jpg', 'Активный компонент этого препарата – мебгидролин. ', 'СИА Интернейшнл СПб'),
(15, 'Димедрол', 'Противоаллергические препараты', '27', '76', '../img/upload/diazolin.jpg', 'Помимо противоаллергического, оказывает также противовоспалительное действие, включается в состав тройчатки – комбинации препаратов, используемых бригадами «скорой помощи» при неотложной терапии. ', 'Главфарм'),
(16, 'Тавегил', 'Противоаллергические препараты', '19', '43', '../img/upload/tavegil.jpg', 'Это проверенный многолетним опытом препарат, сегодня используется как вспомогательное средство при лечении псевдоаллергических реакций и анафилактического шока. Доступен в форме таблеток или жидкости для инъекций. ', 'СИА Интернейшнл СПб'),
(19, 'Натрия аденозинтрифосфат', 'Метаболики', '12', '123', '../img/upload/dsad.jpg', 'Метаболическое средство.', 'Главфарм');

-- --------------------------------------------------------

--
-- Структура таблицы `provider`
--

CREATE TABLE `provider` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `provider`
--

INSERT INTO `provider` (`id`, `name`, `phone`) VALUES
(1, 'Главфарм', 23223),
(2, 'Фармсервис', 842312),
(3, 'Б.Браун Медикал', 8942102),
(4, 'СИА Интернейшнл СПб', 9213423);

-- --------------------------------------------------------

--
-- Структура таблицы `type`
--

CREATE TABLE `type` (
  `id` int(11) NOT NULL,
  `name_grop` varchar(30) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `type`
--

INSERT INTO `type` (`id`, `name_grop`, `description`) VALUES
(1, 'Антибиотики', 'Противомикробные, противопаразитарные и противоглистные средства'),
(2, 'Метаболики', 'Метаболики — это средства, которые регулируют обменные процессы, протекающие в организме (углеводный, жировой, белковый, водно-электролитный и другие виды обмена).'),
(3, 'Жаропонижающие средства', 'Антипире́тики (лат. antipyretic; от др.-греч. ἀντί — против + πῦρ — огонь, жар) — группа лекарственных средств, обладающих жаропонижающим действием'),
(4, 'Противоаллергические препараты', '');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `login` varchar(250) NOT NULL,
  `password` text NOT NULL,
  `status` varchar(150) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '1',
  `name` varchar(30) NOT NULL,
  `second_name` varchar(30) NOT NULL,
  `position` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `login`, `password`, `status`, `name`, `second_name`, `position`) VALUES
(1, 'admin', 'admin', '1', 'Василий', 'Радионов', 'Фармацевт'),
(2, 'alex', 'alex', '1', 'Алексей', 'Агатов', 'Фармацепт');

-- --------------------------------------------------------

--
-- Структура таблицы `warehouse`
--

CREATE TABLE `warehouse` (
  `id` int(11) NOT NULL,
  `name_grop` varchar(30) NOT NULL,
  `name_prep` varchar(30) NOT NULL,
  `count` varchar(30) NOT NULL,
  `id_ provider` varchar(30) NOT NULL,
  `price` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `warehouse`
--

INSERT INTO `warehouse` (`id`, `name_grop`, `name_prep`, `count`, `id_ provider`, `price`) VALUES
(3, 'Жаропонижающие средства', 'Нурофен для детей сусп', '12', 'Б.Браун Медикал', '123'),
(5, 'Антибиотики', 'Амоксициллин капс', '23', 'СИА Интернейшнл СПб', '132'),
(6, 'Антибиотики', 'Азитромицин-акрихин', '4', 'Фармсервис', '123'),
(7, 'Антибиотики', 'Линкомицин', '5', 'СИА Интернейшнл СПб', '65'),
(8, 'Жаропонижающие средства', 'Нурофен форте', '14', 'Б.Браун Медикал', '88');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `medicines`
--
ALTER TABLE `medicines`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_gr` (`id_gr`),
  ADD KEY `provider` (`provider`);

--
-- Индексы таблицы `provider`
--
ALTER TABLE `provider`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`);

--
-- Индексы таблицы `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name_grop` (`name_grop`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `warehouse`
--
ALTER TABLE `warehouse`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_prep` (`name_grop`),
  ADD KEY `id_ provider` (`id_ provider`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `medicines`
--
ALTER TABLE `medicines`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT для таблицы `provider`
--
ALTER TABLE `provider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `type`
--
ALTER TABLE `type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `warehouse`
--
ALTER TABLE `warehouse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `medicines`
--
ALTER TABLE `medicines`
  ADD CONSTRAINT `medicines_ibfk_1` FOREIGN KEY (`id_gr`) REFERENCES `type` (`name_grop`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `medicines_ibfk_2` FOREIGN KEY (`provider`) REFERENCES `provider` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `warehouse`
--
ALTER TABLE `warehouse`
  ADD CONSTRAINT `warehouse_ibfk_4` FOREIGN KEY (`name_grop`) REFERENCES `type` (`name_grop`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `warehouse_ibfk_5` FOREIGN KEY (`id_ provider`) REFERENCES `provider` (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
