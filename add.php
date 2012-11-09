<?php
if($_session['isAdmin'] == 1){
	$courseshort = $_POST['courseshortname'];
	$courselong = $_POST['courselongname'];
	$major = $_POST['major'];
	
	mysql_query("INSERT into courses VALUES ('$courseshort', '$courselong', '$major', '', '', '')") or die(mysql_error());

    header("location:add.html");
}
else{
echo 'ERROR 403, you must be admin';
}
?>
