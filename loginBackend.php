
<?php
// create connection
$conn = mysqli_connect('localhost', 'root', '', 'capstoneviewer');

// check connection
if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}

// grab form data
$email = $_POST['email'];
$password = $_POST['pass'];

// write query
$sql = "SELECT * FROM viewer WHERE email = '$email'";

// execute query
$result = mysqli_query($conn, $sql);

// check that exactly 1 row was returned
if (mysqli_num_rows($result) != 1) {
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
