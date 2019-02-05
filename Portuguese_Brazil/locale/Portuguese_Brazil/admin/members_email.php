<?php
$locale['email_create_subject'] = "Conta criada em ";
$locale['email_create_message'] = "Olс [USER_NAME],\n
Sua conta no ".$settings['sitename']." jс foi criada.\n
Agora vocъ pode entrar usando seus dados abaixo:\n
Usuсrio: [USER_NAME]\n
Senha: [PASSWORD]\n\n
Saudaчѕes,\n
".$settings['siteusername'];

$locale['email_activate_subject'] = "Conta criada em ";
$locale['email_activate_message'] = "Olс [USER_NAME],\n
Sua conta no ".$settings['sitename']." jс foi criada.\n
Agora vocъ pode entrar usando o Usuсrio e Senha criados.\n\n
Saudaчѕes,\n
".$settings['siteusername'];

$locale['email_deactivate_subject'] = "Reativaчуo da conta requerida em ".$settings['sitename'];
$locale['email_deactivate_message'] = "Olс [USER_NAME],\n
Jс se passou ".$settings['deactivation_period']." dia(s) desde seu њltimo acesso no site ".$settings['sitename'].". Seu nome de usuсrio foi marcado como inativo mas todos os dados da sua conta e contњdo permanecem intactos.\n
Para reativar a sua conta basta clicar no link abaixo:\n
".$settings['siteurl']."reactivate.php?user_id=[USER_ID]&code=[CODE]\n\n
Saudaчѕes,\n
".$settings['siteusername'];

$locale['email_ban_subject'] = "Sua conta no ".$settings['sitename']." foi banida";
$locale['email_ban_message'] = "Olс [USER_NAME],\n
Sua conta no ".$settings['sitename']." foi banida para ".$userdata['user_name']." Pelo motivo citado abaixo:\n
[REASON].\n
Caso deseje saber mais informaчѕes sobre este banimento, por favor, entre em contato como o administrador do site em ".$settings['siteemail'].".\n
".$settings['siteusername'];

$locale['email_secban_subject'] = "Sua conta no ".$settings['sitename']." foi banida";
$locale['email_secban_message'] = "Olс [USER_NAME],\n
Sua conta no ".$settings['sitename']." foi banida para ".$userdata['user_name']." porque acretita-se que algumas aчѕes estуo associadas р sua conta. Foi considerada questуo de seguranчa no site.\n
Caso deseje saber mais informaчѕes sobre este banimento por seguranчa, por favor, entre em contato como o administrador do site em 
".$settings['siteemail'].".\n
".$settings['siteusername'];

$locale['email_suspend_subject'] = "Sua conta no ".$settings['sitename']." foi suspensa";
$locale['email_suspend_message'] = "Olс [USER_NAME],\n
Sua conta no ".$settings['sitename']." foi suspensa para ".$userdata['user_name']." em [DATE] (site time) Pelo motivo citado abaixo:\n
[REASON].\n
Caso deseje saber mais informaчѕes sobre esta suspensуo, por favor, contate o administrador do site em 
".$settings['siteemail'].".\n
".$settings['siteusername'];
?>