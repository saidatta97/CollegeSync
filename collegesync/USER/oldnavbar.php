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
	        <!-- <li><a href="messenger.php">Message</a></li> -->
	        <li><a href="#">Message</a></li> 
          <!-- <li class="dropdown">
<button onclick="myFunction()" class="dropbtn">Notes</button>
  <div id="myDropdown" class="dropdown-content">
     <a href="fynotes.php">FY</a>
              <a href="synotes.php">SY</a>
              <a href="tynotes.php">TY</a>
            
     </div>
</li> -->


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

	      <li><a href="notification1.php">Notification</a></li>
	        <!-- <li class="dropdown">
	       <a href="notification1.php" class="dropdown-toggle" data-toggle="dropdown"><span class="label label-pill label-danger count" style="border-radius:10px;"></span>Notification</a>
	       <ul class="dropdown-menu"></ul>
	       --></li>
	        <li ><a href="event.php">Events</a></li>
	        <li ><a href="notice.php">Notices</a></li>
	        <li ><a href="query.php">Query</a></li>
	        <li ><a href="usefullink.php">Useful Links</a></li>        
	        
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