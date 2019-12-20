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
		  <h2>ผลงานที่ได้รับรางวัล</h2>
			* โปรดใส่คำค้นหาโดยใช้ชื่อเจ้าของผลงานเพื่อ เรียกดูข้อมูลผลงาน 
		<br>	* หมายเหตุ : กรุณาพิมพ์ชื่อให้ถูกต้อง ไม่งั้นระบบจะไม่แสดงข้อมูล
			
			
	<form name="searchForm" action="" method="POST" autocomplete="on" enctype="multipart/form-data" >  
    <input list="owner" class="searchBox" class="searchBtn" name="owner" onkeyup="ShowSearch(this.value)" required autofocus style="width:50%" placeholder="ชื่อเจ้าของผลงาน..."/>
    <datalist id="owner"> 
	
    <?php   
		$sql = "SELECT * FROM received_award_works";
        $result = mysqli_query($conn,$sql);
        if (mysqli_num_rows($result) > 0) {
          while($row = mysqli_fetch_assoc($result)) {
            echo "<option value=\"" . $row['owner'] . "\" />";
          }
        }else{
          echo "";
        }   
      ?>
	  
    </datalist>
    &nbsp; <input type="submit" value="Submit" class="btn-save" name="submitBtn" />	
	</form>
		
	
	
	<form name="searchForm" method="POST" autocomplete="on" enctype="multipart/form-data" >  
	<?php
	
	$output = "";
	
	
    if(isset($_POST['submitBtn'])){
      $sql = "SELECT * FROM received_award_works WHERE owner LIKE '%" . $_POST['owner'] . "%'";
    }
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) != 0) {
      while($row = mysqli_fetch_array($result)) {
        $output .= " <br/>	
				<center><p style=\"width:150px; height:150px; vertical-align:middle; \"><img src=\"images\media.jpg \"></p></center><br/><br/>
				<p style=\"font-size:40px; text-align: center; vertical-align:middle; \">สาขาวิชาเทคโนโลยีสารสนเทศ</p>
				<p style=\"font-size:25px; text-align: center; vertical-align:middle; \">ขอมอบวุฒิบัตรนี้เพื่อแสดงว่า</p><br/><br/><br/>
				<p style=\"font-size:50px; text-align: center; vertical-align:middle; \">" . $row['owner'] . "</p> <br/><br/><br/>
				<p style=\"font-size:16px; text-align: center; vertical-align:middle; \"> รับรางวัลเมื่อวันที่ : " . $row['received_date'] . "</p>
				<p style=\"font-size:18px; text-align: center; vertical-align:middle; \"> หัวข้อรางวัล  " . $row['title'] . "
				<p style=\"font-size:18px; text-align: center; vertical-align:middle; \"> หมวดหมู่  " . $row['subject'] . "
				<p style=\"font-size:18px; text-align: center; vertical-align:middle; \"> ในหน่วยงาน : " . $row['unit'] . "</p><br/><br/><br/>
				<p style=\"font-size:24px; text-align: center; vertical-align:middle; \">ผลงานประเภท " . $row['type'] . "</p>			
				<p style=\"font-size:18px; text-align: center; vertical-align:middle; \">รายละเอียดโครงงานเป็น" . $row['description'] . "</p>	<br/><br/>	
						" ;
      }
    } else {
		$output = "";
    }

	?>	
	<div class="card card-top" style="width: 100%; ">
    <table id="myTable" width="100%" cellspacing="0" border="0.5">
   
	<?php echo $output; ?>  
   </table>
   </form>
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
