<?php

/**
* Turkish Language Fileset
* Tercüme: Arda Kýlýçdaðý (SoulSmasher)
* Email: phpfusionturkiye@gmail.com
* Web: http://www.phpfusionturkiye.com
*/

// Locale Settings
setlocale(LC_TIME, "tr_TR"); // Linux Server (Windows may differ)
$locale['charset'] = "iso-8859-9";
$locale['xml_lang'] = "tr";
$locale['tinymce'] = "tr";
$locale['phpmailer'] = "tr";

// Full & Short Months
$locale['months'] = "&nbsp|Ocak|Þubat|Mart|Nisan|Mayýs|Haziran|Temmuz|Aðustos|Eylül|Ekim|Kasým|Aralýk";
$locale['shortmonths'] = "&nbsp|Ock|Þbt|Mar|Nis|May|Haz|Tem|Aðus|Eyl|Eki|Kas|Arlk";

// Standard User Levels
$locale['user0'] = "Genel";
$locale['user1'] = "Üye";
$locale['user2'] = "Yönetici";
$locale['user3'] = "Süper Yönetici";
$locale['user_na'] = "YOK";
$locale['user_anonymous'] = "Anonim Üye";
// Standard User Status
$locale['status0'] = "Aktif";
$locale['status1'] = "Engellenmiþ";
$locale['status2'] = "Ýnaktif Edilmiþ";
$locale['status3'] = "Geçici banlanmýþ";
$locale['status4'] = "Güvenlik Baný Uygulanmýþ";
$locale['status5'] = "Ýptal Edilmiþ";
$locale['status6'] = "Anonim";
$locale['status7'] = "Deaktif";
$locale['status8'] = "Ýnaktif";
// Forum Moderator Level(s)
$locale['userf1'] = "Moderatör";
// Navigation
$locale['global_001'] = "Ana Menü";
$locale['global_002'] = "Kayýtlý Link Yok\n";
// Users Online
$locale['global_010'] = "Çevrimiçi Kullanýcýlar";
$locale['global_011'] = "Çevrimiçi Ziyaretçiler";
$locale['global_012'] = "Çevrimiçi Üyeler";
$locale['global_013'] = "Çevrimiçi Üye Yok";
$locale['global_014'] = "Toplam Üye Sayýsý";
$locale['global_015'] = "Aktif Edilmemiþ Üye Sayýsý";
$locale['global_016'] = "En Yeni Üye";
// Forum Side panel
$locale['global_020'] = "Forum Baþlýklarý";
$locale['global_021'] = "En Yeni Forum Baþlýklarý";
$locale['global_022'] = "En Fazla Ýlgilenilen Baþlýklar";
$locale['global_023'] = "Henüz Baþlýk Oluþturulmamýþ.";
// Comments Side panel
$locale['global_025'] = "Son Yorumlar";
$locale['global_026'] = "Hiç yorum girilmemiþ";
// Articles Side panel
$locale['global_030'] = "En Son Makaleler";
$locale['global_031'] = "Makale Bulunamadý";
// Downloads Side panel
$locale['global_032'] = "Son Eklenen Dosyalar";
$locale['global_033'] = "Hiç Dosya Bulunamadý";
// Welcome panel
$locale['global_035'] = "Hoþ Geldiniz";
// Latest Active Forum Threads panel
$locale['global_040'] = "En Son Aktif Forum Baþlýklarý";
$locale['global_041'] = "Yeni Baþlýklarým";
$locale['global_042'] = "Yeni Forum Mesajlarým";
$locale['global_043'] = "Yeni Mesajlar";
$locale['global_044'] = "Baþlýk";
$locale['global_045'] = "Gösterim";
$locale['global_046'] = "Cevaplar";
$locale['global_047'] = "En Son Mesaj";
$locale['global_048'] = "Forum";
$locale['global_049'] = "Gönderen";
$locale['global_050'] = "Yazar";
$locale['global_051'] = "Anket";
$locale['global_052'] = "Taþýndý";
$locale['global_053'] = "Hiç forum baþlýðý oluþturmamýþsýnýz.";
$locale['global_054'] = "Foruma hiç mesaj göndermemiþsiniz.";
$locale['global_055'] = "En son giriþinizden beri %u yeni mesaj, %u farklý baþlýk içerisinde bulunmakta.";
$locale['global_056'] = "Takip Ettiðim Baþlýklar";
$locale['global_057'] = "Seçenekler";
$locale['global_058'] = "Dur";
$locale['global_059'] = "Hiçbir baþlýðý takip etmemektesiniz.";
$locale['global_060'] = "Baþlýðý takip etmeyi durdurmak istediðinizden emin misiniz?";
// News & Articles
$locale['global_070'] = "Yazar ";
$locale['global_071'] = "- ";
$locale['global_072'] = "Devamý";
$locale['global_073'] = " Yorum";
$locale['global_073b'] = " Yorum";
$locale['global_074'] = " Okunma";
$locale['global_075'] = "Yazdýr";
$locale['global_076'] = "Düzenle";
$locale['global_077'] = "Haberler";
$locale['global_078'] = "Henüz Hiç Haber Gönderilmemiþ.";
$locale['global_079'] = "Kategori: ";
$locale['global_080'] = "Kategorisiz";
// Page Navigation
$locale['global_090'] = "Önceki";
$locale['global_091'] = "Sonraki";
$locale['global_092'] = "Sayfa ";
$locale['global_093'] = " - ";
// Guest User Menu
$locale['global_100'] = "Üye Giriþi";
$locale['global_101'] = "Kullanýcý Adý";
$locale['global_102'] = "Parola";
$locale['global_103'] = "Beni Hatýrla";
$locale['global_104'] = "Giriþ";
$locale['global_105'] = "Henüz Üye Deðil Misiniz?<br /><a href='".BASEDIR."register.php' class='side'>Buraya Týklayarak</a> Üye Olabilirsiniz.";
$locale['global_106'] = "Parolanýzý Mý Unuttunuz?<br /><a href='".BASEDIR."lostpassword.php' class='side'>Buraya Týklayýn</a>";
$locale['global_107'] = "Kaydol";
$locale['global_108'] = "Kayýp Parola";
// Member User Menu
$locale['global_120'] = "Profil Düzenle";
$locale['global_121'] = "Özel Mesajlar";
$locale['global_122'] = "Üye Listesi";
$locale['global_123'] = "Yönetici Paneli";
$locale['global_124'] = "Çýkýþ";
$locale['global_125'] = "%u yeni özel ";
$locale['global_126'] = "mesajýnýz var";
$locale['global_127'] = "mesajýnýz var";
$locale['global_128'] = "öneri";
$locale['global_129'] = "öneri";
// Poll
$locale['global_130'] = "Anket";
$locale['global_131'] = "Oy Ver";
$locale['global_132'] = "Oy vermek için üye giriþi yapmýþ olmanýz gerekmektedir.";
$locale['global_133'] = "Oy";
$locale['global_134'] = "Oy";
$locale['global_135'] = "Oy: ";
$locale['global_136'] = "Baþlama Tarihi: ";
$locale['global_137'] = "Bitiþ Tarihi: ";
$locale['global_138'] = "Anket Arþivi";
$locale['global_139'] = "Listeden gösterilecek bir anket seçin:";
$locale['global_140'] = "Görüntüle";
$locale['global_141'] = "Anketi Görüntüle";
$locale['global_142'] = "Tanýmlanmýþ Anket Bulunamadý.";

// Captcha
$locale['global_150'] = "Doðrulama Kodu:";
$locale['global_151'] = "Doðrulama Kodunu Girin:";

// Footer Counter
$locale['global_170'] = "Tekil Tiyaretçi";
$locale['global_171'] = "Tekil Ziyaretçi";
$locale['global_172'] = "Sayfa oluþturulma süresi: %s saniye";
$locale['global_173'] = "Sorgu";
// Admin Navigation
$locale['global_180'] = "Yönetici Paneli";
$locale['global_181'] = "Siteye Geri Dön";
$locale['global_182'] = "<strong>Uyarý</strong>: Yönetici þifresi hatalý veya girilmedi.";
// Miscellaneous
$locale['global_190'] = "Bakým Modu Aktif";
$locale['global_191'] = "IP adresin kara listede.";
$locale['global_192'] = "Cookie süreniz dolmuþ durumda, bu nedenle siteden çýktýnýz, lütfen yeniden giriþ yapýn."; //$locale['global_192'] = "Çýkýþ Yapan Üye: ";
$locale['global_193'] = "Cookie oluþturulamadý. Lütfen tarayýcýnýzda cookielere izin verildiðinden emin olun."; //$locale['global_193'] = "Giriþ Yapan Üye: ";
$locale['global_194'] = "Üyeliðiniz Askýya Alýnmýþtýr (Siteden Banlandýnýz).";
$locale['global_195'] = "Üyeliðiniz Henüz Aktif Edilmedi.";
$locale['global_196'] = "Hatalý Kullanýcý Adý Veya Þifre.";
$locale['global_197'] = "Ana Sayfaya Yönlendiriliyorsunuz, Lütfen Bekleyin...<br /><br />
[ <a href='index.php'>Eðer beklemek istemiyorsanýz buraya týklayýn</a> ]";
$locale['global_198'] = "<strong>Dikkat:</strong> setup.php dosyasý bulundu, lütfen hemen silin.";
$locale['global_199'] = "<strong>Dikkat:</strong> admin parolasý henüz oluþturulmamýþ, <a href='".BASEDIR."edit_profile.php'>Profil Düzenle</a>ye týklayarak bir tane oluþturun.";
//Titles
$locale['global_200'] = " - ";
$locale['global_201'] = ": ";
$locale['global_202'] = $locale['global_200']."Arama";
$locale['global_203'] = $locale['global_200']."S.S.S";
$locale['global_204'] = $locale['global_200']."Forum";
//Themes
$locale['global_210'] = "Ýçeriðe Git";
// No themes found
$locale['global_300'] = "tema bulunamadý";
$locale['global_301'] = "Üzgünüz, sayfayý þimdilik görüntüleyemiyoruz. Bazý sorunlardan dolayý sitemizde tema bulunamadý. Eðer site yöneticisi iseniz FTP yöneticisi arayüzünüz ile <em>themes/</em> klasörü altýna <em>PHP-Fusion v7</em> için tasarlanmýþ bir tema ekleyin. Temayý yükledikten sonra <em>Ana Ayarlar</em> bölümünden temanýn <em>themes/</em> düzgün yüklendiðini kontrol edin. Eðer yükleme baþarý ile gerçekleþmiþse - temanýn <em>Ana Ayarlar</em> bölümündeki tema adý ile birebir örtüþtüðünden emin olun (büyük küçük harflere linux temelli sunucularda özellikle dikkat edin).<br /><br />Eðer bu sitenin düzenli kullanýcýlarýndansanýz, lütfen site yöneticisine ".hide_email($settings['siteemail'])." e-mail adresi ile ulaþýp hatayý bildirin.";
$locale['global_302'] = "Ana Ayarlarda Seçilen Tema Bulunmamakta veya Dosyalarý Eksik!";
// JavaScript Not Enabled
$locale['global_303'] = "Ah, hayýr, <strong>JavaScript</strong> nerede?<br />Ýnternet tarayýcýnýzda JavaScript aktif edilmemiþ, ya da JavaScript desteklemiyor. Lütfen sitemizi düzgün görüntüleyebilmek için internet tarayýcýnýzda <strong>JavaScript</strong>i etkinleþtirin,<br /> ya da internet tarayýcýnýzý JavaScript destekleyen bir versiyona <strong>güneclleyin</strong>; <a href='http://firefox.com' rel='nofollow' title='Mozilla Firefox'>Firefox</a>, <a href='http://apple.com/safari/' rel='nofollow' title='Safari'>Safari</a>, <a href='http://opera.com' rel='nofollow' title='Opera Web Tarayýcýsý'>Opera</a>, <a href='http://www.google.com/chrome' rel='nofollow' title='Google Chrome'>Chrome</a> ya da <a href='http://www.microsoft.com/windows/internet-explorer/' rel='nofollow' title='Internet Explorer'>Internet Explorer</a>'ýn 6 dan sonraki güncel bir sürümünü edinin.";

// User Management
// Member status
$locale['global_400'] = "askýya alýnmýþ (geçici banlanmýþ)";
$locale['global_401'] = "banlanmýþ";
$locale['global_402'] = "inaktif edilmiþ";
$locale['global_403'] = "hesap durdurulmuþ";
$locale['global_404'] = "hesap anonim hale dönüþtürülmüþ";
$locale['global_405'] = "anonim üye";
$locale['global_406'] = "Bu hesap þu sebepten dolayý banlanmýþtýr:";
$locale['global_407'] = "Bu hesap þu tarihe kadar askýya alýnmýþtýr: ";
$locale['global_408'] = ", sebebi:";
$locale['global_409'] = "Bu hesap güvenlik gerekçesi ile banlanmýþtýr.";
$locale['global_410'] = "Bunun sebebi: ";
$locale['global_411'] = "Bu hesap iptal edilmiþtir.";
$locale['global_412'] = "Bu hesap muhtemelen inaktiflikten dolayý anonim hale dönüþtürülmüþ.";
// Banning due to flooding
$locale['global_440'] = "Flood (arka arkaya mesaj) Kontrol Sistemi Tarafýndan Otomatik Banlanma.";
$locale['global_441'] = $settings['sitename']." üzerindeki üyeliðiniz banlandý";
$locale['global_442'] = "Merhaba [USER_NAME],\n
Sitemiz olan ".$settings['sitename']." adresinde üyeliðiniz arka arkaya pek çok içeriðin IP adresiniz olan ".USER_IP." hýzlýca girildiðini fark etti, ve de üyeliðiniz banladý. Bu korumanýn sebebi sitemize botlarýn spam mesaj göndermelerini engellemektir.\n
Eðer güvenlik sistemindeki olasý bir hatanýn sizi yanlýþlýkla engellediðini düþünüyorsanýz lütfen ".$settings['siteemail']." elektronik posta adresi aracýlýðý ile site yöneticileri ile irtibata geçin.\n
".$settings['siteusername'];
// Lifting of suspension
$locale['global_450'] = "Üyelik askýnýz sona erdi (geçici ban süreniz bitti)";
$locale['global_451'] = $settings['sitename']." üzerindeki geçici banýnýz kaldýrýlmýþtýr";
$locale['global_452'] = "Merhaba USER_NAME,\n
".$settings['siteurl']." üzerindeki üyelik askýnýz sona ermiþ, geçici banýnýz kaldýrýlmýþtýr. Sitemize giriþ bilgileriniz aþaðýdadýr:\n
Kullanýzý Adý: USER_NAME
Parola: Güvenlik sebebi ile gizlenmiþtir\n
Eðer parolanýzý unuttuysanýz þu linke týklayarak sýfýrlayabilirsiniz: LOST_PASSWORD\n\n
Saygýlarýmýzla,\n
".$settings['siteusername'];
$locale['global_453'] = "Merhaba USER_NAME,\n
".$settings['siteurl']." üzerindeki üyelik askýnýz sona ermiþtir.\n\n
Saygýlarýmýzla,\n
".$settings['siteusername'];
$locale['global_454'] = $settings['sitename']." üzerindeki hesabýnýz yeniden aktifleþtirilmiþtir";
$locale['global_455'] = "Merhaba USER_NAME,\n
".$settings['siteurl']." adresi üzerinden sitemize yaptýðýnýz son giriþ üzerine hesabýnýz yeniden aktif konuma getirilmiþ, ve de inaktif ibresi kaldýrýlmýþtýr.\n\n
Saygýlarýmýzla,\n
".$settings['siteusername'];
// Function parsebytesize()
$locale['global_460'] = "Boþ";
$locale['global_461'] = "Bit";
$locale['global_462'] = "kB";
$locale['global_463'] = "MB";
$locale['global_464'] = "GB";
$locale['global_465'] = "TB";
//Safe Redirect
$locale['global_500'] = "%s sayfasýna yönlendiriliyorsunuz, lütfen bekleyin. Eðer yönlenme gerçekleþmezse buraya týklayýn.";

// Captcha Locales
$locale['global_600'] = "Doðrulama Kodu";
$locale['recaptcha'] = "tr";

//Miscellaneous
$locale['global_900'] = "Sekizlik (HEX) veri onluk (DEC) veriye dönüþtürülemedi";
$locale['global_901'] = "Satýr(lar)";
?>