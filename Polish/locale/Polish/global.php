<?php
// Official SVN Trunk Rev: 2364
/*English Language Fileset
 Produced by Nick Jones (Digitanium)
 Email: digitanium@php-fusion.co.uk
 Web: http://www.php-fusion.co.uk

 Polish (ISO-8859-2) Language Fileset for PHP-Fusion v7.02.03, based at translation for PHP-Fusion v7.01.xx
 Translations from english, modifications and tests:
 PHP-Fusion po Polsku (PHP-Fusion in Polish)
 https://launchpad.net/pf-pl
 Main translator: Tomasz Jankowski (jantom)
 Translator and tester: Micha³ Pospieszyñski (sony)
 This program is released as free software under the
 Affero GPL license.*/

// Locale Settings
setlocale(LC_TIME, "pl", "pl_PL", "polish"); // Linux Server (Windows may differ)
$locale['charset'] = "iso-8859-2";
$locale['xml_lang'] = "pl";
$locale['tinymce'] = "pl";
$locale['phpmailer'] = "pl";

// Full & Short Months
$locale['months'] = "&nbsp|styczeñ|luty|marzec|kwiecieñ|maj|czerwiec|lipiec|sierpieñ|wrzesieñ|pa¼dziernik|listopad|grudzieñ";
$locale['shortmonths'] = "&nbsp|st.|lt.|mar.|kwi.|maj|czer.|lip.|sier.|wrz.|pa¼.|lis.|gru.";

// Standard User Levels
$locale['user0'] = "Go¶æ";
$locale['user1'] = "U¿ytkownik";
$locale['user2'] = "Administrator";
$locale['user3'] = "G³ówny administrator";
$locale['user_na'] = "Nd.";
$locale['user_anonymous'] = "Konto ukryte";
// Standard User Status
$locale['status0'] = "Aktywne";
$locale['status1'] = "Zablokowane";
$locale['status2'] = "Nieaktywne";
$locale['status3'] = "Zawieszone";
$locale['status4'] = "Zablokowane zp. bezpieczeñstwa";
$locale['status5'] = "Wy³±czone zp. bezczynno¶ci";
$locale['status6'] = "Ukryte";
$locale['status7'] = "Wy³±czone";
$locale['status8'] = "Bezczynne";
// Forum Moderator Level(s)
$locale['userf1'] = "Moderator";
// Navigation
$locale['global_001'] = "Nawigacja";
$locale['global_002'] = "Brak linków\n";
// Users Online
$locale['global_010'] = "Aktualnie online";
$locale['global_011'] = "Go¶ci online";
$locale['global_012'] = "U¿ytkowników online";
$locale['global_013'] = "Brak u¿ytkowników online";
$locale['global_014'] = "£±cznie u¿ytkowników";
$locale['global_015'] = "Nieaktywnych u¿ytkowników";
$locale['global_016'] = "Najnowszy u¿ytkownik";
// Forum Side panel
$locale['global_020'] = "Ostatnio na forum";
$locale['global_021'] = "Najnowsze tematy";
$locale['global_022'] = "Najciekawsze tematy";
$locale['global_023'] = "Brak tematów na forum";
// Comments Side panel
$locale['global_025'] = "Ostatnie komentarze";
$locale['global_026'] = "Brak komentarzy";
// Articles Side panel
$locale['global_030'] = "Ostatnie artyku³y";
$locale['global_031'] = "Brak artyku³ów";
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
$locale['global_045'] = "Wy¶wietleñ";
$locale['global_046'] = "Odpowiedzi";
$locale['global_047'] = "Ostatni post";
$locale['global_048'] = "Forum";
$locale['global_049'] = "Napisane przez";
$locale['global_050'] = "Autor";
$locale['global_051'] = "Ankieta";
$locale['global_052'] = "Przeniesiony";
$locale['global_053'] = "Brak rozpoczêtych przez Ciebie tematów.";
$locale['global_054'] = "Brak napisanych przez Ciebie postów.";
$locale['global_055'] = "Nowych postów od Twojej ostatniej wizyty: %u w %u tematach";
$locale['global_056'] = "Moje obserwowane tematy";
$locale['global_057'] = "Opcje";
$locale['global_058'] = "Przestañ <br /> obserwowaæ";
$locale['global_059'] = "Brak obserwowanych przez Ciebie tematów.";
$locale['global_060'] = "Przestaæ obserwowaæ temat?";
// News & Articles
$locale['global_070'] = "Napisane przez ";
$locale['global_071'] = "dnia ";
$locale['global_072'] = "Czytaj wiêcej";
$locale['global_073'] = " komentarzy";
$locale['global_073b'] = " komentarz";
$locale['global_074'] = " czytañ";
$locale['global_075'] = "Drukuj";
$locale['global_076'] = "Edytuj";
$locale['global_077'] = "News";
$locale['global_078'] = "Brak opublikowanych newsów.";
$locale['global_079'] = "Kategoria: ";
$locale['global_080'] = "Bez kategorii";
// Page Navigation
$locale['global_090'] = "Poprzednia";
$locale['global_091'] = "Nastêpna";
$locale['global_092'] = "Strona ";
$locale['global_093'] = " z&nbsp;";
// Guest User Menu
$locale['global_100'] = "Logowanie";
$locale['global_101'] = "Nazwa u¿ytkownika";
$locale['global_102'] = "Has³o";
$locale['global_103'] = "Zapamiêtaj mnie";
$locale['global_104'] = "Zaloguj";
$locale['global_105'] = "Nie masz jeszcze konta? <br /><a href='".BASEDIR."register.php' class='side'>Zarejestruj siê</a>";
$locale['global_106'] = "Nie mo¿esz siê zalogowaæ?<br /> Popro¶ o&nbsp;<a href='".BASEDIR."lostpassword.php' class='side'>nowe has³o</a>";
$locale['global_107'] = "Rejestracja";
$locale['global_108'] = "Zapomniane has³o";
// Member User Menu
$locale['global_120'] = "Edytuj profil";
$locale['global_121'] = "Prywatne wiadomo¶ci";
$locale['global_122'] = "Lista u¿ytkowników";
$locale['global_123'] = "Panel administratora";
$locale['global_124'] = "Wyloguj";
$locale['global_125'] = "%u";
$locale['global_126'] = " nieprzeczytana wiadomo¶æ";
$locale['global_127'] = " nieprzeczytane wiadomo¶ci";
$locale['global_128'] = " nades³any materia³";
$locale['global_129'] = " nades³ane materia³y";
// Poll
$locale['global_130'] = "Ankieta";
$locale['global_131'] = "Zag³osuj";
$locale['global_132'] = "Musisz zalogowaæ siê, aby móc zag³osowaæ.";
$locale['global_133'] = "g³os";
$locale['global_134'] = "g³osów";
$locale['global_135'] = "Ogó³em g³osów: ";
$locale['global_136'] = "Rozpoczêto: ";
$locale['global_137'] = "Zakoñczono: ";
$locale['global_138'] = "Archiwum ankiet";
$locale['global_139'] = "Wybierz ankietê z&nbsp;listy:";
$locale['global_140'] = "Zobacz wyniki";
$locale['global_141'] = "Wyniki ankiety";
$locale['global_142'] = "Brak przeprowadzanych ankiet.";

//Captcha
$locale['global_150'] = "Kod potwierdzaj±cy:";
$locale['global_151'] = "Wpisz kod potwierdzaj±cy:";

// Footer Counter
$locale['global_170'] = "unikalna wizyta";
$locale['global_171'] = "unikalne wizyty";
$locale['global_172'] = "Wygenerowano w&nbsp;sekund: %s";
$locale['global_173'] = "zapytañ MySQL";
// Admin Navigation
$locale['global_180'] = "Powróæ do panelu administracyjnego";
$locale['global_181'] = "Powróæ do strony g³ównej";
$locale['global_182'] = "<strong>Uwaga:</strong> Podane has³o administratora jest nieprawid³owe lub puste.";
// Miscellaneous
$locale['global_190'] = "Aktywowano tryb serwisowy na serwerze.";
$locale['global_191'] = "Twoje IP jest zablokowane.";
$locale['global_192'] = "Minê³a wa¿no¶æ ciasteczka (cookie). Zaloguj siê ponownie.";
$locale['global_193'] = "Nie mo¿na by³o ustawiæ ciasteczka (cookie). Upewnij siê, ¿e masz w³±czon± obs³ugê ciasteczek w przegl±darce, aby móc zalogowaæ siê.";
$locale['global_194'] = "Konto zosta³o zablokowane.";
$locale['global_195'] = "Konto nie jest aktywne.";
$locale['global_196'] = "Nieprawid³owa nazwa u¿ytkownika lub has³o.";
$locale['global_197'] = "Proszê czekaæ na przekierowanie...<br /><br />
[ <a href='index.php'>Nie chcê czekaæ</a> ]";
$locale['global_198'] = "<strong>Ostrze¿enie:</strong> Wykryto plik setup.php. Proszê, usuñ go natychmiast.";
$locale['global_199'] = "<strong>Ostrze¿enie:</strong> Nie ustawiono has³a administratora, <a href='".BASEDIR."edit_profile.php'>ustaw je</a> natychmiast.";
//Titles
$locale['global_200'] = " - ";
$locale['global_201'] = ": ";
$locale['global_202'] = $locale['global_200']."Szukaj";
$locale['global_203'] = $locale['global_200']."FAQ";
$locale['global_204'] = $locale['global_200']."Forum";
//Themes
$locale['global_210'] = "Przejd¼ do tre¶ci";
// No themes found
$locale['global_300'] = "nie znaleziono skórki.";
$locale['global_301'] = "Nie mo¿na wy¶wietliæ strony. Jest to spowodowane brakiem plików odpowiadaj±cych za wygl±d strony. Je¶li jeste¶ administratorem strony, uruchom swojego klienta FTP i&nbsp;wgraj do katalogu <em>/themes</em> jak±kolwiek skórkê zaprojektowan± dla <em>PHP-Fusion v7</em>. Nastêpnie sprawd¼ w&nbsp;<em>G³ównych ustawieniach</em> w&nbsp;<em>Panelu administratora</em> oraz upewnij siê, ¿e wybrana tam skórka jest w&nbsp;Twoim katalogu <em>/themes</em>. Je¶li tak nie jest, sprawd¼, czy wgrana skórka ma tak± sam± nazwê (wliczaj±c w&nbsp;to wielko¶æ znaków, wa¿ne na serwerach uniksowych) jak ta wybrana w&nbsp;<em>G³ównych ustawieniach</em>.<br /><br />Je¶li jeste¶ u¿ytkownikiem tej strony, skontaktuj siê z&nbsp;administracj± strony poprzez wys³anie e-maila na adres ".hide_email($settings['siteemail'])." oraz poinformuj o&nbsp;istniej±cym problemie.";
$locale['global_302'] = "Wybrana przez Ciebie skórka nie istnieje lub jest niekompletna!";
// JavaScript Not Enabled
$locale['global_303'] = "<p>O&nbsp;nie! Ta strona potrzebuje w³±czonej obs³ugi jêzyka <strong>JavaScript</strong>!</p><p>Twoja przegl±darka nie obs³uguje tego jêzyka lub ma wy³±czon± jego obs³ugê. <strong>W³±cz wykonywanie kodu JavaScript</strong> w swojej przegl±darce internetowej, aby skorzystaæ ze wszystkich funkcji strony<br /> lub <strong>skorzystaj</strong> z&nbsp;programu obs³uguj±cego jêzyk JavaScript, np. <a href='http://firefox.com' rel='nofollow' title='Mozilla Firefox'>Mozilla Firefox</a>, <a href='http://apple.com/safari/' rel='nofollow' title='Apple Safari'>Apple Safari</a>, <a href='http://opera.com' rel='nofollow' title='Opera Web Browser'>Opera</a>, <a href='http://www.google.com/chrome' rel='nofollow' title='Google Chrome'>Google Chrome</a> lub <a href='http://www.microsoft.com/windows/internet-explorer/' rel='nofollow' title='Windows Internet Explorer'>Windows Internet Explorer</a> w&nbsp;wersji wy¿szej ni¿ 6.</p>";
// User Management
// Member status
$locale['global_400'] = "zawieszone";
$locale['global_401'] = "zablokowane";
$locale['global_402'] = "wy³±czone";
$locale['global_403'] = "konto wy³±czone";
$locale['global_404'] = "konto ukryte";
$locale['global_405'] = "ukryte";
$locale['global_406'] = "Konto zosta³o zbanowane z&nbsp;nastêpuj±cych powodów:";
$locale['global_407'] = "Konto jest zawieszone do ";
$locale['global_408'] = " z&nbsp;nastêpuj±cych powodów:";
$locale['global_409'] = "Konto zosta³o zablokowane ze wzglêdów bezpieczeñstwa.";
$locale['global_410'] = "Powód: ";
$locale['global_411'] = "Konto zosta³o zablokowane zp. bezczynno¶ci";
$locale['global_412'] = "Konto zosta³o anonimizowane, prawdopodobnie z&nbsp;powodu bezczynno¶ci";
// Banning due to flooding
$locale['global_440'] = "Automatyczne zbanowanie przez blokadê antyfloodow±";
$locale['global_441'] = "Twoje konto na ".$settings['sitename']." zosta³o zbanowane.";
$locale['global_442'] = "Witaj [USER_NAME]!\n
Z Twojego konta na ".$settings['sitename']." wys³ano zbyt wiele wiadomo¶ci w krótkim czasie z nastêpuj±cego IP: ".USER_IP.", w zwi±zku z czym zosta³o zablokowane. Powy¿sze dzia³anie zosta³o podjête w celu ochrony strony przed botami dodaj±cymi wiadomo¶ci w krótkim odstêpie czasu.\n
Skontaktuj siê z administracj± strony wysy³aj±c e-mail na adres ".$settings['siteemail'].", ¿eby odblokowaæ konto lub wyja¶niæ zaistnia³± sytuacjê.\n
Z pozdrowieniami\n\n
".$settings['siteusername']."\n\n
------\n
Niniejsza wiadomo¶æ zosta³a wys³ana automatycznie. Nie odpowiadaj na ni±.";
// Lifting of suspension
$locale['global_450'] = "Automatyczne zdjêcie zawieszenia konta.";
$locale['global_451'] = "Zdjêcie zawieszenia konta na ".$settings['sitename'];
$locale['global_452'] = "Witaj USER_NAME!\n
Zawieszenie Twojego konta na ".$settings['siteurl']." zosta³o zdjête. Zaloguj siê korzystaj±c z poni¿szych danych:\n
Nazwa u¿ytkownika: USER_NAME
Has³o: ukryte ze wzglêdów bezpieczeñstwa\n
Je¶li nie pamiêtasz has³a, zresetuj je korzystaj±c z poni¿szego linka: LOST_PASSWORD\nZ pozdrowieniami\n\n
".$settings['siteusername']."\n\n
------\n
Niniejsza wiadomo¶æ zosta³a wys³ana automatycznie. Nie odpowiadaj na ni±.";
$locale['global_453'] = "Witaj USER_NAME!\n
Zdjêto zawieszenie Twojego konta na ".$settings['siteurl'].".\n
Z pozdrowieniami\n\n
".$settings['siteusername']."\n\n
------\n
Niniejsza wiadomo¶æ zosta³a wys³ana automatycznie. Nie odpowiadaj na ni±.";
$locale['global_454'] = "Reaktywowano konto na ".$settings['sitename'];
$locale['global_455'] = "Witaj USER_NAME!\n
Twoja ostatnia wizyta na ".$settings['siteurl']." reaktywowa³a Twoje konto, w zwi±zku z czym, przesta³o ono byæ uznawane za bezczynne.\n
Z pozdrowieniami\n\n
".$settings['siteusername']."\n\n
------\n
Niniejsza wiadomo¶æ zosta³a wys³ana automatycznie. Nie odpowiadaj na ni±.";
// Function parsebytesize()
$locale['global_460'] = "Plik pusty";
$locale['global_461'] = "Bajtów";
$locale['global_462'] = "kB";
$locale['global_463'] = "MB";
$locale['global_464'] = "GB";
$locale['global_465'] = "TB";
//Safe Redirect
$locale['global_500'] = "Trwa przekierowanie na adres %s, proszê czekaæ. Naci¶nij, je¶li Ciê nie przekierowa³o.";

// Captcha Locales
$locale['global_600'] = "Kod potwierdzaj±cy";
$locale['recaptcha'] = "pl";
$locale['recaptcha_l10n'] = "visual_challenge:'Graficzny kod potwierdzaj±cy', ";
$locale['recaptcha_l10n'] .= "audio_challenge:'D¼wiêkowy kod potwierdzaj±cy', ";
$locale['recaptcha_l10n'] .= "refresh_btn:'Nowy test', ";
$locale['recaptcha_l10n'] .= "instructions_visual:'Wpisz dwa s³owa:', ";
$locale['recaptcha_l10n'] .= "instructions_context:'Wpisz s³owa w polu:', ";
$locale['recaptcha_l10n'] .= "instructions_audio:'Wpisz co s³yszysz:', ";
$locale['recaptcha_l10n'] .= "help_btn:'Pomoc (po angielsku)', ";
$locale['recaptcha_l10n'] .= "play_again:'Odtwórz ponownie', ";
$locale['recaptcha_l10n'] .= "cant_hear_this:'Pobierz jako MP3', ";
$locale['recaptcha_l10n'] .= "incorrect_try_again:'Nieprawid³owy kod potwierdzaj±cy. Spróbuj ponownie.'";

//Miscellaneous
$locale['global_900'] = "Nie mo¿na by³o przekonwertowaæ z HEX na DEC";

/* My own patch, if you don't want it - comment lines below.
 * To moja w³asna ³atka, je¶li nie chcesz z niej korzystaæ - zakomentuj poni¿sze linie
 * Tomasz "jantom" Jankowski, Date: 21 04 2011 00:30 */
require_once INCLUDES."output_handling_include.php";
$locale['global_073c'] = " komentarze";
replace_in_output("2".$locale['global_073'],"2 ".$locale['global_073c']);
replace_in_output("3".$locale['global_073'],"3 ".$locale['global_073c']);
replace_in_output("4".$locale['global_073'],"4 ".$locale['global_073c']);
?>
