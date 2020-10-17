<?php

if($_POST['string'])
{
	$string = $_POST['string'];
	echo "String is " . $string . "<br>";

	//counts number of characters in string
	$str_len = strlen($string);
	echo "Length of string is " . $str_len . "<br>";

	//breaking down a string into array
	$explode_str = explode(" ", $string);  //$explode_str is an array
	print_r($explode_str);                //print_r() displays contents of array
	echo "<br>";

	//reverse the string
	$reverse = strrev($string);
	echo "Reverse of string is " . $reverse . "<br>";

	//Convert all alphabetic characters in string to their lower case form
	$lowercase = strtolower($string);
	echo "Lower case string: " . $lowercase . "<br>";

	//Convert all alphabetic characters in string to their upper case form
	$uppercase = strtoupper($string);
	echo "Upper case string:" . $uppercase . "<br>";

	//Declare a substring and replace the content of substring into original string
	$sub_str = mb_substr($string, 0, 5);
	echo "Substring is " . $sub_str . "<br>";
	$replace_substr = substr_replace($string, "replaced", 2, 5);
	echo "Replaced string is " . $replace_substr;

}


?>



<html>

<form action="q2_string_functions.php" method="post">

	Enter a string:
	<input type="text" name="string"> <br> <br>
	<input type="submit" value="submit">

</form>


</html>