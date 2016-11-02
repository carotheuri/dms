<?php
$DBhost = "localhost";
$DBuser = "root";
$DBname = "oldschema";
$DBpass  = "sql123";

$sql = new MySQLi($DBhost,$DBuser,$DBpass,$DBname);

$result = $sql->query("SELECT * FROM locations;");
for ($set = array();$row = $result->fetch_assoc();
$set[] =$row);
//print_r($set);

$json = json_encode($set);

//echo $json;

?>

   <script src="http://code.jquery.com/jquery.min.js" type="text/javascript"></script>

   <script type="text/javascript">
   //<![CDATA[

   var json_obj = jQuery.parseJSON ( '  <?php echo $json; ?>  ' );

   //]]>
   </script>