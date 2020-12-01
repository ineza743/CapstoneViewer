<!DOCTYPE html>
<html lang="en">
<head>
  <title>Statistics</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <!-- instyle for footer-->
  <style>
    footer {
      background-color: burlywood;
      padding: 25px;
      margin-top:9%;
    }
    
    .jumbotron {
      background-color: burlywood;
    }
  </style>
</head>
<body>

<?php
// create database connection
$conn = mysqli_connect('localhost', 'root', '', 'capstoneviewer');

// check if the connection works
if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}

?>

<div class="jumbotron">
  <div class="container text-center">
    <h1>Statistics</h1>      
  </div>
</div>
  
<!--first row-->
<div class="container-fluid bg-3 text-center">    
 
  <div class="row">
    <div class="col-sm-3">
      <p>Total capstone projects</p>
      <h1 id="total">0.00</h1>
    </div>
    <div class="col-sm-3"> 
      <p>Computer science capstone projects percentage</p>
      <h1 id="cs">0%</h1>
    </div>
    <div class="col-sm-3"> 
      <p>Engineering capstone total projects percentage</p>
      <h1 id="eng">0%</h1>
    </div>
    <div class="col-sm-3">
      <p>Business administration total capstone projects percentage</p>
      <h1 id="ba">0%</h1>
    </div>
  </div>
</div><br>

<!--second row-->
<div class="container-fluid bg-3 text-center">    
  <div class="row">
    <div class="col-sm-3">
      <p>Total Capstone teams</p>
      <h1 id="sup">0.00</h1>
    </div>
    <div class="col-sm-3"> 
      <p>Male percentage</p>
      <h1 id="male">0%</h1>  
    </div>
    <div class="col-sm-3"> 
      <p>Female percentage</p>
      <h1 id="female">0%</h1>
    </div>
    <div class="col-sm-3">
      <p>Other gender percentage</p>
      <h1 id="other">0%</h1>
    </div>
  </div>
</div><br><br>

     <div class="text-center p-5">
          <a  style="color: white;font-size: large; padding:1%;" href="index.html" class="action-btn btn btn-primary"> Back </a>
        </div>

<footer class="container-fluid text-center">
<p> &copy; CapstoneViewer 2020 | Powered by Afsanat </p>
</footer>

<?php
$total = "SELECT count(distinct project_name) FROM capstone_project";
$totalsd = "SELECT count(StudentID) FROM students";
$femaletotal = "SELECT count(StudentID) FROM students where gender='Female'";
$maletotal = "SELECT count(StudentID) FROM students where gender='Male'";
$othertotal = "SELECT count(StudentID) FROM students where gender<>'Male' AND gender<>'Female'";
$batotal = "SELECT count(StudentID) FROM students where MajorID=1";
$cstotal = "SELECT count(StudentID) FROM students where MajorID=2 || MajorID=3 ";
$engtotal = "SELECT count(StudentID) FROM students where MajorID=4 || MajorID=5 || MajorID=6  ";

// execute the query
$resultcapstone = mysqli_query($conn, $total);
$rowcapstone=mysqli_fetch_array($resultcapstone);

$result = mysqli_query($conn, $totalsd);
$row=mysqli_fetch_array($result);

$resultfemaleperc = mysqli_query($conn, $femaletotal);
$rowfemaleperc=mysqli_fetch_array($resultfemaleperc);

$resultmaleperc = mysqli_query($conn, $maletotal);
$rowmaleperc=mysqli_fetch_array($resultmaleperc);

$resultotherperc = mysqli_query($conn, $othertotal);
$rowotherperc=mysqli_fetch_array($resultotherperc);

$resultba = mysqli_query($conn, $batotal);
$rowmba=mysqli_fetch_array($resultba);

$resultcs = mysqli_query($conn, $cstotal);
$rowcs=mysqli_fetch_array($resultcs);

$resuleng = mysqli_query($conn, $engtotal);
$roweng=mysqli_fetch_array($resuleng);

  ?>

<script>
    document.getElementById('total').textContent = <?php echo $rowcapstone[0] ?>;
    document.getElementById('female').textContent = <?php echo round(($rowfemaleperc[0]/$row[0])*100,2) ?>;
    document.getElementById('male').textContent = <?php echo round(($rowmaleperc[0]/$row[0])*100,2) ?>;
    document.getElementById('other').textContent = <?php echo round(($rowotherperc[0]/$row[0])*100,2) ?>;

    document.getElementById('ba').textContent = <?php echo round(($rowmba[0]/$row[0])*100,2) ?>;
    document.getElementById('cs').textContent = <?php echo round(($rowcs[0]/$row[0])*100,2) ?>;
    document.getElementById('eng').textContent = <?php echo round(($roweng[0]/$row[0])*100,2) ?>;

    document.getElementById('sup').textContent = <?php echo $roweng[0] ?>;
</script>

 

</body>
</html>