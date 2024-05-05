<?php 
include 'connection.php';
session_start();
error_reporting(0);

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="maindisplay.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
	<title>MainDisplay</title>
</head>
<body>
	<div class="header">
	    <div class="header-left">
		    <p><img src="1.jfif" width="75" height="75">Movie Station</p>
        </div>
        <div class="nav justify-content-end" style="padding-top: 12px; padding-right: 50px;">
        	<nav class="navbar navbar-expand-sm justify-content-end">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php" style="font-size: 25px; padding-right: 30px;">Logout</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php" style="font-size: 25px;">Add User</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="content">
        <div class="container mt-3" style="width: 20%; height: 600px; float: left; text-align: center; background-color: lightblue;">
            <div class="d-flex flex-column mb-3">
                <div class="p-2"><a href="movieform.php" style="text-decoration: none; font-size: 20px; color: red;">Add Movie</a></div>
                <br>
                <div class="p-2"><a href="edit.php"style="text-decoration: none; font-size: 20px; color: red;">Edit / Update</a></div>
                <br>
                <div class="p-2"><a href="display.php"style="text-decoration: none; font-size: 20px; color: red; padding-right: 8px;">All Movies</a></div>
                <br>
                <div class="p-2"><a href="feedback.php"style="text-decoration: none; font-size: 20px; color: red; padding-right: 15px;">FeedBack</a></div>
            </div>
        </div>
        <div class="right" style="width: 80%; height: 600px; float: right; text-align: center;">
        	<br>
        	<br>
        	<br>
        	<br>
        	<h1>Welcome To The Admin Page !!!</h1>
        	<br>
        	<h2>Here You Can Do All tHe Changes That You Want.....</h2>
        	<br>
        	<br>
        	
        </div>
    </div>

</body>
</html>
