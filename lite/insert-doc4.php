<?php

    $v_title = $_POST["title"];
    $v_des = $_POST["des"];
    $v_publisher = $_POST["publisher"];
    $v_subject = $_POST["subject"];
    $v_type = $_POST["type"];
	$v_file_dire = "";
	$v_lg = $_POST["language"];
	$v_col_type = "ใบรายงานความก้าวหน้า";
	$v_date = date("Y-m-d");

    if ($_FILES["file"]["error"] > 0){ 
        echo "Error: " . $_FILES["file"]["error"] . "<br>"; 
    }else{
        //echo "Temp: " . $_FILES["file"]["tmp_name"] . "<br>";
        if (file_exists("upload/doc-for/" . $_FILES["file"]["name"])){ 
            header('Location:add-data-form.php?addType=df4&ext=1');
        }else{
            move_uploaded_file($_FILES["file"]["tmp_name"],"upload/doc-for/".$_FILES["file"]["name"]);
            $v_file_dire = "upload/doc-for/" . $_FILES["file"]["name"];
            //echo "Copyed to: " . "upload/".$_FILES["file"]["name"];
        }
    }

    include 'config.php';

    $conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $conn->query("SET NAMES UTF8");  
		
    $sql = "INSERT INTO document_Forms4 (title,issued_date,description,publisher,subject,type,language,file_directory)
    VALUES('" . $v_title ."','" .$v_date . "','" . $v_des . "','" . $v_publisher . "','" .$v_subject . "','" . $v_type . "','" . $v_lg . "','" . $v_file_dire . "')";
        
    if (mysqli_multi_query($conn, $sql)) {
       	$sql = "SELECT * FROM document_Forms4 ORDER BY df4_id DESC LIMIT 1";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        $v_id = $row["df4_id"];

        $sql = "INSERT INTO collections(title,issued_date,subject,res_type,res_id)
        VALUES('" . $v_title ."','" .$v_date . "','" . $v_subject . "','" . $v_col_type  . "','" . $v_id . "')";

        if (mysqli_multi_query($conn, $sql)) {
            header('Location:add-data-form.php?addType=df4&alert=1');
        }else{
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }      
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
?>