<?php
$conn = mysqli_connect("127.0.0.1", "root", "");

if(!$conn)
{
	echo 'Not connected to server';
	
}
	if(!mysqli_select_db($conn,'adminlogin'))
	{
		echo 'db not selected';
		
	}
	
	$Name = $_POST['username'];
	$Email = $_POST['email'];
	
	
	$sql = "insert into admin(Name, Email) VALUES ('$Name', '$Email')";
	
	if(!mysqli_query($conn,$sql))
	{
		echo 'Not inserted';
	}
	else
	{
		echo "<div class=\"Inserted\"></div>";
	}
	header("refresh:0; url=http://localhost/addemp/dash/dashboardIT.html")
?>
