<?php
// Official SVN Trunk Rev: 2500
// Forum Category titles
$locale['400'] = "Dodaj kategorię forum";
$locale['401'] = "Edytuj kategorię forum";
// Forum Category messages
$locale['410'] = "Dodano kategorię forum.";
$locale['411'] = "Zaktualizowano kategorię forum.";
$locale['412'] = "Nie można było usunąć kategorii forum.";
$locale['413'] = "Do kategorii są przypisane fora.<br />Przenieś je do innej kategorii.";
$locale['414'] = "Usunięto kategorię forum.";
// Forum Category form
$locale['420'] = "Nazwa:";
$locale['421'] = "Kolejność:";
$locale['422'] = "Zapisz";
// Delete Forum Category
$locale['440'] = "Usunąć kategorię forum?";
// Forum titles
$locale['500'] = "Dodaj dział forum";
$locale['501'] = "Edytuj dział forum";
// Forum Category messages
$locale['510'] = "Dodano dział forum.";
$locale['511'] = "Zaktualizowano dział forum.";
$locale['512'] = "Nie można było usunąć działu forum.";
$locale['513'] = "Do działu forum są przypisane tematy.<br />Przenieś je do innych działów.";
$locale['514'] = "Usunięto dział forum.";
$locale['515'] = "Zaktualizowano moderatorów działu forum.";
$locale['516'] = "Musisz podać nazwę kategorii forum.";
$locale['517'] = "Musisz podać niepowtarzalną nazwę działu forum.";
// Add/Edit Forum Form
$locale['520'] = "Nazwa:";
$locale['521'] = "Opis:";
$locale['522'] = "Kategoria forum:";
$locale['523'] = "Kolejność:";
$locale['524'] = "Właściwości:";
$locale['525'] = "Widoczne dla:";
$locale['526'] = "Możliwość zakładania tematów przez:";
$locale['527'] = "Możliwość dopisywania odpowiedzi przez:";
$locale['528'] = "Możliwość dodania załączników przez:";
$locale['529'] = "Możliwość założenia ankiety przez:";
$locale['530'] = "Możliwość zagłosowania przez:";
$locale['531'] = "Wyłączone";
$locale['532'] = "Zapisz";
$locale['533'] = "Moderowane przez:";
$locale['534'] = "Zapisz moderatorów forum";
$locale['535'] = "Możliwość pobierania załączników przez::";
// Forum Settings
$locale['540'] = "Ustawienia działu:";
$locale['541'] = "Włączyć łączenie postów:";
$locale['542'] = "Tak";
$locale['543'] = "Nie";
// Current Forums
$locale['550'] = "Istniejące działy";
$locale['551'] = "Kategorie/Działy";
$locale['552'] = "Kolejność";
$locale['553'] = "Opcje";
$locale['554'] = "Edytuj";
$locale['555'] = "Usuń";
$locale['556'] = "Przenieś wyżej";
$locale['557'] = "Przenieś niżej";
$locale['558'] = "Przenieś wyżej";
$locale['559'] = "Przenieś niżej";
$locale['560'] = "Nie zdefiniowano kategorii forum";
$locale['561'] = "Nie zdefiniowano działów";
$locale['562'] = "Odśwież kolejność";
$locale['563'] = "Wyczyść dział";
// Delete Forum
$locale['570'] = "Usunąć?";
// Pruning
$locale['600'] = "Wyczyść dział";
$locale['601'] = "Niniejsze narzędzie służy do";
$locale['602'] = "czyszczenia działu z&nbsp;materiałów z&nbsp;wybranego przedziału czasu.";
$locale['603'] = "Wyczyść dział z&nbsp;materiałów starszych niż: ";
$locale['604'] = "tydzień";
$locale['605'] = "tygodnie";
$locale['606'] = "miesiąc";
$locale['607'] = "miesiące";
$locale['608'] = "Zakończono czyszczenie działu.";
$locale['609'] = "Usunięto postów: ";
$locale['610'] = "Usunięto załączników: ";
$locale['611'] = "Usunięto tematów: ";
$locale['612'] = "Czyszczenie działu bezpowrotnie usunie tematy, posty oraz załączniki z&nbsp;wybranego przedziału czasu. Na pewno chcesz wyczyścić forum?";

/* My own patch, if you don't want it - comment lines below.
 * To moja własna łatka, jeśli nie chcesz z niej korzystać - zakomentuj poniższe linie
 * Tomasz "jantom" Jankowski, Date: 11 04 2011 13:40 */
$locale['607a'] = "miesięcy";
replace_in_output("6 ".$locale['607'],"6 ".$locale['607a']);
replace_in_output("5 ".$locale['607'],"5 ".$locale['607a']);
?>
