<?php
session_start();
include "../../config.php";
$id = $_SESSION['id'];
header('Content-Type: application/json');

if(!empty($_POST) )
{
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $fname_en = $_POST["fname_en"];
    $lname_en = $_POST["lname_en"];
    $address = $_POST["addr"];
    $phone = $_POST["phone"];
    $email = $_POST["mail"];


    if(!empty($_FILES['actpic']['name'])){
        $pic = $_FILES['actpic']['name'];
        move_uploaded_file($_FILES['actpic']['tmp_name'],"C:/xampp/htdocs/prj62_g1/it-website/import-files/user-img/" . $pic );
        // move_uploaded_file($_FILES['actpic']['tmp_name'],"../../../import-files/user-img/" . $pic );
        $sql = "UPDATE `student` SET `firstname`='".$fname."',`lastname`='".$lname."',`address`='".$address."',`telephone`='".$phone."',`email`='".$email."',`image`='".$pic."'
        WHERE `id`=".$id."";

    }else{
        $sql = "UPDATE `student` SET `firstname`='".$fname."',`lastname`='".$lname."',`address`='".$address."',`telephone`='".$phone."',`email`='".$email."',`firstname_en`='".$fname_en."',`lastname_en`='".$lname_en."'
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