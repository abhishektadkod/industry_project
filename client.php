<?php

echo $_POST["comname"];echo"<br>";
echo $_POST["uname"];echo"<br>";
echo $_POST["emailid"];echo"<br>";
echo $_POST["phonenum"];echo"<br>";


$comname = $_POST['comname'];
$name = $_POST['uname'];
$emailid = $_POST['emailid'];
$contact = $_POST['phonenum'];



$con = mysqli_connect("localhost","root","","industry_project");

if(mysqli_connect_error())
{
	echo"Failed to connect Database";
	echo"<br>";
}
else
{
	echo"Connected to Database Successfully";
	echo"<br>";
	
	$sql = "INSERT INTO client(Name, Contact, EmailID, CompanyName) VALUES ('$name', '$contact', '$emailid', '$comname')";
	
//	mysqli_query($con,$sql);
	
	if(mysqli_query($con,$sql))
	{
		echo"Insertion Successful";
		echo"<br>";
	}
	else
	{
		echo"Insertion Failed ".$sql."<br>".mysqli_error($con);
		echo"<br>";
	}
		
	mysqli_close($con);
	
	echo"<br>"."Current page will be automatically redirected to Registration Page in 0 second !!";
	
	header("refresh:0; url=index.php");
}

?>