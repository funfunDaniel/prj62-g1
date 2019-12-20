<?php

    require('PHPMailer/PHPMailerAutoload.php'); 
    $v_title = $_POST["title"];
    $v_des = $_POST["des"];
    $v_subject = $_POST["subject"];
    $v_type = $_POST["type"];
	$v_email = $_POST["email"];
	$v_file_dire = "";
	$v_status = "รอตรวจสอบ";
	$v_col_type = "กิจกรรม";
	$v_date = date("Y-m-d");

    if ($_FILES["file"]["error"] > 0){ 
        echo "Error: " . $_FILES["file"]["error"] . "<br>"; 
    }else{
        //echo "Temp: " . $_FILES["file"]["tmp_name"] . "<br>";
        if (file_exists("upload/act/" . $_FILES["file"]["name"])){ 
            header('Location:add-data-form.php?addType=ac&ext=1');
        }else{
            move_uploaded_file($_FILES["file"]["tmp_name"],"upload/act/".$_FILES["file"]["name"]);
            $v_file_dire = "upload/act/" . $_FILES["file"]["name"];
            //echo "Copyed to: " . "upload/".$_FILES["file"]["name"];
        }
    }

    include 'config.php';

    $conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $conn->query("SET NAMES UTF8");  
    
    $sql = "INSERT INTO activities (title,description,issued_date,type,subject,file_directory,status)
    VALUES('" . $v_title ."','" . $v_des . "','" .$v_date . "','" . $v_type . "','" .$v_subject . "','" . $v_file_dire . "','" . $v_status . "')";
        
    if (mysqli_multi_query($conn, $sql)) {
        $sql = "SELECT * FROM activities ORDER BY act_id DESC LIMIT 1";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        $v_id = $row["act_id"];

        $sql = "INSERT INTO request(title,issued_date,subject,res_type,res_id,status,email)
        VALUES('" . $v_title ."','" .$v_date . "','" . $v_subject . "','" . $v_col_type . "','" . $v_id . "','" . $v_status . "','" . $v_email . "')";

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
    $mail->AddBCC($v_email);
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
    
    <b>เรียน</b> ".$_POST['title']."<br>
    <b>คุณได้รับเอกสารประเภท</b> : การเเจ้งเตือนขอเพิ่มผลงาน ประเภทกิจกรรม<br>
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