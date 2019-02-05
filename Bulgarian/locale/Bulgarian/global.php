<?php
/*
Bulgarian Language Fileset
Translated by Svetlyo DaCarfiol
Email: admin@8mo.org
Web: http://www.8mo.org
Original files provided by 
Nick Johnes (Digitanium)
http://www.php-fusion.co.uk
*/

// Locale Settings
setlocale(LC_TIME, "bg","BG"); // Linux Server (Windows may differ)
$locale['charset'] = "windows-1251";
$locale['xml_lang'] = "en";
$locale['tinymce'] = "en";
$locale['phpmailer'] = "en";

// Full & Short Months
$locale['months'] = "&nbsp|Януари|Февруари|Март|Април|Май|Юни|Юли|Август|Септември|Октомври|Ноември|Декември";
$locale['shortmonths'] = "&nbsp|Ян|Фев|Март|Апр|Май|Юни|Юли|Авг|Септ|Окт|Ное|Дек";

// Standard User Levels
$locale['user0'] = "Общ";
$locale['user1'] = "Потребител";
$locale['user2'] = "Администратор";
$locale['user3'] = "Супер Администратор";
// Forum Moderator Level(s)
$locale['userf1'] = "Модератор";
// Navigation
$locale['global_001'] = "Меню";
$locale['global_002'] = "Няма създадени връзки\n";
// Users Online
$locale['global_010'] = "На линия";
$locale['global_011'] = "Гости на линия";
$locale['global_012'] = "Регистрирани на линия";
$locale['global_013'] = "Няма регистрирани на линия";
$locale['global_014'] = "Общо регистрирани";
$locale['global_015'] = "Неактивирани потребители";
$locale['global_016'] = "Най новите членове";
// Forum Side panel
$locale['global_020'] = "Теми от форума";
$locale['global_021'] = "ПОследни теми";
$locale['global_022'] = "Горещи теми";
$locale['global_023'] = "Няма създадени теми";
// Articles Side panel
$locale['global_030'] = "Последни статии";
$locale['global_031'] = "Няма статии";
// Welcome panel
$locale['global_035'] = "Добре дошли";
// Latest Active Forum Threads panel
$locale['global_040'] = "Последно активни теми от форума";
$locale['global_041'] = "Моите последни теми";
$locale['global_042'] = "Моите последни отговори";
$locale['global_043'] = "Нови отговори";
$locale['global_044'] = "Тема";
$locale['global_045'] = "Показвана";
$locale['global_046'] = "Отговори";
$locale['global_047'] = "Последен отговор";
$locale['global_048'] = "Форум";
$locale['global_049'] = "Публикуван";
$locale['global_050'] = "Автор";
$locale['global_051'] = "Анкета";
$locale['global_052'] = "Преместен";
$locale['global_053'] = "Все още няма стартирани теми във форума.";
$locale['global_054'] = "Все още няма съобщения във форума.";
$locale['global_055'] = "Има %u нови отговора след последното ви посещение.";
$locale['global_056'] = "Теми под наблюдение";
$locale['global_057'] = "Опции";
$locale['global_058'] = "Стоп";
$locale['global_059'] = "Не следите нито една тема.";
$locale['global_060'] = "Да спра ли следенето на тази тема?";
// News & Articles
$locale['global_070'] = "Публикувано от ";
$locale['global_071'] = "на ";
$locale['global_072'] = "Прочети повече";
$locale['global_073'] = " Коментари";
$locale['global_073b'] = " Коментар";
$locale['global_074'] = " Прочитания";
$locale['global_075'] = "Отпечатай";
$locale['global_076'] = "Редактирай";
$locale['global_077'] = "Новини";
$locale['global_078'] = "Все още няма новини";
// Page Navigation
$locale['global_090'] = "Предишна";
$locale['global_091'] = "Следваща";
$locale['global_092'] = "Страница ";
$locale['global_093'] = " от ";
// Guest User Menu
$locale['global_100'] = "Вход";
$locale['global_101'] = "Потребител";
$locale['global_102'] = "Парола";
$locale['global_103'] = "Запомни ме";
$locale['global_104'] = "Вход";
$locale['global_105'] = "Не сте регистрирани?<br /><a href='".BASEDIR."register.php' class='side'>Натиснете тук</a> за регистрация.";
$locale['global_106'] = "Забравена парола?<br />Натиснете тук <a href='".BASEDIR."lostpassword.php' class='side'>за нова</a>.";
$locale['global_107'] = "Регистрация";
$locale['global_108'] = "Забравена парола";
// Member User Menu
$locale['global_120'] = "Редактиране на профил";
$locale['global_121'] = "Лични съобщения";
$locale['global_122'] = "Списък с потребители";
$locale['global_123'] = "Админ панел";
$locale['global_124'] = "Изход";
$locale['global_125'] = "Имате %u ";
$locale['global_126'] = " ново съобщение";
$locale['global_127'] = "нови съобщения";
// Poll
$locale['global_130'] = "Анкета за потребителите";
$locale['global_131'] = "Гласувай";
$locale['global_132'] = "Трябва да влезете за да гласувате.";
$locale['global_133'] = "Глас";
$locale['global_134'] = "Гласове";
$locale['global_135'] = "Гласове: ";
$locale['global_136'] = "Започнала: ";
$locale['global_137'] = "Приключила: ";
$locale['global_138'] = "Архив на анкетите";
$locale['global_139'] = "Изберете анкета от списъка, за да я разгледате:";
$locale['global_140'] = "Виж";
$locale['global_141'] = "Разгледай анкета";
$locale['global_142'] = "Няма създадени анкети.";
// Shoutbox
$locale['global_150'] = "ЧАТ";
$locale['global_151'] = "Име:";
$locale['global_152'] = "Съобщение:";
$locale['global_153'] = "Пусни";
$locale['global_154'] = "Трябва да влезате за да пуснете съобщение.";
$locale['global_155'] = "Архив на чата";
$locale['global_156'] = "Няма съобщения.";
$locale['global_157'] = "Изтрий";
$locale['global_158'] = "Валидационен код:";
$locale['global_159'] = "Въведи валидационен код:";
// Footer Counter
$locale['global_170'] = "уникални посещения";
$locale['global_171'] = "уникални посещения";
$locale['global_172'] = "Страницата се зареди за %s секунди";
// Admin Navigation
$locale['global_180'] = "Начало на администрация";
$locale['global_181'] = "Върни се в сайта";
$locale['global_182'] = "<strong>нимание:</strong> администраторската парола е грешна или не е въведена.";
// Miscellaneous
$locale['global_190'] = "Активиран е режим на поддръжка";
$locale['global_191'] = "Вашият IP адрес е блокиран.";
$locale['global_192'] = "Излизате като ";
$locale['global_193'] = "Влизате като ";
$locale['global_194'] = "Този акаунт е блокиран.";
$locale['global_195'] = "Този акаунт не е активиран.";
$locale['global_196'] = "Грешно потребителско име или парола.";
$locale['global_197'] = "Моля изчакайте докато ви прехвърлим...<br /><br />
[ <a href='index.php'>Или натиснете тук, ако не искате да чакате</a> ]";
$locale['global_198'] = "<strong>Внимание:</strong> откирит е setup.php , моля изтрийте го незабавно.";
$locale['global_199'] = "<strong>Внимание:</strong> Администраторската парола не е указана, натиснете <a href='".BASEDIR."edit_profile.php'>Редакция на профила</a>за да я укажете.";
//Titles
$locale['global_200'] = " - ";
$locale['global_201'] = ": ";
$locale['global_202'] = $locale['global_200']."Търсене";
$locale['global_203'] = $locale['global_200']."ЧЗВ";
$locale['global_204'] = $locale['global_200']."Форум";
?>
