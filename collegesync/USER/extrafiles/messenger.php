<?php
//setcookie('name','saidatta',time()-5,'/');
// for deleting cookie => set_cookie('name','saidatta',time()-10,'/');
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
<html>
<head>
	<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
<meta content="utf-8" http-equiv="encoding">
	<title>CollegeSYNC|| Messenger</title><!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
	<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>-->
	<script src="jquery-3.2.1.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	
	  <!-- <link href="lib/css/emoji.css" rel="stylesheet"> -->
  
    <script type="text/javascript">
    	
      $(document).ready(function(){
    				
    		$("#sendmsg").click(function(){

    			var val=document.getElementById('message').value;
    			
    			sendmsg(val);
    			document.getElementById('message').value="";
    		});

    		
    	});
    	
  		function fetchmsgs(val)
{
  
 //document.getElementById("uname").innerHTML=document.getElementById("name"+val).value;
  document.getElementById("receiver").value=val;
   //document.getElementById("uname").innerHTML=document.getElementById("name").value;
       if(val!="")
       {
       		  $.ajax(
        {
            type:"GET",
            url:"fetchmsgs.php",
            data:'id='+val,
            success:function(data)
            {
             
             $(".direct-chat-messages").html(data);
            }
        });
       }     

}
    	function sendmsg(msg)
     {
    //  var msg=document.getElementById("message").value;
      var receiver=document.getElementById("receiver").value;
       $.ajax(
        {
            type:"GET",
            url:"sendmsg.php",
            data:'receiver='+receiver+'&message='+msg,
            success:function(data)
            {
                       fetchmsgs(receiver);
                       document.getElementById("message").value="";

        }
        });
     }

    </script>
</head>
<body onload="fetchmsgs(document.getElementById('receiver').value)">
	
  
  
</div>
	<?php
		include ("nav.php");
	?>

	
<div class="container" style="border:1px solid blue;">
	<div class="row">
		<div class="col-sm-4" style="border:1px solid red;max-height: 536px;overflow-y: scroll;">
			<br>
			<div class="panel panel-success col-sm-10 col-sm-offset-1" style=" ">
				  <div class="panel-body">
				  	<legend style="background: #494949;color: #fff;"><center>Contacts</center></legend>

				  </div>
			</div>
			<br><br><br><br><br>
		<?php
			mysql_connect("localhost","root","")or die("could not connect to server");
          mysql_select_db("collegesync1")or die("database not found");
          $sql="select * from col_registration ";
          $res=mysql_query($sql);
          while($row=mysql_fetch_row($res))
          {
          	if($row[0]!=$_SESSION['id'])
          	{
          		
            
          		echo'
          		<a href="messenger.php?id='.$row[0].'">
          		<div class="panel panel-success">';

          		if (strpos($row[12], '.jpg') !== false) {
          			echo'
          			<div class="panel-body" style="border:1px solid red"><img alt="no_image.png" src="'.$row[12].'" style="max-height:50px;max-width:50px;border-radius:100%;border:1px solid blue;float:left;" >
          			<div><div style=" padding:15px;margin-left:40px;">' . $row[1].' '.$row[2].'</div></div>';
          		}
          		else
          		{
         			echo'
          			<div class="panel-body" style="border:1px solid red"><img alt="no_image.png" src="no_image.png" style="max-height:50px;max-width:50px;border-radius:100%;border:1px solid blue;float:left;" >
          			<div><div style=" padding:15px;margin-left:40px;">' . $row[1].' '.$row[2].'</div></div>';
          			
          		}
				  
				    $selectcount="select * from message_status where SENDER_ID=$row[0] and RECEIVER_ID=".$_SESSION['id'];
				   $rescount=mysql_query($selectcount);
				  $count=mysql_num_rows($rescount);
				  
				  if($count>0)
				  {
				  	echo'<span class="btn btn-success btn-xs pull-right">'.$count.'</span>';
				  }
				   
				

				  echo'</div>

			</div></a>
          	';
          	}
          	
          }
		?>
			
		</div>
		<div class="col-sm-8" style="border:1px solid;">
			<div class="row">
				<div class="">
					<?php
					if(isset($_GET['id']))
					{
						 $sqlname="select * from col_registration where REG_ID=".$_GET['id'];
				          $resname=mysql_query($sqlname);
				          $rowname=mysql_fetch_row($resname);

					}
					else
					{
						$rowname[1]="Please select ";
						$rowname[2]="the Contact";
					}
						
				          echo"<legend class='col-sm-12' style='background:#494949;color:#fff'>$rowname[1]"." "."$rowname[2]</legend>";
					
					?>
				</div>
			</div>
			<div class="row" style=" max-height: 415px;overflow-y: scroll;min-height:415px;  ">
				<div class="col-sm-12 direct-chat-messages" >
					
					
					
				</div>
				
			</div>
			<?php
			if(isset($_GET['id']))
			{

				?>
			<div class="row">
				<div class="col-sm-12">
					<div class="row">
						<div class="col-sm-9">
						<input type="hidden" id="receiver" value="<?php if(isset($_GET['id'])){echo $_GET['id'];} ?>">
							<p class="lead emoji-picker-container">
			            <input type="text" class="form-control" name="message" id="message" placeholder="Enter your Message Here">
			            </p>
						</div>
						<div class="col-sm-1">
							
							<button type="button"  id="sendmsg" class="btn btn-default btn-sm">
          							<span class="glyphicon glyphicon-send"></span> Send 
        					</button>
								</div>
						<div class="col-sm-1">
							<br>


    </div>
						
					</div>
							
			            
          
				</div>
			</div>
			<?php
		}
		?>
		</div>
		
	</div>
	
</div>

    
   
</body>
</html>