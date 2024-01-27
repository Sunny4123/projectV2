<?php 
    include_once "sever.php";
    $name = "everone";
    session_start();
    $user = "nouser";
    if(isset($_GET['id'])){
        session_destroy();
        unset($_SESSION['name']);
        header('location: ask.php');
        setcookie('username',"",time()-(86400*30));
        setcookie('pass',"",time()-(86400*30));
    }/**if($name == "everone"){
        header('location: ask.php');
    }**/
    if(isset($_COOKIE['username'])){
        $user =$_COOKIE['username'];
        $_SESSION['name'] = $user;
    }
    if(isset($_SESSION['name'])){
        $name = $_SESSION['name'];
    }
    if($user == "nouser" && $name == "everone"){
        session_destroy();
        unset($_SESSION['name']);
        header('location: ask.php');   
    }
    $sql = "SELECT * FROM user WHERE username = '$name'";
    $result = mysqli_query($connect,$sql);
    $row = mysqli_fetch_array($result);
    if($row){
        if($name == $row['username']){
            $type = "ร้านค้าของฉัน";
        }else{
            $type = "สร้างร้านค้าของฉัน";
        }
    }else{
        $type = "สร้างร้านค้าของฉัน";
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>projextX</title>
    <link rel="stylesheet" href="homepage_8v.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" href="logoic.jpg">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
</head>

<body>
<header class="header">
    <a href="#" class="logo"><img src="logo AC.png" alt="logo" width="100px" style="padding-top: 5px;"></a>
    <div class="bx bx-menu" id="menu-icen"></div>
    <nav class="navbar">
        <a href="#home" class="active">หน้าแรก</a>
        <a href="#about">เกี่ยวกับเรา</a>
        <a href="#services">บริการอื่นๆ</a>
        <a href="#contact">ติดต่อเรา</a>
        <a href="homepage_1.php?id=1">ออกจากระบบ</a>
    </nav> 
</header>
<body>   
</body>
    <section class="home" id="home">
        <div class="rain">
            <span style="--i:10"></span>
            <span style="--i:30"></span>
            <span style="--i:55"></span>
            <span style="--i:110"></span>
            <span style="--i:75"></span>
            <span style="--i:35"></span>
            <span style="--i:64"></span>
            <span style="--i:45"></span>
            <span style="--i:102"></span>
            <span style="--i:35"></span>
            <span style="--i:20"></span>
            <span style="--i:55"></span>
            <span style="--i:25"></span>
            <span style="--i:115"></span>
            <span style="--i:39"></span>
            <span style="--i:85"></span>
            <span style="--i:55"></span>
            <span style="--i:80"></span>
            <span style="--i:120"></span>
            <span style="--i:43"></span>
            <span style="--i:60"></span>
            <span style="--i:55"></span>
            <span style="--i:140"></span>
            <span style="--i:27"></span>
            <span style="--i:105"></span>
            <span style="--i:28"></span>
            <span style="--i:40"></span>
            <span style="--i:100"></span>
            <span style="--i:65"></span>
            <span style="--i:35"></span>
    </div>
        <div class="home-content">
            <h1>AGRICULTURE COMMUNITY</h1>
            <h3>ยินดีต้อนรับ คุณ <?php echo $name ?></h3>
            <p>เว็บไซต์นี้จัดทำขึ้นเพื่อให้ เกษตรกรสามารถส่งออกพืชผลหรือสินค้าอื่นๆของตนเองได้สดวกและง่ายดายมากยิ่งขึ้น.</p>
                 <div class="btn-box">
                    <form action="girde.php" method="post" class="mar"> 
                        <button name="gride" value = "farmer" href="#" style="margin-right: 10px;"><?php echo $type; ?></button>
                        <button name="gride" value = "customer" href="#">เยี่ยมชมตลาด</button>
                    </form>
                </div>
        </div>        
        <span class="home-imgHover"></span>
        <?php
         if(isset($_SESSION['checkv1'])){
            echo '<script src="script2.js"></script>';
            unset($_SESSION['checkv1']);
         }
        ?>
    </section>
    <section class="about" id="about">
            <h2 class="heading">เกี่ยวกับ <span>เรา</span></h2>
            <div class="about-content">
                <p>เว็บไซต์นี้สร้างขึ้นเพื่ออำนวยความสะดวกให้กับธุรกิจในท้องถิ่นและลูกค้าภายใน<br>
                    ชุมชนโดยจัดการสร้างให้เป็นแพลตฟอร์มที่สะดวกและเป็นประโยชน์ในการส่งออกสินค้า<br>
                และสามารถช่วยเก็บข้อมูลของเกษตรกรภายในชุมชนเพื่อเป็นตัวช่วยในการสำรวจประชากรให้กับทาง อบต.</p>
            </div>
            <div class="about-between">
                <div class="btn-box-about">
                    <div>
                        <h4>เกษตกร</h4>
                        <p>เกษตรกรสามารถใช้เว็บไซต์นี้เปรียบเสมือนร้านค้าของตนเองในการขายหรือส่งออกผลผลิต</p>
                    </div>
                </div>
                <div class="btn-box-about">
                    <div>
                        <h4>ผู้ที่ต้องการ<br>
                            ซื้อสินค้า</h4>
                        <p>ผู้ที่ต้องการซื้อสินค้า สามารถใช้เว็บไซต์นี้ในการเลือกซื้อสินค้าทางการเกษตรของคนในชุมชน</p>
                    </div>
                </div>
            </div>
    </section>
    <section class="services" id="services">
        <h2 class="heading">บริการอื่นๆ<span> เพิ่มเติม</span></h2>

        <div class="services-container">
            <div class="services-box">
                <i class="fa-solid fa-carrot"></i>
                <h3>ผักสด</h3>
                <p>ผักสดใหม่จากจากฟาร์มของเกษตรกรภายในชุมชน เป็นผักปลอดสารพิษ 100% อร่อยและดีต่อสุขภาพ</p>
            </div>
            <div class="services-box">
                <i class="fa-solid fa-apple-whole"></i>
                <h3>ผลไม้</h3>
                <p>ผลไม้สดใหม่จากฟาร์มของเกษตรกรภายในชุมชน ผลไม้สะอาดผ่านการคัดกรองอย่างดี</p>
            </div>
            <div class="services-box">
                <i class="fa-solid fa-seedling"></i>
                <h3>เมล็ดพันธุ์และต้นกล้า</h3>
                <p>เมล็ดพันธุ์และต้นกล้าพร้อมปลูกส่งตรงจากมือเกษตกร</p>
            </div>
        </div>
    </section>
    <section class="contact" id="contact">
        <div class="footer">
            <div class="footer-content">
                <h3>ช่องทางการติดต่อ</h3>
                <p>สามารถติดต่อพวกเราได้ตามช่องทางด้านล่างนี้</p>
                <ul class="socials">
                    <li><a href="https://web.facebook.com/pattarapon.kreepan" target="_blank"><i class='bx bxl-facebook'></i></a></li>
                    <li><a href="https://www.instagram.com/pp_kreepan/" target="_blank"><i class='bx bxl-instagram-alt'></i></a></li>
                    <li><a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"target="_blank"><i class="fa-brands fa-x-twitter"></i></i></a></li>
                </ul>
                <ul class="socials-2">
                    <li class="sotop"><i class='bx bxl-gmail'></i>pattarapon_kreepan@cmu.ac.th</li>
                </ul>
                <ul class="socials-2">
                    <li class="sotop"><i class='bx bxs-phone' ></i></i>pattarapon_kreepan@cmu.ac.th</li>
                </ul>
            </div>
        <div class="footer-buttom">
            <p> &copy;Agricultural Community. Rights Reserved. Designed by<span> Van Boom Sun Pond</span></p>
        </div>
    </section>
    <script src="https://kit.fontawesome.com/2ec2ff8d8c.js" crossorigin="anonymous"></script>
    <script src="script.js "></script>
</body>
</html>