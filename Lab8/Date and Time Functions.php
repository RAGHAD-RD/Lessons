<?php

// 1. دالة date() - عرض التاريخ والوقت حسب التنسيق المحدد
echo "1. التاريخ والوقت الحالي بتنسيق معين: " . date("Y-m-d H:i:s") . "\n";

// 2. دالة time() - الحصول على الطابع الزمني (عدد الثواني منذ 1970-01-01)
echo "2. الطابع الزمني الحالي: " . time() . "\n";

// 3. دالة strtotime() - تحويل سلسلة نصية إلى طابع زمني
echo "3. تحويل نص إلى طابع زمني (Next Monday): " . strtotime("next Monday") . "\n";

// 4. دالة getdate() - الحصول على تفاصيل الوقت والتاريخ في مصفوفة
echo "4. تفاصيل الوقت والتاريخ (getdate()): \n";
print_r(getdate());

// 5. دالة mktime() - إنشاء طابع زمني بناءً على التاريخ والوقت المحدد
echo "5. إنشاء طابع زمني باستخدام mktime() (14 يناير 2025 الساعة 12:00:00): " . mktime(12, 0, 0, 1, 14, 2025) . "\n";

// 6. دالة date_create() و date_format() - إنشاء كائن تاريخ وتنسيقه
$date = date_create("2025-01-14 15:00:00");
echo "6. إنشاء وتنسيق التاريخ باستخدام date_create() و date_format(): " . date_format($date, "Y-m-d H:i:s") . "\n";

// 7. دالة date_diff() - حساب الفرق بين تاريخين
$date1 = date_create("2025-01-01");
$date2 = date_create("2025-01-14");
$diff = date_diff($date1, $date2);
echo "7. الفرق بين التاريخين (1 يناير 2025 و 14 يناير 2025): " . $diff->format("%R%a days") . "\n";

// 8. دالة date_default_timezone_set() - ضبط المنطقة الزمنية الافتراضية
date_default_timezone_set("Asia/Riyadh");
echo "8. الوقت الحالي بتوقيت الرياض: " . date("Y-m-d H:i:s") . "\n";

// 9. دالة timezone_identifiers_list() - الحصول على قائمة بجميع المناطق الزمنية المتاحة
echo "9. قائمة بكل المناطق الزمنية المتاحة: \n";
print_r(timezone_identifiers_list());

// 10. دالة microtime() - الحصول على الوقت الحالي بدقة الميكروثانية
echo "10. microtime: " . microtime(true) . "\n";

// 11. دالة strtotime() مع صيغة معقدة
echo "11. strtotime مع صيغة معقدة: " . strtotime("+1 week 2 days 4 hours") . "\n";

// 12. دالة checkdate() - التحقق من صحة التاريخ
if (checkdate(2, 29, 2025)) {
    echo "12. التاريخ صحيح.\n";
} else {
    echo "12. التاريخ غير صحيح.\n";
}

// 13. دالة idate() - عرض جزء معين من التاريخ
echo "13. السنة الحالية: " . idate("Y") . "\n";

// 14. دالة gettimeofday() - الحصول على الوقت الحالي بالتفاصيل الدقيقة
print_r(gettimeofday());

// 15. دالة date_sunrise() و date_sunset() - وقت شروق وغروب الشمس
echo "15. شروق الشمس: " . date_sunrise(time(), SUNFUNCS_RET_STRING, 21.4225, 39.8262, 90, 3) . "\n";
echo "15. غروب الشمس: " . date_sunset(time(), SUNFUNCS_RET_STRING, 21.4225, 39.8262, 90, 3) . "\n";

?>
