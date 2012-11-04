<?php
session_start();
mysql_connect('host', 'database', 'password')
or die ("Could not connect to mysql because ".mysql_error());
mysql_select_db('database')
or die("Could not select database because ".mysql_error());
if(mysql_num_rows(mysql_query("Select	  *	FROM	users	WHERE	username=".$_Post["username"]." and password=".$_POST["password"].""))==1){
session_register("username");
header("location:index.php");
}
else{
echo 'Wrong username or password!';
}
?>