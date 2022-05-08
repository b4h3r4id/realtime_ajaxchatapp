<?php
//session_start();
include("php/con.php");
if(isset($_COOKIE["email"]) || isset( $_COOKIE["password"])){
header("location: users.php");
}
?>

<html>
<?php include("header.php"); ?>
<body>
<div class="wrapper">
<?php include("php/night-mod.php"); ?>
 <title>Chat App B4H3R4ID</title>   
    <section class="form login">
     <header>Realtime Chat App</header>
  <form action="login.php" method="POST">
    <div class="error-text"></div>

    <p id="result"></p>
       <div class="field input">
        <label>Email</label>
        <input type="email" placeholder="Email" name="email" minlength="3" required><span></span>
       </div>
       <div class="field input">
        <label>Password</label>
        <input type="password" placeholder="Enter you password" name="password" required>
        <span></span>
        <i class="fas fa-eye"></i>
       </div>
       <div class="field button">
        <input type="submit" value="Continued chat" name="submit">
       </div>
    </form>

  <div class="link">Not yet signup? <a href="index.php">Signup now</a></div>
  
    </section>
</div>
  <script src="javascript/pass-show-hide.js"></script>
    <?php
if(isset($_POST["submit"])){
$email = $_POST["email"];
$password = $_POST["password"];

if(!empty($email) && !empty($password)){
        $user_pass = md5($password);
$user_access=$conn->query("select count(*) from `users` where `email`='".$email."' and `password`='".$user_pass."'")->fetchColumn();
	if($user_access==0){
echo '<script>alert("Invaild login or password!");</script>';
}elseif($user_access==1){
	setcookie('email',$email,time()+84600*365);
	setcookie('password',$user_pass,time()+84600*365);
	$status = "Active now";

$update = $conn->prepare("UPDATE users SET status=? where email=?");
$update->execute(array($status,$email));

?>
<script>
            go("#result","users.php",3);
function go(ID,Address, second){
if(second===0){
window.location.href=Address;
}
document.querySelector(ID).textContent= second+"  Seconds later you are redirected to the page";
second--;
setTimeout(function(){
go(ID,Address,second);
},1000);
}</script>
<?php
}
}


}// post input
?>

</body>
</html>
