<?php
include 'connection.php';
session_start();

if(isset($_POST['submit'])){
$email=$_POST['email'];
$pass=$_POST['pass'];
$sql="INSERT INTO `login` (email,pass)values('$email','$pass')";
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
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <style type="text/css">
	body{
		background-color: rgb(177, 250, 243);
		background-image: 
	}
</style>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-secondary p-3 navbar-dark">
	<div class="container-fluid">
    <a class="navbar-brand text-dark" href="#" style="font-size: 25px;">Movie Station</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar" style="font-size: 25px;">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">Policies</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact Us</a>
        </li>    
      </ul>
    </div>
  </div>
</nav>




    <div class="container mt-3 bg-secondary">
  <h2>Login To movie Station</h2>
  <form action="" method="POST" name="frm" enctype="multipart/form-data">
    <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
    </div>
    <div class="mb-3">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pass" placeholder="Enter password" name="pass" required>
    </div>
    <div class="form-check mb-3">
      
    </div>
    <button type="submit" class="btn btn-light" name="submit">Submit</button>
  </form>
</div>
</body>
</html>


