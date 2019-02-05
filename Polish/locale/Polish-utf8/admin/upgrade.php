<?php
// Official SVN Trunk Rev: 2363
$locale['400'] = "Aktualizacja";
// No upgrade
$locale['401'] = "Nie ma dostępnych aktualizacji.";
// Stage 6 - User Field Categories
$locale['420'] = "Informacje kontaktowe";
$locale['421'] = "Dodatkowe informacje";
$locale['422'] = "Dodatkowe opcje";
$locale['423'] = "Statystyki";
$locale['430'] = "Kategorie pól profilu";
$locale['432'] = "Użytkownicy";
$locale['434'] = "Elementów na stronie";
$locale['435'] = "Polityka bezpieczeństwa";
$locale['436'] = "Newsy";
$locale['437'] = "Download";
// v7.02 new locales
$locale['440'] = "Dodaj plik";
$locale['441'] = "Shoutbox";
$locale['442'] = "robots.txt";
$locale['443'] = "Dziennik zmian danych";
$locale['444'] = "Odnowienie hasła administratora";
$locale['445'] = "Dziennik błędów";
// Upgrade locales
$locale['500'] = "Jest dostępna %s aktualizacja dla zainstalowanej wersji PHP-Fusion.";
$locale['501'] = "Wystarczy nacisnąć Aktualizacja, aby mieć najnowszą wersję PHP-Fusion.";
$locale['502'] = "Zakończono aktualizację bazy danych.";
$locale['503'] = "ważna";
$locale['504'] = ""; //minor, cleared by jantom
$locale['505'] = "Zamień poniższymi liniami ich odpowiedniki z pliku config.php!";
// Cookie Prefix
$locale['600'] = "Edytuj swój plik config.php i podmień jego zawartość następującym kodem:";

/* My own patch, if you don't want it - comment lines below.
 * To moja własna łatka, jeśli nie chcesz z niej korzystać - zakomentuj poniższe linie
 * Tomasz "jantom" Jankowski, Date: 21 04 2011 16:00 */
require_once INCLUDES."output_handling_include.php";
replace_in_output("Please replace these lines with the lines in your config.php!",$locale['600']);
?>