<?php
	session_start();
	//error_reporting(1);
	if(isset($_SESSION['user']))
	{
		//include("background.php");
		$id=$_GET['Search1'];
		$user=$_SESSION['user'];
?>
<html>
<head>
	<title>SEARCH</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
	<script type="text/javascript">
		
	function bcheck()
	{
		s=document.fb_search.search1.value;
		
		if(s=="")
		{
			return false;
		}
		return true;
	}

	</script>
<title> <?php echo $id; ?> </title>
 
</head>
<body>

	<?php
	 include("conn.php");
	 include("nav.php");
	 if($id!='')
	{
		$query1=mysql_query("select * from col_registration where REG_FIRSTNAME like('%$id%')");
		$count1=mysql_num_rows($query1);
?>

<div style="position:absolute; left:22.3%;top:10.5%; z-index:-1;"> <img src="" height="25" width="25" /> </div>
	<div style="position:absolute; left:25%;top:7%; z-index:-1;"> <h2> All results </h2> </div>
	<hr style="position:absolute;left:22%;top:15%;height:0;width:55%; border-color:#CCCCCC;">
	
	
	<div style="position:absolute;left:22%;top:20%; z-index:-1;">
	<table cellspacing="0" border="0">

<?php
	while($rec1=mysql_fetch_array($query1))
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
?>

	<tr>

		<?php echo'<td bgcolor="#FFFFFF" style="padding-right:7;" id="">'?><?php echo'<a href="viewprofile1.php?id='.$rec1[0].'">'?> <img src="<?php echo $image; ?>" style="height:70; width:70;"> </a>  </td>
				
		<?php echo'<td onMouseOver="" onMouseOut="" width="500" bgcolor="#FFFFFF" id=""> <a href="viewprofile1.php?id='.$rec1[0].'" style=" text-decoration:none; text-transform:capitalize; color:#3B5998;" id="">' ?> <?php echo $name; ?>(Me)</a></td>
	
		</tr>
		<tr>
			<td colspan="2"> <hr style="border-color:#CCCCCC;"> </td>
		</tr>

		<?php 
		  }
		  else
		  {
?>
			<tr>

		<?php echo'<td bgcolor="#FFFFFF" style="padding-right:7;" id="">'?><?php echo'<a href="viewprofile1.php?id='.$rec1[0].'">'?> <img src="<?php echo $image; ?>" style="height:70; width:70;"> </a>  </td>
		
		<?php echo'<td onMouseOver="" onMouseOut="" width="500" bgcolor="#FFFFFF" id=""> <a href="viewprofile1.php?id='.$rec1[0].'" style=" text-decoration:none; text-transform:capitalize; color:#3B5998;" id="">' ?> <?php echo $name; ?></a></td>
		
		</tr>
		<tr>
			<td colspan="2"> <hr style="border-color:#CCCCCC;"> </td>
		</tr>
<?php
		  }
		}

?>
	</table>
	</div>

	<?php
	}
	if($count1==0)
	{ ?>
		
		<div style="position:absolute; left:22%; top:20%; background-color:#FFF9D7; height:8%; width:40%; box-shadow:0px 0px 10px 1px rgb(0,0,0);"> </div>
		<div style="position:absolute; left:22%; top:20%; background-color:#E2C822; height:0.2%; width:40%;"> </div>
		<div style="position:absolute; left:22%; top:20%; background-color:#E2C822; height:8%; width:0.1%;"> </div>
		<div style="position:absolute; left:22%; top:27.9%; background-color:#E2C822; height:0.2%; width:40%;"> </div>
		<div style="position:absolute; left:62%; top:20%; background-color:#E2C822; height:8%; width:0.1%;"> </div>
		<div style="position:absolute; left:23%; top:17.5%;"> <h4> No results found for your query. </h4> </div>
		<div style="position:absolute; left:23%; top:24%; color:#808080;"> Check your spelling or try another term. </div>
		
	<?php	
	}
?>
<div style="position:absolute; left:90%; top:100%;" > &nbsp; </div>	
</body>
</html>




</body>
</html>

<?php
	}
	else
	{
		header("home.php");
	}
?>
