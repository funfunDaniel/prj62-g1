<?php
$action = $_GET['action'];
include('config.php');


if($action == "updatesome"){
    $status = $_GET['status'];
    $id = $_GET['id'];
    $sql = "UPDATE `portfolio` SET `status_id` = '".$status."' WHERE `portfolio`.`id` = ". $id .";";
    if(mysqli_query($conn,$sql)){
        echo 'คุณเปลี่ยนแปลงสถานะกิจกรรมสำเร็จ';
    }else{
        echo 'คุณเปลี่ยนแปลงสถานะกิจกรรมไม่สำเร็จ';
    }
}else{
    $sql = "UPDATE `portfolio` SET `status_id`=1 WHERE `status_id`=2";
    if(mysqli_query($conn,$sql)){
        echo 'คุณเปลี่ยนแปลงสถานะกิจกรรมทั้งหมดสำเร็จ';
    }else{
        echo 'คุณเปลี่ยนแปลงสถานะกิจกรรมทั้งหมดไม่สำเร็จ';
    }
}
mysqli_close($conn);
?>