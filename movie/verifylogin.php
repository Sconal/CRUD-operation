<?php

$password = $_POST['password'];
$name = $_POST['name'];

include 'connection.php';

$sql = "SELECT * FROM admin WHERE name='$name' and password='$password'";
$result =mysqli_query($con,$sql); 

$num = mysqli_num_rows($result);

if($num==1)
{
  session_start();
  $_SESSION['name'] = $name;
  $_SESSION['password'] = $password;
  header('location:maindisplay.php');
}
else
{
  session_start();
  $_SESSION['msg'] = '<h4><b>Invalid username or password!</b></h4>';
  header('location:login.php');
}
?>
