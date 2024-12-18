<?php
// التحقق من إذا تم إرسال البيانات باستخدام GET
if (isset($_GET['username'])) {
    // تخزين اسم المستخدم المرسل عبر GET في متغير
    $username = htmlspecialchars($_GET['username']);
    echo "<h2>مرحباً، " . $username . "!</h2>";
} else {
    echo "<h2>لم يتم إرسال اسم المستخدم.</h2>";
}
?>
