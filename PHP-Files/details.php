<!DOCTYPE HTML>
<HTML>
<Head>

<?php

if(!isset($_GET['studentid'])) {header('Location: error.php');}
	else {
		$stuid = $_GET['studentid'];
	}
	
	$theid = ($_GET["studentid"]);

	include "includes/db.inc.php";
	

	$qry = "SELECT * FROM `STUDENT` WHERE STUDENTID = '" . $theid . "';";
	$rs = $conn->query($qry)
		or die('Query 2 failed ' . $conn->error . '<br>');
	$row = $rs->fetch_assoc();
	
	$stuimage = $row['IMAGE'];
	$stuname = $row['NAME'];
	$studate = $row['DATEOFMEM'];
	
	$title = $stuname . $groupname;	
	// PRODUCT for her == STUDENT for me. 
	// Use repeat first table. Use foreign key and set = $theid
?>
<?php require ("includes/header.inc.php"); ?>
<?php require ("includes/menu.inc.php");  ?>

<div id="content">
<table style='width:80%; margin: auto;' >
	<tr>
		<td><img src='images/<?php echo $stuimage?>'
			WIDTH=240 HEIGHT=180 ALIGN=CENTER></td>
			<td><h3><?php echo $stuname; ?></h3>
			<?php echo $studate; ?></td>
	</tr>
</table>

<!--Start of second query --!>
<?php
	$qry = "SELECT * FROM `MEMBER` WHERE STUDENTID = '" . $theid . "';";
	$rs = $conn->query($qry)
		or die('Query 2 failed ' . $conn->error . '<br>');
	$counter = 0;
	while ($row=$rs->fetch_assoc()) {
	$mid = $row['MEMBERID'];
	$mqty = $row['MEETINGQTY'];
	$gname = $row['GROUPNAME'];
	$cost = $row['MEMERSHIPCOST'];
	
	
	echo "th {text-align: left;}";
	
	echo "<table style=\"width:100%\">";
  echo "<tr>";
    echo "<th>". $mid . "</th>";
    echo "<th>" . $mqty . "</th>";
    echo "<th>" . $gname . "</th>";
    echo "<th>" . $cost . "</th>";
  echo "</tr>";
 echo "</table>";
	
	}
	
?>	



</div> <!-- end content -->
<?php
	include "includes/footer.inc.php";
	include "includes/dbend.inc.php";
?>