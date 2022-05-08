<!--Coded b4h3r4id-->
<?php
    session_start();
    ob_start();
    include_once "con.php";
    $fname= $_POST["fname"];
    $lname= $_POST["lname"];
    $email= $_POST["email"];
    $password= $_POST["password"];
if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password)){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
$bd = $conn->prepare("SELECT * FROM  users WHERE email=?");
$bd->execute(array($email));
$bdvar = $bd->rowCount();
if ($bdvar>0) {
    echo "$email - Bu email artiq var";
            }else{
if(isset($_FILES['image'])){
$img_name = $_FILES['image']['name'];
$img_type = $_FILES['image']['type'];
$tmp_name = $_FILES['image']['tmp_name'];
                    
$img_explode = explode('.',$img_name);
$img_ext = end($img_explode);
    
$extensions = ["jpeg", "png", "jpg"];
if(in_array($img_ext, $extensions) === true){
$types = ["image/jpeg", "image/jpg", "image/png"];
if(in_array($img_type, $types) === true){
        $time = time();
$new_img_name = $time.$img_name;
if(move_uploaded_file($tmp_name,"images/".$new_img_name)){
$ran_id = rand(time(), 100000000);
$status = "Active now";
$encrypt_pass = md5($password);
$add = $conn->prepare("insert into `users` (sess_id,fname,lname,email,password,img,status) values(:sess_id,:fname,:lname,:email,:password,:img, :status)");
$add->execute(array(":sess_id" => $ran_id,":fname" => $fname,":lname" => $lname,":email" => $email,":password" => $encrypt_pass,":img" => $new_img_name,":status" => $status));

if($add){
//echo "ugurlu";


    echo "success";
    //echo '<meta http-equiv=Refresh content="0; url=davamet.php?succes=1">';
//}else{
//echo '<meta http-equiv=Refresh content="0; url=davamet.php?error=1">';
    }else{
    echo "This email address not Exist!";
    }
}else{
echo "Something went wrong. Please try again!";
}
}
}else{
echo "Please upload an image file - jpeg, png, jpg";
}
}else{
echo "Please upload an image file - jpeg, png, jpg";
}
}
}else{
echo "$email is not a valid email!";
}
}else{
echo "All input fields are required!";
}
?>