<?php
require 'connect.inc.php';
$id=$_GET['id'];
echo $id;
$query="DELETE  FROM ajax
WHERE id='$id'";
echo "<br>";
$query_run=mysql_query($query);
if ($query_run) {
	header('location:index.php');
}else {
	echo "There is some error try again later";
	}

?>