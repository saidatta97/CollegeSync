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
<?php     if (strpos($row[7], '.jpg') !== false) {
               
                echo"<img src='$row[7]' style='max-width: 170px; max-height: 170px;' class='img img-responsive img-circle'>";
               
               
              }
              else
              {
                echo"<img src='../USER/userdp/no_image.png'    class='img img-responsive img-circle'>";
               
               
                
              }
          ?>                  <br>
    
            </div>
            
          </div>
          <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
            <strong><?php echo$row[3]; ?></strong>
          </div>
          </div>
        </div>
      </div>
    <br>



    <br>
         <button type="button" class="btn btn-default btn-lg"><li class="dropdown glyphicon glyphicon-user">
          <a class="dropdown-toggle" data-toggle="dropdown" href="view.html">Notes Gallery<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="fynotesgallery.php">Images</a></li>
            <li><a href="fynotesfiles.php">Files</a></li>
          </ul>
        </li>
        </button>
        <br>
        <br>
       <u> <a><h4 id="wall" >Upload Notes</h4></a></u>
    </div>


    <div class="col-sm-8 text-left"> 
      <br>
       <div id="post">
      <form method="POST" enctype="multipart/form-data">
       <div class="row">
  <div class="col-sm-offset-2 col-sm-8">
  <div class="panel panel-danger"] >
  <div class="panel-heading">
    <div class="row">
      <div class="col-sm-4 col-sm-offset-4">
      <center><h1><strong> Notes</strong></h1></center>
      </div>
      </div>
      </div>
     
   
     
      <div class="panel-body bg-warning" >
      <div class="row">
      <div class="col-sm-6 col-sm-offset-2">
        <label><strong>Class</strong></label>
        <select class="form-control" name="clas">
          <option selected="">FY</option>
          <option >SY</option>
          <option >TY</option>
          <option>ALL</option>
        </select>  
        </div>
        </div>


       <div class="row">
      <div class="col-sm-6 col-sm-offset-2">
              <label><br/><strong>Description</strong></label><br/>
              <center><textarea class="form-control" rows="auto" name="des"></textarea ><br/>
              <input type="file" name="photo" id="photo" value="upload notice" class="form-control"></center>
        </div>
      </div>

       <div class="row">
      <div class="col-sm-2 col-sm-offset-2">
              <label><br/><strong>RATING</strong></label><br/>    
        </div><br>
        <div class="col-sm-4 col-sm-offset-0">
        <select class="form-control" name="rating">
          <option selected="">NOT IMP</option>
          <option>IMP</option>
        </select>  
        </div>
      </div>

      </div>
      
      <div class="panel-footer bg-danger" >
    
          
        <div class="row">
        <div class="col-sm-3 col-sm-offset-4">
           <input type="submit" id="submit" name="submit" class="form-control btn-primary btn-(size)" value="Send">
        </div>
        </div>
        

      </div>
      </div></div>
      </div>
    
      <br/><br/><br/>

      <?php
       include("conn.php");
             if(isset($_POST['des']))
            {


             $clas=$_POST['clas'];
             $des=$_POST['des'];
             $rating=$_POST['rating'];
             //$date = date('Y-m-d H:i:s');
              
              if(isset($_POST['submit'])!=""){
  $name=$_FILES['photo']['name'];
  $size=$_FILES['photo']['size'];
  $type=$_FILES['photo']['type'];
  $temp=$_FILES['photo']['tmp_name'];
  $caption1=$_POST['caption'];
  $link=$_POST['link'];
  move_uploaded_file($temp,"../USER/fynotes/".$name);
$insert=mysql_query("insert into notes values('notes_id', '".$_SESSION['user']."', '".$clas."', '".$des."', '".$rating."', '".$name."' ,now())");
if($insert){
header("location:fynotes.php");
}
else{
die(mysql_error());
}
}


             //$image=$_POST['image'];

             echo "<br>";

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

      <br/>

      <?php
      $user=$_SESSION['user'];
          include("conn.php");
            $select=mysql_query("select * from notes where `clas`='FY' order by notes_id desc limit 7");
            while($row1=mysql_fetch_array($select)){
          $name=$row1[5];

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
      <b>$row1[1]</b>&nbsp
      
      </div>
      </div>
      </div>
     
      <div class='panel-body bg-warning' >
      <div class='row'>
      <div class='col-sm-6 col-sm-offset-2'>
        <label class='pull-center'><strong>Class</strong></label>
        <input type='text' class='form-control' value='$row1[2]' disabled>
        </div>
        </div>


       <div class='row'>
      <div class='col-sm-9 col-sm-offset-2'>
              <label><br/><strong>Description</strong></label><br/>
              <center><textarea class='form-control' rows='3' disabled>$row1[3]</textarea ><br/>
              </center>
        </div>
      </div>
      <div class='row'>
        <div class='col-xs-6 col-sm-offset-3'>";

        if (strpos($row1[5], '.jpg') !== false || strpos($row1[5], '.jpeg') !== false || strpos($row1[5], '.png') !== false) {
   


        echo"<a href='../USER/fynotes/$row1[5]' target='_blank' ><img src='../USER/fynotes/$row1[5]' alt='$name' style='width: 170px; height: 170px;'/></a><br>";
      }
        if (strpos($row1[5], '.doc') !== false || strpos($row1[5], '.pptx') !== false || strpos($row1[5], '.pdf') !== false) {
          echo"<a href='../USER/fynotes/$row1[5]' target='_blank' ><span  class='glyphicon glyphicon-download' style='font-size:20px;'></span><em>$name</em></a><br>";
 
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
   <?php
include("rightside.php");
?>    
<?php
include("footer.php");
?>


</body>
</html>
  