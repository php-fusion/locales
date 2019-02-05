<?php
$locale['email_create_subject'] = "Обліковий запис створено ";
$locale['email_create_message'] = "Вітаємо, [USER_NAME],\n
Ваш обліковий запис на сайті <<".$settings['sitename'].">> успішно створено.\n
Ви можете тепер увійти на сайт, використовуючи наступні параметри:\n
ім'я: [USER_NAME]\n
пароль: [PASSWORD]\n\n
З повагою,\n
".$settings['siteusername'];
$locale['email_activate_subject'] = "Обліковий запис активовано ";
$locale['email_activate_message'] = "Вітаємо, [USER_NAME],\n
Ваш обліковий запис на сайті <<".$settings['sitename'].">> успішно активовано.\n
Ви можете тепер входити на сайт, використовуючи свої ім'я та пароль.\n\n
З повагою,\n
".$settings['siteusername'];
$locale['email_deactivate_subject'] = "Запит на повторну активацію облікового запису на сайті <<".$settings['sitename'].">>";
$locale['email_deactivate_message'] = "Вітаємо, [USER_NAME],\n
Минуло ".$settings['deactivation_period']." день(днів) з часу Вашого останнього візиту на сайт <<".$settings['sitename'].">>. Ваш обліковий запис позначено як бездіяльний, але уся інформація, пов'язана із ним, збережена і не зазнала змін.\n
Щоб повторно активувати Ваш обліковий запис, просто перейдіть за наступним посиланням:\n
".$settings['siteurl']."reactivate.php?user_id=[USER_ID]&code=[CODE]\n\n
З повагою,\n
".$settings['siteusername'];
$locale['email_ban_subject'] = "Ваш обліковий запис на сайті <<".$settings['sitename'].">> заблоковано (бан)";
$locale['email_ban_message'] = "Вітаємо, [USER_NAME],\n
Ваш обліковий запис на сайті <<".$settings['sitename'].">> заблокував (бан) ".$userdata['user_name']." за такою підставою:\n
[REASON].\n
Якщо бажаєте отримати детальну інформацію про це блокування, будь-ласка, зв'яжіться з адміністрацією сайту через електронну пошту ".$settings['siteemail'].".\n
".$settings['siteusername'];
$locale['email_secban_subject'] = "Ваш обліковий запис на сайті <<".$settings['sitename'].">> заблоковано з міркувань безпеки";
$locale['email_secban_message'] = "Вітаємо, [USER_NAME],\n
Ваш обліковий запис на сайті <<".$settings['sitename'].">> заблокував ".$userdata['user_name']." через деякі Ваші дії або дії пов'язані з Вашим обліковим записом, що потенційно становили загрозу безпеці сайту.\n
Якщо бажаєте отримати детальну інформацію про це блокування з міркувань безпеки, будь-ласка, зв'яжіться з адміністрацією сайту через електронну пошту ".$settings['siteemail'].".\n
".$settings['siteusername'];
$locale['email_suspend_subject'] = "Дію Вашого облікового запису на сайті <<".$settings['sitename'].">> призупинено";
$locale['email_suspend_message'] = "Вітаємо, [USER_NAME],\n
Дію Вашого обліковго запису на сайті <<".$settings['sitename'].">> призупинив ".$userdata['user_name']." до [DATE] (час на сайті) за наступною підставою:\n
[REASON].\n
Якщо бажаєте отримати детальну інформацію про це призупинення, будь-ласка, зв'яжіться з адміністрацією сайту через електронну пошту ".$settings['siteemail'].".\n
".$settings['siteusername'];
?>