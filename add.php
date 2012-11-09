<?php
if($_session['isAdmin'] == 1){
	$courseshort = $_POST['courseshortname'];
	$coursenumber = $_POST['coursenumber'];
	$courselong = $_POST['courselongname'];
	$major = $_POST['major'];
	
	mysql_query("INSERT into courses VALUES ('$courseshort' '$coursenumber', '$courselong', '$major', '', '', '')") or die(mysql_error());

    header("location:add.html");
}

?>
