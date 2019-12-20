<?php 
    session_start();
?>
 <p  id="preview"><img src="../images/resume-templete/resume-brown.png"></p>
    <!-- resume2 -->
    <div id="resume202">
        <div>
            <p id="fullnameresume2" style="color:white; position: absolute;top: 60px; left: 100px;  font-size: 40px;"></p>
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
    </div>
</div>
<script>
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
                             

                                            