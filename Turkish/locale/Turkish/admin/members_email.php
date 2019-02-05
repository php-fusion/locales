<?php
$locale['email_create_subject'] = "Sitemizde üyeliðiniz oluþturuldu";
$locale['email_create_message'] = "Merhaba [USER_NAME],\n
Sitemiz olan ".$settings['sitename']." üzerindeki hesabýnýz oluþturuldu.\n
Sitemize aþaðýdaki kullanýcý bilgileri ile giriþ yapabilirsiniz:\n
kullanýcý adý: [USER_NAME]\n
parola: [PASSWORD]\n\n
Saygýlarýmýzla,\n
".$settings['siteusername'];

$locale['email_activate_subject'] = "Sitemizde üyeliðiniz aktif edildi ";
$locale['email_activate_message'] = "Merhaba [USER_NAME],\n
".$settings['sitename']." adlý sitemizde üyeliðiniz aktif edildi.\n
Mevcut kullanýcý adýnýz ve þifrenizle sitemize yeniden giriþ yapabilirsiniz.\n\n
Saygýlarýmýzla,\n
".$settings['siteusername'];

$locale['email_deactivate_subject'] = "Sitemizde hesabýnýzý yeniden aktifleþtirmeniz gerekmekte ";
$locale['email_deactivate_message'] = "Merhaba [USER_NAME],\n
Sitemiz olan ".$settings['sitename']." adresine ".$settings['deactivation_period']." gündür girmediðinizi fark ettik.
Hesabýnýzý yeniden aktifleþtirmek için aþaðýdaki linke týklayabilirsiniz:\n
".$settings['siteurl']."reactivate.php?user_id=[USER_ID]&code=[CODE]\n
Unutmayýn ki sadece üye durumunuz inaktif durumda. Tüm üye bilgileriniz ve sitemize girmiþ olduðunuz tüm içerikler halen mevcut ve de ayný durumda bulunmakta.action=[RESPONSE]pass=[PASS]\n\n
Saygýlarýmýzla,\b
".$settings['siteusername'];

$locale['email_ban_subject'] = "Sitemizden banlandýnýz";
$locale['email_ban_message'] = "Merhaba [USER_NAME],\n
Sitemiz olan ".$settings['sitename']." üzerindeki hesabýnýz ".$userdata['user_name']." tarafýndan aþaðýdaki sebepten dolayý banlandý:\n
[REASON].\n
Eðer bu konu ile ilgili detaylý bilgiye ihtiyaç duyuyorsanýz lütfen ".$settings['siteemail']." adresi üzerinden site yöneticileri ile irtibata geçin.\n
".$settings['siteusername'];

$locale['email_secban_subject'] = "Sitemizden banlandýnýz";
$locale['email_secban_message'] = "Merhaba [USER_NAME],\n
Sitemiz olan ".$settings['sitename']." üzerindeki hesabýnýz ".$userdata['user_name']." tarafýndan sizin ya da sizin hesabýnýz üzerinden yapýlan sitemiz için güvenlik riski teþkil edecek bir davranýþtan dolayý banlanmýþtýr.\n
Eðer bu konu ile ilgili detaylý bilgiye ihtiyaç duyuyorsanýz lütfen ".$settings['siteemail']." adresi üzerinden site yöneticileri ile irtibata geçin.\n
".$settings['siteusername'];

$locale['email_suspend_subject'] = "Sitemizdeki hesabýnýz askýya alýndý";
$locale['email_suspend_message'] = "Merhaba [USER_NAME],\n
Sitemiz olan ".$settings['sitename']." üzerindeki hesabýnýz ".$userdata['user_name']." tarafýndan [DATE] tarihine kadar (site zamaný) aþaðýdaki gerekçe ile askýya alýnmýþtýr:\n
[REASON].\n
Eðer bu konu ile ilgili detaylý bilgiye ihtiyaç duyuyorsanýz lütfen ".$settings['siteemail']." adresi üzerinden site yöneticileri ile irtibata geçin.\n
".$settings['siteusername'];
?>