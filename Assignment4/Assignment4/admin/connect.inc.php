<?php
$conn_error='Could not connect';
$mysql_host='mysql.hostinger.in';
$mysql_user='u636498426_yugam';
$myql_pass='remon11';
$mysql_db='u636498426_data1';
if (!@mysql_connect($mysql_host,$mysql_user,$myql_pass)|| !@mysql_select_db($mysql_db)){
	die($conn_error);
}
?>