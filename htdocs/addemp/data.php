<style>
.Inserted {
	width: 100%;  
	min-height: 100vh;
	display: -webkit-box;
	display: -webkit-flex;
	display: -moz-box;
	display: -ms-flexbox;
	display: flex;
	font-size: 150px;
	font-family: Raleway-SemiBold;
	font-style: italic;
	flex-wrap: wrap;
	justify-content: center;
	align-items: center;
	padding: 15px;
	background: #d867c6;
	background: -webkit-linear-gradient(45deg, #c77ff2, #e8519e);
	background: -o-linear-gradient(45deg, #c77ff2, #e8519e);
	background: -moz-linear-gradient(45deg, #c77ff2, #e8519e);
	background: linear-gradient(45deg, #b22205, #f2d100);
  
}
</style>

<?php
$conn = mysqli_connect("127.0.0.1", "root", "");

if(!$conn)
{
	echo 'Not connected to server';
	
}
	if(!mysqli_select_db($conn,'tutorial'))
	{
		echo 'db not selected';
		
	}
	
	$State = $_POST['state'];
	$Social = $_POST['find'];
	$Type = $_POST['student'];
	
	$sql = "insert into person(State, SocialMedia, Type) VALUES ('$State', '$Social', '$Type')";
	
	if(!mysqli_query($conn,$sql))
	{
		echo 'Not inserted';
	}
	else
	{
		echo "<div class=\"Inserted\">Thank You!</div>";
	}
	header("refresh:2; url= http://localhost/addemp/IT-Awareness/index.html")
?>

<!--
margin-top: 100px;
    padding: 100px;
    background-color: #F00;
    border: 2px solid #666;
    width: 20px;
    color: #000000;
	font-style: italic;
	font-size: 40px;
	
	font-family: Raleway-SemiBold;
	
	line-height: 1.7;
	color: #666666;
	margin: 0px;
-->
