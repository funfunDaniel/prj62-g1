<?php

    $ste_title = $_POST["title"];
    $ste_des = $_POST["des"];
    $ste_au = $_POST["a"];
	$ste_su = $_POST["su"];
	$ste_lg = $_POST["lg"];
    $ste_type = $_POST["type"];
	$ste_ex = $_POST["ex"];
	$ste_file_dire = "";
	$ste_col_type = "สไลด์สำหรับสอบวิทยานิพนธ์";
	$ste_date = date("Y-m-d");

    if ($_FILES["file"]["error"] > 0){ 
        echo "Error: " . $_FILES["file"]["error"] . "<br>"; 
    }else{
        //echo "Temp: " . $_FILES["file"]["tmp_name"] . "<br>";
        if (file_exists("upload/ste/" . $_FILES["file"]["name"])){ 
            header('Location:add-data-form.php?addType=ste&ext=1');
        }else{
            move_uploaded_file($_FILES["file"]["tmp_name"],"upload/ste/".$_FILES["file"]["name"]);
            $ste_file_dire = "upload/ste/" . $_FILES["file"]["name"];
            //echo "Copyed to: " . "upload/".$_FILES["file"]["name"];
        }
    }

    include 'config.php';

    $conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $conn->query("SET NAMES UTF8");
    $sql = "INSERT INTO slide_for_thesis_examination (title,description,issued_date,author,subject,language,type,extent,file_directory)
    VALUES('" . $ste_title ."','" . $ste_des . "','" .$ste_date . "','" . $ste_au . "','" .$ste_su . "','" .$ste_lg . "','" .$ste_type ."','" .$ste_ex ."','" . $ste_file_dire . "')";
        
    if (mysqli_multi_query($conn, $sql)) {
	
	$sql = "SELECT * FROM slide_for_thesis_examination ORDER BY ste_id DESC LIMIT 1";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        $ste_id = $row["ste_id"];

        $sql = "INSERT INTO collections(title,issued_date,subject,res_type,res_id)
        VALUES('" . $ste_title ."','" .$ste_date . "','" . $ste_su . "','" . $ste_col_type . "','" . $ste_id . "')";

        if (mysqli_multi_query($conn, $sql)) {
            header('Location:add-data-form.php?addType=ste&alert=1');
        }else{
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }        
		
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
?>