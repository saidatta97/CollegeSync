<?php
session_start();
$id=$_SESSION['id'];
include("conn.php");
$online=0;
$query2="update col_registration set online='".$online."' where REG_ID=$id";
$res2=mysql_query($query2);


session_unset();
header("location:index.php");
?>