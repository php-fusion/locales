<?php
// Official SVN Trunk Rev: 2364
/*English Language Fileset
 Produced by Nick Jones (Digitanium)
 Email: digitanium@php-fusion.co.uk
 Web: http://www.php-fusion.co.uk

 Polish (UTF-8) Language Fileset for PHP-Fusion v7.02.03, based at translation for PHP-Fusion v7.01.xx
 Translations from english, modifications and tests:
 PHP-Fusion po Polsku (PHP-Fusion in Polish)
 https://launchpad.net/pf-pl
 Main translator: Tomasz Jankowski (jantom)
 Translator and tester: Michał Pospieszyński (sony)
 This program is released as free software under the
 Affero GPL license.*/

// Locale Settings
setlocale(LC_TIME, "pl", "pl_PL.UTF-8", "polish"); // Linux Server (Windows may differ)
$locale['charset'] = "utf-8";
$locale['xml_lang'] = "pl";
$locale['tinymce'] = "pl";
$locale['phpmailer'] = "pl";

// Full & Short Months
$locale['months'] = "&nbsp|styczeń|luty|marzec|kwiecień|maj|czerwiec|lipiec|sierpień|wrzesień|październik|listopad|grudzień";
$locale['shortmonths'] = "&nbsp|st.|lt.|mar.|kwi.|maj|czer.|lip.|sier.|wrz.|paź.|lis.|gru.";

// Standard User Levels
$locale['user0'] = "Gość";
$locale['user1'] = "Użytkownik";
$locale['user2'] = "Administrator";
$locale['user3'] = "Główny administrator";
$locale['user_na'] = "Nd.";
$locale['user_anonymous'] = "Konto ukryte";
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
$locale['global_002'] = "Brak linków\n";
// Users Online
$locale['global_010'] = "Aktualnie online";
$locale['global_011'] = "Gości online";
$locale['global_012'] = "Użytkowników online";
$locale['global_013'] = "Brak użytkowników online";
$locale['global_014'] = "Łącznie użytkowników";
$locale['global_015'] = "Nieaktywnych użytkowników";
$locale['global_016'] = "Najnowszy użytkownik";
// Forum Side panel
$locale['global_020'] = "Ostatnio na forum";
$locale['global_021'] = "Najnowsze tematy";
$locale['global_022'] = "Najciekawsze tematy";
$locale['global_023'] = "Brak tematów na forum";
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
$locale['global_071'] = "dnia ";
$locale['global_072'] = "Czytaj więcej";
$locale['global_073'] = " komentarzy";
$locale['global_073b'] = " komentarz";
$locale['global_074'] = " czytań";
$locale['global_075'] = "Drukuj";
$locale['global_076'] = "Edytuj";
$locale['global_077'] = "News";
$locale['global_078'] = "Brak opublikowanych newsów.";
$locale['global_079'] = "Kategoria: ";
$locale['global_080'] = "Bez kategorii";
// Page Navigation
$locale['global_090'] = "Poprzednia";
$locale['global_091'] = "Następna";
$locale['global_092'] = "Strona ";
$locale['global_093'] = " z&nbsp;";
// Guest User Menu
$locale['global_100'] = "Logowanie";
$locale['global_101'] = "Nazwa użytkownika";
$locale['global_102'] = "Hasło";
$locale['global_103'] = "Zapamiętaj mnie";
$locale['global_104'] = "Zaloguj";
$locale['global_105'] = "Nie masz jeszcze konta? <br /><a href='".BASEDIR."register.php' class='side'>Zarejestruj się</a>";
$locale['global_106'] = "Nie możesz się zalogować?<br /> Poproś o&nbsp;<a href='".BASEDIR."lostpassword.php' class='side'>nowe hasło</a>";
$locale['global_107'] = "Rejestracja";
$locale['global_108'] = "Zapomniane hasło";
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

//Captcha
$locale['global_150'] = "Kod potwierdzający:";
$locale['global_151'] = "Wpisz kod potwierdzający:";

// Footer Counter
$locale['global_170'] = "unikalna wizyta";
$locale['global_171'] = "unikalne wizyty";
$locale['global_172'] = "Wygenerowano w&nbsp;sekund: %s";
$locale['global_173'] = "zapytań MySQL";
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
$locale['global_202'] = $locale['global_200']."Szukaj";
$locale['global_203'] = $locale['global_200']."FAQ";
$locale['global_204'] = $locale['global_200']."Forum";
//Themes
$locale['global_210'] = "Przejdź do treści";
// No themes found
$locale['global_300'] = "nie znaleziono skórki.";
$locale['global_301'] = "Nie można wyświetlić strony. Jest to spowodowane brakiem plików odpowiadających za wygląd strony. Jeśli jesteś administratorem strony, uruchom swojego klienta FTP i&nbsp;wgraj do katalogu <em>/themes</em> jakąkolwiek skórkę zaprojektowaną dla <em>PHP-Fusion v7</em>. Następnie sprawdź w&nbsp;<em>Głównych ustawieniach</em> w&nbsp;<em>Panelu administratora</em> oraz upewnij się, że wybrana tam skórka jest w&nbsp;Twoim katalogu <em>/themes</em>. Jeśli tak nie jest, sprawdź, czy wgrana skórka ma taką samą nazwę (wliczając w&nbsp;to wielkość znaków, ważne na serwerach uniksowych) jak ta wybrana w&nbsp;<em>Głównych ustawieniach</em>.<br /><br />Jeśli jesteś użytkownikiem tej strony, skontaktuj się z&nbsp;administracją strony poprzez wysłanie e-maila na adres ".hide_email($settings['siteemail'])." oraz poinformuj o&nbsp;istniejącym problemie.";
$locale['global_302'] = "Wybrana przez Ciebie skórka nie istnieje lub jest niekompletna!";
// JavaScript Not Enabled
$locale['global_303'] = "<p>O&nbsp;nie! Ta strona potrzebuje włączonej obsługi języka <strong>JavaScript</strong>!</p><p>Twoja przeglądarka nie obsługuje tego języka lub ma wyłączoną jego obsługę. <strong>Włącz wykonywanie kodu JavaScript</strong> w swojej przeglądarce internetowej, aby skorzystać ze wszystkich funkcji strony<br /> lub <strong>skorzystaj</strong> z&nbsp;programu obsługującego język JavaScript, np. <a href='http://firefox.com' rel='nofollow' title='Mozilla Firefox'>Mozilla Firefox</a>, <a href='http://apple.com/safari/' rel='nofollow' title='Apple Safari'>Apple Safari</a>, <a href='http://opera.com' rel='nofollow' title='Opera Web Browser'>Opera</a>, <a href='http://www.google.com/chrome' rel='nofollow' title='Google Chrome'>Google Chrome</a> lub <a href='http://www.microsoft.com/windows/internet-explorer/' rel='nofollow' title='Windows Internet Explorer'>Windows Internet Explorer</a> w&nbsp;wersji wyższej niż 6.</p>";
// User Management
// Member status
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
// Banning due to flooding
$locale['global_440'] = "Automatyczne zbanowanie przez blokadę antyfloodową";
$locale['global_441'] = "Twoje konto na ".$settings['sitename']." zostało zbanowane.";
$locale['global_442'] = "Witaj [USER_NAME]!\n
Z Twojego konta na ".$settings['sitename']." wysłano zbyt wiele wiadomości w krótkim czasie z następującego IP: ".USER_IP.", w związku z czym zostało zablokowane. Powyższe działanie zostało podjęte w celu ochrony strony przed botami dodającymi wiadomości w krótkim odstępie czasu.\n
Skontaktuj się z administracją strony wysyłając e-mail na adres ".$settings['siteemail'].", żeby odblokować konto lub wyjaśnić zaistniałą sytuację.\n
Z pozdrowieniami\n\n
".$settings['siteusername']."\n\n
------\n
Niniejsza wiadomość została wysłana automatycznie. Nie odpowiadaj na nią.";
// Lifting of suspension
$locale['global_450'] = "Automatyczne zdjęcie zawieszenia konta.";
$locale['global_451'] = "Zdjęcie zawieszenia konta na ".$settings['sitename'];
$locale['global_452'] = "Witaj USER_NAME!\n
Zawieszenie Twojego konta na ".$settings['siteurl']." zostało zdjęte. Zaloguj się korzystając z poniższych danych:\n
Nazwa użytkownika: USER_NAME
Hasło: ukryte ze względów bezpieczeństwa\n
Jeśli nie pamiętasz hasła, zresetuj je korzystając z poniższego linka: LOST_PASSWORD\nZ pozdrowieniami\n\n
".$settings['siteusername']."\n\n
------\n
Niniejsza wiadomość została wysłana automatycznie. Nie odpowiadaj na nią.";
$locale['global_453'] = "Witaj USER_NAME!\n
Zdjęto zawieszenie Twojego konta na ".$settings['siteurl'].".\n
Z pozdrowieniami\n\n
".$settings['siteusername']."\n\n
------\n
Niniejsza wiadomość została wysłana automatycznie. Nie odpowiadaj na nią.";
$locale['global_454'] = "Reaktywowano konto na ".$settings['sitename'];
$locale['global_455'] = "Witaj USER_NAME!\n
Twoja ostatnia wizyta na ".$settings['siteurl']." reaktywowała Twoje konto, w związku z czym, przestało ono być uznawane za bezczynne.\n
Z pozdrowieniami\n\n
".$settings['siteusername']."\n\n
------\n
Niniejsza wiadomość została wysłana automatycznie. Nie odpowiadaj na nią.";
// Function parsebytesize()
$locale['global_460'] = "Plik pusty";
$locale['global_461'] = "Bajtów";
$locale['global_462'] = "kB";
$locale['global_463'] = "MB";
$locale['global_464'] = "GB";
$locale['global_465'] = "TB";
//Safe Redirect
$locale['global_500'] = "Trwa przekierowanie na adres %s, proszę czekać. Naciśnij, jeśli Cię nie przekierowało.";

// Captcha Locales
$locale['global_600'] = "Kod potwierdzający";
$locale['recaptcha'] = "pl";
$locale['recaptcha_l10n'] = "visual_challenge:'Graficzny kod potwierdzający', ";
$locale['recaptcha_l10n'] .= "audio_challenge:'Dźwiękowy kod potwierdzający', ";
$locale['recaptcha_l10n'] .= "refresh_btn:'Nowy test', ";
$locale['recaptcha_l10n'] .= "instructions_visual:'Wpisz dwa słowa:', ";
$locale['recaptcha_l10n'] .= "instructions_context:'Wpisz słowa w polu:', ";
$locale['recaptcha_l10n'] .= "instructions_audio:'Wpisz co słyszysz:', ";
$locale['recaptcha_l10n'] .= "help_btn:'Pomoc (po angielsku)', ";
$locale['recaptcha_l10n'] .= "play_again:'Odtwórz ponownie', ";
$locale['recaptcha_l10n'] .= "cant_hear_this:'Pobierz jako MP3', ";
$locale['recaptcha_l10n'] .= "incorrect_try_again:'Nieprawidłowy kod potwierdzający. Spróbuj ponownie.'";

//Miscellaneous
$locale['global_900'] = "Nie można było przekonwertować z HEX na DEC";

/* My own patch, if you don't want it - comment lines below.
 * To moja własna łatka, jeśli nie chcesz z niej korzystać - zakomentuj poniższe linie
 * Tomasz "jantom" Jankowski, Date: 21 04 2011 00:30 */
require_once INCLUDES."output_handling_include.php";
$locale['global_073c'] = " komentarze";
replace_in_output("2".$locale['global_073'],"2 ".$locale['global_073c']);
replace_in_output("3".$locale['global_073'],"3 ".$locale['global_073c']);
replace_in_output("4".$locale['global_073'],"4 ".$locale['global_073c']);
?>
