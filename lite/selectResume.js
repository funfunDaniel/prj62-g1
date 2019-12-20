var xmlHttp;
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
    getJSON();
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
    getJSON()
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
    getJSON();
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
    getJSON();
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
                        
                        // loop ดึงกิจกรรม
                        var len = resp.length;
                        for(var i=0; i<len; i++){
                            // ตัวอย่างการใช้
                            // var id = response[i].id
                            ;
                            // var date = response[i].date;
                            // var name = response[i].name;
    
                            // var tr_str = "<tr>" +
                            // "<td align='center'>" + (i+1) + "</td>" +
                            // "<td align='center'>" + date + "</td>" +
                            // "<td align='center'>" + name + "</td>" +
                            // "<td align='center'><a href='#'><i class='material-icons'>my_location</i></a></td>" +
                            // "<td align='center'><a href='#'><i class='material-icons'>camera_alt</i></a></td>" +
                            // "</tr>";
                            // $("#data-table tbody").append(tr_str);
                        }
    
                    }
                });
            });
}