<?php
	session_start();
	error_reporting(1);
	if(isset($_SESSION['tempfbuser']))
	{
	// {echo "hello";
		include("conn.php");
		$user=$_SESSION['tempfbuser'];
		$que1=mysql_query("select * from col_registration where REG_USERNAME='$user'");
		$rec=mysql_fetch_array($que1);
		$userid=$rec[0];
		$gender=$rec[8];
		if($gender=="Male")
		{
			$que2=mysql_query("select * from user_profile_pic where REG_ID=$userid");
			$count1=mysql_num_rows($que2);
			if($count1==0)
			{
?>
<?php

	if(isset($_POST['file']) && ($_POST['file']=='Upload'))
	{
		$path = "../../userdp/";
		// $path2 = "../../../fb_users/Male/".$user."/Post/";
		// $path3 = "../../../fb_users/Male/".$user."/Cover/";
		mkdir($path, 0, true);
		// mkdir($path2, 0, true);
		// mkdir($path3, 0, true);
		
		$img_name=$_FILES['file']['name'];
    	$img_tmp_name=$_FILES['file']['tmp_name'];
    	$prod_img_path=$img_name;
    	move_uploaded_file($img_tmp_name,"../../userdp".$prod_img_path);
		
		mysql_query("insert into user_profile_pic(REG_ID,image) values('$userid','$img_name')");
		header("location:../fb_step2/Secret_Question1.php");
	} 
?>
<html>
<head>
	<title> Step1 </title>
	<link href="step1_css/step1.css" rel="stylesheet" type="text/css">
    <link href="../fb_font/font.css" rel="stylesheet" type="text/css">

</head>
<body>
<?php
	include("step1_background/background.php");
?>

<div style="position:absolute; left:35%; top:50%;">
<img src="step1_images/Male.jpg" style=" height:60; width:60;"/> 
</div>

<div style="position:absolute; left:39%; top:50%;"> 
	<table>
		<tr>
			<td></td> <td>&nbsp;  </td> <td style="text-transform:capitalize"> <h4><?php echo $rec[1]." ".$rec[2]; ?></h4></td>
		</tr>
	</table> 
</div>

<form method="post" enctype="multipart/form-data" name="uimg">
	<div style="position:absolute; left:40%; top:65%;">	
		<input type="file" name="file" id="img"/>  
	</div>
	<div style="position:absolute; left:57.5%; top:64.8%; " id="upload">	
		<input type="submit" value="Upload" name="file" id="upload_button"/>	
	</div>
</form>
	<?php
		include("step1_erorr/step1_erorr.php");
	?>
</body>
</html>
<?php
			}
			else
			{
				header("location:../fb_step2/Secret_Question1.php");
			}
		
		}
		else
		{
			header("location:../fb_step1/Step1_Female.php");
		}
	}
	else
	{
		header("location:../../mainlogin.php");
	}
?>