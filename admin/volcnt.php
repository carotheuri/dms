<?php
$i_link = mysqli_connect("localhost","root" ,"password","disastermanagement");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

if ($result = mysqli_query($i_link, "SELECT * FROM formsdata ")) {

    /* determine number of rows result set */
    $row_cnts = mysqli_num_rows($result);

   // printf("Result set has %d rows.\n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($i_link);
?>