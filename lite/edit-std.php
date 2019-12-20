<?php
	$std_id = $_POST["id"];
	$std_title = $_POST["title"];
    $std_des = $_POST["des"];
    $std_isd = $_POST["date"];
    $std_au = $_POST["author"];
	$std_su = $_POST["subject"];
	$std_lg = $_POST["lang"];
    $std_type = $_POST["type"];
	$std_ex = $_POST["extent"];
	$std_file_dire = $_POST["file"];

    include 'config.php';    

    $conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $conn->query("SET NAMES UTF8");
    $sql = "UPDATE slide_for_thesis_drafting SET 
    title='" . $std_title. "', 
    description='" . $std_des . "', 
    issued_date='" . $std_isd. "', 
	 author='" . $std_au . "',
	 subject='" .  $std_su . "',
	 language='" . $std_lg . "',
	 extent='" . $std_ex . "',
	   type='" . $std_type . "', 
    file_directory='" . $std_file_dire  . "' 
    WHERE std_id=" . $std_id;

    if (mysqli_query($conn, $sql)) {
    $v_cid = $_POST["cid"];
        $sql2 = "UPDATE collections SET
        title='" . $std_title. "' 
        WHERE cid=" . $v_cid;
        mysqli_query($conn, $sql2);
		header('Location:record-manage.php?mss=1');
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }

    mysqli_close($conn);
?>