SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER OFF
GO
ALTER PROCEDURE [dbo].[Insert_NPI_New] 
			@NPI VARCHAR(12),
			@Entity_Type_Code VARCHAR(3),
			@Replacement_NPI VARCHAR(12),
			@Employer_Identification_Number_EIN VARCHAR(11),
			@Provider_Organization_Name_Legal_Business_Name VARCHAR(72),
			@Provider_Last_Name_Legal_Name VARCHAR(37),
			@Provider_First_Name VARCHAR(22),
			@Provider_Middle_Name VARCHAR(22),
			@Provider_Name_Prefix_Text VARCHAR(7),
			@Provider_Name_Suffix_Text VARCHAR(7),
			@Provider_Credential_Text VARCHAR(22),
			@Provider_Other_Organization_Name VARCHAR(72),
			@Provider_Other_Organization_Name_Type_Code VARCHAR(5),
			@Provider_Other_Last_Name VARCHAR(37),
			@Provider_Other_First_Name VARCHAR(22),
			@Provider_Other_Middle_Name VARCHAR(22),
			@Provider_Other_Name_Prefix_Text VARCHAR(7),
			@Provider_Other_Name_Suffix_Text VARCHAR(7),
			@Provider_Other_Credential_Text VARCHAR(22),
			@Provider_Other_Last_Name_Type_Code VARCHAR(3),
			@Provider_First_Line_Business_Mailing_Address VARCHAR(57),
			@Provider_Second_Line_Business_Mailing_Address VARCHAR(57),
			@Provider_Business_Mailing_Address_City_Name VARCHAR(42),
			@Provider_Business_Mailing_Address_State_Name VARCHAR(42),
			@Provider_Business_Mailing_Address_Postal_Code VARCHAR(22),
			@Provider_Business_Mailing_Address_Country_Code_If_outside_U_S VARCHAR(32),
			@Provider_Business_Mailing_Address_Telephone_Number VARCHAR(22),
			@Provider_Business_Mailing_Address_Fax_Number VARCHAR(22),
			@Provider_First_Line_Business_Practice_Location_Address VARCHAR(57),
			@Provider_Second_Line_Business_Practice_Location_Address VARCHAR(57),
			@Provider_Business_Practice_Location_Address_City_Name VARCHAR(42),
			@Provider_Business_Practice_Location_Address_State_Name VARCHAR(42),
			@Provider_Business_Practice_Location_Address_Postal_Code VARCHAR(22),
			@Provider_Business_Practice_Location_Address_Country_Code_If_outside_U_S VARCHAR(32),
			@Provider_Business_Practice_Location_Address_Telephone_Number VARCHAR(22),
			@Provider_Business_Practice_Location_Address_Fax_Number VARCHAR(22),
			@Provider_Enumeration_Date VARCHAR(12),
			@Last_Update_Date VARCHAR(12),
			@NPI_Deactivation_Reason_Code VARCHAR(16),
			@NPI_Deactivation_Date VARCHAR(12),
			@NPI_Reactivation_Date VARCHAR(12),
			@Provider_Gender_Code VARCHAR(3),
			@Authorized_Official_Last_Name VARCHAR(37),
			@Authorized_Official_First_Name VARCHAR(22),
			@Authorized_Official_Middle_Name VARCHAR(22),
			@Authorized_Official_Title_or_Position VARCHAR(37),
			@Authorized_Official_Telephone_Number VARCHAR(22),
			@Healthcare_Provider_Taxonomy_Code_1 VARCHAR(12),
			@Provider_License_Number_1 VARCHAR(22),
			@Provider_License_Number_State_Code_1 VARCHAR(32),
			@Healthcare_Provider_Primary_Taxonomy_Switch_1 VARCHAR(8),
			@Healthcare_Provider_Taxonomy_Code_2 VARCHAR(12),
			@Provider_License_Number_2 VARCHAR(22),
			@Provider_License_Number_State_Code_2 VARCHAR(32),
			@Healthcare_Provider_Primary_Taxonomy_Switch_2 VARCHAR(8),
			@Healthcare_Provider_Taxonomy_Code_3 VARCHAR(12),
			@Provider_License_Number_3 VARCHAR(22),
			@Provider_License_Number_State_Code_3 VARCHAR(32),
			@Healthcare_Provider_Primary_Taxonomy_Switch_3 VARCHAR(8),
			@Healthcare_Provider_Taxonomy_Code_4 VARCHAR(12),
			@Provider_License_Number_4 VARCHAR(22),
			@Provider_License_Number_State_Code_4 VARCHAR(32),
			@Healthcare_Provider_Primary_Taxonomy_Switch_4 VARCHAR(8),
			@Healthcare_Provider_Taxonomy_Code_5 VARCHAR(12),
			@Provider_License_Number_5 VARCHAR(22),
			@Provider_License_Number_State_Code_5 VARCHAR(32),
			@Healthcare_Provider_Primary_Taxonomy_Switch_5 VARCHAR(8),
			@Healthcare_Provider_Taxonomy_Code_6 VARCHAR(12),
			@Provider_License_Number_6 VARCHAR(22),
			@Provider_License_Number_State_Code_6 VARCHAR(32),
			@Healthcare_Provider_Primary_Taxonomy_Switch_6 VARCHAR(8),
			@Healthcare_Provider_Taxonomy_Code_7 VARCHAR(12),
			@Provider_License_Number_7 VARCHAR(22),
			@Provider_License_Number_State_Code_7 VARCHAR(32),
			@Healthcare_Provider_Primary_Taxonomy_Switch_7 VARCHAR(8),
			@Healthcare_Provider_Taxonomy_Code_8 VARCHAR(12),
			@Provider_License_Number_8 VARCHAR(22),
			@Provider_License_Number_State_Code_8 VARCHAR(32),
			@Healthcare_Provider_Primary_Taxonomy_Switch_8 VARCHAR(8),
			@Healthcare_Provider_Taxonomy_Code_9 VARCHAR(12),
			@Provider_License_Number_9 VARCHAR(22),
			@Provider_License_Number_State_Code_9 VARCHAR(32),
			@Healthcare_Provider_Primary_Taxonomy_Switch_9 VARCHAR(8),
			@Healthcare_Provider_Taxonomy_Code_10 VARCHAR(12),
			@Provider_License_Number_10 VARCHAR(22),
			@Provider_License_Number_State_Code_10 VARCHAR(32),
			@Healthcare_Provider_Primary_Taxonomy_Switch_10 VARCHAR(8),
			@Healthcare_Provider_Taxonomy_Code_11 VARCHAR(12),
			@Provider_License_Number_11 VARCHAR(22),
			@Provider_License_Number_State_Code_11 VARCHAR(4),
			@Healthcare_Provider_Primary_Taxonomy_Switch_11 VARCHAR(3),
			@Healthcare_Provider_Taxonomy_Code_12 VARCHAR(12),
			@Provider_License_Number_12 VARCHAR(22),
			@Provider_License_Number_State_Code_12 VARCHAR(4),
			@Healthcare_Provider_Primary_Taxonomy_Switch_12 VARCHAR(3),
			@Healthcare_Provider_Taxonomy_Code_13 VARCHAR(12),
			@Provider_License_Number_13 VARCHAR(22),
			@Provider_License_Number_State_Code_13 VARCHAR(4),
			@Healthcare_Provider_Primary_Taxonomy_Switch_13 VARCHAR(3),
			@Healthcare_Provider_Taxonomy_Code_14 VARCHAR(12),
			@Provider_License_Number_14 VARCHAR(22),
			@Provider_License_Number_State_Code_14 VARCHAR(4),
			@Healthcare_Provider_Primary_Taxonomy_Switch_14 VARCHAR(3),
			@Healthcare_Provider_Taxonomy_Code_15 VARCHAR(12),
			@Provider_License_Number_15 VARCHAR(22),
			@Provider_License_Number_State_Code_15 VARCHAR(4),
			@Healthcare_Provider_Primary_Taxonomy_Switch_15 VARCHAR(3),
			@Other_Provider_Identifier_1 VARCHAR(22),
			@Other_Provider_Identifier_Type_Code_1 VARCHAR(32),
			@Other_Provider_Identifier_State_1 VARCHAR(4),
			@Other_Provider_Identifier_Issuer_1 VARCHAR(82),
			@Other_Provider_Identifier_2 VARCHAR(22),
			@Other_Provider_Identifier_Type_Code_2 VARCHAR(32),
			@Other_Provider_Identifier_State_2 VARCHAR(4),
			@Other_Provider_Identifier_Issuer_2 VARCHAR(82),
			@Other_Provider_Identifier_3 VARCHAR(32),
			@Other_Provider_Identifier_Type_Code_3 VARCHAR(32),
			@Other_Provider_Identifier_State_3 VARCHAR(4),
			@Other_Provider_Identifier_Issuer_3 VARCHAR(82),
			@Other_Provider_Identifier_4 VARCHAR(32),
			@Other_Provider_Identifier_Type_Code_4 VARCHAR(32),
			@Other_Provider_Identifier_State_4 VARCHAR(4),
			@Other_Provider_Identifier_Issuer_4 VARCHAR(82),
			@Other_Provider_Identifier_5 VARCHAR(22),
			@Other_Provider_Identifier_Type_Code_5 VARCHAR(32),
			@Other_Provider_Identifier_State_5 VARCHAR(4),
			@Other_Provider_Identifier_Issuer_5 VARCHAR(82),
			@Other_Provider_Identifier_6 VARCHAR(22),
			@Other_Provider_Identifier_Type_Code_6 VARCHAR(32),
			@Other_Provider_Identifier_State_6 VARCHAR(4),
			@Other_Provider_Identifier_Issuer_6 VARCHAR(82),
			@Other_Provider_Identifier_7 VARCHAR(22),
			@Other_Provider_Identifier_Type_Code_7 VARCHAR(32),
			@Other_Provider_Identifier_State_7 VARCHAR(4),
			@Other_Provider_Identifier_Issuer_7 VARCHAR(82),
			@Other_Provider_Identifier_8 VARCHAR(22),
			@Other_Provider_Identifier_Type_Code_8 VARCHAR(32),
			@Other_Provider_Identifier_State_8 VARCHAR(4),
			@Other_Provider_Identifier_Issuer_8 VARCHAR(82),
			@Other_Provider_Identifier_9 VARCHAR(22),
			@Other_Provider_Identifier_Type_Code_9 VARCHAR(32),
			@Other_Provider_Identifier_State_9 VARCHAR(4),
			@Other_Provider_Identifier_Issuer_9 VARCHAR(82),
			@Other_Provider_Identifier_10 VARCHAR(22),
			@Other_Provider_Identifier_Type_Code_10 VARCHAR(32),
			@Other_Provider_Identifier_State_10 VARCHAR(4),
			@Other_Provider_Identifier_Issuer_10 VARCHAR(82),
			@Other_Provider_Identifier_11 VARCHAR(22),
			@Other_Provider_Identifier_Type_Code_11 VARCHAR(4),
			@Other_Provider_Identifier_State_11 VARCHAR(4),
			@Other_Provider_Identifier_Issuer_11 VARCHAR(82),
			@Other_Provider_Identifier_12 VARCHAR(22),
			@Other_Provider_Identifier_Type_Code_12 VARCHAR(4),
			@Other_Provider_Identifier_State_12 VARCHAR(4),
			@Other_Provider_Identifier_Issuer_12 VARCHAR(82),
			@Other_Provider_Identifier_13 VARCHAR(22),
			@Other_Provider_Identifier_Type_Code_13 VARCHAR(4),
			@Other_Provider_Identifier_State_13 VARCHAR(4),
			@Other_Provider_Identifier_Issuer_13 VARCHAR(82),
			@Other_Provider_Identifier_14 VARCHAR(22),
			@Other_Provider_Identifier_Type_Code_14 VARCHAR(4),
			@Other_Provider_Identifier_State_14 VARCHAR(4),
			@Other_Provider_Identifier_Issuer_14 VARCHAR(82),
			@Other_Provider_Identifier_15 VARCHAR(22),
			@Other_Provider_Identifier_Type_Code_15 VARCHAR(4),
			@Other_Provider_Identifier_State_15 VARCHAR(4),
			@Other_Provider_Identifier_Issuer_15 VARCHAR(82),
			@Other_Provider_Identifier_16 VARCHAR(22),
			@Other_Provider_Identifier_Type_Code_16 VARCHAR(4),
			@Other_Provider_Identifier_State_16 VARCHAR(4),
			@Other_Provider_Identifier_Issuer_16 VARCHAR(82),
			@Other_Provider_Identifier_17 VARCHAR(22),
			@Other_Provider_Identifier_Type_Code_17 VARCHAR(4),
			@Other_Provider_Identifier_State_17 VARCHAR(4),
			@Other_Provider_Identifier_Issuer_17 VARCHAR(82),
			@Other_Provider_Identifier_18 VARCHAR(22),
			@Other_Provider_Identifier_Type_Code_18 VARCHAR(4),
			@Other_Provider_Identifier_State_18 VARCHAR(4),
			@Other_Provider_Identifier_Issuer_18 VARCHAR(82),
			@Other_Provider_Identifier_19 VARCHAR(22),
			@Other_Provider_Identifier_Type_Code_19 VARCHAR(4),
			@Other_Provider_Identifier_State_19 VARCHAR(4),
			@Other_Provider_Identifier_Issuer_19 VARCHAR(82),
			@Other_Provider_Identifier_20 VARCHAR(22),
			@Other_Provider_Identifier_Type_Code_20 VARCHAR(4),
			@Other_Provider_Identifier_State_20 VARCHAR(4),
			@Other_Provider_Identifier_Issuer_20 VARCHAR(82),
			@Other_Provider_Identifier_21 VARCHAR(22),
			@Other_Provider_Identifier_Type_Code_21 VARCHAR(4),
			@Other_Provider_Identifier_State_21 VARCHAR(4),
			@Other_Provider_Identifier_Issuer_21 VARCHAR(82),
			@Other_Provider_Identifier_22 VARCHAR(22),
			@Other_Provider_Identifier_Type_Code_22 VARCHAR(4),
			@Other_Provider_Identifier_State_22 VARCHAR(4),
			@Other_Provider_Identifier_Issuer_22 VARCHAR(82),
			@Other_Provider_Identifier_23 VARCHAR(22),
			@Other_Provider_Identifier_Type_Code_23 VARCHAR(4),
			@Other_Provider_Identifier_State_23 VARCHAR(4),
			@Other_Provider_Identifier_Issuer_23 VARCHAR(82),
			@Other_Provider_Identifier_24 VARCHAR(22),
			@Other_Provider_Identifier_Type_Code_24 VARCHAR(4),
			@Other_Provider_Identifier_State_24 VARCHAR(4),
			@Other_Provider_Identifier_Issuer_24 VARCHAR(82),
			@Other_Provider_Identifier_25 VARCHAR(22),
			@Other_Provider_Identifier_Type_Code_25 VARCHAR(4),
			@Other_Provider_Identifier_State_25 VARCHAR(4),
			@Other_Provider_Identifier_Issuer_25 VARCHAR(82),
			@Other_Provider_Identifier_26 VARCHAR(22),
			@Other_Provider_Identifier_Type_Code_26 VARCHAR(4),
			@Other_Provider_Identifier_State_26 VARCHAR(4),
			@Other_Provider_Identifier_Issuer_26 VARCHAR(82),
			@Other_Provider_Identifier_27 VARCHAR(22),
			@Other_Provider_Identifier_Type_Code_27 VARCHAR(4),
			@Other_Provider_Identifier_State_27 VARCHAR(4),
			@Other_Provider_Identifier_Issuer_27 VARCHAR(82),
			@Other_Provider_Identifier_28 VARCHAR(22),
			@Other_Provider_Identifier_Type_Code_28 VARCHAR(4),
			@Other_Provider_Identifier_State_28 VARCHAR(4),
			@Other_Provider_Identifier_Issuer_28 VARCHAR(82),
			@Other_Provider_Identifier_29 VARCHAR(22),
			@Other_Provider_Identifier_Type_Code_29 VARCHAR(4),
			@Other_Provider_Identifier_State_29 VARCHAR(4),
			@Other_Provider_Identifier_Issuer_29 VARCHAR(82),
			@Other_Provider_Identifier_30 VARCHAR(22),
			@Other_Provider_Identifier_Type_Code_30 VARCHAR(4),
			@Other_Provider_Identifier_State_30 VARCHAR(4),
			@Other_Provider_Identifier_Issuer_30 VARCHAR(82),
			@Other_Provider_Identifier_31 VARCHAR(22),
			@Other_Provider_Identifier_Type_Code_31 VARCHAR(4),
			@Other_Provider_Identifier_State_31 VARCHAR(4),
			@Other_Provider_Identifier_Issuer_31 VARCHAR(82),
			@Other_Provider_Identifier_32 VARCHAR(22),
			@Other_Provider_Identifier_Type_Code_32 VARCHAR(4),
			@Other_Provider_Identifier_State_32 VARCHAR(4),
			@Other_Provider_Identifier_Issuer_32 VARCHAR(82),
			@Other_Provider_Identifier_33 VARCHAR(22),
			@Other_Provider_Identifier_Type_Code_33 VARCHAR(4),
			@Other_Provider_Identifier_State_33 VARCHAR(4),
			@Other_Provider_Identifier_Issuer_33 VARCHAR(82),
			@Other_Provider_Identifier_34 VARCHAR(22),
			@Other_Provider_Identifier_Type_Code_34 VARCHAR(4),
			@Other_Provider_Identifier_State_34 VARCHAR(4),
			@Other_Provider_Identifier_Issuer_34 VARCHAR(82),
			@Other_Provider_Identifier_35 VARCHAR(22),
			@Other_Provider_Identifier_Type_Code_35 VARCHAR(4),
			@Other_Provider_Identifier_State_35 VARCHAR(4),
			@Other_Provider_Identifier_Issuer_35 VARCHAR(82),
			@Other_Provider_Identifier_36 VARCHAR(22),
			@Other_Provider_Identifier_Type_Code_36 VARCHAR(4),
			@Other_Provider_Identifier_State_36 VARCHAR(4),
			@Other_Provider_Identifier_Issuer_36 VARCHAR(82),
			@Other_Provider_Identifier_37 VARCHAR(22),
			@Other_Provider_Identifier_Type_Code_37 VARCHAR(4),
			@Other_Provider_Identifier_State_37 VARCHAR(4),
			@Other_Provider_Identifier_Issuer_37 VARCHAR(82),
			@Other_Provider_Identifier_38 VARCHAR(22),
			@Other_Provider_Identifier_Type_Code_38 VARCHAR(4),
			@Other_Provider_Identifier_State_38 VARCHAR(4),
			@Other_Provider_Identifier_Issuer_38 VARCHAR(82),
			@Other_Provider_Identifier_39 VARCHAR(22),
			@Other_Provider_Identifier_Type_Code_39 VARCHAR(4),
			@Other_Provider_Identifier_State_39 VARCHAR(4),
			@Other_Provider_Identifier_Issuer_39 VARCHAR(82),
			@Other_Provider_Identifier_40 VARCHAR(22),
			@Other_Provider_Identifier_Type_Code_40 VARCHAR(4),
			@Other_Provider_Identifier_State_40 VARCHAR(4),
			@Other_Provider_Identifier_Issuer_40 VARCHAR(82),
			@Other_Provider_Identifier_41 VARCHAR(22),
			@Other_Provider_Identifier_Type_Code_41 VARCHAR(4),
			@Other_Provider_Identifier_State_41 VARCHAR(4),
			@Other_Provider_Identifier_Issuer_41 VARCHAR(82),
			@Other_Provider_Identifier_42 VARCHAR(22),
			@Other_Provider_Identifier_Type_Code_42 VARCHAR(4),
			@Other_Provider_Identifier_State_42 VARCHAR(4),
			@Other_Provider_Identifier_Issuer_42 VARCHAR(82),
			@Other_Provider_Identifier_43 VARCHAR(22),
			@Other_Provider_Identifier_Type_Code_43 VARCHAR(4),
			@Other_Provider_Identifier_State_43 VARCHAR(4),
			@Other_Provider_Identifier_Issuer_43 VARCHAR(82),
			@Other_Provider_Identifier_44 VARCHAR(22),
			@Other_Provider_Identifier_Type_Code_44 VARCHAR(4),
			@Other_Provider_Identifier_State_44 VARCHAR(4),
			@Other_Provider_Identifier_Issuer_44 VARCHAR(82),
			@Other_Provider_Identifier_45 VARCHAR(22),
			@Other_Provider_Identifier_Type_Code_45 VARCHAR(4),
			@Other_Provider_Identifier_State_45 VARCHAR(4),
			@Other_Provider_Identifier_Issuer_45 VARCHAR(82),
			@Other_Provider_Identifier_46 VARCHAR(22),
			@Other_Provider_Identifier_Type_Code_46 VARCHAR(4),
			@Other_Provider_Identifier_State_46 VARCHAR(4),
			@Other_Provider_Identifier_Issuer_46 VARCHAR(82),
			@Other_Provider_Identifier_47 VARCHAR(22),
			@Other_Provider_Identifier_Type_Code_47 VARCHAR(4),
			@Other_Provider_Identifier_State_47 VARCHAR(4),
			@Other_Provider_Identifier_Issuer_47 VARCHAR(82),
			@Other_Provider_Identifier_48 VARCHAR(22),
			@Other_Provider_Identifier_Type_Code_48 VARCHAR(4),
			@Other_Provider_Identifier_State_48 VARCHAR(4),
			@Other_Provider_Identifier_Issuer_48 VARCHAR(82),
			@Other_Provider_Identifier_49 VARCHAR(22),
			@Other_Provider_Identifier_Type_Code_49 VARCHAR(4),
			@Other_Provider_Identifier_State_49 VARCHAR(4),
			@Other_Provider_Identifier_Issuer_49 VARCHAR(82),
			@Other_Provider_Identifier_50 VARCHAR(22),
			@Other_Provider_Identifier_Type_Code_50 VARCHAR(4),
			@Other_Provider_Identifier_State_50 VARCHAR(4),
			@Other_Provider_Identifier_Issuer_50 VARCHAR(82),
			@Is_Sole_Proprietor VARCHAR(3),
			@Is_Organization_Subpart VARCHAR(3),
			@Parent_Organization_LBN VARCHAR(72),
			@Parent_Organization_TIN VARCHAR(11),
			@Authorized_Official_Name_Prefix_Text VARCHAR(7),
			@Authorized_Official_Name_Suffix_Text VARCHAR(7),
			@Authorized_Official_Credential_Text VARCHAR(22),
			@Healthcare_Provider_Taxonomy_Group_1 VARCHAR(72),
			@Healthcare_Provider_Taxonomy_Group_2 VARCHAR(72),
			@Healthcare_Provider_Taxonomy_Group_3 VARCHAR(72),
			@Healthcare_Provider_Taxonomy_Group_4 VARCHAR(72),
			@Healthcare_Provider_Taxonomy_Group_5 VARCHAR(72),
			@Healthcare_Provider_Taxonomy_Group_6 VARCHAR(72),
			@Healthcare_Provider_Taxonomy_Group_7 VARCHAR(72),
			@Healthcare_Provider_Taxonomy_Group_8 VARCHAR(72),
			@Healthcare_Provider_Taxonomy_Group_9 VARCHAR(72),
			@Healthcare_Provider_Taxonomy_Group_10 VARCHAR(72),
			@Healthcare_Provider_Taxonomy_Group_11 VARCHAR(72),
			@Healthcare_Provider_Taxonomy_Group_12 VARCHAR(72),
			@Healthcare_Provider_Taxonomy_Group_13 VARCHAR(72),
			@Healthcare_Provider_Taxonomy_Group_14 VARCHAR(72),
			@Healthcare_Provider_Taxonomy_Group_15 VARCHAR(72)
AS

Begin

INSERT INTO [dbo].[tbl_NPI_New] 
Select		 @NPI
			,@Entity_Type_Code
			,@Replacement_NPI
			,@Employer_Identification_Number_EIN
			,@Provider_Organization_Name_Legal_Business_Name
			,@Provider_Last_Name_Legal_Name
			,@Provider_First_Name
			,@Provider_Middle_Name
			,@Provider_Name_Prefix_Text
			,@Provider_Name_Suffix_Text
			,@Provider_Credential_Text
			,@Provider_Other_Organization_Name
			,@Provider_Other_Organization_Name_Type_Code
			,@Provider_Other_Last_Name
			,@Provider_Other_First_Name
			,@Provider_Other_Middle_Name
			,@Provider_Other_Name_Prefix_Text
			,@Provider_Other_Name_Suffix_Text
			,@Provider_Other_Credential_Text
			,@Provider_Other_Last_Name_Type_Code
			,@Provider_First_Line_Business_Mailing_Address
			,@Provider_Second_Line_Business_Mailing_Address
			,@Provider_Business_Mailing_Address_City_Name
			,@Provider_Business_Mailing_Address_State_Name
			,@Provider_Business_Mailing_Address_Postal_Code
			,@Provider_Business_Mailing_Address_Country_Code_If_outside_U_S
			,@Provider_Business_Mailing_Address_Telephone_Number
			,@Provider_Business_Mailing_Address_Fax_Number
			,@Provider_First_Line_Business_Practice_Location_Address
			,@Provider_Second_Line_Business_Practice_Location_Address
			,@Provider_Business_Practice_Location_Address_City_Name
			,@Provider_Business_Practice_Location_Address_State_Name
			,@Provider_Business_Practice_Location_Address_Postal_Code
			,@Provider_Business_Practice_Location_Address_Country_Code_If_outside_U_S
			,@Provider_Business_Practice_Location_Address_Telephone_Number
			,@Provider_Business_Practice_Location_Address_Fax_Number
			,@Provider_Enumeration_Date
			,@Last_Update_Date
			,@NPI_Deactivation_Reason_Code
			,@NPI_Deactivation_Date
			,@NPI_Reactivation_Date
			,@Provider_Gender_Code
			,@Authorized_Official_Last_Name
			,@Authorized_Official_First_Name
			,@Authorized_Official_Middle_Name
			,@Authorized_Official_Title_or_Position
			,@Authorized_Official_Telephone_Number
			,@Healthcare_Provider_Taxonomy_Code_1
			,@Provider_License_Number_1
			,@Provider_License_Number_State_Code_1
			,@Healthcare_Provider_Primary_Taxonomy_Switch_1
			,@Healthcare_Provider_Taxonomy_Code_2
			,@Provider_License_Number_2
			,@Provider_License_Number_State_Code_2
			,@Healthcare_Provider_Primary_Taxonomy_Switch_2
			,@Healthcare_Provider_Taxonomy_Code_3
			,@Provider_License_Number_3
			,@Provider_License_Number_State_Code_3
			,@Healthcare_Provider_Primary_Taxonomy_Switch_3
			,@Healthcare_Provider_Taxonomy_Code_4
			,@Provider_License_Number_4
			,@Provider_License_Number_State_Code_4
			,@Healthcare_Provider_Primary_Taxonomy_Switch_4
			,@Healthcare_Provider_Taxonomy_Code_5
			,@Provider_License_Number_5
			,@Provider_License_Number_State_Code_5
			,@Healthcare_Provider_Primary_Taxonomy_Switch_5
			,@Healthcare_Provider_Taxonomy_Code_6
			,@Provider_License_Number_6
			,@Provider_License_Number_State_Code_6
			,@Healthcare_Provider_Primary_Taxonomy_Switch_6
			,@Healthcare_Provider_Taxonomy_Code_7
			,@Provider_License_Number_7
			,@Provider_License_Number_State_Code_7
			,@Healthcare_Provider_Primary_Taxonomy_Switch_7
			,@Healthcare_Provider_Taxonomy_Code_8
			,@Provider_License_Number_8
			,@Provider_License_Number_State_Code_8
			,@Healthcare_Provider_Primary_Taxonomy_Switch_8
			,@Healthcare_Provider_Taxonomy_Code_9
			,@Provider_License_Number_9
			,@Provider_License_Number_State_Code_9
			,@Healthcare_Provider_Primary_Taxonomy_Switch_9
			,@Healthcare_Provider_Taxonomy_Code_10
			,@Provider_License_Number_10
			,@Provider_License_Number_State_Code_10
			,@Healthcare_Provider_Primary_Taxonomy_Switch_10
			,@Healthcare_Provider_Taxonomy_Code_11
			,@Provider_License_Number_11
			,@Provider_License_Number_State_Code_11
			,@Healthcare_Provider_Primary_Taxonomy_Switch_11
			,@Healthcare_Provider_Taxonomy_Code_12
			,@Provider_License_Number_12
			,@Provider_License_Number_State_Code_12
			,@Healthcare_Provider_Primary_Taxonomy_Switch_12
			,@Healthcare_Provider_Taxonomy_Code_13
			,@Provider_License_Number_13
			,@Provider_License_Number_State_Code_13
			,@Healthcare_Provider_Primary_Taxonomy_Switch_13
			,@Healthcare_Provider_Taxonomy_Code_14
			,@Provider_License_Number_14
			,@Provider_License_Number_State_Code_14
			,@Healthcare_Provider_Primary_Taxonomy_Switch_14
			,@Healthcare_Provider_Taxonomy_Code_15
			,@Provider_License_Number_15
			,@Provider_License_Number_State_Code_15
			,@Healthcare_Provider_Primary_Taxonomy_Switch_15
			,@Other_Provider_Identifier_1
			,@Other_Provider_Identifier_Type_Code_1
			,@Other_Provider_Identifier_State_1
			,@Other_Provider_Identifier_Issuer_1
			,@Other_Provider_Identifier_2
			,@Other_Provider_Identifier_Type_Code_2
			,@Other_Provider_Identifier_State_2
			,@Other_Provider_Identifier_Issuer_2
			,@Other_Provider_Identifier_3
			,@Other_Provider_Identifier_Type_Code_3
			,@Other_Provider_Identifier_State_3
			,@Other_Provider_Identifier_Issuer_3
			,@Other_Provider_Identifier_4
			,@Other_Provider_Identifier_Type_Code_4
			,@Other_Provider_Identifier_State_4
			,@Other_Provider_Identifier_Issuer_4
			,@Other_Provider_Identifier_5
			,@Other_Provider_Identifier_Type_Code_5
			,@Other_Provider_Identifier_State_5
			,@Other_Provider_Identifier_Issuer_5
			,@Other_Provider_Identifier_6
			,@Other_Provider_Identifier_Type_Code_6
			,@Other_Provider_Identifier_State_6
			,@Other_Provider_Identifier_Issuer_6
			,@Other_Provider_Identifier_7
			,@Other_Provider_Identifier_Type_Code_7
			,@Other_Provider_Identifier_State_7
			,@Other_Provider_Identifier_Issuer_7
			,@Other_Provider_Identifier_8
			,@Other_Provider_Identifier_Type_Code_8
			,@Other_Provider_Identifier_State_8
			,@Other_Provider_Identifier_Issuer_8
			,@Other_Provider_Identifier_9
			,@Other_Provider_Identifier_Type_Code_9
			,@Other_Provider_Identifier_State_9
			,@Other_Provider_Identifier_Issuer_9
			,@Other_Provider_Identifier_10
			,@Other_Provider_Identifier_Type_Code_10
			,@Other_Provider_Identifier_State_10
			,@Other_Provider_Identifier_Issuer_10
			,@Other_Provider_Identifier_11
			,@Other_Provider_Identifier_Type_Code_11
			,@Other_Provider_Identifier_State_11
			,@Other_Provider_Identifier_Issuer_11
			,@Other_Provider_Identifier_12
			,@Other_Provider_Identifier_Type_Code_12
			,@Other_Provider_Identifier_State_12
			,@Other_Provider_Identifier_Issuer_12
			,@Other_Provider_Identifier_13
			,@Other_Provider_Identifier_Type_Code_13
			,@Other_Provider_Identifier_State_13
			,@Other_Provider_Identifier_Issuer_13
			,@Other_Provider_Identifier_14
			,@Other_Provider_Identifier_Type_Code_14
			,@Other_Provider_Identifier_State_14
			,@Other_Provider_Identifier_Issuer_14
			,@Other_Provider_Identifier_15
			,@Other_Provider_Identifier_Type_Code_15
			,@Other_Provider_Identifier_State_15
			,@Other_Provider_Identifier_Issuer_15
			,@Other_Provider_Identifier_16
			,@Other_Provider_Identifier_Type_Code_16
			,@Other_Provider_Identifier_State_16
			,@Other_Provider_Identifier_Issuer_16
			,@Other_Provider_Identifier_17
			,@Other_Provider_Identifier_Type_Code_17
			,@Other_Provider_Identifier_State_17
			,@Other_Provider_Identifier_Issuer_17
			,@Other_Provider_Identifier_18
			,@Other_Provider_Identifier_Type_Code_18
			,@Other_Provider_Identifier_State_18
			,@Other_Provider_Identifier_Issuer_18
			,@Other_Provider_Identifier_19
			,@Other_Provider_Identifier_Type_Code_19
			,@Other_Provider_Identifier_State_19
			,@Other_Provider_Identifier_Issuer_19
			,@Other_Provider_Identifier_20
			,@Other_Provider_Identifier_Type_Code_20
			,@Other_Provider_Identifier_State_20
			,@Other_Provider_Identifier_Issuer_20
			,@Other_Provider_Identifier_21
			,@Other_Provider_Identifier_Type_Code_21
			,@Other_Provider_Identifier_State_21
			,@Other_Provider_Identifier_Issuer_21
			,@Other_Provider_Identifier_22
			,@Other_Provider_Identifier_Type_Code_22
			,@Other_Provider_Identifier_State_22
			,@Other_Provider_Identifier_Issuer_22
			,@Other_Provider_Identifier_23
			,@Other_Provider_Identifier_Type_Code_23
			,@Other_Provider_Identifier_State_23
			,@Other_Provider_Identifier_Issuer_23
			,@Other_Provider_Identifier_24
			,@Other_Provider_Identifier_Type_Code_24
			,@Other_Provider_Identifier_State_24
			,@Other_Provider_Identifier_Issuer_24
			,@Other_Provider_Identifier_25
			,@Other_Provider_Identifier_Type_Code_25
			,@Other_Provider_Identifier_State_25
			,@Other_Provider_Identifier_Issuer_25
			,@Other_Provider_Identifier_26
			,@Other_Provider_Identifier_Type_Code_26
			,@Other_Provider_Identifier_State_26
			,@Other_Provider_Identifier_Issuer_26
			,@Other_Provider_Identifier_27
			,@Other_Provider_Identifier_Type_Code_27
			,@Other_Provider_Identifier_State_27
			,@Other_Provider_Identifier_Issuer_27
			,@Other_Provider_Identifier_28
			,@Other_Provider_Identifier_Type_Code_28
			,@Other_Provider_Identifier_State_28
			,@Other_Provider_Identifier_Issuer_28
			,@Other_Provider_Identifier_29
			,@Other_Provider_Identifier_Type_Code_29
			,@Other_Provider_Identifier_State_29
			,@Other_Provider_Identifier_Issuer_29
			,@Other_Provider_Identifier_30
			,@Other_Provider_Identifier_Type_Code_30
			,@Other_Provider_Identifier_State_30
			,@Other_Provider_Identifier_Issuer_30
			,@Other_Provider_Identifier_31
			,@Other_Provider_Identifier_Type_Code_31
			,@Other_Provider_Identifier_State_31
			,@Other_Provider_Identifier_Issuer_31
			,@Other_Provider_Identifier_32
			,@Other_Provider_Identifier_Type_Code_32
			,@Other_Provider_Identifier_State_32
			,@Other_Provider_Identifier_Issuer_32
			,@Other_Provider_Identifier_33
			,@Other_Provider_Identifier_Type_Code_33
			,@Other_Provider_Identifier_State_33
			,@Other_Provider_Identifier_Issuer_33
			,@Other_Provider_Identifier_34
			,@Other_Provider_Identifier_Type_Code_34
			,@Other_Provider_Identifier_State_34
			,@Other_Provider_Identifier_Issuer_34
			,@Other_Provider_Identifier_35
			,@Other_Provider_Identifier_Type_Code_35
			,@Other_Provider_Identifier_State_35
			,@Other_Provider_Identifier_Issuer_35
			,@Other_Provider_Identifier_36
			,@Other_Provider_Identifier_Type_Code_36
			,@Other_Provider_Identifier_State_36
			,@Other_Provider_Identifier_Issuer_36
			,@Other_Provider_Identifier_37
			,@Other_Provider_Identifier_Type_Code_37
			,@Other_Provider_Identifier_State_37
			,@Other_Provider_Identifier_Issuer_37
			,@Other_Provider_Identifier_38
			,@Other_Provider_Identifier_Type_Code_38
			,@Other_Provider_Identifier_State_38
			,@Other_Provider_Identifier_Issuer_38
			,@Other_Provider_Identifier_39
			,@Other_Provider_Identifier_Type_Code_39
			,@Other_Provider_Identifier_State_39
			,@Other_Provider_Identifier_Issuer_39
			,@Other_Provider_Identifier_40
			,@Other_Provider_Identifier_Type_Code_40
			,@Other_Provider_Identifier_State_40
			,@Other_Provider_Identifier_Issuer_40
			,@Other_Provider_Identifier_41
			,@Other_Provider_Identifier_Type_Code_41
			,@Other_Provider_Identifier_State_41
			,@Other_Provider_Identifier_Issuer_41
			,@Other_Provider_Identifier_42
			,@Other_Provider_Identifier_Type_Code_42
			,@Other_Provider_Identifier_State_42
			,@Other_Provider_Identifier_Issuer_42
			,@Other_Provider_Identifier_43
			,@Other_Provider_Identifier_Type_Code_43
			,@Other_Provider_Identifier_State_43
			,@Other_Provider_Identifier_Issuer_43
			,@Other_Provider_Identifier_44
			,@Other_Provider_Identifier_Type_Code_44
			,@Other_Provider_Identifier_State_44
			,@Other_Provider_Identifier_Issuer_44
			,@Other_Provider_Identifier_45
			,@Other_Provider_Identifier_Type_Code_45
			,@Other_Provider_Identifier_State_45
			,@Other_Provider_Identifier_Issuer_45
			,@Other_Provider_Identifier_46
			,@Other_Provider_Identifier_Type_Code_46
			,@Other_Provider_Identifier_State_46
			,@Other_Provider_Identifier_Issuer_46
			,@Other_Provider_Identifier_47
			,@Other_Provider_Identifier_Type_Code_47
			,@Other_Provider_Identifier_State_47
			,@Other_Provider_Identifier_Issuer_47
			,@Other_Provider_Identifier_48
			,@Other_Provider_Identifier_Type_Code_48
			,@Other_Provider_Identifier_State_48
			,@Other_Provider_Identifier_Issuer_48
			,@Other_Provider_Identifier_49
			,@Other_Provider_Identifier_Type_Code_49
			,@Other_Provider_Identifier_State_49
			,@Other_Provider_Identifier_Issuer_49
			,@Other_Provider_Identifier_50
			,@Other_Provider_Identifier_Type_Code_50
			,@Other_Provider_Identifier_State_50
			,@Other_Provider_Identifier_Issuer_50
			,@Is_Sole_Proprietor
			,@Is_Organization_Subpart
			,@Parent_Organization_LBN
			,@Parent_Organization_TIN
			,@Authorized_Official_Name_Prefix_Text
			,@Authorized_Official_Name_Suffix_Text
			,@Authorized_Official_Credential_Text
			,@Healthcare_Provider_Taxonomy_Group_1
			,@Healthcare_Provider_Taxonomy_Group_2
			,@Healthcare_Provider_Taxonomy_Group_3
			,@Healthcare_Provider_Taxonomy_Group_4
			,@Healthcare_Provider_Taxonomy_Group_5
			,@Healthcare_Provider_Taxonomy_Group_6
			,@Healthcare_Provider_Taxonomy_Group_7
			,@Healthcare_Provider_Taxonomy_Group_8
			,@Healthcare_Provider_Taxonomy_Group_9
			,@Healthcare_Provider_Taxonomy_Group_10
			,@Healthcare_Provider_Taxonomy_Group_11
			,@Healthcare_Provider_Taxonomy_Group_12
			,@Healthcare_Provider_Taxonomy_Group_13
			,@Healthcare_Provider_Taxonomy_Group_14
			,@Healthcare_Provider_Taxonomy_Group_15

End
