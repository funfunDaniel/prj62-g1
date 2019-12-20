<!DOCTYPE html>
<html lang="en">
<html xmlns="http://www.w3.org/1999/xhtml">
	
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="./css/stylesheet1.css">
    <link rel="stylesheet" href="./css/stylesheet2.css">
	<link href="http://fonts.googleapis.com/css?family=Arvo" rel="stylesheet" type="text/css" />
	<link href="style.css" rel="stylesheet" type="text/css" media="screen" />	 

	<script>
	function PrintDiv() {
        var divToPrint = document.getElementById('container'); // เลือก div id ที่เราต้องการพิมพ์
	var html =  '<html>'+ // 
				'<head>'+
					'<link href="css/print.css" rel="stylesheet" type="text/css">'+
				'</head>'+
					'<body onload="window.print(); window.close();">' + divToPrint.innerHTML + '</body>'+
				'</html>';
				
	var popupWin = window.open();
	popupWin.document.open();
	popupWin.document.write(html); //โหลด print.css ให้ทำงานก่อนสั่งพิมพ์
	popupWin.document.close();	
	}
	</script>
	<title>ผลงานของหลักสูตร</title>
	<br/>	
		<center>
		<input value="Print" onClick="PrintDiv();" class="btn-save" />
		<input value="Close" onClick="VbScript:window.close()" class="btn-clear">
		</center>
	
	<body class="fix-header fix-sidebar card-no-border logo-center">
        <div class="row" id="container">	  
			<?php
				 include 'config.php';
                    $conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);
					$conn->query("SET NAMES UTF8");
					
                    if (!$conn) {
                        die("Connection failed: " . mysqli_connect_error());
                    }								
			?>
	<body>  
	
    <datalist id="subject"> 	
			<?php   
				$id = $_REQUEST["id"];
				$subject = $_REQUEST["table"];
				$sql = "SELECT * FROM major_works WHERE subject ='$subject' and mw_id ='$id'";
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

	<form name="searchForm" method="POST" autocomplete="on" enctype="multipart/form-data" >  
			<?php
				$output = "";		
					if(isset($_POST['submitBtn'])){
				$sql = "SELECT * FROM major_works WHERE subject ='$subject' and mw_id ='$id' ";
				}
					$result = mysqli_query($conn, $sql);
						if (mysqli_num_rows($result) != 0) {
						while($row = mysqli_fetch_array($result)) {
					$output .= " <br/>	
									<center><p style=\"width:150px; height:150px; vertical-align:middle; \"><img src=\"images\media.jpg \"></p></center>
									<p style=\"font-size:40px; text-align: center; vertical-align:middle; \">สาขาวิชาเทคโนโลยีสารสนเทศ</p>
									<p style=\"font-size:25px; text-align: center; vertical-align:middle; \">ขอมอบวุฒิบัตรนี้เพื่อแสดงว่า</p><br/><br/><br/>
									<p style=\"font-size:50px; text-align: center; vertical-align:middle; \">" . $row['subject'] . "</p> <br/><br/><br/>
									<p style=\"font-size:18px; text-align: center; vertical-align:middle; \">" . $row['title'] . "</p>
									<p style=\"font-size:16px; text-align: center; vertical-align:middle; \"> ได้รับรางวัล " . $row['type'] . "</p>
									<p style=\"font-size:18px; text-align: center; vertical-align:middle; \"> ผลงานจาก" . $row['major'] . "</p><br/><br/><br/>
									<p style=\"font-size:18px; text-align: center; vertical-align:middle; \">" . $row['description'] . "</p>	
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
	</div>

    <?php include('import-javascript.php')?>
    <script src="js/index.js"></script>
	
	</body>

</html>