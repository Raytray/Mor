<?php
mysql_connect('mysql6.000webhost.com', 'a6519930_user', 'ecommerce2012') or die (mysql_error());
mysql_select_db('a6519930_base') or die (mysql_error());
if(mysql_num_rows(mysql_query("SELECT * from users WHERE username='" . $_POST['username'] . "'")) == 1){
echo "Sorry, this username is already taken!";
}
else if($_POST['password'] != $_POST['retype-password']){
echo "The two passwords don't match!";
}
else if(strlen($_POST['username']) > 15){
echo "Username is too long!";
}
else if(strlen($_POST['username']) < 6){
echo "Username is too short!";
}
else if(strlen($_POST['password']) > 15){
echo "Password is too long!";
}
else if(strlen($_POST['password']) < 6){
echo "Password is too short!";
}
else if(preg_match('/[^0-9A-Za-z]/',$_POST['username'])){
echo "Invalid characters in username!";
}
else if(preg_match('/[^0-9A-Za-z]/',$_POST['password'])){
echo "Invalid characters in password!";
}
else{
    $username = $_POST['username'];
    $salt = "raymond"; //mcrypt_create_iv(10, (int) MCRYPT_DEV_URAND);//generate the salt
    $password=crypt($_POST['password'],$salt);//hash the password

mysql_query("INSERT into users VALUES ('$username', '$password', '$salt')") or die(mysql_error());

echo "AWESOME WORKED!";
}
?>
