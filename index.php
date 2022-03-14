<?php

include("php/con.php");

session_start();

/*if(!$_SESSION["language"]){

    require("language/tr.php");

}else{

require("language/".$_SESSION["language"].".php");

}*/

if(isset($_COOKIE["email"]) || isset( $_COOKIE["password"])){

header("location: users.php");

}

/*if(isset($_SESSION["email"]) || isset( $_SESSION["password"])){

header("location: users.php");

}*/

?>

<html>

<?php include_once "header.php"; ?>

<body>

 <title>Chat App B4H3R4ID</title>

     <div class="wrapper">

    <?php include("php/night-mod.php"); ?>

     <section class="form signup">

      <header>Realtime Chat App</header>

      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">

        <div class="error-text"></div>

            <p id="result"></p>

        <div class="name-details">

          <div class="field input">

            <label>First Name</label>

            <input type="text" name="fname" placeholder="First name" required>

          </div>

          <div class="field input">

            <label>Last Name</label>

            <input type="text" name="lname" placeholder="Last name" required>

          </div>

        </div>

        <div class="field input">

          <label>Email Address</label>

          <input type="text" name="email" placeholder="Enter your email" required>

        </div>

        <div class="field input">

          <label>Password</label>

          <input type="password" name="password" placeholder="Enter new password" required>

          <i class="fas fa-eye"></i>

        </div>

        <div class="field image">

          <label>Select Image</label>

          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>

        </div>

        <div class="field button">

          <input type="submit" name="submit" value="Continue to Chat">

        </div>

      </form>

      <div class="link">Already signed up? <a href="login.php">Login now</a></div>

    </section>

  </div>

<script src="javascript/reg.js"></script>

  <script src="javascript/pass-show-hide.js"></script>

</body>

</html>

