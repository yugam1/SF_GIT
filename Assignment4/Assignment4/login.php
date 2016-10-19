<?php
require 'core.inc.php';
require 'connect.inc.php';

if (loggedin()) {
	$name=getfield('name');
	include 'home.php';
} else{

      include 'login.inc.php';
}
?>
