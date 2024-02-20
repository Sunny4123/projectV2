<?php 
    include_once "sever.php";
    session_start();
    $name = "no";
    $check= false;
    if(isset($_SESSION['name'])){
        $name = $_SESSION['name'];
        $sqlcheck = "SELECT * FROM user WHERE username = '$name'";
        $resultuser= mysqli_query($connect,$sqlcheck);
        $rowuser = mysqli_fetch_array($resultuser);
        if($rowuser['type'] == "farmer"){
            $check = true;
        }else if(!$check){
            header('location: farmerregis.php');
        }
    }else{
        echo "session no set";
    }
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
        <a href="homepage.html" class="logo">loo</a>
        <nav class="navbar">
            <a href="homepage_1.php">หน้าแรก</a>
            <a href="myshop.php" class="active">ร้านค้าของฉัน</a>
            <a href="market.php">ตลาด</a>
            <a href="newmyorder.php" class="active"><i class="fa-solid fa-truck-fast"></i></a>
            <a href="homepage_1.php?id=1">ออกจากระบบ</a>
        </nav>
    </header>
    <section class="main-shop">
        <?php 
            $sqlnum = "SELECT * FROM myshop2 WHERE username = '$name'";
            $result12 = mysqli_query($connect,$sqlnum);
            $rownum = mysqli_num_rows($result12);
            if($rownum == 0){
                echo '<div class="no-product">
                    <h1>ร้านค้าของคุณยังไม่มีสินค้า</h1>
                    </div>';
            }
        ?>
            <body>
                <div class="add-box1">
                <a href="addproduct.html">เพิ่มสินค้าของคุณ+</a>
                </div>
                <div class="add-box2">
                    <a href="product_alert.php">สินค้าที่ต้องจัดเตรียม</a>
                </div>
                
                <div class="flexbox">
                    <div class="item">
                        <div class="content1">
                            <?php  
                            $query = "SELECT * FROM myshop2 WHERE username = '$name' ";
                            $result = mysqli_query($connect,$query); 
                            while($row = mysqli_fetch_assoc($result)){
                            $location = 'uploads/'.$row['img'];
                            ?>  
                            <div class="content2">
                                <a href="editproductFrom.php?id=<?php echo $row['id']; ?>" style="float:left">
                                    <div class="product-show" style="float:left">
                                        
                                            <img src="<?php echo $location ?>" style="float:left">
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