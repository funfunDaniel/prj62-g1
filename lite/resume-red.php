<html>
<head>
        <?php  include('header.php') ?>
        <script src = "https://davidshimjs.github.io/qrcodejs/qrcode.min.js"></script> 
        <script src = "https://davidshimjs.github.io/qrcodejs/qrcode.js"></script>
        <style>
     
                .bg{height:80em;}
                .fullname{color:white; position: absolute;top: 1.8em; left: 5.7em;  font-size: 50px;}
                .pic{position: absolute;top: 0em;left: 1.1em;width: 16.8em;height: 16.3em;}
                .education1{position: absolute;top: 18em; left: 19.5em;font-size: 19px;color:black; }
                .education2{position: absolute;top: 18em; left: 29em;font-size: 19px;color:black; }
                .education3{position: absolute;top: 20em; left: 29em;font-size: 19px;color:black; }
                .education4{position: absolute;top: 22em; left: 19.5em;font-size: 19px;color:black; }
                .education5{position: absolute;top: 22em; left: 29em;font-size: 19px;color:black; }
                .education6{position: absolute;top: 24em; left: 29em;font-size: 19px;color:black; }
                .education7{position: absolute;top: 26em; left: 19.5em;font-size: 19px;color:black; }
                .education8{position: absolute;top: 26em; left: 29em;font-size: 19px;color:black; }
                .education9{position: absolute;top: 28em; left: 29em;font-size: 19px;color:black; }
                .contact1{position: absolute;top: 18em; left: 2em;font-size: 19px;color:black;}
                .contact2{position: absolute;top: 20em; left: 2em;font-size: 19px;color:black;}
                .contact3{position: absolute;top: 22em; left: 2em;font-size: 19px;color:black; width:25%;text-align:left;}
                .activities{position: absolute;top: 33em; left: 19.5em;width:auto;font-size: 19px;}
                .skill{position: absolute;top: 33em; left: 2em;width:auto;font-size: 19px;}
                .ref1{position: absolute;top: 50em;left: 19.5em;font-size: 19px;color:black;}
                .ref2{position: absolute;top: 52em; left: 19.5em;font-size: 19px;color:black;}
                .ref3{position: absolute;top: 54em; left: 19.5em;font-size: 19px;color:black;}
                .ref4{position: absolute;top: 56em; left: 19.5em;font-size:19px;color:black;}
                .ref5{position: absolute;top: 58em; left: 19.5em;font-size: 19px;color:black;}
                .qrcode{position: absolute;top:50em; left: 54px;font-size: 19px;color:black;}
                .td1{color:black;width:100px;}
                .material-icons {font-family: 'Material Icons';font-weight: normal;font-style: normal;font-size: 24px;line-height: 1;letter-spacing: normal;text-transform: none;
                                    display: inline-block;white-space: nowrap;word-wrap: normal;direction: ltr;text-rendering: optimizeLegibility;-webkit-font-smoothing: antialiased;}
        /*จอใหญ่*/
        @media screen and (max-width: 1280px) and (min-width: 960px) {
            .bg{height:60em;}
                .fullname{color:white; position: absolute;top: 1.6em; left: 6em;  font-size: 37px;}
                .pic{position: absolute;top: 0em;left: 1.1em;width: 12.7em;height: 12.2em;}
                .education1{position: absolute;top: 15em; left: 16.5em;font-size: 16px;color:black; }
                .education2{position: absolute;top: 15em; left: 24em;font-size: 16px;color:black; }
                .education3{position: absolute;top: 17em; left: 24em;font-size: 16px;color:black; }
                .education4{position: absolute;top: 19em; left: 16.5em;font-size: 16px;color:black; }
                .education5{position: absolute;top: 19em; left: 24em;font-size: 16px;color:black; }
                .education6{position: absolute;top: 21em; left: 24em;font-size: 16px;color:black; }
                .education7{position: absolute;top: 23em; left: 16.5em;font-size: 16px;color:black; }
                .education8{position: absolute;top: 23em; left: 24em;font-size: 16px;color:black; }
                .education9{position: absolute;top: 25em; left: 24em;font-size: 16px;color:black; }
                .contact1{position: absolute;top: 15em; left: 1em;font-size: 17px;color:black;}
                .contact2{position: absolute;top: 17em; left: 1em;font-size: 17px;color:black;}
                .contact3{position: absolute;top: 19em; left: 1em;font-size: 17px;color:black; width:25%;text-align:left;}
                .activities{position: absolute;top: 27.5em; left: 16.5em;width:auto;font-size: 17px;}
                .skill{position: absolute;top: 27.5em; left: 1em;width:auto;font-size: 17px;}
                .ref1{position: absolute;top: 42em;left: 16.5em;font-size: 17px;color:black;}
                .ref2{position: absolute;top: 44em; left: 16.5em;font-size: 17px;color:black;}
                .ref3{position: absolute;top: 46em; left: 16.5em;font-size: 17px;color:black;}
                .ref4{position: absolute;top: 48em; left: 16.5em;font-size:17px;color:black;}
                .ref5{position: absolute;top: 50em; left: 16.5em;font-size: 17px;color:black;}
                .qrcode{position: absolute;top:43em; left: 68px;font-size: 17px;color:black;width: 6em;height: 6em;}
                .td1{color:black;width:100px;}
                .material-icons {font-family: 'Material Icons';font-weight: normal;font-style: normal;font-size: 24px;line-height: 1;letter-spacing: normal;text-transform: none;
                                    display: inline-block;white-space: nowrap;word-wrap: normal;direction: ltr;text-rendering: optimizeLegibility;-webkit-font-smoothing: antialiased;}

           
        }
        /*จอกลาง*/      
        @media screen and (max-width: 960px) and (min-width: 587px) {
            .bg{height:40em;}
            .fullname{color:white; position: absolute;top: 1.6em; left: 6em;  font-size: 24px;}
                .pic{position: absolute;top: 0em;left: 1.1em;width: 8.4em;height: 8.1em;}
                .education1{position: absolute;top: 14.5em; left: 17em;font-size: 11px;color:black; }
                .education2{position: absolute;top: 14.5em; left: 24em;font-size: 11px;color:black; }
                .education3{position: absolute;top: 16.5em; left: 24em;font-size: 11px;color:black; }
                .education4{position: absolute;top: 18.5em; left: 17em;font-size: 11px;color:black; }
                .education5{position: absolute;top: 18.5em; left: 24em;font-size: 11px;color:black; }
                .education6{position: absolute;top: 20.5em; left: 24em;font-size: 11px;color:black; }
                .education7{position: absolute;top: 22.5em; left: 17em;font-size: 11px;color:black; }
                .education8{position: absolute;top: 22.5em; left: 24em;font-size: 11px;color:black; }
                .education9{position: absolute;top: 24.5em; left: 24em;font-size: 11px;color:black; }
                .contact1{position: absolute;top: 14em; left: 1.4em;font-size: 12px;color:black;}
                .contact2{position: absolute;top: 17.5em; left: 1.4em;font-size: 11px;color:black;}
                .contact3{position: absolute;top: 18em; left: 1.4em;font-size: 12px;color:black; width:32%;text-align:left;}
                .activities{position: absolute;top: 25.5em; left: 15.5em;width:500px;font-size: 12px;}
                .skill{position: absolute;top: 25.5em; left: 1.4em;width:auto;font-size: 12px;}
                .ref1{position: absolute;top: 40em;left: 15.5em;font-size: 12px;color:black;}
                .ref2{position: absolute;top: 42em; left: 15.5em;font-size: 12px;color:black;}
                .ref3{position: absolute;top: 44em; left: 15.5em;font-size: 12px;color:black;}
                .ref4{position: absolute;top: 46em; left: 15.5em;font-size:12px;color:black;}
                .ref5{position: absolute;top: 48em; left: 15.5em;font-size: 12px;color:black;}
                .qrcode{position: absolute;top:41em; left: 47px;font-size: 12px;color:black;width: 6em;height: 6em;}
                .td1{color:black;width:50px;}
                .material-icons {
                    font-family: 'Material Icons';
                    font-weight: normal;
                    font-style: normal;
                    font-size: 14px;
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
                .bg{width:267.4px;height:422.54px;}
                .fullname{color:white; position: absolute;top: 2.3em; left: 8.5em;  font-size: 14px;}
                .pic{position: absolute;top: 0em;left: 1.1em;width: 5.7em;height:5.7em;}
                .education1{position: absolute;top: 24em; left: 25.5em;font-size: 5px;color:black; }
                .education2{position: absolute;top: 24em; left: 35em;font-size: 5px;color:black; }
                .education3{position: absolute;top: 27em; left: 35em;font-size: 5px;color:black; }
                .education4{position: absolute;top: 30em; left: 25.5em;font-size: 5px;color:black; }
                .education5{position: absolute;top: 30em; left: 35em;font-size: 5px;color:black; }
                .education6{position: absolute;top: 33em; left: 35em;font-size: 5px;color:black; }
                .education7{position: absolute;top: 36em; left: 25.5em;font-size: 5px;color:black; }
                .education8{position: absolute;top: 36em; left: 35em;font-size: 5px;color:black; }
                .education9{position: absolute;top: 36em; left: 35em;font-size: 5px;color:black; }
                .contact1{position: absolute;top: 24em; left: 3.5em;font-size: 5px;color:black;}
                .contact2{position: absolute;top: 27em; left: 3.5em;font-size: 5px;color:black; width:23%;}
                .contact3{position: absolute;top: 32em; left: 3.5em;font-size: 5px;color:black; width:23%;text-align:left;}
                .activities{position: absolute;top: 44em; left: 25.5em;width:auto;font-size:5px;}
                .skill{position: absolute;top: 44em; left: 3.5em;width:auto;font-size:5px;}
                .ref1{position: absolute;top: 67em;left: 25.5em;font-size: 5px;color:black;}
                .ref2{position: absolute;top: 70em; left: 25.5em;font-size: 5px;color:black;}
                .ref3{position: absolute;top: 73em; left: 25.5em;font-size: 5px;color:black;}
                .ref4{position: absolute;top: 76em; left: 25.5em;font-size:5px;color:black;}
                .ref5{position: absolute;top: 79em; left: 25.5em;font-size: 5px;color:black;}
                .td1{color:black;width:30px;}
                .qrcode{position: absolute;top: 70em;left: 40px;font-size: 5px;color: black;width: 8em;height: 8em;}
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
                .bg{width:228px;height:382.25px;}
                .fullname{color:white; position: absolute;top: 1.8em; left: 7em;  font-size: 13px;}
                .pic{position: absolute;top: 0em;left: 1.1em;width: 4.5em;height:5.2em;}
                .education1{position: absolute;top: 21em; left: 21.5em;font-size: 5px;color:black; }
                .education2{position: absolute;top: 21em; left: 30em;font-size: 5px;color:black; }
                .education3{position: absolute;top: 23em; left: 30em;font-size: 5px;color:black; }
                .education4{position: absolute;top: 26em; left: 21.5em;font-size: 5px;color:black; }
                .education5{position: absolute;top: 26em; left: 30em;font-size: 5px;color:black; }
                .education6{position: absolute;top: 29em; left: 30em;font-size: 5px;color:black; }
                .education7{position: absolute;top: 32em; left: 21.5em;font-size: 5px;color:black; }
                .education8{position: absolute;top: 32em; left: 30em;font-size: 5px;color:black; }
                .education9{position: absolute;top: 35em; left: 30em;font-size: 5px;color:black; }
                .contact1{position: absolute;top: 21em; left: 5vw;font-size: 5px;color:black;}
                .contact2{position: absolute;top: 23em; left: 5vw;font-size: 5px;color:black;}
                .contact3{position: absolute;top: 25em; left: 5vw;font-size: 5px;color:black; width:25%;text-align:left;}
                .activities{position: absolute;top: 39em; left: 21.5em;width:auto;font-size:5px;}
                .skill{position: absolute;top: 39em; left: 5vw;width:auto;font-size:5px;}
                .ref1{position: absolute;top: 60em;left: 21.5em;font-size: 5px;color:black;}
                .ref2{position: absolute;top: 63em; left: 21.5em;font-size: 5px;color:black;}
                .ref3{position: absolute;top: 66em; left: 21.5em;font-size: 5px;color:black;}
                .ref4{position: absolute;top: 69em; left: 21.5em;font-size:5px;color:black;}
                .ref5{position: absolute;top: 72em; left: 21.5em;font-size: 5px;color:black;}
                .td1{color:black;width:30px;}
                .qrcode{position: absolute;top: 63em;left: 32px;font-size: 5px;color: black;width: 8em;height: 8em;}
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
            
            </style>
</head>
<body>
<p  id="preview"><img src="../images/resume-templete/resume-red.png" class="bg"></p>
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



                                        

                                            