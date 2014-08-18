<?php
$tsql2 = "Exec GetTaxonomy ? ";

$params2 = array( $taxonomyCode );
$getTaxonomy = sqlsrv_query( $conn, $tsql2, $params2);
if ( $getTaxonomy === false)
     { die( FormatErrors( sqlsrv_errors() ) ); }

while( $taxrow = sqlsrv_fetch_array( $getTaxonomy, SQLSRV_FETCH_ASSOC))
{
	echo " - ".$taxrow['TaxonomyDescription'];
}
