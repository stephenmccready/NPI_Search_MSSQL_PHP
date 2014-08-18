SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER OFF
GO
ALTER PROCEDURE [dbo].[GetNPI_UsingNPI] @NPI As varchar(12)
AS
BEGIN

	Select	*
	From	[dbo].[tbl_NPI_New] As N
	Where	N.[NPI] = @NPI

End
