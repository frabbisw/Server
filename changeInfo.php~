<?php
	error_reporting(0); 
	if (!empty($_POST))
	{
		$sqlConnect=mysqli_connect('localhost', 'root', '', 'mock');
	
		if(!$sqlConnect)
		die("Error".mysqli_connect_errno());
		
		$id = $_POST["id"];
		$name = $_POST["name"];
		$password = $_POST["password"];
		
		$query = "UPDATE Account SET name='{$name}' , password='{$password}' WHERE Account.id='{$id}'";
		mysqli_query($sqlConnect, $query);
		
		echo "hello from server";
		
		mysqli_close($sqlConnect);
	}
?>
