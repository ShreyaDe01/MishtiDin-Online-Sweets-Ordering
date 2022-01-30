<?php
$db_host = "sql305.epizy.com";
$db_user = "epiz_30942477";
$db_password = "7xhM4hUOR2tYR";
$db_name = "epiz_30942477_mishtidin";
$db_port=3306;


//create connection 
$conn = new mysqli($db_host, $db_user, $db_password, $db_name,$db_port);

// check connection 
if($conn->connect_error) {
	die("connection failed");
	echo "failed";
	
}
/*else {
	echo "success";
}*/

?>