<?php
/*
Irish Language Fileset
Produced by Nick Jones (Digitanium)
Email: conallom@gmail.com
Web: http://www.cuchonaill.com
*/

// Locale Settings
setlocale(LC_TIME, "ga","ga_IE", "Irish"); // Linux Server (Windows may differ)
$locale['charset'] = "iso-8859-1";
$locale['xml_lang'] = "ga";
$locale['tinymce'] = "ga";
$locale['phpmailer'] = "ga";

// Full & Short Months
$locale['months'] =     "&nbsp|Eanáir|Feabhra|Márta|Aibreán|Bealtaine|Meitheamh|Iúil|Lúnasa|Meán Fómhair|Deireadh Fómhair|Samhain|Nollaig";
$locale['longmonths'] = "&nbsp|Eanáir|Feabhra|Márta|Aibreán|Bealtaine|Meitheamh|Iúil|Lúnasa|Meán Fómhair|Deireadh Fómhair|Samhain|Nollaig";
$locale['shortmonths'] = "&nbsp|Ean|Fea|Már|Aib|Bel|Mei|Iúl|Lún|MnF|DrF|Sam|Nol";

// Standard User Levels
$locale['user0'] = "Poiblí";
$locale['user1'] = "Ball";
$locale['user2'] = "Riarthóir";
$locale['user3'] = "Ard-Riarthóir";
// Forum Moderator Level(s)
$locale['userf1'] = "Modhnóir";
// Navigation
$locale['global_001'] = "Nascleanúint";
$locale['global_002'] = "Níor cruthaíodh aon naisc\n";
// Users Online
$locale['global_010'] = "Úsáideoirí ar líne";
$locale['global_011'] = "Cuairteoirí ar líne";
$locale['global_012'] = "Baill ar líne";
$locale['global_013'] = "Níl aon bhall ar líne";
$locale['global_014'] = "Líon Iomlán Ball";
$locale['global_015'] = "Baill díchumasaithe";
$locale['global_016'] = "Ball is nua";
// Forum Side panel
$locale['global_020'] = "Snátha Fóraim";
$locale['global_021'] = "Snátha is nua";
$locale['global_022'] = "Snátha is mó conspóide faoi láthair";
$locale['global_023'] = "Níl aon Snáth cruthaithe";
// Articles Side panel
$locale['global_030'] = "Ailt is nua";
$locale['global_031'] = "Níl Alt ar bith ar fáil";
// Welcome panel
$locale['global_035'] = "Fáilte";
// Latest Active Forum Threads panel
$locale['global_040'] = "Gníomhaíocht is nua i Snátha Fóraim";
$locale['global_041'] = "Do chuid snátha is nua";
$locale['global_042'] = "Do chuid iontrálacha is nua";
$locale['global_043'] = "Iontrálacha nua";
$locale['global_044'] = "Snáth";
$locale['global_045'] = "Líon uaireanta ar féachadh air";
$locale['global_046'] = "Freagraí";
$locale['global_047'] = "Iontráil is deireannaí";
$locale['global_048'] = "Fóram";
$locale['global_049'] = "Iontráilte";
$locale['global_050'] = "Údar";
$locale['global_051'] = "Suirbhé";
$locale['global_052'] = "Corraithe";
$locale['global_053'] = "Níor chur tú aon snáth fóraim suas fós.";
$locale['global_054'] = "Níor chur tú aon teachtaireacht fóraim suas fós.";
$locale['global_055'] = "Tá %u iontráil nua ann ó do chuairt deireanach.";
$locale['global_056'] = "Snátha a bhfuil tú ag faire orthu";
$locale['global_057'] = "Roghanna";
$locale['global_058'] = "Stop";
$locale['global_059'] = "Níl tú ag faire ar aon snáth.";
$locale['global_060'] = "Stop ag faire ar an snáth seo?";
// News & Articles
$locale['global_070'] = "Curtha suas ag ";
$locale['global_071'] = "an ";
$locale['global_072'] = "Léigh tuilleadh";
$locale['global_073'] = " Tuairimí";
$locale['global_073b'] = " Tuairim";
$locale['global_074'] = " Líon uaireanta ar féachadh air";
$locale['global_075'] = "Priontáil";
$locale['global_076'] = "Athraigh";
$locale['global_077'] = "Nuacht";
$locale['global_078'] = "Níor cuireadh aon Nuacht suas fós";
// Page Navigation
$locale['global_090'] = "Siar";
$locale['global_091'] = "Ar aghaidh";
$locale['global_092'] = "Leathanach ";
$locale['global_093'] = " de ";
// Guest User Menu
$locale['global_100'] = "Logáil";
$locale['global_101'] = "Ainm Úsáideora";
$locale['global_102'] = "Pasfhocal";
$locale['global_103'] = "Cuimhnigh orm";
$locale['global_104'] = "Logáil Isteach";
$locale['global_105'] = "Bhfuil tú i do bhall fós?<br /><a href='".BASEDIR."register.php' class='side'>Gliogáil anseo</a> le clárú.";
$locale['global_106'] = "An ndearna tú dearmad ar do phasfhocal?<br />Faigh ceann nua <a href='".BASEDIR."lostpassword.php' class='side'>anseo</a>.";
$locale['global_107'] = "Cláraigh";
$locale['global_108'] = "Pasfhocal caillte";
// Member User Menu
$locale['global_120'] = "Athraigh do Phróifíl";
$locale['global_121'] = "Teachtaireachtaí Suímh";
$locale['global_122'] = "Liosta Ball";
$locale['global_123'] = "Painéal Riarthóra";
$locale['global_124'] = "Logáil Amach";
$locale['global_125'] = "Tá an méid seo teachtaireachtaí nua agat: %u ";
$locale['global_126'] = "";
$locale['global_127'] = "";
// Poll
$locale['global_130'] = "Suirbhé Ball";
$locale['global_131'] = "Caith Vóta";
$locale['global_132'] = "Ní mór logáil isteach le a bheith in ann clárú.";
$locale['global_133'] = "Vóta";
$locale['global_134'] = "Vótaí";
$locale['global_135'] = "Vótaí: ";
$locale['global_136'] = "Tosaithe: ";
$locale['global_137'] = "Críochnaithe: ";
$locale['global_138'] = "Cartlann Suirbhéanna";
$locale['global_139'] = "Roghnaigh Suirbhé ón liosta le n-é a fheiceáil:";
$locale['global_140'] = "Breathnaigh";
$locale['global_141'] = "Breathnaigh ar shuirbhé";
$locale['global_142'] = "Níor cruthaíodh aon suirbhéanna.";
// Shoutbox
$locale['global_150'] = "Scairtbhosca";
$locale['global_151'] = "Ainm:";
$locale['global_152'] = "Teachtaireacht:";
$locale['global_153'] = "Scairt";
$locale['global_154'] = "Ní mór logáil isteach le teachtaireacht a chur suas.";
$locale['global_155'] = "Cartlann Scairtbhosca";
$locale['global_156'] = "Níor seoladh aon teachtaireacht.";
$locale['global_157'] = "Scrios";
$locale['global_158'] = "Cód Fhíoraithe:";
$locale['global_159'] = "Tabhair an Cód Fhíoraithe:";
// Footer Counter
$locale['global_170'] = "chuairt uathúil";
$locale['global_171'] = "cuairt uathúil";
$locale['global_172'] = "Am rindreála: %s soicind";
// Admin Navigation
$locale['global_180'] = "Bun-Leathanach Riarthóra";
$locale['global_181'] = "Fill ar an Suíomh";
$locale['global_182'] = "<strong>Fainic:</strong> Níor tugadh aon Phasfhocal Riarthóra nó tugadh ceann mícheart.";
// Miscellaneous
$locale['global_190'] = "Tá Modh Cothabhála i bhFeidhm";
$locale['global_191'] = "Tá do sheoladh IP ar an dúliosta.";
$locale['global_192'] = "Ag logáil amach mar ";
$locale['global_193'] = "Ag logáil isteach mar ";
$locale['global_194'] = "Tá an cuntas seo ar fionraí faoi láthair.";
$locale['global_195'] = "Níor cuireadh an cuntas seo i ngníomh fós.";
$locale['global_196'] = "Ainm úsáideora nó pasfhocal neamhbhailí.";
$locale['global_197'] = "Fan a fhad agus go n-aistrítear go dtí an leathanach cóir tú...<br /><br />
[ <a href='index.php'>Nó gliogáil anseo muna bhfuil fonn ort fanacht</a> ]";
$locale['global_198'] = "<strong>Fainic:</strong> airíodh go bhfuil 'setup.php' ann fós, scrios ar an bpoinnte é.";
$locale['global_199'] = "<strong>Fainic:</strong> níor socraíodh pasfhocal riarthóra fós, gliogáil ar <a href='".BASEDIR."edit_profile.php'>Athraigh do Phróifíl</a> chun é a shocrú.";
//Titles
$locale['global_200'] = " - ";
$locale['global_201'] = ": ";
$locale['global_202'] = $locale['global_200']."Cuardach";
$locale['global_203'] = $locale['global_200']."Ceisteanna Coitianta";
$locale['global_204'] = $locale['global_200']."Fóram";
//Themes
$locale['global_210'] = "Ar aghaidh go hábhar";
// No themes found
$locale['global_300'] = "níor fritheadh aon téama";
$locale['global_301'] = "Tá-bhrón orainn ach ní féidir an leathanach seo a thaispeáint. Ní fios cén fáth ach níor aimsíodh aon 'téama suímh'. Más Riarthóir Suímh tú, úsáid do chliant FTP chun aon téama <em>PHP-Fusion v7</em> a chur san fhilteán <em>themes/</em>. Tar éis é a uaslódáil duit, seiceáil sna <em>Príomh-Shocruithe</em> agus seiceáil ar uaslódáladh i gceart é san fhilteán <em>themes/</em>. Tabhair faoi deara nach mór go mbeadh an t-ainm díreach céanna ar an bhfilteán (an cás in áirithe) agus atá roghnaithe ar leathanach na <em>Príomh-Shocruithe</em>.<br /><br /> Más úsáideoir rialta tú den suíomh seo, déan teagmháil le riarthóir an tsuímh trí ".hide_email($settings['siteemail'])." ríomhphost agus cuir in iúl dó nó di go bhfuil an fadhb seo ann.";
$locale['global_302'] = "Níl an Téama a roghnaíodh sna Príomh-Shocruithe ann nó níl sé ann uile!";
?>
