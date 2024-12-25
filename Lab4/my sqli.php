<?php
$host = 'localhost';       // اسم الخادم
$port = 3306;              // المنفذ الافتراضي لـ MySQL (يمكنك تعديله إذا كنت تستخدم منفذًا آخر)
$dbname = 'test';          // اسم قاعدة البيانات
$username = 'root';        // اسم المستخدم
$password = '';            // كلمة المرور فارغة

// إنشاء الاتصال باستخدام MySQLi
$conn = new mysqli($host, $username, $password, $dbname, $port);

// التحقق من الاتصال
if ($conn->connect_error) {
    // في حالة حدوث خطأ في الاتصال
    die("فشل الاتصال: " . $conn->connect_error);
} else {
    echo "تم الاتصال بنجاح!";
}

// إغلاق الاتصال بعد الاستخدام
$conn->close();
?>
