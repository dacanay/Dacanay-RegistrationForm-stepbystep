<?php
$fname = $_POST['first_name'];
$mname = $_POST['middle_name'];
$lname = $_POST['last_name'];
?>
<head>
	<title>Student Registration Form</title>
	<link rel="stylesheet" type="text/css" href="style.css">	
</head>

<body class="body">
<div class=" table-align">
	<table>
		<div>Student Registration Form</div>
		<form method="POST" action="step3.php">
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
				<td>
					<input type="radio" name="gender" value="Male">Male
				</td>
				<td>
					<input type="radio" name="gender" value="Female">Female
				</td>
			</tr>
			<tr>
				<th colspan="3">
					<input type="submit" value="Proceed to Step 3">	
				</th>
			</tr>


			