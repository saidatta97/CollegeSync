<?php
if(isset($_POST['firstname']))
{

	$first=$_POST['firstname'];
	$last= $_POST['lastname'];
	$class= $_POST['class'];
	$uni= $_POST['university'];
	$address= $_POST['address'];
	$mobile= $_POST['mobile'];
	$gender= $_POST['gender'];
	$dob=$_POST['dob'];
	$username= $_POST['username'];
	$pwd= base64_encode($_POST['pwd']);
	$email=$_POST['email'];
	$status=0;
	$online=0;

				date_default_timezone_set("Asia/Kolkata");
	              $time=date("d-m-Y-hms");
	              $file_exists=array("JPG","jpeg","png","JPEG","jpg");
	             $upload_exists = end (explode('.', $_FILES['image']["name"])); 
	             $newname="$time"."_photo.".$upload_exists;
	              $targetfile='userdp/'.$newname; 
	              move_uploaded_file($_FILES["image"]["tmp_name"],$targetfile);


	 include("conn.php");

	 $query1="select * from col_registration where REG_USERNAME='$username' or REG_EMAIL='$email'";
	 $res1=mysql_query($query1);
	 $row=mysql_fetch_row($res1);
	 $count=mysql_num_rows($res1);
	 if ($count>0)
	 	{
	 		echo"<script>alert('username/EMail already exists');</script>";
	 		//header("location:signup.php");
		}
		else
		{

			$query="insert into col_registration values('','".$first."','".$last."','".$email."','".$class."',$uni,'".$address."',$mobile,'".$gender."','".$username."','".$pwd."','".$dob."','".$targetfile."','".$status."','".$online."')";

			if ($res=mysql_query($query)) 
			{		
				//echo "data inserted successfully";
				echo"<script>alert('working..');</script>";
			// changes are done
				$que1=mysql_query("SELECT * from col_registration where REG_USERNAME='$username' AND REG_PWD='$pwd'");
				$count1=mysql_num_rows($que1);
				$row=mysql_fetch_array($que1);
				if($count1>0)
				{
					session_start();
					$_SESSION['tempfbuser']=$username;

					header("location:step/fb_step2/Secret_Question1.php");
				}	
				else
				{
					echo "something went wrong";
				}
		 	}
		 	else
		 	{
		 		echo "not found";
	 		}
	 	}
}
?>