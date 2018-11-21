<?php 
	
	// variable declaration
	$id="";
	$errors = array();	

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'simpleapi');

	if(isset($_GET['id'])){$id = $_GET['id'];}

	// form validation: ensure that the form is correctly filled
	if (empty($id)) { array_push($errors, "UserID required"); }



	// delete user if there are no errors in the form
	if (count($errors) == 0) {

		$query = "DELETE FROM db WHERE ID=$id";
		mysqli_query($db, $query);
		$msg = array();
		array_push($msg, "result:success");
		echo json_encode($msg);

	}

	if (count($errors) > 0) {echo json_encode($errors);} 

	

?>
