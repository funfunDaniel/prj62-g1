<?php
session_start();
include "../../config.php";
$stdid = $_SESSION['id'];


$return_arr = array();

$sql = "SELECT * FROM student WHERE id = ".$stdid."";
$query = mysqli_query($conn,$sql);
$result = mysqli_fetch_array($query,MYSQLI_ASSOC);
mysqli_close($conn);
echo json_encode($result);
?>