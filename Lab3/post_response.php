<?php
// التحقق من إذا تم إرسال البيانات باستخدام POST
if (isset($_POST['email'])) {
    // تخزين البريد الإلكتروني المرسل عبر POST في متغير
    $email = htmlspecialchars($_POST['email']);
    echo "<h2>تم إرسال البريد الإلكتروني: " . $email . "</h2>";
} else {
    echo "<h2>لم يتم إرسال البريد الإلكتروني.</h2>";
}
?>
