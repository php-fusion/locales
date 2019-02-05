<?php
$locale['email_activate_subject'] = "Аккаунт активирован";
$locale['email_activate_message'] = "Приветствую [USER_NAME],\n
Ваш аккаунт ".$settings['sitename']." активирован.\n
Вы можете залогиниться, используя ваш логин и пароль.\n
С уважением,\n
".$settings['siteusername'];

$locale['email_deactivate_subject'] = "Аккаунт. Повторная активация  ".$settings['sitename'];
$locale['email_deactivate_message'] = "Привет [USER_NAME],\n
Аккаунт ".$settings['deactivation_period']." день(дней) с момента последнего входа ".$settings['sitename'].". Ваш аккаунт был отмечен как неактивный, но все данные учетной записи и содержание остается неизменным.\n
Чтобы активировать учетную запись просто нажмите на следующую ссылку:\n
".$settings['siteurl']."reactivate.php?user_id=[USER_ID]&code=[CODE]\n
С уважением,\n\n
".$settings['siteusername'];

$locale['email_ban_subject'] = "Ваш аккаунт ".$settings['sitename']."забанен";
$locale['email_ban_message'] = "Hello [USER_NAME],\n
Ваш аккаунт ".$settings['sitename']." был запрещен ".$userdata['user_name']." из-за следующих причин:\n
[REASON].\n
Если вы хотите получить больше информации об этом запрете, пожалуйста, обращайтесь к администратору сайта ".$settings['siteemail'].".\n
".$settings['siteusername'];

$locale['email_secban_subject'] = "Ваш аккаунт ".$settings['sitename']."был запрещен";
$locale['email_secban_message'] = "Hello [USER_NAME],\n
Ваш аккаунт ".$settings['sitename']." был запрещен ".$userdata['user_name']." из-за каких-либо Ваших действий, которые представляли угрозу безопасности для нашего сайта.\n
Если вы хотите получить больше сведений об этом запрете, пожалуйста, обращайтесь к администратору сайта ".$settings['siteemail'].".\n
".$settings['siteusername'];

$locale['email_suspend_subject'] = "Ваш аккаунт ".$settings['sitename']."был приостановлен";
$locale['email_suspend_message'] = "Hello [USER_NAME],\n
Ваш аккаунт ".$settings['sitename']." был приостановлен ".$userdata['user_name']." до [DATE] из-за следующих причин:\n
[REASON].\n
Если вы хотите получить больше информации об этой отсрочки, пожалуйста, обращайтесь к администратору сайта ".$settings['siteemail'].".\n
".$settings['siteusername'];
?>