<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignedUp</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<?php
// database connection
$dbconn = mysqli_connect('localhost', 'root', '', 'capstoneviewer');

// check if the database connection was successful
if (!$dbconn) {
    die("Connection failed: " . mysqli_connect_error());
}


// grab the user entered data
$email = $_POST['email'];
$password = $_POST['pass'];
$firstname = $_POST['f_name'];
$lastname = $_POST['l_name'];


// hash the user password
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// sql querry to insert
$insert = "INSERT INTO viewer (fname, lname,username,passwd,email) VALUES ('$firstname', '$lastname','$firstname.$lastname','$hashedPassword','$email')";

// execute the insert querry
$results = mysqli_query($dbconn, $insert);

// check if the querry was executed
if ($results) {
    echo "User successfully registered";
    ?>
    <a href="login.php"  class="btn btn-primary action-btn">Login</a>
    <a href="index.html"  class="btn btn-primary action-btn">Home</a>
    <?php 
} else {
    echo "Error: " . mysqli_error($dbconn);?>
    <a href="Studentsignup.php"  class="btn btn-primary action-btn">Back</a>
    <?php 
}

//  close connection
mysqli_close($dbconn);
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>