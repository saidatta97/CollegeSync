<?php
$id=$_GET['id'];
//$id=27;
if(isset($_POST["view"]))
{
 //$id=$_POST["id"];
 include("conn.php");
 if($_POST["view"] != '')
 {
  //$id=$_SESSION['id'];
  $update_query = "UPDATE notification SET status=1 WHERE REG_ID=$id";
  mysql_query($update_query);
  $delete_query = mysql_query( "DELETE FROM `notification` WHERE `REG_ID`=$id" );
 }
 $query = "SELECT * FROM event ORDER BY event_id DESC LIMIT 5";
 $result = mysql_query($query);
 $output = '<h3>EVENT</h3>';
 
 if(mysql_num_rows($result) > 0)
 {
  while($row = mysql_fetch_array($result))
  {
  $output .='
              <li>
    <a href="notievent.php?id='.$row[0].'">
     <strong>'.$row[1].'</strong><br />
     <small><em>'.$row[2].'</em></small>
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

