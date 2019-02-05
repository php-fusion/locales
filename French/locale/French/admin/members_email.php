<?php
/*
ENGLISH
French language Fileset for PHP-Fusion version 7.02.04
Produced by the french team of PHP-Fusion :
FRENCH
Collection de fichiers de langue française pour PHP-Fusion version 7.02.04
Réalisée par l'équipe française de PHP-Fusion :
TEAM :
Wedgemaster - http://www.phpfusion-fr.com - wedgemaster@gmail.com
Quartzkyte - http://surgele.free.fr - quartzkyte@gmail.com
sectorzero - http://www.aerotorshow.com - sectorzero@free.fr - francisation des thèmes
C@rTeR_ - http://www.blass79.com - carter_hem_suppr@hotmail.com
kiko26 - http://phpfusion.playingtobetogether.fr - webmaster@phpfusion.playingtobetogether.fr
URL :
French site : http://www.phpfusion-fr.com/
*/
$locale['email_create_subject'] = "Compte créé sur ";
$locale['email_create_message'] = "Bonjour [USER_NAME],\n
Votre compte sur ".$settings['sitename']." vient d'être créé.\n
Vous pouvez dès à présent vous connecter avec les détails suivants :\n
pseudo : [USER_NAME]\n
mot de passe : [PASSWORD]\n\n
Cordialement,\n
".$settings['siteusername'];

$locale['email_activate_subject'] = "Compte activé sur ";
$locale['email_activate_message'] = "Bonjour [USER_NAME],\n
Votre compte sur ".$settings['sitename']." vient d'être activé.\n
Vous pouvez dès à présent vous connecter avec votre pseudo et votre mot de passe.\n\n
Cordialement,\n
".$settings['siteusername'];

$locale['email_deactivate_subject'] = "La réactivation du compte est nécessaire sur ".$settings['sitename'];
$locale['email_deactivate_message'] = "Bonjour [USER_NAME],\n
Il s'est écoulé ".$settings['deactivation_period']." jour(s) depuis votre dernière visite sur le site ".$settings['sitename'].". Votre compte est maintenant inactif mais tous les détails de votre compte et tous vos contenus sont intacts.\n
Pour réactiver simplement votre compte, veuillez cliquer sur le lien suivant :\n
".$settings['siteurl']."reactivate.php?user_id=[USER_ID]&code=[CODE]\n\n
Cordialement,\n
".$settings['siteusername'];

$locale['email_ban_subject'] = "Votre compte sur ".$settings['sitename']."a été banni";
$locale['email_ban_message'] = "Bonjour [USER_NAME],\n
Votre compte sur ".$settings['sitename']." a été banni par ".$userdata['user_name']." pour la raison suivante :\n
[REASON].\n
Pour obtenir plus de renseignements sur votre bannissement, veuillez contacter l'administrateur à cette adresse ".$settings['siteemail'].".\n
".$settings['siteusername'];

$locale['email_secban_subject'] = "Votre compte sur ".$settings['sitename']."a été exclu";
$locale['email_secban_message'] = "Bonjour [USER_NAME],\n
Votre compte sur ".$settings['sitename']." a été exclu par ".$userdata['user_name'].", à cause de certaines actions vous étant attribuées, ou associées à votre compte et a été considéré comme une menace pour la sécurité du site.\n
Pour obtenir plus de renseignements sur votre exclusion, veuillez contacter l'administrateur à cette adresse ".$settings['siteemail'].".\n
".$settings['siteusername'];

$locale['email_suspend_subject'] = "Votre compte sur ".$settings['sitename']."a été suspendu";
$locale['email_suspend_message'] = "Bonjour [USER_NAME],\n
Votre compte sur ".$settings['sitename']." a été suspendu par ".$userdata['user_name']." jusqu'au [DATE] (heure du site web) pour la raison suivante :\n
[REASON].\n
Pour obtenir plus de renseignements sur votre suspension, veuillez contacter l'administrateur à cette adresse ".$settings['siteemail'].".\n
".$settings['siteusername'];
?>