<?php
// Member Management Options
$locale['400'] = "Membros";
$locale['401'] = "Usuário";
$locale['402'] = "Adicionar Novo Membro";
$locale['403'] = "Tipo de Usuário";
$locale['404'] = "Opções";
$locale['405'] = "Ver";
$locale['406'] = "Editar";
$locale['407'] = "Ativar";
$locale['408'] = "Desbanir";
$locale['409'] = "Banir";
$locale['410'] = "Remover";
$locale['411'] = "Não há membros %s";
$locale['412'] = " com a inicial ";
$locale['413'] = " começando com ";
$locale['414'] = "Mostrar Todos";
$locale['415'] = "Pesquisar por membros:";
$locale['416'] = "Buscar";
$locale['417'] = "Membros";
$locale['418'] = "Desativados";
$locale['419'] = "Banidos";
// Ban/Unban/Delete Member
$locale['420'] = "Banido";
$locale['421'] = "Desbanido";
$locale['422'] = "Membro Removido";
$locale['423'] = "Você tem certeza que deseja remover este membro?";
$locale['424'] = "Membro Ativado";
// Edit Member Details
$locale['430'] = "Editar Membro";
$locale['431'] = "Dados do Membro Atualizados";
$locale['432'] = "Retornar à Administração de Membros";
$locale['433'] = "Retornar ao Painel de Administração";
$locale['434'] = "Não foi possível atualizar os dados do Membro:";
// Extra Edit Member Details form options
$locale['440'] = "Salvar Alterações";
// Update Profile Errors
$locale['450'] = "Não é possível editar o administrador primário.";
$locale['451'] = "Você deve especificar um nome de usuário e um endereço de email.";
$locale['452'] = "O nome de usuário contém caracteres inválidos.";
$locale['453'] = "O nome de usuário ".(isset($_POST['user_name']) ? $_POST['user_name'] : "")." já está sendo utilizado.";
$locale['454'] = "Endereço de email inválido.";
$locale['455'] = "O endereço de email ".(isset($_POST['user_email']) ? $_POST['user_email'] : "")." já está sendo utilizado.";
$locale['456'] = "As senhas não combinam.";
$locale['457'] = "Senha inválida: use somente caracteres alfanuméricos.<br />
A senha deve conter, no mínimo, 6 caracteres.";
$locale['458'] = "<b>Aviso:</b> Execução de script inesperada.";
// View Member Profile
$locale['470'] = "Perfil do Membro";
$locale['472'] = "Estatísticas";
$locale['473'] = "Grupos de Usuários";
// Add Member Errors
$locale['480'] = "Adicionar Membro";
$locale['481'] = "A conta do membro foi criada.";
$locale['482'] = "A conta do membro não pôde ser criada.";
// Suspension Log 
$locale['510s'] = "Entrar para Suspensão "; // Ou 'Entrar para Suspender'
$locale['511s'] = "Não há suspensões registadas para este membro no registo de suspensão.";
$locale['512s'] = "suspensões anteriores do ";
$locale['513'] = "Num."; // como em número
$locale['514'] = "Data"; // ou 'Dados'
$locale['515'] = "Motivo"; // ou 'Justificativa' ou ainda 'Porquê'
$locale['516'] = "Suspender Administrador";
$locale['517'] = "Ação do Sistema";
$locale['518'] = "Voltar ao perfil de usuário"; // ou 'Voltar ao status de usuário'
$locale['519'] = "Histórico de suspenção deste usuário "; // ou 'Log de suspensão deste Usuário'
$locale['520'] = "Levantado: ";
$locale['521'] = "IP: ";
$locale['522'] = "Ainda não reintegrado";
$locale['540'] = "Erro";
$locale['541'] = "Erro: Você deve indicar um motivo para a suspensão!";
$locale['542'] = "Erro: Você deve indicar um motivo para o banimento!";
// User Management Admin
$locale['550'] = "Suspender usuário: ";
$locale['551'] = "Duração em dias:";
$locale['552'] = "Motivo:"; // ou 'Justificativa' ou ainda 'Porquê'
$locale['553'] = "Suspender";
$locale['554'] = "Não há suspensões registadas para este membro no registo de suspensão.";
$locale['555'] = "Se você decidir que esse usuário deve ser banido, clique em 'Banir'";
$locale['556'] = "Suspender Suspensão do Usuário: ";
$locale['557'] = "Suspender Suspensão";
$locale['558'] = "Suspender Proibição de Usuário: ";
$locale['559'] = "Suspender Proibição ";
$locale['560'] = "Suspender Proibição de Segurança de Usuário: ";
$locale['561'] = "Suspender Proibição de Segurança";
$locale['562'] = "Proibir Usuário: ";
$locale['563'] = "Proibir Usuário por Segurança: ";
$locale['585a'] = "Por favor, especifique uma razão por que você está proibindo ou autorizando ";

$locale['566'] = "proibição suspensa";
$locale['568'] = "Proibição de Segurança Imposta";
$locale['569'] = "Proibição de segurança Suspensa";
$locale['572'] = "Membro suspenso";
$locale['573'] = "Suspensão suspensa"; // Ficou estranho mas é isso mesmo
$locale['574'] = "Membro desativado";
$locale['575'] = "Membro reativado";
$locale['576'] = "Conta cancelada";
$locale['577'] = "Cancelamento de conta desfeito";
$locale['578'] = "Conta cancelada e tornada anônima"; // Estranho mas é isso
$locale['579'] = "Tornar conta anônima desfeita"; // Estranho mas é isso
$locale['580'] = "Desativar membros inativos";
$locale['581'] = "Você tem mais de 50 usuários inativos e terá que executar o processo de desativação <strong>%d vezes</strong>.";
$locale['582'] = "Reativar";
$locale['583'] = "Renová-lo"; // ou 'Renovar'
$locale['584'] = "Selecione o novo estatus";
$locale['585'] = "Este membro foi banido por razões de segurança! Tem certeza que deseja reintegrá-lo agora?";

$locale['590'] = "Suspender";
$locale['591'] = "Reativar";
$locale['592'] = "suspensão";
$locale['593'] = "retirar suspensão";
$locale['594'] = "Por favor, especifique uma razão por que você está ";
$locale['595'] = " o usuário ";
$locale['596'] = "Duração:";

$locale['600'] = "Banir por segurança";
$locale['601'] = "Banindo por segurança";
$locale['602'] = "Desfazer Proibição"; // Unban
$locale['603'] = "Desfazendo Proibição"; // unbanning
$locale['604'] = "Motivo:"; // ou 'Razão' ou 'Justificativa' ou ainda 'Porquê'
// Deactivation System
$locale['610'] = "<strong>%d usuário(s)</strong> não entrou por <strong>%d dia(s)</strong> e foram marcados como inativos. 
Ao desativar, estes usuários terão <strong>%d dia(s)</strong> antes de serem %s.";
$locale['611'] = "Por favor note que alguns usuários podem ter postado conteúdo em seu site, como postagens, comentários, fotos etc
estes serão eliminados quando os usuários forem desativados e excluídos.";
$locale['612'] = "usuário";
$locale['613'] = "usuários";
$locale['614'] = "Desativar";
$locale['615'] = "permanentemente apagado";
$locale['616'] = "tornar anônimo";
$locale['617'] = "Aviso:"; // ou 'Advertência' ou 'Informação' ou ainda 'Aviso prévio'
$locale['618'] = "É altamente recomendável mudar a ação de 'desactivação' para 'tornar anônimo' em vez de apagar e assim prevenir perda de dados!";
$locale['619'] = "Você pode fazê-lo aqui.";
$locale['620'] = "tornar anônimo";
$locale['621'] = "Desativação automática de usuários inativos.";
?>
