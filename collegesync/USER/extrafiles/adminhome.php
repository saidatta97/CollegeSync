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
  
    //alert();
    $(".comments").hide();
    $(".cmntbtn").click(function(){
       var id = $(this).attr('id');
       $("#comments_"+id).toggle(1000);
      });

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
          $user=$_SESSION['user'];
           include("conn.php");
           $query="SELECT * from col_registration where REG_FIRSTNAME='$user' ";
           $res=mysql_query($query);
           $row=mysql_fetch_row($res);
           ?>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
    <img src="<?php echo$row[12];?>" style="max-width: 170px; max-height: 170px;" class="img img-responsive img-circle">
    <br><strong><?php echo$row[1].' '.$row[2] ?></strong>
    <br>
    <br>
    <br>
    <br>
         <button type="button" class="btn btn-default btn-lg"><li class="dropdown glyphicon glyphicon-user">
          <a class="dropdown-toggle" data-toggle="dropdown" href="view.html">User Profile<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="editprofile.php">Edit</a></li>
            <li><a href="viewprofile.php">View</a></li>
            <li><a href="forgot.php">Change Password</a></li>
          </ul>
        </li>
        </button>
        <br>
        <br>
        <button id="wall" type="button" class="btn btn-default btn-lg">create post</button>
    
    <br><br>
        <div class="well">
        <a href="mypost.php"><strong>MY POST</strong></a>
      </div>

    </div>


    <div class="col-sm-8 text-left"> 
      <br>
      <div id='post'>
      <form  method="POST" enctype="multipart/form-data">
      <div class="container-fluid">
      <div class="row">
      <div class="col-lg-9 col-sm-offset-1">
        <div class="panel panel-danger">
          <div class="panel-heading">
          <center><LEGEND>Create post</LEGEND></center>
          </div>
          <div class="panel-body bg-warning">
            <div class="row">
          <div class="col-sm-6  col-xs-2  col-sm-offset-2">
            <textarea cols="40" rows="3" name="postname" placeholder="whats on ur mind ??" class="form-control" required></textarea>
        
            
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-sm-6  col-xs-2  col-sm-offset-2">
            <input type="file" class="form-control" name="image">
          </div>
        </div>
          <br>
        <div class="row">
          <div class="col-sm-2  col-xs-2  col-sm-offset-4">
            
            <center><input type="submit" value="Post" class="form-control btn-primary btn-(size) col-sm-11"></center>
          </div>
        </div>  
          </div>
          <div class="panel-footer bg-danger">
            
          </div>
        </div>
        </div>
      </div>
      </div>


    <?php
            if(isset($_POST['postname']))
            {

             $postname=$_POST['postname'];
  

             //$image=$_POST['image'];

             date_default_timezone_set("Asia/Kolkata");
              $time=date("d-m-Y-hms");
              $file_exists=array("JPG","jpeg","png","JPEG","jpg");
             $upload_exists = end (explode('.', $_FILES['image']["name"])); 
             $newname="$postname$time"."_photo.".$upload_exists;
              $targetfile='wallpost/'.$newname; 
              move_uploaded_file($_FILES["image"]["tmp_name"],$targetfile);
            //echo "<br>";

             include("conn.php");
            $query="insert into wallpost values('id', '".$postname."', '".$_SESSION['user']."', '".$targetfile."','' ) ";

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
    </div>
      <?php
           include("conn.php");
           $query="select * from wallpost order by id desc limit 7";
           $res=mysql_query($query);
           while ($row=mysql_fetch_row($res))

 {
      $id=$row[0];
      $count=$row[4];
  echo "<br>";


      echo"<form method='get'>";
    
      echo"<div class='row'>";
      echo"<div class='col-sm-9 col-sm-offset-1'>";
      
        echo"<div class='row'>";
        echo"<div class='col-sm-12 col-sm-offset-0'>";
        echo"<div class='panel panel-danger'>";
          echo"<div class='panel-heading '>";
          
            echo"$row[2]";
            
            echo"<div id='del'>";
            echo"<a href='deletepost.php?id=$row[0]'>X</a>";
           // echo"<button onclick='del(this.value)' value='$row[0]'>X</button>";
            echo"</div>";
          

          echo "</div>";
          echo"<div class='panel-body bg-warning'>";
            echo"<div class='row'>";
          echo"<div class='col-sm-9 bg-warning col-sm-offset-1'>";
           echo" <textarea cols='60' rows='4' readonly='' class='form-control' >$row[1]</textarea>";
          echo"</div>";
        echo"</div>";
        echo"<div class='row'>";
        echo"<div class='col-sm-12 col-xs-offset-3'>";
         echo"<br><a href='$row[3]' target='_blank' ><img src='$row[3]' alt='image not uploaded' style='max-height: 150px; max-width: 250px;'></a>";
        //echo "$row[3]";       
        echo"</div>";
          
        echo"</div>";
        
            
        echo"<div class='row'>";
          echo"<div class='col-sm-6 col-sm-offset-4'>";
        echo $count;    
          echo"<br>";
        

            $no_likes=count($count);
            $substringrowcount=substr($row[4], 1);//removes the first ,
            $likes=explode(",", $substringrowcount);
             if(in_array($_SESSION['id'], $likes))
             {
              echo$no_likes;
                echo ' <a href="unlike.php?id='.$id.'"class="btn btn-flat btn-default btn-sm">
              <i class="fa fa-thumbs-o-down"> 
              </i>
            Unlike</a>';
             }
             else
             {
              echo$no_likes;
             echo'<a href="likepage.php?id='.$id.'"class="btn btn-flat btn-default btn-sm">
              <i class="fa fa-thumbs-o-up"> 
              </i> 
            Like</a>';
             }
          



            echo"  ";
          echo"<button type='button' class='btn btn-default btn-sm cmntbtn' id='$id'>";
          echo"<span class='glyphicon glyphicon-comment'></span> Comment</button>";
          echo"</div>";
          echo"<br>";
          echo"<br>";



            $user=$_SESSION['user'];
             echo"<div class='row'>";
            echo"<br><br>";
             echo" <div class='col-xs-2 col-md-offset-1'>";
             echo"<input type='text' class='form-control' value='$user' readonly>";
           echo" </div>";
            echo"<div class='col-md-5 col-md-offset-0 '>";
            echo"<textarea class='form-control' rows='auto' name='comments' cols='25'></textarea>";
            echo"</div>";

            echo" <div class='col-xs-2' >";
            echo"<input type='submit' class='form-control btn-primary btn-(size)' value='Send'>";

            //echo" <div class='col-xs-3 col-md-offset-1'>";
            //echo"<input type='text' class='form-control' value='$row[0]'>";
           //echo" </div>";
            echo" </div><br>";
            echo"<input type='hidden' value='$id' id='as' name='asa'>";
            
            echo"</div>";
			echo"<br/>";            

             

            
           	$query1="SELECT * FROM comment WHERE id=$row[0] ORDER BY id desc limit 4";
          //$query1="SELECT * from comment where comid=$id order by comid asc limit ";
           //$res1=mysql_query("SELECT c.* , s.* FROM comment c,sport_post s WHERE c.comid=s.id order by comid desc");
           //$res1=mysql_query($query1);
          //$query1 = 'SELECT comment.comment, comment.comid, sport_post.id FROM comment, sport_post WHERE sport_post.id =comment.comid';

          $res1=mysql_query($query1);	
          
          
          echo"<div style='border:2px solid white; overflow-y: scroll; max-height: 220px;'>";
          echo "<div class='comments' id='comments_$id'>";
          while ( $row1=mysql_fetch_row($res1))

          {
                                  
            echo"<div class='row' >";
            echo"<br>";
            echo" <div class='col-xs-2 col-md-offset-1'>";
            //echo"<input type='text' class='form-control' value='$row1[2]' readonly>";
            echo "<b>$row1[2]</b>";
            echo" </div>";
            echo"<div class='col-md-5 col-md-offset-0 '>";
            echo"<textarea class='form-control' rows='auto' name='' readonly cols='25'>$row1[3]</textarea>";
            echo"</div>";
            //echo" <div class='col-xs-2' >";
            //echo"<input type='submit' class='form-control btn-primary btn-(size)' value='Send'>";
            //echo" </div><br>";
            echo"  </div>"; 
        
          }
 echo"</div>";   

          echo"</div> ";
            echo"</div> "; 
            echo"</div>";

          

          
          echo"<div class='panel-footer bg-danger'>";     
          echo"</div>";
          echo"</div>";
          echo"</div>";
          echo"</div>";  
          echo"</div>";
          echo" </div>";
    
      echo"</form>";
      echo"<br>";
      echo"<hr>";
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
  <?php
//echo$id+7;
  
?>

  <a href="#"><strong>Contact Details</strong> </a>
</footer>


</body>
</html>
 <?php
if(isset($_GET['comments']))
            {
              //$id1="<script>document.getElementById('as').value</script>";
 include("conn.php");

                           $comments=$_GET['comments'];
         echo $queryc="insert into comment values('','$_REQUEST[asa]', '".$_SESSION['user']."', '".$comments."' )";          
          $resc=mysql_query($queryc);
          header("location:adminhome.php");
        }
 ?>  

