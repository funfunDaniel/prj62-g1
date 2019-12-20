<?php

    $raw_title = $_POST["title"];
    $raw_des = $_POST["des"];
	$raw_recdate = $_POST["rec_date"];
    $raw_unit = $_POST["unit"];
	$raw_owner = $_POST["owner"];
	$raw_subject = $_POST["subject"];
    $raw_type = $_POST["type"];
    $raw_file = "";
    $raw_col_type = "received_award_works";
    $raw_isdate = date("Y-m-d");

    if ($_FILES["file"]["error"] > 0){ 
        echo "Error: " . $_FILES["file"]["error"] . "<br>"; 
    }else{
        //echo "Temp: " . $_FILES["file"]["tmp_name"] . "<br>";
        if (file_exists("upload/rec-aw-wor/" . $_FILES["file"]["name"])){ 
            header('Location:add-data-form.php?addType=raw&ext=1');
        }else{
            move_uploaded_file($_FILES["file"]["tmp_name"],"upload/rec-aw-wor/".$_FILES["file"]["name"]);
            $raw_file = "upload/rec-aw-wor/" . $_FILES["file"]["name"];
            //echo "Copyed to: " . "upload/".$_FILES["file"]["name"];
        }
    }

    include 'config.php';

    $conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $conn->query("SET NAMES UTF8");
    
    $sql = "INSERT INTO received_award_works (title,description,issued_date,received_date,unit,owner,subject,type,file_directory)
    VALUES('" . $raw_title ."','" . $raw_des . "','" .$raw_isdate . "','" .$raw_recdate . "','" . $raw_unit . "','" . $raw_owner . "','" .$raw_subject . "','" . $raw_type . "','" . $raw_file . "')";
        echo $sql;
    if (mysqli_multi_query($conn, $sql)) {
        $sql = "SELECT * FROM received_award_works ORDER BY raw_id DESC LIMIT 1";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        $raw_id = $row["raw_id"];

        $sql = "INSERT INTO collections(title,issued_date,subject,res_type,res_id)
        VALUES('" . $raw_title ."','" .$raw_date . "','" . $raw_subject . "','" . $raw_col_type . "','" . $raw_id . "')";

        if (mysqli_multi_query($conn, $sql)) {
            header('Location:add-data-form.php?addType=raw&alert=1');
        }else{
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }       
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
?>