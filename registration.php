<?php
	error_reporting(0); 
	$sqlConnect=mysqli_connect('localhost', 'root', '', 'mock');
	
	if(!$sqlConnect)
	die("Error".mysqli_connect_errno());
						
	if (!empty($_POST))
	{
		$id = $_POST["id"];
		$name = $_POST["name"];
		$password = $_POST["password"];
		
		$query = "select id from Account where id='".$id."'";			
		$result = mysqli_query($sqlConnect, $query);
		
		if(mysqli_num_rows($result)==0)
		{
			$query = "insert into Account(id,name,password) values('".$id."','".$name."','".$password."')";
			mysqli_query($sqlConnect, $query);
			echo "ok";
		}		
	}
	mysqli_close($sqlConnect);
?>
