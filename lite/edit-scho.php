<?php
    
	$sc_id = $_POST["id"];
	$scho_title = $_POST["title"];
	$scho_issued_date = $_POST["date"];
    $scho_description = $_POST["description"];
    $scho_budget = $_POST["budget"];
	$scho_scholar = $_POST["scholar"];
    $scho_advisor = $_POST["advisor"];
    $scho_program = $_POST["program"];
    $scho_degree = $_POST["degree"];
    $scho_type = $_POST["type"];

        include 'config.php';    

    $conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $conn->query("SET NAMES UTF8");
    

    $sql = "UPDATE scholarships SET 
    title='" . $scho_title. "', 
    issued_date='" . $scho_issued_date. "', 
	description='" . $scho_description . "',
	budget='" . $scho_budget . "',
	scholar='" . $scho_scholar . "',
	advisor='" .  $scho_advisor . "', 
	program='" . $scho_program . "', 
    degree='" . $scho_degree . "', 
    type='" . $scho_type  . "'
    WHERE sc_id = ". $sc_id;

    if (mysqli_query($conn, $sql)) {
        $v_cid = $_POST["cid"];
        $sql2 = "UPDATE collections SET
        title='" . $scho_title . "' 
        WHERE cid=" . $v_cid;
        mysqli_query($conn, $sql2);
		header('Location:record-manage.php?mss=1');
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }

    mysqli_close($conn);
?>