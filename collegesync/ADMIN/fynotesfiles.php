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
	<title>gallery</title>
	<script src="https://code.jquery.com/jquery-2.2.4.js"></script>
	<script src="fancybox/jquery.fancybox.min.js"></script>
	<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox.min.css">
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js1/jquery.min.js"></script>
  
	<style type="text/css">
	body
	{
		margin:0;
		padding: 0;
		background:#ccc;
	}
	main
	{
		width: 80%;
		margin:0px auto;
	}
	.thumbnails
{
	width:30%;
	float: left;margin:10px;background:#fff;padding: 20px;box-sizing: border-box;
}
.thumbnails img
{
	width: 100%;
	height: auto;
}
		
	</style>

</head>
<body>
<?php
include("nav.php");
?>
<main>
	<h1>Files</h1>
	<?php
	$i=0;
	$dir=glob('../USER/fynotes/{*.pptx,*.pdf,*.doc}',GLOB_BRACE);

	foreach ($dir as $value) {

	?>

	
	<?php
			
			if($i==0)
			{
          $user=$_SESSION['user'];
           include("conn.php");
           $select=mysql_query("select * from notes where `clas`='FY' and image like '%ppt%' or image like '%doc%' order by notes_id desc");
            while($row1=mysql_fetch_array($select)){
          $name=$row1[5];
          echo"	<div class='thumbnails'>";
		echo"<a href='../USER/fynotes/$row1[5]' target='_blank' >$name<br></a>";
		echo"<br>";
		echo"<br>";
		echo"</div>";
		$i++;
}  
}      
	?>	
	<?php
}
?>
</main>
</body>
</html>