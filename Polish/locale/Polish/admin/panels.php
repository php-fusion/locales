<?php
// Official SVN Trunk Rev: 1853
// Panel Management
$locale['400'] = "Zarz±dzanie panelami";
$locale['401'] = "Nazwa";
$locale['402'] = "Miejsce";
$locale['403'] = "Kolejno¶æ";
$locale['404'] = "Typ";
$locale['405'] = "Dostêp";
$locale['406'] = "Opcje";
// Panel Settings
$locale['420'] = "Lewa strona";
$locale['421'] = "Na górze";
$locale['422'] = "Prawa strona";
$locale['423'] = "Plik";
$locale['424'] = "Kod PHP";
$locale['425'] = "Na dole";
// Panel Options
$locale['430'] = "Przesuñ na lew± stronê";
$locale['431'] = "Przesuñ na praw± stronê";
$locale['432'] = "Przenie¶ wy¿ej";
$locale['433'] = "Przenie¶ ni¿ej";
$locale['434'] = "Edytuj";
$locale['435'] = "W³±cz";
$locale['436'] = "Wy³±cz";
$locale['437'] = "Usuñ";
$locale['438'] = "Dodaj nowy";
$locale['439'] = "Od¶wie¿ kolejno¶æ";
$locale['440'] = "Usun±æ panel?";
$locale['441'] = "Przesuñ na lew± stronê";
$locale['442'] = "Przesuñ na praw± stronê";
$locale['443'] = "Przenie¶ wy¿ej";
$locale['444'] = "Przenie¶ ni¿ej";
$locale['445'] = "Przesuñ do paneli na górze";
$locale['446'] = "Przesuñ do paneli na dole";
// Add/Edit Panel Form
$locale['450'] = "Edytuj panel";
$locale['451'] = "Dodaj panel";
$locale['452'] = "Nazwa:";
$locale['453'] = "Nazwa pliku panelu:";
$locale['454'] = "Je¶li wybierzesz, zawarto¶æ panelu bêdzie zignorowana.";
$locale['455'] = "Zawarto¶æ panelu:";
$locale['456'] = "Has³o administratora:";
$locale['457'] = "Umiejscowienie:";
$locale['458'] = "Dostêpny dla:";
$locale['459'] = "Wy¶wietl panel na wszystkich stronach";
$locale['460'] = "Podgl±d";
$locale['461'] = "Zapisz";
$locale['462'] = "Dodatkowe ograniczenia:";
$locale['463'] = "Przyk³ady:";
$locale['464'] = "Ukrywaj na tych stronach";
$locale['465'] = "Wy¶wietlaj na tych stronach";
// Update/Add new Panel Errors
$locale['470'] = "Nie podano nazwy panelu.";
$locale['471'] = "Ju¿ istnieje panel o&nbsp;takiej nazwie.";
$locale['472'] = "Nie podano zawarto¶ci panelu.";
$locale['473'] = "Nie wybrano pliku panelu.";
$locale['474'] = "Podano nieprawid³owe has³o administratora.";
$locale['475'] = "Musisz zaznaczyæ \"Wy¶wietl panel na wszystkich stronach\", gdy ograniczasz wy¶wietlanie górnych lub dolnych paneli.";
// Update/Add new Panel Success/Fail
$locale['480'] = "Aktualizacja panelu";
$locale['481'] = "Nie mo¿na by³o zaktualizowaæ panelu.";
$locale['482'] = "Zaktualizowano panel.";
$locale['483'] = "Dodawanie nowego panelu";
$locale['484'] = "Nie mo¿na by³o dodaæ nowego panelu.";
$locale['485'] = "Dodano nowy panel.";
$locale['486'] = "Powróæ do zarz±dzania panelami";
$locale['487'] = "Powróæ do pocz±tku panelu administratora";
$locale['488'] = "Od&#347;wie&#380;ono kolejno&#347;&#263;";

/* My own patch, if you don't want it - comment lines below. It makes table with panels wider
 * To moja w³asna ³atka, je¶li nie chcesz z niej korzystaæ - zakomentuj poni¿sze linie
 * Tomasz "jantom" Jankowski, Date: 03 04 2011 23:30 */
require_once INCLUDES."output_handling_include.php"; //Without it, after moving a panel, you can see error - Fatal error: Call to undefined function replace_in_output
replace_in_output("<div style=\'width:600px;\' class=\'panels tbl-border center floatfix\'>","<div style=\'width:80%;min-width:650px;\' class=\'panels tbl-border center floatfix\'>","si");
?>
