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
// Member Management Options
$locale['400'] = "Membres";
$locale['401'] = "Utilisateur";
$locale['402'] = "Ajouter un nouveau membre";
$locale['403'] = "Type d&#39;utilisateur";
$locale['404'] = "Options";
$locale['405'] = "Visualiser";
$locale['406'] = "Modifier";
$locale['407'] = "Activer";
$locale['408'] = "Débannir";
$locale['409'] = "Bannir";
$locale['410'] = "Supprimer";
$locale['411'] = "Il n&#39;y a pas de membre %s";
$locale['412'] = " dont le nom commence par ";
$locale['413'] = " correspondant au critère de recherche ";
$locale['414'] = "Tout voir";
$locale['415'] = "Recherche d&#39;un membre : ";
$locale['416'] = "Recherche";
$locale['417'] = "Selectionner une action";
$locale['418'] = "Annuler";
$locale['419'] = "Rétablir";
// Ban/Unban/Delete Member
$locale['420'] = "Bannissement appliqué";
$locale['421'] = "Bannissement supprimé";
$locale['422'] = "Membre supprimé";
$locale['423'] = "Êtes-vous certain de vouloir supprimer ce membre ?";
$locale['424'] = "Membre Activé";
// Edit Member Details
$locale['430'] = "Modifier le Membre";
$locale['431'] = "Détails du Membre mis à jour";
$locale['432'] = "Retour à l&#39;administration des Membres";
$locale['433'] = "Retour à l&#39;administration";
$locale['434'] = "Mise à jour des détails du Membre impossible : ";
// Extra Edit Member Details form options
$locale['440'] = "Sauvegarder les changements";
// Update Profile Errors
$locale['450'] = "Modification d&#39;un administrateur primaire impossible.";
$locale['451'] = "Vous devez préciser un Pseudo et une adresse mail.";
$locale['452'] = "Le Pseudo contient des caractères invalides.";
$locale['453'] = "Le Pseudo ".(isset($_POST['user_name']) ? $_POST['user_name'] : "")." est déjà utilisé.";
$locale['454'] = "L&#39;adresse mail est invalide.";
$locale['455'] = "L&#39;adresse mail ".(isset($_POST['user_email']) ? $_POST['user_email'] : "")." est déjà utilisée.";
$locale['456'] = "Les nouveaux mots de passe ne correspondent pas.";
$locale['457'] = "Le mot de passe est invalide, veuillez n&#39;utiliser que des caractères alphanumériques.<br />
La longueur du mot de passe doit être de 6 caractères minimum.";
$locale['458'] = "<strong>Attention :</strong> exécution d&#39;un script imprévu.";
// View Member Profile
$locale['470'] = "Profile du Membre";
$locale['472'] = "Statistiques";
$locale['473'] = "Groupes d&#39;Utilisateurs";
// Add Member Errors
$locale['480'] = "Ajouter un Membre";
$locale['481'] = "Le compte du Membre vient d&#39;être créé.";
$locale['482'] = "Le compte du Membre ne peut pas être créé.";
// Suspension Log 
$locale['510s'] = "Journal de suspension pour ";
$locale['511s'] = "Il n&#39;y a pas de suspension en cours pour ce membre dans le journal de suspension.";
$locale['512s'] = "Suspensions précédentes de ";
$locale['513'] = "N°"; // as in number
$locale['514'] = "Date";
$locale['515'] = "Explication";
$locale['516'] = "Suspension d&#39;un administrateur";
$locale['517'] = "Action système";
$locale['518'] = "Retour au profil du membre";
$locale['519'] = "Journal de suspension de ce membre ";
$locale['520'] = "Levée : ";
$locale['521'] = "IP : ";
$locale['522'] = "Pas encore rétabli";
$locale['540'] = "Erreur";
$locale['541'] = "Erreur : Vous devez indiquer la raison de la suspension !";
$locale['542'] = "Erreur : Vous devez indiquer la raison du bannissement sécuritaire !";
// User Management Admin
$locale['550'] = "Suspendre le membre : ";
$locale['551'] = "Durée en jours : ";
$locale['552'] = "Explication : ";
$locale['553'] = "Suspendre";
$locale['554'] = "Il n&#39;y a pas de suspension en cours pour ce membre dans le journal de suspension.";
$locale['555'] = "Si vous croyez que ce membre doit être banni, cliquez sur &#39;Bannir&#39;";
$locale['556'] = "Levée de suspension du membre : ";
$locale['557'] = "Levée de suspension";
$locale['558'] = "Levée du bannissement du membre : ";
$locale['559'] = "Levée du bannissement ";
$locale['560'] = "Levée du bannissement sécuritaire du membre : ";
$locale['561'] = "Levée du bannissement sécuritaire";
$locale['562'] = "Bannir le membre : ";
$locale['563'] = "Bannir sécuritairement le membre : ";
$locale['585a'] = "Donnez une explication concernant le bannissement ou le débannissement ";

$locale['566'] = "Bannissement levé";
$locale['568'] = "Bannissement sécuritaire imposé";
$locale['569'] = "Bannissement sécuritaire levé";
$locale['572'] = "Membre suspendu";
$locale['573'] = "Suspension levée";
$locale['574'] = "Membre désactivé";
$locale['575'] = "Membre réactivé";
$locale['576'] = "Compte utilisateur annulé";
$locale['577'] = "Annulation du Compte utilisateur non effectuée";
$locale['578'] = "Compte utilisateur annulé et rendu anonyme";
$locale['579'] = "Anonymisation du Compte utilisateur non effectuée";
$locale['580'] = "Désactiver les Membres inactifs";
$locale['581'] = "Plus de 50 comptes utilisateurs sont inactifs. Vous devrez lancer le processus de désactivation <strong>%d fois</strong>.";
$locale['582'] = "Réactiver";
$locale['583'] = "Rétablir";
$locale['584'] = "Sélectionner le nouveau statut";
$locale['585'] = "Ce membre a été originellement banni pour raisons de sécurité ! Etes-vous certain de vouloir le débannir maintenant ?";

$locale['590'] = "Suspendre";
$locale['591'] = "Arrêter la suspension";
$locale['592'] = "suspension";
$locale['593'] = "non suspension";
$locale['594'] = "Veuillez donner une explication pour la ";
$locale['595'] = " du membre ";
$locale['596'] = "Durée : ";

$locale['600'] = "Bannir sécuritairement";
$locale['601'] = "Bannissement sécuritaire";
$locale['602'] = "Débannir";
$locale['603'] = "Débannissement";
$locale['604'] = "Explication : ";

// Deactivation System
$locale['610'] = "<strong>%d membre(s)</strong> ne se sont pas connectés depuis <strong>%d jour(s)</strong> et leurs comptes ont été désactivés. <br>
En désactivant les comptes de ces membres, il leur restera <strong>%d jour(s)</strong> avant qu&#39;ils ne soient %s.";
$locale['611'] = "Veuillez noter que certains membres ont pu soumettre du contenu dans le site tel que sujet de forum, commentaires, photos etc. <br>
Ce contenu sera supprimé lorsque les membres désactivés seront supprimés.";
$locale['612'] = "utilisateur";
$locale['613'] = "utilisateurs";
$locale['614'] = "Désactiver";
$locale['615'] = "définitivement supprimé";
$locale['616'] = "rendus anonymes";
$locale['617'] = "Attention : ";
$locale['618'] = "Il est fortement reecommandé de rendre anonyme plutôt que de supprimer afin de ne pas perdre de données !";
$locale['619'] = "Vous pouvez effectuer cette action ici.";
$locale['620'] = "rendre anonyme";
$locale['621'] = "Désactivation automatique des membres inactifs.";
?>