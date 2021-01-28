<?php
$id=$_GET['id'];
if(isset($_POST["view"]))
{
   //$id=$_GET['uid'];
   //echo $id;
  //$id=21;
 include("conn.php");
 if($_POST["view"] != '')
 {
  $update_query = "UPDATE notification SET status=1 WHERE `REG_ID`='$id'";
  mysql_query($update_query);
 }
 $query = "SELECT * FROM event ORDER BY event_id DESC LIMIT 5";
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
    <hr/>
    </a>

   </li>
              ';
  }
 }
 else
 {
  $output .= '<li><a href="#" class="text-bold text-italic">No Notification Found</a></li>';
 }
 
 $query_1 = "SELECT * FROM notification WHERE REG_ID=$id AND status=0";
 $result_1 = mysql_query($query_1);
 $count = mysql_num_rows($result_1);
 $data = array(
  'notification'   => $output,
  'unseen_notification' => $count
 );
 echo json_encode($data);
}
?>

