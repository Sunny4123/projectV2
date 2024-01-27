<?php 
    session_start();
    include_once "sever.php";
    $username = $_POST['username'];
    $password = $_POST['password'];
    $spl = "SELECT * FROM user WHERE username = '$username'";
    $sqlquery = mysqli_query($connect,$spl);
    $row=mysqli_fetch_array($sqlquery);
    $name = $row['username'];
    $passwordb = $row['password'];
    $check = $_POST['customer'];
    $cookuser = "";
    $cookpass = "";
    $_SESSION['name'] = "everone";
    $_SESSION['checkv1']="true";
    mysqli_close($connect);
    if(isset($_COOKIE['username'])){
        $cookuser = $_COOKIE['username'];
    }
    if(isset($_COOKIE['pass'])){
        $cookpass = $_COOKIE['pass'];
    }
    if(($username == $name)&&($password == $passwordb)){
        $_SESSION['name']=$row['username'];
        header("Location: homepage_1.php");
    }elseif(($cookuser == $name)&&($cookpass == $password)){
        $_SESSION['name']=$row['username'];
            header("Location: homepage_1.php");
    }else{
        $_SESSION['warning']="User name หรือ Password ไม่ถูกต้อง"; 
        if($check == "customer"){
            header("Location: customerlogin.php");
        }else{
            header("Location: farmerlogin.php");
        }
    } 
    if(isset($_POST['remeber'])){
        setcookie('username',$username,time()+(86400 * 30));
        setcookie('pass',$password,time()+(86400 * 30));
    }
?>