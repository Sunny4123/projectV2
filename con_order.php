<?php 
    include_once "sever.php";
    $id = $_GET['id'];
    $sql = "DELETE FROM myorder WHERE id = '$id'";
    $result = mysqli_query($connect,$sql);
    header('location: my_order.php');
?>