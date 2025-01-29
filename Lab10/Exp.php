<?php

// تعريف استثناء مخصص للتحقق من المدخلات
class ValidationException extends Exception {
    public function errorMessage() {
        return "Validation Error: " . $this->getMessage();
    }
}

// تعريف استثناء مخصص لقاعدة البيانات
class DatabaseException extends Exception {
    public function errorMessage() {
        return "Database Error: " . $this->getMessage();
    }
}

// تعريف استثناء مخصص للمفاتيح المفقودة
class MissingKeyException extends Exception {
    public function errorMessage() {
        return "Missing Key Error: " . $this->getMessage();
    }
}

// مثال لالتقاط استثناء من النوع PDOException
function simulateDatabaseError() {
    try {
        // محاولة الاتصال بقاعدة البيانات (نفترض أن الإعدادات خاطئة)
        $pdo = new PDO('mysql:host=localhost;dbname=nonexistent_db', 'wrong_user', 'wrong_pass');
    } catch (PDOException $e) {
        throw new DatabaseException("PDO Error: " . $e->getMessage());
    }
}

// دالة للتحقق من الرقم المدخل
function validateNumber($number) {
    if (!is_numeric($number)) {
        throw new ValidationException("The input is not a valid number.");
    }
    if ($number < 0 || $number > 100) {
        throw new ValidationException("The number must be between 0 and 100.");
    }
    return "Valid number: " . $number;
}

// دالة للتعامل مع الأخطاء العامة في PHP باستخدام ErrorException
function handleGeneralErrors() {
    try {
        // محاولة إجراء عملية غير صحيحة (مثل استخدام متغير غير معرف)
        if (!isset($undefinedVar)) {
            throw new ErrorException("The variable is not defined.");
        }
    } catch (ErrorException $e) {
        echo "Caught a general error: " . $e->getMessage() . "<br>";
    }
}

// دالة لمحاكاة إدخال بيانات المستخدم في قاعدة البيانات
function registerUser($username, $password) {
    try {
        if (empty($username) || empty($password)) {
            throw new ValidationException("Username and password are required.");
        }
        // محاكاة عملية الإدخال (سوف تنجح ولكن سنقوم بمعالجة الأخطاء فقط)
        echo "User $username registered successfully.<br>";
    } catch (ValidationException $e) {
        echo $e->errorMessage() . "<br>";
    }
}

// محاكاة معالجة مختلف الأخطاء:

// 1. محاولة التحقق من الرقم المدخل
try {
    echo validateNumber(150) . "<br>"; // سيُسبب استثناء لأن الرقم أكبر من 100
} catch (ValidationException $e) {
    echo $e->errorMessage() . "<br>";
}

// 2. محاكاة خطأ في الاتصال بقاعدة البيانات
try {
    simulateDatabaseError();  // سيُسبب استثناء لأن الاتصال بقاعدة البيانات غير صالح
} catch (DatabaseException $e) {
    echo $e->errorMessage() . "<br>";
}

// 3. محاكاة خطأ عام في PHP
handleGeneralErrors(); // سيُسبب استثناء لأن المتغير غير معرف

// 4. محاولة تسجيل مستخدم مع اسم مستخدم فارغ
try {
    registerUser('', 'password123'); // سيُسبب استثناء لأن اسم المستخدم مفقود
} catch (Exception $e) {
    echo $e->getMessage() . "<br>";
}

// 5. مثال على التعامل مع استثناء من نوع MissingKeyException
try {
    $data = ['username' => 'john']; // بيانات بدون مفتاح 'password'
    if (!isset($data['password'])) {
        throw new MissingKeyException("The 'password' key is missing from the data.");
    }
} catch (MissingKeyException $e) {
    echo $e->errorMessage() . "<br>";
}

?>
