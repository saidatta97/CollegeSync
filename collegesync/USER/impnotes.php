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
  </style>
</head>
<body style="background:  #B0C4DE;">

<?php
include("nav.php");
?>

<?php
include("leftside1.php");     
?>



    <div class="col-sm-8 text-left"> 
      <br>
       
     

      <?php
      $user=$_SESSION['user'];
          include("conn.php");
           $query1="select * from col_registration where REG_FIRSTNAME= '$user' ";
           $res1=mysql_query($query1);
           $row1=mysql_fetch_row($res1);
           $class=$row1[4];
           $query="SELECT * from notes where `rating`='IMP' and `clas`='$class' order by notes_id desc";
           $res=mysql_query($query);
           while ($row=mysql_fetch_row($res))
           {
            $name=$row[5];
            echo"
      <div class='row'>
    <div class='col-sm-offset-2 col-sm-8'>
    <div class='panel panel-danger'  >
      <div class='panel-heading'>
      <div class='row'>
      <div class='col-sm-4 col-sm-offset-4'>
      <center><h1><strong> Notes</strong></h1></center>
      </div>

      </div>
    
    <div class='row'>
      <div class='col-sm-4 col-sm-offset-0'>
      <b>$row[1]</b>&nbsp
      
      </div>
      </div>
      </div>
     
      <div class='panel-body bg-warning' >
      <div class='row'>
      <div class='col-sm-6 col-sm-offset-2'>
        <label class='pull-center'><strong>Class</strong></label>
        <input type='text' class='form-control' value='$row[2]'>
        </div>
        </div>


       <div class='row'>
      <div class='col-sm-9 col-sm-offset-2'>
              <label><br/><strong>Description</strong></label><br/>
              <center><textarea class='form-control' rows='3' disabled>$row[3]</textarea ><br/>
              </center>
        </div>
      </div>
      <div class='row'>
        <div class='col-xs-6 col-sm-offset-3'>";
        if($class=='FY')
        {
                  if (strpos($row[5], '.jpg') !== false) {
 

        echo"<a href='fynotes/$row[5]' target='_blank' ><img src='fynotes/$row[5]' alt='$name' style='width: 170px; height: 170px;'/></a><br>";
      }
       if(strpos($row[5], '.pptx') !== false || strpos($row[5], '.doc') !== false){
  echo"<a href='tynotes/$row[5]' target='_blank' ><span class='glyphicon glyphicon-download'></span><em>$name</em></a><br>";
 
  }
 }
        if($class=='SY')
        {

         if (strpos($row[5], '.jpg') !== false) {
             

        echo"<a href='synotes/$row[5]' target='_blank' ><img src='synotes/$row[5]' alt='$name' style='width: 170px; height: 170px;'/></a><br>";
      }
       if(strpos($row[5], '.pptx') !== false || strpos($row[5], '.doc') !== false){
  echo"<a href='tynotes/$row[5]' target='_blank' ><span class='glyphicon glyphicon-download'></span><em>$name</em></a><br>";
 
  }
    }
        if($class=='TY')
      {
                if (strpos($row[5], '.jpg') !== false) {


        echo"<a href='tynotes/$row[5]' target='_blank' ><img src='tynotes/$row[5]' alt='$name' style='width: 170px; height: 170px;'/></a><br>";
 }
   if(strpos($row[5], '.pptx') !== false || strpos($row[5], '.doc') !== false){
  echo"<a href='tynotes/$row[5]' target='_blank' ><span class='glyphicon glyphicon-download'></span><em>$name</em></a><br>";
 
  } 
     }
        echo"
        </div>
      </div>  
      </div>
      
      <div class='panel-footer bg-danger'>
      </div>
      </div></div>
      </div>
    <hr/>
      <br/>

      ";

}
   ?>  
    </div>
    <div class="col-sm-2 sidenav">
      <div class="well">
        <a href="upcomingevent.php"><strong>Upcoming Events</strong></a>
      </div>
      <div class="well">
        <a href="impnotes.php"><strong>Impotrant Notes</strong> </a>
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <a href="#"><strong>About Us</strong> </a><br>
  <a href="#"><strong>Contact Details</strong> </a>
</footer>


</body>
</html>
  