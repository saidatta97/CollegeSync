<?php
	include('conn.php');
	$postid=$_GET['id'];
		$query="delete from wallpost where `id`='$postid'";
		//$res=mysql_query($query);
			if($res=mysql_query($query))

			{
				//echo"<script>alert('hii');</script>";
				//echo "Post deleted succesful";
				header("location:home.php");
			}
				else
					{
						echo"record not deleted";
						header("location:home.php");
						
						
					}
?>