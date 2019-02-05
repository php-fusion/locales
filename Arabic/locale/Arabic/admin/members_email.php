<?php
$locale['email_create_subject'] = "Êד Êֳ׃ם׃ ַבֽ׃ַָ Ýם ";
$locale['email_create_message'] = "ֳובַנ [USER_NAME]¡\n
Êד Êֳ׃ם׃ ֽ׃ַָß Ýם  ".$settings['sitename']." זÝÞַנ בבד״בזָ\n
םדßהß ַבֲה ַבֿ־זב ַָ׃Ê־ַֿד ַבדÚבזדַÊ ַבÊַבםֹ:\n
ַבַ׃ד: [USER_NAME]\n
ßבדֹ ַב׃ׁ: [PASSWORD]\n\n
ÊֽםַÊהַ¡\n
".$settings['siteusername'];

$locale['email_activate_subject'] = "Êד ÊÝÚםב ַבֽ׃ַָ Ýם ";
$locale['email_activate_message'] = "ֳובַנ [USER_NAME]¡\n
Êד ÊÝÚםב ֽ׃ַָß Ýם ".$settings['sitename']." זÝÞַנ בבד״בזָ.\n
םדßהß ַבֲה ַבֿ־זב ַָ׃Ê־ַֿד ַבַ׃ד זßבדֹ ַב׃ׁ ַב־ַױםרה ָß.\n\n
ÊֽםַÊהַ¡\n
".$settings['siteusername'];

$locale['email_deactivate_subject'] = "ַבַֹּֽ בÊÝÚםב ֽ׃ַָß Ýם ".$settings['sitename'];
$locale['email_deactivate_message'] = "ֳובַנ [USER_NAME]¡\n
הזֿ ַבÊ׀ßםׁ ֳָהו Þֿ דײל It has been ".$settings['deactivation_period']." םזד/ֳםַד ָֿזה ֿ־זבß בדזÞÚהַ Ýם  ".$settings['sitename'].". זÞֿ Êד זײÚ ֳ׃דß ßÛםׁ הװ״ זבßה ּדםÚ ÊÝַױםב ֽ׃ַָß זדֽÊזםַÊו בד ÊÊÛםׁ.\n
בֵÚַֹֿ ÊÝÚםב ֽ׃ַָß¡ םדßה ַבײÛ״ Úבל ַבַָׁ״ ַבÊַבם:\n
".$settings['siteurl']."reactivate.php?user_id=[USER_ID]&code=[CODE]\n\n
ÊֽםַÊהַ¡\n
".$settings['siteusername'];

$locale['email_ban_subject'] = "Êד ֵםÞַÝ ֽ׃ַָß Ýם ".$settings['sitename'];
$locale['email_ban_message'] = "ֳובַנ [USER_NAME]¡\n
Êד ֵםÞַÝ ֽ׃ַָß Ýם  ".$settings['sitename']." דה Þָב ".$userdata['user_name']." בבֳ׃ַָָ ַבÊַבםֹ:\n
[REASON].\n
ֵ׀ַ ßהÊ Êׁםֿ ַבדׂםֿ דה ַבדÚבזדַÊ Úה ו׀ַ ַבֽÙׁ¡ הּׁז ַבַÊױַב ָדֿםׁ ַבדזÞÚ Ýם  ".$settings['siteemail'].".\n
".$settings['siteusername'];

$locale['email_secban_subject'] = "Êד ֽÙׁ ֽ׃ַָß Ýם ".$settings['sitename'];
$locale['email_secban_message'] = "ֳובַנ [USER_NAME]¡\n
Êד ֽÙׁ ֽ׃ַָß Ýם  ".$settings['sitename']." דה Þָב ".$userdata['user_name']." ז׀בß ָ׃ָָ ָÚײ ַבÊױׁÝַÊ ַבדׁÊָ״ֹ ָß ֳז ָֽ׃ַָß זַבÊם Êד ַבהÙׁ ֵבםוַ ßÊױׁÝַÊ Êִֻׁ Úבל ֳדה ַבדזÞÚ.\n
ֵ׀ַ ßהÊ Êׁםֿ ַבדׂםֿ דה ַבדÚבזדַÊ Úה ו׀ַ ַבֽÙׁ ַבֳדהם¡ םדßהß ַבַÊױַב ָדֿםׁ ַבדזÞÚ Ýם  ".$settings['siteemail'].".\n
".$settings['siteusername'];

$locale['email_suspend_subject'] = "Êד ֵםÞַÝ ֽ׃ַָß Ýם  ".$settings['sitename'];
$locale['email_suspend_message'] = "ֳובַנ [USER_NAME]¡\n
Êד ֵםÞַÝ ֽ׃ַָß Ýם  ".$settings['sitename']." דה Þָב ".$userdata['user_name']." ֽÊל [DATE] (site time) ז׀בß בבֳ׃ַָָ ַבÊַבם:\n
[REASON].\n
ֵ׀ַ ֳֿׁÊ ַבדׂםֿ דה ַבדÚבזדַÊ Úה ו׀ַ ַבֵםÞַÝ¡ הּׁז ַבַÊױַב ָדֿםׁ ַבדזÞÚ Ýם  ".$settings['siteemail'].".\n
".$settings['siteusername'];
?>