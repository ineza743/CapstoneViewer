<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> CapstoneViewer </title>

    
    <!-- Latest compiled and minified CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap.min.css">
    <!-- my external css-->
    <link rel="stylesheet" href="business.css">

</head>
<body style= "background-color: aliceblue;">



 <!--CS-->
    <div style="background-color:white;border: solid burlywood 2px;" class="container">
      <h4 style= "text-align:center;" id="section1"><strong>ELECTRICAL ENGINEERING</strong></h4>

<table class="table" width="1145" border="2">
<thead>
  <tr>
  <th>Capstone project</th>
    <th>First name</th>
    <th>Last name</th>
    <th>email</th>
    <th>gender</th>
    <th>Major name</th>
    <th>graduation date</th>
    <th>Descriptions</th>

</tr>
</thead>

<tbody>


  <?php

  // database connection
$conn = mysqli_connect('localhost', 'root', '', 'capstoneviewer');

// check if the database connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//select all students whose major is business administration
$select = "SELECT * FROM students INNER JOIN major ON students.majorid = major.majorid where students.MajorID=4" ;

//select the associated capstone projects
$selectproject="SELECT capstone_project.project_name, capstone_project.descriptions from capstone_project 
INNER JOIN studentteam ON studentteam.ProjectID=capstone_project.ProjectID 
INNER JOIN students ON studentteam.StudentID=students.StudentID where students.MajorID=4";

$result = mysqli_query($conn, $select);
$resultproject = mysqli_query($conn, $selectproject);

if($result && $resultproject ){
    while( $row = mysqli_fetch_array($result)){
  ?>
  <tr> 
    <?php $rowproject = mysqli_fetch_array($resultproject); ?>
  <td> <?php echo $rowproject[0]; ?></td> 
    <td> <?php echo $row['first_name']; ?></td>
    <td> <?php echo $row['last_name']; ?></td>
    <td> <?php echo $row['email']; ?></td>
    <td> <?php echo $row['gender']; ?></td>

    <td> <?php echo $row['major_name']; ?></td>
    <td> <?php echo $row['year_of_graduation']; ?></td>
    <td> <?php echo $rowproject[1]; ?></td>

  </tr>
<?php
}
}
?>
   
</tbody>
</table>

</div>

<div>
  <p><br></p>
</div>

<!--ME-->
<div style="background-color:white;border: solid burlywood 2px;" class="container">
      <h4 style= "text-align:center;" id="section1"><strong>MECHANICAL ENGINEERING</strong></h4>

<table class="table" width="1145" border="2">
<thead>
  <tr>
  <th>Capstone project</th>
    <th>First name</th>
    <th>Last name</th>
    <th>email</th>
    <th>gender</th>
    <th>Major name</th>
    <th>graduation date</th>
    <th>Descriptions</th>

</tr>
</thead>

<tbody>


  <?php

  // database connection
$conn = mysqli_connect('localhost', 'root', '', 'capstoneviewer');

// check if the database connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//select all students whose major is business administration
$select = "SELECT * FROM students INNER JOIN major ON students.majorid = major.majorid where students.MajorID=5" ;

//select the associated capstone projects
$selectproject="SELECT capstone_project.project_name, capstone_project.descriptions from capstone_project 
INNER JOIN studentteam ON studentteam.ProjectID=capstone_project.ProjectID 
INNER JOIN students ON studentteam.StudentID=students.StudentID where students.MajorID=5";

$result = mysqli_query($conn, $select);
$resultproject = mysqli_query($conn, $selectproject);

if($result && $resultproject ){
    while( $row = mysqli_fetch_array($result)){
  ?>
  <tr> 
    <?php $rowproject = mysqli_fetch_array($resultproject); ?>
  <td> <?php echo $rowproject[0]; ?></td> 
    <td> <?php echo $row['first_name']; ?></td>
    <td> <?php echo $row['last_name']; ?></td>
    <td> <?php echo $row['email']; ?></td>
    <td> <?php echo $row['gender']; ?></td>

    <td> <?php echo $row['major_name']; ?></td>
    <td> <?php echo $row['year_of_graduation']; ?></td>
    <td> <?php echo $rowproject[1]; ?></td>

  </tr>
<?php
}
}
?>
   
</tbody>
</table>

</div>


 

<div>
  <p><br></p>
</div>

 <!--CS-->
 <div style="background-color:white;border: solid burlywood 2px;" class="container">
      <h4 style= "text-align:center;" id="section1"><strong>COMPUTER ENGINEERING</strong></h4>

<table class="table" width="1145" border="2">
<thead>
  <tr>
  <th>Capstone project</th>
    <th>First name</th>
    <th>Last name</th>
    <th>email</th>
    <th>gender</th>
    <th>Major name</th>
    <th>graduation date</th>
    <th>Descriptions</th>

</tr>
</thead>

<tbody>


  <?php

  // database connection
$conn = mysqli_connect('localhost', 'root', '', 'capstoneviewer');

// check if the database connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//select all students whose major is business administration
$select = "SELECT * FROM students INNER JOIN major ON students.majorid = major.majorid where students.MajorID=6" ;

//select the associated capstone projects
$selectproject="SELECT capstone_project.project_name, capstone_project.descriptions from capstone_project 
INNER JOIN studentteam ON studentteam.ProjectID=capstone_project.ProjectID 
INNER JOIN students ON studentteam.StudentID=students.StudentID where students.MajorID=6";

$result = mysqli_query($conn, $select);
$resultproject = mysqli_query($conn, $selectproject);

if($result && $resultproject ){
    while( $row = mysqli_fetch_array($result)){
  ?>
  <tr> 
    <?php $rowproject = mysqli_fetch_array($resultproject); ?>
  <td> <?php echo $rowproject[0]; ?></td> 
    <td> <?php echo $row['first_name']; ?></td>
    <td> <?php echo $row['last_name']; ?></td>
    <td> <?php echo $row['email']; ?></td>
    <td> <?php echo $row['gender']; ?></td>

    <td> <?php echo $row['major_name']; ?></td>
    <td> <?php echo $row['year_of_graduation']; ?></td>
    <td> <?php echo $rowproject[1]; ?></td>

  </tr>
<?php
}
}
?>
   
</tbody>
</table>

</div>


<!--Footer section-->
<section id="footer">

    <div class="footer">
        <p> &copy; CapstoneViewer 2020 | Powered by Afsanat </p>
    </div>

</section>

    
<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- jQuery library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap.min.js"></script>

<script>
  $(".table").DataTable();
</script>
</body>
</html>










