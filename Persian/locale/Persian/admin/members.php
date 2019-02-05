<?php
// Member Management Options
$locale['400'] = "اعضا";
$locale['401'] = "کاربر";
$locale['402'] = "افزودن عضو جدید";
$locale['403'] = "نوع کاربر";
$locale['404'] = "اختیارات";
$locale['405'] = "نمایش";
$locale['406'] = "ویرایش";
$locale['407'] = "فعال سازی";
$locale['408'] = "آزاد سازی از مسدودیت";
$locale['409'] = "مسدودکردن";
$locale['410'] = "حذف عضویت";
$locale['411'] = "هیچ کاربری %s نیست";
$locale['412'] = " که نامش با این مورد آغاز شود: ";
$locale['413'] = " همخوانی ";
$locale['414'] = "نمایش همه";
$locale['415'] = "جسجو برای اعضا:";
$locale['416'] = "جستجو";
$locale['417'] = "انتخاب عمل";
$locale['418'] = "صرف نظر";
$locale['419'] = "بازیابی";
// Ban/Unban/Delete Member
$locale['420'] = "مسدود شد";
$locale['421'] = "از مسدودیت خارج شد";
$locale['422'] = "عضو حذف شد";
$locale['423'] = "آیا مطمئنید که می خواهید این عضو را حذف کنید؟";
$locale['424'] = "عضو فعال شد";
$locale['425'] = "<h2>هشدار!</h2><br />
شما در حال حذف عضویت کاربر <strong>%s</strong> هستید!<br />
تمام اطلاعات کاربر از جمله <u>تمامی پست های کاربر</u> در این سایت حذف خواهد شد به عنوان مثال تمامی نوشته های کاربر در :<br />
- مقالات<br />
- اخبار<br />
- تالارهای انجمن .کلیه تالارهایی که توسط این کاربر ساخته شده است و کاربرانی که در این تالارهای کاربر فوق پستی ارایه کرده اند یا فایلهایی پیوست شده اند همگی حذف خواهند شد همچنین:<br />
- کلیه پست های این کاربر در انجمن<br />
- کلیه فایلهای پیوست شده توسط این کاربر<br />
- کلیه نظرات این کاربر<br />
- کلیه پیامهای دریافتی و ارسالی این کاربر<br />
- کلیه نظرات این کاربر و نظر سنجی های ساخته شده توسط این کاربر<br />
- کلیه امتیازات این کاربر<br />
ما به شما پیشنهاد می کنیم که به جای حذف کاربر ، وی را گمنام و یا معلق و یا مسدود نمایید.<br />
<br />
آیا از حذف عضویت این کاربر مطمئن هستید؟<br />";
$locale['426'] = "بلی";
$locale['427'] = "خیر";
// Edit Member Details
$locale['430'] = "ویرایش عضو";
$locale['431'] = "جزئیات عضو ویرایش شد";
$locale['432'] = "بازگشت به مدیریت اعضا";
$locale['433'] = "بازگشت به فهرست مدیریت";
$locale['434'] = "نمی تواند جزئیات عضو را ویرایش کند:";
// Extra Edit Member Details form options
$locale['440'] = "ذخیره تغییرات";
// Update Profile Errors
$locale['450'] = "نمی توانید مدیر اصلی سایت را ویرایش کنید.";
$locale['451'] = "شما باید یک نام کاربری و آدرس ایمیل مشخص کنید.";
$locale['452'] = "نام کاربری محتوی کاراکترهای غیرمجاز است.";
$locale['453'] = "نام کاربری ".(isset($_POST['user_name']) ? $_POST['user_name'] : "")." در سایت وجود دارد.";
$locale['454'] = "آدرس ایمیل غیرمجاز است.";
$locale['455'] = "آدرس ایمیل ".(isset($_POST['user_email']) ? $_POST['user_email'] : "")." در سایت وجود دارد.";
$locale['456'] = "گذرواژه های جدید همخوانی ندارند.";
$locale['457'] = "گذرواژه غیرمجاز است، فقط از حروف و اعداد انگلیسی استفاده کنید.<br />
حداقل طول گذرواژه باید 8کاراکتر باشد.";
$locale['458'] = "<strong>هشدار:</strong> اجرای اسکریپت ناخواسته.";
// View Member Profile
$locale['470'] = "مشخصات عضو";
$locale['472'] = "آمار";
$locale['473'] = "گروه های کاربری";
// Add Member Errors
$locale['480'] = "افزودن عضو";
$locale['481'] = "حساب کاربری ساخته شد.";
$locale['482'] = "حساب کاربری نمی تواند ساخته شود.";
// Suspension Log 
$locale['510s'] = "Suspension Log for ";
$locale['511s'] = "There are no recorded suspensions for this member in the suspension log.";
$locale['512s'] = "Previous suspensions of ";
$locale['513'] = "No."; // as in number
$locale['514'] = "تاریخ";
$locale['515'] = "دلیل";
$locale['516'] = "Suspending Administrator";
$locale['517'] = "عملیات سیستم";
$locale['518'] = "بازگشت به پروفایل کاربر";
$locale['519'] = "ورود به سیستم توقیف و تنبیه این کاربر ";
$locale['520'] = "دلیل آزاد سازی: ";
$locale['521'] = "آی پی: ";
$locale['522'] = "Not yet reinstated";
$locale['540'] = "خطاء";
$locale['541'] = "خطاء: شما باید دلیلی برای مسدود سازی بیان کنید";
$locale['542'] = "خطاء: شما باید دلیلی برای مسدود سازی امنیتی بیان کنید";
// User Management Admin
$locale['550'] = "معلق کردن کاربر: ";
$locale['551'] = "مدت زمان برحسب روز:";
$locale['552'] = "دلیل:";
$locale['553'] = "معلق کردن";
$locale['554'] = "There are no recorded suspensions for this member in the suspension log.";
$locale['555'] = "If you decide that this user should be banned click on 'Ban'";
$locale['556'] = "Lift Suspension of User: ";
$locale['557'] = "Lift Suspension";
$locale['558'] = "Lift Ban of User: ";
$locale['559'] = "Lift Ban ";
$locale['560'] = "Lift Security Ban of User: ";
$locale['561'] = "Lift Security Ban";
$locale['562'] = "مسدود سازی کاربر: ";
$locale['563'] = "مسدود سازی امنیتی کاربر: ";
$locale['585a'] = "لطفا یک دلیل جهت ثبت در پرونده برای مسدود سازی و یا آزاد سازی بنویسید برای کاربر ";

$locale['566'] = "Ban lifted";
$locale['568'] = "Security Ban imposed";
$locale['569'] = "Security Ban lifted";
$locale['572'] = "کاربر مورد نظر معلق شد";
$locale['573'] = "Suspension lifted";
$locale['574'] = "Member deactivated";
$locale['575'] = "Member reactivated";
$locale['576'] = "Account cancelled";
$locale['577'] = "Account cancellation undone";
$locale['578'] = "Account cancelled and anonymized";
$locale['579'] = "Account anonymization undone";
$locale['580'] = "Deactivate Inactive Members";
$locale['581'] = "You have more then 50 inactive users and will have to run the deactivation process <strong>%d times</strong>.";
$locale['582'] = "Reactivate";
$locale['583'] = "Re-instate";
$locale['584'] = "Select new status";
$locale['585'] = "This Member was originally banned for security reasons! Are you certain you want to unban this member now?";

$locale['590'] = "معلق کردن";
$locale['591'] = "آزاد کردن از معلق";
$locale['592'] = "معلق کردن";
$locale['593'] = "unsuspending";
$locale['594'] = "لطفا یک دلیل برای ثبت در پرونده کاربر بنویسید ، نوع تنبیه : ";
$locale['595'] = "  کاربر ";
$locale['596'] = "مدت زمان:";

$locale['600'] = "Security ban";
$locale['601'] = "security banning";
$locale['602'] = "Unban";
$locale['603'] = "unbanning";
$locale['604'] = "دلیل:";
// Deactivation System
$locale['610'] = "<strong>%d user(s)</strong> have not logged in for <strong>%d day(s)</strong> and have been marked as inactive. 
By deactivating these users they will have <strong>%d day(s)</strong> before they are %s.";
$locale['611'] = "Please note that some users may have submitted content to your site such as forum posts, comments, photos etc.
these will be deleted when deactivated users are beeing deleted.";
$locale['612'] = "کاربر";
$locale['613'] = "کاربران";
$locale['614'] = "Deactivate";
$locale['615'] = "permanently deleted";
$locale['616'] = "anonymize";
$locale['617'] = "هشدار:";
$locale['618'] = "It is strongly recommended to change deactivation action to anonymize instead of delete to prevent data loss!";
$locale['619'] = "You can do so here.";
$locale['620'] = "anonymize";
$locale['621'] = "Automatic deactivation of inactive users.";
?>