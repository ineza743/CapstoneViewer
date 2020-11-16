
<?php
// create database connection
$conn = mysqli_connect('localhost', 'root', '', 'capstoneviewer');

// check if the connection works
if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}

// grab email and password from the form
$email = $_POST['email'];
$password = $_POST['password'];

// write sql select query
$select = "SELECT * FROM viewer WHERE email = '$email'";

// execute the query
$result = mysqli_query($conn, $select);

// check that exactly 1 row was returned
if (mysqli_num_rows($result) !=1) {
    die('login failed: '.mysqli_error($conn));
}

// get query result as an array
$user = mysqli_fetch_assoc($result);

// verify user password match
$verify_pass = password_verify($password, $user['passwd']);

// set user session if password is verified
if ($verify_pass) {
    session_start();
    $_SESSION['user'] = $user['passwd'];
}
?>
