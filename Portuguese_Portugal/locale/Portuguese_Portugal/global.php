<?php
/*
Portuguese Portugal Language Fileset
Produced by "PHP-Fusion Portugal"
Web: http://www.php-fusion.com.pt
Version: 1.2 draft
TODO: BB Codes

Lead Translator:
José Caneira (jcaneira)

(soon to be) Reviewed by:
António Vasconcelos (vasco)

Special Thanks:
PHP-Fusion Brasil translation team

Based on:
Brazilian Portuguese Language Fileset
Original Credits:
"PHP-Fusion Brasil"
Web: http://phpfusion-br.com
Lead Translator:
Patric Forcelini (IceWasp)
Translators Contributors:
Jefferson Silva Mendes (technojeff)
Igor Ferreira Cemim (Splash)
*/

// Locale Settings
setlocale(LC_TIME, "pt_PT","PT"); // Linux Server (Windows may differ)
$locale['charset'] = "iso-8859-1";
$locale['xml_lang'] = "en";
$locale['tinymce'] = "en";
$locale['phpmailer'] = "en";

// Full & Short Months
$locale['months'] = "&nbsp|Janeiro|Fevereiro|Março|Abril|Maio|Junho|Julho|Agosto|Setembro|Outubro|Novembro|Dezembro";
$locale['shortmonths'] = "&nbsp|Jan|Fev|Mar|Abr|Mai|Jun|Jul|Ago|Set|Out|Nov|Dez";

// Standard User Levels
$locale['user0'] = "Público";
$locale['user1'] = "Membro";
$locale['user2'] = "Administrador";
$locale['user3'] = "Super Administrador";
// Forum Moderator Level(s)
$locale['userf1'] = "Moderador";
// Navigation
$locale['global_001'] = "Navegação";
$locale['global_002'] = "Não há links definidos\n";
// Users Online
$locale['global_010'] = "Utilizadores Online";
$locale['global_011'] = "Visitantes Online";
$locale['global_012'] = "Membros Online";
$locale['global_013'] = "Não há Membros Online";
$locale['global_014'] = "Membros Registados";
$locale['global_015'] = "Membros Desactivados";
$locale['global_016'] = "Último Membro";
// Forum Side panel
$locale['global_020'] = "Tópicos do Fórum";
$locale['global_021'] = "Últimos Tópicos";
$locale['global_022'] = "Tópicos Populares";
$locale['global_023'] = "Nenhum Tópico criado";
// Articles Side panel
$locale['global_030'] = "Últimos Artigos";
$locale['global_031'] = "Nenhum Artigo disponível";
// Welcome panel
$locale['global_035'] = "Bem-vindo(a)";
// Latest Active Forum Threads panel
$locale['global_040'] = "Últimos Tópicos Activos no Fórum";
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
$locale['global_051'] = "Inquérito";
$locale['global_052'] = "Movido";
$locale['global_053'] = "Não iniciou nenhum tópico no fórum.";
$locale['global_054'] = "Não enviou nenhuma mensagem no fórum.";
$locale['global_055'] = "Há %u novas mensagens desde sua última visita.";
$locale['global_056'] = "Tópicos Acompanhados";
$locale['global_057'] = "Opções";
$locale['global_058'] = "Parar";
$locale['global_059'] = "Você não está a acompanhar nenhum tópico.";
$locale['global_060'] = "Não continuar a acompanhar este tópico?";
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
// Page Navigation
$locale['global_090'] = "Anterior";
$locale['global_091'] = "Próxima";
$locale['global_092'] = "Página ";
$locale['global_093'] = " de ";
// Guest User Menu
$locale['global_100'] = "Entrar";
$locale['global_101'] = "Utilizador";
$locale['global_102'] = "Senha";
$locale['global_103'] = "Lembrar-me";
$locale['global_104'] = "Entrar";
$locale['global_105'] = "Ainda não é Membro?<br /><a href='".BASEDIR."register.php' class='side'>Clique aqui</a> para se registar.";
$locale['global_106'] = "Se esqueceu a sua senha?<br />Solicite uma nova <a href='".BASEDIR."lostpassword.php' class='side'>aqui</a>.";
$locale['global_107'] = "Registo";
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
// Poll
$locale['global_130'] = "Inquérito";
$locale['global_131'] = "Votar";
$locale['global_132'] = "Fazer login para votar.";
$locale['global_133'] = "Voto";
$locale['global_134'] = "Votos";
$locale['global_135'] = "Votos: ";
$locale['global_136'] = "Iniciada: ";
$locale['global_137'] = "Finalizada: ";
$locale['global_138'] = "Arquivo de Inquéritos";
$locale['global_139'] = "Seleccione um Inquérito na lista para vê-lo:";
$locale['global_140'] = "Ver";
$locale['global_141'] = "Ver Inquérito";
$locale['global_142'] = "Não há inquéritos definidos.";
// Shoutbox
$locale['global_150'] = "Mural de Recados";
$locale['global_151'] = "Nome:";
$locale['global_152'] = "Mensagem:";
$locale['global_153'] = "Enviar";
$locale['global_154'] = "Fazer login para enviar uma mensagem.";
$locale['global_155'] = "Arquivo do Mural";
$locale['global_156'] = "Nenhuma mensagem foi enviada.";
$locale['global_157'] = "Apagar";
$locale['global_158'] = "Código de Validação:";
$locale['global_159'] = "Digite o Código de Validação:";
// Footer Counter
$locale['global_170'] = "visita única";
$locale['global_171'] = "visitas únicas";
$locale['global_172'] = "Tempo de processamento: %s segundos";
// Admin Navigation
$locale['global_180'] = "Início da Administração";
$locale['global_181'] = "Voltar ao Site";
$locale['global_182'] = "<strong>Aviso:</strong> Senha Administrativa não introduzida ou incorrecta.";
// Miscellaneous
$locale['global_190'] = "Modo de Manutenção Activado";
$locale['global_191'] = "O seu endereço de IP está na lista negra.";
$locale['global_192'] = "Logout como ";
$locale['global_193'] = "Login como ";
$locale['global_194'] = "Esta conta está suspensa.";
$locale['global_195'] = "Esta conta não foi activada.";
$locale['global_196'] = "Nome de utilizador e/ou senha inválidos.";
$locale['global_197'] = "Aguarde enquanto é transferido...<br /><br />
[ <a href='index.php'>Clique aqui caso não deseje esperar</a> ]";
$locale['global_198'] = "<strong>Alerta:</strong> setup.php detectado. Por favor, remova-o imediatamente.";
$locale['global_199'] = "<strong>Aviso:</strong> senha administrativa indefinida. Clique em <a href='edit_profile.php'>Editar Perfil</a> para defini-la.";
//Titles
$locale['global_200'] = " - ";
$locale['global_201'] = ": ";
$locale['global_202'] = $locale['global_200']."Pesquisa";
$locale['global_203'] = $locale['global_200']."FAQ";
$locale['global_204'] = $locale['global_200']."Fórum";
//Themes
$locale['global_210'] = "Ir para o conteúdo";
// No themes found
$locale['global_300'] = "Nenhum tema encontrado";
$locale['global_301'] = "A página não pode ser exibida. Não encontramos nenhum tema para o site. Caso você seja administrador do site, então utilize seu cliente FTP e faça upload, para o diretório <em>themes/</em>, de qualquer tema para o <em>PHP-Fusion v7</em>. Após o upload do tema, cheque as suas <em>Configurações Principais</em> e verifique se o tema selecionado está na sua pasta <em>themes/</em>. Caso afirmativo, verifique se o tema selecionado possui o mesmo nome (considerando maiúsculas e minúsculas - importante em servidores baseados em UNIX) assim como escolhido na página <em>Configurações Principais</em>. Se você é um utilizador comum deste site, contate o administrador pelo email ".hide_email($settings['siteemail'])." e relate o problema.";
$locale['global_302'] = "O tema escolhido nas Configurações Principais não existe ou está incompleto!";
?>