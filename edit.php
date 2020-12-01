<?php

$conn = mysqli_connect('localhost', 'root', '', 'capstoneviewer');

// check if the connection works
if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}


$id = $_GET['edit'];
if(count($_POST)>0) {
    mysqli_query($conn,"UPDATE students set first_name='" . $_POST['f_name'] . "', last_name='" . $_POST['l_name'] . "',email='" . $_POST['email'] . "', year_of_graduation='" . $_POST['grad'] . "' WHERE StudentID='$id'");
    mysqli_query($conn,"UPDATE capstone_project set project_name='" . $_POST['C_name'] . "', descriptions='" . $_POST['desc'] . "' WHERE StudentID='$id'");
}

        $sqledit= "SELECT * FROM students where StudentID = '$id'";
        $sqlproject= "SELECT * FROM studentteam where StudentID = '$id'";

        $res = mysqli_query($conn, $sqledit);
        $row = mysqli_fetch_array($res);

        $resp = mysqli_query($conn, $sqlproject);
        $rowproject = mysqli_fetch_array($resp);
  


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editing</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="signup.css">
</head>
<body>
<button class="btn btn-primary action-btn"  type="submit"><a style="color:white;" href="adminBusiness.php">Back to tables</a></button>
<form  id= "form2" action="<?php $_PHP_SELF ?>" class="formContainer" method="POST" onsubmit = "return(validation());">
<a class="navbar-brand" ><img src="pictures/logo.JPG" height="80px" width="110px"></a>

  <label>
    <p class="label-txt">capstone name*</p>
    <input  name="C_name" type="text" class="input" value = "<?php echo $rowproject[1]; ?>">
    <div id="first" class="line-box"></div>
  </label>
  <label>
    <p class="label-txt">student first name*</p>
    <input  name="f_name" type="text" class="input" value = "<?php echo $row[2]; ?>">
    <div id="last" class="line-box"></div>
  </label>
  <label>
    <p class="label-txt">student last name*</p>
    <input  name="l_name" type="text" class="input" value = "<?php echo $row[3]; ?>">
    <div id="last" class="line-box"></div>
  </label>
  <label>
    <p class="label-txt">student ID*</p>
    <input  name="stid" type="number" class="input" value = "<?php echo $row[0]; ?>">
    <div id="last" class="line-box"></div>
  </label>

  <label>
    <p class="label-txt">Email*</p>
    <input  name="email" type="email" class="input" value = "<?php echo $row[7]; ?>">
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
	<select id="select" name="gender" class="input" value = "<?php echo $row[4]; ?>">
	        <option value="None">--None--</option>
            <option value="Male">Male</option>
			<option value="Female">Female</option>
          </select>
    <div id="last" class="line-box"></div>
  </label>
  <label>
    <p class="label-txt">date of birth*</p>
    <input  name="dob" type="date" class="input" value = "<?php echo $row[5]; ?>">
    <div id="last" class="line-box"></div>
  </label>
  <label>
    <p class="label-txt">year of graduation*</p>
    <input  name="grad" type="number" class="input" value = "<?php echo $row[6]; ?>">
    <div id="last" class="line-box"></div>
  </label>

  <label>
    <p class="label-txt">Project description*</p>
    <input  name="desc" type="text" class="input" value = "<?php echo $rowproject[1]; ?>">
    <div id="last" class="line-box"></div>
  </label>
  <label>
    <p class="label-txt">team name</p>
    <input  name="t-name" type="text" class="input" value = "<?php echo $rowproject[1]; ?>">
    <div id="last" class="line-box"></div>
  </label>

  <button class="btn btn-primary action-btn"  type="submit">SAVE</button>
</form>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
<script src="edit.js"></script>
</html>

