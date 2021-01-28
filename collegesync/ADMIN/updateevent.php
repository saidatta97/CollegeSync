<?php
if(isset($_POST['update']))
{error_reporting(1);
	include("conn.php");

	$id=$_POST['event_id'];
	$title=$_POST['title'];
	$body=$_POST['body'];
	$e_date=$_POST['event_date'];
	$e_time=$_POST['event_time'];
	$place=$_POST['place'];
	$status=0;

	// $query1="update event set des='".$body."', add='".$place."' where event_id=$id ";

	$query1="UPDATE `event` SET `event`='". $title ."',`des`='". $body ."',`date`='". $e_date ."',`time`='". $e_time ."',`add`='". $place ."',`status`='". $status ."' WHERE `event_id`='$id'";
	// $res1=mysql_query($query1);


	 if($res1=mysql_query($query1))
	          {
	            //echo "data updated successfully";
	             header('location:adminevent.php');
	          }
}          
?>
