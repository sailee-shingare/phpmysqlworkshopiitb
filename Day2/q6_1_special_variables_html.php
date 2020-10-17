<html>

<form action='q6_1_special_variables_html.php' method='GET'>

    Enter first angle:
	<input type='text' name='firstangle'>
	<br><br>
	Enter second angle:
	<input type='text' name='secondangle'>
	<br><br>
	Enter third angle:
	<input type='text' name='thirdangle'>
	<br><br>
	<input type='submit' name="Submit data">

</form>

</html>

<?php

$angle1 = $_GET['firstangle'];
$angle2 = $_GET['secondangle'];
$angle3 = $_GET['thirdangle'];
$sum = ($angle1 + $angle2 + $angle3);
if($angle1 && $angle2 && $angle3)
{
	if( $sum != 180)
	{
		echo "Invalid";
    }
    else
    {
    	echo "All values present <br>";
		if($angle1 == $angle2 && $angle2 == $angle3)
		{
			echo "It is equilateral triangle";
		}
		elseif($angle1 == $angle2 || $angle2 == $angle3 || $angle1 == $angle3) 
		{
			echo "It is isosceles triangle";
		}
		elseif ($angle1 == 90 || $angle2 == 90 || $angle3 == 90)
		{
			echo "It is right angled triangle";
		}
		else
		{
			echo "It is scalene triangle";
		}
    }

}
else
{
	echo "Enter all angles of the triangle";	
}

?>

