<?php
    session_start();
    
    include 'config.php';
    // header('Content-Type: application/json');

    $type = $_POST["acttype"];
    $name = $_POST["actname"];
    $date = $_POST["actdate"];
    $detail = $_POST["actdetail"];
    // $skill = $_POST["skill-list"];
    $timestamp = date("Y/m/d h:i a");
    // $file = $_FILES['actfile']['name'];
    // $pic = $_FILES['actpic']['name'];

    
    // echo '<script>console.log("'.$type.'")</script>';
    // echo '<script>console.log("'.$name.'")</script>';
    // echo '<script>console.log("'.$date.'")</script>';
    // echo '<script>console.log("'.$detail.'")</script>';
    
    if(!empty( $_FILES['actfile']['name'] ) && !empty($_FILES['actpic']['name'])) {
        $file = $_FILES['actfile']['name'];
        $pic = $_FILES['actpic']['name'];
        
        // echo "Have 2 file";
        
    }elseif(!empty( $_FILES['actfile']['name'] ) && empty($_FILES['actpic']['name'])){
        $file = $_FILES['actfile']['name'];
        $pic = null;
        // echo "Have file";
        
    }elseif(empty( $_FILES['actfile']['name'] ) && !empty($_FILES['actpic']['name'])){
        $file = null;
        $pic = $_FILES['actpic']['name'];
        // echo "Have pic file";
    }else {
        
        $file = null;
        $pic = null;
        // echo "Don't have file";
     
    }
    move_uploaded_file($_FILES['actfile']['tmp_name'],"C:/xampp/htdocs/prj62_g1/it-website/import-files/files/" . $file );
    move_uploaded_file($_FILES['actpic']['tmp_name'],"C:/xampp/htdocs/prj62_g1/it-website/import-files/images/" . $pic );

    
    $sql = "INSERT INTO `activity_new`(`name`, `date`, `detail`, `file`, `image`, `timestamp`, `prof_id`, `dep_id`) 
    VALUES ('".$name."','".$date."','".$detail."','".$file."','".$pic."','".$timestamp."','".$_SESSION['id']."','".$type."')";
    if(mysqli_query($conn,$sql))
        {
            $output = json_encode(array('status' => '1','message'=> 'Record add successfully'));
        }
        else
        {
            $output = json_encode(array('status' => '0','message'=> 'Error insert data!'));
        }

    $conn->close();
    echo '<script>console.log('. $output.')</script>';
    echo $output;

?>
