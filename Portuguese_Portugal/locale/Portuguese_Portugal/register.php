<?php
$locale['400'] = "Registo";
$locale['401'] = "Activar Conta";
// Registration Errors
$locale['402'] = "Você deve especificar um nome de utilizador, senha e o seu endereço de email.";
$locale['403'] = "O nome de utilizador contém caracteres inválidos.";
$locale['404'] = "As duas Senhas não combinam.";
$locale['405'] = "Senha inválida. Use somente caracteres alfanuméricos.<br />
A Senha deve conter, no mínimo, 6 caracteres.";
$locale['406'] = "Seu endereço de email parece ser inválido.";
$locale['407'] = "Desculpe, o nome de utilizador ".(isset($_POST['username']) ? $_POST['username'] : "")." já existe.";
$locale['408'] = "Desculpe, o endereço de email ".(isset($_POST['email']) ? $_POST['email'] : "")." já existe.";
$locale['409'] = "Uma conta desactivada foi registada com este endereço de email.";
$locale['410'] = "Código de validação incorreto.";
$locale['411'] = "O seu endereço ou fornecedor de email está na lista negra.";
// Email Message
$locale['449'] = "Bem-vindo(a) ao ".$settings['sitename'];
$locale['450'] = "Olá ".(isset($_POST['username']) ? $_POST['username'] : "").",\n
Bem-vindo(a) ao ".$settings['sitename'].". Aqui estão os dados de sua conta:\n
Nome de Utilizador: ".(isset($_POST['username']) ? $_POST['username'] : "")."
Senha: ".(isset($_POST['password1']) ? $_POST['password1'] : "")."\n
Active sua conta clicando no seguinte link:\n";
// Registration Success/Fail
$locale['451'] = "Registo concluído";
$locale['452'] = "Você pode entrar agora.";
$locale['453'] = "Um administrador activará sua conta.";
$locale['454'] = "Seu registo está quase completo: receberá um e-mail contendo os dados de sua conta junto de um link para ativá-la.";
$locale['455'] = "Sua conta foi verificada.";
$locale['456'] = "O registo falhou";
$locale['457'] = "O envio do email falhou. Por favor, contacte o <a href='mailto:".$settings['siteemail']."'>Administrador do Site</a>.";
$locale['458'] = "O registo falhou pelo(s) seguinte(s) motivo(s):";
$locale['459'] = "Por favor, tente novamente";
// Register Form
$locale['500'] = "Por favor, preencha os dados solicitados abaixo. ";
$locale['501'] = "Um email de verificação será enviado para o endereço de email especificado. ";
$locale['502'] = "Os campos marcados com <span style='color:#ff0000;'>*</span> são de preenchimento obrigatório.
O nome de utilizador e senha diferenciam maiúsculas de minúsculas.";
$locale['503'] = " Uma vez registado, poderá inserir informações adicionais em <em>Editar Perfil</em>.";
$locale['504'] = "Código de Validação:";
$locale['505'] = "Insira o Código de Validação:";
$locale['506'] = "Registar";
$locale['507'] = "O sistema de registos está desactivado.";
$locale['508'] = "Termos de Registo";
$locale['509'] = "Eu li e aceito os <a href='".BASEDIR."print.php?type=T' target='_blank'>Termos de Registo</a>.";
// Validation Errors
$locale['550'] = "Por favor, especifique um nome de utilizador.";
$locale['551'] = "Por favor, especifique uma senha.";
$locale['552'] = "Por favor, especifique um endereço de email.";
?>