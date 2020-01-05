<?php 
    session_start();
?>

  <style>
       
       .thumb-post1 img {
       object-fit: fill;
       object-position: center;
       height:257px;
      
   }
   </style>
<p  id="preview"><img src="../images/resume-templete/resume-blue.png" style="height:1350px;width:1020px;"></p>
    <!-- resume2 -->
    <div id="resume202">
        <div>
            <p id="fullnameresume2" style="color:white; position: absolute;top: 50px; left: 30px;  font-size: 55px;"></p>
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
                <div style=" position: absolute;top: 1200px; left: 80px;font-size: 19px;color:black;">Address : <span id="refadd2"></span></div>
                <div style=" position: absolute;top: 1250px; left: 80px;font-size:19px;color:black;">Tel. : <span id="reftel2"></span></div>
                <div style=" position: absolute;top: 1300px; left: 80px;font-size: 19px;color:black;">Email : <span id="refmail2"></span></div>                                               
            <!-- Contact -->
                <div style=" position: absolute;top: 385px; left: 680px;font-size: 19px;color:black;">Tel. : <span id="abouttel2"></span> </div>
                <div style=" position: absolute;top: 420px; left: 680px;font-size: 19px;color:black;">Email : <span id="aboutmail2"></span></div>
                <div style=" position: absolute;top: 455px; left: 680px;font-size: 19px;color:black; width:25%;text-align:left;">Address : <span id="aboutadd2" style=" text-align:left;"></span></div>
            <!-- skills (ดึงจากฐานข้อมูล) -->
                <table class="table-borderless " id="skill-table" >
                    <tbody style="position: absolute;top: 790px; left: 690px;width:auto">
                    </tbody>
                </table>
                <div style=" position: absolute;top:1100px; left: 710px;font-size: 19px;color:black;"  id="qrcode">
                    <!-- <img src="../images/student.png" style="width:200px"> -->
                </div>
    </div>
</div>
                                   