<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>projectX</title>
    <link rel="stylesheet" href="farmerregisv2.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    </header>
    <section class="container">
    <?php 
        include_once "sever.php";
        $name = "";
        $lockName = "";
        $lockpass = "";
        $lockFname = "";
        $lockLname = "";
        $lockEmail = "";
        $lockPhone = "";
        session_start();
        if (isset($_SESSION['error'])){
            echo "<p align='center'><font color='FF0000'><B>".$_SESSION['error']."</B></font></p>";
            unset ($_SESSION['error']);
        }
        if(isset($_SESSION['name'])){
            $name = $_SESSION['name'];
        }
        $sql = "SELECT * FROM usercumtomers WHERE username = '$name'";
        $result = mysqli_query($connect,$sql);
        $row = mysqli_fetch_array($result);
        if($row){
            if($row['type'] == "customer"){
                $lockName = "value = "."\"".$row['username']."\""."readonly "."style="."\""."background-color:lightgray;"."\"";
                //$lockEmail = "value = "."\"".$row['email']."\""."readonly "."style="."\""."background-color:lightgray;"."\"";
                $lockFname = "value = "."\"".$row['fname']."\""."readonly "."style="."\""."background-color:lightgray;"."\"";
                $lockLname = "value = "."\"".$row['lname']."\""."readonly "."style="."\""."background-color:lightgray;"."\"";
                $lockPhone = "value = "."\"".$row['phone']."\""."readonly "."style="."\""."background-color:lightgray;"."\"";
            }
        }
    ?>
        <header>
            Registeration Form
        </header>
        <form action="addData.php" name="add_Data_framer" method="post" class="form" enctype="multipart/form-data">
            <div class="input-box">
                <label>ชื่อผู้ใช้</label>
                <input type="text" name="username" placeholder="Enter USERNAME" required <?php echo $lockName; ?>/>
            </div>
            <div class="input-box">
                <label>รหัสผ่าน</label>
                <input type="text" name="password" placeholder="Enter PASSWORD"required />
            </div>
            <div class="input-box">
                <label>ยืนยัน รหัสผ่าน</label>
                <input type="text" name="checkpassword" placeholder="CONFIRM PASSWORD"required />
            </div>
            <div class="column">
                <div class="input-box">
                    <label>ชื่อจริง</label>
                    <input type="text" name="firstName" placeholder="Enter First Name"required <?php echo $lockFname ?>/>
                </div>

                <div class="input-box">
                    <label>นามสกุล</label>
                    <input type="text" name="lastName" placeholder="Enter Last Name"required <?php echo $lockLname ?>/>
                </div> 
            </div>
            <div class="input-box">
                <label>Email Address</label>
                <input type="text"  name="email" placeholder="Enter Email Address"required/>
            </div>
            <div class="column">
                <div class="input-box">
                    <label>เบอร์โทรศัพท์</label>
                    <input type="text" name="phone" placeholder="Enter Phone Number"required <?php echo $lockPhone ?> />
                </div>

                <div class="input-box">
                    <label>วันเกิด</label>
                    <input type="text" name="date" placeholder="00/00/00"required />
                </div> 
            </div>
            <div class="gender-option">
                <div class="gender">
                    <input type="radio" id="check-male" name="gender" value="male"/>
                    <label for="check-male">ชาย</label>
                </div>
                <div class="gender">
                    <input type="radio" id="check-female" name="gender" value="female"/>
                    <label for="check-female">หญิง</label>
                </div>
                <div class="gender">
                    <input type="radio" id="check-other" name="gender" value="Not to say"/>
                    <label for="check-other">ไม่ต้องการระบุ</label>
                </div>
            </div>
            <div class="input-box">
                <label>ข้อมูล</label>
                <input type="text" name="religion" placeholder="ศาสนา"required />
                <div class="column">
                    <input type="text" name="ethnicity" placeholder="เชื้อชาติ"required />
                    <input type="text" name="nationality" placeholder="สัญชาติ"required />  
                </div>
                <div class="column">
                    <input type="text" name="house_number" placeholder="บ้านเลขที่"required />
                    <input type="text" name="group_" placeholder="หมู่/ซอย"required />  
                </div>
                <div class="column">
                    <input type="text" name="subdistrict" placeholder="ตำบล"required />
                    <input type="text" name="district" placeholder="อำเภอ"required />
                </div>
                </div>
                <div class="column">
                    <label>จังหวัด</label>
                <select name="province" required>
                    <option value="" selected hidden>--------- เลือกจังหวัด ---------</option>
                    <option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
                    <option value="กระบี่">กระบี่ </option>
                    <option value="กาญจนบุรี">กาญจนบุรี </option>
                    <option value="กาฬสินธุ์">กาฬสินธุ์ </option>
                    <option value="กำแพงเพชร">กำแพงเพชร </option>
                    <option value="ขอนแก่น">ขอนแก่น</option>
                    <option value="จันทบุรี">จันทบุรี</option>
                    <option value="ฉะเชิงเทรา">ฉะเชิงเทรา </option>
                    <option value="ชัยนาท">ชัยนาท </option>
                    <option value="ชัยภูมิ">ชัยภูมิ </option>
                    <option value="ชุมพร">ชุมพร </option>
                    <option value="ชลบุรี">ชลบุรี </option>
                    <option value="เชียงใหม่">เชียงใหม่ </option>
                    <option value="เชียงราย">เชียงราย </option>
                    <option value="ตรัง">ตรัง </option>
                    <option value="ตราด">ตราด </option>
                    <option value="ตาก">ตาก </option>
                    <option value="นครนายก">นครนายก </option>
                    <option value="นครปฐม">นครปฐม </option>
                    <option value="นครพนม">นครพนม </option>
                    <option value="นครราชสีมา">นครราชสีมา </option>
                    <option value="นครศรีธรรมราช">นครศรีธรรมราช </option>
                    <option value="นครสวรรค์">นครสวรรค์ </option>
                    <option value="นราธิวาส">นราธิวาส </option>
                    <option value="น่าน">น่าน </option>
                    <option value="นนทบุรี">นนทบุรี </option>
                    <option value="บึงกาฬ">บึงกาฬ</option>
                    <option value="บุรีรัมย์">บุรีรัมย์</option>
                    <option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์ </option>
                    <option value="ปทุมธานี">ปทุมธานี </option>
                    <option value="ปราจีนบุรี">ปราจีนบุรี </option>
                    <option value="ปัตตานี">ปัตตานี </option>
                    <option value="พะเยา">พะเยา </option>
                    <option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา </option>
                    <option value="พังงา">พังงา </option>
                    <option value="พิจิตร">พิจิตร </option>
                    <option value="พิษณุโลก">พิษณุโลก </option>
                    <option value="เพชรบุรี">เพชรบุรี </option>
                    <option value="เพชรบูรณ์">เพชรบูรณ์ </option>
                    <option value="แพร่">แพร่ </option>
                    <option value="พัทลุง">พัทลุง </option>
                    <option value="ภูเก็ต">ภูเก็ต </option>
                    <option value="มหาสารคาม">มหาสารคาม </option>
                    <option value="มุกดาหาร">มุกดาหาร </option>
                    <option value="แม่ฮ่องสอน">แม่ฮ่องสอน </option>
                    <option value="ยโสธร">ยโสธร </option>
                    <option value="ยะลา">ยะลา </option>
                    <option value="ร้อยเอ็ด">ร้อยเอ็ด </option>
                    <option value="ระนอง">ระนอง </option>
                    <option value="ระยอง">ระยอง </option>
                    <option value="ราชบุรี">ราชบุรี</option>
                    <option value="ลพบุรี">ลพบุรี </option>
                    <option value="ลำปาง">ลำปาง </option>
                    <option value="ลำพูน">ลำพูน </option>
                    <option value="เลย">เลย </option>
                    <option value="ศรีสะเกษ">ศรีสะเกษ</option>
                    <option value="สกลนคร">สกลนคร</option>
                    <option value="สงขลา">สงขลา </option>
                    <option value="สมุทรสาคร">สมุทรสาคร </option>
                    <option value="สมุทรปราการ">สมุทรปราการ </option>
                    <option value="สมุทรสงคราม">สมุทรสงคราม </option>
                    <option value="สระแก้ว">สระแก้ว </option>
                    <option value="สระบุรี">สระบุรี </option>
                    <option value="สิงห์บุรี">สิงห์บุรี </option>
                    <option value="สุโขทัย">สุโขทัย </option>
                    <option value="สุพรรณบุรี">สุพรรณบุรี </option>
                    <option value="สุราษฎร์ธานี">สุราษฎร์ธานี </option>
                    <option value="สุรินทร์">สุรินทร์ </option>
                    <option value="สตูล">สตูล </option>
                    <option value="หนองคาย">หนองคาย </option>
                    <option value="หนองบัวลำภู">หนองบัวลำภู </option>
                    <option value="อำนาจเจริญ">อำนาจเจริญ </option>
                    <option value="อุดรธานี">อุดรธานี </option>
                    <option value="อุตรดิตถ์">อุตรดิตถ์ </option>
                    <option value="อุทัยธานี">อุทัยธานี </option>
                    <option value="อุบลราชธานี">อุบลราชธานี</option>
                    <option value="อ่างทอง">อ่างทอง </option>
                    <option value="อื่นๆ">อื่นๆ</option>
                </form>
              </select>
              <label>อัปโหลดรูปภาพโปรไฟล์</label>
              <input type="file" name="file" accept="image/gif, image/jpeg, image/png">
            </div>
            <button type="submit" value="farmer" name="submit">สมัครสมาชิก</button>
        </form>
    </section>
</body>
</html>