  <?php
  require_once("sessid.php");
$id = $_GET["id"];
$mess = $conn->prepare("select * from message where msg_id=?");
$mess->execute(array($id));
$mess2 = $mess->fetchAll(PDO::FETCH_ASSOC);
 $sql = $conn->prepare("select * from users where not id =?");
$sql->execute(array($my_id));
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
}
if($sql2 == 0){
    echo " no user chat available";
}
//echo $my_id; echo $my_fname;

?>