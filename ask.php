<?php 
    session_start();
    if(isset($_SESSION['name'])){
        if($_SESSION['name'] != "everone" ){
            header('location: homepage_1.php');
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ask</title>
    <link rel="icon" href="logoic.jpg">
    <link rel="stylesheet" href="homepage_8v.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <section class="containert">
        <div class="headerask" style="text-align: center; padding-top: 30vh;" ><h1 id="link">Are you Farmers or Customer?</h1></div>
        <div class="btn-box" style="text-align: center; padding-top: 4vh;">
            <a href="farmerlogin.php" style="margin-right: 10px;"><button>Farmers</button></a>
            <a href="customerlogin.php"><button>Customer</button></a>
        </div>
    </section>
</body>
</html>