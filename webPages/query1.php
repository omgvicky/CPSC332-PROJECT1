
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
		<li> <a class="current" href="query1.php"> Records </a> </li>
		<li> <a href="query2.php"> Dr.Robert's Patients </a> </li>
		<li> <a href="query3.php"> VICODIN Doctors </a> </li>
		<li> <a href="query4.php"> Doctors  </a> </li>
		<li> <a href="query5.php"> Trigger & Backup   </a> </li>
	</ul>
	</nav>



<div class="rentals-content queryH1">
  <h1> Office Records </h1>
</div>





<!-- ***** ALL TABLES IN DATABASE ***** -->

<!--DOCTOR TABLE -->
<table>
	<caption> Doctors </caption>

	<tr>
		<th>Doctor ID</th>
		<th>Medical Degree </th>
		<th>Person ID </th>
	</tr>

<?php
 $query1 = "SELECT *
FROM doctor";

 $result = mysqli_query($conn, $query1);
 $resultCheck = mysqli_num_rows($result);

 if($resultCheck > 0){
	 while($row = mysqli_fetch_assoc($result)){
?>

<tr>
	<td> <?php echo $row['DoctorID']; ?> </td>
	<td> <?php echo $row['MedicalDegrees']; ?> </td>
	<td> <?php	echo $row['PersonID']; ?> </td>
</tr>

<?php
	 }
 }
 ?>
</table>



<!--DOCTOR SPECIALTY TABLE -->
<table>
	<caption> Doctor's Specialty </caption>
	<tr>
		<th>Doctor ID</th>
		<th>Specialty ID </th>
	</tr>

<?php
 $query1 = "SELECT *
FROM doctorSpeciality";

 $result = mysqli_query($conn, $query1);
 $resultCheck = mysqli_num_rows($result);

 if($resultCheck > 0){
	 while($row = mysqli_fetch_assoc($result)){
?>

<tr>
	<td> <?php echo $row['DoctorID']; ?> </td>
	<td> <?php echo $row['SpecialityID']; ?> </td>

</tr>

<?php
	 }
 }
 ?>
</table>


<!--PATIENT TABLE -->
<table>
	<caption> Patients</caption>
	<tr>
		<th>Patient ID</th>
		<th>Phone Number </th>
		<th>Date of Birth </th>
		<th>Person ID</th>
	</tr>

<?php
 $query1 = "SELECT *
FROM patient";
 $result2 = mysqli_query($conn, $query1);
 $resultCheck = mysqli_num_rows($result2);

 if($resultCheck > 0){
	 while($row = mysqli_fetch_assoc($result2)){
?>

<tr>
	<td> <?php echo $row['PatientID']; ?> </td>
	<td> <?php echo $row['PhoneNumber']; ?> </td>
	<td> <?php	echo $row['DOB']; ?> </td>
	<td> <?php	echo $row['PersonID']; ?> </td>
</tr>

<?php
	 }
 }
 ?>

</table>


<!-- PatientVisit TABLE -->
<table>
	<caption> Patient Visits </caption>
	<tr>
		<th>Visit ID</th>
		<th>Patient ID </th>
		<th>Doctor ID </th>
		<th>Visit Date</th>
		<th>Doctor's Note</th>
	</tr>

<?php
 $query1 = "SELECT *
FROM patientVisit";
 $result2 = mysqli_query($conn, $query1);
 $resultCheck = mysqli_num_rows($result2);

 if($resultCheck > 0){
	 while($row = mysqli_fetch_assoc($result2)){
?>

<tr>
	<td> <?php echo $row['VisitID']; ?> </td>
	<td> <?php echo $row['PatientID']; ?> </td>
	<td> <?php	echo $row['DoctorID']; ?> </td>
	<td> <?php	echo $row['VisitDate']; ?> </td>
	<td> <?php	echo $row['DocNote']; ?> </td>
</tr>

<?php
	 }
 }
 ?>

</table>


<!-- PERSON TABLE -->
<table>
	<caption> Persons </caption>
	<tr>
		<th>Person ID</th>
		<th>Last Name</th>
		<th>First Name </th>
		<th>Street Address</th>
		<th>City</th>
		<th>State</th>
		<th>Zipcode </th>
		<th>Phone Number </th>
		<th>SSN </th>
	</tr>

<?php
 $query1 = "SELECT *
FROM person";
 $result2 = mysqli_query($conn, $query1);
 $resultCheck = mysqli_num_rows($result2);

 if($resultCheck > 0){
	 while($row = mysqli_fetch_assoc($result2)){
?>

<tr>
	<td> <?php echo $row['PersonID']; ?> </td>
	<td> <?php echo $row['LastName']; ?> </td>
	<td> <?php	echo $row['FirstName']; ?> </td>
	<td> <?php	echo $row['StreetAddress']; ?> </td>
	<td> <?php	echo $row['city']; ?> </td>
	<td> <?php	echo $row['state']; ?> </td>
	<td> <?php	echo $row['zip']; ?> </td>
	<td> <?php	echo $row['PhoneNumber']; ?> </td>
	<td> <?php	echo $row['SSN']; ?> </td>
</tr>

<?php
	 }
 }
 ?>

</table>


<!-- PRESCRIPTION TABLE -->
<table>
	<caption> Prescriptions </caption>
	<tr>
		<th>Prescription ID</th>
		<th>Prescription Name</th>
	</tr>

<?php
 $query1 = "SELECT *
FROM prescription";
 $result2 = mysqli_query($conn, $query1);
 $resultCheck = mysqli_num_rows($result2);

 if($resultCheck > 0){
	 while($row = mysqli_fetch_assoc($result2)){
?>

<tr>
	<td> <?php echo $row['PrescriptionID']; ?> </td>
	<td> <?php echo $row['PrescriptionName']; ?> </td>
</tr>

<?php
	 }
 }
 ?>

</table>


<!-- Patient Visit Prescription TABLE -->
<table>
	<caption> Patient Visits for Prescriptions </caption>
	<tr>
		<th>Visit ID</th>
		<th>Prescription ID</th>
	</tr>

<?php
 $query1 = "SELECT *
FROM PVisitPrescription";
 $result2 = mysqli_query($conn, $query1);
 $resultCheck = mysqli_num_rows($result2);

 if($resultCheck > 0){
	 while($row = mysqli_fetch_assoc($result2)){
?>

<tr>
	<td> <?php echo $row['VisitID']; ?> </td>
	<td> <?php echo $row['PrescriptionID']; ?> </td>
</tr>

<?php
	 }
 }
 ?>

</table>


<!-- PATIENT VISIT TEST TABLE -->
<table>
	<caption> Patient Visits for Tests </caption>
	<tr>
		<th>Visit ID</th>
		<th>Test ID</th>
	</tr>

<?php
 $query1 = "SELECT *
FROM PVisitTest";
 $result2 = mysqli_query($conn, $query1);
 $resultCheck = mysqli_num_rows($result2);

 if($resultCheck > 0){
	 while($row = mysqli_fetch_assoc($result2)){
?>

<tr>
	<td> <?php echo $row['VisitID']; ?> </td>
	<td> <?php echo $row['TestID']; ?> </td>
</tr>

<?php
	 }
 }
 ?>

</table>


<!-- SPECIALTY TABLE -->
<table>
	<caption> Specialties </caption>
	<tr>
		<th>Specialty ID</th>
		<th>Specialty Name</th>
	</tr>

<?php
 $query1 = "SELECT *
FROM speciality";
 $result2 = mysqli_query($conn, $query1);
 $resultCheck = mysqli_num_rows($result2);

 if($resultCheck > 0){
	 while($row = mysqli_fetch_assoc($result2)){
?>

<tr>
	<td> <?php echo $row['SpecialityID']; ?> </td>
	<td> <?php echo $row['SpecialityName']; ?> </td>
</tr>

<?php
	 }
 }
 ?>

</table>


<!-- TEST TABLE -->
<table>
	<caption> Tests </caption>
	<tr>
		<th>Test ID</th>
		<th>Test Name</th>
	</tr>

<?php
 $query1 = "SELECT *
FROM test";
 $result2 = mysqli_query($conn, $query1);
 $resultCheck = mysqli_num_rows($result2);

 if($resultCheck > 0){
	 while($row = mysqli_fetch_assoc($result2)){
?>

<tr>
	<td> <?php echo $row['TestID']; ?> </td>
	<td> <?php echo $row['TestName']; ?> </td>
</tr>

<?php
	 }
 }
 mysqli_free_result($result);
 mysqli_close($conn);
 ?>

</table>





</body>

</html>
