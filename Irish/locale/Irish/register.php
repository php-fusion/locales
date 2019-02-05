<?php
$locale['400'] = "Cláraigh";
$locale['401'] = "Cuir Cuntas i ngníomh";
// Registration Errors
$locale['402'] = "Caithfidh tú ainm úsáideora, pasfhocal ríomhphoist a thabhairt.";
$locale['403'] = "Tá caractair neamh-bhailí san ainm úsáideora.";
$locale['404'] = "Ní hionann an dá Phasfhocal.";
$locale['405'] = "Pasfhocal neamh-bhailí, na húsáid ach litreacha agus digití.<br />
Caith sé a bheith ar a laghad 6 charachtair ar fhad.";
$locale['406'] = "Tá cuma ar an seoladh ríomhphoist nach bhfuil sé bailí.";
$locale['407'] = "Tá an ainm úsáideora ".(isset($_POST['username']) ? $_POST['username'] : "")." in úsáid cheana.";
$locale['408'] = "Tá an seoladh ríomhphoist ".(isset($_POST['email']) ? $_POST['email'] : "")." in úsáid cheana.";
$locale['409'] = "Tá cuntas nach bhfuil gníomhach cláruithe leis an seoladh ríomhphoist sin.";
$locale['410'] = "Cód bailíochtaithe mícheart (validation code).";
$locale['411'] = "Tá do sheoladh ríomhphoist, nó fearann do sheoladh ríomhphoist ar an dúliosta.";
// Email Message
$locale['449'] = "Fáilte go ".$settings['sitename'];
$locale['450'] = "A ".(isset($_POST['username']) ? $_POST['username'] : "").",\n
Fáilte go ".$settings['sitename'].". Seo do chuid sonraí logála:\n
Ainm úsáideora: ".(isset($_POST['username']) ? $_POST['username'] : "")."
pasfhocal: ".(isset($_POST['password1']) ? $_POST['password1'] : "")."\n
Cuir do chuntas ag obair leis ann nasc seo, le do thoil:\n";
// Registration Success/Fail
$locale['451'] = "Clárú críochnaithe";
$locale['452'] = "Féadfaidh tú logáil isteach anois.";
$locale['453'] = "Cuireadh riarthóir do chuntas i ngníomh ar ball beag.";
$locale['454'] = "Tá an próiseas cláraithe beagnach críochnaithe. Gheobhaidh tú ríomhphost go luath le do chuid sonraí logála agus le nasc le do chuntas a fhíorú.";
$locale['455'] = "Tá do chuntas fíoraithe.";
$locale['456'] = "Theip ar an gclárú";
$locale['457'] = "Theip ar an ríomhphost seoladh, déan teagmháil leis an <a href='mailto:".$settings['siteemail']."'>Riarthóir Suímh</a>.";
$locale['458'] = "Theip ar an gclárú mar gheall de bharr an/na fáth(anna) seo a leanas:";
$locale['459'] = "Triail arís";
// Register Form
$locale['500'] = "Tabhair do chuid sonraí thíos. ";
$locale['501'] = "Seolfar ríomhphost fíorúcháin go do chuntas ríomhphoist. ";
$locale['502'] = "Caithfidh tú réimsí atá marcáilte le <span style='color:#ff0000;'>*</span> a líonadh.
Tá do ainm úsáideora agus do phasfhocal cásíogair (case-sensitive).";
$locale['503'] = " Féadfaidh tú tuilleadh eolais a thabhairt trí ghliogáil ar 'Athraigh do Phróifíl' nuair a bhíonn tú logáilte isteach.";
$locale['504'] = "Cód fíorúcháin:";
$locale['505'] = "Cuir an cód fíorúcháin isteach:";
$locale['506'] = "Cláraigh";
$locale['507'] = "Tá an córas cláraithe díchumasaithe faoi láthair.";
$locale['508'] = "Téarmaí Chomhaontaithe (Terms of Agreement)";
$locale['509'] = "Léigh mé na <a href='".BASEDIR."print.php?type=T' target='_blank'>Téarmaí Chomhaontaithe</a> agus aontaím leo.";
// Validation Errors
$locale['550'] = "Tabhair ainm úsáideora.";
$locale['551'] = "Tabhair pasfhocal.";
$locale['552'] = "Tabhair seoladh ríomhphoist.";
?>