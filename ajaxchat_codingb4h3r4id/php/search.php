<!--Coded b4h3r4id-->
<?php 
require_once("sessid.php");

$search = $_POST["value"];
if($search==""){
    echo "Search in chat";
include("users.php");
die();
}
$sql = $conn->query("select * from users where not id='$my_id' and (fname LIKE '%$search%' OR lname LIKE '%$search%') ");
$sql2 = $sql->rowCount();
if($sql2 > 0){
foreach($sql as $read){
$output = '<a href="chat.php?id='. $read['id'] .'">
<div class="content">
<img src="php/images/'. $read['img'] .'" alt="">
<div class="details">
<span>'. $read['fname']. " " . $read['lname'] .'</span></div><div class="status-dot"><small>'. $read['status'] .'</small></div></div>';
echo $output;
//echo $mess3["message"];
}
}else{
    echo "none user available to chat";
}
?>