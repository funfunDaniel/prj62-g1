<?php
    session_start();
    
    include 'config.php';

    $type = $_POST["acttype"];
    $name = $_POST["actname"];
    $date = $_POST["actdate"];
    $detail = $_POST["actdetail"];
    $timestamp = date("Y/m/d h:i a");
    
    if(!empty( $_FILES['actfile']['name'] ) && !empty($_FILES['actpic']['name'])) {
        $file = $_FILES['actfile']['name'];
        $pic = $_FILES['actpic']['name'];
    }elseif(!empty( $_FILES['actfile']['name'] ) && empty($_FILES['actpic']['name'])){
        $file = $_FILES['actfile']['name'];
        $pic = null;
        
    }elseif(empty( $_FILES['actfile']['name'] ) && !empty($_FILES['actpic']['name'])){
        $file = null;
        $pic = $_FILES['actpic']['name'];
    }else {
        $file = null;
        $pic = null;
    }
    move_uploaded_file($_FILES['actfile']['tmp_name'],"C:/xampp/htdocs/prj62_g1/it-website/import-files/files/" . $file );
    move_uploaded_file($_FILES['actpic']['tmp_name'],"C:/xampp/htdocs/prj62_g1/it-website/import-files/images/" . $pic );
    
    // move_uploaded_file($_FILES['actfile']['tmp_name'],"../import-files/files/" . $file );
    // move_uploaded_file($_FILES['actpic']['tmp_name'],"../import-files/images/" . $pic );
    
    $sql = "INSERT INTO `activity_new`(`name`, `date`, `detail`, `file`, `image`, `timestamp`, `prof_id`, `dep_id`) 
    VALUES ('".$name."','".$date."','".$detail."','".$file."','".$pic."','".$timestamp."','".$_SESSION['id']."','".$type."')";
    if(mysqli_query($conn,$sql))
        {
            $sql_select_id = 'SELECT `id` FROM `activity_new` WHERE `name` = "'.$name.'"';
            $result = mysqli_query($conn,$sql_select_id);
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result))
                {
                    echo "<script>alert('เพิ่มกิจกรรมสำเร็จ เข้าสู่ขั้นตอนการเพิ่มทักษะ');
                      window.location.href='prof-weight-skill.php?actid=".$row['id']."'</script>";
                }       
            }
        }
        else
        {
            echo "<script>alert('เพิ่มกิจกรรมไม่สำเร็จ กรุณาตรวจสอบข้อมูลอีกครั้ง');</script>";
        }

    $conn->close();
?>
