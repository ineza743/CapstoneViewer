<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Administrator page</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link rel="stylesheet" href="index.css">
</head>

<body style= "background-color: burlywood;">
	
<div class="container-fluid">
		<div class="container">
			<h2 class="text-center" id="title">INSERT Capstone</h2>
 	
			<div class="text-center" class="row">
				<div class="text-center" class="col-md-5">
 					<form  role="form" method="post" action="AdminPage.html">
                         
                     <div class="form-group">
							
                            <input type="text" name="Cname" id="Cname" class="form-control input-lg" placeholder="Capstone name">
                        </div>

                        <div class="form-group">
							
                            <input type="text" name="Teamname" id="Teamname" class="form-control input-lg" placeholder="Team name">
                        </div>

                     <div class="form-group">
							
                            <input type="text" name="fname" id="fname" class="form-control input-lg" placeholder=" Owner first name">
                        </div>


                        <div class="form-group">
							
                            <input type="text" name="lname" id="lname" class="form-control input-lg" placeholder="Owner last name">
                        </div>
												
 							<div class="form-group">
							
								<input type="text" name="username" id="username" class="form-control input-lg" placeholder="username">
							</div>

							<div class="form-group">
							
								<input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address">
							</div>
							<div class="form-group">
						
								<input type="text" name="Lsupervisor" id="Lsupervisor" class="form-control input-lg" placeholder="supervisor last name">
                            </div>
                            
                            <div class="form-group">
						
								<input type="text" name="Fsupervisor" id="Fsupervisor" class="form-control input-lg" placeholder="supervisor first name">
                            </div>

                            <div class="form-group">
						
								<input type="text" name="description" id="description" class="form-control input-lg" placeholder="Capstone description">
							</div>

		
 							<div>
 									<input type="submit" class="btn btn-lg btn-primary"   value="INSERT">
 							</div>
						
					</form>
				</div>

				</div>
			</div>
		</div>
	</div>


<!--Footer section-->
<section id="footer">

    <div class="footer">
        <p> &copy; CapstoneViewer 2020 | Powered by Afsanat </p>
    </div>

</section>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>


