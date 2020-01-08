<?php

session_start();
include "../../config.php";
$stdid = $_SESSION['id'];

$return_arr = array();

$query = "SELECT P.id AS id,P.timestamp AS regdate, A.name AS actname, ST.name AS statusname
FROM portfolio AS P 
LEFT JOIN activity_new AS A ON P.act_id = A.id 
LEFT JOIN portfolio_status AS ST ON P.status_id = ST.id 
WHERE P.std_id = '".$stdid."'
ORDER BY P.id";

$result = mysqli_query($conn,$query);

while($row = mysqli_fetch_array($result)){
    
    $id = $row['id'];
    $date = $row['regdate'];
    $actname = $row['actname'];
    $status = $row['statusname'];

    $return_arr[] = array("id" => $id,
                    "date" => $date,
                    "actname" => $actname,
                    "status" => $status);
}

// Encoding array in JSON format
echo json_encode($return_arr);
?>