<html>
<head>
        <?php  include('header.php') ?>
        <script src = "https://davidshimjs.github.io/qrcodejs/qrcode.min.js"></script> 
        <script src = "https://davidshimjs.github.io/qrcodejs/qrcode.js"></script>
        <style>
     
                .bg{height:80em;}
                .fullname{color:white; position: absolute;top: 1.5em; left: 2.3em;  font-size: 35px;}
                .pic{position: absolute;top: 1.2em;left: 41em;width: 15.4em;height: 15.6em;}
                .education1{position: absolute;top: 16em; left: 3.5emem;font-size: 18px;color:black; }
                .education2{position: absolute;top: 16em; left: 13em;font-size: 18px;color:black; }
                .education3{position: absolute;top: 18em; left: 13em;font-size: 18px;color:black; }
                .education4{position: absolute;top: 20em; left: 3.5emem;font-size: 18px;color:black; }
                .education5{position: absolute;top: 20em; left: 13em;font-size: 18px;color:black; }
                .education6{position: absolute;top: 22em; left: 13em;font-size: 18px;color:black; }
                .education7{position: absolute;top: 24em; left: 3.5emem;font-size: 18px;color:black; }
                .education8{position: absolute;top: 24em; left: 13em;font-size: 18px;color:black; }
                .education9{position: absolute;top: 26em; left: 13em;font-size: 18px;color:black; }
                .contact1{position: absolute;top: 20em; left: 34em;font-size: 18px;color:black;}
                .contact2{position: absolute;top: 22em; left: 34em;font-size: 18px;color:black; width:25%;}
                .contact3{position: absolute;top: 24em; left: 34em;font-size: 18px;color:black; width:25%;text-align:left;}
                .activities{position: absolute;top: 34em; left: 3.5em;width:500px;font-size: 18px;}
                .skill{position: absolute;top: 38em; left: 35em;width:auto;font-size: 18px;}
                .ref1{position: absolute;top: 54em;left: 3.5em;font-size: 18px;color:black;}
                .ref2{position: absolute;top: 56em; left: 3.5em;font-size: 18px;color:black;}
                .ref3{position: absolute;top: 58em; left: 3.5em;font-size: 18px;color:black;}
                .ref4{position: absolute;top: 60em; left: 3.5em;font-size: 18px;color:black;}
                .ref5{position: absolute;top: 62em; left: 3.5em;font-size: 18px;color:black;}
                .qrcode{position: absolute;top:58.2em; left: 37.5em;font-size: 18px;color:black;width: 6em;height: 6em;}
                .td1{color:black;width:100px;}
                .material-icons {font-family: 'Material Icons';font-weight: normal;font-style: normal;font-size: 24px;line-height: 1;letter-spacing: normal;text-transform: none;
                                    display: inline-block;white-space: nowrap;word-wrap: normal;direction: ltr;text-rendering: optimizeLegibility;-webkit-font-smoothing: antialiased;}
        /*จอใหญ่*/
        @media screen and (max-width: 1280px) and (min-width: 960px) {
            .bg{height:40em;}
                .fullname{color:white; position: absolute;top: 2.4em; left: 3.5em;  font-size: 14px;}
                .pic{position: absolute;top: 0.5em;left: 21em;width: 7.7em;height: 7.8em;}
                .education1{position: absolute;top: 11em; left: 3.5em;font-size: 12px;color:black; }
                .education2{position: absolute;top: 11em; left: 13em;font-size: 12px;color:black; }
                .education3{position: absolute;top: 13em; left: 13em;font-size: 12px;color:black; }
                .education4{position: absolute;top: 15em; left: 3.5em;font-size: 12px;color:black; }
                .education5{position: absolute;top: 15em; left: 13em;font-size: 12px;color:black; }
                .education6{position: absolute;top: 17em; left: 13em;font-size: 12px;color:black; }
                .education7{position: absolute;top: 19em; left: 3.5em;font-size: 12px;color:black; }
                .education8{position: absolute;top: 19em; left: 13em;font-size: 12px;color:black; }
                .education9{position: absolute;top: 21em; left: 13em;font-size: 12px;color:black; }
                .contact1{position: absolute;top: 14em; left: 26em;font-size: 12px;color:black;}
                .contact2{position: absolute;top: 16em; left: 26em;font-size: 12px;color:black; width:18%;}
                .contact3{position: absolute;top: 19.5em; left: 26em;font-size: 12px;color:black; width:16%;text-align:left;}
                .activities{position: absolute;top: 25em; left: 3.5em;width:500px;font-size: 12px;}
                .skill{position: absolute;top: 29em; left: 26em;width:auto;font-size: 12px;}
                .ref1{position: absolute;top: 40em;left: 3.5em;font-size: 12px;color:black;}
                .ref2{position: absolute;top: 42em; left: 3.5em;font-size: 12px;color:black;}
                .ref3{position: absolute;top: 44em; left: 3.5em;font-size: 12px;color:black;}
                .ref4{position: absolute;top: 46em; left: 3.5em;font-size:12px;color:black;}
                .ref5{position: absolute;top: 48em; left: 3.5em;font-size: 12px;color:black;}
                .qrcode{position: absolute;top:42.2em; left: 27.5em;font-size: 12px;color:black;width: 6em;height: 6em;}
                .td1{color:black;width:100px;}
                .material-icons {font-family: 'Material Icons';font-weight: normal;font-style: normal;font-size: 16px;line-height: 1;letter-spacing: normal;text-transform: none;
                                    display: inline-block;white-space: nowrap;word-wrap: normal;direction: ltr;text-rendering: optimizeLegibility;-webkit-font-smoothing: antialiased;}

           
        }
        /*จอกลาง*/      
        @media screen and (max-width: 960px) and (min-width: 587px) {
                .bg{height:40em;}
                .fullname{color:white; position: absolute;top: 1.9em; left: 3em;  font-size: 16px;}
                .pic{position: absolute;top: 0.5em;left: 21em;width: 7.7em;height: 7.8em;}
                .education1{position: absolute;top: 11em; left: 3.5em;font-size: 12px;color:black; }
                .education2{position: absolute;top: 11em; left: 13em;font-size: 12px;color:black; }
                .education3{position: absolute;top: 13em; left: 13em;font-size: 12px;color:black; }
                .education4{position: absolute;top: 15em; left: 3.5em;font-size: 12px;color:black; }
                .education5{position: absolute;top: 15em; left: 13em;font-size: 12px;color:black; }
                .education6{position: absolute;top: 17em; left: 13em;font-size: 12px;color:black; }
                .education7{position: absolute;top: 19em; left: 3.5em;font-size: 12px;color:black; }
                .education8{position: absolute;top: 19em; left: 13em;font-size: 12px;color:black; }
                .education9{position: absolute;top: 21em; left: 13em;font-size: 12px;color:black; }
                .contact1{position: absolute;top: 14em; left: 26em;font-size: 12px;color:black;}
                .contact2{position: absolute;top: 16em; left: 26em;font-size: 12px;color:black; width:25%;}
                .contact3{position: absolute;top: 19.5em; left: 26em;font-size: 12px;color:black; width:25%;text-align:left;}
                .activities{position: absolute;top: 25em; left: 3.5em;width:500px;font-size: 12px;}
                .skill{position: absolute;top: 29em; left: 26em;width:auto;font-size: 12px;}
                .ref1{position: absolute;top: 40em;left: 3.5em;font-size: 12px;color:black;}
                .ref2{position: absolute;top: 42em; left: 3.5em;font-size: 12px;color:black;}
                .ref3{position: absolute;top: 44em; left: 3.5em;font-size: 12px;color:black;}
                .ref4{position: absolute;top: 46em; left: 3.5em;font-size:12px;color:black;}
                .ref5{position: absolute;top: 48em; left: 3.5em;font-size: 12px;color:black;}
                .qrcode{position: absolute;top:42.2em; left: 27.5em;font-size: 12px;color:black;width: 6em;height: 6em;}
                .material-icons {
                    font-family: 'Material Icons';
                    font-weight: normal;
                    font-style: normal;
                    font-size: 17px;
                    line-height: 1;
                    letter-spacing: normal;
                    text-transform: none;
                    display: inline-block;
                    white-space: nowrap;
                    word-wrap: normal;
                    direction: ltr;
                    text-rendering: optimizeLegibility;
                    -webkit-font-smoothing: antialiased;
                }
 
                 
        }

        /*จอเล็ก*/
        @media screen and (max-width: 586px) and (min-width: 401px) {
            .bg{height:29em;}
                .fullname{color:white; position: absolute;top: 1.8em; left: 3.5em;  font-size: 12px;}
                .pic{position: absolute;top: 0.4em;left: 15.5em;width: 5.6em;height:5.7em;}
                .education1{position: absolute;top: 18em; left: 6.5em;font-size: 5px;color:black; }
                .education2{position: absolute;top: 18em; left: 16em;font-size: 5px;color:black; }
                .education3{position: absolute;top: 21em; left: 16em;font-size: 5px;color:black; }
                .education4{position: absolute;top: 24em; left: 6.5em;font-size: 5px;color:black; }
                .education5{position: absolute;top: 24em; left: 16em;font-size: 5px;color:black; }
                .education6{position: absolute;top: 27em; left: 16em;font-size: 5px;color:black; }
                .education7{position: absolute;top: 30em; left: 6.5em;font-size: 5px;color:black; }
                .education8{position: absolute;top: 30em; left: 16em;font-size: 5px;color:black; }
                .education9{position: absolute;top: 33em; left: 16em;font-size: 5px;color:black; }
                .contact1{position: absolute;top: 24em; left: 46em;font-size: 5px;color:black;}
                .contact2{position: absolute;top: 27em; left: 46em;font-size: 5px;color:black;}
                .contact3{position: absolute;top: 32em; left: 46em;font-size: 5px;color:black; width:22%;text-align:left;}
                .activities{position: absolute;top: 44em; left: 6.5em;width:500px;font-size:5px;}
                .skill{position: absolute;top: 50em; left: 46em;width:auto;font-size:5px;}
                .ref1{position: absolute;top: 70em;left: 6.5em;font-size: 5px;color:black;}
                .ref2{position: absolute;top: 73em; left: 6.5em;font-size: 5px;color:black;}
                .ref3{position: absolute;top: 76em; left: 6.5em;font-size: 5px;color:black;}
                .ref4{position: absolute;top: 79em; left: 6.5em;font-size:5px;color:black;}
                .ref5{position: absolute;top: 82em; left: 6.5em;font-size: 5px;color:black;}
                .td1{color:black;width:30px;}
                .qrcode{position: absolute;top: 74em;left: 50.5em;font-size: 5px;color: black;width: 8em;height: 8em;}
                .material-icons {
                    font-family: 'Material Icons';
                    font-weight: normal;
                    font-style: normal;
                    font-size: 11px;
                    line-height: 1;
                    letter-spacing: normal;
                    text-transform: none;
                    display: inline-block;
                    white-space: nowrap;
                    word-wrap: normal;
                    direction: ltr;
                    text-rendering: optimizeLegibility;
                    -webkit-font-smoothing: antialiased;
                }
 
 
        }

                /* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
                @media (max-width: 400px) {
                .bg{height:382.25px;}
                .fullname{color:white; position: absolute;top: 1.5em; left: 2.3em;  font-size: 12px;}
                .pic{position: absolute;top: 0.3em;left: 11em;width: 3.9em;height:4.9em;}
                .education1{position: absolute;top: 17em; left: 5.5em;font-size: 5px;color:black; }
                .education2{position: absolute;top: 17em; left: 15em;font-size: 5px;color:black; }
                .education3{position: absolute;top: 19em; left: 15em;font-size: 5px;color:black; }
                .education4{position: absolute;top: 22em; left: 5.5em;font-size: 5px;color:black; }
                .education5{position: absolute;top: 22em; left: 15em;font-size: 5px;color:black; }
                .education6{position: absolute;top: 25em; left: 15em;font-size: 5px;color:black; }
                .education7{position: absolute;top: 28em; left: 5.5em;font-size: 5px;color:black; }
                .education8{position: absolute;top: 28em; left: 15em;font-size: 5px;color:black; }
                .education9{position: absolute;top: 30em; left: 15em;font-size: 5px;color:black; }
                .contact1{position: absolute;top: 21em; left: 33em;font-size: 5px;color:black;}
                .contact2{position: absolute;top: 23em; left: 33em;font-size: 5px;color:black;}
                .contact3{position: absolute;top: 28em; left: 33em;font-size: 5px;color:black; width:28%;text-align:left;}
                .activities{position: absolute;top: 39em; left: 5.5em;width:500px;font-size:5px;}
                .skill{position: absolute;top: 44em; left: 33em;width:auto;font-size:5px;}
                .ref1{position: absolute;top: 62em;left: 5.5em;font-size: 5px;color:black;}
                .ref2{position: absolute;top: 65em; left: 5.5em;font-size: 5px;color:black;}
                .ref3{position: absolute;top: 68em; left: 5.5em;font-size: 5px;color:black;}
                .ref4{position: absolute;top: 71em; left: 5.5em;font-size:5px;color:black;}
                .ref5{position: absolute;top: 74em; left: 5.5em;font-size: 5px;color:black;}
                .td1{color:black;width:30px;}
                .qrcode{position: absolute;top: 66em;left: 172px;font-size: 5px;color: black;width: 8em;height: 8em;}
                .material-icons {
                    font-family: 'Material Icons';
                    font-weight: normal;
                    font-style: normal;
                    font-size: 5px;
                    line-height: 1;
                    letter-spacing: normal;
                    text-transform: none;
                    display: inline-block;
                    white-space: nowrap;
                    word-wrap: normal;
                    direction: ltr;
                    text-rendering: optimizeLegibility;
                    -webkit-font-smoothing: antialiased;
                }
                }
            
            </style>
</head>
<body>
<p  id="preview"><img src="../images/resume-templete/resume-brown.png" class="bg"></p>
    <!-- resume2 -->
    <div id="resume202">
        <div>
            <p id="fullnameresume2" class="fullname"></p>
        </div>

        <div class="thumb-post1" id="picprofile">
            <!-- <img src="../images/IMG_1908.jpg" style=" position: absolute;top: 18px; left: 627px;width:235px;" id="profilepic2"> -->
        </div>

            <!-- Education -->   
                <div class="education1"><p id="university1"></p> </div>
                <div class="education2"><p id="university2"></p> </div>
                <div class="education3"><p id="university3"></p></div>
                <div class="education4"><p id="matthayom1"></p></div>
                <div class="education5"><p id="matthayom2"></p></div>
                <div class="education6"><p id="matthayom3"></p></div>
                <div class="education7"><p id="prathom1"></p></div>
                <div class="education8"><p id="prathom2"></p></div>
                <div class="education9"><p id="prathom3"></p></div>

            <!-- Activities (ดึงจากฐานข้อมูล)-->   
                <table class="table-borderless " id="data-table" >
                    <tbody class="activities">
                    </tbody>
                </table>
            <!-- References -->
                <div class="ref1"><p id="refname2"></p> </div>
                <div class="ref2"><p id="refposition2"></p> </div>
                <div class="ref3">Address : <span id="refadd2"></span></div>
                <div class="ref4">Tel. : <span id="reftel2"></span></div>
                <div class="ref5">Email : <span id="refmail2"></span></div>                                               
            <!-- Contact -->
                <div class="contact1">Tel. : <span id="abouttel2"></span> </div>
                <div class="contact2">Email : <span id="aboutmail2"></span></div>
                <div class="contact3">Address : <span id="aboutadd2" style=" text-align:left;"></span></div>
            <!-- skills (ดึงจากฐานข้อมูล) -->
                <table class="table-borderless " id="skill-table" >
                    <tbody class="skill">
                    </tbody>
                </table>
                <div class="qrcode" id="qrcode">
                    <!-- <img src="../images/student.png" style="width:200px"> -->
                    <!-- <div id="qrcode"></div> -->
                    <!-- <div id="qrcode">hgflkjlhj;lj</div> -->
                </div>
        
    </div>
</div>

</body>
</html>

