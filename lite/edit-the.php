<?php
	$tes_id = $_POST["id"];
	$thesis_title = $_POST["title"];
	$thesis_issued_date = $_POST["date"];
    $thesis_description = $_POST["description"];
    $thesis_author = $_POST["author"];
	$thesis_publisher = $_POST["publisher"];
    $thesis_subject = $_POST["subject"];
    $thesis_type = $_POST["type"];
    $thesis_language = $_POST["language"];
    $thesis_file_directory = $_POST["file"];
    $thesis_extent = $_POST["extent"];
    $thesis_degree_name = $_POST["degree_name"];
    $thesis_degree_level = $_POST["degree_level"];
    $thesis_degree_descripline = $_POST["degree_descripline"];
	
    include 'config.php';    

    $conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $conn->query("SET NAMES UTF8");

    $sql = "UPDATE thesis SET 
    title='" . $thesis_title. "', 
    issued_date='" . $thesis_issued_date. "', 
	description='" . $thesis_description . "',
	author='" . $thesis_author . "',
	publisher='" . $thesis_publisher . "',
	subject='" .  $thesis_subject . "', 
	type='" . $thesis_type . "', 
    language='" . $thesis_language . "', 
    file_directory='" . $thesis_file_directory  . "',
    extent='" . $thesis_extent  . "',
    degree_name='" . $thesis_degree_name  . "',
    degree_level='" . $thesis_degree_level  . "',
    degree_descripline='" . $thesis_degree_descripline  . "' 
    WHERE tes_id=" . $tes_id;

    if (mysqli_query($conn, $sql)) {
        $v_cid = $_POST["cid"];
        $sql2 = "UPDATE collections SET
        title='" . $thesis_title. "' 
        WHERE cid=" . $v_cid;
        mysqli_query($conn, $sql2);
		header('Location:record-manage.php?mss=1');
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }

    mysqli_close($conn);
?>