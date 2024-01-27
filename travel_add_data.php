<?php 
    include_once "sever.php";
    session_start();
    $shopname = "";
    $fname = "";
    $lname = "";
    $email = "";
    $phone = "";
    $add = "";
    $num = "";
    $img = "";
    $type = $_GET['type'];
    $price = $_POST['price'];
    $proname = "";
    $pay = $_POST['pay'];
    $id = $_GET['id'];
    $imgsql = "SELECT * FROM myshop2 WHERE id = '$id'";
    $resultimg = mysqli_query($connect,$imgsql);
    $rowimg = mysqli_fetch_array($resultimg);
    $img = $rowimg['img'];
    $username = "";
    $proname = $rowimg['productname'];
    if(isset($_SESSION['shopname_d'])){
        $shopname = $_SESSION['shopname_d'];
    }
    if(isset($_SESSION['fname_d'])){
        $fname = $_SESSION['fname_d'];
    }
    if(isset($_SESSION['lname_d'])){
        $lname = $_SESSION['lname_d'];
    }
    if(isset($_SESSION['email_d'])){
        $email = $_SESSION['email_d'];
    }
    if(isset($_SESSION['phone_d'])){
        $phone = $_SESSION['phone_d'];
    }
    if(isset($_SESSION['shopname_d'])){
        $add = $_SESSION['add_d'];
    }
    if(isset($_SESSION['num_d'])){
        $num = $_SESSION['num_d'];
    }
    if(isset($_SESSION['name'])){
        $username = $_SESSION['name'];
    }
    if($pay == "เก็บเงินปลายทาง"){
        $sql = "INSERT INTO myorder (shopid,fname,lname,email,phone,address,price,num,img,proname,type,username,status) VALUES ('$shopname','$fname','$lname','$email','$phone','$add','$price','$num','$img','$proname','$pay','$username','order')";
        $result = mysqli_query($connect,$sql);
        $s_sql = "SELECT * FROM myshop2 WHERE id ='$id'";
        $s_result = mysqli_query($connect,$s_sql);
        $row = mysqli_fetch_array($s_result);
        $newnum = $row['num']-$num;
        $usql = "UPDATE myshop2 SET num = '$newnum' WHERE id = '$id'";
        $u_result = mysqli_query($connect,$usql);
        header('location:buy-alert.html?');
    }else{
        $sql = "INSERT INTO myorder (shopid,fname,lname,email,phone,address,price,num,img,proname,type,username,status) VALUES ('$shopname','$fname','$lname','$email','$phone','$add','$price','$num','$img','$proname','$pay','$username','order')";
        $result = mysqli_query($connect,$sql);
        $s_sql = "SELECT * FROM myshop2 WHERE id ='$id'";
        $s_result = mysqli_query($connect,$s_sql);
        $row = mysqli_fetch_array($s_result);
        $newnum = $row['num']-$num;
        $usql = "UPDATE myshop2 SET num = '$newnum' WHERE id = '$id'";
        $u_result = mysqli_query($connect,$usql);
        header('location:payonline.php?id='.$id);
    }
?>