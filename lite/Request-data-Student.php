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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
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
              null;}
                ?>	
                <!-- Center Content -->
                <div class="card card-top  " style="width: 100%; height: 100%; ">
                    <h3>แบบฟอร์มขอเพิ่มผลงาน กิจกรรม</h3><hr/>
                    <!-- Login Form -->
                    <form name="searchForm" action="check-login.php" method="POST" >
                    <div class="form-group" id="actype">
                         <span class="input-group-prepend" id="inputGroupPrepend">ประเภทของกิจกรรม</span><br/>
                        <select class="form-control " id="activitytype" style="width: 300px;height: 40px;margin-top: 5px;margin-bottom: 5px;border-color:#2E9AFE;"> 
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        </select>
                    </div>

                    <div class="form-group" id="acname">
                         <span class="input-group-prepend" id="inputGroupPrepend">ชื่อกิจกรรม</span><br/>
                        <select class="form-control " id="activityname" style="width: 300px;height: 40px;margin-top: 5px;margin-bottom: 5px; border-color:#2E9AFE;"> 
                        <option>กิจกรรม1</option>
                        <option>กิจกรรม2</option>
                        <option>กิจกรรม3</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">รายละเอียด</label><br/>
                        <textarea class="form-control" id="detail" rows="5" style="width: 300px;margin-top: 5px;margin-bottom: 5px; border-color:#2E9AFE;"></textarea>
                    </div>
                 
                    <div class="input-group mb-3" style="width:300px;">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile02">
                        <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">เลือกรูปภาพ</label>
                    </div>
                    </div>

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
     

     
    <?php include('footer.php')?>
    <?php include('import-javascript.php')?>
    <script src="js/index.js"></script>
    <script>
        function openContent(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
        }
        </script>
</body>

</html>
