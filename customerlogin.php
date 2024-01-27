<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>projextX</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="customerlogin1.css">
</head>

<body>
    <div class="wrapper">
        <?php 
        session_start();
            if (isset($_SESSION['warning'])){
                echo "<p align='center'><font color='FF0000'><B>".$_SESSION['warning']."</B></font></p>";
                unset ($_SESSION['warning']);
            }
              if(isset($_SESSION['name'])){
                if($_SESSION['name'] != "everone"){
                    header('location: https://www.youtube.com/watch?v=dQw4w9WgXcQ');
                }
            }
        ?>
        <form action="checklogincustomer.php" method="post">
            <h1>เข้าสู่ระบบสำหรับ<br>ผู้ซื้อสินค้า</h1>
            <div class="input-box">
                <input type="text" name="username" placeholder="USERNAME" required><i class='bx bx-user-circle' ></i>
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="PASSWORD" required> <i class='bx bx-lock-alt' ></i> 
            </div>
            <div class="remember-forget">
                <label><input type="checkbox" name="remeber">จดจำฉัน</label>
                <a href="forgetpassword.php?type=customer">ลืมรหัสผ่าน?</a>
            </div>

            <button type="submit" class="btn" value = "customer" name="check">เข้าสู่ระบบ</button>

            <div class="register-link">
                <p>ยังไม่มีบัญชีอย่างงั้นหรอ? <a href="customerregis.php">สมัครสมาชิก</a></p>
            </div>
        </form>
    </div>
</body>

</html>