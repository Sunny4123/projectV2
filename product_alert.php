<?php 
    include_once "sever.php";
    session_start();
    $name = "";
    if(isset($_SESSION['name'])){
        $name = $_SESSION['name'];
    }
    $location = "./uploads/"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>projectX</title>
    <link rel="stylesheet" href="product_alert.css">
</head>
<body>
    <header class="header">
        <a href="homepage.html" class="logo"><img src="logo AC.png"></a>
        <nav class="navbar">
            <a href="homepage_1.php">หน้าแรก</a>
            <a href="myshop.php" class="active">ร้านค้าของฉัน</a>
            <a href="market.php">ตลาด</a>
                <a href="homepage_1.php?id=1">ออกจากระบบ</a>
        </nav>
    </header>
    <section class="main-alert">
        <div class="head-show">
            <h1>สินค้าที่ต้องเตรียมจัดส่ง</h1>
        </div>
        <div class="item" style="float:left">
            <?php 
                $sql = "SELECT * FROM myorder WHERE shopid = '$name'";
                $result = mysqli_query($connect,$sql);
                while($row = mysqli_fetch_assoc($result)){
                    if($row['status'] != "con"){
            ?>
                <div class="alert-show" style="float:left">
                <img src="<?php echo $location.$row['img'];?>">
                <h2><?php echo $row['proname']; ?></h2>
                <h2>จำนวน: <label><?php echo $row['num']; ?></label> กก</h2>
                <h2>ราคา: <label><?php echo $row['price']; ?></label> บาท</h2>
                <div class="detail-btn">
                    <a href="customer-detail.php?id=<?php  echo $row['id'];?>">ข้อมูลผู้ซื้อ</a>
                </div>
            </div>
            <?php 
                    }
                }
            ?>
        </div>
       
    </section>
    <footer>
        <p> &copy;Agricultural Community. Rights Reserved. Designed by<span> Van Boom Sun Pond</span></p>
    </footer>
</body>
</html>