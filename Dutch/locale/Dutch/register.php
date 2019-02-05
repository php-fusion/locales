<?php
$locale['400'] = "Aanmelden";
$locale['401'] = "Account activeren";
// Registration Errors
$locale['402'] = "U dient een gebruikersnaam, wachtwoord en e-mailadres op te geven.";
$locale['403'] = "Gebruikersnaam bevat ongeldige tekens.";
$locale['404'] = "Uw twee wachtwoorden komen niet overeen.";
$locale['405'] = "Ongeldig wachtwoord, gebruik alleen alfanumerieke tekens.<br />
Een wachtwoord dient minimaal zes tekens lang te zijn.";
$locale['406'] = "Uw e-mailadres lijkt ongeldig te zijn.";
$locale['407'] = "Sorry, de gebruikersnaam ".(isset($_POST['username']) ? $_POST['username'] : "")." is reeds in gebruik.";
$locale['408'] = "Sorry, het e-mailadres ".(isset($_POST['email']) ? $_POST['email'] : "")." is reeds in gebruik.";
$locale['409'] = "Een niet-geactiveerde account is met dit e-mailadres aangemeld.";
$locale['410'] = "Validatiecode injuist.";
$locale['411'] = "Uw e-mailadres of e-maildomein staat op de zwarte lijst.";
// Email Message
$locale['449'] = "Welkom bij ".$settings['sitename'];
$locale['450'] = "Hallo ".(isset($_POST['username']) ? $_POST['username'] : "").",\n
Welkom bij ".$settings['sitename'].". Hier zijn uw inloggegevens:\n
Gebruikersnaam: ".(isset($_POST['username']) ? $_POST['username'] : "")."
Wachtwoord: ".(isset($_POST['password1']) ? $_POST['password1'] : "")."\n
Activeert u a.u.b. uw account door onderstaande link aan te klikken.\n";
// Registration Success/Fail
$locale['451'] = "Aanmelding compleet";
$locale['452'] = "U kunt nu inloggen.";
$locale['453'] = "Een beheerder zal uw account op korte termijn activeren.";
$locale['454'] = "Uw aanmelding is bijna compleet. U zult een e-mail ontvangen met daarin uw inloggegevens en een link om uw account te verifiëren.";
$locale['455'] = "Uw account is geverifieerd.";
$locale['456'] = "Aanmelding is mislukt";
$locale['457'] = "E-mailverzending heeft gefaald, neemt u a.u.b. contact met de <a href='mailto:".$settings['siteemail']."'>sitebeheerder</a>.";
$locale['458'] = "Aanmelding is mislukt vanwege het volgende:";
$locale['459'] = "Probeert u het a.u.b. nogmaals";
// Register Form
$locale['500'] = "Vult u a.u.b. uw gegevens hieronder in. ";
$locale['501'] = "Een verificatie-e-mail zal naar het door u opgegeven e-mailadres worden verzonden. ";
$locale['502'] = "Velden gemarkeerd met <span style='color:#ff0000;'>*</span> dienen te worden ingevuld.
Uw gebruikersnaam en wachtwoord zijn hoofdlettergevoelig.";
$locale['503'] = " U kunt verdere informatie opgeven door na het inloggen naar Profiel Wijzigen te gaan.";
$locale['504'] = "Validatiecode:";
$locale['505'] = "Validatiecode invullen:";
$locale['506'] = "Aanmelden";
$locale['507'] = "Het aanmeldingssysteem is op dit moment uitgeschakeld.";
$locale['508'] = "Gebruiksvoorwaarden";
$locale['509'] = "Ik heb de <a href='".BASEDIR."print.php?type=T' target='_blank'>Gebruiksvoorwaarden</a> gelezen en ga er mee akkoord.";
// Validation Errors
$locale['550'] = "Geeft u a.u.b. een gebruikersnaam op.";
$locale['551'] = "Geeft u a.u.b. een wachtwoord op.";
$locale['552'] = "Geeft u a.u.b. een e-mailadres op.";
?>