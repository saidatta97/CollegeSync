<?php
	mysql_connect("localhost","root","")or die("could not connect to server");
	mysql_select_db("collegesync1")or die("database not found");
		$query="delete from wallpost where id=".$_GET['id'];
		//$res=mysql_query($query);
			if($res=mysql_query($query))
			{
				echo "wallpost deleted succesfully";
				header("location:checkpost.php");
			}
				else
					{
						echo"Post not deleted";
						
					}
?>