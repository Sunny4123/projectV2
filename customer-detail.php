<?php 
    $id = $_GET['id'];
    include_once "sever.php";
    $sql = "SELECT * FROM myorder WHERE id = '$id'";
    $result = mysqli_query($connect,$sql);
    $row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>projectX</title>
    <link rel="stylesheet" href="customer-detail.css">
</head>

<body>
    <section class="container">
        <header>
            <h2>ข้อมูลผู้ซื้อ</h2>
        </header>
        <form action="product_alert.php" class="form">
            <div class="input-box">
                <h2>ชื่อ: <label><?php echo $row['fname'];?></label> <label><?php echo $row['lname']; ?></label></h3>
            </div>
            <div class="input-box">
                <h2>อีเมล: <label><?php echo $row['email']; ?></label></h2>
            </div>
            <div class="input-box">
                <h2>หมายเลขโทรศัพท์: <label><?php echo $row['phone']; ?></label></h2>
            </div>
            <div class="block-address">
                <h2>ที่อยู่จัดส่ง</h2>
                <div class="addres">
                    <p><?php echo $row['address'];?></p>
                </div>
            </div>
            <div class="block-pay">
                <h2>วิธีการชำระเงิน</h2>
                <div class="pay">
                    <label><?php echo $row['type']; ?></label>
                </div>
            </div>
            <button>ยืนยัน</button>
        </form>
        <a href="update_order_type.php?typeorder=con&id=<?php echo $id; ?>"><button>ส่งของแล้ว</button></a>
</body>

</html>