<?php
    include "../../config.php";
    // header('Content-Type: application/json');
    if(isset($_POST["item_skill"]))
    {
        print_r($_POST["item_skill"]);
        $item_skill = $_POST["item_skill"];
        $item_weight = $_POST["item_weight"];
        $query = "";
        for($count = 0; $count<count($item_skill); $count++)
        {
            $item_skill_clean = mysqli_real_escape_string($conn, $item_skill[$count]);

        }
    }

    // $skill = mysqli_real_escape_string($conn, $_POST['skill']);

    // $sql = "INSERT INTO `resume_skill`(`name`) VALUES ('".$skill."')";
    // if(mysqli_query($conn,$sql))
    //     {
    //         // $output = 1;
    //         $output = json_encode(array('status' => '1','message'=> 'Record add successfully'));
    //     }
    //    else
    //    {
    //        $output = json_encode(array('status' => '0','message'=> 'Error insert data!'));
    //    }
    //     // echo '<script>console.log("'.$skill.'")</script>';
    //     // $output = 1;
    
    // echo $output;
?>