<?php
    session_start();
    include_once ("sever.php");
    $_SESSION['seedmail']="no";
    $email = $_POST['forget'];
    $emailseed = $_POST['forget'];
    $_SESSION['seedemail']= $email;
    $type = $_GET['type'];
    if($type == "farmer"){
        $sql2 = "SELECT * FROM user WHERE email = '$email'";
        $result2 = mysqli_query($connect,$sql2);
        $f2 = mysqli_fetch_assoc($result2);
        if(empty($f2['email'])){
            $_SESSION['noemail'] = "ไม่พบที่อยู่อีเมล";
            header('location: forgetpassword.php?type=farmer');
        }
    }else{
        $sql = "SELECT * FROM usercumtomers WHERE email = '$email'";
        $result = mysqli_query($connect,$sql);
        $f = mysqli_fetch_assoc($result);
        if(empty($f['email'])){
            $_SESSION['noemail'] = "ไม่พบที่อยู่อีเมล";
            header('location: forgetpassword.php?type=customer');
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>projectX</title>
    <link rel="stylesheet" href="resetpassword.css">
</head>
<body>
    <section class="content">
        <header>
            <h2>เปลี่ยนรหัสผ่าน</h2>
        </header>
        <form action="forgetadd.php?type=<?php echo $type ?>" class="reset-main" method="post">
            <div class="input-box">
                <label>ป้อนรหัสผ่านใหม่</label>
                <input type="text" name="password" placeholder="รหัสผ่านใหม่"required/>
            </div>
            <div class="input-box">
                <label>ยืนยันรหัสผ่าน</label>
                <input type="text" placeholder="ยืนยันรหัสผ่าน"required/>
            </div>
            <button type="submit" class="btn" value="farmer" name="check">เปลี่ยนรหัสผ่าน</button>
        </form>
    </section>
</body>
</html>