<?php
/*
Hindi Language Fileset
Made by Ankur Thakur
Email: thakurboyz2007@gmail.com
Web: http://php-fusion.in
*/

// Locale Settings
// setlocale(LC_TIME, "en","GB"); // Linux Server (Windows may differ)
setlocale(LC_TIME, "hi_IN"); // For Hindi
$locale['charset'] = "utf-8";
$locale['xml_lang'] = "hi";
$locale['tinymce'] = "hi";
$locale['phpmailer'] = "hi";

// Full & Short Months
$locale['months'] = "&nbsp|जनवरी|फरवरी|मार्च|अप्रैल|मई|जून|जुलाई|अगस्त|सितंबर|अक्टूबर|नवंबर|दिसंबर";
$locale['shortmonths'] = "&nbsp|जनवरी|फरवरी|मार्च|अप्रैल|मई|जून|जुलाई|अगस्त|सितंबर|अक्टूबर|नवंबर|दिसंबर";

// Standard User Levels
$locale['user0'] = "सार्वजनिक";
$locale['user1'] = "सदस्य";
$locale['user2'] = "व्यवस्थापक";
$locale['user3'] = "प्रशासक";
$locale['user_na'] = "उपलब्ध नहीं";
$locale['user_anonymous'] = "गुमनाम उपयोगकर्ता";
// Standard User Status
$locale['status0'] = "सक्रिय";
$locale['status1'] = "प्रतिबंधित";
$locale['status2'] = "सक्रिय नहीं";
$locale['status3'] = "निलंबित";
$locale['status4'] = "सुरक्षा प्रतिबंध";
$locale['status5'] = "रद्द";
$locale['status6'] = "गुमनाम";
$locale['status7'] = "निष्क्रिय";
$locale['status8'] = "निष्क्रिय";
// Forum Moderator Level(s)
$locale['userf1'] = "मध्यस्थ";
// Navigation
$locale['global_001'] = "नेविगेशन";
$locale['global_002'] = "कोई लिंक नहीं\n";
// Users Online
$locale['global_010'] = "उपयोगकर्ता ऑनलाइन";
$locale['global_011'] = "अतिथि ऑनलाइन";
$locale['global_012'] = "सदस्य ऑनलाइन";
$locale['global_013'] = "कोई सदस्य ऑनलाइन नहीं";
$locale['global_014'] = "कुल सदस्य";
$locale['global_015'] = "सदस्य सक्रिय नहीं";
$locale['global_016'] = "नवीन सदस्य";
// Forum Side panel
$locale['global_020'] = "चर्चा विषय";
$locale['global_021'] = "नवीन विषय";
$locale['global_022'] = "मसालेदार विषय";
$locale['global_023'] = "कोई विषय नहीं";
// Comments Side panel
$locale['global_025'] = "नई टिप्पणियां";
$locale['global_026'] = "कोई टिप्पणी उपलब्ध नहीं";
// Articles Side panel
$locale['global_030'] = "नए लेख";
$locale['global_031'] = "कोई लेख उपलब्ध नहीं";
// Downloads Side panel
$locale['global_032'] = "नये डाउनलोडस";
$locale['global_033'] = "कोई डाउनलोड उपलब्ध नहीं";
// Welcome panel
$locale['global_035'] = "स्वागतम";
// Latest Active Forum Threads panel
$locale['global_040'] = "नए सक्रिय चर्चा विषय";
$locale['global_041'] = "मेरे बनाये ताज़े विषय";
$locale['global_042'] = "मेरे ताज़े पोस्ट";
$locale['global_043'] = "नए पोस्ट";
$locale['global_044'] = "चर्चा विषय";
$locale['global_045'] = "देखे गए";
$locale['global_046'] = "उत्तर दिए गए";
$locale['global_047'] = "अंतिम पोस्ट";
$locale['global_048'] = "चर्चा मंच";
$locale['global_049'] = "Posted";
$locale['global_050'] = "Author";
$locale['global_051'] = "Poll";
$locale['global_052'] = "Moved";
$locale['global_053'] = "You have not started any forum threads yet.";
$locale['global_054'] = "You have not posted any forum messages yet.";
$locale['global_055'] = "There are %u new posts in %u different threads since your last visit.";
$locale['global_056'] = "My Tracked Threads";
$locale['global_057'] = "Options";
$locale['global_058'] = "Stop";
$locale['global_059'] = "You're not tracking any threads.";
$locale['global_060'] = "Stop tracking this thread?";
// News & Articles
$locale['global_070'] = "लिखने वाला ";
$locale['global_071'] = "तिथि ";
$locale['global_072'] = "आगे पढ़ें";
$locale['global_073'] = " टिप्पणियां";
$locale['global_073b'] = " टिप्पणी";
$locale['global_074'] = " बार पढ़े गए";
$locale['global_075'] = "प्रिंट करें";
$locale['global_076'] = "संपादित करें";
$locale['global_077'] = "समाचार";
$locale['global_078'] = "कोई समाचार नहीं डाला गया";
$locale['global_079'] = "श्रेणी ";
$locale['global_080'] = "कोई श्रेणी नहीं";
// Page Navigation
$locale['global_090'] = "पीछे";
$locale['global_091'] = "आगे";
$locale['global_092'] = "पृष्ट ";
$locale['global_093'] = " से ";
// Guest User Menu
$locale['global_100'] = "लॉग इन";
$locale['global_101'] = "उपयोगकर्ता नाम";
$locale['global_102'] = "पासवर्ड";
$locale['global_103'] = "मुझे याद रखें";
$locale['global_104'] = "लॉग इन";
$locale['global_105'] = "अभी तक सदस्य नहीं?<br />रजिस्टर करने के लिए <a href='".BASEDIR."register.php' class='side'>यहाँ</a> क्लिक करें.";
$locale['global_106'] = "पासवर्ड भूल गए?<br />नए पासवर्ड <a href='".BASEDIR."lostpassword.php' class='side'>यहाँ</a> अनुरोध करें.";
$locale['global_107'] = "रजिस्टर करें";
$locale['global_108'] = "पासवर्ड भूल गए";
// Member User Menu
$locale['global_120'] = "प्रोफाइल संपादित करें";
$locale['global_121'] = "निजी संदेश";
$locale['global_122'] = "सदस्यों की सूची";
$locale['global_123'] = "प्रशासन स्थान";
$locale['global_124'] = "लॉग आउट करें";
$locale['global_125'] = "आपके लिए %u नए ";
$locale['global_126'] = "निजी संदेश है.";
$locale['global_127'] = "निजी संदेश हैं";
$locale['global_128'] = "सुझाव है.";
$locale['global_129'] = "सुझाव हैं.";
// Poll
$locale['global_130'] = "Member Poll";
$locale['global_131'] = "Submit Vote";
$locale['global_132'] = "You must login to vote.";
$locale['global_133'] = "Vote";
$locale['global_134'] = "Votes";
$locale['global_135'] = "Votes: ";
$locale['global_136'] = "Started: ";
$locale['global_137'] = "Ended: ";
$locale['global_138'] = "Polls Archive";
$locale['global_139'] = "Select a Poll to view from the list:";
$locale['global_140'] = "View";
$locale['global_141'] = "View Poll";
$locale['global_142'] = "There are no polls defined.";

// Captcha
$locale['global_150'] = "Validation Code:";
$locale['global_151'] = "Enter Validation Code:";

// Footer Counter
$locale['global_170'] = "unique visit";
$locale['global_171'] = "unique visits";
$locale['global_172'] = "Render time: %s seconds";
$locale['global_173'] = "Queries";
// Admin Navigation
$locale['global_180'] = "Admin Home";
$locale['global_181'] = "Return to Site";
$locale['global_182'] = "<strong>Notice:</strong> Admin Password not entered or incorrect.";
// Miscellaneous
$locale['global_190'] = "Maintenance Mode Activated";
$locale['global_191'] = "Your IP address is currently blacklisted.";
$locale['global_192'] = "Your user cookie has expired. Please log in again to proceed.";
$locale['global_193'] = "Could not set user cookie. Please make sure you have cookies enabled to be able to log in properly.";
$locale['global_194'] = "This account is currently suspended.";
$locale['global_195'] = "This account has not been activated.";
$locale['global_196'] = "Invalid username or password.";
$locale['global_197'] = "Please wait while we transfer you...<br /><br />
[ <a href='index.php'>Or click here if you do not wish to wait</a> ]";
$locale['global_198'] = "<strong>Warning:</strong> setup.php detected, please delete it immediately.";
$locale['global_199'] = "<strong>Warning:</strong> admin password not set, click <a href='".BASEDIR."edit_profile.php'>Edit Profile</a> to set it.";
//Titles
$locale['global_200'] = " - ";
$locale['global_201'] = ": ";
$locale['global_202'] = $locale['global_200']."Search";
$locale['global_203'] = $locale['global_200']."FAQ";
$locale['global_204'] = $locale['global_200']."Forum";
//Themes
$locale['global_210'] = "Skip to content";
// No themes found
$locale['global_300'] = "no theme found";
$locale['global_301'] = "We are really sorry but this page cannot be displayed. Due to some circumstances no site theme can be found. If you are a Site Administrator, please use your FTP client to upload any theme designed for <em>PHP-Fusion v7</em> to the <em>themes/</em> folder. After upload check in <em>Main Settings</em> to see if the selected theme was correctly uploaded to your <em>themes/</em> directory. Please note that the uploaded theme folder has to have the exact same name (including character case, which is important on Unix based servers) as chosen in <em>Main Settings</em> page.<br /><br />If you are regular member of this site, please contact the site\'s administrator via ".hide_email($settings['siteemail'])." e-mail and report this issue.";
$locale['global_302'] = "The Theme chosen in Main Settings does not exist or is incomplete!";
// JavaScript Not Enabled
$locale['global_303'] = "Oh no! Where's the <strong>JavaScript</strong>?<br />Your Web browser does not have JavaScript enabled or does not support JavaScript. Please <strong>enable JavaScript</strong> on your Web browser to properly view this Web site,<br /> or <strong>upgrade</strong> to a Web browser that does support JavaScript; <a href='http://firefox.com' rel='nofollow' title='Mozilla Firefox'>Firefox</a>, <a href='http://apple.com/safari/' rel='nofollow' title='Safari'>Safari</a>, <a href='http://opera.com' rel='nofollow' title='Opera Web Browser'>Opera</a>, <a href='http://www.google.com/chrome' rel='nofollow' title='Google Chrome'>Chrome</a> or a version of <a href='http://www.microsoft.com/windows/internet-explorer/' rel='nofollow' title='Internet Explorer'>Internet Explorer</a> newer then version 6.";
// User Management
// Member status
$locale['global_400'] = "suspended";
$locale['global_401'] = "banned";
$locale['global_402'] = "deactivated";
$locale['global_403'] = "account terminated";
$locale['global_404'] = "account anonymised";
$locale['global_405'] = "anonymous user";
$locale['global_406'] = "This account has been banned for the following reason:";
$locale['global_407'] = "This account has been suspended until ";
$locale['global_408'] = " for the following reason:";
$locale['global_409'] = "This account has been banned for security reasons.";
$locale['global_410'] = "The reason for this is: ";
$locale['global_411'] = "This account has been cancelled.";
$locale['global_412'] = "This account has been anonymized, probably because of inactivity.";
// Banning due to flooding
$locale['global_440'] = "Automatic Ban by Flood Control";
$locale['global_441'] = "Your account on ".$settings['sitename']." has been banned";
$locale['global_442'] = "Hello [USER_NAME],\n
Your account on ".$settings['sitename']." was caught posting too many items to the system in very short time from the IP ".USER_IP.", and have therefor been banned. This is done to prevent bots from submitting spam messages in rapid succession.\n
Please contact the site administrator at ".$settings['siteemail']." to have your account restored or report if this was not you causing this security ban.\n
".$settings['siteusername'];
// Lifting of suspension
$locale['global_450'] = "Suspension automatically lifted by system";
$locale['global_451'] = "Suspension lifted at ".$settings['sitename'];
$locale['global_452'] = "Hello USER_NAME,\n
The suspension of your account at ".$settings['siteurl']." has been lifted. Here are your login details:\n
Username: USER_NAME
Password: Hidden for security reasons\n
If you have forgot your password you can reset it via the following link: LOST_PASSWORD\n\n
Regards,\n
".$settings['siteusername'];
$locale['global_453'] = "Hello USER_NAME,\n
The suspension of your account at ".$settings['siteurl']." has been lifted.\n\n
Regards,\n
".$settings['siteusername'];
$locale['global_454'] = "Account reactivated at ".$settings['sitename'];
$locale['global_455'] = "Hello USER_NAME,\n
Last time you logged in your account was reactivated at ".$settings['siteurl']." and your account is no longer marked as inactive.\n\n
Regards,\n
".$settings['siteusername'];
// Function parsebytesize()
$locale['global_460'] = "Empty";
$locale['global_461'] = "Bytes";
$locale['global_462'] = "kB";
$locale['global_463'] = "MB";
$locale['global_464'] = "GB";
$locale['global_465'] = "TB";
//Safe Redirect
$locale['global_500'] = "You are being redirected to %s, please wait. If you're not redirected, click here.";

// Captcha Locales
$locale['global_600'] = "Validation Code";
$locale['recaptcha'] = "en";

//Miscellaneous
$locale['global_900'] = "Unable to convert HEX to DEC";
?>