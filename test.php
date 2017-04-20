<?php
		
	error_reporting(0); 
	
		$sqlConnect=mysqli_connect('localhost', 'root', '', 'mock');
	
		if(!$sqlConnect)
		die("Error".mysqli_connect_errno());
	
		$id = "rabbi";
		$latitude = "0";
		$longitude = "0";
		$date = "2017-7-19 16:0:0";
		$type = "home";
		
					
		if($type=="temp")	$query = "INSERT INTO `CheckedInPositions` (`id`, `date`, `latitute`, `longitude`, `type`) VALUES ('".$id."', '".$date."', '".$longitude."', '".$latitude."', '".$type."')";

		else	
		{
			
			$query = "select * from CheckedInPositions where id ='".$id."' and type='".$type."'";
			$result = mysqli_query($sqlConnect, $query);
		
			if(mysqli_num_rows($result)==0) {
				$query = "INSERT INTO `CheckedInPositions` (`id`, `date`, `latitute`, `longitude`, `type`) VALUES ('".$id."', '".$date."', '".$longitude."', '".$latitude."', '".$type."')";
			
			}			
			else {
				$query = "UPDATE CheckedInPositions set latitute='".$latitude."' , longitude='".$longitude."', date='".$date."' WHERE id='".$id."' AND type='".$type."'";		
			}
		}
			
		//mysqli_query($sqlConnect, $query);	
		echo "ok";
		
		mysqli_close($sqlConnect);
	
?>
