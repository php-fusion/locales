<?php

/**
* Turkish Language Fileset
* Terc&#252;me: Arda K&#305;l&#305;&#231;da&#287;&#305; (SoulSmasher)
* Email: phpfusionturkiye@gmail.com
* Web: http://www.phpfusionturkiye.com
*/

// Locale Settings
setlocale(LC_TIME, "tr_TR.UTF-8"); // Linux Server (Windows may differ)
$locale['charset'] = "UTF-8";
$locale['xml_lang'] = "tr";
$locale['tinymce'] = "tr";
$locale['phpmailer'] = "tr";

// Full & Short Months
$locale['months'] = "&nbsp|Ocak|&#350;ubat|Mart|Nisan|May&#305;s|Haziran|Temmuz|A&#287;ustos|Eyl&#252;l|Ekim|Kas&#305;m|Aral&#305;k";
$locale['shortmonths'] = "&nbsp|Ock|&#350;bt|Mar|Nis|May|Haz|Tem|A&#287;us|Eyl|Eki|Kas|Arlk";

// Standard User Levels
$locale['user0'] = "Genel";
$locale['user1'] = "&#220;ye";
$locale['user2'] = "Y&#246;netici";
$locale['user3'] = "S&#252;per Y&#246;netici";
$locale['user_na'] = "YOK";
$locale['user_anonymous'] = "Anonim &#220;ye";
// Standard User Status
$locale['status0'] = "Aktif";
$locale['status1'] = "Engellenmi&#351;";
$locale['status2'] = "&#304;naktif Edilmi&#351;";
$locale['status3'] = "Ge&#231;ici banlanm&#305;&#351;";
$locale['status4'] = "G&#252;venlik Ban&#305; Uygulanm&#305;&#351;";
$locale['status5'] = "&#304;ptal Edilmi&#351;";
$locale['status6'] = "Anonim";
$locale['status7'] = "Deaktif";
$locale['status8'] = "&#304;naktif";
// Forum Moderator Level(s)
$locale['userf1'] = "Moderat&#246;r";
// Navigation
$locale['global_001'] = "Ana Men&#252;";
$locale['global_002'] = "Kay&#305;tl&#305; Link Yok\n";
// Users Online
$locale['global_010'] = "&#199;evrimi&#231;i Kullan&#305;c&#305;lar";
$locale['global_011'] = "&#199;evrimi&#231;i Ziyaret&#231;iler";
$locale['global_012'] = "&#199;evrimi&#231;i &#220;yeler";
$locale['global_013'] = "&#199;evrimi&#231;i &#220;ye Yok";
$locale['global_014'] = "Toplam &#220;ye Say&#305;s&#305;";
$locale['global_015'] = "Aktif Edilmemi&#351; &#220;ye Say&#305;s&#305;";
$locale['global_016'] = "En Yeni &#220;ye";
// Forum Side panel
$locale['global_020'] = "Forum Ba&#351;l&#305;klar&#305;";
$locale['global_021'] = "En Yeni Forum Ba&#351;l&#305;klar&#305;";
$locale['global_022'] = "En Fazla &#304;lgilenilen Ba&#351;l&#305;klar";
$locale['global_023'] = "Hen&#252;z Ba&#351;l&#305;k Olu&#351;turulmam&#305;&#351;.";
// Comments Side panel
$locale['global_025'] = "Son Yorumlar";
$locale['global_026'] = "Hi&#231; yorum girilmemi&#351;";
// Articles Side panel
$locale['global_030'] = "En Son Makaleler";
$locale['global_031'] = "Makale Bulunamad&#305;";
// Downloads Side panel
$locale['global_032'] = "Son Eklenen Dosyalar";
$locale['global_033'] = "Hi&#231; Dosya Bulunamad&#305;";
// Welcome panel
$locale['global_035'] = "Ho&#351; Geldiniz";
// Latest Active Forum Threads panel
$locale['global_040'] = "En Son Aktif Forum Ba&#351;l&#305;klar&#305;";
$locale['global_041'] = "Yeni Ba&#351;l&#305;klar&#305;m";
$locale['global_042'] = "Yeni Forum Mesajlar&#305;m";
$locale['global_043'] = "Yeni Mesajlar";
$locale['global_044'] = "Ba&#351;l&#305;k";
$locale['global_045'] = "G&#246;sterim";
$locale['global_046'] = "Cevaplar";
$locale['global_047'] = "En Son Mesaj";
$locale['global_048'] = "Forum";
$locale['global_049'] = "G&#246;nderen";
$locale['global_050'] = "Yazar";
$locale['global_051'] = "Anket";
$locale['global_052'] = "Ta&#351;&#305;nd&#305;";
$locale['global_053'] = "Hi&#231; forum ba&#351;l&#305;&#287;&#305; olu&#351;turmam&#305;&#351;s&#305;n&#305;z.";
$locale['global_054'] = "Foruma hi&#231; mesaj g&#246;ndermemi&#351;siniz.";
$locale['global_055'] = "En son giri&#351;inizden beri %u yeni mesaj, %u farkl&#305; ba&#351;l&#305;k i&#231;erisinde bulunmakta.";
$locale['global_056'] = "Takip Etti&#287;im Ba&#351;l&#305;klar";
$locale['global_057'] = "Se&#231;enekler";
$locale['global_058'] = "Dur";
$locale['global_059'] = "Hi&#231;bir ba&#351;l&#305;&#287;&#305; takip etmemektesiniz.";
$locale['global_060'] = "Ba&#351;l&#305;&#287;&#305; takip etmeyi durdurmak istedi&#287;inizden emin misiniz?";
// News & Articles
$locale['global_070'] = "Yazar ";
$locale['global_071'] = "- ";
$locale['global_072'] = "Devam&#305;";
$locale['global_073'] = " Yorum";
$locale['global_073b'] = " Yorum";
$locale['global_074'] = " Okunma";
$locale['global_075'] = "Yazd&#305;r";
$locale['global_076'] = "D&#252;zenle";
$locale['global_077'] = "Haberler";
$locale['global_078'] = "Hen&#252;z Hi&#231; Haber G&#246;nderilmemi&#351;.";
$locale['global_079'] = "Kategori: ";
$locale['global_080'] = "Kategorisiz";
// Page Navigation
$locale['global_090'] = "&#214;nceki";
$locale['global_091'] = "Sonraki";
$locale['global_092'] = "Sayfa ";
$locale['global_093'] = " - ";
// Guest User Menu
$locale['global_100'] = "&#220;ye Giri&#351;i";
$locale['global_101'] = "Kullan&#305;c&#305; Ad&#305;";
$locale['global_102'] = "Parola";
$locale['global_103'] = "Beni Hat&#305;rla";
$locale['global_104'] = "Giri&#351;";
$locale['global_105'] = "Hen&#252;z &#220;ye De&#287;il Misiniz?<br /><a href='".BASEDIR."register.php' class='side'>Buraya T&#305;klayarak</a> &#220;ye Olabilirsiniz.";
$locale['global_106'] = "Parolan&#305;z&#305; M&#305; Unuttunuz?<br /><a href='".BASEDIR."lostpassword.php' class='side'>Buraya T&#305;klay&#305;n</a>";
$locale['global_107'] = "Kaydol";
$locale['global_108'] = "Kay&#305;p Parola";
// Member User Menu
$locale['global_120'] = "Profil D&#252;zenle";
$locale['global_121'] = "&#214;zel Mesajlar";
$locale['global_122'] = "&#220;ye Listesi";
$locale['global_123'] = "Y&#246;netici Paneli";
$locale['global_124'] = "&#199;&#305;k&#305;&#351;";
$locale['global_125'] = "%u yeni &#246;zel ";
$locale['global_126'] = "mesaj&#305;n&#305;z var";
$locale['global_127'] = "mesaj&#305;n&#305;z var";
$locale['global_128'] = "&#246;neri";
$locale['global_129'] = "&#246;neri";
// Poll
$locale['global_130'] = "Anket";
$locale['global_131'] = "Oy Ver";
$locale['global_132'] = "Oy vermek i&#231;in &#252;ye giri&#351;i yapm&#305;&#351; olman&#305;z gerekmektedir.";
$locale['global_133'] = "Oy";
$locale['global_134'] = "Oy";
$locale['global_135'] = "Oy: ";
$locale['global_136'] = "Ba&#351;lama Tarihi: ";
$locale['global_137'] = "Biti&#351; Tarihi: ";
$locale['global_138'] = "Anket Ar&#351;ivi";
$locale['global_139'] = "Listeden g&#246;sterilecek bir anket se&#231;in:";
$locale['global_140'] = "G&#246;r&#252;nt&#252;le";
$locale['global_141'] = "Anketi G&#246;r&#252;nt&#252;le";
$locale['global_142'] = "Tan&#305;mlanm&#305;&#351; Anket Bulunamad&#305;.";

// Captcha
$locale['global_150'] = "Do&#287;rulama Kodu:";
$locale['global_151'] = "Do&#287;rulama Kodunu Girin:";

// Footer Counter
$locale['global_170'] = "Tekil Tiyaret&#231;i";
$locale['global_171'] = "Tekil Ziyaret&#231;i";
$locale['global_172'] = "Sayfa olu&#351;turulma s&#252;resi: %s saniye";
$locale['global_173'] = "Sorgu";
// Admin Navigation
$locale['global_180'] = "Y&#246;netici Paneli";
$locale['global_181'] = "Siteye Geri D&#246;n";
$locale['global_182'] = "<strong>Uyar&#305;</strong>: Y&#246;netici &#351;ifresi hatal&#305; veya girilmedi.";
// Miscellaneous
$locale['global_190'] = "Bak&#305;m Modu Aktif";
$locale['global_191'] = "IP adresin kara listede.";
$locale['global_192'] = "Cookie s&#252;reniz dolmu&#351; durumda, bu nedenle siteden &#231;&#305;kt&#305;n&#305;z, l&#252;tfen yeniden giri&#351; yap&#305;n."; //$locale['global_192'] = "&#199;&#305;k&#305;&#351; Yapan &#220;ye: ";
$locale['global_193'] = "Cookie olu&#351;turulamad&#305;. L&#252;tfen taray&#305;c&#305;n&#305;zda cookielere izin verildi&#287;inden emin olun."; //$locale['global_193'] = "Giri&#351; Yapan &#220;ye: ";
$locale['global_194'] = "&#220;yeli&#287;iniz Ask&#305;ya Al&#305;nm&#305;&#351;t&#305;r (Siteden Banland&#305;n&#305;z).";
$locale['global_195'] = "&#220;yeli&#287;iniz Hen&#252;z Aktif Edilmedi.";
$locale['global_196'] = "Hatal&#305; Kullan&#305;c&#305; Ad&#305; Veya &#350;ifre.";
$locale['global_197'] = "Ana Sayfaya Y&#246;nlendiriliyorsunuz, L&#252;tfen Bekleyin...<br /><br />
[ <a href='index.php'>E&#287;er beklemek istemiyorsan&#305;z buraya t&#305;klay&#305;n</a> ]";
$locale['global_198'] = "<strong>Dikkat:</strong> setup.php dosyas&#305; bulundu, l&#252;tfen hemen silin.";
$locale['global_199'] = "<strong>Dikkat:</strong> admin parolas&#305; hen&#252;z olu&#351;turulmam&#305;&#351;, <a href='".BASEDIR."edit_profile.php'>Profil D&#252;zenle</a>ye t&#305;klayarak bir tane olu&#351;turun.";
//Titles
$locale['global_200'] = " - ";
$locale['global_201'] = ": ";
$locale['global_202'] = $locale['global_200']."Arama";
$locale['global_203'] = $locale['global_200']."S.S.S";
$locale['global_204'] = $locale['global_200']."Forum";
//Themes
$locale['global_210'] = "&#304;&#231;eri&#287;e Git";
// No themes found
$locale['global_300'] = "tema bulunamad&#305;";
$locale['global_301'] = "&#220;zg&#252;n&#252;z, sayfay&#305; &#351;imdilik g&#246;r&#252;nt&#252;leyemiyoruz. Baz&#305; sorunlardan dolay&#305; sitemizde tema bulunamad&#305;. E&#287;er site y&#246;neticisi iseniz FTP y&#246;neticisi aray&#252;z&#252;n&#252;z ile <em>themes/</em> klas&#246;r&#252; alt&#305;na <em>PHP-Fusion v7</em> i&#231;in tasarlanm&#305;&#351; bir tema ekleyin. Temay&#305; y&#252;kledikten sonra <em>Ana Ayarlar</em> b&#246;l&#252;m&#252;nden teman&#305;n <em>themes/</em> d&#252;zg&#252;n y&#252;klendi&#287;ini kontrol edin. E&#287;er y&#252;kleme ba&#351;ar&#305; ile ger&#231;ekle&#351;mi&#351;se - teman&#305;n <em>Ana Ayarlar</em> b&#246;l&#252;m&#252;ndeki tema ad&#305; ile birebir &#246;rt&#252;&#351;t&#252;&#287;&#252;nden emin olun (b&#252;y&#252;k k&#252;&#231;&#252;k harflere linux temelli sunucularda &#246;zellikle dikkat edin).<br /><br />E&#287;er bu sitenin d&#252;zenli kullan&#305;c&#305;lar&#305;ndansan&#305;z, l&#252;tfen site y&#246;neticisine ".hide_email($settings['siteemail'])." e-mail adresi ile ula&#351;&#305;p hatay&#305; bildirin.";
$locale['global_302'] = "Ana Ayarlarda Se&#231;ilen Tema Bulunmamakta veya Dosyalar&#305; Eksik!";
// JavaScript Not Enabled
$locale['global_303'] = "Ah, hay&#305;r, <strong>JavaScript</strong> nerede?<br />&#304;nternet taray&#305;c&#305;n&#305;zda JavaScript aktif edilmemi&#351;, ya da JavaScript desteklemiyor. L&#252;tfen sitemizi d&#252;zg&#252;n g&#246;r&#252;nt&#252;leyebilmek i&#231;in internet taray&#305;c&#305;n&#305;zda <strong>JavaScript</strong>i etkinle&#351;tirin,<br /> ya da internet taray&#305;c&#305;n&#305;z&#305; JavaScript destekleyen bir versiyona <strong>g&#252;neclleyin</strong>; <a href='http://firefox.com' rel='nofollow' title='Mozilla Firefox'>Firefox</a>, <a href='http://apple.com/safari/' rel='nofollow' title='Safari'>Safari</a>, <a href='http://opera.com' rel='nofollow' title='Opera Web Taray&#305;c&#305;s&#305;'>Opera</a>, <a href='http://www.google.com/chrome' rel='nofollow' title='Google Chrome'>Chrome</a> ya da <a href='http://www.microsoft.com/windows/internet-explorer/' rel='nofollow' title='Internet Explorer'>Internet Explorer</a>'&#305;n 6 dan sonraki g&#252;ncel bir s&#252;r&#252;m&#252;n&#252; edinin.";

// User Management
// Member status
$locale['global_400'] = "ask&#305;ya al&#305;nm&#305;&#351; (ge&#231;ici banlanm&#305;&#351;)";
$locale['global_401'] = "banlanm&#305;&#351;";
$locale['global_402'] = "inaktif edilmi&#351;";
$locale['global_403'] = "hesap durdurulmu&#351;";
$locale['global_404'] = "hesap anonim hale d&#246;n&#252;&#351;t&#252;r&#252;lm&#252;&#351;";
$locale['global_405'] = "anonim &#252;ye";
$locale['global_406'] = "Bu hesap &#351;u sebepten dolay&#305; banlanm&#305;&#351;t&#305;r:";
$locale['global_407'] = "Bu hesap &#351;u tarihe kadar ask&#305;ya al&#305;nm&#305;&#351;t&#305;r: ";
$locale['global_408'] = ", sebebi:";
$locale['global_409'] = "Bu hesap g&#252;venlik gerek&#231;esi ile banlanm&#305;&#351;t&#305;r.";
$locale['global_410'] = "Bunun sebebi: ";
$locale['global_411'] = "Bu hesap iptal edilmi&#351;tir.";
$locale['global_412'] = "Bu hesap muhtemelen inaktiflikten dolay&#305; anonim hale d&#246;n&#252;&#351;t&#252;r&#252;lm&#252;&#351;.";
// Banning due to flooding
$locale['global_440'] = "Flood (arka arkaya mesaj) Kontrol Sistemi Taraf&#305;ndan Otomatik Banlanma.";
$locale['global_441'] = $settings['sitename']." &#252;zerindeki &#252;yeli&#287;iniz banland&#305;";
$locale['global_442'] = "Merhaba [USER_NAME],\n
Sitemiz olan ".$settings['sitename']." adresinde &#252;yeli&#287;iniz arka arkaya pek &#231;ok i&#231;eri&#287;in IP adresiniz olan ".USER_IP." h&#305;zl&#305;ca girildi&#287;ini fark etti, ve de &#252;yeli&#287;iniz banlad&#305;. Bu koruman&#305;n sebebi sitemize botlar&#305;n spam mesaj g&#246;ndermelerini engellemektir.\n
E&#287;er g&#252;venlik sistemindeki olas&#305; bir hatan&#305;n sizi yanl&#305;&#351;l&#305;kla engelledi&#287;ini d&#252;&#351;&#252;n&#252;yorsan&#305;z l&#252;tfen ".$settings['siteemail']." elektronik posta adresi arac&#305;l&#305;&#287;&#305; ile site y&#246;neticileri ile irtibata ge&#231;in.\n
".$settings['siteusername'];
// Lifting of suspension
$locale['global_450'] = "&#220;yelik ask&#305;n&#305;z sona erdi (ge&#231;ici ban s&#252;reniz bitti)";
$locale['global_451'] = $settings['sitename']." &#252;zerindeki ge&#231;ici ban&#305;n&#305;z kald&#305;r&#305;lm&#305;&#351;t&#305;r";
$locale['global_452'] = "Merhaba USER_NAME,\n
".$settings['siteurl']." &#252;zerindeki &#252;yelik ask&#305;n&#305;z sona ermi&#351;, ge&#231;ici ban&#305;n&#305;z kald&#305;r&#305;lm&#305;&#351;t&#305;r. Sitemize giri&#351; bilgileriniz a&#351;a&#287;&#305;dad&#305;r:\n
Kullan&#305;z&#305; Ad&#305;: USER_NAME
Parola: G&#252;venlik sebebi ile gizlenmi&#351;tir\n
E&#287;er parolan&#305;z&#305; unuttuysan&#305;z &#351;u linke t&#305;klayarak s&#305;f&#305;rlayabilirsiniz: LOST_PASSWORD\n\n
Sayg&#305;lar&#305;m&#305;zla,\n
".$settings['siteusername'];
$locale['global_453'] = "Merhaba USER_NAME,\n
".$settings['siteurl']." &#252;zerindeki &#252;yelik ask&#305;n&#305;z sona ermi&#351;tir.\n\n
Sayg&#305;lar&#305;m&#305;zla,\n
".$settings['siteusername'];
$locale['global_454'] = $settings['sitename']." &#252;zerindeki hesab&#305;n&#305;z yeniden aktifle&#351;tirilmi&#351;tir";
$locale['global_455'] = "Merhaba USER_NAME,\n
".$settings['siteurl']." adresi &#252;zerinden sitemize yapt&#305;&#287;&#305;n&#305;z son giri&#351; &#252;zerine hesab&#305;n&#305;z yeniden aktif konuma getirilmi&#351;, ve de inaktif ibresi kald&#305;r&#305;lm&#305;&#351;t&#305;r.\n\n
Sayg&#305;lar&#305;m&#305;zla,\n
".$settings['siteusername'];
// Function parsebytesize()
$locale['global_460'] = "Bo&#351;";
$locale['global_461'] = "Bit";
$locale['global_462'] = "kB";
$locale['global_463'] = "MB";
$locale['global_464'] = "GB";
$locale['global_465'] = "TB";
//Safe Redirect
$locale['global_500'] = "%s sayfas&#305;na y&#246;nlendiriliyorsunuz, l&#252;tfen bekleyin. E&#287;er y&#246;nlenme ger&#231;ekle&#351;mezse buraya t&#305;klay&#305;n.";

// Captcha Locales
$locale['global_600'] = "Do&#287;rulama Kodu";
$locale['recaptcha'] = "tr";

//Miscellaneous
$locale['global_900'] = "Sekizlik (HEX) veri onluk (DEC) veriye d&#246;n&#252;&#351;t&#252;r&#252;lemedi";
$locale['global_901'] = "Sat&#305;r(lar)";
?>