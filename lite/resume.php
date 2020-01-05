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
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">	
    <link rel="stylesheet" href="./css/stylesheet1.css">
    <link rel="stylesheet" href="./css/stylesheet2.css">
    <!-- <link rel="stylesheet" href="./css/stylesheet6.css"> -->
	
	<script src="showAll.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <?php  include('header.php') ?>
    <style>
    .container {
    position: relative;
    text-align: center;
    color: white;
    }

    .centered {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    }
    </style>

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
                ?>
              
                <div class="centercolumn">
                    <div class="card card-top" style="width: 980px; height: auto; ">
                    <h3>Resume</h3><hr/>
                        <div class="row">
                            <div class="col">

                            </div>
                            <div class="col">
                               <button class="btn btn-outline-primary" name="resume1" onclick="clickPreview(this)"> <img src="../images/resume1.png" width="100%"/></button>
                            </div>
                            <div class="col">
                                <button class="btn btn-outline-primary" name="resume2" onclick="clickPreview(this)"><img src="../images/resume2.png"/></button>
                            </div>
                            <div class="col">
                                <button class="btn btn-outline-primary" name="resume5" onclick="clickPreview(this)"><img src="../images/resume5.png"/></button>
                            </div>
                            <div class="col">
                            </div>
                        </div>
                        <div class="centerresume"id="printable">
                            <div class="card card-top" style="width:100%; height:auto;">
                                <div class="row">
                                    <div class="col">
                                    </div>
                                    <div class="col" >
                                    <div class="container">

                                        <p  id="preview"></p>
                                        <!-- resume2 -->
                                        <div id="resume202">
                                        <div class="fullname2"><p id="fullnameresume2"></p></div>
                                        <div class="thumb-post"><img src="../images/IMG_1908.jpg" style=" position: absolute;top: 18px; left: 627px;width:235px;" id="profilepic2"></div>

                                            <!-- Education -->   
                                                                        
                                            <div style=" position: absolute;top: 270px; left: 50px;font-size: 19px;color:black;"><p id="university1"></p> </div>
                                            <div style=" position: absolute;top: 270px; left: 200px;font-size: 19px;color:black;"><p id="university2"></p> </div>
                                            <div style=" position: absolute;top: 290px; left: 200px;font-size: 19px;color:black;"><p id="university3"></p></div>
                                            <div style=" position: absolute;top: 340px; left: 50px;font-size: 19px;color:black;"><p id="matthayom1"></p></div>
                                            <div style=" position: absolute;top: 340px; left: 200px;font-size:19px;color:black;"><p id="matthayom2"></p></div>
                                            <div style=" position: absolute;top: 360px; left: 200px;font-size:19px;color:black;"><p id="matthayom3"></p></div>
                                            <div style=" position: absolute;top: 410px; left: 50px;font-size: 19px;color:black;"><p id="prathom1"></p></div>
                                            <div style=" position: absolute;top: 410px; left: 200px;font-size:19px;color:black;"><p id="prathom2"></p></div>
                                            <div style=" position: absolute;top: 430px; left: 200px;font-size:19px;color:black;"><p id="prathom3"></p></div>

                                            <!-- Activities (ดึงจากฐานข้อมูล)-->   
                                            <div style=" position: absolute;top: 640px; left: 50px;font-size: 19px;color:black;"><p id="activitiesyear201">2019</p> </div>
                                            <div style=" position: absolute;top: 640px; left: 200px;font-size: 19px;color:black;"><p id="activitiesdetail201">Group Project "Park me"</p> </div>
                                            <div style=" position: absolute;top: 740px; left: 50px;font-size: 19px;color:black;"><p id="activitiesyear202">2018 </p></div>
                                            <div style=" position: absolute;top: 740px; left: 200px;font-size:19px;color:black;"><p id="activitiesdetail202">Staff : SUT Sprt Day </p></div>
                                            <div style=" position: absolute;top: 840px; left: 50px;font-size: 19px;color:black;"><p id="activitiesyear203">2017 </p></div>
                                            <div style=" position: absolute;top: 840px; left: 200px;font-size:19px;color:black;"><p id="activitiesdetail203">Student Union : Academic Year 2017</p></div>

                                            <!-- References -->
                                            <div style=" position: absolute;top: 1000px; left: 50pxfont-size: 19px;color:black;"><p id="refname2"></p> </div>
                                            <div style=" position: absolute;top: 1050px; left: 50px;font-size: 19px;color:black;"><p id="refposition2"></p> </div>
                                            <div style=" position: absolute;top: 1100px; left: 50px;font-size: 19px;color:black;"><p id="refadd2"></p></div>
                                            <div style=" position: absolute;top: 1150px; left: 50px;font-size:19px;color:black;">Tel. <span id="reftel2"></span></div>
                                            <div style=" position: absolute;top: 1200px; left: 50px;font-size: 19px;color:black;">Email: <span id="refmail2"></span></div>
                                            
                                            <!-- Contact -->
                                            <div style=" position: absolute;top: 345px; left: 630px;font-size: 19px;color:black;">Tel. <span id="abouttel2"></span> </div>
                                            <div style=" position: absolute;top: 380px; left: 630px;font-size: 19px;color:black;">Email. <span id="aboutmail2"></span> </div>
                                            <div style=" position: absolute;top: 415px; left: 630px;font-size: 19px;color:black; width:30%;text-align:left;">Address. <span id="aboutadd2" style=" text-align:left;"></span></div>

                                            <!-- skills (ดึงจากฐานข้อมูล) -->
                                            <div style=" position: absolute;top: 710px; left: 640px;font-size: 19px;color:black;"><p id="skill201">Coding</p> </div>
                                            <div style=" position: absolute;top: 740px; left: 640px;font-size: 19px;color:black;"><p id="level201"><i class="material-icons">fiber_manual_record</i></p> </div>
                                            <div style=" position: absolute;top: 770px; left: 640px;font-size: 19px;color:black;"><p id="skill202">Design</p> </div>
                                            <div style=" position: absolute;top: 810px; left: 640px;font-size: 19px;color:black;"><p id="level202"><i class="material-icons">fiber_manual_record</i><i class="material-icons">fiber_manual_record</i><i class="material-icons">fiber_manual_record</i></p> </div>

                                        </div>
                                    </div>
                                    </div>             
                                    <div class="col">
                                    </div>
                                </div>
                                <div>
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
                                    </div>
                                   
                                </div>
                            </div>
                        </div>

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
    <script>
        var resumename
        function clickPreview(txt){
            if(txt.name == "resume1"){	
                resumename = "resume1";
                document.getElementById("preview").innerHTML = "<img src='../images/" + txt.name + ".png'>";
            }else if(txt.name == "resume2"){
                resumename = "resume2";
                document.getElementById("preview").innerHTML = "<img src='../images/" + txt.name + ".png'>";
            }else if(txt.name == "resume5"){
                resumename = "resume5";
                document.getElementById("preview").innerHTML = "<img src='../images/" + txt.name + ".png'>";
            }else{
                resumename = "resume2";
                document.getElementById("preview").innerHTML = "<img src='../images/" + txt.name + ".png'>";
            }
            console.log(resumename)
        
        }
        function onchangeResume(val){
                var fullname = document.getElementById("inputfullname").value;
                var picture = document.getElementById("inputfile").value;
                var phone = document.getElementById("inputtelphone").value;
                var email = document.getElementById("inputemail").value;
                var address = document.getElementById("inputaddress").value;
                var aboutme = document.getElementById("inputaboutme").value;

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



                if(resumename == "resume2"){
                    document.getElementById("fullnameresume2").innerHTML = fullname;
                    // document.getElementById("profilepic2").innerHTML = picture;
                    document.getElementById("abouttel2").innerHTML = phone;
                    document.getElementById("aboutmail2").innerHTML = email;
                    document.getElementById("aboutadd2").innerHTML = address;
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

                }else{
                    document.getElementById("fullnameresume2").innerHTML = fullname;
                    // document.getElementById("profilepic2").innerHTML = picture;
                    document.getElementById("abouttel2").innerHTML = phone;
                    document.getElementById("aboutmail2").innerHTML = email;
                    document.getElementById("aboutadd2").innerHTML = address;
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
            }
    </script>
</body>

</html>
