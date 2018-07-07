 <?php
	$title = "List";
	include "includes/header.inc.php";
	include "includes/db.inc.php";
?>
<?php
	include "includes/menu.inc.php";
?>
<div id="content">
  <h2>Student List</h2>
<?php  
$qry = "Select * from `STUDENT` ;";
$rs = $conn->query($qry);


 // Loop through the results set
   while($row = $rs->fetch_assoc()) 
   {
   	echo "<tr><td style='text-align: center;'><img src='images/".$row['IMAGE']."'></td>";
   	echo "<td style='padding-left; 10px;'><span class='links'>";
   	echo "<br></br>";
   	echo "<a href = details.php?studentid=".$row['STUDENTID'] ."><td>".$row['NAME']."</td></a>";
   	echo "<br></br>";	
   	echo "</span></td></tr>";
   } // end of while loop
 $rs->free_result(); 
 echo "</table>"; 
?>
</div> <!-- end content -->
<?php
	include "includes/footer.inc.php";
	include "includes/dbend.inc.php";
?>