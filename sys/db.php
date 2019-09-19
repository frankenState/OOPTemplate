<?php 
# declaring a constant variable
# syntax:
# define([variable name], [value]);
 define('host', "localhost");
 define('username', "root");
 define('password', "");
 define('database_name', "Hospital_db");

 $conn = new mysqli(host, username, password, database_name);
 

 if ($conn->connect_error){
 	echo $conn->connect_error;
 }

?>