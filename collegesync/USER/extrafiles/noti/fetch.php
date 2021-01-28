<?php
//fetch.php;
if(isset($_POST["view"]))
{
 include("1connect.php");
 if($_POST["view"] != '')
 {
  $update_query = "UPDATE notice SET status=1 WHERE status=0";
  mysqli_query($connect, $update_query);
 }
 $query = "SELECT * FROM notice ORDER BY notice_id DESC LIMIT 5";
 $result = mysqli_query($connect, $query);
 $output = '';
 
 if(mysqli_num_rows($result) > 0)
 {
  while($row = mysqli_fetch_array($result))
  {
   $output .= "
<div class='row'>
  <div class='col-sm-offset-2 col-sm-8'>
    <div class='panel' style='background-color: #ADFF2F' >
      <div class='panel-heading'>
        <div class='row'>
          <div class='col-sm-4 col-sm-offset-4'>
            <center><h3><strong> Notice</strong></h3></center>
          </div>
        </div>
        <ul class='nav line '><li>".$row[1]."</li></ul><ul class='nav line  right'><li>".""."</li></ul>       
      </div>
      <div class='panel-body' style='background-color: skyblue;'>
        <div class='row'>
          <div class='col-sm-6 col-sm-offset-3'>
            <label class='pull-center'><strong>For:</strong></label>
            <input type='text' value=".$row[2].">
          </div>
        </div>
        <div class='row'>
          <div class='col-sm-9 col-sm-offset-2'>
            <label><strong>Description about notice:</strong></label>
            <center><textarea class='form-control' rows='5' disabled>".$row[2]."</textarea ><br/>
            </center>
          </div>
        </div>
      </div>
      <div class='panel-footer' style='background-color:  #F0E68C;'>
      </div>
    </div>
  </div>
</div>
    
<br/>";
  }
 }
 else
 {
  $output .= '<li><a href="#" class="text-bold text-italic">No Notification Found</a></li>';
 }
 
 $query_1 = "SELECT * FROM notice WHERE status=0";
 $result_1 = mysqli_query($connect, $query_1);
 $count = mysqli_num_rows($result_1);
 $data = array(
  'notification'   => $output,
  'unseen_notification' => $count
 );
 echo json_encode($data);
}
?>
