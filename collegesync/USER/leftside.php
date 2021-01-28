<?php
          $userid=$_SESSION['id'];
          $user=$_SESSION['user'];
           include("conn.php");
           $query="SELECT * from col_registration where REG_ID='$userid' ";
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
              if (strpos($row[12], '.jpg') !== false) {
               
                echo"<img src='$row[12]' class='img img-responsive img-circle'>";
               
               
              }
              else
              {
                echo"<img src='userdp/no_image.png'    class='img img-responsive img-circle'>";
               
               
                
              }
              

               ?>
                <br>
    
            </div>
            
          </div>
          <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
            <strong><?php echo$row[1].' '.$row[2] ?></strong>
          </div>
          </div>
        </div>
      </div>
    <br>
    
    

    <div class="container-fluid">
        <div class="panel">
          <div class="row">
            <div class="col-sm-12 col-xs-12 col-sm-offset-0 col-xs-offset-0">
                  <button type="button" class="btn btn-default btn-md ">
                  <li class="dropdown glyphicon glyphicon-user">
          <a class="dropdown-toggle" data-toggle="dropdown" href="view.html">Manage Profile<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="editprofile.php">Edit</a></li>
            <li><a href="viewprofile.php">View</a></li>
            <li><a href="changepassword.php">Change Password</a></li>
          </ul>
        </li>
        </button>
               
            </div>
            
          </div>
        </div>
      </div>
         

         
       
      
        
        <a><h5> <span id="wall" class="glyphicon glyphicon-pencil">Create Post</span></h5></a>
    
    <br>
      
        <a href="mypost1.php"><h5>My Post</h5></a>
      

    </div>