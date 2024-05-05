<?php
include 'connection.php';
session_start();
error_reporting(0);

if(isset($_POST['submit'])){
$f_name=htmlspecialchars($_POST['f_name']);
$s_name=htmlspecialchars($_POST['s_name']);
$email=htmlspecialchars($_POST['email']);
$number=htmlspecialchars($_POST['number']);
$message=htmlspecialchars($_POST['message']);
$sql="insert into `contact` (f_name,s_name,email,number,message)values('$f_name','$s_name','$email','$number','$message')";
$result=mysqli_query($con,$sql);
if($result)
{
echo "data inserted successfully";
header('location:main.php');
}
else
{
die(mysqli_error($con));
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>contact page</title>
	<style>
		body
		{
			margin: 0px;
			padding: 0px;
			background-image: url(contact.jpg);
			width: 100%;
			height: 400px;
		}
		table
		{
			margin:auto;
		}
		input[type="text"]
		{
			width: 300px;
			height: 5px;
			padding: 20px;
			border:solid 2px;
			border-radius: 10px;
			font-size: 18px;
			color: black;
		}
		input[type="email"]
		{
			width: 300px;
			height: 5px;
			padding: 20px;
			border:solid 2px;
			border-radius: 10px;
			font-size: 18px;
			color: black;
		}
		input[type="number"]
		{
			width: 300px;
			height: 5px;
			padding: 20px;
			border:solid 2px;
			border-radius: 10px;
			font-size: 18px;
			color: black;
		}
		textarea 
		{
			width: 300px;
			height: 150px;
			padding: 20px;
			border:solid 2px;
			border-radius: 10px;
			font-size: 18px;
			color: black;
		}
		.btn
		{
			width: 100px;
			height: 50px;
			padding: 15px;
			padding-left:15px;
			margin:10px 10px 10px 10px; 
			background-color: white;
			border-radius: 10px;
			font-size: 18px;
		}
		.btn:hover 
        {
        	background-color: black;
        	color:white;
        }




	</style>
</head>
<body>
	<h1 style="text-align: center; color: white;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CONTACT US</h1>
	<form name="frm" method="post">
		<font size="+2" style="text-align: center;">
		<table border="0">
		  <tr>
		   <td style="color: white;">Your Name:</td><td> <input type="text" name="f_name" placeholder="Your Frist Name" required></td>
		  </tr>
		
		<tr>
		<td style="color: white;">SurName:</td><td> <input type="text" name="s_name" placeholder="Your SurName" required></td>
	    </tr>
	
	    <tr>	
		<td style="color: white;">Email Address:</td><td> <input type="email" name="email" placeholder="Your Email Address" required></td>
		 </tr>
		
		 <tr>
		<td style="color: white;">Phone Number:</td><td> <input type="number" name="number" placeholder="Your Phone Number" required></td>
	    </tr>

		<tr>
		<td style="color: white;">Message us:</td><td> <textarea name="message" placeholder=" Type your message" required></textarea></td>
	    </tr>

	    <tr>
         <td style="color: white;"></td><td><input type="submit" class="btn" name="submit"></td>
         </tr>



	
	</table>
	</font>
</form>


</body>
</html>
