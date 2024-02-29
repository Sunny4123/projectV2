<?php
    include_once "sever.php";
    $order = $_GET['typeorder'];
    $id = $_GET['id'];
    session_start();
    if($order == "can"){
        $can = "DELETE FROM myorder WHERE id = $id";
        $canre = mysqli_query($connect,$can);
        header('location:newmyorder.php?st=1');
        $_SESSION['stc'] = "true";
    }else{
        $sql = "UPDATE myorder SET status = 'con' WHERE id = $id ";
        $result = mysqli_query($connect,$sql);
        header('location:product_alert.php');
        
    }
    
?>