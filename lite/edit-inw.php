<?php

	$inw_id = $_POST["id"];
	$inw_title = $_POST["title"];
	$inw_date = $_POST["date"];
    $inw_des = $_POST["des"];
    $inw_owner = $_POST["o"];
	$inw_adv = $_POST["adv"];
    $inw_subject = $_POST["subject"];
    $inw_type = $_POST["type"];
	$inw_url = $_POST["url"];
	$inw_file = $_POST["file"];
	

    include 'config.php';    

    $conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $conn->query("SET NAMES UTF8");
    $sql = "UPDATE innovative_works SET 
    title='" . $inw_title. "', 
    issued_date='" . $inw_date. "', 
	description='" . $inw_des . "',
	owner='" . $inw_owner . "',
	advisor='" . $inw_adv . "',
	subject='" .  $inw_subject . "', 
	type='" . $inw_type . "', 
    url='" . $inw_url . "', 
	file_directory='" . $inw_file  . "'
    WHERE inw_id=" . $inw_id;

    if (mysqli_query($conn, $sql)) {
        $v_cid = $_POST["cid"];
        $sql2 = "UPDATE collections SET
        title='" . $inw_title. "' 
        WHERE cid=" . $v_cid;
        mysqli_query($conn, $sql2);
		header('Location:record-manage.php?mss=1');
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }

    mysqli_close($conn);
?>