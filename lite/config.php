<?php


    // $db_hostname = "it2.sut.ac.th";
    // $db_username = "project61_g5";
    // $db_password = "925457";
    // $db_name = "project61_g5";

    
    $db_hostname = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_name = "project61_g5";

    $conn = mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
	mysqli_query($conn,"SET NAMES UTF8");
	mysqli_query($conn,"SET character_set_results = 'utf8'");

    ?>