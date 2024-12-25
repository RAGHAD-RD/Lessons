<?php
$host = 'localhost';       // اسم الخادم مع المنفذ 
$dbname = 'test';             // اسم قاعدة البيانات
$username = 'root';           // اسم المستخدم
$password = '';               // كلمة المرور فارغة

try {
    // إنشاء الاتصال باستخدام PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    
    // تعيين وضع الخطأ إلى الاستثناءات
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "تم الاتصال بنجاح!";
} catch (PDOException $e) {
    // في حالة حدوث خطأ في الاتصال
    echo "فشل الاتصال: " . $e->getMessage();
}
?>
