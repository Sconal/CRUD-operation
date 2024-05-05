    <?php
   
   include 'connection.php';
   session_start();
 if (isset($_POST['submit']))
   {
  $mname= htmlspecialchars($_POST['mname']);
  $date= htmlspecialchars($_POST['date']);
  $summary= htmlspecialchars($_POST['summary']);
  $filename = $_FILES["upload"]["name"];
    $tempname = $_FILES["upload"]["tmp_name"];
    $folder = "./image/" . $filename;
    if (move_uploaded_file($tempname, $folder)) 
    {
        echo "<h1><center> <font color='lightblue'>Image uploaded successfully!</h1></font></center>";
    } 
    else 
    {
        echo "<h1> Failed to upload image!</h1>";
    }
        $con=mysqli_connect('localhost','root','','movieweb');

        if(mysqli_connect_error())
        {
            echo "Failed to connect to MySQL:".mysqli_connect_error();
        }

        $sql="INSERT INTO movielist (Moviename,ReleaseDate,Summary,Poster)
        VALUES 
        ('$_POST[mname]','$_POST[date]','$_POST[summary]','$filename')";

        if (!mysqli_query($con,$sql))
        {
            die('ERROR:'.mysqli_error($con));
        }

          
        else
        {
            header('location:display.php');
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
    body
    {
        back
    }
    input[type=text],select
    {
        width: 50%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 2px solid grey;
        border-radius: 5px;
        box-sizing: border-box;
    }

    input[type=date],select
    {
        width: 50%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 2px solid grey;
        border-radius: 5px;
        box-sizing: border-box;
    }

    textarea[id=summary],select
    {
        width: 50%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 2px solid grey;
        border-radius: 5px;
        box-sizing: border-box;
    }

    input[type=file],select
    {
        width: 50%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 2px solid grey;
        border-radius: 5px;
        box-sizing: border-box;
    }

    input[type=submit],select
    {
        width: 50%;
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

    .form 
    {
        border-radius: 10px;
        
        padding: 20px;
    }


</style>
<body>
    <center>
    <div class="form">
        <center><h1><em>MOVIE FORM</em></h1> <hr color=purple></center>
    <table border="0" height="500" width="500" bgcolor="yellow">
        <form method="POST" action="" enctype="multipart/form-data">
            <tr>
            <td><b>Movie Name:</b>
                <input type="text" name="mname" required></td>
            </tr>
            
            <tr>
            <td><b>Release Date:</b>
                <input type="date" name="date" required></td>
            </tr>
            
            <tr>
            <td><b>Summary:</b>
                <textarea id="summary" name="summary" rows="5" cols="40" required></textarea></td>
            </tr>
            
            <tr>
            <td><b>Poster:</b>
                <input type="file" name="upload" required></td>
            </tr>
            
            <tr>
            <td style="padding-left: 150px;">
                <input type="submit" name="submit" value="SUBMIT">
            </td>

            </tr>
            
            <button class="btn btn-primary my-3">
                <a href="display.php" class="text-light">All Movie List</a>
            </button>


            


        </form>
    </table>
    </div>
</center>

</body>
</html>



 