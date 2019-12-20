<?php
    $conn = mysqli_connect("localhost", "root", "", "group9");
    $conn->query("SET NAMES UTF8");
	$tp_id = $_POST["id"];
	$tp_title = $_POST["title"];
    $tp_des = $_POST["des"];
    $tp_isd = $_POST["date"];
	$tp_pub = $_POST["pub"];
    $tp_au = $_POST["author"];
	$tp_su = $_POST["subject"];
	$tp_lg = $_POST["lang"];
    $tp_type = $_POST["type"];
	$tp_ex = $_POST["extent"];
	$tp_file_dire = $_POST["file"];
	

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "UPDATE thesis_proposals SET 
    title='" . $tp_title. "', 
    description='" . $tp_des . "', 
    issued_date='" . $tp_isd. "', 
	 publisher='" . $tp_pub . "',
	 author='" . $tp_au . "',
	 subject='" .  $tp_su . "',
	 language='" . $tp_lg . "',
	 extent='" . $tp_ex . "',
	   type='" . $tp_type . "', 
    file_directory='" . $tp_file_dire  . "' 
    WHERE tp_id=" . $tp_id;

    if (mysqli_query($conn, $sql)) {
$v_cid = $_POST["cid"];
        $sql2 = "UPDATE collections SET
        title='" . $tp_title. "' 
        WHERE cid=" . $v_cid;
        mysqli_query($conn, $sql2);
		header('Location:record-manage.php?mss=1');    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }

    mysqli_close($conn);
?>