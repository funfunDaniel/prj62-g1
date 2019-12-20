<?php

    $v_title = $_POST["title"];
    $v_des = $_POST["des"];
    $v_ptype = $_POST["ptype"];
    $v_subject = $_POST["subject"];
    $v_type = $_POST["type"];
	$v_file_dire = "";
	$v_sdate = $_POST["starday"];
	$v_leader = $_POST["leader"];
	$v_budget = $_POST["budget"];
	$v_unit = $_POST["unit"];
	$v_col_type = "โครงการ";
	$v_date = date("Y-m-d");

    if ($_FILES["file"]["error"] > 0){ 
        echo "Error: " . $_FILES["file"]["error"] . "<br>"; 
    }else{
        //echo "Temp: " . $_FILES["file"]["tmp_name"] . "<br>";
        if (file_exists("upload/proj/" . $_FILES["file"]["name"])){ 
            header('Location:add-data-form.php?addType=pro&ext=1');
        }else{
            move_uploaded_file($_FILES["file"]["tmp_name"],"upload/proj/".$_FILES["file"]["name"]);
            $v_file_dire = "upload/proj/" . $_FILES["file"]["name"];
            //echo "Copyed to: " . "upload/".$_FILES["file"]["name"];
        }
    }

    include 'config.php';

    $conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $conn->query("SET NAMES UTF8");  
    
    $sql = "INSERT INTO projects (title,description,issued_date,project_start_date,project_leader,budget,unit,project_type,subject,type,file_directory)
    VALUES('" . $v_title ."','" . $v_des . "','" .$v_date . "','" . $v_sdate . "','" . $v_leader . "','" . $v_budget . "','" . $v_unit . "','" . $v_ptype . "','" .$v_subject . "','" .$v_type . "','" . $v_file_dire . "')";
        
    if (mysqli_multi_query($conn, $sql)) {
	$sql = "SELECT * FROM projects ORDER BY p_id DESC LIMIT 1";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        $v_id = $row["p_id"];

        $sql = "INSERT INTO collections(title,issued_date,subject,res_type,res_id)
        VALUES('" . $v_title ."','" .$v_date . "','" . $v_subject . "','" . $v_col_type . "','" . $v_id . "')";

        if (mysqli_multi_query($conn, $sql)) {
            header('Location:add-data-form.php?addType=pro&alert=1');
        }else{
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }      
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
?>