<?php
    require('PHPMailer/PHPMailerAutoload.php'); 
	$inw_id = $_POST["id"];
	$inw_title = $_POST["title"];
	$inw_date = $_POST["date"];
    $inw_des = $_POST["des"];
    $inw_owner = $_POST["owner"];
	$inw_adv = $_POST["advisor"];
    $inw_subject = $_POST["subject"];
    $inw_type = $_POST["type"];
	$inw_url = $_POST["url"];
	$inw_Email = $_POST["Email"];
	$inw_file = $_POST["file"];
	$inw_status = $_POST["status"];
    $inw_col_type = "ผลงานนวัตกรรม";
	$gp="ผ่าน";
    include 'config.php';    

    $conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $conn->query("SET NAMES UTF8");
    $sql = "UPDATE innovative_works SET 
    status ='" . $inw_status. "'
    WHERE inw_id=" . $inw_id;

    if (mysqli_query($conn, $sql)) {
        $v_cid = $_POST["cid"];
        $sql = "UPDATE request SET
        status ='" . $inw_status. "'
        WHERE cidd=" . $v_cid;
		
		if (mysqli_query($conn, $sql)) {
			if($inw_status == $gp ){
		$sql = "INSERT INTO collections(title,issued_date,subject,res_type,res_id)
        VALUES('" . $inw_title ."','" .$inw_date . "','" . $inw_subject . "','" . $inw_col_type . "','" . $inw_id . "')";
			}
			mysqli_query($conn, $sql);
			$mail = new PHPMailer;
			$mail->isSMTP();
			$mail->SMTPDebug = 0;
			$mail->Host = 'smtp.live.com';
			$mail->Port = 587;
			$mail->SMTPAuth = true;
			$mail->Username = 'unloveable.champ@hotmail.com';
			$mail->Password = 'Engenius1996';
			$mail->SMTPSecure = 'tls';
			$mail->AddBCC($inw_Email);
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
	
	if($inw_status != "ผ่าน"){
    $content_email = "
    
    <b>เรียน</b> ".$_POST['owner']."<br>
    <b>คุณได้รับเอกสารประเภท</b> : การเเจ้งเตือนขอเพิ่มผลงาน  ประเภทผลงานนวัตกรรม<br>
    <b>วัตถุประสงค์</b> : เพื่อเพิ่มผลงานลงในระบบ<br>
    <b>เรื่อง</b> : ผลการอนุมัติ คำขอร้องผลงานของท่าน : ".$_POST["status"]." <br>
    <b>กรุณาเปิดเอกสารได้จาก</b> url ด้านล่างนี้   เเล้วทำการบันทึกคำร้องขอเพิ่มผลงานใหม่<br>
    <a href='http://it2.sut.ac.th/project61_g5/prj61_g5/it-website/lite/index-it.php?view=ww'>คลิก</a>
    ";
	//ผ่าน
	} else{
	$content_email = "
    
    <b>เรียน</b> ".$_POST['owner']."<br>
    <b>คุณได้รับเอกสารประเภท</b> : การเเจ้งเตือนขอเพิ่มผลงาน  ประเภทผลงานนวัตกรรม<br>
    <b>วัตถุประสงค์</b> : เพื่อเพิ่มผลงานลงในระบบ<br>
    <b>เรื่อง</b> : ผลการอนุมัติ คำขอร้องผลงานของท่าน : ".$_POST["status"]." <br>
    <b>กรุณาเปิดเอกสารได้จาก</b> url ด้านล่างนี้<br>
    <a href='http://it2.sut.ac.th/project61_g5/prj61_g5/it-website/lite/mail-det-inw-form.php?table=".$_POST["owner"]."&id=".$inw_id."'>คลิก</a>
    ";
	}
	
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
			
			
			
		header('Location:Request-data-inw.php');
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
	}
    mysqli_close($conn);
?>