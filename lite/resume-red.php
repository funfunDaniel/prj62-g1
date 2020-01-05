<html>
<head>
        <?php  include('header.php') ?>
        <script src = "https://davidshimjs.github.io/qrcodejs/qrcode.min.js"></script> 
        <script src = "https://davidshimjs.github.io/qrcodejs/qrcode.js"></script>
        <style>
        
                .thumb-post1 img {
                object-fit: fill;
                object-position: center;
                height:272px;
            
            }
            </style>
</head>
<body>
<p  id="preview"><img src="../images/resume-templete/resume-red.png" style="height:1350px;width:1020px;"></p>
    <!-- resume2 -->
    <div id="resume202">
        <div>
            <p id="fullnameresume2" style="color:white; position: absolute;top: 100px; left: 350px;  font-size: 40px;"></p>
        </div>

        <div class="thumb-post1" id="picprofile">
            <!-- <img src="../images/IMG_1908.jpg" style=" position: absolute;top: 18px; left: 627px;width:235px;" id="profilepic2"> -->
        </div>

            <!-- Education -->   
                <div style=" position: absolute;top: 400px; left: 400px;font-size: 19px;color:black;"><p id="university1"></p> </div>
                <div style=" position: absolute;top: 400px; left: 550px;font-size: 19px;color:black;"><p id="university2"></p> </div>
                <div style=" position: absolute;top: 420px; left: 550px;font-size: 19px;color:black;"><p id="university3"></p></div>
                <div style=" position: absolute;top: 470px; left: 400px;font-size: 19px;color:black;"><p id="matthayom1"></p></div>
                <div style=" position: absolute;top: 470px; left: 550px;font-size:19px;color:black;"><p id="matthayom2"></p></div>
                <div style=" position: absolute;top: 490px; left: 550px;font-size:19px;color:black;"><p id="matthayom3"></p></div>
                <div style=" position: absolute;top: 540px; left: 400px;font-size: 19px;color:black;"><p id="prathom1"></p></div>
                <div style=" position: absolute;top: 540px; left: 550px;font-size:19px;color:black;"><p id="prathom2"></p></div>
                <div style=" position: absolute;top: 560px; left: 550px;font-size:19px;color:black;"><p id="prathom3"></p></div>

            <!-- Activities (ดึงจากฐานข้อมูล)-->   
                <table class="table-borderless " id="data-table" >
                    <tbody style="position: absolute;top: 700px; left: 20px;width:auto">
                    </tbody>
                </table>
            <!-- References -->
                <div style=" position: absolute;top: 1100px; left: 400px;font-size: 19px;color:black;"><p id="refname2"></p> </div>
                <div style=" position: absolute;top: 1150px; left: 400px;font-size: 19px;color:black;"><p id="refposition2"></p> </div>
                <div style=" position: absolute;top: 1200px; left: 400px;font-size: 19px;color:black;">Address : <span id="refadd2"></span></div>
                <div style=" position: absolute;top: 1250px; left: 400px;font-size:19px;color:black;">Tel. : <span id="reftel2"></span></div>
                <div style=" position: absolute;top: 1300px; left: 400px;font-size: 19px;color:black;">Email : <span id="refmail2"></span></div>                                               
            <!-- Contact -->
                <div style=" position: absolute;top: 400px; left: 20px;font-size: 19px;color:black;">Tel. : <span id="abouttel2"></span> </div>
                <div style=" position: absolute;top: 435px; left: 20px;font-size: 19px;color:black;">Email : <span id="aboutmail2"></span></div>
                <div style=" position: absolute;top: 470px; left: 20px;font-size: 19px;color:black; width:25%;text-align:left;">Address : <span id="aboutadd2" style=" text-align:left;"></span></div>
            <!-- skills (ดึงจากฐานข้อมูล) -->
                <table class="table-borderless " id="skill-table" >
                    <tbody style="position: absolute;top: 700px; left: 400px;width:auto">
                    </tbody>
                </table>
                <div style="position: absolute;top:1090px; left: 70px;font-size: 19px;color:black;" id="qrcode">
                    <!-- <img src="../images/student.png" style="width:200px"> -->
                    <!-- <div id="qrcode"></div> -->
                    <!-- <div id="qrcode">hgflkjlhj;lj</div> -->
                </div>
        
    </div>
</div>

</body>
</html>



                                        

                                            