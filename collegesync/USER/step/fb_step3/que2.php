<?php

		if(isset($_POST['Finish']))
		{
			include("../../conn.php");
			$que2=$_POST['que'];
			$ans2=$_POST['ans'];
			$id=$_POST['hide'];
			
		$query=mysql_query("update user_secret_quotes set Question2='$que2',Answer2='$ans2' where REG_ID=$id");
			?>
			<script type="text/javascript">
			//alert("Account Created Successfully.Admin will verify Your Account.Till than fill up security Questions");
			if(confirm("Shortly Admin Will Verify Your Account !!"))
				{
					window.location.href='../../index.php';
				}	
				else
				{
					window.location.href='../../index.php';
					
				}
</script>
<?php
			//header("location:../../index.php");
	
	
		}
	?>