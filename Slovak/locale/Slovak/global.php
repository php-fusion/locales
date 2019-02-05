<?php
/*
Slovak Language Fileset  global.php 7.02.01 OK
Translate control by Peter Šeff (Marten)
Email: admin@phpfusion.sk
Web: http://www.phpfusion.sk
*/

// Locale Settings
setlocale(LC_ALL, 'sk_SK.UTF-8', 'slovak');
$locale['charset'] = "UTF-8";
$locale['xml_lang'] = "sk";
$locale['tinymce'] = "sk";
$locale['phpmailer'] = "sk";

// Full & Short Months
$locale['months'] = "&nbsp|Január|Február|Marec|Apríl|Máj|Jún|Júl|August|September|Október|November|December";
$locale['shortmonths'] = "&nbsp|Jan|Feb|Mar|Apr|Máj|Jún|Júl|Aug|Sept|Okt|Nov|Dec";

// Standard User Levels
$locale['user0'] = "Verejnosť";
$locale['user1'] = "Užívateľ";
$locale['user2'] = "Administrátor";
$locale['user3'] = "Hlavný Administrátor";
$locale['user_na'] = "N/A";
$locale['user_anonymous'] = "Anonym";
// Standard User Status
$locale['status0'] = "Aktivovaný";
$locale['status1'] = "Zabanovaný";
$locale['status2'] = "Neaktivovaný";
$locale['status3'] = "Pozastavený";
$locale['status4'] = "Bezpečnostný BAN";
$locale['status5'] = "Zrušený";
$locale['status6'] = "Anonym";
$locale['status7'] = "Deaktivovaný";
$locale['status8'] = "Neaktívny";
// Forum Moderator Level(s)
$locale['userf1'] = "Moderátor";
// Navigation
$locale['global_001'] = "Navigácia";
$locale['global_002'] = "Žiadne odkazy neboli definované";
// Users Online
$locale['global_010'] = "Kto je Online";
$locale['global_011'] = "Hostí Online";
$locale['global_012'] = "Užívateľov Online";
$locale['global_013'] = "Žiadny užívateľ nie je Online";
$locale['global_014'] = "Registrovaní užívatelia";
$locale['global_015'] = "Neaktivovaní užívatelia";
$locale['global_016'] = "Najnovší užívateľ";
// Forum Side panel
$locale['global_020'] = "Témy fóra";
$locale['global_021'] = "Najnovšie témy";
$locale['global_022'] = "Najhorúcejšie témy";
$locale['global_023'] = "Žiadne témy";
// Comments Side panel
$locale['global_025'] = "Posledné komentáre";
$locale['global_026'] = "Žiadne komentáre";
// Articles Side panel
$locale['global_030'] = "Posledné články";
$locale['global_031'] = "Neboli pridané žiadne články";
// Downloads Side panel
$locale['global_032'] = "Posledné súbory na stiahnutie";
$locale['global_033'] = "Žiadne súbory na stiahnutie";
// Welcome panel
$locale['global_035'] = "Vitajte";
// Latest Active Forum Threads panel
$locale['global_040'] = "Posledné aktívne témy vo fóre";
$locale['global_041'] = "Moje témy";
$locale['global_042'] = "Moje príspevky";
$locale['global_043'] = "Nové príspevky";
$locale['global_044'] = "Téma";
$locale['global_045'] = "Prezreté";
$locale['global_046'] = "Odpovede";
$locale['global_047'] = "Posledný príspevok";
$locale['global_048'] = "Fórum";
$locale['global_049'] = "Pridané";
$locale['global_050'] = "Autor";
$locale['global_051'] = "Anketa";
$locale['global_052'] = "Presunul";
$locale['global_053'] = "Nezaložili ste ešte žiadne témy.";
$locale['global_054'] = "Neposlali ste ešte žiadny príspevok do fóra.";
$locale['global_055'] = "Bolo napísaných %u nových príspevkov, od vašej poslednej návštevy.";
$locale['global_056'] = "Moje sledované témy";
$locale['global_057'] = "Nastavenie";
$locale['global_058'] = "Zastaviť";
$locale['global_059'] = "Nemáte žiadne sledované témy.";
$locale['global_060'] = "Zastaviť sledovanie tém?";
// News & Articles
$locale['global_070'] = "Pridal ";
$locale['global_071'] = "dňa ";
//$locale['global_072'] = "Čítajte viac";
$locale['global_072'] = "<span class='blink'><span style='color:#f00'>Čítajte viac</span><span style='color:#000'>Čítajte viac</span><span style='color:#0c0'>Čítajte viac</span></span>";
$locale['global_073'] = " Komentárov";
$locale['global_073b'] = " Komentárov";
$locale['global_074'] = " Prečítané";
$locale['global_075'] = "Vytlačiť";
$locale['global_076'] = "Upraviť";
$locale['global_077'] = "Novinky";
$locale['global_078'] = "Žiadne novinky ešte neboli napísané";
$locale['global_079'] = "V ";
$locale['global_080'] = "Nekategorizované";
// Page Navigation
$locale['global_090'] = "Späť";
$locale['global_091'] = "Ďalej";
$locale['global_092'] = "Strana ";
$locale['global_093'] = " z ";
// Guest User Menu
$locale['global_100'] = "Prihlásenie";
$locale['global_101'] = "Meno";
$locale['global_102'] = "Heslo";
$locale['global_103'] = "Zapamätať";
$locale['global_104'] = "Prihlásiť";
$locale['global_105'] = "Nie ste užívateľom?<br><a href='".BASEDIR."register.php' class='side'><strong>Kliknite sem</strong></a><br> a zaregistrujte sa.";
$locale['global_106'] = "Zabudli ste heslo?<br>Pre získanie nového  <br><a href='".BASEDIR."lostpassword.php' class='side'><strong>Kliknite sem</strong></a>.";
$locale['global_107'] = "Registrácia";
$locale['global_108'] = "Zabudnuté heslo";
// Member User Menu
$locale['global_120'] = "Upraviť profil";
$locale['global_121'] = "Správy";
$locale['global_122'] = "Užívatelia";
$locale['global_123'] = "Administrácia";
$locale['global_124'] = "Odhlásiť";
$locale['global_125'] = "Máte %u novú/nové ";
$locale['global_126'] = "správu";
$locale['global_127'] = "správy";
$locale['global_128'] = "podanie";
$locale['global_129'] = "podania";
// Poll
$locale['global_130'] = "Anketa";
$locale['global_131'] = "Odoslať hlas";
$locale['global_132'] = "Len prihlásení môžu hlasovať.";
$locale['global_133'] = "Hlas";
$locale['global_134'] = "Hlasy";
$locale['global_135'] = "Hlasy: ";
$locale['global_136'] = "Začiatok hlasovania: ";
$locale['global_137'] = "Koniec hlasovania: ";
$locale['global_138'] = "Archív ankiet";
$locale['global_139'] = "Vyber anketu zo zoznamu:";
$locale['global_140'] = "Prezrieť";
$locale['global_141'] = "Prezrieť anketu";
$locale['global_142'] = "Žiadne ankety.";

// Captcha
$locale['global_150'] = "Validačný kód:";
$locale['global_151'] = "Vložte validačný kód:";

// Footer Counter
$locale['global_170'] = "návštev";
$locale['global_171'] = "návštev";
$locale['global_172'] = "Vygenerované za: %s sekúnd";
$locale['global_173'] = "DB dop.";
// Admin Navigation
$locale['global_180'] = "Admin Index";
$locale['global_181'] = "Späť na stránku";
$locale['global_182'] = "<strong>Upozornenie:</strong> Heslo admina nebolo zadané, alebo je nesprávne.";
// Miscellaneous
$locale['global_190'] = "Mód na údržbu bol aktivovaný";
$locale['global_191'] = "Z tejto IP adresy nemáte povolenie pristupovať na túto stránku.";
$locale['global_192'] = "Odhlasovanie ";
$locale['global_193'] = "Prihlasovanie ";
$locale['global_194'] = "Váš účet bol zablokovaný.";
$locale['global_195'] = "Tento účet ešte nebol aktivovaný.";
$locale['global_196'] = "Nesprávne meno alebo heslo.";
$locale['global_197'] = "Počkajte prosím, prihlasovanie môže chvíľu trvať...<br><br>
[ <a href='index.php'>Kliknite sem ak sa stránka nezobrazí do 10 sekúnd</a> ]";
$locale['global_198'] = "<strong>Upozornenie:</strong> setup.php nebol vymazaný, vymažte ho čo najskôr.";
$locale['global_199'] = "<strong>Upozornenie:</strong> Admin heslo nie je nastavené, kliknite na <a href='edit_profile.php'>Editovať profil</a> a nastavte ho.";
//Titles
$locale['global_200'] = " - ";
$locale['global_201'] = ": ";
$locale['global_202'] = $locale['global_200']."Vyhľadávanie";
$locale['global_203'] = $locale['global_200']."FAQ";
$locale['global_204'] = $locale['global_200']."Fórum";
//Themes
$locale['global_210'] = "Prejsť na obsah"; 
// No themes found
$locale['global_300'] = "žiadne vzhľady";
$locale['global_301'] = "Prepáčte, ale stránka sa nedá zobraziť. Nedá sa nájsť žiadna téma na stránke. Ak ste administrátor, použite váš FTP manažér pre nahratie <em>vzhľadu/</em> do adresára určeného pre vzhľady <em>PHP-Fusion v7</em>. Po nahratí vzhľadu vojdite do <em>Hlavné nastavenia</em> a zvoľte vzhľad ktorý se nahrali do adresára <em>vzhľadov/</em>.<br><br>Ak ste bežným užívateľom tejto stránky, kontaktujte administrátora ".hide_email($settings['siteemail'])." e-mailom a oznámte mu túto záležitosť.";
$locale['global_302'] = "Vzhľad zvolený v hlavnom nastavení, neexistuje alebo nie je kompletný!";
// JavaScript Not Enabled
$locale['global_303'] = "Ale nie! Toto je <strong>JavaScript</strong>?<br>Váš prehliadač nemá povolené používanie JavaScriptu, alebo JavaScript nie je podporovaný. Prosím <strong>povolte JavaScript</strong> vo vašom prehliadači aby sa správne zobrazila táto stránka,<br> alebo <strong>obnovte</strong> váš prehliadač s podporou JavaScriptu; <a href='http://firefox.com' rel='nofollow' title='Mozilla Firefox'>Firefox</a>, <a href='http://apple.com/safari/' rel='nofollow' title='Safari'>Safari</a>, <a href='http://opera.com' rel='nofollow' title='Opera'>Opera</a>, <a href='http://www.google.com/chrome' rel='nofollow' title='Google Chrome'>Chrome</a> alebo novšiu verziu <a href='http://www.microsoft.com/windows/internet-explorer/' rel='nofollow' title='Internet Explorer'>Internet Explorera</a>.";
// User Management
// Member status
$locale['global_400'] = "dočasne pozastavený";
$locale['global_401'] = "zabanovaný";
$locale['global_402'] = "deaktivovaný";
$locale['global_403'] = "vymedzený účet";
$locale['global_404'] = "utajený účet";
$locale['global_405'] = "utajený užívateľ";
$locale['global_406'] = "Tento účet je zabanovaný z dôvodu:";
$locale['global_407'] = "Tento účet je dočasne zrušený až do ";
$locale['global_408'] = " z dôvodu:";
$locale['global_409'] = "Tento účet je zabanovaný z bezpečnostných dôvodov.";
$locale['global_410'] = "Dôvod pre toto je: ";
$locale['global_411'] = "Tento účet bol ukončený.";
$locale['global_412'] = "Tento účet bol anonimizovaný pravdepodobne preto, že bol neaktívny.";
// Banning due to flooding
$locale['global_440'] = "Automatický BAN od kontroly pretečenia"; //Automatic Ban by Flood Control
$locale['global_441'] = "Váš účet ".$settings['sitename']."bol zabanovaný";
$locale['global_442'] = "Ahoj [USER_NAME],\n
Váš účet ".$settings['sitename']." bol pre priveľa príspevkov v krátkom čase z IP ".USER_IP.", pozastavený. Jedná sa o prevenciu pred SPAM-botmi s množstvom príspevkov.\n
Prosím kontaktujte hlavného administrátora cez ".$settings['siteemail']." na uvoľnenie účtu, ak sa nejedná o porušenie bezpečnosti.\n
".$settings['siteusername'];
// Lifting of suspension
$locale['global_450'] = "Dočasné pozastavenie automaticky zrušené systémom";
$locale['global_451'] = "Dočasné pozastavenie zrušené na ".$settings['sitename'];
$locale['global_452'] = "Ahoj USER_NAME,\n
Dočasné pozastavenie vášho účtu na ".$settings['siteurl']." bolo zrušené. Tu sú detaily vášho loginu:\n
Užívateľské meno: USER_NAME
Heslo: Skryté z bezpečnostných dôvodov\n
Ak ste zabudli heslo, kliknite na nasledujúci link: LOST_PASSWORD\n\n
s pozdravom,\n
".$settings['siteusername'];
$locale['global_453'] = "Ahoj USER_NAME,\n
Dočasné pozastavenie vášho účtu na ".$settings['siteurl']." bolo zrušené.\n\n
s pozdravom,\n
".$settings['siteusername'];
$locale['global_454'] = "účet obnovený na ".$settings['sitename'];
$locale['global_455'] = "Ahoj USER_NAME,\n
Posledne ste boli prihlásený v obnovenom účte na ".$settings['siteurl']." a váš účet už nie je označený ako neaktívny.\n\n
s pozdravom,\n
".$settings['siteusername'];
// Function parsebytesize()
$locale['global_460'] = "Prázdny";
$locale['global_461'] = "Bytes";
$locale['global_462'] = "kB";
$locale['global_463'] = "MB";
$locale['global_464'] = "GB";
$locale['global_465'] = "TB";
//Safe Redirect
$locale['global_500'] = "Budete presmerovaný do %s, prosím, čakajte. Ak ste neboli presmerovaný, kliknite sem.";

// Captcha Locales
$locale['global_600'] = "Validačný kód";
$locale['recaptcha'] = "sk";

//Miscellaneous
$locale['global_900'] = "Nemožno previesť HEX na DEC";
?>              