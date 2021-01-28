<?php
if(!empty($_GET['message']))
{


 include("conn.php");
 session_start();



$receiverid=$_GET['receiver'];
$senderid=$_SESSION['id'];
$mg=$_GET['message'];


$query="insert into message values('',$senderid,$receiverid,'".$mg."',now(),'')";
$res=mysql_query($query);
$queryst="insert into message_status values('',$senderid,$receiverid)";
$resst=mysql_query($queryst);

}
?>