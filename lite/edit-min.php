<?php
    
	$v_id = $_POST["id"];
	$v_title = $_POST["title"];
    $v_des = $_POST["des"];
    $v_subject = $_POST["subject"];
    $v_type = $_POST["type"];
	$v_file_dire = $_POST["file"];
    $v_date = $_POST["date"];

    include 'config.php';    

    $conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $conn->query("SET NAMES UTF8");

    $sql = "UPDATE minutes SET 
    title='" . $v_title. "', 
    issued_date='" . $v_date. "', 
	description='" . $v_des . "', 
	subject='" .  $v_subject . "', 
	type='" . $v_type . "', 
    file_directory='" . $v_file_dire  . "' 
    WHERE min_id=" . $v_id;

    if (mysqli_query($conn, $sql)) {
        $v_cid = $_POST["cid"];
        $sql1 = "UPDATE collections SET
        title='" . $v_title. "' 
        WHERE cid=" . $v_cid;
        mysqli_query($conn, $sql1);
		header('Location:record-manage.php?mss=1');
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }

    mysqli_close($conn);
?>