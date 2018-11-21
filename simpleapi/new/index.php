<?php 
	
	// variable declaration
	$name ="";
	$errors = array();	

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'simpleapi');

	if(isset($_GET['name'])){$name = $_GET['name'];}

	// form validation: ensure that the form is correctly filled
	if (empty($name)) { array_push($errors, "UserName required"); }


	// create user if there are no errors in the form
	if (count($errors) == 0) {

		$query = "INSERT INTO db (NAME) VALUES('$name')";
		mysqli_query($db, $query);
		$msg = array();
		array_push($msg, "result:success");
		echo json_encode($msg);

	}

	if (count($errors) > 0) {echo json_encode($errors);} 

	

?>
