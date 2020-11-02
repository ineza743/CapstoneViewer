<!DOCTYPE html>
    <head>
        <meta>
        <title>Login </title>
            <!-- Latest compiled and minified CSS -->
            <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
            <link rel="stylesheet" href="index.css">

            <style>
                footer {
      background-color: #f2f2f2;
      padding: 25px;
      margin-top:29%;
    }
            </style>
    </head>
    <body >
    <div id="login">

        <div class="container">

            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-8">
                    <div id="login-box" class="col-md-10">
                        <form  id="login-form" class="form" action="dashboard.php" method="post">
                            <h2 class="text-center text-info">Login Form</h2>
                            <div class="form-group">
                                <label for="username" class="text-info">User name:</label><br>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="text" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="submit" style="background-color:rgb(58, 153, 197); color:black;" name="submit" class="btn btn-info btn-md" value="Login">
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            
        </div>

    </div>


<!--Footer section-->
<section id="footer">

<footer class="container-fluid text-center">
<p> &copy; CapstoneViewer 2020 | Powered by Afsanat </p>
</footer>

</section>

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    </body>
</html>
