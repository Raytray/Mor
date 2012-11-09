<?php
mysql_connect('mysql6.000webhost.com', 'a6519930_user', 'ecommerce2012') or die (mysql_error());
mysql_select_db('a6519930_base') or die (mysql_error());
if(mysql_num_rows(mysql_query("SELECT * from users WHERE email='" . $_POST['email'] . "'")) == 1){
}
else if($_POST['password'] != $_POST['retype-password']){

echo "The two passwords don't match!";
}
else if(strlen($_POST['email']) > 25){

echo "Email is too long!";
}
else if(strlen($_POST['email']) < 6){

echo "Email is too short!";
}
else if(strlen($_POST['password']) > 25){

echo "Password is too long!";
}
else if(strlen($_POST['password']) < 6){

echo "Password is too short!";
}
//else if(preg_match('/[^0-9A-Za-z]/',$_POST['email'])){

//echo "Invalid characters in email!";
//}
else if(preg_match('/[^0-9A-Za-z]/',$_POST['password'])){

echo "Invalid characters in password!";
}
else{

$email=$_POST['email'];
$password=$_POST['password'];

    $email = stripslashes($email);
    $password = stripslashes($password);
    $email=mysql_real_escape_string($email);
    $password=mysql_real_escape_string($password);

    $salt = mcrypt_create_iv(16, MCRYPT_DEV_URAND);//generate the salt
    $password=crypt($password,$salt);//hash the password

mysql_query("INSERT into users VALUES ('$email', '$password', '$salt')") or die(mysql_error());

mail('$email', 'WELCOME!', 'NO REALLY! WE WELCOME YOU!!!');

             header("location:login.html");

}
?>
