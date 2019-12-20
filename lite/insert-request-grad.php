<?php
    require('PHPMailer/PHPMailerAutoload.php');
    $gp_title = $_POST["title"];
    $gp_des = $_POST["des"];
    $gp_owner = $_POST["owner"];
	$gp_email = $_POST["email"];
	$gp_adv = $_POST["advisor"];
    $gp_subject = $_POST["subject"];
    $gp_type = $_POST["type"];
	$gp_url = $_POST["url"];
    $gp_file = "";
	$gp_status = "รอตรวจสอบ";
    $gp_col_type = "โครงงานจบการศึกษา";
    $gp_date = date("Y-m-d");

    if ($_FILES["file"]["error"] > 0){ 
        echo "Error: " . $_FILES["file"]["error"] . "<br>"; 
    }else{
        //echo "Temp: " . $_FILES["file"]["tmp_name"] . "<br>";
        if (file_exists("upload/grad-pro/" . $_FILES["file"]["name"])){ 
            header('Location:add-data-form.php?addType=gp&ext=1');
        }else{
            move_uploaded_file($_FILES["file"]["tmp_name"],iconv('UTF-8','windows-874',"upload/grad-pro/".$_FILES["file"]["name"]));
            //move_uploaded_file($_FILES["file"]["tmp_name"],"upload/grad-pro/".$_FILES["file"]["name"]);
            $gp_file = "upload/grad-pro/" . $_FILES["file"]["name"];
            //echo "Copyed to: " . "upload/".$_FILES["file"]["name"];
        }
    }

    include 'config.php';

    $conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $conn->query("SET NAMES UTF8");

    $sql = "INSERT INTO graduation_projects (title,issued_date,description,owner,advisor,subject,type,url,file_directory,status)
    VALUES('" . $gp_title ."','" .$gp_date . "','" . $gp_des . "','" . $gp_owner . "','" . $gp_adv . "','" .$gp_subject . "','" . $gp_type . "','" . $gp_url . "','" . $gp_file . "','" . $gp_status . "')";
        
    if (mysqli_multi_query($conn, $sql)) {
        
        $sql = "SELECT * FROM graduation_projects ORDER BY gp_id DESC LIMIT 1";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        $gp_id = $row["gp_id"];

        $sql = "INSERT INTO request(title,issued_date,subject,res_type,res_id,status,owner,email,Advisors)
        VALUES('" . $gp_title ."','" .$gp_date . "','" . $gp_subject . "','" . $gp_col_type . "','" . $gp_id . "','" . $gp_status . "','" . $gp_owner . "','" . $gp_email . "','" . $gp_adv . "')";

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
    $mail->AddBCC($gp_email);
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
    <b>คุณได้รับเอกสารประเภท</b> : การเเจ้งเตือนขอเพิ่มผลงาน ประเภทโครงงานจบการศึกษา<br>
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