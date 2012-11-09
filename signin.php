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
    $password=mysql_real_escape_string($password);
<<<<<<< HEAD
    $password=crypt($password, $salt);
    if(mysql_num_rows(mysql_query("Select * FROM users WHERE email='$email' and password='$password'"))==1){
        $_SESSION['name'] = $email;
        $_SESSION['loggedIn']=true;
        $_SESSION['message'] = "welcome back!";
        if(mysql_num_rows(mysql_query("Select * FROM users WHERE email='$email' and admin = '1'"))){
            $_SESSION['isAdmin']=1;
=======
    $password=crypt($password, $email);
        if(mysql_num_rows(mysql_query("Select * FROM users WHERE email='$email' and password='$password'"))==1){
            $_SESSION['name'] = $email;
            if(mysql_num_rows(mysql_query("Select * FROM users WHERE email='$email' and admin = '1'"))){
                $_SESSION['isAdmin']=1;
            }
	    else{
	    $_SESSION['isAdmin']=0;
            $_SESSION['loggedIn']=true;

	    header("location:login.php");
>>>>>>> 0107468e6b8414761cd3ba4f5e6df61d5c03a798
        }
        else{
            $_SESSION['isAdmin']=0;
        
        }
    }
    else{
        $_SESSION['message'] ='Wrong email or password!';
    }
}
else{
    $_SESSION['message'] =  'Error. Please contact your local Richard Li or Raymond Tang';
}
header("location:login.php");
?>
