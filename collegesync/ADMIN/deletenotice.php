<?php
	 include("conn.php");
	 $noticeid=$_GET['id'];
		$query="delete from notice where `notice_id`='$noticeid'";
		//$res=mysql_query($query);
			if($res=mysql_query($query))

			{
				//echo"<script>alert('hii');</script>";
				//echo "Post deleted succesful";
				header("location:adminnotice.php");
			}
				else
					{
						echo"record not deleted";
						header("location:adminnotice.php");
						
						
					}
?>