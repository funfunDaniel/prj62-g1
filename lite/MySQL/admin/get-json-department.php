<?php
session_start();
include "../../config.php";


$return_arr = array();

$query = "SELECT * FROM `department` ORDER BY `id` DESC";

$result = mysqli_query($conn,$query);

while($row = mysqli_fetch_array($result)){
    $id = $row['id'];
    $dep = $row['department'];
    $aff = $row['affiliation'];

    $return_arr[] = array("id" => $id,
                    "dep" => $dep,
                    "aff" => $aff);
}
// Encoding array in JSON format
echo json_encode($return_arr);
?>