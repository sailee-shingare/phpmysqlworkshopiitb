<?php


//$_FILES is a two dimensional associative global array of items which are being uploaded by via HTTP POST method and holds the attributes of files such as name, type, size, tmp_name and error

//the actual name of the uploaded file
$name =  $_FILES["myfile"]["name"];
echo $name . "<br>";

//Type of the uploaded file (like .pdf, .zip, .jpeg…..etc)
$type = $_FILES["myfile"]["type"]; 
echo $type . "<br>";

//the size in bytes of the uploaded file
$size = $_FILES["myfile"]["size"];
echo $size . "<br>";

//A temporary address where the file is located before processing the upload request
$tmp_name =  $_FILES["myfile"]["tmp_name"];
echo $tmp_name . "<br>";

//Types of error occurred when the file is uploading
$error =  $_FILES["myfile"]["error"];
echo $error . "<br>";

if ($error > 0 )
{
	"Failed to upload file due to error. Code: " . $error;
}
else
{
	if($type == "image/jpeg")
	{
		echo "File format not supported";
	}
	elseif ($size > 100000)
	{
		echo "Size not supported";
	}
	else
	{
		move_uploaded_file($tmp_name, "uploaded/" . $name);  // move_uploaded_file(file, dest)    
		echo "File uploaded successfully";
    }
}




?>

<html>

<form action="q3_file_upload.php" method="post" enctype="multipart/form-data">

	<h2> Upload a file </h2>

	<input type="file" name="myfile">
	<input type="submit" value="click to upload">

</form>

</html>