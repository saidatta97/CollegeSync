<?php
          $id=$_SESSION['id'];
          $admin=$_SESSION['user'];
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
                <img src="<?php echo$row[7];?> " alt='No profile'   class="img img-responsive img-circle">
                <br>
    
            </div>
            
          </div>
          <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
            <strong><?php echo$row[1] ?></strong>
          </div>
          </div>
        </div>
      </div>
    <br>
    
    

    <div class="container-fluid">
        <div class="panel">
          <div class="row">
            <div class="col-sm-12 col-xs-12 col-sm-offset-0 col-xs-offset-0">
                  <button type="button" class="btn btn-default btn-md  "><li class="dropdown glyphicon glyphicon-user">
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
         

         
       
      
        
        <a><h4 id="wall" >Create Post</h4></a>
    
    <br>
      
        <a href="mypost1.php"><strong>My Post</strong></a>
    <br>    <br>
        <a href="view.php"><strong>View users</strong></a>
    <br>    <br>
        <a href="checkpost.php"><strong>check posts</strong></a> 
      

    </div>