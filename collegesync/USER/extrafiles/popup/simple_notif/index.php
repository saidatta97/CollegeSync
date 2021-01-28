<?php
	include('conn.php');
?>
<!DOCTYPE html>
<html lang = "en">
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<title>PHP Fb-like Notification using AJAX Bootstrap</title>
	</head>
<body>
	<nav class="navbar navbar-default">
    <div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="#">nurhodelta_17</a>
		</div>
		<ul class="nav navbar-nav navbar-right">
			<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="label label-pill label-danger count" style="border-radius:10px;"></span> <span class="glyphicon glyphicon-globe" style="font-size:18px;"></span></a>
				<ul class="dropdown-menu"></ul>
			</li>
		</ul>
    </div>
	</nav>
	<div style="height:10px;"></div>
	<div class="row">	
		<div class="col-md-3">
		</div>
		<div class="col-md-6 well">
			<div class="row">
                <div class="col-lg-12">
                    <center><h2 class="text-primary">PHP Fb-like Notification using AJAX Bootstrap</h2></center>
					<hr>
				<div>
					<form class="form-inline" method="POST" id="add_form">
						<div class="form-group">
							<label>Firstname:</label>
							<input type="text" name="firstname" id="firstname" class="form-control">
						</div>
						<div class="form-group">
							<label>Lastname:</label>
							<input type="text" name="lastname" id="lastname" class="form-control">
						</div>
						<div class="form-group">
							<input type="submit" name="addnew" id="addnew" class="btn btn-primary" value="Add">
						</div>
					</form>
				</div>
                </div>
            </div><br>
			<div class="row">
			<div id="userTable"></div>
			</div>
		</div>
		<div class = "col-md-3">
		</div>
	</div>
</body>
<script type = "text/javascript">
$(document).ready(function(){
	
	function load_unseen_notification(view = '')
	{
		$.ajax({
			url:"fetch.php",
			method:"POST",
			data:{view:view},
			dataType:"json",
			success:function(data)
			{
			$('.dropdown-menu').html(data.notification);
			if(data.unseen_notification > 0){
			$('.count').html(data.unseen_notification);
			}
			}
		});
	}
 
	load_unseen_notification();
 
	$('#add_form').on('submit', function(event){
		event.preventDefault();
		if($('#firstname').val() != '' && $('#lastname').val() != ''){
		var form_data = $(this).serialize();
		$.ajax({
			url:"addnew.php",
			method:"POST",
			data:form_data,
			success:function(data)
			{
			$('#add_form')[0].reset();
			load_unseen_notification();
			}
		});
		}
		else{
			alert("Enter Data First");
		}
	});
 
	$(document).on('click', '.dropdown-toggle', function(){
	$('.count').html('');
	load_unseen_notification('yes');
	});
 
	setInterval(function(){ 
		load_unseen_notification();; 
	}, 5000);
 
});
</script>
</html>