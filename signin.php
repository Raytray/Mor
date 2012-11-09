<?php
session_start();
mysql_connect('mysql6.000webhost.com', 'a6519930_user', 'ecommerce2012')
    or die ("Could not connect to mysql because ".mysql_error());
mysql_select_db('a6519930_base')
    or die("Could not select database because ".mysql_error());
$email=$_POST['email'];
$password=$_POST['password'];
if(mysql_num_rows(mysql_query("SELECT * from users WHERE email='" . $_POST['email'] . "'")) == 1){
    $email = stripslashes($email);
    $password = stripslashes($password);
    $email=mysql_real_escape_string($email);
    $salt = $email;
    $password=mysql_real_escape_string($password);
    $password=crypt($password, $salt);
    if(mysql_num_rows(mysql_query("Select * FROM users WHERE email='$email' and password='$password'"))==1){
        $_SESSION['name'] = $email;
        $_SESSION['loggedIn']=true;
        $_SESSION['message'] = "welcome back!";
        $major = mysql_query("Select major FROM users WHERE email='$email' LIMIT 1");
        $major = mysql_fetch_array($major, MYSQL_BOTH);
        $major = $major[0]; 
        $_SESSION['major'] = $major;
        if(mysql_num_rows(mysql_query("Select * FROM users WHERE email='$email' and admin = '1'"))){
            $_SESSION['isAdmin']=1;
        }
        else{
            $_SESSION['isAdmin']=0;

        }
    }
    else{
        $_SESSION['message'] ='Wrong password!';
    }
}
else{
    $_SESSION['message'] =  'No such user found';
}
header("location:login.php");
?>
