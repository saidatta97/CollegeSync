<?php
	mysql_connect("localhost","root","")or die("could not connect to server");
	mysql_select_db("collegesync1")or die("database not found");
	echo"<script>alert('hii');</script>";
	$postid=$_GET['id'];
		$query="delete from wallpost where `id`='$postid'";
		//$res=mysql_query($query);
			if($res=mysql_query($query))

			{
				echo"<script>alert('hii');</script>";
				//echo "Post deleted succesful";
				header("location:adminhome.php");
			}
				else
					{
						echo"record not deleted";
						header("location:adminhome.php");
						
						
					}
?>