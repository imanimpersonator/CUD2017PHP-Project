<?php

$mysqli = new mysqli('localhost','root','mysql', 'DATABASEPT1') 
                        or die( '<h2>Could not connect to MySQL with mysqli</h2></body></html>');
// first 

$c1query = "CREATE TABLE IF NOT EXISTS STUDENT (
STUDENTID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
NAME VARCHAR(30) NOT NULL,
IMAGE text(30) NOT NULL,
DATEOFMEM VARCHAR(50));";

$mysqli->query($c1query) or die('Query failed: ' . $mysqli->error . '<br>');
$qry = "Select * from STUDENT ;";
$rs = $mysqli->query($qry);


 // Loop through results set
   while($row = $rs->fetch_assoc())
   { // Send Specific Data values to Browser
?>
<tr>
 <td width="80">
   <img src="<?php echo "images/" . $row["IMAGE"]; ?>" 
        width="80" height="80"></td>
 <td><?php echo $row["NAME"]; ?></td>
</tr>
<?php } // end of while loop
 mysqli_close($mysqli);
 $rs->free_result(); 
 echo "</table>"; 
?>