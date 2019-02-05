<?php
// Official SVN Trunk Rev: 2435
/* My own patch, if you don't want it - comment lines below.
 * To moja własna łatka, jeśli nie chcesz z niej korzystać - zakomentuj poniższe linie
 * Tomasz "jantom" Jankowski, Date: 17 04 2011 23:00 */
if (!isset($_POST['delete'])) {$_POST['delete']='';}
// End patch/Koniec łatki
$locale['100'] = "Dziennik zmiany danych";
$locale['101'] = "Id";
$locale['102'] = "Data";
$locale['103'] = "Nazwa użytkownika";
$locale['104'] = "Pole użytkownika";
$locale['105'] = "Poprzednia wartość";
$locale['106'] = "Nowa wartość";
$locale['107'] = "Sortuj wg:";
$locale['108'] = "Nazwa użytkownika/ID użytkownika:";
$locale['109'] = "Wyślij";
$locale['110'] = "Usuń wpisy starsze niż";
$locale['111'] = "dzień/dni";
$locale['112'] = "Brak informacji w dzienniku.";
$locale['113'] = "Wybrana nazwa użytkownika:";
$locale['114'] = "Anuluj";
$locale['115'] = "Pole użytkownika:";
$locale['116'] = "Usuń";
$locale['117'] = "Opcje";
$locale['118'] = "Usunięto wpisy starsze niż %d ".($_POST['delete'] > 1 || $_POST['delete'] == 0 ? "dni." : "dzień.");
$locale['119'] = "Usunięto wpis";
?>