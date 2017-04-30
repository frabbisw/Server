<?php	
	error_reporting(0); 
	if (!empty($_POST))
	{
		$sqlConnect=mysqli_connect('localhost', 'root', '', 'mock');
	
		if(!$sqlConnect)
		die("Error".mysqli_connect_errno());
	
		$id1 = $_POST["id1"];
		$id2 = $_POST["id2"];
		
		$query = "INSERT INTO `Friendship` (`id1`, `id2`, `status`) VALUES ('".$id1."', '".$id2."', '"."pending"."')";
		mysqli_query($sqlConnect, $query);
		
		mysqli_close($sqlConnect);
	}		
?>
