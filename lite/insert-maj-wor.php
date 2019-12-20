<?php

	$mw_title = $_POST["title"];
    $mw_des = $_POST["des"];
    $mw_isd = $_POST["d"];
    $mw_ma = $_POST["m"];
	$mw_su = $_POST["su"];
	$mw_lg = $_POST["lg"];
    $mw_type = $_POST["type"];
	$mw_file_dire = "";
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
	    
    $sql = "INSERT INTO major_works (title,description,issued_date,major,subject,language,type,file_directory,url)
    VALUES('" . $mw_title ."','" . $mw_des . "','" .$mw_isd . "','" . $mw_ma . "','" . $mw_su . "','" .$mw_lg . "','" .$mw_type ."','" .$mw_file_dire ."','" . $mw_url . "')";
        
    if (mysqli_multi_query($conn, $sql)) {
	
	    $sql = "SELECT * FROM major_works ORDER BY mw_id DESC LIMIT 1";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        $mw_id = $row["mw_id"];

        $sql = "INSERT INTO collections(title,issued_date,subject,res_type,res_id)
        VALUES('" . $mw_title ."','" .$mw_date . "','" . $mw_su . "','" . $mw_col_type . "','" . $mw_id . "')";

        if (mysqli_multi_query($conn, $sql)) {
            header('Location:add-data-form.php?addType=mj&alert=1');
        }else{
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }        
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
?>
