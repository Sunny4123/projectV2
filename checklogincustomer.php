<?php 
    session_start();
    include_once "sever.php";
    $username = $_POST['username'];
    $password = $_POST['password'];
    $spl = "SELECT * FROM usercumtomers WHERE username = '$username'";
    $sql2 = "SELECT * FROM user WHERE username = '$username'";
    $sqlquery = mysqli_query($connect,$spl);
    $sqlquery2 = mysqli_query($connect,$sql2);
    $name2="";
    $pass2="";
    $namecook="no";
    $passcook = "no";
    if(isset($_COOKIE['username'])){
        $namecook = $_COOKIE['username'];
    }
    if(isset($_COOKIE['pass'])){
        $passcook = $_COOKIE['pass'];
    }
    $_SESSION['checkv1']="true";
    if($sqlquery2){
        $row2=mysqli_fetch_array($sqlquery2);
        $name2 = $row2['username'];
        $pass2 = $row2['password'];
    }
    $row=mysqli_fetch_array($sqlquery);
    $name1 = $row['username'];
    $pass1 = $row['password'];
    //remeber
    mysqli_close($connect);
    if(($username == $name1) && ($password == $pass1) || (($username == $name2)&&($password == $pass2))){
        $_SESSION['name']= $username;
        echo "pass no c";
        
        header('location: homepage_1.php');
    }elseif(($namecook == $name2) && ($passcook == $pass2) || (($namecook == $name2)&&($passcook == $pass2))){
        $_SESSION['name']= $username;
        echo "pass with c";
        echo $namecook;
        echo $passcook;
        header('location: homepage_1.php');
    }else{
        $_SESSION['warning']="User name หรือ Password ไม่ถูกต้อง";
        header('location: customerlogin.php');
        echo "no pass";
        echo  $username;
        echo $password;
    }
    if(isset($_POST['remeber'])){
        setcookie('username',$username,time()+(86400 * 30));
        setcookie('pass',$password,time()+(86400 * 30));
    }
?>