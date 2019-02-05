<?php
$locale['400'] = "Registre";
$locale['401'] = "Activa Compte";
// Registration Errors
$locale['402'] = "Has d'especificar un Nom d'Usuari, una Contrasenya i una adreça de correu electrònic.";
$locale['403'] = "El Nom d'Usuari conté caràcters invàlids.";
$locale['404'] = "Les dues contrasenyes no coincideixen.";
$locale['405'] = "Contrasenya invàlida. Només pots fer servir caràcters alfanumèrics i<br />
ha de tenir un mínim de 6 caràcters.";
$locale['406'] = "L'adreça de correu electrònic sembla no ser vàlida.";
$locale['407'] = "Ho sentim, però el Nom d'Usuari ".(isset($_POST['username']) ? $_POST['username'] : "")." ja està agafat.";
$locale['408'] = "Ho sentim, però l'adreça de correu electrònic ".(isset($_POST['email']) ? $_POST['email'] : "")." ja està agafada.";
$locale['409'] = "S'ha registrat un Compte Inactiu amb la direcció email.";
$locale['410'] = "El codi de seguretat és incorrecte.";
$locale['411'] = "La teva adreça o domini de correu electrònic està expulsat.";
// Email Message
$locale['449'] = "Benvingut/da a ".$settings['sitename'];
$locale['450'] = "Hola, ".(isset($_POST['username']) ? $_POST['username'] : "").",\n
Benvingut/da a ".$settings['sitename'].". Aquí tens els detalls del teu compte:\n
Usuari: ".(isset($_POST['username']) ? $_POST['username'] : "")."
Contrasenya: ".(isset($_POST['password1']) ? $_POST['password1'] : "")."\n
Abans d'Iniciar Sessió, has d'activar el compte des d'aquest enllaç:\n";
// Registration Success/Fail
$locale['451'] = "Registre complet";
$locale['452'] = "Ara pots Iniciar Sessió.";
$locale['453'] = "D'aquí a poc temps, un Administrador activarà el teu compte.";
$locale['454'] = "El registre està gairebé acabat. Rebràs un correu electrònic amb els detalls del compte, juntament amb un enllaç per a activar el teu compte.";
$locale['455'] = "El teu Compte està activat.";
$locale['456'] = "El Registre ha fallat";
$locale['457'] = "L'enviament del correu electrònic ha fallat. Contacta amb l'<a href='mailto:".$settings['siteemail']."'>Administrador de la web</a>.";
$locale['458'] = "El registre ha fallat per les raons següents:";
$locale['459'] = "Sisplau, torna-ho a intentar";
// Register Form
$locale['500'] = "Introdueix les teves dades: ";
$locale['501'] = "S'enviarà un correu electrònic d'activació a l'adreça de correu electrònic especificada. ";
$locale['502'] = "Els camps marcats amb un <span style='color:#ff0000;'>*</span> són obligatoris. El Nom d'Usuari i la Contrasenya distingeixen majúscules de minúscules.";
$locale['503'] = " Pots afegir informació addicional des d'<strong>Edita Perfil</strong> un cop hagis iniciat sessió.";
$locale['504'] = "Codi de Seguretat:";
$locale['505'] = "Escriu el Codi de Seguretat:";
$locale['506'] = "Registre";
$locale['507'] = "Actualment, el Sistema de Registre està desactivat.";
$locale['508'] = "Condicions del Registre";
$locale['509'] = "He llegit i accepto les <a href='".BASEDIR."print.php?type=T' target='_blank'>Condicions del Registre</a>.";
// Validation Errors
$locale['550'] = "Escriu un Nom d'Usuari.";
$locale['551'] = "Escriu una Contrasenya.";
$locale['552'] = "Escriu una Adreça de Correu Electrònic.";
?>