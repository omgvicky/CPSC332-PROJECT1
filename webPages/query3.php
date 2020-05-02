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
		<li> <a class="current" href="query3.php"> VICODIN Doctors </a> </li>
		<li> <a href="query4.php"> Doctors  </a> </li>
		<li> <a href="query5.php"> Trigger & Backup   </a> </li>

	</ul>
	</nav>



<div class="queryH1">
  <h1> Doctors who Prescribe VICODIN </h1>
</div>

<!--DOCTORS WHO PRESCRIBE VICODIN TABLE -->
<table>
	<tr>
		<th>First Name </th>
		<th>Last Name </th>
	</tr>

		<?php
		 $query1 = "SELECT p.FirstName, p.LastName
		 						FROM doctor d, person p
							WHERE p.PersonID = d.PersonId AND d.DoctorID IN (SELECT pv.DoctorID
							FROM patientVisit pv
							WHERE pv.VisitID IN (SELECT pvp.VisitID
										FROM PVisitPrescription pvp, prescription s
										WHERE pvp.PrescriptionID = s.PrescriptionID AND s.PrescriptionName = 'Vicodin'));
	";

		 $result = mysqli_query($conn, $query1);
		 $resultCheck = mysqli_num_rows($result);

		 if($resultCheck > 0){
			 while($row = mysqli_fetch_assoc($result)){
		?>
		<tr>
			<td> <?php echo $row['FirstName']; ?> </td>
			<td> <?php echo $row['LastName']; ?> </td>
		</tr>
		<?php
			 }
		 }
		 mysqli_free_result($result);
		 mysqli_close($conn)
		 ?>


	</body>

	</html>
