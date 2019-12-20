<?php
session_start();
include "../../config.php";
$id = $_SESSION['id'];
header('Content-Type: application/json');

if(!empty($_POST) )
{
    // $fname = mysqli_real_escape_string($conn, $_POST["fname"]);
    // $lname = mysqli_real_escape_string($conn, $_POST["lname"]);
    // $address = mysqli_real_escape_string($conn, $_POST["addr"]);
    // $phone = mysqli_real_escape_string($conn, $_POST["phone"]);
    // $email = mysqli_real_escape_string($conn, $_POST["mail"]);
    
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $address = $_POST["addr"];
    $phone = $_POST["phone"];
    $email = $_POST["mail"];


    if(!empty($_FILES['actpic']['name'])){
        $pic = $_FILES['actpic']['name'];
        move_uploaded_file($_FILES['actpic']['tmp_name'],"C:/xampp/htdocs/prj62_g1/it-website/import-files/user-img/" . $pic );
        $sql = "UPDATE `student` SET `firstname`='".$fname."',`lastname`='".$lname."',`address`='".$address."',`telephone`='".$phone."',`email`='".$email."',`image`='".$pic."'
        WHERE `id`=".$id."";

    }else{
        $sql = "UPDATE `student` SET `firstname`='".$fname."',`lastname`='".$lname."',`address`='".$address."',`telephone`='".$phone."',`email`='".$email."'
        WHERE `id`=".$id."";
    }

    if(mysqli_query($conn,$sql))
        {
            $output = json_encode(array('status' => '1','message'=> 'Record add successfully'));
        }
       else
       {
           $output = json_encode(array('status' => '0','message'=> 'Error insert data!'));
        }
        
}

echo $output;

?>