<?php
	$title = "About Us";
	include "includes/header.inc.php";
?>
<?php
	include "includes/menu.inc.php";
	$text1 = "Blossom";
	$text2 = "Bubbles";
	$text3 = "Buttercup";
?>
<div id="content">
  
  <h2>About Us</h2>
    <p>This is the happiest story you've ever read. 
    It's about two people who led wonderfully fulfilling lives. 
    They had engrossing careers, earned the respect of their friends, 
    and made important contributions to their neighborhood, their country, 
    and their world. And the odd thing was, they weren't born geniuses. 
    They did okay on the SAT and IQ tests and that sort of thing,
	but they had no extraordinary physical or mental gifts. They were 
	fine-looking, but they weren't beautiful. They played tennis and hiked, 
	but even in high school they weren't star athletes, and nobody would have 
	picked them out at that young age and said they were destined for greatness 
	in any sphere. Yet they achieved this success, and everyone who met them 
	sensed that they lived blessed lives. How did they do it They possessed what 
	economists call noncognitive skills, which is the catchall category for 
	hidden qualities that can't be easily counted or measured, but which in real 
	life lead to happiness and fulfillment. </p>
	
  <p>&nbsp;</p>
  <ul>
  	<li><?php echo $text1;?></li>
  	<li><?php echo $text2;?></li>
  	<li><?php echo $text3;?></li>
  </ul>
</div> <!-- end content -->
<?php
	include "includes/footer.inc.php";
?>