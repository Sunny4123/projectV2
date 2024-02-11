<?php 
    include_once "sever.php";
    session_start();
    $name = "";
    if(isset($_SESSION['name'])){
        $name = $_SESSION['name'];
    }
    $location = "./uploads/";
    $f = "SELECT * From user WHERE username = '$name'";
    $fresult = mysqli_query($connect,$f);
    $rowf = mysqli_fetch_array($fresult);
    $c = "SELECT * FROM usercumtomers WHERE username = '$name'";
    $cresult = mysqli_query($connect,$c);
    $rowc = mysqli_fetch_array($cresult);
    $st = "";
    if($rowf){
        $email = $rowf['email'];
    }
    if($rowc){
        $email = $rowc['email'];
    }
    $sql = "SELECT * FROM myorder WHERE username = '$name'";
    $result = mysqli_query($connect,$sql);
    $rownum = mysqli_num_rows($result);
    
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>projectX</title>
        <link rel="stylesheet" href="Myorder.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <script src="https://kit.fontawesome.com/2ec2ff8d8c.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <header class="header">
            <a href="homepage.html" class="logo"><img src="logo AC.png"></a>
            <nav class="navbar">
                <a href="homepage_1.php">หน้าแรก</a>
                <a href="myshop.php">ร้านค้าของฉัน</a>
                <a href="market.php">ตลาด</a>
                <a href="My_order.php" class="active"><i class="fa-solid fa-truck-fast"></i></a>
                <a href="homepage_1.php?id=1">ออกจากระบบ</a>
            </nav>
        </header>
        <section class="main-alert"  style="border: 3px solid green;">
            <?php 
                if($rownum == 0){
                    echo "No order";
                }else{            
            ?>
            <div class="head-show">
                <h1>คำสั่งซื้อของฉัน</h1>
            </div>
            <div class = "item"  style="border: 3px solid red;" >
            <?php while($row = mysqli_fetch_assoc($result)){ ?>
                <?php if($row['status'] == "order"){
                    $st = "opacity:50%;pointer-events:none;";
                    $c_bottom = "";
                }else {
                    $st = "";
                    $c_bottom = "opacity:50%;pointer-events:none;";
                }
                ?>
                <div class="alert-show"  style="float: left;">
                    <img src="<?php echo $location.$row['img'];?>">
                    <h2><?php echo $row['proname']; ?></h2>
                    <h2>จำนวน: <label><?php echo $row['num']; ?></label> กก</h2>
                    <h2>ราคา: <label><?php echo $row['price']; ?></label> บาท</h2>
                    <div class="detail-btn">
                        <a href="con_order.php?id=<?php echo $row['id'];?>" style="<?php echo $st ?>">ยืนยันคำสั่งซื้อ</a>
                    </div>
                    <div class="detail-btn2">
                        <a href="update_order_type.php?typeorder=can&id=<?php echo $row['id'];?>" style="<?php echo $c_bottom ?>">ยกเลิก</a>
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
<?php 
    }
?>