<?php
//insert.php
if(isset($_POST["firstname"]))
{
	include('conn.php');
	$firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
	$lastname = mysqli_real_escape_string($conn, $_POST['lastname']);

	mysqli_query($conn,"insert into `user` (firstname, lastname) values ('$firstname', '$lastname')");
}
?>