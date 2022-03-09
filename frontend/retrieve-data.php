<?php


if ($_SERVER["REQUEST_METHOD"]=="POST") {

	//put in server address, then username, then password, then database name

	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection, "complaints");

	if ($connection) 
	{
			echo "";
	} 
	else
	{
		die("Connection has failed. Reason: ".
	mysqli_connect_error());
		}

$name= $_POST['DPP'];



$sql="SELECT DPP, DPP, CRB, ACCUSED, OFFENCE, STATUS, CODE
FROM clientdata WHERE DPP LIKE '".$name."'";

$results=mysqli_query($connection, $sql);

}