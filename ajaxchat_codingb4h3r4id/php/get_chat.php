<!--Coded b4h3r4id-->
<?php
require_once("sessid.php");
$toUser = $_POST["toUser"];
$output="";

$fetch = $conn->prepare("select * from message LEFT JOIN users ON users.id = message.toUser where toUser=? and fromUser=? OR toUser=? and fromUser=? order by msg_id");
$fetch->execute(array($toUser,$my_id,$my_id,$toUser));
$fetch2 = $fetch->fetchAll(PDO::FETCH_ASSOC);
$fetch3 = $fetch->rowCount();

if($fetch3>0){

foreach ($fetch2 as $fetchmsg){
if($fetchmsg["toUser"] === $toUser){
$output .= '<div class="chat outgoing">
            <div class="details">
        <p>'. $fetchmsg['message'] .'</p>
                        </div>
                        </div>';
    }else{
$output .= '<div class="chat incoming">
<img src="php/images/'.$fetchmsg['img'].'" alt="">
        <div class="details">
        <p>'. $fetchmsg['message'] .'</p>
                </div>
                </div>';
                }
            }
}else{
$output .= '<div class="text">No messages are available. Once you send message they will appear here.</div>';
        }
        echo $output;

?>