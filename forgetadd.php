<?php
include_once ("sever.php");
session_start();
$email = "";
$newpassword = $_POST['password'];
$newpassword2 = $_POST['password2'];
$type = $_GET['type'];
if($newpassword != $newpassword2){
    $_SESSION['warningpass'] = "รหัสไม่ตรงกัน";
    header('location: resetpassword.php?type='.$type);
}else{
    if(isset($_SESSION['seedemail'])){
        if($type == "customer"){
            $email = $_SESSION['seedemail'];
            $setpass = "UPDATE usercumtomers SET password = '$newpassword' WHERE email = '$email'";
            $result = mysqli_query($connect,$setpass);
            if($result){
                header('location: customerlogin.php');
            }else{
                echo "error";
        }
        }else{
            $email = $_SESSION['seedemail'];
            $setpass = "UPDATE user SET password = '$newpassword' WHERE email = '$email'";
            $result = mysqli_query($connect,$setpass);
            if($result){
                header('location: farmerlogin.php');
            }else{
                echo "error";
        }
        }
        unset($_SESSION['seedemail']);
    }else{
        echo "error";
    }// new coomment
}
?>

