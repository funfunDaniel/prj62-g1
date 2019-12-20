<?php
    require('PHPMailer/PHPMailerAutoload.php'); 
    $cp_title = $_POST["title"];
    $cp_des = $_POST["des"];
	$cp_co = $_POST["course"];
    $cp_owner = $_POST["owner"];
    $cp_subject = $_POST["subject"];
	$cp_lang = $_POST["lang"];
    $cp_type = $_POST["type"];
	$cp_url = $_POST["url"];
    $cp_file = "";
	$cp_email =$_POST["email"];
	$cp_status = "รอตรวจสอบ";
    $cp_col_type = "ผลงานในรายวิชา";
    $cp_date = date("Y-m-d");

    if ($_FILES["file"]["error"] > 0){ 
        echo "Error: " . $_FILES["file"]["error"] . "<br>"; 
    }else{
        //echo "Temp: " . $_FILES["file"]["tmp_name"] . "<br>";
        if (file_exists("upload/cou-pro/" . $_FILES["file"]["name"])){ 
            header('Location:add-data-form.php?addType=cp&ext=1');
        }else{
            move_uploaded_file($_FILES["file"]["tmp_name"],"upload/cou-pro/".$_FILES["file"]["name"]);
            $cp_file = "upload/cou-pro/" . $_FILES["file"]["name"];
            //echo "Copyed to: " . "upload/".$_FILES["file"]["name"];
        }
    }

    include 'config.php';

    $conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $conn->query("SET NAMES UTF8");
    
    $sql = "INSERT INTO course_projects (title,issued_date,description,course,owner,subject,language,type,file_directory,url,status)
    VALUES('" . $cp_title ."','" .$cp_date . "','" . $cp_des . "','" . $cp_co . "','" . $cp_owner . "','" .$cp_subject . "','" . $cp_lang . "','" . $cp_type . "','" . $cp_file . "','" . $cp_url . "','" . $cp_status . "')";
        
    if (mysqli_multi_query($conn, $sql)) {
        $sql = "SELECT * FROM course_projects ORDER BY cp_id DESC LIMIT 1";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        $cp_id = $row["cp_id"];

        $sql = "INSERT INTO request(title,issued_date,subject,res_type,res_id,status,owner,email)
        VALUES('" . $cp_title ."','" .$cp_date . "','" . $cp_subject . "','" . $cp_col_type . "','" . $cp_id . "','" . $cp_status . "','" . $cp_owner . "','" . $cp_email . "')";

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
    $mail->AddBCC($cp_email);
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
    <b>คุณได้รับเอกสารประเภท</b> : การเเจ้งเตือนขอเพิ่มผลงาน ประเภทผลงานในรายวิชา<br>
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