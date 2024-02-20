<?php 
    include_once "sever.php";
     $sqlnum = "SELECT * FROM user";
     $result12 = mysqli_query($connect,$sqlnum);
     $rownum = mysqli_num_rows($result12);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>projextX</title>
    <link rel="stylesheet" href="market4.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/2ec2ff8d8c.js" crossorigin="anonymous"></script>
</head>

<body>
    <header class="header">
        <a href="homepage_1.php" class="logo"><img src="logo AC.png"></a>
        <nav class="navbar">
            <a href="homepage_1.php">หน้าแรก</a>
            <a href="myshop.php">ร้านค้าของฉัน</a>
            <a href="market.php" class="active">ตลาด</a>
            <a href="newmyorder.php" class="active"><i class="fa-solid fa-truck-fast"></i></a>
            <a href="homepage_1.php?id=1">ออกจากระบบ</a>
        </nav>
    </header>
    <section class="main-market">
        <div  class = "item" style="float:left">   
            <?php 
                while($row = mysqli_fetch_assoc($result12)){
                    $location = 'uploads/'.$row['img'];
                
            ?>
            <div class="show-shop" style="float:left">
                <div class="conimg">
                    <img src="<?php echo $location ?>">
                </div>
                
                <h2>ร้านของ</h2>
                <div class="farmmer">
                    <label><?php echo $row['firstname'] ?></label> <label><?php echo $row['lastname'] ?></label>
                </div>
                <div class="column1">
                    <a href="farmer-detail.php?name=<?php echo $row['username']; ?>">ข้อมูลผู้ขาย</a>
                </div>
                <div class="column2">
                    <a href="shop2.php?name=<?php echo $row['username']; ?>">ร้านค้า</a>
                </div>
            </div>
            <?php 
                }
            ?>
        </div>
    </section>
    <footer>
        <p> &copy;Agricultural Community. Rights Reserved. Designed by<span> Van Boom Sun Pond</span></p>
    </footer>
</body>

</html>