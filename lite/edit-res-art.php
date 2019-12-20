<?php
	$ra_id = $_POST["id"];
    $res_art_title = $_POST["title"];
    $res_art_description = $_POST["des"];
	$res_art_issued_date = $_POST["date"];
    $res_art_publisher = $_POST["pub"];
    $res_art_author = $_POST["author"];
    $res_art_subject = $_POST["subject"];
    $res_art_language = $_POST["lang"];
    $res_art_extent = $_POST["extent"];
    $res_art_type = $_POST["type"];
    $res_art_file_directory = $_POST["file"];
    include 'config.php';    

    $conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $conn->query("SET NAMES UTF8");
    

    $sql = "UPDATE research_articles SET 
    title='" . $res_art_title. "', 
    description='" . $res_art_description . "',
    issued_date='" . $res_art_issued_date. "', 
	author='" . $res_art_author . "',
	publisher='" . $res_art_publisher . "',
    author='" . $res_art_author . "',
    subject='" .  $res_art_subject . "', 
    language='" . $res_art_language . "', 
    extent='" . $res_art_extent  . "',
    type='" . $res_art_type . "', 
    file_directory='" . $res_art_file_directory  . "' 
    WHERE ra_id=" . $ra_id;

    if (mysqli_query($conn, $sql)) {
        $v_cid = $_POST["cid"];
        $sql2 = "UPDATE collections SET
        title='" . $res_art_title. "' 
        WHERE cid=" . $v_cid;
        mysqli_query($conn, $sql2);
		header('Location:record-manage.php?mss=1');
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }

    mysqli_close($conn);
?>