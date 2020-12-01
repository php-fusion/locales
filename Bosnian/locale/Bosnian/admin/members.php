<?php
// Member Management Options
$locale['400'] = "Clanovi";
$locale['401'] = "Korisnik";
$locale['402'] = "Dodaj Korisnika";
$locale['403'] = "Vrsta Naloga";
$locale['404'] = "Opcije";
$locale['405'] = "Pregled";
$locale['406'] = "Izmjeni";
$locale['407'] = "Aktiviraj";
$locale['408'] = "Dozvoli";
$locale['409'] = "Zabrani";
$locale['410'] = "Izbrisi";
$locale['411'] = "Nema %s clanova";
$locale['412'] = " pocetak sa ";
$locale['413'] = " sklapljanje ";
$locale['414'] = "Pokazi Sve";
$locale['415'] = "Trazi Clana:";
$locale['416'] = "Pretraga";
// Member types
$locale['417'] = "Clanova";
$locale['418'] = "Neaktivirani";
$locale['419'] = "Zabranjeni";
// Ban/Unban/Delete Member
$locale['420'] = "Zabrana Postavljena";
$locale['421'] = "Zabrana Odkazana";
$locale['422'] = "Clan Izbrisan";
$locale['423'] = "Izbrisati ovog Clana?";
$locale['424'] = "Clan Aktiviran";
$locale['425'] = "Nalog Aktiviran na ";
$locale['426'] = "Postovani [USER_NAME],\n
Vas Nalog na ".$settings['sitename']." je Aktiviran.\n
Mozete se sad logirati sa Registrovanom Informacijom.\n
Pozdrav,
".$settings['siteusername'];
// Edit Member Details
$locale['430'] = "Izmjeni Korisnika";
$locale['431'] = "Korisnik Izmjenjen";
$locale['432'] = "Nazad na Admin Clanova";
$locale['433'] = "Nazad na Glavnu Admina";
$locale['434'] = "Nismo uspjeli izmjeniti Korisnicke Podatke:";
// Extra Edit Member Details form options
$locale['440'] = "Spasi Izmjene";
// Update Profile Errors
$locale['450'] = "Nemozete izmjeniti Glavnog Admina.";
$locale['451'] = "Morate Upisati Korisnika ili Email Adresu.";
$locale['452'] = "Korisnicko Ime ima nedozvoljene karaktere.";
$locale['453'] = "Korisnicko Ime ".(isset($_POST['user_name']) ? $_POST['user_name'] : "")." je zauzeto.";
$locale['454'] = "Email Adresa nije Validna.";
$locale['455'] = "Ova Email Adresa ".(isset($_POST['user_email']) ? $_POST['user_email'] : "")." je zauzeta.";
$locale['456'] = "Lozinke se neslazu.";
$locale['457'] = "Netacna Lozinka, samo Alfa Karaktere i Brojeve.<br />
Minimalno 6 Karaktera u Lozinki.";
$locale['458'] = "<strong>Paznja:</strong> Skripta je Zaledila.";
// View Member Profile
$locale['470'] = "Korisnicki Nalog";
$locale['472'] = "Statistika";
$locale['473'] = "Korisnicke Grupe";
// Add Member Errors
$locale['480'] = "Dodaj Korisnika";
$locale['481'] = "Korisnicki Nalog Napravljen.";
$locale['482'] = "Korisnicki Nalog nije napravljen.";
?>