<?php
    require('PHPMailer/PHPMailerAutoload.php');
	$mw_id = $_POST["id"];
	$mw_title = $_POST["title"];
    $mw_des = $_POST["des"];
    $mw_isd = $_POST["date"];
    $mw_ma = $_POST["major"];
	$mw_su = $_POST["subject"];
	$mw_lg = $_POST["lang"];
	$mw_Email = $_POST["Email"];
    $mw_type = $_POST["type"];
	$mw_file_dire = $_POST["file"];
	$mw_url = $_POST["url"];
	$mw_status = $_POST["status"];
	$mw_col_type = "ผลงานของกลุ่มวิชา/หลักสูตร";
	$mw_date_date = $_POST["date"];
	$gp="ผ่าน";
    include 'config.php';    

    $conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $conn->query("SET NAMES UTF8");

    $sql = "UPDATE major_works SET 
	status='" .$mw_status . "'
    WHERE mw_id=" . $mw_id;

    if (mysqli_query($conn, $sql)) {
        $v_cid = $_POST["cid"];
        $sql = "UPDATE request SET
        status='" .$mw_status . "'
        WHERE cidd=" . $v_cid;
		if (mysqli_query($conn, $sql)) {
			if($mw_status == $gp){
		 $sql = "INSERT INTO collections(title,issued_date,subject,res_type,res_id)
        VALUES('" . $mw_title ."','" .$mw_date . "','" . $mw_su . "','" . $mw_col_type . "','" . $mw_id . "')";
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
    $mail->AddBCC($mw_Email);
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
	
	if($mw_status != "ผ่าน"){
    $content_email = "
    
    <b>เรียน</b> ".$_POST['title']."<br>
    <b>คุณได้รับเอกสารประเภท</b> : การเเจ้งเตือนขอเพิ่มผลงาน  ประเภทผลงานของกลุ่มวิชา/หลักสูตร<br>
    <b>วัตถุประสงค์</b> : เพื่อเพิ่มผลงานลงในระบบ<br>
    <b>เรื่อง</b> : ผลการอนุมัติ คำขอร้องผลงานของท่าน : ".$_POST["status"]." <br>
    <b>กรุณาเปิดเอกสารได้จาก</b> url ด้านล่างนี้   เเล้วทำการบันทึกคำร้องขอเพิ่มผลงานใหม่<br>
    <a href='http://it2.sut.ac.th/project61_g5/prj61_g5/it-website/lite/index-it.php?view=ww'>คลิก</a>
    ";
	//ผ่าน
	} else{
	$content_email = "
    
    <b>เรียน</b> ".$_POST['title']."<br>
    <b>คุณได้รับเอกสารประเภท</b> : การเเจ้งเตือนขอเพิ่มผลงาน  ประเภทผลงานของกลุ่มวิชา/หลักสูตร<br>
    <b>วัตถุประสงค์</b> : เพื่อเพิ่มผลงานลงในระบบ<br>
    <b>เรื่อง</b> : ผลการอนุมัติ คำขอร้องผลงานของท่าน : ".$_POST["status"]." <br>
    <b>กรุณาเปิดเอกสารได้จาก</b> url ด้านล่างนี้<br>
    <a href='http://it2.sut.ac.th/project61_g5/prj61_g5/it-website/lite/mail-det-maj-form.php?table=".$_POST["title"]."&id=".$mw_id."'>คลิก</a>
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