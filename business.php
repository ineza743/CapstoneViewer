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
<body>



 <!--BA-->
    <div class="text-center" style="border: solid 5px black;">
      <h4 id="section1"><strong>Business administration</strong></h4>

<table class="table">
<thead>
  <tr>
    <th>First name</th>
    <th>Last name</th>
    <th>Capstone project</th>
    <th>date</th>
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

$select = "SELECT * FROM students";
$result = mysqli_query($conn, $select);
while($row = mysqli_fetch_assoc($result)){
  ?>
  <tr> 
    <td> <?php echo $row['first_name']; ?></td>
    <td> <?php echo $row['last_name']; ?></td>
    <td> <?php echo $row['email']; ?></td>
    <td> <?php echo $row['year_of_graduation']; ?></td>
  </tr>
  <?php
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



