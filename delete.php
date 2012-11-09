<?php
session_start();
mysql_connect('mysql6.000webhost.com', 'a6519930_user', 'ecommerce2012') or die (mysql_error());
mysql_select_db('a6519930_base') or die (mysql_error());
if(mysql_num_rows(mysql_query("SELECT * from users WHERE email='" . $_SESSION['name'] . "'")) == 1){


    $password=$_POST['password'];
    $email = stripslashes($email);
    $password = stripslashes($password);
    $email=mysql_real_escape_string($email);
    $password=mysql_real_escape_string($password);
    $password=crypt($password,$email);//hash the password
    if(mysql_num_rows(mysql_query("Select * FROM users WHERE email='$email' and password='$password'"))==1){
        mysql_query("DELETE FROM users WHERE email='" . $_SESSION['name'] . "'");

    	session_destroy();
	header("location:index.php");
	}	
else{
$_SESSION['message'] = 'Error. Please contact your local Richard Li or Raymond Tang';
header("location:login.php");
}
}
?>
