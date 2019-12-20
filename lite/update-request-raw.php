<?php
    require('PHPMailer/PHPMailerAutoload.php'); 
	$raw_id = $_POST["id"];
	$raw_title = $_POST["title"];
	$raw_des = $_POST["des"];
	$raw_isdate = $_POST["date"];
	$raw_recdate = $_POST["recdate"];
	$raw_unit = $_POST["unit"];
    $raw_owner = $_POST["owner"];
	$raw_Email = $_POST["Email"];
    $raw_subject = $_POST["subject"];
    $raw_type = $_POST["type"];
    $raw_status = $_POST["status"];
	$raw_col_type = "ผลงานที่ได้รับรางวัล";
	$gp="ผ่าน";
    include 'config.php';    

    $conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $conn->query("SET NAMES UTF8");

    $sql = "UPDATE received_award_works SET 
   
   	status='" . $raw_status . "'
    WHERE raw_id=" . $raw_id;

    if (mysqli_query($conn, $sql)) {
        $v_cid = $_POST["cid"];
        $sql = "UPDATE request SET
        status='" . $raw_status. "' 
        WHERE cidd=" . $v_cid;
		  if (mysqli_query($conn, $sql)) {
			  if($raw_status == $gp){
		 $sql = "INSERT INTO collections(title,issued_date,subject,res_type,res_id)
        VALUES('" . $raw_title ."','" .$raw_date . "','" . $raw_subject . "','" . $raw_col_type . "','" . $raw_id . "')";
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
    $mail->AddBCC($raw_Email);
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
	
	if($raw_status != "ผ่าน"){
    $content_email = "
    
    <b>เรียน</b> ".$_POST['owner']."<br>
    <b>คุณได้รับเอกสารประเภท</b> : การเเจ้งเตือนขอเพิ่มผลงาน  ประเภทผลงานที่ได้รับรางวัล<br>
    <b>วัตถุประสงค์</b> : เพื่อเพิ่มผลงานลงในระบบ<br>
    <b>เรื่อง</b> : ผลการอนุมัติ คำขอร้องผลงานของท่าน : ".$_POST["status"]." <br>
    <b>กรุณาเปิดเอกสารได้จาก</b> url ด้านล่างนี้   เเล้วทำการบันทึกคำร้องขอเพิ่มผลงานใหม่<br>
    <a href='http://it2.sut.ac.th/project61_g5/prj61_g5/it-website/lite/index-it.php?view=ww'>คลิก</a>
    ";
	//ผ่าน
	} else{
	$content_email = "
    
    <b>เรียน</b> ".$_POST['owner']."<br>
    <b>คุณได้รับเอกสารประเภท</b> : การเเจ้งเตือนขอเพิ่มผลงาน  ประเภทผลงานที่ได้รับรางวัล<br>
    <b>วัตถุประสงค์</b> : เพื่อเพิ่มผลงานลงในระบบ<br>
    <b>เรื่อง</b> : ผลการอนุมัติ คำขอร้องผลงานของท่าน : ".$_POST["status"]." <br>
    <b>กรุณาเปิดเอกสารได้จาก</b> url ด้านล่างนี้<br>
    <a href='http://it2.sut.ac.th/project61_g5/prj61_g5/it-website/lite/mail-det-raw-form.php?table=".$_POST["owner"]."&id=".$raw_id."'>คลิก</a>
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
		
		header('Location:Request-data-other.php');
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
	}
    mysqli_close($conn);
?>