<?php
	error_reporting(0); 
	if (!empty($_POST))
	{
		$sqlConnect=mysqli_connect('localhost', 'root', '', 'mock');
	
		if(!$sqlConnect)
		die("Error".mysqli_connect_errno());
	
		$id = $_POST["id"];
		$query = "(SELECT id,name,latitude,longitude,imgPath FROM Account where id='".$id."') union (SELECT id,name,latitude,longitude,imgPath FROM Account,Friendship WHERE Account.id=Friendship.id1 and Friendship.id2='".$id."' and Friendship.status='accepted' or Account.id=Friendship.id2 and Friendship.id1='".$id."' and Friendship.status='accepted')";
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
