<?php

// Kontakt Formular
$locale['400']  = "Kontakt";
$locale['401']  = "Es gibt verschiedene M&ouml;glichkeiten der Kontaktaufname. ";
$locale['401'] .= "Du kannst mir eine E-Mail schreiben an ".hide_email($settings['siteemail']).". ";
$locale['401'] .= "Wenn du ein Mitglied bist, kannst du mir auch eine <a href='".BASEDIR."messages.php?msg_send=1' title='private Nachricht'>private Nachricht</a> senden. ";
$locale['401'] .= "Alternativ kannst du auch dieses Formular ausf&uuml;llen, welches mir ebenfalls eine E-Mail zukommen l&auml;sst.";
$locale['402']  = "Name:";
$locale['403']  = "E-Mail Adresse:";
$locale['404']  = "Betreff:";
$locale['405']  = "Nachricht:";
$locale['406']  = "Nachricht absenden";
$locale['407']  = "Sicherheitscode:";
$locale['408']  = "Sicherheitscode eingeben:";

// Kontakt Fehler
$locale['420'] = "Du musst deinen Namen angeben";
$locale['421'] = "Du musst deine E-Mail Adresse angeben";
$locale['422'] = "Du musst einen Betreff angeben";
$locale['423'] = "Du musst eine Nachricht angeben";
$locale['424'] = "Du musst den korrekten Sicherheitscode angeben";
$locale['425'] = "Interner Fehler: Die Nachricht konnte nicht versendet werden.";

// Kontakt Nachricht gesendet
$locale['440'] = "Deine Nachricht wurde erfolgreich versendet.";
$locale['441'] = "Danke";
$locale['442'] = "Deine Nachricht konnte aus folgenden Grund/Gr&uuml;nden nicht versendet werden:";
$locale['443'] = "Bitte versuche es nochmals.";

?>
