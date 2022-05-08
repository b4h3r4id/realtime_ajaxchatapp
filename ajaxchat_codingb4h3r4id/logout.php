<?php
ob_start();
require_once("php/sessid.php");
if(isset($_POST["yes"])){
    
    $status = "Oflline now";
$update = $conn->prepare("UPDATE users SET status=? where id=?");
$update->execute(array($status,$my_id));
if(isset($update)){

# Bütün kukiləri təmizlə
function cookie_destroy($dir = null) {
    foreach ($_COOKIE as $key => $value) {
        setcookie($key, null, time() - 3600, $dir);
    }
}
cookie_destroy();
header("location: login.php");
}
}
if(isset($_POST["no"])){
header("location: users.php");
}

?>
<?php include("header.php"); ?>
<style>

.logout {
    padding: 10px 10px;
    margin: 20px 0;
}
.logout .button{
    margin: 10px ;
    background-color: #1e90ff;
    border: 1px #00ffff solid;
    
}
</style>
<div class="wrapper">
    <section class="form login">
     <header>Realtime Chat App</header>
  <form action="" method="POST">
    <div class="error-text"></div>
    <p id="result"></p>

       <div class="logout">
           <label>Are You website Exit?</label>
        <input type="submit" value="Yes" name="yes" class="logout button">

        <input type="submit" value="No" name="no" class="logout button">
       </div>
    </form>
    </section>
</div>