<?php
session_start();
include "../../config.php";
$stdid = $_SESSION['id'];


$return_arr = array();

$query = "SELECT S.firstname AS firstname,S.lastname AS lastname,S.address AS address,S.telephone AS telephone,S.email AS email,S.image AS image,
A.name AS actname,A.date AS actdate,A.type AS acttype,SK.name AS skillname
FROM portfolio P  
LEFT JOIN student S ON P.std_id = S.id 
LEFT JOIN activity A ON P.act_id = A.id
JOIN resume_skill SK ON A.skill_id = SK.id
WHERE P.status_id = 1 AND P.std_id = ".$stdid."";

// echo '<script>console.log("JSON")</script>';

$result = mysqli_query($conn,$query);

while($row = mysqli_fetch_array($result)){

    $name = $row['firstname'] . " " . $row['lastname'];
    $address = $row['address'];
    $telephone = $row['telephone'];
    $email = $row['email'];
    $image = $row['image'];
    $actname = $row['actname'];
    $actdate = $row['actdate'];
    $acttype = $row['acttype'];
    $skillname = $row['skillname'];

    $return_arr[] = array(
                    "name" => $name,
                    "address" => $address,
                    "telephone" => $telephone,
                    "email" => $email,
                    "image" => $image,
                    "actname" => $actname,
                    "actdate" => $actdate,
                    "acttype" => $acttype,
                    "skillname" => $skillname);
}

// Encoding array in JSON format
echo json_encode($return_arr);
?>