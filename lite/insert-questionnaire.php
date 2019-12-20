<?php

    $v_col1 = $_POST["ans1"];
    $v_col2 = $_POST["ans2"];
	$v_col3 = $_POST["ans3"];
	$v_col4 = $_POST["ans4"];
	$v_col5 = $_POST["ans5"];
	$v_col6 = $_POST["ans6"];
	$v_col7 = $_POST["ans7"];
	$v_col8 = $_POST["ans8"];
	$v_col9 = $_POST["ans9"];
	$v_col10 = $_POST["ans10"];
	$v_sex = $_POST["sex"];
	$v_pro = $_POST["prosition"];
    $dt = date('Y-m-d');
    
    include 'config.php';
                    
    $conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);
                
    if (!$conn) {                        
        die("Connection failed: " . mysqli_connect_error());                    
    }
                                    
    $conn->query("SET NAMES UTF8");

    $sql = "INSERT INTO questionnaire (col1,col2,col3,col4,col5,col6,col7,col8,col9,col10,sex,position,cur_date)
    VALUES('" . $v_col1 ."','" . $v_col2 . "','". $v_col3. "','" .$v_col4. "','" . $v_col5 . "','" .$v_col6 . "','" . $v_col7 . "','" . $v_col8 . "','" . $v_col9 . "','" . $v_col10 . "','" . $v_sex . "','" . $v_pro . "','".$dt."')";
        
    if (mysqli_multi_query($conn, $sql)) {
        header('Location:index.php');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
?>