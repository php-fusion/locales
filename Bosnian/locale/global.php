<?php
/*
Bosnian Language Fileset
Produced by Hame B (hame)
Email: hame@portalbih.com
Web: http://www.portalbih.com
*/

// Locale Settings
setlocale(LC_TIME, "bs_BS"); // Linux Server (Windows may differ)
$locale['charset'] = "iso-8859-1";
$locale['xml_lang'] = "en";
$locale['tinymce'] = "en";
$locale['phpmailer'] = "en";

// Full & Short Months
$locale['months'] = "&nbsp|Januar|Februar|Mart|April|Maj|Juni|Juli|Avgust|Septembar|Oktobar|Novembar|Decembar";
$locale['shortmonths'] = "&nbsp|Jan|Feb|Mar|Apr|Maj|Jun|Jul|Avg|Sept|Okt|Nov|Dec";

// Standard User Levels
$locale['user0'] = "Gosti";
$locale['user1'] = "Clanovi";
$locale['user2'] = "Administrator";
$locale['user3'] = "Super Administrator";
// Forum Moderator Level(s)
$locale['userf1'] = "Moderator";
// Navigation
$locale['global_001'] = "Navigacija";
$locale['global_002'] = "Nema Linkova";
// Users Online
$locale['global_010'] = "Korisnika Online";
$locale['global_011'] = "Gosti Online";
$locale['global_012'] = "Clanova Online";
$locale['global_013'] = "Nema Clanova Online";
$locale['global_014'] = "Ukupno Korisnika";
$locale['global_015'] = "Neaktivni Clanova";
$locale['global_016'] = "Najnovi Clan";
// Forum Side panel
$locale['global_020'] = "Forumske Teme";
$locale['global_021'] = "Nove Teme";
$locale['global_022'] = "Popularne Teme";
$locale['global_023'] = "Nema Napravljeni Tema";
// Articles Side panel
$locale['global_030'] = "Zadnji Tekstovi";
$locale['global_031'] = "Nema Tekstova";
// Welcome panel
$locale['global_035'] = "Dobro Došli";
// Latest Active Forum Threads panel
$locale['global_040'] = "Zadnje Aktivne Forumske Teme";
$locale['global_041'] = "Moje Zadnje Teme";
$locale['global_042'] = "Moji Zadnji Postovi";
$locale['global_043'] = "Novi Postovi";
$locale['global_044'] = "Tema";
$locale['global_045'] = "Pregleda";
$locale['global_046'] = "Odgovora";
$locale['global_047'] = "Zadnji Post";
$locale['global_048'] = "Forum";
$locale['global_049'] = "Postavljeno";
$locale['global_050'] = "Dodao(la)";
$locale['global_051'] = "Anketa";
$locale['global_052'] = "Prosmjereno";
$locale['global_053'] = "Niste još poceli nijednu Forumsku Temu.";
$locale['global_054'] = "Niste još dodali nijednu Poruku u Forum.";
$locale['global_055'] = "Trenutno se nalazi %u novi Postova od vaše zadnje Posjete.";
$locale['global_056'] = "Teme Koje Pratite";
$locale['global_057'] = "Opcije";
$locale['global_058'] = "Prekini";
$locale['global_059'] = "Nepratite nijednu Temu.";
$locale['global_060'] = "Prekini Pratiti ovu Temu?";
// News & Articles
$locale['global_070'] = "Postavio(la) ";
$locale['global_071'] = "u ";
$locale['global_072'] = "Citaj Dalje";
$locale['global_073'] = " Komentari";
$locale['global_073b'] = " Komentar";
$locale['global_074'] = " Procita";
$locale['global_075'] = "Printaj";
$locale['global_076'] = "Izmjeni";
$locale['global_077'] = "Novosti";
$locale['global_078'] = "Nema Postavljeni Novosti";
// Page Navigation
$locale['global_090'] = "Zadnja";
$locale['global_091'] = "Sledeca";
$locale['global_092'] = "Strana ";
$locale['global_093'] = " od ";
// Guest User Menu
$locale['global_100'] = "Logiranje";
$locale['global_101'] = "Korisnicko Ime";
$locale['global_102'] = "Lozinka";
$locale['global_103'] = "Zapamti Me";
$locale['global_104'] = "Logiranje";
$locale['global_105'] = "Još Niste Clan?<br /><a href='".BASEDIR."register.php' class='side'>Kliknite Ovde</a> da se Registrujete.";
$locale['global_106'] = "Zaboravljena Lozinka?<br />Zatrazite Novu <a href='".BASEDIR."lostpassword.php' class='side'>Ovde</a>.";
$locale['global_107'] = "Registruj Se";
$locale['global_108'] = "Zaboravljena Lozinka";
// Member User Menu
$locale['global_120'] = "Izmjeni Nalog";
$locale['global_121'] = "Privatne Poruke";
$locale['global_122'] = "Lista Clanova";
$locale['global_123'] = "Admin Panel";
$locale['global_124'] = "Izlogiranje";
$locale['global_125'] = "Imate %u novu(e)) ";
$locale['global_126'] = "poruka";
$locale['global_127'] = "poruke";
// Poll
$locale['global_130'] = "Anketa";
$locale['global_131'] = "Pošalji Glas";
$locale['global_132'] = "Morate se Logirati da glasate.";
$locale['global_133'] = "Glasaj";
$locale['global_134'] = "Glasova";
$locale['global_135'] = "Glasova: ";
$locale['global_136'] = "Poceto: ";
$locale['global_137'] = "Završeno: ";
$locale['global_138'] = "Arhiva Anketa";
$locale['global_139'] = "Izaberite Anketu sa Liste:";
$locale['global_140'] = "Pogledaj";
$locale['global_141'] = "Pogledaj Anketu";
$locale['global_142'] = "Nema Anketa.";
// Shoutbox
$locale['global_150'] = "Shoutbox";
$locale['global_151'] = "Ime:";
$locale['global_152'] = "Poruka:";
$locale['global_153'] = "Shout";
$locale['global_154'] = "Morate se Logirati da ostavite Poruku.";
$locale['global_155'] = "Arhiva Shoutboxa";
$locale['global_156'] = "Nema Postavljeni Poruka.";
$locale['global_157'] = "Izbriši";
$locale['global_158'] = "Kod Validacije:";
$locale['global_159'] = "Ukucajte Kod Validacije:";
// Footer Counter
$locale['global_170'] = "jedinstvena posjeta";
$locale['global_171'] = "Jedinstveni Posjeta";
$locale['global_172'] = "Otvoreno Za: %s sekunda";
// Admin Navigation
$locale['global_180'] = "Admin Glavna";
$locale['global_181'] = "Nazad na Pocetnu";
$locale['global_182'] = "<strong>Paznja:</strong> Admin Lozinka nije tacna.";
// Miscellaneous
$locale['global_190'] = "Maintenance Mode Aktiviran";
$locale['global_191'] = "Vaša IP Adresa je Zabranjena.";
$locale['global_192'] = "Izlogiramo vas kao ";
$locale['global_193'] = "Logiramo vas kao ";
$locale['global_194'] = "Ovaj Nalog je trenutno Suspendiran.";
$locale['global_195'] = "Ovaj Nalog još nije Aktiviran.";
$locale['global_196'] = "Netacno Korisnicko Ime ili Lozinka.";
$locale['global_197'] = "Sacekajte dok vas Prebacimo...<br /><br />
[ <a href='index.php'>ili kliknite ovde da necekate</a> ]";
$locale['global_198'] = "<strong>GRESKA:</strong> setup.php pronadjen, morate ovaj fajl odma izbrisati.";
$locale['global_199'] = "<strong>GRESKA:</strong> admin lozinka nije postavljena, klikni <a href='".BASEDIR."edit_profile.php'>Izmjeni Nalog</a> da ga postavite.";
//Titles
$locale['global_200'] = " - ";
$locale['global_201'] = ": ";
$locale['global_202'] = $locale['global_200']."Pretraga";
$locale['global_203'] = $locale['global_200']."PPP";
$locale['global_204'] = $locale['global_200']."Forum";
//Themes
$locale['global_210'] = "Skoci na Kontent";
// No themes found
$locale['global_300'] = "nismo nasli Izgled";
$locale['global_301'] = "Zao nam je, ali smo pronasli gresku u THEME morate dodati dizajn koji je za <em>PHP-Fusion v7</em>u <em>themes/</em> folder. Posle uploada pregledaj <em>Main Settings</em> da provjerite dali je dizajn uspjesno dodan u vasu <em>themes/</em> direktoru. Uploadirani dizajn mora imati isti naziv foldera (takodje pratite MaLa i VeLiKa SlOvA) kao u <em>Main Settings</em> strani.<br /><br />Ako ste Clan, molimo vas prijavite ovo site\'s administratoru putem ".hide_email($settings['siteemail'])." emaila i prijavite gresku.";
$locale['global_302'] = "Izabrani dizajn nepostoji ili nije kompletan!";
?>
