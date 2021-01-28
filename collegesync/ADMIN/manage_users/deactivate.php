<?php
  include("../conn.php");
		// $query="delete from col_registration where REG_ID=".$_GET['id'];
		$query="UPDATE col_registration SET status=0 WHERE REG_ID=".$_GET['id'];
		//$res=mysql_query($query);
			if($res=mysql_query($query))
			{
				echo "record diactivated succesfully";
				header("location:../view.php");
			}
				else
					{
						echo"record not deleted";
						
					}
?>