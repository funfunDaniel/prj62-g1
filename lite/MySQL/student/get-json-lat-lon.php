<?php
session_start();
include "../../config.php";
$stdid = $_SESSION['id'];


if(isset($_GET['id'])){
    // print_r($_GET['id']);\
    $query = "SELECT location_lat As lat, location_long As lon
    FROM portfolio P
    WHERE status_id = 1 AND std_id = ".$stdid." AND act_id = ".$_GET['id']."";
    $result = mysqli_query($conn,$query);
    
    while($row = mysqli_fetch_array($result)){
        
        $lat = $row['lat'];
        $lon = $row['lon'];
    
        echo $lat .','. $lon;
    }

}



// $return_arr = array();

// $query = "SELECT P.id AS id, A.name AS actname, A.id AS actid, A.date AS actdate, P.location_lat As lat, P.location_long As lon
// FROM portfolio P 
// LEFT JOIN activity A ON P.act_id = A.id 
// WHERE P.status_id = 1 AND P.std_id = ".$stdid."";

// // echo '<script>console.log("JSON")</script>';

// $result = mysqli_query($conn,$query);

// while($row = mysqli_fetch_array($result)){
    
//     $id = $row['id'];
//     $date = $row['actdate'];
//     $name = $row['actname'];
//     $actid = $row['actid'];
//     $lat = $row['lat'];
//     $lon = $row['lon'];

//     $return_arr[] = array("id" => $id,
//                     "date" => $date,
//                     "name" => $name,
//                     "actid" => $actid,
//                     "lat" => $lat,
//                     "lon" => $lon) ;
// }

// // Encoding array in JSON format
// echo json_encode($return_arr);
?>