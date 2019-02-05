<?php
$locale['email_create_subject'] = "عضویت شما ساخته شد در";
$locale['email_create_message'] = "سلام [USER_NAME],\n
عضویت شما در سایت ".$settings['sitename']." ساخته شد.\n
شما هم اکنون می توانید با استفاده از اطللاعات زیر وارد سایت شوید:\n
username: [USER_NAME]\n
password: [PASSWORD]\n\n
با تشکر ,\n
".$settings['siteusername'];

$locale['email_activate_subject'] = "فعال سازی حساب کاربری در سایت ";
$locale['email_activate_message'] = "سلام [USER_NAME],\n
حساب کاربری شما در سایت  ".$settings['sitename']." فعال شده است .\n
شما هم اکنون می توانید با استفاده از نام کاربری خود و رمز خود وارد سایت شوید.\n\n
با تشکر,\n
".$settings['siteusername'];

$locale['email_deactivate_subject'] = "فعال سازی مجددا حساب کاربری شمادر ".$settings['sitename'];
$locale['email_deactivate_message'] = "سلام [USER_NAME],\n
It has been ".$settings['deactivation_period']." روز (ها)ازفعالیت شما گذشته در ".$settings['sitename'].". حساب کاربری شما به عنوان ،کاربری غیر فعال مشخص شده است ولی تمام جزئیات حساب شما سالم  باقی مانده است و هم اکنون می توانید با استفاده از حساب کاربری خود وارد سایت شوید.\n
برای فعال سازی مجددا ، حساب کاربری خود بر روی لینک زیر کلیک نمایید:\n
".$settings['siteurl']."reactivate.php?user_id=[USER_ID]&code=[CODE]\n\n
با تشکر,\n
".$settings['siteusername'];

$locale['email_ban_subject'] = "حساب کاربری شما در سایت ".$settings['sitename']."      مسدود شد      ";
$locale['email_ban_message'] = "سلام [USER_NAME],\n
حساب کاربری شما در سایت ".$settings['sitename']."    مسدود شد توسط   ".$userdata['user_name']." دلیل مسدود شدن حساب کاربری شما به شرح زیر است:\n
[REASON].\n
اگر مایل هستید که در مورد مسدود شدن حساب کاربری خود بیشتر بدانید ، با مدیریت سایت تماس بگیرید ".$settings['siteemail'].".\n
".$settings['siteusername'];

$locale['email_secban_subject'] = "حساب کاربری شما در سایت ".$settings['sitename']."    مسدود شد توسط   ";
$locale['email_secban_message'] = "سلام [USER_NAME],\n
حساب کاربری شما در سایت ".$settings['sitename']."    مسدود شد توسط   ".$userdata['user_name']." برای اینکه فعالیت مشکوک شما ، یک تهدید امنیتی در سایت دیده شد.\n
اگر مایل هستید تا اطلاعات بیشتری در مورد مسدود شدن حساب کاربری خود بدانید ، بایستی با مدیریت سایت تماس بگیریدر در سایت ".$settings['siteemail'].".\n
".$settings['siteusername'];

$locale['email_suspend_subject'] = "حساب کاربری شما در ".$settings['sitename']." متوقف  و معلق گردید    ";
$locale['email_suspend_message'] = "سلام [USER_NAME],\n
حساب کاربری شما در سایت ".$settings['sitename']." معلق شد توسط ".$userdata['user_name']."تا تاریخ [DATE] (site time) بنا به دلایل زیر:\n
[REASON].\n
اگر مایل هستید تا اطلاعات بیشتری درباره معلق شدن حساب کاربری خود بدانید ، لطفا با مدیریت سایت تماس بگیریددر سایت ".$settings['siteemail'].".\n
".$settings['siteusername'];
?>