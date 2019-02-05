<?php
/*
Hungarian Language Fileset
Produced by Nagy Károly (Korcsii)
Email: korcsii@php-fusion.co.uk
Web: http://www.php-fusion.co.hu
*/

// Locale Settings
setlocale(LC_TIME, "hu_HU", "hun_HUN", "hungarian", "hu");
$locale['charset'] = "iso-8859-2";
// $locale['mysql_charset'] = "latin2";
// $locale['mysql_collate'] = "latin2_hungarian_ci";
$locale['xml_lang'] = "hu";
$locale['tinymce'] = "hu";
$locale['phpmailer'] = "hu";

// Full & Short Months
$locale['months'] = "&nbsp|január|február|március|április|május|június|július|augusztus|szeptember|október|november|december";
$locale['shortmonths'] = "&nbsp|jan|febr|márc|ápr|máj|jún|júl|aug|szept|okt|nov|dec";

// Standard User Levels
$locale['user0'] = "Vendég";
$locale['user1'] = "Tag";
$locale['user2'] = "Adminisztrátor";
$locale['user3'] = "Fõadminisztrátor";
$locale['user_na'] = "N/A";
$locale['user_anonymous'] = "Anonim felhasználó";
// Standard User Status
$locale['status0'] = "Aktív";
$locale['status1'] = "Kitiltott";
$locale['status2'] = "Aktiválatlan";
$locale['status3'] = "Felfüggesztett";
$locale['status4'] = "Kitiltva (biztonság)";
$locale['status5'] = "Eltávolítva";
$locale['status6'] = "Anonimizálva";
$locale['status7'] = "Deaktivált";
$locale['status8'] = "Inaktív";
// Forum Moderator Level(s)
$locale['userf1'] = "Moderátor";
// Navigation
$locale['global_001'] = "Navigáció";
$locale['global_002'] = "Nincs megadva link\n";
// Users Online
$locale['global_010'] = "Felhasználók";
$locale['global_011'] = "Online vendégek";
$locale['global_012'] = "Online tagok";
$locale['global_013'] = "Nincs Online tag";
$locale['global_014'] = "Regisztráltak";
$locale['global_015'] = "Aktiválatlanok";
$locale['global_016'] = "Legújabb tag";
// Forum Side panel
$locale['global_020'] = "Fórumtémák";
$locale['global_021'] = "Legújabb témák";
$locale['global_022'] = "Legnépszerûbb témák";
$locale['global_023'] = "Nincs elérhetõ fórumtéma";
// Comments Side panel
$locale['global_025'] = "Legújabb hozzászólások";
$locale['global_026'] = "Nincsenek hozzászólások";
// Articles Side panel
$locale['global_030'] = "Legújabb cikkek";
$locale['global_031'] = "Nincs elérhetõ cikk";
// Downloads Side panel
$locale['global_032'] = "Legújabb letöltések";
$locale['global_033'] = "Nincs elérhetõ letöltés";
// Welcome panel
$locale['global_035'] = "Üdvözlet";
// Latest Active Forum Threads panel
$locale['global_040'] = "Utolsó aktív fórumtémák";
$locale['global_041'] = "Legutóbbi fórumtémáim";
$locale['global_042'] = "Legutóbbi hozzászólásaim";
$locale['global_043'] = "Új hozzászólások";
$locale['global_044'] = "Téma";
$locale['global_045'] = "Megnyitva";
$locale['global_046'] = "Válaszok";
$locale['global_047'] = "Utolsó üzenet";
$locale['global_048'] = "Fórum";
$locale['global_049'] = "Dátum";
$locale['global_050'] = "Szerzõ";
$locale['global_051'] = "Szavazás";
$locale['global_052'] = "Áthelyezve";
$locale['global_053'] = "Még nem indítottál egy fórumtémát sem.";
$locale['global_054'] = "Még nem írtál egy hozzászólást sem.";
$locale['global_055'] = "%u új hozzászólás érkezett %u különbözõ témában utolsó látogatásod óta.";
$locale['global_056'] = "Figyelt témáim";
$locale['global_057'] = "Lehetõségek";
$locale['global_058'] = "Eltávolítás";
$locale['global_059'] = "Jelenleg egy témát sem követsz nyomon.";
$locale['global_060'] = "Megszünteted a téma követését?";
// News & Articles
$locale['global_070'] = " ";
$locale['global_071'] = " - ";
$locale['global_072'] = "Részletek";
$locale['global_073'] = " hozzászólás";
$locale['global_073b'] = " hozzászólás";
$locale['global_074'] = " megnyitás";
$locale['global_075'] = "Nyomtatás";
$locale['global_076'] = "Szerkesztés";
$locale['global_077'] = "Hírek";
$locale['global_078'] = "Az oldalon jelenleg nincsenek hírek";
$locale['global_079'] = "Kategória: ";
$locale['global_080'] = "Nincs";
// Page Navigation
$locale['global_090'] = "Elõzõ";
$locale['global_091'] = "Következõ";
$locale['global_092'] = "Oldal: ";
$locale['global_093'] = " / ";
// Guest User Menu
$locale['global_100'] = "Bejelentkezés";
$locale['global_101'] = "Felhasználónév";
$locale['global_102'] = "Jelszó";
$locale['global_103'] = "Emlékezzen rám";
$locale['global_104'] = "Bejelentkezés";
$locale['global_105'] = "Még nem regisztráltál?<br /><a href='".BASEDIR."register.php' class='side'>Regisztráció</a>";
$locale['global_106'] = "Elfelejtetted jelszavad?<br /><a href='".BASEDIR."lostpassword.php' class='side'>Új jelszó kérése</a>";
$locale['global_107'] = "Regisztráció";
$locale['global_108'] = "Elfelejtett jelszó";
// Member User Menu
$locale['global_120'] = "Profil szerkesztése";
$locale['global_121'] = "Privát üzenetek";
$locale['global_122'] = "Regisztrált tagok";
$locale['global_123'] = "Adminisztráció";
$locale['global_124'] = "Kijelentkezés";
$locale['global_125'] = "%u új ";
$locale['global_126'] = "üzeneted van";
$locale['global_127'] = "üzeneted van";
$locale['global_128'] = "beküldés érkezett";
$locale['global_129'] = "beküldés érkezett";
// Poll
$locale['global_130'] = "Szavazás";
$locale['global_131'] = "Szavazok";
$locale['global_132'] = "Szavazáshoz be kell jelentkezni";
$locale['global_133'] = "Szavazat";
$locale['global_134'] = "Szavazat";
$locale['global_135'] = "Szavazatok: ";
$locale['global_136'] = "Elindult: ";
$locale['global_137'] = "Lezárult: ";
$locale['global_138'] = "Archívum";
$locale['global_139'] = "Válassz egy szavazást a listából:";
$locale['global_140'] = "Megtekintés";
$locale['global_141'] = "Szavazás eredménye";
$locale['global_142'] = "Nincs elérhetõ szavazás";

// Captcha
$locale['global_150'] = "Ellenõrzõkód:";
$locale['global_151'] = "Add meg az ellenõrzõkódot:";

// Footer Counter
$locale['global_170'] = "egyedi látogató";
$locale['global_171'] = "egyedi látogató";
$locale['global_172'] = "Generálási idõ: %s másodperc";
$locale['global_173'] = "lekérdezés";
// Admin Navigation
$locale['global_180'] = "Adminisztrátori fõmenü";
$locale['global_181'] = "Fõoldal";
$locale['global_182'] = "<strong>Megjegyzés</strong>: az admin jelszó nincs megadva, vagy hibás.";
// Miscellaneous
$locale['global_190'] = "Az oldal karbantartás alatt áll";
$locale['global_191'] = "IP címed a feketelistán szerepel";
$locale['global_192'] = "Lejárt a sütid (cookie) érvényességi ideje. Kérjük jelentkezz be újra.";
$locale['global_193'] = "A bejelentkezés nem sikerült. Kérjük ellenõrizd, hogy a böngészõdben engedélyezve van-e a sütik (cookie) elfogadása.";
$locale['global_194'] = "Hozzáférésedet felfüggesztettük";
$locale['global_195'] = "Az adminisztrátorok még nem aktiválták hozzáférésedet";
$locale['global_196'] = "Hibás felhasználónév vagy jelszó";
$locale['global_197'] = "Átirányítás folyamatban...<br /><br />
[ <a href='index.php'>Kattints ide, ha nem akarsz várni</a> ]";
$locale['global_198'] = "<strong>FIGYELEM:</strong> a setup.php fájlt még nem törölted, telepítés után amint lehet töröld!";
$locale['global_199'] = "<strong>FIGYELEM:</strong> az admin jelszavad még nem állítottad be - <a href='".BASEDIR."edit_profile.php'>Profil szerkesztése</a>";
//Titles
$locale['global_200'] = " - ";
$locale['global_201'] = ": ";
$locale['global_202'] = $locale['global_200']."Keresés";
$locale['global_203'] = $locale['global_200']."GyIK";
$locale['global_204'] = $locale['global_200']."Fórum";
//Themes
$locale['global_210'] = "Ugrás az oldal tartalmához";
// No themes found
$locale['global_300'] = "nem található theme";
$locale['global_301'] = "Sajnáljuk, de nem tudjuk megjeleníteni az oldalt. Az oldalon nem található egyetlen theme (felület) sem. Ha te vagy az oldal adminisztrátora, akkor tölts fel FTP-n keresztül a szerver <em>themes/</em> mappájába bármilyen <em>PHP-Fusion v7</em> kompatibilis készült theme-t. Feltöltés után ellenõrizd az <em>Alap beállítások</em> admin oldalon, hogy az általad választott felület szerepel-e a szerver <em>themes/</em> mappájában. Ha igen, és mégsem mûködik, akkor ellenõrizd, hogy nincsenek-e különleges karakterek benne, illetve ügyelj arra, hogy a szerverek többsége megkülönbözteti a kis- és NAGYbetûket!<br /><br />Ha csak egy látogató vagy az oldalon, kérjük lépj kapcsolatba az oldal adminisztrátorával (".hide_email($settings['siteemail']).") és jelentsd neki a hibát.";
$locale['global_302'] = "A Rendszerbeállítások - Alap beállítások menüpontja alatt beállított theme nem található vagy hibás!";
// JavaScript Not Enabled
$locale['global_303'] = "Hiba történt! Nem mûködik a <strong>JavaScript</strong>!<br />A böngészõdben le van tiltva a JavaScript futtatása, vagy nem támogatja a JavaScript használatát. Az oldal megfelelõ használatához kérjük <strong>engedélyezd a JavaScript futtatását</strong> böngészõdben,<br /> vagy <strong>frissítsd</strong> egy újabb verzióra, amely támogatja a JavaScript-et:<br /><a href='http://firefox.com' rel='nofollow' title='Mozilla Firefox'>Firefox</a>, <a href='http://apple.com/safari/' rel='nofollow' title='Safari'>Safari</a>, <a href='http://opera.com' rel='nofollow' title='Opera Web Browser'>Opera</a>, <a href='http://www.google.com/chrome' rel='nofollow' title='Google Chrome'>Chrome</a>, vagy az <a href='http://www.microsoft.com/windows/internet-explorer/' rel='nofollow' title='Internet Explorer'>Internet Explorer</a> 6-nál újabb verziója.";
// User Management
// Member status
$locale['global_400'] = "felfüggesztve";
$locale['global_401'] = "kitiltva";
$locale['global_402'] = "deaktiválva";
$locale['global_403'] = "hozzáférés szüneteltetve";
$locale['global_404'] = "hozzáférés anonimizálva";
$locale['global_405'] = "anonim felhasználó";
$locale['global_406'] = "Ez a felhasználó ki lett tiltva az alábbi okokból:";
$locale['global_407'] = "Ez a felhasználó fel lett függesztve az alábbi idõpontig: ";
$locale['global_408'] = " az alábbi okok miatt:";
$locale['global_409'] = "Ez a felhasználó biztonsági okokból ki lett tiltva.";
$locale['global_410'] = "Indoklás: ";
$locale['global_411'] = "Ez a felhasználó el lett távolítva.";
$locale['global_412'] = "Ez a felhasználó anonimizálva lett, valószínûleg inaktivitás miatt.";
// Banning due to flooding
$locale['global_440'] = "Flood miatti automatikus kitiltás";
$locale['global_441'] = "Felhasználóneved kitiltva - ".$settings['sitename'];
$locale['global_442'] = "Szia [USER_NAME],\n
Valaki a felhasználóneveddel túl sok hozzászólást küldött el rövid idõ alatt az alábbi IP címrõl: ".USER_IP.". A rendszerünk ezért kitiltotta az oldalról, hogy megelõzze az esetleges rosszindulatú robotok tevékenységét.\n
Kérjük lépj kapcsolatba oldalunk adminisztrátorával az alábbi címen, ha nem te okoztad a problémát: ".$settings['siteemail']."\n
Üdvözlettel,\n
".$settings['siteusername']."\n".$settings['sitename'];
// Lifting of suspension
$locale['global_450'] = "Felfüggesztésed feloldva";
$locale['global_451'] = "Felfüggesztésed feloldva - ".$settings['sitename'];
$locale['global_452'] = "Szia USER_NAME,\n
Feloldottuk kitiltásodat oldalunkon (".$settings['siteurl']."). Bejelentkezési adataid:\n
Felhasználónév: USER_NAME
Jelszó: a korábban használt\n
Ha elfelejtetted jelszavad, az alábbi linken kérhetsz újat: LOST_PASSWORD\n\n
Üdvözlettel,\n
".$settings['siteusername']."\n".$settings['sitename'];
$locale['global_453'] = "Szia USER_NAME,\n
Feloldottuk kitiltásodat oldalunkon (".$settings['siteurl'].").\n\n
Üdvözlettel,\n
".$settings['siteusername']."\n".$settings['sitename'];
$locale['global_454'] = "Felhasználó aktiválva - ".$settings['sitename'];
$locale['global_455'] = "Szia USER_NAME,\n
Legutóbbi bejelentkezésed alkalmával hozzáférésed aktiválva lett, így már nincs megjelölve inaktívként.\n\n
Üdvözlettel,\n
".$settings['siteusername']."\n".$settings['sitename'];
// Function parsebytesize()
$locale['global_460'] = "Üres";
$locale['global_461'] = "Byte";
$locale['global_462'] = "kB";
$locale['global_463'] = "MB";
$locale['global_464'] = "GB";
$locale['global_465'] = "TB";
//Safe Redirect
$locale['global_500'] = "Átirányítás folyamatban: %s, kérjük várj. Ha ez nem történik meg, kérjük kattints ide.";

// Captcha Locales
$locale['global_600'] = "Ellenõrzõkód";

//Miscellaneous
$locale['global_900'] = "Sikertelen HEX-DEC átváltás";

$locale['recaptcha'] = "hu";

$locale['recaptcha_l10n'] = "instructions_visual : 'Add meg a két szót:', ";
$locale['recaptcha_l10n'] .= "instructions_audio : 'Add meg a hallott szavakat:', ";
$locale['recaptcha_l10n'] .= "play_again : 'Újrahallgatás', ";
$locale['recaptcha_l10n'] .= "cant_hear_this : 'Letöltés MP3 formátumban', ";
$locale['recaptcha_l10n'] .= "visual_challenge : 'Vizuális mód', ";
$locale['recaptcha_l10n'] .= "audio_challenge : 'Audio mód', ";
$locale['recaptcha_l10n'] .= "refresh_btn : 'Új ellenõrzõkód kérése', ";
$locale['recaptcha_l10n'] .= "help_btn : 'Segítség', ";
$locale['recaptcha_l10n'] .= "incorrect_try_again : 'Hibás, próbáld újra.', ";
?>