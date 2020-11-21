<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserting</title>
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
$capstone = $_POST['C_name'];
$email = $_POST['email'];
$firstname = $_POST['f_name'];
$lastname = $_POST['l_name'];
$stid = $_POST['sid'];
$dob = $_POST['dob'];
$major = $_POST['major'];
$gender = $_POST['gender'];
$sfirstname = $_POST['sf_name'];
$slastname = $_POST['sl_name'];
$desc = $_POST['desc'];
$grad = $_POST['grad'];
$team = $_POST['t-name'];
$motif = $_POST['motif'];


if($major=="ba"){
   $majorID=1;
}
if($major=="cs"){
    $majorID=2;
}
if($major=="ism"){
     $majorID=3;
}
if($major=="ee"){
    $majorID=4;
}
if($major=="me"){
     $majorID=5;
}
if($major=="ce"){
     $majorID=6;
}


// sql querry to insert
$insertSupporter = "INSERT INTO Supporter (capstoneSupporterID,first_name,last_name,motif) VALUES (1,'$sfirstname','$slastname','$motif')";
$insertSupervisor = "INSERT INTO Supervisor (SupporterID) VALUES (1)";
$insertstudent = "INSERT INTO students (StudentID,MajorID,first_name, last_name,date_of_birth,year_of_graduation,email,gender) VALUES ('$stid','$majorID', '$firstname','$lastname','$dob','$grad','$email','$gender')";
$insertcapstone = "INSERT INTO capstone_project (capstoneSupporterID,administratorId, project_name,year_of_accomplishment,team_name,descriptions) VALUES (1, 1,'$capstone','$grad','$team','$desc')";
$insertStudentTeam = "INSERT INTO StudentTeam (StudentID,ProjectID) VALUES ('$stid',1)";

// execute the insert querry
$result1 = mysqli_query($dbconn, $insertSupporter);
$result2 = mysqli_query($dbconn, $insertSupervisor);
$result3 = mysqli_query($dbconn, $insertstudent);
$result4 = mysqli_query($dbconn,$insertcapstone);
//$result5 = mysqli_query($dbconn, $insertStudentTeam);
// check if the querry was executed
if ($result1 && $result2 && $result3 && $result4 ) {
    ?>
    <p style="text-align: center;">User successfully Inserted</p>
    <div class="text-center">
    <a href="index.html"  class="btn btn-primary action-btn">Back</a>
     </div>
    <?php 
} else {
    echo "Error: ". mysqli_error($dbconn);?>
    <div class="text-center">
    <a href=""  class="btn btn-primary action-btn">Fail</a>
    </div>
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