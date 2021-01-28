<?php
if(isset($_POST['Login']))
{
	//error_reporting(1);
	  include("conn.php");
	
	$user=$_POST['first'];
	$pass=$_POST['pwd'];

	
	$que1=mysql_query("select * from col_registration where REG_FIRSTNAME='$user' and REG_PWD='$pass'");
	$count=mysql_num_rows($que1);
	$row=mysql_fetch_array($que1);
	if($count>0)
	{
		session_start();
		$_SESSION['user']=$user;
		
		$userid=$row[0];

		
		$que3=mysql_query("select * from user_secret_quotes where REG_ID=$userid");
		$count3=mysql_num_rows($que3);
		if($count3>0)
		{
				$que4=mysql_query("select * from user_secret_quotes where REG_ID=$userid");
				
				while($rec=mysql_fetch_array($que4))
				{
					$que2=$rec[3];
					$ans2=$rec[4];
				}
				if($que2=="" && $ans2=="")
				{
					header("location:step/fb_step3/Secret_Question2.php");
				}
				else
				{
					$query1="select * from col_registration where REG_FIRSTNAME='$user' and REG_PWD='$pass' and status='1'" ;
					$res1=mysql_query($query1);
					$row1=mysql_fetch_row($res1);
					$count1=mysql_num_rows($res1);


					if($count1>0)
					{
					session_start();
					$_SESSION['user']=$row[1];
				 	$_SESSION['id']=$row[0];
				 	$_SESSION['lastname']=$row[2];
				 	header("location:home.php");
				 	}
				 	else
				 	{
					 		//header("location:mainlogin.php");		
				 	echo"admin not verified ur account";
				 	}
						
				 	


				}
			
		}
		else
		{
			header("location:step/fb_step2/Secret_Question1.php");
		}
		
		
	}
	else
	{
		// $que5=mysql_query("select * from col_registration where REG_FIRSTNAME='$user'");
		// $count5=mysql_num_rows($que5);
	
		// if($count5>0)
		// {
		// 	header("location:Invalid_Password.php");
		// }
		// else
		// {
		// 	header("location:Invalid_Username.php");
		// }
		
		$query4="SELECT * from admin where username='$user' and pwd='$pass'";
			$res4=mysql_query($query4);
			$row4=mysql_fetch_row($res4);
			$count4=mysql_num_rows($res4);
					if($count4>0)
					{
						session_start();
						$_SESSION['user']=$row4[1];
						$_SESSION['id']=$row4[0];
						header("location:../ADMIN/home.php");
					}
			

		echo"enter correct login details ";
	
	}
}
?>
