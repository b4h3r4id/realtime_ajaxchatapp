<?php
try {
$localhost = "localhost";
$mysqlad = "root";
$mysqlparol = "";
$dbname = "chat";
$conn = new PDO("mysql:host=$localhost;dbname=$dbname;charset=utf8",$mysqlad,$mysqlparol);
$conn ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$conn->query("SET CHARACTER SET utf8");
}
catch(PDOException $e) {
echo $e->getMessage();
echo "Mysql error.";
exit();
}


?>