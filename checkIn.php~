<?php
	error_reporting(0); 
	if (!empty($_POST))
	{
		$sqlConnect=mysqli_connect('localhost', 'root', '', 'mock');
	
		if(!$sqlConnect)
		die("Error".mysqli_connect_errno());
	
		$id = $_POST["id"];
		$date = $_POST["date"];
		$type = $_POST["type"];
		$latitude = $_POST["latitude"];
		$longitude = $_POST["longitude"];
		
		$query = "INSERT INTO `CheckedInPositions` (`id`, `date`, `type`, `latitute`, `longitude`) VALUES ('".$id."', '".$date."', '".$type."', '".$latitude."', '".$longitude."');";
		mysqli_query($sqlConnect, $query);		
		echo "ok";
		
		mysqli_close($sqlConnect);
	}	
?>
