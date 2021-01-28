<?php
	include('conn.php');
	$queryid=$_GET['id'];
		$query="delete from query where `query_id`='$queryid'";
		//$res=mysql_query($query);
			if($res=mysql_query($query))

			{
				//echo"<script>alert('hii');</script>";
				//echo "Post deleted succesful";
				header("location:query.php");
			}
				else
					{
						echo"record not deleted";
						header("location:query.php");
						
						
					}
?>