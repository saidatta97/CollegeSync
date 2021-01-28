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
      height: 300%;
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
  </style>
</head>
<body style="background:  #B0C4DE;">

<?php
include("nav.php");
?>
<?php
          $id=$_SESSION['id'];
          $admin=$_SESSION['user'];
           include("conn.php");
           $query="SELECT * from admin where admin_id='$id'";
           $res=mysql_query($query);
           $row=mysql_fetch_row($res);
           ?>

<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
   <?php
              if (strpos($row[7], '.jpg') !== false) {
               
                echo"<img src='$row[7]' class='img img-responsive img-circle'>";
               
               
              }
              else
              {
                echo"<img src='../USER/userdp/no_image.png'    class='img img-responsive img-circle'>";
               
               
                
              }?>    <br><strong><?php echo$row[1]?></strong>
    <br>
    <br>
    <br>
    <br>
         <button type="button" class="btn btn-default btn-lg"><li class="dropdown glyphicon glyphicon-user">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">User Profile<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="editprofile.php">Edit</a></li>
            <li><a href="viewprofile.php">View</a></li>
            <li><a href="changepassword.php">Change Password</a></li>
          </ul>
        </li>
        </button>
    </div>


    <div class="col-sm-8 text-left"> 
      <br>

      <?php
          $id=$_SESSION['id'];
           include("conn.php");
           $query="SELECT * from admin where admin_id='$id' ";
           $res=mysql_query($query);
           $row=mysql_fetch_row($res);
           ?>


      <form  method="POST" enctype="multipart/form-data">
      <div class="container-fluid">
      <div class="row">
      <div class="col-lg-9 col-sm-offset-1">
        <div class="panel panel-danger">
          <div class="panel-heading">
          <center><LEGEND>Edit profile</LEGEND></center>
          </div>
          <div class="panel-body bg-warning">
				
        <input type="hidden" value="<?php echo$row[0];?>" name="id" class="form-control" >
				<div class="row">
				<div class="col-lg-2 col-lg-offset-1">
					</div>
            <div class="col-lg-6 col-lg-offset-0">
      <?php
              if (strpos($row[7], '.jpg') !== false) {
               
                echo"<img src='$row[7]' style='max-width: 170px; max-height: 170px;' class='img img-responsive img-circle'>";
               
               
              }
              else
              {
                echo"<img src='../USER/userdp/no_image.png'    class='img img-responsive img-circle'>";
               
               
                
              }
              
            ?>
                  <br>
              <input type="file" name="image" value="<?php echo$row[7];?>" class="form-control">
            </div>  
          
        </div><br>                   
            
            <div class="row">
          <div class="col-lg-2 col-lg-offset-1">
          <label>NAME</label> 
          </div>
          <div class="col-lg-3 col-lg-offset-0">
          <input type="text" name="firstname" placeholder="" class="form-control" value="<?php echo$row[3];?>" required>
          </div>
        </div>
        <br>
            
			<div class="row">
				<div class="col-lg-2 col-lg-offset-1" >
				<label>Address</label>
				</div>
				<div class="col-lg-6">
				<textarea class="form-control" cols="30" rows="2" name="add" required> <?php echo$row[4];?> </textarea><br>
				</div>
      </div>
      
			<div class="row">
				<div class="col-lg-2 col-lg-offset-1" >
				<label>Mobile No</label>
				</div>
				<div class="col-lg-6" >
				<input type="Number" value="<?php echo$row[6];?>" name="mobile" required class="form-control" minlength="10">
				</div> 
			</div>

            <br><div class="row">
          <div class="col-lg-2 col-lg-offset-1">
          <label>E-mail id</label>  
          </div>
          <div class="col-lg-6">
          <input type="E-mail" name="email" class="form-control" value="<?php echo$row[5];?>"><br>
          </div>
        </div>  

			<div class="row">
					<div class="col-lg-2 col-lg-offset-1">
					<label>Username</label>	
					</div>
					<div class="col-lg-6" >
					<input class="form-control" type="text" name="username" value="<?php echo$row[1];?>" required><br>
					</div>
				</div>

         
          <br>
          </div>
          <div class="panel-footer bg-danger">
          <div class="row">
				<div class="col-lg-4 col-lg-offset-4">
					<input type="submit" name="" value="Save Changes" class="btn-lg btn-primary form-control">
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
        <a href="upcomingevent.php"><strong>Upcoming Events</strong></a>
      </div>
     <!--  <div class="well">
        <a href="#"><strong>Impotrant Notes</strong> </a>
     -->  </div>
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <a href="#"><strong>About Us</strong> </a><br>
  <a href="#"><strong>Contact Details</strong> </a>
</footer>


</body>
</html>

<?php
  if(isset($_POST['firstname']))  
    {
   include("conn.php");

      $id=$_POST['id'];
      $firstname=$_POST['firstname'];
     
      $mobile=$_POST['mobile'];
      $email=$_POST['email'];
      $add=$_POST['add'];
      $username=$_POST['username'];

      date_default_timezone_set("Asia/Kolkata");
              $time=date("d-m-Y-hms");
              $file_exists=array("JPG","jpeg","png","JPEG","jpg");
             $upload_exists = end (explode('.', $_FILES['image']["name"])); 
             $newname="$time"."_photo.".$upload_exists;
              $targetfile='admindp/'.$newname; 
              move_uploaded_file($_FILES["image"]["tmp_name"],$targetfile);

      $query1="update admin set A_fullname='".$firstname."', A_email='".$email."',  A_address='".$add."', username='".$username."', A_dp='".$targetfile."' where admin_id='$id'";
        
        
        if($res1=mysql_query($query1))
          {
            echo "data updated successfully";
            header('location:viewprofile.php');
          }
          
    }

?>
