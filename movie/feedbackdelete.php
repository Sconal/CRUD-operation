<?php 

include 'connection.php';
session_start();
session_destroy();

if (isset($_GET['deleteid']))
{
	$id=$_GET['deleteid'];
	$sql="DELETE FROM contact WHERE id=$id";
	$result=mysqli_query($con,$sql);

	if($result)
	{
		echo "<h1> <center> <i><font color='Violet'>Data Deleted </center></h1></font></i>";
		header('location:feedback.php');

	}

	else
	{
		die(mysqli_error($con));

	}

}


?>