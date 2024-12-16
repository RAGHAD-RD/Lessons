<?php
echo "Hello, World!";  // يتم طباعة النص بين علامات الاقتباس
?>

//لجمل الشرطية (if, else, elseif)
<?php
$x = 10;
if ($x > 5) {
    echo "x أكبر من 5";  // سيتم طباعة هذا إذا كانت الشرط صحيحًا
} else {
    echo "x ليس أكبر من 5";  // سيتم طباعة هذا إذا كانت الشرط غير صحيح
}

$y = 3;
if ($y > 5) {
    echo "y أكبر من 5";
} elseif ($y == 3) {
    echo "y يساوي 3";  // سيتم طباعة هذا
} else {
    echo "y أصغر من 5";
}
?>
//الحلقات التكرارية (for, foreach, while, do while)

//حلقة for
<?php
for ($i = 1; $i <= 5; $i++) {
    echo $i . "<br>";  // سيتم طباعة الأرقام من 1 إلى 5
}
?>

//حلقة foreach
<?php
$array = [1, 2, 3, 4, 5];
foreach ($array as $value) {
    echo $value . "<br>";  // سيتم طباعة قيم المصفوفة
}
?>

//حلقة while
<?php
$i = 1;
while ($i <= 5) {
    echo $i . "<br>";  // سيتم طباعة الأرقام من 1 إلى 5
    $i++;
}
?>

//حلقة do while
<?php
$i = 1;
do {
    echo $i . "<br>";  // سيتم طباعة الأرقام من 1 إلى 5
    $i++;
} while ($i <= 5);
?>

//معاملات المقارنة
<?php
$a = 10;
$b = 20;
if ($a == $b) {
    echo "a يساوي b";
} elseif ($a != $b) {
    echo "a لا يساوي b";  // سيتم طباعة هذا لأن a ليست مساوية ل b
}
?>

//العمليات الحسابية
<?php
$x = 10;
$y = 5;

$sum = $x + $y;  // جمع
echo "المجموع: " . $sum . "<br>";

$diff = $x - $y;  // طرح
echo "الفرق: " . $diff . "<br>";

$product = $x * $y;  // ضرب
echo "المنتج: " . $product . "<br>";

$quotient = $x / $y;  // قسمة
echo "القسمة: " . $quotient . "<br>";

$remainder = $x % $y;  // باقي القسمة
echo "الباقي: " . $remainder . "<br>";
?>

//العمليات الزيادة والنقصان
<?php
$z = 5;
$z++;  // زيادة بمقدار واحد
echo $z . "<br>";  // سيتم طباعة 6

$z--;  // نقصان بمقدار واحد
echo $z . "<br>";  // سيتم طباعة 5
?>

//جملة switch
<?php
$color = "red";

switch ($color) {
    case "red":
        echo "اللون أحمر";
        break;
    case "blue":
        echo "اللون أزرق";
        break;
    default:
        echo "اللون غير معروف";
}
?>
