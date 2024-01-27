<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>projextX</title>
    <link rel="stylesheet" href="customerregis_1.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <section class="container">
    <?php 
        session_start();
        if (isset($_SESSION['error'])) {
            echo "<p align='center'><font color='FF0000'><B>".$_SESSION['error']."</B></font></p>";
            unset($_SESSION['error']);
        }
        
    ?>
        <header>
            CUSTOMER REGISTER
        </header>
        <form action="addcustomer.php" method="post" class="form" enctype="multipart/form-data">
        <div class="input-box">
                <label>ชื่อผู้ใช้</label>
                <input type="text" name="username" placeholder="Enter USERNAME"required />
            </div>
            <div class="input-box">
                <label>รหัสผ่าน</label>
                <input type="text" name="password" placeholder="Enter PASSWORD"required />
            </div>
            <div class="input-box">
                <label>ยืนยันรหัสผ่าน</label>
                <input type="text" name ="confirm" placeholder="CONFIRM PASSWORD"required />
            </div>
            <div class="column">
                <div class="input-box">
                    <label>ชื่อจริง</label>
                    <input type="text" name="firstname" placeholder="Enter First Name"required />
                </div>

                <div class="input-box">
                    <label>นามสกุล</label>
                    <input type="text" name="lastname" placeholder="Enter Last Name"required />
                </div> 
            </div>
            <div class="column">
                <div class="input-box">
                    <label>Email Address</label>
                    <input type="text" name="email" placeholder="Enter Email Address"required />
                </div>
                <div class="input-box">
                    <label>เบอร์โทรศัพท์</label>
                    <input type="text" name="phone" placeholder="Enter Phone Number"required />
                </div>
                <div class="img-uplode">
                    <label>อัปโหลดรูปภาพโปรไฟล์</label>
                    <input type="file" name="file" accept="image/gif, image/jpeg, image/png">
                </div>
            </div>
                <button type="submit" name="submit" value="submit">สมัครสมาชิก</button>
        </form>
</body>
</html>