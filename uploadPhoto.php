<?php
	error_reporting(0); 
	if (!empty($_POST))
	{
		$sqlConnect=mysqli_connect('localhost', 'root', '', 'mock');
	
		if(!$sqlConnect)
		die("Error".mysqli_connect_errno());
	
		$id = $_POST["id"];
		$image = $_POST["image"];
		
		$imagePath = "images/".$id.".jpg";
		
		file_put_contents($imagePath,base64_decode($image));
		
		$query = "update Account set imgPath='".$imagePath."' where id='".$id."'";
		$result = mysqli_query($sqlConnect, $query);
		
		echo $imagePath;
		
		mysqli_close($sqlConnect);
	}	
	
?> 
