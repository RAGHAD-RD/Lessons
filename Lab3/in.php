<?php

// قيمة statusCode التي سيتم التحقق منها
$statusCode = 404;

// استخدام match للتحقق من قيمة statusCode
$result = match ($statusCode) {
    200 => 'OK',              // إذا كانت القيمة 200
    404 => 'Not Found',       // إذا كانت القيمة 404
    500 => 'Server Error',    // إذا كانت القيمة 500
    default => 'Unknown',     // إذا كانت القيمة غير أي من القيم المحددة
};

// طباعة النتيجة
echo "Status: $result";

?>
