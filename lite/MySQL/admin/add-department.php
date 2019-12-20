<?php
    include "../../config.php";
    header('Content-Type: application/json');

    $dep = mysqli_real_escape_string($conn, $_POST['dep']);
    $aff = mysqli_real_escape_string($conn, $_POST['aff']);

    $sql = "INSERT INTO `department`(`department`, `affiliation`) VALUES ('".$dep."','".$aff."')";
    if(mysqli_query($conn,$sql))
        {
            // $output = 1;
            $output = json_encode(array('status' => '1','message'=> 'Record add successfully'));
        }
       else
       {
           $output = json_encode(array('status' => '0','message'=> 'Error insert data!'));
       }
        // echo '<script>console.log("'.$skill.'")</script>';
        // $output = 1;
    
    echo $output;
?>