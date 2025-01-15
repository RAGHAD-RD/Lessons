<?php

// 1. preg_match() - البحث عن تطابق واحد
echo "1. preg_match():\n";
$email = "user@example.com";
$emailPattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
if (preg_match($emailPattern, $email)) {
    echo "البريد الإلكتروني '$email' صحيح.\n";
} else {
    echo "البريد الإلكتروني '$email' غير صحيح.\n";
}
echo "\n";

// 2. preg_match_all() - البحث عن جميع التطابقات
echo "2. preg_match_all():\n";
$text = "My numbers are 123-456-7890 and 987-654-3210.";
$phonePattern = "/\d{3}-\d{3}-\d{4}/"; // البحث عن أرقام هواتف بصيغة 123-456-7890
preg_match_all($phonePattern, $text, $matches);
echo "تم العثور على الأرقام التالية: \n";
print_r($matches[0]); // يعرض جميع الأرقام
echo "\n";

// 3. preg_replace() - استبدال النصوص
echo "3. preg_replace():\n";
$sentence = "I love PHP and PHP is great!";
$replacePattern = "/PHP/";
$replacement = "Python"; // استبدال PHP بـ Python
$newSentence = preg_replace($replacePattern, $replacement, $sentence);
echo "النص بعد الاستبدال: '$newSentence'\n";
echo "\n";

// 4. preg_split() - تقسيم النص
echo "4. preg_split():\n";
$string = "apple,banana,orange,grape";
$splitPattern = "/,/"; // تقسيم النص عند الفواصل
$fruits = preg_split($splitPattern, $string);
echo "قائمة الفواكه: \n";
print_r($fruits); // يعرض الفواكه
echo "\n";

// 5. preg_grep() - البحث عن تطابقات داخل مصفوفة
echo "5. preg_grep():\n";
$array = ["apple", "banana", "123apple", "orange"];
$pattern = "/\d+/"; // البحث عن أي كلمة تحتوي على أرقام
$matchesArray = preg_grep($pattern, $array);
echo "العناصر التي تحتوي على أرقام: \n";
print_r($matchesArray); // يعرض العناصر التي تحتوي على أرقام
echo "\n";

// 6. استخدام preg_replace مع أنماط معقدة - إزالة كل المسافات البيضاء الزائدة
echo "6. preg_replace مع أنماط معقدة:\n";
$complexText = "  This   is   a  text    with extra spaces.  ";
$cleanText = preg_replace('/\s+/', ' ', $complexText); // استبدال المسافات المتعددة بمسافة واحدة
echo "النص بعد إزالة المسافات الزائدة: '$cleanText'\n";
echo "\n";

// 7. التحقق من تاريخ بصيغة (DD-MM-YYYY)
echo "7. التحقق من تاريخ بصيغة (DD-MM-YYYY):\n";
$date = "31-12-2025";
$datePattern = "/^(0[1-9]|[12][0-9]|3[01])-(0[1-9]|1[0-2])-\d{4}$/"; // تاريخ بصيغة DD-MM-YYYY
if (preg_match($datePattern, $date)) {
    echo "التاريخ '$date' صحيح.\n";
} else {
    echo "التاريخ '$date' غير صحيح.\n";
}
echo "\n";

// 8. التحقق من رقم يحتوي فقط على أرقام
echo "8. التحقق من رقم يحتوي فقط على أرقام:\n";
$number = "123456";
$numberPattern = "/^\d+$/"; // التأكد من أن النص يتكون من أرقام فقط
if (preg_match($numberPattern, $number)) {
    echo "الرقم '$number' صحيح.\n";
} else {
    echo "الرقم '$number' غير صحيح.\n";
}
echo "\n";

// 9. التحقق من رقم هاتف بصيغة (XXX-XXX-XXXX)
echo "9. التحقق من رقم هاتف:\n";
$phoneNumber = "123-456-7890";
$phonePattern = "/^\d{3}-\d{3}-\d{4}$/"; // التأكد من أن الرقم يحتوي على 3 أرقام - 3 أرقام - 4 أرقام
if (preg_match($phonePattern, $phoneNumber)) {
    echo "رقم الهاتف '$phoneNumber' صحيح.\n";
} else {
    echo "رقم الهاتف '$phoneNumber' غير صحيح.\n";
}
echo "\n";

// 10. التحقق من وجود كلمات في النص (مثل كلمات مفتاحية)
echo "10. التحقق من وجود كلمات:\n";
$text = "I am learning PHP, it is an amazing language!";
$pattern = "/\b(PHP|JavaScript|Python)\b/"; // التحقق من وجود كلمات PHP أو JavaScript أو Python
if (preg_match($pattern, $text)) {
    echo "تم العثور على كلمة مفتاحية في النص.\n";
} else {
    echo "لم يتم العثور على كلمة مفتاحية في النص.\n";
}
echo "\n";

// 11. استخدام preg_split لتقسيم نص بناءً على مسافات
echo "11. preg_split() لتقسيم النص:\n";
$sentence = "This is a test sentence for splitting.";
$words = preg_split("/\s+/", $sentence); // تقسيم النص إلى كلمات باستخدام المسافات
echo "الكلمات بعد تقسيم النص: \n";
print_r($words);
echo "\n";

// 12. إضافة القيم للأرقام في النص
echo "12. إضافة القيم للأرقام في النص:\n";
$textWithNumbers = "The price of the item is 100 dollars and the discount is 20 dollars.";
$pattern = "/\d+/"; // البحث عن الأرقام
preg_match_all($pattern, $textWithNumbers, $matches);
echo "تم العثور على الأرقام التالية في النص: \n";
print_r($matches[0]);
echo "\n";
?>

