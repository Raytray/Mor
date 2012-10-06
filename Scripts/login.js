//Popup alerting user that the login has not been made and we "saved" their email to contact them when we make it.

var emailNum=0;
emailArray=new Array();

function handleClick()
{
    var email=document.getElementsByName("email")[0].value;
    alert('The login system is not built yet, we will email you at ' + email + ' when it is ready.');
//Saves email for future reference. 
    emailArray[emailNum++]=email;
}
function validateForm()
{
var x=document.getElementsByName("email")[0].value;
var y =document.getElementsByName ("password")[0].value;
if (y==null || y=="")
  {
  alert("Password must be filled out");
  return false;
  }
if (x==null || x=="")
  {
  alert("Name must be filled out");
  return false;
  }
}