<?php   
	$db = mysqli_connect("localhost", "root", "", "simpleapi");  

	// variable declaration
	$id ="";
	$errors = array();

	if(isset($_GET['id'])){$id = $_GET['id'];}

	// form validation: ensure that the form is correctly filled
	if (empty($id)) { array_push($errors, "UserID required"); }

	// get user if there are no errors in the form
	if (count($errors) == 0) {

		$sql = "SELECT * FROM db WHERE id='$id'";  
		$result = mysqli_query($db, $sql);  
		$json_array = array();  
		while($row = mysqli_fetch_assoc($result))  
		{  
			$json_array[] = $row;  
		}  
	 
		echo json_encode($json_array);  
	}

	if (count($errors) > 0) {echo json_encode($errors);} 
?>  