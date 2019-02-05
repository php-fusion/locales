<?php
// Official SVN Trunk Rev: 2435
/* My own patch, if you don't want it - comment lines below.
 * To moja w³asna ³atka, je¶li nie chcesz z niej korzystaæ - zakomentuj poni¿sze linie
 * Tomasz "jantom" Jankowski, Date: 17 04 2011 23:00 */
if (!isset($_POST['delete'])) {$_POST['delete']='';}
// End patch/Koniec ³atki
$locale['100'] = "Dziennik zmiany danych";
$locale['101'] = "Id";
$locale['102'] = "Data";
$locale['103'] = "Nazwa u¿ytkownika";
$locale['104'] = "Pole u¿ytkownika";
$locale['105'] = "Poprzednia warto¶æ";
$locale['106'] = "Nowa warto¶æ";
$locale['107'] = "Sortuj wg:";
$locale['108'] = "Nazwa u¿ytkownika/ID u¿ytkownika:";
$locale['109'] = "Wy¶lij";
$locale['110'] = "Usuñ wpisy starsze ni¿";
$locale['111'] = "dzieñ/dni";
$locale['112'] = "Brak informacji w dzienniku.";
$locale['113'] = "Wybrana nazwa u¿ytkownika:";
$locale['114'] = "Anuluj";
$locale['115'] = "Pole u¿ytkownika:";
$locale['116'] = "Usuñ";
$locale['117'] = "Opcje";
$locale['118'] = "Usuniêto wpisy starsze ni¿ %d ".($_POST['delete'] > 1 || $_POST['delete'] == 0 ? "dni." : "dzieñ.");
$locale['119'] = "Usuniêto wpis";
?>
