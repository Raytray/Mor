<?php
session_start();
mysql_connect('mysql6.000webhost.com', 'a6519930_user', 'ecommerce2012') or die (mysql_error());
mysql_select_db('a6519930_base') or die (mysql_error());
if(mysql_num_rows(mysql_query("SELECT * from users WHERE email='" . $_POST['email'] . "'")) == 1){
}

    $password=$_POST['password'];
    $email = stripslashes($email);
    $password = stripslashes($password);
    $email=mysql_real_escape_string($email);
    $password=mysql_real_escape_string($password);
    $password=crypt($password,$email);//hash the password

    mysql_query("INSERT into users VALUES ('$email', '$password', 'undeclared' '0')") or die(mysql_error());
    $_SESSION['name'] = $email;
    $_SESSION['loggedIn']=true;
    $_SESSION['message'] = "Thanks for registring!";
    
    mail('$email', 'WELCOME!', 'NO REALLY! WE WELCOME YOU!!!');

    header("location:login.php");
}
?>
