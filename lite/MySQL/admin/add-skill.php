<?php
    include "../../config.php";
    header('Content-Type: application/json');

    $skill = mysqli_real_escape_string($conn, $_POST['skill']);

    $sql = "INSERT INTO `resume_skill`(`name`) VALUES ('".$skill."')";
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