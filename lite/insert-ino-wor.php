<?php

    $inw_title = $_POST["title"];
	$inw_date = $_POST["date"];
    $inw_des = $_POST["des"];
    $inw_owner = $_POST["o"];
	$inw_adv = $_POST["adv"];
    $inw_subject = $_POST["subject"];
    $inw_type = $_POST["type"];
	$inw_url = $_POST["url"];
    $inw_file = "";
    $inw_col_type = "ผลงานนวัตกรรม";
    $inw_date = date("Y-m-d");

    if ($_FILES["file"]["error"] > 0){ 
        echo "Error: " . $_FILES["file"]["error"] . "<br>"; 
    }else{
        //echo "Temp: " . $_FILES["file"]["tmp_name"] . "<br>";
        if (file_exists("upload/ino-wor/" . $_FILES["file"]["name"])){ 
            header('Location:add-data-form.php?addType=inw&ext=1');
        }else{
            move_uploaded_file($_FILES["file"]["tmp_name"],"upload/ino-wor/".$_FILES["file"]["name"]);
            $inw_file = "upload/ino-wor/" . $_FILES["file"]["name"];
            //echo "Copyed to: " . "upload/".$_FILES["file"]["name"];
        }
    }

    include 'config.php';

    $conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $conn->query("SET NAMES UTF8");
    
    $sql = "INSERT INTO innovative_works(title,issued_date,description,owner,advisor,subject,type,url,file_directory)
    VALUES('" . $inw_title ."','" .$inw_date . "','" . $inw_des . "','" . $inw_owner . "','" . $inw_adv . "','" .$inw_subject . "','" . $inw_type . "','" . $inw_url . "','" . $inw_file . "')";
        
    if (mysqli_multi_query($conn, $sql)) {
        	
	    $sql = "SELECT * FROM innovative_works ORDER BY inw_id DESC LIMIT 1";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        $inw_id = $row["inw_id"];

        $sql = "INSERT INTO collections(title,issued_date,subject,res_type,res_id)
        VALUES('" . $inw_title ."','" .$inw_date . "','" . $inw_subject . "','" . $inw_col_type . "','" . $inw_id . "')";

        if (mysqli_multi_query($conn, $sql)) {
            header('Location:add-data-form.php?addType=inw&alert=1');
        }else{
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }        
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
?>