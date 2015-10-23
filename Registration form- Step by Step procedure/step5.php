<?php
$fname = $_POST['first_name'];
$mname = $_POST['middle_name'];
$lname = $_POST['last_name'];
$gender = $_POST['gender'];
$month = $_POST['Month'];
$day = $_POST['Day'];
$year = $_POST['Year'];
$program = $_POST['course'];
?>
<head>
	<title>Student Registration Form</title>
	<link rel="stylesheet" type="text/css" href="style.css">	
</head>

<body class="body">
<div class=" table-align">
	<table>
		<div>Student Registration Form</div>
		<form method="POST" action="step6.php">
			<tr>
				<td>First Name </td> 
				<td>Middle Name </td>
				<td>Last Name </td>
			</tr>
			<tr>
				<td> 
					<input type="text" name="first_name" value="<?php echo $fname; ?>">
				</td>
				<td> 
					<input type="text" name="middle_name" value="<?php echo $mname; ?>">
				</td>
				<td>
					<input type="text" name="last_name" value="<?php echo $lname; ?>">
				</td>
			</tr>
			<tr>
				<td>
					Gender
				</td>
				<?php if ($gender=="Male"){ ?>
					<td>
						<input type="radio" name="gender" value="Male" checked>Male
					</td>
					<td>
						<input type="radio" name="gender" value="Female">Female
					</td>
				<?php }else {?>
					<td>
						<input type="radio" name="gender" value="Male" >Male
					</td>
					<td>
						<input type="radio" name="gender" value="Female" checked>Female
					</td>
				<?php } ?>
			</tr>
			<tr>
				<td colspan="3">Birthday</td>
			</tr>
			<tr>
				<td>Month
					<select name="Month">
						<option value = "<?php echo $month; ?>"><?php echo $month; ?></option>
					</select>
				</td>
				<td>Day
					<select name="Day">
					<option value = "<?php echo $day; ?>"><?php echo $day; ?></option>
					</select>
				</td>
			<td>Year
				<select name="Year">
				<option value ="<?php echo $year; ?>"><?php echo $year; ?></option>
				</select>
			</td>
			<tr>
				<td>Program</td>
				<td colspan="2">
					<select name = "course">
						<option value ="<?php echo $program; ?>"><?php echo $program; ?></option>
					</select>
				</td>
			</tr>
			<tr>
				<td colspan="3">Student Type</td>
			</tr>
			<tr>
				<td colspan="3">	
				<input type="radio" name="student_type" value="Full-scholar">Full-scholar
				<br>
				<input type="radio" name="student_type" value="Partial-scholar">Partial-scholar
				<br>
				<input type="radio" name="student_type" value="Payee">Payee
				</td>
			</tr>
			<tr>
				<th colspan="3">
					<input type="submit" value="Proceed to Step 6">	
				</th>
			</tr>
