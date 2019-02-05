<?php
$locale['400'] = "Qeydiyyat";
$locale['401'] = "Hesabı aktivləşdir";
// Registration Errors
$locale['402'] = "Siz istifadəçi adınızı, şifrənizi və e-mail ünvanınızı yazmalısınız.";
$locale['403'] = "İstifadəçi adında yalnış simvollar var.";
$locale['404'] = "Şifrələriniz üst-üstə düşmür.";
$locale['405'] = "Yalnış şifrə, yalnız latın hərflərindən 
və rəqəmlərdən istifadə edə bilərsiniz.<br>
Şifrəniz ən az 6 simvoldan ibarət olmalıdır.";
$locale['406'] = "E-mail ünvanınız düzgün deyil.";
$locale['407'] = "Bağışlayın, istifadəçi adı ".(isset($_POST['username']) ? $_POST['username'] : "")." artıq istifadə olunur";
$locale['408'] = "Başışlayın, daxil etdiyiniz ".(isset($_POST['email']) ? $_POST['email'] : "")." e-mail 
ünvanı ilə artıq qeydiyyatdan keçiblər.";
$locale['409'] = "Hələ ki, aktiv olmayan hesab bu e-mail ilə yaradıldı.";
$locale['410'] = "YALNIŞ təsdiqləmə kodu.";
$locale['411'] = "Sizin e-mailiniz və ya e-mail xidməti göstərən domain qara siyahıdadır.";
// Email Message
$locale['449'] = "".$settings['sitename']." saytin xos gelmishsiniz.";
$locale['450'] = "Salam ".(isset($_POST['username']) ? $_POST['username'] : "").",\n
".$settings['sitename']."Saytina xosh gelmishsiniz. Istifadechi melumetlariniz:\n
Leqeb: ".(isset($_POST['username']) ? $_POST['username'] : "")."
Shifre: ".(isset($_POST['password1']) ? $_POST['password1'] : "")."\n
Ashagidaki kechidle hesabinizi aktiv edin:\n";
// Registration Success/Fail
$locale['451'] = "Qeydiyyat uğurla bitdi";
$locale['452'] = "İndi daxil ola bilərsiniz.";
$locale['453'] = "İdarəçilər ən qısa zamanda hesabınızı aktiv edəcək!";
$locale['454'] = "Qeydiyyatın tamamlanmasına lap az qaldı, E-mail ünvanınıza təsdiqləmə məktubu və qeydiyyat mə`lumatlarınız göndərildi.";
$locale['455'] = "Hesabınız təsdiq edildi.";
$locale['456'] = "Qeydiyyat uğursuz oldu";
$locale['457'] = "Məktub göndərişi uğursuz oldu, xahiş edirik portalın idarəçisi ilə <b><a href='mailto:".$settings['siteemail']."'>ƏLAQƏ</a></b> saxlayın.";
$locale['458'] = "Qeydiyyat aşağıdakı səbəblərə görə baş tutmadı:";
$locale['459'] = "Bir də yoxlayın...";
// Register Form
$locale['500'] = "Mə`lumatlarınızı aşağıdadakı boşluqlara müvafiq olaraq doldurun. ";
$locale['501'] = "Təsdiq etmə məktubu daxil edəcəyiniz e-mail ünvanına göndəriləcək. ";
$locale['502'] = "<br><span style='color:#ff0000;'>*</span> ilə işarlənmiş boşluqlar mütləq doldurulmalıdır. <br><b>QEYD:</b> İstifadəçi adınızı və şifrənizi yazarkən böyük - kiçik hərflərə diqqət edin.";
$locale['503'] = " Siz şəxsi məlumatlarınızı dəyişdirmək üçün <b>Şəxsi məlumatlar</b> bölməsindən istifadə edə bilərsiniz.";
$locale['504'] = "Təsdiqləmə şifrəsi:";
$locale['505'] = "Təsdiqləmə şifrəsini daxil edin:";
$locale['506'] = "Qeydiyyat";
$locale['507'] = "Sayta qeydiyyat müvəqqəti olaraq dayandırılmışdır.";
$locale['508'] = "Razılaşmanın şərtləri";
$locale['509'] = "Mən <a href='".BASEDIR."print.php?type=T' target='_blank'>RAZILAŞMANIN ŞƏRTLƏRİNİ</a> oxudum və bütün şərtləri qəbul edirəm.";
// Validation Errors
$locale['550'] = "İstifadəçi adını yazmalısınız.";
$locale['551'] = "Şifrənizi yazmalısınız.";
$locale['552'] = "E-mail ünvanınızı yazmalısınız.";
?>