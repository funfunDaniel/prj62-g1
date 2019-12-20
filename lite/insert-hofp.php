<?php

    $v_title = $_POST["title"];
    $v_des = $_POST["des"];
    $v_branch = $_POST["b"];
    $v_subject = $_POST["subject"];
    $v_type = $_POST["type"];
	$v_file_dire = "";
	$v_col_type = "รางวัลเกียรติยศอาจารย์";
	$v_date = date("Y-m-d");

    if ($_FILES["file"]["error"] > 0){ 
        echo "Error: " . $_FILES["file"]["error"] . "<br>"; 
    }else{
        //echo "Temp: " . $_FILES["file"]["tmp_name"] . "<br>";
        if (file_exists("upload/grad-hofp/" . $_FILES["file"]["name"])){ 
            header('Location:add-data-form.php?addType=hofp&ext=1');
        }else{
            move_uploaded_file($_FILES["file"]["tmp_name"],"upload/hofp/".$_FILES["file"]["name"]);
            $v_file_dire = "upload/hofp/" . $_FILES["file"]["name"];
            //echo "Copyed to: " . "upload/".$_FILES["file"]["name"];
        }
    }

    include 'config.php';

    $conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $conn->query("SET NAMES UTF8");  
    
    $sql = "INSERT INTO hall_of_frames_prf (title,description,issued_date,branch,subject,type,file_directory)
    VALUES('" . $v_title ."','" . $v_des . "','" .$v_date . "','" . $v_branch . "','" .$v_subject . "','" . $v_type . "','" . $v_file_dire . "')";
        
    if (mysqli_multi_query($conn, $sql)) {
        $sql = "SELECT * FROM hall_of_frames_prf ORDER BY hofp_id DESC LIMIT 1";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        $v_id = $row["hofp_id"];

        $sql = "INSERT INTO collections(title,issued_date,subject,res_type,res_id)
        VALUES('" . $v_title ."','" .$v_date . "','" . $v_subject . "','" . $v_col_type . "','" . $v_id . "')";

        if (mysqli_multi_query($conn, $sql)) {
            header('Location:add-data-form.php?addType=hofp&alert=1');
        }else{
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }      
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
?>