<?php 
    include_once "sever.php";
    $name = $_GET['name'];
    $type = $_POST['gride'];
    $num = $_POST['num'];
    $id = $_GET['id'];
    if($type == "travel-detail"){
        header('location:travel-detail.php'.'?name='.$name.'&num='.$num.'&id='.$id);
    }else{
        header('location:travel-detail2.php'.'?name='.$name.'&num='.$num.'&id='.$id);
    }
?>