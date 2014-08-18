SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER OFF
GO
ALTER PROCEDURE [dbo].[GetNPI_UsingName] @Name As varchar(72), @lastName As varchar(72), @firstName As varchar(72), @EntityTypeCode As varchar(3), @state As char(2)
AS
BEGIN

If @state='NY'
Begin
	If @EntityTypeCode='1'
	Begin
		Select	*
		From	[dbo].[tbl_NPI_New_NY] As N
		Where	N.[Entity Type Code]='1'
		And		N.[Provider Last Name (Legal Name)] Like @lastName+'%'
		And		N.[Provider First Name] Like @firstName+'%'
		Order	By N.[Provider Last Name (Legal Name)], N.[Provider First Name]
	End
	Else If @EntityTypeCode='0'
	Begin
		Select	*
		From	[dbo].[tbl_NPI_New_NY] As N
		Where	N.[Entity Type Code]='0'
		Or		N.[Provider Organization Name (Legal Business Name)] Like @Name+'%'
		Order	By N.[Provider Organization Name (Legal Business Name)]
	End
	Else
	Begin
		Select	*
		From	[dbo].[tbl_NPI_New_NY] As N
		Where	(N.[Provider Last Name (Legal Name)] Like @lastName+'%'
				 And N.[Provider First Name] Like @firstName+'%')
		Or		N.[Provider Organization Name (Legal Business Name)] Like @Name+'%'
		Order	By N.[Provider Organization Name (Legal Business Name)], N.[Provider Last Name (Legal Name)], N.[Provider First Name]
	End
End
Else
Begin
	If @EntityTypeCode='1'
	Begin
		Select	*
		From	[dbo].[tbl_NPI_New] As N
		Where	N.[Entity Type Code]='1'
		And		N.[Provider Last Name (Legal Name)] Like @lastName+'%'
		And		N.[Provider First Name] Like @firstName+'%'
		Order	By N.[Provider Last Name (Legal Name)], N.[Provider First Name]
	End
	Else If @EntityTypeCode='0'
	Begin
		Select	*
		From	[dbo].[tbl_NPI_New] As N
		Where	N.[Entity Type Code]='0'
		Or		N.[Provider Organization Name (Legal Business Name)] Like @Name+'%'
		Order	By N.[Provider Organization Name (Legal Business Name)]
	End
	Else
	Begin
		Select	*
		From	[dbo].[tbl_NPI_New] As N
		Where	(N.[Provider Last Name (Legal Name)] Like @lastName+'%'
				 And N.[Provider First Name] Like @firstName+'%')
		Or		N.[Provider Organization Name (Legal Business Name)] Like @Name+'%'
		Order	By N.[Provider Organization Name (Legal Business Name)], N.[Provider Last Name (Legal Name)], N.[Provider First Name]
	End
End
End
