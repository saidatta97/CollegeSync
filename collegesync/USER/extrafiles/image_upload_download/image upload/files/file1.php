<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
	<form method="GET" >
	<label>heading</label>
	<input type="text" name="heading">
	<input type="submit" name="save">
	</form>
	</body>
</html>

<?php
if(isset($_GET['heading']))
{

echo $heading=$_GET['heading'];
echo "<br>";

mysql_connect("localhost","root","")or die("could not connect to server");
mysql_select_db("sport")or die("database not found");

 $query="insert into sport_post values('', '".$heading."' ) ";

if($res=mysql_query($query))
{
echo "data inserted successfully";
}
else
{
echo "data not inserted";
}

$query="select * from sport_post order by id desc limit 4";

$res=mysql_query($query);
while ($row=mysql_fetch_row($res))
 {
 	echo "<br><br>";

	echo "	
            <div style='height: 100px;width: 500px;background: red; margin-left: 500px;' >$row[1]</div>";

echo "<br><br>";
}




}
?>

