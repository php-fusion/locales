<?php
// Official SVN Trunk Rev: 2312
$locale['SB_title'] = "Shoutbox";

$locale['SB_desc'] = "Shoutbox (Oficjalny dodatek)";
$locale['SB_admin1'] = "Shoutbox";

// Shoutbox
$locale['SB_title'] = "Shoutbox";
$locale['SB_name'] = "Nick:";
$locale['SB_message'] = "Wiadomo¶æ:";
$locale['SB_shout'] = "Wy¶lij";
$locale['SB_login_req'] = "Musisz zalogowaæ siê, aby móc dodaæ wiadomo¶æ.";
$locale['SB_archive'] = "Archiwum shoutboksa";
$locale['SB_no_msgs'] = "Brak wiadomo¶ci. Mo¿e czas dodaæ w³asn±?";
$locale['SB_delete'] = "Usuñ";
$locale['SB_validation_code'] = "Kod potwierdzaj±cy:";
$locale['SB_enter_validation_code'] = "Wpisz kod potwierdzaj±cy:";

$locale['SB_edit_shout'] = "Edytuj";
// Shoutbox messages
$locale['SB_shout_updated'] = "Zaktualizowano wiadomo¶æ";
$locale['SB_shout_deleted'] = "Usuniêto wiadomo¶æ";
$locale['SB_shouts_deleted'] = "usuniêtych wiadomo¶ci";
// Edit Shout form
$locale['SB_save_shout'] = "Zapisz zmiany";
// Prune Shoutbox
$locale['SB_delete_old'] = "Usuñ wiadomo¶ci starsze ni¿";
$locale['SB_days'] = " dni";
$locale['SB_delete_shouts'] = "Usuñ";
// Current Shouts
$locale['SB_edit'] = "Edytuj";
$locale['SB_userip'] = "IP u¿ytkownika: ";
$locale['SB_on_date'] = " dnia "; // shout date: on march 30
// Popup Error/Warning Messages
$locale['SB_warning_shouts'] = "Usun±æ wiadomo¶ci?";
$locale['SB_warning_shout'] = "Usun±æ wiadomo¶æ?";

// Settings
$locale['SB_settings'] = "Ustawienia shoutboksa";
$locale['SB_visible_shouts'] = "Widocznych wiadomo¶ci";
$locale['SB_guest_shouts'] = "Pozwoliæ go¶ciom na pisanie?";
$locale['SB_yes'] = "Tak";
$locale['SB_no'] = "Nie";
$locale['SB_submit'] = "Zapisz";
$locale['SB_update_ok'] = "Zaktualizowano ustawienia";

/* My own patch, if you don't want it - comment lines below.
 * To moja w³asna ³atka, je¶li nie chcesz z niej korzystaæ - zakomentuj poni¿sze linie
 * Tomasz "jantom" Jankowski, Date: 11 04 2011 14:15 */
$locale['SB_shouts_deleted_a'] = "usuniêta wiadomo¶æ";
replace_in_output("1 ".$locale['SB_shouts_deleted'],"1 ".$locale['SB_shouts_deleted_a']);
?>
