<?php
session_start();
if(!isset($_SESSION['user']))
{
header("location:mainlogin.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript">
    
  </script>
</head>
<body style="background-color:#98FB98;">

<?php
include("nav.php");
?>
<!-- *************************************************************starts******************************************************************* -->

<?php
          $user=$_SESSION['user'];
          mysql_connect("localhost","root","")or die("could not connect to server");
          mysql_select_db("collegesync")or die("database not found");
           $query="SELECT * from event  order by event_id desc limit 7";
           $res=mysql_query($query);
           while ($row=mysql_fetch_row($res))
           {
      $id=$row[0];
            echo"
<div class='row'>
  <div class='col-sm-offset-2 col-sm-8'>
    <div class='panel' style='background-color: #ADFF2F' >
      <div class='panel-heading'>
        <div class='row'>
          <div class='col-sm-4 col-sm-offset-4'>
            <center><h3><strong> Notice of Event</strong></h3></center>
          </div>
            <div class='row'>
        <div class='col-lg-6 col-lg-offset-1'>
        <b>$row[1]</b>
        </div>
        <div class='col-lg-4 col-lg-offset-10'>

        <b>$row[4]</b>
        </div>
        </div>
      </div>
      </div>
      <div class='panel-body' style='background-color: skyblue;'>
        <div class='row'>
          <div class='col-sm-6 col-sm-offset-3'>
            <label class='pull-center'><strong>Notice for:</strong></label>
            <input type='text' value='$row[2]'>;
          </div>
        </div>
        <div class='row'>
          <div class='col-sm-9 col-sm-offset-2'>
            <label><br/><br/><br/><br/><strong>Description about notice::</strong></label><br/><br/>
            <center><textarea class='form-control' rows='5' disabled>$row[3]</textarea ><br/>
            </center>
          </div>
        </div>
      </div>
      <div class='panel-footer' style='background-color:  #F0E68C;'>
      </div>
    </div>
  </div>
</div>
    
<br/><br/><br/>";
   }
    ?>    
</body>
</html>
