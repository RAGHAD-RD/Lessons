<?php

// 1. تعريف كلاس مع طريقة Getter و Setter
// سنقوم هنا بتعريف طريقة لتعيين قيمة خاصية "name" وطريقة لاسترجاعها

echo "<h2>1. طريقة Getter و Setter</h2>";

class Person {
    // خاصية خاصة (private) لتخزين الاسم
    private $name;

    // طريقة Setter لتعيين الاسم
    public function setName($name) {
        $this->name = $name;  // تعيين القيمة الممررة إلى الخاصية
    }

    // طريقة Getter لاسترجاع الاسم
    public function getName() {
        return $this->name;  // إرجاع القيمة المخزنة في الخاصية
    }
}

// استخدام الكلاس
$person = new Person();
$person->setName("محمود");  // تعيين الاسم باستخدام طريقة setter
echo "الاسم هو: " . $person->getName();  // استرجاع الاسم باستخدام طريقة getter
// ستُطبع: الاسم هو: محمود

echo "<br><br>";


// 2. كلاس مع عمليات حسابية (جمع و ضرب)

// هنا سنقوم بإنشاء كلاس لحساب المجموع والفرق والضرب لقيمتين

echo "<h2>2. عمليات حسابية على القيم</h2>";

class Calculator {
    private $value1;
    private $value2;

    // طريقة لتعيين القيم
    public function setValues($value1, $value2) {
        $this->value1 = $value1;
        $this->value2 = $value2;
    }

    // طريقة لحساب المجموع
    public function getSum() {
        return $this->value1 + $this->value2;  // جمع القيمتين
    }

    // طريقة لحساب الفرق
    public function getDifference() {
        return $this->value1 - $this->value2;  // طرح القيمتين
    }

    // طريقة لحساب الحاصل (الضرب)
    public function getProduct() {
        return $this->value1 * $this->value2;  // ضرب القيمتين
    }
}

// استخدام الكلاس
$calc = new Calculator();
$calc->setValues(10, 5);  // تعيين القيم
echo "المجموع: " . $calc->getSum() . "<br>";           // سيتم طباعة: المجموع: 15
echo "الفرق: " . $calc->getDifference() . "<br>";      // سيتم طباعة: الفرق: 5
echo "الحاصل: " . $calc->getProduct() . "<br>";        // سيتم طباعة: الحاصل: 50

echo "<br><br>";


// 3. استخدام الخصائص والطرق الثابتة

// سنقوم هنا بإنشاء كلاس مع خصائص وطرق ثابتة (Static) للوصول إليها عبر اسم الكلاس

echo "<h2>3. استخدام الخصائص والطرق الثابتة</h2>";

class Counter {
    // خاصية ثابتة
    private static $count = 0;

    // طريقة ثابتة لزيادة العداد
    public static function increment() {
        self::$count++;  // زيادة القيمة الثابتة
    }

    // طريقة ثابتة لاسترجاع قيمة العداد
    public static function getCount() {
        return self::$count;  // إرجاع القيمة الثابتة
    }
}

// استخدام الطريقة الثابتة
Counter::increment();  // زيادة العداد
Counter::increment();  // زيادة العداد
echo "عدد الزيادات هو: " . Counter::getCount();  // ستُطبع: عدد الزيادات هو: 2

echo "<br><br>";


// 4. كلاس مع عمليات رياضية (جمع و ضرب) على القيم داخل الكائن

// هنا سنقوم بإنشاء كلاس يحتوي على ميثودات لإجراء عمليات جمع وضرب على القيم داخل الكائن

echo "<h2>4. عمليات رياضية داخل الكائن</h2>";

class MathOperations {
    private $value;

    public function __construct($initialValue) {
        $this->value = $initialValue;  // تعيين قيمة أولية عند إنشاء الكائن
    }

    // طريقة لإضافة قيمة إلى القيمة الحالية
    public function add($amount) {
        $this->value += $amount;  // جمع القيمة مع المبلغ المحدد
    }

    // طريقة لضرب القيمة الحالية بمقدار معين
    public function multiply($amount) {
        $this->value *= $amount;  // ضرب القيمة الحالية
    }

    // طريقة لاسترجاع القيمة الحالية
    public function getValue() {
        return $this->value;  // إرجاع القيمة الحالية
    }
}

// استخدام الكلاس
$math = new MathOperations(10);  // إنشاء الكائن مع قيمة أولية 10
$math->add(5);       // إضافة 5 إلى القيمة الحالية
$math->multiply(2);  // ضرب القيمة الحالية بـ 2

echo "القيمة النهائية هي: " . $math->getValue();  // ستُطبع: القيمة النهائية هي: 30

echo "<br><br>";


// 5. كلاس للتعامل مع المصفوفات (قائمة المنتجات) وحساب الإجمالي

// في هذا المثال، سنقوم بإنشاء كلاس يدير قائمة من المنتجات ويحسب إجمالي أسعارها

echo "<h2>5. التعامل مع القيم داخل مصفوفة (قائمة المنتجات)</h2>";

class ShoppingCart {
    private $items = [];  // مصفوفة لتخزين المنتجات

    // طريقة لإضافة منتج إلى السلة
    public function addItem($item) {
        $this->items[] = $item;  // إضافة المنتج إلى المصفوفة
    }

    // طريقة لاسترجاع جميع المنتجات في السلة
    public function getItems() {
        return $this->items;  // إرجاع المصفوفة
    }

    // طريقة لحساب إجمالي الأسعار
    public function getTotal() {
        $total = 0;
        foreach ($this->items as $item) {
            $total += $item['price'];  // جمع أسعار المنتجات
        }
        return $total;  // إرجاع الإجمالي
    }
}

// استخدام الكلاس
$cart = new ShoppingCart();
$cart->addItem(['name' => 'منتج 1', 'price' => 20]);  // إضافة منتج إلى السلة
$cart->addItem(['name' => 'منتج 2', 'price' => 15]);  // إضافة منتج آخر

echo "الإجمالي هو: " . $cart->getTotal();  // ستُطبع: الإجمالي هو: 35

?>
