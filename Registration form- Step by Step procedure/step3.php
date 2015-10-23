<?php
$fname = $_POST['first_name'];
$mname = $_POST['middle_name'];
$lname = $_POST['last_name'];
$gender = $_POST['gender'];
?>
<head>
	<title>Student Registration Form</title>
	<link rel="stylesheet" type="text/css" href="style.css">	
</head>

<body class="body">
<div class=" table-align">
	<table>
		<div>Student Registration Form</div>
		<form method="POST" action="step4.php">
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
						<input type="radio" name="gender" value="Male">Male
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
					<option value="-1">
					<option value ="January">January</option>		
					<option value ="February">February</option>
					<option value ="March">March</option>
					<option value ="April">April</option>
					<option value ="May">May</option>
					<option value ="June">June</option>
					<option value ="July">July</option>
					<option value ="August">August</option>
					<option value ="Semptember">September</option>
					<option value ="Octeber">October</option>
					<option value ="November">November</option>
					<option value ="December">December</option>
					</select>
				</td>
				<td>Day
					<select name="Day">
					<option value="-1"></option>
						<?php for ($day = 1; $day <=31; $day++) { ?>
							<option value = "<?php echo $day; ?>"><?php echo $day; ?></option>
						<?php } ?>
					</select>
				</td>
			<td>Year
				<select name="Year">
				<option vlue="-1"></option>
					<?php for ($year = 1980; $year <= 2015; $year++) { ?>
						<option value = "<?php echo $year; ?>"><?php echo $year ?></option>
						<?php } ?>
				</select>
			</td>
			</tr>
			<tr>
			<tr>
				<th colspan="3">
					<input type="submit" value="Proceed to Step 4">	
				</th>
			</tr>
