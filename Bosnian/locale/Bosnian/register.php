<?php
$locale['400'] = "Registracija";
$locale['401'] = "Aktiviraj Nalog";
// Registration Errors
$locale['402'] = "Morate ukucati Korisnicko Ime, Lozinku i Email Adresu.";
$locale['403'] = "Korisnicko Ime ima Nedozvoljeni Karaktera.";
$locale['404'] = "Lozinke se neslazu.";
$locale['405'] = "Netacna Lozinka. Koristite samo Slova i Brojeve.<br />
Lozinka mora biti minimalno 6 Karaktera.";
$locale['406'] = "Email Adresa nije Validna.";
$locale['407'] = "Korisnicko Ime ".(isset($_POST['username']) ? $_POST['username'] : "")." je zauzeto.";
$locale['408'] = "Email Adresa ".(isset($_POST['email']) ? $_POST['email'] : "")." je zauzeta.";
$locale['409'] = "Nalog za otu Email Adresu nije Aktiviran.";
$locale['410'] = "Netacan Kod Validacije.";
$locale['411'] = "Email Adresa ili Email Domain nisu Dozvoljeni.";
// Email Message
$locale['449'] = "Dobro Došli na ".$settings['sitename'];
$locale['450'] = "Postovani ".(isset($_POST['username']) ? $_POST['username'] : "").",\n
Dobro Došli na ".$settings['sitename'].". Evo vaši detalja za Nalog:\n
Korisnicko Ime: ".(isset($_POST['username']) ? $_POST['username'] : "")."
Lozinka: ".(isset($_POST['password1']) ? $_POST['password1'] : "")."\n
Molimo vas da Aktivirate Nalog putem ovog link:\n";
// Registration Success/Fail
$locale['451'] = "Registracija Uspješna";
$locale['452'] = "Sad se Mozete logirati.";
$locale['453'] = "Administrator ce Aktivirati vaš Nalog uskoro.";
$locale['454'] = "Registracija je još malo i Završena. Provjerite Email da bi ste Aktivirali Nalog.";
$locale['455'] = "Nalog je Aktiviran.";
$locale['456'] = "Registracija nije Uspjela";
$locale['457'] = "Nismo vam mogli poslati Email za Aktivaciju javite se <a href='mailto:".$settings['siteemail']."'>Site Administratoru</a>.";
$locale['458'] = "Registracija NIJE uspjela zbog sledeceg(i) Razloga:";
$locale['459'] = "Molimo vas Pokušajte Ponovo";
// Register Form
$locale['500'] = "Ukucajte Detalje ispod. ";
$locale['501'] = "Email za Aktivaciju ce biti poslan na vašu Email Adresu. ";
$locale['502'] = "Polja oznacena sa <span style='color:#ff0000;'>*</span> su obavezna. Korisnicko Ime i Lozinka su Osjetljivi. Znaci mala i Velika slova imaju veze.";
$locale['503'] = " Mozete dodati dodatne informacije putem zmjeni Nalog kad se Logirate.";
$locale['504'] = "Kod Validacije:";
$locale['505'] = "Ukucajte Kod Validacije:";
$locale['506'] = "Registruj Se";
$locale['507'] = "Registracije su trenutno Zabranjene.";
$locale['508'] = "Pravilnik Korištenja";
$locale['509'] = "Ja sam Procito(la) <a href='".BASEDIR."print.php?type=T' target='_blank'>Pravilnik Korištenja</a> i Slazem se sa tim.";
// Validation Errors
$locale['550'] = "Ukucajte Koriscniko Ime.";
$locale['551'] = "Ukucajte Lozinku.";
$locale['552'] = "Ukucajte Email Adresu.";
?>