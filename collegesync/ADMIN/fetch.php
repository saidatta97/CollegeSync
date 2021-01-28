<?php
//fetch.php;
if(isset($_POST["view"]))
{
 include("conn.php");

 if($_POST["view"] != '')
 {
  $update_query = "UPDATE `feedback` SET `status`=1 WHERE `status`=0";
  mysql_query($update_query);
 }
 
 $query_1 = "SELECT * FROM `feedback` WHERE `status`=0";
 $result_1 = mysql_query($query_1);
 $count = mysql_num_rows($result_1);
 $data = array(
  'unseen_notification' => $count
 );
 echo json_encode($data);
}
?>





