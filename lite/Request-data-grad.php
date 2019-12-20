<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>
        ระเบียนคลังข้อมูล | คลังปัญญา สาขาวิชาเทคโนโลยีสารสนเทศ มหาวิทยาลัยเทคโนโลยีสุรนารี
    </title>
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
		
        <div class="show-table-data">
            <div class="card card-top">
                <center>
                    <div style="overflow-x:auto;">
                        <table class="w3-table-all w3-hoverable" width="100%">
                            <tr style="background:#2E9AFE; color:#fff">
                                <th style="text-align: center;vertical-align:middle;" width="100px">ลำดับ</th>
                                <th style="text-align: center;vertical-align:middle;">ชื่อข้อมูล</th>
								<th style="text-align: center;vertical-align:middle;" width="120px">เจ้าของผลงาน</th>
                                <th style="text-align: center;vertical-align:middle;" width="120px">วันที่เผยแพร่</th>
                                <th style="text-align: center;vertical-align:middle;" width="150px">หัวเรื่อง</th>
                                <th style="text-align: center;vertical-align:middle;" width="150px">ประเภททรัพยากร</th>
                                <th style="text-align: center;vertical-align:middle;" width="120px">รหัสข้อมูล
                                    <br/>รายประเภท</th>
									<th style="text-align: center;vertical-align:middle;" width="120px">สถานะ
                                    </th>
									<th style="text-align: center;vertical-align:middle;" width="120px">อาจารย์ที่รับผิดชอบ
                                    </th>
                              <th style="text-align: center;vertical-align:middle;" width="50px"></th>
                 
                            </tr>
                            
                            <?php
							$str="รอตรวจสอบ";
							$name = $_SESSION["username"];
                            
        if(isset($_REQUEST["mss"])){
            echo "<script type='text/javascript'>alert('Edited successfully!')</script>";
        }

                    $perpage = 15;
                    if (isset($_GET['page'])) {
                        $page = $_GET['page'];
                    } else {
                        $page = 1;
                    }

                    $start = ($page - 1) * $perpage;

                    include 'config.php';
                    $conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);

                    if (!$conn) {
                        die("Connection failed: " . mysqli_connect_error());
                    }
                
                    $conn->query("SET NAMES UTF8");

                    $sql = "SELECT * FROM request where status ='$str' and Advisors ='$name' and res_type ='โครงงานจบการศึกษา' limit {$start} , {$perpage}";
                    //echo $sql;
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)){
                            
                            echo "<tr class='border_bottom'>
                            <td style='text-align: center;'>" . $row["cidd"] . "</td>
                            <td>" . $row["title"] . "</td>
							<td>" . $row["owner"] . "</td>
                            <td style='text-align: center;'>" . $row["issued_date"] . "</td>
                            <td>" . $row["subject"] . "</td>
                            <td>" . $row["res_type"] . "</td>
                            <td style='text-align: center;'>" . $row["res_id"] . "</td>
                            <td style='text-align: center;'>" . $row["status"] . "</td>
							<td style='text-align: center;'>" . $row["Advisors"] . "</td>
							 <td style='text-align: center;'><a href='check-status.php?table=" . $row["res_type"] . "&id=" . $row["res_id"] . "&cid=" . $row["cidd"] . "&Email=" . $row["Email"] .  "'>เลือก</a></td>
                            </tr>";
                        }
                    }
    
                ?>
                
			
                        </table>

                        <?php
                            $sql2 = "SELECT * FROM request";
                            $query2 = mysqli_query($conn, $sql2);
                            $total_record = mysqli_num_rows($query2);
                            $total_page = ceil($total_record / $perpage);
                        ?>

                            <nav>
                                <ul class="pagination">
                                    <li>
                                        <a href="record-manage.php?page=1" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                    <?php for($i=1;$i<=$total_page;$i++){ ?>
                                    <li>
                                        <a href="record-manage.php?page=<?php echo $i; ?>">
                                            <?php echo $i; ?>
                                        </a>
                                    </li>
                                    <?php } ?>
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

    <!-- Footer -->
     <?php include('footer.php')?>
    <?php include('import-javascript.php')?>
    <script src="js/index.js"></script>
</body>

</html>