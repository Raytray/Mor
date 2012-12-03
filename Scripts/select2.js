function findMajor(str)
{
    if (str=="")
    {
	document.getElementById("stuffToReplaceWithAJAX").innerHTML="";
	return;
    }
    if (window.XMLHttpRequest)
    {
	xmlhttp=new XMLHttpRequest();
    }
    else
    { // IE6 or IE5
	document.getElementById("stuffToReplaceWithAJAX").innerHTML="Please download <a href='http://www.mozilla.org/en-US/firefox/new/'>Firefox</a> or <a href='https://www.google.com/intl/en/chrome/browser/'>Chrome</a> and try again.";
    }
    xmlhttp.onreadystatechange=function()
    {
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
	{
            document.getElementByID("stuffToReplaceWithAJAX").innerHTML=xmlhttp.responseText;
	}
    }
    xmlhttp.open("GET", "majorMatch.php?myMajor="+str,true);
    xmlhttp.send();
}
