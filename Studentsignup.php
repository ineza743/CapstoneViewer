<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SignUp</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link rel="stylesheet" href="signup.css">
</head>

<body>
<form action="signupBackend.php" id= "form" class="formContainer" method="post" onsubmit = "return(validation());">
<a class="navbar-brand" ><img src="pictures/logo.JPG" height="80px" width="110px"></a>
  <label>
    <p class="label-txt">First name</p>
    <input  name="f_name" type="text" class="input">
    <div id="first" class="line-box"></div>
  </label>
  <label>
    <p class="label-txt">last name</p>
    <input  name="l_name" type="text" class="input">
    <div id="last" class="line-box"></div>
  </label>

  <label>
    <p class="label-txt">Email</p>
    <input  name="email" type="email" class="input">
    <div id="email" class="line-box"></div>
  </label>
  <label>
    <p class="label-txt">Password</p>
    <input  name="pass" type="password" class="input">
    <div id="pass" class="line-box"></div>
  </label>
  <button class="btn btn-primary action-btn" type="submit">Signup</button>
</form>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
<script src="register.js"></script>
</html>


