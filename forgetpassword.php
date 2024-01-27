
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>projectX</title>
    <link rel="stylesheet" href="forgetpassword.css">
</head>
<body>
   
    <section class="content">
    <?php
        $type = $_GET['type'];
        session_start();
        if(isset($_SESSION['noemail'])){
            echo "<p align='center'><font color='FF0000'><B>".$_SESSION['noemail']."</B></font></p>";
            unset($_SESSION['noemail']);
        }
    ?>
        <header>
            <h2>ลืมรหัสผ่าน</h2>
        </header>
        <form action="resetpassword.php?type=<?php echo $type ?>"  method="post" class="forget-main">
            <div class="input-box">
                <label>ป้อนอีเมลเพื่อ รีเซ็ตรหัสผ่าน</label>
                <input type="text" name="forget" placeholder="Email Address"required />
            </div>
            <button type="submit">รีเซ็ตรหัสผ่าน</button>
        </form>
    </section>
</body>
</html>