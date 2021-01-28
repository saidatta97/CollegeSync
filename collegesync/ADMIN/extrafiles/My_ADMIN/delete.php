<?php
	mysql_connect("localhost","root","")or die("could not connect to server");
	mysql_select_db("collegesync1")or die("database not found");
		$query="delete from col_registration where REG_ID=".$_GET['id'];
		//$res=mysql_query($query);
			if($res=mysql_query($query))
			{
				echo "record deleted succesful";
				header("location:view.php");
			}
				else
					{
						echo"record not deleted";
						
					}
?>