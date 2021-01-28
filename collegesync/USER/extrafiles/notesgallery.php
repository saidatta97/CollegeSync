<!DOCTYPE html>
<html>
<head>
	<title>gallery</title>
	<script src="https://code.jquery.com/jquery-2.2.4.js"></script>
	<script src="fancybox/jquery.fancybox.min.js"></script>
	<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox.min.css">
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
<main>
	<h1>image gallery</h1>
	<?php
	$dir=glob('fynotes/{*.jpg,*.png}',GLOB_BRACE);

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