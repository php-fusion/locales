<?php
// Official SVN Trunk Rev: 1853
// Panel Management
$locale['400'] = "Zarządzanie panelami";
$locale['401'] = "Nazwa";
$locale['402'] = "Miejsce";
$locale['403'] = "Kolejność";
$locale['404'] = "Typ";
$locale['405'] = "Dostęp";
$locale['406'] = "Opcje";
// Panel Settings
$locale['420'] = "Lewa strona";
$locale['421'] = "Na górze";
$locale['422'] = "Prawa strona";
$locale['423'] = "Plik";
$locale['424'] = "Kod PHP";
$locale['425'] = "Na dole";
// Panel Options
$locale['430'] = "Przesuń na lewą stronę";
$locale['431'] = "Przesuń na prawą stronę";
$locale['432'] = "Przenieś wyżej";
$locale['433'] = "Przenieś niżej";
$locale['434'] = "Edytuj";
$locale['435'] = "Włącz";
$locale['436'] = "Wyłącz";
$locale['437'] = "Usuń";
$locale['438'] = "Dodaj nowy";
$locale['439'] = "Odśwież kolejność";
$locale['440'] = "Usunąć panel?";
$locale['441'] = "Przesuń na lewą stronę";
$locale['442'] = "Przesuń na prawą stronę";
$locale['443'] = "Przenieś wyżej";
$locale['444'] = "Przenieś niżej";
$locale['445'] = "Przesuń do paneli na górze";
$locale['446'] = "Przesuń do paneli na dole";
// Add/Edit Panel Form
$locale['450'] = "Edytuj panel";
$locale['451'] = "Dodaj panel";
$locale['452'] = "Nazwa:";
$locale['453'] = "Nazwa pliku panelu:";
$locale['454'] = "Jeśli wybierzesz, zawartość panelu będzie zignorowana.";
$locale['455'] = "Zawartość panelu:";
$locale['456'] = "Hasło administratora:";
$locale['457'] = "Umiejscowienie:";
$locale['458'] = "Dostępny dla:";
$locale['459'] = "Wyświetl panel na wszystkich stronach";
$locale['460'] = "Podgląd";
$locale['461'] = "Zapisz";
$locale['462'] = "Dodatkowe ograniczenia:";
$locale['463'] = "Przykłady:";
$locale['464'] = "Ukrywaj na tych stronach";
$locale['465'] = "Wyświetlaj na tych stronach";
// Update/Add new Panel Errors
$locale['470'] = "Nie podano nazwy panelu.";
$locale['471'] = "Już istnieje panel o&nbsp;takiej nazwie.";
$locale['472'] = "Nie podano zawartości panelu.";
$locale['473'] = "Nie wybrano pliku panelu.";
$locale['474'] = "Podano nieprawidłowe hasło administratora.";
$locale['475'] = "Musisz zaznaczyć \"Wyświetl panel na wszystkich stronach\", gdy ograniczasz wyświetlanie górnych lub dolnych paneli.";
// Update/Add new Panel Success/Fail
$locale['480'] = "Aktualizacja panelu";
$locale['481'] = "Nie można było zaktualizować panelu.";
$locale['482'] = "Zaktualizowano panel.";
$locale['483'] = "Dodawanie nowego panelu";
$locale['484'] = "Nie można było dodać nowego panelu.";
$locale['485'] = "Dodano nowy panel.";
$locale['486'] = "Powróć do zarządzania panelami";
$locale['487'] = "Powróć do początku panelu administratora";
$locale['488'] = "Odświeżono kolejność.";

/* My own patch, if you don't want it - comment lines below. It makes table with panels wider
 * To moja własna łatka, jeśli nie chcesz z niej korzystać - zakomentuj poniższe linie
 * Tomasz "jantom" Jankowski, Date: 03 04 2011 23:30 */
require_once INCLUDES."output_handling_include.php"; //Without it, after moving a panel, you can see error - Fatal error: Call to undefined function replace_in_output
replace_in_output("<div style=\'width:600px;\' class=\'panels tbl-border center floatfix\'>","<div style=\'width:80%;min-width:650px;\' class=\'panels tbl-border center floatfix\'>","si");
?>
