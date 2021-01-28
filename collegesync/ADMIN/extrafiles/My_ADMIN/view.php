<?php
session_start();
if(!isset($_SESSION['user']))
{
header("location:login.php");
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
					window.location.href='delete.php?id='+val;
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
include('header.php');	
?>
<h2 align="center">MANAGE USERS</h2>
<h3>welcome<b> <?php if(isset($_SESSION['user'])) { echo $_SESSION['user']; }?></b></h3>

<br>
<br>

</body>
</html>


<?php
	
	mysql_connect("localhost","root","")or die("could not connect to server");
	mysql_select_db("collegesync1")or die("database not found");


	
	//echo $_GET['first'];
	echo "<div id='design'>";
	echo "<table border=1, cellpadding=1px, cellspacing=1px; class='table table-bordered table-hover table-responsive' >";
	  echo"<tr style='background:grey; color:white;'>";
	  echo"<td>";echo"USER_ID"; echo"</td>";
	  echo"<td>";echo"FIRST NAME"; echo"</td>";
	  echo"<td>";echo"LAST NAME"; echo"</td>";
	  echo"<td>";echo"UNIVERSITY ID"; echo"</td>";
	  echo"<td>";echo"CLASS"; echo"</td>";
	  echo"<td>";echo"ADDRESS"; echo"</td>";
	  echo"<td>";echo"MOBILE"; echo"</td>";
	  echo"<td>";echo"EMAIL"; echo"</td>";
	  echo"<td>";echo"STATUS"; echo"</td>";
	  echo"<td colspan='3'>";echo"Action"; echo"</td>";

	  echo"<tr>";
		$query="select * from col_registration order by REG_ID asc";
		$res=mysql_query($query);

			while ($row=mysql_fetch_row($res)) 
				{
					echo "<tr>
							<td><a href='../USER/$row[12]' target='_blank' ><img src='../USER/$row[12]' alt='$row[0]' style='max-height: 25px; max-width: 25px;'></td>
							<td>$row[1]</td>
							<td>$row[2]</td>
							<td>$row[5]</td>
							<td>$row[4]</td>
							<td>$row[6]</td>
							<td>$row[7]</td>
							<td>$row[3]</td>
							<td>$row[13]</td>
												
							<td><a href='edit.php?id=$row[0]' class='btn btn-primary btn-sm'><span class='glyphicon glyphicon-edit'>EDIT</a></td>
							<td><button onclick='del(this.value)' value=$row[0] class='btn btn-danger btn-sm'><span class='glyphicon glyphicon-trash' >DELETE</button></td>

						</tr>";
				}
					echo "</table>";
					echo "</div>";
		
?>



<?php

		echo "<br>";
		echo "<br>";
		include('footer.html');
?>
