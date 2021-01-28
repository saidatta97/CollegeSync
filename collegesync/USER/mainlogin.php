
<html>
	<head>
		<title></title>
			<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
			<script type="text/javascript" src="js/bootsrap.min.js"></script>
			<script type="text/javascript" src="jquery.min.js"></script>
	
	</head>
		<body style="background:grey;">
			<legend style="background: #494949;color:#fff;"><center>COLLEGESYNC</center></legend>
			<form action="Login.php" method="POST" >
			<div class="container-fluid">
			<br><br>
				<div class="panel panel-danger col-sm-5 col-sm-offset-4">
					<div class="row">
						<div class="col-sm-13 col-sm-offset-0">
					<div class="panel-heading bg-danger"><center><strong>LOGIN</strong></center>
					</div>

						<div class="row" >
							<br>
					<div  class="col-sm-4  col-xs-6  col-sm-offset-3 col-xs-offset-3" >
						<label>Username</label>
						<input type="text" class="form-control" name="first" required>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-sm-4  col-xs-6  col-sm-offset-3 col-xs-offset-3">
						<label>Password</label>
						<input type="password" class="form-control" name="pwd" required>
					</div>
				</div>
					<br>
				<div class="row">
					
					<div class="col-sm-4  col-xs-6  col-sm-offset-3 col-xs-offset-3" >
						
						<input type="submit" value="Login" name="Login" class="form-control btn-primary btn-(size) col-sm-11">
					</div>
				</div>
				<br>
				<div class="row">

					<div class="col-sm-4  col-xs-6  col-sm-offset-3 col-xs-offset-3">
						
						<input type="button" onclick="location.href='signup.php';" class="form-control btn-success" value="New User" />

					</div>
					
					<div class="col-xs-6 col-sm-4 col-sm-offset-0 col-xs-offset-3">
							<a href="forgot/Forgot_Password.php" >Forgot Password </a>	
							</div>
					
				</div>
				</div>	
					</div>
					<br>
					<div class="panel-footer bg-danger">
						<div class="row">
							<div class="col-sm-3 col-sm-offset-9">
							
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
//include ("connec1tion.php");
//include_once("connection.php");
// if(isset($_GET['first']))
// {
//  include("conn.php");
// $first=$_GET['first'];
// $pwd= $_GET['pwd'];
//echo$_GET['first'];
//echo"<br>";
//echo$_GET['pwd'];
//echo"<br>";
// $query="select * from col_registration where REG_FIRSTNAME='$first' and REG_PWD='$pwd'" ;
//echo"<br>";
// $res=mysql_query($query);
// $row=mysql_fetch_row($res);
// $count=mysql_num_rows($res);
// if ($count>0)
// 	{
// 		$first=$_GET['first'];
// 		$pwd= $_GET['pwd'];
// 		$query1="select * from col_registration where REG_FIRSTNAME='$first' and REG_PWD='$pwd' and status='1'" ;
// 		$res1=mysql_query($query1);
// 		$row1=mysql_fetch_row($res1);
// 		$count1=mysql_num_rows($res1);


// 		if($count1>0)
// 		{
// 		session_start();
// 		$_SESSION['user']=$first;
// 	 	$_SESSION['id']=$row[0];
// 	 	header("location:adminhome.php");
// 	 	}
// 	 	else
// 	 	{
// 	 		echo "admin not verified ur account";		
// 	 	}
// 	}
// else
// 	{
// 		echo "username OR password incorrect";
// 	}
// }	
?>