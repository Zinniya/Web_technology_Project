<?php
	
	function connect() {
		$conn = new mysqli("localhost", "root", "", "patient_db");
		
		if ($conn->connect_error) {
			die("Connection Error: " . $conn->connect_error);
		} 

		return $conn;
	}
?>