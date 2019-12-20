<html>
<head>

<?php 
    session_start();
	
?>
<br>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="http://code.highcharts.com/highcharts.js"></script>
<script src="http://code.highcharts.com/modules/exporting.js"></script>     
</head>
<body>

<br>
 <div align="center">
 <img src="images\report4.jpg" width="500px"></img>
  </div>
<br><br>

<form name="frmSearch" method="get" >
  <table width="599" border="1" align="center">
    <tr>
      <th>กรุณาเลือกวันที่
      <input name="txtKeyword" type="date" id="txtKeyword" value="<?php echo $_GET["txtKeyword"];?>">
      <input type="submit" value="Search"></th>
    </tr>
  </table>
</form>

 <div class="col-md-12" align="center">
  <?php 
     
	  error_reporting(~E_NOTICE);
      $rs = $_GET["txtKeyword"];
      include("config.php");
      $SE_Namex =array(); //gant x
      $SBorrowy =array(); //gant y      
	    

    $conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $conn->query("SET NAMES UTF8");
      
       $sql ="SELECT request.status, COUNT(request.cidd) As SSport FROM request where issued_date >='$rs' 
             
       GROUP BY request.status ORDER BY SSport ";

       

      
      $result = mysqli_query($conn, $sql);
	
      while($row = mysqli_fetch_array($result)){

      	array_push($SE_Namex,$row['status']);
      	array_push($SBorrowy,$row['SSport']);
      }
	   
 ?>

  <script>
      
    $(function () {
      $('#container').highcharts({
          chart: {
                type: 'column' 
          },
          title: {
                text: 'รายงานการอนุมัติผลงาน' 
          },
          subtitle: {
                text: ''
          },
          xAxis: {
                categories: ['<?= implode("','", $SE_Namex);?>']
          },
          yAxis: {
                title: {
                      text: 'จำนวน'
                 }
          },
          tooltip: {
                enabled: true,
                formatter: function() {
                             return '<b>'+ this.series.name +'</b><br/>'+this.x +': '+ this.y +' ';
                }
          },
          legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'top',
                x: -10,
                y: 100,
                borderWidth: 0
          },
          plotOptions: {
          
                column: {
                   colorByPoint: true,
                   dataLabels: {
                           enabled: true,
                           enableMouseTracking: true,
                           rotation: -90,
                           y: 10,
                           color: '#FFFFFF',
                           formatter: function() {
                                          return Highcharts.numberFormat(this.y, 0);
                                      },
                           x: 10,
                           style: {
                                 fontWeight: 'bold'
                           }
                   }
                }
          },
          series: [{
              name: 'รายงานการอนุมัติผลงาน',
              data: [<?= implode(',', $SBorrowy) // ข้อมูล array แกน y ?>]
          }]
      }); //Close Container
    }); //Close function
  </script>

      <div id="container" style="min-width: 320px; height: 380px; margin: 0 auto"></div>       
     </div>
 <tr><td></td><td>
 <button class="btn-save" style="background-color:gray;float:right;"><a href="index-it.php">Back</a></button>
</td></tr>

</div>
<!-- /container -->

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="bootstrap/js/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="bootstrap/js/bootstrap.min.js"></script>

<br><br><br>

</body>
</html>