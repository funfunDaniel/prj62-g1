<?php 
    session_start();
?>
<html lang="en">
    <head>
        <title>
        คลังผลงาน | ผลงานของฉัน
        </title>
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
        <!-- <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
        </div> -->
        <?php  include('navbar.php') ?>

        <div class="card-block">
            <div class="row">   
            </div>  
                <div class="row">  
                    <div class="col-lg-3 col-xlg-3 col-md-5"> 
                        <div class="card">
                            <img class="card-img-top" src="../images/cloud.jpg" alt="Card image cap">
                            <div class="card-body little-logo text-center">
                                <!-- Left Menu Bar--> 
                                <div class="pro-img"><img src="../images/logo-header.gif" alt="user"></div>
                                    <h3 class="m-b-0">สำนักวิชาเทคโนโลยีสังคม</h3>
                                    <?php include 'index-left-bar.php';?>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-9 col-md-7">
                            <div class="card">
                                    
                                    <div class="card-body">
                                        <div class="card-top" style="width: 100%; height: 100%; ">
                                        <h3>คลังผลงาน | ผลงานของฉัน</h3><hr/>
                                        </div>
                                        <!-- <a href="./MySQL/student/get-json-my-portfolio.php"><input type="button" /></a> -->
                                        <div class="table-responsive" >
                                            <table class="table table-hover" id="data-table">
                                                <thead>
                                                <tr class="table-info">
                                                    <th>#</th>
                                                    <th>วันที่</th>
                                                    <th>กิจกรรม</th>
                                                    <th>สถานที่</th>
                                                    <th>รูปภาพ</th>
                                                </tr>
                                                </thead>
                                                <tbody  style="font-size:14px;">
                                                </tbody>
                                            </table>
                                        </div>
                                    <!-- end class="card-body" -->
                                    </div>
                               
                            </div>
                        </div>

                    </div>
                </div>
        </div>

        <script>
        $(document).ready(function(){
            $.ajax({
                url: './MySQL/student/get-json-my-portfolio.php',
                type: 'get',
                dataType: 'JSON',
                success: function(response){
                    console.log(response);
                    var len = response.length;
                    for(var i=0; i<len; i++){
                        var id = response[i].id;
                        var date = response[i].date;
                        var name = response[i].name;

                        var tr_str = "<tr>" +
                        "<td align='center'>" + (i+1) + "</td>" +
                        "<td align='center'>" + date + "</td>" +
                        "<td align='center'>" + name + "</td>" +
                        "<td align='center'><a href='#'><i class='material-icons'>my_location</i></a></td>" +
                        "<td align='center'><a href='#'><i class='material-icons'>camera_alt</i></a></td>" +
                        "</tr>";
                        $("#data-table tbody").append(tr_str);
                    }
                }
            });
        });
        </script>

        <?php include('footer.php')?>
        <?php include('import-javascript.php')?>
        <script src="js/index.js"></script>
    </body>
</html>