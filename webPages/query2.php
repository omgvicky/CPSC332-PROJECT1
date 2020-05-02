<?php
	include_once 'Connection.php';
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<meta charset="utf-8">
	<title>Project 1</title>
	<link href="style.css" rel="stylesheet" type="text/css" />
	<!--CHANGE FONT-->
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Tauri&display=swap" rel="stylesheet">
</head>

<body>

<!--***CREATED A NAVIGATION BAR ***-->

<nav>
<ul>
	<li> <a href="starter.php"> Home </a> </li>
	<li> <a href="query1.php"> Records </a> </li>
	<li> <a class="current" href="query2.php"> Dr.Robert's Patients </a> </li>
	<li> <a href="query3.php"> VICODIN Doctors </a> </li>
	<li> <a href="query4.php"> Doctors  </a> </li>
	<li> <a href="query5.php"> Trigger & Backup   </a> </li>

</ul>
</nav>


<div class="rentals-content queryH1">
  <h1> Dr.Robert's Patients </h1>
</div>

 <table>
 	<caption> Patients </caption>
 	<tr>
 		<th>First Name </th>
 		<th>Last Name </th>
		<th>Phone Number </th>

 	</tr>



	<?php
	$query1 = " SELECT person.FirstName, person.LastName, person.PhoneNumber
						FROM person

						JOIN patient
						ON person.PersonID= patient.PersonID

						JOIN patientVisit
						ON patient.PatientID = patientVisit.PatientID AND patientVisit.DoctorID = 'RO1002'";
	 $result = mysqli_query($conn, $query1);
	 $resultCheck = mysqli_num_rows($result);

	 if($resultCheck > 0){
		 while($row = mysqli_fetch_assoc($result)){

	?>
	<tr>
		<td> <?php echo $row['FirstName']; ?> </td>
		<td> <?php echo $row['LastName']; ?> </td>
		<td> <?php echo $row['PhoneNumber']; ?> </td>

		<?php
			 }
		 }
		 ?>
</tr>

</body>

</html>
