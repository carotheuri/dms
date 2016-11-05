<?php

 
 //error_reporting( ~E_DEPRECATED & ~E_NOTICE );
 /*
 define('DBHOST', 'localhost');
 define('DBUSER', 'root');
 define('DBPASS', 'password');
 define('DBNAME', 'disastermanagement');
 */
/*
$dbhost = "localhost";
$user = "root";
$pass = "password";
$db = "disastermanagement";

 $conn = mysql_connect($dbhost,$user,$pass);
 $dbcon = mysql_select_db($db);
 
 if ( !$conn ) {
  die("Connection failed : " . mysql_error());
 }
 
 if ( !$dbcon ) {
  die("Database Connection failed : " . mysql_error());
 }*/
 $i_link = mysqli_connect("localhost","root" ,"password","disastermanagement");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}