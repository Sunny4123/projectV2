<?php
    include_once "sever.php";
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $sql = "SELECT * FROM usercumtomers WHERE email = '$email' or username = '$username'";
    $sql2 = "SELECT * FROM user WHERE email = '$email' or username = '$username'";
    $result = mysqli_query($connect,$sql);
    $result2 = mysqli_query($connect,$sql2);
    $row =mysqli_fetch_array($result);
    $row2 =mysqli_fetch_array($result2);
    $tar = '.uploads/';
    if($row || ($password != $confirm || $row2)){
        $_SESSION['error']="username email ถูกใช้งานไปแล้ว หรือ รหัสผ่านไม่ตรงกัน";
        header('location: customerregis.php');
    }else{
        $sql = "INSERT INTO usercumtomers (username,password,fname,lname,email,phone,type,img) value ('$username','$password','$firstname','$lastname','$email','$phone','customer','-')";
        $result2 = mysqli_query($connect,$sql);
        if(isset($_POST['submit'])){
            if(!empty($_FILES["file"]["name"])){
                $filename = basename($_FILES["file"]["name"]);
                $target = $tar . $filename;
                $filetype = pathinfo($target, PATHINFO_EXTENSION);
                $allow = array('jpg', 'png', 'jpeg', 'gif', 'pdf');
                $moveto = './uploads/'."$filename";
                $tmpmove = $_FILES["file"]["tmp_name"];
                if(in_array($filetype, $allow)){
                    if(move_uploaded_file($tmpmove,$moveto)){
                        $sql = "SELECT * FROM usercumtomers WHERE username = '$username'";
                        $sqlup = "UPDATE usercumtomers SET img = '$filename' WHERE username = '$username'";
                        $resultup = mysqli_query($connect,$sqlup);
                        if($resultup){
                            header("location: customerlogin.php");
                        }
                    }else{
                        echo "error";
                    }
                }else{
                    echo $_FILES["file"]["tmp_name"];
                }   
            }else{
                echo "error type"; 
            }
        }else{
            echo "error file";
        }
        //header('location: customerlogin.php');
    }
    
?>