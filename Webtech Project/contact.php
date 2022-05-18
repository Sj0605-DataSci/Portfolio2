<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost','root','','contact');

// get the post records
$Name = $_POST['Name'];
$EmailID = $_POST['EmailID'];
$Subject = $_POST['Subject'];
$project = $_POST['project'];

// database insert SQL code
$sql = "INSERT INTO 'contact' ('id', 'Name', 'EmailID', 'Subject', 'project') VALUES ('0', '$Name', '$EmailID', '$Subject', '$project')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}

?>