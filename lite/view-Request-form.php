
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
        <?php include 'navbar-admin.php';?>
    </div>
    <br/>

    <!-- Content -->
    <div class="row">

        <!-- Center Content -->
        <div class="show-table-data">
            <div class="card card-top">
                <center>
                    <div style="overflow-x:auto;">
                        <table class="w3-table-all w3-hoverable" width="100%">
                            <tr style="background:#2E9AFE; color:#fff">
                                <th style="text-align: center;vertical-align:middle;" width="100px">เลขที่คำขอ</th>
                                <th style="text-align: center;vertical-align:middle;"width="200px">ชื่อคำขอ</th>
								
                                <th style="text-align: center;vertical-align:middle;" width="150px">ประเภททรัพยากร</th>
                                <th style="text-align: center;vertical-align:middle;" width="120px">รหัสข้อมูล
                                <th style="text-align: center;vertical-align:middle;" width="50px"></th>
                                
                            </tr>
                             <tr>
							 
                                <td style="text-align: center;vertical-align:middle;" width="100px">1</td>
                                <td style="text-align: center;vertical-align:middle;" width="200px">โครงงานจบการศึกษา</td>
                                <td style="text-align: center;vertical-align:middle;" width="150px">graduation_projects</td>
                                <td style="text-align: center;vertical-align:middle;" width="120px">0</td>
                                <td style="text-align: center;vertical-align:middle;" width="50px"><a href='Request-data.php?table=graduation_projects&id=0&cid=1'>เลือก</a></td> 
							</tr>
							 <tr>
							 
                                <td style="text-align: center;vertical-align:middle;" width="100px">2</td>
                                <td style="text-align: center;vertical-align:middle;" width="200px">ผลงานในรายวิชา</td>
                                <td style="text-align: center;vertical-align:middle;" width="150px">course_projects</td>
                                <td style="text-align: center;vertical-align:middle;" width="120px">0</td>
                                <td style="text-align: center;vertical-align:middle;" width="50px"><a href='Request-data.php?table=course_projects&id=0&cid=2'>เลือก</a></td>
							</tr>
							
							 <tr>
							 
                                <td style="text-align: center;vertical-align:middle;" width="100px">3</td>
                                <td style="text-align: center;vertical-align:middle;" width="200px">ผลงานที่ได้รับรางวัล</td>
                                <td style="text-align: center;vertical-align:middle;" width="150px">received_award_works</td>
                                <td style="text-align: center;vertical-align:middle;" width="120px">0</td>
                                <td style="text-align: center;vertical-align:middle;" width="50px"><a href='Request-data.php?table=received_award_works&id=0&cid=3'>เลือก</a></td> 
							</tr>
							
							 <tr>
							 
                                <td style="text-align: center;vertical-align:middle;" width="100px">4</td>
                                <td style="text-align: center;vertical-align:middle;" width="200px">ผลงานนวัตกรรม</td>
                                <td style="text-align: center;vertical-align:middle;" width="150px">innovative_works</td>
                                <td style="text-align: center;vertical-align:middle;" width="120px">0</td>
                                <td style="text-align: center;vertical-align:middle;" width="50px"><a href='Request-data.php?table=innovative_works&id=0&cid=4'>เลือก</a></td> 
							</tr>
							 <tr>
							 
                                <td style="text-align: center;vertical-align:middle;" width="100px">5</td>
                                <td style="text-align: center;vertical-align:middle;" width="200px">ผลงานของกลุ่มวิชา/หลักสูตร</td>
                                <td style="text-align: center;vertical-align:middle;" width="150px">major_works</td>
                                <td style="text-align: center;vertical-align:middle;" width="120px">0</td>
                                <td style="text-align: center;vertical-align:middle;" width="50px"><a href='Request-data.php?table=major_works&id=0&cid=5'>เลือก</a></td> 
							</tr>
							<tr>
							 
                                <td style="text-align: center;vertical-align:middle;" width="100px">6</td>
                                <td style="text-align: center;vertical-align:middle;" width="200px">กิจกรรม</td>
                                <td style="text-align: center;vertical-align:middle;" width="150px">activities</td>
                                <td style="text-align: center;vertical-align:middle;" width="120px">0</td>
                                <td style="text-align: center;vertical-align:middle;" width="50px"><a href='Request-data.php?table=activities&id=0&cid=6'>เลือก</a></td> 
							</tr>
							<tr>
							 
                                <td style="text-align: center;vertical-align:middle;" width="100px">7</td>
                                <td style="text-align: center;vertical-align:middle;" width="200px">รางวัลเกียรติยศนักศึกษา</td>
                                <td style="text-align: center;vertical-align:middle;" width="150px">hall_of_frames_std</td>
                                <td style="text-align: center;vertical-align:middle;" width="120px">0</td>
                                <td style="text-align: center;vertical-align:middle;" width="50px"><a href='Request-data.php?table=hall_of_frames_std&id=0&cid=7'>เลือก</a></td> 
							</tr>
 </table>

                       

                            
                    </div>
                </center>
            </div>
        </div>
    </div>
 

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