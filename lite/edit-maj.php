<?php
	$mw_id = $_POST["id"];
	$mw_title = $_POST["title"];
    $mw_des = $_POST["des"];
    $mw_isd = $_POST["date"];
    $mw_ma = $_POST["major"];
	$mw_su = $_POST["subject"];
	$mw_lg = $_POST["lang"];
    $mw_type = $_POST["type"];
	$mw_file_dire = $_POST["file"];
	$mw_url = $_POST["url"];
	
    include 'config.php';    

    $conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $conn->query("SET NAMES UTF8");

    $sql = "UPDATE major_works SET 
    title='" . $mw_title. "', 
    description='" . $mw_des . "', 
    issued_date='" . $mw_isd. "', 
	 major='" . $mw_ma . "',
	 subject='" .  $mw_su . "',
	 language='" . $mw_lg . "',
	   type='" . $mw_type . "', 
    file_directory='" . $mw_file_dire  . "',
	url='" .$mw_url . "'
    WHERE mw_id=" . $mw_id;

    if (mysqli_query($conn, $sql)) {
        $v_cid = $_POST["cid"];
        $sql2 = "UPDATE collections SET
        title='" . $mw_title. "' 
        WHERE cid=" . $v_cid;
        mysqli_query($conn, $sql2);
		header('Location:record-manage.php?mss=1');
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }

    mysqli_close($conn);
?>