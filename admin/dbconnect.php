<?php

 $i_link = mysqli_connect("localhost","root" ,"password","disastermanagement");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}