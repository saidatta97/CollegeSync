<?php
 include("conn.php");
 	$eventid=$_GET['id'];
		$query="delete from event where `event_id`='$eventid'";
		//$res=mysql_query($query);
			if($res=mysql_query($query))

			{
				//echo"<script>alert('hii');</script>";
				//echo "Post deleted succesful";
				header("location:adminevent.php");
			}
				else
					{
						echo"record not deleted";
						header("location:adminevent.php");
						
						
					}
?>