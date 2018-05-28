<?php
// print "What is new?<br>";
// echo "This message is shown by echo";

	// display menu
	echo '<fieldset>';
	echo "<p>Menu</p>";
	echo "<p><a href='php/multi.php'>◆Script 2.7 - Multidimentional Arrays</a><p>";
	echo '</fieldset>';
	
	// Predefined server valiables
    $file = $_SERVER['SCRIPT_FILENAME'];
	$user = $_SERVER['HTTP_USER_AGENT'];
	$server = $_SERVER['SERVER_SOFTWARE'];
	
	// print the name of this script
	echo "<p>You are running the file:<br/><b>$file</b>.</p>\n";
	
	// print the user's information
	echo "<p>You are viewing this page using:<br /><b>$user</b></p>\n";
	
	// print the server's information
	echo "<p>This server is running:<br /><b>$server</b>.</p>\n";
	
	// create the variables
	$first_name = 'Yoshihiko';
	$last_name = 'Tanaka';
	$book = 'The Success';

	// print the values
	echo "<p>The book <em>$book</em> was written by $first_name $last_name.</p>";

	echo "<p>The book <em>" . $book . "</em> was written by " . $first_name . " " . $last_name . ".</p>";
	
	$some_string = "abcdefgh";
	$num = strlen($some_string);
	print "<p>Length of " . $some_string . " is " . $num . ".<p/>";
	print "<p>Length of $some_string is $num.<p/>";
	
	// .=
	$concat_name = $first_name;
	$concat_name .= ", " . $last_name;
	echo $concat_name;
	
	// Numbers
	$num = 524132;
	echo "<p>Number format: " . number_format($num, 2) . "</p>";
	echo "<p>Round the number: " . round(17383.14159276, 3) ."</p>";
	echo "<p>3.82を切り捨て:" . floor(3.82) . "</p>";
	echo "<p>3.82を切り上げ:" . ceil(3.82) . "</p>";
	
	// Constants
	define("TODAY", "2018/05/08");
	echo '<p>Is ' . TODAY . " TODAY?</p>";

	// Predefined Constants
	echo "PHP Version:" . PHP_VERSION . "<br/>OS:" . PHP_OS;
# phpinfo();
?>

<p><a href="../php/form/form.html">Go to form</a></p>

