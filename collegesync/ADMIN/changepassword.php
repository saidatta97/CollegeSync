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

    #des
    {
    	background-color:;
    }
  </style>
</head>
<body style="background:  #B0C4DE;">
<?php
include("nav.php");
include("leftside1.php");
?>

    

    <div class="col-sm-8 text-left"> 
   <br>
   <br>
   <?php
   $user=$_SESSION['user'];
   include("conn.php");
           $query="SELECT * from admin where username='$user' ";
           $res=mysql_query($query);
           $row=mysql_fetch_row($res);
           

   ?>
      <form method="POST">
      <div class="container-fluid">
        <div class="panel panel-danger col-sm-8 col-xs-12 col-sm-offset-2 ">
          <div class="row">
            <div class="col-sm-13 col-sm-offset-0">
          <div class="panel-heading bg-danger">
          <center><h3>Change Password</h3></center>
          </div>
          <div class="panel-body bg-warning">
            <div class="row">
          <div class="col-sm-4  col-xs-6 col-xs-offset-1  col-sm-offset-4">
            <label>username</label>
            <input type="text" class="form-control" name="username" value="<?php echo$row[1]; ?>" disabled>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-sm-4  col-xs-6 col-xs-offset-1  col-sm-offset-4">
            <label> Old password</label>
            <input type="password" class="form-control" name="opwd" required>
          </div>
        </div><br>
        <div class="row">
          <div class="col-sm-4  col-xs-6 col-xs-offset-1 col-sm-offset-4">
            <label> NEW password</label>
            <input type="password" class="form-control" name="npwd" required>
          </div>
        </div>
        
          <br><br>
        <div class="row">
          <div class="col-sm-2  col-xs-4 col-xs-offset-2  col-sm-offset-5">
            
          </div>
          
        </div>  
          </div>
          <div class="panel-footer bg-danger">
            <div class="row">
             <div class="col-sm-2  col-xs-4 col-xs-offset-2  col-sm-offset-5">
             <input type="submit" value="SAVE" name="save" class="form-control btn-primary btn-(size) col-sm-11">
          
            </div>
          </div>
        </div>
        
      </div>
      </div>
      </div>
      </div>
      </form>







    </div>
    

    <div class="col-sm-2 sidenav">
     <div class="well">
        <a href="upcomingevent.php"><strong> Upcoming Events</strong></a>
      </div>
      <!-- <div class="well">
        <a href="impnotes.php"><strong>Important Notes </strong> </a>
       --></div>
    </div> 
      
  </div>
</div>

<footer class="container-fluid text-center">
  <a href="#"><strong>About Us</strong> </a><br>
  <?php
//echo$id+7;
  
?>

  <a href="#"><strong>Contact Details</strong> </a>
</footer>


</body>
</html>
 
<?php
if(isset($_POST['save']))

{
  include("conn.php");
$user=$_SESSION['user'];
           $query="SELECT * from admin where username='$user' ";
           $res=mysql_query($query);
           $row=mysql_fetch_row($res);
   
  $username=$row[1];
  $old=$_POST['opwd'];
  $new=$_POST['npwd'];
$pwd=$row[2];
if($pwd==$old)
{
   
  $query=mysql_query("update admin set pwd='$new' where username='$username'");
  if($query)
  {
    echo"<script>alert('Password changed successfully');</script>";
  }
    
}
else
{
   echo"<script>alert('Please enter the old password correctly');</script>";
}

}