<?php
session_start();
if(!isset($_SESSION['user']))
{
header("location:.php");
}
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
			function del(val)
			{
				if(confirm("Are You sure You want to delete"))
				{
					window.location.href='deletepost.php?id='+val;
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
<h2 align="center">Manage wall Posts</h2>

<br>
<br>

</body>
</html>


<?php
	
	include('conn.php');	


	
	//echo $_GET['first'];
	echo "<div id='design'>";
	echo "<table border=2, cellpadding=1px, cellspacing=1px; class='table table-bordered table-hover table-responsive' >";
	  echo"<tr style='background:grey; color:white;'>";
	  // echo"<td>";echo"WALLPOST_ID"; echo"</td>";
	  echo"<td>";echo"SENDER NAME"; echo"</td>";
	  echo"<td>";echo"MESSAGE"; echo"</td>";
	  echo"<td>";echo"POST"; echo"</td>";
	  echo"<td>";echo"DATETIME"; echo"</td>";
	  //echo"<td>";echo"ADDRESS"; echo"</td>";
	  //echo"<td>";echo"MOBILE"; echo"</td>";
	  //echo"<td>";echo"EMAIL"; echo"</td>";
	  //echo"<td>";echo"STATUS"; echo"</td>";
	  echo"<td colspan='3'>";echo"ACTION"; echo"</td>";

	  echo"<tr>";
		$query="select * from wallpost order by id desc";
		$res=mysql_query($query);

			while ($row=mysql_fetch_row($res)) 
				{
					echo "<tr>
							
							
							<td>$row[3]</td>
							<td>$row[2]</td>";
							if (strpos($row[4], '.jpg') !== false) {
						echo"<td><a href='../USER/$row[4]' target='_blank' ><img src='../USER/$row[4]' alt='no image' style='max-height: 100px; max-width: 100px;'></td>
							";               
                	}
              else
              {
              			echo"<td>No Photo</td>";
              }

							echo"<td>$row[6]</td>
							<td><button onclick='del(this.value)' value=$row[0] class='btn btn-danger btn-sm'><span class='glyphicon glyphicon-trash' >DELETE</button></td>

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
