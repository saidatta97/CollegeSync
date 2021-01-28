<?php
          $id=$_SESSION['id'];
          include("conn.php");
            $query="SELECT * from admin where admin_id='$id' ";
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
         <button type="button" class="btn btn-default btn-md"><li class="dropdown glyphicon glyphicon-user">
          <a class="dropdown-toggle" data-toggle="dropdown" href="view.html">Manage Profile<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="editprofile.php">Edit</a></li>
            <li><a href="viewprofile.php">View</a></li>
            <li><a href="forgot.php">Change Password</a></li>
          </ul>
        </li>
        </button>
        <br>
        <br>
        
    
    <br>
        <a href="mypost1.php"><strong>My Post</strong></a>

    </div>
