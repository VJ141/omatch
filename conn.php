<?php 
/*Agency Registration*/
$serverName = "LAPTOP-PO24JN2Q\SQLEXPRESS";
$options = array(  "UID" => "sa",  "PWD" => "harmonic26813",  "Database" => "omatch");
$conn = sqlsrv_connect($serverName, $options);
if($conn)
{
	echo "hello world";
}
else
{
	echo "";
	die(print_r(sqlsrv_errors,true));
}


?>       