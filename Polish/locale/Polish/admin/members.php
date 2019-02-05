<?php
// Official SVN Trunk Rev: 1942
// Member Management Options
$locale['400'] = "U¿ytkownicy";
$locale['401'] = "U¿ytkownik";
$locale['402'] = "Dodaj nowego u¿ytkownika";
$locale['403'] = "Typ u¿ytkownika";
$locale['404'] = "Opcje";
$locale['405'] = "Zobacz konta";
$locale['406'] = "Edytuj";
$locale['407'] = "Aktywuj";
$locale['408'] = "Odblokuj";
$locale['409'] = "Zablokuj";
$locale['410'] = "Usuñ";
$locale['411'] = "Nie ma kont u¿ytkowników";
$locale['412'] = " rozpoczynaj±cych siê na ";
$locale['413'] = " zawieraj±cych w swojej nazwie ";
$locale['414'] = "Poka¿ wszystkich";
$locale['415'] = "Szukaj u¿ytkowników:";
$locale['416'] = "Szukaj";
$locale['417'] = "Wybierz akcjê";
$locale['418'] = "Anuluj";
$locale['419'] = "Przywróæ";
// Ban/Unban/Delete Member
$locale['420'] = "Zablokowano konto u¿ytkownika";
$locale['421'] = "Odblokowano konto u¿ytkownika";
$locale['422'] = "Usuniêto konto u¿ytkownika";
$locale['423'] = "Na pewno chcesz usun±æ konto tego u¿ytkownika?";
$locale['424'] = "Aktywowano konto u¿ytkownika";
// Edit Member Details
$locale['430'] = "Edytuj profil";
$locale['431'] = "Zaktualizowano dane u¿ytkownika";
$locale['432'] = "Powróæ do zarz±dzania u¿ytkownikami";
$locale['433'] = "Powróæ do pocz±tku panelu administracyjnego";
$locale['434'] = "Nie mo¿na by³o zaktualizowaæ danych u¿ytkownika:";
// Extra Edit Member Details form options
$locale['440'] = "Zapisz zmiany";
// Update Profile Errors
$locale['450'] = "Nie masz praw do edycji danych g³ównego adminstratora.";
$locale['451'] = "Musisz podaæ nazwê u¿ytkownika oraz e-mail.";
$locale['452'] = "Nazwa u¿ytkownika zawiera nieobs³ugiwane znaki.";
$locale['453'] = "Niniejszy login (".(isset($_POST['user_name']) ? $_POST['user_name'] : "").") jest ju¿ w&nbsp;u¿yciu.";
$locale['454'] = "Podano nieprawid³owy adres e-mail.";
$locale['455'] = "Niniejszy adres e-mail (".(isset($_POST['user_email']) ? $_POST['user_email'] : "").") jest ju¿ w&nbsp;u¿yciu.";
$locale['456'] = "Nowe has³a u¿ytkownika nie pasuj± do siebie.";
$locale['457'] = "Nieprawid³owe has³o u¿ytkownika, proszê o&nbsp;korzystanie wy³±cznie ze znaków alfanumerycznych.<br />Has³o musi zawieraæ minimum 6 znaków.";
$locale['458'] = "<strong>Ostrze¿enie:</strong> nieprzewidziane zachowanie skryptu.";
// View Member Profile
$locale['470'] = "Profil u¿ytkownika";
$locale['472'] = "Statystyki";
$locale['473'] = "Grupy u¿ytkownika";
// Add Member Errors
$locale['480'] = "Dodaj konto u¿ytkownika";
$locale['481'] = "Konto u¿ytkownika zosta³o utworzone.";
$locale['482'] = "Nie mo¿na by³o utworzyæ konta u¿ytkownika.";
// Suspension Log
$locale['510s'] = "Dziennik konta";
$locale['511s'] = "Brak informacji w dzienniku na temat tego konta u¿ytkownika.";
$locale['512s'] = "Poprzednie ";
$locale['513'] = "Nr"; // as in number
$locale['514'] = "Data";
$locale['515'] = "Powód";
$locale['516'] = "Zawieszaj±cy";
$locale['517'] = "Akcje";
$locale['518'] = "Wróæ do profilu konta";
$locale['519'] = "Dziennik konta ";
$locale['520'] = "Zdjête: ";
$locale['521'] = "IP: ";
$locale['522'] = "Jeszcze nie w³±czone";
// User Management Errors
$locale['540'] = "B³±d";
$locale['541'] = "B³±d: Musisz wpisaæ powód zawieszenia!";
$locale['542'] = "B³±d: Musisz wpisaæ powód zablokowania zp. bezpieczeñstwa!";
// User Management Admin
$locale['550'] = "Zawieszone konto: ";
$locale['551'] = "Czas trwania w&nbsp;dniach";
$locale['552'] = "Powód:";
$locale['553'] = "Zawie¶";
$locale['554'] = "Brak informacji o&nbsp;zawieszeniach tego konta.";
$locale['555'] = "Je¶li uwa¿asz, ¿e dane konto powinno byæ zablokowane, naci¶nij 'Zablokuj'";
$locale['556'] = "Zdejmij zawieszenie konta: ";
$locale['557'] = "Zdjête zawieszenie konta";
$locale['558'] = "Zdejmij blokadê konta: ";
$locale['559'] = "Zdjêto blokadê konta ";
$locale['560'] = "Zdejmij blokadê konta zp. bezpieczeñstwa: ";
$locale['561'] = "Zdejmij blokadê zp. bezpieczeñstwa konta";
$locale['562'] = "Zablokowane: ";
$locale['563'] = "Zablokowane zp. bezpieczeñstwa: ";
$locale['566'] = "Zdjêto blokadê";
$locale['568'] = "Na³o¿ono blokadê konta zp. bezpieczeñstwa";
$locale['569'] = "Zdjêto blokadê konta zp. bezpieczeñstwa";
$locale['572'] = "Konto zawieszone";
$locale['573'] = "Zdjêto zawieszenie";
$locale['574'] = "Konto wy³aczone";
$locale['575'] = "Konto reaktywowane";
$locale['576'] = "Konto ukryte";
$locale['577'] = "Cofniêcie wy³±czonia zp. bezczynno¶ci konta";
$locale['578'] = "Konto wy³±czone zp. bezczynno¶ci i ukryte";
$locale['579'] = "Cofniêcie ukrycia konta";
$locale['580'] = "Wy³±cz bezczynne konta";
$locale['581'] = "Masz ponad 50 bezczynnych kont. Musisz wykonaæ jeszcze <strong>%d</strong> raz(y) procedurê deaktywacji kont.";
$locale['582'] = "Reaktywuj";
$locale['583'] = "W³±cz ponownie";
$locale['584'] = "Wybierz nowy status";
$locale['585'] = "To konto u¿ytkownika zosta³o zablokowane z/p bezpieczeñstwa! Czy na pewno chcesz je odblokowaæ?";
$locale['585a'] = "Podaj powód, dla którego blokujesz lub odblokowujesz konto u¿ytkownika ";

$locale['590'] = "Zawie¶";
$locale['591'] = "Odwie¶";
$locale['592'] = "zawieszasz";
$locale['593'] = "odwieszasz";
$locale['594'] = "Podaj powód, dla którego  ";
$locale['595'] = " konto u¿ytkownika ";
$locale['596'] = "Czas trwania:";

$locale['600'] = "Blokada zp. bezpieczeñstwa";
$locale['601'] = "blokowanie zp. bezpieczeñstwa";
$locale['602'] = "Odblokuj ";
$locale['603'] = "odblokowywanie";
$locale['604'] = "Powód:";

// Deactivation System
$locale['610'] = "Istnieje <strong>%d</strong> kont(o), na które nie logowano siê od ponad <strong>%d ".($settings['deactivation_period'] > 1 ? "dni" : "dzieñ")."</strong>, a&nbsp;które mo¿na oznaczyæ jako bezczynne.<br />
U¿ytkownicy bêd± mieli <strong>%d ".($settings['deactivation_response'] > 1 ? "dni" : "dzieñ")."</strong> na zapobiegniêcie ich %s.";
$locale['611'] = "Pamiêtaj, ¿e czê¶æ u¿ytkowników mog³a dodaæ do Twojej strony posty, komentarze, zdjêcia itp. Powy¿sze tre¶ci zostan± usuniête razem z&nbsp;kontami, je¶li w&nbspustawieniach systemu deaktywacji jako dzia³anie wobec bezczynnych kont masz ustawione usuwanie kont.";
$locale['612'] = "konto";
$locale['613'] = "konta";
$locale['614'] = "Wy³±cz";
$locale['615'] = "ca³kowitym usuniêciu";
$locale['616'] = "ukryciu";
$locale['617'] = "Ostrze¿enie:";
$locale['618'] = "Zalecana jest zmiana ustawieñ systemu deaktywacji z&nbsp;usuwania kont na ich ukrycie. Uchroni to przed utrat± danych!";
$locale['619'] = "Przejd¼ do odpowiedniej sekcji ustawieñ.";
$locale['620'] = "ukryj";
$locale['621'] = "Automatyczna blokada nieaktywnych kont.";
?>
