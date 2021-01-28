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
?>

<?php
          $user=$_SESSION['user'];
          include("conn.php");
           $query="SELECT * from col_registration where REG_FIRSTNAME='$user' ";
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
          <a class="dropdown-toggle" data-toggle="dropdown" href="view.html">User Profile<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="editprofile.php">Edit</a></li>
            <li><a href="viewprofile.php">View</a></li>
            <li><a href="forgot.php">Change Password</a></li>
          </ul>
        </li>
        </button>
        <br>
        <br>
        
    
    <br><br>
        <div class="well">
        <a href="mypost.php"><strong>MY POST</strong></a>
      </div>

    </div>


    <div class="col-sm-8 text-left"> 
      
    </div>
    <div class="col-sm-2 sidenav">
     <div class="well">
        <a href="upcomingevent1.php"><strong>Events</strong></a>
      </div>
      <div class="well">
        <a href="impnotices.php"><strong> Notices </strong> </a>
      </div>
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
 
<script>
$(document).ready(function(){
 
 function load_unseen_notification(view = '')
  {
    $.ajax({
      url:"fetch.php",
      method:"POST",
      data:{view:view},
      dataType:"json",
      success:function(data)
      {
      $('.dropdown-menu').html(data.notification);
      if(data.unseen_notification > 0)
      {
        $('.count').html(data.unseen_notification);
      }
     }
    });
  }
 
 // load_unseen_notification();
 
 // $('#comment_form').on('submit', function(event){
 //  event.preventDefault();
 //  if($('#subject').val() != '' && $('#comment').val() != '')
 //  {
 //   var form_data = $(this).serialize();
 //   $.ajax({
 //    url:"insert.php",
 //    method:"POST",
 //    data:form_data,
 //    success:function(data)
 //    {
 //     $('#comment_form')[0].reset();
 //     load_unseen_notification();
 //    }
 //   });
 //  }
 //  else
 //  {
 //   alert("Both Fields are Required");
 //  }
 // });
 
 $(document).on('click', '.dropdown-toggle', function()
   {
    $('.count').html('');
    load_unseen_notification('yes');
   });
 
 setInterval(function(){ 
  load_unseen_notification();
 }, 500);
 
});
</script>