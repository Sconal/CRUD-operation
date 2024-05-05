<?php 
include 'connection.php';
session_start();
error_reporting(0);

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="display.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<title>Display page</title>
</head>

<body>
	<form method="POST" action="display.php" enctype="multipart/form-data">
		<div class="header" style="width: 100%; height: 100px; border-bottom: 2px solid black;">
		    <div class="header-left" style="width: 30%; height: 100px; float: left; border-bottom: 0px;">
		    	<h4><img src="1.jfif" width="100" height="100" style="padding: 10px;">Movie Station</h4>
		    </div>
		    <div class="nav justify-content-end" style="padding-top: 12px; padding-right: 50px;width: 30%; height: 100px; float: right;">
        	<nav class="navbar navbar-expand-sm justify-content-end">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php" style="font-size: 25px; padding-right: 30px;">Logout</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="adduser.php" style="font-size: 25px;padding-right: 30px;">Add_User</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="movieform.php" style="font-size: 25px;padding-right: 30px;">Add_Movie</a>
                    </li><li class="nav-item">
                        <a class="nav-link" href="edit.php" style="font-size: 25px;padding-right: 30px;">Edit/Update</a>
                    </li><li class="nav-item">
                        <a class="nav-link" href="display.php" style="font-size: 25px; padding-right: 30px;">All_Movies</a>
                    </li>
                    </li><li class="nav-item">
                        <a class="nav-link" href="feedback.php " style="font-size: 25px;">FeedBack</a>
                    </li>
                </ul>
            </nav>
        </div>
		</div>
          
		 <div class="heading" style="background-color: rgb(141, 247, 169);">
		    	<marquee style="font-size: 40px; padding-top: 20px;">Welcome to Edit Page !!!</marquee>
		</div>
		    <br>   


		<div class="container">
			<button class="btn btn-danger my-5">
				<a href="movieform.php" class="text-light">ADD MOVIE</a>
			</button>

			<table class="table" cellpadding="10" style="border:2px solid pink;">
				<thead>
					<tr>
						<th scope="col">SL no</th>
						<th scope="col">Movie Name</th>
						<th scope="col">Release Date</th>
						<th scope="col">Summary</th>
						<th scope="col">Poster</th>
						
					</tr>
				</thead>

				<tbody>
			


			<?php
				$sql="SELECT * from movielist";
$result=mysqli_query($con,$sql);
if($result)
{

while($row=mysqli_fetch_assoc($result))
{



$id=$row['id'];

echo '<tr>
<td>'.$row['id'].'</td>
<td>'.$row['Moviename'].'</td>
<td>'.$row['ReleaseDate'].'</td>
<td>'.$row['Summary'].'</td>';
$imgurl='image/'.$row['Poster'];
?>
<td><img width="100" height="100" src="<?php echo $imgurl;?>" alt="" /></td>
<?php 

}

}
			?>


				</tbody>
			</table>
		</div>
	
	</form>

</body>
</html>
