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
include("leftside1.php");     
include("conn.php");
?>
<div class="col-sm-8 text-left"> <br/>

        <?php
      $user=$_SESSION['user'];
          
           $query="SELECT * from feedback  order by fd_id desc limit 7";
           $res=mysql_query($query);
           while ($row=mysql_fetch_row($res))
           {
              echo"  
              <br>
              <br>   
<div class='container-fluid ' >
  <div class='row'>
    <div class='col-sm-offset-1 col-sm-10'>
      <div class='panel panel-danger' >
        <div class='panel-heading '>
          <div class='row'>
            <div class='col-sm-4 col-sm-offset-4'>
              <center><h1><strong>Message</strong></h1></center>
            </div>
            </div>
          </div>
     
          <div class='panel-body bg-warning' >

            <div class='row'>
              <div class='col-sm-4 col-sm-offset-2'>
                <strong>First Name:<input type='text' class='form-control' value='$row[1]' disabled ></strong>
                <br> 
              </div>  
              <div class='col-sm-4 col-sm-offset-1'>

                <strong>Last Name:<input type='text' class='form-control' value='$row[2]' disabled ></strong>            
              </div>
            </div>

            <div class='row'>
              <div class='col-sm-6 col-sm-offset-2'>
                <label class='pull-center'><strong>Email</strong></label>
                <input type='text' name='' value='$row[3]' class='form-control' disabled><br/>
              </div>
            </div>

            <div class='row'>
              <div class='col-sm-6 col-sm-offset-2'>
                <label><strong disabled>Subject:</strong></label><br>
                <textarea rows='2' cols='40'class='form-control' disabled>$row[4]</textarea >
              </div>
            </div>

            <div class='row'>
              <div class='col-sm-9 col-sm-offset-2'>
                <label><br/><strong>Message:</strong></label><br/>
                <textarea class='form-control' rows='3' disabled>$row[5]</textarea ><br/>
              </div>
            </div>

          </div>
        <div class='panel-footer bg-danger'>
        </div>
      </div>
    </div>
  </div>
</div>
<hr/>
";}
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
 
