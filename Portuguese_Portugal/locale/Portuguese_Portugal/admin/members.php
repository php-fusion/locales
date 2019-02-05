<?php
// Member Management Options
$locale['400'] = "Membros";
$locale['401'] = "Utilizador";
$locale['402'] = "Adicionar Novo Membro";
$locale['403'] = "Tipo de Utilizador";
$locale['404'] = "Opções";
$locale['405'] = "Ver";
$locale['406'] = "Editar";
$locale['407'] = "Activar";
$locale['408'] = "Desbanir";
$locale['409'] = "Banir";
$locale['410'] = "Remover";
$locale['411'] = "Não há membros %s";
$locale['412'] = " com a inicial ";
$locale['413'] = " começando com ";
$locale['414'] = "Mostrar Todos";
$locale['415'] = "Pesquisar por membros:";
$locale['416'] = "Pesquisar";
// Member types
$locale['417'] = "Membros";
$locale['418'] = "Desactivados";
$locale['419'] = "Banidos";
// Ban/Unban/Delete Member
$locale['420'] = "Banido";
$locale['421'] = "Desbanido";
$locale['422'] = "Membro Removido";
$locale['423'] = "Você tem certeza que deseja remover este membro?";
$locale['424'] = "Membro Activado";
$locale['425'] = "Conta activada em ";
$locale['426'] = "Olá [USER_NAME],\n
Sua conta em ".$settings['sitename']." foi activada.\n
Você já pode entrar utilizando o nome de utilizador e senha escolhidos.\n
Atentamente,
".$settings['siteusername'];
// Edit Member Details
$locale['430'] = "Editar Membro";
$locale['431'] = "Dados do Membro Actualizados";
$locale['432'] = "Voltar à Administração de Membros";
$locale['433'] = "Voltar ao Painel de Administração";
$locale['434'] = "Não foi possível actualizar os dados do Membro:";
// Extra Edit Member Details form options
$locale['440'] = "Gravar Alterações";
// Update Profile Errors
$locale['450'] = "Não é possível editar o administrador principal.";
$locale['451'] = "Você deve especificar um nome de utilizador e um endereço de email.";
$locale['452'] = "O nome de utilizador contém caracteres inválidos.";
$locale['453'] = "O nome de utilizador ".(isset($_POST['user_name']) ? $_POST['user_name'] : "")." já está em uso.";
$locale['454'] = "Endereço de email inválido.";
$locale['455'] = "O endereço de email ".(isset($_POST['user_email']) ? $_POST['user_email'] : "")." já está em uso.";
$locale['456'] = "As senhas não combinam.";
$locale['457'] = "Senha inválida: use apenas caracteres alfanuméricos.<br />
A senha deve conter, no mínimo, 6 caracteres.";
$locale['458'] = "<b>Aviso:</b> Execução de script inesperada.";
// View Member Profile
$locale['470'] = "Perfil do Membro";
$locale['472'] = "Estatísticas";
$locale['473'] = "Grupos de Utilizadores";
// Add Member Errors
$locale['480'] = "Adicionar Membro";
$locale['481'] = "A conta do membro foi criada.";
$locale['482'] = "A conta do membro não pôde ser criada.";
?>