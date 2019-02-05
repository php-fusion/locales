<?php
// Member Management Options
$locale['400'] = "Member";
$locale['401'] = "User";
$locale['402'] = "Tambah Member Baru";
$locale['403'] = "Tipe User";
$locale['404'] = "Opsi";
$locale['405'] = "Tampilkan";
$locale['406'] = "Sunting";
$locale['407'] = "Aktifkan";
$locale['408'] = "Buka Banned";
$locale['409'] = "Banned";
$locale['410'] = "Hapus";
$locale['411'] = "Tidak ada %s member";
$locale['412'] = " dimulai dengan ";
$locale['413'] = " kecocokan ";
$locale['414'] = "Tampilkan Semua";
$locale['415'] = "Cari member:";
$locale['416'] = "Cari";
// Member types
$locale['417'] = "Member";
$locale['418'] = "Non-Aktifasi";
$locale['419'] = "Dibatasi";
// Ban/Unban/Delete Member
$locale['420'] = "Ban Imposed";
$locale['421'] = "Banned Dihapus";
$locale['422'] = "Member Dihapus";
$locale['423'] = "Yakin akan menghapus member ini?";
$locale['424'] = "Member Diaktifkan";
$locale['425'] = "Akun diaktifkan pada ";
$locale['426'] = "Hallo [USER_NAME],\n
Akun Anda di ".$settings['sitename']." telah diaktifkan.\n
Sekarang Anda dapat login dengan menggunakan username dan password pilihan Anda.\n
Salam,
".$settings['siteusername'];
// Edit Member Details
$locale['430'] = "Sunting Member";
$locale['431'] = "Detail Member diperbarui";
$locale['432'] = "Kembali ke Admin Member";
$locale['433'] = "Kembali ke Index Admin";
$locale['434'] = "Tidak dapat perbarui detail Member:";
// Extra Edit Member Details form options
$locale['440'] = "Simpan Perubahan";
// Update Profile Errors
$locale['450'] = "Tidak dapat menyunting administrator utama.";
$locale['451'] = "Anda harus mencantumkan username dan alamat email.";
$locale['452'] = "User name berisi karakter invalid.";
$locale['453'] = "User name ".(isset($_POST['user_name']) ? $_POST['user_name'] : "")." sudah terpakai.";
$locale['454'] = "Alamat Email invalid.";
$locale['455'] = "Alamat email ".(isset($_POST['user_email']) ? $_POST['user_email'] : "")." sudah terpakai.";
$locale['456'] = "Password baru tidak cocok.";
$locale['457'] = "Password invalid, gunakan hanya karakter alphanumerik.<br />
Password must be a minimum of 6 characters long.";
$locale['458'] = "<strong>Warning:</strong> unexpected script execution.";
// View Member Profile
$locale['470'] = "Profil Member";
$locale['472'] = "Statistik";
$locale['473'] = "Kelompok User";
// Add Member Errors
$locale['480'] = "Tambah Member";
$locale['481'] = "Akun member telah dibuat.";
$locale['482'] = "Akun member tidak dapat dibuat.";
?>