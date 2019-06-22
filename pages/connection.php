<?php
	$dbhost='localhost';
	$dbuser='root';
	$dbpass='';
	$con=mysql_connect($dbhost,$dbuser,$dbpass);
	if(!$con)
	{
		die("could not connect:".mysql_error());
	}
	else echo "connected successfully";
?>