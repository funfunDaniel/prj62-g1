<?php
include "../../config.php";

if(isset($_POST['stdid'])){
    $sql = "SELECT * FROM student WHERE id = ".$_POST['stdid']."";
}
else{
    session_start();
    $stdid = $_SESSION['id'];
    $sql = "SELECT * FROM student WHERE id = ".$stdid."";
}


$return_arr = array();

$query = mysqli_query($conn,$sql);
$result = mysqli_fetch_array($query,MYSQLI_ASSOC);
mysqli_close($conn);
echo json_encode($result);
?>