<?php  

?>
<html>
<head>
	<title>Student Registration Form</title>
	<link rel="stylesheet" type="text/css" href="style.css">	
</head>

<body class="body">
<div class=" table-align">
	<table>
		<div>Student Registration Form</div>
		<form method="POST" action="step2.php">
			<tr>
				<td>First Name </td> 
				<td>Middle Name </td>
				<td>Last Name </td>
			</tr>
			<tr>
				<td> 
					<input type="text" name="first_name">
				</td>
				<td>  
					<input type="text" name="middle_name">
				</td>
				<td>
					<input type="text" name="last_name">
				</td>
			</tr>
			<tr>
				<th colspan="3">
					<input type="submit" value="Proceed to Step 2">
				</th>
			</tr>

			