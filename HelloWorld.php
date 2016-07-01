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
	
	<?php 
	//Challenge #4, create an HTML for asking for name and then use PHP to output that name within a statement
	?>
		<h1> Please input your name: </h1>
			<form method="post"> <!-- leave method out is fine for Get, but get leaves info in the browsers url -->
				<input type="text" name="name"> <!--sets the type of input and the id to call on it later -->
				<input type="submit" value="Submit Name"> <!-- this is a button to submit it -->
			</form>
		<?php 
			//this checks to see if $_post has a value.  If it does not it asks you to enter your name.  If it does it sets a variable and prints that variable.  How do I do it without setting a variable?
			
			if (empty($_POST["name"])) {
				echo "Please enter your name above.";
			}
			else {
				//echo "Welcome $_POST["name"]"; <!-- Why won't this work?  I have tried changing "" to ''.
				$name=$_POST["name"];
				echo "Welcome $name!";
			}
			
		?>
		
		
</body>
</html>