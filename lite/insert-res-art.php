<?php

    $res_art_title = $_POST["title"];
    $res_art_description = $_POST["des"];
    $res_art_publisher = $_POST["publisher"];
    $res_art_author = $_POST["author"];
    $res_art_subject = $_POST["subject"];
    $res_art_language = $_POST["language"];
    $res_art_extent = $_POST["extent"];
    $res_art_type = $_POST["type"];
    $res_art_file_directory = "";
	$res_col_type = "บทความวิจัย";
	$res_art_issued_date = date("Y-m-d");

    if ($_FILES["file"]["error"] > 0){ 
        echo "Error: " . $_FILES["file"]["error"] . "<br>"; 
    }else{
        //echo "Temp: " . $_FILES["file"]["tmp_name"] . "<br>";
        if (file_exists("upload/res-art/" . $_FILES["file"]["name"])){ 
            header('Location:add-data-form.php?addType=ra&ext=1');
        }else{
            move_uploaded_file($_FILES["file"]["tmp_name"],"upload/res-art/".$_FILES["file"]["name"]);
           $res_art_file_directory = "upload/res-art/" . $_FILES["file"]["name"];
            //echo "Copyed to: " . "upload/".$_FILES["file"]["name"];
        }
    }

    include 'config.php';

    $conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $conn->query("SET NAMES UTF8");
    
    $sql = "INSERT INTO research_articles(title,description,issued_date,publisher,author,subject,language,extent,type,file_directory)
    VALUES('" . $res_art_title ."','" .$res_art_description . "','" . $res_art_issued_date . "','" . $res_art_publisher . "','" . $res_art_author . "','" . $res_art_subject . "','" . $res_art_language . "','" . $res_art_extent . "','" . $res_art_type ."','" . $res_art_file_directory ."')";
        
    if (mysqli_multi_query($conn, $sql)) {
        $sql = "SELECT * FROM research_articles ORDER BY ra_id DESC LIMIT 1";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        $ra_id = $row["ra_id"];

        $sql = "INSERT INTO collections(title,issued_date,subject,res_type,res_id)
        VALUES('" . $res_art_title ."','" . $res_art_issued_date . "','" . $res_art_subject . "','" . $res_col_type . "','" . $ra_id . "')";

        if (mysqli_multi_query($conn, $sql)) {
            header('Location:add-data-form.php?addType=ra&alert=1');
        }else{
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }        
		

    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
?>