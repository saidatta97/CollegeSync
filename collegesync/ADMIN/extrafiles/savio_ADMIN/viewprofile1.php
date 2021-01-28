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
          $admin_id=$_SESSION['id'];
          include("conn.php");
            $query="SELECT * from admin where admin_id='$admin_id' ";
           $res=mysql_query($query);
           $row=mysql_fetch_row($res);
           ?>
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
    <img src="<?php echo$row[12];?>" style="max-width: 170px; max-height: 170px;" class="img img-responsive img-circle">
    <br><strong><?php echo$row[1].' '.$row[2] ?></strong>
    <br>
    <br>
    <br>
    <br>
         <button type="button" class="btn btn-default btn-lg"><li class="dropdown glyphicon glyphicon-user">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">User Profile<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="editprofile.php">Edit</a></li>
            <li><a href="viewprofile.php">View</a></li>
            <li><a href="forgot.php">Change Password</a></li>
          </ul>
        </li>
        </button>
    </div>


    <div class="col-sm-8 text-left"> 
      <br>

      <?php
      $user=$_SESSION['user'];
      $search=$_GET['id'];
      
           include("conn.php");
            $query="SELECT * from col_registration where REG_ID='$search' ";
           $res=mysql_query($query);
           while ($row=mysql_fetch_row($res))
           {
            echo"
      <form method='POST'>
      <div class='container-fluid'>
      <div class='row'>
      <div class='col-lg-9 col-sm-offset-1'>
        <div class='panel panel-danger'>
          <div class='panel-heading'>
          <center><LEGEND>View profile</LEGEND></center>
          </div>
          <div class='panel-body bg-warning'>
				
				<div class='row'>
				<div class='col-lg-2 col-lg-offset-1'>
					<label>Profile Image</label>
				</div>
						<div class='col-lg-6 col-lg-offset-0'>
						<img src='$row[12]' style='max-width: 170px; max-height: 170px;' class='img img-responsive img-circle'>
						<br>
							
						</div>	
					
				</div><br>				           
            
        		<div class='row'>
					<div class='col-lg-2 col-lg-offset-1'>
					<label>NAME</label>	
					</div>
					<div class='col-lg-3 col-lg-offset-0'>
					<input type='text' name='' value='$row[1]' placeholder='first name' class='form-control' required disabled=''>
					</div>	
					<div class='col-lg-3 col-lg-offset-0'>
					<input type='text' name='' value='$row[2]' placeholder='last name' class='form-control' required disabled=''>	
					</div>
				</div>
            
            <br><div class='row'>
					<div class='col-lg-2 col-lg-offset-1'>
					<label>E-mail id</label>	
					</div>
					<div class='col-lg-6'>
					<input type='E-mail' name='' value='$row[3]' class='form-control' disabled=''><br>
					</div>
				</div>	

				

		<div class='row'>
				<div class='col-lg-2 col-lg-offset-1' >
				<label>class</label>
				</div>
				<div class='col-lg-3'>
				<input type='text' class='form-control' value='$row[4]' disabled><br>
        </div>
			</div>

			<div class='row'>
				<div class='col-lg-2 col-lg-offset-1' >
				<label>University No</label>
				</div>
				<div class='col-lg-6' >
				<input type='University No' name='' value='$row[5]' class='form-control' disabled='' required><br>
				</div>
			</div>

			<div class='row'>
				<div class='col-lg-2 col-lg-offset-1' >
				<label>Address</label>
				</div>
				<div class='col-lg-6'>
				<textarea class='form-control' cols='30' rows='2' disabled='' required>$row[6] </textarea><br>
				</div>
			</div>

			<div class='row'>
				<div class='col-lg-2 col-lg-offset-1' >
				<label>Mobile No</label>
				</div>
				<div class='col-lg-6' >
				<input type='Number' name='' value='$row[7]' required class='form-control' minlength='10' disabled=''><br>
				</div>
			</div>
			<div class='row'>
				<div class='col-lg-2 col-lg-offset-1' >
				<label>Gender</label>
				</div> 
				<div class='col-lg-2'>
				<input type='text' class='form-control' value='$row[8]' disabled><br>
        				</div>
				</div>

			<div class='row'>
				<div class='col-lg-2 col-lg-offset-1' >
				<label>DOB</label>
				</div>
				<div class='col-lg-6' >
				<input class='form-control' type='text' name='' value='$row[11]' disabled=''><br>
				</div>
			</div>


         
          <br>
          </div>
        </div>
        </div>
      </div>
      </div>
      </form>
      ";
    }
      ?>
      <br>
        <?php
          $user=$_SESSION['user'];
          $search=$_GET['id'];
      
            include("conn.php");
            $query1="SELECT * from col_registration where REG_ID='$search' ";
            $res1=mysql_query($query1);
            $row1=mysql_fetch_row($res1);           

        echo"<a href='mypost2.php?id=".$row1[0]."'>
        <button id='wall' type='button' class='btn btn-basic btn-lg'><strong> $row1[1] All Posts</strong></button>
        </a>";
      ?>
    </div>
    <div class="col-sm-2 sidenav">
      <div class="well">
        <a href="#"><strong>Upcoming Events</strong></a>
      </div>
      <div class="well">
        <a href="#"><strong>Impotrant Notes</strong> </a>
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <a href="#"><strong>About Us</strong> </a><br>
  <a href="#"><strong>Contact Details</strong> </a>
</footer>


</body>
</html>
