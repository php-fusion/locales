<?php
// Official SVN Trunk Rev: 1732
$locale['email_create_subject'] = "Utworzono konto na ";
$locale['email_create_message'] = "Witaj [USER_NAME]!\n
Twoje konto na ".$settings['sitename']." zostało utworzone.\n
Teraz możesz zalogować się, korzystając z poniższych informacji:\n
nazwa użytkownika: [USER_NAME]\n
hasło: [PASSWORD]\n\n
Z pozdrowieniami\n\n
".$settings['siteusername']."\n\n
------\n
Niniejsza wiadomość została wysłana automatycznie. Nie odpowiadaj na nią.";

$locale['email_activate_subject'] = "Aktywowano konto na ";
$locale['email_activate_message'] = "Witaj [USER_NAME]!\n
Twoje konto na  ".$settings['sitename']." zostało aktywowane.\n
Teraz możesz zalogować się przy użyciu swojej nazwy użytkownika i hasła.\n
Wszystkiego dobrego\n
".$settings['siteusername'];

$locale['email_deactivate_subject'] = "Reaktywacja konta na ".$settings['sitename'];
$locale['email_deactivate_message'] = "Witaj [USER_NAME]!\n
Minęło ".$settings['deactivation_period']." dni od Twojego ostatniego zalogowania się na ".$settings['sitename'].". Twoje konto zostało uznane za bezczynne. Dane z nim związane pozostały niezmienione.\n
Aby reaktywować konto, naciśnij na poniższy link:\n
".$settings['siteurl']."reactivate.php?user_id=[USER_ID]&code=[CODE]\n
Z pozdrowieniami\n\n
".$settings['siteusername']."\n\n
------\n
Niniejsza wiadomość została wysłana automatycznie. Nie odpowiadaj na nią.";

$locale['email_ban_subject'] = "Twoje konto na ".$settings['sitename']." zostało zablokowane";
$locale['email_ban_message'] = "Witaj [USER_NAME]!\n
Twoje konto na ".$settings['sitename']." zostało zablokowane przez ".$userdata['user_name']." z następujących powodów:\n
[REASON].\n
Jeśli potrzebujesz szczegółowych informacji dotyczących blokady konta, skontaktuj się z administracją strony wysyłając e-mail na adres ".$settings['siteemail'].".\n
Z pozdrowieniami\n\n
".$settings['siteusername']."\n\n
------\n
Niniejsza wiadomość została wysłana automatycznie. Nie odpowiadaj na nią.";

$locale['email_secban_subject'] = "Twoje konto na ".$settings['sitename']." zostało zablokowane";
$locale['email_secban_message'] = "Witaj [USER_NAME]!\n
Twoje konto na ".$settings['sitename']." zostało zablokowane przez ".$userdata['user_name'].", ponieważ podjęte przez Ciebie działania stanowiły zagrożenie dla strony i jej użytkowników.\n
Jeśli potrzebujesz szczegółowych informacji dotyczących blokady konta, skontaktuj się z administracją strony wysyłając e-mail na adres ".$settings['siteemail'].".\n
Z pozdrowieniami\n\n
".$settings['siteusername']."\n\n
------\n
Niniejsza wiadomość została wysłana automatycznie. Nie odpowiadaj na nią.";

$locale['email_suspend_subject'] = "Twoje konto na ".$settings['sitename']."zostało zawieszone";
$locale['email_suspend_message'] = "Witaj [USER_NAME]!\n
Twoje konto na ".$settings['sitename']." zostało zawieszona przez ".$userdata['user_name']." do [DATE] (wg czasu strony) z następujących powodów:\n
[REASON].\n
Jeśli potrzebujesz szczegółowych informacji dotyczących zawieszenia konta, skontaktuj się z administracją strony wysyłając e-mail na adres ".$settings['siteemail'].".\n
Z pozdrowieniami\n\n
".$settings['siteusername']."\n\n
------\n
Niniejsza wiadomość została wysłana automatycznie. Nie odpowiadaj na nią."
?>
