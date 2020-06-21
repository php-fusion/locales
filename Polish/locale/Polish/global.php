<?php
/**
 * English Locale
 *
 * @locale charset     ISO 639-1 - http://www.loc.gov/standards/iso639-2/php/code_list.php
 * @locale region      ISO-3166 (2 Alpha numeric) - https://www.iso.org/obp/ui/#search
 * @locale tinymce     refer to path includes/jscripts/tinymce/langs/{value}.js
 * @locale phpmailer   refer to path includes/classes/PHPMailer/language/phpmailer.lang-{value}.php
 * @locale filemanager refer to path includes/elFinder/js/i18n/{value}.js
 * @package locale/English
 */

setlocale(LC_TIME, "en_GB.UTF-8"); // Linux Server (Windows may differ)
$locale['charset'] = "utf-8";
$locale['region'] = "PL";
$locale['xml_lang'] = "pl";
$locale['short_lang_name'] = "pl";
$locale['tinymce'] = "pl";
$locale['select2'] = "pl";
$locale['phpmailer'] = "pl";
$locale['filemanager'] = "pl_PL";
$locale['datepicker'] = "pl";
$locale['datepicker_js'] = "DD-M-YYYY H:mm:ss";
$locale['datepicker_php'] = "d-m-Y H:i:s";
$locale['password_strength'] = "pl";
$locale['date_day'] = "%d %b";
$locale['text-direction'] = "ltr";

// Full & Short Months
$locale['months'] = "&nbsp|styczeń|luty|marzec|kwiecień|maj|czerwiec|lipiec|sierpień|wrzesień|październik|listopad|grudzień";
$locale['shortmonths'] = "&nbsp|st.|lt.|mar.|kwi.|maj|czer.|lip.|sier.|wrz.|paź.|lis.|gru.";
$locale['weekdays'] = "Niedziela|Poniedziałek|Wtorek|Środa|Czwartek|Piątek|Sobota";
// Timers
$locale['year'] = "rok";
$locale['year_a'] = "lata";
$locale['month'] = "miesiąc";
$locale['month_a'] = "miesiące";
$locale['week'] = "tydzień";
$locale['week_a'] = "tygodnie";
$locale['day'] = "dzień";
$locale['day_a'] = "dni";
$locale['hour'] = "godzina";
$locale['hour_a'] = "godziny";
$locale['minute'] = "minuta";
$locale['minute_a'] = "minuty";
$locale['second'] = "sekunda";
$locale['second_a'] = "sekundy";
$locale['just_now'] = "teraz";
$locale['now'] = 'teraz';
$locale['ago'] = "dawniej";
// Name
$locale['name'] = "Pełne Nazwisko";
$locale['username_pretext'] = "Twoja publiczna nazwa jest taka sama jak twój adres profilu: %s %s";
$locale['first_name'] = "Imię";
$locale['middle_name'] = "Drugię Imię";
$locale['last_name'] = "Nazwisko";
// Standard User Levels
$locale['user0'] = "Gość";
$locale['user1'] = "Użytkownik";
$locale['user2'] = "Administrator";
$locale['user3'] = "Główny administrator";
$locale['user_na'] = "Nd.";
$locale['user_guest'] = "Gość";
$locale['user_anonymous'] = "Konto ukryte";
$locale['genitive'] = "%s's %s";
// Standard User Status
$locale['status0'] = "Aktywne";
$locale['status1'] = "Zablokowane";
$locale['status2'] = "Nieaktywne";
$locale['status3'] = "Zawieszone";
$locale['status4'] = "Zablokowane zp. bezpieczeństwa";
$locale['status5'] = "Wyłączone zp. bezczynności";
$locale['status6'] = "Ukryte";
$locale['status7'] = "Wyłączone";
$locale['status8'] = "Bezczynne";
// Forum Moderator Level(s)
$locale['userf1'] = "Moderator";
// Navigation
$locale['global_001'] = "Nawigacja";
$locale['global_002'] = "Brak linków
";
$locale['global_003'] = "Nic do podglądu";
// Users Online
$locale['global_010'] = "Aktualnie online";
$locale['global_011'] = "Gości online";
$locale['global_012'] = "Użytkowników online";
$locale['global_013'] = "Brak użytkowników online";
$locale['global_014'] = "Łącznie użytkowników";
$locale['global_015'] = "Nieaktywnych użytkowników";
$locale['global_016'] = "Najnowszy użytkownik";
$locale['global_017'] = "Zmień Nawigację";
// Forum Side panel
$locale['global_020'] = "Ostatnio na forum";
$locale['global_021'] = "Najnowsze tematy";
$locale['global_022'] = "Najciekawsze tematy";
$locale['global_023'] = "Brak tematów na forum";
$locale['global_024'] = "Uczestniczył w dyskusjach";
$locale['global_027'] = "Wątki bez odpowiedzi";
$locale['global_028'] = "Nierozwiązane pytania";
// Comments Side panel
$locale['global_025'] = "Ostatnie komentarze";
$locale['global_026'] = "Brak komentarzy";
// Articles Side panel
$locale['global_030'] = "Ostatnie artykuły";
$locale['global_031'] = "Brak artykułów";
// Downloads Side panel
$locale['global_032'] = "Ostatnie pliki";
$locale['global_033'] = "Brak plików";
// Welcome panel
$locale['global_035'] = "Powitanie";
// Latest Active Forum Threads panel
$locale['global_040'] = "Ostatnio poruszane tematy";
$locale['global_041'] = "Moje ostatnie tematy";
$locale['global_042'] = "Moje ostatnie posty";
$locale['global_043'] = "Nowe posty";
$locale['global_044'] = "Temat";
$locale['global_045'] = "Wyświetleń";
$locale['global_046'] = "Odpowiedzi";
$locale['global_047'] = "Ostatni post";
$locale['global_048'] = "Forum";
$locale['global_049'] = "Napisane przez";
$locale['global_050'] = "Autor";
$locale['global_051'] = "Ankieta";
$locale['global_052'] = "Przeniesiony";
$locale['global_053'] = "Brak rozpoczętych przez Ciebie tematów.";
$locale['global_054'] = "Brak napisanych przez Ciebie postów.";
$locale['global_055'] = "Nowych postów od Twojej ostatniej wizyty: %u w %u tematach";
$locale['global_056'] = "Moje obserwowane tematy";
$locale['global_057'] = "Opcje";
$locale['global_058'] = "Przestań <br /> obserwować";
$locale['global_059'] = "Brak obserwowanych przez Ciebie tematów.";
$locale['global_060'] = "Przestać obserwować temat?";
// News & Articles
$locale['global_070'] = "Napisane przez ";
$locale['global_070b'] = "Zobacz wszystkie artykuły %s";
$locale['global_071'] = "dnia ";
$locale['global_071b'] = "Autor";
$locale['global_072'] = "Czytaj więcej";
$locale['global_073'] = " komentarzy";
$locale['global_073b'] = " komentarz";
$locale['global_074'] = " czytań";
$locale['global_074b'] = " czytań";
$locale['global_075'] = "Drukuj";
$locale['print'] = "Drukuj";
$locale['global_076'] = "Edytuj";
$locale['global_077'] = "News";
$locale['global_078'] = "Brak opublikowanych newsów.";
$locale['global_079'] = "Kategoria: ";
$locale['global_080'] = "Bez kategorii";
$locale['global_081'] = "Strona news";
$locale['global_082'] = "News";
$locale['global_083'] = "Ostatnio zaktualizowane";
$locale['global_084'] = "Kategoria news";
$locale['global_085'] = "Pozostałe kategorie";
$locale['global_086'] = "Najnowsze newsy";
$locale['global_087'] = "Najczęściej komentowane newsy";
$locale['global_088'] = "Najczęściej oceniane newsy";
$locale['global_089'] = "Bądź pierwszym, który skomentuje %s";
$locale['global_089a'] = "Bądź pierwszym, który oceni %s";
$locale['global_089b'] = "Widok podglądu";
$locale['global_089c'] = "Widok listy";
// Page Navigation
$locale['global_090'] = "Poprzednia";
$locale['global_091'] = "Następna";
$locale['global_092'] = "Strona ";
$locale['global_093'] = " z&nbsp;";
$locale['global_094'] = " łącznie ";
// Guest User Menu
$locale['global_100'] = "Logowanie";
$locale['global_101'] = "Nazwa użytkownika";
$locale['global_101a'] = "Wpisz nazwę użytkownika";
$locale['global_101b'] = "Wpisz email";
$locale['global_101c'] = "Wpisz email i nazwę użytkownika";
$locale['global_102'] = "Hasło";
$locale['global_103'] = "Zapamiętaj mnie";
$locale['global_104'] = "Zaloguj";
$locale['global_105'] = "Nie masz jeszcze konta? <br /><a href='".BASEDIR."register.php' class='side'>Zarejestruj się</a>";
$locale['global_106'] = "Nie możesz się zalogować?<br /> Poproś o&nbsp;<a href='".BASEDIR."lostpassword.php' class='side'>nowe hasło</a>";
$locale['global_107'] = "Rejestracja";
$locale['global_108'] = "Zapomniane hasło";
$locale['global_109'] = "Zarejestruj";
// Member User Menu
$locale['global_120'] = "Edytuj profil";
$locale['global_121'] = "Prywatne wiadomości";
$locale['global_122'] = "Lista użytkowników";
$locale['global_123'] = "Panel administratora";
$locale['global_124'] = "Wyloguj";
$locale['global_125'] = "%u";
$locale['global_126'] = " nieprzeczytana wiadomość";
$locale['global_127'] = " nieprzeczytane wiadomości";
$locale['global_128'] = " nadesłany materiał";
$locale['global_129'] = " nadesłane materiały";
// Poll
$locale['global_130'] = "Ankieta";
$locale['global_131'] = "Zagłosuj";
$locale['global_132'] = "Musisz zalogować się, aby móc zagłosować.";
$locale['global_133'] = "głos";
$locale['global_134'] = "głosów";
$locale['global_135'] = "Ogółem głosów: ";
$locale['global_136'] = "Rozpoczęto: ";
$locale['global_137'] = "Zakończono: ";
$locale['global_138'] = "Archiwum ankiet";
$locale['global_139'] = "Wybierz ankietę z&nbsp;listy:";
$locale['global_140'] = "Zobacz wyniki";
$locale['global_141'] = "Wyniki ankiety";
$locale['global_142'] = "Brak przeprowadzanych ankiet.";
$locale['global_143'] = "Oceny";
// User Menu
$locale['UM060'] = "Login";
$locale['UM061'] = "Nazwa użytkownika";
$locale['UM061a'] = "E-mail";
$locale['UM061b'] = "Nazwa użytkownika lub e-mail";
$locale['UM062'] = "Hasło";
$locale['UM063'] = "Zapamiętaj mnie na tym komputerze";
$locale['UM064'] = "Login";
$locale['UM065'] = "Nie masz jeszcze konta? <br /><a href='".BASEDIR."register.php' class='side'>Click here</a> to register.";
$locale['UM066'] = "Forgotten your password?<br />Request a new one <a href='".BASEDIR."lostpassword.php' class='side'>here</a>.";
$locale['UM067'] = "(not recommended on public or shared computer)";
$locale['UM080'] = "Edytuj profil";
$locale['UM081'] = "Prywatne wiadomości";
$locale['UM082'] = "Lista użytkowników";
$locale['UM083'] = "Panel administratora";
$locale['UM084'] = "Wyloguj";
$locale['UM085'] = "You have %u new ";
$locale['UM086'] = "nieprzeczytane wiadomości";
$locale['UM087'] = "wiadomości";
$locale['UM088'] = "Śledzone wątki";
// Submit (news, blog, link, article)
$locale['UM089'] = "Wyślij...";
$locale['UM090'] = "Dodaj newsa";
$locale['UM091'] = "Dodaj link";
$locale['UM092'] = "Dodaj artykuł";
$locale['UM093'] = "Dodaj zdjęcie";
$locale['UM094'] = "Dodaj plik";
$locale['UM095'] = "Dodaj blog";
$locale['UM102'] = "Dodaj FAQ";
// User Panel
$locale['UM096'] = "Witamy: ";
$locale['UM097'] = "Personal menu";
$locale['UM101'] = "Zmień język";
// Gauges
$locale['UM098'] = "PM Inbox :";
$locale['UM099'] = "PM Outbox :";
$locale['UM100'] = "PM Archive :";
// Keywords and Meta
$locale['tags'] = "Tagi";
$locale['notfound'] = "Nie znaleziono wyników..";
$locale['sel_user'] = "Wybierz użytkownika";
// Captcha
$locale['global_150'] = "Kod potwierdzający:";
$locale['global_151'] = "Wpisz kod potwierdzający:";
// Footer Counter
$locale['global_170'] = "unikalna wizyta";
$locale['global_171'] = "unikalne wizyty";
$locale['global_172'] = "Wygenerowano w&nbsp;sekund: %s";
$locale['global_173'] = "zapytań MySQL";
$locale['global_174'] = "Użyta pamięć";
$locale['global_175'] = "Średnia: %s sekund";
$locale['global_176'] = "Polityka Prywatności";
// Admin Navigation
$locale['global_180'] = "Powróć do panelu administracyjnego";
$locale['global_181'] = "Powróć do strony głównej";
$locale['global_182'] = "<strong>Uwaga:</strong> Podane hasło administratora jest nieprawidłowe lub puste.";
// Miscellaneous
$locale['global_190'] = "Aktywowano tryb serwisowy na serwerze.";
$locale['global_191'] = "Twoje IP jest zablokowane.";
$locale['global_192'] = "Minęła ważność ciasteczka (cookie). Zaloguj się ponownie.";
$locale['global_193'] = "Nie można było ustawić ciasteczka (cookie). Upewnij się, że masz włączoną obsługę ciasteczek w przeglądarce, aby móc zalogować się.";
$locale['global_194'] = "Konto zostało zablokowane.";
$locale['global_195'] = "Konto nie jest aktywne.";
$locale['global_196'] = "Nieprawidłowa nazwa użytkownika lub hasło.";
$locale['global_197'] = "Proszę czekać na przekierowanie...<br /><br />
[ <a href='index.php'>Nie chcę czekać</a> ]";
$locale['global_198'] = "<strong>Ostrzeżenie:</strong> Wykryto plik setup.php. Proszę, usuń go natychmiast.";
$locale['global_199'] = "<strong>Ostrzeżenie:</strong> Nie ustawiono hasła administratora, <a href='".BASEDIR."edit_profile.php'>ustaw je</a> natychmiast.";
//Titles
$locale['global_200'] = " - ";
$locale['global_201'] = ": ";
$locale['global_202'] = " - Szukaj";
$locale['global_203'] = " - FAQ";
$locale['global_204'] = " - Forum";
//Themes
$locale['global_210'] = "Przejdź do treści";
$locale['global_300'] = "nie znaleziono skórki.";
$locale['global_301'] = "This page cannot be displayed. Due to unknown reasons a valid site theme can not be found.
 If you are the Administrator, please use your FTP client to upload any theme designed for PHP-Fusion 8 to the themes folder.
 After upload check in Theme Settings to see if the selected theme was correctly uploaded to your themes directory.
 Please note that the uploaded theme folder has to have the exact same name (including character case, which is important on Unix based servers)
 as chosen in Theme Settings page.<br/>If you are regular member of this site, please contact the site\\'s administrator via [SITE_EMAIL] e-mail and report this issue.";
$locale['global_302'] = "Wybrana przez Ciebie skórka nie istnieje lub jest niekompletna!";
// JavaScript Not Enabled
$locale['global_303'] = "<p>O&nbsp;nie! Ta strona potrzebuje włączonej obsługi języka <strong>JavaScript</strong>!</p><p>Twoja przeglądarka nie obsługuje tego języka lub ma wyłączoną jego obsługę. <strong>Włącz wykonywanie kodu JavaScript</strong> w swojej przeglądarce internetowej, aby skorzystać ze wszystkich funkcji strony<br /> lub <strong>skorzystaj</strong> z&nbsp;programu obsługującego język JavaScript, np. <a href='http://firefox.com' rel='nofollow' title='Mozilla Firefox'>Mozilla Firefox</a>, <a href='http://apple.com/safari/' rel='nofollow' title='Apple Safari'>Apple Safari</a>, <a href='http://opera.com' rel='nofollow' title='Opera Web Browser'>Opera</a>, <a href='http://www.google.com/chrome' rel='nofollow' title='Google Chrome'>Google Chrome</a> lub <a href='http://www.microsoft.com/windows/internet-explorer/' rel='nofollow' title='Windows Internet Explorer'>Windows Internet Explorer</a> w&nbsp;wersji wyższej niż 6.</p>";
// User Management
$locale['global_400'] = "zawieszone";
$locale['global_401'] = "zablokowane";
$locale['global_402'] = "wyłączone";
$locale['global_403'] = "konto wyłączone";
$locale['global_404'] = "konto ukryte";
$locale['global_405'] = "ukryte";
$locale['global_406'] = "Konto zostało zbanowane z&nbsp;następujących powodów:";
$locale['global_407'] = "Konto jest zawieszone do ";
$locale['global_408'] = " z&nbsp;następujących powodów:";
$locale['global_409'] = "Konto zostało zablokowane ze względów bezpieczeństwa.";
$locale['global_410'] = "Powód: ";
$locale['global_411'] = "Konto zostało zablokowane zp. bezczynności";
$locale['global_412'] = "Konto zostało anonimizowane, prawdopodobnie z&nbsp;powodu bezczynności";
// Flood control
$locale['global_440'] = "Automatic Ban by Flood Control";
$locale['global_441'] = "Your account on [SITENAME] has been banned";
$locale['global_442'] = "Hello [USER_NAME],<br/>
Your account on [SITENAME] was caught posting too many items to the system in very short time from the IP [USER_IP], and have therefor been banned. This is done to prevent bots from submitting spam messages in rapid succession.<br/>
Please contact the site administrator at [SITE_EMAIL] to have your account restored or report if this was not you causing this security ban.<br/>
Regards,<br/>[SITEUSERNAME]";
// Authenticate Class
$locale['global_450'] = "Suspension automatically lifted by system";
$locale['global_451'] = "Suspension lifted at [SITENAME]";
$locale['global_452'] = "Hello USER_NAME,<br/>
The suspension of your account at [SITEURL] has been lifted. Here are your login details:<br/>
Username: USER_NAME<br/>Password: Hidden for security reasons<br/>
If you have forgot your password you can reset it via the following link: LOST_PASSWORD<br/>
Regards,<br/>[SITEUSERNAME]";
$locale['global_453'] = "Hello USER_NAME,<br/>The suspension of your account at [SITEURL] has been lifted.<br/>
Regards,<br/>[SITEUSERNAME]";
$locale['global_454'] = "Konto ponownie aktywowane [SITENAME]";
$locale['global_455'] = "Witaj USER_NAME,<br/>
Ostatnio zalogowałeś się na swoje konto zostało ponownie aktywowane w [SITEURL] i Twoje konto nie jest już oznaczone jako nieaktywne.<br/>
Pozdrawiamy,<br/>[SITEUSERNAME]";
$locale['global_456'] = "New password notification for [SITENAME]";
$locale['global_457'] = "Hi USER_NAME,
<br/>A new password has been set for your account at [SITENAME]. Please find the enclosed new login details:<br/>
Username: USER_NAME<br/>Password: [PASSWORD]<br/>Regards,<br/>[SITEUSERNAME]";
$locale['global_458'] = "New password has been set for USER_NAME";
$locale['global_459'] = "New password has been set for USER_NAME, and email was not sent. Please ensure to tell the user of the new details.";
// Function parsebytesize()
$locale['global_460'] = "Pusty";
$locale['global_461'] = "Bajty";
$locale['global_462'] = "kB";
$locale['global_463'] = "MB";
$locale['global_464'] = "GB";
$locale['global_465'] = "TB";
//Safe Redirect
$locale['global_500'] = "You are being redirected to %s, please wait. If you're not redirected, click here.";
// Captcha Locales
$locale['global_600'] = "Kod weryfikacyjny";
$locale['global_601'] = "Musisz wprowadzić poprawny kod weryfikacyjny";
$locale['recaptcha'] = "en";
// Site links
$locale['global_700'] = "Pokaż więcej";
//Miscellaneous
$locale['global_900'] = "Unable to convert HEX to DEC";
$locale['global_901'] = "Wstaw media";
//Language Selection
$locale['global_ML100'] = "Język:";
$locale['global_ML101'] = "- Wybierz język -";
$locale['global_ML102'] = "Język witryny";
$locale['global_ML103'] = "Zmień język";
// Flood Control
$locale['flood'] = "You are barred to post until the flood period cool down is over. Please wait for %s.";
$locale['no_image'] = "Brak obrazu";
$locale['send_message'] = "Wyślij wiadomość";
$locale['go_profile'] = "Go to %s Profile Page";
// Global one word locales
$locale['hello'] = "Hello!";
$locale['goodbye'] = "Goodbye!";
$locale['welcome'] = "Witaj ponownie";
$locale['home'] = "Strona główna";
// Status
$locale['error'] = "Błąd!";
$locale['success'] = "Sukces!";
$locale['enable'] = "Włącz";
$locale['disable'] = "Wyłącz";
$locale['can'] = "can";
$locale['cannot'] = "cannot";
$locale['no'] = "Nie";
$locale['yes'] = "Tak";
$locale['off'] = "Off";
$locale['on'] = "On";
$locale['or'] = "or";
$locale['by'] = "by";
$locale['in'] = "in";
$locale['of'] = "of";
$locale['and'] = "and";
$locale['na'] = "No information available";
$locale['joined'] = "Joined since: ";
$locale['enter'] = "Enter";
// Navigation
$locale['next'] = "Next";
$locale['previous'] = "Previous";
$locale['back'] = "Back";
$locale['forward'] = "Forward";
$locale['go'] = "Go";
$locale['cancel'] = "Anuluj";
$locale['clear'] = "Wyczyść";
$locale['move'] = "Przenieś";
$locale['move_up'] = "Przenieś wyżej";
$locale['move_down'] = "Przenieś niżej";
$locale['load_more'] = "Załaduj więcej elementów";
$locale['load_end'] = "Load from Beginning";
// Actions
$locale['add'] = "Dodaj";
$locale['save'] = "Zapisz";
$locale['save_changes'] = "Zapisz zmiany";
$locale['save_and_close'] = "Zapisz i zamknij";
$locale['confirm'] = "Potwierdź";
$locale['update'] = "Aktualizuj";
$locale['updated'] = "Zaktualizowano";
$locale['remove'] = "Usuń";
$locale['delete'] = "Usuń";
$locale['search'] = "Szukaj";
$locale['help'] = "Pomoc";
$locale['register'] = "Rejestracja";
$locale['ban'] = "Ban";
$locale['reactivate'] = "Aktywuj ponownie";
$locale['user'] = "Użytkownik";
$locale['promote'] = "Promote";
$locale['show'] = "Pokaż";
$locale['actions'] = "Akcje";
$locale['language'] = "Język";
$locale['loading'] = "Ładowanie...";
// Persons & Identifiers
$locale['you'] = "You";
$locale['me'] = "Me";
$locale['they'] = "Oni";
$locale['we'] = "We";
$locale['us'] = "Us";
$locale['he'] = "He";
$locale['she'] = "She";
$locale['it'] = "It";
//Tables
$locale['order'] = "Order";
$locale['sort'] = "Sort";
$locale['id'] = "ID";
$locale['title'] = "Tytuł";
$locale['rights'] = "Prawa";
$locale['info'] = "Informacje";
$locale['image'] = "Obraz";
// Forms
$locale['choose'] = "Please Choose One...";
$locale['no_opts'] = "Brak wyboru";
$locale['root'] = "As Parent";
$locale['choose-user'] = "Please Choose a User...";
$locale['choose-location'] = "Please Choose a Location";
$locale['parent'] = "Create as New Parent..";
$locale['item_order'] = "Item Ordering";
$locale['status'] = "Status";
$locale['note'] = "Make a note of this item";
$locale['publish'] = "Opublikuj";
$locale['unpublish'] = "Wycofaj publikację";
$locale['sticky'] = "Przyklej";
$locale['unsticky'] = "Odklej";
$locale['draft'] = "Wersja robocza";
$locale['settings'] = "Ustawienia";
$locale['posted'] = "posted";
$locale['profile'] = "Profil";
$locale['edit'] = "Edytuj";
$locale['qedit'] = "Szybka edycja";
$locale['view'] = "Wyświetleń";
$locale['login'] = "Login";
$locale['logout'] = "Wyloguj";
$locale['admin-logout'] = "Admin Logout";
$locale['message'] = "Prywatne wiadomości";
$locale['logged'] = "Zalogowano jako ";
$locale['version'] = "Wersja ";
$locale['browse'] = "Wybierz ...";
$locale['close'] = "Zamknij";
$locale['nopreview'] = "There is nothing to Preview";
$locale['mark_as'] = "Mark As";
$locale['preview'] = "Podgląd";
$locale['custom'] = "Własny";
$locale['submit'] = "Wyślij";
// Alignment
$locale['left'] = "Left";
$locale['center'] = "Center";
$locale['right'] = "Right";
// Comments and ratings
$locale['comments'] = "Comments";
$locale['ratings'] = "Ratings";
$locale['comments_ratings'] = "Comments and Ratings";
$locale['user_account'] = "User Account";
$locale['about'] = "About";
// User status
$locale['online'] = "Online";
$locale['offline'] = "Offline";
// Words for formatting to single and plural forms. Count of forms is language-dependent
$locale['fmt_submission'] = "submission|submissions";
$locale['fmt_article'] = "article|articles";
$locale['fmt_blog'] = "blog|blogs";
$locale['fmt_comment'] = "comment|comments";
$locale['fmt_vote'] = "vote|votes";
$locale['fmt_rating'] = "rating|ratings";
$locale['fmt_day'] = "day|days";
$locale['fmt_download'] = "download|downloads";
$locale['fmt_follower'] = "follower|followers";
$locale['fmt_forum'] = "forum|forums";
$locale['fmt_guest'] = "guest|guests";
$locale['fmt_hour'] = "hour|hours";
$locale['fmt_item'] = "item|items";
$locale['fmt_member'] = "member|members";
$locale['fmt_message'] = "message|messages";
$locale['fmt_minute'] = "minute|minutes";
$locale['fmt_month'] = "month|months";
$locale['fmt_news'] = "news|news";
$locale['fmt_photo'] = "photo|photos";
$locale['fmt_post'] = "post|posts";
$locale['fmt_question'] = "question|questions";
$locale['fmt_read'] = "read|reads";
$locale['fmt_second'] = "second|seconds";
$locale['fmt_shouts'] = "shout|shouts";
$locale['fmt_thread'] = "thread|threads";
$locale['fmt_user'] = "user|users";
$locale['fmt_views'] = "view|views";
$locale['fmt_weblink'] = "weblink|weblinks";
$locale['fmt_week'] = "week|weeks";
$locale['fmt_year'] = "year|years";
$locale['fmt_points'] = "point|points";
$locale['fmt_admin'] = "admin|admins";
$locale['fmt_group'] = "group|groups";
$locale['fmt_category'] = "category|categories";
$locale['fmt_review'] = "review|reviews";
