<div class="card card-top">
        
		<div class="card-body">
                  <h2 class="card-title text-center">ผลงานนักศึกษาระดับปริญญาตรี</h2>
                  <h4 class="card-subtitle text-center">ผลงานในหลักสูตร</h4>
         </div>  
    <hr/>

 <form name="searchForm" action="search-maj-wor-form.php" method="POST">
    <button class="searchBtn" type="submit" name="searchBtn" style="float: right">
        <i class="fa fa-search"></i>
    </button>
    <div style="overflow: hidden; padding-right: 5px;">
        <input list="search" class="searchBox" name="searchString" onkeyup="showAll(this.value)" style="width: 110%;" placeholder="ค้นหา..." />
        <datalist id="search">
		</datalist>
    </div>​
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
$str="รอตรวจสอบ";
$str1="ไม่ผ่าน";
error_reporting(~E_NOTICE);
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

$sql = "SELECT * FROM major_works WHERE (status !='$str' and status !='$str1') and title LIKE '%" . $c . "%' limit {$start} , {$perpage}";

$sqlCou = "SELECT COUNT(mw_id) AS 'num' FROM major_works " . $cond;
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
        echo '<tr>        
        <td>
            <p class="title-name">
                <a href="index-it.php?det=mw&id=' . $row["mw_id"] . '">
                    ' . $row["title"] . '
                </a>
            </p>
            <p> '. $row["major"] . '
                <br/>วันที่เผยแพร่: '. $row["issued_date"] . '
            </p>
            <p style="text-align:right;margin-right:20px">
                <a href="index-it.php?det=mw&id=' . $row["mw_id"] . '">
                    <button class="w3-button w3-khaki">เพิ่มเติม <i class="fa fa-angle-double-right"></i>
                    </button>
                </a>
            </p>
        </td>
        </tr>';
    }
}
                    ?>
        <tr>
		<div>
            <?php
                            $sql2 = "SELECT * FROM major_works " . $cond;
                            $query2 = mysqli_query($conn, $sql2);
                            $total_record = mysqli_num_rows($query2);
                            $total_page = ceil($total_record / $perpage);
                        ?>

                <nav>
                    <a href="search-maj-wor-form.php?page=1" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                    <?php for($i=1;$i<=$total_page;$i++){ ?> &nbsp;
                    <a href="search-maj-wor-form.php?page=<?php echo $i; ?>">
                        <?php echo $i; ?>
                    </a>
                    <?php } ?> &nbsp;
                    <a href="search-maj-wor-form.php?page=<?php echo $total_page;?>" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </nav>
        </div>
                  

    </table>
    <center>
        <br/>
        <div>
            <?php
                            $sql2 = "SELECT * FROM major_works";
                            $query2 = mysqli_query($conn, $sql2);
                            $total_record = mysqli_num_rows($query2);
                            $total_page = ceil($total_record / $perpage);
                        ?>

                <nav>
                    <a href="index-it.php?view=mw&page=1" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                    <?php for($i=1;$i<=$total_page;$i++){ ?> &nbsp;

                    <a href="index-it.php?view=mw&page=<?php echo $i; ?>">
                        <?php echo $i; ?>
                    </a>
                    <?php } ?> &nbsp;
                    <a href="index-it.php?view=mw&page=<?php echo $total_page;?>" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </nav>
        </div>
    </center>
</div>