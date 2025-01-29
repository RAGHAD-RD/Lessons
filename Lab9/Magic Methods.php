<?php

// 1. __construct() - الطريقة السحرية لإنشاء الكائن
echo "<h2>1. __construct() - إنشاء الكائن</h2>";

class MyClass {
    public $name;

    // الطريقة السحرية __construct
    public function __construct($name) {
        $this->name = $name;
        echo "تم إنشاء الكائن مع الاسم: " . $this->name . "<br>";
    }
}

// إنشاء كائن جديد من MyClass
$obj1 = new MyClass("محمود");  // سيتم طباعة: تم إنشاء الكائن مع الاسم: محمود

// 2. __destruct() - الطريقة السحرية لتدمير الكائن
echo "<h2>2. __destruct() - تدمير الكائن</h2>";

class MyClassWithDestructor {
    public function __construct() {
        echo "تم إنشاء الكائن.<br>";
    }

    // الطريقة السحرية __destruct
    public function __destruct() {
        echo "تم تدمير الكائن.<br>";
    }
}

// إنشاء كائن سيتم تدميره لاحقًا
$obj2 = new MyClassWithDestructor();
unset($obj2);  // سيتم طباعة: تم تدمير الكائن.


// 3. __get() - الطريقة السحرية للوصول إلى خاصية غير موجودة أو غير مرئية
echo "<h2>3. __get() - الوصول إلى خاصية غير موجودة</h2>";

class MyClassWithGet {
    private $data = "هذه قيمة خاصة";

    // الطريقة السحرية __get
    public function __get($name) {
        if ($name == 'data') {
            return $this->data;
        }
        return "الخاصية غير موجودة!";
    }
}

// الوصول إلى خاصية غير موجودة
$obj3 = new MyClassWithGet();
echo $obj3->data;  // سيتم طباعة: هذه قيمة خاصة


// 4. __set() - الطريقة السحرية لتعيين قيمة إلى خاصية غير موجودة أو غير مرئية
echo "<h2>4. __set() - تعيين قيمة إلى خاصية غير موجودة</h2>";

class MyClassWithSet {
    private $data;

    // الطريقة السحرية __set
    public function __set($name, $value) {
        if ($name == 'data') {
            $this->data = $value;
        }
    }
}

// تعيين قيمة إلى خاصية غير موجودة
$obj4 = new MyClassWithSet();
$obj4->data = "قيمة جديدة";
echo $obj4->data;  // سيتم طباعة: قيمة جديدة


// 5. __isset() - الطريقة السحرية للتحقق من وجود خاصية
echo "<h2>5. __isset() - التحقق من وجود خاصية</h2>";

class MyClassWithIsset {
    private $data = "هذه قيمة خاصة";

    // الطريقة السحرية __isset
    public function __isset($name) {
        if ($name == 'data') {
            return true;
        }
        return false;
    }
}

// التحقق من وجود خاصية
$obj5 = new MyClassWithIsset();
var_dump(isset($obj5->data));  // سيتم طباعة: bool(true)
var_dump(isset($obj5->other));  // سيتم طباعة: bool(false)


// 6. __unset() - الطريقة السحرية لحذف خاصية
echo "<h2>6. __unset() - حذف خاصية</h2>";

class MyClassWithUnset {
    private $data = "هذه قيمة خاصة";

    // الطريقة السحرية __unset
    public function __unset($name) {
        if ($name == 'data') {
            echo "لا يمكن حذف الخاصية 'data'!<br>";
        }
    }
}

// محاولة حذف خاصية
$obj6 = new MyClassWithUnset();
unset($obj6->data);  // سيتم طباعة: لا يمكن حذف الخاصية 'data'!


// 7. __call() - الطريقة السحرية لاستدعاء ميثود غير موجودة
echo "<h2>7. __call() - استدعاء ميثود غير موجود</h2>";

class MyClassWithCall {
    // الطريقة السحرية __call
    public function __call($name, $arguments) {
        echo "تم استدعاء الميثود: $name مع الوسائط: " . implode(", ", $arguments) . "<br>";
    }
}

// استدعاء ميثود غير موجودة
$obj7 = new MyClassWithCall();
$obj7->nonExistentMethod("arg1", "arg2");  // سيتم طباعة: تم استدعاء الميثود: nonExistentMethod مع الوسائط: arg1, arg2


// 8. __callStatic() - الطريقة السحرية لاستدعاء ميثود ثابتة غير موجودة
echo "<h2>8. __callStatic() - استدعاء ميثود ثابتة غير موجودة</h2>";

class MyClassWithStaticCall {
    // الطريقة السحرية __callStatic
    public static function __callStatic($name, $arguments) {
        echo "تم استدعاء الميثود الثابتة: $name مع الوسائط: " . implode(", ", $arguments) . "<br>";
    }
}

// استدعاء ميثود ثابتة غير موجودة
MyClassWithStaticCall::nonExistentStaticMethod("arg1", "arg2");  // سيتم طباعة: تم استدعاء الميثود الثابتة: nonExistentStaticMethod مع الوسائط: arg1, arg2


// 9. __toString() - الطريقة السحرية لتحويل الكائن إلى سلسلة نصية
echo "<h2>9. __toString() - تحويل الكائن إلى سلسلة نصية</h2>";

class MyClassWithToString {
    private $data = "تمثيل الكائن كسلسلة نصية";

    // الطريقة السحرية __toString
    public function __toString() {
        return $this->data;
    }
}

// تحويل الكائن إلى سلسلة نصية
$obj9 = new MyClassWithToString();
echo $obj9;  // سيتم طباعة: تمثيل الكائن كسلسلة نصية


// 10. __clone() - الطريقة السحرية لاستنساخ الكائن
echo "<h2>10. __clone() - استنساخ الكائن</h2>";

class MyClassWithClone {
    public $name;

    // الطريقة السحرية __clone
    public function __clone() {
        $this->name = "استنساخ: " . $this->name;
    }
}

// إنشاء كائن ثم استنساخه
$obj10 = new MyClassWithClone();
$obj10->name = "أصلي";
$obj11 = clone $obj10;

echo $obj10->name . "<br>";  // سيتم طباعة: أصلي
echo $obj11->name . "<br>";  // سيتم طباعة: استنساخ: أصلي


// 11. __sleep() - الطريقة السحرية لتحديد الخصائص التي سيتم تسلسلها
echo "<h2>11. __sleep() - تسلسل الكائن</h2>";

class MyClassWithSleep {
    public $name;
    public $age;

    public function __sleep() {
        return ['name'];  // فقط الخاصية "name" ستُسلسل
    }
}

// تسلسل الكائن
$obj12 = new MyClassWithSleep();
$obj12->name = "محمود";
$obj12->age = 30;
$serialized = serialize($obj12);
echo $serialized;  // سيتم طباعة: O:16:"MyClassWithSleep":1:{s:4:"name";s:7:"محمود";}


// 12. __wakeup() - الطريقة السحرية لإعادة تهيئة الكائن بعد إلغاء التسلسل
echo "<h2>12. __wakeup() - إلغاء تسلسل الكائن</h2>";

class MyClassWithWakeup {
    public $name;

    public function __wakeup() {
        $this->name = "استعدت الكائن بعد التسلسل";
    }
}

// إلغاء تسلسل الكائن
$serializedObj = serialize(new MyClassWithWakeup());
$obj13 = unserialize($serializedObj);
echo $obj13->name;  // سيتم طباعة: استعدت الكائن بعد التسلسل

?>
