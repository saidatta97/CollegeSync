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
        #del
    {
      float:right;
      margin-right: 20px;
    }

  </style>
<script type="text/javascript">
  $(document).ready(function()
    {
     $("#post").hide();
    $("#wall").click(function(){
        $("#post").toggle(1000);
      });


    });
 
</script>
</head>
<body style="background:  #B0C4DE;">
<?php
include("nav.php");
?>

<?php
          $id=$_SESSION['id'];
          $admin=$_SESSION['user'];
           include("conn.php");
           $query="SELECT * from admin where admin_id='$id' ";
           $res=mysql_query($query);
           $row=mysql_fetch_row($res);
           ?>

  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
    <div class="container-fluid">
        <div class="panel">
          <div class="row">
            <div class="col-sm-12 col-xs-6 col-sm-offset-0 col-xs-offset-3">
   <?php
              if (strpos($row[7], '.jpg') !== false) {
               
                echo"<img src='$row[7]' class='img img-responsive img-circle'>";
               
               
              }
              else
              {
                echo"<img src='../USER/userdp/no_image.png'    class='img img-responsive img-circle'>";
               
               
                
              }?>                <br>
    
            </div>
            
          </div>
          <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
            <strong><?php echo$row[3] ?></strong>
          </div>
          </div>
        </div>
      </div>
    <br>
    <br>
         <button type="button" class="btn btn-default btn-md"><li class="dropdown glyphicon glyphicon-user">
          <a class="dropdown-toggle" data-toggle="dropdown" href="view.html">Manage Profile<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="editprofile.php">Edit</a></li>
            <li><a href="viewprofile.php">View</a></li>
            <li><a href="changepassword.php">Change Password</a></li>
          </ul>
        </li>
        </button>
        <br>
        <br>
   <a><h4 id="wall" >Post Notice</h4></a>
    

             
    
    <br>
       
    </div>

    <div class="col-sm-8 text-left">   

<br>
<br>
<div id="post">
<form method="POST">  
<div class="container-fluid " align="center" >
<div class="row">
<div class="col-sm-offset-2 col-sm-8">
  <div class="panel panel-danger" >
      <div class="panel-heading">
    <div class="row">
      <div class="col-sm-4 col-sm-offset-4">
      <center><h1><strong> Notice</strong></h1></center>
      </div>
      </div>
      </div>
     
      <div class="panel-body bg-warning">
      <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        <label class="pull-center"><strong>Notice for:</strong></label>
        <select class="form-control" name="clas">
          <option>FY </option>
          <option>SY</option>
          <option>TY</option>
          <option>ALL</option>
        </select>  
        </div>
        </div>


       <div class="row">
      <div class="col-sm-9 col-sm-offset-2">
              <label><br/><strong>Description about notice:</strong></label><br/>
              <textarea class="form-control" rows="" id="Suggestion" name="notice"></textarea ><br/>
             </div>
      </div>  
      </div>
      
      <div class="panel-footer bg-danger" >
    
      <center><input type="submit" name="post" value="submit" class="btn btn-primary btn-xl"></center>
      </div>
      </div></div>
      </div>
      </div>
      <br/><br/>
</form>
</div>
<?php
            if(isset($_POST['notice']))
            {

             $notice=$_POST['notice'];
              $clas=$_POST['clas'];

             

             
            include("conn.php");
            $query="insert into notice(notice_id,sender,clas,notice,datetime) values ('notice_id', '".$_SESSION['user']."', '".$clas."', '".$notice."',now()) ";

            $res=mysql_query($query);
            if(isset($_POST['post']))
            {
              echo"<script>alert('Notice Posted Successfully');</script>";
            }
  
            //{
            //echo "data inserted successfully";
           // }
            //else
            //{
            //echo "data not inserted";
            //}
          }
        ?>   


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
      </div>";

      echo"<div id='del'>";
            echo"<a href='deletenotice.php?id=$row[0]'>X</a>";
           // echo"<button onclick='del(this.value)' value='$row[0]'>X</button>";
            echo"</div>";
echo"
      </div>
      <b>ADMIN </b>
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
              <label><br/><strong>Description about notice::</strong></label><br/>
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
 
