<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Claims Form</title>
	<style type="text/css">
		label{
			width: 100px;
			display: inline-block;
			margin: 4px;
		}
		table{
			border-collapse: collapse;
		}
		td{
			height: 15px;
		}
		body{
			font-family: Roboto, 'Segoe UI', Tahoma, sans-serif;
    font-size: 81.25%;
		}
	</style>
</head>
<body>
	<?php
	<div class="header">
		<img src ="C:\Users\mpeswadmin\Desktop\Administrative Staff Claims\Images\HeaderLogo.png" width ="1100px" height = "220px">
	</div>
<div>
	<form action="Forms.php" method="post" >
		<div class="container" >
			<h2 ><center>CLAIM FOR REMUNERATION BY PART-TIME ADMINISTRATIVE STAFF</center></h2>
		</div>
		<div label-width = 220px;>
			<div>
  			<label for="title">PARTICULARS OF CLAIMANT: </label>
  			
  				<select id="tite" name="title">
  					<option value="Choose">Choose</option>
    				<option value="Dr">Dr</option>
    				<option value="Mr">Mr</option>
   			 		<option value="Ms">Ms</option>
    
  				</select><br><br>
  				</div>
			<label for="firstname">First Name</label>
			<input type="text" name="firstname" required>

			<label for="lastname">Last Name</label>
			<input type="text" name="lastname" required>
		</div><br>
		<div>
			
			<label for="personnelnumber">Personnel Number</label>
			<input type="number" name="personnelnumber" required>

			<label for="highestqualification:">Highest qualification: </label>
			<input type="text" name="highestqualification:" required>
			</div><br>
			<div>
			<label for="budgetallocation">Budget Allocation.: </label>
			<input type="text" name="budgetallocation" required>

			<label for="IdentityPassportNumber">Identity / Passport Number: </label>
			<input type="text" name="IdentityPassportNumber" required>
			<div><br>

			<div>
			<label for="Tariffperhourday">Tariff per hour/day: </label>
			<input type="text" name="Tariff per hour/day: " required>

			<label for="Address">Address: </label>
			<input type="text" name="Address" required>

			<div><br>

			<div>
			<label for="PAYENumber">PAYE Number: </label>
			<input type="text" name="PAYENumber" required>

			<label for="TelNumber">Tel. Number(s): </label>
			<input type="number" name="TelNumber" required>

			<div><br>

			<div>
			<label for= "PARTICULARS OF CLAIM">PARTICULARS OF CLAIM </label>


			<label for="HRTOTALHOURSCLAIMED" style="position: relative; right: -180px;">HR - TOTAL HOURS CLAIMED: </label>
			<input type="text" name="HR - TOTAL HOURS CLAIMED: " required style="position: relative; right: -180px;">

			<div><br>

			<div>
			<label for="FacultyDepartment">Faculty /Department:</label>
			<input type="text" name="FacultyDepartment" required>

			<label for="Position">Position:  </label>
			<input type="text" name="Position: " required>

			<div><br>
			<table align="center" border="1px;" style="width:600px; line-height: 40px;">

				<th colspan="2"><b>Date<b></th>
				<th><b>Time From - To<b></th>
				<th><b>Hours<b></th>
				<th><b>     <b></th>
				<th><b>N$<b></th>
				<th><b>  <b></th>
				<th><b>FOR OFFICE USE<b>
				<tr></tr>
				<td ></td>
				<td ></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<tr></tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<tr></tr>
				<td ></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<tr></tr>
				<td ></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<tr></tr>
				<td></td>
				<td ></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<tr></tr>
				<td></td>
				<td ></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<tr></tr>
				<td></td>
				<td ></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<tr></tr>
				<td></td>
				<td ></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<tr></tr>
				<td></td>
				<td ></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<tr></tr>
				<td></td>
				<td ></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<tr></tr>
				<td></td>
				<td ></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<tr></tr>
				<td></td>
				<td ></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<tr></tr>
				<td></td>
				<td ></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<tr></tr>
				<td></td>
				<td ></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</table><br><br><br>

			<div>
			<label for="ClaimantSignature">Claimant’s Signature: </label>
			<input type="text" name="ClaimantSignature" required>

			<label for="Date">Date: </label>
			<input type="date" name="Date" required>

			<div><br>

			<div>
			<label for="SignatureofSupervisor">Signature of Supervisor: </label>
			<input type="text" name="SignatureofSupervisor" required>

			<label for="Date">Date: </label>
			<input type="date" name="Date" required>

			<div><br>

			<div>
			<label for="SignatureofDirectorHead">Signature of Director/Head: </label>
			<input type="text" name="SignatureofDirectorHead" required>

			<label for="Date">Date: </label>
			<input type="date" name="Date" required>

			<div><br>

			<div>
			<label for="ProcessedbyPayroll">Processed by Payroll: </label>
			<input type="text" name="ProcessedbyPayroll" required>

			<label for="Date">Date: </label>
			<input type="date" name="Date" required>

			<div><br><br>

			<p><b><u>VERY IMPORTANT:</u></b> <em>"Claims older than 3 months will not be honoured"</em></p><br>

			<p><em>* Kindly specify (mark with x) whether you lectured, tutored, had a meeting or did consulting </em></p>
			<p>Revised: 28/02/2019</p>









			<?php>
		</div>
		
	</form>
</div>
</body>
</html>