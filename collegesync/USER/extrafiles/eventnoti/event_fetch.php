<?php
//fetch.php;
if(isset($_POST["view"]))
{
  include("conn.php");         
 if($_POST["view"] != '')
 {
  $update_query = "UPDATE `event` SET status=1 WHERE status=0";
  mysql_query($update_query);
 }
 $query = "SELECT * FROM `event` ORDER BY event_id DESC LIMIT 5";
 $result = mysql_query($query);
 $output = '';
 
 if(mysql_num_rows($result) > 0)
 {
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
   <li>
    <a href="#">
     <strong>'.$row["event"].'</strong><br />
     <small><em>'.$row["des"].'</em></small>
    </a>
   </li>
   <li class="divider"></li>
   ';
  }
 }
 else
 {
  $output .= '<li><a href="#" class="text-bold text-italic">No Notification Found</a></li>';
 }
 
 $query_1 = "SELECT * FROM event WHERE status=0";
 $result_1 = mysql_query($query_1);
 $count = mysql_num_rows($result_1);
 $data = array(
  'notification'   => $output,
  'unseen_notification' => $count
 );
 echo json_encode($data);
}
?>
