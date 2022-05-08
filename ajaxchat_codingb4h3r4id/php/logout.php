<?php
ob_start();
if(isset($_POST["yes"])){

# Bütün kukiləri təmizlə
function cookie_destroy($dir = null) {
    foreach ($_COOKIE as $key => $value) {
        setcookie($key, null, time() - 3600, $dir);
    }
}
cookie_destroy();
header("location: ../login.php");
}
if(isset($_POST["no"])){
header("location: ../users.php");
}
//include("sessid.php");
//include("../header.php");
?>
<div class="d-flex justify-content-center h-100">
<div class="container">
<div class="card">
<div class="card-header">
<h3>Kayıt Ol</h3>
</div> <!--card header son-->
<div class="alert">Saytdan heqiqeten cıxış etmək istəyirsiniz?<br/></div>
<div class="card-body"><form method="post">

<div class="form-group">
<input type="submit" class="login_btn1" value="Yes"name="yes"> <input type="submit" class="login_btn1" name="no" value="No">
</div> <!--form-group divi son-->
</form>
</div> <!--card body son-->

</div> <!--d filex divi son-->
</div> <!'--container divi son-->