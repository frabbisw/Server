<?php
	error_reporting(0); 
	if (!empty($_POST))
	{
		$sqlConnect=mysqli_connect('localhost', 'root', '', 'mock');
	
		if(!$sqlConnect)
		die("Error".mysqli_connect_errno());
	
		$id = $_POST["id"];
		$date = $_POST["date"];
		$latitude = $_POST["latitude"];
		$longitude = $_POST["longitude"];
		$type = $_POST["type"];
		
		if($type=="temp")	
		{
			$query = "INSERT INTO `CheckedInPositions` (`id`, `date`, `latitude`, `longitude`, `type`) VALUES ('".$id."', '".$date."', '".$latitude."', '".$longitude."', '".$type."')";
		}

		else	
		{
			$query = "select * from CheckedInPositions where id ='".$id."' and type='".$type."'";
			$result = mysqli_query($sqlConnect, $query);
			
			if(mysqli_num_rows($result)==0)
			{
				$query = "INSERT INTO `CheckedInPositions` (`id`, `date`, `latitude`, `longitude`, `type`) VALUES ('".$id."', '".$date."', '".$latitude."', '".$longitude."', '".$type."')";
			}
						
			else 
			{
				$query = "UPDATE CheckedInPositions set latitude='".$latitude."' , longitude='".$longitude."', date='".$date."' WHERE id='".$id."' AND type='".$type."'";		
			}
		}
			
		mysqli_query($sqlConnect, $query);	
		
		mysqli_close($sqlConnect);
	}
?>
