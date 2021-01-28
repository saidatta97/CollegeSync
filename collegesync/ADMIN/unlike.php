<?php 
 include("conn.php");
 session_start();
$extra=$_SESSION['id'];
$id= $_GET['id'];
$sql="select liked from wallpost where id=".$id;
$res=mysql_query($sql);
$row=mysql_fetch_row($res);
$updated=str_replace(",".$extra,"","$row[0]");
echo $updated;
echo$update="update wallpost set liked='$updated' where id=".$id;
mysql_query($update);
header("location:home.php");
?>