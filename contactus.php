<?php

echo $_POST["name"];echo"<br>";
echo $_POST["email"];echo"<br>";
echo $_POST["message"];echo"<br>";


$name = $_POST['name'];
$contact = $_POST['email'];
$emailid = $_POST['message'];


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
	
	$sql = "INSERT INTO contact(Name, Email, Message) VALUES ('$name', '$contact', '$emailid')";
	
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
	
	echo"<br>"."Current page will be automatically redirected to Registration Page in 0 seconds !!";
	
	header("refresh:0; url=index.php");
}

?>