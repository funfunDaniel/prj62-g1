<?php
session_start();
    
include 'config.php';

    $std_id = $_SESSION["id"];
    $timestamp = date("Y/m/d h:i a");


    $type = $_POST['activitytype'];
    $name = $_POST['activityname'];
    $datail = $_POST['detail'];
    $lat = $_POST['location_lat'];
    $long = $_POST['location_long'];

    // echo '<script>console.log("'.$_POST['activitytype'].'")</script>';
    // echo '<script>console.log("'.$_POST['activityname'].'")</script>';
    // echo '<script>console.log("'.$_POST['detail'].'")</script>';
    // echo '<script>console.log("'.$_POST['location_lat'].'")</script>';
    // echo '<script>console.log("'.$_POST['location_long'].'")</script>';

    if(!empty($_FILES['image']['name'])){
        $picture = $_FILES['image']['name'];
        // echo 'have image';
    }else{
        $picture = null;
        // echo 'Don t have image';
    }
    move_uploaded_file($_FILES['image']['tmp_name'],"C:/xampp/htdocs/prj62_g1/it-website/import-files/images/" . $picture );

    $sql = "INSERT INTO `portfolio`(`image`, `description`, `location_lat`, `location_long`, `timestamp`, `status_id`, `std_id`, `act_id`) 
    VALUES ('".$picture."','".$datail."','".$lat."','".$long."','".$timestamp."',2,'".$std_id."','".$name."')";

    if(mysqli_query($conn,$sql)){
        echo '<script>
        alert("ส่งคำขอเพิ่มกิจกรรมสำเร็จ ตรวจสอบคำร้องได้ที่เมนู \'ตรวจสอบคำร้อง]\'")
        window.location.href="index-it.php"
        </script>';
    }else{
        // echo $mem_id;
        echo '<script>alert("เกิดข้อผิดพลาด : '.$conn->error.'")</script>';
        // echo "Execution Error! :". $connection->error;
    } 
    $conn->close();
?>