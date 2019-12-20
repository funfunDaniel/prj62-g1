<?php

    $tp_title = $_POST["title"];
    $tp_des = $_POST["des"];
    $tp_isd = $_POST["d"];
	$tp_pub = $_POST["p"];
    $tp_au = $_POST["a"];
	$tp_su = $_POST["su"];
	$tp_lg = $_POST["lg"];
    $tp_type = $_POST["type"];
	$tp_ex = $_POST["ex"];
	$tp_file_dire = "";
	$tp_col_type = "โครงร่างวิทยานิพนธ์";
	$tp_date = date("Y-m-d");

    if ($_FILES["file"]["error"] > 0){ 
        echo "Error: " . $_FILES["file"]["error"] . "<br>"; 
    }else{
        //echo "Temp: " . $_FILES["file"]["tmp_name"] . "<br>";
        if (file_exists("upload/the-pro/" . $_FILES["file"]["name"])){ 
            header('Location:add-data-form.php?addType=tp&ext=1');
        }else{
            move_uploaded_file($_FILES["file"]["tmp_name"],"upload/the-pro/".$_FILES["file"]["name"]);
            $tp_file_dire = "upload/the-pro/" . $_FILES["file"]["name"];
            //echo "Copyed to: " . "upload/".$_FILES["file"]["name"];
        }
    }

    include 'config.php';

    $conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $conn->query("SET NAMES UTF8");
    
    $sql = "INSERT INTO thesis_proposals (title,description,issued_date,publisher,author,subject,language,type,extent,file_directory)
    VALUES('" . $tp_title ."','" . $tp_des . "','" .$tp_date . "','" . $tp_pub . "','" . $tp_au . "','" .$tp_su . "','" .$tp_lg . "','" .$tp_type ."','" .$tp_ex ."','" . $tp_file_dire . "')";
        
    if (mysqli_multi_query($conn, $sql)) {
        $sql = "SELECT * FROM thesis_proposals ORDER BY tp_id DESC LIMIT 1";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        $tp_id = $row["tp_id"];

        $sql = "INSERT INTO collections(title,issued_date,subject,res_type,res_id)
        VALUES('" . $tp_title ."','" .$tp_date . "','" . $tp_su . "','" . $tp_col_type . "','" . $tp_id . "')";

        if (mysqli_multi_query($conn, $sql)) {
            header('Location:add-data-form.php?addType=tp&alert=1');
        }else{
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }        
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
?>