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
    <!-- <link rel="stylesheet" href="./css/stylesheet6.css"> -->
	
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


    <?php  include('navbar-login.php') ?>

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
              <div class="card-block">
          
                    <!-- Center Content -->
                     <div class="card card-top  " style="width: 100%; height: 100%; ">
                                <h3>แบบฟอร์มเพิ่มรายวิชาเรียน</h3><hr/>
                                <!-- Login Form -->
                                <form name="searchForm" action="" method="POST" >
                                <div class="form-group" id="actype">
                                    <span class="input-group-prepend" id="inputGroupPrepend">ภาคการศึกษา</span><br/>
                                    <select class="form-control " id="activitytype" style="width: 300px;height: 40px;margin-top: 5px;margin-bottom: 5px;border-color:#2E9AFE;"> 
                                    <option>1/62</option>
                                    <option>2/62</option>
                                    <option>3/62</option>
                                    </select>
                                </div>
                                <div>  
                                    <table style="width:100%">
                                        <tr>
                                            <td style="width:33.33%">
                                            รหัสวิชา
                                            </td>
                                            <td style="width:50%">
                                            ชื่อวิชา
                                            </td>
                                            <td style="width:16.77%">                     
                                            ปุ่ม
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            <input type="text" class="input-login" name="subid" style="width: 200px;height: 30px;" required autofocus />
                                            </td>
                                            <td>
                                            something
                                            </td>
                                            <td>
                                            <button class="btn btn-success">เพิ่ม</button>
                                            </td>
                                        </tr>
                                     </table>                            
                                </div>

                                <br/>
                              
                                <div style="width:320px;">
                                <button type="button" class="btn btn-primary" style="width:150px">Save</button>
                                <button type="button" class="btn btn-warning" style="width:150px">Clear</button>
                                
                                </form>
                            </div>
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
