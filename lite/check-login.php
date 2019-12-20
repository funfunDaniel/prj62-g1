<?php
    session_start();
    
    include 'config.php';

    // $conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);

    // if (!$conn) {
    //     die("Connection failed: " . mysqli_connect_error());
    // }

    // $conn->query("SET NAMES UTF8");

    
    $type = $_POST["usertype"];
    $user = $_POST["username"];
    $pass = $_POST["password"];
    // $id = $_POST["id"];
    
    // echo '<script>console.log("'.$type.'")</script>';
    // echo '<script>console.log("'.$user.'")</script>';
    // echo '<script>console.log("'.$pass.'")</script>';
    // echo '<script>console.log'".$type."'</script>'
    // echo '<script>console.log'".$type."'</script>'

    if($type == 'student'){
        $sql = "SELECT * FROM student WHERE username='" . $user . "' AND password='" . $pass ."'";
        // $position = 'student';
    }elseif($type == 'professor'){
        $sql = "SELECT * FROM professor WHERE username='" . $user . "' AND password='" . $pass ."'";
        // $position = 'professor';
    }else{
        $sql = "SELECT * FROM employee WHERE username='" . $user . "' AND password='" . $pass ."'";
        // $position = 'employee';
    }
    $result = mysqli_query($conn,$sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION["id"] = $row["id"];
        $_SESSION["position"] = $type;
        // $_SESSION["name"] = $row["username"];
        $_SESSION["username"] = $row["firstname"] . ' ' .$row["lastname"] ;

        if($type != 'employee'){
            header('Location:index-it.php');
        }else{
            header('Location:admin-index.php');
        }
        
        // header('Location:index-it.php');
	} else {
        if($type != 'employee'){
            echo '<script>alert("ชื่อผู้ใช้งานหรือรหัสผ่านไม่ถูกต้อง กรุณาลองอีกครั้ง!!!")
            window.location.href="login.php"</script>';
        }else{
            echo '<script>alert("ชื่อผู้ใช้งานหรือรหัสผ่านไม่ถูกต้อง กรุณาลองอีกครั้ง!!!")
            window.location.href="admin-login.php"</script>';
        }
    }
    // header('Location:index-it.php');
    
    $conn->close();

?>