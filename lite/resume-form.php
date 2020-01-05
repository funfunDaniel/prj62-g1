

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
            <link rel="stylesheet" type="text/css" href="./css/print.css">
            <!-- <link rel="stylesheet" href="./css/stylesheet6.css"> -->
            
            <script src="showAll.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <?php  include('header.php') ?>
        <style>
        .printme {
        display: none;
    }
    @media print {
        .no-printme  {
            display: none;
        }
        .printme  {
            display: block;
        }
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
                                                <button class="btn btn-outline-primary" name="resume-red" onclick="clickPreview(this)"><img src="../images/resume-templete/resume-red.png"/></button>
                                            </div>
                                            <div class="col">
                                            </div>
                                        </div>
                                        <hr/>
                                      
                                        <!-- resume container-->  
                                    <div class="container" id="divResume" >        
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
                                    <input class="btn btn-warning" style="width:150px" id="btn-Preview-Image" type="button" value="Preview" />   
                                    <!-- <input id="btn-Convert-Html2Image" type="button" value="Download" />   -->
                                    <a class="btn btn-primary" style="width:150px" id="btn-Convert-Html2Image" href="#"> Download </a> 
                                     <!-- <button type="button" class="btn btn-primary" style="width:150px" id="btn-Convert-Html2Image" >Save</button> -->
                                    <!-- <button type="button" class="btn btn-warning" style="width:150px">Cancle</button>                                  -->
                                    </div>
                                    <div id="previewImage"></div> 
                                     

                                   
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
                getQRcode2()
                showResumeblue();
                resumename = "resume-blue";
                cleartext()
            }else if(txt.name == "resume-brown"){
                getQRcode2()
                showResumebrown();
                resumename = "resume-brown";
                cleartext()
            }else if(txt.name == "resume-pink"){
                getQRcode2()
                showResumepink();
                resumename = "resume-pink";
                cleartext()
            }else if(txt.name == "resume-red"){
                getQRcode()
                showResumered();
                resumename = "resume-red";
                cleartext()
            }else{
                getQRcode2()
                showResumebrown();
                resumename = "resume-brown";
                cleartext()
            }
        
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
        function cleartext()
            {
             
                
                document.getElementById('inputtime1').value = '';
                document.getElementById('inputplace1').value = '';
                document.getElementById('inputeducation1').value = '';

                document.getElementById('inputtime2').value = '';
                document.getElementById('inputplace2').value = '';
                document.getElementById('inputeducation2').value = '';

                document.getElementById('inputtime3').value = '';
                document.getElementById('inputplace3').value = '';
                document.getElementById('inputeducation3').value = '';
                
                document.getElementById('inputrefname').value = '';
                document.getElementById('inputrefposition').value = '';
                document.getElementById('inputrefadd').value = '';
                document.getElementById('inputreftel').value = '';
                document.getElementById('inputrefmail').value = '';
            }
        </script>
         <script src="../assets/jsPDF/jspdf.debug.js"></script>
         <script type="text/javascript">

// $(document).ready(function() {
    
    new QRCode(document.getElementById("qrcode"),{
            text: "https://www.ninenik.com",
            width: 100,
            height: 100,
            colorDark : "#000",
            colorLight : "#fff",
            correctLevel : QRCode.CorrectLevel.M        
            });
// })
</script>
        <script src="../assets/jsPDF/examples/js/html2canvas.js"></script>

        <script> 
                    $(document).ready(function() { 
          
                    // Global variable 
                    var element = $("#divResume");  
                    
                    // Global variable 
                    var getCanvas;  

                    $("#btn-Preview-Image").on('click', function() { 
                        html2canvas(element, { 
                            onrendered: function(canvas) { 
                                $("#previewImage").html(canvas); 
                                getCanvas = canvas; 
                            } 
                        }); 
                    }); 

                    $("#btn-Convert-Html2Image").on('click', function() { 
                        var imgageData =  
                            getCanvas.toDataURL("image/png"); 
                        
                        // Now browser starts downloading  
                        // it instead of just showing it 
                        var newData = imgageData.replace( 
                        /^data:image\/png/, "data:application/octet-stream"); 
                        
                        $("#btn-Convert-Html2Image").attr( 
                        "download", "MyResume.png").attr( 
                        "href", newData); 
                    }); 
                }); 
            </script> 

        <?php include('footer.php')?>
        <?php include('import-javascript.php')?>
        <script src="js/index.js"></script>
        
    </body>
</html>

                                                                
