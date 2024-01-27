<?php 
    session_start();
    include_once "sever.php";
    $username = $_POST['username'];
    $password = $_POST['password'];
    $checkpassword = $_POST['checkpassword'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $gender = $_POST['gender'];
    $religion = $_POST['religion'];
    $ethnicity = $_POST['ethnicity'];
    $nationality = $_POST['nationality'];
    $house_number = $_POST['house_number'];
    $group_ = $_POST['group_'];
    $subdistrict = $_POST['subdistrict'];
    $district = $_POST['district'];
    $province = $_POST['province'];
    $check=$_POST['submit'];
    $sql2 = "SELECT * FROM user WHERE email = '$email' or username = '$username'";
    $result2 = mysqli_query($connect,$sql2);
    $row =mysqli_fetch_array($result2);
    if($row || ($password != $checkpassword)){
        $_SESSION['error']="username email ถูกใช้งานไปแล้ว หรือ รหัสผ่านไม่ตรงกัน";
        header('location: farmerregis.php');
    }
    else{
        if($check == "farmer"){
            $sql = "INSERT INTO user (username,password,phone,firstname,lastname,email,date,sex,religion,ethnicity,nationality,house_number,group_,Subdistrict,District,province,type,img) VALUE ('$username','$password','$phone','$firstName','$lastName','$email','$date','$gender','$religion','$ethnicity','$nationality','$house_number','$group_','$subdistrict','$district','$province','farmer','noimg')";
            $result=mysqli_query($connect,$sql);
            //header('location: homepage_1.php');
            $sqlde = "DELETE FROM usercumtomers WHERE username = '$username'";
            $resultde =mysqli_query($connect,$sqlde);
            $tar = '.uploads/';
            if(isset($_POST['submit'])){
                if(!empty($_FILES["file"]["name"]) ){
                    $filename = basename($_FILES["file"]["name"]);
                    $target = $tar . $filename;
                    $filetype = pathinfo($target, PATHINFO_EXTENSION);
                    $allow = array('jpg', 'png', 'jpeg', 'gif', 'pdf');
                    $moveto = './uploads/'."$filename";
                    $tmpmove = $_FILES["file"]["tmp_name"];
                    $username = $_POST['username'];
                    if(in_array($filetype, $allow)){
                        if(move_uploaded_file($tmpmove,$moveto)){
                            $sql = "SELECT * FROM user WHERE username = $username";
                            $sqlin = "UPDATE user SET img = '$filename' WHERE username = '$username'";
                            $result = mysqli_query($connect,$sqlin);
                            if($result){
                                header("location: homepage_1.php");
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
            }else{
                echo "error check";
            }
        }else{
            $sql = "INSERT INTO user (username,password,phone,firstname,lastname,email,date,sex,religion,ethnicity,nationality,house_number,group_,Subdistrict,District,province,type) VALUE ('$username','$password','$phone','$firstName','$lastName','$email','$date','$gender','$religion','$ethnicity','$nationality','$house_number','$group_','$subdistrict','$district','$province','customer')";
            $result=mysqli_query($connect,$sql);
            header('location: homepage_1.php');
        }
        //com

    }
?>