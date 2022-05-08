<?php
/*session_start();
ob_start();
include_once("con6.php");

if(isset($_COOKIE["email"]) || isset( $_COOKIE["password"])){
header("location: users.php");
}

if(isset($_POST["button"])){
$email = $_POST["email"];
$password = $_POST["password"];


/*if(!empty($email) || !empty($password)){
    echo "<div class='error-text'>Invaild email or password</div>";
}*/
    
/*if(!empty($email) && !empty($password)){
        //$user_pass = md5($password);
$user_access=$conn->query("select count(*) from `users` where `email`='".$email."' and `password`='".$password."'")->fetchColumn();
	if($user_access==0){
echo 'Invaild login or password!';
}elseif($user_access==1){
	setcookie('email',$email,time()+15);
	setcookie('password',$password,time()+15);
//echo '<meta http-equiv=Refresh content="2; url=users.php"><div class="alert">Daxil olunur...</div>';

}
}
}
?>