<!DOCTYPE html>
<html>
<?php $var = "PHP Tutorial"; ?> <!-- See Challenge #3 -->
<head>
	<title> <?php echo $var; ?></title>
</head>
<body>
	<?php print "hello world!"; ?>

<br>
	<?php
	//Challenge #1, print the current PHP version
	print "The Current PHP Version is " . phpversion();
	?>
<br>
	<?php
	//Challenge #2, Display the following strings
	echo 'Tomorrow I\'ll learn PHP global variables.' ."<br>"; 
	
	echo 'This is a bad command : del c:\\*.*';
	?>

	<?php
	//Challenge #3, print $var = 'PHP Tutorial' in title section, h3 tag, and as an anchor text within the HTML
	?>
	<h3> <?php print $var; ?> </h3>
	<a href="www.google.com"><?php print $var; ?></a>
</body>
</html>