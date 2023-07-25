<?php
	$conn = new mysqli("localhost", "root", "", "hazarddb");
	if($conn->connect_error){
		die("Could not connect to database!".$conn->connect_error);
	}
?>