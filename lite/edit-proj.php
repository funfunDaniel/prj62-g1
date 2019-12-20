<?php
    
	$v_id = $_POST["id"];
	$v_title = $_POST["title"];
    $v_des = $_POST["des"];
    $v_ptype = $_POST["protype"];
    $v_subject = $_POST["subject"];
    $v_type = $_POST["type"];
	$v_file_dire = $_POST["file"];
	$v_date = $_POST["date"];
	$v_sdate = $_POST["prostarsday"];
	$v_leader = $_POST["proleader"];
	$v_budget = $_POST["budget"];
	$v_unit = $_POST["unit"];

        include 'config.php';    

    $conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $conn->query("SET NAMES UTF8");

    $sql = "UPDATE Projects SET 
    title='" . $v_title. "', 
    description='" . $v_des . "', 
    issued_date='" . $v_date. "', 
	project_start_date='" .  $v_sdate . "',
	project_leader='" .  $v_leader . "',  	
	budget='" .  $v_budget . "',
	unit='" .  $v_unit. "',
	project_type='" .  $v_ptype. "',
	subject='" .  $v_subject . "', 
	type='" . $v_type . "', 
    file_directory='" . $v_file_dire  . "' 
    WHERE p_id=" . $v_id;

    if (mysqli_query($conn, $sql)) {
        $v_cid = $_POST["cid"];
        $sql2 = "UPDATE collections SET
        title='" . $v_title. "' 
        WHERE cid=" . $v_cid;
        mysqli_query($conn, $sql2);
		header('Location:record-manage.php?mss=1');
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }

    mysqli_close($conn);
?>