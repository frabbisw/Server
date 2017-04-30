<?php	
	error_reporting(0); 
	if (!empty($_POST))
	{
		$sqlConnect=mysqli_connect('localhost', 'root', '', 'mock');
	
		if(!$sqlConnect)
		die("Error".mysqli_connect_errno());
	
		$key = $_POST["key"];
		
		$query = "SELECT DISTINCT * FROM `Account` WHERE `id` LIKE '%{$key}%' or `name` LIKE '%{$key}%'";		
		$result = mysqli_query($sqlConnect, $query);
		$rows = array();
		
		if(mysqli_num_rows($result)>0)
		while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
		{
			$rows[] = $row;
		}
		print json_encode($rows);
		
		mysqli_close($sqlConnect);
	}		
?>
