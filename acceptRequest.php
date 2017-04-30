<?php	
	error_reporting(0); 
	if (!empty($_POST))
	{
		$sqlConnect=mysqli_connect('localhost', 'root', '', 'mock');
	
		if(!$sqlConnect)
		die("Error".mysqli_connect_errno());
	
		$id1 = $_POST["id2"];
		$id2 = $_POST["id1"];
		
		$query = "UPDATE Friendship SET status='accepted' WHERE id1='".$id1."' and id2='".$id2."'";
		mysqli_query($sqlConnect, $query);
		
		mysqli_close($sqlConnect);
	}		
?>
