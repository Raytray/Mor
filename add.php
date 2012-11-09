<?php
mysql_connect('mysql6.000webhost.com', 'a6519930_user', 'ecommerce2012') or die (mysql_error());
mysql_select_db('a6519930_base') or die (mysql_error());
session_start();
if($_SESSION['isAdmin'] == 1){
	$courseshort = $_POST['courseshortname'];
	$courselong = $_POST['courselongname'];
	$major = $_POST['major'];
	
	mysql_query("INSERT into courses VALUES ('$courseshort', '$courselong', '$major')") or die(mysql_error());

    header("location:add.html");
}
else{
echo $_SESSION['isAdmin'];
echo $_SESSION['email'];
echo 'ERROR 403, you must be admin';
}
?>
