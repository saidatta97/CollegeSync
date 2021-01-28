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
                   <?php
              if (strpos($row[7], '.jpg') !== false) {
               
                echo"<img src='$row[7]' class='img img-responsive img-circle'>";
               
               
              }
              else
              {
                echo"<img src='../USER/userdp/no_image.png'    class='img img-responsive img-circle'>";
               
               
                
              }
              ?>
         </div>
            
          </div>
          <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
            <strong><?php echo$row[3] ?></strong>
          </div>
          </div>
        </div>
      </div>
<br>
    
    

    <div class="container-fluid">
        <div class="panel">
          <div class="row">
            <div class="col-sm-12 col-xs-12 col-sm-offset-0 col-xs-offset-0">
                  <button type="button" class="btn btn-default btn-md "><li class="dropdown glyphicon glyphicon-user">
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
         

         
       
      
        
        <!-- <a><h4 id="wall" >Create Post</h4></a> -->
        
          <br>
         <a href="view.php" id="users" name="users"><span class="label label-pill label-danger count" style="border-radius:10px;"></span>&nbsp;<strong>Manage Users</strong></a>
    <br> <br>   
        <a href="checkpost.php"><strong>Check Posts</strong></a> 
   

    <br>
      
        

    </div>
      <script>

    $(document).ready(function(){
     
     function load_unseen_notification(view = '')
      {
        $.ajax({
          url:"newusers.php",
          method:"POST",
          data:{view:view},
          dataType:"json",
          success:function(data)
          {
          if(data.unseen_notification > 0)
          {
            $('.count').html(data.unseen_notification);
          }
         }
        });
      }
     
     $(document).on('click', '#users', function()
       {
        $('.count').html('');
        load_unseen_notification('yes');
       });
     
     setInterval(function(){ 
      load_unseen_notification();
     }, 100);
     
    });
</script>