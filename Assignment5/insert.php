<?php
	
	$FirstName = $_POST['FirstName']; 
	$MiddleName = $_POST['MiddleName']; 
	$LastName = $_POST['LastName']; 
	
	$Day = $_POST['Day']; 
	$Month = $_POST['Month']; 
	$Year = $_POST['Year']; 

	$Gender = $_POST['Gender'];

	$Address = $_POST['Address']; 
	$City = $_POST['City']; 
	$State = $_POST['State']; 
	$Zipcode = $_POST['Zipcode']; 
	$Country = $_POST['Country']; 
	
	$Email_ID = $_POST['Email_ID']; 
	
	$AreaCode = $_POST['AreaCode']; 
	$Phone_Number = $_POST['Phone_Number']; 
	$Profession = $_POST['Profession']; 

	if (!empty($FirstName) || !empty($MiddleName) || !empty($LastName) || 
		!empty($Day) || !empty($Month) || !empty($Year) ||
		!empty($Gender) || !empty($Address) || !empty($City) || 
		!empty($State) || !empty($Zipcode) || !empty($Country) ||
		!empty($Email_ID) || !empty($AreaCode) || !empty($Phone_Number) ||
		!empty($Profession)){

			$host = "localhost";
			$dbUsername = "root";
			$dbPassword = "";
			$dbname = "regestration";

			$conn = new mysqli($host,$dbUsername,$dbPassword,$dbname);

			if (mysqli_connect_error())
			{
				die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
			}
			else
			{
				$SELECT = "SELECT Email_ID from personal where Email_ID=? limit 1";

				$INSERT = "INSERT into personal (FirstName, MiddleName, LastName, Day, Month, Year, Gender, Address, City, State, Zipcode, Country, Email_ID, AreaCode, Phone_Number,Profession) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)"

				$stmt = $conn->prepare($SELECT);
				$stmt->bind_param("s",$Email_ID);

				$stmt->execute();
				$stmt->bind_result($Email_ID);
				$stmt->store_result();
				$rnum = $stmt->num_rows;

				if($rnum == 0){
					$stmt->close();

					$stmt = $conn->prepare($INSERT);
					$stmt->bind_param("sssiiissssisssis",$FirstName, $MiddleName, $LastName, $Day, $Month, $Year, $Gender, $Address, $City, 
						$State, $Zipcode, $Country, $Email_ID, $AreaCode, 
						$Phone_Number,$Profession);
					$stmt->execute();
					echo "New record inserted successfully";
				} else{
					echo "Someone already register using this email";
				}

				$stmt->close();
				$conn->close();

			}
	}
	else {
		echo "All fields are required";
		die();
	}


?>