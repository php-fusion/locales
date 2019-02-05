<?php
$locale['400'] = "Daftar";
$locale['401'] = "Aktifkan Akun";
// Registration Errors
$locale['402'] = "Anda harus mencantumkan sebuah username, password & alamat email.";
$locale['403'] = "Username berisi karakter invalid.";
$locale['404'] = "Kedua password Anda tidak sesuai.";
$locale['405'] = "Password tidak valid, gunakan hanya karakter alphanumerik saja.<br />
Minimum panjang Password harus 6 karakter.";
$locale['406'] = "Alamat email Anda tidak valid.";
$locale['407'] = "Maaf, user name ".(isset($_POST['username']) ? $_POST['username'] : "")." sudah terpakai.";
$locale['408'] = "Maaf, alamat email ".(isset($_POST['email']) ? $_POST['email'] : "")." sudah terpakai.";
$locale['409'] = "Akun pasif telah terdaftar dengan alamat email tersebut.";
$locale['410'] = "Kode validasi tidak benar.";
$locale['411'] = "Alamat email atau domain email Anda berada dalam daftar hitam.";
// Email Message
$locale['449'] = "Selamat Datang di ".$settings['sitename'];
$locale['450'] = "Halo ".(isset($_POST['username']) ? $_POST['username'] : "").",\n
Selamat Datang di ".$settings['sitename'].". Ini adalah detail login Anda:\n
Username: ".(isset($_POST['username']) ? $_POST['username'] : "")."
Password: ".(isset($_POST['password1']) ? $_POST['password1'] : "")."\n
Silahkan aktifasi akun Anda melalui link tersebut dibawah ini:\n";
// Registration Success/Fail
$locale['451'] = "Pendaftaran berhasil";
$locale['452'] = "Sekarang Anda dapat log in.";
$locale['453'] = "Seorang administrator akan mengaktifkan akun Anda segera.";
$locale['454'] = "Pendaftaran Anda hampir selesai, Anda akan meneriam sebuah email berisi detail login Anda bersama dengan sebuah link untuk verifikasi akun Anda.";
$locale['455'] = "Akun Anda telah diverifikasi.";
$locale['456'] = "Pendaftaran Gagal";
$locale['457'] = "Pengiriman mail gagal, silahkan menghubungi <a href='mailto:".$settings['siteemail']."'>Administrator Situs</a>.";
$locale['458'] = "Pendaftaran gagal dikarenakan hal-hal berikut:";
$locale['459'] = "Silahkan Coba Lagi";
// Register Form
$locale['500'] = "Silahkan masukan detail Anda dibawah ini. ";
$locale['501'] = "Sebuah email verifikasi akan terkirim ke alamat email yang Anda cantumkan. ";
$locale['502'] = "Field-field bertanda <span style='color:#ff0000;'>*</span> harus diisi.
Your user name dan password bersifat case-sensitive.";
$locale['503'] = " Anda dapat memasukkan informasi tambahan melalui menu Edit Profil setelah Anda login.";
$locale['504'] = "Kode Validasi:";
$locale['505'] = "Masukan Kode Validasi:";
$locale['506'] = "Daftar";
$locale['507'] = "Sistem pendaftaran saat ini non-aktif.";
$locale['508'] = "Kesepakatan Perjanjian";
$locale['509'] = "Saya telah membaca <a href='".BASEDIR."print.php?type=T' target='_blank'>Kesepakatan Perjanjian</a> dan saya telah menyetujuinya.";
// Validation Errors
$locale['550'] = "Silahkan isi user name.";
$locale['551'] = "Silahkan isi password.";
$locale['552'] = "Silahkan isi alamat email.";
?>