<?php 
    include_once "sever.php";
    $id = $_GET['id'];
    $sql = "SELECT * FROM myshop2 WHERE id = '$id'";
    $result = mysqli_query($connect,$sql);
    $row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>projectX</title>
    <link rel="stylesheet" href="addproduct.css">   
</head>
<body>
    <section class="content">
        <header>
            <h2>แก้ไขสินค้าของคุณ</h2>
        </header>
        <form action="editproduct.php?id=<?php echo $id; ?>" class="form" method="post" enctype="multipart/form-data">
            <div class="img-uplode">
                <label>อัปโหลดรูปภาพสินค้าใหม่ของคุณ</label>
                <input type="file" name="file" accept="image/gif, image/jpeg, image/png">
            </div>
            <div class="input-box">
                <label>ชื่อสินค้า</label>
                <input type="text" value = "<?php echo $row['productname']; ?>" name="name" placeholder="ป้อนชื่อสินค้า"required/>
            </div>
            <div class="input-box">
                <label>จำนวณสินค้า</label>
                <input type="text" value = "<?php echo $row['num']; ?>" name="num" placeholder="0.00/กก"required />
            </div>
            <div class="input-box">
                <label>ราคาสินค้า/บาท</label>
                <input type="text" value = "<?php echo $row['price']; ?>" name="price" placeholder="0/บาท"required />
            </div>
                <button>เพิ่มสินค้า</button>
        </form>
</body>
</html>