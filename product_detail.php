<?php
    include_once "sever.php";
    $name = $_GET['name'];
    $id = $_GET['id'];
    $sql = "SELECT * FROM myshop2 WHERE id = '$id'";
    $result = mysqli_query($connect,$sql);
    $row = mysqli_fetch_array($result);
    
?>
<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>projectX</title>
    <link rel="stylesheet" href="product_detail2.css">
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
            <a>ออกจากระบบ</a>
        </nav>
    </header>
    <section class="main-detail">
        <div class="main-img">
            <img src="uploads/<?php echo $row['img']; ?>">
        </div>
        <div class="main-form">
            <form action="gride_pro.php?name=<?php echo $name; ?>&id=<?php echo $id;?>" method="post">
                <?php 
                    session_start();
                    if(isset($_SESSION['num_error'])){
                        echo "<p align='center'><font color='FF0000'><B>".$_SESSION['num_error']."</B></font></p>";
                        unset($_SESSION['num_error']);
                    }
                ?>
                <h2>ร้านค้าของ: <label><?php echo $row['username']; ?></label></h2>
                <h2>ชื่อสินค้า: <label><?php echo $row['productname']; ?></label></h2>
                <h2>จำนวนสินค้าที่เหลืออยู่: <label><?php echo $row['num']; ?></label> กิโลกรัม</h2>
                <h2>ราคาสินค้า: <label><?php echo $row['price']; ?></label> บาท/กิโลกรัม</h2>
                <h2>ต้องการซื้อสินค้ากี่กิโลกรัม</h2>
                <div class="column">
                    <div class="input-box">
                        <input type="text" name="num" placeholder="กิโลกรัม"required /> <h4>กิโลกรัม</h4>
                    </div>
                </div>
                <h2>ต้องการรับสินค้าด้วยตัวเองหรือต้องการให้จัดส่ง</h2>
                <div class="column">
                    <div class="btn">
                        <button type="submit" name="gride" value = "farmer" href="#" style="margin-right: 10px;">รับด้วยตนเอง</button>
                        <!-- <a href="buy-detail.html">รับด้วยตนเอง</a> -->
                    </div>
                    <div class="btn">
                        <button type="submit" name="gride" value = "travel-detail" href="#">ต้องการให้จัดส่ง</button>
                        <!-- <a href="travel-detail.html">ต้องการให้จัดส่ง</a> -->
                    </div>
                </div>
            </form>
        </div>
    </section>
    <footer>
        <p> &copy;Agricultural Community. Rights Reserved. Designed by<span> Van Boom Sun Pond</span></p>
    </footer>
</body>

</html>