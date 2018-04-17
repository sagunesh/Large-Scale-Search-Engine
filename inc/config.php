<?php
/* Configuration */
ini_set("display_errors", "off"); // Do you want to see the errors ?

define("HOST", "http://localhost/search/search");

 $host = "localhost"; // Hostname
 $port = "3306"; // MySQL Port; Default : 3306
 $user = "root"; // Username Here
 $pass = ""; // Password Here
 $db   = "vetri"; // Database Name
 $dbh  = new PDO('mysql:dbname='.$db.';host='.$host.';port='.$port, $user, $pass);
/* End Configuration */
?>
