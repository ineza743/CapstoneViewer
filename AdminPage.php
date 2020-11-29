<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Admin page </title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- my external css-->
    <link rel="stylesheet" href="dashboard.css">

</head>
<body>

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
$select = "SELECT * FROM administrator WHERE email = '$email'";

// execute the query
$result = mysqli_query($conn, $select);

// check that exactly 1 row was returned
if (mysqli_num_rows($result) !=1) {
    die('login failed: '.mysqli_error($conn));
}

// get query result as an array
$user = mysqli_fetch_assoc($result);

// verify user password match
$passwordverify=password_verify($password ,$user['passwd']);
// set user session if password is verified

if ($passwordverify) {
    echo '<script>alert("Wrong password for the provided username")</script>';
    ?>

    <button onclick="goBack()">Go Back</button>

<script>
function goBack() {
  window.history.back();
}
</script>
   <?php
}
else{
    session_start();
    $_SESSION['user'] = $user['passwd'];
    ?>




    <!-- HEADER (NAVBAR) -->
    <section id="header">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
                <a class="navbar-brand" ><img src="pictures/logo.JPG" height="50px" width="100px"></a>
               
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ">
                        <a style="color: white;" class="nav-link active" href="index.html">Logout </a>
                    </li>
                  </ul>
        </div>
        </div> 
      </nav>
</section>



    <div class="col-sm-4 ">


        <!--Insert-->
        <div class="card">
        <div class="card-body">
            <h5 class="card-title">INSERT</h5>
            <p class="card-text"> You can insert new capstone records here
            </p>
            <a id="action-btn" href="AdminInsert.php" class="btn btn-primary action-btn">Insert</a>
        </div>
        </div>

                <!--Edit-->
                <div class="card">
        <div class="card-body">
            <h5 class="card-title">VIEW/EDIT/DELETE</h5>
            <p class="card-text"> You can view all capstone done in Ashesi University by department. 
            You can edit existing capstone records here or delete a capstone project
            </p>
            <a id="action-btn" href="dashboard.php" class="btn btn-primary action-btn">Edit</a>
        </div>
        </div>


    <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<?php
}?>

</body>
</html>