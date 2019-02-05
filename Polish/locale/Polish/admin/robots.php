<?php
// Official SVN Trunk Rev: 2013
// Titles
$locale['400'] = "robots.txt";
// Messages
$locale['410'] = "Na pewno? Plik robots.txt zostanie przywrócony do pocz±tkowych ustawieñ.";
$locale['411'] = "Brak pliku robots.txt. Utwórz go w g³ównym katalogu strony i spróbuj ponownie.";
$locale['412'] = "Zaktualizowano plik robots.txt.";
$locale['413'] = "Wyst±pi³y nastêpuj±ce b³êdy:";
$locale['414'] = "plik robots.txt jest tylko do odczytu.";
$locale['415'] = "nie mo¿na by³o zapisaæ pliku robots.txt.";
// Edit form
$locale['420'] = "Edytuj plik robots.txt";
$locale['421'] = "Wiêcej informacji na temat pliku robots.txt";
$locale['422'] = "Zapisz";
$locale['423'] = "Przywróæ domy¶lne ustawienia";

/* My own patch, if you don't want it - comment lines below.
 * To moja w³asna ³atka, je¶li nie chcesz z niej korzystaæ - zakomentuj poni¿sze linie
 * Tomasz "jantom" Jankowski, Date: 11 04 2011 10:30 */
require_once INCLUDES."output_handling_include.php";
$locale['421'] = "Wiêcej informacji na temat pliku robots.txt po ";
$locale['421a']= "<a href='http://www.robotstxt.org/' target='_blank'>angielsku</a> lub po <a href='http://pl.wikipedia.org/wiki/Robots.txt' target='_blank'>polsku</a>.";
replace_in_output("<a href=\'http://www.robotstxt.org/\' target=\'_blank\'>".$locale['421']."</a>",$locale['421'].addslashes($locale['421a']));
?>
