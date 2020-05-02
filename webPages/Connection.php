<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "root";
$dbName= "DocOffice";


$conn = mysqli_connect('localhost', 'root', 'root', 'DocOffice');

if(!$conn){
    die('Could not connect: '.mysqli_error());
}
//echo "Connected Successfully! \n";
//mysqli_close($conn);

?>
