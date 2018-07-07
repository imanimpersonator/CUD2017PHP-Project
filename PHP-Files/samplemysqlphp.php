<?php
$mysqli = new mysqli('198.71.225.60:3306','mstone','mS106105191', 'mstone')
    or die( '<h2>Could not connect to MySQL with mysqli</h2></body></html>');
echo "Success";

$cqry = "CREATE TABLE IF NOT Exists Junk (CNAME char(50));";
$mysqli->query($cqry) or die('Query failed: ' . $mysqli->error . '<br>');

$cqry = "Insert Into Junk Values('Your Name');";
$mysqli->query($cqry) or die('Query failed: ' . $mysqli->error . '<br>');

$qry = "Select * from Junk;";
$rs = $mysqli->query($qry);

while($row = $rs->fetch_assoc())
{ // Send Specific Data values to Browser
     echo $row["CNAME"];
}

?>