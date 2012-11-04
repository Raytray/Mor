<?php
mysql_connect('host', 'database', 'password') or die (mysql_error());
mysql_select_db('database') or die (mysql_error());
if(mysql_num_rows(mysql_query("SELECT * from users WHERE username='" . $_POST['username'] . "'")) == 1){
echo "Sorry, this username is already taken!";
}
else{
mysql_query("INSERT into users VALUES ('".$_POST['username']."', '".$_POST['password']."')") or die(mysql_error());
}
?>
In the same way (using if/else and else if statements) we will need to check for a list of possible errors:
Username too long
Username too short
Password too long
Password too short
Invalid characters in password
Invalid characters in username
This is a very simple, here is my code:
<?php
mysql_connect('host', 'database', 'password') or die (mysql_error());
mysql_select_db('database') or die (mysql_error());
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
mysql_query("INSERT into users VALUES ('".$_POST['username']."', '".$_POST['password']."')") or die(mysql_error());
}
?>