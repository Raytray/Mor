<?php
$email=$_POST['email'];
$password=$_POST['password'];
if(mysql_num_rows(mysql_query("SELECT * from users WHERE email='" . $_POST['email'] . "'")) == 1){
    $salt = mysql_query("SELECT salt FROM users WHERE email='$myemail' LIMIT 1");
    $email = stripslashes($email);
    $password = stripslashes($password);
    $email=mysql_real_escape_string($email);
    $password=mysql_real_escape_string($password);
    $password=crypt($password, $salt);
        if(mysql_num_rows(mysql_query("Select * FROM users WHERE email='$email' and password='$password'"))==1){
            $_SESSION['name'] = $email;
	    
            header("location:login.html");
        }
        else{
            echo 'Wrong email or password!';
        }
}
else{
	echo 'DATABASE?';
}
?>
