<?php
$locale['email_create_subject'] = "Utworzono konto na ";
$locale['email_create_message'] = "Witaj [USER_NAME]!

Twoje konto na ".$settings['sitename']." zostało utworzone.

Teraz możesz zalogować się, korzystając z poniższych informacji:

nazwa użytkownika: [USER_NAME]

hasło: [PASSWORD]


Z pozdrowieniami


".$settings['siteusername'];
$locale['email_activate_subject'] = "Aktywowano konto na ";
$locale['email_activate_message'] = "Witaj [USER_NAME]!

Twoje konto na  ".$settings['sitename']." zostało aktywowane.

Teraz możesz zalogować się przy użyciu swojej nazwy użytkownika i hasła.

Wszystkiego dobrego

".$settings['siteusername'];
$locale['email_deactivate_subject'] = "Reaktywacja konta na ".$settings['sitename'];
$locale['email_deactivate_message'] = "Witaj [USER_NAME]!

Minęło ".$settings['deactivation_period']." dni od Twojego ostatniego zalogowania się na ".$settings['sitename'].". Twoje konto zostało uznane za bezczynne. Dane z nim związane pozostały niezmienione.

Aby reaktywować konto, naciśnij na poniższy link:

".$settings['siteurl']."reactivate.php?user_id=[USER_ID]&code=[CODE]

Z pozdrowieniami


".$settings['siteusername'];
$locale['email_ban_subject'] = "Twoje konto na ".$settings['sitename']." zostało zablokowane";
$locale['email_ban_message'] = "Witaj [USER_NAME]!

Twoje konto na ".$settings['sitename']." zostało zablokowane przez ".$userdata['user_name']." z następujących powodów:

[REASON].

Jeśli potrzebujesz szczegółowych informacji dotyczących blokady konta, skontaktuj się z administracją strony wysyłając e-mail na adres ".$settings['siteemail'].".

Z pozdrowieniami


".$settings['siteusername'];
$locale['email_secban_subject'] = "Twoje konto na ".$settings['sitename']." zostało zablokowane";
$locale['email_secban_message'] = "Witaj [USER_NAME]!

Twoje konto na ".$settings['sitename']." zostało zablokowane przez ".$userdata['user_name'].", ponieważ podjęte przez Ciebie działania stanowiły zagrożenie dla strony i jej użytkowników.

Jeśli potrzebujesz szczegółowych informacji dotyczących blokady konta, skontaktuj się z administracją strony wysyłając e-mail na adres ".$settings['siteemail'].".

Z pozdrowieniami


".$settings['siteusername'];
$locale['email_suspend_subject'] = "Twoje konto na ".$settings['sitename']."zostało zawieszone";
$locale['email_suspend_message'] = "Hello [USER_NAME],

Your account on ".$settings['sitename']." has been suspended by ".$userdata['user_name']." until [DATE] (site time) because of the following reason:

[REASON].

If you want more information about this suspension, please, contact the site administrator at ".$settings['siteemail'].".

".$settings['siteusername'];
