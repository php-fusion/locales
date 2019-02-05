<?php
// Member Management Options
$locale['400'] = "Membri";
$locale['401'] = "Utilizator";
$locale['402'] = "Adaug&#259;";
$locale['403'] = "Tip utilizator";
$locale['404'] = "Op&#355;iuni";
$locale['405'] = "Vezi utilizatorii cu statutul";
$locale['406'] = "Editare";
$locale['407'] = "Activeaz&#259;";
$locale['408'] = "Reactiveaz&#259;";
$locale['409'] = "Suspend&#259;";
$locale['410'] = "&#350;terge";
$locale['411'] = "Nu exist&#259; utilizatori cu statutul %s";
$locale['412'] = " care &#238;ncep cu ";
$locale['413'] = " cu numele ";
$locale['414'] = "Arat&#259; to&#355;i";
$locale['415'] = "Caut&#259; membru:";
$locale['416'] = "Caut&#259;";
$locale['417'] = "Alege ac&#355;iunea";
$locale['418'] = "Anuleaz&#259;";
$locale['419'] = "Reactiveaz&#259;";
$locale['425'] = "<h2>Aten&#355;ie!</h2><br />
E&#351;ti pe cale s&#259; &#351;tergi utilizatorul <strong>%s</strong>!<br />
Urm&#259;torul con&#355;inut <u>postat de utilizator</u> pe acest sait va fi &#351;ters dac&#259; continui:<br />
- Articole<br />
- &#350;tiri<br />
- Discu&#355;iile din forum. &#354;ine cont c&#259; vor fi &#351;terse &#351;i post&#259;rile f&#259;cute de al&#355;i utilizatori &#238;n aceste discu&#355;ii, al&#259;turi de sondajele &#351;i fi&#351;ierele ata&#351;ate.<br />
- Post&#259;rile din forum<br />
- Fi&#351;ierele ata&#351;ate &#238;n forum<br />
- Comentarii<br />
- Mesajele private trimise sau primite de utilizator<br />
- Voturile din sondaje<br />
- Evalu&#259;rile f&#259;cute<br />
Dac&#259; acest utilizator nu este un spamer, este recomandat&#259; blocarea, suspendarea, anularea sau anonimizarea utilizatorului.<br />
<br />
Sigur vrei s&#259; &#351;tergi acest utilizator?<br />";
$locale['426'] = "Da";
$locale['427'] = "Nu";
// Ban/Unban/Delete Member
$locale['420'] = "Suspendare impus&#259;";
$locale['421'] = "Suspendare eliminat&#259;";
$locale['422'] = "Membru &#351;ters";
$locale['423'] = "Esti sigur ca vrei sa stergi acest membru?";
$locale['424'] = "Membru activat";
// Edit Member Details
$locale['430'] = "Editare membru";
$locale['431'] = "Detalii membru actualizate";
$locale['432'] = "Revenire la Administrare membri";
$locale['433'] = "Revenire la Index Administrare";
$locale['434'] = "Nu pot actualiza detaliile membrului:";
// Extra Edit Member Details form options
$locale['440'] = "Salveaz&#259; modific&#259;rile";
// Update Profile Errors
$locale['450'] = "Nu po&#355;i edita administratorul principal.";
$locale['451'] = "Trebuie s&#259; specifici un nume de utilizator &#351;i o adres&#259; de email.";
$locale['452'] = "Numele de utilizator con&#355;ine caractere nepermise.";
$locale['453'] = "Numele de utilizator ".(isset($_POST['user_name']) ? $_POST['user_name'] : "")." este folosit.";
$locale['454'] = "Adresa de email nu este valid&#259;.";
$locale['455'] = "Adresa de email ".(isset($_POST['user_email']) ? $_POST['user_email'] : "")." este folosit&#259;.";
$locale['456'] = "Noile parole nu se potrivesc.";
$locale['457'] = "Parol&#259; incorect&#259;. Folose&#351;te numai caractere alfanumerice.<br>
Parola trebuie s&#259; con&#355;in&#259; minim 6 caractere.";
$locale['458'] = "<b>Aten&#355;ie:</b> execu&#355;ie de script nea&#351;teptat&#259;.";
// View Member Profile
$locale['470'] = "Profil membru";
$locale['472'] = "Statistici";
$locale['473'] = "Grupuri de utilizatori";
// Add Member Errors
$locale['480'] = "Adaug&#259; un membru";
$locale['481'] = "Contul membrului a fost creat.";
$locale['482'] = "Contul membrului nu a putut fi creat.";
// Suspension Log 
$locale['510s'] = "Jurnalul de suspend&#259;ri pentru ";
$locale['511s'] = "Nu exist&#259; suspend&#259;ri pentru acest membru &#238;n jurnalul de suspend&#259;ri.";
$locale['512s'] = "Suspend&#259;rile anterioare pentru ";
$locale['513'] = "Nr."; // as in number
$locale['514'] = "Dat&#259;";
$locale['515'] = "Motiv";
$locale['516'] = "Administrator";
$locale['517'] = "Ac&#355;iune";
$locale['518'] = "&#206;napoi la profilul utilizatorului";
$locale['519'] = "Jurnalul de suspendare pentru acest utilizator ";
$locale['520'] = "Ridicat&#259;: ";
$locale['521'] = "IP: ";
$locale['522'] = "&#206;nc&#259; nu este reactivat";
$locale['540'] = "Eroare";
$locale['541'] = "Eroare: Trebuie s&#259; scrii un motiv pentru suspendare!";
$locale['542'] = "Eroare: Trebuie s&#259; scrii un motiv pentru blocarea de securitate!";
// User Management Admin
$locale['550'] = "Suspend&#259; utilizator: ";
$locale['551'] = "Zile";
$locale['552'] = "Motiv:";
$locale['553'] = "Suspend&#259;";
$locale['554'] = "Nu exist&#259; suspend&#259;ri pentru acest utilizator &#238;n jurnalul de suspend&#259;ri.";
$locale['555'] = "Dac&#259; tu decizi c&#259; acest utilizator trebuie suspendat apas&#259; pe 'Suspend&#259;'";
$locale['556'] = "Ridic&#259; suspendarea pentru utilizatorul: ";
$locale['557'] = "Ridic&#259; suspendarea";
$locale['558'] = "Ridic&#259; blocarea pentru utilizatorul: ";
$locale['559'] = "Ridic&#259; blocarea ";
$locale['560'] = "Ridic&#259; blocarea de securitate pentru utilizatorul: ";
$locale['561'] = "Ridic&#259; blocarea de securitate";
$locale['562'] = "Blocheaz&#259; utilizator: ";
$locale['563'] = "Blocheaz&#259; utilizator: ";
$locale['585a'] = "Te rog specific&#259; un motiv pentru blocare sau deblocare ";

$locale['566'] = "Blocare ridicat&#259;";
$locale['568'] = "Blocare de securitate impus&#259;";
$locale['569'] = "Blocare de securitate ridicat&#259;";
$locale['572'] = "Utilizator suspendat";
$locale['573'] = "Suspendare ridicat&#259;";
$locale['574'] = "Utilizator dezactivat";
$locale['575'] = "Utilizator reactivat";
$locale['576'] = "Cont anulat";
$locale['577'] = "Anularea contului anulat&#259;";
$locale['578'] = "Cont anulat &#351;i anonim";
$locale['579'] = "Anonimizarea contului anulat&#259;";
$locale['580'] = "Dezactiveaz&#259; utilizatori inactivi";
$locale['581'] = "Ai mai mult de 50 de utilizatori inactivi &#351;i va trebui s&#259; rulezi procesul de dezactivare de <strong>%d ori</strong>.";
$locale['582'] = "Reactiveaz&#259;";
$locale['583'] = "Reactiveaz&#259;";
$locale['584'] = "Selecteaz&#259; noul statut";
$locale['585'] = "Acest membru a fost suspendat pe motiv de securitate! E&#351;ti sigur c&#259; dore&#351;ti deblocarea lui?";

$locale['590'] = "Suspend&#259;-l pe";
$locale['591'] = "Reactiveaz&#259;-l pe";
$locale['592'] = "suspendarea";
$locale['593'] = "reactivarea";
$locale['594'] = "Te rog specific&#259; un motiv pentru ";
$locale['595'] = " utilizatorului ";
$locale['596'] = "Durat&#259;:";

$locale['600'] = "Blocare de securitate";
$locale['601'] = "blocat din motiv de securitate";
$locale['602'] = "Deblocheaz&#259;";
$locale['603'] = "deblocat";
$locale['604'] = "Motiv:";
// Deactivation System
$locale['610'] = "<strong>%d utilizator(i)</strong> nu s-au conectat de <strong>%d zi(le)</strong> &#351;i au fost marca&#355;i pentru dezactivare. 
Prin dezactivarea acestor utilizatori, vor avea <strong>%d zi(le)</strong> &#238;nainte ca ei s&#259; fie %s.";
$locale['611'] = "Este posibil ca unii dintre utilizatori s&#259; fi postat con&#355;inut pe saitul dvs., cum ar fi post&#259;ri &#238;n forum, fotografii, etc.
acestea vor fi &#351;terse atunci c&#226;nd vor fi &#351;ter&#351;i utilizatorii dezactiva&#355;i.";
$locale['612'] = "utilizator";
$locale['613'] = "utilizatori";
$locale['614'] = "Dezactiveaz&#259;";
$locale['615'] = "&#351;ter&#351;i permanent";
$locale['616'] = "anonim";
$locale['617'] = "Aten&#355;ie:";
$locale['618'] = "Este recomantat s&#259; schimbi ac&#355;iunea de dezactivare &#238;n anonim &#238;n loc de &#351;tergere pentru a preveni pierderi de date!";
$locale['619'] = "O po&#355;i face <a href='".ADMIN."settings_users.php".$aidlink."'>aici</a>.";
$locale['620'] = "anonim";
$locale['621'] = "Dezactivare automat&#259; a utilizatorilor inactivi.";
?>