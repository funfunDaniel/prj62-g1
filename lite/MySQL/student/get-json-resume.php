<?php
include "../../config.php";


if(isset($_POST["stdid"])) {
    $stdid = $_POST["stdid"];
} else {
    session_start();
    $stdid = $_SESSION['id'];
}
$query = "SELECT S.firstname AS firstname,S.lastname AS lastname,S.address AS address,S.telephone AS telephone,S.email AS email,S.image AS image,
A.id AS actid, A.date AS actdate, A.name AS actname, D.id AS depid, D.department AS depname, D.affiliation AS affiliation, SS.name AS skillname, AW.weight AS skillweight
FROM portfolio P  
LEFT JOIN student S ON P.std_id = S.id 
LEFT JOIN activity_new A ON P.act_id = A.id
LEFT JOIN department D ON A.dep_id = D.id
LEFT JOIN activity_weight_skill AW ON A.id = AW.act_id
LEFT JOIN resume_skill SS ON AW.skill_id = SS.id
WHERE P.status_id = 1 AND P.std_id = '".$stdid."'";


$return_arr = array();




// echo '<script>console.log("JSON")</script>';

$result = mysqli_query($conn,$query);

while($row = mysqli_fetch_array($result)){
    $name = $row['firstname'] . " " . $row['lastname'];
    $address = $row['address'];
    $telephone = $row['telephone'];
    $email = $row['email'];
    $image = $row['image'];
    $actid = $row['actid'];
    $actdate = $row['actdate'];
    $actname = $row['actname'];
    $depid = $row['depid'];
    $depname = $row['depname'];
    $affiliation = $row['affiliation'];
    $skillname = $row['skillname'];

    $return_arr[] = array(
            "name" => $name,
            "address" => $address,
            "telephone" => $telephone,
            "email" => $email,
            "image" => $image,
            "actid" => $actid,
            "actdate" => $actdate,
            "actname" => $actname,
            "depid" => $depid,
            "depname" => $depname,
            "affiliation" => $affiliation,
            "skillname" => $skillname
                );
}

// Encoding array in JSON format
echo json_encode($return_arr);
?>