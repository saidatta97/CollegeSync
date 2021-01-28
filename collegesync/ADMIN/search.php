
<?php
session_start();
if(!isset($_SESSION['user']))
{
header("location:mainlogin.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<title></title>
	<style type="text/css">
		
	</style>
<style type="text/css">
td
{
    padding:0 15px 0 15px;
}
</style>
</head>
<body>

</body>
</html>
  
<?php
include("nav.php");
	if(isset($_GET['Search1']))
	{
		// session_start();
		$user=$_SESSION['user'];
		$search=$_GET['Search1'];
	include("conn.php");
	//$search=$_GET['search'];
	if($search=='')
	{
		echo"<script>
		alert('enter something to search friend');
		</script>";
		header('location:home.php');
	}
	else
	{	
			$query="select * from col_registration where REG_FIRSTNAME like '$search%'";
		$res=mysql_query($query);
		$count1=mysql_num_rows($res);
		?>

		<div style="position:absolute; left:22.3%;top:10.5%; z-index:-1;"> </div>
	<div style="position:absolute; left:25%;top:7%; z-index:-1;"> <h2><?php echo$count1 ?>results </h2> </div>
	<hr style="position:absolute;left:22%;top:15%;height:0;width:55%; border-color:#CCCCCC;">
	
	
	<div style="position:absolute;left:22%;top:20%; z-index:-1;">
	<table border="0">

		<?php
		
			while ($rec1=mysql_fetch_row($res)) 
				{
					//$uid=$rec1[0];
		$name=$rec1[1];
		$image=$rec1[12];
		//$gender=$rec1[4];
		//$userid=$rec1[0];
		//$email=$rec1[2];
		//$query2=mysql_query("select * from user_profile_pic where user_id=$userid");
		//$rec2=mysql_fetch_array($query2);
		//$img=$rec2[2];
		
 if($user==$name)
		 {
		?><?php
              if (strpos($rec1[12], '.jpg') !== false) {
               ?>
               <tr>
		<td bgcolor="#FFFFFF" style="padding-right:7, margin-left: 50px;" id=""><?php echo"<a href='viewprofile1.php?id=".$rec1[0]."' style=' text-decoration:none; text-transform:capitalize; color:#3B5998;' id=''>"?>
			<img src="../USER/<?php echo$rec1[12];?> " alt='No profile pic '  style="max-width: 170px; max-height: 170px; margin-left: 50px;" ></a>  </td>
               <?php
              }
              else
              {
?>
               <tr>
		<td bgcolor="#FFFFFF" style="padding-right:7, margin-left: 50px;" id=""><?php echo"<a href='viewprofile1.php?id=".$rec1[0]."' style=' text-decoration:none; text-transform:capitalize; color:#3B5998;' id=''>"?>
			<img src="../USER/userdp/no_image.png" alt='No profile pic '  style="max-width: 170px; max-height: 170px; margin-left: 50px;" ></a>  </td>
  <?php             
                
              }
              

               ?>

		<td onMouseOver=''  onMouseOut='' width='500' bgcolor='#FFFFFF' id=''><?php echo"<a href='viewprofile1.php?id=".$rec1[0]."' style=' text-decoration:none; text-transform:capitalize;  color:#3B5998;' id=''>"?><?php echo  $name; ?>(Me)</a>  </td>
	
		</tr>
		<tr>
			<td colspan='2'> <hr style='border-color:#CCCCCC;'> </td>
		</tr>

		 <?php
		  }
		  else
		  {
		  	?>
		  	<?php
              if (strpos($rec1[12], '.jpg') !== false) {
               ?>
               <tr>
		<td bgcolor="#FFFFFF" style="padding-right:7, margin-left: 50px;" id=""><?php echo"<a href='viewprofile1.php?id=".$rec1[0]."' style=' text-decoration:none; text-transform:capitalize; color:#3B5998;' id=''>"?>
			<img src="../USER/<?php echo$rec1[12];?> " alt='No profile pic '  style="max-width: 170px; max-height: 170px; margin-left: 50px;" ></a>  </td>
               <?php
              }
              else
              {
?>
               <tr>
		<td bgcolor="#FFFFFF" style="padding-right:7, margin-left: 50px;" id=""><?php echo"<a href='viewprofile1.php?id=".$rec1[0]."' style=' text-decoration:none; text-transform:capitalize; color:#3B5998;' id=''>"?>
			<img src="../USER/userdp/no_image.png" alt='No profile pic '  style="max-width: 170px; max-height: 170px; margin-left: 50px;" ></a>  </td>
  <?php             
                
              }
              

               ?>
<td onMouseOver='' onMouseOut='' width='500' bgcolor='#FFFFFF' id=''><?php echo"<a href='viewprofile1.php?id=".$rec1[0]."' style=' text-decoration:none; text-transform:capitalize; color:#3B5998;' id=''>"?><?php echo $name ?></a></td>
	
		</tr>
		<tr>
			<td colspan='2'> <hr style='border-color:#CCCCCC;'> </td>
		</tr>


		<?php
		  }
		}
		// if($count1==0)
		// {
		// 	echo"<div style='position:absolute; left:25%;top:7%; z-index:-1;''> <h2>$count1 results </h2> </div>";			
		// }	

	}
}
?>