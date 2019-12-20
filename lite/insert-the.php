<?php

    $thesis_title = $_POST["title"];
    $thesis_description = $_POST["des"];
    $thesis_author = $_POST["author"];
    $thesis_publisher = $_POST["publisher"];
    $thesis_subject = $_POST["subject"];
    $thesis_type = $_POST["type"];
    $thesis_language = $_POST["language"];
    $thesis_file_directory = "";
    $thesis_extent = $_POST["extent"];
    $thesis_degree_name = $_POST["degreename"];
    $thesis_degree_level = $_POST["degreelevel"];
    $thesis_degree_descripline = $_POST["degreedescripline"];
	$thesis_col_type = "วิทยานิพนธ์";
	$thesis_issued_date = date("Y-m-d");

    if ($_FILES["file"]["error"] > 0){ 
        echo "Error: " . $_FILES["file"]["error"] . "<br>"; 
    }else{
        //echo "Temp: " . $_FILES["file"]["tmp_name"] . "<br>";
        if (file_exists("upload/the/" . $_FILES["file"]["name"])){ 
            header('Location:add-data-form.php?addType=the&ext=1');
        }else{
            move_uploaded_file($_FILES["file"]["tmp_name"],"upload/the/".$_FILES["file"]["name"]);
            $thesis_file_directory = "upload/the/" . $_FILES["file"]["name"];
            //echo "Copyed to: " . "upload/".$_FILES["file"]["name"];
        }
    }

    include 'config.php';

    $conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $conn->query("SET NAMES UTF8");
    
    $sql = "INSERT INTO thesis(title,issued_date,description,author,publisher,subject,type,language,file_directory,extent,degree_name,degree_level,degree_descripline)
    VALUES('" . $thesis_title ."','" .$thesis_issued_date . "','" . $thesis_description . "','" . $thesis_author . "','" . $thesis_publisher . "','" . $thesis_subject . "','" . $thesis_type . "','" . $thesis_language . "','" . $thesis_file_directory . "','" . $thesis_extent ."','" . $thesis_degree_name ."','" . $thesis_degree_level ."','" . $thesis_degree_descripline ."')";
        echo $sql;
    if (mysqli_multi_query($conn, $sql)) {
       $sql = "SELECT * FROM thesis ORDER BY tes_id DESC LIMIT 1";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        $thesis_id = $row["tes_id"];

        $sql = "INSERT INTO collections(title,issued_date,subject,res_type,res_id)
        VALUES('" . $thesis_title ."','" . $thesis_issued_date . "','" . $thesis_subject . "','" . $thesis_col_type . "','" . $thesis_id . "')";

        if (mysqli_multi_query($conn, $sql)) {
            header('Location:add-data-form.php?addType=the&alert=1');
        }else{
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }        
		
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
?>