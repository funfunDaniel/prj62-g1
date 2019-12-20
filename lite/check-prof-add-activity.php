<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">
</head>
<body>
<?php
    session_start();
    // header('Content-Type: application/json');
    
    include 'config.php';

    $type = $_POST["acttype"];
    $name = $_POST["actname"];
    $date = $_POST["actdate"];
    $detail = $_POST["actdetail"];
    $skill = $_POST["skill-list"];
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

    
    $sql = "INSERT INTO `activity`(`type`, `name`, `date`, `detail`, `file`, `image`, `timestamp`, `FK_prof_id`, `skill_id`) 
    VALUES ('".$type."','".$name."','".$date."','".$detail."','".$file."','".$pic."','".$timestamp."','".$_SESSION['id']."','".$skill."')";
	if(mysqli_query($conn,$sql)){
        // echo 1;
        // echo json_encode(array('status' => 1,'message'=> 'Record add successfully'), JSON_FORCE_OBJECT);
        echo '<script>
        Swal.fire({
            title: "บันทึกสำเร็จ",
            icon: "success",
            showCancelButton: false,
            confirmButtonColor: "#3085d6",
            confirmButtonText: "OK"
          }).then((result) => {
            if (result.value) {
                window.location.href="prof-add-activity-form.php"
            }
          })
        </script>';
	}else{
        // echo 0;
        // echo json_encode(array('status' => 0,'message'=> 'Error insert data!'), JSON_FORCE_OBJECT);
        echo '<script>
        Swal.fire({
            icon: "error",
            title: "บันทึกไม่สำเร็จ",
            text: "เกิดข้อผิดพลาด : '.$conn->error.'",
        })
        window.location.href="prof-add-activity-form.php"
        </script>';
		// echo "Execution Error! :". $connection->error;
	} 
    
    
    
    $conn->close();

?>
    
</body>
</html>
