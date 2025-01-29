<?php

// مثال باستخدام const
class ClassWithConst {
    // تعريف ثابت باستخدام const
    const MY_CONSTANT = 100;

    // ميثود لعرض الثابت
    public function showConstant() {
        echo "الثابت MY_CONSTANT داخل الصنف: " . self::MY_CONSTANT . "\n";
    }
}

// استخدام الكود
echo "الوصول إلى الثابت MY_CONSTANT من خارج الصنف: " . ClassWithConst::MY_CONSTANT . "\n";  // الوصول إلى الثابت

$obj1 = new ClassWithConst();
$obj1->showConstant();  // الوصول إلى الثابت من داخل الميثود

// مثال باستخدام static
class ClassWithStatic {
    // تعريف متغير static
    static $counter = 0;

    // ميثود لزيادة قيمة المتغير static
    public function increment() {
        self::$counter++;
    }

    // ميثود لإظهار قيمة المتغير static
    public function showCounter() {
        echo "قيمة counter داخل الصنف: " . self::$counter . "\n";
    }
}

// استخدام الكود
$obj2 = new ClassWithStatic();
$obj2->increment();
$obj2->showCounter();  // عرض قيمة counter بعد الزيادة

$obj3 = new ClassWithStatic();
$obj3->increment();
$obj3->showCounter();  // عرض قيمة counter بعد الزيادة الثانية

// عرض قيمة counter عبر كائنات مختلفة
echo "قيمة counter عبر كائنات متعددة: " . ClassWithStatic::$counter . "\n"; // نفس القيمة عبر الكائنات المختلفة

?>
