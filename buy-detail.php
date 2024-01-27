<?php 
    include_once "sever.php";
    $id = $_GET['id'];
    $num = $_POST['num'];
    $shopname = $_GET['name'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $add = $_POST['add'];
    $price = $_POST['price']; 
    $sql = "SELECT * FROM myshop2 WHERE id = '$id'";
    $result = mysqli_query($connect,$sql);
    $row = mysqli_fetch_array($result);
    session_start();
    $_SESSION['shopname_d'] = $shopname;
    $_SESSION['fname_d'] = $fname;
    $_SESSION['lname_d'] = $lname;
    $_SESSION['email_d'] = $email;
    $_SESSION['phone_d'] = $phone;
    $_SESSION['add_d'] = $add;
    $_SESSION['num_d'] = $num
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>projectX</title>
    <link rel="stylesheet" href="buy-detail.css">
</head>
<body>
    <section class="main">
        <header>
            <h2>คำสั่งซื้อ</h2>
        </header>
        <form action="travel_add_data.php?id=<?php echo $id; ?>" method="post">
            <div class="main-content">
                <h1>ข้อมูลผู้ซื้อ</h1>
                <h2>ชื่อ <label><?php echo $fname; ?></label> <label><?php echo $lname; ?></label></h2>
                <h2>Email: <label><?php  echo $email; ?></label></h2>
                <h2>หมายเลขโทรศัพท์: <label><?php echo $phone; ?></label></h2>
                <div class="img-main">
                    <img src="<?php echo "./uploads/".$row['img']; ?>">  
                </div>
                <div class="block-address">
                    <h2>ที่อยู่จัดส่ง</h2>
                    <div class="addres">
                        <h2><?php echo $add; ?></h2>
                    </div>
                </div>
                <h2>ราคา: <label><?php echo $price-35 ?></label> บาท</h2>
                <h2>ค่าจัดส่ง: <label>35</label> บาท</h2>
                <h2>รวม: <label><?php echo $price; ?></label> บาท</h2>
                <div class="pay">
                    <h2>เลือกวิธีการชำระเงิน</h2>
                    <select name="pay" required>
                        <option name="pay" value="เก็บเงินปลายทาง">เก็บเงินปลายทาง</option>
                        <option name="pay" value="ชำระเงินออนไลน์">ชำระเงินออนไลน์</option>
                    </select>             
                </div>
                <input type="text" name = "price" value = "<?php echo $price ?>"  style="opacity: 0;">
                <div class="column">
                    <div class="btn">
                        <button type = "submit">สั่งซื้อ</button>
                    </div>
                    <div class="btn">
                        <a href="market.php">ยกเลิก</a>
                    </div>
                </div>
            </div>
        </form>
    </section>
</body>
</html>