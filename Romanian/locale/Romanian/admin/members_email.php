<?php
$locale['email_create_subject'] = "Contul tau a fost creat la ";
$locale['email_create_message'] = "Salut, [USER_NAME]!\n
Contul tau la ".$settings['sitename']." a fost creat.\n
Acum te poti autentifica folosind urmatoarele detalii:\n
Utilizator: [USER_NAME]\n
Parola: [PASSWORD]\n\n
Cu respect,\n
".$settings['siteusername']."\n".$settings['siteurl'];

$locale['email_activate_subject'] = "Cont activat la ";
$locale['email_activate_message'] = "Salut, [USER_NAME]!\n
Contul tau la ".$settings['sitename']." a fost activat.\n
Acum te poti autentifica folosind numele de utilizator si parola aleasa.\n\n
Cu respect,\n
".$settings['siteusername']."\n".$settings['siteurl'];

$locale['email_deactivate_subject'] = "Este necesara reactivarea contului la ".$settings['sitename'];
$locale['email_deactivate_message'] = "Salut, [USER_NAME]!\n
Au trecut ".$settings['deactivation_period']." zi(le) de la ultima autentificare pe ".$settings['sitename'].". Contul tau a fost marcat ca inactiv, dar toate detaliile contului si continutul raman intacte.\n
Pentru a reactiva contul pur si simplu da clic pe urmatoarea legatura:\n
".$settings['siteurl']."reactivate.php?user_id=[USER_ID]&code=[CODE]\n\n
Cu respect,\n
".$settings['siteusername'];

$locale['email_ban_subject'] = "Contul tau la ".$settings['sitename']." a fost suspendat";
$locale['email_ban_message'] = "Salut, [USER_NAME]!\n
Contul tau la ".$settings['sitename']." a fost suspendat de ".$userdata['user_name'].", cu precizarea:\n
[REASON].\n
Daca doresti mai multe informatii despre aceasta suspendare, te rog sa contactezi administratorul saitului la ".$settings['siteemail'].".\n
".$settings['siteusername'];

$locale['email_secban_subject'] = "Contul tau la ".$settings['sitename']." a fost suspendat";
$locale['email_secban_message'] = "Salut, [USER_NAME]!\n
Contul tau la ".$settings['sitename']." a fost suspendat de ".$userdata['user_name']." din cauza unor actiuni acreditate tie sau contului, te consideram o amenintare pentru securitatea saitului.\n
Daca doresti mai multe informatii despre aceasta suspendare, te rog sa contactezi administratorul saitului la ".$settings['siteemail'].".\n
".$settings['siteusername'];

$locale['email_suspend_subject'] = "Contul tau la ".$settings['sitename']." a fost suspendat";
$locale['email_suspend_message'] = "Salut, [USER_NAME]!\n
Contul tau la ".$settings['sitename']." a fost suspendat de ".$userdata['user_name']." pana pe [DATE] (ora saitului), cu precizarea:\n
[REASON].\n
Daca doresti mai multe informatii despre aceasta suspendare, te rog sa contactezi administratorul saitului la ".$settings['siteemail'].".\n
".$settings['siteusername'];
?>