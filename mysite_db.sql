-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 19 2024 г., 07:08
-- Версия сервера: 8.0.30
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `mysite_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `comment_id` int NOT NULL,
  `message_id` int NOT NULL,
  `user_id` int NOT NULL,
  `text` varchar(500) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`comment_id`, `message_id`, `user_id`, `text`) VALUES
(3, 14, 35, 'It\'s funny!!! Ha-ha!'),
(4, 13, 35, 'Good!'),
(5, 11, 37, 'Good!');

-- --------------------------------------------------------

--
-- Структура таблицы `messages`
--

CREATE TABLE `messages` (
  `message_id` int NOT NULL,
  `user_id` int NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `short_desc` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `full_desc` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `messages`
--

INSERT INTO `messages` (`message_id`, `user_id`, `title`, `short_desc`, `full_desc`) VALUES
(11, 36, 'First message', 'Sed ut perspiciatis, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur.', 'Sed ut perspiciatis, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur.\r\n\r\nTemporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet, nam libero tempore, cum soluta nobis est eligendi optio, cumque nihil impedit, quo minus id, quod maxime placeat, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. Sed ut perspiciatis, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, ut et voluptates repudiandae sint et molestiae non recusandae!\r\n\r\nItaque earum rerum hic tenetur a sapiente delectus, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, nisi ut aliquid ex ea commodi consequatur?\r\n\r\nDuis aute irure dolor in reprehenderit in voluptate, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, obcaecati cupiditate non provident, similique sunt in culpa, qui officia deserunt mollitia animi, id est laborum et dolorum...'),
(12, 36, 'Lorem ipsum', 'Quis autem vel eum iure reprehenderit, nam libero tempore, cum soluta nobis est eligendi optio, cumque nihil impedit.', 'Duis aute irure dolor in reprehenderit in voluptate, nam libero tempore, cum soluta nobis est eligendi optio, cumque nihil impedit, quo minus id, quod maxime placeat, facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.\r\n\r\nTemporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet, consectetur adipiscing elit, ut et voluptates repudiandae sint et molestiae non recusandae?\r\n\r\nItaque earum rerum hic tenetur a sapiente delectus, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat?\r\n\r\nTemporibus autem quibusdam et aut officiis...'),
(13, 36, 'Et harum quidem rerum ', 'Duis aute irure dolor in reprehenderit in voluptate, unde omnis iste natus error sit voluptatem accusantium doloremque laudantiu.', 'Quis autem vel eum iure reprehenderit, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.\r\n\r\nDuis aute irure dolor in reprehenderit in voluptate, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem.\r\n\r\nItaque earum'),
(14, 36, 'Анекдот #1', 'Веселый анекдот', 'Что в жизни предпринимателя является самым сложным? Кто-то подумает, что бессонные ночи. Труд до седьмого пота. Страх за вложенные деньги. И в чем-то будет прав. Пока не столкнется с чиновником. И вот тут приходит понимание, что все вышеперечисленное только \"цветочки\". Пришлось с этим столкнуться и мне в середине девяностых.\r\nЧиновник,\r\nкоторый достался мне по жребию судьбы, anekdotov.net, был не лыс, костюм его был не с пошорканными локтями и задницей. Он был весел, вежлив и опрятен. С первого взгляда в нем не было ничего бюрократического. Он даже при знакомстве протянул руку и как-то немного по-офицерски представился:\r\n— Заместитель начальника ветеринарной инспекции, Сергей Петрович.\r\nНа этом все мои лучшие представление о нем ушли в небытие. Потому что начался обычный бюрократический процесс. С требованием каких-то бумажек, о которых я как предприниматель и слыхом не слыхивал. Но это ведь не освобождает от ответственности. И это я знал.\r\n— К нам поступила информация, что вами получена партия мясного фарша и сейчас им активно ведется торговля?\r\nВсе было так и я в согласии кивнул головой.\r\n— А имеется ли у вас ветеринарное свидетельство на данный продукт?\r\nЗдесь головой я кивать не стал, а глубоко задумался. Наверное потому, что свидетельства у меня не было и представить этот фарш в виде животных, которые имели отношение к ветеринарии, мне было довольно проблематично. Фарш-то прибыл из-за бугра. Где-то под Питером его сертифицировали на право торговли в России и ни о каком ветеринарном свидетельстве разговор не шел. А наверно должен был, раз целый зам. начальника приехал на него посмотреть.\r\n— Фарш придется изъять из продажи.\r\n— Но почему? — опешил я. — Вот же сертификат, где черным по белому написано о его безопасности и сроках реализации. У меня еще полгода на его продажу..\r\nИ тут он как настоящий чиновник достал какую-то замусоленную книжку из имеющегося у него портфеля. Настолько замусоленную, что я увидел в ней смерть, мою как предпринимателя. Он послюнявил палец и изрек: ГоСТ на фарш, срок хранения 12 часов с момента изготовления.\r\n— Ты не охуе... — дрожащим голосом выдавил я, но быстро все исправил — вы уверены, что здесь нет ошибки?\r\n— Здесь нет никаких ошибок, читайте сами — и протянул мне книжонку.\r\nНаписано было именно так и я сделал еще одну попытку:\r\n— Я его не готовил. И ничего не хранил. Здесь написано охлажденный, а у меня глубокой заморозки.\r\n— В любом случае фарш, согласно ваших же документов.\r\nПри этих словах я понурился. Потерять сорок тысяч баксов в самом начале для предпринимателя подобно смерти, тем более, что весомая часть из них кредитная. О своей смерти думать не хотелось и я прокручивал в голове картинки с Сергей Петровичем. Вот он лежит в зеленой траве растоптанный быком-производителем. В руке у него шашка или даже меч-кладенец, он же должен был чем-то обороняться. А вот здесь на него напала стая бездомных собак им кастрированных. Они разнесли куски его плоти по всей округе. А вот здесь он заварен в бочке с кошками и задыхается от их мочи. Нет, вы не подумайте, что я садист, но с моей точки зрения ветеринар должен погибнуть как-то по ветеринарски. Героически.\r\n— Наверное убить меня хочешь — вывел он меня из раздумий. — Зря, ведь за мной государство. А я тебе еще и помочь могу!\r\n— Нет, что вы, что вы. Я же не бандит, я предприниматель. Мое дело не с ножом бегать, а договора подписывать. А как вы мне можете помочь?\r\n— Ну отправить твой фарш на промпереработку. Не ахти выход, но хоть какой-то. Вот где-то у меня номер телефона директора мясокомбината записан. — поковырявшись в блокноте, он произнес — Переписывай. А я пойду пока холодильники опломбирую. Дня три тебе на раздумье хватит?\r\nНе успел он уйти, как я набрал данный им номер. Представился, выслушал ответное представление и пожаловался на судьбу злодейку.\r\n— И много у тебя там этого фарша? — раздалось в трубке.\r\n— Да почти сорок тонн без малого, что за день успели продать. Народ метет, но ветеринары одолели.\r\n— Ну хорошо, если анализы качество подтвердят, тысяч десять баксов могу дать. Но не сразу, по реализации.\r\nЭто был еще один пинок ниже пояса. И я представил как он крутится в мясорубке, но на самом деле сказал:\r\n— Хорошо, я подумаю.\r\nДумать было о чем. За этим наверно тоже стоит государство. Завод еще не приватизировали. Вот говорили же мне друзья, иди в рэкет. Нахрен тебе этот геморрой с предпринимательством. Не послушал их тогда, а сейчас придется идти к смотрящему. Благо знакомый, бригадиром был на зоне, когда я там был вольнонаемным механиком цеха. Наверно поэтому на меня пока не было наездов.\r\n\"Фигура\" встретил меня с интересом. Поинтересовался жизнью и мое предложение, что я в \"общак\" хочу отстегнуть тысяч восемь баксов прослушал с непониманием.\r\n— \"Крыша\", что ли нужна? Ты ж вроде никогда не платил?\r\n— Да и сейчас не собираюсь. Если у тебя какая-то левая фирма есть, передам ей по договору фарш на промпереработку и реализацию на сорок тысяч бакинских. Дам клиентуру из покупателей. Двадцать процентов от суммы будет твой навар. Остальное мне, больше не могу, кредиты.\r\nОн хмыкнул и в согласии кивнул головой.\r\nОстальное было дело техники. Моей, предпринимательской техники. Договор, накладные, этикетки и прочее. Все сделалось быстро и правильно.\r\nКогда дня через три заявился Сергей Петрович, я был ему немножко рад.\r\n— Ну как у нас дела? Вернее у вас? — поинтересовался он.\r\n— Нормально. Вот нашел фирму, которая взяла весь фарш на промпереработку. Я им и холодильники продал вместе с этим фаршем.\r\n— Как продал? Они же опломбированы? — ошалел он.\r\n— Так я никакие пломбы не трогал. Они и так взяли.\r\n— Что за компания? Пойду им выпишу предписание. — и метнулся к дверям.\r\nОбратно его притащили за шкирку.\r\n— Говорит, ваш человек, шарился там у холодильников. Если ваш, забирайте, а если нет, то грохнем! — произнес какой-то двухметровый менеджер новой фирмы.\r\n— Да мой, мой! — успокоил его я. — Котлеток зашел покушать из фарша, но не знал, что фарш уже ваш.\r\n— Ну ладно. — менеджер нехотя отпустил шкирку пиджака. — А мож, все же грохнуть, что-то его рожа мне не нравится. Про какие-то пломбы орал. Я б грохнул!\r\n— Да ладно, сейчас все решим. Все хорошо. — успокаивал его я.\r\n— А как же ветеринарное свидетельство? — немного успокоившись и поправив пиджак, произнес Сергей Петрович. Оглядываясь на двери.\r\n— Твою ж медь, забыл, забыл. Подождите секундочку, сейчас я ихнего представителя вызову, вы с ним все и решите.\r\n— Да ладно. — Сергей Петрович сделал какое-то мне неведомое движение, то ли пригнулся, то ли под стол хотел нырнуть, — вы же на промпереработку передали, так что все нормально.\r\n— А государство не будет против? — когда он аккуратно заглянув за двери, хотел уже прощаться.\r\n— Да нет, что вы. Разве государство такие мелочи интересуют. Это ваши дела, предпринимательские.'),
(16, 35, 'I don\'t know what to write about', 'There was text here', 'There was also text here'),
(17, 35, 'Test', 'TestTestTestTestTestTest', 'TestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTest');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `user_id` int NOT NULL,
  `user_name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `user_email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `password`) VALUES
(35, 'unknow', 'unknow@mail.ru', '551332101545459135eacd0e67337b30'),
(36, 'whoiam', 'whoiam@mail.ru', '1eb5934efe7a0359a5496fc02c2a2741'),
(37, 'newbie', 'newbie@gmail.com', 'cbb9e9cee5463f95cd76f2b3f6d8d368');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `test1` (`user_id`),
  ADD KEY `test2` (`message_id`);

--
-- Индексы таблицы `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`message_id`),
  ADD KEY `test` (`user_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `messages`
--
ALTER TABLE `messages`
  MODIFY `message_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `test1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `test2` FOREIGN KEY (`message_id`) REFERENCES `messages` (`message_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `test` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
