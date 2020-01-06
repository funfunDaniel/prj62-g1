<?php
session_start();
include "../../config.php";
$stdid = $_SESSION['id'];


if(isset($_GET['id'])){
    // print_r($_GET['id']);\
    
    $query = "SELECT P.image As picture
    FROM portfolio P 
    WHERE status_id = 1 AND std_id = ".$stdid." AND act_id = ".$_GET['id']."";
    $result = mysqli_query($conn,$query);

    while($row = mysqli_fetch_array($result)){
        
        $picture = $row['picture'];
    
        echo $picture;
    }

}

?>