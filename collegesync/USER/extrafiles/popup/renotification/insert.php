  <?php
  	if(isset($_POST["subject"]))
    {
     include("connect.php");
     $subject = $_POST['subject'];
     $comment = $_POST['comment'];
     $query = "INSERT INTO `comments`(`comment_subject`, `comment_text`) VALUES ('$subject','$comment')";
     $res=mysqli_query($connect, $query);
    }
  ?>