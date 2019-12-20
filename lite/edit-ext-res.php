<?php
	$er_id = $_POST["id"];
	$ex_res_title = $_POST["title"];
    $ex_res_description = $_POST["des"];
    $ex_res_issued_date = $_POST["date"];
    $ex_res_publisher = $_POST["pub"];
    $ex_res_author = $_POST["author"];
    $ex_res_subject = $_POST["subject"];
    $ex_res_language = $_POST["lang"];
    $ex_res_extent = $_POST["extent"];
    $ex_res_type = $_POST["type"];
	$ex_res_file_directory = $_POST["file"];

    include 'config.php';    

    $conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $conn->query("SET NAMES UTF8");
    

    $sql = "UPDATE external_researches	 SET 
    title='" . $ex_res_title. "',
    description='" . $ex_res_description . "', 
    issued_date='" . $ex_res_issued_date. "', 
    publisher='" . $ex_res_publisher . "',
	author='" . $ex_res_author . "',
	subject='" .  $ex_res_subject . "', 
    language='" . $ex_res_language . "', 
    extent='" . $ex_res_extent  . "',
    type='" . $ex_res_type . "',
    file_directory='" . $ex_res_file_directory  . "'
    WHERE er_id=" . $er_id;

    if (mysqli_query($conn, $sql)) {
        $v_cid = $_POST["cid"];
        $sql2 = "UPDATE collections SET
        title='" . $ex_res_title. "' 
        WHERE cid=" . $v_cid;
        mysqli_query($conn, $sql2);
		header('Location:record-manage.php?mss=1');
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }

    mysqli_close($conn);
?>