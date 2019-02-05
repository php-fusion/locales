<?php

$locale['email_create_subject']  = "Account erstellt auf ";
$locale['email_create_message']  = "Hallo [USER_NAME],\n\n";
$locale['email_create_message'] .= "dein Account auf ".$settings['sitename']." wurde erstellt.\n";
$locale['email_create_message'] .= "du kannst dich nun mit den folgenden Account Daten einloggen:\n";
$locale['email_create_message'] .= "Benutzer: [USER_NAME]\n";
$locale['email_create_message'] .= "Passwort: [PASSWORD]\n\n";
$locale['email_create_message'] .= "Mit freundlichen Grüßen ".$settings['siteusername'];

$locale['email_activate_subject']  = "Account aktiviert auf ";
$locale['email_activate_message']  = "Hallo [USER_NAME],\n\n";
$locale['email_activate_message'] .= "dein Account bei ".$settings['sitename']." wurde aktiviert.\n";
$locale['email_activate_message'] .= "Du kannst dich jetzt mit deinen Benutzerdaten einloggen.\n\n";
$locale['email_activate_message'] .= "Mit freundlichen Grüßen ".$settings['siteusername'];

$locale['email_deactivate_subject']  = "Account Reaktivierung erforderlich auf ".$settings['sitename'];
$locale['email_deactivate_message']  = "Hallo [USER_NAME],\n\n";
$locale['email_deactivate_message'] .= "du warst seit ".$settings['deactivation_period']." Tag(en) nicht mehr eingeloggt. ";
$locale['email_deactivate_message'] .= "Dein Account wurde als inaktiv markiert, aber all deine Benutzerdetails und Inhalte bleiben erhalten.\n";
$locale['email_deactivate_message'] .= "Um deinen Account zu reaktivieren, klicke einfach auf den folgenden Link:\n";
$locale['email_deactivate_message'] .= "".$settings['siteurl']."reactivate.php?user_id=[USER_ID]&code=[CODE]\n\n";
$locale['email_deactivate_message'] .= "Mit freundlichen Grüßen ".$settings['siteusername'];

$locale['email_ban_subject']  = "Dein Account auf ".$settings['sitename']." wurde gesperrt";
$locale['email_ban_message']  = "Hallo [USER_NAME],\n\n";
$locale['email_ban_message'] .= "dein Benutzername auf ".$settings['sitename']." wurde gesperrt.\n";
$locale['email_ban_message'] .= "Der Grund dafür war folgender:\n";
$locale['email_ban_message'] .= "[REASON].\n";
$locale['email_ban_message'] .= "Wenn du mehr Informationen über diese Sperre erhalten möchtest, kontaktiere bitte den Administrator der Website unter ".$settings['siteemail'].".\n\n";
$locale['email_ban_message'] .= "Mit freundlichen Grüßen ".$settings['siteusername'];

$locale['email_secban_subject']  = "Dein Account auf ".$settings['sitename']." wurde gesperrt";
$locale['email_secban_message']  = "Hallo [USER_NAME],\n\n";
$locale['email_secban_message'] .= "dein Account auf ".$settings['sitename']." wurde gesperrt, weil manche Aktivit&auml;ten im Zusammenhang mit deinem Account zu einer Bedrohung von der Sicherheit der Website geworden sind.\n";
$locale['email_secban_message'] .= "Wenn du mehr Informationen über diese Sperre erhalten möchtest, kontaktiere bitte den Administrator der Website unter ".$settings['siteemail'].".\n\n";
$locale['email_secban_message'] .= "Mit freundlichen Grüßen ".$settings['siteusername'];

$locale['email_suspend_subject']  = "Dein Account auf ".$settings['sitename']." wurde tempor&auml;r gesperrt";
$locale['email_suspend_message']  = "Hallo [USER_NAME],\n\n";
$locale['email_suspend_message'] .= "dein Benutzername auf ".$settings['sitename']." wurde tempor&auml;r gesperrt, bis [DATE] (Serverzeit) aus folgendem Grund:\n";
$locale['email_suspend_message'] .= "[REASON].\n";
$locale['email_suspend_message'] .= "Wenn du mehr Informationen über diese Sperre erhalten möchtest, kontaktiere bitte den Administrator der Website unter ".$settings['siteemail'].".\n\n";
$locale['email_suspend_message'] .= "Mit freundlichen Grüßen ".$settings['siteusername'];

// BITTE AB HIER NICHT MEHR BEARBEITEN !!
#$locale['email_create_subject']     = utf8_encode($locale['email_create_subject']);
#$locale['email_create_message']     = utf8_encode($locale['email_create_message']);
#$locale['email_activate_subject']   = utf8_encode($locale['email_activate_subject']);
#$locale['email_activate_message']   = utf8_encode($locale['email_activate_message']);
#$locale['email_deactivate_subject'] = utf8_encode($locale['email_deactivate_subject']);
#$locale['email_deactivate_message'] = utf8_encode($locale['email_deactivate_message']);
#$locale['email_ban_subject']        = utf8_encode($locale['email_ban_subject']);
#$locale['email_ban_message']        = utf8_encode($locale['email_ban_message']);
#$locale['email_secban_subject']     = utf8_encode($locale['email_secban_subject']);
#$locale['email_secban_message']     = utf8_encode($locale['email_secban_message']);
#$locale['email_suspend_subject']    = utf8_encode($locale['email_suspend_subject']);
#$locale['email_suspend_message']    = utf8_encode($locale['email_suspend_message']);

?>