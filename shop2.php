<?php 
    include_once "sever.php";
    session_start();
    if(isset($_SESSION['name'])){
        $username = $_SESSION['name'];
    }
    $name = $_GET['name'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>projextX</title>
    <link rel="stylesheet" href="myshop11.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/2ec2ff8d8c.js" crossorigin="anonymous"></script>
</head>
   
<body>
    <header class="header">
        <a href="homepage_1.php" class="logo"><img src="logo AC.png" alt="logo"></a>
        <nav class="navbar">
            <a href="homepage_1.php">หน้าแรก</a>
            <a href="myshop.php">ร้านค้าของฉัน</a>
            <a href="market.php">ตลาด</a>
            <a href="My_order.php" class="active"><i class="fa-solid fa-truck-fast"></i></a>
            <a href="homepage_1.php?id=1">ออกจากระบบ</a>
        </nav>
    </header>
    <section class="main-shop">
        
            <body>
                <div class="flexbox">
                    <div class="item">
                        <div class="content1">
                            <?php 
                            $sqlnum = "SELECT * FROM myshop2 WHERE username = '$name' ";
                            $result12 = mysqli_query($connect,$sqlnum);
                            $rownum = mysqli_num_rows($result12);
                            if($rownum == 0){
                                echo '<div class="no-product">
                                        <h1>ร้านค้านี้ยังไม่มีสินค้า</h1>
                                    </div>';
                            }
                           
                            ?>
                            <?php  
                            $query = "SELECT * FROM myshop2 WHERE username = '$name'";
                            $result = mysqli_query($connect,$query); 
                            while($row = mysqli_fetch_assoc($result)){
                            $location = 'uploads/'.$row['img'];
                            if($row['num'] <=0 ){
                                $op = "style=\"opacity: 0.7;pointer-events: none;\"";
                            }else{
                                $op = "";
                            }
                            ?>  
                            <div class="content" <?php echo $op; ?>>
                                <a href="product_detail.php?name=<?php echo $row['username']; ?>&id=<?php echo $row['id']; ?>" style="float:left;">
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
                <div class="btn-box">
                    <form action="shop2.php" method="post" class="mar"> 
                        <button name="gride" value = "true" href="#" style="margin-right: 10px;">กลับ</button>
                    </form>
                </div>
                <?php 
                    if(isset($_POST['gride'])){
                        header('location:market.php');
                    }

                ?>
                
            </body>
    </section>
</body>
    <footer>
        <p> &copy;Agricultural Community. Rights Reserved. Designed by<span> Van Boom Sun Pond</span></p>
    </footer>  
</html>