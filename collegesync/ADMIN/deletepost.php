<?php
	include('conn.php');	
		$query="delete from wallpost where id=".$_GET['id'];
		//$res=mysql_query($query);
			if($res=mysql_query($query))
			{
				echo "wallpost deleted succesfully";
				header("location:home.php");
			}
				else
					{
						echo"Post not deleted";
						
					}
?>