<!DOCTYPE html>
<html>
<head>
	<title>gallery</title>
	<script src="https://code.jquery.com/jquery-2.2.4.js"></script>
	<script src="fancybox/jquery.fancybox.min.js"></script>
	<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox.min.css">
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
include("nav1.php");
?>

<main>
	<h1>Photo Gallery</h1>
	<?php
	$dir=glob('synotes/{*.jpg,*.png}',GLOB_BRACE);

	foreach ($dir as $value) {

	?>

	<div class="thumbnails">
	<a href="<?php echo$value; ?>" data-fancybox="images" data-caption="<?php echo$value; ?>">
	<img src="<?php echo$value; ?>" alt="<?php echo$value;?>">
</a>
	<h5>"<?php echo$value; ?>"</h5>	
	</div>
	<?php
}
?>
</main>
</body>
</html>