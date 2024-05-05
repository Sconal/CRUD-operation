<?php 

include 'connection.php';
session_start();
session_destroy();

if (isset($_GET['deleteid']))
{
	$id=$_GET['deleteid'];
	$sql="DELETE FROM movielist WHERE id=$id";
	$result=mysqli_query($con,$sql);

	if($result)
	{
		echo "<h1> <center> <i><font color='Violet'>Data Deleted </center></h1></font></i>";

	}

	else
	{
		die(mysqli_error($con));

	}

}


?>