<?php
session_start();
mysql_connect('mysql6.000webhost.com', 'a6519930_user', 'ecommerce2012')
    or die ("Could not connect to mysql because ".mysql_error());
mysql_select_db('a6519930_base')
    or die("Could not select database because ".mysql_error());
$username=$_POST['username'];
$password=$_POST['password'];
if(mysql_num_rows(mysql_query("SELECT * from users WHERE username='" . $_POST['username'] . "'")) == 1){
    $salt = 'raymond'; //mysql_query("SELECT salt FROM users WHERE username='$myusername' LIMIT 1");
    $username = stripslashes($username);
    $password = stripslashes($password);
    $username=mysql_real_escape_string($username);
    $password=mysql_real_escape_string($password);
    $password=crypt($password, $salt);
        if(mysql_num_rows(mysql_query("Select * FROM users WHERE username='$username' and password='$password'"))==1){
            $_SESSION['name'] = $username;
            header("location:index.html");
        }
        else{
	echo $salt, $username, $password;
            echo 'Wrong username or password!';
        }
}
else{
	echo 'DATABASE?';
}
?>
