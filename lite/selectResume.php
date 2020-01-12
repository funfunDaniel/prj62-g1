<script>
var xmlHttp;
var id;
function createXMLHttpRequest()
{ 
     if (window.ActiveXObject)  // Internet Explorer
            xmlHttp=new ActiveXObject("Microsoft.XMLHTTP"); 
     else // Firefox, Opera 8.0+, Safari 
            xmlHttp=new XMLHttpRequest();
} //end function createXMLHttpRequest()

function showResumebrown()
{
	createXMLHttpRequest()
	    xmlHttp.onreadystatechange = function stateChange()
   {
            if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
            { 
                    var myObj = xmlHttp.responseText;
                    // alert(myObj);
                    document.getElementById("divResume").innerHTML = myObj;        
            } 
    } // end function statechange()
    getQRcode(); 
    getJSON();  
    getJSON3(); 
    var url = "resume-brown.php";

    xmlHttp.open("GET",url,true);
    xmlHttp.send(null);  

}
function showResumeblue()
{
	createXMLHttpRequest()
	    xmlHttp.onreadystatechange = function stateChange()
   {
            if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
            { 
                    var myObj = xmlHttp.responseText;
                    // alert(myObj);
                    document.getElementById("divResume").innerHTML = myObj;        
            } 
    } // end function statechange()
    getQRcode2()
    getJSON()
    getJSON3()
    var url = "resume-blue.php";

    xmlHttp.open("GET",url,true);
    xmlHttp.send(null);  

}
function showResumepink()
{
	createXMLHttpRequest()
	    xmlHttp.onreadystatechange = function stateChange()
   {
            if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
            { 
                    var myObj = xmlHttp.responseText;
                    // alert(myObj);
                    document.getElementById("divResume").innerHTML = myObj;        
            } 
    } // end function statechange()
    getQRcode2()
    getJSON();
    getJSON3(); 
    var url = "resume-pink.php";

    xmlHttp.open("GET",url,true);
    xmlHttp.send(null);  

}

function showResumered()
{
	createXMLHttpRequest()
	    xmlHttp.onreadystatechange = function stateChange()
   {
            if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
            { 
                    var myObj = xmlHttp.responseText;
                    // alert(myObj);
                    document.getElementById("divResume").innerHTML = myObj;        
            } 
    } // end function statechange()
    getQRcode2()
    getJSON2();
    getJSON4(); 
    var url = "resume-red.php";

    xmlHttp.open("GET",url,true);
    xmlHttp.send(null);  

}

function getJSON(){
        $(document).ready(function(){
                $.ajax({
                    url: './MySQL/student/get-json-resume.php',
                    type: 'get',
                    dataType: 'JSON',
                    success: function(resp){
                        console.log('RESUME RESP: ' , resp);
                        // ข้อมูลส่วนตัว ใช้ getelementbyid ได้เลย
                        var name = resp[0].name
                        var address = resp[0].address
                        var email = resp[0].email
                        var img = resp[0].image
                        var tel = resp[0].telephone
                        $("#fullnameresume2").append(name);
                        $("#abouttel2").append(tel);
                        $("#aboutmail2").append(email);
                        $("#aboutadd2").append(address);
                        
                        var pix = "<img src='../import-files/user-img/" + img + "' class='pic'/>"
                        $("#picprofile").append(pix);

                        var len = resp.length;
                    for(var i=0; i<len; i++){
                        var actname = resp[i].actname;
                        var actdate = resp[i].actdate;
                        var acttype = resp[i].acttype;
                        var date = actdate.substring(0,4);
                        // var skill = resp[i].skillname;
                        
                        console.log(pix);
                        // var pix = "<img src='../import-files/user-img/" + img + "' style=' position: absolute ;top: 20vw; left: 671vw; width:258vw;'/>"
                        // $("#picprofile").append(pix);

                        var tr_str = "<tr>" +
                        "<td  class='td1'>" + date + "</td> " +
                        "<td  style='position: absolute;color:black;'>" + actname + "</td> " +
                        "</tr>";
                        $("#data-table tbody").append(tr_str);
                    }"<br/>"
                        }
    
                    
                });
            });
}

function getJSON2(){
    
    $(document).ready(function(){
            $.ajax({
                url: './MySQL/student/get-json-resume.php',
                type: 'get',
                dataType: 'JSON',
                success: function(resp){
                    console.log('RESUME RESP: ' , resp);
                    // ข้อมูลส่วนตัว ใช้ getelementbyid ได้เลย
                    var name = resp[0].name
                    var address = resp[0].address
                    var email = resp[0].email
                    var img = resp[0].image
                    var tel = resp[0].telephone
                    $("#fullnameresume2").append(name);
                    $("#abouttel2").append(tel);
                    $("#aboutmail2").append(email);
                    $("#aboutadd2").append(address);
                    var pix = "<img src='../import-files/user-img/" + img + "' class='pic'/>"
                    $("#picprofile").append(pix);
                    var len = resp.length;
                for(var i=0; i<len; i++){
                    var actname = resp[i].actname;
                    var actdate = resp[i].actdate;
                    var acttype = resp[i].acttype;
                    var date = actdate.substring(0,4);
            
                    console.log(pix);
                  

                    var tr_str = "<tr>" +
                    "<td  class='td1'>" + date + "</td> " +
                    "<td  style='position: absolute;color:black;width:500px;'>" + actname + "</td> " +
                    "</tr>";
                    $("#data-table tbody").append(tr_str);
                }"<br/>"
                    }

                
            });
        });
}
function getJSON3(){
    $(document).ready(function(){
                $.ajax({
                    url: './MySQL/student/get-json-skill.php',
                    type: 'get',
                    dataType: 'JSON',
                    success: function(resp){
                        // console.log('SKILL RESP: ' , resp);
                        var len = resp.length;
                    for(var i=0; i<len; i++){
                        var skill = resp[i].skillname;
                        var count = parseInt(resp[i].skillweight);
                        var tr_skill = "<tr>" +
                        "<td  style='color:black;'>" + skill + "</td> ";
                        if(count <= 3){
                        // console.log('less then 3');
                        tr_skill +="<td  style='position: absolute;color:black;'><i class='material-icons'>fiber_manual_record</i></td>" ;
                        }else if(count > 3 && count < 6){
                        tr_skill +="<td  style='position: absolute;color:black;'><i class='material-icons'>fiber_manual_record fiber_manual_record</i></td>" ;
                        }else{
                        tr_skill +="<td  style='position: absolute;color:black;'><i class='material-icons'>fiber_manual_record fiber_manual_record fiber_manual_record</i></td>" ;
                        }
                        tr_skill +="</tr>";
                        $("#skill-table tbody").append(tr_skill);
                    }"<br/>"
                    // console.log(tr_skill);
                        }  
                });
            });
    
}
function getJSON4(){
    $(document).ready(function(){
                $.ajax({
                    url: './MySQL/student/get-json-skill.php',
                    type: 'get',
                    dataType: 'JSON',
                    success: function(resp){
                        // console.log('SKILL RESP: ' , resp);
                        var len = resp.length;
                    for(var i=0; i<len; i++){
                        var skill = resp[i].skillname;
                        var tr_skill = "<tr>" +
                        "<td  style='color:black;'>" + skill + "</td> " +
                        "<td  style='position: absolute;color:black;'><i class='material-icons'>fiber_manual_record</i></td> " +
                        "</tr>";
                        $("#skill-table tbody").append(tr_skill);
                    }"<br/>"
                        }  
                });
            });
    
}

var path = "http://it2.sut.ac.th/project62_g1/it-website/lite/std-profile-id.php?std_id=<?php echo $_SESSION["id"]; ?>";

function getQRcode(){  
    $(document).ready(function() {
        new QRCode(document.getElementById("qrcode"),{
                text: path,
                width: 200,
                height: 200,
                top:1090,
                left: 70,
                colorDark : "#fff",
                colorLight : "#4F4949",
                correctLevel : QRCode.CorrectLevel.M        
                });
    });
    console.log('finish qrcode');
}
function getQRcode2(){
    $(document).ready(function() {
        new QRCode(document.getElementById("qrcode"),{
                text: path,
                width: 200,
                height: 200,
                top:1090,
                left: 70,
                colorDark : "#000",
                colorLight : "#fff",
                correctLevel : QRCode.CorrectLevel.M        
                });
    });
    console.log('finish qrcode');
}
</script>