<?php
	error_reporting(0); 
	if (!empty($_POST))
	{
		$sqlConnect=mysqli_connect('localhost', 'root', '', 'mock');
	
		if(!$sqlConnect)
		die("Error".mysqli_connect_errno());
	
		$id = $_POST["id"];
		$password = $_POST["password"];
		$query = "select * from Account where id='".$id."' and password='".$password."'";
		$result = mysqli_query($sqlConnect, $query);
		$rows = array();
		
		if(mysqli_num_rows($result)>0)
		{
			while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
			{
				$rows[] = $row;
			}
			print json_encode($rows[0]);
		}
		else echo "";
		mysqli_close($sqlConnect);
	}		
?> 
