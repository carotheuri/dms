<?php
$DBhost = "localhost";
$DBuser = "root";
$DBname = "oldschema";
$DBpass  = "password";

$sql = new MySQLi($DBhost,$DBuser,$DBpass,$DBname);

$result = $sql->query("SELECT * FROM locations;");
for ($set = array();$row = $result->fetch_assoc();
$set[] =$row);
//print_r($set);

$json = json_encode($set);

//echo $json;

?>

   <script src="js/jquery.min.js" type="text/javascript"></script>

   <script type="text/javascript">
   //<![CDATA[

   var json_obj = jQuery.parseJSON ( ' <?php echo $json; ?> ' );

  // ]]>
      $.ajax ( {
       url: "hello.php",
       dataType: "json",
       success: function ( data, textStatus, jqXHR ) {
           // process the data, you only need the "data" argument
           // jQuery will automatically parse the JSON for you!
       }
   } );
   </script>