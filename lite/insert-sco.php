<?php

    $scho_title = $_POST["title"];
    $scho_description = $_POST["des"];
    $scho_budget = $_POST["budget"];
    $scho_scholar = $_POST["scholar"];
    $scho_advisor = $_POST["advisor"];
    $scho_program = $_POST["program"];
    $scho_degree = $_POST["degree"];
    $scho_type = $_POST["type"];
	$scho_col_type = "ทุนวิจัย/ทุนการศึกษา";
	$scho_issued_date  = date("Y-m-d");

    include 'config.php';

    $conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $conn->query("SET NAMES UTF8");
    $sql = "INSERT INTO scholarships(title,issued_date,description,budget,scholar,advisor,program,degree,type)
    VALUES('" . $scho_title ."','" .$scho_issued_date . "','" . $scho_description . "','" . $scho_budget . "','" . $scho_scholar . "','" . $scho_advisor . "','" . $scho_program . "','" . $scho_degree . "','" . $scho_type ."')";
        
    if (mysqli_multi_query($conn, $sql)) {
        $sql = "SELECT * FROM scholarships ORDER BY sc_id DESC LIMIT 1";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        $scho_id = $row["sc_id"];

        $sql = "INSERT INTO collections(title,issued_date,subject,res_type,res_id)
        VALUES('" . $scho_title ."','" . $scho_issued_date . "','','" . $scho_col_type . "','" . $scho_id . "')";

        if (mysqli_multi_query($conn, $sql)) {
            header('Location:add-data-form.php?addType=sc&alert=1');
        }else{
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }      
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
?>