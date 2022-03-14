<html>

<!--Coded b4h3r4id-->

<?php include_once("php/sessid.php");

session_start();

?>

<?php include_once("header.php"); ?>

<head>

<script src="javascript/jquery.js"></script>

</head>

<body>

<div class="wrapper"><?php include("php/night-mod.php"); ?>

<section class="chat-area">

<header>

<?php 

$id = $_GET['id'];

$toUser = $_GET["toUser"];

$find = $conn->prepare("select * from users where id =?");

$find->execute(array($id));

$finduser = $find->fetch(PDO::FETCH_ASSOC);

$youid = $finduser["id"];

$fname = $finduser["fname"];

$lname = $finduser["lname"];

//echo $youid;

?>

<a href="users.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>

    <img src="php/images/<?php echo $finduser['img']; ?>" alt="">

<div class="details">

<span><?php echo $fname. " " .$lname;?></span>

<p><?php echo $finduser['status']; ?></p>

</header>

<div class="chat-box">

</div>

<?php 

if($youid){

$userName = $conn->prepare("select * from users where id =?");

$uName = $userName->execute(array($toUser));

echo '<input type="text" value='.$_GET["toUser"].' id="toUser" hidden/>';

//echo $uName["fname"];

}

?>

<div class="typing-area">

<input type="text" name="msg" class="input-field" placeholder="Type e message here..." id="message">

<?php echo '<input type="text" id="toUser" value='.$id.' hidden>'; ?>

<button name="ok"><i class="fab fa-telegram-plane"></i></button></i></div>

</form>

</section>

</div>

<script>

$(document).ready(function(){

$('button').click(function(){

  var toUser = $('#toUser').val();

  var mesaj_text = $('#message').val();

  if($.trim(mesaj_text)==''){

      alert('Please fill in the blanks.');

  }

  else{

      $.ajax({

          url: 'php/insert_chat.php',

          method: 'POST',

          data: {message:mesaj_text,toUser},

          dataType: 'text',

          success: function (data){

//alert("success");

            $('#message').val("");

            

          }

      });

  }

});

    function fetch(){

  var toUser = $('#toUser').val();

      $.ajax({

          url: 'php/get_chat.php',

          method: 'POST',

          data: {toUser},

          dataType: 'text',

          success: function (result){

        //$('.chat-box').show();

        $('.chat-box').html(result);

          }

      //});

      });

}

setInterval(fetch,50);

    

});

</script>

</body>

</html>
