<?php
$conn = new mysqli('localhost', 'root', 'mysql', 'DATABASEPT1');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT STUDENTID FROM STUDENT";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
?>
<tr>
 <td width="80">
   <img src="<?php echo "images/" . $row["IMAGE"]; ?>" 
        width="80" height="80"></td>
 <td><?php echo $row["ITEMNAME"]; ?></td>
</tr>
<?php } 
        echo "studentid: " . $row["STUDENTID"]. "<br>"."<br>";
    }
  else {
    echo "0 results";
}
$conn->close();
?>