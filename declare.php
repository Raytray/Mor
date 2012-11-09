
<?php
session_start();
mysql_connect('mysql6.000webhost.com', 'a6519930_user', 'ecommerce2012') or die (mysql_error());
mysql_select_db('a6519930_base') or die (mysql_error());
if(mysql_num_rows(mysql_query("SELECT * from users WHERE email='" . $_POST['email'] . "'")) == 1){
}
else if($_POST['password'] != $_POST['retype-password']){
    $_SESSION['message'] =  "The two passwords don't match!";
}
else if(strlen($_POST['email']) > 25){
    $_SESSION['message'] =  "Email is too long!";
}
else if(strlen($_POST['email']) < 6){
    $_SESSION['message'] =  "Email is too short!";
}
else if(strlen($_POST['password']) > 25){
    $_SESSION['message'] =  "Password is too long!";
}
else if(strlen($_POST['password']) < 6){
    $_SESSION['message'] =  "Password is too short!";
}
//else if(preg_match('/[^0-9A-Za-z]/',$_POST['email'])){
//echo "Invalid characters in email!";
//}
else if(preg_match('/[^0-9A-Za-z]/',$_POST['password'])){
    $_SESSION['message'] =  "Invalid characters in password!";
}
else{
    $email=$_POST['email'];
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
