<?php
session_start();
if(!isset($_SESSION['user']))
{
header("location:mainlogin.php");
}
?>

<?php
            if(isset($_POST['event']))
            {

             $event=$_POST['event'];
             $des=$_POST['des'];
             $date=$_POST['date'];
             $time=$_POST['time'];
             $add=$_POST['add'];
             $status=0;
  

      

            
             include("conn.php");
            $query="insert into event values('event_id', '".$_SESSION['user']."', '".$event."',  '".$des."', '".$date."', '".$time."' , '".$add."','".$status."') ";

            $res=mysql_query($query);
          
          }
        ?>   

        <?php
      $user=$_SESSION['user'];
          mysql_connect("localhost","root","")or die("could not connect to server");
          mysql_select_db("collegesync")or die("database not found");
           $query="SELECT * from event  order by event_id desc limit 7";
           $res=mysql_query($query);
           while ($row=mysql_fetch_row($res))
           {
              echo"     
<div class='container-fluid col-sm-offset-2 col-sm-8' align='center' >
  <div class='panel' style='background-color: #ADFF2F' >
      <div class='panel-heading'>
    <div class='row'>
      <div class='col-sm-4 col-sm-offset-4'>
      <center><h1><strong>Event</strong></h1></center>
      </div>
      </div>
      <p>$row[1]</p>
      </div>
     
      <div class='panel-body' style='background-color: skyblue;'>
      <div class='row'>
      <div class='col-sm-6 col-sm-offset-3'>
        <label class='pull-center'><strong>Event Name</strong></label>
        <input type='text' name='' value='$row[2]' class='form-control'>
        </div>
        </div>


       <div class='row'>
      <div class='col-sm-9 col-sm-offset-2'>
              <label><br/><strong>Description about Event::</strong></label><br/><br/>
              <textarea class='form-control' rows='3'>$row[3]</textarea ><br/>
              </div>
              </div>

          <div class='row'>
          <div class='col-sm-11 col-sm-offset-1'>
              <strong>DATE::<input type='text' value='$row[4]'  ></strong>
              <strong>Time::<input type='text' value='$row[5]'  ></strong>            
           
              <br> <br>  
              <label><strong>Address::</strong></label><br>
              <textarea rows='2' cols='40'>$row[6]</textarea ><br/>
              </div>
           </div>          
           
              </div>
        
      
      <div class='panel-footer' style='background-color:  #F0E68C;'>
    
      
      </div>
      </div></div>
";}
?>

