<?php
session_start();
mysql_connect('mysql6.000webhost.com', 'a6519930_user', 'ecommerce2012') or die (mysql_error());
mysql_select_db('a6519930_base') or die (mysql_error());
$old=$_POST['old'];
$password=$_POST['password'];
$retype=$_POST['retype']; 
if($password!=$retype)
    $_SESSION['message'] = "passwords don't match. derp";
else{
    $salt = $_SESSION['name'];
    $old= stripslashes($old);
    $password = stripslashes($password);
    $old=mysql_real_escape_string($old);
    $password=mysql_real_escape_string($password);
    $password=crypt($password,$salt);//hash the password

    mysql_query("UPDATE users SET password = '$password' where email = '$email'") or die(mysql_error());
    $_SESSION['loggedIn']=true;
    $_SESSION['message'] = "password changed";
    mail('$email', 'PASSWORD CHANGE', 'PASSWORD HAS BEEN CHANGED');

}
header("location:login.php");

?>
