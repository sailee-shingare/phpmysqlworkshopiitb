<?php

$servername = "localhost";
$username ="root";
$password ="";

//create connection
$conn = mysqli_connect($servername, $username, $password);

//check connection
if(!$conn)
{
	die("Connection failed: " .  mysqli_connect_error($conn));
}
echo "Connected successfully <br>";

//select database
mysqli_select_db($conn, "sample") or die("Failed to select db: " . mysqli_error($conn));
echo "Selected db successfully <br>";

$query = " SELECT * FROM visitor_counter ";
$result = mysqli_query($conn, $query);

//insert a row for web page 1 then omit code
if(mysqli_num_rows($result) == 0)
{
	$insert = "INSERT INTO visitor_counter VALUES('', '0')";
	$ins_result = mysqli_query($conn, $insert);
}

$update = " UPDATE visitor_counter SET visits = visits + 1 where id = 3 ";
$upd_result = mysqli_query($conn, $update);

$select = " SELECT visits FROM visitor_counter WHERE id = 3 ";
$sel_result = mysqli_query($conn, $select);

if(mysqli_num_rows($sel_result) > 0)
{
	for($i=0; $i<mysqli_num_rows($sel_result); $i++)
	{
		$row = mysqli_fetch_assoc($sel_result);
		echo "Visits: " . $row['visits'] . "<br>";
	}
}
else
{
	echo "No result <br>";
}



?>