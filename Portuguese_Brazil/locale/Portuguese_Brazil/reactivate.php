<?php
// Error messages
$locale['500'] = "Ocorreu um erro";
$locale['501'] = "O link de ativação que você clicou não é mais válido.<br /><br />
Contate o administrador do site em <a href='mailto:".$settings['siteemail']."'>".$settings['siteemail']."</a> caso você deseje solicitar uma re-ativação manual.";
$locale['502'] = "O link de re-ativação que você clicou é inválido novamente!<br /><br />
Contate o administrador do site em <a href='mailto:".$settings['siteemail']."'>".$settings['siteemail']."</a> caso você deseje solicitar uma re-ativação manual.";
$locale['503'] = "O link de re-ativação que você usou não pode ativar sua conta.<br />
Talvez a sua conta já foi reativada e, nesse caso, você deve ser capaz de <a href='".$settings['siteurl']."login.php'>entre aqui</a>.<br /><br />
Se você não consegue entrar, por favor contate o administrador do site em <a href='mailto:".$settings['siteemail']."'>".$settings['siteemail']."</a> caso você deseje solicitar uma re-ativação manual.";
// Send confirmation mail
$locale['504'] = "Conta reativada em ".$settings['sitename'];
$locale['505'] = "Olá [USER_NAME],\n
Sua conta em ".$settings['sitename']." foi re-ativada. Esperamos vê-lo com mais freqüência no site.\n\n
Atenciosamente,\n\n
".$settings['siteusername'];
$locale['506'] = "Reativado pelo usuário.";
?>
