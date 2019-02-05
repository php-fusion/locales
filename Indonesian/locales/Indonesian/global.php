<?php
/*
Indonesian Language Fileset
Produced by Deddy Reza (Robvankey)
Email: robvankey@gmail.com
Web: http://www.indofusion.co.cc
*/


// Locale Settings
setlocale(LC_TIME, "in","ID"); // Linux Server (Windows may differ)
$locale['charset'] = "iso-8859-1";
$locale['xml_lang'] = "in";
$locale['tinymce'] = "in";
$locale['phpmailer'] = "in";

// Full & Short Months
$locale['months'] = "&nbsp|Januari|Februari|Maret|April|Mei|Juni|Juli|Agustus|September|Oktober|November|Desember";
$locale['shortmonths'] = "&nbsp|Jan|Feb|Mar|Apr|Mei|Jun|Jul|Agt|Sep|Okt|Nov|Des";

// Standard User Levels
$locale['user0'] = "Publik";
$locale['user1'] = "Member";
$locale['user2'] = "Administrator";
$locale['user3'] = "Super Administrator";
// Forum Moderator Level(s)
$locale['userf1'] = "Moderator";
// Navigation
$locale['global_001'] = "Navigasi";
$locale['global_002'] = "Tidak ada definisi link";
// Users Online
$locale['global_010'] = "User Online";
$locale['global_011'] = "Pengunjung Online";
$locale['global_012'] = "Member Online";
$locale['global_013'] = "Tidak Ada Member Online";
$locale['global_014'] = "Total Member";
$locale['global_015'] = "Member Pasif";
$locale['global_016'] = "Member Terbaru";
// Forum Side panel
$locale['global_020'] = "Urutan Forum";
$locale['global_021'] = "Urutan Terbaru";
$locale['global_022'] = "Urutan Terpanas";
$locale['global_023'] = "Tidak ada urutan";
// Articles Side panel
$locale['global_030'] = "Artikel Terakhir";
$locale['global_031'] = "Tidak Ada Artikel";
// Welcome panel
$locale['global_035'] = "Selamat Datang";
// Latest Active Forum Threads panel
$locale['global_040'] = "Urutan Forum Aktif Terakhir";
$locale['global_041'] = "Urutanku Terkini";
$locale['global_042'] = "Kirimanku Terkini";
$locale['global_043'] = "Kiriman Baru";
$locale['global_044'] = "Susun";
$locale['global_045'] = "Tampilkan";
$locale['global_046'] = "Balasan";
$locale['global_047'] = "Kiriman Terakhir";
$locale['global_048'] = "Forum";
$locale['global_049'] = "Dikirim";
$locale['global_050'] = "Pengirim";
$locale['global_051'] = "Jajak";
$locale['global_052'] = "Pindah";
$locale['global_053'] = "Anda belum memulai urutan forum samasekali.";
$locale['global_054'] = "Anda samasekali belum mengirim pesan forum apapun.";
$locale['global_055'] = "Ada %u kiriman baru sejak kunjungan terakhir Anda.";
$locale['global_056'] = "Selusur Jejak Urutanku";
$locale['global_057'] = "Opsi";
$locale['global_058'] = "Stop";
$locale['global_059'] = "Anda tidak menyelusuri urutan apapun.";
$locale['global_060'] = "Hentikan penyelusuran urutan ini?";
// News & Articles
$locale['global_070'] = "Oleh ";
$locale['global_071'] = "pada ";
$locale['global_072'] = "Selanjutnya";
$locale['global_073'] = " Komentar-komentar";
$locale['global_073b'] = " Komentar";
$locale['global_074'] = " Dibaca";
$locale['global_075'] = "Cetak";
$locale['global_076'] = "Sunting";
$locale['global_077'] = "Berita";
$locale['global_078'] = "Belum ada kiriman Berita";
// Page Navigation
$locale['global_090'] = "Kembali";
$locale['global_091'] = "Lanjut";
$locale['global_092'] = "Halaman ";
$locale['global_093'] = " dari ";
// Guest User Menu
$locale['global_100'] = "Login";
$locale['global_101'] = "Username";
$locale['global_102'] = "Password";
$locale['global_103'] = "Ingat Saya";
$locale['global_104'] = "Login";
$locale['global_105'] = "Jadi Member?<br /><a href='".BASEDIR."register.php' class='side'>Klik disini</a> untuk mendaftar.";
$locale['global_106'] = "Lupa password?<br />Minta yang baru <a href='".BASEDIR."lostpassword.php' class='side'>disini</a>.";
$locale['global_107'] = "Daftar";
$locale['global_108'] = "Lupa password";
// Member User Menu
$locale['global_120'] = "Sunting Profil";
$locale['global_121'] = "Pesan Pribadi";
$locale['global_122'] = "Daftar Member";
$locale['global_123'] = "Panel Admin";
$locale['global_124'] = "Logout";
$locale['global_125'] = "Anda mempunyai %u baru ";
$locale['global_126'] = "pesan";
$locale['global_127'] = "pesan-pesan";
// Poll
$locale['global_130'] = "Jajak Pendapat Member";
$locale['global_131'] = "Kirim Voting";
$locale['global_132'] = "Anda harus login untuk voting.";
$locale['global_133'] = "Voting";
$locale['global_134'] = "Votes";
$locale['global_135'] = "Votes: ";
$locale['global_136'] = "Mulai: ";
$locale['global_137'] = "Berakhir: ";
$locale['global_138'] = "Arsip Jajak Pendapat";
$locale['global_139'] = "Pilih sebuah Jajak PEndapat dari daftar untuk ditampilkan:";
$locale['global_140'] = "Lihat";
$locale['global_141'] = "Lihat Jajak PEndapat";
$locale['global_142'] = "Jajak Pendapat tidak ditemukan.";
// Shoutbox
$locale['global_150'] = "Pesan Singkat";
$locale['global_151'] = "Nama:";
$locale['global_152'] = "Pesan:";
$locale['global_153'] = "Kirim";
$locale['global_154'] = "Anda harus login untuk mengirim pesan.";
$locale['global_155'] = "Arsip Pesan Singkat";
$locale['global_156'] = "Tidak ada kiriman Pesan.";
$locale['global_157'] = "Hapus";
$locale['global_158'] = "Kode Validasi:";
$locale['global_159'] = "Masukkan Kode Validasi:";
// Footer Counter
$locale['global_170'] = "Kunjungan";
$locale['global_171'] = "Kunjungan";
$locale['global_172'] = "Waktu proses: %s detik";
// Admin Navigation
$locale['global_180'] = "Admin Home";
$locale['global_181'] = "Kembali ke Situs";
$locale['global_182'] = "<strong>Notice:</strong> Admin Password not entered or incorrect";
// Miscellaneous
$locale['global_190'] = "Modus Maintenance Diaktifkan";
$locale['global_191'] = "Alamat IP Anda saat ini dalam Daftar Hitam.";
$locale['global_192'] = "Log-out sebagai ";
$locale['global_193'] = "Log-in sebagai ";
$locale['global_194'] = "Akun ini saat sedang ditangguhkan.";
$locale['global_195'] = "Akun ini belum diaktifasi.";
$locale['global_196'] = "Username atau password Anda tidak valid.";
$locale['global_197'] = "Silahkan tunggu sejenak, sistem sedang mengalihkan Anda...<br /><br />
[ <a href='index.php'>Klik disini untuk jalur pintas</a> ]";
$locale['global_198'] = "<strong>Peringatan:</strong> setup.php terdeteksi, silahkan segera menghapusnya.";
$locale['global_199'] = "<strong>Peringatan:</strong> password admin belum ada, klik <a href='".BASEDIR."edit_profile.php'>Sunting Profil</a> untuk membuatnya.";
//Titles
$locale['global_200'] = " - ";
$locale['global_201'] = ": ";
$locale['global_202'] = $locale['global_200']."Cari";
$locale['global_203'] = $locale['global_200']."Tanya Jawab";
$locale['global_204'] = $locale['global_200']."Forum";
//Themes
$locale['global_210'] = "Pindah ke konten";
// No themes found
$locale['global_300'] = "Thema tidak ditemukan";
$locale['global_301'] = "Mohon maaf, halaman ini tidak dapat terlihat. Merujuk pada beberapa lingkup sistem, tidak satupun thema situs ditemukan. Jika Anda adalah Administrator Situs, silahkan gunakan FTP Client untuk meng-upload thema apapun yang telah didisain untuk <em>PHP-Fusion v7</em> pada folder <em>themes/</em>. Selanjutnya periksalah pada <em>Pengaturan Utama</em> untuk memastikan bahwa thema yang dipilih telah benar-benar ter-upload ke direktori <em>themes/</em> Anda. Catat bahwa folder thema yang telah di-upload harus memiliki nama yang samasekali tepat (termasuk hal karakter, yang merupakan hal penting pada server berbasis Unix) seperti yang dipilih pada halaman <em>Pengaturan Utama</em>.<br /><br />Jika Anda adalah member umum situs ini, silahkan menghubungi administrator situs melalui email ".hide_email($settings['siteemail'])." dan laporkan hal ini.";
$locale['global_302'] = "Thema yang dipilih pada Pengaturan Utama tidak ada atau tidak lengkap!";
?>
