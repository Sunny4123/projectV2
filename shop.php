<?php 
    include_once "sever.php";
    session_start();
    if($_SESSION['name']){
        $username = $_SESSION['name'];
    }
   
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>projextX</title>
    <link rel="stylesheet" href="myshop10.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/2ec2ff8d8c.js" crossorigin="anonymous"></script>
</head>
   
<body>
    <header class="header">
        <a href="homepage.html" class="logo">loo</a>
        <nav class="navbar">
            <a href="homepage_1.php">หน้าแรก</a>
            <a href="myshop.php" class="active">ร้านค้าของฉัน</a>
            <a href="market.php">ตลาด</a>
            <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
            <a href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
            <a href="homepage_1.php?id=1">ออกจากระบบ</a>
        </nav>
    </header>
    <section class="main-shop">
        
            <body>
                <div class="flexbox">
                    <div class="item">
                        <div class="content1">
                            <?php 
                            $sqlnum = "SELECT * FROM myshop";
                            $result12 = mysqli_query($connect,$sqlnum);
                            $rownum = mysqli_num_rows($result12);
                            if($rownum == 0){
                                echo '<div class="no-product">
                                        <h1>ร้านค้าของคุณยังไม่มีสินค้า</h1>
                                    </div>';
                            }
                            ?>
                            <?php  
                            $query = "SELECT * FROM myshop";
                            $result = mysqli_query($connect,$query); 
                            while($row = mysqli_fetch_assoc($result)){
                            $location = 'uploads/'.$row['img'];
                            ?>  
                            <div class="content">
                                <a href="product_detail.php?id=<?php echo $row['id']; ?>" style="float:left">
                                    <div class="product-show" style="float:left">
                                        <img src="<?php echo $location; ?>" style="float:left">
                                        <h2 style="float:left">ชื่อสินค้า: <label><?php echo $row['productname']; ?></label></h2>
                                        <h2 style="float:left">ราคา: <label><?php echo $row['price']; ?></label> บาท/กก</h2>
                                        <h2 style="float:left">จำนวนที่มี: <label><?php echo $row['num'] ?></label> กก</h2>
                                    </div>
                                </a>
                            </div>
                                             
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                </div>
                
            </body>
    </section>
</body>
    <footer>
        <p> &copy;Agricultural Community. Rights Reserved. Designed by<span> Van Boom Sun Pond</span></p>
    </footer>  
</html>