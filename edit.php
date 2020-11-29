<?php

$conn = mysqli_connect('localhost', 'root', '', 'capstoneviewer');

// check if the connection works
if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}

    if(isset($_GET['edit'])){
        $id = $_GET['edit'];
        $sqledit= "SELECT * FROM students";
        $res = mysqli_query($conn, $sqledit);
        $row = mysqli_fetch_array($res);
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editing</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
<form  id= "form" action="insertbackend.php" class="formContainer" method="post" onsubmit = "return(validation());">
<a class="navbar-brand" ><img src="pictures/logo.JPG" height="80px" width="110px"></a>
  <label>
    <p class="label-txt">capstone name*</p>
    <input  name="C_name" type="text" class="input" value = "<?php echo $row[1]; ?>">
    <div id="first" class="line-box"></div>
  </label>
  <label>
    <p class="label-txt">student first name*</p>
    <input  name="f_name" type="text" class="input" value = "<?php echo $row[0]; ?>">
    <div id="last" class="line-box"></div>
  </label>
  <label>
    <p class="label-txt">student last name*</p>
    <input  name="l_name" type="text" class="input" value = "<?php echo $row[1]; ?>">
    <div id="last" class="line-box"></div>
  </label>
  <label>
    <p class="label-txt">student ID*</p>
    <input  name="sid" type="number" class="input" value = "<?php echo $row[1]; ?>">
    <div id="last" class="line-box"></div>
  </label>

  <label>
    <p class="label-txt">Email*</p>
    <input  name="email" type="email" class="input" value = "<?php echo $row[1]; ?>">
    <div id="email" class="line-box"></div>
  </label>
  <label>
	<p class="label-txt">Major*</p>
	<select id="select" name="major" class="input" value = "<?php echo $row[1]; ?>">
	        <option value="0">--select--</option>
            <option value="ba">Business administration</option>
			<option value="cs">Computer science</option>
			<option value="ism">information sytems management</option>
			<option value="ee">Electrical engineering</option>
			<option value="me">mechanical engineering</option>
			<option value="ce">computer engineering </option>
          </select>
    <div id="last" class="line-box"></div>
  </label>
  <label>
	<p class="label-txt">student's Gender</p>
	<select id="select" name="gender" class="input" value = "<?php echo $row[1]; ?>">
	        <option value="None">--None--</option>
            <option value="Male">Male</option>
			<option value="Female">Female</option>
          </select>
    <div id="last" class="line-box"></div>
  </label>
  <label>
    <p class="label-txt">date of birth*</p>
    <input  name="dob" type="date" class="input" value = "<?php echo $row[1]; ?>">
    <div id="last" class="line-box"></div>
  </label>
  <label>
    <p class="label-txt">year of graduation*</p>
    <input  name="grad" type="number" class="input" value = "<?php echo $row[1]; ?>">
    <div id="last" class="line-box"></div>
  </label>
  <label>
    <p class="label-txt">supervisor last name</p>
    <input  name="sf_name" type="text" class="input" value = "<?php echo $row[1]; ?>">
    <div id="last" class="line-box"></div>
  </label>
  <label>
    <p class="label-txt">supervisor last name</p>
    <input  name="sl_name" type="text" class="input" value = "<?php echo $row[1]; ?>">
    <div id="last" class="line-box"></div>
  </label>
  <label>
  <label>
    <p class="label-txt">supervisor motif</p>
    <input  name="motif" type="text" class="input" value = "<?php echo $row[1]; ?>">
    <div id="last" class="line-box"></div>
  </label>
  <label>
    <p class="label-txt">Project description*</p>
    <input  name="desc" type="text" class="input" value = "<?php echo $row[1]; ?>">
    <div id="last" class="line-box"></div>
  </label>
  <label>
    <p class="label-txt">team name</p>
    <input  name="t-name" type="text" class="input" value = "<?php echo $row[1]; ?>">
    <div id="last" class="line-box"></div>
  </label>

  <button class="btn btn-primary action-btn"  type="submit">INSERT</button>
</form>

</body>
</html>

