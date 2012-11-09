<?php
session_start();
mysql_connect('mysql6.000webhost.com', 'a6519930_user', 'ecommerce2012') or die (mysql_error());
mysql_select_db('a6519930_base') or die (mysql_error());
$major = $_POST['major'];
$email = $_SESSION['name'];
mysql_query("UPDATE users SET major = '$major' where email = '$email'") or die(mysql_error());
$_SESSION['message'] = "Congrats on declaring!";
$_SESSION['major'] = $major;

header("location:login.php");
?>
