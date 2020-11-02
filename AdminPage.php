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
<!-- HEADER (NAVBAR) -->
<section id="header">
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
                <a class="navbar-brand" ><img src="logo.JPG" height="90px" width="150px"></a>
               
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ">
                      <a class="nav-link active" href="#">Dashboard </a>
                    </li>

                      <li class="nav-item ">
                        <a class="nav-link" href="statistics.php">Statistics </a>
                      </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="index.html">Logout </a>
                    </li>
                  </ul>
        </div>
        </div> 
      </nav>
</section>



    <div class="col-sm-4 ">
        <!--View-->
        <div class="card">
        <div class="card-body">
            <h5 class="card-title">VIEW</h5>
            <p class="card-text"> You can view all capstone done in Ashesi University by department
            </p>
            <a id="action-btn" href="dashboard.php" class="btn btn-primary action-btn">VIEW</a>
        </div>
        </div>

        <!--Insert-->
        <div class="card">
        <div class="card-body">
            <h5 class="card-title">INSERT</h5>
            <p class="card-text"> You can insert new capstone records here
            </p>
            <a id="action-btn" href="AdminInsert.php" class="btn btn-primary action-btn">Insert</a>
        </div>
        </div>




<!--Footer section-->
<section id="footer">

    <div class="footer">
        <p> &copy; CapstoneViewer 2020 | Powered by Afsanat </p>
    </div>

</section>

    <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>