<?php
include 'connection.php';
session_start();
error_reporting(0);

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="edit.php">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<title>Add_Admin page</title>
</head>
<body>
	
		<div class="header" style="width: 100%; height: 100px; border-bottom: 2px solid black;">
		    <div class="header-left" style="width: 30%; height: 100px; float: left;">
		    	<h4><img src="1.jfif" width="100" height="100" style="padding: 10px;"><a href="maindisplay.php" style="color: black;">Movie Station</h4>
		    </div>
		    <div class="nav justify-content-end" style="padding-top: 12px; padding-right: 50px;width: 30%; height: 100px; float: right;">
        	<nav class="navbar navbar-expand-sm justify-content-end">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php" style="font-size: 25px; padding-right: 30px;">Logout</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="font-size: 25px;padding-right: 30px;">Add_User</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="movieform.php" style="font-size: 25px;padding-right: 30px;">Add_Movie</a>
                    </li><li class="nav-item">
                        <a class="nav-link" href="edit.php" style="font-size: 25px;padding-right: 30px;">Edit/Update</a>
                    </li><li class="nav-item">
                        <a class="nav-link" href="display.php" style="font-size: 25px;">All_Movies</a>
                    </li>
                </ul>
            </nav>
        </div>
		</div>
		<div class="heading" style="background-color: rgb(141, 247, 169);">
         	<marquee style="font-size: 40px; padding-top: 20px;">Add Username and Password Which You Want !!!</marquee>
	    </div>
        <br>
	    <div class="container">
	        <div class="head" style="text-align: center;">
		        <h1>Register admin for Movie Station....</h1>
	        </div>
	        <form action="adduser.php" method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username" required />
                    <small id="emailHelp" class="form-text text-muted">We'll never share your contacts with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="Password" maxlength="20" minlength="7" required />
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        

</body>
</html>