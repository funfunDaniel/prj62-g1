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


    <?php  include('navbar.php') ?>
	
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
            if(isset($_REQUEST["addType"])){
                if($_REQUEST["addType"] == "gp"){
                    include 'add-grad-pro-form.php';
                }else if($_REQUEST["addType"] == "cp"){
                    include 'add-cou-pro-form.php';
                }else if($_REQUEST["addType"] == "raw"){
                    include 'add-rec-aw-wor-form.php';
                }else if($_REQUEST["addType"] == "inw"){
                    include 'add-ino-wor-form.php';
                }else if($_REQUEST["addType"] == "mj"){
                    include 'add-maj-wor-form.php';
                }else if($_REQUEST["addType"] == "std"){
                    include 'add-std-form.php';
                }else if($_REQUEST["addType"] == "tp"){
                    include 'add-the-pro-form.php';
                }else if($_REQUEST["addType"] == "ste"){
                    include 'add-ste-form.php';
                }else if($_REQUEST["addType"] == "the"){
                    include 'add-the-form.php';
                }else if($_REQUEST["addType"] == "ra"){
                    include 'add-res-art-form.php';
                }else if($_REQUEST["addType"] == "er"){
                    include 'add-ext-res-form.php';
                }else if($_REQUEST["addType"] == "sc"){
                    include 'add-sco-form.php';
                }else if($_REQUEST["addType"] == "ac"){
                    include 'add-act-form.php';
                }else if($_REQUEST["addType"] == "df"){
                    include 'add-doc-form.php';
                }else if($_REQUEST["addType"] == "min"){
                    include 'add-min-form.php';
				}else if($_REQUEST["addType"] == "met"){
                    include 'add-met-form.php';
				}else if($_REQUEST["addType"] == "oth"){
                    include 'add-oth-form.php';
                }else if($_REQUEST["addType"] == "pro"){
                    include 'add-pro-form.php';
                }else if($_REQUEST["addType"] == "hofs"){
                    include 'add-hofs-form.php';
                }else if($_REQUEST["addType"] == "hofp"){
                    include 'add-hofp-form.php';
				}else if($_REQUEST["addType"] == "df"){
                    include 'add-doc1-form.php';
				}else if($_REQUEST["addType"] == "df2"){
                    include 'add-doc2-form.php';
				}else if($_REQUEST["addType"] == "df3"){
                    include 'add-doc3-form.php';
				}else if($_REQUEST["addType"] == "df4"){
                    include 'add-doc4-form.php';
				}else if($_REQUEST["addType"] == "df5"){
                    include 'add-doc5-form.php';	
                }else if($_REQUEST["addType"] == "met"){
                    include 'add-met.php';
                }else if($_REQUEST["addType"] == "conf"){
                    include 'add-met-Conference.php';
                }else if($_REQUEST["addType"] == "Other"){
                    include 'add-met-Other.php';
                }
            }else{
                include 'add-data-form-content.php';
            }

            if(isset($_REQUEST["ext"])){
                echo "<script type='text/javascript'>alert('File Name : is already exists!')</script>";
            }

            if(isset($_REQUEST["alert"])){
                echo "<script type='text/javascript'>alert('Inserted successfully!')</script>";
            }
            
        ?>
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