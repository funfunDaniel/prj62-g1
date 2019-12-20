<?php

	$raw_id = $_POST["id"];
	$raw_title = $_POST["title"];
	$raw_des = $_POST["des"];
	$raw_isdate = $_POST["date"];
	$raw_recdate = $_POST["recdate"];
	$raw_unit = $_POST["unit"];
    $raw_owner = $_POST["owner"];
    $raw_subject = $_POST["subject"];
    $raw_type = $_POST["type"];
	$raw_file = $_POST["file"];
	
    include 'config.php';    

    $conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $conn->query("SET NAMES UTF8");

    $sql = "UPDATE received_award_works SET 
    title='" . $raw_title. "', 
	description='" . $raw_des . "',
    issued_date='" . $raw_isdate. "',
	received_date='" . $raw_recdate. "',
	unit='" . $raw_unit. "',
	owner='" . $raw_owner . "',
	subject='" .  $raw_subject . "', 
	type='" . $raw_type . "',
   	file_directory='" . $raw_file . "'
    WHERE raw_id=" . $raw_id;

    if (mysqli_query($conn, $sql)) {
        $v_cid = $_POST["cid"];
        $sql2 = "UPDATE collections SET
        title='" . $raw_title. "' 
        WHERE cid=" . $v_cid;
        mysqli_query($conn, $sql2);
		header('Location:record-manage.php?mss=1');
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }

    mysqli_close($conn);
?>