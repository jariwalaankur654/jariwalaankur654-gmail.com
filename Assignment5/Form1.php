<?php
$host='localhost';
$user='root';
$pass='';
$dbname='register';

if(isset($_POST['submit']))
{
	$conn=mysqli_connect($host,$user,$pass,$dbname);

	if(mysqli_select_db($conn,'register'))

	$FirstName = $_POST['FirstName'];
	$LastName = $_POST['LastName'];
	$MiddleName = $_POST['MiddleName'];

	$Day = $_POST['Day'];		
	$Month = $_POST['Month'];
	$Year = $_POST['Year'];

	$Gender = $_POST['Gender'];
	//$Gender = isset($_POST['Gender'])?$_POST['Gender']:'';

	$Address = $_POST['Address'];
	
	$City = $_POST['City'];
	$State = $_POST['State'];
	$Zipcode = $_POST['Zipcode'];

	$EmailID = $_POST['EmailID'];
	$AreaCode = $_POST['AreaCode'];
	$PhoneNo = $_POST['PhoneNo'];

	$DateTime = $_POST['DateTime'];
	$Suggestions = $_POST['Suggestions'];

	$sql = "INSERT INTO general values('$FirstName','$LastName','$MiddleName','$Day','$Month','$Year','$Gender','$Address','$City','$State','$Zipcode','$EmailID','$AreaCode','$PhoneNo','$DateTime','$Suggestions')";

	
	if(isset($_POST['SID']))
	{
		$SID = $_POST['SID'];

		$SEmailID = $_POST['SEmailID'];
		$CurrentYearLevel = $_POST['CurrentYearLevel'];
		$DegreeProgram = $_POST['DegreeProgram'];
		$SUniversity = $_POST['SUniversity'];

		$sql = "INSERT INTO student values('$SID','$SEmailID','$CurrentYearLevel','$DegreeProgram','$SUniversity','$PhoneNo')";

	}
	else if(isset($_POST['FID']))
	{
		$FID = $_POST['FID'];
		
		$FEmailID = $_POST['FEmailID'];
		$FDesignation = $_POST['FDesignation'];
		
		$FUniversity = $_POST['FUniversity'];

		$sql = "INSERT INTO faculty values('$FID','$FEmailID','$FDesignation','$FUniversity','$PhoneNo')";
	}
	else
	{
		$PEmailID = $_POST['PEmailID'];
		
		$CompanyName = $_POST['CompanyName'];

		$PDesignation = $_POST['PDesignation'];
		
		$CompanyAddress = $_POST['CompanyAddress'];

		$sql = "INSERT INTO representative values('$PEmailID','$PDesignation','$CompanyName','$CompanyAddress','$PhoneNo')";
	}

	mysqli_query($conn,$sql);	
	mysqli_close($conn);	
}				
?>

<html><head>
	<title>Registration Form</title>
	<meta charset="utf-8">
  	<meta name="author" content="18CE032 Jariwala Ankur">
  	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>

	<script>
	function disabledforform1() {
  		document.getElementById("form1").disabled = false;
  		document.getElementById("form2").disabled = true;
  		document.getElementById("form3").disabled = true;
	}
	function disabledforform2() {
  		document.getElementById("form1").disabled = true;
  		document.getElementById("form2").disabled = false;
  		document.getElementById("form3").disabled = true;
	}
	function disabledforform3() {
  		document.getElementById("form1").disabled = true;
  		document.getElementById("form2").disabled = true;
  		document.getElementById("form3").disabled = false;
	}
	</script>

	<div><h1>NATIONAL WORKSHOP ON WEB TECHNOLOGY</h1></div>
	<p>This form is for online registration of the National Workshop on Web Technology, India. Please fill all the necessary details carefully.</p>

	<div class="form">
	<form action="<?php $_PHP_SELF ?>" method="post">
		<fieldset>
			<legend>DETAILS</legend>
			 
			<div>
			<label id="label1">Name</label><br>
			<input size="15" type="text" name="FirstName" required="">
			<input size="15" type="text" name="MiddleName" required="">
			<input size="15" type="text" name="LastName" required="">
			<br>
			<label style="padding-right: 78px" id="lable3">First Name</label>
			<label style="padding-right: 62px" id="lable3">Middle Name</label>
			<label id="lable3">Last Name</label>
			</div>

			<br>
			
			<div>
			<label id="label1">Birth date</label><br>
			<select name="Day" required="">
				<option value="" hidden=""></option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				<option value="11">11</option>
				<option value="12">12</option>
				<option value="13">13</option>
				<option value="14">14</option>
				<option value="15">15</option>
				<option value="16">16</option>
				<option value="17">17</option>
				<option value="18">18</option>
				<option value="19">19</option>
				<option value="20">20</option>
				<option value="21">21</option>
				<option value="22">22</option>
				<option value="23">23</option>
				<option value="24">24</option>
				<option value="25">25</option>
				<option value="26">26</option>
				<option value="27">27</option>
				<option value="28">28</option>
				<option value="29">29</option>
				<option value="30">30</option>
				<option value="31">31</option>
			</select>
			<select name="Month" required="">
				<option value="" hidden=""></option>
				<option value="January">January</option>
				<option value="February">February</option>
				<option value="March">March</option>
				<option value="April">April</option>
				<option value="May">May</option>
				<option value="June">June</option>
				<option value="July">July</option>
				<option value="August">August</option>
				<option value="September">September</option>
				<option value="October">October</option>
				<option value="November">November</option>
				<option value="December">December</option>
			</select>
			<select name="Year" required="">
				<option value="" hidden=""></option>
				<option value="2010">2010</option>
				<option value="2009">2009</option> 
				<option value="2008">2008</option> 
				<option value="2007">2007</option> 
				<option value="2006">2006</option> 
				<option value="2005">2005</option> 
				<option value="2004">2004</option> 
				<option value="2003">2003</option> 
				<option value="2002">2002</option> 
				<option value="2001">2001</option> 
				<option value="2000">2000</option> 
				<option value="1999">1999</option> 
				<option value="1998">1998</option> 
				<option value="1997">1997</option> 
				<option value="1996">1996</option> 
				<option value="1995">1995</option> 
				<option value="1994">1994</option>
				<option value="1993">1993</option> 
				<option value="1992">1992</option> 
				<option value="1991">1991</option> 
				<option value="1990">1990</option> 
				<option value="1989">1989</option> 
				<option value="1988">1988</option> 
				<option value="1987">1987</option> 
				<option value="1986">1986</option> 
				<option value="1985">1985</option> 
				<option value="1984">1984</option>
				<option value="1983">1983</option> 
				<option value="1982">1982</option> 
				<option value="1981">1981</option> 
			</select>
			<br>

			<label id="lable3" style="padding-right: 25px">Day</label>
			<label id="lable3" style="padding-right: 58px">Month</label>
			<label id="lable3">Year</label>
			</div>

			<br>

			<div>
				<label id="label1">Gender</label>
				<br>
				<select name="Gender" required="">
					<option value="" hidden=""></option>
					<option value="male">Male</option>
					<option value="Female">Female</option>
					<option value="other">Other</option>
				</select>
			</div>

			<br>

			<div>
				<label id="label1">Address</label>
				<br>
				<input size="40" type="text" name="Address" required="">
				<br>
				<label id="lable3">Street Address</label>
				<br>
				<br>
				<input type="text" name="City" required="">		
				<input type="text" name="State" required="">
				<br>
				<label id="lable3" style="padding-right: 158px">City</label>
				<label id="lable3">State</label>
				<br>
				<br>
				<input type="Number" name="Zipcode" required="">						
				<br>
				<label id="lable3" style="padding-right: 73px">Postal / Zip Code</label>				
			</div>

			<br>

			<div>
				<label id="label1">Personal Email-ID</label>
				<br>
				<input name="EmailID" size="40" type="email" required="">
			</div>

			<br>

			<div>
				<label id="label1">Phone Number</label>
				<br>
				<input size="5" name="AreaCode" maxlength="3" type="text" required=""> 
				<input maxlength="10" name="PhoneNo" type="text" required="">  
				<br>
				<label id="lable3" style="padding-right: 12px;">Area code</label>
				<label id="lable3">Phone Number</label>
			</div>

			<br>

			<div>
				<label id="label1">Are you a ?</label>

				<br>				
						
				<input onclick="disabledforform1()" type="radio" name="Profession" value="Student">
				<label id="lab1">Student</label> <br>
				<input onclick="disabledforform2()" type="radio" name="Profession" value="Faculty Member">
				<label id="lab1">Faculty Member</label> <br>
				<input type="radio" onclick="disabledforform3()" name="Profession" value="Company/Firm Represenative or Profession">
				<label id="lab1">Company/Firm Represenative or Professional</label> 
							
			</div>

			<br>
			<br>

			<fieldset id="form1">
				<legend>STUDENT SECTION</legend>
			<div>
			<label id="label1">Student ID</label><br>
			<input name="SID" size="25" maxlength="10" type="text" required=""><br>
			<label id="lable2">eg., 18ce032</label>
			</div>

			<br>

			<div>
			<label id="label1">College Email-ID</label><br>
			<input name="SEmailID"  size="25" type="email" required=""><br>
			<label id="lable2">eg., 18ce032@charusat.edu.in</label>
			</div>

			<br>
			

			<div>
			<label id="label1">Current Year Level</label>
			<br>
			<select name="CurrentYearLevel" required="">
				<option value="" hidden=""></option>
				<option value="1">1st Year</option>
				<option value="2">2nd Year</option>
				<option value="3">3rd Year</option> 
				<option value="4">4th Year</option>				
			</select>			
			</div>

			<br>

			<div>
			<label id="label1">Degree Program</label>
			<br>
			<select name="DegreeProgram" required="">
				<option value="" hidden=""></option>
				<option value="CE">B.TECH in COMPUTER ENGG.</option>
				<option value="IT">B.TECH in IT ENGG.</option>
				<option value="EC">B.TECH in ELECTRONIC ENGG.</option>
				<option value="EC">B.TECH in EC ENGG.</option>
				<option value="ME">B.TECH in MECHNICAL ENGG.</option>
				<option value="CL">B.TECH in CIVIL ENGG.</option>
			</select>			
			</div>

			<br>

			<div>
			<label id="label1">University</label><br>
			<input name="SUniversity" size="35" type="text" required=""><br>
			<label id="lable2">eg., Charotar university of Science and Technology, Changa</label>
			</div>

			</fieldset>
			<br>		
			<br>		


			<fieldset id="form2">
			<legend>FACULTY MEMBER SECTION</legend>
			
			<div>
			<label id="label1">Faculty ID</label><br>
			<input name="FID" size="25" maxlength="10" type="text" required=""><br>
			<label id="lable2">eg., P01</label>
			</div>

			<br>

			<div>
			<label id="label1">College Email-ID</label><br>
			<input name="FEmailID" size="25" type="text" required=""><br>
			<label id="lable2">eg., chintanbhatt.ce@charusat.ac.in
			</label>
			</div>

			<br>

			<div>
			<label id="label1">Designation</label><br>
			<input name="FDesignation" size="25" type="text" required=""><br>
			<label id="lable2">eg., Asst. Prof.</label>
			</div>


			<br>

			<div>
			<label id="label1">University</label><br>
			<input name="FUniversity" size="35" type="text" required=""><br>
			<label id="lable2">eg., Charotar university of Science and Technology, Changa</label>
			</div>

			<br>

			</fieldset>	
			<br>		
			<br>		

			<fieldset id="form3">
			<legend>COMPANY/FIRM REPRESENTATIVE SECTION</legend>
			
			<div>
			<label id="label1">Professional Email-ID</label><br>
			<input name="PEmailID" size="25" type="text" required=""><br>
			<label id="lable2">eg., abc@xyz.com</label>
			</div>
			
			<br>

			<div>
			<label id="label1">Designation</label><br>
			<input name="PDesignation" size="25" type="text" required=""><br>
			<label id="lable2">eg., DBA</label>			
			</div>

			<br>

			<div>
			<label id="label1">Company Name</label><br>
			<input name="CompanyName" size="25" type="text" required=""><br>
			<label id="lable2">eg., TCS</label>
			</div>

			<br>

			<div>
			<label id="label1">Company Address</label><br>
			<textarea name="CompanyAddress" rows="4" cols="40" required=""></textarea>			
			</div>

			<br>

			</fieldset>

			<br>
			<br>

			<div>
				<label id="label1">Choose Date &amp; Time</label>
				<br>
				<select name="DateTime" style="padding-right: 8px" required="">
					<option value="" hidden=""></option>
					<option value="14th April &amp; 1200 to 1500">14th April &amp; 1200 to 1500</option>
					<option value="21th April &amp; 1500 to 1800">21th April &amp; 1500 to 1800</option>
					<option value="28th April &amp; 1200 to 1500">28th April &amp; 1200 to 1500</option>		
				</select>
			</div>

			<br>

			<div>
				<label id="label1">What do you expect from this Workshop?</label>
				<br>
				<textarea name="Suggestions" rows="4" cols="50" required=""></textarea>
			</div>

			<br>	
			<br>	
			<br>	

			<div>
				<button type="submit" name="submit">Submit</button>
			</div>

			<br>


		</fieldset>
	</form>
	</div>
	

</body>
</html>
