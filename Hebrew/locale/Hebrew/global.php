<?php
/*
Hebrew Language Fileset
Produced by theNoam (English source by Nick Jones)
Email: n/a
Web: http://thenoam.com/
*/

// Locale Settings
setlocale(LC_TIME, "he","IL"); // Linux Server (Windows may differ)
$locale['charset'] = "UTF-8";
$locale['xml_lang'] = "he";
$locale['tinymce'] = "he";
$locale['phpmailer'] = "he";

// Full & Short Months
$locale['months'] = "&nbsp;|ינואר|פברואר|מרץ|אפריל|מאי|יוני|יולי|אוגוסט|ספטמבר|אוקטובר|נובמבר|דצמבר";
$locale['shortmonths'] = "&nbsp;|ינו|פבר|מרץ|אפר|מאי|יוני|יולי|אוג|ספט|אוק|נוב|דצמ";

// Standard User Levels
$locale['user0'] = "ציבורי";
$locale['user1'] = "חבר";
$locale['user2'] = "מנהל";
$locale['user3'] = "מנהל ראשי";
$locale['user_na'] = "לא קיים";
$locale['user_anonymous'] = "משתמש אנונימי";
// Forum Moderator Level(s)
$locale['userf1'] = "מודרטור";
// Navigation
$locale['global_001'] = "ניווט";
$locale['global_002'] = "לא הוגדרו קישורים\n";
// Users Online
$locale['global_010'] = "משתמשים מחוברים";
$locale['global_011'] = "אורחים מחוברים ";
$locale['global_012'] = "חברים מחוברים ";
$locale['global_013'] = "אין חברים מחוברים";
$locale['global_014'] = "חברים רשומים ";
$locale['global_015'] = "חברים ללא אקטיבציה: ";
$locale['global_016'] = "החבר החדש ביותר ";
// Forum Side panel
$locale['global_020'] = "שרשורי הפורום";
$locale['global_021'] = "שרשורים חדשים";
$locale['global_022'] = "שרשורים חמים";
$locale['global_023'] = "לא פורסמו שרשורים";
// Articles Side panel
$locale['global_030'] = "מאמרים אחרונים";
$locale['global_031'] = "לא פורסמו מאמרים";
// Welcome panel
$locale['global_035'] = "ברוכים הבאים";
// Latest Active Forum Threads panel
$locale['global_040'] = "שרשורים פעילים אחרונים";
$locale['global_041'] = "שרשורים אחרונים שלי";
$locale['global_042'] = "הודעות אחרונות שלי";
$locale['global_043'] = "הודעות חדשות";
$locale['global_044'] = "שרשור";
$locale['global_045'] = "צפיות";
$locale['global_046'] = "תגובות";
$locale['global_047'] = "תגובה אחרונה";
$locale['global_048'] = "פורום";
$locale['global_049'] = "פורסם";
$locale['global_050'] = "מחבר";
$locale['global_051'] = "סקר";
$locale['global_052'] = "הועבר";
$locale['global_053'] = "עדיין לא התחלת שרשור";
$locale['global_054'] = "עדיין לא פרסמת הודעה";
$locale['global_055'] = "קיימות %u הודעות חדשות מאז ביקורך האחרון";
$locale['global_056'] = "שרשורים במעקב";
$locale['global_057'] = "אפשרויות";
$locale['global_058'] = "הפסקה";
$locale['global_059'] = "לא נרשמו שרשורים למעקב.";
$locale['global_060'] = "האם להפסיק מעקב אחר שרשור זה?";
// News & Articles
$locale['global_070'] = "פורסם על ידי ";
$locale['global_071'] = "ב- ";
$locale['global_072'] = "המשך קריאה";
$locale['global_073'] = " תגובות";
$locale['global_073b'] = " תגובה";
$locale['global_074'] = " צפיות";
$locale['global_075'] = "הדפסה";
$locale['global_076'] = "עריכה";
$locale['global_077'] = "חדשות";
$locale['global_078'] = "לא פורסמו עדיין חדשות";
$locale['global_079'] = "ב- ";
$locale['global_080'] = "ללא קטגוריה";
// Page Navigation
$locale['global_090'] = "הקודם";
$locale['global_091'] = "הבא";
$locale['global_092'] = "עמוד ";
$locale['global_093'] = " מתוך ";
// Guest User Menu
$locale['global_100'] = "התחברות";
$locale['global_101'] = "שם משתמש";
$locale['global_102'] = "סיסמא";
$locale['global_103'] = "זכור אותי";
$locale['global_104'] = "התחברות";
$locale['global_105'] = "לא משתמש רשום?<br /><a href='".BASEDIR."register.php' class='side'>יש ללחוץ כאן</a> להרשמה";
$locale['global_106'] = "נשכחה הסיסמא?<br />ניתן לבקש סיסמא חדשה <a href='".BASEDIR."lostpassword.php' class='side'>כאן</a>.";
$locale['global_107'] = "הרשמה";
$locale['global_108'] = "סיסמא אבודה";
// Member User Menu
$locale['global_120'] = "עריכת פרופיל";
$locale['global_121'] = "הודעות חדשות";
$locale['global_122'] = "רשימת חברים";
$locale['global_123'] = "לוח ניהול";
$locale['global_124'] = "יציאה";
$locale['global_125'] = "יש %u ";
$locale['global_126'] = "הודעה חדשה";
$locale['global_127'] = "הודעות חדשות";
// Poll
$locale['global_130'] = "סקר חברים";
$locale['global_131'] = "הגשת הצבעה";
$locale['global_132'] = "יש להתחבר לצורך ההצבעה";
$locale['global_133'] = "הצבעה";
$locale['global_134'] = "הצבעות";
$locale['global_135'] = "הצבעות: ";
$locale['global_136'] = "התחלת הסקר: ";
$locale['global_137'] = "סיום הסקר: ";
$locale['global_138'] = "ארכיב הסקרים";
$locale['global_139'] = "בחירת סקר לתצוגה מתוך הרשימה:";
$locale['global_140'] = "הצגה";
$locale['global_141'] = "הצגת הסקר";
$locale['global_142'] = "לא הוגדרו סקרים.";
// Shoutbox
$locale['global_150'] = "תיבת שיחה";
$locale['global_151'] = "שם:";
$locale['global_152'] = "מסר:";
$locale['global_153'] = "שליחה";
$locale['global_154'] = "יש להתחבר לצורך שליחת מסר";
$locale['global_155'] = "ארכיב תיבת שיחה";
$locale['global_156'] = "לא פורסמו מסרים";
$locale['global_157'] = "מחיקה";
$locale['global_158'] = "קוד אימות:";
$locale['global_159'] = "הכנסת קוד אימות:";
// Footer Counter
$locale['global_170'] = "ביקור יחודי";
$locale['global_171'] = "ביקורים יחודיים";
$locale['global_172'] = "זמן יצירת העמוד: %s שניות";
$locale['global_173'] = "שאילתות";
// Admin Navigation
$locale['global_180'] = "דף ניהול ראשי";
$locale['global_181'] = "חזרה לאתר";
$locale['global_182'] = "<strong>תשומת לב:</strong> סיסמת מנהל לא הוכנסה או שאינה נכונה.";
// Miscellaneous
$locale['global_190'] = "הופעל מצב תחזוקה";
$locale['global_191'] = "כתובת ה- IP שלך נמצאת ברשימה השחורה";
$locale['global_192'] = "יציאה מהמערכת בשם ";
$locale['global_193'] = "כניסה למערכת בשם ";
$locale['global_194'] = "חשבון זה מושהה";
$locale['global_195'] = "לחשבון זה לא בוצעה אקטיבציה";
$locale['global_196'] = "שם המשתמש או הסיסמא שגויים";
$locale['global_197'] = "אנא המתינו לסיום ההעברה...<br /><br />
[ <a href='index.php'>או לחצו אם אינכם מעוניינים לחכות עוד</a> ]";
$locale['global_198'] = "<strong>הזהרה:</strong> setup.php עדיין קיים, יש למחוק אותו מיד";
$locale['global_199'] = "<strong>הזהרה:</strong> לא הוגדרה סיסמת מנהל האתר, יש ללחוץ על <a href='".BASEDIR."edit_profile.php'>עריכת הפרופיל</a> לקביעת הסיסמא.";
//Titles
$locale['global_200'] = " - ";
$locale['global_201'] = ": ";
$locale['global_202'] = $locale['global_200']."חיפוש";
$locale['global_203'] = $locale['global_200']."שאלות נבחרות";
$locale['global_204'] = $locale['global_200']."פורום";
//Themes
$locale['global_210'] = "דילוג לתוכן";
// No themes found
$locale['global_300'] = "לא נמצאה תבנית עיצוב";
$locale['global_301'] = "דף זה לא ניתן להצגה. בשל נסיבות שונות לא ניתן למצוא תבנית עיצוב. אם הנך מנהל האתר, נא השתמש ב- FTP להעלאת תבנית עיצוב עבור מערכת <em>PHP-Fusion v7</em> אל תיקיית <em>themes/</em>. לאחר העלאה יש לבדוק תחת <em>הגדרות ראשיות</em> אם תבנית העיצוב נקלטה כהלכה בתיקיית <em>themes/</em>. תשומת הלב מופנית לכך ששם תיקיית תבנית העיצוב חייב להיות זהה (כולל גודל האותיות באנגלית, שחשיבותן רבה בשרתי Unix) לשם שנבחר בממשק <em>הגדרות ראשיות</em>.<br /><br />אם הנך משתמש רגיל באתר, אנא פנה למנהל האתר בעזרת".hide_email($settings['siteemail'])." הדואר האלקטרוני ודווח לו על הבעיה.";
$locale['global_302'] = "תבנית העיצוב שנבחרה תחת הגדרות ראשיות אינה קיימת או שאינה מלאה!";
// JavaScript Not Enabled
$locale['global_303'] = "Oh no! Where's the <strong>JavaScript</strong>?<br />Your Web browser does not have JavaScript enabled or does not support JavaScript. Please <strong>enable JavaScript</strong> on your Web browser to properly view this Web site,<br /> or <strong>upgrade</strong> to a Web browser that does support JavaScript; <a href='http://firefox.com' rel='nofollow' title='Mozilla Firefox'>Firefox</a>, <a href='http://apple.com/safari/' rel='nofollow' title='Safari'>Safari</a>, <a href='http://opera.com' rel='nofollow' title='Opera Web Browser'>Opera</a>, <a href='http://www.google.com/chrome' rel='nofollow' title='Google Chrome'>Chrome</a> or a version of <a href='http://www.microsoft.com/windows/internet-explorer/' rel='nofollow' title='Internet Explorer'>Internet Explorer</a> newer then version 6.";
// User Management
// Member status
$locale['global_400'] = "מושהה";
$locale['global_401'] = "נחסם";
$locale['global_402'] = "מנוטרל";
$locale['global_403'] = "חשבון הושמד";
$locale['global_404'] = "חשבון לא מזוהה";
$locale['global_405'] = "משתמש לא מזוהה";
$locale['global_406'] = "חשבון זה נחסם מהסיבות הבאות:";
$locale['global_407'] = "חשבון זה מושהה עד ";
$locale['global_408'] = " מהסיבות הבאות:";
$locale['global_409'] = "חשבון זה נחסם מסיבות ביטחון.";
$locale['global_410'] = "הסיבה לכך הינה: ";
$locale['global_411'] = "חשבון זה בוטל.";
$locale['global_412'] = "חשבון זה הומר לחשבון לא מזוהה, כנראה בשל חוסר פעילות.";
// Banning due to flooding
$locale['global_440'] = "נחסם אוטומטית על ידי מערכת מניעת הצפה";
$locale['global_441'] = "החשבון שלך באתר ".$settings['sitename']."נחסם";
$locale['global_442'] = "שלום [USER_NAME],\n
החשבון שלך באתר ".$settings['sitename']." נתפס כשהוא מפרסם יותר מדי הודעות למערכת בזמן קצר מ- IP ".USER_IP.", לפיכך החשבון נחסם. הדבר נעשה כדי לחסום בוטים מלפרסם הודעות ספאם בכמות רבה.\n
אנא צור קשר עם מנהל אתר ".$settings['siteemail']." לביטול החסימה וכדי לדווח שלא אתה ביצעת את פרסום ההודעות.\n
".$settings['siteusername'];
// Lifting of suspension
$locale['global_450'] = "השהיה הוסרה אוטומטית על ידי המערכת";
$locale['global_451'] = "השהיה הוסרה באתר ".$settings['sitename'];
$locale['global_452'] = "שלום USER_NAME,\n
ההשהיה של חשבונך באתר ".$settings['siteurl']." הוסרה. הנה פרטי הרישום שלך:\n
שם המשתמש: USER_NAME
סיסמא: מוסתרת עקב סיבות בטחוניות\n
אם שכחת את הסיסמא שלך אתה מוזמן לקבל סיסמא חדשה בעזרת הקישור: LOST_PASSWORD\n\n
בברכה,\n
".$settings['siteusername'];
$locale['global_453'] = "שלום USER_NAME,\n
ההשהיה של חשבונך באתר ".$settings['siteurl']." הוסרה.\n\n
בברכה,\n
".$settings['siteusername'];
$locale['global_454'] = "חשבון הופעל מחדש באתר ".$settings['sitename'];
$locale['global_455'] = "שלום USER_NAME,\n
בפעם האחרונה בה נכנסת לאתר ".$settings['siteurl']." חשבונך הופעל מחדש וחשבונך לא עוד מסומן כלא פעיל.\n\n
בברכה,\n
".$settings['siteusername'];
// Function parsebytesize()
$locale['global_460'] = "ריק";
$locale['global_461'] = "Bytes";
$locale['global_462'] = "kB";
$locale['global_463'] = "MB";
$locale['global_464'] = "GB";
$locale['global_465'] = "TB";
//Safe Redirect
$locale['global_500'] = "הדף מופנה ל- %s, בבקשה סבלנות. אם האתר לא מופנה, לחצו כאן.";
// Captcha Locales
$locale['global_600'] = "קוד";
$locale['recaptcha'] = "he";

//Miscellaneous
$locale['global_900'] = "Unable to convert HEX to DEC";
?>
