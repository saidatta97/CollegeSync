<?php
$conn=mysql_connect("localhost","root","") or die(mysql_error());
$sdb=mysql_select_db("demo",$conn) or die(mysql_error());
if(isset($_POST['submit'])!=""){
  $name=$_FILES['photo']['name'];
  $size=$_FILES['photo']['size'];
  $type=$_FILES['photo']['type'];
  $temp=$_FILES['photo']['tmp_name'];
  $caption1=$_POST['caption'];
  $link=$_POST['link'];
  move_uploaded_file($temp,"files/".$name);
$insert=mysql_query("insert into upload(name)values('$name')");
if($insert){
header("location:index.php");
}
else{
die(mysql_error());
}
}
?>
<html>
<head>
<title>Upload and Download</title>
</head>
<style>
body{ font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;}
a{color:#666;}
#table{margin:0 auto;background:#333;box-shadow: 5px 5px 5px #888888;border-radius:10px;color:#CCC;padding:10px;}
#table1{margin:0 auto;}
</style>
<body>
<h2><a href="http://crackerworld.blogspot.in/"></a></h2>
<h3><p align="center">Files Upload  And  Download</p></h3>	
<form enctype="multipart/form-data" action="" name="form" method="post">
<table border="0" cellspacing="0" cellpadding="5" id="table">
<tr>
<th >Chosse Files</th>
<td ><label for="photo"></label>
<input type="file" name="photo" id="photo" /></td>
</tr>

<tr>
<th colspan="2" scope="row"><input type="submit" name="submit" id="submit" value="Submit" /></th>
</tr>
</table>
</form>
<br />
<br />
<table border="1" align="center" id="table1" cellpadding="0" cellspacing="0">
<tr><td align="center">Click to Download</td></tr>
<?php
$select=mysql_query("select * from upload where name like '%jpg' or name like '%png' or name like '%jpeg' order by id desc");
$select1=mysql_query("select * from upload where name like '%sql' or name like '%php' or name like '%pdf' or name like '%pptx' order by id desc");
while($row1=mysql_fetch_array($select)){
	$name=$row1['name'];

echo"<tr>";
echo"<td width='300'>";
echo"<img src='$row1[1] ' width='100' height='100'><a href='download.php?filename=$name'> $name </a>";
//echo"<lable>$row1[1]</lable";
echo"</td>
</tr>";
}

while($row2=mysql_fetch_array($select1)){
	$name=$row2['name'];

echo"<tr>";
echo"<td width='300'>";
//echo"<img src='$row2[1] ' width='100' height='100'><a href='download.php?filename=$name'> $name </a>";
echo"<b><a href='download.php?filename=$name'> $name </a></b>";
//echo$name;
echo"</td>
</tr>";
}
?>
</table>
</body>
</html>