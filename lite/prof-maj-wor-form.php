<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<html xmlns="http://www.w3.org/1999/xhtml">


	
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="./css/stylesheet1.css">
    <link rel="stylesheet" href="./css/stylesheet2.css">
	<link href="http://fonts.googleapis.com/css?family=Arvo" rel="stylesheet" type="text/css" />
	<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
	
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.dropotron.min.js"></script>
	<script src="js/skel.min.js"></script>
	<script src="js/skel-layers.min.js"></script>
	<script src="showAll.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="ShowSearch.js"></script> 
	
	<noscript>
		<link rel="stylesheet" href="css/skel.css" />
		<link rel="stylesheet" href="css/stylec.css" />
	</noscript>

     <?php  include('header.php') ?>

<body class="fix-header fix-sidebar card-no-border logo-center">

<?php  include('navbar.php') ?>

    <div class="card-block">
    <div class="row">      
    </div>

        <div class="row">
			<div class="col-lg-3 col-xlg-3 col-md-5">
				<div class="card">              
					<div class="card-body little-logo text-center">                  
					  
			<!-- Left Menu Bar-->        
            <?php include 'profile-left-bar.php';?>
			
                </div>
            </div>
          </div>
		  <div class="col-lg-9 col-md-7">
            <div class="card">
              <div class="card-block">
		  
			<?php
				 include 'config.php';
                    $conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);
					$conn->query("SET NAMES UTF8");
					
                    if (!$conn) {
                        die("Connection failed: " . mysqli_connect_error());
                    }								
			?>

<body>
<div id="page">
		<div class="post">
		  <h2>ผลงานของหลักสูตร</h2>
			* โปรดใส่คำค้นหาโดยใช้ชื่อเจ้าของผลงานเพื่อ เรียกดูข้อมูลผลงาน 
		<br>	* หมายเหตุ : กรุณาพิมพ์ชื่อให้ถูกต้อง ไม่งั้นระบบจะไม่แสดงข้อมูล
			
			
	<form name="searchForm" action="det-maj-wor-form.php" method="POST" autocomplete="on" enctype="multipart/form-data" >  
    <input list="subject" class="searchBox" class="searchBtn" name="subject" onkeyup="ShowSearch(this.value)" required autofocus style="width:50%" placeholder="ชื่อเจ้าของผลงาน..."/>
    <datalist id="subject"> 
	
    <?php   
		$sql = "SELECT * FROM major_works";
        $result = mysqli_query($conn,$sql);
        if (mysqli_num_rows($result) > 0) {
          while($row = mysqli_fetch_assoc($result)) {
            echo "<option value=\"" . $row['subject'] . "\" />";
          }
        }else{
          echo "";
        }   
      ?>
	  
    </datalist>
    &nbsp; <input type="submit" value="Submit" class="btn-save" name="submitBtn" />	
	

   </div>
   
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
