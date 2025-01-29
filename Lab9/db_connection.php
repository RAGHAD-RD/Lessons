<?php
// db_connection.php

$servername = "localhost";   // اسم السيرفر (عادةً localhost)
$username = "root";          // اسم المستخدم (عادةً root)
$password = "";              // كلمة المرور (افتراضيًا فارغة في بعض السيرفرات المحلية)
$dbname = "image_db";        // اسم قاعدة البيانات

// إنشاء الاتصال
$conn = new mysqli($servername, $username, $password, $dbname);

// التحقق من الاتصال
if ($conn->connect_error) {
    die("الاتصال بقاعدة البيانات فشل: " . $conn->connect_error);
}
?>