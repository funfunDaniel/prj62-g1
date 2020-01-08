<html>

<head>
</head>

<body>
<?php
if(isset($_GET['q'])){
    $q = $_GET['q'];
    
}else{
    
    $q = 1;
}
// $q = $_POST["q"];
// echo "<script>console.log(".$q.")</script>";
include('config.php');


$sql = "SELECT * FROM `activity_new` WHERE `dep_id` = '".$q."'";
// $sql = "SELECT * FROM `activity` WHERE `type` = '".$q."'";
$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result) > 0){
    echo '
    <select class="form-control " name="activityname" style="width: 100%;height: 40px;margin-top: 5px;margin-bottom: 5px; border-color:#2E9AFE;"> ';
    while($row = mysqli_fetch_array($result)){
        echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
    }
    
    echo '</select>';
}else{
    echo '
    <select class="form-control " name="activityname" style="width: 100%;height: 40px;margin-top: 5px;margin-bottom: 5px; border-color:#2E9AFE;">
        <option value="empty">ไม่มีกิจกรรม</option>
    </select>';
}


mysqli_close($conn);
?>
</body>

</html>