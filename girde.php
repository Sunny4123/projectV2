<?php 
    include_once "sever.php";
    session_start();
    $gride = $_POST['gride'];
    $name = "no";
    $check = false;
    if($gride == "customer"){
        header('location: market.php');
    }else{
        if(isset($_SESSION['name'])){
            $name = $_SESSION['name'];
            $sqlcheck = "SELECT * FROM user";
            $result = mysqli_query($connect,$sqlcheck);
            while($row=mysqli_fetch_array($result)){
                if($row['username'] == $name){
                    header('location: myshop.php');
                    $check = true;
                }else if(!$check){
                    header('location: farmerregis.php');
                }
            }
            $rowcount=mysqli_num_rows($result);
            if($rowcount == 0){
                header('location: farmerregis.php');
            }
        }
    }
?>