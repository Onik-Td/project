<?php

	$hostname = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'garments-management';

	// Create connection
	$conn = mysqli_connect($hostname, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
	  die("Connection failed: " . mysqli_connect_error());
	}
	
	$First_Name = ucwords($_POST["First_Name"]);
	$last_Name = ucwords($_POST["last_Name"]);
	$Fathers_Name = ucwords($_POST["Fathers_Name"]);
	$Mothers_Name = ucwords($_POST["Mothers_Name"]);
	$Date_of_Birth = ($_POST["Date_of_Birth"]);
	$Gender = ucwords($_POST["Gender"]);
	$Religion = ucwords($_POST["Religion"]);
	$Marital_Status = ucwords($_POST["Marital_Status"]);
	$Blood_Group = ucwords($_POST["Blood_Group"]);
	$Country = ucwords($_POST["Country"]);
	$Division = ucwords($_POST["Division"]);
	$District = ucwords($_POST["District"]);
	$Phone = ($_POST["Phone"]);
	$Email = ucwords($_POST["Email"]);
	$Level_of_Education = ($_POST["Level_of_Education"]);
	$Degree_Title = ucwords($_POST["Degree_Title"]);
	$Result = ucwords($_POST["Result"]);
	$Passing_Year = ($_POST["Passing_Year"]);
	$Skill = ucwords($_POST["Skill"]);
	$company_Name = ucwords($_POST["company_Name"]);
	$Company_Business = ucwords($_POST["Company_Business"]);
	$Company_Location = ($_POST["Company_Location"]);
	$Designation = ucwords($_POST["Designation"]);
	$Department = ucwords($_POST["Department"]);
	$Responsibilities = ucwords($_POST["Responsibilities"]);
	$Joining_From_Date = ($_POST["Joining_From_Date"]);
	$Joining_To_Date = ($_POST["Joining_To_Date"]);
	$Select_your_Position = ($_POST["Select_your_Position"]);
	$Upload_File = ($_POST["Upload_File"]);
	
	$sql = "INSERT INTO application_form 
	(
		First_Name,Last_Name,Fathers_Name,Mothers_Name,Date_of_Birth,Gender,Religion,
		Marital_Status,Blood_Group,Country,Division,District,Phone,Email,
		Level_of_Education,Degree_Title,Result,Passing_Year,Skill,company_Name,
		Company_Business,Company_Location,Designation,Department,Responsibilities,
		Joining_From_Date,Joining_To_Date,Select_your_Position,Upload_File 
	)
	VALUES 
	(
		'$First_Name', '$last_Name', '$Fathers_Name', '$Mothers_Name', '$Date_of_Birth', '$Gender', '$Religion', 
		'$Marital_Status', '$Blood_Group','$Country', '$Division', '$District', '$Phone', '$Email', 
		'$Level_of_Education', '$Degree_Title', '$Result', '$Passing_Year', '$Skill', '$company_Name', 
		'$Company_Business', '$Company_Location', '$Designation', '$Department', '$Responsibilities', 
		'$Joining_From_Date', '$Joining_To_Date','$Select_your_Position','$Upload_File'
	)";
	
	//echo $sql; die;
	
	if (mysqli_query($conn, $sql)) {
	  echo "New record created successfully";
	} else {
	  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	mysqli_close($conn);
	
	






?>
