<?php
// Official SVN Trunk Rev: 2395
$locale['400'] = "Download";
// Download File Information
$locale['410'] = "[NOWY]";
$locale['411'] = "Licencja:";
$locale['412'] = "O/S:";
$locale['413'] = "Wersja:";
$locale['414'] = "Dodano:";
$locale['415'] = "Łącznie plików:";
$locale['416'] = "Pobierz";
$locale['417'] = "Download";
$locale['418'] = "Strona domowa";
$locale['419'] = "Zrzut ekranu";
$locale['420'] = "Nazwa";
$locale['421'] = "Data";
$locale['422'] = "Autor";
$locale['423'] = "Wersja";
$locale['424'] = "Pobrań";
$locale['425'] = "Komentarzy";
$locale['426'] = "Ocen";
$locale['427'] = "Kalendarz";
$locale['428'] = "Informacje";
$locale['429'] = "Statystyka";
// Downloads Notices
$locale['430'] = "Brak udostępnionych kategorii downloadu.";
$locale['431'] = "Brak udostępnionych plików do pobrania.";
// Statistics
$locale['440'] = "Łączna liczba pobrań:";
$locale['441'] = "Najpopularniejszy plik:";
$locale['442'] = "Najnowszy plik:";
// Search and filters
$locale['450'] = "Użyj filtrów po prawej, aby zawęzić zakres poszukiwań.";
$locale['451'] = "Wszystkie";
$locale['452'] = "ID";
$locale['453'] = "Tytułu";
$locale['454'] = "Autora";
$locale['455'] = "Pobrań";
$locale['456'] = "Daty";
$locale['457'] = "Rosnąco";
$locale['458'] = "Malejąco";
$locale['459'] = "Zastosuj";
$locale['460'] = "Przeszukaj download:";
$locale['461'] = "Szukaj";
$locale['462'] = "Kategoria:";
$locale['463'] = "Sortuj wg:";

/* My own patch, if you don't want it - comment lines below.
 * To moja własna łatka, jeśli nie chcesz z niej korzystać - zakomentuj poniższe linie
 * Tomasz "jantom" Jankowski, Date: 10 04 2011 23:30 */
$locale['415_pl'] = "Liczba pobrań:";
replace_in_output ("<img src=\'".get_image("downloads")."\'(.*?)/><br />".$locale['415'],"<img src=\'".get_image("downloads")."\'$1/><br />".$locale['415_pl']);
?>