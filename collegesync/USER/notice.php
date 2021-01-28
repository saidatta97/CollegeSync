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
include("leftside1.php");     
?>

    <div class="col-sm-8 text-left">   

<br>
<br>
        <?php
      
          include("conn.php");
           $query="SELECT * from notice order by notice_id desc limit 5";
           $res=mysql_query($query);
           while ($row=mysql_fetch_row($res))
           {
      
            echo"


      <div class='row'>
    <div class='col-sm-offset-2 col-sm-8'>
  <div class='panel panel-danger'>
      <div class='panel-heading'>
    <div class='row'>
      <div class='col-sm-4 col-sm-offset-4'>
      <center><h1><strong> Notice</strong></h1></center>
      </div>

      </div>
      <b>Posted By ADMIN</b>
      <h6>$row[5]</h6>
      </div>
     
      <div class='panel-body bg-warning'>
      <div class='row'>
      <div class='col-sm-6 col-sm-offset-2'>
        <label class='pull-center'><strong>Notice for:</strong></label>
        <input type='text' value='$row[2]' class='form-control' disabled>
        </div>
        </div>


       <div class='row'>
      <div class='col-sm-9 col-sm-offset-2'>
              <label><br/><strong>Description about notice:</strong></label><br/>
              <center><textarea class='form-control' rows='auto' disabled>$row[3]</textarea ><br/>
              </center>
        </div>
      </div>
      </div>
      
      <div class='panel-footer bg-danger'>
    
          
              </div>
      </div></div>
      </div>
    
      
      <hr/>";

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
 
