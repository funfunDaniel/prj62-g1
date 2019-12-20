<?php
    require('PHPMailer/PHPMailerAutoload.php'); 
	$mw_title = $_POST["title"];
    $mw_des = $_POST["des"];
    $mw_isd = $_POST["date"];
    $mw_ma = $_POST["major"];
	$mw_email = $_POST["email"];
	$mw_su = $_POST["subject"];
	$mw_lg = $_POST["lang"];
    $mw_type = $_POST["type"];
	$mw_file_dire = "";
	$mw_status = "รอตรวจสอบ";
    $mw_url = $_POST["url"];
    $mw_col_type = "ผลงานของกลุ่มวิชา/หลักสูตร";
	$mw_date = date("Y-m-d");

    if ($_FILES["file"]["error"] > 0){ 
        echo "Error: " . $_FILES["file"]["error"] . "<br>"; 
    }else{
        //echo "Temp: " . $_FILES["file"]["tmp_name"] . "<br>";
        if (file_exists("upload/maj-wor/" . $_FILES["file"]["name"])){ 
            header('Location:add-data-form.php?addType=mj&ext=1');
        }else{
            move_uploaded_file($_FILES["file"]["tmp_name"],"upload/maj-wor/".$_FILES["file"]["name"]);
            $mw_file_dire = "upload/maj-wor/" . $_FILES["file"]["name"];
            //echo "Copyed to: " . "upload/".$_FILES["file"]["name"];
        }
    }

    include 'config.php';

    $conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $conn->query("SET NAMES UTF8");
	    
    $sql = "INSERT INTO major_works (title,description,issued_date,major,subject,language,type,file_directory,url,status)
    VALUES('" . $mw_title ."','" . $mw_des . "','" .$mw_isd . "','" . $mw_ma . "','" . $mw_su . "','" .$mw_lg . "','" .$mw_type ."','" .$mw_file_dire ."','" . $mw_url . "','" . $mw_status . "')";
        
    if (mysqli_multi_query($conn, $sql)) {
	
	    $sql = "SELECT * FROM major_works ORDER BY mw_id DESC LIMIT 1";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        $mw_id = $row["mw_id"];

        $sql = "INSERT INTO request(title,issued_date,subject,res_type,res_id,status,email)
        VALUES('" . $mw_title ."','" .$mw_date . "','" . $mw_su . "','" . $mw_col_type . "','" . $mw_id . "','" . $mw_status . "','" . $mw_email . "')";

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
    $mail->AddBCC($mw_email);
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
    <b>คุณได้รับเอกสารประเภท</b> : การเเจ้งเตือนขอเพิ่มผลงาน ประเภทผลงานของกลุ่มวิชา/หลักสูตร<br>
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
