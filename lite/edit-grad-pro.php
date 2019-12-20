<?php
    
	$gp_id = $_POST["id"];
	$gp_title = $_POST["title"];
	$gp_date = $_POST["date"];
    $gp_des = $_POST["des"];
    $gp_owner = $_POST["owner"];
    $gp_subject = $_POST["subject"];
	$gp_type = $_POST["type"];
	$gp_url = $_POST["url"];
	$gp_file = $_POST["file_directory"];
	

    include 'config.php';    

    $conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $conn->query("SET NAMES UTF8");

    $sql = "UPDATE graduation_projects SET 
    title='" . $gp_title. "', 
    issued_date='" . $gp_date. "', 
	description='" . $gp_des . "',
	owner='" . $gp_owner . "',
	subject='" .  $gp_subject . "', 
	type='" . $gp_type . "',
	url='" . $gp_url . "', 
	file_directory='" . $gp_file  . "'
    WHERE gp_id=" . $gp_id;

    if (mysqli_query($conn, $sql)) {
        $v_cid = $_POST["cid"];
        $sql = "UPDATE collections SET
        title='" . $gp_title. "' 
        WHERE cid=" . $v_cid;
        mysqli_query($conn, $sql);
		header('Location:record-manage.php?mss=1');
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }

    mysqli_close($conn);
?>