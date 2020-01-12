<?php
session_start();
include "../../config.php";
$profid = $_SESSION['id'];

$return_arr = array();

if(isset($_POST)){
    $actid = $_POST["actid"];
}

$query = "SELECT S.std_id AS std_id,S.firstname AS firstname, S.lastname AS lastname
FROM student S
LEFT JOIN portfolio P ON S.id = P.std_id
WHERE P.act_id = " . $actid . " AND P.status_id = 1";

$result = mysqli_query($conn,$query);

while($row = mysqli_fetch_array($result)){
    
    $stdid = $row['std_id'];
    $firstname = $row['firstname'];
    $lastname = $row['lastname'];

    $return_arr[] = array(
                    "stdid" => $stdid,
                    "firstname" => $firstname,
                    "lastname" => $lastname,
                );
}

// Encoding array in JSON format
echo json_encode($return_arr);
?>