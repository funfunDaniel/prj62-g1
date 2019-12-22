<?php 
    session_start();
?>
<html lang="en">
    <head>
        <title>
            คลังผลงาน | Resume
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

        <?php  include('header.php') ?>
        <style>
       
            .thumb-post1 img {
            object-fit: fill;
            object-position: center;
            height:257px;
           
        }
        </style>
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
                                            </div>
                                        </div>
                                        
                                        <div class="container" id="divResume">

                                            <p  id="preview"><img src="../images/resume-templete/resume-brown.png"></p>
                                            <!-- resume2 -->
                                            <div id="resume202">
                                            <div>
                                                <p id="fullnameresume2" style="color:white; position: absolute;top: 60px; left: 100px;  font-size: 40px;">
                                                </p>
                                            </div>

                                            <div class="thumb-post1" id="picprofile">
                                                <!-- <img src="../images/IMG_1908.jpg" style=" position: absolute;top: 18px; left: 627px;width:235px;" id="profilepic2"> -->
                                            </div>

                                                <!-- Education -->   
                                                                            
                                                <div style=" position: absolute;top: 290px; left: 50px;font-size: 19px;color:black;"><p id="university1"></p> </div>
                                                <div style=" position: absolute;top: 290px; left: 200px;font-size: 19px;color:black;"><p id="university2"></p> </div>
                                                <div style=" position: absolute;top: 310px; left: 200px;font-size: 19px;color:black;"><p id="university3"></p></div>
                                                <div style=" position: absolute;top: 360px; left: 50px;font-size: 19px;color:black;"><p id="matthayom1"></p></div>
                                                <div style=" position: absolute;top: 360px; left: 200px;font-size:19px;color:black;"><p id="matthayom2"></p></div>
                                                <div style=" position: absolute;top: 380px; left: 200px;font-size:19px;color:black;"><p id="matthayom3"></p></div>
                                                <div style=" position: absolute;top: 430px; left: 50px;font-size: 19px;color:black;"><p id="prathom1"></p></div>
                                                <div style=" position: absolute;top: 430px; left: 200px;font-size:19px;color:black;"><p id="prathom2"></p></div>
                                                <div style=" position: absolute;top: 450px; left: 200px;font-size:19px;color:black;"><p id="prathom3"></p></div>

                                                <!-- Activities (ดึงจากฐานข้อมูล)-->   
                                                <table class="table-borderless " id="data-table" >
                                                    <tbody style="position: absolute;top: 680px; left: 50px;width:auto">
                                                    </tbody>
                                                </table>
                                                <!-- References -->
                                                <div style=" position: absolute;top: 1100px; left: 80px;font-size: 19px;color:black;"><p id="refname2"></p> </div>
                                                <div style=" position: absolute;top: 1150px; left: 80px;font-size: 19px;color:black;"><p id="refposition2"></p> </div>
                                                <div style=" position: absolute;top: 1200px; left: 80px;font-size: 19px;color:black;"><p id="refadd2"></p></div>
                                                <div style=" position: absolute;top: 1250px; left: 80px;font-size:19px;color:black;"> <span id="reftel2"></span></div>
                                                <div style=" position: absolute;top: 1300px; left: 80px;font-size: 19px;color:black;"><span id="refmail2"></span></div>
                                                
                                                <!-- Contact -->
                                                <div style=" position: absolute;top: 385px; left: 680px;font-size: 19px;color:black;">Tel. : <span id="abouttel2"></span> </div>
                                                <div style=" position: absolute;top: 420px; left: 680px;font-size: 19px;color:black;">Email : <span id="aboutmail2"></span></div>
                                                <div style=" position: absolute;top: 455px; left: 680px;font-size: 19px;color:black; width:25%;text-align:left;">Address : <span id="aboutadd2" style=" text-align:left;"></span></div>

                                                <!-- skills (ดึงจากฐานข้อมูล) -->
                                                <table class="table-borderless " id="skill-table" >
                                                    <tbody style="position: absolute;top: 790px; left: 690px;width:auto">
                                                    </tbody>
                                                </table>

                                            </div>
                                            </div>
                                            </div>             
                                  

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

        <script>
        var resumename
        function clickPreview(txt){
            if(txt.name == "resume-blue"){	
                resumename = "resume-blue";
                document.getElementById("preview").innerHTML = "<img src='../images/resume-templete/" + txt.name + ".png'>";
            }else if(txt.name == "resume-brown"){
                resumename = "resume-brown";
                document.getElementById("preview").innerHTML = "<img src='../images/resume-templete/" + txt.name + ".png'>";
            }else if(txt.name == "resume-pink"){
                resumename = "resume-pink";
                document.getElementById("preview").innerHTML = "<img src='../images/resume-templete/" + txt.name + ".png'>";
            }else{
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



                if(resumename == "resume2"){
                 
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


            $(document).ready(function(){
            $.ajax({
                url: './MySQL/student/get-json-resume.php',
                type: 'get',
                dataType: 'JSON',
                success: function(resp){
                    console.log(resp);
                    // ข้อมูลส่วนตัว ใช้ getelementbyid ได้เลย
                    var name = resp[0].name
                    var address = resp[0].address
                    var email = resp[0].email
                    var tel = resp[0].telephone
                    var img = resp[0].image
                    $("#fullnameresume2").append(name);
                    $("#abouttel2").append(tel);
                    $("#aboutmail2").append(email);
                    $("#aboutadd2").append(address);

                    // loop ดึงกิจกรรม
                    var len = resp.length;
                    for(var i=0; i<len; i++){
                        var actname = resp[i].actname;
                        var actdate = resp[i].actdate;
                        var acttype = resp[i].acttype;
                        var date = actdate.substring(0,4);
                        var skill = resp[i].skillname;
                        
                        console.log(pix);
                        var pix = "<img src='../import-files/user-img/" + img + "' style=' position: absolute ;top: 20px; left: 684px; width:257px;'/>"
                        $("#picprofile").append(pix);

                        var tr_skill = "<tr>" +
                        "<td  style='font-size: 19px;color:black;width:100px;'>" + skill + "</td> " +
                        "<td  style='position: absolute;font-size: 19px;color:black;width:500px;'><i class='material-icons'>fiber_manual_record</i></td> " +
                        "</tr>";
                        $("#skill-table tbody").append(tr_skill);

                        var tr_str = "<tr>" +
                        "<td  style='font-size: 19px;color:black;width:100px;'>" + date + "</td> " +
                        "<td  style='position: absolute;font-size: 19px;color:black;width:500px;'>" + actname + "</td> " +
                        "</tr>";
                        $("#data-table tbody").append(tr_str);
                    }"<br/>"

                }
            });
        });

        
        </script>
         <script src="../assets/jsPDF/jspdf.debug.js"></script>
            <script src="../assets/jsPDF/examples/js/html2canvas.js"></script>

            <script>

                var doc = new jsPDF();

                var specialElementHandlers = {
                    '#divResume': function(element, renderer){
                        return true;
                    }
                };


                $('#btnExport').click(function(){
                    var html=$("#inner").html();
                    doc.fromHTML(html,0,0, {
                        'width': 500,
                        'elementHandlers': specialElementHandlers
                    });
                    doc.save("Test.pdf");
                });

            </script>

        <?php include('footer.php')?>
        <?php include('import-javascript.php')?>
        <script src="js/index.js"></script>
    </body>
</html>