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
					  x
			<!-- Left Menu Bar-->        
            <?php include 'index-left-bar.php';?>
			
                </div>
            </div>
          </div>
		  
		  <div class="col-lg-9 col-md-7">
            <div class="card">
              <div class="card-block">
		  
		  <?php
        if(isset($_REQUEST["view"])){
                if($_REQUEST["view"] == "gp"){
                    include 'view-grad-pro.php';
                }else if($_REQUEST["view"] == "cp"){
                    include 'view-cou-pro-form.php';
                }else if($_REQUEST["view"] == "raw"){
                    include 'view-rec-aw-wor-form.php';
                }else if($_REQUEST["view"] == "inw"){
                    include 'view-ino-wor-form.php';
                }else if($_REQUEST["view"] == "mj"){
                    include 'view-maj-wor-form.php';
                }else if($_REQUEST["view"] == "std"){
                    include 'view-std-form.php';
                }else if($_REQUEST["view"] == "tp"){
                    include 'view-the-pro-form.php';
                }else if($_REQUEST["view"] == "ste"){
                    include 'view-ste-form.php';
                }else if($_REQUEST["view"] == "the"){
                    include 'view-the-form.php';
                }else if($_REQUEST["view"] == "ra"){
                    include 'view-res-art-form.php';
                }else if($_REQUEST["view"] == "er"){
                    include 'view-ext-res-form.php';
                }else if($_REQUEST["view"] == "sc"){
                    include 'view-sco-form.php';
                }else if($_REQUEST["view"] == "pb"){
                    include 'port-bachelor-it.php';
                }else if($_REQUEST["view"] == "df"){
                    include 'view-doc-form.php';
				}else if($_REQUEST["view"] == "df2"){
                    include 'view-doc2-form.php';
				}else if($_REQUEST["view"] == "df3"){
                    include 'view-doc3-form.php';
				}else if($_REQUEST["view"] == "df4"){
                    include 'view-doc4-form.php';
				}else if($_REQUEST["view"] == "df5"){
                    include 'view-doc5-form.php';	
                }else if($_REQUEST["view"] == "min"){
                    include 'view-min-form.php';
                }else if($_REQUEST["view"] == "pro"){
                    include 'view-pro-form.php';
                }else if($_REQUEST["view"] == "hofs"){
                    include 'view-hofs-form.php';
                }else if($_REQUEST["view"] == "hofp"){
                    include 'view-hofp-form.php';
                }
            }else if(isset($_REQUEST["det"])){
                include 'det-form.php';
				;
            }else{
                ?>
                
          
                <!-- Center Content -->
        <div class="centercolumn">
            <div class="card card-top" style="width: 900px; height: 450px; ">
                <h3>เข้าสู่ระบบ</h3><hr/>
                <!-- Login Form -->

                <form name="searchForm" action="check-login.php" method="POST" style="text-align: -webkit-center;">
                <div class="tab btn-group btn-group-toggle" data-toggle="buttons" style="width:-webkit-fill-available;">
                   
                    <label class="tablink btn active" >
                        <input type="radio" name="usertype" value="student" autocomplete="off" checked> นักศึกษา
                    </label>
                    <label class="tablink btn ">
                        <input type="radio" name="usertype" value="professor" autocomplete="off"> อาจารย์
                    </label>
                    <label class="tablink btn ">
                        <input type="radio" name="usertype" value="employee" autocomplete="off"> บุคลากร
                    </label>
                </div>
                <br />
                <br />
                <div class="row" style="margin-block-start: auto; margin: auto;">
                        <div class="col">
                        </div>
                        <div class="col">
                             <label style="float:left;">ชื่อผู้ใช้งาน: </label>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                    <div class="row" style="margin-block-start: auto; margin: auto;">
                        <div class="col">
                        </div>
                        <div class="col">
                        <input type="text" class="input-login" name="username" style="width: 250px;height: 40px;margin-top: 5px;margin-bottom: 5px;" required autofocus />
                        </div>
                        <div class="col">
                        </div>
                    </div>

                    <div class="row" style="margin-block-start: auto; auto; margin: auto;">
                        <div class="col">
                        </div>                       
                        <div class="col">
                            <small id="emailHelp" class="form-text text-muted" style="float:right;">สำหรับนักศึกษา: กรอกรหัสนักศึกษา</small>
                         </div>
                        <div class="col">
                        </div>
                    </div>
                       
                    <div class="row"style="margin-block-start: auto; margin: auto;">
                        <div class="col">
                        </div>                       
                        <div class="col">
                            <label style="float:left;">รหัสผ่าน: </label>
                         </div>
                        <div class="col">
                        </div>
                    </div>

                    <div class="row" style="margin-block-start: auto; margin: auto;">
                        <div class="col">
                        </div>
                        <div class="col">
                        <input type="password" class="input-login" name="password" style="width: 250px;height: 40px;margin-top: 5px;margin-bottom: 15px;" required autofocus />
                        </div>
                        <div class="col">
                        </div>
                    </div>

                    <div class="row" style="margin-block-start: auto; margin: auto;">
                        <div class="col">
                        </div>
                        <div class="col">
                        <input type="submit" value="เข้าสู่ระบบ" class="btn-login" style="width: 250px;height: 40px;margin-top: 5px;margin-bottom: 15px;"/>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </form>
				
                
                <br/>
                <p style="font-size:14px">*หมายเหตุ หากลืมชื่อผู้ใช้งานหรือรหัสผ่านโปรดติดต่อผู้ดูแลระบบได้ที่ศูนย์ปฏิบัติการคอมพิวเตอร์</p>
            </div>
        </div> 
			<?php } ?>

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
