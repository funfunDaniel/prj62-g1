<?php

    $std_title = $_POST["title"];
    $std_des = $_POST["des"];
    $std_au = $_POST["a"];
	$std_su = $_POST["su"];
	$std_lg = $_POST["lg"];
    $std_type = $_POST["type"];
	$std_ex = $_POST["ex"];
    $std_file_dire = "";
    $std_col_type = "สไลด์สอบโครงร่างวิทยานิพนธ์";
	$std_isd = date("Y-m-d");

    if ($_FILES["file"]["error"] > 0){ 
        echo "Error: " . $_FILES["file"]["error"] . "<br>"; 
    }else{
        //echo "Temp: " . $_FILES["file"]["tmp_name"] . "<br>";
        if (file_exists("upload/std/" . $_FILES["file"]["name"]))
        { 
            header('Location:add-data-form.php?addType=std&ext=1');
            //echo "alert(\"" . $_FILES["file"]["name"] . " already exists.!" . "\")";
        }else{
            move_uploaded_file($_FILES["file"]["tmp_name"],"upload/std/".$_FILES["file"]["name"]);
            $std_file_dire = "upload/std/" . $_FILES["file"]["name"];
            //echo "Copyed to: " . "upload/".$_FILES["file"]["name"];
        }
    }

    include 'config.php';

    $conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $conn->query("SET NAMES UTF8");
	
    
    $sql = "INSERT INTO slide_for_thesis_drafting(title,description,issued_date,author,subject,language,extent,type,file_directory)
    VALUES('" . $std_title ."','" . $std_des . "','" .$std_isd . "','" . $std_au . "','" .$std_su . "','" .$std_lg . "','" . $std_ex . "','" .$std_type ."','" . $std_file_dire . "')";
        
    if (mysqli_multi_query($conn, $sql)) {
        $sql = "SELECT * FROM slide_for_thesis_drafting ORDER BY std_id DESC LIMIT 1";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        $std_id = $row["std_id"];

        $sql = "INSERT INTO collections(title,issued_date,subject,res_type,res_id)
        VALUES('" . $std_title ."','" .$std_isd . "','" . $std_su . "','" . $std_col_type . "','" . $std_id . "')";

        if (mysqli_multi_query($conn, $sql)) {
            header('Location:add-data-form.php?addType=std&alert=1');
        }else{
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }        
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
?>