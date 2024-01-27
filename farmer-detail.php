<?php 
    include_once "sever.php";
    $user = $_GET['name'];
    $sql = "SELECT * FROM user WHERE username = '$user'";
    $result = mysqli_query($connect,$sql);
    $row = mysqli_fetch_assoc($result);
    $location = 'uploads/'.$row['img'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>projectX</title>
    <link rel="stylesheet" href="farmer-detail.css">
</head>

<body>
    <section class="main-farmer-detail">
        <header>
            <h2>ข้อมูลผู้ขาย</h2>
        </header>
        <div class="main">
            <div class="main-img">
                <img src="<?php echo $location;?>">
            </div>
            <h2>ชื่อ: <label><?php echo $row['firstname']; ?></label> <label><?php echo $row['lastname']; ?></label></h2>
            <h2>Email: <label><?php echo $row['email'] ?></label></h2>
            <h2>หมายเลขโทรศัพท์: <label><?php echo $row['phone'] ?></label></h2>
            <h2>ที่อยู่สินค้า</h2>
            <h2>บ้านเลขที่: <label><?php echo $row['house_number']; ?></label> หมู่/ซอย: <label><?php echo $row['group_']; ?></label> ตำบล: <label><?php echo $row['Subdistrict']; ?></label> อำเภอ: <label><?php echo $row['District']; ?></label> จังหวัด: <label><?php echo $row['province'] ?></label></h2>
            <div class="btn">
                <a href="market.php">กลับไปที่ตลาด</a>
            </div>
        </div>
    </section>
</body>

</html>