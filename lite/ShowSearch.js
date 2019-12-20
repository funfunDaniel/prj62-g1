var xmlHttp;

function createXMLHttpRequest(){
    if(window.ActiveXObject)
        xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
    else
        xmlHttp = new XMLHttpRequest();    
}

function stateChange(){
    if(xmlHttp.readyState==4 || xmlHttp.readyState=="complete") { 
        var th_thesisname = xmlHttp.responseText;
        
        document.getElementById("thesiss").innerHTML = th_thesisname;
            
    }
}

function ShowSearch(str){
    createXMLHttpRequest(); 
    xmlHttp.onreadystatechange = stateChange;

    var url = "search.php";
    url = url + "?th_thesisname=" + str;

    xmlHttp.open("GET", url, true);
    xmlHttp.send(null);
}