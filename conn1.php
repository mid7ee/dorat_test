<?php
$hostname = "localhost"; // اسم الخادم، غالباً يكون localhost
$username = "root"; // اسم مستخدم قاعدة البيانات
$password = "1aa2hh3mm@1aa!1aa_1mm"; // كلمة مرور المستخدم (اتركها فارغة إذا لم تكن قد حددت كلمة مرور)
$dbname = "ahmed_dorat1"; // اسم قاعدة البيانات

// إنشاء الاتصال
$conn = mymysqli_connect($hostname, $username, $password, $dbname);

// التحقق من الاتصال
if ($conn->connect_error) {
    die("فشل الاتصال بقاعدة البيانات: " . $conn->connect_error);
} 
echo "تم الاتصال بنجاح بقاعدة البيانات";
?>
