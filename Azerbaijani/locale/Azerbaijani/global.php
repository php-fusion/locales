<?php
/*
Azerbaijani Language Fileset
KoLGe(Araz Eyyubov) & MoZalaN (Goshgar Mammadov)
Email: kolge_u@yahoo.com, info@qrafika.az
*/

// Locale Settings
setlocale(LC_TIME, "az","AZ"); // Linux Server (Windows may differ)
$locale['charset'] = "UTF-8";
$locale['xml_lang'] = "en";
$locale['tinymce'] = "en";
$locale['phpmailer'] = "en";

// Full & Short Months
$locale['months'] = "&nbsp|Yanvar|Fevral|Mart|Aprel|May|Iyun|Iyul|Avqust|Sentyabr|Oktyabr|Noyabr|Dekabr";
$locale['shortmonths'] = "&nbsp|Yan|Fev|Mar|Apr|May|Iyn|Iyl|Avq|Sent|Okt|Noy|Dek";

// Standard User Levels
$locale['user0'] = "Ümumi";
$locale['user1'] = "İstifadəçi";
$locale['user2'] = "İdarəçi";
$locale['user3'] = "Baş idarəçi";
// Forum Moderator Level(s)
$locale['userf1'] = "Nəzarətçi";
// Navigation
$locale['global_001'] = "Bələdçi";
$locale['global_002'] = "Keçidlər tə`yin edilməyib\n";
// Users Online
$locale['global_010'] = "Xətdəkilər";
$locale['global_011'] = "Xətdəki qonaqlar";
$locale['global_012'] = "Xətdəki istifadəçilər";
$locale['global_013'] = "Xətdə istifadəçi yoxdur";
$locale['global_014'] = "Qeydiyyatlı istifadəçilər:";
$locale['global_015'] = "Aktivləşdirilməmiş istifadəçilər:";
$locale['global_016'] = "Ən yeni istifadəçi:";
// Forum Side panel
$locale['global_020'] = "Forum bölmələri";
$locale['global_021'] = "Ən yeni bölmələr";
$locale['global_022'] = "Ən maraqlı mövzu";
$locale['global_023'] = "Bölmə açılmayıb";
// Articles Side panel
$locale['global_030'] = "Sonuncu məqalələr";
$locale['global_031'] = "Məqalə yoxdur";
// Welcome panel
$locale['global_035'] = "Xəş gəlmişsiniz";
// Latest Active Forum Threads panel
$locale['global_040'] = "Ən son aktiv forum mövzuları";
$locale['global_041'] = "Yeni mövzularım";
$locale['global_042'] = "Son ismarıclarım";
$locale['global_043'] = "Yeni ismarıclar";
$locale['global_044'] = "Mövzu";
$locale['global_045'] = "Baxılıb";
$locale['global_046'] = "Cavablar";
$locale['global_047'] = "Son ismarıc";
$locale['global_048'] = "Forum";
$locale['global_049'] = "Göndərilib";
$locale['global_050'] = "Müəllif";
$locale['global_051'] = "Sorğu";
$locale['global_052'] = "Köçürüldü";
$locale['global_053'] = "Mövzu açmamısınız.";
$locale['global_054'] = "Foruma heç ismarıc yazmamısınız.";
$locale['global_055'] = "Sonuncu dəfə daxil olunandan bəri foruma %u yeni ismarıc yazılıb.";
$locale['global_056'] = "İzlədiyim mövzular";
$locale['global_057'] = "Xüsusiyyətlər";
$locale['global_058'] = "Dayandır";
$locale['global_059'] = "Siz heç bir mövzunu izləmirsiniz.";
$locale['global_060'] = "Bu mövzunun izlənilməsi dayandırılsınmı?";
// News & Articles
$locale['global_070'] = "";
$locale['global_071'] = "tərəfindən yazılıb. Yazılma tarixi ->> ";
$locale['global_072'] = "<b>Davamını oxu</b>";
$locale['global_073'] = " dəfə rəy bildirilib";
$locale['global_073b'] = " Şərh";
$locale['global_074'] = " dəfə oxunulub";
$locale['global_075'] = "Çap et";
$locale['global_076'] = "Dəyiş";
$locale['global_077'] = "Xəbərlər";
$locale['global_078'] = "Hələ ki, xəbər əlavə edilməyib.";
// Page Navigation
$locale['global_090'] = "Əvvəlki";
$locale['global_091'] = "Sonrakı";
$locale['global_092'] = "Səhifə ";
$locale['global_093'] = " dən ";
// Guest User Menu
$locale['global_100'] = "Giriş";
$locale['global_101'] = "İstifadəçi adı";
$locale['global_102'] = "Şifrə";
$locale['global_103'] = "Məni xatırla";
$locale['global_104'] = "Daxil ol";
$locale['global_105'] = "<b><a href='".BASEDIR."register.php' class='side'>[ QEYDIYYAT ]</a></b>";
$locale['global_106'] = "<a href='".BASEDIR."lostpassword.php' class='side'> [ Şifrəmi unutmuşam ] </a></b>";
$locale['global_107'] = "Qeydiyyat";
$locale['global_108'] = "Şifrəmi unutmuşam";
// Member User Menu
$locale['global_120'] = "Şəxsi məlumatlar";
$locale['global_121'] = "Şəxsi ismarıclar";
$locale['global_122'] = "İstifadəçi siyahısı";
$locale['global_123'] = "İdarəetmə lövhəsi";
$locale['global_124'] = "Çıxış";
$locale['global_125'] = "Sizin %u yeni ";
$locale['global_126'] = "ismarıcınız var";
$locale['global_127'] = "ismarıcınız var";
// Poll
$locale['global_130'] = "Sorğu";
$locale['global_131'] = "Səs ver";
$locale['global_132'] = "Səs vermək üçün qeydiyyatlı istifadəçi kimi daxil olmalısınız.";
$locale['global_133'] = "Səs";
$locale['global_134'] = "Səs";
$locale['global_135'] = "Bütün səslərin cəmi: ";
$locale['global_136'] = "Sorğunun başlanma tarixi: ";
$locale['global_137'] = "Sorğunun bitdiyi tarixi: ";
$locale['global_138'] = "Sorğu arxivi";
$locale['global_139'] = "Siyahıdan sorğu seçin:";
$locale['global_140'] = "Baxış";
$locale['global_141'] = "Sorğuya bax";
$locale['global_142'] = "Sorğu yoxdur";
// Shoutbox
$locale['global_150'] = "Qısa ismarıclar";
$locale['global_151'] = "Adınız:";
$locale['global_152'] = "İsmarıcınız:";
$locale['global_153'] = "Göndər";
$locale['global_154'] = "İsmarıc göndərmək üçün qeydiyyatlı istifadəçi kimi daxil olmalısınız.";
$locale['global_155'] = "Arxiv";
$locale['global_156'] = "İsmarıclar göndərilməyib.";
$locale['global_157'] = "Sil";
$locale['global_158'] = "Təsdiqləmə şifrəsi:";
$locale['global_159'] = "Şifrəni daxil et:";
// Footer Counter
$locale['global_170'] = "dəfə görüntülənib";
$locale['global_171'] = "dəfə görüntülənib";
$locale['global_172'] = "Səhifə %s saniyəyə hazırlandı.";
// Admin Navigation
$locale['global_180'] = "İdarə etmə lövhəsi";
$locale['global_181'] = "Ana Səhifə";
$locale['global_182'] = "<strong>Diqqət:</strong> İdarəçi şifrəsində xəta var və ya şifrə daxil edilməmişdir.";
// Miscellaneous
$locale['global_190'] = "Sayta giriş məhdudlaşdırılmışdır";
$locale['global_191'] = "Sizin İP ünvanınız qara siyahıdadır..";
$locale['global_192'] = "<b>Saytdan çıxdınız </b> ";
$locale['global_193'] = "Sayta daxil oldunuz ";
$locale['global_194'] = "Sizin sayta girişiniz qadağan olunmuşdur.";
$locale['global_195'] = "Bu istifadəçi hesabı aktivləşdirilməmişdir.";
$locale['global_196'] = "Yanlış istifadəçi adı və ya şifrəsi.";
$locale['global_197'] = "Sizi istiqamətləndiririk...<br /><br />
Əgər gözləmək istəmirsinizsə onda [ <b><a href='index.php'>BURAYA</a></b> ] tıklayın";
$locale['global_198'] = "<strong>Diqqət:</strong> setup.php faylını təcili silin.";
$locale['global_199'] = "<strong>Diqqət:</strong> idarəçi şifrəsini qeyd etməmisiniz. <a href='".BASEDIR."edit_profile.php'>Şəxsi məlumatlar</a>a daxil olaraq şifrəni qeyd edin.";
//Titles
$locale['global_200'] = " - ";
$locale['global_201'] = ": ";
$locale['global_202'] = $locale['global_200']."Axtar";
$locale['global_203'] = $locale['global_200']."MVS";
$locale['global_204'] = $locale['global_200']."Forum";
//Themes
$locale['global_210'] = "Tərkibə get";
// No themes found
$locale['global_300'] = "Sayt görünüşü(theme) tapılmadı";
$locale['global_301'] = "Əfsuslar olsun ki, bəzi səbəblərdən səhifədə problem yaranıb. Əgər bu saytın idarəçisisinizsə PHP-Fusion v7 üçün uyğun olan bir tamaşa yükləyin. <br /><br /> Əgər saytın istifadəçisinizsə o zaman idarəçi ilə ".hide_email($settings['siteemail'])." e-mail ünvanı vasitəsi ilə əlaqə saxlayıb xətanı bildirin.";
$locale['global_302'] = "Seçilmiş sayt görünüşündə problem var.";
?>