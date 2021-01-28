<?php
session_start();
if(!isset($_SESSION['user']))
{
header("location:login.php");
}
?>
<?php
  include("conn.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>MANAGE USERS</title>
	<meta charset="utf-8">
  
  		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<script type="text/javascript" src="bootstrap/js/bootsrap.min.js"></script>
		<script type="text/javascript" src="bootstrap/jquery.min.js"></script>
		<script type="text/javascript">
			
			function delactiv(val)
			{
				if(confirm("Are You sure You want to DEACTIVATE"))
				{
					window.location.href='manage_users/deactivate.php?id='+val;
				}
			}
			function del(val)
			{
				if(confirm("Are You sure You want to DELITE"))
				{
					window.location.href='manage_users/delete.php?id='+val;
				}
			}

			
		</script>
  
  
<style type="text/css">
	#design
	{
		margin-left: 20px;
	}
	</style>
</head>

<body>
<?php
include('nav.php');	
?>
<h2 align="center">MANAGE USERS</h2>
<br>

</body>
</html>

<?php
	//echo $_GET['first'];
	echo "<div id='design'>";
	echo "<table border=1, cellpadding=1px, cellspacing=1px; class='table table-bordered table-hover table-responsive' >";
	  echo"<tr style='background:grey; color:white;'>";
	  echo"<td>";echo"PROFILE PIC"; echo"</td>";
	  echo"<td>";echo"FIRST NAME"; echo"</td>";
	  echo"<td>";echo"LAST NAME"; echo"</td>";
	  echo"<td>";echo"UNIVERSITY ID"; echo"</td>";
	  echo"<td>";echo"CLASS"; echo"</td>";
	  echo"<td>";echo"ADDRESS"; echo"</td>";
	  echo"<td>";echo"MOBILE"; echo"</td>";
	  echo"<td>";echo"EMAIL"; echo"</td>";
	  echo"<td>";echo"STATUS"; echo"</td>";
	  echo"<td colspan='3'>";echo"ACTION"; echo"</td>";

	  echo"<tr>";
		$query="select * from col_registration order by status asc";
		$res=mysql_query($query);

			while ($row=mysql_fetch_row($res)) 
				{
					echo "<tr>";
				if (strpos($row[12], '.jpg') !== false) {
               
						echo"<td><a href='../USER/$row[12]' target='_blank' ><img src='../USER/$row[12]'  style='max-height: 25px; max-width: 25px;'></td>";
							                	
				               
              }
              else
              {
              		echo"<td><a href='../USER/userdp/no_image.png' target='_blank' ><img src='../USER/userdp/no_image.png'  style='max-height: 25px; max-width: 25px;'></td>";
							
              }
              

							echo"<td>$row[1]</td>
							<td>$row[2]</td>
							<td>$row[5]</td>
							<td>$row[4]</td>
							<td>$row[6]</td>
							<td>$row[7]</td>
							<td>$row[3]</td>
							<td>$row[13]</td>
												
							<td><a href='manage_users/activate.php?id=$row[0]' class='btn btn-primary btn-sm'><span class='glyphicon glyphicon-edit'>&nbspActivate</a></td>
							<td><button onclick='delactiv(this.value)' value=$row[0] class='btn btn-danger btn-sm'><span class='glyphicon glyphicon-trash'>&nbspDeactivate</button></td>
							<td><button onclick='del(this.value)' value=$row[0] class='btn btn-danger btn-sm'><span class='glyphicon glyphicon-trash'>&nbspDelete</button></td>

						</tr>";
				}
					echo "</table>";
					echo "</div>";
		
?>



<?php

		echo "<br>";
		echo "<br>";
		include('footer.php');
?>
