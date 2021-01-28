<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript">
     load_unseen_notification();
  </script>
  <style type="text/css">
    .right
      {
        position:static;
        width:auto;
        float:right!important;
      }
    .line
      {
       position:static;
        width:auto;
        float:left;
        padding-top:15px;
        color:#000;
      }  
  </style>
</head>
 <body>
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
        <li><a href="message.php">Message</a></li>
        <li class="dropdown ">
          <a class="dropdown-toggle active " data-toggle="dropdown" href="#">Notes<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li ><a href="fynotes.php">FY</a></li>
            <li ><a href="synotes.php">SY</a></li>
            <li ><a href="tynotes.php">TY</a></li>
          </ul>
        </li>
        <!-- <li><a href="notification.php">Notification</a></li> -->
        <li class="dropdown">
       <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="label label-pill label-danger count" style="border-radius:10px;"></span> <span class="glyphicon glyphicon-envelope" style="font-size:18px;"></span></a>
       <ul class="dropdown-menu"></ul>
      </li>
        <li ><a href="event.php">Events</a></li>
        <li ><a href="notice.php">Notices</a></li>
        <li ><a href="query.php">Query</a></li>
        <li ><a href="#">Useful Links</a></li>        
        
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