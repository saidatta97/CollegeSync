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
  </style>
</head>
<body style="background:  #B0C4DE;">
<?php
include("nav.php");
?>

<?php
include("leftside1.php");     
?>
    <div class="col-sm-8 text-left"> 
    	<u><h1>LIST OF USEFUL LINKS:</h1></u>
    <h2>caculocollege</h2>
<p>Sridora Caculo College of Commerce &  Management Studies (SCCCMS) is the rechristened name of Saraswat Vidyalaya's College of Commerce &Management Studies.Located at Mapusa (15km from Panaji, the Capital of Goa), the institute is part of one of the oldest Educational Societies in Goa, Saraswat Educational Society and is affiliated to Goa University. The Institute takes immense pride in the fact that it is considered as one of the pioneers in Commerce and Management Education in Goa and its students have been commended as some of the better human resources by the corporate world.<a href="https://www.caculocollege.ac.in/" target="_blank">Click Here To Visit</a></p>

   <h2>w3schools</h2>  
<p>
Learn HTML Learn CSS Learn W3.CSS Learn Colors Learn Bootstrap 3 Learn Bootstrap 4 Learn 
Icons Learn Graphics Learn How To. JavaScript. Learn JavaScript Learn jQuery Learn AngularJS 
Learn JSON Learn AJAX. Server Side. Learn SQL Learn PHP Learn ASP Learn Node.js Learn Raspberry 
Pi. Web Building. <a href="https://www.w3schools.com/" target="_blank">Click Here To Visit</a>
   </p>
     <h2>Goa University</h2>
 <p>Goa University was established under the Goa University Act of 1984 (Act No. 7 of 1984) and 
 	commenced operations on 1 June 1985. The university provides higher education in the Indian 
 	state of Goa. It is located on Taleigao Plateau overlooking Zuari estuary on a picturesque 
 	campus spread over 427.49 acres with state-of-the art infrastructure such as faculty blocks, 
 	administrative building, library, sports facilities, student hostels, bank, post-office, staff 
 	quarters, etc. A campus-wide Internet connectivity with strong bandwidth is available for all
 	 24 hours a day.  <a href="https://www.unigoa.ac.in//" target="_blank">Click Here To Visit</a>
 </p>
     <h2> Stack Overflow</h2>
 <p>
 	Founded in 2008, Stack Overflow is the largest, most trusted online community for developers 
 	to learn, share their knowledge, and build their careers. More than 50 million professional 
 	and aspiring programmers visit Stack Overflow each month to help solve coding problems, develop
 	 new skills, and find job opportunities.
	 Stack Overflow partners with businesses to help them understand, hire, engage, and enable the 
	 world's developers. Our products and services are focused on developer marketing, technical 
	 recruiting, market research, and enterprise knowledge sharing<a href="href="https://stackoverflow.com/" target="_blank">Click Here To Visit</a>
 </p>
     <h2> Coursea</h2>
     <p>
     	Every course on Coursera is taught by top instructors from the world’s best universities and educational institutions. Courses include recorded video lectures, auto-graded and peer-reviewed assignments, and community discussion forums. When you complete a course, you’ll receive a sharable electronic Course Certificate.
     	<a href="https://www.coursera.org//" target="_blank">Click Here To Visit</a>
     </p>

<div>
 </div>
   
    </div>
    
<?php
include("rightside.php");
?>    
<?php
include("footer.php");
?>



</body>

</html>
 
