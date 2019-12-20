<div class="card card-top">
<?php
    if(isset($_POST["searchBtn"])){
        $c = $_POST["searchString"];
        echo "Key word : \"" . $c . "\"";
    }
?>

    <form name="searchForm" action="index-search.php" method="POST">
        <p onclick="myFunction()" id="a" style="align:right;margin: 15px;"><i class="fa fa-chevron-down"></i></p>
        <div id="myDIV" style="display:none">
            <button class="searchBtn" name="searchBtn" style="float: right">
                <i class="fa fa-search"></i>
            </button>
            <div style="overflow: hidden; padding-right: 5px;">
                <input list="search" class="searchBox" name="searchString" onkeyup="showAll(this.value)" style="width: 100%;" placeholder="ค้นหา..." />
                <datalist id="search">
		        </datalist>
            </div>​
        </div>
    </form>

    <script>
        function myFunction() {
            var x = document.getElementById("myDIV");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }
    </script>

    <table style="width: 100%" border="1" class="w3-table-all w3-hoverable">
        


        <?php

$cond = "";

//เงื่อนไขค้นหา
if(isset($_POST["searchBtn"])){
    $c = $_POST["searchString"];
    $cond = " WHERE title LIKE '%" . $c . "%' ";
}

                    include 'config.php';

                    $perpage = 10;
                    if (isset($_GET['page'])) {
                        $page = $_GET['page'];
                    } else {
                        $page = 1;
                    }

                    $start = ($page - 1) * $perpage;

$conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$conn->query("SET NAMES UTF8");

$sql = "SELECT * FROM graduation_projects " . $cond . " limit {$start} , {$perpage}";

$sqlCou = "SELECT COUNT(gp_id) AS 'num' FROM graduation_projects " . $cond;
$resultCou = mysqli_query($conn,$sqlCou);
$row = mysqli_fetch_assoc($resultCou);
$count = $row["num"];
echo "<tr>
<td>ผลการสืบค้นทั้งหมด:
     $count
</td>
</tr>";

$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_array($result)){

        $res_id = $row["gp_id"];
        $res_type = $row["type"];

        if($res_type == "graduation_projects"){
            $val = "gp_id";
            $lin = "gp";
        
        }  

        echo '<tr>        
        <td>
            <p class="title-name">
                <a href="index.php?id=' . $res_id . '">
                    ' . $row["title"] . '
                </a>
            </p>
            <p>หัวข้อ: '. $row["subject"] . '
                <br/>วันที่เผยแพร่: '. $row["issued_date"] . '
            </p>
            <p style="text-align:right;margin-right:20px">
                <a href="index.php?id=' . $res_id . '">
                    <button class="w3-button w3-khaki">เพิ่มเติม <i class="fa fa-angle-double-right"></i>
                    </button>
                </a>
            </p>
        </td>
        </tr>';
    }
}
                    ?>

    </table>
    <center>
        <br/>
        <div>
            <?php
                            $sql2 = "SELECT * FROM collections " . $cond;
                            $query2 = mysqli_query($conn, $sql2);
                            $total_record = mysqli_num_rows($query2);
                            $total_page = ceil($total_record / $perpage);
                        ?>

                <nav>
                    <a href="index-search.php?page=1" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                    <?php for($i=1;$i<=$total_page;$i++){ ?> &nbsp;
                    <a href="index-search.php?page=<?php echo $i; ?>">
                        <?php echo $i; ?>
                    </a>
                    <?php } ?> &nbsp;
                    <a href="index-search.php?page=<?php echo $total_page;?>" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </nav>
        </div>
    </center>
</div>