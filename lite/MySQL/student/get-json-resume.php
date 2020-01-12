<?php
include "../../config.php";


if(isset($_POST["stdid"])) {
    $stdid = $_POST["stdid"];
} else {
    session_start();
    $stdid = $_SESSION['id'];
}
$query = "SELECT S.firstname AS firstname,S.lastname AS lastname,S.firstname_EN AS firstname_EN,S.lastname_EN AS lastname_EN,S.address AS address,S.telephone AS telephone,S.email AS email,S.image AS image,
A.id AS actid, A.date AS actdate, A.name AS actname, D.id AS depid, D.department AS depname, D.affiliation AS affiliation
FROM portfolio P  
LEFT JOIN student S ON P.std_id = S.id 
LEFT JOIN activity_new A ON P.act_id = A.id
LEFT JOIN department D ON A.dep_id = D.id
WHERE P.status_id = 1 AND P.std_id = '".$stdid."'";


$return_arr = array();
$result = mysqli_query($conn,$query);

while($row = mysqli_fetch_array($result)){
    $name = $row['firstname'] . " " . $row['lastname'];
    $name_EN = $row['firstname_EN'] . " " . $row['lastname_EN'];
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

    $return_arr[] = array(
            "name" => $name,
            "name_en" => $name_EN,
            "address" => $address,
            "telephone" => $telephone,
            "email" => $email,
            "image" => $image,
            "actid" => $actid,
            "actdate" => $actdate,
            "actname" => $actname,
            "depid" => $depid,
            "depname" => $depname,
            "affiliation" => $affiliation
                );
}

// Encoding array in JSON format
echo json_encode($return_arr);
?>