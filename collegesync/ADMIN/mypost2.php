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


    #del
    {
      float:right;
    }
  </style>

</head>
<body style="background:  #B0C4DE;">
<?php
include("nav.php");
  include("leftside1.php");
?>



    <div class="col-sm-8 text-left">
<br> 
     
    <?php
          $id=$_GET['id'];
           include("conn.php");
           $query="select * from wallpost where REG_ID='$id' order by id desc";
           $res=mysql_query($query);
           while ($row=mysql_fetch_row($res))
{  
  $user=$_SESSION['user'];
      $id=$row[0];
      //$count=$row[4];
  echo "<br>";


      echo"<form method='get'>";
    
      echo"<div class='row'>";
      echo"<div class='col-sm-9 col-sm-offset-1'>";
      
        echo"<div class='row'>";
        echo"<div class='col-sm-12 col-sm-offset-0'>";
        echo"<div class='panel panel-danger'>";
          echo"<div class='panel-heading '>";
          
            echo"$row[3]";
            if($user==$row[3])
            {
            echo"<div id='del'>";
            echo"<a href='deletepost.php?id=$row[0]'>X</a>";
           // echo"<button onclick='del(this.value)' value='$row[0]'>X</button>";
            echo"</div>";
          }


            echo"<div>";
            echo"<h6>$row[6]</h6>";
            echo"</div>";
          
          echo "</div>";
          echo"<div class='panel-body bg-warning'>";
            echo"<div class='row'>";
          echo"<div class='col-sm-9 bg-warning col-sm-offset-1'>";
           echo" <textarea cols='60' rows='4' readonly='' class='form-control' >$row[2]</textarea>";
          echo"</div>";
        echo"</div>";
        echo"<div class='row'>";
        echo"<div class='col-sm-12 col-xs-offset-3'>";
         echo"<br><a href='../USER/$row[4]' target='_blank' ><img src='../USER/$row[4]' alt='image not uploaded' style='max-height: 150px; max-width: 250px;'></a>";
        //echo "$row[3]";       
        echo"</div>";
          
        echo"</div>";
        
            
        echo"<div class='row'>";
          echo"<div class='col-sm-6 col-sm-offset-4'>";
        //echo $count;    
          echo"<br>";
        

            //$no_likes=count($count);
            $substringrowcount=substr($row[5], 1);//removes the first ,
            $likes=explode(",", $substringrowcount);
             if(in_array($_SESSION['id'], $likes))
             {
              //echo$no_likes;
                echo ' <a href="" class="btn btn-flat btn-default btn-sm">
              <i class="fa fa-thumbs-o-down"> 
              </i>
            Unlike</a>';
             }
             else
             {
              //echo$no_likes;
             echo'<a href="" class="btn btn-flat btn-default btn-sm">
              <i class="fa fa-thumbs-o-up"> 
              </i> 
            Like</a>';
             }
          



            echo"  ";
          echo"<button type='button' class='btn btn-default btn-sm cmntbtn' id='$id'>";
          echo"<span class='glyphicon glyphicon-comment'></span> Comment</button>";
          echo"</div>";
          


            $user=$_SESSION['user'];
             echo"<div class='row'>";
            echo"<br><br>";
             echo" <div class='col-xs-2 col-md-offset-1'>";
            // echo"<input type='text' class='form-control' value='$user' readonly>";
           echo" </div>";
            echo"<div class='col-md-5 col-md-offset-0 '>";
            //echo"<textarea class='form-control' rows='auto' name='comments' cols='25'></textarea>";
            echo"</div>";

            echo" <div class='col-xs-2' >";
            //echo"<input type='submit' class='form-control btn-primary btn-(size)' value='Send'>";

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
               include("conn.php");
       
            $query3="SELECT * from col_registration where REG_FIRSTNAME='$row1[2]'";
            $res3=mysql_query($query3);
            $row3=mysql_fetch_row($res3);
                           
            echo"<div class='row' >";
            echo"<br>";
            echo" <div class='col-xs-2 col-md-offset-1'>";
            ?>

            <img src=" ../USER/<?php  echo $row3[12];?> " alt='No profile'  style="max-width: 70px; max-height: 70px;" class="img img-responsive img-circle">
            <?php
            //echo'<img src="../USER/$row3[12]" alt="no profile"  style="max-width: 70px; max-height: 70px;" class="img img-responsive img-circle">';
            
            //echo"<input type='text' class='form-control' value='$row1[2]' readonly>";
            echo "<center><b>$row1[2]</b></center>";
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
         echo $queryc="insert into comment values('','$_REQUEST[asa]', '".$_SESSION['user']."', '".$comments."' )";          
          $resc=mysql_query($queryc);
          header("location:home.php");
        }
 ?>  
