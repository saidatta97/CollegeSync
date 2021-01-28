<?php
	$id=$_SESSION['id'];
	$user=$_SESSION['user'];
    include("conn.php");
    // $query="SELECT * from col_registration where REG_USERNAME='$user' ";
    $query="SELECT * from col_registration where REG_ID='$id' ";
    $res=mysql_query($query);
    $row=mysql_fetch_row($res);
    $userid=$row[0];
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

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
    min-width: 160px;
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
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="home.php" class="">Home</a></li>
        <li><a href="messenger.php">Message</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class=''></span> Notes<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="fynotes.php">FY</a></li>
            <li><a href="synotes.php">SY</a></li>
            <li><a href="tynotes.php">TY</a></li>
          </ul>
        </li>
        <!-- <li><a href="#" class="glyphicon glyphicon-envelope">Notification</a></li> -->
        <li class="dropdown">
           <a href="#" onclick="myFunction()"  class="dropdown-toggle " data-toggle="dropdown" ><span class="label label-pill label-danger count" style="border-radius:10px;"></span><!-- <span class="glyphicon glyphicon-envelope"></span> -->Notification</a>
           <ul id="myDropdown" class="dropdown-content"></ul>
          </li>
          <li><a href="event.php">Events</a></li>
        <li><a href="notice.php">Notices</a></li>
        <li><a href="query.php">Query</a></li>
        
        <li><a href="usefullink.php">Useful links</a></li>

      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout(<?php if(isset($_SESSION['user'])) { 

          //$id=$_SESSION['id'];
          echo $_SESSION['user'] ;echo' '; echo $_SESSION['lastname']; }?>)</a></li>
	      </ul>

       <form class="navbar-form navbar-right" method="GET" name="fb_search" action="search.php">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search" id="Search" name="Search1" onkeyup="searching();">
	        
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
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
          url:'fetch.php?id=<?php echo $row[0];?>',
          method:"POST",
          data:{view:view},
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
		    load_unseen_notification('yes');
		   });
		 
		 setInterval(function(){ 
		  load_unseen_notification();
		 }, 500);
		 
		});
</script>