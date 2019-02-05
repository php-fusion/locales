<?php
$locale['email_create_subject'] = "Ο λογαριασμός έχει δημιουργηθεί στο ";
$locale['email_create_message'] = "Γεια σας [USER_NAME],\n
Ο λογαριασμός σας στο ".$settings['sitename']." έχει δημιουργηθεί.\n
Τώρα μπορείτε να συνδεθείτε χρησιμοποιώντας τα παρακάτω στοιχεία:\n
όνομα: [USER_NAME]\n
κωδικός: [PASSWORD]\n\n
Φιλικά,\n
".$settings['siteusername'];

$locale['email_activate_subject'] = "Ο λογαριασμός ενεργοποιείται σε ";
$locale['email_activate_message'] = "Γεια σας [USER_NAME],\n
Ο λογαριασμός σας στο ".$settings['sitename']." έχει ενεργοποιηθεί.\n
Τώρα μπορείτε να συνδεθείτε χρησιμοποιώντας επιλέξει όνομα χρήστη και κωδικό σας.\n\n
Φιλικά,\n
".$settings['siteusername'];

$locale['email_deactivate_subject'] = "Επανενεργοποίηση λογαριασμού απαιτείται σε ".$settings['sitename'];
$locale['email_deactivate_message'] = "Γεια σας [USER_NAME],\n
Έχει ".$settings['deactivation_period']." ημέρα (ες) από την τελευταία φορά συνδεδεμένος στο ".$settings['sitename'].". χρήστη σας έχει επισημανθεί ως αδρανείς, αλλά όλα τα στοιχεία του λογαριασμού σας και το περιεχόμενο παραμένει άθικτο.\n
Για να ενεργοποιήσετε το λογαριασμό σας απλά κάντε κλικ στον παρακάτω σύνδεσμο:\n
".$settings['siteurl']."reactivate.php?user_id=[USER_ID]&code=[CODE]\n\n
Φιλικά,\n
".$settings['siteusername'];

$locale['email_ban_subject'] = "Ο λογαριασμός σας στο ".$settings['sitename']." έχει απαγορευθεί";
$locale['email_ban_message'] = "Γεια σας [USER_NAME],\n
Ο λογαριασμός σας στο ".$settings['sitename']." έχει απαγορευθεί από ".$userdata['user_name']." λόγω των ακόλουθους λόγους::\n
[REASON].\n
Αν θέλετε περισσότερες πληροφορίες σχετικά με την απαγόρευση αυτή, παρακαλώ, επικοινωνήστε με τον διαχειριστή στο ".$settings['siteemail'].".\n
".$settings['siteusername'];

$locale['email_secban_subject'] = "Ο λογαριασμός σας στο ".$settings['sitename']." έχει απαγορευθεί";
$locale['email_secban_message'] = "Γεια σας [USER_NAME],\n
Ο λογαριασμός σας στο ".$settings['sitename']." έχει απαγορευθεί από ".$userdata['user_name']." λόγω κάποιων δράσεων διαπιστευθεί σε εσάς ή συνδέονται με τη του λογαριασμού σας θεωρήθηκαν απειλή για την ασφάλεια στο χώρο.\n
Αν θέλετε περισσότερες πληροφορίες σχετικά με αυτήν την απαγόρευση της ασφάλειας, παρακαλούμε επικοινωνήστε με τον διαχειριστή στο ".$settings['siteemail'].".\n
".$settings['siteusername'];

$locale['email_suspend_subject'] = "Ο λογαριασμός σας στο ".$settings['sitename']."έχει ανασταλεί";
$locale['email_suspend_message'] = "Γεια σας [USER_NAME],\n
Ο λογαριασμός σας στο ".$settings['sitename']." έχει ανασταλεί από ".$userdata['user_name']." μέχρι [DATE] (τοποθεσία χρόνο) λόγω των ακόλουθους λόγους:\n
[REASON].\n
Αν θέλετε περισσότερες πληροφορίες σχετικά με την αναστολή αυτή, παρακαλώ, επικοινωνήστε με τον διαχειριστή στο ".$settings['siteemail'].".\n
".$settings['siteusername'];
?>