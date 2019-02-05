<?php
// Official SVN Trunk Rev: 2500
// Forum Category titles
$locale['400'] = "Dodaj kategoriê forum";
$locale['401'] = "Edytuj kategoriê forum";
// Forum Category messages
$locale['410'] = "Dodano kategoriê forum.";
$locale['411'] = "Zaktualizowano kategoriê forum.";
$locale['412'] = "Nie mo¿na by³o usun±æ kategorii forum.";
$locale['413'] = "Do kategorii s± przypisane fora.<br />Przenie¶ je do innej kategorii.";
$locale['414'] = "Usuniêto kategoriê forum.";
// Forum Category form
$locale['420'] = "Nazwa:";
$locale['421'] = "Kolejno¶æ:";
$locale['422'] = "Zapisz";
// Delete Forum Category
$locale['440'] = "Usun±æ kategoriê forum?";
// Forum titles
$locale['500'] = "Dodaj dzia³ forum";
$locale['501'] = "Edytuj dzia³ forum";
// Forum Category messages
$locale['510'] = "Dodano dzia³ forum.";
$locale['511'] = "Zaktualizowano dzia³ forum.";
$locale['512'] = "Nie mo¿na by³o usun±æ dzia³u forum.";
$locale['513'] = "Do dzia³u forum s± przypisane tematy.<br />Przenie¶ je do innych dzia³ów.";
$locale['514'] = "Usuniêto dzia³ forum.";
$locale['515'] = "Zaktualizowano moderatorów dzia³u forum.";
$locale['516'] = "Musisz podaæ nazwê kategorii forum.";
$locale['517'] = "Musisz podaæ niepowtarzaln± nazwê dzia³u forum.";
// Add/Edit Forum Form
$locale['520'] = "Nazwa:";
$locale['521'] = "Opis:";
$locale['522'] = "Kategoria forum:";
$locale['523'] = "Kolejno¶æ:";
$locale['524'] = "W³a¶ciwo¶ci:";
$locale['525'] = "Widoczne dla:";
$locale['526'] = "Mo¿liwo¶æ zak³adania tematów przez:";
$locale['527'] = "Mo¿liwo¶æ dopisywania odpowiedzi przez:";
$locale['528'] = "Mo¿liwo¶æ dodania za³±czników przez:";
$locale['529'] = "Mo¿liwo¶æ za³o¿enia ankiety przez:";
$locale['530'] = "Mo¿liwo¶æ zag³osowania przez:";
$locale['531'] = "Wy³±czone";
$locale['532'] = "Zapisz";
$locale['533'] = "Moderowane przez:";
$locale['534'] = "Zapisz moderatorów forum";
$locale['535'] = "Mo¿liwo¶æ pobierania za³±czników przez::";
// Forum Settings
$locale['540'] = "Ustawienia dzia³u:";
$locale['541'] = "W³±czyæ ³±czenie postów:";
$locale['542'] = "Tak";
$locale['543'] = "Nie";
// Current Forums
$locale['550'] = "Istniej±ce dzia³y";
$locale['551'] = "Kategorie/Dzia³y";
$locale['552'] = "Kolejno¶æ";
$locale['553'] = "Opcje";
$locale['554'] = "Edytuj";
$locale['555'] = "Usuñ";
$locale['556'] = "Przenie¶ wy¿ej";
$locale['557'] = "Przenie¶ ni¿ej";
$locale['558'] = "Przenie¶ wy¿ej";
$locale['559'] = "Przenie¶ ni¿ej";
$locale['560'] = "Nie zdefiniowano kategorii forum";
$locale['561'] = "Nie zdefiniowano dzia³ów";
$locale['562'] = "Od¶wie¿ kolejno¶æ";
$locale['563'] = "Wyczy¶æ dzia³";
// Delete Forum
$locale['570'] = "Usun±æ?";
// Pruning
$locale['600'] = "Wyczy¶æ dzia³";
$locale['601'] = "Niniejsze narzêdzie s³u¿y do";
$locale['602'] = "czyszczenia dzia³u z&nbsp;materia³ów z&nbsp;wybranego przedzia³u czasu.";
$locale['603'] = "Wyczy¶æ dzia³ z&nbsp;materia³ów starszych ni¿: ";
$locale['604'] = "tydzieñ";
$locale['605'] = "tygodnie";
$locale['606'] = "miesi±c";
$locale['607'] = "miesi±ce";
$locale['608'] = "Zakoñczono czyszczenie dzia³u.";
$locale['609'] = "Usuniêto postów: ";
$locale['610'] = "Usuniêto za³±czników: ";
$locale['611'] = "Usuniêto tematów: ";
$locale['612'] = "Czyszczenie dzia³u bezpowrotnie usunie tematy, posty oraz za³±czniki z&nbsp;wybranego przedzia³u czasu. Na pewno chcesz wyczy¶ciæ forum?";

/* My own patch, if you don't want it - comment lines below.
 * To moja w³asna ³atka, je¶li nie chcesz z niej korzystaæ - zakomentuj poni¿sze linie
 * Tomasz "jantom" Jankowski, Date: 11 04 2011 13:40 */
$locale['607a'] = "miesiêcy";
replace_in_output("6 ".$locale['607'],"6 ".$locale['607a']);
replace_in_output("5 ".$locale['607'],"5 ".$locale['607a']);
?>
