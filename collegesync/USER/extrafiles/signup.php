

<!DOCTYPE html>
<html>
	<head>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	
		<title>Registration Form</title>

		<script type="text/javascript">
			
		
		</script>
	</head>
	<body style="background-color: grey;">
	<form method="POST" enctype="multipart/form-data">
		<div class="container-fluid">
			<div class="row "><br>
				<div class="col-sm-6 col-sm-offset-3 ">
					<div class="panel panel-success">
					<div class="panel-heading bg-warning "><center>Create New Account</center></div>
					<div class="panel-body bg-danger">
					
				<div class="row">
					<div class=" col-sm-3 col-sm-offset-1 col-lg-3 col-sm-offset-1">
					<label>Name</label>	
					</div>
					<div class=" col-sm-3 col-sm-offset-0">
					<input type="text" name="firstname" id="firstname" placeholder="first name" class="form-control">
					</div>	
					<div class=" col-sm-3 col-sm-offset-0">
					<input type="text" name="lastname" id="lastname" placeholder="last name" class="form-control" required>	
					</div>
				</div>

				<br><div class="row">
					<div class=" col-sm-3 col-sm-offset-1">
					<label>Profile pic</label>	
					</div>
					<div class=" col-sm-6 col-sm-offset-0">
					<input type="file" name="image" class="form-control"><br>
					</div>
				</div>

				<div class="row">
					<div class=" col-sm-3 col-sm-offset-1">
					<label>E-mail id</label>	
					</div>
					<div class=" col-sm-6 col-sm-offset-0">
					<input type="E-mail" name="email" id="email" class="form-control"><br>
					</div>
				</div>	

				

		<div class="row">
				<div class="col-sm-3 col-sm-offset-1" >
				<label>Class</label>
				</div>
				<div class="col-sm-6 col-sm-offset-0">
				<select name="class" class="form-control" required>
					<option>FY</option>
					<option>SY</option>
					<option>TY</option>
				</select><br>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-3 col-sm-offset-1" >
				<label>University No</label>
				</div>
				<div class="col-sm-6 col-sm-offset-0" >
				<input type="text" name="university" class="form-control" required><br>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-3 col-sm-offset-1" >
				<label>Address</label>
				</div>
				<div class="col-sm-6 col-sm-offset-0" >
				<textarea cols="30" rows="2" name="address"  class="form-control" required> </textarea><br>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-3 col-sm-offset-1" >
				<label>Mobile No</label>
				</div>
				<div class="col-sm-6 col-sm-offset-0" >
				<input type="Number" name="mobile" required class="form-control" maxlength="10"><br>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-3 col-sm-offset-1" >
				<label>Gender</label>
				</div> 
				<div class="col-sm-3 col-sm-offset-0">
				<label>Male<input class="form-control" type="radio" name="gender" value="male"></lable>
				</div>
				<div class="col-sm-3 col-sm-offset-0">
				<label>Female<input class="form-control" type="radio" name="gender" value="female"></label><br>
				</div>
			</div>

			<div class="row">
				<div class=" col-sm-3 col-sm-offset-1" >
				<label>DOB</label>
				</div>
				<div class=" col-sm-6 col-sm-offset-0" >
				<input class="form-control" type="date" name="dob"><br>
				</div>
			</div>

			<div class="row">
					<div class=" col-sm-3 col-sm-offset-1">
					<label>Username</label>	
					</div>
					<div class=" col-sm-6 col-sm-offset-0" >
					<input class="form-control" type="text" name="username" required><br>
					</div>
				</div>

		<div class="row">
			<div class=" col-sm-3 col-sm-offset-1">
			<label> Password</label>	
			</div>
			<div class=" col-sm-6 col-sm-offset-0">
			<input type="Password" name="pwd" class="form-control" required><br>
			</div>
		</div>


<br>
			<div class="row">
				<div class=" col-sm-3 col-sm-offset-4">
					<input type="submit" name="submit" class=" form-control btn-lg btn-primary">
				</div>
			</div>			
		</div>
		</div>
		</div>
		</div>
		</div>
		</div>
		
				</form>
			

	</body>
</html>

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
$pwd= $_POST['pwd'];
$email=$_POST['email'];
$status=0;

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
	}
	else
	{

$query="insert into col_registration values('','".$first."','".$last."','".$email."','".$class."',$uni,'".$address."',$mobile,'".$gender."','".$username."','".$pwd."','".$dob."','".$targetfile."','".$status."')";
if($res=mysql_query($query))
{
	//echo "Account Created Successfully.Now Admin will verify your Account.";
	echo"<script>alert('Account Created Successfully.Now Admin will verify your Account.');</script>";
	//header("location:index.html");
}
else
{
	echo "something went wrong . ";
}
}
}

?>