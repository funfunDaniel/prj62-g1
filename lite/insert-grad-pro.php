<?php
    $gp_title = $_POST["title"];
    $gp_des = $_POST["des"];
    $gp_owner = $_POST["owner"];
	$gp_adv = $_POST["advisor"];
    $gp_subject = $_POST["subject"];
    $gp_type = $_POST["type"];
	$gp_url = $_POST["url"];
    $gp_file = "";
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

    $sql = "INSERT INTO graduation_projects (title,issued_date,description,owner,advisor,subject,type,url,file_directory)
    VALUES('" . $gp_title ."','" .$gp_date . "','" . $gp_des . "','" . $gp_owner . "','" . $gp_adv . "','" .$gp_subject . "','" . $gp_type . "','" . $gp_url . "','" . $gp_file . "')";
        
    if (mysqli_multi_query($conn, $sql)) {
        
        $sql = "SELECT * FROM graduation_projects ORDER BY gp_id DESC LIMIT 1";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        $gp_id = $row["gp_id"];

        $sql = "INSERT INTO collections(title,issued_date,subject,res_type,res_id)
        VALUES('" . $gp_title ."','" .$gp_date . "','" . $gp_subject . "','" . $gp_col_type . "','" . $gp_id . "')";

        if (mysqli_multi_query($conn, $sql)) {
            header('Location:add-data-form.php?addType=gp&alert=1');
        }else{
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }        
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
?>