<?php

    $cp_title = $_POST["title"];
    $cp_des = $_POST["des"];
	$cp_co = $_POST["co"];
    $cp_owner = $_POST["o"];
    $cp_subject = $_POST["sub"];
	$cp_lang = $_POST["lang"];
    $cp_type = $_POST["type"];
	$cp_url = $_POST["url"];
    $cp_file = "";
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
    
    $sql = "INSERT INTO course_projects (title,issued_date,description,course,owner,subject,language,type,file_directory,url)
    VALUES('" . $cp_title ."','" .$cp_date . "','" . $cp_des . "','" . $cp_co . "','" . $cp_owner . "','" .$cp_subject . "','" . $cp_lang . "','" . $cp_type . "','" . $cp_file . "','" . $cp_url . "')";
        
    if (mysqli_multi_query($conn, $sql)) {
        $sql = "SELECT * FROM course_projects ORDER BY cp_id DESC LIMIT 1";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        $cp_id = $row["cp_id"];

        $sql = "INSERT INTO collections(title,issued_date,subject,res_type,res_id)
        VALUES('" . $cp_title ."','" .$cp_date . "','" . $cp_subject . "','" . $cp_col_type . "','" . $cp_id . "')";

        if (mysqli_multi_query($conn, $sql)) {
            header('Location:add-data-form.php?addType=cp&alert=1');
        }else{
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }        
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
?>