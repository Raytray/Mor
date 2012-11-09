<?php
mysql_connect('mysql6.000webhost.com', 'a6519930_user', 'ecommerce2012') or die (mysql_error());
mysql_select_db('a6519930_base') or die (mysql_error());
session_start();
if($_SESSION['isAdmin'] == 1){
	$courseshort = $_POST['courseshortname'];
	$courselong = $_POST['courselongname'];
	$majors = $_POST['majors'];

	$courseshort = stripsslashes($courseshort);
	$courseshort = $mysql_real_escape_string($courseshort);

	$courselong = stripsslashes($courselong);
	$courselong = $mysql_real_escape_string($courselong);

	$majors = stripsslashes($majors);
	$majors = $mysql_real_escape_string($majors);


	
	mysql_query("INSERT into courses VALUES ('$courseshort', '$courselong', '$majors')") or die(mysql_error());

    header("location:addPage.php");
}
else{
echo 'ERROR 403, you must be admin';
}
?>
