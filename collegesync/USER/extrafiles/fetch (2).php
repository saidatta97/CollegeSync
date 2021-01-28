<?php
//fetch.php;
if(isset($_POST["view"]))
{
 include("conn.php");
 if($_POST["view"] != '')
 {
  $update_query = "UPDATE notice SET status=1 WHERE status=0";
  mysql_query($update_query);
 }
 $query = "SELECT * FROM notice ORDER BY notice_id DESC LIMIT 5";
 $result = mysql_query($query);
 $output = '<h3>NOTICES</h3>';
 
 if(mysql_num_rows($result) > 0)
 {
  while($row = mysql_fetch_array($result))
  {
  $output .='
              <li>
    <a href="notinotice.php?id='.$row[0].'">
     <strong>'.$row[2].'</strong><br />
     <small><em>'.$row[3].'</em></small>
    </a>
   </li>
              ';

  }
 }
 else
 {
  $output .= '<li><a href="#" class="text-bold text-italic">No Notification Found</a></li>';
 }
 
 $query_1 = "SELECT * FROM notice WHERE status=0";
 $result_1 = mysql_query($query_1);
 $count = mysql_num_rows($result_1);
 $data = array(
  'notification'   => $output,
  'unseen_notification' => $count
 );
 echo json_encode($data);
}
?>

