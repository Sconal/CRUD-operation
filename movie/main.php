<?php 
include 'connection.php'; 
?>
<!DOCTYPE html>
<html>
<head>
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="main.css">
  <meta charset="UTF-8">
  <meta name="description" content="Download Your Favourite Movie with CROSS CINEMA with Dual Audio and High Defination with One click and 'No pop-up Ads' ">
  <meta name="keywords" content="movie,crosscinema,movies,hd movies,download movies,hindi movies,latest movies,tamil movies,hindi dubbed movies,dual audio movies">
  <meta name="author" content="Talib Khan">
  <title>hello</title>
</head>
 <body>
  <div class="header" style="border-bottom: 1px solid black; height: 100px;background-color: rgb(153, 155, 158);">
    <div class="left-header" >
      <a href="maindisplay.php" style="color: black;">
      Movie Station
    </a>
    </div>
    <div class="right-header">
      <ul>
        <li style="list-style: none;float: right;padding-right: 30px; padding-top: 30px; font-size: 30px;"><a href="contact.php" class="text-white" style="text-decoration: none;">Contact Us</a></li>
        <li style="list-style: none;text-decoration: none; float: right;padding-right: 30px; padding-top: 30px; font-size: 30px;"><a href="contact.php" class="text-white" style=""><a href="logout1.php" class="text-white" style="text-decoration: none;">Logout</a></li>
      </ul>
    </div>
  </div>
  <div class="marquee" style="background-color: black; color: white;">
    <marquee>Get Information About All the Recent Movies !!!!! Only For TESTING Purpose !!!!</marquee>
  </div>
 


<div class="content">
    <div class="row" style="padding-left: 25px; padding-top: 5px; background-image: url(123.jpg);"> 
    <?php 

    $query = "SELECT * FROM movielist";
    $run = mysqli_query($con,$query);
    if ($run) {

        while($row = mysqli_fetch_assoc($run)){
            ?>

<div class="col-sm-3" style="padding-left: 5px; padding-bottom: 10px;">
    <div class="card" style="width: 20rem; text-align: center; border: 1px solid black; font-size: 25px; padding: 5px;">
  <img class="card-img-top" style=" padding-top: 5px;" height="200px" width="200px" src="image/<?php echo$row['Poster']; ?>" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><b><?php echo$row['Moviename']; ?></b></h5>
    <p class="card-text"><b>Summary</b><br><?php echo$row['Summary']; ?></p>
    
    <p class="card-text"><b>Release Date</b><br><?php echo$row['ReleaseDate']; ?></p>
    <?php 

    $id = $row['id'];
    $cal = (($id*123456789*54321)/956783);
    ?>
  </div>
</div>
</div>

            <?php

        }

    }

     ?>
</div>
</div>
<div class="footer">
  <p style="background-color: #628E90"><u><b>CopyRight @2024</b></u></p>
</div>

</body>
</html>
