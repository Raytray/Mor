<?php
session_start();
mysql_connect('localhost', 'database', 'password')
    or die ("Could not connect to mysql because ".mysql_error());
mysql_select_db('database')
    or die("Could not select database because ".mysql_error());
$username=$_POST['username'];
$password=$_POST['password'];
if(mysql_num_rows(mysql_query("SELECT * from users WHERE username='" . $_POST['username'] . "'")) == 1){
    $salt = mysql_query("SELECT salt FROM users WHERE username='$myusername' LIMIT 1");
    $username = stripslashes($username);
    $password = stripslashes($password);
    $username=mysql_real_escape_string($username);
    $password=mysql_real_escape_string($password);
    $password=crypt($password, $salt);
        if(mysql_num_rows(mysql_query("Select * FROM users WHERE username='$myusername' and password='$password'"))==1){
            $_SESSION['name'] = $username;
            header("location:index.php");
        }
        else{
            echo 'Wrong username or password!';
        }
}
?>
