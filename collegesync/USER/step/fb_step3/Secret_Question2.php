<!-- secret_question2.php -->
<?php
// echo "<script>
// 				alert('There is an existing account associated with this Username.');
// 			</script>";
	session_start();
	error_reporting(1);
	if(isset($_SESSION['tempfbuser']))
	{
		include("../../conn.php");
		$user=$_SESSION['tempfbuser'];
		$que1=mysql_query("select * from col_registration where REG_USERNAME='$user' or REG_EMAIL='$user'");
		$rec=mysql_fetch_array($que1);
		$userid=$rec[0];

		$que2=mysql_query("select * from user_secret_quotes where REG_ID=$userid");
		$rec2=mysql_fetch_array($que2);
		$q2=$rec2[3];
		$a2=$rec2[4];
		if($q2=="" && $a2=="")
		{
			
		
?>
	
<html>
	<head>
		<title> Step3 </title>
	<?php
		include("step3_background/background.php");
	?>
		<link href="step3_css/step3.css" rel="stylesheet" type="text/css">
	    <link href="../../fb_font/font.css" rel="stylesheet" type="text/css">
	    <LINK REL="SHORTCUT ICON" HREF="../../fb_title_icon/Faceback.ico" />
		<script src="step3_js/que_check.js" language="javascript">
		</script>
	</head>
	<body>

	<form method="post" name="sq" onSubmit="return check()" action="que2.php">

	<div style="position:absolute; left:33.5%; top:43%;"> <h3> Secret Question 2: </h3> </div>

	<div style="position:absolute; left:45%; top:45%;">
	<select name="que" style="height:38;font-size:18px;padding:3;">
			<option value="select one">select one</option>
			<option value="what was your favorite food as a child?">what was your favorite food as a child?</option>
			<option value="what was the last name of your first boss?">what was the last name of your first boss?</option>
			<option value="what is the name of your favorite sports team?">what is the name of your favorite sports team?</option>
			<option value="what was you first pets name?">what was you first pet's name?</option>
			<option value="what is the name of your favorite book?">what is the name of your favorite book?</option>
			<option value="who is your all-time favorite movie character?">who is your all-time favorite movie character?</option>
			<option value="what was the make of your fist car?">what was the make of your fist car?</option>
			<option value="what was the make of your first motorcycle?">what was the make of your first motorcycle?</option>
			<option value="who is you favorite author?">who is you favorite author?</option>
	</select>
	</div>

	<div style="position:absolute; left:35.8%; top:52.7%;"> <h3> Your Answer:  </h3> </div>
	<div style="position:absolute; left:45%; top:55%;">  <input type="text" name="ans" / style="height:35; width:350; font-size:18px;" maxlength="50">   </div>

	<div style="position:absolute; left:45%; top:67%;"> <input type="submit" name="Finish" value="Finish" id="Next_button" > </div>

<div style="position:absolute; left:45%; top:67%;"> <input type="hidden" name="hide" value="<?php echo$userid ?>" > </div>
	
	</form>

	<div style=" position:absolute; left:16%; top:42%;"> <img src="img/waiting.gif"> </div>

	<?php
			include("step3_erorr/step3_erorr.php");
	?>

	</body>
</html>
<?php
		// if(isset($_POST['Finish']))
		// {
		// 	include("../../conn.php");
		// 	$que2=$_POST['que'];
		// 	$ans2=$_POST['ans'];
			
		// $query=mysql_query("update user_secret_quotes set Question2='$que2',Answer2='$ans2' where REG_ID=$userid");
		// $res2=mysql_query($query);
		// 			$row2=mysql_fetch_row($res2);
		// 			$count=mysql_num_rows($res2);
		// 			if($count>0)
		// 			{
		// 	header("location:../../mainlogin.php");	
		// 			}
		// }
	?>

<?php
			
		}
		else
		{
			$query1="select * from col_registration where REG_USERNAME='$user' and REG_PWD='$pass' and status='1'" ;
					$res1=mysql_query($query1);
					$row1=mysql_fetch_row($res1);
					$count1=mysql_num_rows($res1);


					if($count1>0)
					{
					session_start();
					$_SESSION['user']=$row[9];
				 	$_SESSION['id']=$row[0];
				 	header("location:../../home.php");
				 	}
				 	else
				 	{
				 		header("location:../../index.php");		
				 	}
		}
	}
	else
	{
		header("location:../../index.php");
			}
?>