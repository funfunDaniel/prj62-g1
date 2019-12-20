<!DOCTYPE html>
<html>

<head>
    <title>
        ระเบียนคลังข้อมูล | คลังปัญญา สาขาวิชาเทคโนโลยีสารสนเทศ มหาวิทยาลัยเทคโนโลยีสุรนารี
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/stylesheet1.css">
    <link rel="stylesheet" href="./css/stylesheet2.css">
    <link rel="stylesheet" href="./css/stylesheet3.css">
    <link rel="stylesheet" href="./css/stylesheet4.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

	<script src="showAll.js"></script>

     <?php  include('header.php') ?>


    <style>
        .show-table-data {
            margin-top: -20px;
        }

        .btn-modal {
            height: 20px;
            background-color: Transparent;
            background-repeat: no-repeat;
            border: none;
            cursor: pointer;
            overflow: hidden;
            outline: none;
        }

        .btn-modal:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body style="background-color:#e5f6ff">
<br/>
    <!-- Top -->
    <div class="w3-top">
        <?php include 'navbar.php';?>
    </div>
   
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
                              <!--   <th style="text-align: center;vertical-align:middle;" width="50px"></th>
                                <th style="text-align: center;vertical-align:middle;" width="50px"></th>-->
                            </tr>
                            
                            <?php

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

                    $sql = "SELECT * FROM request limit {$start} , {$perpage}";
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

    <!-- Footer -->
    <footer id="footer">
        <div class="w3-center w3-white w3-wide w3-padding w3-card" style="position: absolute;
  right: 0;
  bottom: 0;
  left: 0;
  padding: 1rem;
  background-color: #efefef;
  text-align: center;">
            <p><font size="1">Copyright © All Rights Reserved.</font></p>
        </div>
    </footer>
</body>

</html>