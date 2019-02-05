<?php
$locale['email_create_subject'] = "חשבון נוצר ב- ";
$locale['email_create_message'] = "שלום [USER_NAME],\n
חשבונך באתר ".$settings['sitename']." נוצר בהצלחה.\n
עכשיו באפשרותך להתחבר עם הפרטים הבאים:\n
שם משתמש: [USER_NAME]\n
סיסמא: [PASSWORD]\n\n
בברכה,\n
".$settings['siteusername'];

$locale['email_activate_subject'] = "חשבון הופעל ב- ";
$locale['email_activate_message'] = "שלום [USER_NAME],\n
חשבונך באתר ".$settings['sitename']." has been activated.\n
עכשיו באפשרותך להתחבר בעזרת שם המשתמש והסיסמא שבחרת.\n\n
בברכה,\n
".$settings['siteusername'];

$locale['email_deactivate_subject'] = "הפעלה מחדש לחשבון נדרשת באתר ".$settings['sitename'];
$locale['email_deactivate_message'] = "שלום [USER_NAME],\n
עברו ".$settings['deactivation_period']." ימים המפעם האחרונה שהתחברת לאתר ".$settings['sitename'].". שם המשתמש שלך סומן כלא פעיל אך כל התוכן שלך הושאר ללא שינוי.\n
להפעלת החשבון מחדש ניתן ללחוץ על הקישור הבא:\n
".$settings['siteurl']."reactivate.php?user_id=[USER_ID]&code=[CODE]\n\n
בברכה,\n
".$settings['siteusername'];

$locale['email_ban_subject'] = "חשבונך באתר ".$settings['sitename']." נחסם";
$locale['email_ban_message'] = "שלום [USER_NAME],\n
חשבונך באתר ".$settings['sitename']." נחסם על ידי ".$userdata['user_name']." בשל הסיבות הבאות:\n
[REASON].\n
למידע נוסף ניתן ליצור קשר עם מנהל האתר ".$settings['siteemail'].".\n
".$settings['siteusername'];

$locale['email_secban_subject'] = "חשבונך באתר ".$settings['sitename']." נחסם";
$locale['email_secban_message'] = "שלום [USER_NAME],\n
חשבונך באתר ".$settings['sitename']." נחסם על ידי ".$userdata['user_name']." בשל פעולות ששויכו אליך או לשם המשתמש שלך והנן פעולות המסכנות את אבטחת האתר.\n
למידע נוסף ניתן ליצור קשר עם מנהל האתר ".$settings['siteemail'].".\n
".$settings['siteusername'];

$locale['email_suspend_subject'] = "חשבונך באתר ".$settings['sitename']." הושהה";
$locale['email_suspend_message'] = "שלום [USER_NAME],\n
חשבונך באתר ".$settings['sitename']." הושהה על ידי ".$userdata['user_name']." עד תאריך [DATE] (בזמן אתר) בשל הסיבות הבאות:\n
[REASON].\n
למידע נוסף ניתן ליצור קשר עם מנהל האתר ".$settings['siteemail'].".\n
".$settings['siteusername'];
?>