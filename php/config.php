<?php
	$serverName="< your server name >";
	$connectionOptions = array("Database"=>"< your database name >", "UID"=>"< User ID >", "PWD"=>"< Password >");
	$conn = sqlsrv_connect( $serverName, $connectionOptions);
?>
