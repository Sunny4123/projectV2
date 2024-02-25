<?php 
include_once "sever.php";
session_start();
$name = $_POST['name'];
$price = $_POST['price'];
$number = $_POST['num'];
$username = "";
$id = $_GET['id'];
$tar = '.uploads/';
if(isset($_SESSION['name'])){
    echo $_SESSION['name'];
    $username = $_SESSION['name'];
}
if(!empty($_FILES["file"]["name"])){
    $filename = basename($_FILES["file"]["name"]);
    $target = $tar . $filename;
    $filetype = pathinfo($target, PATHINFO_EXTENSION);
    $allow = array('jpg', 'png', 'jpeg', 'gif', 'pdf');
    $moveto = './uploads/'."$filename";
    $tmpmove = $_FILES["file"]["tmp_name"];
    if(in_array($filetype,$allow)){
        if(move_uploaded_file($tmpmove,$moveto)){
            $sql = "UPDATE myshop2 SET productname = '$name',price = '$price',num = '$number',img = '$filename' WHERE id = '$id'";
            $result = mysqli_query($connect,$sql);
            if($result){
                header("location: myshop.php");
                $_SESSION['s_edit'] = "true";
            }else{
                echo "error upload";
            }
        }else{
            echo "error move";
        }
    }else{
        echo "error file type"; 
    }
}else{
    $sql = "UPDATE myshop2 SET productname = '$name',price = '$price',num = '$number' WHERE id = '$id'";
    $result = mysqli_query($connect,$sql);
    if($result){
        header("location: myshop.php");
        $_SESSION['s_edit'] = "true";
    }else{
        echo "error";
    }
}


?>