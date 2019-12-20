<?php
    require('PHPMailer/PHPMailerAutoload.php'); 
    $inw_title = $_POST["title"];
	$inw_date = $_POST["date"];
    $inw_des = $_POST["des"];
    $inw_owner = $_POST["owner"];
	$inw_email = $_POST["email"];
	$inw_adv = $_POST["advisor"];
    $inw_subject = $_POST["subject"];
    $inw_type = $_POST["type"];
	$inw_url = $_POST["url"];
    $inw_file = "";
	$inw_status = "รอตรวจสอบ";
    $inw_col_type = "ผลงานนวัตกรรม";
    $inw_date = date("Y-m-d");

    if ($_FILES["file"]["error"] > 0){ 
        echo "Error: " . $_FILES["file"]["error"] . "<br>"; 
    }else{
        //echo "Temp: " . $_FILES["file"]["tmp_name"] . "<br>";
        if (file_exists("upload/ino-wor/" . $_FILES["file"]["name"])){ 
            header('Location:add-data-form.php?addType=inw&ext=1');
        }else{
            move_uploaded_file($_FILES["file"]["tmp_name"],"upload/ino-wor/".$_FILES["file"]["name"]);
            $inw_file = "upload/ino-wor/" . $_FILES["file"]["name"];
            //echo "Copyed to: " . "upload/".$_FILES["file"]["name"];
        }
    }

    include 'config.php';

    $conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $conn->query("SET NAMES UTF8");
    
    $sql = "INSERT INTO innovative_works(title,issued_date,description,owner,advisor,subject,type,url,file_directory,status)
    VALUES('" . $inw_title ."','" .$inw_date . "','" . $inw_des . "','" . $inw_owner . "','" . $inw_adv . "','" .$inw_subject . "','" . $inw_type . "','" . $inw_url . "','" . $inw_file . "','" . $inw_status . "')";
        
    if (mysqli_multi_query($conn, $sql)) {
        	
	    $sql = "SELECT * FROM innovative_works ORDER BY inw_id DESC LIMIT 1";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        $inw_id = $row["inw_id"];

        $sql = "INSERT INTO request(title,issued_date,subject,res_type,res_id,status,owner,email,Advisors)
        VALUES('" . $inw_title ."','" .$inw_date . "','" . $inw_subject . "','" . $inw_col_type . "','" . $inw_id . "','" . $inw_status . "','" . $inw_owner . "','" . $inw_email . "','" . $inw_adv . "')";

        if (mysqli_multi_query($conn, $sql)) {
			
			$mail = new PHPMailer;
    $mail->isSMTP();
    $mail->SMTPDebug = 0;
    $mail->Host = 'smtp.live.com';
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->Username = 'unloveable.champ@hotmail.com';
    $mail->Password = 'Engenius1996';
    $mail->SMTPSecure = 'tls';
    $mail->AddBCC($inw_email);
    // admin's mail
    $mail->setFrom ('unloveable.champ@hotmail.com');
    // user's mail
   
	//TH language
    $mail->CharSet = 'UTF-8';
    //use html
    $mail->isHTML(true);
    //subject
    $mail->Subject= 'คำขอร้อง เพิ่มผลงาน'; 
    //details
   $content_email = "
    
    <b>เรียน</b> ".$_POST['owner']."<br>
    <b>คุณได้รับเอกสารประเภท</b> : การเเจ้งเตือนขอเพิ่มผลงาน  ประเภทผลงานนวัตกรรม <br>
    <b>วัตถุประสงค์</b> : เพื่อเพิ่มผลงานลงในระบบ<br>
    <b>เรื่อง</b> : ขณะนี้ ทางระบบได้รับ คำร้องขอเพิ่มผลงานของท่านเเล้ว  อยู่ในขณะรอการตรวจสอบ <br>
    <b>กรุณาเปิดเอกสารได้จาก</b> url ด้านล่างนี้<br>
    <a href='http://it2.sut.ac.th/project61_g5/prj61_g5/it-website/lite/index-it.php'>คลิก</a>
    ";
    $content    = $content_email;
    $mail->Body           = $content;

    if(!$mail->Send())
    {
    	echo "Mailer Error: " . $mail->ErrorInfo;
    }else{
    	echo "<script language=\"JavaScript\">";
    	echo "alert('ส่ง E-mail แล้ว')";
    	echo "</script>";
    	echo "<script>window.location='index-it.php'</script>";
    	exit;
    }
			
			
            header('Location:index-it.php');
        }else{
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }        
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
?>