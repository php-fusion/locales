<?php
// Official SVN Trunk Rev: 1732
$locale['email_create_subject'] = "Utworzono konto na ";
$locale['email_create_message'] = "Witaj [USER_NAME]!\n
Twoje konto na ".$settings['sitename']." zosta³o utworzone.\n
Teraz mo¿esz zalogowaæ siê, korzystaj±c z poni¿szych informacji:\n
nazwa u¿ytkownika: [USER_NAME]\n
has³o: [PASSWORD]\n\n
Z pozdrowieniami\n\n
".$settings['siteusername']."\n\n
------\n
Niniejsza wiadomo¶æ zosta³a wys³ana automatycznie. Nie odpowiadaj na ni±.";

$locale['email_activate_subject'] = "Aktywowano konto na ";
$locale['email_activate_message'] = "Witaj [USER_NAME]!\n
Twoje konto na  ".$settings['sitename']." zosta³o aktywowane.\n
Teraz mo¿esz zalogowaæ siê przy u¿yciu swojej nazwy u¿ytkownika i has³a.\n
Wszystkiego dobrego\n
".$settings['siteusername'];

$locale['email_deactivate_subject'] = "Reaktywacja konta na ".$settings['sitename'];
$locale['email_deactivate_message'] = "Witaj [USER_NAME]!\n
Minê³o ".$settings['deactivation_period']." dni od Twojego ostatniego zalogowania siê na ".$settings['sitename'].". Twoje konto zosta³o uznane za bezczynne. Dane z nim zwi±zane pozosta³y niezmienione.\n
Aby reaktywowaæ konto, naci¶nij na poni¿szy link:\n
".$settings['siteurl']."reactivate.php?user_id=[USER_ID]&code=[CODE]\n
Z pozdrowieniami\n\n
".$settings['siteusername']."\n\n
------\n
Niniejsza wiadomo¶æ zosta³a wys³ana automatycznie. Nie odpowiadaj na ni±.";

$locale['email_ban_subject'] = "Twoje konto na ".$settings['sitename']." zosta³o zablokowane";
$locale['email_ban_message'] = "Witaj [USER_NAME]!\n
Twoje konto na ".$settings['sitename']." zosta³o zablokowane przez ".$userdata['user_name']." z nastêpuj±cych powodów:\n
[REASON].\n
Je¶li potrzebujesz szczegó³owych informacji dotycz±cych blokady konta, skontaktuj siê z administracj± strony wysy³aj±c e-mail na adres ".$settings['siteemail'].".\n
Z pozdrowieniami\n\n
".$settings['siteusername']."\n\n
------\n
Niniejsza wiadomo¶æ zosta³a wys³ana automatycznie. Nie odpowiadaj na ni±.";

$locale['email_secban_subject'] = "Twoje konto na ".$settings['sitename']." zosta³o zablokowane";
$locale['email_secban_message'] = "Witaj [USER_NAME]!\n
Twoje konto na ".$settings['sitename']." zosta³o zablokowane przez ".$userdata['user_name'].", poniewa¿ podjête przez Ciebie dzia³ania stanowi³y zagro¿enie dla strony i jej u¿ytkowników.\n
Je¶li potrzebujesz szczegó³owych informacji dotycz±cych blokady konta, skontaktuj siê z administracj± strony wysy³aj±c e-mail na adres ".$settings['siteemail'].".\n
Z pozdrowieniami\n\n
".$settings['siteusername']."\n\n
------\n
Niniejsza wiadomo¶æ zosta³a wys³ana automatycznie. Nie odpowiadaj na ni±.";

$locale['email_suspend_subject'] = "Twoje konto na ".$settings['sitename']."zosta³o zawieszone";
$locale['email_suspend_message'] = "Witaj [USER_NAME]!\n
Twoje konto na ".$settings['sitename']." zosta³o zawieszona przez ".$userdata['user_name']." do [DATE] (wg czasu strony) z nastêpuj±cych powodów:\n
[REASON].\n
Je¶li potrzebujesz szczegó³owych informacji dotycz±cych zawieszenia konta, skontaktuj siê z administracj± strony wysy³aj±c e-mail na adres ".$settings['siteemail'].".\n
Z pozdrowieniami\n\n
".$settings['siteusername']."\n\n
------\n
Niniejsza wiadomo¶æ zosta³a wys³ana automatycznie. Nie odpowiadaj na ni±."
?>
