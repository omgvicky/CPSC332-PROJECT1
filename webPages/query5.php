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
		<li> <a href="query4.php"> Doctors  </a> </li>
		<li> <a class="current" href="query5.php"> Trigger & Backup   </a> </li>

	</ul>
	</nav>


<div class="queryH1">
  <h1> Snapshots of the Trigger & Backup </h1>
</div>
	<p> Note: This page combines snapshots for both the trigger creation/run and snapshots for the backup creation/run</p>

<!--TRIGGER -->
<div class="screenshots">
	<h1> Trigger</h1>

	<h2> Creation </h2>
	<h3> SQL Code </h3>
	<img src="imgs/triggerCreation.png"> </img>
	<h3> Snapshot of Triggers on Phpmyadmin </h3>
	<img src="imgs/trigCreation2.png"> </img>

	<h2> Successful Run </h2>
	<img src="imgs/trigRun.png"> </img>
	<img src="imgs/trigCreation2.png"> </img>

	<h2> Successful Entry </h2>
	<h3> Before UPDATE </h3>
	<img src="imgs/trigBeforeUpdate.png"> </img>
	<h3> After UPDATE </h3>
	<img src="imgs/trigAfterUpdate.png"> </img>
	<h3> SQL Code </h3>
	<img src="imgs/trigUpdatesql.png"> </img>
	<h3> Before INSERT </h3>
	<img src="imgs/trigBeforeInsert.png"> </img>
	<h3> After INSERT </h3>
	<img src="imgs/trigAfterInsert.png"> </img>
	<h3> SQL Code </h3>
	<img src="imgs/trigInsertsql.png"> </img>

	<h3> Audit Table </h3>
	<img src="imgs/auditTable.png"> </img>


	<h1> Backup </h1>
	<h2> Creation </h2>
	<h3> SQL Code </h3>
	<img src="imgs/backUpSql.png"> </img>
	<h2> Successful Run </h2>
	<h3> Snapshot of Backup </h3>
	<img src="imgs/backUp.png"> </img>


</div>

</body>

</html>
