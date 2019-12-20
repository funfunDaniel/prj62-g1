<?php

	$v_id = $_POST["id"];
	$v_title = $_POST["title"];
    $v_des = $_POST["des"];
    $v_publisher = $_POST["pub"];
    $v_subject = $_POST["subject"];
    $v_type = $_POST["type"];
	$v_file_dire = $_POST["file"];
	$v_date = $_POST["date"];
	$v_lg = $_POST["lang"];
    include 'config.php';    

    $conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $conn->query("SET NAMES UTF8");

    $sql = "UPDATE Document_Forms SET 
    title='" . $v_title. "', 
	issued_date='" . $v_date. "', 
	description='" . $v_des . "', 
	publisher='" . $v_publisher . "', 
	subject='" .  $v_subject . "', 
	type='" . $v_type . "', 
	language='" . $v_lg . "', 
    file_directory='" . $v_file_dire  . "' 
    WHERE df_id=" . $v_id;

    if (mysqli_query($conn, $sql)) {
        $v_cid = $_POST["cid"];
        $sql2 = "UPDATE collections SET
        title='" . $v_title. "' 
        WHERE cid=" . $v_cid;
        mysqli_query($conn, $sql2);
		header('Location:record-manage.php?mss=1');
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }

    mysqli_close($conn);
?>