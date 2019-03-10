<?php 

define("DB_HOST", "localhost");
define("DB_USERNAME", "id8736179_cuatech");
define("DB_PASSWORD", "cuatech");
define("DB_NAME", "id8736179_cuatech");

$con = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

if($con) {
	//echo "Connection Successful";
} else {
	echo "Error Connecting";
}


?>