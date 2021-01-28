<div class="col-sm-2 sidenav">
      <div class="well">
        <a href="upcomingevent.php"><strong>Upcoming Events</strong></a>
      </div>
      <div class="well">
        <a href="impnotes.php"><strong>Impotrant Notes</strong> </a>
      </div>
      <b>Friends online</b>
      <br>
      <?php
      $query5="select * from col_registration where online=1 ";
		$res5=mysql_query($query5);
		echo"<table>";
		while ($row=mysql_fetch_row($res5))

				{ 
					$count=mysql_num_rows($res5);
					if($count<=1)
					{

						echo "No Friend Online";
					}
						if($row[0]!=$_SESSION['id'])
					
          			{
          			echo"<tr>";
					echo"<td>";echo"<span class='dot'></span>";echo"</td>";
					echo"<td>";echo $row[1]." ".$row[2];echo"</td>";
					
					echo"</tr>";
					}
				}
				echo"</table>";

      ?>
    </div>
  </div>
</div>
