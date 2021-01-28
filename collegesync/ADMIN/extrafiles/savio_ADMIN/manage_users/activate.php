<?php
session_start();
if(!isset($_SESSION['user']))
{
header("location:login.php");
}
?>
<?php
  include("../conn.php");
?>

<?php
	
		// $query="delete from col_registration where REG_ID=".$_GET['id'];
		$query="UPDATE col_registration SET status=1 WHERE REG_ID=".$_GET['id'];
		//$res=mysql_query($query);
			if($res=mysql_query($query))
			{
				echo "record activated succesfully";
				header("location:../view.php");
			}
				else
					{
						echo"record not deleted";
						
					}
?>