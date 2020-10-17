<?php

$array1 = array( 
					array(1, 0),
                	array(2, 0)


              );
$array2 = array( 
					array(5, 1),
                	array(2, 0)


              );
$array3 = array();

$i = 0;
$j = 0;
$rows = 2;
$cols = 2;
echo "Resultant array is <br>";
for($i=0; $i<$rows ; $i++)
{
	for($j=0; $j<$cols; $j++)
	{
		$array3[$i][$j] = $array1[$i][$j] + $array2[$i][$j];
		echo $array3[$i][$j]. " ";
	}
	echo "<br>";
}

?>