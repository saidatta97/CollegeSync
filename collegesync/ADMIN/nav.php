<?php

	$id=$_SESSION['id'];
           include("conn.php");
           $query="SELECT * from admin where admin_id='$id' ";
    $res=mysql_query($query);
    $row=mysql_fetch_row($res);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>

  <script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
// function fn()
// {
// 	if ((document.getElementById('Search').value=="")) 
//    	{
//       	alert("Please Enter Name to Search..");
//       	document.getElementById('Search').focus();
//    	}
//  	else
//     {
// 		document.cs_search.submit();
//     }
// }
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
        <li><a href="message.php" id="msg" name="msg"><span class="label label-pill label-danger count1" style="border-radius:10px;"></span>Message</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class=''></span> Notes<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="fynotes.php">FY</a></li>
            <li><a href="synotes.php">SY</a></li>
            <li><a href="tynotes.php">TY</a></li>
          </ul>
        </li>
       <!--  <li><a href="notification1.php" class="glyphicon glyphicon-envelope">Notification</a></li>
        --> <li><a href="adminevent.php">Events</a></li>
        <li><a href="adminnotice.php">Notices</a></li>
        <li><a href="query.php">Query</a></li>
        
        <li><a href="usefullink.php">Useful links</a></li>

      </ul>
      <!-- <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout(<?php //if(isset($_SESSION['user'])) { //echo $_SESSION['user'] ;echo' '; //echo $_SESSION['lastname']; }?>)</a></li>
        </ul>
 -->
       <ul class="nav navbar-nav navbar-right">
          <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout(<?php echo $row[1];?>)</a></li>
        </ul>
        <form class="navbar-form navbar-right" method="GET" name="cs_search" action="search.php">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search" id="Search1" name="Search1" onkeyup="searching();">
          <div class="input-group-btn">
            <button class="btn btn-default" type="submit" onclick="fn();">
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
          if(data.unseen_notification > 0)
          {
            $('.count1').html(data.unseen_notification);
          }
         }
        });
      }
     
     $(document).on('click', '#msg', function()
       {
        $('.count1').html('');
        load_unseen_notification('yes');
       });
     
     setInterval(function(){ 
      load_unseen_notification();
     }, 100);
     
    });
</script>