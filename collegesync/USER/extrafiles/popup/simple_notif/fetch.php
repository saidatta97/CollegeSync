<?php
//fetch.php;
if(isset($_POST["view"])){
	
	include("conn.php");
	if($_POST["view"] != ''){
		mysqli_query($conn,"update `user` set seen_status='1' where seen_status='0'");
	}
	
	$query=mysqli_query($conn,"select * from `user` order by userid desc limit 10");
	$output = '';
 
	if(mysqli_num_rows($query) > 0){
	while($row = mysqli_fetch_array($query)){
	$output .= '
	<li>
		<a href="#">
		Firstname: <strong>'.$row['firstname'].'</strong><br />
		Lastname: <strong>'.$row['lastname'].'</strong>
		</a>
	</li>
	
	';
	}
	}
	else{
	$output .= '<li><a href="#" class="text-bold text-italic">No Notification Found</a></li>';
	}
	
	$query1=mysqli_query($conn,"select * from `user` where seen_status='0'");
	$count = mysqli_num_rows($query1);
	$data = array(
		'notification'   => $output,
		'unseen_notification' => $count
	);
	echo json_encode($data);
	
}
?>