<?php
    include "../../config.php";
    if(isset($_POST)){
        $actid = $_POST['hidden_actid'];
        for($count = 0; $count<count($_POST['hidden_skill']); $count++)
        {
            
            $data = array(
                ':act_id' => $actid,
                ':skill_id' => $_POST['hidden_skill'][$count],
                ':weight' => 1
            );
            
        $matstring = implode(",",$data);
        $sql = "INSERT INTO `activity_weight_skill`(`act_id`, `skill_id`, `weight`) 
        VALUES (".$matstring.")";
        
        if(mysqli_query($conn,$sql))
        {
            echo "success";
        }
       else
       {
        die(header("HTTP/1.0 404 Not Found")); 
           
       }
        }
    
    }

        
?>