"use strict"
function searchbyajax()
{
    let data = document.getElementById("nm1").value;

    const xhttp= new XMLHttpRequest();
    
    xhttp.open('POST','../Controller/search_assistant_check.php',true);
    xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded")

    xhttp.onreadystatechange = function ()
    {
        if (this.readyState==4 && this.status==200)
        {
            document.getElementById("d1").innerHTML= this.responseText;
        }
    }
    xhttp.send('name='+data);

}

function searchbyajaxsort()
{
    let desig = document.getElementById("selm").value;

    const xhttp= new XMLHttpRequest();
    
    xhttp.open('POST','../Controller/search_assistant_desig.php',true);
    xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded")

    xhttp.onreadystatechange = function ()
    {
        if (this.readyState==4 && this.status==200)
        {
            document.getElementById("d2").innerHTML= this.responseText;
        }
    }
    xhttp.send('srdesig='+desig);

}
