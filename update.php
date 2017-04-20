<?php
	error_reporting(0); 
	if (!empty($_POST))
	{
		$sqlConnect=mysqli_connect('localhost', 'root', '', 'mock');
	
		if(!$sqlConnect)
		die("Error".mysqli_connect_errno());
		
		$id = $_POST["id"];
		$latitude = $_POST["latitude"];
		$longitude = $_POST["longitude"];
		
		$query = "UPDATE Account SET latitude='".$latitude."' , longitude='".$longitude."' WHERE Account.id='".$id."'";
		mysqli_query($sqlConnect, $query);
		
		mysqli_close($sqlConnect);
	}
?>
