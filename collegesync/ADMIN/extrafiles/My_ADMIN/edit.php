<?php
session_start();
if(!isset($_SESSION['user']))
{
header("location:login.php");
}
?>


<?php
	mysql_connect("localhost","root","")or die("could not connect to server");
	mysql_select_db("collegesync1")or die("database not found");

	$query="select * from col_registration where REG_ID=".$_GET['id'];
	$res=mysql_query($query);
	$row=mysql_fetch_row($res);
?>
<!DOCTYPE html>
<html>
	<head>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		
  </head>

 

		
	<body>
		<?php
include('header.php');	
?>

		<form method="GET">
				<div class="container-fluid well">
				<div class="row "><br><br>
				<div class="col-lg-6 col-lg-offset-3">
					<div class="panel panel-success">
					<div class="panel-heading bg-warning "><center>EDIT</center></div>
					<div class="panel-body bg-danger">

				
					<input type="hidden" value="<?php echo$row[0];?>" name="id" class="form-control" >
				<div class="row">
					<div class="col-lg-2 col-lg-offset-1">
					<label> FIRST NAME</label>	
					</div>
					<div class="col-lg-3 col-lg-offset-0">
					<input type="text" value="<?php echo$row[1];?>" name="firstname" placeholder="firstname" class="form-control" class="form-control" required>
					</div>	
				</div>
					<br>
				<div class="row">
					<div class="col-lg-2 col-lg-offset-1">
					<label>LAST NAME</label>	
					</div>
					<div class="col-lg-3 col-lg-offset-0">
					<input type="text" value="<?php echo$row[2];?>" name="lastname" class="form-control" placeholder="lastname" class="form-control" required>
					</div>	
				</div>

				<br><div class="row">
					<div class="col-lg-2 col-lg-offset-1">
					<label>E-mail</label>	
					</div>
					<div class="col-lg-6">
					<input type="E-mail" class="form-control" value="<?php echo$row[3];?>" name="email" class="form-control"><br>
					</div>
				</div>	

			<div class="row">
				<div class="col-lg-2 col-lg-offset-1" >
				<label>ADDRESS</label>
				</div>
				<div class="col-lg-6" >
				<textarea cols="30" value="" name="add" rows="2" class="form-control" class="form-control" required><?php echo$row[6];?> </textarea><br>
				</div> 
			</div>

			<div class="row">
				<div class="col-lg-2 col-lg-offset-1" >
				<label>CLASS</label>
				</div>
				<div class="col-lg-6" >
				 <input type="text" id="datepicker" value="<?php echo$row[4];?>" name="clas"><br>
				</div>
			</div>
			
			<br><div class="row">
					<div class="col-lg-2 col-lg-offset-1">
					<label>UNIVERSITY_ID</label>	
					</div>
					<div class="col-lg-6">
					<input type="text" class="form-control" value="<?php echo$row[5];?>" name="UNIVERSITY_ID" class="form-control"><br>
					</div>
				</div>	


				<br><div class="row">
					<div class="col-lg-2 col-lg-offset-1">
					<label>MOBILE</label>	
					</div>
					<div class="col-lg-6">
					<input type="text" class="form-control" value="<?php echo$row[7];?>" name="mobile" class="form-control"><br>
					</div>
				</div>	

				<br><div class="row">
					<div class="col-lg-2 col-lg-offset-1">
					<label>STATUS</label>	
					</div>
					<div class="col-lg-6">
					<input type="text" class="form-control" value="<?php echo$row[13];?>" name="status" class="form-control"><br>
					</div>
				</div>	


			<br>
			<div class="row">
				<div class="col-lg-2 col-lg-offset-4">
					<input type="submit" name="sub" class="btn-md btn-primary form-control" value="Save" >
				</div>
			</div>			
		</div>
		</div>
		</div>
		</div>
		</div>
		</div>
		</form>

		<?php
		include('footer.html');
		?>	
	</body>
</html>
<?php
	if(isset($_GET['firstname']))	
		{
	mysql_connect("localhost","root","")or die("could not connect to server");
	mysql_select_db("collegesync1")or die("database not found");


			$id=$_GET['id'];
			$firstname=$_GET['firstname'];
			$lastname=$_GET['lastname'];
			$mobile=$_GET['mobile'];
			$email=$_GET['email'];
			$add=$_GET['add'];
			$UNIVERSITY_ID=$_GET['UNIVERSITY_ID'];
			$clas=$_GET['clas'];
			$status=$_GET['status'];


		 	$query1="update col_registration set REG_FIRSTNAME='".$firstname."', REG_LASTNAME='".$lastname."', REG_EMAIL='".$email."',  REG_ADDRESS='".$add."', REG_UNIVERSITY='".$UNIVERSITY_ID."', REG_CLASS='".$clas."', REG_MOBILENO='".$mobile."', status='".$status."' where REG_ID=$id ";

				if($res1=mysql_query($query1))
					{
						echo "data updated successfully";
						header("location:view.php");
					}
					else
					{
						echo "record not updated";
					}
		}

?>



