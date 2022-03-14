<html>

<head>

<!--Coded b4h3r4id-->

<?php include("php/sessid.php"); ?>

</head>

<?php include("header.php"); ?>

<body>

  <script src="javascript/jquery.js"></script>

 <title>Chat App B4H3R4ID</title>

<div class="wrapper">

<?php include("php/night-mod.php"); ?>

    <section class="users">

    <header>

    <div class="content">

    <?php

    $sql = $conn->prepare("select * from users where email =?");

    $sql->execute(array($_COOKIE["email"]));

    $sql2 =$sql->fetch();

    ?>

    <img src="php/images/<?php echo $sql2['img']; ?>" alt="">

    <div class="details">

<span><?php echo $sql2['fname']. " " . $sql2['lname'] ?></span>

    <p><?php echo $sql2['status']; ?></p>

        </div>

    </div>

    <a href="logout.php" class="logout">Logout</a>

    </header>

<script>

$(function(){

    $("#result").hide();

    $("input[name=search]").keyup(function(){

    var value = $(this).val();

    var search = "value=" + value;

    $.ajax({

    type: "POST",

    url: "php/search.php",

    data: search,

    success: function(result){

        $(".users-list").html(result);

    }

    });

    });

});

</script>

    <div class="search">

    <input type="text" placeholder="Enter name to search" name="search">

    <button><i class="fas fa-search"></i></button>

    </div>

    <div id="result" class="result"></div>

      <div class="users-list">

<?php 

$id = $_GET["id"];

$toUser = $_GET["toUser"];

$fromUser = $_GET["fromUser"];

$find = $conn->prepare("select * from users where id =?");

$find->execute(array($id));

$finduser = $find->fetch(PDO::FETCH_ASSOC);

$youid = $finduser["id"];

$fname = $finduser["fname"];

$lname = $finduser["lname"];

echo $youid;

if($youid){

$userName = $conn->prepare("select * from users where id =?");

$uName = $userName->execute(array($toUser));

echo $uName["fname"];

}

?>

<?php 

$toUser = $_GET["toUser"];

$mess = $conn->prepare("select * from message where toUser=?");

$mess->execute(array($my_id));

if($mess2 > 0){

foreach($mess2 as $fetch){

echo ''.$fetch["message"].'<br>'; //idme uygun gelib gelmemesini test ucun

}

}

//$mess3 = $mess->rowCount();

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

    echo " no user available to chat";

    die();

//echo $my_id; echo $my_fname;

}

?>

      </div>

    </section>

  </div>

  <script src="javascript/usersb.js"></script>

</body>

</html>
