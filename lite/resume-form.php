<?php 
    session_start();
?>
<html lang="en">
    <head>
        <title>
            คลังผลงาน | Resume
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
                                            <h3>Resume</h3><hr/>
                                        </div>
                                        <div class="row">
                                            <div class="col">

                                            </div>
                                            <!-- <div class="col">
                                                <button class="btn btn-outline-primary" name="resume-blue" onclick="clickPreview(this)"> <img src="../images/resume-templete/resume-blue.png" width="100%"/></button>
                                            </div>
                                            <div class="col">
                                                <button class="btn btn-outline-primary" name="resume-brown" onclick="clickPreview(this)"><img src="../images/resume-templete/resume-brown.png"/></button>
                                            </div>
                                            <div class="col">
                                                <button class="btn btn-outline-primary" name="resume-pink" onclick="clickPreview(this)"><img src="../images/resume-templete/resume-pink.png"/></button>
                                            </div> -->
                                            <div class="col">
                                                <button class="btn btn-outline-primary" name="resume-blue" onclick="clickPreview(this)"> <img src="../images/resume-templete/resume-blue.png" width="100%"/></button>
                                            </div>
                                            <div class="col">
                                                <button class="btn btn-outline-primary" name="resume-brown" onclick="clickPreview(this)"><img src="../images/resume-templete/resume-brown.png"/></button>
                                            </div>
                                            <div class="col">
                                                <button class="btn btn-outline-primary" name="resume-pink" onclick="clickPreview(this)"><img src="../images/resume-templete/resume-pink.png"/></button>
                                            </div>
                                            <div class="col">
                                                <button class="btn btn-outline-primary" name="resume-red" onclick="clickPreview(this)"><img src="../images/resume-templete/resume-red.png"/></button>
                                            </div>
                                            <div class="col">
                                            </div>
                                        </div>
                                
                                        <!-- resume container-->  
                                    <div class="container" id="divResume">
                                    Test
                                    </div>  

                                        <!-- <div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="fullname">ชื่อ-สกุล</label>
                                            <input type="text" class="form-control" id="inputfullname" onchange="onchangeResume(this)">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputfile">รูปภาพ</label>
                                            <input type="file" class="form-control" id="inputfile" onchange="onchangeResume(this)">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputtelphone">หมายเลขโทรศัพท์</label>
                                            <input type="text" class="form-control" id="inputtelphone" onchange="onchangeResume(this)">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputemail">อีเมล์</label>
                                            <input type="email" class="form-control" id="inputemail" onchange="onchangeResume(this)">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputaddress">ที่อยู่</label>
                                            <textarea class="textareaborder" id="inputaddress" rows="5" onchange="onchangeResume(this)"></textarea>
                                        </div> 
                                        <div class="form-group col-md-6">
                                            <label for="inputaboutme">เกี่ยวกับฉัน</label>
                                            <textarea class="textareaborder" id="inputaboutme" rows="5" onchange="onchangeResume(this)"></textarea>
                                        </div>                                      
                                    </div>
                                    <label>การศึกษา</label>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputtime1">ช่วงเวลา</label>
                                                </br>
                                                <input type="text" class="form-control" style="width:150px" id="inputtime1" onchange="onchangeResume(this)"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputplace1">สถานที่</label>
                                                <input type="text" class="form-control" id="inputplace1" onchange="onchangeResume(this)">
                                            </div>
                                            <div class="form-group col-md-6">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputeducation1">วุฒิการศึกษา</label>
                                                <input type="text" class="form-control" id="inputeducation1" onchange="onchangeResume(this)">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputtime2">ช่วงเวลา</label>
                                                </br>
                                                <input type="text" class="form-control" style="width:150px" id="inputtime2" onchange="onchangeResume(this)">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputplace2">สถานที่</label>
                                                <input type="text" class="form-control" id="inputplace2" onchange="onchangeResume(this)">
                                            </div>
                                            <div class="form-group col-md-6">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputeducation2">วุฒิการศึกษา</label>
                                                <input type="text" class="form-control" id="inputeducation2" onchange="onchangeResume(this)">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputtime3">ช่วงเวลา</label>
                                                </br>
                                                <input type="text" class="form-control" style="width:150px" id="inputtime3" onchange="onchangeResume(this)"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputplace3">สถานที่</label>
                                                <input type="text" class="form-control" id="inputplace3" onchange="onchangeResume(this)">
                                            </div>
                                            <div class="form-group col-md-6">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputeducation3">วุฒิการศึกษา</label>
                                                <input type="text" class="form-control" id="inputeducation3" onchange="onchangeResume(this)">
                                            </div>
                                        </div>
                                    <label>อาจาย์ที่ปรึกษา</label>
                                    <div class="form-row">
                                    
                                        <div class="form-group col-md-6">
                                        
                                            <label for="inputrefname">ชื่อ-สกุล</label>
                                            <input type="text" class="form-control" id="inputrefname" onchange="onchangeResume(this)">
                                        </div>  
                                        <div class="form-group col-md-6">
                                            <label for="inputrefposition">ตำแหน่ง</label>
                                            <input type="text" class="form-control" id="inputrefposition" onchange="onchangeResume(this)">
                                        </div>                             
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputrefadd">ที่อยู่</label>
                                            <input type="text" class="form-control" id="inputrefadd" onchange="onchangeResume(this)">
                                        </div>  
                                        <div class="form-group col-md-6">
                                            <label for="inputreftel">หมายเลขโทรศัพท์</label>
                                            <input type="text" class="form-control" id="inputreftel" onchange="onchangeResume(this)">
                                        </div>                             
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputrefmail">อีเมล์</label>
                                            <input type="text" class="form-control" id="inputrefmail" onchange="onchangeResume(this)">
                                        </div>  
                                                                    
                                    </div>
                                    <div class="form-row">
                                    <button type="button" class="btn btn-primary" style="width:150px">Save</button>
                                    <button type="button" class="btn btn-warning" style="width:150px">Cancle</button>                                 
                                    </div> -->
                                    <div>
                                    <hr/>
                                    <div class="form-row">
                                       
                                    </div>
                                    <label>การศึกษา</label>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputtime1">ช่วงเวลา</label>
                                                </br>
                                                <input type="text" class="form-control" style="width:150px" id="inputtime1" onchange="onchangeResume(this)"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputplace1">สถานที่</label>
                                                <input type="text" class="form-control" id="inputplace1" onchange="onchangeResume(this)">
                                            </div>
                                            <div class="form-group col-md-6">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputeducation1">วุฒิการศึกษา</label>
                                                <input type="text" class="form-control" id="inputeducation1" onchange="onchangeResume(this)">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputtime2">ช่วงเวลา</label>
                                                </br>
                                                <input type="text" class="form-control" style="width:150px" id="inputtime2" onchange="onchangeResume(this)">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputplace2">สถานที่</label>
                                                <input type="text" class="form-control" id="inputplace2" onchange="onchangeResume(this)">
                                            </div>
                                            <div class="form-group col-md-6">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputeducation2">วุฒิการศึกษา</label>
                                                <input type="text" class="form-control" id="inputeducation2" onchange="onchangeResume(this)">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputtime3">ช่วงเวลา</label>
                                                </br>
                                                <input type="text" class="form-control" style="width:150px" id="inputtime3" onchange="onchangeResume(this)"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputplace3">สถานที่</label>
                                                <input type="text" class="form-control" id="inputplace3" onchange="onchangeResume(this)">
                                            </div>
                                            <div class="form-group col-md-6">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputeducation3">วุฒิการศึกษา</label>
                                                <input type="text" class="form-control" id="inputeducation3" onchange="onchangeResume(this)">
                                            </div>
                                        </div>
                                    <label>อาจาย์ที่ปรึกษา</label>
                                    <div class="form-row">
                                    
                                        <div class="form-group col-md-6">
                                        
                                            <label for="inputrefname">ชื่อ-สกุล</label>
                                            <input type="text" class="form-control" id="inputrefname" onchange="onchangeResume(this)">
                                        </div>  
                                        <div class="form-group col-md-6">
                                            <label for="inputrefposition">ตำแหน่ง</label>
                                            <input type="text" class="form-control" id="inputrefposition" onchange="onchangeResume(this)">
                                        </div>                             
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputrefadd">ที่อยู่</label>
                                            <input type="text" class="form-control" id="inputrefadd" onchange="onchangeResume(this)">
                                        </div>  
                                        <div class="form-group col-md-6">
                                            <label for="inputreftel">หมายเลขโทรศัพท์</label>
                                            <input type="text" class="form-control" id="inputreftel" onchange="onchangeResume(this)">
                                        </div>                             
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputrefmail">อีเมล์</label>
                                            <input type="text" class="form-control" id="inputrefmail" onchange="onchangeResume(this)">
                                        </div>  
                                                                    
                                    </div>
                                    <div class="form-row">
                                    <button type="button" class="btn btn-primary" style="width:150px" id="btnExport">Save</button>
                                    <button type="button" class="btn btn-warning" style="width:150px">Cancle</button>                                 
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
        <script src="selectResume.js"></script>
        <script>
        var resumename
        function clickPreview(txt){
            if(txt.name == "resume-blue"){	
                showResumeblue();
                resumename = "resume-blue";
                document.getElementById("preview").innerHTML = "<img src='../images/resume-templete/" + txt.name + ".png'>";
            }else if(txt.name == "resume-brown"){
                showResumebrown();
                resumename = "resume-brown";
                document.getElementById("preview").innerHTML = "<img src='../images/resume-templete/" + txt.name + ".png'>";
            }else if(txt.name == "resume-pink"){
                showResumepink();
                resumename = "resume-pink";
                document.getElementById("preview").innerHTML = "<img src='../images/resume-templete/" + txt.name + ".png'>";
            }else if(txt.name == "resume-red"){
                showResumered();
                resumename = "resume-red";
                document.getElementById("preview").innerHTML = "<img src='../images/resume-templete/" + txt.name + ".png'>";
            }else{
                showResumebrown();
                resumename = "resume-brown";
                document.getElementById("preview").innerHTML = "<img src='../images/resume-templete/" + txt.name + ".png'>";
            }
            // console.log(resumename)
        
        }     
        function onchangeResume(val){
            var educationyear1 = document.getElementById("inputtime1").value;
                var place1 = document.getElementById("inputplace1").value;
                var education1 = document.getElementById("inputeducation1").value;

                var educationyear2 = document.getElementById("inputtime2").value;
                var place2 = document.getElementById("inputplace2").value;
                var education2 = document.getElementById("inputeducation2").value;

                var educationyear3 = document.getElementById("inputtime3").value;
                var place3 = document.getElementById("inputplace3").value;
                var education3 = document.getElementById("inputeducation3").value;

                var refname = document.getElementById("inputrefname").value;
                var refposition = document.getElementById("inputrefposition").value;
                var refadd = document.getElementById("inputrefadd").value;
                var reftel = document.getElementById("inputreftel").value;
                var refmail = document.getElementById("inputrefmail").value;



                // if(resumename == "resume-blue"){
                 
                    document.getElementById("university1").innerHTML = educationyear1;
                    document.getElementById("university2").innerHTML = place1;
                    document.getElementById("university3").innerHTML = education1;

                    document.getElementById("matthayom1").innerHTML = educationyear2;
                    document.getElementById("matthayom2").innerHTML = place2;
                    document.getElementById("matthayom3").innerHTML = education2;

                    document.getElementById("prathom1").innerHTML = educationyear3;
                    document.getElementById("prathom2").innerHTML = place3;
                    document.getElementById("prathom3").innerHTML = education3;

                    document.getElementById("refname2").innerHTML = refname;
                    document.getElementById("refposition2").innerHTML = refposition;
                    document.getElementById("refadd2").innerHTML = refadd;
                    document.getElementById("reftel2").innerHTML = reftel;
                    document.getElementById("refmail2").innerHTML = refmail;
            }   


            
        </script>

        <?php include('footer.php')?>
        <?php include('import-javascript.php')?>
        <script src="js/index.js"></script>
    </body>
</html>