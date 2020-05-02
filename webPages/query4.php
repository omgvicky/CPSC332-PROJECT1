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
		<li> <a href="query2.php"> Dr.Robert's Patients </a> </li>
		<li> <a href="query3.php"> VICODIN Doctors </a> </li>
		<li> <a class="current" href="query4.php"> Doctors  </a> </li>
		<li> <a href="query5.php"> Trigger & Backup   </a> </li>

	</ul>
	</nav>



<div class="queryH1">
  <h1> Doctors and their Specialties </h1>
</div>

	<p> Note: This page combines the view 3 and view 4</p>



<!--DOCTORS WITH SPECIALTIES-->
 <table>
 	<caption> Doctors with Specialties</caption>
 	<tr>
 		<th>First Name </th>
 		<th>Last Name </th>
		<th>Specialty Name</th>
 	</tr>
	<?php
	 $query1 = "SELECT person.FirstName, person.LastName, speciality.SpecialityName
	 						FROM person
							JOIN doctor
							ON person.PersonID = doctor.PersonID
							JOIN doctorSpeciality
							ON doctorSpeciality.DoctorID = doctor.DoctorID
							JOIN speciality
							ON speciality.SpecialityID = doctorSpeciality.SpecialityID";

	 $result = mysqli_query($conn, $query1);
	 $resultCheck = mysqli_num_rows($result);

	 if($resultCheck > 0){
		 while($row = mysqli_fetch_assoc($result)){

	?>
	<tr>
		<td> <?php echo $row['FirstName']; ?> </td>
		<td> <?php echo $row['LastName']; ?> </td>
		<td> <?php echo $row['SpecialityName']; ?> </td>
	</tr>
	<?php
		 }
	 }
	 ?>
</table>

<!--DOCTORS WITH OR WITHOUT SPECIALTIES -->
 <table>
 	<caption> Doctors with or without Specialties</caption>
 	<tr>
 		<th>First Name </th>
 		<th>Last Name </th>
		<th>Specialty Name</th>
 	</tr>
	<?php
	 $query1 = "SELECT person.FirstName, person.LastName, speciality.SpecialityName
	 						FROM person
							JOIN doctor
							ON person.PersonID = doctor.PersonID
							JOIN doctorSpeciality
							ON doctorSpeciality.DoctorID = doctor.DoctorID
							LEFT JOIN speciality
							ON speciality.SpecialityID = doctorSpeciality.SpecialityID";

	 $result = mysqli_query($conn, $query1);
	 $resultCheck = mysqli_num_rows($result);

	 if($resultCheck > 0){
		 while($row = mysqli_fetch_assoc($result)){

	?>
	<tr>
		<td> <?php echo $row['FirstName']; ?> </td>
		<td> <?php echo $row['LastName']; ?> </td>
		<td> <?php echo $row['SpecialityName']; ?> </td>
	</tr>
	<?php
		 }
	 }
	 mysqli_free_result($result);
	 mysqli_close($conn)
	 ?>
	</table>


</body>

</html>
