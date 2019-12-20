<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head >
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="./css/stylesheet1.css">
    <link rel="stylesheet" href="./css/stylesheet2.css">
	
	<script src="showAll.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

     <?php  include('header.php') ?>

</head>

<body class="fix-header fix-sidebar card-no-border logo-center">

    <div class="preloader">
      <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>


    <?php  include('navbar.php') ?>

    <div class="card-block">
    <div class="row">      
    </div>

        <div class="row">
          <div class="col-lg-3 col-xlg-3 col-md-5">
            <div class="card">
              <img class="card-img-top" src="../images/cloud.jpg" alt="Card image cap">
                <div class="card-body little-logo text-center">                  
                    <div class="pro-img"><img src="../images/logo-header.gif" alt="user"></div>
                      <h3 class="m-b-0">สำนักวิชาเทคโนโลยีสังคม</h3> 
					  
			<!-- Left Menu Bar-->        
            <?php include 'index-left-bar.php';?>
			
                </div>
            </div>
          </div>
		  
		  <div class="col-lg-9 col-md-7">
          <div class="card">
			
        <!-- Center Content -->
        
          
                <left>
                    <div style="overflow-x:auto;">
                        <table class="w3-table-all w3-hoverable" width="100%"><h2>ค้นหาข้อมูล</h2>
		<form name="searchForm" action="record-manage.php" method="POST">
    <div style="overflow: hidden; padding-right: 5px;">
        <input list="search" class="searchBox" name="searchString" onkeyup="showAll(this.value)" style="width: 40%;" placeholder="กรุณาป้อนชื่อข้อมูล..." />
        <datalist id="search">
		</datalist>
		    &nbsp; <input type="submit" value="Search" class="btn-save" name="searchBtn" />	
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
                            <tr style="background:#2E9AFE; color:#fff">
                                <th style="text-align: center;vertical-align:middle;" width="60px">รหัส</th>
                                <th style="text-align: center;vertical-align:middle;" width="200px">ชื่อข้อมูล</th>
                                <th style="text-align: center;vertical-align:middle;" width="90px">วันที่เผยแพร่</th>
                                <th style="text-align: center;vertical-align:middle;" width="170px">เจ้าของผลงาน</th>
                                <th style="text-align: center;vertical-align:middle;" width="150px">ประเภททรัพยากร</th>
                                <th style="text-align: center;vertical-align:middle;" width="50px"></th>
                                <th style="text-align: center;vertical-align:middle;" width="50px"></th>
                            </tr>
                            
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

$sql = "SELECT * FROM collections " . $cond . " limit {$start} , {$perpage}";

$sqlCou = "SELECT COUNT(cid) AS 'num' FROM collections " . $cond;
$resultCou = mysqli_query($conn,$sqlCou);
$row = mysqli_fetch_assoc($resultCou);
$count = $row["num"];
echo "
	ข้อมูลทั้งหมด:
    $count
	 <hr/>
";

$result = mysqli_query($conn,$sql);
 if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_array($result)){
        

					//echo $sql;
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)){
                            
                            echo "<tr class='border_bottom'>
                            <td style='text-align: center;'>" . $row["cid"] . "</td>
                            <td>" . $row["title"] . "</td>
                            <td style='text-align: center;'>" . $row["issued_date"] . "</td>
                            <td>" . $row["subject"] . "</td>
                            <td style='text-align: center;'>" . $row["res_type"] . "</td>
                            <td style='text-align: center;'><a href='edit-data.php?table=" . $row["res_type"] . "&id=" . $row["res_id"] . "&cid=" . $row["cid"] . "'>Edit</a></td>
                            <td style='text-align: center;'><a onClick=\"return confirm('คุณต้องการลบข้อมูลหรือไม่ ?')\" href='delete-data.php?id=" . $row["cid"] . "'>Delete</a></td>                            
                            </tr>";
                        }
                    }
	}
 }
                ?>
				
                
                        </table>

                        <?php
                            $sql2 = "SELECT * FROM collections";
                            $query2 = mysqli_query($conn, $sql2);
                            $total_record = mysqli_num_rows($query2);
                            $total_page = ceil($total_record / $perpage);
                        ?>
							<br>
                            <nav>
                                <ul class="pagination" >
                                    <li>
                                        <a href="record-manage.php?page=1" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                    <?php for($i=1;$i<=$total_page;$i++){ ?>
                                    <li>
                                        <a href="record-manage.php?page=<?php echo $i; ?>">&nbsp;<?php echo $i; ?></a>
                                    </li>
                                    <?php } ?>&nbsp;
                                    <li>
                                        <a href="record-manage.php?page=<?php echo $total_page;?>" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                    </div>
                </center>
            </div>
        </div>
    </div>
    <?php $conn->close(); ?>

              </div>
            </div>
          </div>
        </div>
      </div>

     
    <?php include('footer.php')?>
    <?php include('import-javascript.php')?>
    <script src="js/index.js"></script>
</body>

</html>
