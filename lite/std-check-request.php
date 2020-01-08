<?php 
    session_start();
    include 'config.php';
    $id = $_SESSION['id'];
    $sql = "SELECT * FROM `activity` WHERE `type` = 'university' ";

        // if(isset($type)){
        //     echo "<script>console.log('".$type."')</script>";
        // }
        ?>
        
<script>
function checkType(type){
    if(type == ""){
        document.getElementById("activityname").innerHTML="";
        return;
    }
    if(window.XMLHttpRequest){
        xmlhttp=new XMLHttpRequest();
    }else{
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function() {
        if (this.readyState==4 && this.status==200) {
            document.getElementById("activityname").innerHTML=this.responseText;
        }
    }
    xmlhttp.open("GET","get-act-name.php?q="+type,true);
    xmlhttp.send();
}
</script>

<html lang="en">
    <head>
        <style>
            .lat-long-input{
    display: flex;
    flex-direction: row;
    justify-content: space-between;
 }
        </style>
        <title>
            คำขอ | เข้าร่วมกิจกรรม
        </title>
            <!-- Tell the browser to be responsive to screen width -->
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">	
    <link rel="stylesheet" href="./css/stylesheet1.css">
    <link rel="stylesheet" href="./css/stylesheet2.css">
    <!-- <link rel="stylesheet" href="./css/stylesheet6.css"> -->
	
	<script src="showAll.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <script>
            function checkType(type){
                if(type == ""){
                    document.getElementById("actname").innerHTML="";
                    return;
                }
                if(window.XMLHttpRequest){
                    xmlhttp=new XMLHttpRequest();
                }else{
                    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange=function() {
                    if (this.readyState==4 && this.status==200) {
                        document.getElementById("actname").innerHTML=this.responseText;
                    }
                }
                xmlhttp.open("GET","get-act-name.php?q="+type,true);
                xmlhttp.send();
            }
</script>
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
                                    <div class="card-top  " style="width: 100%; height: 100%; ">
                                    <h3>ตรวจสอบ | เข้าร่วมกิจกรรม</h3><hr/>
                                    </div>

                                    <div class="table-responsive">
                                        </br>
                                        <table class="table table-hover" id="data-table">
                                        <thead>
                                            <tr class="table-info">
                                            <!-- <th scope="col">Select</th> -->
                                            <th scope="col">#</th>
                                            <th scope="col">วันที่ยื่นคำขอ</th>
                                            <!-- <th scope="col">รหัสนักศึกษา</th>
                                            <th scope="col">ชื่อ - นามสกุล</th> -->
                                            <th scope="col">กิจกรรม</th>
                                            <th scope="col">สถานะ</th>
                                            <!-- <th scope="col">การอนุมัติ</th> -->
                                            </tr>
                                        </thead>

                                        <tbody>
                                        </tbody>                                        
                                        </table>
                                    </div>                                        

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
        </div>
        <script>
        $(document).ready(function(){
        $.ajax({
            url: './MySQL/student/get-json-std-activity.php',
            type: 'get',
            dataType: 'JSON',
            success: function(response){
                console.log(response)
                var len = response.length;
                for(var i=0; i<len; i++){
                    var id = response[i].id;
                    var date = response[i].date;
                    var actname = response[i].actname;
                    var status = response[i].status;

                    status == "รออนุมัติ" ? allowtag = "<span class='badge badge-warning'>"+status+"</span>" : status == "อนุมัติ" ? allowtag = "<span class='badge badge-success'>"+status+"</span>" : allowtag = "<span class='badge badge-danger'>"+status+"</span>" ;
                    var tr_str = "<tr>" +
                        // "<td><input type='checkbox' value=''></td>" +
                        "<td align='center'>" + (i+1) + "</td>" +
                        "<td align='center'>" + date + "</td>" +
                        "<td align='center'>" + actname + "</td>" +
                        "<td>" + allowtag + "</td>" +                        
                        "</tr>";

                    $("#data-table tbody").append(tr_str);
                    // document.getElementById("status").value= status;
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