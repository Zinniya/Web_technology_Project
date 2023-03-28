<!DOCTYPE html>
<html>
<head>
	
	<title>Form Submission (PHP)</title>
</head>
<style>
<body>
 
</style>

     <?php 

		if ($_SERVER['REQUEST_METHOD'] === "POST") {

			function test($data) {
				$data = trim($data);
				$data = stripslashes($data);
				$data = htmlspecialchars($data);
				return $data;
			}

			/* empty() vs isset() */

			$firstname = test($_POST['firstname']);
			$lastname = test($_POST['lastname']);
			$email=test($_POST['email']);
            $dob = test($_POST['dob']);
            $gender = test($_POST['gender']);
            $relegion= test($_POST['relegion']);
            $paddr= test($_POST['paddr']);
            $phone= test($_POST['phone']);
   
           
          


			if (empty($firstname) 
			or empty($lastname) or empty($gender) or empty($dob) or empty($relegion)  or empty($email)) {
		

				header("Location: Patient.php");
				header("Location: Patient.php?errorMsg=Please fill up the form properly.");
			}
			else {
				echo "Patient First Name: " . $firstname;
				echo "<br><br>";
				echo "Email: " . $email;
				echo "<br><br>";
				echo "Patient Last Name: " . $lastname;
				echo "<br><br>";
				echo "Date of Birth: " . $dob;
				echo "<br><br>";
				echo "Gender: " . $gender;
				echo "<br><br>";
				echo "Present address: " . $paddr;
				echo "<br><br>";
				echo "Phone Num: " . $phone;
				
		
			}
		}	

			
	?>
	

	<hr><hr>

	<a href="Patient.php">Go Back</a>

</body>
</html>