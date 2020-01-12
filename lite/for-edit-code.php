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
                                        <div class="table-responsive" >
                                            <table class="table table-hover" id="data-table">
                                                <thead>
                                                <tr class="table-info" style="text-align:center">
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
                                               <!-- The Modal -->
                                        <div class="modal fade" id="myModal">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">Maps</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                                <div class="modal-body">
                                                    <div id="map" style=" height: 500px;width: 600px;">map</div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        </div>
                                        </div>
                                                <!-- The Modal2 -->
                                        <div class="modal fade" id="myModal2">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">Picture</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                                <div class="modal-body" id="modalpic">
                                                    <div id="map" style=" height: 500px;width: 600px;"></div>
                                                </div>
                                            </div>
                                           
                                        </div>
                                        </div>
                                        </div>
                                    <!-- end class="card-body" -->
                                    </div>
                               
                            </div>
                        </div>

                    </div>
                </div>
        </div>
        
        <script src="http://code.jquery.com/jquery-latest.min.js"></script>
        
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
                        var actid = response[i].actid;
                        var lat = response[i].lat;
                        var lon = response[i].lon;
                       
                        var tr_str = "<tr>" +
                        "<td style='text-align:center'>" + (i+1) + "</td>" +
                        "<td style='text-align:center'>" + date + "</td>" +
                        "<td style='text-align:center'>" + name + "</td>" +
                        "<td style='text-align:center'><a href='#' onclick='test("+actid+")'><i class='material-icons '>my_location</i></a></td>" +
                        "<td style='text-align:center'><a href='#' onclick='picture("+actid+")'><i class='material-icons'>camera_alt</i></a></td>" +
                        "</tr>";
                        $("#data-table tbody").append(tr_str);
                    }
                }
            });
        });


        
        </script>
        <script>
        $(document).ready(function(){

        });
        function test(actid){
            if(window.XMLHttpRequest){
            xmlhttp=new XMLHttpRequest();
        }else{
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange=function() {
        if (this.readyState==4 && this.status==200) {
            res = this.responseText.split(",");
            lat = res[0];
            lon = res[1];
            var locationRio = {lat: -22.915, lng: -43.197};
            var map = new google.maps.Map(document.getElementById("map"),{
                center: {lat:14.897978199999999,lng:102.0131935},
                zoom: 11,
                zoomControl: true,
                scaleControl: true,        
            });
            var marker = new google.maps.Marker({
                        position: new google.maps.LatLng(lat, lon),
				        title: name
                        });
                        marker.setMap(map);
                        info = new google.maps.InfoWindow();

                        google.maps.event.addListener(marker, 'click', (function(marker, index) {
                            return function() {
                            info.setContent(location);
                            info.open(maps, marker);
                            }
                        })(marker, index));
            }
        }
        xmlhttp.open("GET","./MySQL/student/get-json-lat-lon.php?id="+actid,true);
        xmlhttp.send();
            $("#myModal").modal('show'); 

        }

        function picture(actid){
            if(window.XMLHttpRequest){
            xmlhttp=new XMLHttpRequest();
        }else{
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange=function() {
        if (this.readyState==4 && this.status==200) {
            var folder = "../import-files/images/"; 
            var pix = "<img src='"+ folder + this.responseText +"'>";
            document.getElementById("modalpic").innerHTML = pix; 
            }
        }
        xmlhttp.open("GET","./MySQL/student/get-json-pic.php?id="+actid,true);
        xmlhttp.send();
            $("#myModal2").modal('show'); 

        }
    
        </script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>  
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB6TncMKY_A2jQCcE_2nrtY9629N6N_jXE&callback=test"></script>
        <?php include('footer.php')?>
        <?php include('import-javascript.php')?>
        <script src="js/index.js"></script>
    </body>
</html>