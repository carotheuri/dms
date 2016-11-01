<?php
$i_link = mysqli_connect("localhost","root" ,"password","disastermanagement");

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$Result=mysqli_query($i_link,"SELECT SQL_CALC_FOUND_ROWS  place FROM  dms1 GROUP BY place"); 
$NORResult=mysqli_query($i_link,"SELECT FOUND_ROWS()"); 
$NORRow=mysqli_fetch_array($NORResult); 
$NOR=$NORRow["FOUND_ROWS()"]; 
//echo $NOR;


?>