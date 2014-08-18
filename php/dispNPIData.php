<?PHP
	echo "<div class='npiName'>".$row['NPI']."&nbsp;";
	
	if($row['Entity Type Code']=='1')
	{
		echo $row['Provider Name Prefix Text']." ".$row['Provider First Name']." ".$row['Provider Middle Name']." ".$row['Provider Last Name (Legal Name)']
			." ".$row['Provider Name Suffix Text']." ".$row['Provider Credential Text']."&nbsp;&nbsp;";
		switch ($row['Provider Gender Code'])
		{
			case "F":
				echo "Female";
				break;
			case "M":
				echo "Male";
				break;
		}
		if($row['Is Sole Proprietor'] == "Y")
		{
			echo " , Sole Proprietor";
		}
		echo "<br />";
	}
	else
	{
		echo $row['Provider Organization Name (Legal Business Name)'];
		if($row['Is Organization Subpart'] == "Y")
		{
			echo " (Organization Subpart)";
		}
		echo "<br />";
	}

	echo "</div>";

	if($row['Parent Organization LBN'] != "")
	{
		echo 'Parent Organization: '.$row['Parent Organization LBN'];
		echo '&nbsp;&nbsp;TIN: '.$row['Parent Organization TIN'];
		echo '<br />';
	}
		
	switch($row['Provider Other Organization Name Type Code']) 
	{
	    case "1":
			echo "Former Name: ";
			break;
		case "2":
			echo "Professional Name: ";
			break;
		case "3":
			echo "Doing Business As: ";
			break;
		case "4":
			echo "Former (Legal Business Name): ";
			break;
		case "5":
			echo "Other Name: ";
			break;
	}
	
	If($row['Provider Other Organization Name'] != "")
	{	echo $row['Provider Other Organization Name']."<br />";	}

	switch($row['Provider Other Last Name Type Code']) 
	{
	    case "1":
			echo "Former Name: ";
			break;
		case "2":
			echo "Professional Name: ";
			break;
		case "3":
			echo "Doing Business As: ";
			break;
		case "4":
			echo "Former (Legal Business Name): ";
			break;
		case "5":
			echo "Other Name: ";
			break;
	}
	
	If($row['Provider Other Last Name'] != "")
	{
		echo $row['Provider Other Name Prefix Text']." ".$row['Provider Other First Name']." ".$row['Provider Other Middle Name']." ".$row['Provider Other Last Name']
			." ".$row['Provider Other Name Suffix Text']." ".$row['Provider Other Credential Text']."<br />";
	}
		
	If($row['Authorized Official Last Name'] != "")
	{
		echo "Authorized Official: ".$row['Authorized Official Name Prefix Text']." ".$row['Authorized Official First Name']." ".$row['Authorized Official Middle Name']." ".$row['Authorized Official Last Name']
			." ".$row['Authorized Official Name Suffix Text'].", ".$row['Authorized Official Title or Position']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ph: ";
		echo "(".substr($row['Authorized Official Telephone Number'],0,3).") "
		.substr($row['Authorized Official Telephone Number'],4,3)." ".substr($row['Authorized Official Telephone Number'],6,4)."<br />";
}
	
	If($row['Replacement NPI'] != "")
	{	echo "Replacement NPI:".$row['Replacement NPI']."<br />";	}

	switch($row['NPI Deactivation Reason Code']) 
	{
	    case "DT":
			echo "Deactivated on ".$row['NPI Deactivation Date']." due to Death";
			break;
		case "DB":
			echo "Deactivated on ".$row['NPI Deactivation Date']." due to Disbandment";
			break;
		case "FR":
			echo "Deactivated on ".$row['NPI Deactivation Date']." due to Fraud";
			break;
		case "OT":
			echo "Deactivated on ".$row['NPI Deactivation Date']." due to Other";
			break;
	}
	
	If($row['NPI Reactivation Date'] != "")
	{	echo "NPI Reactivated on ".$row['NPI Reactivation Date']."<br />";	}

// EIN NOT POPULATED AS OF 7/31/2014
//	If($row['Employer Identification Number (EIN)'] !== '')
//	{	echo "EIN: ".$row['Employer Identification Number (EIN)']."<br />";	}
	
	echo "<div class='address'>Mailing:<br />";
	echo "<a href='https://www.google.com/maps/place/".$row['Provider First Line Business Mailing Address']
		."+".$row['Provider Business Mailing Address City Name']
		."+".$row['Provider Business Mailing Address State Name']
		."+".substr($row['Provider Business Mailing Address Postal Code'],0,5)."-".substr($row['Provider Business Mailing Address Postal Code'],5,4)
		."' target=' blank'>";
	echo $row['Provider First Line Business Mailing Address']." ";
	echo $row['Provider Second Line Business Mailing Address']."<br />";
	echo $row['Provider Business Mailing Address City Name'].", ";
	echo $row['Provider Business Mailing Address State Name']."  ";
	echo substr($row['Provider Business Mailing Address Postal Code'],0,5);
	if(strlen($row['Provider Business Mailing Address Postal Code'])>5) {
		echo "-".substr($row['Provider Business Mailing Address Postal Code'],5,4);
	}
	echo "</a><br />";
	echo "(".substr($row['Provider Business Mailing Address Telephone Number'],0,3).") "
		.substr($row['Provider Business Mailing Address Telephone Number'],4,3)." ".substr($row['Provider Business Mailing Address Telephone Number'],6,4)."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	echo "Fax: (".substr($row['Provider Business Mailing Address Fax Number'],0,3).") "
		.substr($row['Provider Business Mailing Address Fax Number'],4,3)." ".substr($row['Provider Business Mailing Address Fax Number'],6,4);
	echo "</div>";

	echo "<div class='address'>Practice:<br />";
	echo "<a href='https://www.google.com/maps/place/".$row['Provider First Line Business Practice Location Address']
		."+".$row['Provider Business Practice Location Address City Name']
		."+".$row['Provider Business Practice Location Address State Name']
		."+".substr($row['Provider Business Practice Location Address Postal Code'],0,5)."-".substr($row['Provider Business Practice Location Address Postal Code'],5,4)
		."' target=' blank'>";
	echo $row['Provider First Line Business Practice Location Address']." ";
	echo $row['Provider Second Line Business Practice Location Address']."<br />";
	echo $row['Provider Business Practice Location Address City Name'].", ";
	echo $row['Provider Business Practice Location Address State Name']."  ";
	echo substr($row['Provider Business Practice Location Address Postal Code'],0,5);
	if(strlen($row['Provider Business Practice Location Address Postal Code'])>5) {
		echo "-".substr($row['Provider Business Practice Location Address Postal Code'],5,4);
	}
	echo "</a><br />";
	echo "(".substr($row['Provider Business Practice Location Address Telephone Number'],0,3).") "
		.substr($row['Provider Business Practice Location Address Telephone Number'],4,3)." ".substr($row['Provider Business Practice Location Address Telephone Number'],6,4)."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	echo "Fax: (".substr($row['Provider Business Practice Location Address Fax Number'],0,3).") "
		.substr($row['Provider Business Practice Location Address Fax Number'],4,3)." ".substr($row['Provider Business Practice Location Address Fax Number'],6,4);
	echo "</div>";

	echo "<div class='dates'>Enumeration Date: ".$row['Provider Enumeration Date']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Last Updated: ".$row['Last Update Date']."</div>";


	echo "<table class='taxonomy'><tr><th>Taxonomy</th><th>License</th><th>State</th><th>Primary Taxonomy?</th></tr>";
	echo "<tr>";
	echo "<td>".$row['Healthcare Provider Taxonomy Code_1'];
		// Get Taxonomy Description
		$taxonomyCode=$row['Healthcare Provider Taxonomy Code_1'];
		include ('getTaxonomyFromTaxonomyCode.php');
	echo "</td>";
	echo "<td>".$row['Provider License Number_1']."</td>";
	echo "<td>".$row['Provider License Number State Code_1']."</td>";
	echo "<td>".$row['Healthcare Provider Primary Taxonomy Switch_1']."</td>";
	echo "</tr>";
	If($row['Healthcare Provider Taxonomy Code_2']!="" || $row['Provider License Number_2']!="")
	{
		echo "<tr>";
		echo "<td>".$row['Healthcare Provider Taxonomy Code_2'];
			// Get Taxonomy Description
			$taxonomyCode=$row['Healthcare Provider Taxonomy Code_2'];
			include ('getTaxonomyFromTaxonomyCode.php');
		echo "</td>";

		echo "<td>".$row['Provider License Number_2']."</td>";
		echo "<td>".$row['Provider License Number State Code_2']."</td>";
		echo "<td>".$row['Healthcare Provider Primary Taxonomy Switch_2']."</td>";
		echo "</tr>";
	}
	If($row['Healthcare Provider Taxonomy Code_3']!="" || $row['Provider License Number_3']!="")
	{
		echo "<tr>";
		echo "<td>".$row['Healthcare Provider Taxonomy Code_3'];
			// Get Taxonomy Description
			$taxonomyCode=$row['Healthcare Provider Taxonomy Code_3'];
			include ('getTaxonomyFromTaxonomyCode.php');
		echo "</td>";
		echo "<td>".$row['Provider License Number_3']."</td>";
		echo "<td>".$row['Provider License Number State Code_3']."</td>";
		echo "<td>".$row['Healthcare Provider Primary Taxonomy Switch_3']."</td>";
		echo "</tr>";
	}
	If($row['Healthcare Provider Taxonomy Code_4']!="" || $row['Provider License Number_4']!="")
	{
		echo "<tr>";
		echo "<td>".$row['Healthcare Provider Taxonomy Code_4'];
			// Get Taxonomy Description
			$taxonomyCode=$row['Healthcare Provider Taxonomy Code_4'];
			include ('getTaxonomyFromTaxonomyCode.php');
		echo "</td>";
		echo "<td>".$row['Provider License Number_4']."</td>";
		echo "<td>".$row['Provider License Number State Code_4']."</td>";
		echo "<td>".$row['Healthcare Provider Primary Taxonomy Switch_4']."</td>";
		echo "</tr>";
	}
	If($row['Healthcare Provider Taxonomy Code_5']!="" || $row['Provider License Number_5']!="")
	{
		echo "<tr>";
		echo "<td>".$row['Healthcare Provider Taxonomy Code_5'];
			// Get Taxonomy Description
			$taxonomyCode=$row['Healthcare Provider Taxonomy Code_5'];
			include ('getTaxonomyFromTaxonomyCode.php');
		echo "</td>";
		echo "<td>".$row['Provider License Number_5']."</td>";
		echo "<td>".$row['Provider License Number State Code_5']."</td>";
		echo "<td>".$row['Healthcare Provider Primary Taxonomy Switch_5']."</td>";
		echo "</tr>";
	}
	If($row['Healthcare Provider Taxonomy Code_6']!="" || $row['Provider License Number_6']!="")
	{
		echo "<tr>";
		echo "<td>".$row['Healthcare Provider Taxonomy Code_6'];
			// Get Taxonomy Description
			$taxonomyCode=$row['Healthcare Provider Taxonomy Code_6'];
			include ('getTaxonomyFromTaxonomyCode.php');
		echo "</td>";
		echo "<td>".$row['Provider License Number_6']."</td>";
		echo "<td>".$row['Provider License Number State Code_6']."</td>";
		echo "<td>".$row['Healthcare Provider Primary Taxonomy Switch_6']."</td>";
		echo "</tr>";
	}
	If($row['Healthcare Provider Taxonomy Code_7']!="" || $row['Provider License Number_7']!="")
	{
		echo "<tr>";
		echo "<td>".$row['Healthcare Provider Taxonomy Code_7'];
			// Get Taxonomy Description
			$taxonomyCode=$row['Healthcare Provider Taxonomy Code_7'];
			include ('getTaxonomyFromTaxonomyCode.php');
		echo "</td>";
		echo "<td>".$row['Provider License Number_7']."</td>";
		echo "<td>".$row['Provider License Number State Code_7']."</td>";
		echo "<td>".$row['Healthcare Provider Primary Taxonomy Switch_7']."</td>";
		echo "</tr>";
	}
	If($row['Healthcare Provider Taxonomy Code_8']!="" || $row['Provider License Number_8']!="")
	{
		echo "<tr>";
		echo "<td>".$row['Healthcare Provider Taxonomy Code_8'];
			// Get Taxonomy Description
			$taxonomyCode=$row['Healthcare Provider Taxonomy Code_8'];
			include ('getTaxonomyFromTaxonomyCode.php');
		echo "</td>";
		echo "<td>".$row['Provider License Number_8']."</td>";
		echo "<td>".$row['Provider License Number State Code_8']."</td>";
		echo "<td>".$row['Healthcare Provider Primary Taxonomy Switch_8']."</td>";
		echo "</tr>";
	}
	If($row['Healthcare Provider Taxonomy Code_9']!="" || $row['Provider License Number_9']!="")
	{
		echo "<tr>";
		echo "<td>".$row['Healthcare Provider Taxonomy Code_9'];
			// Get Taxonomy Description
			$taxonomyCode=$row['Healthcare Provider Taxonomy Code_9'];
			include ('getTaxonomyFromTaxonomyCode.php');
		echo "</td>";
		echo "<td>".$row['Provider License Number_9']."</td>";
		echo "<td>".$row['Provider License Number State Code_9']."</td>";
		echo "<td>".$row['Healthcare Provider Primary Taxonomy Switch_9']."</td>";
		echo "</tr>";
	}
	If($row['Healthcare Provider Taxonomy Code_10']!="" || $row['Provider License Number_10']!="")
	{
		echo "<tr>";
		echo "<td>".$row['Healthcare Provider Taxonomy Code_10'];
			// Get Taxonomy Description
			$taxonomyCode=$row['Healthcare Provider Taxonomy Code_10'];
			include ('getTaxonomyFromTaxonomyCode.php');
		echo "</td>";
		echo "<td>".$row['Provider License Number_10']."</td>";
		echo "<td>".$row['Provider License Number State Code_10']."</td>";
		echo "<td>".$row['Healthcare Provider Primary Taxonomy Switch_10']."</td>";
		echo "</tr>";
	}
	If($row['Healthcare Provider Taxonomy Code_11']!="" || $row['Provider License Number_11']!="")
	{
		echo "<tr>";
		echo "<td>".$row['Healthcare Provider Taxonomy Code_11'];
			// Get Taxonomy Description
			$taxonomyCode=$row['Healthcare Provider Taxonomy Code_11'];
			include ('getTaxonomyFromTaxonomyCode.php');
		echo "</td>";
		echo "<td>".$row['Provider License Number_11']."</td>";
		echo "<td>".$row['Provider License Number State Code_11']."</td>";
		echo "<td>".$row['Healthcare Provider Primary Taxonomy Switch_11']."</td>";
		echo "</tr>";
	}	If($row['Healthcare Provider Taxonomy Code_12']!="" || $row['Provider License Number_12']!="")
	{
		echo "<tr>";
		echo "<td>".$row['Healthcare Provider Taxonomy Code_12'];
			// Get Taxonomy Description
			$taxonomyCode=$row['Healthcare Provider Taxonomy Code_12'];
			include ('getTaxonomyFromTaxonomyCode.php');
		echo "</td>";
		echo "<td>".$row['Provider License Number_12']."</td>";
		echo "<td>".$row['Provider License Number State Code_12']."</td>";
		echo "<td>".$row['Healthcare Provider Primary Taxonomy Switch_12']."</td>";
		echo "</tr>";
	}
	If($row['Healthcare Provider Taxonomy Code_13']!="" || $row['Provider License Number_13']!="")
	{
		echo "<tr>";
		echo "<td>".$row['Healthcare Provider Taxonomy Code_13'];
			// Get Taxonomy Description
			$taxonomyCode=$row['Healthcare Provider Taxonomy Code_13'];
			include ('getTaxonomyFromTaxonomyCode.php');
		echo "</td>";
		echo "<td>".$row['Provider License Number_13']."</td>";
		echo "<td>".$row['Provider License Number State Code_13']."</td>";
		echo "<td>".$row['Healthcare Provider Primary Taxonomy Switch_13']."</td>";
		echo "</tr>";
	}
	If($row['Healthcare Provider Taxonomy Code_14']!="" || $row['Provider License Number_14']!="")
	{
		echo "<tr>";
		echo "<td>".$row['Healthcare Provider Taxonomy Code_14'];
			// Get Taxonomy Description
			$taxonomyCode=$row['Healthcare Provider Taxonomy Code_14'];
			include ('getTaxonomyFromTaxonomyCode.php');
		echo "</td>";
		echo "<td>".$row['Provider License Number_14']."</td>";
		echo "<td>".$row['Provider License Number State Code_14']."</td>";
		echo "<td>".$row['Healthcare Provider Primary Taxonomy Switch_14']."</td>";
		echo "</tr>";
	}
	If($row['Healthcare Provider Taxonomy Code_15']!="" || $row['Provider License Number_15']!="")
	{
		echo "<tr>";
		echo "<td>".$row['Healthcare Provider Taxonomy Code_15'];
			// Get Taxonomy Description
			$taxonomyCode=$row['Healthcare Provider Taxonomy Code_15'];
			include ('getTaxonomyFromTaxonomyCode.php');
		echo "</td>";
		echo "<td>".$row['Provider License Number_15']."</td>";
		echo "<td>".$row['Provider License Number State Code_15']."</td>";
		echo "<td>".$row['Healthcare Provider Primary Taxonomy Switch_15']."</td>";
		echo "</tr>";
	}
	echo "</table>";
	echo "<table class='otherID'><tr><th>Other Provider Identifier</th><th>Type Code</th><th>State</th><th>Issuer</th></tr>";
	If($row['Other Provider Identifier_1']!="")
	{
		switch($row['Other Provider Identifier Type Code_1'])	{
				Case '01': $type='OTHER'; break;
				Case '02': $type='MEDICARE UPIN'; break;
				Case '04': $type='MEDICARE ID-TYPE UNSPECIFIED'; break;
				Case '05': $type='MEDICAID'; break;
				Case '06': $type='MEDICARE OSCAR/CERTIFICATION'; break;
				Case '07': $type='MEDICARE NSC'; break;
				Case '08': $type='MEDICARE PIN'; break;
				default: $type=$row['Other Provider Identifier Type Code_1'];
		}
		echo "<tr>";
		echo "<td>".$row['Other Provider Identifier_1']."</td>";
		echo "<td>".$type."</td>";
		echo "<td>".$row['Other Provider Identifier State_1']."</td>";
		echo "<td>".$row['Other Provider Identifier Issuer_1']."</td>";
		echo "</tr>";
	}
	If($row['Other Provider Identifier_2']!="")
	{
		switch($row['Other Provider Identifier Type Code_2'])	{
				Case '01': $type='OTHER'; break;
				Case '02': $type='MEDICARE UPIN'; break;
				Case '04': $type='MEDICARE ID-TYPE UNSPECIFIED'; break;
				Case '05': $type='MEDICAID'; break;
				Case '06': $type='MEDICARE OSCAR/CERTIFICATION'; break;
				Case '07': $type='MEDICARE NSC'; break;
				Case '08': $type='MEDICARE PIN'; break;
				default: $type=$row['Other Provider Identifier Type Code_2'];
		}
		echo "<tr>";
		echo "<td>".$row['Other Provider Identifier_2']."</td>";
		echo "<td>".$type."</td>";
		echo "<td>".$row['Other Provider Identifier State_2']."</td>";
		echo "<td>".$row['Other Provider Identifier Issuer_2']."</td>";
		echo "</tr>";
	}
	If($row['Other Provider Identifier_3']!="")
	{
		switch($row['Other Provider Identifier Type Code_3'])	{
				Case '01': $type='OTHER'; break;
				Case '02': $type='MEDICARE UPIN'; break;
				Case '04': $type='MEDICARE ID-TYPE UNSPECIFIED'; break;
				Case '05': $type='MEDICAID'; break;
				Case '06': $type='MEDICARE OSCAR/CERTIFICATION'; break;
				Case '07': $type='MEDICARE NSC'; break;
				Case '08': $type='MEDICARE PIN'; break;
				default: $type=$row['Other Provider Identifier Type Code_3'];
		}
		echo "<tr>";
		echo "<td>".$row['Other Provider Identifier_3']."</td>";
		echo "<td>".$type."</td>";
		echo "<td>".$row['Other Provider Identifier State_3']."</td>";
		echo "<td>".$row['Other Provider Identifier Issuer_3']."</td>";
		echo "</tr>";
	}
	If($row['Other Provider Identifier_4']!="")
	{
		switch($row['Other Provider Identifier Type Code_4'])	{
				Case '01': $type='OTHER'; break;
				Case '02': $type='MEDICARE UPIN'; break;
				Case '04': $type='MEDICARE ID-TYPE UNSPECIFIED'; break;
				Case '05': $type='MEDICAID'; break;
				Case '06': $type='MEDICARE OSCAR/CERTIFICATION'; break;
				Case '07': $type='MEDICARE NSC'; break;
				Case '08': $type='MEDICARE PIN'; break;
				default: $type=$row['Other Provider Identifier Type Code_4'];
		}
		echo "<tr>";
		echo "<td>".$row['Other Provider Identifier_4']."</td>";
		echo "<td>".$type."</td>";
		echo "<td>".$row['Other Provider Identifier State_4']."</td>";
		echo "<td>".$row['Other Provider Identifier Issuer_4']."</td>";
		echo "</tr>";
	}
	If($row['Other Provider Identifier_5']!="")
	{
		switch($row['Other Provider Identifier Type Code_5'])	{
				Case '01': $type='OTHER'; break;
				Case '02': $type='MEDICARE UPIN'; break;
				Case '04': $type='MEDICARE ID-TYPE UNSPECIFIED'; break;
				Case '05': $type='MEDICAID'; break;
				Case '06': $type='MEDICARE OSCAR/CERTIFICATION'; break;
				Case '07': $type='MEDICARE NSC'; break;
				Case '08': $type='MEDICARE PIN'; break;
				default: $type=$row['Other Provider Identifier Type Code_5'];
		}
		echo "<tr>";
		echo "<td>".$row['Other Provider Identifier_5']."</td>";
		echo "<td>".$type."</td>";
		echo "<td>".$row['Other Provider Identifier State_5']."</td>";
		echo "<td>".$row['Other Provider Identifier Issuer_5']."</td>";
		echo "</tr>";
	}
	If($row['Other Provider Identifier_6']!="")
	{
		switch($row['Other Provider Identifier Type Code_6'])	{
				Case '01': $type='OTHER'; break;
				Case '02': $type='MEDICARE UPIN'; break;
				Case '04': $type='MEDICARE ID-TYPE UNSPECIFIED'; break;
				Case '05': $type='MEDICAID'; break;
				Case '06': $type='MEDICARE OSCAR/CERTIFICATION'; break;
				Case '07': $type='MEDICARE NSC'; break;
				Case '08': $type='MEDICARE PIN'; break;
				default: $type=$row['Other Provider Identifier Type Code_6'];
		}
		echo "<tr>";
		echo "<td>".$row['Other Provider Identifier_6']."</td>";
		echo "<td>".$type."</td>";
		echo "<td>".$row['Other Provider Identifier State_6']."</td>";
		echo "<td>".$row['Other Provider Identifier Issuer_6']."</td>";
		echo "</tr>";
	}
	If($row['Other Provider Identifier_7']!="")
	{
		switch($row['Other Provider Identifier Type Code_7'])	{
				Case '01': $type='OTHER'; break;
				Case '02': $type='MEDICARE UPIN'; break;
				Case '04': $type='MEDICARE ID-TYPE UNSPECIFIED'; break;
				Case '05': $type='MEDICAID'; break;
				Case '06': $type='MEDICARE OSCAR/CERTIFICATION'; break;
				Case '07': $type='MEDICARE NSC'; break;
				Case '08': $type='MEDICARE PIN'; break;
				default: $type=$row['Other Provider Identifier Type Code_7'];
		}
		echo "<tr>";
		echo "<td>".$row['Other Provider Identifier_7']."</td>";
		echo "<td>".$type."</td>";
		echo "<td>".$row['Other Provider Identifier State_7']."</td>";
		echo "<td>".$row['Other Provider Identifier Issuer_7']."</td>";
		echo "</tr>";
	}
	If($row['Other Provider Identifier_8']!="")
	{
		switch($row['Other Provider Identifier Type Code_8'])	{
				Case '01': $type='OTHER'; break;
				Case '02': $type='MEDICARE UPIN'; break;
				Case '04': $type='MEDICARE ID-TYPE UNSPECIFIED'; break;
				Case '05': $type='MEDICAID'; break;
				Case '06': $type='MEDICARE OSCAR/CERTIFICATION'; break;
				Case '07': $type='MEDICARE NSC'; break;
				Case '08': $type='MEDICARE PIN'; break;
				default: $type=$row['Other Provider Identifier Type Code_8'];
		}
		echo "<tr>";
		echo "<td>".$row['Other Provider Identifier_8']."</td>";
		echo "<td>".$type."</td>";
		echo "<td>".$row['Other Provider Identifier State_8']."</td>";
		echo "<td>".$row['Other Provider Identifier Issuer_8']."</td>";
		echo "</tr>";
	}
	If($row['Other Provider Identifier_9']!="")
	{
		switch($row['Other Provider Identifier Type Code_9'])	{
				Case '01': $type='OTHER'; break;
				Case '02': $type='MEDICARE UPIN'; break;
				Case '04': $type='MEDICARE ID-TYPE UNSPECIFIED'; break;
				Case '05': $type='MEDICAID'; break;
				Case '06': $type='MEDICARE OSCAR/CERTIFICATION'; break;
				Case '07': $type='MEDICARE NSC'; break;
				Case '08': $type='MEDICARE PIN'; break;
				default: $type=$row['Other Provider Identifier Type Code_9'];
		}
		echo "<tr>";
		echo "<td>".$row['Other Provider Identifier_9']."</td>";
		echo "<td>".$type."</td>";
		echo "<td>".$row['Other Provider Identifier State_9']."</td>";
		echo "<td>".$row['Other Provider Identifier Issuer_9']."</td>";
		echo "</tr>";
	}
	If($row['Other Provider Identifier_10']!="")
	{
		switch($row['Other Provider Identifier Type Code_10'])	{
				Case '01': $type='OTHER'; break;
				Case '02': $type='MEDICARE UPIN'; break;
				Case '04': $type='MEDICARE ID-TYPE UNSPECIFIED'; break;
				Case '05': $type='MEDICAID'; break;
				Case '06': $type='MEDICARE OSCAR/CERTIFICATION'; break;
				Case '07': $type='MEDICARE NSC'; break;
				Case '08': $type='MEDICARE PIN'; break;
				default: $type=$row['Other Provider Identifier Type Code_10'];
		}
		echo "<tr>";
		echo "<td>".$row['Other Provider Identifier_10']."</td>";
		echo "<td>".$type."</td>";
		echo "<td>".$row['Other Provider Identifier State_10']."</td>";
		echo "<td>".$row['Other Provider Identifier Issuer_10']."</td>";
		echo "</tr>";
	}
	If($row['Other Provider Identifier_11']!="")
	{
		switch($row['Other Provider Identifier Type Code_11'])	{
				Case '01': $type='OTHER'; break;
				Case '02': $type='MEDICARE UPIN'; break;
				Case '04': $type='MEDICARE ID-TYPE UNSPECIFIED'; break;
				Case '05': $type='MEDICAID'; break;
				Case '06': $type='MEDICARE OSCAR/CERTIFICATION'; break;
				Case '07': $type='MEDICARE NSC'; break;
				Case '08': $type='MEDICARE PIN'; break;
				default: $type=$row['Other Provider Identifier Type Code_11'];
		}
		echo "<tr>";
		echo "<td>".$row['Other Provider Identifier_11']."</td>";
		echo "<td>".$type."</td>";
		echo "<td>".$row['Other Provider Identifier State_11']."</td>";
		echo "<td>".$row['Other Provider Identifier Issuer_11']."</td>";
		echo "</tr>";
	}
	If($row['Other Provider Identifier_12']!="")
	{
		switch($row['Other Provider Identifier Type Code_12'])	{
				Case '01': $type='OTHER'; break;
				Case '02': $type='MEDICARE UPIN'; break;
				Case '04': $type='MEDICARE ID-TYPE UNSPECIFIED'; break;
				Case '05': $type='MEDICAID'; break;
				Case '06': $type='MEDICARE OSCAR/CERTIFICATION'; break;
				Case '07': $type='MEDICARE NSC'; break;
				Case '08': $type='MEDICARE PIN'; break;
				default: $type=$row['Other Provider Identifier Type Code_2'];
		}
		echo "<tr>";
		echo "<td>".$row['Other Provider Identifier_12']."</td>";
		echo "<td>".$type."</td>";
		echo "<td>".$row['Other Provider Identifier State_12']."</td>";
		echo "<td>".$row['Other Provider Identifier Issuer_12']."</td>";
		echo "</tr>";
	}
	If($row['Other Provider Identifier_13']!="")
	{
		switch($row['Other Provider Identifier Type Code_13'])	{
				Case '01': $type='OTHER'; break;
				Case '02': $type='MEDICARE UPIN'; break;
				Case '04': $type='MEDICARE ID-TYPE UNSPECIFIED'; break;
				Case '05': $type='MEDICAID'; break;
				Case '06': $type='MEDICARE OSCAR/CERTIFICATION'; break;
				Case '07': $type='MEDICARE NSC'; break;
				Case '08': $type='MEDICARE PIN'; break;
				default: $type=$row['Other Provider Identifier Type Code_13'];
		}
		echo "<tr>";
		echo "<td>".$row['Other Provider Identifier_13']."</td>";
		echo "<td>".$type."</td>";
		echo "<td>".$row['Other Provider Identifier State_13']."</td>";
		echo "<td>".$row['Other Provider Identifier Issuer_13']."</td>";
		echo "</tr>";
	}
	If($row['Other Provider Identifier_14']!="")
	{
		switch($row['Other Provider Identifier Type Code_14'])	{
				Case '01': $type='OTHER'; break;
				Case '02': $type='MEDICARE UPIN'; break;
				Case '04': $type='MEDICARE ID-TYPE UNSPECIFIED'; break;
				Case '05': $type='MEDICAID'; break;
				Case '06': $type='MEDICARE OSCAR/CERTIFICATION'; break;
				Case '07': $type='MEDICARE NSC'; break;
				Case '08': $type='MEDICARE PIN'; break;
				default: $type=$row['Other Provider Identifier Type Code_14'];
		}
		echo "<tr>";
		echo "<td>".$row['Other Provider Identifier_14']."</td>";
		echo "<td>".$type."</td>";
		echo "<td>".$row['Other Provider Identifier State_14']."</td>";
		echo "<td>".$row['Other Provider Identifier Issuer_14']."</td>";
		echo "</tr>";
	}
	If($row['Other Provider Identifier_15']!="")
	{
		switch($row['Other Provider Identifier Type Code_15'])	{
				Case '01': $type='OTHER'; break;
				Case '02': $type='MEDICARE UPIN'; break;
				Case '04': $type='MEDICARE ID-TYPE UNSPECIFIED'; break;
				Case '05': $type='MEDICAID'; break;
				Case '06': $type='MEDICARE OSCAR/CERTIFICATION'; break;
				Case '07': $type='MEDICARE NSC'; break;
				Case '08': $type='MEDICARE PIN'; break;
				default: $type=$row['Other Provider Identifier Type Code_15'];
		}
		echo "<tr>";
		echo "<td>".$row['Other Provider Identifier_15']."</td>";
		echo "<td>".$type."</td>";
		echo "<td>".$row['Other Provider Identifier State_15']."</td>";
		echo "<td>".$row['Other Provider Identifier Issuer_15']."</td>";
		echo "</tr>";
	}
	If($row['Other Provider Identifier_16']!="")
	{
		switch($row['Other Provider Identifier Type Code_16'])	{
				Case '01': $type='OTHER'; break;
				Case '02': $type='MEDICARE UPIN'; break;
				Case '04': $type='MEDICARE ID-TYPE UNSPECIFIED'; break;
				Case '05': $type='MEDICAID'; break;
				Case '06': $type='MEDICARE OSCAR/CERTIFICATION'; break;
				Case '07': $type='MEDICARE NSC'; break;
				Case '08': $type='MEDICARE PIN'; break;
				default: $type=$row['Other Provider Identifier Type Code_16'];
		}
		echo "<tr>";
		echo "<td>".$row['Other Provider Identifier_16']."</td>";
		echo "<td>".$type."</td>";
		echo "<td>".$row['Other Provider Identifier State_16']."</td>";
		echo "<td>".$row['Other Provider Identifier Issuer_16']."</td>";
		echo "</tr>";
	}
	If($row['Other Provider Identifier_17']!="")
	{
		switch($row['Other Provider Identifier Type Code_17'])	{
				Case '01': $type='OTHER'; break;
				Case '02': $type='MEDICARE UPIN'; break;
				Case '04': $type='MEDICARE ID-TYPE UNSPECIFIED'; break;
				Case '05': $type='MEDICAID'; break;
				Case '06': $type='MEDICARE OSCAR/CERTIFICATION'; break;
				Case '07': $type='MEDICARE NSC'; break;
				Case '08': $type='MEDICARE PIN'; break;
				default: $type=$row['Other Provider Identifier Type Code_17'];
		}
		echo "<tr>";
		echo "<td>".$row['Other Provider Identifier_17']."</td>";
		echo "<td>".$type."</td>";
		echo "<td>".$row['Other Provider Identifier State_17']."</td>";
		echo "<td>".$row['Other Provider Identifier Issuer_17']."</td>";
		echo "</tr>";
	}
	If($row['Other Provider Identifier_18']!="")
	{
		switch($row['Other Provider Identifier Type Code_18'])	{
				Case '01': $type='OTHER'; break;
				Case '02': $type='MEDICARE UPIN'; break;
				Case '04': $type='MEDICARE ID-TYPE UNSPECIFIED'; break;
				Case '05': $type='MEDICAID'; break;
				Case '06': $type='MEDICARE OSCAR/CERTIFICATION'; break;
				Case '07': $type='MEDICARE NSC'; break;
				Case '08': $type='MEDICARE PIN'; break;
				default: $type=$row['Other Provider Identifier Type Code_18'];
		}
		echo "<tr>";
		echo "<td>".$row['Other Provider Identifier_18']."</td>";
		echo "<td>".$type."</td>";
		echo "<td>".$row['Other Provider Identifier State_18']."</td>";
		echo "<td>".$row['Other Provider Identifier Issuer_18']."</td>";
		echo "</tr>";
	}
	If($row['Other Provider Identifier_19']!="")
	{
		switch($row['Other Provider Identifier Type Code_19'])	{
				Case '01': $type='OTHER'; break;
				Case '02': $type='MEDICARE UPIN'; break;
				Case '04': $type='MEDICARE ID-TYPE UNSPECIFIED'; break;
				Case '05': $type='MEDICAID'; break;
				Case '06': $type='MEDICARE OSCAR/CERTIFICATION'; break;
				Case '07': $type='MEDICARE NSC'; break;
				Case '08': $type='MEDICARE PIN'; break;
				default: $type=$row['Other Provider Identifier Type Code_19'];
		}
		echo "<tr>";
		echo "<td>".$row['Other Provider Identifier_19']."</td>";
		echo "<td>".$type."</td>";
		echo "<td>".$row['Other Provider Identifier State_19']."</td>";
		echo "<td>".$row['Other Provider Identifier Issuer_19']."</td>";
		echo "</tr>";
	}
	If($row['Other Provider Identifier_20']!="")
	{
		switch($row['Other Provider Identifier Type Code_20'])	{
				Case '01': $type='OTHER'; break;
				Case '02': $type='MEDICARE UPIN'; break;
				Case '04': $type='MEDICARE ID-TYPE UNSPECIFIED'; break;
				Case '05': $type='MEDICAID'; break;
				Case '06': $type='MEDICARE OSCAR/CERTIFICATION'; break;
				Case '07': $type='MEDICARE NSC'; break;
				Case '08': $type='MEDICARE PIN'; break;
				default: $type=$row['Other Provider Identifier Type Code_20'];
		}
		echo "<tr>";
		echo "<td>".$row['Other Provider Identifier_20']."</td>";
		echo "<td>".$type."</td>";
		echo "<td>".$row['Other Provider Identifier State_20']."</td>";
		echo "<td>".$row['Other Provider Identifier Issuer_20']."</td>";
		echo "</tr>";
	}
	If($row['Other Provider Identifier_21']!="")
	{
		switch($row['Other Provider Identifier Type Code_21'])	{
				Case '01': $type='OTHER'; break;
				Case '02': $type='MEDICARE UPIN'; break;
				Case '04': $type='MEDICARE ID-TYPE UNSPECIFIED'; break;
				Case '05': $type='MEDICAID'; break;
				Case '06': $type='MEDICARE OSCAR/CERTIFICATION'; break;
				Case '07': $type='MEDICARE NSC'; break;
				Case '08': $type='MEDICARE PIN'; break;
				default: $type=$row['Other Provider Identifier Type Code_21'];
		}
		echo "<tr>";
		echo "<td>".$row['Other Provider Identifier_21']."</td>";
		echo "<td>".$type."</td>";
		echo "<td>".$row['Other Provider Identifier State_21']."</td>";
		echo "<td>".$row['Other Provider Identifier Issuer_21']."</td>";
		echo "</tr>";
	}
	If($row['Other Provider Identifier_22']!="")
	{
		switch($row['Other Provider Identifier Type Code_22'])	{
				Case '01': $type='OTHER'; break;
				Case '02': $type='MEDICARE UPIN'; break;
				Case '04': $type='MEDICARE ID-TYPE UNSPECIFIED'; break;
				Case '05': $type='MEDICAID'; break;
				Case '06': $type='MEDICARE OSCAR/CERTIFICATION'; break;
				Case '07': $type='MEDICARE NSC'; break;
				Case '08': $type='MEDICARE PIN'; break;
				default: $type=$row['Other Provider Identifier Type Code_2'];
		}
		echo "<tr>";
		echo "<td>".$row['Other Provider Identifier_22']."</td>";
		echo "<td>".$type."</td>";
		echo "<td>".$row['Other Provider Identifier State_22']."</td>";
		echo "<td>".$row['Other Provider Identifier Issuer_22']."</td>";
		echo "</tr>";
	}
	If($row['Other Provider Identifier_23']!="")
	{
		switch($row['Other Provider Identifier Type Code_23'])	{
				Case '01': $type='OTHER'; break;
				Case '02': $type='MEDICARE UPIN'; break;
				Case '04': $type='MEDICARE ID-TYPE UNSPECIFIED'; break;
				Case '05': $type='MEDICAID'; break;
				Case '06': $type='MEDICARE OSCAR/CERTIFICATION'; break;
				Case '07': $type='MEDICARE NSC'; break;
				Case '08': $type='MEDICARE PIN'; break;
				default: $type=$row['Other Provider Identifier Type Code_23'];
		}
		echo "<tr>";
		echo "<td>".$row['Other Provider Identifier_23']."</td>";
		echo "<td>".$type."</td>";
		echo "<td>".$row['Other Provider Identifier State_23']."</td>";
		echo "<td>".$row['Other Provider Identifier Issuer_23']."</td>";
		echo "</tr>";
	}
	If($row['Other Provider Identifier_24']!="")
	{
		switch($row['Other Provider Identifier Type Code_24'])	{
				Case '01': $type='OTHER'; break;
				Case '02': $type='MEDICARE UPIN'; break;
				Case '04': $type='MEDICARE ID-TYPE UNSPECIFIED'; break;
				Case '05': $type='MEDICAID'; break;
				Case '06': $type='MEDICARE OSCAR/CERTIFICATION'; break;
				Case '07': $type='MEDICARE NSC'; break;
				Case '08': $type='MEDICARE PIN'; break;
				default: $type=$row['Other Provider Identifier Type Code_24'];
		}
		echo "<tr>";
		echo "<td>".$row['Other Provider Identifier_24']."</td>";
		echo "<td>".$type."</td>";
		echo "<td>".$row['Other Provider Identifier State_24']."</td>";
		echo "<td>".$row['Other Provider Identifier Issuer_24']."</td>";
		echo "</tr>";
	}
	If($row['Other Provider Identifier_25']!="")
	{
		switch($row['Other Provider Identifier Type Code_25'])	{
				Case '01': $type='OTHER'; break;
				Case '02': $type='MEDICARE UPIN'; break;
				Case '04': $type='MEDICARE ID-TYPE UNSPECIFIED'; break;
				Case '05': $type='MEDICAID'; break;
				Case '06': $type='MEDICARE OSCAR/CERTIFICATION'; break;
				Case '07': $type='MEDICARE NSC'; break;
				Case '08': $type='MEDICARE PIN'; break;
				default: $type=$row['Other Provider Identifier Type Code_25'];
		}
		echo "<tr>";
		echo "<td>".$row['Other Provider Identifier_25']."</td>";
		echo "<td>".$type."</td>";
		echo "<td>".$row['Other Provider Identifier State_25']."</td>";
		echo "<td>".$row['Other Provider Identifier Issuer_25']."</td>";
		echo "</tr>";
	}
	If($row['Other Provider Identifier_26']!="")
	{
		switch($row['Other Provider Identifier Type Code_26'])	{
				Case '01': $type='OTHER'; break;
				Case '02': $type='MEDICARE UPIN'; break;
				Case '04': $type='MEDICARE ID-TYPE UNSPECIFIED'; break;
				Case '05': $type='MEDICAID'; break;
				Case '06': $type='MEDICARE OSCAR/CERTIFICATION'; break;
				Case '07': $type='MEDICARE NSC'; break;
				Case '08': $type='MEDICARE PIN'; break;
				default: $type=$row['Other Provider Identifier Type Code_26'];
		}
		echo "<tr>";
		echo "<td>".$row['Other Provider Identifier_26']."</td>";
		echo "<td>".$type."</td>";
		echo "<td>".$row['Other Provider Identifier State_26']."</td>";
		echo "<td>".$row['Other Provider Identifier Issuer_26']."</td>";
		echo "</tr>";
	}
	If($row['Other Provider Identifier_27']!="")
	{
		switch($row['Other Provider Identifier Type Code_27'])	{
				Case '01': $type='OTHER'; break;
				Case '02': $type='MEDICARE UPIN'; break;
				Case '04': $type='MEDICARE ID-TYPE UNSPECIFIED'; break;
				Case '05': $type='MEDICAID'; break;
				Case '06': $type='MEDICARE OSCAR/CERTIFICATION'; break;
				Case '07': $type='MEDICARE NSC'; break;
				Case '08': $type='MEDICARE PIN'; break;
				default: $type=$row['Other Provider Identifier Type Code_27'];
		}
		echo "<tr>";
		echo "<td>".$row['Other Provider Identifier_27']."</td>";
		echo "<td>".$type."</td>";
		echo "<td>".$row['Other Provider Identifier State_27']."</td>";
		echo "<td>".$row['Other Provider Identifier Issuer_27']."</td>";
		echo "</tr>";
	}
	If($row['Other Provider Identifier_28']!="")
	{
		switch($row['Other Provider Identifier Type Code_28'])	{
				Case '01': $type='OTHER'; break;
				Case '02': $type='MEDICARE UPIN'; break;
				Case '04': $type='MEDICARE ID-TYPE UNSPECIFIED'; break;
				Case '05': $type='MEDICAID'; break;
				Case '06': $type='MEDICARE OSCAR/CERTIFICATION'; break;
				Case '07': $type='MEDICARE NSC'; break;
				Case '08': $type='MEDICARE PIN'; break;
				default: $type=$row['Other Provider Identifier Type Code_28'];
		}
		echo "<tr>";
		echo "<td>".$row['Other Provider Identifier_28']."</td>";
		echo "<td>".$type."</td>";
		echo "<td>".$row['Other Provider Identifier State_28']."</td>";
		echo "<td>".$row['Other Provider Identifier Issuer_28']."</td>";
		echo "</tr>";
	}
	If($row['Other Provider Identifier_29']!="")
	{
		switch($row['Other Provider Identifier Type Code_29'])	{
				Case '01': $type='OTHER'; break;
				Case '02': $type='MEDICARE UPIN'; break;
				Case '04': $type='MEDICARE ID-TYPE UNSPECIFIED'; break;
				Case '05': $type='MEDICAID'; break;
				Case '06': $type='MEDICARE OSCAR/CERTIFICATION'; break;
				Case '07': $type='MEDICARE NSC'; break;
				Case '08': $type='MEDICARE PIN'; break;
				default: $type=$row['Other Provider Identifier Type Code_29'];
		}
		echo "<tr>";
		echo "<td>".$row['Other Provider Identifier_29']."</td>";
		echo "<td>".$type."</td>";
		echo "<td>".$row['Other Provider Identifier State_29']."</td>";
		echo "<td>".$row['Other Provider Identifier Issuer_29']."</td>";
		echo "</tr>";
	}
	If($row['Other Provider Identifier_30']!="")
	{
		switch($row['Other Provider Identifier Type Code_30'])	{
				Case '01': $type='OTHER'; break;
				Case '02': $type='MEDICARE UPIN'; break;
				Case '04': $type='MEDICARE ID-TYPE UNSPECIFIED'; break;
				Case '05': $type='MEDICAID'; break;
				Case '06': $type='MEDICARE OSCAR/CERTIFICATION'; break;
				Case '07': $type='MEDICARE NSC'; break;
				Case '08': $type='MEDICARE PIN'; break;
				default: $type=$row['Other Provider Identifier Type Code_30'];
		}
		echo "<tr>";
		echo "<td>".$row['Other Provider Identifier_30']."</td>";
		echo "<td>".$type."</td>";
		echo "<td>".$row['Other Provider Identifier State_30']."</td>";
		echo "<td>".$row['Other Provider Identifier Issuer_30']."</td>";
		echo "</tr>";
	}
	If($row['Other Provider Identifier_31']!="")
	{
		switch($row['Other Provider Identifier Type Code_31'])	{
				Case '01': $type='OTHER'; break;
				Case '02': $type='MEDICARE UPIN'; break;
				Case '04': $type='MEDICARE ID-TYPE UNSPECIFIED'; break;
				Case '05': $type='MEDICAID'; break;
				Case '06': $type='MEDICARE OSCAR/CERTIFICATION'; break;
				Case '07': $type='MEDICARE NSC'; break;
				Case '08': $type='MEDICARE PIN'; break;
				default: $type=$row['Other Provider Identifier Type Code_31'];
		}
		echo "<tr>";
		echo "<td>".$row['Other Provider Identifier_31']."</td>";
		echo "<td>".$type."</td>";
		echo "<td>".$row['Other Provider Identifier State_31']."</td>";
		echo "<td>".$row['Other Provider Identifier Issuer_31']."</td>";
		echo "</tr>";
	}
	If($row['Other Provider Identifier_32']!="")
	{
		switch($row['Other Provider Identifier Type Code_32'])	{
				Case '01': $type='OTHER'; break;
				Case '02': $type='MEDICARE UPIN'; break;
				Case '04': $type='MEDICARE ID-TYPE UNSPECIFIED'; break;
				Case '05': $type='MEDICAID'; break;
				Case '06': $type='MEDICARE OSCAR/CERTIFICATION'; break;
				Case '07': $type='MEDICARE NSC'; break;
				Case '08': $type='MEDICARE PIN'; break;
				default: $type=$row['Other Provider Identifier Type Code_3'];
		}
		echo "<tr>";
		echo "<td>".$row['Other Provider Identifier_32']."</td>";
		echo "<td>".$type."</td>";
		echo "<td>".$row['Other Provider Identifier State_32']."</td>";
		echo "<td>".$row['Other Provider Identifier Issuer_32']."</td>";
		echo "</tr>";
	}
	If($row['Other Provider Identifier_33']!="")
	{
		switch($row['Other Provider Identifier Type Code_33'])	{
				Case '01': $type='OTHER'; break;
				Case '02': $type='MEDICARE UPIN'; break;
				Case '04': $type='MEDICARE ID-TYPE UNSPECIFIED'; break;
				Case '05': $type='MEDICAID'; break;
				Case '06': $type='MEDICARE OSCAR/CERTIFICATION'; break;
				Case '07': $type='MEDICARE NSC'; break;
				Case '08': $type='MEDICARE PIN'; break;
				default: $type=$row['Other Provider Identifier Type Code_33'];
		}
		echo "<tr>";
		echo "<td>".$row['Other Provider Identifier_33']."</td>";
		echo "<td>".$type."</td>";
		echo "<td>".$row['Other Provider Identifier State_33']."</td>";
		echo "<td>".$row['Other Provider Identifier Issuer_33']."</td>";
		echo "</tr>";
	}
	If($row['Other Provider Identifier_34']!="")
	{
		switch($row['Other Provider Identifier Type Code_34'])	{
				Case '01': $type='OTHER'; break;
				Case '02': $type='MEDICARE UPIN'; break;
				Case '04': $type='MEDICARE ID-TYPE UNSPECIFIED'; break;
				Case '05': $type='MEDICAID'; break;
				Case '06': $type='MEDICARE OSCAR/CERTIFICATION'; break;
				Case '07': $type='MEDICARE NSC'; break;
				Case '08': $type='MEDICARE PIN'; break;
				default: $type=$row['Other Provider Identifier Type Code_34'];
		}
		echo "<tr>";
		echo "<td>".$row['Other Provider Identifier_34']."</td>";
		echo "<td>".$type."</td>";
		echo "<td>".$row['Other Provider Identifier State_34']."</td>";
		echo "<td>".$row['Other Provider Identifier Issuer_34']."</td>";
		echo "</tr>";
	}
	If($row['Other Provider Identifier_35']!="")
	{
		switch($row['Other Provider Identifier Type Code_35'])	{
				Case '01': $type='OTHER'; break;
				Case '02': $type='MEDICARE UPIN'; break;
				Case '04': $type='MEDICARE ID-TYPE UNSPECIFIED'; break;
				Case '05': $type='MEDICAID'; break;
				Case '06': $type='MEDICARE OSCAR/CERTIFICATION'; break;
				Case '07': $type='MEDICARE NSC'; break;
				Case '08': $type='MEDICARE PIN'; break;
				default: $type=$row['Other Provider Identifier Type Code_35'];
		}
		echo "<tr>";
		echo "<td>".$row['Other Provider Identifier_35']."</td>";
		echo "<td>".$type."</td>";
		echo "<td>".$row['Other Provider Identifier State_35']."</td>";
		echo "<td>".$row['Other Provider Identifier Issuer_35']."</td>";
		echo "</tr>";
	}
	If($row['Other Provider Identifier_36']!="")
	{
		switch($row['Other Provider Identifier Type Code_36'])	{
				Case '01': $type='OTHER'; break;
				Case '02': $type='MEDICARE UPIN'; break;
				Case '04': $type='MEDICARE ID-TYPE UNSPECIFIED'; break;
				Case '05': $type='MEDICAID'; break;
				Case '06': $type='MEDICARE OSCAR/CERTIFICATION'; break;
				Case '07': $type='MEDICARE NSC'; break;
				Case '08': $type='MEDICARE PIN'; break;
				default: $type=$row['Other Provider Identifier Type Code_36'];
		}
		echo "<tr>";
		echo "<td>".$row['Other Provider Identifier_36']."</td>";
		echo "<td>".$type."</td>";
		echo "<td>".$row['Other Provider Identifier State_36']."</td>";
		echo "<td>".$row['Other Provider Identifier Issuer_36']."</td>";
		echo "</tr>";
	}
	If($row['Other Provider Identifier_37']!="")
	{
		switch($row['Other Provider Identifier Type Code_37'])	{
				Case '01': $type='OTHER'; break;
				Case '02': $type='MEDICARE UPIN'; break;
				Case '04': $type='MEDICARE ID-TYPE UNSPECIFIED'; break;
				Case '05': $type='MEDICAID'; break;
				Case '06': $type='MEDICARE OSCAR/CERTIFICATION'; break;
				Case '07': $type='MEDICARE NSC'; break;
				Case '08': $type='MEDICARE PIN'; break;
				default: $type=$row['Other Provider Identifier Type Code_37'];
		}
		echo "<tr>";
		echo "<td>".$row['Other Provider Identifier_37']."</td>";
		echo "<td>".$type."</td>";
		echo "<td>".$row['Other Provider Identifier State_37']."</td>";
		echo "<td>".$row['Other Provider Identifier Issuer_37']."</td>";
		echo "</tr>";
	}
	If($row['Other Provider Identifier_38']!="")
	{
		switch($row['Other Provider Identifier Type Code_38'])	{
				Case '01': $type='OTHER'; break;
				Case '02': $type='MEDICARE UPIN'; break;
				Case '04': $type='MEDICARE ID-TYPE UNSPECIFIED'; break;
				Case '05': $type='MEDICAID'; break;
				Case '06': $type='MEDICARE OSCAR/CERTIFICATION'; break;
				Case '07': $type='MEDICARE NSC'; break;
				Case '08': $type='MEDICARE PIN'; break;
				default: $type=$row['Other Provider Identifier Type Code_38'];
		}
		echo "<tr>";
		echo "<td>".$row['Other Provider Identifier_38']."</td>";
		echo "<td>".$type."</td>";
		echo "<td>".$row['Other Provider Identifier State_38']."</td>";
		echo "<td>".$row['Other Provider Identifier Issuer_38']."</td>";
		echo "</tr>";
	}
	If($row['Other Provider Identifier_39']!="")
	{
		switch($row['Other Provider Identifier Type Code_39'])	{
				Case '01': $type='OTHER'; break;
				Case '02': $type='MEDICARE UPIN'; break;
				Case '04': $type='MEDICARE ID-TYPE UNSPECIFIED'; break;
				Case '05': $type='MEDICAID'; break;
				Case '06': $type='MEDICARE OSCAR/CERTIFICATION'; break;
				Case '07': $type='MEDICARE NSC'; break;
				Case '08': $type='MEDICARE PIN'; break;
				default: $type=$row['Other Provider Identifier Type Code_39'];
		}
		echo "<tr>";
		echo "<td>".$row['Other Provider Identifier_39']."</td>";
		echo "<td>".$type."</td>";
		echo "<td>".$row['Other Provider Identifier State_39']."</td>";
		echo "<td>".$row['Other Provider Identifier Issuer_39']."</td>";
		echo "</tr>";
	}
	If($row['Other Provider Identifier_40']!="")
	{
		switch($row['Other Provider Identifier Type Code_40'])	{
				Case '01': $type='OTHER'; break;
				Case '02': $type='MEDICARE UPIN'; break;
				Case '04': $type='MEDICARE ID-TYPE UNSPECIFIED'; break;
				Case '05': $type='MEDICAID'; break;
				Case '06': $type='MEDICARE OSCAR/CERTIFICATION'; break;
				Case '07': $type='MEDICARE NSC'; break;
				Case '08': $type='MEDICARE PIN'; break;
				default: $type=$row['Other Provider Identifier Type Code_40'];
		}
		echo "<tr>";
		echo "<td>".$row['Other Provider Identifier_40']."</td>";
		echo "<td>".$type."</td>";
		echo "<td>".$row['Other Provider Identifier State_40']."</td>";
		echo "<td>".$row['Other Provider Identifier Issuer_40']."</td>";
		echo "</tr>";
	}
	If($row['Other Provider Identifier_41']!="")
	{
		switch($row['Other Provider Identifier Type Code_41'])	{
				Case '01': $type='OTHER'; break;
				Case '02': $type='MEDICARE UPIN'; break;
				Case '04': $type='MEDICARE ID-TYPE UNSPECIFIED'; break;
				Case '05': $type='MEDICAID'; break;
				Case '06': $type='MEDICARE OSCAR/CERTIFICATION'; break;
				Case '07': $type='MEDICARE NSC'; break;
				Case '08': $type='MEDICARE PIN'; break;
				default: $type=$row['Other Provider Identifier Type Code_41'];
		}
		echo "<tr>";
		echo "<td>".$row['Other Provider Identifier_41']."</td>";
		echo "<td>".$type."</td>";
		echo "<td>".$row['Other Provider Identifier State_41']."</td>";
		echo "<td>".$row['Other Provider Identifier Issuer_41']."</td>";
		echo "</tr>";
	}
	If($row['Other Provider Identifier_42']!="")
	{
		switch($row['Other Provider Identifier Type Code_42'])	{
				Case '01': $type='OTHER'; break;
				Case '02': $type='MEDICARE UPIN'; break;
				Case '04': $type='MEDICARE ID-TYPE UNSPECIFIED'; break;
				Case '05': $type='MEDICAID'; break;
				Case '06': $type='MEDICARE OSCAR/CERTIFICATION'; break;
				Case '07': $type='MEDICARE NSC'; break;
				Case '08': $type='MEDICARE PIN'; break;
				default: $type=$row['Other Provider Identifier Type Code_4'];
		}
		echo "<tr>";
		echo "<td>".$row['Other Provider Identifier_42']."</td>";
		echo "<td>".$type."</td>";
		echo "<td>".$row['Other Provider Identifier State_42']."</td>";
		echo "<td>".$row['Other Provider Identifier Issuer_42']."</td>";
		echo "</tr>";
	}
	If($row['Other Provider Identifier_43']!="")
	{
		switch($row['Other Provider Identifier Type Code_43'])	{
				Case '01': $type='OTHER'; break;
				Case '02': $type='MEDICARE UPIN'; break;
				Case '04': $type='MEDICARE ID-TYPE UNSPECIFIED'; break;
				Case '05': $type='MEDICAID'; break;
				Case '06': $type='MEDICARE OSCAR/CERTIFICATION'; break;
				Case '07': $type='MEDICARE NSC'; break;
				Case '08': $type='MEDICARE PIN'; break;
				default: $type=$row['Other Provider Identifier Type Code_43'];
		}
		echo "<tr>";
		echo "<td>".$row['Other Provider Identifier_43']."</td>";
		echo "<td>".$type."</td>";
		echo "<td>".$row['Other Provider Identifier State_43']."</td>";
		echo "<td>".$row['Other Provider Identifier Issuer_43']."</td>";
		echo "</tr>";
	}
	If($row['Other Provider Identifier_44']!="")
	{
		switch($row['Other Provider Identifier Type Code_44'])	{
				Case '01': $type='OTHER'; break;
				Case '02': $type='MEDICARE UPIN'; break;
				Case '04': $type='MEDICARE ID-TYPE UNSPECIFIED'; break;
				Case '05': $type='MEDICAID'; break;
				Case '06': $type='MEDICARE OSCAR/CERTIFICATION'; break;
				Case '07': $type='MEDICARE NSC'; break;
				Case '08': $type='MEDICARE PIN'; break;
				default: $type=$row['Other Provider Identifier Type Code_44'];
		}
		echo "<tr>";
		echo "<td>".$row['Other Provider Identifier_44']."</td>";
		echo "<td>".$type."</td>";
		echo "<td>".$row['Other Provider Identifier State_44']."</td>";
		echo "<td>".$row['Other Provider Identifier Issuer_44']."</td>";
		echo "</tr>";
	}
	If($row['Other Provider Identifier_45']!="")
	{
		switch($row['Other Provider Identifier Type Code_45'])	{
				Case '01': $type='OTHER'; break;
				Case '02': $type='MEDICARE UPIN'; break;
				Case '04': $type='MEDICARE ID-TYPE UNSPECIFIED'; break;
				Case '05': $type='MEDICAID'; break;
				Case '06': $type='MEDICARE OSCAR/CERTIFICATION'; break;
				Case '07': $type='MEDICARE NSC'; break;
				Case '08': $type='MEDICARE PIN'; break;
				default: $type=$row['Other Provider Identifier Type Code_45'];
		}
		echo "<tr>";
		echo "<td>".$row['Other Provider Identifier_45']."</td>";
		echo "<td>".$type."</td>";
		echo "<td>".$row['Other Provider Identifier State_45']."</td>";
		echo "<td>".$row['Other Provider Identifier Issuer_45']."</td>";
		echo "</tr>";
	}
	If($row['Other Provider Identifier_46']!="")
	{
		switch($row['Other Provider Identifier Type Code_46'])	{
				Case '01': $type='OTHER'; break;
				Case '02': $type='MEDICARE UPIN'; break;
				Case '04': $type='MEDICARE ID-TYPE UNSPECIFIED'; break;
				Case '05': $type='MEDICAID'; break;
				Case '06': $type='MEDICARE OSCAR/CERTIFICATION'; break;
				Case '07': $type='MEDICARE NSC'; break;
				Case '08': $type='MEDICARE PIN'; break;
				default: $type=$row['Other Provider Identifier Type Code_46'];
		}
		echo "<tr>";
		echo "<td>".$row['Other Provider Identifier_46']."</td>";
		echo "<td>".$type."</td>";
		echo "<td>".$row['Other Provider Identifier State_46']."</td>";
		echo "<td>".$row['Other Provider Identifier Issuer_46']."</td>";
		echo "</tr>";
	}
	If($row['Other Provider Identifier_47']!="")
	{
		switch($row['Other Provider Identifier Type Code_47'])	{
				Case '01': $type='OTHER'; break;
				Case '02': $type='MEDICARE UPIN'; break;
				Case '04': $type='MEDICARE ID-TYPE UNSPECIFIED'; break;
				Case '05': $type='MEDICAID'; break;
				Case '06': $type='MEDICARE OSCAR/CERTIFICATION'; break;
				Case '07': $type='MEDICARE NSC'; break;
				Case '08': $type='MEDICARE PIN'; break;
				default: $type=$row['Other Provider Identifier Type Code_47'];
		}
		echo "<tr>";
		echo "<td>".$row['Other Provider Identifier_47']."</td>";
		echo "<td>".$type."</td>";
		echo "<td>".$row['Other Provider Identifier State_47']."</td>";
		echo "<td>".$row['Other Provider Identifier Issuer_47']."</td>";
		echo "</tr>";
	}
	If($row['Other Provider Identifier_48']!="")
	{
		switch($row['Other Provider Identifier Type Code_48'])	{
				Case '01': $type='OTHER'; break;
				Case '02': $type='MEDICARE UPIN'; break;
				Case '04': $type='MEDICARE ID-TYPE UNSPECIFIED'; break;
				Case '05': $type='MEDICAID'; break;
				Case '06': $type='MEDICARE OSCAR/CERTIFICATION'; break;
				Case '07': $type='MEDICARE NSC'; break;
				Case '08': $type='MEDICARE PIN'; break;
				default: $type=$row['Other Provider Identifier Type Code_48'];
		}
		echo "<tr>";
		echo "<td>".$row['Other Provider Identifier_48']."</td>";
		echo "<td>".$type."</td>";
		echo "<td>".$row['Other Provider Identifier State_48']."</td>";
		echo "<td>".$row['Other Provider Identifier Issuer_48']."</td>";
		echo "</tr>";
	}
	If($row['Other Provider Identifier_49']!="")
	{
		switch($row['Other Provider Identifier Type Code_49'])	{
				Case '01': $type='OTHER'; break;
				Case '02': $type='MEDICARE UPIN'; break;
				Case '04': $type='MEDICARE ID-TYPE UNSPECIFIED'; break;
				Case '05': $type='MEDICAID'; break;
				Case '06': $type='MEDICARE OSCAR/CERTIFICATION'; break;
				Case '07': $type='MEDICARE NSC'; break;
				Case '08': $type='MEDICARE PIN'; break;
				default: $type=$row['Other Provider Identifier Type Code_49'];
		}
		echo "<tr>";
		echo "<td>".$row['Other Provider Identifier_49']."</td>";
		echo "<td>".$type."</td>";
		echo "<td>".$row['Other Provider Identifier State_49']."</td>";
		echo "<td>".$row['Other Provider Identifier Issuer_49']."</td>";
		echo "</tr>";
	}
	If($row['Other Provider Identifier_50']!="")
	{
		switch($row['Other Provider Identifier Type Code_50'])	{
				Case '01': $type='OTHER'; break;
				Case '02': $type='MEDICARE UPIN'; break;
				Case '04': $type='MEDICARE ID-TYPE UNSPECIFIED'; break;
				Case '05': $type='MEDICAID'; break;
				Case '06': $type='MEDICARE OSCAR/CERTIFICATION'; break;
				Case '07': $type='MEDICARE NSC'; break;
				Case '08': $type='MEDICARE PIN'; break;
				default: $type=$row['Other Provider Identifier Type Code_50'];
		}
		echo "<tr>";
		echo "<td>".$row['Other Provider Identifier_50']."</td>";
		echo "<td>".$type."</td>";
		echo "<td>".$row['Other Provider Identifier State_50']."</td>";
		echo "<td>".$row['Other Provider Identifier Issuer_50']."</td>";
		echo "</tr>";
	}
	echo "</table>";
	echo "<br />";
