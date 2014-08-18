<?php
include('config.php');

if( $conn === false )
      { die( FormatErrors( sqlsrv_errors() ) ); }

$tsql = "Exec GetNPI_UsingName ?, ?, ?, ?, ? ";

$params = array( Trim($_GET['name']), Trim($_GET['lastname']), Trim($_GET['firstname']), $_GET['type'], $_GET['location'] );
$getNPI = sqlsrv_query( $conn, $tsql, $params);

if ( $getNPI === false)
     { die( FormatErrors( sqlsrv_errors() ) ); }

$kount=0;
while( $row = sqlsrv_fetch_array( $getNPI, SQLSRV_FETCH_ASSOC))
{
	include('dispNPIData.php');
	$kount++;
}

If($kount==0)
{
	echo "No providers found<br /><br />";
	echo "Name: ".$params[0]."<br />Type:".$params[3]."<br />State:".$params[4];
}
