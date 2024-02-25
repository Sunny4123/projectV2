<?php 
    include_once "sever.php";
    session_start();
    $id = $_GET['id'];
    $sql = "DELETE FROM  myshop2 WHERE id = $id";
    $result = mysqli_query($connect,$sql);
    if($result){
        header("location: myshop.php");
        $_SESSION['s_edit'] = "true";
    }
?>