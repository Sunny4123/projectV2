<?php 
    include_once "sever.php";
    session_start();
    unset($_SESSION['num_error']);
    $name = $_GET['name'];
    $num = $_GET['num'];
    $id = $_GET['id'];
    $sql = "SELECT * FROM myshop2 WHERE id = '$id'";
    $result = mysqli_query($connect,$sql);
    $row = mysqli_fetch_array($result);
    if($row['num'] < $num){
        $_SESSION['num_error'] = "ร้านค้ามีสินค่าไม่เพียงพอ";
        header('location:product_detail.php?name='.$name."&id=".$id);
    }
    if($num < 0){
        $_SESSION['num_error'] = "จำนวนสินค้าไม่ถูกต้อง";
        header('location:product_detail.php?name='.$name."&id=".$id); 
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>projectX</title>
    <link rel="stylesheet" href="travel-detail.css">
</head>

<body>
    
    <section class="main-travell">
        <header>
            <h2>ข้อมูลผู้ซื้อ</h2>
        </header>
        <form action="buy-detail2.php?name=<?php echo $name;?>&id=<?php echo $id ?>" class="form" method="post">
            <div class="column">
                <div class="input-box">
                    <label>ชื่อ</label>
                    <input type="text" name="fname" placeholder="Enter First Name" required />
                </div>

                <div class="input-box">
                    <label>นามสกุล</label>
                    <input type="text" name="lname" placeholder="Enter Last Name" required />
                </div>
            </div>
            <div class="input-box">
                <label>Email Address</label>
                <input type="text" name="email" placeholder="Enter Email Address" required />
            </div>
            <div class="input-box">
                <label>เบอร์โทรศัพท์</label>
                <input type="text" name="phone" placeholder="Enter Phone Number" required />
            </div>
            <h3>ราคาสินค้าทั้งหมด <?php echo $row['price']*$num ;?> บาท</h3>
            <input type="text" name="price" value="<?php echo ($row['price']*$num)?>" style="opacity: 0;">
            <div class="btn">
                <button type="submit" name="num" value="<?php echo $num; ?>">ยืนยัน</button>
            </div>
        </form>
    </section>
</body>

</html>