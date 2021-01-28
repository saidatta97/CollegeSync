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

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="home.php">CollegeSync</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar fixedbar">
      <ul class="nav navbar-nav" id="fixedbar">
        <li class="active"><a href="home.php">Home</a></li>
        <li><a href="interface.php">Message</a></li>
        <li class="dropdown ">
          <a class="dropdown-toggle active " data-toggle="dropdown" href="#">Notes<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li ><a href="fynotes.php">FY</a></li>
            <li ><a href="synotes.php">SY</a></li>
            <li ><a href="tynotes.php">TY</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="notification1.php" class="dropdown-toggle" data-toggle="dropdown"><span class="label label-pill label-danger count" style="border-radius:10px;"></span><span class="glyphicon glyphicon-envelope">Notification</span></a>
          <ul class="dropdown-menu"></ul>


        </li>
        


        <li ><a href="event.php">Events</a></li>
        <li ><a href="notice.php">Notices</a></li>
        <li ><a href="query.php">Query</a></li>
        <li ><a href="usefullink.php">Useful Links</a></li>      
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout(<?php if(isset($_SESSION['user'])) { echo $_SESSION['user']; }?>)</a></li>
      </ul>
      <form class="navbar-form navbar-right" method="GET" name="fb_search" action="search.php">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search" id="Search" name="Search1" onkeyup="searching();">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <span class="glyphicon glyphicon-search"></span>
          </button>
          <div id="search_id">
            
          </div>
          </div>
        </div>
    
    </form>

      
    </div>
</div>
</nav>
 
 <form method="POST" id="eventform"> 
<div class="container-fluid col-sm-offset-2 col-sm-8" align="center" >
  <div class="panel" style="background-color: #ADFF2F" >
      <div class="panel-heading">
    <div class="row">
      <div class="col-sm-4 col-sm-offset-4">
      <center><h1><strong>Event</strong></h1></center>
      </div>
      </div>
      </div>
     
      <div class="panel-body" style="background-color: skyblue;">
      <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        <label class="pull-center"><strong>Event Name</strong></label>
        <input type="text" name="event" id="event" value="" class="form-control">
        </div>
        </div>


       <div class="row">
      <div class="col-sm-9 col-sm-offset-2">
              <label><br/><strong>Description about Event::</strong></label><br/><br/>
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
        
      
      <div class="panel-footer" style="background-color:  #F0E68C;">
    
      <center><input type="submit" name="post" id="post" value="submit" class="btn btn-primary btn-xl"></center>
      </div>
      </div></div>
    
      
    </form>

     <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> 
      <hr>
       <?php
      $user=$_SESSION['user'];
           include("conn.php");
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

 

</body>
</html>
 <script>
$(document).ready(function(){
 
 function load_unseen_notification(view = '')
 {
  $.ajax({
   url:"event_fetch.php",
   method:"POST",
   data:{view:view},
   dataType:"json",
   success:function(data)
   {
    $('.dropdown-menu').html(data.notification);
    if(data.unseen_notification >= 0)
    {
     $('.count').html(data.unseen_notification);
    }
   }
  });
 }
 
 

 load_unseen_notification();
 
 $('#eventform').on('submit', function(event){
  event.preventDefault();
  if($('#event').val() != '' && $('#des').val() != '')
  {
   var form_data = $(this).serialize();
   $.ajax({
    url:"insertevent.php",
    method:"POST",
    data:form_data,
    success:function(data)
    {
     $('#eventform')[0].reset();
     load_unseen_notification();
    }
   });
  }
  else
  {
   alert("Both Fields are Required");
  }
 });
 
 $(document).on('click', '.dropdown-toggle', function(){
  $('.count').html('');
  load_unseen_notification('yes');
 });
 
 setInterval(function(){ 
  load_unseen_notification();
 }, 5000);
 
} );
</script>



