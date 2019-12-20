w<?php
    
	$cp_id = $_POST["id"];
	$cp_title = $_POST["title"];
	$cp_date = $_POST["date"];
    $cp_des = $_POST["des"];
	$cp_co = $_POST["co"];
    $cp_owner = $_POST["o"];
    $cp_subject = $_POST["sub"];
    $cp_lang = $_POST["lang"];
	$cp_type = $_POST["type"];
	$cp_url = $_POST["url"];
	$cp_file = $_POST["file"];
	

    include 'config.php';    

    $conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $conn->query("SET NAMES UTF8");

    $sql = "UPDATE course_projects SET 
    title='" . $cp_title. "', 
    issued_date='" . $cp_date. "', 
	description='" . $cp_des . "',
	course='" . $cp_co . "',
	owner='" . $cp_owner . "',
	subject='" .  $cp_subject . "', 
	language='" . $cp_lang . "',
	type='" . $cp_type . "',
	url='" . $cp_url . "', 
	file_directory='" . $cp_file  . "'
    WHERE cp_id=" . $cp_id;

    if (mysqli_query($conn, $sql)) {
        $v_cid = $_POST["cid"];
        $sql = "UPDATE collections SET
        title='" . $cp_title. "' 
        WHERE cid=" . $v_cid;
        mysqli_query($conn, $sql);
		header('Location:record-manage.php?mss=1');
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }

    mysqli_close($conn);
?>