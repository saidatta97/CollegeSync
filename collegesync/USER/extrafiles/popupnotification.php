<!DOCTYPE html>
<html>
<head>
	<title>pop up</title>
	<style type="text/css">
		#notification {
    position:fixed;
    top:0px;
    width:100%;
    z-index:105;
    text-align:center;
    font-weight:normal;
    font-size:14px;
    font-weight:bold;
    color:white;
    background-color:#FF7800;
    padding:5px;
}
#notification span.dismiss {
    border:2px solid #FFF;
    padding:0 5px;
    cursor:pointer;
    float:right;
    margin-right:10px;
}
#notification a {
    color:white;
    text-decoration:none;
    font-weight:bold
}

#popup { background:#ccc; -moz-border-radius: 10px; width:300px; height: 200px; padding: 5px; position: absolute; left: 50%; margin-left: -150px; z-index: 500; display:none }
#topbar { background:#ddd; -moz-border-radius: 10px; padding:5px; height:20px; line-height:20px }
#content { padding:5px; -moz-border-radius: 10px; text-align:center }
#ok { position: absolute; left: 140px; top: 180px }


	</style>
	<script type="text/javascript">
		$("#notification").fadeIn("slow").append('your message');
		$(".dismiss").click(function(){
       	$("#notification").fadeOut("slow");

	</script>
	<script type="text/javascript">
		$(document).ready(function() {
  $(".dismiss").click(function(){$("#notification").fadeOut("slow");});

  setInterval(function() {
    $.get("ping.jsp?userid=<%= userID %>",function(message) {
      if (message) $("#notification").fadeIn("slow").html(message);
    });
   
});

	</script>
	<script type="text/javascript">
		$(function(){
    $('#pop').click(function(){
        $('#popup').fadeIn().css('top',$(document).height()/2);
    });
    $('#ok').click(function(){
        $('#popup').fadeOut();
    });
});

	</script>
</head>
<body>

	<div id="notification" style="display: none;">
  		<span class="dismiss"><a title="dismiss this notification">x</a></span>
	</div>

	<br>
	<br>
	<input type="button" id="pop" value="Submit"/>
<div id="popup">
  <div id="topbar"> TITLE..</div>
  <div id="content">Here is you content...</div>
  <input type="button" id="ok" value="OK"/>
</div>


</body>
</html>
