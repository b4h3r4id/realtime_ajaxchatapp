<?php
session_start();
require_once("sessid.php");
$id = $_GET["id"];
    echo '<link rel="stylesheet" href="style.css">';
$toUser = $_POST["toUser"];
$message = $_POST["message"];
$output="";

$gonder=$conn->prepare("INSERT INTO message (fromUser,message,toUser) VALUES (?,?,?)");
$gonder->execute(array($my_id,$message,$toUser));
if($gonder){
    $output="";
}else{
    $output = "error please try";
}
echo $output;