<?php
// Official SVN Trunk Rev: 1960
$locale['r100'] = "Oceny";
$locale['r101'] = "Brak ocen. Mo¿e czas dodaæ swoj±?";
$locale['r102'] = "Usuñ ocenê";
$locale['r103'] = "Dodaj ocenê";
$locale['r104'] = "Tylko zarejestrowani u¿ytkownicy mog± oceniaæ zawarto¶æ strony<br /><a href='".BASEDIR."login.php'>Zaloguj siê</a> ".($settings['enable_registration'] ? " lub <a href='".BASEDIR."register.php'>zarejestruj</a>" : "").", ¿eby móc zag³osowaæ.";
$locale['r105'] = "Ocenione przez Ciebie na <b>%s</b> dnia %s";
$locale['r106'] = "Oceñ dany materia³";
$locale['r107'] = "- nie wybrano oceny -";
$locale['r108'] = "0 g³osów";
$locale['r109'] = "g³os";
$locale['r110'] = "g³osów";
// Rating Options
$locale['r120'] = "¦wietne!";
$locale['r121'] = "Bardzo dobre";
$locale['r122'] = "Dobre";
$locale['r123'] = "¦rednie";
$locale['r124'] = "S³abe";

/* My own patch, if you don't want it - comment lines below.
 * To moja w³asna ³atka, je¶li nie chcesz z niej korzystaæ - zakomentuj poni¿sze linie
 * Tomasz "jantom" Jankowski, Date: 11 04 2011 16:10 */
require_once INCLUDES."output_handling_include.php";
$locale['r110a'] = "g³osy";
replace_in_output("2 ".$locale['r110'],"2 ".$locale['r110a']);
replace_in_output("3 ".$locale['r110'],"3 ".$locale['r110a']);
replace_in_output("4 ".$locale['r110'],"4 ".$locale['r110a']);
?>
