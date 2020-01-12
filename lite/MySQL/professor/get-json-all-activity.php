<?php
session_start();
include "../../config.php";
$profid = $_SESSION['id'];

$return_arr = array();

$query = "SELECT A.id AS id, A.name AS name, A.date AS date, A.detail AS detail, A.image AS image,A.file AS file, A.timestamp AS timestamp, D.department AS dep, D.affiliation AS aff
FROM activity_new AS A
LEFT JOIN department AS D
ON A.dep_id = D.id  
WHERE A.prof_id=".$profid."";

$result = mysqli_query($conn,$query);

while($row = mysqli_fetch_array($result)){
    
    $actid = $row['id'];
    $actname = $row['name'];
    $actdate = $row['date'];
    $timestamp = $row['timestamp'];
    $detail = $row['detail'];
    $file = $row['file'];
    $image = $row['image'];
    $dep = $row['dep'];
    $aff = $row['aff'];

    $return_arr[] = array(
                    "actid" => $actid,
                    "actname" => $actname,
                    "actdate" => $actdate,
                    "timestamp" => $timestamp,
                    "detail" => $detail,
                    "file" => $file,
                    "image" => $image,
                    "dep" => $dep,
                    "aff" => $aff
                );
}

// Encoding array in JSON format
echo json_encode($return_arr);
?>