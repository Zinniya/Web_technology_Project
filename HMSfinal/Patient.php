<!DOCTYPE html>
<html>
<head>
	<style>
body {
  background-color: hsl(0, 100%, 90%);;
}

h1 {
  color: green;
  text-align: center;
}
a {
  padding: 3px;
  text-decoration: none;
  font-style: italic;
  color: green;
  border: 3px powderblue;
  border-radius: 10px;
  font-size: 20px;
  box-shadow: 2px 2px 15px;
}


input[type="submit"] {
  margin: 10px;
  width: 150px;
  color: white;
  padding: 5px;
  font-size: 15px;
  border-radius: 100px;
  border: 5px hotpink;
  background-color:green;
}

</style>

	
	<title>Form Submission</title>
</head>
<body>
	 
<h1>********Patient History Form************</h1>

      <?php
      
       if (isset($_GET['errorMsg'])){
       	echo $_GET['errorMsg'];
       }
         
	 ?>
	<form id="form1" name="form1" action="PatientFormSubmit.php" method="post" onsubmit="return validform1(this)"novalidate >

		<fieldset>
			<legend>Basic Information:</legend>
		
			<label for="fname">Patient First Name**:</label>
			<input type="text" name="firstname" id="fname" placeholder="Please write your firstname" autofocus  >

			<br><br>
			
			<label for="lname">Patient Last Name**:</label>
			<input type="text" name="lastname" id="lname"placeholder="Please write your Lastname">

			
			<br><br>

			<label>Select Gender**:</label>
			<input type="radio" name="gender" value="male" id="male"><label for="male">Male</label>
			<input type="radio" name="gender" value="female" id="female"><label for="female">Female</label>
			<br><br>
			
			<label for="dob">Date of birth**:</label>
			<input type="date" name="dob" id="dob" >
			<br><br>
			
			<label for="relegion"> Select Religion**:</label>
			<select name="relegion" id="relegion">
				<option value="isl">Islam</option>
				<option value="chri">Christianity</option>
				<option value="hindu">Hinduism</option>
				
			</select>

			<br><br>

	

		</fieldset>
		





		<fieldset>
			<legend>Contact Information:</legend>
			
			<label for="paddr">Present Address:**</label>
			<input type="testarea" name="paddr" id="paddr"placeholder="Please write your Present Address" required size="120">

			
			<br><br>

			<label for="peaddr">Permanent Address:</label>
			<input type="testarea" name="paddr" id="peaddr" placeholder="Please write your Permanent Address" size="120">
            <br><br>

			<label for="phone">Patient Phone:</label>
			<input type="tel" name="phone" id="phone" placeholder="Please write your Phone number">
             <br><br>

			<label for="email">E-mail**:</label>
			<input type="email" name="email" id="email" placeholder="Please write your Email"  >
          
          

		</fieldset>
		




		<fieldset>
		
		   
		    

           


			<br><br>

			<input type="submit" name="submit" value="Submit">
			<a href="patient_Home.php">Go Back</a>

		</fieldset>

	</form>

	 <script src ="JS/patient.js"></script>
   
	<br><br>



</body>
</html>