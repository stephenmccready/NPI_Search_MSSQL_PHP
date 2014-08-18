<?php
include('config.php');

if( $conn === false )
      { die( FormatErrors( sqlsrv_errors() ) ); }

$tsql = "Exec GetNPI_UsingNPI ? ";

$params = array( $_GET['NPI'] );
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
	echo "NPI: ".$params[0];
}
