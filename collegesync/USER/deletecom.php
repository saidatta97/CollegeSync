<?php
	include('conn.php');
	$comid=$_GET['id'];
		$query="delete from comment where `commid`='$comid'";
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