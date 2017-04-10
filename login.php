<?php
	error_reporting(0); 
	$sqlConnect=mysqli_connect('localhost', 'root', '', 'mock');
	
	if(!$sqlConnect)
	die("Error".mysqli_connect_errno());
	
	if (!empty($_POST))
	{
		$id = $_POST["id"];
		$password = $_POST["password"];
		
		$query = "select * from Account where id='".$id."' and password='".$password."'";
		$result = mysqli_query($sqlConnect, $query);
	
		while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
		{
			$id = $row['id'];
			$name = $row['name'];
			$password = $row['password'];
			
			echo $id.",".$name.",".$password;
		}
	}	
	mysqli_close($sqlConnect);
?>
