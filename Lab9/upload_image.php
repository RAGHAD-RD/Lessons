<?php
// استدعاء ملف الاتصال بقاعدة البيانات
include('db_connection.php');

// التحقق إذا تم إرسال الصورة
if (isset($_POST['submit'])) {
    // التأكد من أن المستخدم قد اختار صورة
    if ($_FILES['image']['error'] == 0) {
        // قراءة اسم الصورة
        $image_name = $_FILES['image']['name'];

        // إعادة تسمية الصورة لتفادي المشاكل مع المسافات أو الأحرف الخاصة
        $image_name = preg_replace("/[^a-zA-Z0-9\._-]/", "_", $image_name); // استبدال الأحرف غير الصالحة بـ "_"
        
        // تحديد المسار الذي سيتم تخزين الصورة فيه
        $target_directory = "uploads/"; // المسار الذي سيتم حفظ الصورة فيه
        $target_file = $target_directory . basename($image_name);

        // التأكد من أن الصورة بصيغة مناسبة (اختياري)
        $image_file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $allowed_types = ["jpg", "jpeg", "png", "gif"];
        
        if (!in_array($image_file_type, $allowed_types)) {
            echo "نوع الصورة غير مدعوم.";
            exit;
        }

        // رفع الصورة إلى الخادم
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
            // إدخال المسار في قاعدة البيانات
            $sql = "INSERT INTO images (image_name, image_path) VALUES (?, ?)";

            // استخدام prepared statement لتفادي هجمات SQL injection
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ss", $image_name, $target_file); // "ss" تعني string

            // تنفيذ الاستعلام
            if ($stmt->execute()) {
                echo "تم تحميل الصورة بنجاح!";
            } else {
                echo "حدث خطأ: " . $stmt->error;
            }

            // إغلاق البيان و الاتصال
            $stmt->close();
        } else {
            echo "فشل في تحميل الصورة.";
        }
    } else {
        echo "خطأ في تحميل الصورة.";
    }
} else {
    echo "لم يتم إرسال الصورة.";
}

// إغلاق الاتصال
$conn->close();
?>
