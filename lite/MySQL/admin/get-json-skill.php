<?php
session_start();
include "../../config.php";


$return_arr = array();

$query = "SELECT * FROM `resume_skill` ORDER by id DESC";

$result = mysqli_query($conn,$query);

while($row = mysqli_fetch_array($result)){
    $id = $row['id'];
    $dep = $row['name'];
    $return_arr[] = array("id" => $id,
                    "name" => $dep);
}
// Encoding array in JSON format
echo json_encode($return_arr);
?>