<?php
/*
Portuguese Language Fileset
Produced by Sandro Dumke (Sandro Dumke)
Email: sandrodumke@phpfusionbrasil.com
Web: http://www.phpfusionbrasil.com
*/

// Locale Settings
setlocale(LC_TIME, "pt_BR","BR"); // Linux Server (Windows may differ)
$locale['charset'] = "iso-8859-1";
$locale['xml_lang'] = "pt-br";
$locale['tinymce'] = "pt";
$locale['phpmailer'] = "br";

// Full & Short Months
$locale['months'] = "&nbsp|Janeiro|Fevereiro|Março|Abril|Maio|Junho|Julho|Agosto|Setembro|Outubro|Novembro|Dezembro";
$locale['shortmonths'] = "&nbsp|Jan|Fev|Mar|Abr|Mai|Jun|Jul|Ago|Set|Out|Nov|Dez";

// Standard User Levels
$locale['user0'] = "Público";
$locale['user1'] = "Membro";
$locale['user2'] = "Administrador";
$locale['user3'] = "Super Administrador";
$locale['user_na'] = "Não Disponível";
$locale['user_anonymous'] = "Usuário Anônimo";
// Standard User Status
$locale['status0'] = "Ativo";
$locale['status1'] = "Banido";
$locale['status2'] = "Desativado";
$locale['status3'] = "Suspenso";
$locale['status4'] = "Banido por Medida de Segurança";
$locale['status5'] = "Cancelado";
$locale['status6'] = "Anônimo";
$locale['status7'] = "Desativado";
$locale['status8'] = "Inativo";
// Forum Moderator Level(s)
$locale['userf1'] = "Moderador";
// Navigation
$locale['global_001'] = "Navegação";
$locale['global_002'] = "Não há links definidos\n";
// Users Online
$locale['global_010'] = "Usuários Online";
$locale['global_011'] = "Visitantes Online";
$locale['global_012'] = "Membros Online";
$locale['global_013'] = "Não há Membros Online";
$locale['global_014'] = "Membros Registrados";
$locale['global_015'] = "Membros Desativados";
$locale['global_016'] = "Mais Novo Membro";
// Forum Side panel
$locale['global_020'] = "Tópicos do Fórum";
$locale['global_021'] = "Últimos Tópicos";
$locale['global_022'] = "Tópicos Populares";
$locale['global_023'] = "Nenhum Tópico criado";
// Comments Side panel
$locale['global_025'] = "Últimos Comentários";
$locale['global_026'] = "Nenhum comentário disponível";
// Articles Side panel
$locale['global_030'] = "Artigos Recentes";
$locale['global_031'] = "Nenhum Artigo disponível";
// Downloads Side panel
$locale['global_032'] = "Downloads Recentes";
$locale['global_033'] = "Nenhum Download disponível";
// Welcome panel
$locale['global_035'] = "Bem-vindo";
// Latest Active Forum Threads panel
$locale['global_040'] = "Últimos Tópicos Ativos no Fórum";
$locale['global_041'] = "Meus Tópicos";
$locale['global_042'] = "Minhas Mensagens";
$locale['global_043'] = "Novas Mensagens";
$locale['global_044'] = "Tópico";
$locale['global_045'] = "Visualizações";
$locale['global_046'] = "Respostas";
$locale['global_047'] = "Última Mensagem";
$locale['global_048'] = "Fórum";
$locale['global_049'] = "Enviado";
$locale['global_050'] = "Autor";
$locale['global_051'] = "Enquete";
$locale['global_052'] = "Movido";
$locale['global_053'] = "Você não iniciou nenhum tópico no fórum.";
$locale['global_054'] = "Você não enviou nenhuma mensagem no fórum.";
$locale['global_055'] = "Há %u novas mensagens desde sua última visita.";
$locale['global_056'] = "Tópicos Rastreados";
$locale['global_057'] = "Opções";
$locale['global_058'] = "Parar";
$locale['global_059'] = "Você não está acompanhando nenhum tópico.";
$locale['global_060'] = "Não acompanhar mais este tópico?";
// News & Articles
$locale['global_070'] = "Enviado por ";
$locale['global_071'] = "em ";
$locale['global_072'] = "Leia Mais";
$locale['global_073'] = " Comentários";
$locale['global_073b'] = " Comentário";
$locale['global_074'] = " Leituras";
$locale['global_075'] = "Imprimir";
$locale['global_076'] = "Editar";
$locale['global_077'] = "Notícias";
$locale['global_078'] = "Nenhuma notícia foi publicada";
$locale['global_079'] = "Em ";
$locale['global_080'] = "Sem Categoria";
// Page Navigation
$locale['global_090'] = "Anterior";
$locale['global_091'] = "Próxima";
$locale['global_092'] = "Página ";
$locale['global_093'] = " de ";
// Guest User Menu
$locale['global_100'] = "Entrar";
$locale['global_101'] = "Usuário";
$locale['global_102'] = "Senha";
$locale['global_103'] = "Lembrar-me";
$locale['global_104'] = "Entrar";
$locale['global_105'] = "Não é um membro ainda?<br /><a href='".BASEDIR."register.php' class='side'>Clique aqui</a> e registre-se.";
$locale['global_106'] = "Esqueceu sua senha?<br />Solicite uma nova <a href='".BASEDIR."lostpassword.php' class='side'>aqui</a>.";
$locale['global_107'] = "Registro";
$locale['global_108'] = "Recuperar senha";
// Member User Menu
$locale['global_120'] = "Editar Perfil";
$locale['global_121'] = "Mensagens Privadas";
$locale['global_122'] = "Lista de Membros";
$locale['global_123'] = "Painel de Administração";
$locale['global_124'] = "Sair";
$locale['global_125'] = "Você tem %u ";
$locale['global_126'] = "nova mensagem";
$locale['global_127'] = "novas mensagens";
$locale['global_128'] = "sujeição";
$locale['global_129'] = "sujeições";
// Poll
$locale['global_130'] = "Enquete";
$locale['global_131'] = "Votar";
$locale['global_132'] = "Você deve entrar para votar.";
$locale['global_133'] = "Voto";
$locale['global_134'] = "Votos";
$locale['global_135'] = "Votos: ";
$locale['global_136'] = "Iniciada: ";
$locale['global_137'] = "Finalizada: ";
$locale['global_138'] = "Arquivo de Enquetes";
$locale['global_139'] = "Selecione uma Enquete na lista para vê-la:";
$locale['global_140'] = "Ver";
$locale['global_141'] = "Ver Enquete";
$locale['global_142'] = "Não há enquetes definidas.";

// Captcha
$locale['global_150'] = "Código de Validação:";
$locale['global_151'] = "Digite o código de validação:";

// Footer Counter
$locale['global_170'] = "visita única";
$locale['global_171'] = "visitas únicas";
$locale['global_172'] = "Tempo de renderização: %s segundos";
$locale['global_173'] = "Consultas";
// Admin Navigation
$locale['global_180'] = "Início da Administração";
$locale['global_181'] = "Retornar ao Site";
$locale['global_182'] = "<strong>Aviso:</strong> Senha administrativa não inserida ou incorreta.";
// Miscellaneous
$locale['global_190'] = "Modo de Manutenção Ativado";
$locale['global_191'] = "Seu endereço de IP está na lista negra.";
$locale['global_192'] = "O cookie do usuário expirou. Por favor faça login novamente para continuar.";
$locale['global_193'] = "Não foi possível criar o cookie do usuário. Por favor, certifique-se de ter os cookies ativados para poder efetuar login corretamente.";
$locale['global_194'] = "Esta conta está suspensa.";
$locale['global_195'] = "Esta conta não foi ativada.";
$locale['global_196'] = "Nome de usuário e/ou senha inválidos.";
$locale['global_197'] = "Por favor, aguarde enquanto lhe transferimos...<br /><br />
[ <a href='index.php'>Ou clique aqui caso não deseje esperar</a> ]";
$locale['global_198'] = "<strong>Alerta:</strong> setup.php detectado. Por favor, remova-o imediatamente.";
$locale['global_199'] = "<strong>Aviso:</strong> senha administrativa indefinida. Clique em <a href='edit_profile.php'>Editar Perfil</a> para defini-la.";
//Titles
$locale['global_200'] = " - ";
$locale['global_201'] = ": ";
$locale['global_202'] = $locale['global_200']."Busca";
$locale['global_203'] = $locale['global_200']."FAQ";
$locale['global_204'] = $locale['global_200']."Fórum";
//Themes
$locale['global_210'] = "Ir ao conteúdo";
// No themes found
$locale['global_300'] = "Nenhum tema encontrado";
$locale['global_301'] = "Perdão, mas esta página não pode ser exibida. Por causa de algumas circunstâncias não pôdemos encontrar nenhum tema para o site. Caso você seja administrador do site, então utilize seu cliente FTP e faça upload, para o diretório <em>themes/</em>, de qualquer tema para o <em>PHP-Fusion v7.02</em>. Após o upload do tema, cheque as suas <em>Configurações Principais</em> e verifique se o tema selecionado está na sua pasta <em>themes/</em>. Caso afirmativo, verifique se o tema selecionado possui o mesmo nome (considerando maiúsculas e minúsculas - importante em servidores baseados em UNIX) assim como escolhido na página <em>Configurações Principais</em>. Se você é um usuário comum deste site, contate o administrador pelo email ".hide_email($settings['siteemail'])." e reporte o problema.";
$locale['global_302'] = "O tema escolhido nas Configurações Principais não existe ou está incompleto!";
// JavaScript Not Enabled
$locale['global_303'] = "Oh não! Onde está o <strong>JavaScript</strong>?<br /> Seu navegador não possui JavaScript ativado ou não suportar JavaScript. Por favor, <strong>habilite o JavaScript</strong> no seu browser para visualizar corretamente este site,<br /> ou <strong>atualize</strong> para um browser que suporte JavaScript; <a href='http://firefox.com' rel='nofollow' title='Mozilla Firefox'>Firefox</a>, <a href='http://apple.com/safari/' rel='nofollow' title='Safari'>Safari</a>, <a href='http://opera.com' rel='nofollow' title='Navegador Opera'>Opera</a>, <a href='http://www.google.com/chrome' rel='nofollow' title='Google Chrome'>Chrome</a> ou uma versão do <a href='http://www.microsoft.com/windows/internet-explorer/' rel='nofollow' title='Internet Explorer'>Internet Explorer</a> superior a versão 6.";
// User Management
// Member status
$locale['global_400'] = "suspenso";
$locale['global_401'] = "banido";
$locale['global_402'] = "desativado";
$locale['global_403'] = "conta encerrada";
$locale['global_404'] = "conta anônima";
$locale['global_405'] = "suário anonimo";
$locale['global_406'] = "Esta conta foi banida pelo seguinte motivo:";
$locale['global_407'] = "Esta conta foi suspensa até";
$locale['global_408'] = " pelo seguinte motivo:";
$locale['global_409'] = "Esta conta foi banida por motivo de segurança.";
$locale['global_410'] = "Motivo: ";
$locale['global_411'] = "Esta conta foi cancelada.";
$locale['global_412'] = "Esta é uma conta anônima, provavelmente pela inatividade.";
// Banning due to flooding
$locale['global_440'] = "Banimento Automático por controle de Flood";
$locale['global_441'] = "Sua conta ".$settings['sitename']." foi banida";
$locale['global_442'] = "Olá [USER_NAME],\n
sua conta ".$settings['sitename']." foi observada com muitas postagens em um curto espaço de tempo pelo IP ".USER_IP.", e a mesma foi banida para evitar ataques de SPAMMERS.\n
Entre em contato com o administrador pelo e-mail ".$settings['siteemail']." para ter a sua conta restaurada ou um relatório do motivo pelo qual a conta foi banida. \n
".$settings['siteusername'];
// Lifting of suspension
$locale['global_450'] = "Suspensão automática restaurada pelo sistema.";
$locale['global_451'] = "Suspensão restaurada para ".$settings['sitename'];
$locale['global_452'] = "Olá USER_NAME,\n
a suspensão da sua conta em ".$settings['siteurl']." foi restaurada. Suas informações de login:\n
Login: USER_NAME
Senha: Ocultado por questão de segurança.\n
Se você esqueceu a sua senha, você pode recuperar-la pelo seguinte link: LOST_PASSWORD\n\n
Saudações,\n
".$settings['siteusername'];
$locale['global_453'] = "Olá USER_NAME,\n
A suspensão da sua conta ".$settings['siteurl']." foi restaurada.\n\n
Atenciosamente,\n
".$settings['siteusername'];
$locale['global_454'] = "Conta reativada no site ".$settings['sitename'];
$locale['global_455'] = "Olá USER_NAME,\n
A última vez que logou-se no site ".$settings['siteurl']." a sua conta foi reativada e não esta mais marcada como conta inativa.\n\n
Atenciosamente,\n
".$settings['siteusername'];
// Function parsebytesize()
$locale['global_460'] = "Vazio";
$locale['global_461'] = "Bytes";
$locale['global_462'] = "KB";
$locale['global_463'] = "MB";
$locale['global_464'] = "GB";
$locale['global_465'] = "TB";
//Safe Redirect
$locale['global_500'] = "Você está sendo redirecionado para %s, por favor, espere. Se você não for redirecionado, clique aqui.";

// Captcha Locales
$locale['global_600'] = "Código de Validação";
$locale['recaptcha'] = "pt";

//Miscellaneous
$locale['global_900'] = "Não é possível converter HEX para DEC";
?>