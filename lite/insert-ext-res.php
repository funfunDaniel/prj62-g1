<?php

    $ex_res_title = $_POST["title"];
    $ex_res_description = $_POST["des"];
    $ex_res_publisher = $_POST["publisher"];
    $ex_res_author = $_POST["author"];
    $ex_res_subject = $_POST["subject"];
    $ex_res_language = $_POST["language"];
    $ex_res_extent = $_POST["extent"];
    $ex_res_type = $_POST["type"];
    $ex_res_file_directory = "";
	$ex_res_col_type = "วิจัยภายนอก";
	$ex_res_issued_date = date("Y-m-d");

    if ($_FILES["file"]["error"] > 0){ 
        echo "Error: " . $_FILES["file"]["error"] . "<br>"; 
    }else{
        //echo "Temp: " . $_FILES["file"]["tmp_name"] . "<br>";
        if (file_exists("upload/ext_res/" . $_FILES["file"]["name"])){ 
            header('Location:add-data-form.php?addType=er&ext=1');
        }else{
            move_uploaded_file($_FILES["file"]["tmp_name"],"upload/ext_res/".$_FILES["file"]["name"]);
            $ex_res_file_directory = "upload/ext_res/" . $_FILES["file"]["name"];
            //echo "Copyed to: " . "upload/".$_FILES["file"]["name"];
        }
    }

    include 'config.php';

    $conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $conn->query("SET NAMES UTF8");
    
    $sql = "INSERT INTO external_researches(title,description,issued_date,publisher,author,subject,language,extent,type,file_directory)
    VALUES('" . $ex_res_title ."','" .$ex_res_description . "','" . $ex_res_issued_date . "','" . $ex_res_publisher . "','" . $ex_res_author . "','" . $ex_res_subject . "','" . $ex_res_language . "','" . $ex_res_extent . "','" . $ex_res_type ."','" . $ex_res_file_directory ."')";
        
    if (mysqli_multi_query($conn, $sql)) {
	$sql = "SELECT * FROM external_researches ORDER BY er_id DESC LIMIT 1";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        $ex_res_id = $row["er_id"];

        $sql = "INSERT INTO collections(title,issued_date,subject,res_type,res_id)
        VALUES('" .$ex_res_title ."','" . $ex_res_issued_date . "','" . $ex_res_subject . "','" . $ex_res_col_type . "','" . $ex_res_id . "')";

        if (mysqli_multi_query($conn, $sql)) {
            header('Location:add-data-form.php?addType=er&alert=1');
        }else{
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }        
		

    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
?>