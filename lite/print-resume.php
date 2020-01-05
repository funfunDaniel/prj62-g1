<!DOCTYPE html>
<html lang="en">

<head >
    <style type="text/css">   
    
    #printable { display: block; }  
        
    @media print   
    {   
        #non-printable { display: none; }   
        #printable { display: block; }   
    }   
        
    </style>  

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
                <div class="card" style="width=100%;">
		  
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
        <div class="centerresume"id="printable">
            <div class="card card-top" style="width:100%; height:auto;">
                <div class="row">
                    <div class="col">
                    </div>
                    <div class="col" >
                    <div class="container">
                        <img src="../images/resume202.png" alt="Snow" style="width:100%;" >
                        <div class="bottom-left">Bottom Left</div>
                        <div class="top-left">Top Left</div>
                    </div>
                    </div>             
                    <div class="col">
                    </div>
                </div>
        </div>
      </div>
      <?php } ?>
    </div>

   
    <?php include('import-javascript.php')?>
    <script src="js/index.js"></script>
</body>

</html>