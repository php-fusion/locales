<?php
$locale['email_create_subject'] = "Sitemizde &#252;yeli&#287;iniz olu&#351;turuldu";
$locale['email_create_message'] = "Merhaba [USER_NAME],\n
Sitemiz olan ".$settings['sitename']." &#252;zerindeki hesab&#305;n&#305;z olu&#351;turuldu.\n
Sitemize a&#351;a&#287;&#305;daki kullan&#305;c&#305; bilgileri ile giri&#351; yapabilirsiniz:\n
kullan&#305;c&#305; ad&#305;: [USER_NAME]\n
parola: [PASSWORD]\n\n
Sayg&#305;lar&#305;m&#305;zla,\n
".$settings['siteusername'];

$locale['email_activate_subject'] = "Sitemizde &#252;yeli&#287;iniz aktif edildi ";
$locale['email_activate_message'] = "Merhaba [USER_NAME],\n
".$settings['sitename']." adl&#305; sitemizde &#252;yeli&#287;iniz aktif edildi.\n
Mevcut kullan&#305;c&#305; ad&#305;n&#305;z ve &#351;ifrenizle sitemize yeniden giri&#351; yapabilirsiniz.\n\n
Sayg&#305;lar&#305;m&#305;zla,\n
".$settings['siteusername'];

$locale['email_deactivate_subject'] = "Sitemizde hesab&#305;n&#305;z&#305; yeniden aktifle&#351;tirmeniz gerekmekte ";
$locale['email_deactivate_message'] = "Merhaba [USER_NAME],\n
Sitemiz olan ".$settings['sitename']." adresine ".$settings['deactivation_period']." g&#252;nd&#252;r girmedi&#287;inizi fark ettik.
Hesab&#305;n&#305;z&#305; yeniden aktifle&#351;tirmek i&#231;in a&#351;a&#287;&#305;daki linke t&#305;klayabilirsiniz:\n
".$settings['siteurl']."reactivate.php?user_id=[USER_ID]&code=[CODE]\n
Unutmay&#305;n ki sadece &#252;ye durumunuz inaktif durumda. T&#252;m &#252;ye bilgileriniz ve sitemize girmi&#351; oldu&#287;unuz t&#252;m i&#231;erikler halen mevcut ve de ayn&#305; durumda bulunmakta.action=[RESPONSE]pass=[PASS]\n\n
Sayg&#305;lar&#305;m&#305;zla,\b
".$settings['siteusername'];

$locale['email_ban_subject'] = "Sitemizden banland&#305;n&#305;z";
$locale['email_ban_message'] = "Merhaba [USER_NAME],\n
Sitemiz olan ".$settings['sitename']." &#252;zerindeki hesab&#305;n&#305;z ".$userdata['user_name']." taraf&#305;ndan a&#351;a&#287;&#305;daki sebepten dolay&#305; banland&#305;:\n
[REASON].\n
E&#287;er bu konu ile ilgili detayl&#305; bilgiye ihtiya&#231; duyuyorsan&#305;z l&#252;tfen ".$settings['siteemail']." adresi &#252;zerinden site y&#246;neticileri ile irtibata ge&#231;in.\n
".$settings['siteusername'];

$locale['email_secban_subject'] = "Sitemizden banland&#305;n&#305;z";
$locale['email_secban_message'] = "Merhaba [USER_NAME],\n
Sitemiz olan ".$settings['sitename']." &#252;zerindeki hesab&#305;n&#305;z ".$userdata['user_name']." taraf&#305;ndan sizin ya da sizin hesab&#305;n&#305;z &#252;zerinden yap&#305;lan sitemiz i&#231;in g&#252;venlik riski te&#351;kil edecek bir davran&#305;&#351;tan dolay&#305; banlanm&#305;&#351;t&#305;r.\n
E&#287;er bu konu ile ilgili detayl&#305; bilgiye ihtiya&#231; duyuyorsan&#305;z l&#252;tfen ".$settings['siteemail']." adresi &#252;zerinden site y&#246;neticileri ile irtibata ge&#231;in.\n
".$settings['siteusername'];

$locale['email_suspend_subject'] = "Sitemizdeki hesab&#305;n&#305;z ask&#305;ya al&#305;nd&#305;";
$locale['email_suspend_message'] = "Merhaba [USER_NAME],\n
Sitemiz olan ".$settings['sitename']." &#252;zerindeki hesab&#305;n&#305;z ".$userdata['user_name']." taraf&#305;ndan [DATE] tarihine kadar (site zaman&#305;) a&#351;a&#287;&#305;daki gerek&#231;e ile ask&#305;ya al&#305;nm&#305;&#351;t&#305;r:\n
[REASON].\n
E&#287;er bu konu ile ilgili detayl&#305; bilgiye ihtiya&#231; duyuyorsan&#305;z l&#252;tfen ".$settings['siteemail']." adresi &#252;zerinden site y&#246;neticileri ile irtibata ge&#231;in.\n
".$settings['siteusername'];
?>