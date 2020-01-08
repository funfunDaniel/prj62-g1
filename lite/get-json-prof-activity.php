<?php

include "config.php";

$return_arr = array();

$query = "SELECT P.id AS id,P.timestamp AS regdate, S.firstname AS firstname, S.lastname AS lastname, S.std_id AS stdid, A.name AS actname, ST.name AS statusname
FROM portfolio AS P 
LEFT JOIN student AS S ON P.std_id = S.id
LEFT JOIN activity_new AS A ON P.act_id = A.id 
LEFT JOIN portfolio_status AS ST ON P.status_id = ST.id 
ORDER BY P.id";

$result = mysqli_query($conn,$query);

while($row = mysqli_fetch_array($result)){
    
    $id = $row['id'];
    $date = $row['regdate'];
    $stdid = $row['stdid'];
    $name = $row['firstname'] . " " . $row['lastname'];
    $actname = $row['actname'];
    $status = $row['statusname'];

    $return_arr[] = array("id" => $id,
                    "date" => $date,
                    "stdid" => $stdid,
                    "name" => $name,
                    "actname" => $actname,
                    "status" => $status);
}

// Encoding array in JSON format
echo json_encode($return_arr);
?>