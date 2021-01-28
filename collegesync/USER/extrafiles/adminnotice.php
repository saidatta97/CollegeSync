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
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript">
    
  </script>
</head>
<body style="background-color:#98FB98;">

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="adminhome.html">collegesync</a>
    </div>
    <div class="collapse navbar-collapse active" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="adminhome.html">Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">notes<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="fynotes.html">FY</a></li>
            <li><a href="synotes.html">SY</a></li>
            <li><a href="tynotes.html">TY</a></li>
          </ul>
        </li>
        <li><a href="interface1.html">Messaage</a></li>
        <li><a href="adminevent.html">Events</a></li>
        <li><a href="adminnotice.html">Notices</a></li>
        <li><a href="query.html">Query</a></li>
        <li><a href="#">Notification</a></li>
        <li><a href="#">useful links</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="adminlogin.html"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>

       <form class="navbar-form navbar-right">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search">
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

<form method="POST">  
<div class="container-fluid " align="center" >
<div class="row">
<div class="col-sm-offset-2 col-sm-8">
  <div class="panel" style="background-color: #ADFF2F" >
      <div class="panel-heading">
    <div class="row">
      <div class="col-sm-4 col-sm-offset-4">
      <center><h1><strong> Notice</strong></h1></center>
      </div>
      </div>
      </div>
     
      <div class="panel-body" style="background-color: skyblue;">
      <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        <label class="pull-center"><strong>Notice for:</strong></label>
        <select class="form-control" name="clas">
          <option>FOR</option>
          <option>FY </option>
          <option>SY</option>
          <option>TY</option>
          <option>ALL</option>
        </select>  
        </div>
        </div>


       <div class="row">
      <div class="col-sm-9 col-sm-offset-2">
              <label><br/><br/><br/><br/><strong>Description about notice::</strong></label><br/><br/>
              <textarea class="form-control" rows="5" id="Suggestion" name="notice"></textarea ><br/>
             </div>
      </div>  
      </div>
      
      <div class="panel-footer" style="background-color:  #F0E68C;">
    
      <center><input type="submit" name="" value="submit" class="btn btn-primary btn-xl"></center>
      </div>
      </div></div>
      </div>
      </div>
      <br/><br/>
     <?php
            if(isset($_POST['notice']))
            {

             $notice=$_POST['notice'];
              $clas=$_POST['clas'];

             

             
            mysql_connect("localhost","root","")or die("could not connect to server");
            mysql_select_db("collegesync")or die("database not found");

            $query="insert into notice values('notice_id', '".$_SESSION['user']."', '".$clas."', '".$notice."' ) ";

            $res=mysql_query($query);
            //{
            //echo "data inserted successfully";
           // }
            //else
            //{
            //echo "data not inserted";
            //}
          }
        ?>   


    </form>

      <hr><br/><br/>

        <?php
      
          mysql_connect("localhost","root","")or die("could not connect to server");
          mysql_select_db("collegesync")or die("database not found");
           $query="SELECT * from notice order by notice_id desc limit 5";
           $res=mysql_query($query);
           while ($row=mysql_fetch_row($res))
           {
      
            echo"


      <div class='row'>
<div class='col-sm-offset-2 col-sm-8'>
  <div class='panel' style='background-color: #ADFF2F' >
      <div class='panel-heading'>
    <div class='row'>
      <div class='col-sm-4 col-sm-offset-4'>
      <center><h1><strong> Notice</strong></h1></center>
      </div>

      </div>
      <b>$row[1]</b>
      </div>
     
      <div class='panel-body' style='background-color: skyblue;'>
      <div class='row'>
      <div class='col-sm-6 col-sm-offset-3'>
        <label class='pull-center'><strong>Notice for:</strong></label>
        <input type='text' value='$row[2]'>;
        </div>
        </div>


       <div class='row'>
      <div class='col-sm-9 col-sm-offset-2'>
              <label><br/><br/><br/><br/><strong>Description about notice::</strong></label><br/><br/>
              <center><textarea class='form-control' rows='5' disabled>$row[3]</textarea ><br/>
              </center>
        </div>
      </div>
      </div>
      
      <div class='panel-footer' style='background-color:  #F0E68C;'>
    
          
              </div>
      </div></div>
      </div>
    
      <br/><br/><br/>";
    }
    ?>
</body>
</html>
