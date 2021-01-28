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
  <script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
<style type="text/css">
  .dropbtn {
    background-color:black;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
    background-color: black;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    width:250px;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown a:hover {background-color: #ddd}

.show {display:block;}

</style>

</head>
<body style="background:  #B0C4DE;">
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
        <li><a href="messenger.php">Message</a></li>
        <!-- <li><a href="notification.php">Notification</a></li> -->
        <li class="dropdown">
           <a class="dropdown-toggle active " data-toggle="dropdown" href="#">Notes<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li ><a href="fynotes.php">FY</a></li>
              <li ><a href="synotes.php">SY</a></li>
              <li ><a href="tynotes.php">TY</a></li>
            </ul>
          </li>

                    <!-- <li class="dropdown">
      <button onclick="myFunction()" class="dropbtn"><span class="label label-pill label-danger count" style="border-radius:10px;">Notification</span></button>
      <div id="myDropdown" class="dropdown-content">
            
     </div>
</li> -->


        <li class="dropdown">
       <a href="#" onclick="myFunction()"  class="dropdown-toggle" data-toggle="dropdown"><span class="label label-pill label-danger count" style="border-radius:10px;"></span>Notification </a>
       <ul id="myDropdown" class="dropdown-content"></ul>
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

<?php
include("leftside1.php");
?>



    <div class="col-sm-8 text-left">
<br>
<!-- <form method="GET" action="fetch.php"> 
 <input type="hidden" name="uid" id="uid" value="<?php echo $_SESSION['id'] ?>"> 
 <input type="hidden" name="uname" id="uname" value="<?php echo $_SESSION['user'] ?>"> 
 <input type="submit" name="" value="send">
</form> -->
    <?php
           include("conn.php");
            $query="SELECT * FROM event WHERE date >= NOW()";
           $res=mysql_query($query);
           while ($row=mysql_fetch_row($res))

    {

      echo"  
              <br>
                
<div class='container-fluid ' >
  <div class='row'>
  <div class='col-sm-offset-1 col-sm-10'>
  <div class='panel panel-danger' >
      <div class='panel-heading '>
    <div class='row'>
      <div class='col-sm-4 col-sm-offset-4'>
      <center><h1><strong>Event</strong></h1></center>
      </div>
      </div>
      <b>$row[1]</b>
      </div>
     
      <div class='panel-body bg-warning' >
      <div class='row'>
      <div class='col-sm-6 col-sm-offset-2'>
        <label class='pull-center'><strong>Event Name</strong></label>
        <input type='text' name='' value='$row[2]' class='form-control' disabled>
        </div>
        </div>


       <div class='row'>
      <div class='col-sm-9 col-sm-offset-2'>
              <label><br/><strong>Description about Event::</strong></label><br/><br/>
              <textarea class='form-control' rows='3' disabled>$row[3]</textarea ><br/>
              </div>
              </div>

          <div class='row'>
          <div class='col-sm-4 col-sm-offset-2'>
              <strong>DATE:<input type='text' class='form-control' value='$row[4]' disabled ></strong>
           <br> 
           </div>  
             <div class='col-sm-4 col-sm-offset-1'>

              <strong>Time:<input type='text' class='form-control' value='$row[5]' disabled ></strong>            
            </div>
            </div>
              <br> <br>  
              <div class='row'>
              <div class='col-sm-6 col-sm-offset-2'>
              <label><strong disabled>Address::</strong></label><br>
              <textarea rows='2' cols='40'class='form-control' disabled>$row[6]</textarea ><br/>
                    
           </div></div>
              </div>
        
      
      <div class='panel-footer bg-danger'>
    
      
      </div>
      </div>
      </div>
      </div>
      </div>
<hr/>
";
    }

    ?>
 
     
    </div>
    <?php
include("rightside.php");
?>    
<?php
include("footer.php");
?>

</body>
</html>
 
<script>
$(document).ready(function(){
 
 function load_unseen_notification(view = '')
  {
    $.ajax({
      url:"fetch.php?id=$_SESSION['id']",
      method:"POST",
      data:{
        view:view      },
      dataType:"json",
      success:function(data)
      {
      $('#myDropdown').html(data.notification);
      if(data.unseen_notification > 0)
      {
        $('.count').html(data.unseen_notification);
      }
     }
    });
  }
 
 function load_unseen_notification1(view = '')
  {
    $.ajax({
      url:"fetch.php",
      method:"POST",
      data:{
        view:view ,
        id:id     },
      dataType:"json",
      success:function(data)
      {
      $('#myDropdown').html(data.notification);
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
    load_unseen_notification1('yes');
   });
 
 setInterval(function(){ 
  load_unseen_notification();
 }, 500);
 
});
</script>