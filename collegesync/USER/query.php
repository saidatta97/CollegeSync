<?php //setcookie('name','saidatta',time()-5,'/'); // for deleting cookie => set_cookie('name','saidatta',time()-10,'/');
//echo$_COOKIE['name'];
?>

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
    $(document).ready(function()
    {

      $(".query").hide();
      $(".quecomm").hide();
    $(".querybtn").click(function(){
       var id = $(this).attr('id');
        $("#query_"+id).toggle(1000);
        $(".quecomm_"+id).toggle(1000);
        $("#quecom_"+id).focus();      
      });

  
    //alert();
//     $(".comments").hide();
//      $(".wallcomm").hide();
//     $(".cmntbtn").click(function(){
//       var id = $(this).attr('id');
//        $("#comments_"+id).toggle(1000);
//     $(".wallcomm_"+id).toggle(1000);
//     $("#wallcom_"+id).focus();
// // $("#wallcom").toggle();

// });

    $("#post").hide();
    $("#wall").click(function(){
        $("#post").toggle(1000);
      });


    });
    </script>

    <script type="text/javascript">
      // function del(val)
      // {
      //   if(confirm("Are You sure You want to delete"))
      //   {
      //     alert(val);
      //     <?php
      //     header("location:deletepost.php?id='$row[0]'");
      //     ?>
      //     //window.location.href='deletepost.php?id='+val;
        


      //   }

      // }
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
    }
  </style>
</head>
<body style="background:  #B0C4DE;">
<?php
include("nav.php");
?>
<?php

          $userid=$_SESSION['id'];
          $user=$_SESSION['user'];
           include("conn.php");
           $query="SELECT * from col_registration where REG_ID='$userid' ";
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
              if (strpos($row[12], '.jpg') !== false) {
               
                echo"<img src='$row[12]' class='img img-responsive img-circle'>";
               
               
              }
              else
              {
                echo"<img src='userdp/no_image.png'    class='img img-responsive img-circle'>";
               
               
                
              }
              

               ?> <br>
    
            </div>
            
          </div>
          <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
            <strong><?php echo$row[1].' '.$row[2] ?></strong>
          </div>
          </div>
        </div>
      </div>
    <br>
    <br>
         <button type="button" class="btn btn-default btn-md"><li class="dropdown glyphicon glyphicon-user">
          <a class="dropdown-toggle" data-toggle="dropdown" href="view.html">User Profile<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="editprofile.php">Edit</a></li>
            <li><a href="viewprofile.php">View</a></li>
            <li><a href="changepassword.php">Change Password</a></li>
          </ul>
        </li>
        </button>
        <br>
        <br>
        <a><h4 id="wall" >Ask Query</h4></a>
    
    <br>
        <a href="mypost1.php"><strong>My Post</strong></a>

    </div>



    <div class="col-sm-8 text-left"> 
      
    <br>
    <br>
      <div id="post">
      <form method="POST" >
  
      <div class="container-fluid">      <!-- <legend style="background:grey;color:white;"><center>QUERY solving </center></legend> -->
        <div class="row">
        <div class="col-sm-6 col-sm-offset-2">  
        <div class="panel panel-danger ">
          <div class="panel-heading">
          <center><LEGEND>QUERY FORM</LEGEND></center>
          </div>
          <div class="panel-body bg-warning">
            <div class="row">
          <div class="col-sm-8  col-xs-12  col-sm-offset-2">
            <textarea cols="auto" rows="auto" placeholder="post query" name="query" class="form-control"></textarea>
        
            
          </div>
        </div>
        
            <br>
        <div class="row">
          <div class="col-sm-4  col-xs-6  col-sm-offset-4">
            
            <center><input type="submit" value="Post query" name="query1" class=" btn-primary btn-(size) col-sm-6 form-control"></center>
          </div>
        </div>  
          </div>
          <div class="panel-footer bg-danger">
            
          </div>
        </div>
        
      </div>
      </div>
      </div>
      </div>
      <?php
      $user=$_SESSION['user'];
            if(isset($_POST['query']))
            {

             $query=$_POST['query'];

            include("conn.php");
            $query="insert into query values('query_id', '".$_SESSION['user']."', '".$query."',now()) ";
            $res=mysql_query($query);
      if(isset($_POST['query1']))
            {
              echo"<script>alert('Query Uploaded Successfully');</script>";
            }
  
          }
        ?>   
    </form>
      
      
      <br/>
      <?php
           include("conn.php");
            $query="select * from query order by query_id desc limit 7";
           $res=mysql_query($query);
           while ($row=mysql_fetch_row($res))

 {
       $query_id=$row[0];
      echo"
      <form method='get'>
      <br>
      <div class='container-fluid'>
      <div class='row'>
      <div class='col-sm-9 col-sm-offset-1'>
        <div class='panel panel-danger '>
          <div class='panel-heading'>";
           if($user==$row[1])
            {
            echo"<div id='del'>";
            echo"<a href='deletequery.php?id=$row[0]'>X</a>";
           // echo"<button onclick='del(this.value)' value='$row[0]'>X</button>";
            echo"</div>";
          }

echo"
          <div class='row'>
      <div class='col-sm-4 col-sm-offset-4'>
      <center><h1><strong>Query</strong></h1></center>
      </div>

      </div>
    
          <h4>User : $row[1]</h4>
          <div>
            <h6>$row[3]</h6>
            </div>
          </div>
            
          <div class='panel-body bg-warning'>
            <div class='row'>
          <div class='col-sm-9 col-xs-offset-1'>
            <textarea cols='85' class='form-control' rows='4'  readonly=''>$row[2]</textarea>
          </div>
        </div>
        
            <br>
        <div class='row'>
         <div class='col-sm-6 col-xs-6 col-sm-offset-4 col-xs-offset-1'>
         <input type='hidden' value='$query_id' id='as' name='asa'>
            ";

             $query4="SELECT * FROM qucom WHERE query_id=$row[0]";
            $res4=mysql_query($query4);
            $count=mysql_num_rows($res4);   
                   
echo"
              <button type='button' class='btn btn-default btn-sm querybtn' id='$query_id'>
          <span class='glyphicon glyphicon-comment'></span> Comment($count)
        </button>
          </div>
          </div>

        <br>
          <div class='row'>
         
            <input type='hidden' value='$query_id' id='as' name='asa'>
          </div>
          ";


          $query1="SELECT * FROM qucom WHERE query_id=$row[0] ORDER BY query_id desc";
           $res1=mysql_query($query1);        
         echo"<div style='border:2px solid white; overflow-y: scroll; max-height: 220px;'>";
          echo "<div class='query' id='query_$query_id'>";
          while ( $row1=mysql_fetch_row($res1))

          {                           echo"<div class='row' >";
            echo"<br>";

          
           echo" <div class='col-xs-2 col-md-offset-2'>";
           include("conn.php");
           $query3="SELECT * from col_registration where REG_FIRSTNAME='$row1[2]' ";
           $res3=mysql_query($query3);
           $row3=mysql_fetch_row($res3);
    
           ?>
<?php
              if (strpos($row3[12], '.jpg') !== false) {
               
                echo"<img src='$row3[12]' class='img img-responsive img-circle'>";
               
               
              }
              else
              {
                echo"<img src='userdp/no_image.png'    class='img img-responsive img-circle'>";
               
               
                
              }
              

               ?>
            <?php
             echo" </div>";
            echo" <div class='col-xs-6 col-sm-4  col-xs-offset-2 col-sm-offset-0'>";
            //echo"<input type='text' class='form-control' value='$row1[2]' readonly>";
            echo"<b>$row1[2]</b>";

            echo" </div>";
            if($user==$row1[2])
            {
            echo" <div class='col-xs-6 col-sm-4 col-xs-offset-4 col-sm-offset-0'>";
            echo"<a class='delcom' href='deleteqcom.php?id=$row1[0]' name='de'>X</a>";
            echo" </div>";

            echo"<br>";
            echo" <div class='col-xs-6 col-sm-4 col-xs-offset-2 col-sm-offset-0'>";
            echo "<p>$row1[3]</p>";
            echo" </div>";
            //echo"<div class='col-md-5 col-md-offset-0 '>";
            //echo"<textarea class='form-control' rows='auto' name='' readonly cols='25'>$row1[3]</textarea>";
            
            //echo"</div>";
            //echo" <div class='col-xs-2' >";
            //echo"<input type='submit' class='form-control btn-primary btn-(size)' value='Send'>";
            //echo" </div><br>";
            echo"  </div>";
          }
          else
          {
               echo" <div class='col-xs-6 col-sm-4 col-xs-offset-4 col-sm-offset-0'>";
            //echo"<a class='delcom' href='deleteqcom.php?id=$row1[0]' name='de'>X</a>";
            echo" </div>";

            echo"<br>";
            echo" <div class='col-xs-6 col-sm-4 col-xs-offset-2 col-sm-offset-0'>";
            echo "<p>$row1[3]</p>";
            echo" </div>";
            //echo"<div class='col-md-5 col-md-offset-0 '>";
            //echo"<textarea class='form-control' rows='auto' name='' readonly cols='25'>$row1[3]</textarea>";
            
            //echo"</div>";
            //echo" <div class='col-xs-2' >";
            //echo"<input type='submit' class='form-control btn-primary btn-(size)' value='Send'>";
            //echo" </div><br>";
            echo"  </div>";
          }
            echo"<hr style='color:black;'>"; 
          
        
          }
            echo"</div>";
             echo"</div> ";


             echo"<div class='row quecomm quecomm_$query_id' >";
            echo"<br>
           <div class='col-xs-4 col-sm-2 col-xs-offset-0 col-sm-offset-1'>
            
            <input type='text' class='form-control' value='$user' readonly>
            </div>
            <div class='col-xs-4 col-sm-6 col-xs-offset-0 col-sm-offset-0'>
            <textarea class='form-control' rows='auto' id='quecom_$query_id' cols='25' name='comments'></textarea>
            </div>
            <div class='col-xs-4 col-sm-2 col-xs-offset-0 col-sm-offset-0' >
            <input type='submit' class='form-control btn-primary btn-(size)' value='Send'>
            </div><br>";
            echo" </div><br>";



             


             echo"</div> ";
          echo"<div class='panel-footer bg-danger'>
            
          </div>
        </div>
        
      </div>
      </div>
      </div>
      </form>
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
 <?php
if(isset($_GET['comments']))
            {
              //$id1="<script>document.getElementById('as').value</script>";


             include("conn.php");
          $comments=$_GET['comments'];
         echo $queryc="insert into qucom values('','$_REQUEST[asa]', '".$_SESSION['user']."', '".$comments."' )";          
          $resc=mysql_query($queryc);
          header("location:query.php");
        }
 ?>  

