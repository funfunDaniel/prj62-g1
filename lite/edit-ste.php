<?php
    
	$ste_id = $_POST["id"];
	$ste_title = $_POST["title"];
    $ste_des = $_POST["des"];
    $ste_isd = $_POST["date"];
    $ste_au = $_POST["author"];
	$ste_su = $_POST["subject"];
	$ste_lg = $_POST["lang"];
    $ste_type = $_POST["type"];
	$ste_ex = $_POST["extent"];
	$ste_file_dire = $_POST["file"];

        include 'config.php';    

    $conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $conn->query("SET NAMES UTF8");
    $sql = "UPDATE slide_for_thesis_examination SET 
    title='" . $ste_title. "', 
    description='" . $ste_des . "', 
    issued_date='" . $ste_isd. "', 
	 author='" . $ste_au . "',
	 subject='" .  $ste_su . "',
	 language='" . $ste_lg . "',
	 extent='" . $ste_ex . "',
	   type='" . $ste_type . "', 
    file_directory='" . $ste_file_dire  . "' 
    WHERE ste_id=" . $ste_id;

    if (mysqli_query($conn, $sql)) {
        $v_cid = $_POST["cid"];
        $sql2 = "UPDATE collections SET
        title='" . $ste_title. "' 
        WHERE cid=" . $v_cid;
        mysqli_query($conn, $sql2);
		header('Location:record-manage.php?mss=1');
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }

    mysqli_close($conn);
?>