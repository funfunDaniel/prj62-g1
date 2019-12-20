<?php
session_start();
include "../../config.php";
$stdid = $_SESSION['id'];


$return_arr = array();

$query = "SELECT P.id AS id, A.name AS actname, A.date AS actdate 
FROM portfolio P 
LEFT JOIN activity A ON P.act_id = A.id 
WHERE P.status_id = 1 AND P.std_id = ".$stdid."";

// echo '<script>console.log("JSON")</script>';

$result = mysqli_query($conn,$query);

while($row = mysqli_fetch_array($result)){
    
    $id = $row['id'];
    $date = $row['actdate'];
    $name = $row['actname'];

    $return_arr[] = array("id" => $id,
                    "date" => $date,
                    "name" => $name);
}

// Encoding array in JSON format
echo json_encode($return_arr);
?>