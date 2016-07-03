<!DOCTYPE html>
<html>
<?php $var = "PHP Tutorial"; ?> <!-- See Challenge #3 -->
<head>
	<title> <?php echo $var; ?></title>
</head>
<body>
	<?php print "hello world!"; ?>

<h1> Welcome to the 30 PHP Challenge Page </h1>
<br>
<br>
<h2> Challenge #1 - Print PHP Version</h2>
	<?php
	//Challenge #1, print the current PHP version
	print "The Current PHP Version is " . phpversion();
	?>
<br>
<br>
<h2> Challenge #2 - Display Difficult String </h2>
	<?php
	//Challenge #2, Display the following strings
	echo 'Tomorrow I\'ll learn PHP global variables.' ."<br>"; 
	
	echo 'This is a bad command : del c:\\*.*';
	?>

<h2> Challenge #3 - Print Variables </h2>
	<?php
	//Challenge #3, print $var = 'PHP Tutorial' in title section, h3 tag, and as an anchor text within the HTML
	?>
	<h4> <?php print $var; ?> </h4>
	<a href="www.google.com"><?php print $var; ?></a>
<br>
<br>	
<h2> Challenge #4 - HTML Forms </h2>	
	<?php 
	//Challenge #4, create an HTML for asking for name and then use PHP to output that name within a statement
	?>
		<h4> Please input your name: </h4>
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
<br>
<br>
<h2> Challenge #5 - Get Client IP </h2>
	<?php 
	//Challenge #5, get the IP address from the client
	echo "Your IP address is " . $_SERVER['REMOTE_ADDR'];
	?>
	
<br>
<br>
<h2> Challenge #6 - Get Browser Info </h2>
	<?php 
	//Challenge #6, get the user's browser info and echo that back
	//this will return something that could be identified as the browser by looking up the output, but its confusing because it includes so much additional info.  Most browsers for instance list Mozilla as part of the answer...why?
	echo "Your current browser is: ";
	echo $_SERVER["HTTP_USER_AGENT"];
	?>
			
		
</body>
</html>