<?php

// create database connection
$conn = mysqli_connect('localhost', 'root', '', 'capstoneviewer');

// check if the connection works
if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}

    if(isset($_GET['del'])){
        $id = $_GET['del'];
        $sqldelete= "DELETE FROM students where studentID = '$id' ";
        if(mysqli_query($conn, $sqldelete)){
            echo "data Successfully deleted <br>";
        }
        else{
            echo "unable to delete the data";
        }
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <title>Deleting</title>
</head>
<body>
<button class="btn btn-primary action-btn"  type="submit"><a style="color:white;" href="adminBusiness.php">Back to tables</a></button>
</body>
</html>
    

