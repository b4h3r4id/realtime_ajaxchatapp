<?php
if(isset($_COOKIE["email"]) || isset($_COOKIE["password"])){
            require("con.php");
}else{
   header("location:login.php");
}
$fetch = $conn->prepare("select * from users where email=?");
$fetch->execute(array($_COOKIE["email"]));
$buy = $fetch->fetch();

$loginim = $buy["login"];
$my_id = $buy["id"];
//$sess_id = $buy["sess_id"];
$my_fname = $buy["fname"];
$my_lname = $buy["lname"];
$my_password = $buy["password"];
$my_email = $buy["email"];
            //include("../header.php");

?>