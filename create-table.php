<?php
//Connect to MySQL
mysql_connect('mysql6.000webhost.com', 'a6519930_user', 'ecommerce2012') or die (mysql_error());
//Select database
mysql_select_db('a6519930_base') or die (mysql_error());
//Create the table
mysql_query("create table users(
username varchar(30) NOT NULL, 
password varchar(30) NOT NULL, 
PRIMARY KEY (username)
)") or die (mysql_error());
//Show "Complete" if everything works
echo "Complete.";
?>