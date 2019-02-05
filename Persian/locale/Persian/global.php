<?php
/*
Persian Language Fileset
Persian locale behrouz atashpeykar bonab
Email : pciranian@gmail.com
website ; www.pciranian.com
Produced by Nick Jones (Digitanium)
Email: digitanium@php-fusion.co.uk
Web: http://www.php-fusion.co.uk
*/

// Locale Settings
setlocale(LC_TIME, "fa","IR"); // Linux Server (Windows may differ)
$locale['charset'] = "utf-8";
$locale['xml_lang'] = "fa";
$locale['tinymce'] = "en";
$locale['phpmailer'] = "fa";

// Full & Short Months
$locale['months'] = "&nbsp|فروردین|اردیبهشت|خرداد|تیر|مرداد|شهریور|مهر|آبان|آذر|دی|بهمن|اسفند";
$locale['shortmonths'] = "&nbsp|فروردین|اردیبهشت|خرداد|تیر|مرداد|شهریور|مهر|آبان|آذر|دی|بهمن|اسفند";

// Standard User Levels
$locale['user0'] = "همگانی";
$locale['user1'] = "عضو";
$locale['user2'] = "مدیر";
$locale['user3'] = "مدیر کل";
$locale['user_na'] = "نا مشخص";
$locale['user_anonymous'] = "کاربر مهمان";
// Standard User Status
$locale['status0'] = "فعال";
$locale['status1'] = "مسدود سازی";
$locale['status2'] = "غیر فعال";
$locale['status3'] = "معلق کردن";
$locale['status4'] = "مسدویت امنیتی";
$locale['status5'] = "صرفنظر";
$locale['status6'] = "مهمان";
$locale['status7'] = "غیر فعال";
$locale['status8'] = "غیر فعال";
// Forum Moderator Level(s)
$locale['userf1'] = "مدیر";
// Navigation
$locale['global_001'] = "فهرست";
$locale['global_002'] = "لینکی تعریف نشده است\n";
// Users Online
$locale['global_010'] = "کاربران آنلاین";
$locale['global_011'] = "مهمانان آنلاین";
$locale['global_012'] = "اعضای آنلاین";
$locale['global_013'] = "عضوی آنلاین نیست";
$locale['global_014'] = "کل اعضا";
$locale['global_015'] = "اعضای غیرفعال";
$locale['global_016'] = "جدیدترین عضو";
// Forum Side panel
$locale['global_020'] = "موضوعات انجمن";
$locale['global_021'] = "جدیدترین موضوعات";
$locale['global_022'] = "پرطرفدارترین موضوعات";
$locale['global_023'] = "موضوعی ساخته نشده است";
// Comments Side panel
$locale['global_025'] = "آخرین نظرات";
$locale['global_026'] = "نظری ارسال نشده است";

// Articles Side panel
$locale['global_030'] = "آخرین مقالات";
$locale['global_031'] = "مقاله ای در دسترس نیست";

// Downloads Side panel
$locale['global_032'] = "آخرین دانلودها";
$locale['global_033'] = "دانلودی در دسترس نیست";
// Welcome panel
$locale['global_035'] = "خوش آمدید";
// Latest Active Forum Threads panel
$locale['global_040'] = "آخرین موضوعات فعال انجمن ها";
$locale['global_041'] = "موضوعات ارسالی من";
$locale['global_042'] = "پست های ارسالی من";
$locale['global_043'] = "جدیدترین پست ها";
$locale['global_044'] = "موضوع";
$locale['global_045'] = "دفعات نمایش";
$locale['global_046'] = "پاسخ ها";
$locale['global_047'] = "آخرین پست";
$locale['global_048'] = "تالار";
$locale['global_049'] = "ارسال شده";
$locale['global_050'] = "نویسنده";
$locale['global_051'] = "نظرسنجی";
$locale['global_052'] = "جابجا شده";
$locale['global_053'] = "تا به حال شما هیچ موضوعی را آغاز نکرده اید.";
$locale['global_054'] = "تا به حال شما هیچ پستی در انجمن نداشته اید.";
$locale['global_055'] = "پس از آخرین بازدید شما %u پست جدید وجود دارد.";
$locale['global_056'] = "موضوعات درحال پیگیری من";
$locale['global_057'] = "اختیارات";
$locale['global_058'] = "متوقف کردن";
$locale['global_059'] = "شما هیچ موضوعی را پیگیری نمی کنید.";
$locale['global_060'] = "آیا پیگیری این موضوع را متوقف می کنید؟";
// News & Articles
$locale['global_070'] = "ارسال شده توسط ";
$locale['global_071'] = "در ";
$locale['global_072'] = "ادامه متن";
$locale['global_073'] = "نظر ";
$locale['global_073b'] = "نظر";
$locale['global_074'] = " دفعه خوانده شده";
$locale['global_075'] = "جاپ";
$locale['global_076'] = "ویرایش";
$locale['global_077'] = "اخبار";
$locale['global_078'] = "هنوز خبری ارسال نشده است";
$locale['global_079'] = "در ";
$locale['global_080'] = "بدون بخش";
$locale['global_doc_001'] = "مشاهده در قالب آفیس";
// Page Navigation
$locale['global_090'] = "قبلی";
$locale['global_091'] = "بعدی";
$locale['global_092'] = "صفحه ";
$locale['global_093'] = " از ";
// Guest User Menu
$locale['global_100'] = "ورود";
$locale['global_101'] = "نام کاربری";
$locale['global_102'] = "گذرواژه";
$locale['global_103'] = " مرا بخاطر بسپار";
$locale['global_104'] = "ورود";
$locale['global_105'] = "آیا هنوز عضو نشده اید؟<br />برای ثبت نام <a href='".BASEDIR."register.php' class='side'>اینجا</a> را کلیک کنید.";
$locale['global_106'] = "آیا گذرواژه خود را فراموش کرده اید؟<br />برای درخواست یک گذرواژه جدید <a href='".BASEDIR."lostpassword.php' class='side'>اینجا</a> را کلیک کنید.";
$locale['global_107'] = "ثبت نام";
$locale['global_108'] = "بازیابی گذرواژه جدید";
// Member User Menu
$locale['global_120'] = "ویرایش مشخصات";
$locale['global_121'] = "صندوق پیام";
$locale['global_122'] = "لیست اعضاء";
$locale['global_123'] = "پنل مدیریت";
$locale['global_124'] = "خروج";
$locale['global_125'] = "شما دارید %u پيام ";
$locale['global_126'] = "پیغام";
$locale['global_127'] = "جديد";
$locale['global_128'] = "واگذاری";
$locale['global_129'] = "واگذاریها";
// Poll
$locale['global_130'] = "نظرسنجی اعضاء";
$locale['global_131'] = " ارسال رای";
$locale['global_132'] = "برای رای دادن باید وارد حساب کاربری خود شوید.";
$locale['global_133'] = "رای";
$locale['global_134'] = "رای";
$locale['global_135'] = "آراء: ";
$locale['global_136'] = "آغاز: ";
$locale['global_137'] = "پایان: ";
$locale['global_138'] = "بایگانی نظرسنجی";
$locale['global_139'] = "یک نظرسنجی برای دیدن از لیست انتخاب کنید:";
$locale['global_140'] = "نمایش";
$locale['global_141'] = "نمایش نظرسنجی";
$locale['global_142'] = "هیچ گونه نظرسنجی ساخته نشده است.";

// Captcha
$locale['global_150'] = "کدمعتبر سازی:";
$locale['global_151'] = "کد معتبر سازی را وارد کنید:";

// Footer Counter
$locale['global_170'] = "بار بازدید صورت گرفته است";
$locale['global_171'] = "بار بازدید صورت گرفته است";
$locale['global_172'] = "زمان بارگزاری صفحه: %s ثانیه";
$locale['global_173'] = " بار نمایش داده شده است";
// Admin Navigation
$locale['global_180'] = "صفحه اصلی مدیریت";
$locale['global_181'] = "بازگشت به سایت";
$locale['global_182'] = "<strong>توجه:</strong> گذرواژه مدیریت وارد نشده یا اشتباه می باشد.";
// Miscellaneous
$locale['global_190'] = "سایت در حال حاضر تعطیل است";
$locale['global_191'] = "آدرس IP شما در حال حاضر در لیست سیاه می باشد.";
$locale['global_192'] = "در حال خروج: ";
$locale['global_193'] = "در حال ورود: ";
$locale['global_194'] = "این حساب کاربری معلق می باشد.";
$locale['global_195'] = "این حساب کاربری فعال نشده است.";
$locale['global_196'] = "نام کاربری یا گذرواژه اشتباه می باشد.";
$locale['global_197'] = "لطفا چند لحظه بایستید تا شما را به صفحه اصلی برگردانیم...<br /><br />
[ <a href='index.php'>یا اگر نمی خواهید منتظر بمانید اینجا را کلیک کنید</a> ]";
$locale['global_198'] = "<strong>هشدار:</strong> فایل setup.php پیدا شد. لطفا سریع آن را حذف کنید.";
$locale['global_199'] = "<strong>هشدار:</strong> گذرواژه مدیریت تنظیم نشده است. بر روی <a href='".BASEDIR."edit_profile.php'>ویرایش مشخصات</a> کلیک کنید و آن را تنظیم کنید توجه داشته باشید که حتما گذرواژه مدیریت را به خاطر بسپارید چون در برخی از بخش های مدیریت سایت به آن نیاز خواهید داشت.";
//Titles
$locale['global_200'] = " - ";
$locale['global_201'] = ": ";
$locale['global_202'] = $locale['global_200']."جستجو";
$locale['global_203'] = $locale['global_200']."سوال و جواب متداول";
$locale['global_204'] = $locale['global_200']."تالار";
//Themes
$locale['global_210'] = "رفتن به محتوا";
// No themes found
$locale['global_300'] = "پوسته ای پیدا نشد";
$locale['global_301'] = "ما بسیار متاسفیم اما این صفحه قابل نمایش نیست. به دلایلی پوسته ای پیدا نشد. اگر شما مدیر سایت هستید از سرویس گیرنده FTP خود برای آپلود پوسته مخصوص برنامه <em>PHP-Fusion نگارش 7</em> به پوشه <em>themes/</em> استفاده کنید. بعد از آپلود بررسی کنید در <em>تنظیمات اصلی</em> که آیا پوسته انتخاب شده به درستی در دایرکتوری <em>themes/</em> آپلود شده است یا خیر. لطفا توجه کنید که پوسته آپلود شده باید دقیقا همان نامی (شامل بزرگی و کوچکی حروف که در سرورهای پایه یونیکس بسیار مهم است) که در صفحه <em>تنظیمات اصلی</em> انتخاب شده است را داشته باشد.<br /><br />اگر شما یکی از اعضای سایت هستید با مدیر سایت از طریق آدرس ایمیل ".hide_email($settings['siteemail'])." تماس براقرار کنید و این مطلب را گزارش دهید.";
$locale['global_302'] = "پوسته انتخاب شده در تنظیمات اصلی وجود ندارد یا کامل نمی باشد!";
// JavaScript Not Enabled
$locale['global_303'] = "اوه نه کجاست <strong>جاوا اسکریپت</strong>?<br />مرورگر شما نمی تواند از جاوا اسکریپت پشتیبانی کند و یا غیر فعال است. لطفا <strong>جاوا اسکریپت را فعال نمایید</strong> تا بتوانید بدرستی این سایت را مشاهده کنید,<br /> or <strong>بروز رسانی</strong> جاوا اسکریپت در مرورگر مورد علاقه شما; <a href='http://firefox.com' rel='nofollow' title='Mozilla Firefox'>Firefox</a>, <a href='http://apple.com/safari/' rel='nofollow' title='Safari'>Safari</a>, <a href='http://opera.com' rel='nofollow' title='Opera Web Browser'>Opera</a>, <a href='http://www.google.com/chrome' rel='nofollow' title='Google Chrome'>Chrome</a> or a version of <a href='http://www.microsoft.com/windows/internet-explorer/' rel='nofollow' title='Internet Explorer'>Internet Explorer</a> newer then version 6.";
// User Management
// Member status
$locale['global_400'] = "معلق";
$locale['global_401'] = "مسدود";
$locale['global_402'] = "فعالسازی مجددا";
$locale['global_403'] = "حساب فسخ";
$locale['global_404'] = "حساب مهمان";
$locale['global_405'] = "کاربر مهمان";
$locale['global_406'] = "این حساب کاربری بدلیل زیر مسدود شده است:";
$locale['global_407'] = "این حساب کاربری معلق شده است ";
$locale['global_408'] = " بنا به دلایل زیر:";
$locale['global_409'] = "این حساب کاربری بنا به دلایل امنیتی مسدود شده است.";
$locale['global_410'] = "بنا به دلیل زیر: ";
$locale['global_411'] = "این حساب کاربری فسخ شده است";
$locale['global_412'] = "این حساب کاربری به علت عدم فعالیت فسخ شده است.";
// Banning due to flooding
$locale['global_440'] = "مسددیت خودکار بنا به مسایل امنیتی";
$locale['global_441'] = "عضویت شما در ".$settings['sitename']."مسدود شد";
$locale['global_442'] = "سلام [USER_NAME],\n
عضویت شما در سایت ".$settings['sitename']." درخواستهای زیادی به سیستم وارد شده است از طرف این آی پی ".USER_IP.", و لذا ممنوع شده است برای اینکه رباطها فعالیتی در سایت نداشته باشند.\n
لطفا تماس بگیرید با مدیریت سایت ".$settings['siteemail']." اگر می خواهید حساب کاربری شما بازبینی و فعال گردد.\n
".$settings['siteusername'];
// Lifting of suspension
$locale['global_450'] = "سیستم تعلیق از حساب شما بطور خودکار برداشته شد";
$locale['global_451'] = "آزاد سازی از حساب تعلیق در".$settings['sitename'];
$locale['global_452'] = "سلام USER_NAME,\n
حساب کاربری شما در سایت ".$settings['siteurl']." آزاد شد و اطلاعات حساب کاربری شما جهت ورود به سایت به شرح زیر است:\n
نام کاربریe: USER_NAME
رمز عبور: بنا به مسایل امنیتی مخفی شده است\n
اگر شما رمز عبور خود را فراموش کرده اید ؟ بر روی گزینه فراموشی گذرواژه در سایت کلیک کنید تا رمزی جدید برای شما ارسال کنیم: LOST_PASSWORD\n\n
با تشکر,\n
".$settings['siteusername'];
$locale['global_453'] = "سلام USER_NAME,\n
حساب کاربری شما در سایت ".$settings['siteurl']." آزاد شد.\n\n
با تشکر,\n
".$settings['siteusername'];
$locale['global_454'] = "فعال سازی مجددا حساب کاربری شما در سایت".$settings['sitename'];
$locale['global_455'] = "سلام USER_NAME,\n
مدتی زیاد از آخرین ورود شما می گذرد  حساب کاربری شما  در ".$settings['siteurl']." و  برای مدتی کوتاه علامت گذاری شده است.\n\n
با تشکر,\n
".$settings['siteusername'];
// Function parsebytesize()
$locale['global_460'] = "خالی";
$locale['global_461'] = "بایت";
$locale['global_462'] = "کیلوبایت";
$locale['global_463'] = "مگابایت";
$locale['global_464'] = "گیگابایت";
$locale['global_465'] = "TB";
//Safe Redirect
$locale['global_500'] = "شما هدایت می شوید به صفحه اصلی بعد از %s, اگر نمی خواهید منتظر باشید اینجا را کلیک نمایید.";

// Captcha Locales
$locale['global_600'] = "کد معتبر سازی";
$locale['recaptcha'] = "Fa";
//Miscellaneous
$locale['global_900'] = "قادر به تبدیل  HEX به DEC نیست";

?>