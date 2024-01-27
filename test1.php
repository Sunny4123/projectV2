<?php 
    session_start();
    include_once "sever.php";
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
                    $sqlin = "UPDATE user SET img = '$tmpmove' WHERE username = '$username'";
                    $result = mysqli_query($connect,$sqlin);
                    if($result){
                        header("location: up.php");
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
?>