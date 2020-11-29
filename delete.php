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
            echo "data Successfully deleted in database <br>";
        }
        else{
            echo "unable to delete the data";
        }
    }




?>