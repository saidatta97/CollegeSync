<!DOCTYPE html>
<html>
	<head>
		<script type="text/javascript" src="../../js/bootstrap.min.js"></script>
		<script type="text/javascript" src="../../js/jquery.min.js"></script>
		<script type="text/javascript" src="../../js/sample-registration-form-validation.js"></script>
		<link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
		
		<title>sign up</title>
		<script type="text/javascript">
      $(function() {

         $("#fname_error_message").hide();
         $("#sname_error_message").hide();
          $("#email_error_message").hide();
          $("#mobile_error_message").hide();

         $("#password_error_message").hide();
         $("#retype_password_error_message").hide();

         var error_fname = false;
         var error_sname = false;
          var error_email = false;
          var error_mobile = false;
         var error_password = false;
         var error_retype_password = false;

         $("#form_fname").keyup(function(){
            check_fname();
         });
         $("#form_sname").keyup(function() {
            check_sname();
         });
          $("#form_email").keyup(function() {
             check_email();
          });
          $("#form_mobile").keyup(function() {
             check_mobile();
          });
         $("#form_password").keyup(function() {
            check_password();
         });
         $("#form_retype_password").keyup(function() {
            check_retype_password();
         });

         function check_username()
         {
         	var uname = $("#username").val();
         	<?php

         		
         	?>
         } 

         function check_fname() {
            var pattern = /^[a-zA-Z]*$/;
            var fname = $("#form_fname").val();
            if (pattern.test(fname) && fname !== '') {
               $("#fname_error_message").hide();
               $("#form_fname").css("border","2px solid #34F458");
            } else {
               $("#fname_error_message").html("Should contain only Characters");
               $("#fname_error_message").show();
               $("#form_fname").css("border","2px solid #F90A0A");
               error_fname = true;
            }
         }

         function check_sname() {
            var pattern = /^[a-zA-Z]*$/;
            var sname = $("#form_sname").val()
            if (pattern.test(sname) && sname !== '') {
               $("#sname_error_message").hide();
               $("#form_sname").css("border","2px solid #34F458");
            } else {
               $("#sname_error_message").html("Should contain only Characters");
               $("#sname_error_message").show();
               $("#form_sname").css("border","2px solid #F90A0A");
               error_fname = true;
            }
         }

         function check_password() {
            var password_length = $("#form_password").val().length;
            if (password_length < 4) {
               $("#password_error_message").html("Atleast 4 Characters");
               $("#password_error_message").show();
               $("#form_password").css("border","2px solid #F90A0A");
               error_password = true;
            } else {
               $("#password_error_message").hide();
               $("#form_password").css("border","2px solid #34F458");
            }
         }

         function check_retype_password() {
            var password = $("#form_password").val();
            var retype_password = $("#form_retype_password").val();
            if (password !== retype_password) {
               $("#retype_password_error_message").html("Passwords Did not Matched");
               $("#retype_password_error_message").show();
               $("#form_retype_password").css("border","2px solid #F90A0A");
               error_retype_password = true;
            } else {
               $("#retype_password_error_message").hide();
               $("#form_retype_password").css("border","2px solid #34F458");
            }
         }

         function check_email() {
            var pattern = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            var email = $("#form_email").val();
            if (pattern.test(email) && email !== '') {
               $("#email_error_message").hide();
               $("#form_email").css("border","2px solid #34F458");
            } else {
               $("#email_error_message").html("Invalid Email");
               $("#email_error_message").show();
               $("#form_email").css("border","2px solid #F90A0A");
               error_email = true;
            }
         }

         	function check_mobile() {
            var pattern = /^(\+\d{1,3}[- ]?)?\d{10}$/;
            var mobile = $("#form_mobile").val();
            if (pattern.test(mobile) && mobile !== '') {
               $("#mobile_error_message").hide();
               $("#form_mobile").css("border","2px solid #34F458");
            } else {
               $("#mobile_error_message").html("Invalid Mobile Number");
               $("#mobile_error_message").show();
               $("#form_mobile").css("border","2px solid #F90A0A");
               error_mobile = true;
            }
         }


        	 $("#registration_form").submit(function() {
            error_fname = false;
            error_sname = false;
             error_email = false;
              error_mobile = false;
            error_password = false;
            error_retype_password = false;

            check_fname();
            check_sname();
             check_email();
             check_mobile();
            check_password();
            check_retype_password();

            if (error_fname === false && error_sname === false && error_email === false && error_mobile === false && error_password === false && error_retype_password === false) {
               //alert("Registration Successfull");
               return true;
             } 
             // else {
            //    alert("Please Fill the form Correctly");
            //    return false;
            // }


         });
      });
   </script>


	</head>
	<body style="background-color:#FFFFCC;" >
		<?php
			include("step1_background/background.php");
		?>
		<!-- color code=#FFFFCC -->
		<div style="margin-top: 100px;margin-right: 70px;background-color:#FFFFCC ;">
	<form method="POST" action="../../register.php" name="registration_form" enctype="multipart/form-data">
		<div class="container-fluid">
			<div class="row "><br>
				<div class="col-sm-6 col-sm-offset-3">
					<div class="panel panel-success">
					<div class="panel-heading bg-warning "><center style="font-size: 20px;"><b>Create New Account</b></center></div>
					<div class="panel-body bg-danger">
					
				<div class="row">
					<div class=" col-sm-3 col-sm-offset-1 col-lg-3 col-sm-offset-1">
					<label>Name</label>	
					</div>
					<div class=" col-sm-3 col-sm-offset-0">
					<input type="text" name="firstname"  id="form_fname" placeholder="first name" class="form-control" required="" >
					<span class="error_form" id="fname_error_message"></span>
				
					</div>	
					<div class=" col-sm-3 col-sm-offset-0">
					<input type="text" name="lastname" id="form_sname" placeholder="last name" class="form-control" required>	
					<span class="error_form" id="sname_error_message"></span>
				
					</div>
				</div>

				<br><div class="row">
					<div class=" col-sm-3 col-sm-offset-1">
					<label>Profile pic</label>	
					</div>
					<div class=" col-sm-6 col-sm-offset-0">
					<input type="file" name="image" class="form-control"><br>
					</div>
				</div>

				<div class="row">
					<div class=" col-sm-3 col-sm-offset-1">
					<label>E-mail id</label>	
					</div>
					<div class=" col-sm-6 col-sm-offset-0">
					<span class="error_form" id="email_error_message"></span>
					
					<input type="E-mail" name="email" id="form_email" class="form-control"><br>
					</div>
				</div>	

				

		<div class="row">
				<div class="col-sm-3 col-sm-offset-1" >
				<label>Class</label>
				</div>
				<div class="col-sm-6 col-sm-offset-0">
				<select name="class" class="form-control" required>
					<option>FY</option>
					<option>SY</option>
					<option>TY</option>
				</select><br>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-3 col-sm-offset-1" >
				<label>University No</label>
				</div>
				<div class="col-sm-6 col-sm-offset-0" >
				<input type="Number" name="university" class="form-control" required><br>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-3 col-sm-offset-1" >
				<label>Address</label>
				</div>
				<div class="col-sm-6 col-sm-offset-0" >
				<textarea cols="30" rows="2" name="address"  class="form-control" required> </textarea><br>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-3 col-sm-offset-1" >
				<label>Mobile No</label>
				</div>
				<div class="col-sm-6 col-sm-offset-0" >
				<span class="error_form" id="mobile_error_message"></span>
				
				<input type="Number" name="mobile" id="form_mobile" required class="form-control" maxlength="10"><br>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-3 col-sm-offset-1" >
				<label>Gender</label>
				</div> 
				<div class="col-sm-3 col-sm-offset-0">
				<label>Male<input class="form-control" type="radio" name="gender" value="male"></label>
				</div>
				<div class="col-sm-3 col-sm-offset-0">
				<label>Female<input class="form-control" type="radio" name="gender" value="female"></label><br>
				</div>
			</div>

			<div class="row">
				<div class=" col-sm-3 col-sm-offset-1" >
				<label>DOB</label>
				</div>
				<div class=" col-sm-6 col-sm-offset-0" >
				<input class="form-control" type="date" name="dob"><br>
				</div>
			</div>

			<div class="row">
					<div class=" col-sm-3 col-sm-offset-1">
					<label>Username</label>	
					</div>
					<div class=" col-sm-6 col-sm-offset-0" >
					<input class="form-control" type="text" name="username" id="username" required><br>
					</div>
				</div>

		<div class="row">
			<div class=" col-sm-3 col-sm-offset-1">
			<label> Password</label>	
			</div>
			<div class=" col-sm-6 col-sm-offset-0">
			<span class="error_form" id="password_error_message"></span>
			<input type="Password" name="pwd" id="form_password" class="form-control" required><br>
			</div>
		</div>

			<div class="row">
			<div class=" col-sm-3 col-sm-offset-1">
			<label>Confirm Password</label>	
			</div>
			<div class=" col-sm-6 col-sm-offset-0">
			<span class="error_form" id="retype_password_error_message"></span>
			<input type="Password" id="form_retype_password" name="pwd" class="form-control" required><br>
			</div>
		</div>


<br>
			<div class="row">
				<div class=" col-sm-3 col-sm-offset-4">
					<input type="submit" name="submit" value="Submit" class=" form-control btn-lg btn-primary">
				</div>
			</div>			
		</div>
		</div>
		</div>
		</div>
		</div>
		</div>

		
				</form>
			

		</div>
		
	</body>
</html>

<?php
// if(isset($_POST['firstname']))
// {

// $first=$_POST['firstname'];
// $last= $_POST['lastname'];
// $class= $_POST['class'];
// $uni= $_POST['university'];
// $address= $_POST['address'];
// $mobile= $_POST['mobile'];
// $gender= $_POST['gender'];
// $dob=$_POST['dob'];
// $username= $_POST['username'];
// $pwd= $_POST['pwd'];
// $email=$_POST['email'];
// $status=0;

// 			date_default_timezone_set("Asia/Kolkata");
//               $time=date("d-m-Y-hms");
//               $file_exists=array("JPG","jpeg","png","JPEG","jpg");
//              $upload_exists = end (explode('.', $_FILES['image']["name"])); 
//              $newname="$time"."_photo.".$upload_exists;
//               $targetfile='../../userdp/'.$newname; 
//               move_uploaded_file($_FILES["image"]["tmp_name"],$targetfile);


//  include("../../conn.php");

//  $query1="select * from col_registration where REG_USERNAME='$username' or REG_EMAIL='$email'";
//  $res1=mysql_query($query1);
//  $row=mysql_fetch_row($res1);
//  $count=mysql_num_rows($res1);
//  if ($count>0)
//  	{
//  		echo"<script>alert('username/EMail already exists');</script>";
// 	}
// 	else
// 	{

// $query="insert into col_registration values('','".$first."','".$last."','".$email."','".$class."',$uni,'".$address."',$mobile,'".$gender."','".$username."','".$pwd."','".$dob."','".$targetfile."','".$status."')";
// if($res=mysql_query($query))
// {
// 	//echo "data inserted successfully";
// 	header("location:../fb_step2/Secret_Question1.php");
// }
// else
// {
// 	echo "something went wrong";
// }
// }
// }

?>