<?php
//Connect to MySQL
mysql_connect('host', 'database', 'password') or die (mysql_error());
//Select database
mysql_select_db('database') or die (mysql_error());
//Create the table
mysql_query("create table users(
username varchar(30) NOT NULL, 
password varchar(30) NOT NULL, 
PRIMARY KEY (username)
)") or die (mysql_error());
//Show "Complete" if everything works
echo "Complete.";
?>