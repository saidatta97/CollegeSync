
<?php
error_reporting(0);
session_start();
  $extra=$_SESSION['id'];
  $id=$_GET['id'];

 include("conn.php");
        $sql="select * from message where ((MSG_SENDER=".$_SESSION['id']." and MSG_RECEIVER=".$_GET['id']." ) or (MSG_SENDER=".$_GET['id']." and MSG_RECEIVER=".$_SESSION['id']." )) order by MSG_TIME";
       $res=mysql_query($sql);
       $del="delete from message_status where (RECEIVER_ID=$extra and SENDER_ID=$id)";
        mysql_query($del);
     


      while($row=mysql_fetch_row($res))
       {
      
                           
                         
        if($row[1]==$_SESSION['id'])
        { 
                         echo'<div class="row  ">
            <div class=" bg-success col-sm-8 sender pull-right ">
            ';
            //echo$row[5];
            
             $str = $row[3];
            
                echo$str;
             
            echo'
            </div>
          </div><br>
          ';        
        }
        else
        {

        echo '
                <div class="row ">
            <div class="bg-warning col-sm-8 receiver pull-left">
             ';
             $str = $row[3];
                echo$str;
             echo'
            </div>
          </div><br>';
        }
       }
?>

