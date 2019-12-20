<?php 
    session_start();
?>
<!DOCTYPE html>
<html>

<head>
<title>รายงานความพึงพอใจในการใช้บริการเว็บไซต์</title>
	<style>
		.th{
			font-weight: bold;
		}
	</style>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
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

    <!-- Top -->
    <div class="w3-top">
        <?php include 'index-top.php';?>
    </div>
    <br/>

    <!-- Content -->
    <div class="row">

        <!-- Center Content -->
        <div class="show-table-data">
            <div class="card card-top">
            <center>
 <h4>รายงานความพึงพอใจในการใช้บริการเว็บไซต์</h4>
 <form name="a" method="POST" >
 <p><input TYPE="radio" NAME="w" >สัปดาห์
<input TYPE="radio" NAME="m" >เดือน</p>
<input type="submit" value="Search" name="submitBtn" />
</form>
  <div id="chart_div"></div>
 </center>
		<tr align="center">
        <br/>
	<table border="1" cellpadding="10" width="80%" align="center">
		<th> ข้อมูลเกี่ยวกับความพึงพอใจในการใช้บริการเว็บไซต์</td>
		<th>คะแนน</td>
		<th>เปอร์เซ็นต์</td>
		</tr>	

	<?php
        
        include 'config.php';    

        $conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);
    
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
    
        $conn->query("SET NAMES UTF8");

		if(isset($_POST['submitBtn'])){
			if(isset($_POST['w'])){
			$sql = "SELECT sum(col1) as 'col1' ,
						   sum(col2) as 'col2' ,
						   sum(col3) as 'col3' ,
						   sum(col4) as 'col4' ,
						   sum(col5) as 'col5' ,
						   sum(col6) as 'col6' ,
						   sum(col7) as 'col7' ,
						   sum(col8) as 'col8' ,
						   sum(col9) as 'col9' ,
						   sum(col10) as 'col10' ,
						   count(q_id) as 'id' FROM questionnaire WHERE WEEK(cur_date) = WEEK(CURDATE())";
			//$per = $id*$col1;
		}else{
			$sql = "SELECT sum(col1) as 'col1' ,
						   sum(col2) as 'col2' ,
						   sum(col3) as 'col3' ,
						   sum(col4) as 'col4' ,
						   sum(col5) as 'col5' ,
						   sum(col6) as 'col6' ,
						   sum(col7) as 'col7' ,
						   sum(col8) as 'col8' ,
						   sum(col9) as 'col9' ,
						   sum(col10) as 'col10' ,
						   count(q_id) as 'id' FROM questionnaire WHERE MONTH(cur_date) = MONTH(CURDATE())";
		}
		
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)) {
				$id = $row['id'];
				$col1 = $row['col1'];
				$col2 = $row['col2'];
				$col3 = $row['col3'];
				$col4 = $row['col4'];
				$col5 = $row['col5'];
				$col6 = $row['col6'];
				$col7 = $row['col7'];
				$col8 = $row['col8'];
				$col9 = $row['col9'];
				$col10 = $row['col10'];
				$cal1 = ($col1/($id*5))*100;
				$cal2 = ($col2/($id*5))*100;
				$cal3 = ($col3/($id*5))*100;
				$cal4 = ($col4/($id*5))*100;
				$cal5 = ($col5/($id*5))*100;
				$cal6 = ($col6/($id*5))*100;
				$cal7 = ($col7/($id*5))*100;
				$cal8 = ($col8/($id*5))*100;
				$cal9 = ($col9/($id*5))*100;
				$cal10 = ($col10/($id*5))*100;
				echo "
				<form name=\"one\" action=\"\" method=\"POST\">
					<input type=\"hidden\" name=\"cal1\" value=\"".$cal1."\" />
					<input type=\"hidden\" name=\"cal2\" value=\"".$cal2."\" />
					<input type=\"hidden\" name=\"cal3\" value=\"".$cal3."\" />
					<input type=\"hidden\" name=\"cal4\" value=\"".$cal4."\" />
					<input type=\"hidden\" name=\"cal5\" value=\"".$cal5."\" />
					<input type=\"hidden\" name=\"cal6\" value=\"".$cal6."\" />
					<input type=\"hidden\" name=\"cal7\" value=\"".$cal7."\" />
					<input type=\"hidden\" name=\"cal8\" value=\"".$cal8."\" />
					<input type=\"hidden\" name=\"cal9\" value=\"".$cal9."\" />
					<input type=\"hidden\" name=\"cal10\" value=\"".$cal10."\" />
					</form>
				<tr>
					<td>(1) ความสวยงาม ความทันสมัย น่าสนใจของหน้าโฮมเพจ</td>
					<td align =\"center\">" .  $row['col1']. "</td>
					<td align =\"center\">" . number_format((float)$cal1, 2, '.', '')  . "</td>
				</tr>
				<tr>
					<td>(2) การจัดรูปแบบในเว็บไซต์ง่ายต่อการอ่านและการใช้งาน</td>
					<td align =\"center\">" .  $row['col2']. "</td>
					<td align =\"center\">". number_format((float)$cal2, 2, '.', '')." </td>
				</tr>
				<tr>
					<td>(3) สีสันในการออกแบบเว็บไซต์มีความเหมาะสม</td>
					<td align =\"center\">" .  $row['col3']. "</td>
					<td align =\"center\">". number_format((float)$cal3, 2, '.', '')." </td>
				</tr>
				<tr>
					<td>(4) มนูง่ายต่อการใช้งาน</td>
					<td align =\"center\">" .  $row['col4']. "</td>
					<td align =\"center\">". number_format((float)$cal4, 2, '.', '')." </td>
				</tr>
				<tr>
					<td>(5) สีพื้นหลังกับสีตัวอักษรมีความเหมาะสมต่อการอ่าน</td>
					<td align =\"center\">" .  $row['col5']. "</td>
					<td align =\"center\">". number_format((float)$cal5, 2, '.', '')." </td>
				</tr>
				<tr>
					<td>(6)  ขนาดตัวอักษร และรูปแบบตัวอักษร อ่านได้ง่ายและสวยงาม</td>
					<td align =\"center\">" .  $row['col6']. "</td>
					<td align =\"center\">". number_format((float)$cal6, 2, '.', '')." </td>
				</tr>
				<tr>
					<td>(7) ภาพกับเนื้อหามีความสอดคล้องกันและสามารถสื่อความหมายได้</td>
					<td align =\"center\">" .  $row['col7']. "</td>
					<td align =\"center\">". number_format((float)$cal7, 2, '.', '')." </td>
				</tr>
				<tr>
					<td>(8) โดยภาพรวมท่านมีความพึงพอใจในการออกแบบเว็บไซต์ในระดับใด</td>
					<td align =\"center\">" .  $row['col8']. "</td>
					<td align =\"center\">". number_format((float)$cal8, 2, '.', '')." </td>
				</tr>
				<tr>
					<td>(9) ความสะดวกในการเชื่อมโยงข้อมูลภายในเว็บไซต์</td>
					<td align =\"center\">" .  $row['col9']. "</td>
					<td align =\"center\">". number_format((float)$cal9, 2, '.', '')." </td>
				</tr>
				<tr>
					<td>(10) โดยภาพรวมท่านมีความพึงพอใจในคุณภาพของเนื้อหาระดับใด</td>
					<td align =\"center\">" .  $row['col10']. "</td>
					<td align =\"center\">". number_format((float)$cal10, 2, '.', '')." </td>
				</tr>";
		}
		}
		} else {
			$sql = "SELECT col1 * FROM questionnaire";
		
		}

		$conn->close();

	?>
<br/>
	</table>
	 <script type="text/javascript">
google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback(drawBasic);

function drawBasic() {
var c1 = Number(one.elements.cal1.value);
 var c2 = Number(one.elements.cal2.value);
 var c3 = Number(one.elements.cal3.value);
 var c4 = Number(one.elements.cal4.value);
 var c5 = Number(one.elements.cal5.value);
 var c6 = Number(one.elements.cal6.value);
 var c7 = Number(one.elements.cal7.value);
 var c8 = Number(one.elements.cal8.value);
 var c9 = Number(one.elements.cal9.value);
 var c10 =Number(one.elements.cal10.value);
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'เปอร์เซ็นต์');
      data.addColumn('number', 'เปอร์เซ็นต์');

      data.addRows([
        ['หัวข้อประเมินที่ 1',c1],
        ['หัวข้อประเมินที่ 2',c2],
		['หัวข้อประเมินที่ 3',c3],
		['หัวข้อประเมินที่ 4',c4],
		['หัวข้อประเมินที่ 5',c5],
		['หัวข้อประเมินที่ 6',c6],
		['หัวข้อประเมินที่ 7',c7],
		['หัวข้อประเมินที่ 8',c8],
		['หัวข้อประเมินที่ 9',c9],
		['หัวข้อประเมินที่ 10',c10]
      ]);

      var options = {
		 chartArea: {width: '70%'},
        hAxis: {
          title: 'หัวข้อประเมิน',
          viewWindow: {
            min: [  0]
          }
        },
        vAxis: {
          title: 'เปอร์เซ็นต์'
        }
      };

      var chart = new google.visualization.ColumnChart(
        document.getElementById('chart_div'));

      chart.draw(data, options);
    }

    </script>
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