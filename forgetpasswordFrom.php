<?php
    session_start();
    include_once ("sever.php");
    $_SESSION['seedmail']="no";
    $email = $_POST['forget'];
    $emailseed = $_POST['forget'];
    $_SESSION['seedemail']= $email;
    $type = $_GET['type'];  
    if($type == "farmer"){
        $sql2 = "SELECT * FROM user WHERE email = '$email'";
        $result2 = mysqli_query($connect,$sql2);
        $f2 = mysqli_fetch_assoc($result2);
        if(empty($f2['email'])){
            $_SESSION['noemail'] = "ไม่พบที่อยู่อีเมล";
            header('location: forgetpassword.php?type=farmer');
        }
    }else{
        $sql = "SELECT * FROM usercumtomers WHERE email = '$email'";
        $result = mysqli_query($connect,$sql);
        $f = mysqli_fetch_assoc($result);
        if(empty($f['email'])){
            $_SESSION['noemail'] = "ไม่พบที่อยู่อีเมล";
            header('location: forgetpassword.php?type=customer');
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>projextX</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="farmerlogin.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <header class="header">
        <a href="homepage.html" class="logo">logo</a>
        <nav class="navbar">
            <a href="homepage_1.php">Home</a>
            <a href="#">About Us</a>
            <a href="#">Services</a>
            <a href="#">Contact</a>
        </nav>
    </header>
    <div class="wrapper">
        <form action="forgetadd.php?type=<?php echo $type ?>" method="post">
            <h1>New password</h1>
            <div class="input-box">
                <input type="password" name="password" placeholder="NEW PASSWORD" required > <i class='bx bx-lock-alt'  ></i> 
            </div>
            <button type="submit" class="btn" value="farmer" name="check">LOGIN</button>

            <div class="register-link">
                <p>Don't have an account? <a href="farmerregis.php">Register</a></p>
            </div>
        </form>
    </div>
</body>

</html>