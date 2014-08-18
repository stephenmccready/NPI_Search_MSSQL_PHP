SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER OFF
GO
ALTER PROCEDURE [dbo].[GetTaxonomy] @TaxonomyCode As varchar(32)
AS
BEGIN

	Select	*
	From	[dbo].[tbl_Taxonomy] As T
	Where	T.[TaxonomyCode] = @TaxonomyCode

End
