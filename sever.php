<?php 
    $server = "localhost"; 
    $user = "root"; 
    $password = ""; 
    $dbname= "projectdb";
    $connect = mysqli_connect($server, $user, $password, $dbname);
    $userQuery = "SELECT = from product";
    if (!$connect)
    {
        die ("ERROR: Cannot connect to the database $dbname on server $server 
        using username $user (" .mysqli_connect_errno(). ", ".mysqli_connect_error(). ")");
    }
    mysqli_query($connect,"SET NAMES utf8");
?>