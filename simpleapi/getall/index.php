<?php   
	$db = mysqli_connect("localhost", "root", "", "simpleapi");  
	$sql = "SELECT * FROM db";  
	$result = mysqli_query($db, $sql);  
	$json_array = array();  
	while($row = mysqli_fetch_assoc($result))  
	{  
		$json_array[] = $row;  
	}  
	 
	echo json_encode($json_array);  
?>  