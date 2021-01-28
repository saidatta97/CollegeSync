<?php
session_start();
if(!isset($_SESSION['user']))
{
header("location:index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>COLLEGESYNC</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js1/jquery.min.js"></script>
  <script type="text/javascript">
    </script>


  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 1280%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 800px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }

            #del
    {
      float:right;
      margin-right: 20px;
    }

  </style>
<script type="text/javascript">
  $(document).ready(function()
    {
     $("#post").hide();
    $("#wall").click(function(){
        $("#post").toggle(1000);
      });


    });
 
</script>

</head>
<body style="background:  #B0C4DE;">
<?php
include("nav.php");
?>

<?php
          $user=$_SESSION['user'];
          $id=$_SESSION['id'];

          include("conn.php");
            $query="SELECT * from admin where admin_id='$id' ";
           $res=mysql_query($query);
           $row=mysql_fetch_row($res);
           ?>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
    <div class="container-fluid">
        <div class="panel">
          <div class="row">
            <div class="col-sm-12 col-xs-6 col-sm-offset-0 col-xs-offset-3">
                <?php
              if (strpos($row[7], '.jpg') !== false) {
               
                echo"<img src='$row[7]' class='img img-responsive img-circle'>";
               
               
              }
              else
              {
                echo"<img src='../USER/userdp/no_image.png'    class='img img-responsive img-circle'>";
               
               
                
              }?> <br>
    
            </div>
            
          </div>
          <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
            <strong><?php echo$row[3]?></strong>
          </div>
          </div>
        </div>
      </div>
    <br>
    <br>
         <button type="button" class="btn btn-default btn-md"><li class="dropdown glyphicon glyphicon-user">
          <a class="dropdown-toggle" data-toggle="dropdown" href="view.html">Manage Profile<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="editprofile.php">Edit</a></li>
            <li><a href="viewprofile.php">View</a></li>
            <li><a href="changepassword.php">Change Password</a></li>
          </ul>
        </li>
        </button>
        <br>
        <br>
   <a><h4 id="wall" >Post Event</h4></a>
    

             
    
    <br>

    </div>


    <div class="col-sm-8 text-left">   
<br>
<br>
<div id="post">
         <form method="POST" id="eventform"> 
<div class="container-fluid col-sm-offset-2 col-sm-8" align="center" >
  <div class="panel panel-danger"  >
      <div class="panel-heading">
    <div class="row">
      <div class="col-sm-4 col-sm-offset-4">
      <center><h1><strong>Event</strong></h1></center>
      </div>
      </div>
      </div>
     
      <div class="panel-body bg-warning" >
      <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        <label class="pull-center"><strong>Event Name</strong></label>
        <input type="text" name="event" id="event" value="" class="form-control">
        </div>
        </div>


       <div class="row">
      <div class="col-sm-9 col-sm-offset-2">
              <label><br/><strong>Description about Event:</strong></label><br/>
              <textarea class="form-control" rows="3" id="des" name="des"></textarea ><br/>
              </div>
              </div>

          <div class="row">
          <div class="col-sm-11 col-sm-offset-1">
              <strong>DATE::<input type="date"  name="date"></strong>
              <strong>Time::<input type="time"  name="time"></strong>            
           
              <br> <br>  
              <label><strong>Address::</strong></label><br>
              <textarea rows="2" cols="40" name="add"></textarea ><br/>
              </div>
           </div>          
           
              </div>
        
      
      <div class="panel-footer bg-danger" >
    
      <center><input type="submit" name="post" id="post" value="submit" class="btn btn-primary btn-xl"></center>
      </div>
      </div></div>
    
      
    </form>
    </div>

     
 

</body>
</html>
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
            $query="insert into event values('event_id','".$event."',  '".$des."', '".$date."', '".$time."' , '".$add."','".$status."',now()) ";

            $res=mysql_query($query);
          if(isset($_POST['post']))
            {
              echo"<script>alert('Event Posted Successfully');</script>";
            }
  
          }
        ?>   



        <?php
      $user=$_SESSION['user'];
     include("conn.php");
            $query="SELECT * from event  order by event_id desc limit 7";
           $res=mysql_query($query);
           while ($row=mysql_fetch_row($res))
           {
              echo"  
              <br>
              <br>   
<div class='container-fluid ' >
<form method='POST' name='update' action='updateevent.php'>
  <div class='row'>
  <div class='col-sm-offset-1 col-sm-10'>
  <div class='panel panel-danger' >
      <div class='panel-heading '>
    <div class='row'>
      <div class='col-sm-4 col-sm-offset-4'>
      <center><h1><strong>Event</strong></h1></center>
      
      <input type='hidden' name='event_id' value='$row[0]'>
      </div>";
      echo"<div id='del'>";
            echo"<a href='deleteevent.php?id=$row[0]'>X</a>";
           // echo"<button onclick='del(this.value)' value='$row[0]'>X</button>";
            echo"</div>";
      echo"
      </div>
      <h6>DATE : $row[7]</h6>
      </div>
     
      <div class='panel-body bg-warning' >
      <div class='row'>
      <div class='col-sm-6 col-sm-offset-2'>
        <label class='pull-center'><strong>Event Name</strong></label>
        <input type='text' name='title' value='$row[1]' class='form-control' >
        </div>
        </div>


       <div class='row'>
      <div class='col-sm-9 col-sm-offset-2'>
              <label><br/><strong>Description about Event::</strong></label><br/>
              <textarea class='form-control' rows='3' name='body' >$row[2]</textarea ><br/>
              </div>
              </div>

          <div class='row'>
          <div class='col-sm-4 col-sm-offset-2'>
              <strong>DATE:<input type='text' name='event_date' class='form-control' value='$row[3]'  ></strong>
           <br> 
           </div>  
             <div class='col-sm-4 col-sm-offset-1'>

              <strong>Time:<input type='text' name='event_time' class='form-control' value='$row[4]'  ></strong>            
            </div>
            </div>
               
              <div class='row'>
              <div class='col-sm-6 col-sm-offset-2'>
              <label><strong >Address::</strong></label><br>
              <textarea rows='2' cols='40' class='form-control' name='place' >$row[5]</textarea ><br/>
                    
           </div></div>
              </div>
        
      
      <div class='panel-footer bg-danger'>
    
               <center><input type='submit' name='update' class='btn btn-primary btn-xl' value='Update'></center>

      </div>
      </div>
      </div>
      </div>
      </form>
      </div>
<hr/>
";}
?>
      
    </div>
    
<?php
include("rightside.php");
?>    
<?php
include("footer.php");
?>



</body>
</html>
 
<?php
include("conn.php");
$query1="SELECT REG_ID from col_registration";
$res1=mysql_query($query1);
$count=mysql_num_rows($res1);
while ($row4=mysql_fetch_row($res1)) 
{

$status=0;
$query3="SELECT * from event where des='$des' and event='$event'";
$res3=mysql_query($query3);
$row3=mysql_fetch_row($res3);
$event_id=$row3[0];
$query4="INSERT into `notification`(`REG_ID`, `event_id` ,`status`)values('".$row4[0]."','".$event_id."','".$status."')";
$res4=mysql_query($query4);  
}



?>