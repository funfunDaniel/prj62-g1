<?php
    $v_title = $_POST["title"];
    $v_des = $_POST["des"];
    $v_subject = $_POST["subject"];
    $v_type = $_POST["type"];
	$v_file_dire = "";
	$v_col_type = "รายงานการประชุมอื่น";
	$v_date = date("Y-m-d");

    if ($_FILES["file"]["error"] > 0){ 
        echo "Error: " . $_FILES["file"]["error"] . "<br>"; 
    }else{
        //echo "Temp: " . $_FILES["file"]["tmp_name"] . "<br>";
        if (file_exists("upload/act/" . $_FILES["file"]["name"])){ 
            header('Location:add-data-form.php?addType=ac&ext=1');
        }else{
            move_uploaded_file($_FILES["file"]["tmp_name"],"upload/act/".$_FILES["file"]["name"]);
            $v_file_dire = "upload/act/" . $_FILES["file"]["name"];
            //echo "Copyed to: " . "upload/".$_FILES["file"]["name"];
        }
    }

    include 'config.php';

    $conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $conn->query("SET NAMES UTF8");  
    
    $sql = "INSERT INTO other (title,description,issued_date,type,subject,file_directory)
    VALUES('" . $v_title ."','" . $v_des . "','" .$v_date . "','" . $v_type . "','" .$v_subject . "','" . $v_file_dire . "')";
        
    if (mysqli_multi_query($conn, $sql)) {
        $sql = "SELECT * FROM other ORDER BY oth_id DESC LIMIT 1";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        $v_id = $row["oth_id"];

        $sql = "INSERT INTO collections(title,issued_date,subject,res_type,res_id)
        VALUES('" . $v_title ."','" .$v_date . "','" . $v_subject . "','" . $v_col_type . "','" . $v_id . "')";

        if (mysqli_multi_query($conn, $sql)) {
            header('Location:add-data-form.php?addType=ac&alert=1');
        }else{
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }      
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
?>