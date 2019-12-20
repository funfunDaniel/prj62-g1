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

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>

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
                                    <h3>แบบฟอร์มคำขอ | เข้าร่วมกิจกรรม</h3><hr/>
                                        <form name="searchForm" method="POST" id="add-act-form" action="check-std-add-activity.php" enctype="multipart/form-data">
                                        <div class="form-group" id="actype">
                                            <span class="input-group-prepend" id="inputGroupPrepend">ประเภทของกิจกรรม</span><br/>
                                            <select  class="form-control " name="activitytype" style="width: 100%;height: 40px;margin-top: 5px;margin-bottom: 5px;border-color:#2E9AFE;" onchange="checkType(this.value)" > 
                                                <option value="none">----- เลือกประเภทกิจกรรม -----</option>
                                                <option value="university">มหาวิทยาลัย</option>
                                                <option value="school">สำนักวิชา</option>
                                                <option value="other">หน่วยงานภายนอก</option>
                                            </select>
                                        </div>

                                        <div class="form-group" id="activityname">


                                            <span class="input-group-prepend" id="inputGroupPrepend">ชื่อกิจกรรม</span><br/>
                                            <div id="actname">
                                            <select class="form-control " name="activityname" style="width: 100%;height: 40px;margin-top: 5px;margin-bottom: 5px; border-color:#2E9AFE;"> 
                                                <option>-----เลือกกิจกรรม-----</option>
                                            </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormContsrolTextarea1">รายละเอียด</label><br/>
                                            <textarea class="form-control" name="detail" id="detail" rows="5" style="width: 100%;margin-top: 5px;margin-bottom: 5px; border-color:#2E9AFE;"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">ตำแหน่งปัจจุบัน</label><br/>
                                            <div class="lat-long-input">
                                                <div class="lat-input-group">
                                                    <div class="lat-labal">
                                                        ละติจูด : 
                                                    </div>
                                                    <div class="lat-input">
                                                        <input name="location_lat" id="geo_data_lat" type="text" class="form-control " style="width: 100%;height: 40px;margin-top: 5px;margin-bottom: 5px; border-color:#2E9AFE;">                                        
                                                    </div>
                                                </div>
                                                <div class="long-input-group">
                                                    <div class="long-labal">
                                                        ลองติจูด : 
                                                    </div>
                                                    <div class="long-input">
                                                        <input name="location_long" id="geo_data_long" type="text" class="form-control " style="width: 100%;height: 40px;margin-top: 5px;margin-bottom: 5px; border-color:#2E9AFE;">                                        
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <!-- ดึงข้อมูลตำแหน่งปัจจุบัน -->
                                        <script type="text/javascript">
                                            if ( navigator.geolocation ) {
                                                // ตรงนี้คือรองรับ geolocation
                                                navigator.geolocation.getCurrentPosition(function(location) {
                                                    var location = location.coords;
                                                    document.getElementById("geo_data_lat").value = location.latitude;
                                                    document.getElementById("geo_data_long").value = location.longitude;
                                                    // $("#geo_data").html('lat: '+location.latitude+'<br />long: '+location.longitude+'<br /> altitude: '+location.altitude+'<br /> accuracy: '+location.accuracy+'<br /> altitude accuracy: '+location.altitudeAccuracy+'<br /> heading: '+location.heading+'<br /> speed: '+location.speed);
                                                }, function() {
                                                    alert('มีปัญหาในการตรวจหาตำแหน่ง');
                                                });
                                            } else {
                                                alert('เบราเซอร์นี้ไม่รองรับ geolocation');
                                            }
                                        </script>

                                        <!-- <div id="googleMap"></div>
                                        <script>
                                        // Initialize and add the map
                                        function initMap() {
                                        // The location of Uluru
                                        var uluru = {lat: -25.344, lng: 131.036};
                                        // The map, centered at Uluru
                                        var map = new google.maps.Map(
                                            document.getElementById('googleMap'), {zoom: 4, center: uluru});
                                        // The marker, positioned at Uluru
                                        var marker = new google.maps.Marker({position: uluru, map: map});
                                        }
                                            </script>
                                        <script async defer
                                        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAC1wZMLXtNtx-ZOsmuv3QjkDZSVtSOlOM&callback=initMap">
                                        </script> -->
        
                                        <div class="input-group mb-3" style="width:100%;">
                                        <div class="custom-file">
                                            <input type="file" name="image" class="custom-file-input" id="inputGroupFile02" accept="image/*">
                                            <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">เลือกรูปภาพ</label>
                                        </div>
                                        </div>

                                        <!-- แสดงชื่อรูปภาพที่เลือก -->
                                        <script>
                                            $(".custom-file-input").on("change", function() {
                                            var fileName = $(this).val().split("\\").pop();
                                            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
                                            });
                                        </script>

                                        <div style="width:320px;">
                                        <button type="submit" class="btn btn-primary" style="width:150px">Save</button>
                                        <button type="reset" class="btn btn-warning" style="width:150px">Clear</button>
                                        </div>
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