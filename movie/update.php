<?php
include 'connection.php';

session_start();
error_reporting(0);

$id=$_GET['updateid'];
$sql="SELECT * FROM movielist where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result); 
$name=htmlspecialchars($row['Moviename']);
$date=htmlspecialchars($row['ReleaseDate']);
$summary=htmlspecialchars($row['Summary']);
$poster=$row['Poster'];

if(isset($_POST['submit']))
{
$name=$_POST['mname'];
$date=$_POST['date'];
$summary=$_POST['summary'];
$poster=$_POST['upload'];

$sql="UPDATE movielist set
Moviename='$mname',ReleaseDate='$date',Summary='$summary',Poster='$upload'where id=$id";

$result=mysqli_query($con,$sql);

if($result)
{
 echo "updated successfully";
header('location:display.php');
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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <title>Movie form</title>
</head>
<style type="text/css">
    
    input[type=text],select
    {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 2px solid grey;
        border-radius: 5px;
        box-sizing: border-box;
        background-color: rgba(0,0,0,0.4);
    }

    input[type=date],select
    {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 2px solid grey;
        border-radius: 5px;
        box-sizing: border-box;
        background-color: rgba(0,0,0,0.4);
    }

    textarea[id=summary],select
    {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 2px solid grey;
        border-radius: 5px;
        box-sizing: border-box;
        background-color: rgba(0,0,0,0.4);
    }

    input[type=file],select
    {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 2px solid grey;
        border-radius: 5px;
        box-sizing: border-box;
        background-color: rgba(0,0,0,0.4);
    }

    input[type=submit],select
    {
        width: 100%;
        background-color: mediumpurple;
        color: lavender;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 2px solid grey;
        border-radius: 5px;
        
        cursor: pointer;
        border: none;
    }

    input[type=submit]:hover
    {
        background-color: purple;
    }

    div 
    {
        border-radius: 10px;
        background-image: url(update.jpg);
        background-size: 100% 500px;
        background-size: cover;
        padding: 20px;
    }


</style>
<body>
    
    <div>
        <br>
        <br>
        <br>
        <br>
        <center><h1><em>MOVIE FORM</em></h1></center>

        <form method="POST" action="" enctype="multipart/form-data">
            <p><b>Movie Name:</b>
                <input type="text" name="mname" value=<?php echo $name;?>>
            </p>

            <p><b>Release Date:</b>
                <input type="date" name="date" value=<?php echo $date;?>>
            </p>

            <p><b>Summary:</b>
                <textarea id="summary" name="summary" rows="5" cols="33" value=<?php echo $summary;?>></textarea>
            </p>

            <p><b>Poster:</b>
                <input type="file" name="upload" value=<?php echo $poster;?>>
            </p>

            <p>
                <input type="submit" name="submit" value="SUBMIT">
            </p>

            <button class="btn btn-primary my-5">
                <a href="display.php" class="text-light">All Movie List</a>
            </button>

            


        </form>
    </div>

</body>
</html>


