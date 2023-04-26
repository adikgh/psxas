-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: srv-pleskdb24.ps.kz:3306
-- Время создания: Апр 27 2023 г., 00:04
-- Версия сервера: 10.6.11-MariaDB
-- Версия PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `gprogkz_as`
--

-- --------------------------------------------------------

--
-- Структура таблицы `blocks`
--

CREATE TABLE `blocks` (
  `id` int(11) NOT NULL,
  `mn` varchar(255) DEFAULT NULL,
  `type` varchar(255) NOT NULL,
  `number` int(11) DEFAULT NULL,
  `txt1_kz` text DEFAULT NULL,
  `txt1_ru` text DEFAULT NULL,
  `txt2_kz` text DEFAULT NULL,
  `txt2_ru` text DEFAULT NULL,
  `img` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) DEFAULT NULL,
  `href` varchar(255) NOT NULL,
  `icon` text DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `name_kz` varchar(255) DEFAULT NULL,
  `title_kz` text DEFAULT NULL,
  `disc_kz` text DEFAULT NULL,
  `keyw_kz` text DEFAULT NULL,
  `name_ru` varchar(255) DEFAULT NULL,
  `title_ru` text DEFAULT NULL,
  `disc_ru` text DEFAULT NULL,
  `keyw_ru` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Дамп данных таблицы `menu`
--

INSERT INTO `menu` (`id`, `menu_id`, `href`, `icon`, `name`, `name_kz`, `title_kz`, `disc_kz`, `keyw_kz`, `name_ru`, `title_ru`, `disc_ru`, `keyw_ru`) VALUES
(1, NULL, '/', NULL, 'home', 'Басты бет', 'Ақерке Шакебаева', NULL, NULL, 'Главная', 'Акерке Шакебаева', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `quiz`
--

CREATE TABLE `quiz` (
  `id` int(11) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `number` int(11) DEFAULT NULL,
  `txt_kz` text DEFAULT NULL,
  `txt_ru` text DEFAULT NULL,
  `txt2_kz` text DEFAULT NULL,
  `txt2_ru` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `site`
--

CREATE TABLE `site` (
  `id` int(11) NOT NULL,
  `site` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `phone_view` varchar(255) DEFAULT NULL,
  `whatsapp` varchar(255) DEFAULT NULL,
  `whatsapp_view` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `telegram` varchar(255) DEFAULT NULL,
  `mail` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `behance` varchar(255) DEFAULT NULL,
  `metrika` varchar(255) DEFAULT NULL,
  `analitics` varchar(255) DEFAULT NULL,
  `pixel` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Дамп данных таблицы `site`
--

INSERT INTO `site` (`id`, `site`, `name`, `phone`, `phone_view`, `whatsapp`, `whatsapp_view`, `instagram`, `telegram`, `mail`, `youtube`, `behance`, `metrika`, `analitics`, `pixel`) VALUES
(1, 'copywriter', 'CopyWriter', '87052909777', '+7 (705) 290-97-77', '77477220008', '+7 (747) 722-00-08', 'akerke_shakebayeva', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `word`
--

CREATE TABLE `word` (
  `id` int(11) NOT NULL,
  `txt` varchar(255) DEFAULT NULL,
  `txt_kz` varchar(255) DEFAULT NULL,
  `txt_ru` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Дамп данных таблицы `word`
--

INSERT INTO `word` (`id`, `txt`, `txt_kz`, `txt_ru`) VALUES
(10, 'Address:', 'Мекен-жайы:', 'Адрес:'),
(14, 'Your name', 'Сіздің атыңыз', 'Ваше имя'),
(15, 'Your number', 'Cіздің нөміріңіз', 'Ваш номер'),
(16, 'Submit your', 'Сұраныс қалдыру', 'Оставить заявку'),
(23, 'Learn more', 'Толығырақ', 'Узнать подробнее'),
(27, 'Close', 'Жабу', 'Закрыть'),
(32, 'go', 'кеттік', 'поехали'),
(34, 'To get the consultation', 'Толық кеңес алу', 'Получить консультацию'),
(49, 'OUR RECOMMENDATION', 'Наша рекомендация', 'Біздің ұсынысымыз'),
(54, 'View all', 'Посмотреть все', 'Барлығын қарау'),
(65, 'Our advantages', 'Біздің артықшылықтарымыз', 'наши преимущества'),
(69, 'Write', 'Жазу', 'Написать'),
(82, 'About us', 'Біз жайлы', 'О нас'),
(86, 'Guest Reviews', 'Қонақтардың пікірі', 'Отзывы гостей'),
(91, 'Frequently asked Questions', 'Жиі қойылатын сұрақтар', 'Часто задаваемые вопросы'),
(93, 'source:', 'Дереккөз: ', 'Источник: '),
(96, 'Get a discount', 'Жеңілдікті алу', 'Получит скидку'),
(99, 'Communication', 'Байланысу', 'Связаться'),
(103, 'calc_al', '● Қаңырау шалыңыз, байланыста', '● Звоните, мы сейчас работаем'),
(104, 'order site', 'Тапсырыс беру', 'Заказать сайт'),
(105, 'Developed by:', 'Сайтты жасаған:', 'Сайт разработали:'),
(108, 'All rights reserved', 'Барлық құқықтар қорғалған', 'Все права защищены'),
(113, 'Still have questions?', 'Сұрақтарыңыз бар ма?', 'Остались вопросы?'),
(116, 'Contact', 'Байланыс', 'Контакты'),
(118, 'write to us on social networks', 'бізге әлеуметтік желіден жазыңыз', 'напишите нам на соц. сетях'),
(120, 'or', 'немесе', 'или'),
(123, 'Our pride', 'Біздің мақтанышымыз', 'Наш гордость'),
(135, 'give', 'сыйлағым келеді', 'хочу дарить'),
(145, 'back', 'артқа', 'назад'),
(147, 'farther', 'алға', 'далее'),
(149, 'pick up', 'қарау', 'подобрать'),
(159, 'days', 'күн', 'дней'),
(167, 'Enter your name', 'Атыңызды жазыңыз ..', 'Введите имя ..'),
(169, 'Enter the number', 'Нөмеріңізді жазыңыз ..', 'Введите номер ..'),
(179, 'Fill out the application form', 'Форманы толтырыңыз', 'Заполните форму заявки'),
(181, 'loading', 'жүктелуде', 'загрузка'),
(188, 'discuss the project', 'жобаны талқылау', 'обсудить проект'),
(189, 'Bids and sales', 'Ұсыныстар мен сатылымдар', 'Заявки и продажи'),
(190, 'total revenues', 'Жалпы табыс', 'Общая выручка'),
(191, 'Average check', 'Орташа баға', 'Средний чек'),
(192, 'Brand recognition', 'Брендтің танымалдылығы', 'Узнаваемость бренда'),
(193, 'Production bags with logo', 'Логотиппен пакет өндіу', 'Производства пакеты с логотипом'),
(194, 'Sanatorium booking center', 'Санаторияларды брондау орталығы', 'Центр бронирования санаторий'),
(195, 'It was before us', 'Бізге дейін', 'Было до нас'),
(196, 'After cooperation', 'Бізбен бірге', 'После сотрудничества'),
(197, 'Net profit', 'Таза табыс', 'Чистая прибыль'),
(198, 'Costs', 'Шығын', 'Расходы'),
(199, 'month', 'ай', 'мес'),
(200, 'tenge/month', 'теңге/ай', 'тенге/мес'),
(201, 'tenge', 'теңге', 'тенге'),
(202, 'for services per week', 'аптасына', 'на услуги в неделю'),
(203, 'for services per day', 'күніне', 'на услуги в день'),
(204, 'applications', 'сұраныс', 'заявок'),
(205, 'orders', 'тапсырыс', 'заказов'),
(206, 'for services per month', 'айына', 'на услуги в месяц'),
(207, 'Branding and design', 'Брендинг және дизайн', 'Брендинг и дизайн'),
(208, 'Marketing strategy', 'Маркетингтік стратегия', 'Маркетинговая стратегия'),
(209, 'Promotion and maintenance of social media the network', 'Әлеуметтік желіні дамыту', 'Раскрутка и ведение соц. сети'),
(210, 'Team building', 'Команда жинақтау', 'Построение команды'),
(211, 'Website development and applications', 'Сайт және бағдарлама жасау', 'Создание сайтов и приложения'),
(212, 'Promotion', 'Дамыту', 'Продвижение'),
(213, 'Need a consultation?', 'Консультация қажет пе?', 'Нужно консультация?'),
(214, 'Fill out the form and we will contact you shortly', 'Форманы толтырыңыз, сізге өзіміз <br/>қабарласатын боламыз', 'Заполните форму и мы свяжемся <br>с вами в ближайшее время'),
(215, 'Enter your name ..', 'Атыңызды жазыңыз ..', 'Введите имя ..'),
(216, 'Portfolio', 'Кейстар', 'Портфолио'),
(217, 'Menu', 'Мәзір', 'Меню'),
(218, 'Services', 'Қызметтер', 'Услуги'),
(219, 'Language', 'Тіл', 'Язык'),
(220, 'Sales department', 'Сату бөлімі', 'Отдел продаж'),
(221, 'Clients', 'Клиенттер', 'Клиенты'),
(222, 'Team', 'Команда', 'Команда'),
(223, 'Contacts', 'Байланыс', 'Контакты'),
(224, 'To order', 'Тапсырыс беру', 'Заказать'),
(225, 'More', 'Толығырақ', 'Подробнее'),
(226, 'Packaging', 'Жүйелеу', 'Упаковка'),
(227, 'Fast start', 'Жылдам байланысу', 'Быстрый старт'),
(228, 'Our works', 'Біздің жұмыстарымыз', 'Познакомьтесь с нашими работами'),
(229, 'Why you should contact us', 'Неге бізбен жұмыс жасау қажет', 'Почему Вам стоит к нам обратиться'),
(230, 'Frequently asked Questions', 'Жиі қойылатын сұрақтар', 'Часто задаваемые вопросы'),
(231, 'How much does advertising cost?', 'Жарнама қанша тұрады?', 'Сколько стоит реклама?'),
(232, 'We work not for prices, but for quality', 'Біз сапа үшін жұмыс жасаймыз, баға үшін емес.', 'Мы работаем не за цены, за качества'),
(233, 'Certificates', 'Cертификаттар', 'Cертификаты'),
(234, 'It is not us, but the results that speaks to us', 'Біз емес жітістіктеріміз көрсетсін', 'Не мы а результаты говорит нами'),
(235, 'Have questions?', 'Сұрағың бар ма?', 'Есть вопросы?'),
(236, 'If you have any questions, write us WhatsApp', 'Егер басқада сұрақтарың болса <br>WhatsApp желісіне жаза аласың', 'Если у вас есть какие-либо вопросы, <br>напишите нам WhatsApp'),
(237, 'Do you have a project?', 'Сізде проект бар ма?', 'У вас есть проект?'),
(238, 'You can call us or write to any messenger convenient for you. Or just leave a request and we will contact you ourselves.', 'Бізге хабарлассаңыз болады немесе кез-келген байланыс құралдарымызға жаза аласыз. <br>Әлде осы форманы толтырсаңыз, біз өзіміз сізге хабарласамыз.', 'Можете позвонить нам или написать в любой удобный для вас мессенджер. <br>Или просто оставьте заявку, и мы сами с вами свяжемся.'),
(239, 'Let`s discuss it', 'Давайте талқылайық', 'Давайте его обсудим'),
(240, 'Send a request', 'Жазбаны жіберу', 'Отправить заявку'),
(241, 'Describe the task', 'Тапсырманы сипаттап көріңіз', 'Опишите задачу'),
(242, 'Until the end of the discount is left:', 'Жіңілдіктің аяқталуына:', 'До конца скидки осталось:'),
(243, 'Payment for ', 'Төлем ', 'Оплата на '),
(244, ' days', ' күнге', ' дней');

-- --------------------------------------------------------

--
-- Структура таблицы `word_block`
--

CREATE TABLE `word_block` (
  `id` int(11) NOT NULL,
  `txt` text DEFAULT NULL,
  `txt_kz` text DEFAULT NULL,
  `txt_ru` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `blocks`
--
ALTER TABLE `blocks`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pod_menu_id` (`menu_id`);

--
-- Индексы таблицы `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `site`
--
ALTER TABLE `site`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `word`
--
ALTER TABLE `word`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `word_block`
--
ALTER TABLE `word_block`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `blocks`
--
ALTER TABLE `blocks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `quiz`
--
ALTER TABLE `quiz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `site`
--
ALTER TABLE `site`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `word`
--
ALTER TABLE `word`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=245;

--
-- AUTO_INCREMENT для таблицы `word_block`
--
ALTER TABLE `word_block`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
