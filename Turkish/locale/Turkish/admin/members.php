<?php
// Member Management Options
$locale['400'] = "Üye Yönetimi";
$locale['401'] = "Üye";
$locale['402'] = "Ekle";
$locale['403'] = "Üye Tipi";
$locale['404'] = "Seçenekler";
$locale['405'] = "Görüntüle";
$locale['406'] = "Düzenle";
$locale['407'] = "Aktif Et";
$locale['408'] = "Baný Kaldýr";
$locale['409'] = "Banla";
$locale['410'] = "Sil";
$locale['411'] = "%s Bulunamadý";
$locale['412'] = ". Aranan Ýlk Harf: ";
$locale['413'] = ". Aranan Kullanýcý Adý: ";
$locale['414'] = "Hepsini Göster";
$locale['415'] = "Üye Ara:";
$locale['416'] = "Ara";
$locale['417'] = "Ýþlem Seçin";
$locale['418'] = "Ýptal Et";
$locale['419'] = "Eski durumuna getir";
// Ban/Unban/Delete Member
$locale['420'] = "Siteden Banlandý";
$locale['421'] = "Baný Kaldýrýldý";
$locale['422'] = "Üye Silindi";
$locale['423'] = "Bu üyeyi silmek istediðinizden emin misiniz?";
$locale['424'] = "Üye Aktif Edildi";
// Edit Member Details
$locale['430'] = "Kullanýcýyý Düzenle";
$locale['431'] = "Kullanýcý Bilgileri Güncellendi";
$locale['432'] = "Üye Yönetimine Geri Dön";
$locale['433'] = "Site Yönetimine Geri Dön";
$locale['434'] = "Kullanýcý Bilgileri Güncellenemedi:";
// Extra Edit Member Details form options
$locale['440'] = "Deðiþiklikleri Kaydet";
// Update Profile Errors
$locale['450'] = "Site Sahibi olan ve Ýlk Admin Olarak tanýmlanan yönetici düzenlenemez.";
$locale['451'] = "Bir Üye ismi ve e-mail adresi belirtmelisiniz..";
$locale['452'] = "Üye isminde geçersiz karakter var.";
$locale['453'] = "Bu kullanýcý adý ".(isset($_POST['user_name']) ? $_POST['user_name'] : "")." daha önce alýnmýþ.";
$locale['454'] = "Geçersiz e-mail adresi.";
$locale['455'] = "Bu e-mail adresi ".(isset($_POST['user_email']) ? $_POST['user_email'] : "")." daha önce alýnmýþ.";
$locale['456'] = "Þifreler birbirini tutmuyor.";
$locale['457'] = "Geçersiz þifre, Türkçe Karakter Kullanmayýnýz.<br>
Þifreniz minimum 6 karakter uzunluðunda olmalýdýr.";
$locale['458'] = "<strong>Dikkat:</strong> beklenmeyen bir script hatasý oluþtu.";
// View Member Profile
$locale['470'] = "Üye Profili: ";
$locale['472'] = "Ýstatistik";
$locale['473'] = "Kullanýcý Gruplarý";
// Add Member Errors
$locale['480'] = "Üye Ekle";
$locale['481'] = "Üye Hesabý Oluþturuldu.";
$locale['482'] = "Üye Hesabý Oluþturulamýyor.";
// Suspension Log 
$locale['510s'] = "Þu üyenin geçici banlanma geçmiþi: ";
$locale['511s'] = "Geçici banlanma geçmiþinde bu üye için bir geçmiþ bulunamadý.";
$locale['512s'] = "Þu üyenin önceki geçici banlanmalarý: ";
$locale['513'] = "No."; // as in number
$locale['514'] = "Tarih";
$locale['515'] = "Sebep";
$locale['516'] = "Geçici banlanma yönetimi";
$locale['517'] = "Sistem Etkisi"; //system action
$locale['518'] = "Üye Profiline Geri Dön";
$locale['519'] = "Bu üyenin geçici banlanma durumu ";
$locale['520'] = "Ban Kalkma: ";
$locale['521'] = "IP: ";
$locale['522'] = "Henüz eski haline dönüþtürülmemiþ";
$locale['540'] = "Hata";
$locale['541'] = "Hata: Geçici banlama için bir sebep belirtmelisiniz!";
$locale['542'] = "Hata: Güvenlik banlamasý için bir sebep belirtmelisiniz!";
// User Management Admin
$locale['550'] = "Geçici banlanan üye: ";
$locale['551'] = "Müddet (gün):";
$locale['552'] = "Sebep:";
$locale['553'] = "Geçici banlanma";
$locale['554'] = "Geçici banlanma geçmiþinde bu üye için bir geçmiþ bulunamadý.";
$locale['555'] = "Eðer bu üyenin banlanmasýna karar verdiyseniz 'Banla' tuþuna basýn";
$locale['556'] = "Þu üyenin geçici banýný kaldýrýn: ";
$locale['557'] = "Geçici baný kaldýr";
$locale['558'] = "Þu üyenin banýný kaldýrýn: ";
$locale['559'] = "Baný kaldýr ";
$locale['560'] = "Þu üyenin güvenlik banýný kaldýrýn: ";
$locale['561'] = "Güvenlik banýný kaldýr";
$locale['562'] = "Üyeyi Banla: ";
$locale['563'] = "Güvenlik Baný uygula: ";
$locale['585a'] = "Lütfen banladýðýnýzýn ya da baný kaldýrmanýzýn sebebini girin ";

$locale['566'] = "Ban kaldýrýldý";
$locale['568'] = "Güvenlik Baný uygulandý";
$locale['569'] = "Güvenlik Baný kaldýrýldý";
$locale['572'] = "Üye geçici banlandý";
$locale['573'] = "Geçici Ban kaldýrýldý";
$locale['574'] = "Üye inaktif edildi";
$locale['575'] = "Üye yeniden aktif edildi";
$locale['576'] = "Hesap iptal edildi";
$locale['577'] = "Hesap iptali kaldýrýldý";
$locale['578'] = "Hesap iptal edildi ve anonim hale dönüþtürüldü";
$locale['579'] = "Hesap anonim halden baþarý ile kaldýrýldý";
$locale['580'] = "Aktif olmayan üyeleri inaktif hale dönüþtür";
$locale['581'] = "50 den fazla inaktif üyeniz var ve de deaktifleþtirme prosesini <strong>%d sefer</strong> çalýþtýrmanýz gerekmekte.";
$locale['582'] = "Yeniden aktifleþtir";
$locale['583'] = "Eski haline dönüþtür";
$locale['584'] = "Yeni durumu seçin";
$locale['585'] = "Bu üye ilk olarak güvenlik sebepleri nedeniyle banlanmýþtý! Bu üyenin banýný kaldýrmak istediðinizden emin misiniz?";

$locale['590'] = "Geçici Banla";
$locale['591'] = "Geçici Baný Kaldýr";
$locale['592'] = "geçici banladýðýnýz";
$locale['593'] = "geçici banýný kaldýrdýðýnýz";
$locale['594'] = "Lütfen bu üyeyi neden ";
$locale['595'] = " için bir sebep belirtin: ";
$locale['596'] = "Süre:";

$locale['600'] = "Güvenlik banlamasý";
$locale['601'] = "güvenlik banlamasý";
$locale['602'] = "Baný kaldýr";
$locale['603'] = "baný kaldýrýlýyor";
$locale['604'] = "Sebep:";
// Deactivation System
$locale['610'] = "<strong>%d üye</strong> <strong>%d gündür</strong> siteye girmedi, ve de bu yüzden inaktif olarak iþaretlenmiþtir. 
Bubu gerçekleþtirerek bu üyelere <strong>%d gün</strong>tanýmýþ olacaksýnýz. Yoksa bu üyeler %s<br />
Bu üyeler forum mesajý, yorum, resim gibi içerikler eklemiþ olabilirler,
ve de eðer bu üyeler kendilerine verilen süre içerisinde giriþ yapmayýp otomatik olarak silinirse girdikleri girdiler de silinecektir.";
$locale['612'] = "üye";
$locale['613'] = "üyeler";
$locale['614'] = "Deaktif Et";
$locale['615'] = "kalýcý olarak silinecek";
$locale['616'] = "Anonim hale dönüþtür";
$locale['617'] = "Uyarý:";
$locale['618'] = "Veri kaybýný önmelek için dealtivasyon seçeneðini anonim hale dönüþtürmeye ayarlamanýzý þiddetle tavsiye ediyoruz!";
$locale['619'] = "Bunu buradan gerçekleþtirebilirsiniz.";
$locale['620'] = "anonim hale dönüþtür";
$locale['621'] = "Ýnaktif üyelerin otomatik deaktivasyonu.";
?>